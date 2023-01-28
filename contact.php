<?php 
    //variable setting
    $name = $_REQUEST['name'];
    $email = $_REQUEST['email'];
    $phone = $_REQUEST['phone'];
    $body = $_REQUEST['body'];

    //check input fields
    if(empty($name) || empty($email) || empty($phone) || empty($subject) || empty($body))
    {
        echo "Please fill all the fields";
    }
    else{
        mail("subhamss2401@gmail.com", "DailyStonks Message", $message, "From: $name <$email>");
        echo "<script type='text/javascript'>alert('Your message sent successfully');
        windows.history.log(-1);
        </script>";
    }

?>