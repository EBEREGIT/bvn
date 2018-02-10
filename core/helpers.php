<?php 
	function display_errors($errors)
	{
		$display = '<ul class="bg-danger">';
		foreach ($errors as $error) {
			$display .= '<li class="text-danger">'.$error.'</li>';
		}

		$display .= '</ul>';
		return $display;
	}

	function sanitize($dirty)
	{
		return htmlentities($dirty, ENT_QUOTES, "UTF-8");
	}

	function login($user_id)
	{
		$_SESSION['user'] = $user_id;
		global $db;
		$date = date("Y-m-d H:i:s");
		$db->query("UPDATE user SET last_login = '$date' WHERE user_id = '$user_id'");
		$_SESSION['success_flash'] = "You are now logged in!";
		header('Location: profile.php');
	}

	function is_logged_in()
	{
		if (isset($_SESSION['user']) && $_SESSION['user'] > 0) {
			return true;
		}			
		return false;
	}

	function login_error_redirect($url = 'login.php')
	{
		$_SESSION['error_flash'] = 'You must be logged in to access that page!';
		header('Location: '.$url);
	}
?>