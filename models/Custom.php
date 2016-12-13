<?php

namespace app\models;

use yii\base\Model;
use app\models\User;

class Custom extends Model
{
    public $name;
    public $email;
    public $subject;
    public $body;
    public $url;
    public $age;
    public $verifyCode;
//    public $pass;

    public function rules()
    {
        return [
            [['name', 'email', 'subject', 'body', 'verifyCode'], 'required'],
            ['name', 'match', 'pattern' => '/^[a-z,A-Z]\w*$/i'],
            ['email', 'email'],
            [['name', 'email'], 'trim'],
            ['subject', 'string', 'length' => [3, 100]],
            ['body', 'string'],
            ['body', 'safe'],
            ['url', 'url', 'defaultScheme' => 'http'],
            ['age', 'integer', 'min' => 5],
            ['verifyCode', 'captcha'],
            // ['pass', 'passRules'],
        ];
    }

//    public function passRules()
//    {
//        $user = User::findByUsername($this->username);
//
//        if ($user || $user->validatePassword($this->password)) {
//            $this->addError('pass', 'Error!');
//        }
//    }
}