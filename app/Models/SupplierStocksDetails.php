<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\SupplierStocks;

class SupplierStocksDetails extends Model
{
    use HasFactory;
    protected $table = 'supplier_stocks_dtls_tbl';
    protected $fillable = [
        'stock_id',
        'size',
        'variant',
        'quantity',
        'price',
    ];
    public function return_stock_id(){
        return $this->belongsTo(SupplierStocks::class,'stock_id');
    }
}
