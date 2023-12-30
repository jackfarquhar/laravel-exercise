<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\URL;
use Illuminate\Support\Facades\DB;

use App\Models\Customer;

class CustomerController extends Controller
{
 
 	public function listing(Request $request) {
	 	
	 	$customers = Customer::getCustomers()->toArray();
	 	
    return view('customers', ['customers' => $customers]);
	 	
 	} 
 	
  public function contacts(Request $request, $id) {
	  	  
      $customer = Customer::with('contacts')->findOrFail($id);

      return view('contacts', [
          'customer' => $customer,
          'contacts' => $customer->contacts
      ]);
  }
  
}

?>