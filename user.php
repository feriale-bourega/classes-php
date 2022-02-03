<?php

$DB_SERVER ='localhost';
$DB_USERNAME = 'root';
$DB_PASSWORD = '';
$DB_NAME = 'classes';

// Connexion à la base de données MYSQL
$conn = mysqli_connect($DB_SERVER, $DB_USERNAME, $DB_PASSWORD, $DB_NAME);
// Vérifier la connexion
if($conn === false) {
    die ("ERREUR : Impossible de se connecter. " .
    mysqli_connect_error());
}
mysqli_query($bdd, "INSERT INTO utilisateurs(login, password, email, firstname, lastname) VALUES ('$login', '$password', '$email', 'firstname', '$lastname')");
$valid = true;
// Création d'une session une fois les données récupérées//
$select = mysqli_query($conn, "SELECT * FROM utilisateurs WHERE Login = '$login'");
$resultat = mysqli_fetch_all($select, MYSQLI_ASSOC);



class user {
    private $id;
    public $login;
    public $email;
    public $firstname;
    public $lastname;
    
    public function  _ construct{

    }

    public function register(){
        $this -> login = $login;
        $this -> password = $password;
        $this -> email = $email;
        $this -> firstname = $firstname;
        $this -> lastname = $lastname;
    }

    public function connect(){
        $this -> login = $login;
        $this -> password = $password;
    }

    public function disconnect(){

    }

    public function delete() {

    }

    public function update(){
        $this -> login = $login;
        $this -> password = $password;
        $this -> email = $email;
        $this -> firstname = $firstname;
        $this -> lastname = $lastname;
    }
    
    public function isConnected(){

    }

    public function getAllInfos(){

    }
    
    public function getLogin(){

    }

    public function getEmail(){

    }

    public function getFirstname(){

    }

    public function getLastname(){

    }

}
?>