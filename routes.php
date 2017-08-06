<?php

/**
 * Your package routes would go here
 */

$uploadRoutes = config('ueditor.upload_routes_config_map');
foreach($uploadRoutes as $routeName=>$configName){
    // Route::any($routeName,['middleware'=> $middleware,'uses'=>'Ender\UEditor\UEditorController@server']);
    Route::any($routeName,['uses'=>'Lewisliang82\UEditor\UEditorController@server']);
}