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
      ?>
      <script>
          alert("Data Inserted successfully...!!");
          document.location="index.html";
      </script>
     <?php
     }
      else{
     ?>
     <script>
          alert("Insertion Failed... Some Fields are Blank....!!");
          document.location="index.html";
     </script>
     <?php
      }
     mysqli_close($conn);
}
?>