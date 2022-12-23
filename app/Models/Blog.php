<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Blog extends Model
{
    use HasFactory;
    protected $fillable = [
        'titulo',
        'logo',
        'user_id',
        'mision',
        'vision',
        'objetivo',
        'color_fondo',
        'color_card',
        'color_texto',
    ];
    public function user(){
        return $this->belongsTo(User::class);
    }
}
