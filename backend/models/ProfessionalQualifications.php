<?php

namespace backend\models;

use Yii;

/**
 * This is the model class for table "professional_qualifications".
 *
 * @property integer $QualificationId
 * @property string $Qualification
 *
 * @property TeacherHasProfessionalQualifications[] $teacherHasProfessionalQualifications
 */
class ProfessionalQualifications extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'professional_qualifications';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['Qualification'], 'string', 'max' => 150],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'QualificationId' => 'Qualification ID',
            'Qualification' => 'Qualification',
        ];
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getTeacherHasProfessionalQualifications()
    {
        return $this->hasMany(TeacherHasProfessionalQualifications::className(), ['QualificationId' => 'QualificationId']);
    }
}
