<?php

if(isset($_POST ['First Name']) && (isset($_POST ['Last Name']) && (isset($_POST ['Email']) && 
(isset($_POST ['Phone Number']) && (isset($_POST ['Address']) && (isset($_POST ['Add a Complain'])
{
  include 'db_conn.php';
  function validate($data)
  {
      $data = trim($data);
      $data = stripslashes($data);
      $data = htmlspecialchars($data);
      return $data;
  }
  $FirstName = validate($_POST['First Name']);
  $LastName = validate($_POST['Last Name']);
  $Email = validate($_POST['Email']);
  $PhoneNumber = validate($_POST['Phone Number']);
  $Address = validate($_POST['Address']);
  $AddaComplain = validate($_POST['Add a Complain']);

  if(empty($AddaComplain) || empty($PhoneNumber))
  {
    header("Location: index.html");
  }
  else
  {
     $sql = "INSERT INTO complain-form(FirstName,LastName, Email, PhoneNumber, Address, AddaComplain ) VALUE('$FirstName' , '$LastName' ,'$Email' , '$PhoneNumber' , '$Address' , '$AddaComplain')";
     $res = mysqli_query($conn, $sql)
     if($res)
       {
         echo "Your Message Was Sent Successfully!"; 
       }
       else{
             echo "Your Message Could Not Be Sent!;           
           }
  }

}
else
{
    header("Location: index.html");

}