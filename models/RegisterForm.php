<?php

namespace app\models;

use Yii;
use yii\base\Model;

/**
 * RegisterForm is the model behind the register form.
 * @property-read User|null $user
 * 
 */
class RegisterForm extends Model
{
    public $name;
    public $username;
    public $password;
    public $email;

    /**
     * @return array the validation rules.
     */
    public function rules()
    {
        return [
            [['name', 'username', 'password', 'email'], 'required'],
            [['name', 'username', 'password', 'email'], 'string', 'max' => 255],
            ['email', 'email'],
            ['username', 'unique', 'targetClass' => User::class],
            ['email', 'unique', 'targetClass' => User::class],
        ];
    }

    /**
     * Register user.
     *
     * @return bool whether the user is registered successfully
     */
    public function register()
    {
        if (!$this->validate()) {
            return false;
        }

        $user = new User();
        $user->name = $this->name;
        $user->username = $this->username;
        $user->password = Yii::$app->security->generatePasswordHash($this->password);
        $user->email = $this->email;
        $user->save();

        return true;
    }
}
