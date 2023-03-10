<?php
    session_start();
    include_once 'conn.php';
    $action=$_POST['action'];
    if($action == 'login'){
        $user =$_POST['user'];
        $pwd =$_POST['pwd'];
        login($user,$pwd,$conn);
    }elseif ($action == 'register') {
        $firstname =$_POST['firstname'];
        $lastname =$_POST['lastname'];
        $email =$_POST['email'];
        $phone_number = $_POST['phone_number'];
        $user_level = 'Staff';
        $user_password = $_POST['user_password'];
        $query = $conn->query("SELECT * FROM users WHERE (email='$mail' OR phone_number='$phone') AND user_password='$pwd'");
        if($query->num_rows < 1){
            $register = $conn->query("INSERT INTO users (firstname,lastname,email,phone_number,user_level,user_password)VALUE('$firstname','$lastname','$email','$phone_number','$user_level','$user_password')");
            if($register){
                login($mail,$pwd,$conn);
            }
        }else{
            echo 'Email already Exists';
        }
    }elseif ($action == 'getPropImg') {
        $th = $_POST['val'];
        $get = $conn->query("SELECT * FROM imgs WHERE houseId='$th'");
        $a=array();
        while ($imgs = $get->fetch_assoc()) {
            array_push($a,$imgs);
        }
        echo json_encode([
            'data'=>$a ,
        ]);
    }elseif ($action == 'getDes') {
        $thID = $_POST['id'];
        $data = $conn->query("SELECT * FROM jobs WHERE id='$thID'")->fetch_assoc();
        echo json_encode([
            'data'=>$data
        ]);
    }elseif ($action == 'checkStatus') {
        $data = $_POST['contact'];
        $query = $conn->query("SELECT * FROM applicants WHERE (email='$data' OR phone_number='$data')");
        if($query->num_rows > 0){
            if ($query->fetch_assoc()['job_status'] === 'pending') {
                $msg = 'Apllication is pending';
            }elseif ($query->fetch_assoc()['job_status'] === 'interviewing') {
                $msg = 'Interviewing is Appplicant';
            }else {
                $msg = 'Applicant '.query->fetch_assoc()['job_status'];
            }
            echo json_encode([
                'msg'=> $msg
            ]);
        }else{
            echo json_encode([
                'msg'=>'User Application data not found',
            ]);
        }
        
    }elseif ($action == 'delEmployee') {
        $id = $_POST['id'];
        $del = $conn->query("DELETE FROM users WHERE id='$id'");
        if ($del) {
            echo json_encode([
                'msg'=>'Employee Deleted Successfull',
            ]);
        }
    }elseif ($action == 'addEmploy') {
        $firstname = $_POST['firstname'];
        $lastname = $_POST['lastname'];
        $email = $_POST['email'];
        $phone_number = $_POST['phone_number'];
        $job_title = $_POST['job_title'];
        $office_location = $_POST['office_location'];
        $salary = $_POST['salary'];
        $password = $_POST['password'];
        $query = $conn->query("SELECT * FROM users WHERE (email='$email' OR phone_number='$phone_number') AND user_password='$password'");
        if($query->num_rows < 1){
            $register = $conn->query("INSERT INTO users (firstname,lastname,email,phone_number,user_level,job_title,office_location,salary,user_password)VALUE('$firstname','$lastname','$email','$phone_number','staff','$job_title','$office_location','$salary','$password')");
            if($register){
                echo json_encode([
                    'msg'=>'Staff Record Added Successfully',
                ]);
            }
        }else{
            echo json_encode([
                'msg'=>'Email already Exists',
            ]);
        }

    }elseif ($action == 'updateEmploy') {
        $id = $_POST['userid'];
        $phone_number = $_POST['phone_number'];
        $email = $_POST['email'];
        $office_location = $_POST['office_location'];
        $salary = $_POST['salary'];
        $query = $conn->query("UPDATE users SET phone_number = '$phone_number', email = '$email', office_location = '$office_location', salary = '$salary'  WHERE id='$id'");
        if ($query) {
            echo json_encode([
                'msg'=>'Employee Data Updated Successfully'
            ]);
        }
    }elseif ($action == 'updatePayroll') {
        $payrollState =$_POST['payrollState'];
        $id =$_POST['id'];
        if ($payrollState == 0) {
            $query = $conn->query("UPDATE users SET onPayroll = '1' WHERE id='$id'");
        } else {
            $query = $conn->query("UPDATE users SET onPayroll = '0' WHERE id='$id'");
        }
        
    }elseif ($action == 'fetchData') {
        $id =$_POST['id'];
        $query = $conn->query("SELECT * FROM users WHERE id='$id'");
        $data = $query->fetch_assoc();
        echo json_encode([
            'data'=> $data
        ]);
    }elseif ($action == 'quest') {
        $id =$_POST['id'];
        $query = $conn->query("SELECT * FROM applicants WHERE id='$id'");
        $data = $query->fetch_assoc();
        $jobid = $data['Job_id'];
        $query2 = $conn->query("SELECT * FROM jobs WHERE id='$jobid'");
        $jobInfo = $query2->fetch_assoc();
        echo json_encode([
            'data'=> $data,
            'job_info' => $jobInfo
        ]);
    }elseif ($action == 'applicationUpdate') {
        $val =$_POST['val'];
        $id =$_POST['id'];
        $query = $conn->query("UPDATE applicants SET job_status = '$val' WHERE id='$id'");
        if ($query) {
            echo json_encode([
                'msg'=>'success'
            ]);
        }
    }elseif ($action == 'logout') {
        session_destroy();
        echo json_encode([
            'msg'=>'logout'
        ]);
    }else{}


    function login($log,$pwd,$conn){
        $query = $conn->query("SELECT * FROM users WHERE (phone_number='$log' OR email='$log') AND user_password='$pwd'");
        if($query->num_rows == 1){
            $users = $query->fetch_assoc();
            $_SESSION['active_user_id'] = $users['id'];
            echo json_encode([
                'status'=>'good',
                'msg'=>'login',
                'users' => $users
            ]);
        }else{
            echo json_encode([
                'status'=>'bad',
                'msg'=>'Login Details are Incorrect'
            ]);
        }
    }
?>