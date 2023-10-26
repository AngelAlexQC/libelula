<?php

namespace app\controllers;

use Yii;

use app\models\LoginForm;
use yii\rest\Controller;


class AuthController extends Controller
{

    /**
     * @OA\Post(path="/api/login",
     *   summary="Login",
     *   tags={"auth"},
     *   @OA\Response(response=200, description="Login"),
     *   @OA\RequestBody(
     *    @OA\MediaType(
     *     mediaType="application/json",    
     *       @OA\Schema(
     *         @OA\Property(property="username", type="string", example="admin"),
     *         @OA\Property(property="password", type="string", example="admin"),
     *       )
     *   ),
     *  )
     * )
     */

    public function actionLogin()
    {
        $model = new LoginForm();
        $model->load(Yii::$app->request->post(), '');
        if ($model->login()) {
            return [
                'access_token' => $model->user->accessToken,
            ];
        } else {
            return null;
        }
    }
}
