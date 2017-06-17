<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "orders".
 *
 * @property integer $OrderID
 * @property integer $OrderUserID
 * @property double $OrderAmount
 * @property string $OrderShipName
 * @property string $OrderShipAddress
 * @property string $OrderShipAddress2
 * @property string $OrderCity
 * @property string $OrderState
 * @property string $OrderZip
 * @property string $OrderCountry
 * @property string $OrderPhone
 * @property string $OrderFax
 * @property double $OrderShipping
 * @property double $OrderTax
 * @property string $OrderEmail
 * @property string $OrderDate
 * @property integer $OrderShipped
 * @property string $OrderTrackingNumber
 * @property integer $user_id
 *
 * @property Orderdetails[] $orderdetails
 * @property User $user
 */
class Orders extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'orders';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['OrderUserID', 'OrderAmount', 'OrderShipName', 'OrderShipAddress', 'OrderShipAddress2', 'OrderCity', 'OrderState', 'OrderZip', 'OrderCountry', 'OrderPhone', 'OrderFax', 'OrderShipping', 'OrderTax', 'OrderEmail', 'user_id'], 'required'],
            [['OrderUserID', 'OrderShipped', 'user_id'], 'integer'],
            [['OrderAmount', 'OrderShipping', 'OrderTax'], 'number'],
            [['OrderDate'], 'safe'],
            [['OrderShipName', 'OrderShipAddress', 'OrderShipAddress2', 'OrderEmail'], 'string', 'max' => 100],
            [['OrderCity', 'OrderState', 'OrderCountry'], 'string', 'max' => 50],
            [['OrderZip', 'OrderPhone', 'OrderFax'], 'string', 'max' => 20],
            [['OrderTrackingNumber'], 'string', 'max' => 80],
            [['user_id'], 'exist', 'skipOnError' => true, 'targetClass' => User::className(), 'targetAttribute' => ['user_id' => 'id']],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'OrderID' => 'Order ID',
            'OrderUserID' => 'Order User ID',
            'OrderAmount' => 'Order Amount',
            'OrderShipName' => 'Order Ship Name',
            'OrderShipAddress' => 'Order Ship Address',
            'OrderShipAddress2' => 'Order Ship Address2',
            'OrderCity' => 'Order City',
            'OrderState' => 'Order State',
            'OrderZip' => 'Order Zip',
            'OrderCountry' => 'Order Country',
            'OrderPhone' => 'Order Phone',
            'OrderFax' => 'Order Fax',
            'OrderShipping' => 'Order Shipping',
            'OrderTax' => 'Order Tax',
            'OrderEmail' => 'Order Email',
            'OrderDate' => 'Order Date',
            'OrderShipped' => 'Order Shipped',
            'OrderTrackingNumber' => 'Order Tracking Number',
            'user_id' => 'User ID',
        ];
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getOrderdetails()
    {
        return $this->hasMany(Orderdetails::className(), ['orders_OrderID' => 'OrderID']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getUser()
    {
        return $this->hasOne(User::className(), ['id' => 'user_id']);
    }
}
