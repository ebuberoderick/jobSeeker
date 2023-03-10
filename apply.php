<?php  
    include_once 'assets/backend/conn.php';
    if(isset($_POST['submit'])){  
        $Job_id =$_POST['Job_id'];
        $Full_name =$_POST['Full_name'];
        $email =$_POST['email'];
        $phone_number =$_POST['phone_number'];
        $id = $data['id'];
        $uploadfile=$_FILES["cv"]["tmp_name"]; 
        $fileName = "media/cv/".time() .$_FILES["cv"]["name"];
        if (move_uploaded_file($_FILES["cv"]["tmp_name"], $fileName )) {
            $add = $conn->query("INSERT INTO applicants (email,Job_id,cv,Full_name,phone_number,job_status)VALUE('$email','$Job_id','$fileName','$Full_name','$phone_number','pending')");
            if ($add) {
                ?>
                    <script>
                        alert('Application Sent Successfully')
                        window.location.href = 'jobs.php'
                    </script>
                <?php
            }
        }
    }  
?>  