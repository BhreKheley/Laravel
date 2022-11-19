<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Publisher;

class PublisherController extends Controller
{
    public function index(){
        return  view('publisher', [
            'publishers' => Publisher::all()
        ]);
    }

    public function show(Publisher $publisher){
        return view('detail_publisher', [
            'publisher' => $publisher
        ]);
    }
}