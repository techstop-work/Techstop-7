<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Contact extends Model
{
    protected $fillable = [
        'name', 'email', 'phone', 'subject', 'message', 'is_read'
    ];

    // Accessor for formatted date
    public function getFormattedDateAttribute()
    {
        return $this->created_at ? $this->created_at->format('d/m/Y') : null;
    }

    
}
