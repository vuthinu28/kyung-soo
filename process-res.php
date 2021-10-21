<!-- Xem hinh thu cua mangr -->
<?php
//echo '<pre>';
//echo print_r($_POST);
//echo '</pre>';
//nhan gia tri
$first_name = $_POST['firstName'];
$last_name =$_POST['lastName'];
$email =$_POST['email'];
$pass1 = $_POST['pass1'];
$pass2 = $_POST['pass2'];
 
//quy trinh 4 buoc

//Buoc 1: Ket noi toi server
include('config/db.php');
//Buoc 2: thuc hien truy van\
//2.1 kiem tra email nay ton tai khong
$sql_1="SELECT * FROM users WHERE email='$email'";
$result_1 = mysqli_query($conn,$sql_1);

if(mysqli_num_rows($result_1)>0){
    echo'Email da ton tai';

}else{
    $sql_2 ="INSERT INTO users(first_name,last_name,email,password) VALUES ($first_name,$last_name,$email,$pass1)";
    $result_2=mysqli_query($conn,$sql_2);

    if($result_2 >0){
        echo"Ban da dang ky thanh cong";
    }
}

?>