<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "orderdetails".
 *
 * @property integer $DetailID
 * @property integer $DetailOrderID
 * @property integer $DetailProductID
 * @property string $DetailName
 * @property double $DetailPrice
 * @property string $DetailSKU
 * @property integer $DetailQuantity
 * @property integer $products_ProductID
 * @property integer $orders_OrderID
 *
 * @property Orders $ordersOrder
 * @property Products $productsProduct
 */
class Orderdetails extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'orderdetails';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['DetailOrderID', 'DetailProductID', 'DetailName', 'DetailPrice', 'DetailSKU', 'DetailQuantity', 'products_ProductID', 'orders_OrderID'], 'required'],
            [['DetailOrderID', 'DetailProductID', 'DetailQuantity', 'products_ProductID', 'orders_OrderID'], 'integer'],
            [['DetailPrice'], 'number'],
            [['DetailName'], 'string', 'max' => 250],
            [['DetailSKU'], 'string', 'max' => 50],
            [['orders_OrderID'], 'exist', 'skipOnError' => true, 'targetClass' => Orders::className(), 'targetAttribute' => ['orders_OrderID' => 'OrderID']],
            [['products_ProductID'], 'exist', 'skipOnError' => true, 'targetClass' => Products::className(), 'targetAttribute' => ['products_ProductID' => 'ProductID']],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'DetailID' => 'Detail ID',
            'DetailOrderID' => 'Detail Order ID',
            'DetailProductID' => 'Detail Product ID',
            'DetailName' => 'Detail Name',
            'DetailPrice' => 'Detail Price',
            'DetailSKU' => 'Detail Sku',
            'DetailQuantity' => 'Detail Quantity',
            'products_ProductID' => 'Products  Product ID',
            'orders_OrderID' => 'Orders  Order ID',
        ];
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getOrdersOrder()
    {
        return $this->hasOne(Orders::className(), ['OrderID' => 'orders_OrderID']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getProductsProduct()
    {
        return $this->hasOne(Products::className(), ['ProductID' => 'products_ProductID']);
    }
}
