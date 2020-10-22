<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Course;

class AppController extends Controller {
    public function index() {
        return view('library', ['courses' => Course::all()]);
    }
}
