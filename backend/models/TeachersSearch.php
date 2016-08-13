<?php

namespace backend\models;

use Yii;
use yii\base\Model;
use yii\data\ActiveDataProvider;
use backend\models\Teachers;

/**
 * TeachersSearch represents the model behind the search form about `backend\models\Teachers`.
 */
class TeachersSearch extends Teachers
{
    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['teacherId', 'TeacherIndex', 'ComputerNo'], 'integer'],
            [['Name', 'Address', 'NIC', 'Tel', 'DateOfBirth', 'DateOfFirstAppointment', 'DateofThisAppointment', 'Status', 'Image'], 'safe'],
        ];
    }

    /**
     * @inheritdoc
     */
    public function scenarios()
    {
        // bypass scenarios() implementation in the parent class
        return Model::scenarios();
    }

    /**
     * Creates data provider instance with search query applied
     *
     * @param array $params
     *
     * @return ActiveDataProvider
     */
    public function search($params)
    {
        $query = Teachers::find();

        // add conditions that should always apply here

        $dataProvider = new ActiveDataProvider([
            'query' => $query,
        ]);

        $this->load($params);

        if (!$this->validate()) {
            // uncomment the following line if you do not want to return any records when validation fails
            // $query->where('0=1');
            return $dataProvider;
        }

        // grid filtering conditions
        $query->andFilterWhere([
            'teacherId' => $this->teacherId,
            'TeacherIndex' => $this->TeacherIndex,
            'DateOfBirth' => $this->DateOfBirth,
            'DateOfFirstAppointment' => $this->DateOfFirstAppointment,
            'DateofThisAppointment' => $this->DateofThisAppointment,
            'ComputerNo' => $this->ComputerNo,
        ]);

        $query->andFilterWhere(['like', 'Name', $this->Name])
            ->andFilterWhere(['like', 'Address', $this->Address])
            ->andFilterWhere(['like', 'NIC', $this->NIC])
            ->andFilterWhere(['like', 'Tel', $this->Tel])
            ->andFilterWhere(['like', 'Status', $this->Status])
            ->andFilterWhere(['like', 'Image', $this->Image]);

        return $dataProvider;
    }
}
