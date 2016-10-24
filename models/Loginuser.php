<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "loginuser".
 *
 * @property integer $id
 * @property string $Nombre
 * @property string $Apellidos
 * @property string $username
 * @property string $password
 * @property string $authKey
 */
class Loginuser extends \yii\db\ActiveRecord implements \yii\web\IdentityInterface {

    /**
     * @inheritdoc
     */
    public static function tableName() {
        return 'loginuser';
    }

    /**
     * @inheritdoc
     */
    public function rules() {
        return [
            [['Nombre', 'Apellidos', 'username', 'password', 'authKey'], 'required'],
            [['Nombre'], 'string', 'max' => 15],
            [['Apellidos', 'username', 'password'], 'string', 'max' => 30],
            [['authKey'], 'string', 'max' => 50],
            [['username'], 'unique'],
            [['authKey'], 'unique'],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels() {
        return [
            'id' => 'ID',
            'Nombre' => 'Nombre',
            'Apellidos' => 'Apellidos',
            'username' => 'Username',
            'password' => 'Password',
            'authKey' => 'Auth Key',
        ];
    }

    public function getAuthKey() {
       throw new \yii\base\NotSupportedException(); 
    }

    public function getId() {
        return $this->id;
    }

    public function validateAuthKey($authKey) {
       throw new \yii\base\NotSupportedException(); 
    }

    public static function findIdentity($id) {
         return self::findOne($id);
    }

    public static function findIdentityByAccessToken($token, $type = null) {
       throw new \yii\base\NotSupportedException(); 
    }
    
    public static function findByUsername($username){
        return self::findOne(['username'=>$username]);
    }
    
    public function validatePassword($password){
        return $this->password==$password;
    }

}
