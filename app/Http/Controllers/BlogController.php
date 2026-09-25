<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Models\BLog;
use Inertia\Inertia;

class BlogController extends Controller
{
    public function index(){
        return Inertia::render('Blogs', [
            'blogs' => BLog::latest()->get()->load('user')
            
        ]);
    }

    public function Show(BLog $blog){
        return Inertia::render('BlogShow', [
            'blog' => $blog->load('user')
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

        $blog = new BLog();
        $blog->title = request('title');
        $blog->description = request('description');
        $blog->save();
        return redirect('/blogs');
    }

    public function Edit(BLog $blog){
        return Inertia::render('BlogEdit', [
            'blog' => $blog
        ]);
    }

    public function Update(){
        request()->validate([
            'title' => 'required',
            'description' => 'required',
        ]);
        $blog = new BLog();
        $blog->title = request('title');
        $blog->description = request('description');
        $blog->save();
        return redirect('/blogs');
    }

    public function Delete(BLog $blog){
        $blog->delete();
        return redirect('blogs');
    }
};