<?php

$subject = $_POST['subject'];
$mail_content =$_POST['mail_content'];

include_once './db_connector.php';
try{
    $count = 0;
    require_once './email_settings.php';

    $dsn = "mysql:host=$host; port=$port; dbname=$dbname";
    $mail_content2 = nl2br($mail_content);
    $pdo = new PDO ($dsn, $username, $passwd);
    $pdo->setAttribute(PDO:: ATTR_DEFAULT_FETCH_MODE, PDO::FETCH_OBJ);
    $stmt = $pdo->prepare($sql);
    $stmt->execute();
    $rows = $stmt->fetchAll ();
    $c = 0;

    foreach($rows as $row){
        $mail->addAddress($row->email_id);
        $mail->Subject = $subject;
        $mail ->Body = "Dear <b>$row->firstName $row->lastName</b>, $mail_content2 <br/><br/> <b>$theLink</b><br/> Best Regards. <b>Fab Team. <br/> <br/> <br/>https://fabsuper.com/ <br/>";
        try{
            $mail->send();
        }catch (Exception $e) {
            echo "Mailer Error: ". $mail->ErrorInfo;
        
}    }?>

<div id="successDiv">
<?php echo '<font style="font-size:20px">Email Sent </font><img src="images/success.png" style="width:20px;" /> <hr/><b>Subject: </b>'.$subject.' <br/><br/><b>Message: </b>'.$mail_content.' <br/>';
?></div>

<?php
 //print_r($stmt->errorInfo());
} catch (Exception $exc){
    echo "An error has occured: ". $exc->getTraceAsString();

}?>















?>