<?php
if($_SERVER['REQUEST_METHOD']=='POST' && isset($_POST['submit']) ){
    $conn= mysqli_connect('localhost','root','','test1') or die("connection failed:" .mysqli_connect_error());
    if(isset($_POST['email']) && isset($_POST['password'])){
        $email=$_POST['email'];
        $password=$_POST['password'];

        $sql="INSERT INTO `users` (`email`,`password`) VALUES ('$email','$password') ";
        $query = mysqli_query($conn , $sql);
        if($query){
            echo 'entry successful';

        }
        else { echo 'error occured';
        }
    } 
}
?>
