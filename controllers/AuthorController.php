<?php

namespace app\controllers;

use yii\rest\ActiveController;


class AuthorController extends ActiveController
{
    public $modelClass = 'app\models\Author';

    /**
     * @OA\Get(path="/authors",
     *   summary="Obtener todos los autores",
     *   tags={"autores"},
     *   @OA\Response(response=200, description="Obtener todos los autores")
     * )
     */
    public function actionIndex()
    {
        return parent::actions();
    }

    /**
     * @OA\Post(path="/authors",
     *   summary="Crear un autor",
     *   tags={"autores"},
     *   @OA\Response(response=200, description="Crear un autor"),
     *   security={{"api_key":{}}},
     *   @OA\RequestBody(
     *    @OA\MediaType(
     *     mediaType="application/json",    
     *       @OA\Schema(
     *         @OA\Property(property="name", type="string", example="J. R. R. Tolkien"),
     *         @OA\Property(property="birth_date", type="string", example="1892-01-03"),
     *         @OA\Property(property="country", type="string", example="United Kingdom"),
     *       )
     *   ),
     *  )
     * )
     */
    public function actionCreate()
    {
        return parent::actions();
    }

    /**
     * @OA\Get(path="/author/view",
     *   summary="Obtener un autor por su ID",
     *   tags={"autores"},
     *   @OA\Response(response=200, description="Obtener un autor por su ID"),
     *   @OA\Parameter(
     *     name="id",
     *     in="query",
     *     required=true,
     *     @OA\Schema(
     *         type="string"
     *    )
     *  )
     * )
     */
    public function actionView($id)
    {
        return parent::actions();
    }

    /**
     * @OA\Put(path="/author/update",
     *   summary="Actualizar un autor por su ID",
     *   tags={"autores"},
     *   @OA\Response(response=200, description="Actualizar un autor por su ID"),
     *   @OA\Parameter(
     *     name="id",
     *     in="query",
     *     required=true,
     *     @OA\Schema(
     *         type="string"
     *    )
     *  ),
     *  security={{"api_key":{}}},
     *   @OA\RequestBody(
     *    @OA\MediaType(
     *     mediaType="application/json",    
     *       @OA\Schema(
     *         @OA\Property(property="name", type="string", example="J. R. R. Tolkien"),
     *         @OA\Property(property="birth_date", type="string", example="1892-01-03"),
     *         @OA\Property(property="country", type="string", example="United Kingdom"),
     *       )
     *   ),
     *  )
     * )
     */
    public function actionUpdate($id)
    {
        return parent::actions();
    }

    /**
     * @OA\Delete(path="/author/delete",
     *   summary="Eliminar un autor por su ID",
     *   tags={"autores"},
     *   @OA\Response(response=200, description="Eliminar un autor por su ID"),
     *   security={{"api_key":{}}},
     *   @OA\Parameter(
     *     name="id",
     *     in="query",
     *     required=true,
     *     @OA\Schema(
     *         type="string"
     *    )
     *  )
     * )
     */
    public function actionDelete($id)
    {
        return parent::actions();
    }

    public function checkAccess($action, $model = null, $params = [])
    {
        if ($action === 'create' || $action === 'update' || $action === 'delete') {
            if (\Yii::$app->user->isGuest) {
                throw new \yii\web\ForbiddenHttpException(sprintf('Solo los usuarios registrados pueden ejecutar la acción "%s".', $action));
            }
        }
    }
}
