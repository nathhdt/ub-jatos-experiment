<?php

session_start();
$_SESSION['loggedin'] = "notsure";

$user = $_POST['user'];
$pass = $_POST['pass'];

if($user == "lead" && $pass == "Lead007_")
{
		$_SESSION['loggedin'] = "loggedin";
        include("SHcgM2FDgEgBzZer.php");
}
else
{
	$_SESSION['loggedin'] = "notlogged";
    if(isset($_POST)): ?>

            <form method="POST" action="index.php">
            Utilisateur <input type="text" name="user"></input><br/>
            Mot de passe <input type="password" name="pass"></input><br/>
            <input type="submit" name="submit" value="Go"></input>
            </form>
	
	<?php endif;

}

?>