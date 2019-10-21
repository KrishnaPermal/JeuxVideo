<?php

/*$bdd = new PDO('mysql:host=localhost;dbname=test', 'root', ''); // Sert à faire la connexion entre php et la base de données mysql
//On indique qu'on va appelé mysql ; mysql présent sur notre ordinateur donc (localhost); indique que la base de données se nomme 'test' ; que notre login est 'root' ; on indique qu'il n'y a pas de mot de passe !

//On appel la bdd en récupérant les données insérer dans la table jeux_vidéo
$reponse = $bdd->query('SELECT * FROM jeux_video'); // on fait une requête (query) ; récupere tout les champs (*) dans la table jeux_vidéo et  dire tout ce qu'il a dedans ; on stock dans la variable $reponse
while ($donnees = $reponse->fetch()) // boucle while s'exécute tant qu'il y a des données qu'on à récupérer
{
    echo '<p>'.$donnees['console'].'-'. $donnees['nom'] . '</p>'; // séléctionne que les données de 'console' et de 'nom'
}
//**********************************************LES ERREURS SUR LA FONCTION fetch()**********************************************************************************/

/*$bdd = new PDO('mysql:host=localhost;dbname=test', 'root', 'roo');  // erreur dans le mot de passe 'roo'

$reponse = $bdd->query('SELECT * FROM jeux_vido'); // erreur dans la requête sql jeux_vido
while ($donnees = $reponse->fetch()) 
{
    echo '<p>'.$donnees['console'].'-'. $donnees['nom'] . '</p>'; 
}
//***********************************************AJOUT D'UN NOUVEAU PARAMETRE****************************************************************************************/

$bdd = new PDO('mysql:host=localhost;dbname=test', 'root',); //Tableau (Quand il va y avoir une erreur alors l'outils va générer une exeption)

$reponse = $bdd->query('SELECT * FROM jeux_video'); //erreur dans la requête sql (jeux_vido)
while ($donnees = $reponse->fetch()) 
{
    echo '<p>'.$donnees['console'].'-'. $donnees['nom'] . '</p>'; 
}
?>