@extends('layouts/master')
@section('content')
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
<link rel="stylesheet" href="{{asset('css/style.css')}}">

<h2> dessert</h2>
<div class="table-wrapper"> 

            <a href="{{route('createDessert')}}" class="btn btn-primary scrollto">creer un dessert</a></td>

    <table class="fl-table">
        
        <thead>
        <tr>
            <th>nom du dessert</th>
            <th>nom des ingredients</th>
            <th>action proposer</th>
        </tr>
    </thead>
    <tbody>
       @foreach ( $dessert as $item)
        <tr>
            <td colspan="">{{$item->name}}</td>
            <td colspan="">@foreach($item->ingredient as $ingredient)
                {{$ingredient->name}}  
                @endforeach
            </td>
          
                
            
            <td colspan="">
                <a href="{{route('editDessert',$item->id)}}" class="btn btn-warning scrollto">Edit</a>
                <a href="{{route('destroyDessert',$item->id)}}" class="btn btn-danger scrollto">Delete</a>
            </td>

        </tr>
        
            
        
       @endforeach
        <tbody>
            
    </table>

     
</div>
@endsection