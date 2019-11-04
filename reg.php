<?
$link=mysqli_connect('localhost','root','','car');

if(isset($_POST['reg'])){

	$login=trim($_POST['login']);
	$pass=trim($_POST['pass']);
	$pass_copy=trim($_POST['pass_copy']);
	if(empty($login) || empty($pass) || empty($pass_copy)){
		$error="Барлық өрістер толтырылған жоқ";
	}else
	{
		if($pass!=$pass_copy){
			$error="Пароль сәйкес емес";
		}
		elseif(strlen($pass)<6){
			$error="Пароль 6 символдан кем болмау керек";
		}
		elseif(!preg_match("/^([a-zA-Z0-9]){3,10}$/",$login)){
	$error="Логин тек латын символдары мен сандардан тұруы керек
	логин 3 символдан кем болмау керек";
		
		}
						
		else{
			$sql="SELECT * FROM users WHERE login='$login' LIMIT 1";
			$res=mysqli_query($link,$sql);
			$count=mysqli_num_rows($res);
			if($count>0){
				$error="Бұл логинмен сіз тіркеле алмайсыз. Логин бос емес";
			}
			else{
				$pass=md5($pass);
				$sql="INSERT INTO users(login,users.password)
					VALUES('$login','$pass')";
					$res=mysqli_query($link,$sql);
					if($res){
						$error="Cіз сәтті тіркелдіңіз <a href='aut.php'>Кіру</a>";

					}
					else{
						$error="ERROR ";
					}
			}
			
			
		
		}

	}

}


?>
<!DOCTYPE html>
<html>
<head>
	<title></title>

</head>
<body>
	<style>
		input{display: block;
			margin: 25px;
		}
		form{
			border:1px solid blue;
		}
		.error{
			color:red;
		}
	</style>
	<div>
		<h1>Тіркелу</h1>
		<form method="POST">
			<div class="error"><?=$error?></div>
			<input type="text" name="login" placeholder="Логин">
			<input type="password" name="pass" placeholder="Пароль">
			<input type="password" name="pass_copy" placeholder="Парольді қайталаңыз">
			<input type="submit" name="reg" value="Тіркелу">
		</form>
	</div>
</body>
</html>
