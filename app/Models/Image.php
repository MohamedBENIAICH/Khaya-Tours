<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Image extends Model
{
    use HasFactory;

    protected $guarded = ['id'];
    protected $fillable = ['city', 'destination_id', 'image_path'];

    public function destination()
    {
        return $this->belongsTo(Destination::class);
    }
}