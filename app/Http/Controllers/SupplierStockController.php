<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\SupplierStocks;
use App\Models\SupplierStocksDetails;
use Illuminate\Support\Facades\Validator;

class SupplierStockController extends Controller
{
    public function index(){
        $header = "Supplier";
        $title = "Stocks";
        return view('supplier.stock', compact(['header','title']));
    }
    public function getStock(){
        $data = SupplierStocks::all()->where('supplier_id', auth()->user()->id);

        $response = [];
        foreach($data as $row){
            $response[] = [
                'id' => $row->id,
                'product_name' => $row->product_name,
                'product_type_id' => $row->return_type_id->name,
                'brand' => $row->brand,
                'image' => '<img src="'.asset('storage/image/'. $row->image).'" class="img-thumbnail w-50">',
                'action' => '<button class="main-btn primary-btn square-btn btn-hover btn-sm" onclick="showAddOns('.$row->id.')"><i class="lni lni-plus"></i></button>
                <button class="main-btn success-btn square-btn btn-hover btn-sm view-details" data-id="'.$row->id.'"><i class="lni lni-eye"></i></button>',
                //onclick="showDetails('.$row->id.')"
            ];
        }
        return response()->json($response);
    }
    public function addDetails(Request $request){
        $validator = Validator::make($request->all(), [
            'size' => 'required|string|max:255', // Optional field, can be null or string
            'variant' => 'nullable|string|max:255', // Optional field, can be null or string
            'quantity' => 'required|integer|min:1', // Ensure quantity is a positive integer
            'price' => 'required|numeric|min:0', // Ensure price is a non-negative number
        ]);

        // If validation fails, return errors
        if ($validator->fails()) {
            return response()->json([
                'status' => 'error',
                'errors' => $validator->errors()->all()
            ], 400);
        }
        $data = SupplierStocksDetails::create([
            'stock_id' => $request->id,
            'size' => $request->size,
            'variant' => $request->variant,
            'quantity' => $request->quantity,
            'price' => $request->price
        ]);
        return response()->json([
            'status' => 'success',
            'message' => 'Stocks request submitted successfully'
        ]);
    }
    public function showDetails(Request $request, $id){

        $data = SupplierStocksDetails::all()->where('stock_id', $id);

        $response = [];
        $size = 1;
        foreach($data as $row){
            $response[]= [
                'id' => $size++,
                'size' => $row->size,
                'variant' => $row->variant,
                'quantity' => $row->quantity,
                'price' => $row->price
            ];
        }
        return response()->json($response);
    }

}
