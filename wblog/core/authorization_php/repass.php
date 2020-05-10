<?php
	//require 'db.php';

    //$login = $_SESSION['logged_user']->login;
    echo $login;

    print_r($_POST);

  $data = $_POST;
	if ( isset($data['send_repass']) )
	{
		$user = R::findOne('users', 'login = ?', $login);
    $id  = $user->id;
    if ( $user )
      {


			//логин существует
			if ( password_verify($data['log_oldpass'], $user->password))

			     {

				//если пароль совпадает, и новый пароль не короче 7 символов то меняем парол

        if (strlen($data['log_newpass']) >= 7)
                    {
        $pass = R::load('users', $id);
    		$pass->password = password_hash($data['log_newpass'], PASSWORD_DEFAULT);
    		R::store($pass);
                     }else
                                {
                                $errors[] = 'Новый пароль короче 7 символов!';
                                }

				   }else
			         {
				        $errors[] = 'Неверно введен текущий пароль!';
			          }

  }}

  //$user_1 = R::findOne('users', 'email = ?', array($data['log_mail']));
  //print_r($user_1);
  //if ($user_1){
    //$email_1  = $user_1->email;
		//$id  = $user_1->id;
		//include "./core/send_email.php";
		//$pass_new = substr(str_shuffle('0123456789abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ'), 0, 7);
		//echo send_email ("$email_1","$pass_new").'<br/>';
		//$pass = R::load('users', $id);
    //$pass->password = password_hash($pass_new, PASSWORD_DEFAULT);
    //R::store($pass);

		//echo password_hash($pass_new, PASSWORD_DEFAULT);
		//print_r($pass).'<br/>';
		//echo $pass->password.'<br/>';

    //отправка письма на email


    if (isset($errors)){
    echo '<div class = "login_text"><div id="errors" style="color:red;">' .array_shift($errors). '</div></div><hr>';
    }


?>
 <?php// if (!isset($data['log_newpass'] == $pass->password)): ?>
 <?php// if (password_verify($data['log_newpass'] == $pass->password)): ?>

<?php// else: ?>
  <form class = "login_text"  method="POST">
    <button type="submit" class="x">×</button>
    <strong>Текущий пароль</strong>
    <input type="text" name="log_oldpass" value = 'e' ><br/>
  	<strong>Новый пароль</strong>
  	<input type="text" name="log_newpass" value = 'минимум 7 символов' ><br/>
  	<button type="submit" name="send_repass">Отправить новый пароль</button>
  </form>
<?php// endif; ?>
<?php// endif; ?>
