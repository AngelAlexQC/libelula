<?php

namespace app\controllers;

use yii\rest\ActiveController;



class BookController extends ActiveController
{
    public $modelClass = 'app\models\Book';

    /**
     * @OA\Get(path="/books",
     *   summary="Obtener todos los libros",
     *   tags={"libros"},
     *   @OA\Response(response=200, description="Obtener todos los libros")
     * )
     */
    public function actionIndex()
    {
        return parent::actions();
    }

    /**
     * @OA\Post(path="/books",
     *   summary="Crear un libro",
     *   tags={"libros"},
     *   @OA\Response(response=200, description="Crear un libro"),
     *   @OA\RequestBody(
     *    @OA\MediaType(
     *     mediaType="application/json",    
     *       @OA\Schema(
     *         @OA\Property(property="title", type="string", example="El señor de los anillos"),
     *         @OA\Property(property="author", type="string", example="6539d796b2638d07a20df3f6"),
     *         @OA\Property(property="year", type="integer", example="1954"),
     *         @OA\Property(property="description", type="string", example="The Lord of the Rings is an epic high fantasy novel written by English author and scholar J. R. R. Tolkien."),
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
     * @OA\Get(path="/book/view",
     *   summary="Obtener un libro por su ID",
     *   tags={"libros"},
     *   @OA\Response(response=200, description="Obtener un libro por su ID"),
     *   security={{"api_key":{}}},
     *   @OA\Parameter(
     *     name="id",
     *     in="query",
     *     required=true,
     *     @OA\Schema(
     *         type="string"
     *     )
     *   )
     * )
     */
    public function actionView($id)
    {
        return parent::actions();
    }

    /**
     * @OA\Patch(path="/book/update",
     *   summary="Actualizar un libro por su ID",
     *   tags={"libros"},
     *   @OA\Response(response=200, description="Actualizar un libro por su ID"),
     *   @OA\Parameter(
     *     name="id",
     *     in="query",
     *     required=true,
     *     @OA\Schema(
     *         type="string"
     *     )
     *   ),
     *   security={{"api_key":{}}},
     *   @OA\RequestBody(
     *    @OA\MediaType(
     *     mediaType="application/json",   
     *  
     *       @OA\Schema(
     *         @OA\Property(property="title", type="string", example="El señor de los anillos"),
     *         @OA\Property(property="author", type="string", example="6539d796b2638d07a20df3f6"),
     *         @OA\Property(property="year", type="integer", example="1954"),
     *         @OA\Property(property="description", type="string", example="The Lord of the Rings is an epic high fantasy novel written by English author and scholar J. R. R. Tolkien."),
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
     * @OA\Delete(path="/book/delete",
     *   summary="Eliminar un libro por su ID",
     *   tags={"libros"},
     *   @OA\Response(response=200, description="Eliminar un libro por su ID"),
     *   security={{"api_key":{}}},
     *   @OA\Parameter(
     *     name="id",
     *     in="query",
     *     required=true,
     *     @OA\Schema(
     *         type="string"
     *     ),
     *   )
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
