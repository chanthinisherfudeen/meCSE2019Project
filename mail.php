<?php
$htmlbody = " Please download below image to view your security code..!";

$to = $_SESSION['cellu_email']; //Recipient Email Address

$subject = "Security Code"; //Email Subject

$headers = "From: karthic.u@gmail.com\r\nReply-To: $to";

$random_hash = md5(date('r', time()));

$headers .= "\r\nContent-Type: multipart/mixed; boundary=\"PHP-mixed-".$random_hash."\"";

$attachment = chunk_split(base64_encode(file_get_contents($imgname))); // Set your file path here

//define the body of the message.

$message = "--PHP-mixed-$random_hash\r\n"."Content-Type: multipart/alternative; boundary=\"PHP-alt-$random_hash\"\r\n\r\n";
$message .= "--PHP-alt-$random_hash\r\n"."Content-Type: text/plain; charset=\"iso-8859-1\"\r\n"."Content-Transfer-Encoding: 7bit\r\n\r\n";

//Insert the html message.
$message .= $htmlbody;
$message .="\r\n\r\n--PHP-alt-$random_hash--\r\n\r\n";

//include attachment
$message .= "--PHP-mixed-$random_hash\r\n"."Content-Type: application/zip; name=\"logo.png\"\r\n"."Content-Transfer-Encoding: base64\r\n"."Content-Disposition: attachment\r\n\r\n";
$message .= $attachment;
$message .= "/r/n--PHP-mixed-$random_hash--";

//send the email
$sent = mail( $to, $subject , $message, $headers );

//echo $mail ? "Mail sent" : "Mail failed";



if($sent) 
{
 $mailstatus=1;
}
else 
{
 $mailstatus=2;
}
?>