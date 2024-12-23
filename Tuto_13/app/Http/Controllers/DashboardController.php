<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\Article; // Assuming you have an Article model

class DashboardController extends Controller
{
    public function index()
    {
        // Get the authenticated user
        $user = Auth::user();

        // Get the articles associated with the user (assuming a relationship)
        $articles = $user->articles;  // Assuming you have a relationship 'articles' defined on the User model

        // Return the dashboard view with user and articles data
        return view('dashboard', compact('user', 'articles'));
    }
}
