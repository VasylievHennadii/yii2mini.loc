<?php 

/**
 * модель вида главной страницы
 */

namespace app\models;

use yii\db\ActiveRecord;

class Post extends ActiveRecord
{

    /**
     * метод, который связывает данную модель с конкретной таблицей из БД
     * в данном случае с таблицей "post"
     */
    public static function tableName(){
        return 'post';
    }

    /**
     * метод позволяет объединить обращение из одной таблицы БД(post) к другой(category). 
     * Связываем модель Post с моделью Category по 'id' таблицы category и 'category_id' таблицы БД(post)
     */
    public function getCategory()
    {
        return $this->hasOne(Category::class, ['id' => 'category_id']); //связывает модель Post с классом Category 
    }

}






?>