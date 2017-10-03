<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "products".
 *
 * @property integer $ProductID
 * @property string $ProductSKU
 * @property string $ProductName
 * @property double $ProductPrice
 * @property double $ProductWeight
 * @property string $ProductCartDesc
 * @property string $ProductShortDesc
 * @property string $ProductLongDesc
 * @property string $ProductThumb
 * @property string $ProductImage
 * @property string $ProductUpdateDate
 * @property double $ProductStock
 * @property integer $ProductLive
 * @property integer $ProductUnlimited
 * @property string $ProductLocation
 * @property integer $productcategories_CategoryID
 *
 * @property Orderdetails[] $orderdetails
 * @property Productoptions[] $productoptions
 * @property Productcategories $productcategoriesCategory
 */
class Products extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'products';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
           [[ 'ProductName', 'productcategories_CategoryID'], 'required'],
            // [['ProductSKU', 'ProductName', 'ProductPrice', 'ProductWeight', 'ProductCartDesc', 'ProductShortDesc', 'ProductLongDesc', 'ProductThumb', 'ProductImage', 'productcategories_CategoryID'], 'required'],
            [['ProductPrice', 'ProductWeight', 'ProductStock'], 'number'],
            [['ProductLongDesc'], 'string'],
            [['ProductUpdateDate'], 'safe'],
            [['ProductLive', 'ProductUnlimited', 'productcategories_CategoryID'], 'integer'],
            [['ProductSKU'], 'string', 'max' => 50],
            [['ProductName', 'ProductThumb', 'ProductImage'], 'string', 'max' => 100],
            [['ProductCartDesc', 'ProductLocation'], 'string', 'max' => 250],
            [['ProductShortDesc'], 'string', 'max' => 1000],
            [['productcategories_CategoryID'], 'exist', 'skipOnError' => true, 'targetClass' => Productcategories::className(), 'targetAttribute' => ['productcategories_CategoryID' => 'CategoryID']],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'ProductID' => 'Product ID',
            'ProductSKU' => 'Product Sku',
            'ProductName' => 'Product Name',
            'ProductPrice' => 'Product Price',
            'ProductWeight' => 'Product Weight',
            'ProductCartDesc' => 'Product Cart Desc',
            'ProductShortDesc' => 'Product Short Desc',
            'ProductLongDesc' => 'Product Long Desc',
            'ProductThumb' => 'Product Thumb',
            'ProductImage' => 'Product Image',
            'ProductUpdateDate' => 'Product Update Date',
            'ProductStock' => 'Product Stock',
            'ProductLive' => 'Product Live',
            'ProductUnlimited' => 'Product Unlimited',
            'ProductLocation' => 'Product Location',
            'productcategories_CategoryID' => 'Productcategories  Category ID',
        ];
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getOrderdetails()
    {
        return $this->hasMany(Orderdetails::className(), ['products_ProductID' => 'ProductID']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getProductoptions()
    {
        return $this->hasMany(Productoptions::className(), ['products_ProductID' => 'ProductID']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getProductcategoriesCategory()
    {
        return $this->hasOne(Productcategories::className(), ['CategoryID' => 'productcategories_CategoryID']);
    }
}
