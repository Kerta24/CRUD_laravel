<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class biodata extends Model
{
    use HasFactory;
    protected $guarded = ['id'];

    public function keluarga(){
        return $this->belongsTo(Keluarga::class);
    }
    
    public function postingan(){
        return $this->belongsTo(Postingan::class);
    }

    public function user(){
        return $this->belongsTo(User::class);
    }
    
}
