@extends('componant.app')
@section('title', 'home')
@section('content')
<div class="card">
  <div class="card-header">Clients Page</div>
  <div class="card-body">
      
      <form action="{{ url('clients/' .$clients->id) }}" method="post">
        {!! Csrf_field() !!}
        @method(“PATCH")
        <input type="hidden" name="id" id="id" value="{{$clients->id}}"/>
        <label>Name</label></br>
        <input type="text" name="group" id="name" value="{{$clients->name}}" class="form-control"></br>
        <label>Group</label></br>
        <input type="text" name="location" id="group" value="{{$clients->group}}" class="form-control"></br>
        <label>Location</label></br>
        <input type="text" name="address" id="address" value="{{$clients->location}}" class="form-control"></br>
        <label>Contacts</label></br>
        <input type="text" name="contacts" id="contacts" value="{{$clients->contacts}}" class="form-control"></br>
        <input type="submit" value="Update" class="btn btn-success"></br>
    </form>
  
  </div>
</div>
@stop
