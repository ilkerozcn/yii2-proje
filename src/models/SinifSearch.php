<?php

namespace vendor\ilkerozcn\yii2proje\src\models;

use yii\base\Model;
use yii\data\ActiveDataProvider;
use vendor\ilkerozcn\yii2proje\src\models\Sinif;

/**
 * SinifSearch represents the model behind the search form of `vendor\ilkerozcn\yii2proje\src\models\Sinif`.
 */
class SinifSearch extends Sinif
{
    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['Sinif', 'Ogretmen'], 'safe'],
            [[ 'Deneme_sinif_id'], 'integer'],
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
        $query = Sinif::find();

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

            'Deneme_sinif_id' => $this->Deneme_sinif_id,
        ]);

        $query->andFilterWhere(['like', 'Sinif', $this->Sinif])
            ->andFilterWhere(['like', 'Ogretmen', $this->Ogretmen]);

        return $dataProvider;
    }
}
