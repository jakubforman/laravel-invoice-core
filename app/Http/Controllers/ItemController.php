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

        return view("items.index")
            ->with("items", $items);
    }

    function show(int $id)
    {
        $item = Item::find($id);

        if (!$item) {
            abort(404);
        }

        return view("items.show", [
            "item" => $item
        ]);
    }

    function edit(int $id)
    {
        $item = Item::find($id);

        if (!$item) {
            abort(404);
        }

        return view("items.edit", [
            "item" => $item
        ]);
    }
}
