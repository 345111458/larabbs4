<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Category;
use App\Models\Topic;
use App\Models\User;


class CategoriesController extends Controller
{

	public function show(Category $category,Request $request,User $user){

		$topics = Topic::WithOrder($request->order)->where('category_id',$category->id)->paginate(6);
		$active_users = $user->getActiveUsers();

		return view('topics.index',compact('topics','category','active_users'));
	}

    //
}
