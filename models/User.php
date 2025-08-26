<?php

namespace app\models;

class User extends \app\models\Model implements \yii\web\IdentityInterface
{
	// public $id;
	// public $email;
	// public $password;
	public $authKey = '1234';
	public $accessToken = '4321';

	public static function tableName()
	{
		return 'user';
	}

	public static function findIdentity($id)
	{
		// var_dump($id);
		// die();
		return User::findOne(['id' => $id]);
	}

	public static function findIdentityByAccessToken($token, $type = null)
	{
		// var_dump($token);
		// die();
		return User::findOne(['accessToken' => $token]);
	}

	public static function findByEmail($email)
	{
		// var_dump($email);
		// die();
		return User::findOne([
			'email' => $email,
		]);
	}

	public function rules()
	{
		return [
			[
				['first_name', 'last_name', 'email', 'password', 'created_at', 'last_updated_at'],
				'required'
			],
			[
				['middle_names', 'email'],
				'string',
				'max' => 50
			],
			[
				['first_name', 'last_name', 'password'],
				'string',
				'max' => 25
			],
			[
				['created_at', 'last_updated_at'],
				'integer'
			],
		];
	}

	public function getId()
	{
		return $this->id;
	}

	public function getAuthKey()
	{
		return $this->authKey;
	}

	public function validateAuthKey($authKey)
	{
		return $this->authKey === $authKey;
	}

	public function validatePassword($password)
	{
		// var_dump($this->password);
		// die();
		return $this->password === $password;
	}
}
