@extends('componant.app')
@section('title', 'home')
@section('content')
<div class="container">   
<div class="main-panel">
<div class="content-wrapper">
<div class="card">
  <div class="card-header">Clients Page</div>
  <div class="card-body">
  
        <div class="card-body">
        <h5 class="card-title">Name : {{ $clients->name }}</h5>
        <h5 class="card-title">Name : {{ $clients->group }}</h5>
        <p class="card-text">Address : {{ $clients->location }}</p>
        <p class="card-text">Phone : {{ $clients->contacts }}</p>
  </div>
      
    </hr>
  
  </div>
</div>
</div>
</div>
</div>

