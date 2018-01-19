<?php
class connection{

 protected $db =null;

   public function open(){

     try{
       $dsn    ="mysql:host=localhost;dbname=pdoconnection";
       $username = 'root';
       $password = '';

       $options  = array(PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION,
                         PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_ASSOC,
              );
                $this->db = new PDO($dsn, $username, $password, $options);

                  return $this->db;
              } catch (PDOException $e) {
                  echo 'Connection failed: ' . $e->getMessage();
              }
          }

          public function Close()
          {
              $this->db = null;
              return true;
          }
      }

?>
