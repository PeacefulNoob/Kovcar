@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <li><a class="slide-item" href="/slider">Sliders</a></li>
        <li><a class="slide-item" href="/model/create">Add Model</a></li>
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
                @foreach ($models as $model)
                    
              <tr>
                <th scope="row">{{$model->id}}</th>
                <td>{{$model->title}}</td>
                <td>
                    <a href="{{ route('model.edit',$model->id) }}"><button
                        type="button" class="btn btn-primary">Edit</button></a> 

                </td>
              </tr>
              @endforeach

            </tbody>
          </table>
    </div>
</div>
@endsection
