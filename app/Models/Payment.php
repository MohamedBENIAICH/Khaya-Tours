<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Payment extends Model
{
    use HasFactory;

    protected $guarded = [];
    protected $fillable = ['amount', 'status', 'client_id'];

    public function user()
    {
        return $this->belongsTo(User::class, 'client_id');
    }

}