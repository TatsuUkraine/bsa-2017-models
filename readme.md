В папке App созданы классы User и Car которые представляют модели

В папке App/Manager созданы менеджеры, которые работают с соответствующими моделями

В папке Tests/Unit находятся тесты (CarManagerTest, UserManagerTest)

#### Задание 1
Создать миграции которые создадут таблицы Users Cars со
следующими полями

users
- first_name (string)
- last_name (string)
- is_active (bool)

cars
- color (string)
- model (string)
- registration_number (string)
- year (int)
- mileage (int)
- price (float)
- user_id (int)

user_id поле должно содержать внешний ключ на таблицу cars

Изменить классы User и Car и сделать из них модели,
которые будут описывать соответствующие таблицы

В моделях должно быть описание relations между ними

#### Задание 2

Реализовать методы описанные в интерфейсе UserManager

**findAll** - возвращает коллекцию всех пользователей

**findById** - возвращает пользователя по ID, если пользователя с таким идентификатором не существует - возвращает NULL

**findActive** - возвращает пользователей у которые поле is_active = true

**saveUser** - создает/обновляет запись пользователя на основе объекта Request

**deleteUser** - удаляет запись поьзователя по ID из таблицы, при удалении должны также
удаляться все машины привязанные к этому пользователю


#### Задание 3

Реализовать методы описанные в интерфейсе CarManager

**findAll** - возвращает коллекцию всех машин

**findById** - возвращает машину по ID, если машины с таким идентификатором не существует - возвращает NULL

**findCarsFromActiveUsers** - возвращает машины, которые привязаны к пользователям у которых поле is_active = true

**saveCar** - создает/обновляет запись машины на основе объекта Request

**deleteUser** - удаляет запись машины по ID из таблицы