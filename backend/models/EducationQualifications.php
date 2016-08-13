<?php

namespace backend\models;

use Yii;

/**
 * This is the model class for table "education_qualifications".
 *
 * @property integer $QualificationId
 * @property string $Qualification
 *
 * @property TeacherHasEducationQualifications[] $teacherHasEducationQualifications
 */
class EducationQualifications extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'education_qualifications';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['Qualification'], 'string', 'max' => 20],
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
    public function getTeacherHasEducationQualifications()
    {
        return $this->hasMany(TeacherHasEducationQualifications::className(), ['QualificationId' => 'QualificationId']);
    }
}
