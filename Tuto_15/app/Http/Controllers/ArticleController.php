<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ArticleController extends Controller
{
public function update(Request $request, Article $article)
{
    $this->authorize('update', $article);
    // Logique de mise à jour
}
}
