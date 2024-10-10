<?php

namespace frontend\models;

use Yii;
use yii\base\Model;
use yii\data\ActiveDataProvider;
use frontend\models\SewaLapangan;

/**
 * sewa_lapanganSearch represents the model behind the search form about `frontend\models\SewaLapangan`.
 */
class sewa_lapanganSearch extends SewaLapangan
{
    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['id', 'durasi'], 'integer'],
            [['nama', 'tanggal_sewa', 'jam_sewa'], 'safe'],
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
        $query = SewaLapangan::find();

        $dataProvider = new ActiveDataProvider([
            'query' => $query,
        ]);

        $this->load($params);

        if (!$this->validate()) {
            // uncomment the following line if you do not want to return any records when validation fails
            // $query->where('0=1');
            return $dataProvider;
        }

        $query->andFilterWhere([
            'id' => $this->id,
            'tanggal_sewa' => $this->tanggal_sewa,
            'jam_sewa' => $this->jam_sewa,
            'durasi' => $this->durasi,
        ]);

        $query->andFilterWhere(['like', 'nama', $this->nama]);

        return $dataProvider;
    }
}
