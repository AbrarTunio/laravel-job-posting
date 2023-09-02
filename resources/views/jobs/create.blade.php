@extends('layout')

@section('content')
<div class="row border m-2">
    <div class="col-md-8" style="margin: auto;">    
        <h1 class="text-center h3"> Post Job </h1>
        <form action="/jobs" method="POST" class="form border rounded border-danger">
            @csrf
            @method('PUT')
            <div class="row p-3 rounded">
                <div class="col-md-6 my-2">
                    <input type="text" placeholder="Enter title" class="form-control" 
                    name="title">
                    @error('title')
                        <p class="text-danger text-xs"> {{$message}} </p>
                    @enderror
                </div>

                <div class="col-md-6 my-2">
                    <input type="text"  placeholder="Enter tags" class="form-control" name="tags">
                    @error('tags')
                        <p class="text-danger text-xs"> {{$message}} </p>
                    @enderror
                </div>
                <div class="col-md-6 my-2">
                    <input type="text" name="company" placeholder="Enter Company Name" class="form-control">
                    @error('company')
                        <p class="text-danger text-xs"> {{$message}} </p>
                    @enderror
                </div>                
                <div class="col-md-6 my-2">
                    <input type="text" name="location"  placeholder="Enter Location" class="form-control">
                    @error('location')
                        <p class="text-danger text-xs"> {{$message}} </p>
                    @enderror
                </div>
                <div class="col-md-6 my-2" >
                    <input type="email" name="email" placeholder="Enter company email" class="form-control">
                    @error('email')
                        <p class="text-danger text-xs"> {{$message}} </p>
                    @enderror
                </div>
                <div class="col-md-6 my-2" >
                    <input type="text" name="website" 
                    placeholder="Enter company website" class="form-control">
                    @error('website')
                        <p class="text-danger text-xs"> {{$message}} </p>
                    @enderror
                </div>
                <div class="col-md-12 my-2">
                    <textarea class="form-control" rows="8" name="description" >
                        
                    </textarea>
                    @error('description')
                        <p class="text-danger text-xs"> {{$message}} </p>
                    @enderror
                </div>
                <div class="col-md-12">
                    <button class="btn btn-secondary" > Submit </button>
                </div>
            </div>
        </form>
    </div>
</div>

@endsection