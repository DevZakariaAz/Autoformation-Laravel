<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Models\Article;

class ArticleController extends Controller
{
    public function index() {
    $articles = Article::all();
    return view('admin.articles.index', compact('articles'));
    }

    public function create() {
        return view('admin.articles.create');
    }

    public function edit(Article $article) {
        return view('admin.articles.edit', compact('article'));
    }

    public function store(Request $request) {
        $validated = $request->validate([
            'title' => 'required|max:255',
            'content' => 'required',
        ]);

        Article::create($validated);
        return redirect()->route('articles.index')->with('success', 'Article créé avec succès.');
    }
    
    public function show(Article $article) {
        return view('admin.articles.show', compact('article'));
    }

    public function update(Request $request, Article $article) {
        $validated = $request->validate([
            'title' => 'required|max:255',
            'content' => 'required',
        ]);

        $article->update($validated);
        return redirect()->route('admin.articles.index')->with('success', 'Article mis à jour avec succès.');
    }

    public function destroy(Article $article) {
        $article->delete();
        return redirect()->route('articles.index')->with('success', 'Article supprimé avec succès.');
    }
}
