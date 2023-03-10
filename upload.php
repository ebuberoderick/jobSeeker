<?php  
   include_once 'assets/backend/conn.php';
   if(isset($_POST['submit'])){  
      $job_title =$_POST['job_title'];
      $job_description =$_POST['job_description'];
      $job_location =$_POST['job_location'];
      $salary_range =$_POST['salary_range'];
      $add = $conn->query("INSERT INTO jobs (job_description,job_location,salary_range,job_title)VALUE('$job_description','$job_location','$salary_range','$job_title')");
      if($add){
         header('location:manageJobs.php');
      }
      exit();  
   }  
?>  