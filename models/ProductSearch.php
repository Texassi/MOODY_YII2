<?php
namespace app\models;

use yii\base\Model;
use yii\data\ActiveDataProvider;
use app\models\Product;

class ProductSearch extends Product
{
    public $name;
    public $concept;
    public $gender;
    public $price;
    public $color;
    public $place;
    public $belonging;

    public function rules()
    {
        return [
            [['name', 'concept', 'gender', 'price', 'color', 'place', 'belonging'], 'safe'],
        ];
    }

    public function scenarios()
    {
        return Model::scenarios();
    }

    public function search($params)
    {
        $query = Product::find();

        $dataProvider = new ActiveDataProvider([
            'query' => $query,
        ]);

        $this->load($params);

        if (!$this->validate()) {
            return $dataProvider;
        }

        $query->andFilterWhere(['like', 'name', $this->name]);
        $query->andFilterWhere(['concept' => $this->concept]);
        $query->andFilterWhere(['gender' => $this->gender]);
        if ($this->price) {
            switch ($this->price) {
                case '0-40':
                    $query->andFilterWhere(['between', 'price', 0, 40]);
                    break;
                case '40-100':
                    $query->andFilterWhere(['between', 'price', 40, 100]);
                    break;
                case '100-150':
                    $query->andFilterWhere(['between', 'price', 100, 150]);
                    break;
                case '150-175':
                    $query->andFilterWhere(['between', 'price', 150, 175]);
                    break;
                case '175-250':
                    $query->andFilterWhere(['between', 'price', 175, 250]);
                    break;
                case '250-350':
                    $query->andFilterWhere(['between', 'price', 250, 350]);
                    break;
            }
        }
        if ($this->color) {
            $query->andFilterWhere(['color' => $this->color]);
        }
        if ($this->place) {
            $query->andFilterWhere(['place' => $this->place]);
        }
        if ($this->belonging) {
            $query->andFilterWhere(['belonging' => $this->belonging]);
        }


        return $dataProvider;
    }
}