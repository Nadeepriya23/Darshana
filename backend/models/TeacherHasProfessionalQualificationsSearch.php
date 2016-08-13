<?php

namespace backend\models;

use Yii;
use yii\base\Model;
use yii\data\ActiveDataProvider;
use backend\models\TeacherHasProfessionalQualifications;

/**
 * TeacherHasProfessionalQualificationsSearch represents the model behind the search form about `backend\models\TeacherHasProfessionalQualifications`.
 */
class TeacherHasProfessionalQualificationsSearch extends TeacherHasProfessionalQualifications
{
    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['TeacherId', 'QualificationId', 'Id'], 'integer'],
            [['Year', 'Institute', 'ValidDate', 'Subject_1', 'Subject_2', 'Subject_3'], 'safe'],
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
        $query = TeacherHasProfessionalQualifications::find();

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
            'TeacherId' => $this->TeacherId,
            'QualificationId' => $this->QualificationId,
            'ValidDate' => $this->ValidDate,
            'Id' => $this->Id,
        ]);

        $query->andFilterWhere(['like', 'Year', $this->Year])
            ->andFilterWhere(['like', 'Institute', $this->Institute])
            ->andFilterWhere(['like', 'Subject_1', $this->Subject_1])
            ->andFilterWhere(['like', 'Subject_2', $this->Subject_2])
            ->andFilterWhere(['like', 'Subject_3', $this->Subject_3]);

        return $dataProvider;
    }
}
