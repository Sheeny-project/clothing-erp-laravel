<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\ProductType;
use App\Models\SupplierStocks;
use Illuminate\Support\Facades\Validator;
class AddStockController extends Controller
{
    public function index(){
        $header = "Inventory";
        $title = "Request Stocks";
        $productType = $this->showProductType();
        return view('supplier.add-stock',compact(['productType','header','title']));
    }
    public function showProductType(){
        $data = ProductType::all();

        return $data;
    }
    public function addProductType(Request $request){
        $validated = $request->validate([
            'name' => 'required|string|max:255|unique:product_type_tbl,name',
        ]);

        // Create the product type
        ProductType::create([
            'name' => $validated['name']
        ]);

        // Return JSON response for AJAX
        return response()->json([
            'message' => $validated['name'] . ' added successfully!',
        ]);
    }
    public function addStock(Request $request){
    // Validate the request data
    $validator = Validator::make($request->all(), [
        'product_name' => 'required|string|max:255',
        'product_type_id' => 'required|exists:product_type_tbl,id', // Ensure the product type ID exists in the product_types table
        'brand' => 'required|string|max:255',
        'description' => 'required|string|max:1000', // Optional field with a maximum length
        'image' => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
    ]);

    // If validation fails, return errors
    if ($validator->fails()) {
        return response()->json([
            'status' => 'error',
            'errors' => $validator->errors()->all()
        ], 400);
    }
    if ($request->hasFile('image')) {
        $path = $request->file('image')->store('public/image');
        $filename = pathinfo($path, PATHINFO_BASENAME);
        // dd($filename);
        $requestStocks = SupplierStocks::create([
            'supplier_id' => auth()->user()->id,
            'product_name' => $request->product_name,
            'product_type_id' => $request->product_type_id,
            'brand' => $request->brand,
            'description' => $request->description,
            'image' => $filename,
        ]);

    return response()->json([
        'status' => 'success',
        'message' => 'Stocks request submitted successfully'
    ]);
    } else {
        return response()->json([
            'status' => 'error',
            'errors' => ['product_image' => ['The product image is required.']]
        ], 400);
    }
}
}
