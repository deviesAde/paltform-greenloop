<?php
namespace App\Http\Controllers\Dashboard;

use App\Models\Article;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class ArticleController extends Controller
{
    public function index()
    {
        $title = 'Daftar Artikel';
        $allowedParams = ['q', 'sort', 'order']; // Sesuaikan dengan parameter yang diizinkan
        $articles = Article::paginate(10);
        return view('dashboard.articles.index', compact('articles', 'title', 'allowedParams'));
    }

    public function store(Request $request)
    {
        $request->validate([
            'title' => 'required',
            'link' => 'required|url',
            'is_published' => 'required|boolean',
        ]);

        Article::create($request->all());

        return redirect()->route('dashboard.articles.index')->with('success', 'Artikel berhasil ditambahkan.');
    }

    public function edit(Article $article)
    {
        $title = 'Edit Artikel';
        return view('dashboard.articles.edit', compact('article', 'title'));
    }

    public function update(Request $request, Article $article)
    {
        $request->validate([
            'title' => 'required',
            'link' => 'required|url',
            'is_published' => 'required|boolean',
        ]);

        $article->update($request->all());

        return redirect()->route('dashboard.articles.index')->with('success', 'Artikel berhasil diperbarui.');
    }

    public function destroy(Article $article)
    {
        $article->delete();

        return redirect()->route('dashboard.articles.index')->with('success', 'Artikel berhasil dihapus.');
    }

    public function show(Article $article)
    {
        $title = 'Detail Artikel';
        return view('dashboard.articles.show', compact('article', 'title'));
    }
}