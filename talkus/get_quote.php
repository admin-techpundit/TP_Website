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
          alert("Insertion Failed.. Some Fields are Blank....!!");
          document.location="index.html";
     </script>
      <?php
      }
     mysqli_close($conn);
}
?>