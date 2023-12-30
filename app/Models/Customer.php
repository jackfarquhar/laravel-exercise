<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use App\Models\Contact;

class Customer extends Model
{

  protected $table = 'customers';
  
  public $timestamps = false;
  
	//Define the relationship with contacts
  public function contacts()
  {
      return $this->belongsToMany(Contact::class, 'customers_contacts', 'customer_id', 'contacts_id');
  }  
  
  public static function getCustomers() {
	  
		$customers = Customer::with('contacts')->orderBy('name', 'ASC')->get();
		
		foreach($customers as $key => $customer) {
		    $contacts = $customer->contacts;
		    $customers[$key]['contacts'] = $contacts;
		    $customers[$key]['num_contacts'] = $contacts->count();
		}
	  
	  return $customers;
	  
  }
  
  public function getContacts() {
	  
  }
  

}
