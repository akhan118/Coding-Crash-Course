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





    public function CreateProduct()
    {
    if (!$this->hasErrors()) {
      die('error');
    }else {
      die('no error');
    }
    }



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
