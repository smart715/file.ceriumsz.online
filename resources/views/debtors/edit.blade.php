@extends('componant.app')
@section('title', 'home')
@section('content')
<div class="card">
  <div class="card-header">debtors Page</div>
  <div class="card-body">
      
      <form action="{{ url('debtors/' .$debtors->id) }}" method="post">
        {!! Csrf_field() !!}
        @method(“PATCH")
        <input type="hidden" name="id" id="id" value="{{$debtors->id}}"/>
        <label>Name</label></br>
        <input type="text" name="group" id="name" value="{{$debtors->name}}" class="form-control"></br>
        <label>Group</label></br>
        <input type="text" name="location" id="group" value="{{$debtors->group}}" class="form-control"></br>
        <label>Location</label></br>
        <input type="text" name="address" id="address" value="{{$debtors->location}}" class="form-control"></br>
        <label>Contacts</label></br>
        <input type="text" name="contacts" id="contacts" value="{{$debtors->contacts}}" class="form-control"></br>
        <input type="submit" value="Update" class="btn btn-success"></br>
    </form>
  
  </div>
</div>
@stop
