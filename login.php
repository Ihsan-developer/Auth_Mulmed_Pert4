<?php
// Memasukkan kode php lain ke file php ini dengan fungsi require


// Menjalankan fungsi session_start 
/*
Note : Kegunaan dari fungsi session_start(); adalah untuk memulai eksekusi session pada server dan 
kemudian menyimpannya pada browser. Dengan intruksi ini menunjukkan pada saat session di mulai, 
semua session akan diaftarkan selanjutnya akan disimpan. Penyimpanan ini terjadi sampai jangka waktu tertentu.
*/


// Mengecek apakah session loggedin (sudah login) ada atau tidak
// Jika ada maka arahkan client ke welcome.php, jika tidak maka program berlanjut


// Membuat variabel penampung inputan username dan password dari client


// Membuat variabel penampung pesan error ketika client Salah
// Atau tidak memasukkan username, password dan atau ketika login gagal 



/*
Note : $_SERVER adalah fungsi khusus yang terdapat pada php, dan salah satu fungsinya yaitu 
untuk menampilkan sebuah data dari server, seperti untuk megetahui alamat IP user, 
mengetahui jenis browser dan OS yang digunakan oleh user, melalui alamat url yang diakses oleh user.
*/

// Mengecek apakah method request yang dikirimkan berupa post atau bukan

	// fungsi trim() digunakan untuk menghapus spasi atau karakter whitespace dari sebuah string
	
		/*
		Note : 
		Pada fitur login ini kita menggunakan metode prepare statements dari bawaan SQL
		ketimbang menggunakan metode langsung (executing SQL Statemnts Directly)
		https://www.w3schools.com/php/php_mysql_prepared_statements.asp
		https://www.duniailkom.com/tutorial-php-mysql-pengertian-dan-cara-penggunaan-prepared-statements-mysqli/
		*/
		
?>

<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Login</title>
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
	<style>
		body{ font: 14px sans-serif; }
		.wrapper{ width: 360px; padding: 20px; }
	</style>
</head>
<body>
	<div class="wrapper">
		<h2>Login</h2>
		<p>Please fill in your credentials to login.</p>

		<?php
		if (!empty($login_err)) {
			echo '<div class="alert alert-danger">' . $login_err . '</div>';
		}
		?>

		<form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>" method="post">
			<div class="form-group">
				<label>Username</label>
				<input type="text" name="username" class="form-control <?php echo (!empty($username_err)) ? 'is-invalid' : ''; ?>" value="<?php echo $username; ?>">
				<span class="invalid-feedback"><?php echo $username_err; ?></span>
			</div>
			<div class="form-group">
				<label>Password</label>
				<input type="password" name="password" class="form-control <?php echo (!empty($password_err)) ? 'is-invalid' : '';?>">
				<span class="invalid-feedback"><?php echo $password_err; ?></span>
			</div>
			<div class="form-group">
				<input type="submit" class="btn btn-primary" value="Login">
			</div>
			<p>Don't have an account? <a href="register.php">Sign up now</a>.</p>
		</form>
	</div>
</body>
</html>