<?php
session_start();

// Vérifie si l'utilisateur est connecté, sinon le redirige vers la page de connexion
if(!isset($_SESSION["username"])){
    header("Location: login.php");
    exit(); 
}

// Vous pouvez inclure ici des requêtes pour récupérer les données de l'utilisateur ou d'autres données pertinentes
// par exemple, les demandes de congés de l'utilisateur

// Placeholder pour les informations de l'utilisateur (vous pouvez remplacer cela par vos propres données)
$user_info = array(
    "nom_utilisateur" => "Aya Ben Mabrouk",
    "solde_conges" => 20 // Solde des congés restants pour l'utilisateur
);
?>

<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tableau de bord</title>
    <link rel="stylesheet" href="styles.css"> <!-- Assurez-vous d'avoir le bon chemin vers votre fichier CSS -->
</head>
<body>
    <header>
        <h1>Tableau de bord</h1>
        <p>Bienvenue, <?php echo $user_info["nom_utilisateur"]; ?>!</p>
        <p>Solde des congés restants: <?php echo $user_info["solde_conges"]; ?> jours</p>
        <a href="logout.php">Se déconnecter</a> <!-- Lien pour se déconnecter -->
    </header>
    <main>
        <!-- Placeholder pour le contenu du tableau de bord -->
        <section id="dashboard-content">
            <h2>Historique des demandes de congés</h2>
            <!-- Placeholder pour afficher l'historique des demandes de congés de l'utilisateur -->
        </section>
    </main>
    <footer>
        <p>&copy; 2024 Gestion des congés</p>
    </footer>
</body>
</html>
