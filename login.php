<?php

session_start();
// only allow user to access login page if the user are already logged in, else if the user are already logged it will be redirect to homepage
// for this example we will assume the user are already logged.


if(isset($_SESSION["logged_in"]) && $_SESSION["logged_in"] === true){
    alertcall();
    header("Location: home.php");
}else{
    $_SESSION["logged_in"] = true; 
    $_SESSION["id"] = 1;
}

function alertcall(){
    // PHP code to determine when to show an alert
    $show_alert = true; // Set this to true to display the alert

    // If the condition to show the alert is met
    if ($show_alert){
        // Generate JavaScript code to display an alert
        echo "<script>alert('your current at the login page and you will be redirect to home after this couse you're already logged');</script>";
    }
}



?>  
<h1>Login page</h1>
