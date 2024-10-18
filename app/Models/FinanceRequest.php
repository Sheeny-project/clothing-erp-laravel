<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class FinanceRequest extends Model
{
    use HasFactory;
    protected $table = "finance_request_tbl";
    protected $fillable = [
        'inventory_request_id',
        'approved_by',
        'status'
    ];
}
