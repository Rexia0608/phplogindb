<?php


session_start();

var_dump($_SESSION);



//  profile page should be display the user's information depending on the user's session id let check using var_dump();
                                                         // (this part are te value of user which is TRUE = 1;)
if(isset($_SESSION["logged_in"]) && $_SESSION["logged_in"] === true){
    alertcall();
    session_destroy();
}else{
   if($_SESSION["id"] === 1){
        echo "John";
   }else{
    echo "Rey";
   }
}


function alertcall(){
    // PHP code to determine when to show an alert
    $show_alert = true; // Set this to true to display the alert

    // If the condition to show the alert is met
    if ($show_alert) {
        // Generate JavaScript code to display an alert
        echo "<script>alert('your current at the profile page');</script>";
        echo "<script>alert('change the url link into login.php this session will be destroy');</script>";
    }
}

?>