<?php

    session_start();

    // if the user tried to visit home and the user are not logged in, then it will be redirect on home page //
    if(isset($_SESSION["logged_in"]) && $_SESSION["logged_in"] === true){
        alertcall();
        header("Location: profile.php");
    }else{
        // note this is not gonna work due to reason we default the user into true
        header("Location: login.php");
    }


    function alertcall(){
        // PHP code to determine when to show an alert
        $show_alert = true; // Set this to true to display the alert
    
        // If the condition to show the alert is met
        if ($show_alert) {
            // Generate JavaScript code to display an alert
            echo "<script>alert('your current at the home');</script>";
        }
    }

?>  
<h1>Home page</h1>




