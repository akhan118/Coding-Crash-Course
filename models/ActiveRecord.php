<?php

namespace app\models;

use Yii;
use yii\base\Model;
use yii\db\ActiveRecord;

class Sizes extends ActiveRecord
{
     const STATUS_INACTIVE = 0;
     const STATUS_ACTIVE = 1;

     /**
      * @return string the name of the table associated with this ActiveRecord class.
      */
     public static function tableName()
     {
         return '{{sizes}}';
     }
}

class Catalog extends ActiveRecord
{
     const STATUS_INACTIVE = 0;
     const STATUS_ACTIVE = 1;

     /**
      * @return string the name of the table associated with this ActiveRecord class.
      */
     public static function tableName()
     {
         return '{{catalog}}';
     }

     public function getSizes()
     {
       return $this->hasMany(Sizes::className(), ['id' => 'catalog_id']);
     }
}
