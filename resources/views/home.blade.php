@extends('app')

@section('content')

	<h2>Welcome to the Laravel Exercise</h2>
	
	<p>The purpose of this Laravel app is to provide an insight into the basic structure of a PHP application built using Laravel.</p>
	
	<h4>What to do</h4>
	
	<h5>1. Create a Route & Controller</h5>
	
	<p>Create a new route for a "Customer Profile" page. Don't worry about models or actually setting up the page itself. Just create the route, create the view, and add the method within the Controller file to render the (empty) view when accessing the customer profile page.</p>
	
	<h5>2. Update the Customer Contacts Page</h5>
	
	<p>On the page where we display a customer's contacts, add an attribute for displaying the phone number. Add it to the database schema (seed.sql) as well.</p>
	
	<h5>3. Create API Endpoint</h5>
	
	<p>Create an API endpoint (route would be in routes/api.php!) that pulls in our list of customers and displays it. Assume no authentication is necessary for this endpoint.</p>
	
	<h5>4. Submit Changes</h5>
	
	<p>After making the above changes, submit a pull request including the above changes.</p>
	
@endsection