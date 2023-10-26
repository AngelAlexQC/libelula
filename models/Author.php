<?php

namespace app\models;

use yii\mongodb\ActiveRecord;


class Author extends ActiveRecord
{
    public static function collectionName()
    {
        return 'authors';
    }

    public function attributes()
    {
        return [
            '_id',
            'name',
            'birth_date',
            'country',
        ];
    }

    public function rules()
    {
        return [
            [['name', 'birth_date', 'country'], 'required'],
            [['name'], 'unique', 'targetClass' => self::class, 'message' => 'Este autor ya existe.'],
            [['name', 'country'], 'string'],
            [['birth_date'], 'date', 'format' => 'php:Y-m-d'],
            [['books'], 'safe']
        ];
    }



    public function beforeSave($insert)
    {
        if (parent::beforeSave($insert)) {
            $this->birth_date = strtotime($this->birth_date);
            return true;
        }
        return false;
    }

    public function afterFind()
    {
        parent::afterFind();
        $this->birth_date = date('Y-m-d', $this->birth_date);
    }

    public function getBooks()
    {
        $books = Book::find()->where(['author' => (string)$this->_id])->all();
        return $books;
    }

    public function extraFields()
    {
        return ['books'];
    }
}
