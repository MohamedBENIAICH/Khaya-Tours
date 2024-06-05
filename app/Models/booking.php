<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Booking extends Model
{
    use HasFactory;

    protected $guarded = [];
    protected $fillable = ['name', 'email', 'phone', 'gender', 'age'];


    public function user()
    {
        return $this->belongsTo(User::class, 'client_id');
    }

    public function destination()
    {
        return $this->belongsTo(Destination::class, 'destination_id');
    }
    
    public function invoices()
    {
        return $this->hasMany(Invoice::class, 'booking_id');
    }

    /**
     * Calculate the total amount of all invoices associated with this booking.
     *
     * @return float
     */
    public function totalInvoiceAmount()
    {
        return $this->invoices()->sum('amount');
    }
}