<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Buyer extends Model
{
    use HasFactory;

    /**
     * The table associated with the model.
     *
     * @var string
     */
    protected $table = 'buyers';

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = ['shipping_preferences', 'fav_pay', 'user_id'];
    protected $primaryKey = 'user_id';


    /**
     * The user that the buyer belongs to.
     */
    public function user()
    {
        return $this->belongsTo(User::class, 'user_id', 'id');
    }

    public function orders(){
        return $this->hasMany(Order::class,'buyer_id','user_id');
    }
}