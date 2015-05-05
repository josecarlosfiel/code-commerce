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
                        <th>Action</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach($categories as $category)
                        <tr>
                            <td>{{ $category->id }}</td>
                            <td>{{ $category->name }}</td>
                            <td></td>
                        </tr>
                    @endforeach
                </tbody>

            </table>


		</div>
	</div>
</div>
@endsection
