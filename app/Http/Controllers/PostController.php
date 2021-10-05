<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Lessons;
use App\Models\User;
use App\Models\Category;



class PostController extends Controller {

    public function tampilkan() {

        $title = '';

        if (request('category')) {
            $category = Category::firstWhere('slug', request('category'));
            $title = ' in ' . $category->name;
        }

        if (request('author')) {
            $author = User::firstWhere('username', request('author'));
            $title = ' by ' . $author->name;
        }

        return view('lessons', [
            "title" => 'All Lessons' . $title,
            "lessons" => Lessons::latest()->filter(request(['btn-keyword', 'category', 'author']))->paginate(7)->withQueryString()
        ]);
    }

    public function tampilDetail(Lessons $lesson) {

        return view('lesson', [
            "title" => "Lessons",
            "lesson" => $lesson
        ]);
    }
}
