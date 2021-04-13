
<?php
    if(!empty($_POST['send'])){
        $fname = $_POST['fname'];
        $lname = $_POST['lname'];
        $email = $_POST['email'];
        $subject = $_POST['sub'];
        $message = $_POST['msg'];

        $toEmail = "sangamnishad1313@gmail.com";
        $mailheaders = "From: ".$fname." ".$lname."<".$email. ">\r\n";
        if(mail($toEmail, $subject, $message, $mailheaders)){
            header("location: index.html");
        }
    }
?>
