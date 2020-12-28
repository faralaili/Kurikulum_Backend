<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Document</title>	
</body>
</html>
<head>
<link rel="stylesheet" href="style1.css">  
</head>  
<body>
    <div id="card">
        <h1>silahkan register</h1>
        <form action="action.php" method="post">
			<center>
            <label for="">Username</label>
            <input type="text" name="name" placeholder="Masukkan Username" id="form">
            <br>
            <label for="">Password</label>
            <input type="password" name="pass" placeholder="Masukkan Passsword" id="form">
            <br>
            <input type="reset" value="Cancel"><input type="submit" value="Login">
            <p>Sudah punya akun?
			<a href="login.php">Login </a>
			<center>
        </form>
    </div>
</body>
</html>