<?php

namespace Modules\User\Controllers;

use App\Article;
use App\Http\Controllers\Controller;
use App\Visitor;
use Illuminate\Http\Request;

class LoginController extends Controller {
    public function index() {
        return view('User::login');
    }
}