<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\EBook;

class EBookController extends Controller
{
    public function show(EBook $ebook){
        return view ('content.bookDetail',[
            'title' => 'Detail EBook',
            'ebook' => $ebook
        ]);
    }
}
