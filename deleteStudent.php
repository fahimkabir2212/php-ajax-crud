<?php 
    require 'dbconnection.php';
    if(isset($_POST['delete']))
    {
        $student_id = mysqli_real_escape_string($con, $_POST['delete']);
    
        $query = "DELETE FROM student WHERE id='$student_id' ";
        $query_run = mysqli_query($con, $query);
    
        if($query_run)
        {
            $response = [
                'status'=>'ok',
                'success'=>true,
                'message'=>'Deleted Successfully"!'
            ];
            print_r(json_encode($response));
            header("Location: index.php");
        }
        else
        {
            $response = [
                'status'=>'ok',
                'success'=>false,
                'message'=>'Delete failed!'
            ];
            print_r(json_encode($response));
            header("Location: index.php");
            exit(0);
        }
    }
?>