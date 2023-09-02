@extends('layout')
@php
    $tags = $job->tags;
    $arrayOfTags = explode( ', ' , $tags);
@endphp
@section('content')
<div class="col-md-6" style="margin:0 auto">
    <div class="card mb-3" >
        <div class="col-md-12">
            <img src="https://picsum.photos/800/200" style="width:100%; height: 200px;" 
            class="rounded-start" alt="...">
        </div>
        <div class="col-md-12">
            <div class="card-body">
                <h5 class="card-title"><a href="/job/{{$job->id}}">{{$job->title}}</a></h5>
                <p class="card-text">{{$job->description}}</p>
                <p class="card-text">{{$job->company}}</p>
                <p class="card-text">
                    @foreach( $arrayOfTags as $tag )
                    <a href="/?tag={{$tag}}" class="badge bg-primary rounded-pill">{{$tag}}</a>
                    @endforeach
                </p>
                <p class="card-text">Email: <small class="text-muted">{{$job->email}}</small></p>
                <p class="card-text">Website: <small class="text-muted">{{$job->website}}</small></p>
                <p class="card-text">Location: <small class="text-muted">{{$job->location}}</small></p>
                <div class="row justify-content-start">
                    <div class="col-md-2">
                        <a class="btn btn-primary" href="/jobs/edit/{{$job->id}}">Edit</a>    
                    </div>
                    <div class="col-md-2">
                        <form action="/jobs/{{$job->id}}" method="POST">
                            @csrf
                            @method('DELETE')
                            <button type="submit" class="btn btn-danger" >Delete</button>
                        </form>
                    </div>
                </div>
                    
            </div>
        </div>
    </div>
</div>


@endsection