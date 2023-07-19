/***********************************
DIV CACHÉ LISTE PAGE 
*********************************/

document.addEventListener('DOMContentLoaded', function() {
    var hiddenDiv = document.getElementById('hidden-div');
    var showDivButton = document.getElementById('show-div');
    var isHidden = true;

    showDivButton.addEventListener('click', function() {
      if (isHidden) {
        hiddenDiv.style.display = 'block';
        isHidden = false;
      } else {
        hiddenDiv.style.display = 'none';
        isHidden = true;
      }
    });
  });

  /***********************
   CRITERES DE RECHERCHE
   **************************/

  /*
function updateCritere(elementId) {
  var selectedOption = document.getElementById(elementId);
  var selectedText = selectedOption.options[selectedOption.selectedIndex].text;
  document.querySelector('.hidden-divSpan').textContent = selectedText;
}*/
/**------------FONCTIONE SANS LE BOUTON ELIMINER---------- */

function updateCritere(elementId) {
  var selectedOption = document.getElementById(elementId);
  var selectedText = selectedOption.options[selectedOption.selectedIndex].text;
  var critereRecherche = document.getElementById("critereRecherche");
  
   // Verifier si le critère est déjà séleccionné
   if (critereRecherche.textContent.includes(selectedText)) {
    return; // Sortir de la function si il est déjà séleccionné
}

// Créer le span pour le critère séleccionné
var newSpan = document.createElement("span");
newSpan.className = "criterioSpan";
newSpan.textContent = selectedText;

  // Creer le button éliminer
  var deleteButton = document.createElement("button");
  deleteButton.innerHTML = "x";
  deleteButton.className = "deleteButton";
  deleteButton.onclick = function() {
      deleteCriterio(newSpan);
  };

  // Ajouter le texte du critère séleccionné 
  if (critereRecherche.textContent === "Critères recherche") {
    critereRecherche.textContent = selectedText;
} else {
    critereRecherche.textContent += ", " + selectedText ;
}
}

function deleteCriterio(deleteButton) {
  var span = deleteButton.parentNode;
  span.parentNode.removeChild(span);

  

  // Verifier s'il y a un autre critère séleccionné
  var criterios = critereRecherche.getElementsByClassName("criterioSpan");
  if (criterios.length === 0) {
    critereRecherche.style.visibility = "visible";
  }

}
/**-------------------- 
function updateCritere(elementId) {
  var selectedOption = document.getElementById(elementId);
  var selectedText = selectedOption.options[selectedOption.selectedIndex].text;
  var critereRecherche = document.getElementById("critereRecherche");

  // Verificar si el criterio ya está seleccionado
  if (critereRecherche.textContent.includes(selectedText)) {
    return; // Salir de la función si ya está seleccionado
  }

  // Crear el span para el criterio seleccionado
  var newSpan = document.createElement("span");
  newSpan.className = "criterioSpan";
  newSpan.textContent = selectedText;

  // Crear el botón de eliminación
  var deleteButton = document.createElement("button");
  deleteButton.innerHTML = "x";
  deleteButton.className = "deleteButton";
  deleteButton.onclick = function() {
    deleteCriterio(newSpan);
  };

  // Agregar el botón de eliminación al span del criterio seleccionado
  newSpan.appendChild(deleteButton);

  // Agregar el nuevo span al span de critereRecherche
  critereRecherche.appendChild(newSpan);

  // Mostrar el span critereRecherche si estaba oculto
  critereRecherche.textContent.style.visibility = "hidden";
}

function deleteCriterio(span) {
  var critereRecherche = document.getElementById("critereRecherche");

  // Eliminar el span del criterio seleccionado
  critereRecherche.removeChild(span);

  // Verificar si hay otros criterios seleccionados
  var criterios = critereRecherche.getElementsByClassName("criterioSpan");
  if (criterios.length === 0) {
    critereRecherche.style.visibility = "hidden";
  }
}
*/


/***********************************
DIV CACHÉ PROFIL PAGE 
*********************************/

document.addEventListener('DOMContentLoaded', function() {
  // Obtenir les references des elements
const button1 = document.getElementById("button1");
const button2 = document.getElementById("button2");
const content1 = document.getElementById("content1");
const content2 = document.getElementById("content2");

// Ajouter un event de click aux buttons
button1.addEventListener("click", function() {
  content1.style.display = "block";
  content2.style.display = "none";
});

button2.addEventListener("click", function() {
  content1.style.display = "none";
  content2.style.display = "block";
});
});


/***********************************
        ADMINISTRATEUR PAGE 
*********************************/

/**GESTION LISTE, CREER LISTE, button eliminer, EDITER */

// Function pour éliminer une ligne en cliquant sur le button  "Eliminer"
function eliminarFila(event) {
  event.preventDefault();
  var fila = event.target.closest('tr');
  fila.remove();
}

// Ajouter un controleur de event aux buttons "Eliminer" existents
var botonesEliminar = document.querySelectorAll('.eliminerListeProspect');
botonesEliminar.forEach(function(boton) {
  boton.addEventListener('click', eliminarFila);
});


// Function pour éditer une ligne en cliquant sur le button  "Editer"
function editarFila(event) {
  event.preventDefault();
  var fila = event.target.closest('tr');
  var celdas = fila.querySelectorAll('td');

  celdas.forEach(function(celda, index) {
      if (index !== celdas.length - 1) {
          var valor = celda.textContent;
          celda.innerHTML = '<input type="text" value="' + valor + '" class="edit-input">';
      }
  });

  // Changer le texte a  "Guardar"
  event.target.textContent = 'Guardar';
  // Changer le event click du buton a  guardarFila
  event.target.removeEventListener('click', editarFila);
  event.target.addEventListener('click', guardarFila);

  //modififier le width des inputs d'edition
  var inputsEdicion = fila.querySelectorAll('input.edit-input');
    inputsEdicion.forEach(function(input) {
        input.style.width = '90%';
    });

}

// Function pour garder les changements dans une ligne en cliquant sur le button  "Guardar"
function guardarFila(event) {
  event.preventDefault();
  var fila = event.target.closest('tr');
  var celdas = fila.querySelectorAll('td');

  celdas.forEach(function(celda, index) {
      if (index !== celdas.length - 1) {
          var valor = celda.querySelector('input').value;
          celda.innerHTML = valor;
      }
  });

  // Changer le texte du button a "Editer"
  event.target.textContent = 'Editer';
  // Changer le event click du button a editarfila 
  event.target.removeEventListener('click', guardarFila);
  event.target.addEventListener('click', editarFila);
}

// Ajouter un controller de events aux buttons  "Editer" existents
var botonesEditar = document.querySelectorAll('.editerListeProspect');
botonesEditar.forEach(function(boton) {
    boton.addEventListener('click', editarFila);
});



    document.querySelector('.ajouterListeProspect').addEventListener('click', function(event) {
        event.preventDefault();

        var nom = document.querySelector('.inputListeProspect:nth-of-type(1)').value;
        var description = document.querySelector('.inputListeProspect:nth-of-type(2)').value;
        var dateCreation = document.querySelector('.inputListeProspect:nth-of-type(3)').value;
        var utilisateurs = document.querySelector('.inputListeProspect:nth-of-type(4)').value;

        var table = document.querySelector('.gestionListeProspectsTable tbody');

        var newRow = document.createElement('tr');
        newRow.innerHTML = '<td>' + nom + '</td>' +
                           '<td>' + description + '</td>' +
                           '<td>' + dateCreation + '</td>' +
                           '<td>' + utilisateurs + '</td>' +
                           '<td>' +
                               '<button class="editerListeProspect">Editer</button>' +
                               '<button class="eliminerListeProspect">Eliminer</button>' +
                           '</td>';

        table.appendChild(newRow);

        // Nettoyer les inputs après avoir ajouté la nouvelle ligne 
        document.querySelector('.formListeProspect').reset();

        // Ajouter un controller de events au button  "Eliminer"
        newRow.querySelector('.eliminerListeProspect').addEventListener('click', eliminarFila);

        //  Ajouter un controller de events au button "Editer"
        newRow.querySelector('.editerListeProspect').addEventListener('click', editarFila);
    });


    /**GESTION PROSPECT, AJOUTER PROSPECT, button eliminer EDITER */

// Ajouter un controller de events aux buttons "Eliminer" existents
var botonesEliminar = document.querySelectorAll('.eliminerProspect');
botonesEliminar.forEach(function(boton) {
  boton.addEventListener('click', eliminarFila);
});


// Ajouter un controller de events aux buttons "Editer" existents
var botonesEditar = document.querySelectorAll('.editerProspect');
botonesEditar.forEach(function(boton) {
    boton.addEventListener('click', editarFila);
});


    document.querySelector('.ajouterProspect').addEventListener('click', function(event) {
        event.preventDefault();

        var nom = document.querySelector('.inputProspect:nth-of-type(1)').value;
        var email = document.querySelector('.inputProspect:nth-of-type(2)').value;
        var telephone = document.querySelector('.inputProspect:nth-of-type(3)').value;

        var table = document.querySelector('.gestionProspectsTable tbody');

        var newRow = document.createElement('tr');
        newRow.innerHTML = '<td>' + nom + '</td>' +
                           '<td>' + email + '</td>' +
                           '<td>' + telephone + '</td>' +
                           
                           '<td>' +
                               '<button class="editerProspect">Editer</button>' +
                               '<button class="eliminerProspect">Eliminer</button>' +
                           '</td>';

        table.appendChild(newRow);

        // Nettoyer les inputs après avoir ajouté la nouvelle ligne
        document.querySelector('.formProspect').reset();

        // Ajouter un controller de events au button "Eliminer"
        newRow.querySelector('.eliminerProspect').addEventListener('click', eliminarFila);

        // Ajouter un controller de events au button "Editer"
        newRow.querySelector('.editerProspect').addEventListener('click', editarFila);
    });



    /**GESTION CATEGORIE, AJOUTER CATEGORIE, button eliminer EDITER */

// Ajouter un controller de events aux buttons "Eliminer" existents
var botonesEliminar = document.querySelectorAll('.eliminerCategorie');
botonesEliminar.forEach(function(boton) {
  boton.addEventListener('click', eliminarFila);
});


// Ajouter un controller de events aux buttons "Editer" existents
var botonesEditar = document.querySelectorAll('.editerCategorie');
botonesEditar.forEach(function(boton) {
    boton.addEventListener('click', editarFila);
});


    document.querySelector('.ajouterCategorie').addEventListener('click', function(event) {
        event.preventDefault();

        var categorie = document.querySelector('.inputCategorie:nth-of-type(1)').value;
        var liste = document.querySelector('.inputCategorie:nth-of-type(2)').value;
        

        var table = document.querySelector('.gestionCategoriesTable tbody');

        var newRow = document.createElement('tr');
        newRow.innerHTML = '<td>' + categorie + '</td>' +
                           '<td>' + liste + '</td>' +
                           
                           
                           '<td>' +
                               '<button class="editerCategorie">Editer</button>' +
                               '<button class="eliminerCategorie">Eliminer</button>' +
                           '</td>';

        table.appendChild(newRow);

        // Nettoyer les inputs après avoir ajouté un nouvelle ligne
        document.querySelector('.formCategories').reset();

        //Ajouter un controller de events au button  "Eliminer"
        newRow.querySelector('.eliminerCategorie').addEventListener('click', eliminarFila);

        // Ajouter un controller de events au button "Editer"
        newRow.querySelector('.editerCategorie').addEventListener('click', editarFila);
    });


    /**GESTION UTILISATEURS, AJOUTER UTILISATEUR, button eliminer EDITER */

// Ajouter un controller de events aux buttons "Eliminer" existents
var botonesEliminar = document.querySelectorAll('.eliminerUtilisateur');
botonesEliminar.forEach(function(boton) {
  boton.addEventListener('click', eliminarFila);
});


// Ajouter un controller de events aux buttons "Editer" existents
var botonesEditar = document.querySelectorAll('.editerUtilisateur');
botonesEditar.forEach(function(boton) {
    boton.addEventListener('click', editarFila);
});


    document.querySelector('.ajouterUtilisateur').addEventListener('click', function(event) {
        event.preventDefault();

        var categorie = document.querySelector('.inputUtilisateur:nth-of-type(1)').value;
        var nom = document.querySelector('.inputUtilisateur:nth-of-type(2)').value;
        var username = document.querySelector('.inputUtilisateur:nth-of-type(3)').value;
        var password = document.querySelector('.inputUtilisateur:nth-of-type(4)').value;
        var email = document.querySelector('.inputUtilisateur:nth-of-type(5)').value;
        var siteweb = document.querySelector('.inputUtilisateur:nth-of-type(6)').value;

        var table = document.querySelector('.gestionUtilisateursTable tbody');

        var newRow = document.createElement('tr');
        newRow.innerHTML = '<td>' + categorie + '</td>' +
                           '<td>' + nom + '</td>' +
                           '<td>' + username + '</td>' +
                           '<td>' + password + '</td>' +
                           '<td>' + email + '</td>' +
                           '<td>' + siteweb + '</td>' +
                           
                           '<td>' +
                               '<button class="editerUtilisateur">Editer</button>' +
                               '<button class="eliminerUtilisateur">Eliminer</button>' +
                           '</td>';

        table.appendChild(newRow);

        // Nettoyer les inputs après avoir ajouté une nouvelle ligne
        document.querySelector('.formUtilisateurs').reset();

        // Ajouter un controller de events au button "Eliminer"
        newRow.querySelector('.eliminerUtilisateur').addEventListener('click', eliminarFila);

        // Ajouter un controller de events au button "Editer"
        newRow.querySelector('.editerUtilisateur').addEventListener('click', editarFila);
    });











