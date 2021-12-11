
<?php

      session_start();
      session_destroy();
      unset($_SESSION);

         // if (isset($_SESSION['email'])){
         //    unset($_SESSION['firstname']);
         //    unset($_SESSION['middlename']);
         //    unset($_SESSION['lastname']);
         //    unset($_SESSION['email']);
         //    unset($_SESSION['username']);
         //    unset($_SESSION['password']);
         //    unset($_SESSION['contact']);
         //    unset($_SESSION['address']);
         //    unset($_SESSION['city']);
       
         //    }

    echo "session destroy";

    header("Location:http://localhost/Bootstraps/login.php");


?>