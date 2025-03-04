<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreFileRequest;
use Illuminate\Support\Facades\Storage;

class FileController extends Controller
{
    public function store(StoreFileRequest $request)
    {
        $path = $request->file('file')->store('uploads');

        return back()->with('success', 'File uploaded successfully!');
    }
}