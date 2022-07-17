<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class FavouriteController extends Controller
{
    public function saveItem($id){
            $itemId = Item::find($id);
            $itemId->favourites()->attach(auth()->user()->id)
            return redirect()->back();
    }

    public function unSaveItem($id){
            $itemId = Item::find($id);
            $itemId->favourites()->detach(auth()->user()->id)
            return redirect()->back();
    }
}
