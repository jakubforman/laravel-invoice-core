<?php

namespace App\Http\Controllers;

use App\Models\Item;
use Illuminate\Http\Request;

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

    function create()
    {
        return view("items.create");
    }

    function store(Request $request)
    {
        // kompletní validační pravidla: https://laravel.com/docs/9.x/validation
        $request->validate([
            "name" => "required|string",
            "ean" => "required",
            "price" => "required|integer",
            "description" => "string"
        ]);

        // vytvořit první uložení itemu
        Item::create($request->except("_token"));

        // Alternativní možnosti
        // $item = new Item($request->except("_token"));
        // $item->save();

        // $item = new Item();
        // $item->name = $request->get("name");
        // $item->ean = $request->get("ean");
        // ...
        // $item->save();

        // TODO: Flash::success('Item byl vytvořen úspěšně.');
        // přesměrování na items.index routu
        return redirect(route("items.index"));
    }

    function save(Request $request, int $id)
    {
        /** @var Item $item */
        $item = Item::find($id);

        if (!$item) {
            abort(404);
        }

        // klasicky PHP
        // $all = $request->all();
        // unset($all["_token"]);
        // $item->fill($all);

        // laravel
        $item->fill($request->except('_token'));

        // nebo takto
        // $item->name = $request->get("name");
        // $item->currency = $request->get("currency");
        // ...

        // update | save item
        $item->save();

        // TODO: Flash::success("Item byl aktulizován");

        return redirect(route('items.show', $item->id));
    }

    function destroy(int $id)
    {

        /** @var Item $item */
        $item = Item::find($id);

        if (!$item) {
            abort(404);
        }

        $item->delete();

        return redirect(route("items.index"));
    }
}
