<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\DAO\Book;
use App\Http\Resources\BookResource;
use App\DAO\CategoryBook;

use Illuminate\Support\Facades\File;
use Illuminate\Support\Facades\Storage;

class BookController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $books = CategoryBook::all();
        foreach ($books as $b) {
            $path = public_path() . '/storage/epubs_data/' . $b->filename . '.png';
            // $file = File::get($path);
            $b->img = $path;
        }
        return new BookResource($books);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

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
        //$b->img = $path;
        //$filepath = 'epubs_data/' . $b->filename . '.png';
        //$disk = Storage::disk('public');
        //return response($disk->get($filepath));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
