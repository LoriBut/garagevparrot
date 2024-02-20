<?php


// Vérifier si le formulaire a été soumis
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Récupérer les données du formulaire
    $name = $_POST["name"];
    $email = $_POST["email"];
    $phone = $_POST["phone"];
    $message = $_POST["message"];

    // Valider et insérer les données dans la base de données
    if (!empty($name) && !empty($email) && !empty($phone) && !empty($message)) {
        // Connexion à la base de données
        $conn = openDatabaseConnection();

        // Échapper les données pour éviter les injections SQL
        $name = mysqli_real_escape_string($conn, $name);
        $email = mysqli_real_escape_string($conn, $email);
        $phone = mysqli_real_escape_string($conn, $phone);
        $message = mysqli_real_escape_string($conn, $message);

        // Requête SQL pour insérer les données dans la table
        $sql = "INSERT INTO form (nom, email, telephone, message) VALUES ('$name', '$email', '$phone', '$message')";

        // Exécuter la requête
        if (mysqli_query($conn, $sql)) {
            echo "Les données ont été enregistrées avec succès dans la base de données.";
        } else {
            echo "Erreur lors de l'enregistrement des données : " . mysqli_error($conn);
        }

        // Fermer la connexion à la base de données
        closeDatabaseConnection($conn);
    } else {
        echo "Veuillez remplir tous les champs du formulaire.";
    }
}

// Fonction pour ouvrir la connexion à la base de données
function openDatabaseConnection() {
    $servername = "localhost";
    $username = "myroot";
    $password = "Lori07012002@07";
    $dbname = "formulaire";

    $conn = mysqli_connect($servername, $username, $password, $dbname);

    if (!$conn) {
        die("La connexion à la base de données a échoué : " . mysqli_connect_error());
    }

    return $conn;
}

// Fonction pour fermer la connexion à la base de données
function closeDatabaseConnection($conn) {
    mysqli_close($conn);
}
?>
