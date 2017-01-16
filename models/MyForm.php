<?php

namespace app\models;

class MyForm extends \yii\base\Model 
{
    public $name;
    public $email;
    
    public function rules() {
        return [
            [['name', 'email'], 'required', 'message' => 'Neeeeed'],
            ['email', 'email', 'message' => 'wrooong'],
        ];
    }
   
}