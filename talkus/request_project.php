<?php
include_once 'conn.php';

if(isset($_POST['submit']))
{    
     $name = $_POST['t1'];
     $email = $_POST['t2'];
     $address = $_POST['t3'];
     $mobile = $_POST['t4'];
     $clg_name = $_POST['t5'];
     $dept_name = $_POST['t6'];
     $pro_name = $_POST['t7'];
     $domain = $_POST['t8'];
     $attachment = $_POST['t9'];
     $pro_des = $_POST['t10'];
     $team_name = $_POST['t11']; 

     if($name !=''||$email !=''||$address !=''||$mobile !=''||$clg_name !=''||$pro_name !=''||$pro_des !=''||$domain !=''){
      //Insert Query of SQL
      $sql = "INSERT INTO request_project (name,email,address,ph_no,clg_name,dept_name,pro_name,domain,attachment,pro_des,team_name) VALUES ('$name','$email','$address','$mobile','$clg_name','$dept_name','$pro_name','$domain','$attachment','$pro_des','$team_name')";
      mysqli_query($conn,$sql);
      echo "<br/><br/><span>Data Inserted successfully...!!</span>";
      }
      else{
      echo "<p>Insertion Failed <br/> Some Fields are Blank....!!</p>";
      }
     mysqli_close($conn);
}
?>