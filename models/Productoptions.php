<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "productoptions".
 *
 * @property integer $ProductOptionID
 * @property integer $ProductID
 * @property integer $OptionID
 * @property double $OptionPriceIncrement
 * @property integer $OptionGroupID
 * @property integer $products_ProductID
 * @property integer $options_OptionID
 *
 * @property Options $optionsOption
 * @property Products $productsProduct
 */
class Productoptions extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'productoptions';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['ProductID', 'OptionID', 'OptionGroupID', 'products_ProductID', 'options_OptionID'], 'required'],
            [['ProductID', 'OptionID', 'OptionGroupID', 'products_ProductID', 'options_OptionID'], 'integer'],
            [['OptionPriceIncrement'], 'number'],
            [['options_OptionID'], 'exist', 'skipOnError' => true, 'targetClass' => Options::className(), 'targetAttribute' => ['options_OptionID' => 'OptionID']],
            [['products_ProductID'], 'exist', 'skipOnError' => true, 'targetClass' => Products::className(), 'targetAttribute' => ['products_ProductID' => 'ProductID']],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'ProductOptionID' => 'Product Option ID',
            'ProductID' => 'Product ID',
            'OptionID' => 'Option ID',
            'OptionPriceIncrement' => 'Option Price Increment',
            'OptionGroupID' => 'Option Group ID',
            'products_ProductID' => 'Products  Product ID',
            'options_OptionID' => 'Options  Option ID',
        ];
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getOptionsOption()
    {
        return $this->hasOne(Options::className(), ['OptionID' => 'options_OptionID']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getProductsProduct()
    {
        return $this->hasOne(Products::className(), ['ProductID' => 'products_ProductID']);
    }
}
