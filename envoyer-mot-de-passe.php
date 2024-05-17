<?php
$email = $_POST["email"];

$token = bin2hex(random_bytes(16)) ;

$token_hash = hash("sha256" ,$token);

$expirer = date("Y-m-d H:i:s" , time() + 60 * 30 );

$mysqli = require __DIR__.'/database.php';

$sql ="UPDATE user SET reset_token_hash = ?,
reset_token_expires_at = ? WHERE email = ? ";

$stmt = $mysqli->prepare($sql);

$stmt-> bind_param ("sss" , $token_hash, $expirer , $email);

$stmt->execute();


if ($mysqli->affected_rows){

    $mail = require __DIR__ . "/mailer.php";

    $mail->setFrom("noreply@example.com");
    $mail->addAddress($email);
    $mail->Subject = "Password Reset";
    $mail->Body = <<<END


    Click <a href="http://example.com/reinitialiser-mot-de-passe.php?token=$token">ici</a> pour reinitiliser votre  mot de passe.


    END;

    try  {
        $mail->send();

    } catch(Exception $e){

        echo"Message ne peux pas être envoyer : {$mail->ErrorInfo}";
    
    }

}

echo "Message Envoyer, verifier votre Email.";
