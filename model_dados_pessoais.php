<?php 
include_once("db.php");
$email = '';
$birth = '';
$contact_number = '';
$name = '';
$cpf = '';
$sql = "SELECT * FROM dados_pessoais";
$stmt = $ConnPdoPg->prepare($sql);
$stmt->execute();
$row = $stmt->fetch(PDO::FETCH_ASSOC);
if ($row) {
  $email = $row['email'];
  $birth = $row['birth'];
  $contact_number = $row['contact_number'];
  $name = $row['name'];
  $cpf = $row['cpf'];

  //var_dump($row);
}



?>