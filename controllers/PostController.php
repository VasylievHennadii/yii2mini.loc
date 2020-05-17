<?php  

/**
 * контроллер отвечает за показ главной страницы
 */

namespace app\controllers;

use app\models\Post;
use yii\data\Pagination;
use yii\web\Controller;



class PostController extends Controller
{

    /**
     * метод отвечает за показ главной страницы, подключает по умолчанию index
     */
    public function actionIndex(){
        //обращаемся к модели Post, создаем объект запроса вызовом метода find() и извлекаем данные из БД методом all()

        //$posts = Post::find()->all(); 

        //жадная загрузка
        $query = Post::find()->with('category');
        //включаем пагинацию
        $pages = new Pagination(['totalCount' => $query->count(), 'pageSize' => 3, 'forcePageParam' => false, 'pageSizeParam' => false]);
        $posts = $query->offset($pages->offset)->limit($pages->limit)->all();

        return $this->render('index', compact('posts', 'pages')); //с помощью compact() передаём эти данные
    }

    /**
     * метод отвечает за показ страниц Post
     */
    public function actionView($id)
    {
        echo 'Post - ' . $id. '<br>';
        var_dump($id);
        die;
    }

}









?>