<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\DAO\Book;

class ImageController extends Controller
{
    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $b = Book::find($id);
        $path = public_path() . '/storage/epubs_data/' . $b->filename . '.png';
        return response()->file($path);
    }
}
