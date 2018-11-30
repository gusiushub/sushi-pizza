<?php
namespace app\models;
use Yii;
use yii\base\Model;
use yii\web\UploadedFile;
class ImageUpload extends Model
{
    public $img;
    //правила валидации для загрузки картинки
    public function rules()
    {
        return[
            [['img'], 'required'],
            [['img'], 'file', 'extensions' => 'jpg,png']
        ];
    }
    public function uploadFile(UploadedFile $file, $currentImage)
    {
        $this->image = $file;
        if($this->validate()) {
            $this->deleteCurrentImage($currentImage);
            return $this->saveImage();
        }
    }
    //получаем директорию изображения
    public function getFolder()
    {
        return Yii::getAlias('@app/web') . '/uploads/';
    }
    //генерация названия изображения
    public function generateFilename()
    {
        return strtolower(md5(uniqid($this->image->baseName)) . '.' . $this->image->extension);
    }
    //удаление изображения, если загружено новое
    public function deleteCurrentImage($currentImage)
    {
        if ($this->fileExists($currentImage)) {
            unlink($this->getFolder() . $currentImage);
        }
    }
    public function fileExists($currentImage)
    {
        if (!empty($currentImage) && $currentImage != null) {
            return file_exists($this->getFolder() . $currentImage);
        }
    }
    public function saveImage()
    {
        $filename = $this->generateFilename();
        $this->image->saveAs($this->getFolder() . $filename);
        return $filename;
    }
}//xsph.ru