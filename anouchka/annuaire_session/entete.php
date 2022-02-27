<nav>
    <ul>
        <li><a href="login.php">Accueil</a></li>
        <li><a href="users.php">Liste des membres</a></li>
        <li><a href="documents.php">Documents</a></li>
        <li><a href="moncompte.php">Mon compte</a></li>
        <?php
// on la démarre :)
//session_start ();
// On récupère nos variables de session
if (isset($_SESSION['numsecu']) && isset($_SESSION['password'])) {

   ?>
   <li>Bonjour <?php echo $_SESSION['nom'].' '.$_SESSION['prenom']; ?> </li>
   <li><a href="deconnexion.php">Se déconnecter</a></li>
   <?php
}else{  ?>
    <li><a href="login.php">Se connecter</a></li>
    <?php
    }
?>
  
    </ul>
</nav>