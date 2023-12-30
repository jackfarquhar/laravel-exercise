<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Contact extends Model
{
    public function customers()
    {
        return $this->belongsToMany(Customer::class, 'customers_contacts', 'contact_id', 'customer_id');
    }
}


?>