<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\SupplierStocksDetails;
use App\Models\User;
use App\Models\Status;

class InventoryRequest extends Model
{
    use HasFactory;
    protected $table = 'inventory_rqst_tbl';
    protected $fillable = [
        'product_id',
        'quantity',
        'reason',
        'requestor_id',
        'status'
    ];

    public function product_dtls(){
        return $this->belongsTo(SupplierStocksDetails::class,'product_id');
    }
    public function status_dtls(){
        return $this->belongsTo(Status::class,'status');
    }
    public function requestor_dtls(){
        return $this->belongsTo(User::class,'requestor_id');
    }
}
