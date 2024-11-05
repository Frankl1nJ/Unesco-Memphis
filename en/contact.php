<?php
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);

include("../include/connexion.inc.php");

$message = "";
if (isset($_POST['email']) && isset($_POST['contenu']) && isset($_POST['nom']) && isset($_POST['prenom'])) {
    try {
        $req = $cnx->prepare("INSERT INTO contact (nom, prenom, email, contenu) VALUES (:nom, :prenom, :email, :contenu)");
        $req->bindParam(':nom', $_POST['nom']);
        $req->bindParam(':prenom', $_POST['prenom']);
        $req->bindParam(':email', $_POST['email']);
        $req->bindParam(':contenu', $_POST['contenu']);
        if ($req->execute()) {
            $message = "<p class='success'>Your message has been sent !</p>";
        } else {
            $message = "<p class='error'>Your message could not be sent.</p>";
        }
    } catch (PDOException $e) {
        $message = "<p class='error'>Erreur : " . $e->getMessage() . "</p>";
    }
}
?>
<link rel="stylesheet" href="../css/contact.css">
<section id="contact">
    <form action="qui_sommes_nous.php?lang=fr#contact" method="post">
        <h1>Contact us</h1>
        <label for="nom">Last name*</label>
        <input type="text" name="nom" maxlength="30" required/>
        
        <label for="prenom">First name*</label>
        <input type="text" name="prenom" maxlength="30" required/>
        
        <label for="email">E-mail*</label>
        <input type="email" name="email" maxlength="320" required/>
        
        <label for="contenu">Content of the message*</label>
        <textarea name="contenu" maxlength="1000" required></textarea>
        
        <div class="form-buttons">
            <input type="reset" class="button" name="reset" value="Erase" /> 
            <input type="submit" class="button" name="submit" value="Send" />
        </div>
        <p>* Mandatory fields</p>
        <?php if ($message) echo $message; ?>
    </form>
</section>

