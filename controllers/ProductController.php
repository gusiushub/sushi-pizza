<?php

namespace app\controllers;

use app\models\Item;
use app\models\Product;
use Yii;
use yii\bootstrap\Html;



class ProductController extends \yii\web\Controller
{

    /**
     * @var \devanych\cart\Cart $cart
     */
    private $cart;

    public $enableCsrfValidation = false;

    /**
     * ProductController constructor.
     * @param $id
     * @param $module
     * @param array $config
     */
    public function __construct($id, $module, $config = [])
    {
        parent::__construct($id, $module, $config);
        $this->cart = Yii::$app->cart;
        Yii::$app->getView()->params['cart'] = Yii::$app->cart;
    }

    /**
     * @return string
     */
    public function actionIndex()
    {
        $eat = [
            "Морепродукты"=>100,
            'Говядина'=>90,
            'Свинина'=>70,
            'Курица'=>60,
            'Лосось'=>110,
            'Яйцо'=>20,
            'Шампиньоны'=>40,
            'Бекон'=>60,
            'Сыр'=>40,
        ];

        if (!isset($_GET['item'])){
            return $this->redirect(['/site/menu']);
        }

        $items = Item::find()->where('product_title=:item',[':item' => $_GET['item']])->all();

        if (isset($_POST['wok'])){
            if (!empty($eat[$_POST["add-filling"]])) {

            }
            if (!empty($eat[$_POST["topping"]])) {

            }

        }

        if ($_GET['item']=='wok'){
            return $this->render('wok', [
                'cart' => $this->cart,
                'items' => $items,
            ]);
        }

        return $this->render('index', [
            'cart' => $this->cart,
            'items' => $items,
        ]);
    }

    /**
     * @param $id
     * @return string
     */
    public function actionSingle($id)
    {
        $item = Item::findOne($id);
        return $this->render('single', [
            'item' => $item,
        ]);
    }


    public function actionPay()
    {
//        $item = Item::findOne($id);
        return $this->render('pay');//, [
//            'item' => $item,
//        ]);
    }

    /**
     * @param $id
     * @param int $qty
     * @return \yii\web\Response
     */
    public function actionAdd($id, $qty = 1)
    {
        try {
            $product = $this->getProduct($id);
            $quantity = $this->getQuantity($qty, $product->quantity);
            if ($item = $this->cart->getItem($product->id)) {
                $this->cart->plus($item->getId(), $quantity);
//                return $itemById['price'];
            } else {
                $this->cart->add($product, $quantity);
//                return $itemById['price'];
            }
        } catch (\DomainException $e) {
            Yii::$app->errorHandler->logException($e);
            Yii::$app->session->setFlash('error', $e->getMessage());
        }
//        return $this->redirect(['index']);
    }

    /**
     * @param $id
     * @param int $qty
     * @return \yii\web\Response
     */
    public function actionChange($id, $qty = 1)
    {
        try {
            $product = $this->getProduct($id);
            $quantity = $this->getQuantity($qty, $product->quantity);
            if ($item = $this->cart->getItem($product->id)) {
                $this->cart->change($item->getId(), $quantity);
            }
        } catch (\DomainException $e) {
            Yii::$app->errorHandler->logException($e);
            Yii::$app->session->setFlash('error', $e->getMessage());
        }
        return $this->redirect(['index']);
    }

    /**
     * @param $id
     * @return \yii\web\Response
     */
    public function actionRemove($id)
    {
        try {
            $item = Item::find()->where('id=:id',[':id' => $id])->one();
            $product = $this->getProduct($id);
            $this->cart->remove($product->id);
            return $item['price'];
        } catch (\DomainException $e) {
            Yii::$app->errorHandler->logException($e);
            Yii::$app->session->setFlash('error', $e->getMessage());
        }
        return $this->redirect(['index']);
    }

    /**
     * @return \yii\web\Response
     */
    public function actionClear()
    {
        $this->cart->clear();
        return $this->redirect(['index']);
    }

    /**
     * @param integer $id
     * @return Product the loaded model
     * @throws \DomainException if the product cannot be found
     */
    private function getProduct($id)
    {
        if (($item = Item::findOne((int)$id)) !== null) {
            return $item;
        }
        throw new \DomainException('Товар не найден');
    }

    /**
     * @param integer $qty
     * @param integer $maxQty
     * @return integer
     * @throws \DomainException if the product cannot be found
     */
    private function getQuantity($qty, $maxQty)
    {
        $quantity = (int)$qty > 0 ? (int)$qty : 1;
        if ($quantity > $maxQty) {
            throw new \DomainException('Товара в наличии всего ' . Html::encode($maxQty) . ' шт.');
        }
        return $quantity;
    }

}
