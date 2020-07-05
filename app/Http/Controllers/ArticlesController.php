<?php

namespace App\Http\Controllers;

use App\User;
use App\Article;
use Illuminate\Http\Request;

class ArticlesController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $articles = Article::all();

        // dd($articles->all());
        return view('articles.index', compact('articles'));
    }

    public function detail(Article $article)
    {
        return view('articles.detail', compact('article'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('articles.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $request->validate([
            'head' => 'required',
            'body' => 'required',
            'tag' => 'required',
        ]);

        $article = new Article;
        $article->head = $request->head;
        $article->body = $request->body;
        $article->tag = $request->tag;
        $article->user_id = $request->user_id;
        $article->slug = str_replace(' ', '-', strtolower($request->head));

        $article->save();

        return redirect('/artikel')->with('status', 'Article has been submitted');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Article  $article
     * @return \Illuminate\Http\Response
     */
    public function show(Article $article)
    {
        return view('articles.show', compact('article'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Article  $article
     * @return \Illuminate\Http\Response
     */
    public function edit(Article $article)
    {
        return view('articles.edit', compact('article'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Article  $article
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Article $article)
    {

        Article::where('id', $article->id)->update([
            'head'      => $request->head,
            'body'      => $request->body,
            'tag'       => $request->tag,
            'slug'      => str_replace(' ', '-', strtolower($request->head)),
            'user_id'   => $request->user_id
        ]);
        
        return redirect('/artikel')->with('status', 'Article has been updated');

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Article  $article
     * @return \Illuminate\Http\Response
     */
    public function destroy(Article $article)
    {
        Article::destroy($article->id);

        return redirect('/artikel')->with('status', 'Delete Success.');
    }
}
