<!-- Xem hinh thu cua mangr -->
<?php
//echo '<pre>';
//echo print_r($_POST);
//echo '</pre>';
//nhan gia tri

$email =$_POST['email'];
$pass1 = $_POST['pass'];

 
//quy trinh 4 buoc

//Buoc 1: Ket noi toi server
include('config/db.php');
//Buoc 2: thuc hien truy van\
//2.1 kiem tra email nay ton tai khong
$sql_1="SELECT * FROM users WHERE email='$email'";
$result_1 = mysqli_query($conn,$sql_1);

if(mysqli_num_rows($result_1)>0){
    $row=mysqli_fetch_assoc($result_1);
    $pass_saved=$row['password'];

    if(password_verify($pass,$pass_saved)){
        //neeu khop vao trang
        header("Location:admin/index.php?response=$response");
    }
    else{
        $response='failed_email';
        header("Location:admin/index.php?response=$response");
    }
}
?>