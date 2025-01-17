@extends('layouts.app')

@section('content')
    <br><br><br><br><br>
    <div class="container-fluid">
        <div class="row">
            <h3>{{$event->name}}</h3>
        </div>

        <form action="/media/photo/edit" method="POST" enctype="multipart/form-data">
            <input type="hidden" name="id" value="{{$event->id}}">
            @csrf
            <div class="row">
                @foreach ($event->album as $album)
                    <div class="col-md-4">
                        <img src="{{$album->url}}" class="img-fluid" alt="image">
                        <br>
                        <input type="text" class="form-control" name="caption[]" value="{{$album->caption}}" placeholder="Caption for image" id="">
                        <br>
                        <a href="/media/photo/delete/{{$album->id}}" class="btn btn-warning w-100">Delete</a>
                        <br><br><br>
                    </div>
                @endforeach
            </div>

            <h4 class="text-center">ALL IMAGES HAVE TO BE OF 3:2 RATIO (376 x 195) AND OF MAX SIZE 2 MB</h4>
            <br>

            <div class="form-group row">
                <div class="col-md-2 pl-5">
                    <label for="all" class="form-label-control">Add file</label>
                </div>
                <div class="col-md-10">
                    <input type="file" class="form-control" name="all">
                    <br>
                    <input type="text" class="form-control" name="cap" placeholder="Image caption">
                </div>
            </div>

            <button class="btn btn-danger w-100" type="submit">Submit</button>
        </form>
    </div>
@endsection