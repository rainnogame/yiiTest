<?php

namespace api\modules\v1\controllers;

use api\modules\v1\models\PhoneRepository;
use yii\rest\Controller;

/**
 * Country Controller API
 *
 * @author Budi Irawan <deerawan@gmail.com>
 */
class UserController extends Controller
{
    public function actionIndex()
    {
        
        return PhoneRepository::find()->asArray()->all();
    }
    
    public function actionView($id)
    {
        return PhoneRepository::find()->where($id)->asArray()->one();
    }
    
    public function actionDelete($id)
    {
        return PhoneRepository::deleteAll(['id' => $id]);
    }
    
    public function actionCreate()
    {
        $userPostParams = \Yii::$app->request->post();
        
        $user = new PhoneRepository([
            'username' => $userPostParams['username'],
            'phone' => $userPostParams['phone'],
        ]);
        
        if ($user->save()) {
            return $user;
        } else {
            return $user->errors;
        }
    }
    
    public function actionUpdate($id)
    {
        $userPostParams = \Yii::$app->request->post();
        
        $user = PhoneRepository::findOne($id);
        $user->setAttributes([
            'username' => $userPostParams['username'],
            'phone' => $userPostParams['phone'],
        ]);
        
        if ($user->save()) {
            return $user;
        } else {
            return $user->errors;
        }
    }
    
    public function actionSearch($username = '')
    {
        $user = PhoneRepository::findOne(['username' => $username]);
        if ($user) {
            return $user;
        } else {
            return [
                'username' => ['Пользователя с таким именем не существует'],
            ];
        }
        
    }
    
}


