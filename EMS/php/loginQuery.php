<?php



    include("connect.php");
    $username = $_POST['username'];
    $password = $_POST['password'];

     if(!empty($username) && !empty($password)) { 

              $db       = mysqli_select_db($conn, 'ems') or die("DB ERROR");
              $query    = mysqli_query($conn, "SELECT * FROM employee_info WHERE Username='".$username."' AND Password='".$password."'");
              
              $numrows  = mysqli_num_rows($query);
              
              if($numrows !=0 ) 
              {


               $checkTwoSeeIfUserISAdmin    = mysqli_query($conn, "SELECT * FROM employee_info WHERE Username='".$username."' AND Password='".$password."'  AND admin='Yes'");
              
              $numrows2  = mysqli_num_rows($checkTwoSeeIfUserISAdmin);
              
              if($numrows2 !=0 ) 
              {
                session_start();
                 $_SESSION['sess_user']=$username;

                echo "<script>

                window.location.replace('manage.php');

                </script>";
              }
              else
              {
                echo "You don't have permission to access the EMS";
              }




              } else 
              {
                echo "Username doesn't exists";
              }
    

}

?>