<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\User;
use App\Models\Position;
class UserDetails extends Model
{
    use HasFactory;
    protected $table = 'user_info_tbl';
    protected $fillable = [
        'user_id',
        'position',
        'contact_number',
        'age',
        'sss',
        'philhealth',
        'tin',
        'status',
    ];
    public function user_dtls(){
        return $this->belongsTo(User::class,'user_id');
    }
    public function position_dtls(){
        return $this->belongsTo(Position::class,'position');
    }
    public function status_dtls(){
        return $this->belongsTo(Status::class,'status');
    }
}
