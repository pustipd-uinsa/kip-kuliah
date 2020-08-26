<?php

namespace app\models;

use Yii;
use yii\base\Model;
use yii\data\ActiveDataProvider;
use app\models\LaporanVerifikasi;

/**
 * LaporanVerifikasiSearch represents the model behind the search form of `app\models\LaporanVerifikasi`.
 */
class LaporanVerifikasiSearch extends LaporanVerifikasi
{
    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['id', 'verifikasi', 'affirmasi'], 'integer'],
            [['nama', 'kode', 'alamat', 'kota', 'komentar_verifikator', 'UKT', 'jalur'], 'safe'],
            [['score_hafalan', 'score_akademik', 'score_nonakademik', 'nilai_total'], 'number'],
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
        $query = LaporanVerifikasi::find();

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
            'score_hafalan' => $this->score_hafalan,
            'score_akademik' => $this->score_akademik,
            'score_nonakademik' => $this->score_nonakademik,
            'verifikasi' => $this->verifikasi,
            'nilai_total' => $this->nilai_total,
            'affirmasi' => $this->affirmasi,
        ]);

        $query->andFilterWhere(['like', 'nama', $this->nama])
            ->andFilterWhere(['like', 'kode', $this->kode])
            ->andFilterWhere(['like', 'alamat', $this->alamat])
            ->andFilterWhere(['like', 'kota', $this->kota])
            ->andFilterWhere(['like', 'komentar_verifikator', $this->komentar_verifikator])
            ->andFilterWhere(['like', 'UKT', $this->UKT])
            ->andFilterWhere(['like', 'jalur', $this->jalur]);

        return $dataProvider;
    }
}
