<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\ProductType;
use App\Models\User;

class SupplierStocks extends Model
{
    use HasFactory;
    protected $table = 'supplier_stocks_tbl';
    protected $fillable = [
        'supplier_id',
        'product_name',
        'product_type_id',
        'brand',
        'image',
        'description'
    ];
    public function return_type_id(){
        return $this->belongsTo(ProductType::class,'product_type_id');
    }
    public function return_supplier_id(){
        return $this->belongsTo(User::class,'supplier_id');
    }
}
