<?php
    session_start();
    
    if(isset($_POST['submitDangNhap'])){
        if($_POST['username'] == 'Hung' && $_POST['password'] == 'abc'){
            $_SESSION['username'] = $_POST['username'];
            echo 'Dang nhap thanh cong, <a href="taiKhoan.php">Di den trang tai khoan</a>';
        }
        else {
            echo 'dang nhap that bai';
        }
    }
?>

<form method="post" action="index.php">
    <div>
        Username: <input type="text" name="username" placeholder="Username">
    </div>
    <div>
        Password: <input type="password" name="password" placeholder="Password">
    </div>
    <div>
        <button type="submit" name="submitDangNhap" value="abc">Đăng nhập</button>
    </div>
</form>


<!-- file taiKhoan.php -->

<?php
	session_start();

	if( !isset($_SESSION['username']) ) {
		header('location: index.php');
	}
?>


<h2>Chao mung ban den voi trang quan tri</h2>
<p>xin chao ban, <?php echo $_SESSION['username'] ?></p>

<p><a href="logOut.php">Thoat tai khoan</a></p>


<!-- file logOut.php -->

<?php
    session_start();

    unset( $_SESSION['username']);
    header('location: index.php')
?>