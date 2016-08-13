<?php

namespace backend\models;

use Yii;
use yii\base\Model;
use yii\data\ActiveDataProvider;
use backend\models\ProfessionalData;

/**
 * ProfessionalDataSearch represents the model behind the search form about `backend\models\ProfessionalData`.
 */
class ProfessionalDataSearch extends ProfessionalData
{
    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['id', 'teachers_teacherId'], 'integer'],
            [['service', 'class_and_grade', 'register_no', 'salary_increment_date', 'wop_no', 'post'], 'safe'],
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
        $query = ProfessionalData::find();

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
            'id' => $this->id,
            'teachers_teacherId' => $this->teachers_teacherId,
        ]);

        $query->andFilterWhere(['like', 'service', $this->service])
            ->andFilterWhere(['like', 'class_and_grade', $this->class_and_grade])
            ->andFilterWhere(['like', 'register_no', $this->register_no])
            ->andFilterWhere(['like', 'salary_increment_date', $this->salary_increment_date])
            ->andFilterWhere(['like', 'wop_no', $this->wop_no])
            ->andFilterWhere(['like', 'post', $this->post]);

        return $dataProvider;
    }
}
