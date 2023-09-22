<?<php
$servername = "localhost";
$username = "root";
$password = "root";

try{
    $bdd = new PDO["mysql:host=$servername;dbname=contact",$username,$password]
    $bdd->setAttribute(PDO::ATTR_ERRMODE,PDO::ERRMODE_EXCEPTION)
}   
catch(PDOException $e){
    echo "erreur :".$e->getMessage();

}

if (isset($_POST['ok'])) {
    $nom = $_POST['nom'];
    $email = $_POST['email'];
    $phone = $_POST['phone'];
    $message = $_POST['note'];

    $requete = $bdd->prepare("INSERT INTO rejoindre VALUE(0, :nom, :email, :phone, :note)");
    $requete->(
        array(
            "nom"=> $nom,
            "email"=> $email,
            "phone"=> $email,
            "note"=> $note,
        )
    );
    echo"Merci votre demande a ete envoye!";
}

?>