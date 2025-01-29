<?php
session_start();

// Vérifie si l'utilisateur est déjà connecté, le redirige vers le tableau de bord
if(isset($_SESSION['username'])) {
    header("Location: dashboard.php");
    exit;
}

// Vérifie si le formulaire de connexion a été soumis
if($_SERVER["REQUEST_METHOD"] == "POST") {
    // Vos informations d'identification de l'utilisateur à vérifier
    $username = "admin"; // Remplacez par votre nom d'utilisateur
    $password = "password"; // Remplacez par votre mot de passe

    // Récupère les données du formulaire
    $input_username = $_POST['username'];
    $input_password = $_POST['password'];

    // Vérifie les informations d'identification
    if($input_username === $username && $input_password === $password) {
        // Informations d'identification valides, redirige vers le tableau de bord et définit une session
        $_SESSION['username'] = $username;
        header("Location: dashboard.php");
        exit;
    } else {
        // Informations d'identification incorrectes, affiche un message d'erreur
        $error = "Nom d'utilisateur ou mot de passe incorrect.";
    }
}
?>

<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Connexion</title>
    <link rel="stylesheet" href="styles.css"> 
</head>
<body>
    <header>
        <h1>Connexion</h1>
    </header>
    <main>
        <section id="login">
            <form action="" method="post">
                <input type="text" name="username" placeholder="Nom d'utilisateur" required>
                <input type="password" name="password" placeholder="Mot de passe" required>
                <button type="submit">Se connecter</button>
            </form>
            <?php if(isset($error)) { ?>
                <p class="error"><?php echo $error; ?></p>
            <?php } ?>
        </section>
    </main>
    <footer>
        <p>&copy; 2024 Gestion des congés</p>
    </footer>
</body>
</html>
