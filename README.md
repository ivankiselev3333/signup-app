adjust web config

composer install 

php yii migrate/up 

npm install 

yarn mix 

php serve 

http://localhost:8080 

SIGNUP FORM
1. Create submit form that will write entries (first name, last name, email) into DB (MySQL or PgSql) (use auto-increment when adding a new row). Use PHP at the backend (using frameworks (yii2/zend) will be as advantage)
(создать форму регистрации с обязательными полями (имя, фамилия, email), записывая регистрационные данные в базу данных (MySQL or PgSql). Использовать автоинкрементирование при записи в БД).Использовать PHP для бэкенда (использование фреймворков (yii2/zend) будет большим преимуществом)
* Form submit should be implemented using Vue 
(Форма должна быть реализована средствами Vue) (маршрутизация посредством vue router, управление состоянием приложения, рендеринг виртуальной модели DOM, двусторонней привязки данных и тд.)
* Add input validations and form submit success/error messages
(Добавить проверку полей, а также сообщений об ошибках)
* Use HTML5
(использовать HTML5)
* Use PHP PDO for communication with DB
(использовать PHP PDO для работы с базой данных)
2. Commit and push your code
(коммитить изменения кода и отправить в репозиторий)
3. Send a link to your repository for a review
 (отправить ссылку на репозиторий по готовности)
