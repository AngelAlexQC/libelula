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

### Autores

- Crear un autor

```bash
curl -i -H "Accept:application/json" -H "Content-Type:application/json" \
    -XPOST "http://localhost:8080/authors" \
    -d '{"name": "J. R. R. Tolkien","birth_date": "1892-01-03","country": "United Kingdom"}'

```

- Obtener todos los autores

```bash
curl -i -H "Accept:application/json" -H "Content-Type:application/json" \
    -XGET "http://localhost:8080/authors"
```

- Obtener un autor por su ID

```bash
curl -i -H "Accept:application/json" -H "Content-Type:application/json" \
    -XGET "http://localhost:8080/author/view?id=<id>"
```

- Actualizar un autor por su ID

```bash
curl -i -H "Accept:application/json" -H "Content-Type:application/json" \
    -XPATCH "http://localhost:8080/author/update?id=<id>" \
    -d '{"name": "J. R. R. Tolkien","birth_date": "1892-01-03","country": "United Kingdom"}'
```

- Eliminar un autor por su ID

```bash
curl -i -H "Accept:application/json" -H "Content-Type:application/json" \
    -XDELETE "http://localhost:8080/author/delete?id=<id>"
```

### Libros

- Crear un libro

```bash
curl -i -H "Accept:application/json" -H "Content-Type:application/json" \
    -XPOST "http://localhost:8080/books" \
    -d '{"title": "The Lord of the Rings","author": "6539d796b2638d07a20df3f6","year": 1954, "description": "The Lord of the Rings is an epic high fantasy novel written by English author and scholar J. R. R. Tolkien. The story began as a sequel to Tolkien's 1937 fantasy novel The Hobbit, but eventually developed into a much larger work. Written in stages between 1937 and 1949, The Lord of the Rings is one of the best-selling novels ever written, with over 150 million copies sold."}'
```

- Obtener todos los libros

```bash
curl -i -H "Accept:application/json" -H "Content-Type:application/json" \
    -XGET "http://localhost:8080/books"
```

- Obtener un libro por su ID

```bash
curl -i -H "Accept:application/json" -H "Content-Type:application/json" \
    -XGET "http://localhost:8080/book/view?id=<id>"
```

- Actualizar un libro por su ID

```bash
curl -i -H "Accept:application/json" -H "Content-Type:application/json" \
    -XPATCH "http://localhost:8080/book/update?id=<id>" \
    -d '{"title": "The Lord of the Rings","author": "6539d796b2638d07a20df3f6","year": 1954, "description": "The Lord of the Rings is an epic high fantasy novel written by English author and scholar J. R. R. Tolkien. The story began as a sequel to Tolkien's 1937 fantasy novel The Hobbit, but eventually developed into a much larger work. Written in stages between 1937 and 1949, The Lord of the Rings is one of the best-selling novels ever written, with over 150 million copies sold."}'
```

- Eliminar un libro por su ID

```bash
curl -i -H "Accept:application/json" -H "Content-Type:application/json" \
    -XDELETE "http://localhost:8080/book/delete?id=<id>"
```
