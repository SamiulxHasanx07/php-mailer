<?php 
    if(isset($_POST['Button'])){
        $name = $_POST['name'];
        $subject = $_POST['subject'];
        $email = $_POST['mail'];
        $message = $_POST['message'];


        //error checking
        $error =[];
        if(empty($_POST['name'])){
            $error['name'] = 'Insert Your Name';
        }
        if(empty($_POST['subject'])){
            $error['subject'] = 'Insert Your Subject';
        }
        if(empty($_POST['mail'])){
            $error['mail'] = 'Insert Your Mail';
        }
        if(empty($_POST['message'])){
            $error['message'] = 'Insert Your Message';
        }

        //Mail Send
        $to = 'samiulxhasan650@gmail.com';
        $from = 'from'.$email;
        $bodysubject = $subject;
        $mailbody = 'Name'.$name.'\n Subject'.$bodysubject.'\n Email'.$from.'\n Message'.$message;

        $check = mail($from, $bodysubject, $mailbody);
        if($check == true){
            echo 'Message Sended Successfully!!';
        }else{
            echo 'No Send!';
        }
    }
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <h2 class="top-header">Email Sending Using PHP</h2>

    <div class="form">
        <form action="" method="POST">
            <div class="input-fields">
                <label>Name</label>
                <input type="text" name="name" placeholder="Your Name" value="<?php if(isset($name)){ echo $name;}?>">
                <span>
                    <?php
                        if(isset($error['name'])){
                            echo $error['name'];
                        }
                    ?>
                </span>
            </div>
            <div class="input-fields">
                <label>Subject</label>
                <input type="text" name="subject" placeholder="Subject" value="<?php if(isset($subject)){ echo $subject;}?>">
                <span>
                    <?php
                        if(isset($error['subject'])){
                            echo $error['subject'];
                        }
                    ?>
                </span>
            </div>
            <div class="input-fields">
                <label>E-mail</label>
                <input type="email" name="mail" placeholder="Your Mail" value="<?php if(isset($email)){ echo $email;}?>">
                <span>
                    <?php
                        if(isset($error['mail'])){
                            echo $error['mail'];
                        }
                    ?>
                </span>
            </div>
            <div class="input-fields">
                <label>Message</label>
                <textarea name="message" placeholder="yourmessage"><?php if(isset($message)){ echo $message;}?></textarea>
                <span>
                    <?php
                        if(isset($error['message'])){
                            echo $error['message'];
                        }
                    ?>
                </span>
            </div>
            <div class="input-fields">
                <input type="submit" value="Send Now" name="Button" id="btn">
            </div>
        
        </form>
    </div>




</body>
</html>