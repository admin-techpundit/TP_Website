<?php
include_once 'conn.php';

if(isset($_POST['submit']))
{    
     $name = $_POST['t1'];
     $email = $_POST['t2'];
     $topic = $_POST['t3'];
     $no_of_days = $_POST['t4'];
     $other_topic = $_POST['t5'];
     $clg_name = $_POST['t6'];
     $clg_addr = $_POST['t7'];
     $mobile = $_POST['t8'];
     $no_of_student = $_POST['t9'];

     if($name !=''||$email !=''||$mobile !=''||$no_of_days !=''||$no_of_student !=''||$clg_addr !=''){
      //Insert Query of SQL
      $sql = "INSERT INTO workshop (name,email,topic,no_of_days,other_topic,clg_name,clg_addr,ph_no,no_of_student) VALUES ('$name','$email','$topic','$no_of_days','$other_topic','$clg_name','$clg_addr','$mobile','$no_of_student')";
      mysqli_query($conn,$sql);
      echo "<br/><br/><span>Data Inserted successfully...!!</span>";
      }
      else{
      echo "<p>Insertion Failed <br/> Some Fields are Blank....!!</p>";
      }
     mysqli_close($conn);
}
?>