<?php

namespace app\models;

use Yii;
use yii\base\Model;

class SignupForm extends Model
{
    public $first_name;
    public $middle_names;
    public $last_name;
    public $email;
    public $password;
    public $rememberMe = true;

    private $_user = false;

    public function rules()
    {
        return [
            [
                ['first_name', 'last_name', 'email', 'password'],
                'required'
            ],
            [
                'rememberMe',
                'boolean'
            ],
            // password is validated by validatePassword()
            [
                'password',
                'validatePassword'
            ],
        ];
    }

    public function validatePassword($attribute, $params)
    {
        if (!$this->hasErrors()) {
            $user = $this->getUser();
            // var_dump($this->getUser());
            // die();

            if (!$user || !$user->validatePassword($this->password)) {
                $this->addError($attribute, 'Incorrect email or password.');
            }
        }
    }

    public function login()
    {
        if ($this->validate()) {
            // var_dump($this->getUser());
            // var_dump(Yii::$app->user->login($this->getUser(), $this->rememberMe ? 3600 * 24 * 30 : 0));
            // die();
            return Yii::$app->user->login($this->getUser(), $this->rememberMe ? 3600 * 24 * 30 : 0);
        }
        return false;
    }

    public function getUser()
    {
        if ($this->_user === false) {
            $this->_user = User::findByEmail($this->email);
            // var_dump($this->_user);
            // die();
        }

        return $this->_user;
    }
}
