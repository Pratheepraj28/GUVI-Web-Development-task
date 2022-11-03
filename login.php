<?php      
    $con = mysqli_connect('localhost', 'root', '','db_form'); 
    $username = $_POST['txtUsername'];  
    $password = $_POST['txtPasswd'];  
      
          
        $username = stripcslashes($username);  
        $password = stripcslashes($password);  
        $username = mysqli_real_escape_string($con, $username);  
        $password = mysqli_real_escape_string($con, $password);  
      
        $sql = "select *from form where Username = '$username' and Passwd = '$password'";  
        $result = mysqli_query($con, $sql);  
        $row = mysqli_fetch_array($result, MYSQLI_ASSOC);  
        $count = mysqli_num_rows($result); 
        $user_id =  $row['Id']; 
        $myArr = array($username,$password,$user_id);

        $myJSON = json_encode($myArr);
        
        // $myObj->id = "New York";
        if($count == 1){  
            // echo "<h1><center> Login successful </center></h1>";  
            echo  $myJSON;  

        }  
        else{  
            // echo "<h1> Login failed. Invalid username or password.</h1>";  
            echo json_encode(false);  
        }     
?>