<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreFileRequest;

class FileController extends Controller
{
    public function store(StoreFileRequest $request)
    {
        $request->file('file')->store('uploads');

        return back()->with('success', 'File uploaded successfully!');
    }
}
