<?php

namespace Bulkly\Http\Controllers;

use Illuminate\Http\Request;

class BufferPostingController extends Controller
{
    public function index()
    {
        return view('buffer_posting.index');
    }
}
