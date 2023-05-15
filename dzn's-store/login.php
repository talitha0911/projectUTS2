<!DOCTYPE html>
<html lang="en" >
<head>
  <meta charset="UTF-8">
  <title>Login</title>
  <link rel="stylesheet" href="login/login/style.css">
  <link rel="stylesheet" href="css/style.css">

    
</head>
<body>
<!-- partial:index.partial.html -->
<!DOCTYPE html>
<html>
<head>
	<title>Slide Navbar</title>
	<link rel="stylesheet" type="text/css" href="slide navbar style.css">
<link href="https://fonts.googleapis.com/css2?family=Jost:wght@500&display=swap" rel="stylesheet">
</head>
<body>
	<div class="main">  	
		<input type="checkbox" id="chk" aria-hidden="true">

			<div class="signup">
				<form>
					<label class="daftar" for="chk" aria-hidden="true">Daftar</label>
					<input type="text" name="txt" placeholder="Nama Lengkap" required="">
					<input type="text" name="txt" placeholder="Username" required="">
					<input type="email" name="email" placeholder="Email" required="">
					<input type="password" name="pswd" placeholder="Password" required="">
					<input type="text" name="txt" placeholder="Cek Passsword" required="">
					<button>Daftar</button>
				</form>
			</div>

			<div class="login">
				<form action="backend/index.html">
					<label class="masuk" for="chk" aria-hidden="true">Masuk</label>
					<input  class="username" type="username" name="username" placeholder="Username" required="">
					<input  class="password" type="password" name="pswd" placeholder="Password" required="">
					<button type="submit" class="form-control btn btn-primary submit px-3" onclick="return login ()">Masuk</button>
				</form>
			</div>
	</div>

    <script src="js/jquery.min.js"></script>
  <script src="js/popper.js"></script>
  <script src="js/bootstrap.min.js"></script>
  <script src="js/main.js"></script>

</body>
    <script type="text/javascript">
        function login(){
            // ambil nilai yang diinputkan oleh user,
            // Lalu simpan ke dalam variabel
            username = document.getElementById("username").value;
            password = document.getElementById("password").value;

            if(username == "" || password == ""){
                alert("Username / Password Tidak Boleh Kosong")
                return false;
            }
            else if(password.length < 6){
                alert("Password kurang dari 6")
                return false;

            }
           else if(username == "Admin" && password == "123456"){
                window.location = "backend/admint.php"
                return false;
           }else{
            alert("username dan password salah")
           }
        }
    </script>

</html>
