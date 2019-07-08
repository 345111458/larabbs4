<?php

function route_class()
{
    return str_replace('.', '-', Route::currentRouteName());
}



public function category_nav_active($category_id){

	return active_class(if_route('topics.show') && if_route_param('category' , $category_id));
}