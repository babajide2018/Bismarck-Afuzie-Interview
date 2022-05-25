
BISMARCK AFUZIE | INTERVIEW TEST
Developed by Ojo Babajide Joshua
ojobabajide2018@gmail.com
08138355834

To lauch, import "todo.sql" into database  after extracting the files.

Database: todo.sql
I could not add the "create-project" view due to limited time, however i added some projects from the backed to the database.

I would have done that if i had more time, meanwhile, I can defend everybit of my algorithm if need be.

## Features Implemented

* General users can register/login
* Both admin and general users can create, view, edit, delete tasks
* Both admin and general users can mark tasks as completed 
* Admin user can view all the users
* Admin user can change/assign roles to users
* Admin user can delete users 
* Both general and admin users can update their account information
* Both general and admin users can change their password 

## Cool Features to Add

## Login / Registration
I have included registration feature on it for new users.

I created a test account which can also be used to login:
email: admin@gmail.com
password: 12345678


/*API Endpoints*/

Route::get('/list-projects', [ApiController::class, 'projects']);
Route::get('/list-todos', [ApiController::class, 'todo']);
Route::get('/view-todo/{task}', [ApiController::class, 'viewTodo']);
Route::get('/delete-todo/{task}', [ApiController::class, 'deleteTodo']);

