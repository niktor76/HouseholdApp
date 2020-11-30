<?php

namespace App\Http\Controllers;

use App\Models\ShoppingList;
use Illuminate\Http\Request;

class ShoppingListController extends Controller {
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct() {
        //
    }

    public function index() {
        $shoppingLists = ShoppingList::all();
//        $listItems =
//        $response = [
//            'shopping-list' => $shoppingLists,
//            'list-items' => $listItems];
        return response()->json($shoppingLists);
    }

    public function show($id) {
        $shoppingList = ShoppingList::find($id);
        return response()->json($shoppingList);
    }

//    public function create(Request $request) {
//        $familyMember = new FamilyMember();
//        $familyMember->first_name = $request->first_name;
//        $familyMember->price = $request->price;
//        $familyMember->description = $request->description;
//
//        $familyMember->save();
//        return response()->json($familyMember);
//    }
//
//    public function update(Request $request, $id) {
//        $product = FamilyMember::find($id);
//
//        $product->name = $request->input('name');
//        $product->price = $request->input('price');
//        $product->description = $request->input('description');
//        $product->save();
//        return response()->json($product);
//    }
//
//    public function destroy($id) {
//        $product = FamilyMember::find($id);
//        $product->delete();
//        return response()->json('product removed successfully');
//    }
}
