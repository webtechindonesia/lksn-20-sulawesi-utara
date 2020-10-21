@extends('layouts/app')


@section('content')

    @foreach( $polls as $poll )
        <div class="card" style="width: 18rem;">
                <div class="card-body">
                <h5 class="card-title">{{ $poll->title }}</h5>
                <h6 class="card-subtitle mb-2 text-muted">{{ $poll->deadline}} | {{ $poll->created_by }}</h6>
                <p class="card-text">{{ $poll->description }}</p>
                    <button type="button" class="btn btn-primary">Selasa</button>
                    <button type="button" class="btn btn-primary">Rabu</button>
                    <button type="button" class="btn btn-primary">Jumat</button>
                </div>
            </div>
    @endforeach()
@endsection
