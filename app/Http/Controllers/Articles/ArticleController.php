<?php

namespace App\Http\Controllers\Articles;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Article;
use App\Models\Category;

class ArticleController extends Controller
{
    public function index(){
        $blog = Article::latest()->paginate(5);
        return view('articles.index', ['article'=>$blog]);
    }
    public function detail($id){
        $data = Article::find($id);
        return view('articles.detail', ['article' => $data]);
    }
    public function add(){
        $cat = Category::all();
        return view('articles.add',['categories'=>$cat]);
    }
    public function create()
    {
        $validator = validator(request()->all(), [
        'title' => 'required',
        'body' => 'required',
        'category_id' => 'required',
        ]);

        if($validator->fails()) {
        return back()->withErrors($validator);
        }
        
        $article = new Article;
        $article->title = request()->title;
        $article->body = request()->body;
        $article->category_id = request()->category_id;
        $article->save();
        return redirect('/')->with('create', 'New Article Created');
    }
    public function delete($id){
        $data = Article::find($id);
        $data->delete();
        return redirect('/')->with('info', 'Article deleted');
    }
    public function edit($id){
        $data = Article::find($id);
        return view('articles.edit', ['article' => $data]);
    }

    public function update($id){
        $data = Article::find($id);
        $data->update(['title'=> request('title'), 'body'=>request('body')]);
        return redirect('/');
    }
    

}
