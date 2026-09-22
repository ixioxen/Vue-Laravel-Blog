<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Models\BLog;
use Inertia\Inertia;

class BlogController extends Controller
{
    public function index(){
        return Inertia::render('Blogs', [
            'blogs' => BLog::latest()->get()
        ]);
    }

    public function Show(Blog $blog){
        return Inertia::render('BlogShow', [
            'blog' => $blog
        ]);
    }

    public function Create(){
        return Inertia::render('BlogCreate');
    }

    public function Store(){
        request()->validate([
            'title' => 'required',
            'description' => 'required',
        ]);

        $blog = new Blog();
        $blog->title = request('title');
        $blog->description = request('description');
        $blog->save();
        return redirect('/blogs');
    }

    public function Edit(Blog $blog){
        return Inertia::render('BlogEdit', [
            'blog' => $blog
        ]);
    }

    public function Update(){
        request()->validate([
            'title' => 'required',
            'description' => 'required',
        ]);
        $blog = new Blog();
        $blog->title = request('title');
        $blog->description = request('description');
        $blog->save();
        return redirect('/blogs');
    }
};