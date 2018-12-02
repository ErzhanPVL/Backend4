<?php
class Controller_Login extends Controller
{
	function action_index()
	{
		$connect=mysqli_connect("localhost","root","","test");
		$DataBase=mysqli_query($connect, "SELECT * FROM `users`");
		#$data["login_status"] = "";		
		if(isset($_POST['usr']) && isset($_POST['pwd']))
		{
			$login = $_POST['usr'];
			$password =$_POST['pwd'];
			/*
			Производим аутентификацию, сравнивая полученные значения со значениями из БД.
			Пароль должен быть захеширован.
			*/
				function match($DataBase)
				{
					while($user=mysqli_fetch_array($DataBase))
					{
						if($_POST['usr']==$user['login'] && password_verify($_POST['pwd'], $user['password'])==true)
						//При регистрации используем $hashPassword = password_hash($pwd, PASSWORD_BCRYPT)
							{
								return 1;
							}
					}
				return 0;
				}
			if (match($DataBase)==1) {
								$data["login_status"] = "access_granted";	
								session_start();
								echo $_SESSION['admin'];
								$_SESSION['admin'] = $password;
								header('Location:/admin/');
							}//Переход при совпадение с какой то записью
			else 
			{
				$data["login_status"] = "access_denied"; //Возврат в случае неудачи
			}
		}
		else
		{
			$data["login_status"] = "";
		}
		$this->view->generate('login_view.php', 'template_view.php', $data);
	}
}