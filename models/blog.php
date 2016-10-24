<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "blog_cms".
 *
 * @property integer $Id
 * @property string $Titulo
 * @property string $Contenido
 * @property integer $Publicar
 */
class blog extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'blog_cms';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['Contenido', 'Publicar'], 'required'],
            [['Contenido'], 'string'],
            [['Publicar'], 'integer'],
            [['Titulo'], 'string', 'max' => 50],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'Id' => 'ID',
            'Titulo' => 'Titulo',
            'Contenido' => 'Contenido',
            'Publicar' => 'Publicar',
        ];
    }
}
