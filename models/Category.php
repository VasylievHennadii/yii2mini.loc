<?php 

/**
 * модель вида страницы Category
 */

namespace app\models;

use yii\db\ActiveRecord;

class Category extends ActiveRecord
{

    /**
     * метод, который связывает данную модель с конкретной таблицей из БД
     * в данном случае с таблицей "category"
     */
    public static function tableName()
    {
        return 'category';
    }    

}





?>