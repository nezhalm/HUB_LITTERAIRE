<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class favori extends Model
{
    use HasFactory;
    protected $fillable = ['livre_id','user_id'];
    // public function livres(){
    //     return $this->belongsToMany(livre::class);

    // }
    public function Users()
    {
        return $this->belongsTo(User::class,'user_id');
    }
    public function Livres()
    {
        return $this->belongsTo(livre::class,'livre_id');
    }
}
