<?php

namespace App\Http\Controllers;

use App\Models\Item;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\DB;


class ItemController extends Controller
{
    //See Items List
    public function seeItems(){
        $items = Item::paginate(3);
        return view('show_items')->with('items',$items);
    }

    public function seeItemDetails(request $requestItem){
        $requestItem = DB::table('items')
        -> where('items.item_id',$requestItem->route('item_id'))->first();
        return view ('item_details')->with('item',$requestItem);
    }

    //Admin Stuffs
    public function seeItemsAdmin(){
        $items = Item::all();
        return view('edit_items')->with('items',$items);
    }

    //CREATE
    //Display Form
    public function addItemAdminPage(){
        return view('add_item');
    }

    //Actually Add the item
    public function addItemAdmin(Request $request){
        $id = $request->item_id;
        $price = $request->item_price;
        $category = $request->item_category;
        $name = $request->item_name;
        $description = $request->item_description;

        $this->validate($request,[
            'item_id' => "required | max:5 | unique:items,item_id",
            'item_price' => "required | integer | gte:1000",
            'item_name' => "required | max:20 | unique:items,item_name",
            'item_description' => "required | max:200",
            'item_image' => "required | mimes:png,jpg,jpeg"
        ]);

        $img = $request->file('item_image');
        Storage::putFileAs('/storage/images', $img, $img->getClientOriginalName());

        $insertItem = [
            'item_id' => $id,
            'price' => $price,
            'category' => $category,
            'item_name' => $name,
            'description' => $description,
            'image' => $img->getClientOriginalName(),
            'created_at' => NULL,
            'created_at' => NULL,
        ];

        DB::table('items')->insert($insertItem);

        return redirect()->back();

    }

    //update current item
    //Display Form
    public function updateItemAdminPage(request $requestItem){
        $requestItem = DB::table('items')
        -> where('items.item_id',$requestItem->route('item_id'))->first();
        return view ('update_item')->with('item',$requestItem);
    }
    //Actually updates the item
    public function updateItemAdmin(Request $request){
        $price = $request->item_price;
        $category = $request->item_category;
        $name = $request->item_name;
        $description = $request->item_description;

        $this->validate($request,[
            'item_price' => "integer | gte:1000",
            'item_name' => "required | max:20",
            'item_description' => "required | max:200",
            'item_image' => "mimes:png,jpg"
        ]);

        $img = $request->file('item_image');
        if($request->hasFile('item_image')){
            $updateItem = [
                'item_id' => $id,
                'price' => $price,
                'category' => $category,
                'item_name' => $name,
                'description' => $description,
                'image' => $img->getClientOriginalName(),
                'created_at' => NULL,
                'created_at' => NULL,
            ];

            Storage::putFileAs('/storage/images', $img, $img->getClientOriginalName());
            DB::table('items')->where('item_id',$request->route('item_id'))->update($updateItem);

        }

        else{
            $updateItem = [
                'price' => $price,
                'category' => $category,
                'item_name' => $name,
                'description' => $description,
                'created_at' => NULL,
                'created_at' => NULL,
            ];

            DB::table('items')->where('item_id',$request->route('item_id'))->update($updateItem);

        }

        return redirect()->back();

    }

    //delete item
    //Actually deletes it
    public function deleteItemAdmin(Request $request){
        DB::table('items')->where('item_id',$request->route('item_id'))->delete();
        return redirect()->back();
    }


    //search items
    public function searchItems(Request $request){
        $items = Item::where("item_name", "LIKE", "%$request->item_search%")->paginate(3);
        return view('show_items')->with('items',$items);
    }

}


