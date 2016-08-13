<?php

namespace backend\models;

use Yii;

/**
 * This is the model class for table "teachers".
 *
 * @property integer $teacherId
 * @property integer $TeacherIndex
 * @property string $Name
 * @property string $Address
 * @property string $NIC
 * @property string $Tel
 * @property string $DateOfBirth
 * @property string $DateOfFirstAppointment
 * @property string $DateofThisAppointment
 * @property integer $ComputerNo
 * @property string $Status
 * @property string $Image
 *
 * @property Salary $salary
 * @property TeacherHasEducationQualifications[] $teacherHasEducationQualifications
 * @property TeacherHasProfessionalQualifications[] $teacherHasProfessionalQualifications
 */
class Teachers extends \yii\db\ActiveRecord
{
    public $file;
	
	/**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'teachers';
    }

	
    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['TeacherIndex', 'ComputerNo'], 'integer'],
            [['NIC', 'ComputerNo'], 'required'],
            [['DateOfBirth', 'DateOfFirstAppointment', 'DateofThisAppointment'], 'safe'],
            [['Status'], 'string'],
			[['file'], 'file'],
            [['Name', 'Address'], 'string', 'max' => 255],
            [['NIC'], 'string', 'max' => 12],
            [['Tel'], 'string', 'max' => 11],
            [['Image'], 'string', 'max' => 250],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'teacherId' => 'Teacher ID',
            'TeacherIndex' => 'Teacher Index',
            'Name' => 'Name',
            'Address' => 'Address',
            'NIC' => 'Nic',
            'Tel' => 'Tel',
            'DateOfBirth' => 'Date Of Birth',
            'DateOfFirstAppointment' => 'Date Of First Appointment',
            'DateofThisAppointment' => 'Dateof This Appointment',
            'ComputerNo' => 'Computer No',
            'Status' => 'Status',
            'file' => 'Teacher Image',
        ];
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getSalary()
    {
        return $this->hasOne(Salary::className(), ['ComputerNo' => 'ComputerNo']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getTeacherHasEducationQualifications()
    {
        return $this->hasMany(TeacherHasEducationQualifications::className(), ['TeacherId' => 'teacherId']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getTeacherHasProfessionalQualifications()
    {
        return $this->hasMany(TeacherHasProfessionalQualifications::className(), ['TeacherId' => 'teacherId']);
    }
}
