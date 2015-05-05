@extends('app')

@section('content')
<div class="container">
	<div class="row">
		<div class="col-md-12">

            <table class="table table-striped">
                <thead>
                    <tr>
                        <th>ID</th>
                        <th>Name</th>
                        <th>Description</th>
                        <th>Action</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach($products as $product)
                        <tr>
                            <td>{{ $product->id }}</td>
                            <td>{{ $product->name }}</td>
                            <td>{{ $product->description }}</td>
                            <td></td>
                        </tr>
                    @endforeach
                </tbody>

            </table>


		</div>
	</div>
</div>
@endsection
