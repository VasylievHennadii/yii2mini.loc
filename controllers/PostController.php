<?php  

/**
 * контроллер отвечает за показ главной страницы
 */

namespace app\controllers;

use app\models\Post;
use yii\web\Controller;



class PostController extends Controller
{

    /**
     * метод отвечает за показ главной страницы, подключает по умолчанию index
     */
    public function actionIndex(){
        $posts = Post::find()->all(); //обращаемся к модели Post, создаем объект запроса вызовом метода find() и извлекаем данные из БД методом all()
        return $this->render('index', compact('posts')); //с помощью compact() передаём эти данные
    }

}









?>