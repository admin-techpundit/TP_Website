<?php
include_once 'conn.php';

if(isset($_POST['submit']))
{    
     $name = $_POST['t1'];
     $email = $_POST['t2'];
     $mobile = $_POST['t3'];
     $domain = $_POST['t4'];
     $query = $_POST['t5'];

     if($name !=''||$email !=''||$mobile !=''||$query !=''||$domain !=''){
      //Insert Query of SQL
      $sql = "INSERT INTO general_query (name,email,ph_no,domain,query) VALUES ('$name','$email','$mobile','$domain','$query')";
      mysqli_query($conn,$sql);
      echo "<br/><br/><span>Data Inserted successfully...!!</span>";
      }
      else{
      echo "<p>Insertion Failed <br/> Some Fields are Blank....!!</p>";
      }
     mysqli_close($conn);
}
?>