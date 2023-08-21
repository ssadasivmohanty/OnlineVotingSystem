<?php
include 'connect.php';

    $name = $_POST['user_name'];
    $mobile = $_POST['mobile'];
    $password = $_POST['password'];
    $cpassword = $_POST['cpassword'];
    $address = $_POST['address'];
    $photo = $_FILES['photo']['name'];
    $temp_name = $_FILES['photo']['tmp_name'];
    $role = $_POST['role'];

    if($password == $cpassword){
        move_uploaded_file($temp_name,"../uploads/$photo");
        $insert = mysqli_query($conn, "INSERT INTO user(name,mobile,password,address,photo,role,status,votes) VALUES ('$name','$mobile','$password','$address','$photo','$role','0','0')");

        if($insert){
            echo "
            <script>
            alert('Registration Successfull!');
            window.location = '../'
            </script>
        ";
        }else{
            echo "
            <script>
            alert('Some error occured');
            window.location = '../routes/register.php'
            </script>
        ";
        }
    }else{
        echo "
            <script>
            alert('password and cpassword does not matches');
            window.location = '../routes/register.php'
            </script>
        ";
    }