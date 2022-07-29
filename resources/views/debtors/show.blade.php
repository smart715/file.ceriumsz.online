@extends('componant.app')
@section('title', 'home')
@section('content')
<div class="container">   
<div class="main-panel">
<div class="content-wrapper">
<div class="card">
  <div class="card-header">debtors Page</div>
  <div class="card-body">
  
        <div class="card-body">
        <h5 class="card-title">Account : {{ $debtors->accountno }}</h5>
        <h5 class="card-title">Client : {{ $debtors->client }}</h5>
        <h5 class="card-title">First Name : {{ $debtors->debtor_first_name }}</h5>
        <p class="card-text">Surname : {{ $debtors->debtor_surname }}</p>
        <p class="card-text">Amount owed : {{ $debtors->totalbalance }}</p>
  </div>
      
    </hr>
  
  </div>
</div>
</div>
</div>
</div>

