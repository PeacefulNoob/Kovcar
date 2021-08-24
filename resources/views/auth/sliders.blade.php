@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <li><a class="slide-item" href="/slider/create">Add Slider</a></li>
    </div>
    <div class="row">
        <table class="table">
            <thead>
              <tr>
                <th scope="col">#</th>
                <th scope="col">Name</th>
                <th scope="col">Option</th>
              </tr>
            </thead>
            <tbody>
                @foreach ($sliders as $slider)
                    
              <tr>
                <th scope="row">{{$slider->id}}</th>
                <td>{{$slider->title}}</td>
                <td>
                    <a href="{{ route('slider.edit',$slider->id) }}"><button
                        type="button" class="btn btn-primary">Edit</button></a> 

                </td>
              </tr>
              @endforeach

            </tbody>
          </table>
    </div>
</div>
@endsection
