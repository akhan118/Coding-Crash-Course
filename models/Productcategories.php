<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "productcategories".
 *
 * @property integer $CategoryID
 * @property string $CategoryName
 *
 * @property Products[] $products
 */
class Productcategories extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'productcategories';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['CategoryName'], 'required'],
            [['CategoryName'], 'string', 'max' => 50],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'CategoryID' => 'Category ID',
            'CategoryName' => 'Category Name',
        ];
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getProducts()
    {
        return $this->hasMany(Products::className(), ['productcategories_CategoryID' => 'CategoryID']);
    }
}
