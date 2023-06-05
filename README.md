
## Тестовое задание 28

### Развертывание
1. composer install
2. .env (Отредактировать соединение с ДБ) 
3. php artisan migrate
4. php artisan db:seed DatabaseSeeder
5. php artisan serve


## EndPoints примеры запросов ключи:

для всех конечных точек использован префикс v1
### EndPoints 
1. brands
2. models
3. cars

#### GET
http://localhost:{port}/api/v1/brands - Список всех производителей
Тот же запрос но с ключом {id} - Определенный производитель

http://localhost:{port}/api/v1/models - Список всех моделей
Тот же запрос но с ключом {id} - Определенная модель

http://localhost:{port}/api/v1/cars - Список всех авто
Тот же запрос но с ключом {id} - Определенное авто

#### POST
http://localhost:{port}/api/v1/brands - Создать производителя
{brand} - Имя производителя (обязательное уникальное)

http://localhost:{port}/api/v1/models - Создать производителя
{name} - Название модели (обязательное)
{brand_id} - id производителя (обязательое существующее число > 0)

http://localhost:{port}/api/v1/cars - Создать авто
{brand_id} - (обязательное существующее число > 0)
{model_id} - (обязательное существующее число > 0)
{manufactured_date} - (не обязательное дата)
{mileage} - (не обязательное число)
{color} - (не обязательное)

#### PUT
http://localhost:{port}/api/v1/brands - Обновить производителя
{id} - (обязательное существующее)
{brand} - Имя производителя (обязательное уникальное)

http://localhost:{port}/api/v1/models - Обновить производителя
{id} - (обязательное существующее)
{name} - Название модели (обязательное)
{brand_id} - id производителя (обязательое существующее число > 0)

http://localhost:{port}/api/v1/cars - Обновить авто
{id} - (обязательное существующее)
{brand_id} - (обязательное существующее число > 0)
{model_id} - (обязательное существующее число > 0)
{manufactured_date} - (не обязательное дата)
{mileage} - (не обязательное число)
{color} - (не обязательное)


#### DELETE
http://localhost:{port}/api/v1/brands - Удалить производителя
{id} - (обязательное существующее)


http://localhost:{port}/api/v1/models - Удалить производителя
{id} - (обязательное существующее)

http://localhost:{port}/api/v1/cars - Удалить авто
{id} - (обязательное существующее)

