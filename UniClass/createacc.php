<?php
       $fname = $_POST['fname'];
       $lname = $_POST['lname'];
       $email = $_POST['email'];
       $password = $_POST['password'];
       
       

       $con = new mysqli("localhost","root","","test");
       if($con ->connect_error){
        die("Failed to connect : ".$com->connect_error);
       }
       else{
        $stmt = $con->prepare("INSERT INTO `persoane` (`email`, `password`, `nume`, `prenume`) VALUES ('$email', '$password', '$lname', '$fname')");
       
        $stmt->execute();
        $stmt_result = $stmt->get_result();
        if($stmt_result->num_rows > 0)
        {
              $data = $stmt_result->fetch_assoc();
              if($data['password']=== $password)
              {
                     header("Location: index.html");
              }
              else{
                header("Location: login.html");
                    
            }
        }
        else{
            header("Location: login.html");
                
        }
        
    }

?>