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

}






?>