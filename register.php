<?php
// Memasukkan kode php lain ke file php ini dengan fungsi require


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
	
	// Membuat simple Regex (Regular Expression) dan mengecekek 
	// apakah username yang diinputkan user sesuai dengan aturan regex kita atau tidak
	
		/*
		Note : 
		Pada fitur register ini kita menggunakan metode prepare statements dari bawaan SQL
		ketimbang menggunakan metode langsung (executing SQL Statemnts Directly)
		https://www.w3schools.com/php/php_mysql_prepared_statements.asp
		https://www.duniailkom.com/tutorial-php-mysql-pengertian-dan-cara-penggunaan-prepared-statements-mysqli/
		*/

		// Membuat prepared statements


	// Memvalidasi password


	// Memvalidasi konfirmasi password


	// Mengecek apakah terdapat error pada inputan username, password dan konfirmasi password yang diisikan client

			// Memasuki tahap Bind, dimana variabel pada prepare statement
			// Sebelumnya dijadikan parameter pada fungsi mysqli_stmt_bind_param 
			

			// Meng-set parameters
			

			// menjalankan query: yang berarti meng-executenya agar data username dan passwword masuk ke database
			
				// Mengarahkan client kembali ke login.php setelah register
				
			

			// Menutup statemnt
			

?>

<!DOCTYPE html>
<html lang="en">
<head>
	<meta characters="UTF-8">
	<title>Sign Up</title>
	<style>
		body{ font: 14px sans-serif; }
		.wrapper{ width: 360px; padding: 20px; }
	</style>
</head>
<body>
	<div class="wrapper">
		<h2>Sign Up</h2>
		<p>Please fill this form to create an account.</p>
		<form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>" method="post">
			<div class="form-group">
				<label>Username</label>
				<input type="text" name="username" class="form-control <?php echo (!empty($username_err)) ? 'is_invalid' : ''; ?>"
				value="<?php echo $username; ?>">
				<span class="invalid-feedback"><?php echo $username_err; ?></span>
			</div>
			<div class="form-group">
				<label>Password</label>
				<input type="password" name="password" class="form-control <?php echo(!empty($password_err)) ? 'is-invalid' : ''; ?>"
				value="<?php echo $password; ?>">
				<span class="invalid-feedback"><?php echo $password_err; ?></span>
			</div>
			<div class="form-group">
				<label>Confirm Password</label>
				<input type="password" name="confirm_password" class="form-control
				<?php echo (!empty($confirm_password_err)) ? 'is-invalid' : ''; ?>"
				value="<?php echo $confirm_password; ?>">
				<span class="invalid-feedback"><?php echo $confirm_password_err; ?></span>
			</div>
			<div class="form-group">
				<input type="submit" name="btn btn-primary" value="Submit">
				<input type="reset" name="btn btn-secondary ml-2" value="Reset">
			</div>
			<p>Already have an account? <a href="login.php">Login here</a>.</p>
		</form>
	</div>
</body>
</html>