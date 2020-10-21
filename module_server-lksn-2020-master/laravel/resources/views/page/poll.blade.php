@extends('layouts/app')

@section('content')



<div class="container">
    <div class="card mt-4">
        <div class="card-header">
            Poll
        </div>
        <div class="card-body">
            <a href="create-bus.html" class="btn btn-primary">Poll</a>
            <table class="table mt-4">
                <thead>
                <tr>
                    <th>ID</th>
                    <th>Username</th>
                    <th>Devision Name</th>
                </tr>
                </thead>
                <tbody>
                    @foreach( $poll as $pll )
                <tr>
                    <td>{{ $pll->id }}</td>
                    <td>{{ $pll->username }}</td>
                    <td> {{ $pll->division_name }}</td>
                    <td>
                        <a href="#" class="btn btn-sm btn-info">Edit</a>
                        <a href="#" class="btn btn-sm btn-danger">Delete</a>
                    </td>
                </tr>
                @endforeach();
                        <a href="#" class="btn btn-sm btn-info">Edit</a>
                        <a href="#" class="btn btn-sm btn-danger">Delete</a>
                    </td>
                </tr>
                </tbody>
            </table>
        </div>
    </div>
</div>
@endsection
