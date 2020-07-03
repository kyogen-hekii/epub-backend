<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\DAO\CategoryPrimary;
use App\Http\Resources\CategoryResource;

class CategoryController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $categories = CategoryPrimary::all();
        return new CategoryResource($categories);
    }
}
