<?php 

    if (isset($_POST['submit']))
    {
        $name = $_POST['name'];
        $email = $_POST['email'];
        $message = $_POST['message'];

        
        $mailTo = "kahuluganspringresortksr@gmail.com";
        $headers = "From: kahuluganspringresort".$mailFrom;
        $txt = "You received an new email from".$name.".\n\n".$message;

        mail($mailTo, $headers, $txt);
        header("Location: index.php?mailsend");
        
    }




