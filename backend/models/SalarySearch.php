<?php

namespace backend\models;

use Yii;
use yii\base\Model;
use yii\data\ActiveDataProvider;
use backend\models\Salary;

/**
 * SalarySearch represents the model behind the search form about `backend\models\Salary`.
 */
class SalarySearch extends Salary
{
    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['ComputerNo', 'PaysheetIndex'], 'integer'],
            [['Bank', 'Branch', 'AccountNo'], 'safe'],
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
        $query = Salary::find();

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
            'ComputerNo' => $this->ComputerNo,
            'PaysheetIndex' => $this->PaysheetIndex,
        ]);

        $query->andFilterWhere(['like', 'Bank', $this->Bank])
            ->andFilterWhere(['like', 'Branch', $this->Branch])
            ->andFilterWhere(['like', 'AccountNo', $this->AccountNo]);

        return $dataProvider;
    }
}
