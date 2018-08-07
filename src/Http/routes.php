<?php

use Yajra\Datatables\Facades\Datatables;


Route::get('gui', function(){
	return view('gui::index');
});

Route::get('gui/routes', function(){
	$routes = collect(Route::getRoutes())->map(function ($route) {
        return [
            'host'   => $route->domain(),
            'method' => implode('|', $route->methods()),
            'uri'    => $route->uri(),
            'name'   => $route->getName(),
            'action' => $route->getActionName(),
        ];
    });
	return $routes;
});

Route::post('gui/routes', function(){
	
});

Route::get('gui/views', function(){
    $files= File::allFiles(resource_path('views'));
    foreach ($files as $file)
    {
        echo (string)$file, "\n";
    }
});

Route::patch('gui/routes/{route}', function(){
	
});

Route::delete('gui/routes/{route}', function(){
	
});