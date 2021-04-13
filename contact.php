<?php
//variable setting
$name = $_REQUEST['name'];
$name = $_REQUEST['Email'];
$name = $_REQUEST['Message'];

// check input fields{}
if (empty($name) || empty($email) || empty($message)){

    echo "Please fill all the fields";
}
else{

    mail("johnralphlorenzo23@gmail.com", "Jarah Website", $message, "From: $name <$email>");
    
    echo "<script type='text/javascript'>alert('Successfully sent');
    window.history.log(-1);
    </script>";
    
}
?>