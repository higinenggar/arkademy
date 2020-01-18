<?php
     function isAcceptedUsername($username) {
          return preg_match('/^[a-z0-9_]{5,12}$/',$username) ;
     }
   
    function isAcceptedPassword($password) {
        return preg_replace('/[^A-Z0-7_.]/', '', $password);
     }
     
     
     if (isAcceptedUsername("fiona_mareta")){
         echo "Username Is Valid" ;
     }
     if (isAcceptedPassword("1WORLD!")){
         echo "Password Is Valid";
     }
     else {
         echo "Username Or Password Is Invalid, Please Check Again" ;
     }
?>