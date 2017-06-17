<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "optiongroups".
 *
 * @property integer $OptionGroupID
 * @property string $OptionGroupName
 *
 * @property Options[] $options
 */
class Optiongroups extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'optiongroups';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['OptionGroupName'], 'string', 'max' => 50],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'OptionGroupID' => 'Option Group ID',
            'OptionGroupName' => 'Option Group Name',
        ];
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getOptions()
    {
        return $this->hasMany(Options::className(), ['optiongroups_OptionGroupID1' => 'OptionGroupID']);
    }
}
