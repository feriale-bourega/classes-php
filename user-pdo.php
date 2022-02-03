<!DOCTYPE html>
<html>
    <head>
        <title>Cours PHP / MySQL</title>
        <meta charset='utf-8'>
    </head>
    <body>
        <h1>Bases de données MySQL</h1>  
        <?php
            $servname = "localhost"; $dbname = "classes"; $user = ""; $pass = "root";
      
            try{
                $dbco = new PDO("mysql:host=$servname;dbname=$dbname", $user, $pass);
                $dbco->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
                
                $id = "id";
                $login = "login";
                $password = "password";
                $email = "email";
                $firstname ="firstname";
                $lastname = "lastname";
                
              
                //$sth appartient à la classe PDOStatement
                $sth = $dbco->prepare("
                    INSERT INTO 'utilisateurs'('id','login','password','email','firstname','lastname')
                    VALUES ('$id', '$login', '$password', '$email', '$firstname', '$lastname')
                ");
                $sth->execute(array(
                                    'id' => $id,
                                    'login' => $login,
                                    'password' => $password,
                                    'email' => $email,
                                    'firstname' => $firstname,
                                    'lastname' => $lastname,
                                    ));
                echo "Vous êtes connecté!";
            }

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
                  
            catch(PDOException $e){
                echo "Erreur : " . $e->getMessage();
            }
        ?>
    </body>
</html>
 