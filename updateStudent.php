<?php
require 'dbconnection.php';

if(isset($_POST['update_student']))
{
    $student_id = mysqli_real_escape_string($con, $_POST['student_id']);

    $name = mysqli_real_escape_string($con, $_POST['name']);
    $email = mysqli_real_escape_string($con, $_POST['email']);

    $query = "UPDATE student SET name='$name', email='$email' WHERE id='$student_id' ";
    $query_run = mysqli_query($con, $query);

    if($query_run)
    {
        $response = [
            'status'=>'ok',
            'success'=>true,
            'message'=>'Updated Successfully"!'
        ];
        print_r(json_encode($response));
        header("Location: index.php");
        exit(0);
    }
    else
    {
        $response = [
            'status'=>'ok',
            'success'=>false,
            'message'=>'Update Failed!'
        ];
        print_r(json_encode($response));
        // $_SESSION['message'] = "Error!!! Something Went To Wrong";
        header("Location: create.php");
        exit(0);
    }

}


?>