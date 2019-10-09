<?php

Route::namespace('Openit\Tasksmngr\Http\Controllers')->group(function () {
	Route::get('/tasks', 'TasksController@index');
});
