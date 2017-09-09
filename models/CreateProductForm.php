<?php

namespace app\models;

use Yii;
use yii\base\Model;

/**
 * LoginForm is the model behind the login form.
 *
 * @property User|null $user This property is read-only.
 *
 */
class CreateProductForm extends Model
{
    public $productname;
    public $productcategory;



    /**
     * @return array the validation rules.
     */
    public function rules()
    {
        return [
            // username and password are both required
            [['productname', 'productcategory'], 'required'],

        ];
    }

    // 
    // public function validateForm($attribute, $params)
    // {
    //     if (!$this->hasErrors()) {
    //         $user = $this->getUser();
    //
    //         if (!$user || !$user->validatePassword($this->password)) {
    //             $this->addError($attribute, 'Incorrect username or password.');
    //         }
    //     }
    // }
    //
    // /**
    //  * Logs in a user using the provided username and password.
    //  * @return bool whether the user is logged in successfully
    //  */
    // public function login()
    // {
    //     if ($this->validate()) {
    //         return Yii::$app->user->login($this->getUser(), $this->rememberMe ? 3600*24*30 : 0);
    //     }
    //     return false;
    // }



        /**
         * @inheritdoc
         */
        public function attributeLabels()
        {
            return [
                'productname' => 'Product Name',
                'productcategory' => 'Product Category',

            ];
        }




}
