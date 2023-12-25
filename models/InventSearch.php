<?php

namespace app\models;

use yii\base\Model;
use yii\data\ActiveDataProvider;
use app\models\Invent;

/**
 * InventSearch represents the model behind the search form of `app\models\Invent`.
 */
class InventSearch extends Invent
{
    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['id', 'opmemory'], 'integer'],
            [['hostname', 'username', 'ipaddr', 'macaddr', 'platform', 'motherboard', 'hard', 'cpu', 'os'], 'safe'],
        ];
    }

    /**
     * {@inheritdoc}
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
        $query = Invent::find();

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
            'opmemory' => $this->opmemory,
        ]);

        $query->andFilterWhere(['like', 'hostname', $this->hostname])
            ->andFilterWhere(['like', 'username', $this->username])
            ->andFilterWhere(['like', 'ipaddr', $this->ipaddr])
            ->andFilterWhere(['like', 'macaddr', $this->macaddr])
            ->andFilterWhere(['like', 'platform', $this->platform])
            ->andFilterWhere(['like', 'motherboard', $this->motherboard])
            ->andFilterWhere(['like', 'hard', $this->hard])
            ->andFilterWhere(['like', 'cpu', $this->cpu])
            ->andFilterWhere(['like', 'os', $this->os]);

        return $dataProvider;
    }
}
