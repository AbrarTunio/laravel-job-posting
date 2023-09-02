@extends('layout')

@section('content')

@if ( !empty(count( $jobs ))   ) 
    <!-- <div class="row justify-content-around"> -->
        @foreach ( $jobs as $job )
            @include('partials._hero')
        @endforeach
    <!-- </div> -->
@else
    <p class="border p-2 rounded border-danger">No Jobs Found</p>
@endif




@endsection
