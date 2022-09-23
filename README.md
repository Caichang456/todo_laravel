<ul>
	<li>Clone This Repository to your computer</li>
	<li>Please type your terminal and type cd todo_laravel and enter</li>
	<li>Copy paste .env from .env.example and change<br>DB_CONNECTION=mysql<br>DB_HOST=127.0.0.1<br>DB_PORT=3306<br>DB_DATABASE=todo_laravel<br>DB_USERNAME=root<br>DB_PASSWORD=</li>
	<li>Please type your terminal and type composer update and enter</li>
	<li>Please type your terminal and type php artisan migrate and enter</li>
	<li>Please type your terminal and type php artisan serve and enter</li>
	<li>Please open your postman and see this example</li>
</ul><br><br>

Get http://127.0.0.1:8000/api/todo to Return All Todos <br>
Get http://127.0.0.1:8000/api/todo/{id} to Return Single Todo <br>
POST http://127.0.0.1:8000/api/todo with parameter title and description to Return Create Todo Data <br>
PUT http://127.0.0.1:8000/api/todo/{id} with parameter title and description to Return Update Todo Data <br>
DELETE http://127.0.0.1:8000/api/todo/{id} to Delete Single Todo <br>
GET http://127.0.0.1:8000/api/todo/status/{x} to Return Status Todo <br>
Note: <br> 
Status 0 = not finished <br>
Status 1 = doing <br>
Status 2 = finished <br><br>

Please Enjoy my program. Thank you. <br>