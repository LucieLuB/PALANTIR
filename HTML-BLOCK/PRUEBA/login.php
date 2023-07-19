
<?php /*
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    // Obtener los datos ingresados por el usuario
    if (isset($_POST['username']) && isset($_POST['password'])) {
        $username = $_POST['username'];
        $password = $_POST['password'];

        // Cargar el archivo JSON
        $jsonData = file_get_contents('usuarios.json');
        $usuarios = json_decode($jsonData, true);

        // Verificar si el usuario y la contraseña coinciden
        if (isset($usuarios[$username]) && $usuarios[$username] === $password) {
            echo "Inicio de sesión exitoso. ¡Bienvenido, $username!";
        } else {
            echo "Nombre de usuario o contraseña incorrectos.";
        }
    } else {
        echo "Por favor, completa todos los campos del formulario.";
    }
}*/
?>

<?php
session_start();

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    // Obtener los datos ingresados por el usuario
    if (isset($_POST['username']) && isset($_POST['password'])) {
        $username = $_POST['username'];
        $password = $_POST['password'];

        // Cargar el archivo JSON
        $jsonData = file_get_contents('usuarios.json');
        $usuarios = json_decode($jsonData, true);

        // Verificar si el usuario y la contraseña coinciden
        if (isset($usuarios[$username]) && $usuarios[$username] === $password) {
            // Inicio de sesión exitoso
            $_SESSION['username'] = $username; // Guardar el nombre de usuario en la sesión
            header("Location: ../LISTE/listePage.php");
            exit();
        } else {
            // Credenciales incorrectas
            $_SESSION['error_message'] = "Username ou Password incorrect";
            header("Location: index.php");
            exit();
        }
    }
}
?>


