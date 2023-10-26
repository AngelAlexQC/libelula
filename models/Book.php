<?php

namespace app\models;

use yii\mongodb\ActiveRecord;

class Book extends ActiveRecord
{
    public static function collectionName()
    {
        return 'books';
    }

    public function attributes()
    {
        return [
            '_id',
            'title',
            'author',
            'year',
            'description'
        ];
    }

    public function rules()
    {
        return [
            [['title', 'author', 'year'], 'required'],
            [['author'], 'exist', 'targetClass' => Author::class, 'targetAttribute' => '_id'],
            [['title', 'author', 'description'], 'string'],
            [['year'], 'integer', 'min' => 0, 'max' => date('Y')],
        ];
    }

    public function attributeLabels()
    {
        return [
            '_id' => 'ID',
            'title' => 'Title',
            'author' => 'Author',
            'year' => 'Year',
            'description' => 'Description',
        ];
    }
}
