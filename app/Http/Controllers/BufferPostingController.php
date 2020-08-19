<?php

namespace Bulkly\Http\Controllers;

use Illuminate\Http\Request;
use Bulkly\BufferPosting;
use DB;

class BufferPostingController extends Controller
{
    public function index()
    {
        $data = BufferPosting::paginate(10);
        return view('buffer_posting.index', compact('data'));
    }
}
