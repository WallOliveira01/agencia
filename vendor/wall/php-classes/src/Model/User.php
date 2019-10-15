<?php

namespace Wall\Model;

use \Wall\DB\Sql;
use \Wall\Model;
use \Wall\Mailer;

class User extends Model{

    const SESSION = "User";
	const SECRET = "ConnectFilmsPassword_Secret";
	const SECRET_IV = "ConnectFilmsPassword_Secret_IV";
	const ERROR = "UserError";
	const ERROR_REGISTER = "UserErrorRegister";
	const SUCCESS = "UserSucesss";
	
	public static function getFromSession()
	{

		$user = new User();

		if (isset($_SESSION[User::SESSION]) && (int)$_SESSION[User::SESSION]['iduser'] > 0) {

			$user->setData($_SESSION[User::SESSION]);

		}

		return $user;

	}

    public static function login($login, $password)
	{

		$sql = new Sql();

		$results = $sql->select("SELECT * FROM tb_users a INNER JOIN tb_persons b ON a.idperson = b.idperson WHERE a.deslogin = :LOGIN", array(
			":LOGIN"=>$login
		)); 

		if (count($results) === 0)
		{
			throw new \Exception("Usuário inexistente ou senha inválida.");
		}

		$data = $results[0];

		if (password_verify($password, $data["despassword"]) === true)
		{

			$user = new User();

			$data['desperson'] = $data['desperson'];

			$user->setData($data);

			$_SESSION[User::SESSION] = $user->getValues();

			return $user;

		} else {
			throw new \Exception("Usuário inexistente ou senha inválida.");
		}

	}
	
	public static function checkLogin($inadmin = true)
	{

		if (
			!isset($_SESSION[User::SESSION])
			||
			!$_SESSION[User::SESSION]
			||
			!(int)$_SESSION[User::SESSION]["iduser"] > 0
		) {
			//Não está logado
			return false;

		} else {

			if ($inadmin === true && (bool)$_SESSION[User::SESSION]['inadmin'] === true) {

				return true;

			} else {
				
				return false;

			}

		}

	}

    public static function verifyLogin($inadmin = true)
	{

		if (!User::checkLogin($inadmin)) {

			if ($inadmin) {
				header("Location: /admin/login");
			} else {
				header("Location: /login");
			}
			exit;

		}

	}

    public static function logout()
    {
        $_SESSION[User::SESSION] = NULL;
    }

    public static function listAll()
	{

		$sql = new Sql();

		return $sql->select("SELECT * FROM tb_users a INNER JOIN tb_persons b USING(idperson) ORDER BY a.iduser");

	}

	public function save()
	{

		$sql = new Sql();

		$results = $sql->select("CALL sp_users_save(:desperson, :deslogin, :despassword, :desemail, :desphoto, :desfunction, :nrphone, :inadmin)", array(
			":desperson"=>$this->getdesperson(),
			":deslogin"=>$this->getdeslogin(),
			":despassword"=>$this->getdespassword(),
			":desemail"=>$this->getdesemail(),
			":desphoto"=>$this->getdesphoto(),
			":desfunction"=>$this->getdesfunction(),
			":nrphone"=>$this->getnrphone(),
			":inadmin"=>$this->getinadmin()
		));

		$this->setData($results[0]);

	}

	public function get($iduser)
	{

		$sql = new Sql();

		$results = $sql->select("SELECT * FROM tb_users a INNER JOIN tb_persons b USING(idperson) WHERE a.iduser = :iduser", array(
			":iduser"=>$iduser
		));

		$data = $results[0];

		$this->setData($data);

	}

	public function update()
	{

		$sql = new Sql();

		$results = $sql->select("CALL sp_usersupdate_save(:iduser, :desperson, :deslogin, :despassword, :desemail, :desphoto, :desfunction, :nrphone, :inadmin)", 
		array(
			":iduser"=>$this->getiduser(),
			":desperson"=>$this->getdesperson(),
			":deslogin"=>$this->getdeslogin(),
			":despassword"=>$this->getdespassword(),
			":desemail"=>$this->getdesemail(),
			":desphoto"=>$this->getdesphoto(),
			":desfunction"=>$this->getdesfunction(),
			":nrphone"=>$this->getnrphone(),
			":inadmin"=>$this->getinadmin()
		));

		$this->setData($results[0]);		

	}

	public function delete()
	{

		$sql = new Sql();

		$sql->query("CALL sp_users_delete(:iduser)", array(
			":iduser"=>$this->getiduser()
		));

	}

	public function checkPhoto()
	{

		if (file_exists(
			$_SERVER['DOCUMENT_ROOT'] . DIRECTORY_SEPARATOR . 
			"res" . DIRECTORY_SEPARATOR . 
			"admin" . DIRECTORY_SEPARATOR . 
			"dist" . DIRECTORY_SEPARATOR . 
			"img" . DIRECTORY_SEPARATOR .
			"user" . DIRECTORY_SEPARATOR . 
			$this->getiduser() . ".jpg"
			)) {

			$url = "/res/admin/dist/img/user/" . $this->getiduser() . ".jpg";

		} else {

			$url = "/res/admin/dist/img/user/default.jpg";

		}

		return $this->setdesphoto($url);

	}

	public function getValues()
	{

		$this->checkPhoto();

		$values = parent::getValues();

		return $values;

	}

	public function setPhoto($file)
	{

		$extension = explode('.', $file['name']);
		$extension = end($extension);

		switch ($extension) {

			case "jpg":
			case "jpeg":
			$image = imagecreatefromjpeg($file["tmp_name"]);

			$widthOriginal = imagesx($image);

			$heigthOriginal = imagesy($image);

			$width = 160;
			$heigth = 160;

			$newWidth = $width ? $width : floor(($widthOriginal / $heigthOriginal) * $heigth);

			$newHeigth = $heigth ? $heigth : floor(($heigthOriginal / $widthOriginal) * $width);

			$imagemresized = imagecreatetruecolor($newWidth, $newHeigth);

			imagecopyresampled($imagemresized, $image, 0, 0, 0, 0, $newWidth, $newHeigth, $widthOriginal, $heigthOriginal);

			break;

			case "gif":
			$image = imagecreatefromgif($file["tmp_name"]);
			$widthOriginal = imagesx($image);

			$heigthOriginal = imagesy($image);

			$width = 160;
			$heigth = 160;

			$newWidth = $width ? $width : floor(($widthOriginal / $heigthOriginal) * $heigth);

			$newHeigth = $heigth ? $heigth : floor(($heigthOriginal / $widthOriginal) * $width);

			$imagemresized = imagecreatetruecolor($newWidth, $newHeigth);

			imagecopyresampled($imagemresized, $image, 0, 0, 0, 0, $newWidth, $newHeigth, $widthOriginal, $heigthOriginal);
			break;

			case "png":
			$image = imagecreatefrompng($file["tmp_name"]);
			$widthOriginal = imagesx($image);

			$heigthOriginal = imagesy($image);

			$width = 160;
			$heigth = 200;

			$newWidth = $width ? $width : floor(($widthOriginal / $heigthOriginal) * $heigth);

			$newHeigth = $heigth ? $heigth : floor(($heigthOriginal / $widthOriginal) * $width);

			$imagemresized = imagecreatetruecolor($newWidth, $newHeigth);

			imagecopyresampled($imagemresized, $image, 0, 0, 0, 0, $newWidth, $newHeigth, $widthOriginal, $heigthOriginal);
			break;

		}

		$dist = $_SERVER['DOCUMENT_ROOT'] . DIRECTORY_SEPARATOR . 
			"res" . DIRECTORY_SEPARATOR . 
			"admin" . DIRECTORY_SEPARATOR . 
			"dist" . DIRECTORY_SEPARATOR . 
			"img" . DIRECTORY_SEPARATOR .
			"user" . DIRECTORY_SEPARATOR .  
			$this->getiduser() . ".jpg";

		imagejpeg($imagemresized, $dist);

		imagedestroy($imagemresized);

		$this->checkPhoto();

	}	

	public static function getForgot($email, $inadmin = true)
	{
		$sql = new Sql();
		$results = $sql->select("SELECT *
			FROM tb_persons a
			INNER JOIN tb_users b USING(idperson)
			WHERE a.desemail = :email;
		", array(
			":email"=>$email
		));
		if (count($results) === 0)
		{
			throw new \Exception("Não foi possível recuperar a senha.");
		}
		else
		{
			$data = $results[0];
			$results2 = $sql->select("CALL sp_userspasswordsrecoveries_create(:iduser, :desip)", array(
				":iduser"=>$data['iduser'],
				":desip"=>$_SERVER['REMOTE_ADDR']
			));
			if (count($results2) === 0)
			{
				throw new \Exception("Não foi possível recuperar a senha.");
			}
			else
			{
				$dataRecovery = $results2[0];
				$code = openssl_encrypt($dataRecovery['idrecovery'], 'AES-128-CBC', pack("a16", User::SECRET), 0, pack("a16", User::SECRET_IV));
				$code = base64_encode($code);
				if ($inadmin === true) {
					$link = "http://localhost/admin/forgot/reset?code=$code";
				} else {
					$link = "http://localhost/forgot/reset?code=$code";
					
				}				
				$mailer = new Mailer($data['desemail'], $data['desperson'], "Redefinir senha da Hcode Store", "forgot", array(
					"name"=>$data['desperson'],
					"link"=>$link
				));				
				$mailer->send();
				return $link;
			}
		}
	}

	public static function validForgotDecrypt($code)
	{
		$code = base64_decode($code);
		$idrecovery = openssl_decrypt($code, 'AES-128-CBC', pack("a16", User::SECRET), 0, pack("a16", User::SECRET_IV));
		$sql = new Sql();
		$results = $sql->select("SELECT *
			FROM tb_userspasswordsrecoveries a
			INNER JOIN tb_users b USING(iduser)
			INNER JOIN tb_persons c USING(idperson)
			WHERE
				a.idrecovery = :idrecovery
				AND
				a.dtrecovery IS NULL
				AND
				DATE_ADD(a.dtregister, INTERVAL 1 HOUR) >= NOW();
		", array(
			":idrecovery"=>$idrecovery
		));
		if (count($results) === 0)
		{
			throw new \Exception("Não foi possível recuperar a senha.");
		}
		else
		{
			return $results[0];
		}
	}

	public static function setFogotUsed($idrecovery)
	{
		$sql = new Sql();
		$sql->query("UPDATE tb_userspasswordsrecoveries SET dtrecovery = NOW() WHERE idrecovery = :idrecovery", array(
			":idrecovery"=>$idrecovery
		));
	}

	public function setPassword($password)
	{

		$sql = new Sql();

		$sql->query("UPDATE tb_users SET despassword = :password WHERE iduser = :iduser", array(
			":password"=>$password,
			":iduser"=>$this->getiduser()
		));

	}

	public static function setError($msg)
	{

		$_SESSION[User::ERROR] = $msg;

	}

	public static function getError()
	{

		$msg = (isset($_SESSION[User::ERROR]) && $_SESSION[User::ERROR]) ? $_SESSION[User::ERROR] : '';

		User::clearError();

		return $msg;

	}

	public static function clearError()
	{

		$_SESSION[User::ERROR] = NULL;

	}

	public static function setSuccess($msg)
	{

		$_SESSION[User::SUCCESS] = $msg;

	}

	public static function getSuccess()
	{

		$msg = (isset($_SESSION[User::SUCCESS]) && $_SESSION[User::SUCCESS]) ? $_SESSION[User::SUCCESS] : '';

		User::clearSuccess();

		return $msg;

	}

	public static function clearSuccess()
	{

		$_SESSION[User::SUCCESS] = NULL;

	}

	public static function setErrorRegister($msg)
	{

		$_SESSION[User::ERROR_REGISTER] = $msg;

	}

	public static function getErrorRegister()
	{

		$msg = (isset($_SESSION[User::ERROR_REGISTER]) && $_SESSION[User::ERROR_REGISTER]) ? $_SESSION[User::ERROR_REGISTER] : '';

		User::clearErrorRegister();

		return $msg;

	}

	public static function clearErrorRegister()
	{

		$_SESSION[User::ERROR_REGISTER] = NULL;

	}
	
	public static function getPasswordHash($password)
	{

		return password_hash($password, PASSWORD_DEFAULT, [
			'cost'=>12
		]);

	}

    
}

?>