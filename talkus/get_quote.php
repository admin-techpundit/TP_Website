<?php
include_once 'conn.php';

if(isset($_POST['submit']))
{    
     $name = $_POST['t1'];
     $email = $_POST['t2'];
     $mobile = $_POST['t3'];
     $pro_name = $_POST['t4'];
     $pro_des = $_POST['t5'];
     $domain = $_POST['t6'];
     $attachment = $_POST['t7'];

     if($name !=''||$email !=''||$mobile !=''||$pro_name !=''||$pro_des !=''||$domain !=''){
      //Insert Query of SQL
      $sql = "INSERT INTO get_quote (name,email,ph_no,pro_name,pro_description,domain,attachment) VALUES ('$name','$email','$mobile','$pro_name','$pro_des','$domain','$attachment')";
      mysqli_query($conn,$sql);
      echo "<br/><br/><span>Data Inserted successfully...!!</span>";
      }
      else{
      echo "<p>Insertion Failed <br/> Some Fields are Blank....!!</p>";
      }
     mysqli_close($conn);
}
?>