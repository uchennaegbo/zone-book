<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Intervention\Image\Facades\Image;

class BooksController extends Controller
{

    public function __construct()
    {
        $this->middleware('auth');
    }

    public function create()
    {
        return view('books.create');
    }

    public function store()
    {
        $data = request()->validate([
            'title' => 'required',
            'description' => 'required',
            'image' => ['required','image'],
        ]);

        $imagePath = request('image')->store('uploads','public');

        $image = Image::make(public_path("storage/{$imagePath}"))->fit(1200,1200);
        $image->save();


            auth()->user()->books()->create([
                'title' => $data['title'],
                'description' => $data['description'],
                'image' => $imagePath
            ]);


        return redirect('/profile/' . auth()->user()->id);
    }

    public function show(\App\Book $book)
    {
        return view('books.show', compact('book'));
    }
}
