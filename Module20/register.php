<?php 
    include_once("config.php");

if(isset($_POST['submit'])){
$emri=$_POST['emri'];
    $username=$_POST['username'];
    $email=$_POST['email'];
    $password=$_POST['password'];
    $roli=$_POST['roli'];
    
    if(empty($emri)||
        empty($username)||
        empty($email)||
        empty($password)||
        empty($roli))
        
        {
            echo "You have not filled in all the fields.";
        }else{
            
            $sql="SELECT * FROM users WHERE username='$username' OR email='$email'";
            $tempSql=$conn->prepare($sql);
            $tempSql->execute();


            if($tempSql->rowCount()>0){
                echo "User with email/username already exists!";
                header("refreshl:2; url-index.php");
            }else{
                
                $hashedPassword=password_hash($password,PASSWORD_BCRYPT);
                $query="INSERT INTO users(emri,username,email,password,roli) VALUES('$emri','$username','$email','$password','$roli')";
                $insertSql=$conn->prepare($query);
                $insertSql->execute();
                echo "New user created succesfully, in 2 seconds please login!";
                header("refresh:2; url-login.php");
}
            
        }

}
