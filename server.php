<?php
include("session.php");
$message;
 if(isset($_POST['eval']))
{          
    if($_POST['eval']=='login')
    {
        $email_id = mysqli_real_escape_string($connection,$_POST['email_id']);
        $password_t = mysqli_real_escape_string($connection,$_POST['password']);
        $password = md5($password_t);
        $strSQL = mysqli_query($connection,"SELECT * from user where email_id='$email_id' and password='$password'");
        $Results = mysqli_fetch_array($strSQL,MYSQLI_ASSOC);
        if($Results['email_id']==$email_id)
        {   
            header("Location:index2.php");
            $message = "Welcome ".$Results['first_name'];
            $_SESSION["message"] = $message;
            $_SESSION["count"]= 1;
        }
        else
        { 
            $message = "Invalid email or password!!";
            $_SESSION["message"] = $message;
            $_SESSION["count"]= 2;
            header("Location:index1.php");
            //echo "<script type=\"text/javascript\">
            //window.alert('Invalid email or password!!');
            //window.location = '\index1.html';
            //</script>"; 
            //exit;
        }        
    }
    elseif($_POST['eval']=='signup')
    {
        $first_name       = mysqli_real_escape_string($connection,$_POST['first_name']);
        $last_name       = mysqli_real_escape_string($connection,$_POST['last_name']);
        $email_id      = mysqli_real_escape_string($connection,$_POST['email_id']);
        $password_temp   = mysqli_real_escape_string($connection,$_POST['password']);
        $password = md5($password_temp);
        $query = "SELECT email_id FROM user where email_id='$email_id'";
        $result = mysqli_query($connection,$query);
        $numResults = mysqli_num_rows($result);
        if (!filter_var($email_id, FILTER_VALIDATE_EMAIL)) // Validate email address
        {
            $message =  "Invalid email address please type a valid email!!";
            $_SESSION["message"] = $message;
            $_SESSION["count"]= 3;
            header("Location:index1.php");
        }
        elseif($numResults>=1)
        {
            $message = $email." Email already exists!!";
            $_SESSION["message"] = $message;
            $_SESSION["count"]= 4;
            header("Location:index1.php");
        }
        else
        {
            mysqli_query($connection,"INSERT INTO user VALUES ('$first_name','$last_name','$email_id','$password')");
            header("Location:index2.php");
            $message = $Results['first_name']." signup Sucessfully!!";
            $_SESSION["count"]= 5;
            $_SESSION["message"] = $message;
        }
    }
}
?>