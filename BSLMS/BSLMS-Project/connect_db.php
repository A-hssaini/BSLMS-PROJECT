<?php
            $source = "mysql:host=localhost;dbname=db-internship";
            $login = "root";
            $mdp = "";

            try{
                $connect = new PDO($source, $login, $mdp);
            }
            catch (PDOException $e)
            {
                $error_message = $e->getMessage();
                echo $error_message;
                exit();
            }
        ?>
