<?php
    if(isset($_POST['submit'])){
        $fname=$_POST['fname'];
        $lname=$_POST['lname'];
        $email=$_POST['email'];
        $phone=$_POST['phone'];
        $msg=$_POST['msg'];

        $to="tarunpatidar6557@gmail.com";
        $subject="Form Submission";
        $message="First Name: $fname \n Last Name: $lname \n Phone: $phone \n Message: \n\n $msg";
        $headers="From: $fname<$email>";
        header("Location: contact.html");

        if(mail($to, $subject, $message, $headers)){
            echo "<h1>Sent Successfully !"."\n".$fname.",Thank You For Reaching Us</h1>";
        }
        else{
            echo "Something went wrong !";
        }
    }
?>    