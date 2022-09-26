<ul>
	<li>Clone This Repository to your computer</li>
	<li>Please type your terminal and type cd todo_laravel and enter</li>
	<li>Copy paste .env from .env.example and change<br>DB_CONNECTION=mysql<br>DB_HOST=127.0.0.1<br>DB_PORT=3306<br>DB_DATABASE=todo_laravel<br>DB_USERNAME=root<br>DB_PASSWORD=</li>
	<li>Please type your terminal and type composer update and enter</li>
	<li>Please type your terminal and type php artisan migrate and enter</li>
	<li>Please type your terminal and type php artisan serve and enter</li>
</ul><br>

<p>Please open your postman and see this example</p>
<ol>
	<li>Please click on header and type Accept and then application/json</li>
	<li>Please type url GET http://127.0.0.1:8000/api/register with parameter name, email, password to create user</li>
	<li>Please type url GET http://127.0.0.1:8000/api/login with parameter email, password to login</li>
	<li>Please click header and type Authorization and then Bearer [token at login]</li>
	<li>Get http://127.0.0.1:8000/api/todo to Return All Todos</li>
	<li>Get http://127.0.0.1:8000/api/todo/{id} to Return Single Todo</li>
	<li>POST http://127.0.0.1:8000/api/todo with parameter title, description, and status to Return Create Todo Data</li>
	<li>PUT http://127.0.0.1:8000/api/todo/{id} with parameter title, description, and status to Return Update Todo Data</li>
	<li>DELETE http://127.0.0.1:8000/api/todo/{id} to Delete Single Todo</li>
	<li>GET http://127.0.0.1:8000/api/todo/status/{x} to Return Status Todo<br>Note: <br>Status 0 = not finished <br>Status 1 = doing <br>Status 2 = finished </li>
</ol><br><br>

Please Enjoy my program. Thank you. <br>