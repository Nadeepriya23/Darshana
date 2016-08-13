<?php

namespace backend\models;

use Yii;

/**
 * This is the model class for table "professional_data".
 *
 * @property integer $id
 * @property string $service
 * @property string $class_and_grade
 * @property string $register_no
 * @property string $salary_increment_date
 * @property string $wop_no
 * @property string $post
 * @property integer $teachers_teacherId
 *
 * @property Teachers $teachersTeacher
 */
class ProfessionalData extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'professional_data';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['service', 'class_and_grade'], 'string'],
            [['teachers_teacherId'], 'required'],
            [['teachers_teacherId'], 'integer'],
            [['register_no', 'post'], 'string', 'max' => 50],
            [['salary_increment_date'], 'string', 'max' => 10],
            [['wop_no'], 'string', 'max' => 20],
            [['teachers_teacherId'], 'exist', 'skipOnError' => true, 'targetClass' => Teachers::className(), 'targetAttribute' => ['teachers_teacherId' => 'teacherId']],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'service' => 'Service',
            'class_and_grade' => 'Class And Grade',
            'register_no' => 'Register No',
            'salary_increment_date' => 'Salary Increment Date',
            'wop_no' => 'Wop No',
            'post' => 'Post',
            'teachers_teacherId' => 'Teacher Name ',
        ];
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getTeachersTeacher()
    {
        return $this->hasOne(Teachers::className(), ['teacherId' => 'teachers_teacherId']);
    }
}
