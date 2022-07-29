@extends('componant.app')
@section('title', 'home')
@section('content')
<div class="container">
    
    <div class="main-panel">

<div class="content-wrapper">
<div class="card">
  <div class="card-header">Clients Page</div>
  <div class="card-body">
      
      <form action="{{ url('clients') }}" method="post">
        {!! Csrf_field() !!}
        <label>Name</label></br>
        <input type="text" name="name" id="name" class="form-control"></br>
        <label>Group</label></br>

        <input type="text" name="group" id="address" class="form-control"></br>
        <label>Location</label></br>
        <input type="text" name="location" id="mobile" class="form-control"></br>
        <label>Contacts</label></br>
        <input type="text" name="contacts" id="mobile" class="form-control"></br>
        <input type="submit" value="Save" class="btn btn-success"></br>
    </form>
  
  </div>
</div>
</div>
</div>
</div>

@stop
