<?php 
    require 'dbconnection.php';
    if(isset($_POST['save_student']))
    {
        $name = mysqli_real_escape_string($con, $_POST['name']);
        $email = mysqli_real_escape_string($con, $_POST['email']);

        $query = "INSERT INTO student (name,email) VALUES ('$name','$email')";

        $query_run = mysqli_query($con, $query);
        if($query_run)
        {
            $response = [
                'status'=>'ok',
                'success'=>true,
                'message'=>'Created Successfully"!'
            ];
            print_r(json_encode($response));
            // $_SESSION['message'] = "Created Successfully";
            header("Location: index.php");
            exit(0);
        }
        else
        {
            $response = [
                'status'=>'ok',
                'success'=>false,
                'message'=>'Record created failed!'
            ];
            print_r(json_encode($response));
            // $_SESSION['message'] = "Error!!! Something Went To Wrong";
            header("Location: create.php");
            exit(0);
        }
    }
?>