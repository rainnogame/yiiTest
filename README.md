Тестовое задание 
===============================

Создать приложение - телефонную книгу, работающее на REST API.

GET для получения и поиска данных

POST для добавления данных

PUT для обновления данных

DELETE для удаления данных.

GET api/users - возвращает всех юзеров

GET /api/users/search/JohnDoe - ищет пользователя с именем JohnDoe

POST /api/users  - добавляет пользователя

PUT /api/users/13 - обновляет пользователя с таким ИД

И к нему желательно сверстать минимальный веб-интерфейс.

Можно тестить тут - [ВОТ ТУТ](http://851182.simplexi.web.hosting-test.net/frontend/web/))
------
Важные папки
-------------------

```
api/modules/v1 - само REST API. За основу была взята реализация в Yii2
frontend/web/phone_book_app - клиент 
frontend/web/css - верстка
```
