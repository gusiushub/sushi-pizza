<?php

namespace app\models;

use Yii;
use yii\web\UploadedFile;


/**
 * This is the model class for table "item".
 *
 * @property int $id
 * @property string $title
 * @property string $description
 * @property int $price
 * @property int $wt
 * @property string $img
 */
class Item extends \yii\db\ActiveRecord
{

    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'item';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['title', 'description', 'price', 'wt', 'product_title'], 'required'],
            [['title', 'description','product_title'], 'string'],
            [['price', 'wt'], 'integer'],
//            [['img'], 'string', 'max' => 64],
            [['img'], 'file', 'skipOnEmpty' => false],
//            [['img'], 'file', 'extensions' => 'png, jpg','skipOnEmpty' => true]
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id' => 'Номер',
            'title' => 'Заголовок',
            'description' => 'Описание',
            'price' => 'Цена',
            'wt' => 'Вес',
            'img' => 'Изображение',
            'product_title' => 'Тип товара',
        ];
    }

    //сохранение картинки
    public function saveImage($filename)
    {
        $this->img = $filename;
        return $this->save(false);
    }
}
