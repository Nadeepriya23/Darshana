<?php

namespace backend\models;

use Yii;

/**
 * This is the model class for table "salary".
 *
 * @property integer $ComputerNo
 * @property string $Bank
 * @property string $Branch
 * @property string $AccountNo
 * @property integer $PaysheetIndex
 *
 * @property Teachers $computerNo
 */
class Salary extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'salary';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['ComputerNo'], 'required'],
            [['ComputerNo', 'PaysheetIndex'], 'integer'],
            [['Bank', 'Branch', 'AccountNo'], 'string', 'max' => 20],
            [['ComputerNo'], 'exist', 'skipOnError' => true, 'targetClass' => Teachers::className(), 'targetAttribute' => ['ComputerNo' => 'ComputerNo']],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'ComputerNo' => 'Computer No',
            'Bank' => 'Bank',
            'Branch' => 'Branch',
            'AccountNo' => 'Account No',
            'PaysheetIndex' => 'Paysheet Index',
        ];
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getComputerNo()
    {
        return $this->hasOne(Teachers::className(), ['ComputerNo' => 'ComputerNo']);
    }
    
    public function getTeacher()
    {
        return $this->hasOne(Teachers::className(), ['ComputerNo' => 'ComputerNo']);
    }

    
}
