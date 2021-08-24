@extends('layouts.app')



@section('content')
<link href="/assets/css/select2.min.css" rel="stylesheet">

<div class="container-fluid adminPage">
    <h1 class="my-4">Edit Slider {{$model->title}}</h1>
    <form action="/mode/upade/{{$model}}" method="POST"
    enctype="multipart/form-data">
    @method('PATCH')

    @csrf  
        <div class="form-row">
            <div class="form-group col-md-6">
                <label for="title" class="">Title</label>
                <input type="text" class="form-control" id="title" value="{{ $slider->title }}" name="title" required>
            </div>
       
        </div>
        <div class="form-group">
            <label for="description">Description</label>
            <textarea class="form-control" id="description" rows="3" name="description" placeholder="Type something..." required></textarea> <br>
            <textarea class="form-control" id="description" rows="3" name="description_rus" placeholder="Введите что-либо..." required></textarea>
            </textarea>
        </div>
        <div class="control-group form-group">
            <label for="file-cover-photo">Cover photo</label>
            <input type="file" id="file-cover-photo" class="file required" name="cover-photo">
        </div>
     
        
        <button type="submit" class="btn btn-primary">Add</button>
    </form>
</div>

@endsection