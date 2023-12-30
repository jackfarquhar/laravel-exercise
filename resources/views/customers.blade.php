@extends('app')

@section('content')

	<h2>The Laravel Exercise</h2>
	
	<h3>Customers</h3>
	
	<table class="table table-striped">
		<thead>
			<tr>
				<th>Customer</th>
				<th># Contacts</th>
				<th></th>
			</tr>
		</thead>
		<tbody>
			@foreach($customers as $customer)
			<tr>
				<td>{{$customer['name']}}</td>
				<td>{{$customer['num_contacts']}}</td>
				<td><a href="/customers/{{$customer['id']}}/contacts" class="btn btn-primary">View Contacts</a></td>
			</tr>
			@endforeach
		</tbody>
	</table>
	

@endsection