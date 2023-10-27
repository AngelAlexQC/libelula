<p align="center">
    <a href="https://github.com/yiisoft" target="_blank">
        <img src="https://avatars0.githubusercontent.com/u/993323" height="100px">
    </a>
    <h1 align="center">Libelula Soft Test</h1>
    <br>
</p>

## Prueba de conocimientos para Libelula Soft

## Requerimientos

- PHP
- Composer
- Git
- MongoDB
- Extensiones de PHP para Yii2 y MongoDB

## Instalación

- Clonar el repositorio

```bash
git clone
```

- Instalar dependencias

```bash
composer install
```

- Crear una base de datos en MongoDB `libelula` o cambiar la configuración en `config/db.php`

## Ejecución

- Ejecutar el servidor de desarrollo de PHP

```bash
php yii serve
```

- Abrir el navegador en la dirección `http://localhost:8080`

## Probar la API

Acceder desde el navegador a la dirección `http://localhost:8080/site/doc` para ver la documentación de la API y probar los diferentes endpoints.

### Autenticación

Para poder probar los endpoints de la API es necesario autenticarse. Para ello, en la documentación de la API, en el apartado de `Auth`, se puede ver el endpoint `/auth/register`. Aquí se puede registrar un usuario y obtener el token de autenticación.

```json
{
  "username": "admin",
  "password": "admin",
  "email": "admin@emil.com"
}
```

Una vez registrado, se puede obtener el token de autenticación en el endpoint `/auth/login`.

```json
{
  "username": "admin",
  "password": "admin"
}
```

Con el token de autenticación se puede probar el resto de endpoints de la API.

```json
{
  "access_token": "Xs60py8w5UEIjDG4vHYN8DL21tQzVKyp"
}
```

1. Hacer click en el botón `Authorize` en la parte superior derecha de la documentación de la API.

2. Probar los endpoints de la API que requieran autenticación.
