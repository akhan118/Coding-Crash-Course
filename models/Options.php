<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "options".
 *
 * @property integer $OptionID
 * @property string $OptionName
 * @property integer $optiongroups_OptionGroupID
 * @property integer $optiongroups_OptionGroupID1
 *
 * @property Optiongroups $optiongroupsOptionGroupID1
 * @property Productoptions[] $productoptions
 */
class Options extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'options';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['optiongroups_OptionGroupID', 'optiongroups_OptionGroupID1'], 'required'],
            [['optiongroups_OptionGroupID', 'optiongroups_OptionGroupID1'], 'integer'],
            [['OptionName'], 'string', 'max' => 50],
            [['optiongroups_OptionGroupID1'], 'exist', 'skipOnError' => true, 'targetClass' => Optiongroups::className(), 'targetAttribute' => ['optiongroups_OptionGroupID1' => 'OptionGroupID']],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'OptionID' => 'Option ID',
            'OptionName' => 'Option Name',
            'optiongroups_OptionGroupID' => 'Optiongroups  Option Group ID',
            'optiongroups_OptionGroupID1' => 'Optiongroups  Option Group Id1',
        ];
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getOptiongroupsOptionGroupID1()
    {
        return $this->hasOne(Optiongroups::className(), ['OptionGroupID' => 'optiongroups_OptionGroupID1']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getProductoptions()
    {
        return $this->hasMany(Productoptions::className(), ['options_OptionID' => 'OptionID']);
    }
}
