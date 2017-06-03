<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "catalog".
 *
 * @property integer $id
 * @property string $name
 * @property string $description
 * @property string $price
 * @property string $image
 * @property integer $qty
 * @property string $category
 * @property integer $onhand
 * @property string $size
 * @property string $color
 */
class Catalog extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'catalog';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['size', 'catalog_id'], 'required'],
            [['size'], 'string'],
            [['catalog_id'], 'integer'],
            [[ 'size'], 'string', 'max' => 255],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'catalog_id' => 'Catalog_id',
            'size' => 'Size',
        ];
    }
}
