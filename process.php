<?php
// var_dump($_POST);
// var_dump($_POST['visitor']);
 $visitor  = $_POST['visitor'];
 $groupNum = $_POST['groupNum'];
 $vdate    = $_POST['vdate'];
 $fplace    = $_POST['fplace'];
 $place    = $_POST['place'];
 $rating   = $_POST['rating'];
$destination_email = "RITISTprofessor@gmail.com";
$email_subject = "San Francisco, CA.  - visitor " . $visitor;
$email_body = "Visitor name  $visitor\n";
$email_body .= "Group Size $groupNum\n";
$email_body .= "Date Visited=$vdate\n";
$email_body .= "Favorite Place $place ";
if (isset($_POST['SOMEPLACE'])) {
    $email_body .= $_POST['SOMEPLACE'] .  "\n";
}
$email_body .= "\nRating -> $rating\n";

$email_body .= "\n Updated September 2022 \n";
mail($destination_email, $email_subject, $email_body);
echo "Data Sent\n";

?>