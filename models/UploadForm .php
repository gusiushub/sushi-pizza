<?php

namespace app\models;

use Yii;
use yii\base\Model;

class UploadForm extends Model
{

    public $img;

    public function rules()
    {
        return [
            // username and password are both required

            [['img'], 'file', 'extensions' => 'png, jpg',
                'skipOnEmpty' => false]];
    }

}