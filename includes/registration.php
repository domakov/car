
<?
$link=mysqli_connect('localhost','root','','car');
include_once("func.php");
include_once("head.php");
if(isset($_POST['registration'])){

	$login=trim($_POST['login']);
	$pass=trim($_POST['pass']);
	$pass_copy=trim($_POST['pass_copy']);
	$name=trim($_POST['name']);
	$email=trim($_POST['email']);
	$tel=trim($_POST['tel']);
	$add_id=trim($_POST['add_id']);
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
				$sql="INSERT INTO users(login,users.password,name,email,tel,address_id)
					VALUES('$login','$pass','$name','$email',$tel,$add_id)";
					echo "$sql";
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
<div class="registration">
		<h1>Тіркелу</h1>
		<form method="POST" class="reg">
			<div class="error"><?=$error?></div>
			<input type="text" name="name" placeholder="Имя"><br/>
			<input type="text" name="login" placeholder="Логин"><br/>
			<input type="password" name="pass" placeholder="Пароль"><br/>
			<input type="password" name="pass_copy" placeholder="Парольді қайталаңыз"><br/>
			<input type="email" name="email" placeholder="Email"><br/>
			<input type="text" name="tel" placeholder="Номер телефона"><br/>
			<select name="add_id">
					<?
					$cities=fetchTable('address');
					foreach ($cities as $city) {
						?>
						<option value="<?=$city['id']?>"><?=$city['city']?></option>
						<?
					}
					?>
			</select>
			<input type="submit" name="registration" value="Тіркелу"><br/>
			
		</form>
	</div>
