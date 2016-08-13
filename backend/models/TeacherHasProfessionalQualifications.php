<?php

namespace backend\models;

use Yii;

/**
 * This is the model class for table "teacher_has_professional_qualifications".
 *
 * @property integer $TeacherId
 * @property integer $QualificationId
 * @property string $Year
 * @property string $Institute
 * @property string $ValidDate
 * @property string $Subject_1
 * @property string $Subject_2
 * @property string $Subject_3
 * @property integer $Id
 *
 * @property Teachers $teacher
 * @property ProfessionalQualifications $qualification
 */
class TeacherHasProfessionalQualifications extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'teacher_has_professional_qualifications';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['TeacherId', 'QualificationId'], 'required'],
            [['TeacherId', 'QualificationId'], 'integer'],
            [['ValidDate'], 'safe'],
            [['Year'], 'string', 'max' => 20],
            [['Institute'], 'string', 'max' => 100],
            [['Subject_1', 'Subject_2', 'Subject_3'], 'string', 'max' => 50],
            [['TeacherId'], 'exist', 'skipOnError' => true, 'targetClass' => Teachers::className(), 'targetAttribute' => ['TeacherId' => 'teacherId']],
            [['QualificationId'], 'exist', 'skipOnError' => true, 'targetClass' => ProfessionalQualifications::className(), 'targetAttribute' => ['QualificationId' => 'QualificationId']],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'TeacherId' => 'Teacher ID',
            'QualificationId' => 'Qualification ID',
            'Year' => 'Year',
            'Institute' => 'Institute',
            'ValidDate' => 'Valid Date',
            'Subject_1' => 'Subject 1',
            'Subject_2' => 'Subject 2',
            'Subject_3' => 'Subject 3',
            'Id' => 'ID',
        ];
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getTeacher()
    {
        return $this->hasOne(Teachers::className(), ['teacherId' => 'TeacherId']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getQualification()
    {
        return $this->hasOne(ProfessionalQualifications::className(), ['QualificationId' => 'QualificationId']);
    }
}
