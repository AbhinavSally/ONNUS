<?php

if(isset($_POST['add'])){

  $name=$_POST['name'];
  $email=$_POST['email'];
  $field1=$_POST['field1'];
  $message=$_POST['message'];
$curl = curl_init();

curl_setopt_array($curl, array(
  CURLOPT_URL => 'https://admin.appformers.com/api/query_form.php',
  CURLOPT_RETURNTRANSFER => true,
  CURLOPT_ENCODING => '',
  CURLOPT_MAXREDIRS => 10,
  CURLOPT_TIMEOUT => 0,
  CURLOPT_FOLLOWLOCATION => true,
  CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
  CURLOPT_CUSTOMREQUEST => 'POST',
  CURLOPT_POSTFIELDS => array('name' => $name,'email' => $email,'field1' => $field1,'message' => $message),
));

$response = curl_exec($curl);

curl_close($curl);
if($response){

  echo ("<script LANGUAGE='JavaScript'>
  window.alert('Succesfully ');
  window.location.href='index.html';
  </script>");
}
else{
  echo ("<script LANGUAGE='JavaScript'>
  window.alert('Please try Again');
  window.location.href='index.html';
  </script>");
}
}
?>