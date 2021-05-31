<?php 

if(isset($_POST['g-recaptcha-response']) && !empty($_POST['g-recaptcha-response']))
{
      $secret = '6LcA9b0UAAAAAJ6nLzeHmUQ5nhhzdOtDxlmcooYj';
      $verifyResponse = file_get_contents('https://www.google.com/recaptcha/api/siteverify?secret='.$secret.'&response='.$_POST['g-recaptcha-response']);
      $responseData = json_decode($verifyResponse);
      if($responseData->success)
    {
        $first_name = $_POST['firstname'];
        $last_name = $_POST['lastname'];
        $phone = $_POST['phone'];
        $mailfrom = $_POST['email'];
        $bodymsg = $_POST['message'];
        $mail = new PHPMailer(true);  

        try
        {
            //Server settings
            //$mail->SMTPDebug = SMTP::DEBUG_SERVER;                      //Enable verbose debug output
            $mail->isSMTP();                                            //Send using SMTP
            $mail->Host       = 'mail.comon-real.fr';                     //Set the SMTP server to send through
            $mail->SMTPAuth   = true;                                   //Enable SMTP authentication
            $mail->Username   = 'yoan@comon-real.fr';                     //SMTP username
            $mail->Password   = 'Droopy08';                               //SMTP password
            $mail->SMTPSecure = PHPMailer::ENCRYPTION_STARTTLS;         //Enable TLS encryption; `PHPMailer::ENCRYPTION_SMTPS` encouraged
            $mail->Port       = 587;  //TCP port to connect to, use 465 for `PHPMailer::ENCRYPTION_SMTPS` above
            $mail->CharSet = 'UTF-8';
            $mail->Encoding = 'quoted-printable';
            //Recipients
            $mail->setFrom('yoan@comon-real.fr', 'From website');
            $mail->addAddress('contact@ysavary.fr');     //Add a recipient
            $mail->addReplyTo($mailfrom, $first_name.' '.$last_name);
            //Content
            $mail->isHTML(true);                                  //Set email format to HTML
            $mail->Subject =  $first_name.' '.$last_name .' Send you a message from your website';
            $mail->Body    = "
            Contact detail: <br>  
            ".$first_name." ".$last_name ." <br>
            ". $mailfrom ." <br>
            ". $phone." <br> <br>
            Message: <br>
            ".$bodymsg."
            ";
        
            $mail->send();
            $state = "OK";
        }
        catch (Exception $e) {
            $state = $mail->ErrorInfo;
        }
      }
 }
 else
   echo 'ROBOT';