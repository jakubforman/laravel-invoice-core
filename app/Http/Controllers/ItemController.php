<?php

namespace App\Http\Controllers;

use App\Models\Item;

class ItemController extends Controller
{
    /**
     * Get all items
     */
    function index()
    {
        $items = Item::all();
        dd($items);
        // TODO: dokončit implementaci
    }
}
