<?php
    $a=$_POST['t1'];
    $b=$_POST['t2'];
    $c=$_POST['t3'];
    $d=$_POST['t4'];
    $tmp=$_FILES['f']['tmp_name'];
    $act=$_FILES['f']['name'];
    $e=$_POST['t5'];
    if($c!=$d){
        echo "<script>
        alert('Password do not match')
        window.location='http://localhost/programs/votingsystem/registration.php'
        </script>";
    }
    
        if(move_uploaded_file($tmp,$act)){
            $con=mysqli_connect('localhost','root','Tushali@01','votingsystem');        
            $q="insert into registration(name,mobile,password,confirm_password,photo,standard) values('$a','$b','$c','$d','$act','$e')";
            $rs=mysqli_query($con,$q);
            if($rs){
                echo "<script>
                alert('Registration Successful')
                window.location='http://localhost/programs/votingsystem/login.php';</script>";
            }
            else{
                echo "Error";
            }
        }
    
?>