@extends('app')

@section('content')

	<h2>Welcome to the Laravel Exercise</h2>
	
	<p>The purpose of this Laravel app is to provide an insight into the basic structure of a PHP application built using Laravel.</p>
	
	<h4>What to do</h4>
	
	<h5>1. Fix the Error on the "Customers" Page</h5>
	
	<p>There is currently an error when you try to access the "Customers" page. Resolve before continuing.</p>
	
	<h5>2. Create a Route & Controller</h5>
	
	<p>Create a new route for a "Customer Profile" detail page. Create a controller method that returns a "Customer Profile" detail view. The view itself can be empty!</p>
	
	<h5>3. Update the Customer Contacts Page</h5>
	
	<p>On the page where we display a customer's contacts, add a line for displaying a fax number. Add it to the database schema (seed.sql) as well.</p>
	
	<h5>4. Create API Endpoint</h5>
	
	<p>Create an API endpoint (route would be in routes/api.php!) that pulls in our list of customers and returns it in JSON. Assume no authentication is necessary for this endpoint.</p>
	
	<h5>5. Submit Changes</h5>
	
	<p>After making the above changes, submit a pull request including the above changes.</p>
	
@endsection