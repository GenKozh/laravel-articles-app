<?php
namespace App\Http\Controllers;

use App\Article;
use Illuminate\Http\Request;

class ArticleController extends Controller
{
    public function index(Request $request)
    {
        $articles = new Article();
        $articles = $articles->where('name', 'like', '%' . '' . '%')
            ->paginate(5);
        return view('article.index', compact('articles'));
    }

    public function create(Request $request)
    {
        if ($request->isMethod('get'))
            return view('article.form');
        else {
            $article = new Article();
            $article->name = $request->name;
            $article->title = $request->title;
            $article->text = $request->text;
            $article->save();
            return redirect('/');
        }
    }

    public function delete($id)
    {
        Article::destroy($id);
        return redirect('/');
    }

    public function update(Request $request, $id)
    {
        if ($request->isMethod('get'))
            return view('article.form', ['article' => Article::find($id)]);
        else {
            $article = Article::find($id);
            $article->name = $request->name;
            $article->title = $request->title;
            $article->text = $request->text;
            $article->save();
            return redirect('/');
        }
    }
    public function details(Request $request, $id)
    {
            return view('article.details', ['article' => Article::find($id)]);
    }





}