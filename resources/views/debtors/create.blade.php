@extends('componant.app')
@section('title', 'home')
@section('content')
    <div class="container">

        <div class="main-panel">

            <div class="content-wrapper">
                <div class="card">
                    <div class="card-header">Debtors Page</div>
                    <div class="card-body">

                        <form action="{{ url('debtors') }}" method="post">
                            {!! Csrf_field() !!}
                            <label>Client & Account</label></br>
                            <div class="row">
                                <div class="col">
                                  <select name="client" id="client" class="form-control">
                                    <option value="">Select client</option>
                                    @foreach($clients as $client)
                                    <option value="{{$client->id}}">{{$client->name}}</option>
                                    @endforeach
                                  </select>
                                    {{-- <input type="text" class="form-control" name="client" placeholder="Client"> --}}
                                </div>
                                <div class="col">
                                    <input type="text" class="form-control" name="accountno"
                                        placeholder="Account Number">
                                </div>

                            </div>
                            </br>
                            <div class="row">
                                <div class="col">
                                    <input type="text" class="form-control" name="service" placeholder="Service">
                                </div>
                                <div class="col">
                                    <input type="text" class="form-control" name="totalbalance"
                                        placeholder="Total Amount">
                                </div>

                            </div> </br>
                            <label>Debtors Profile</label></br>
                            <div class="row">

                                <div class="col">
                                    <select name="title" id="title" class="form-control">
                                        <option value="Mr">Mr</option>
                                        <option value="Mrs">Mrs</option>
                                        <option value="Ms">Ms</option>
                                        <option value="Dr">Dr</option>
                                    </select>
                                </div>
                                <div class="col">
                                    <input type="text" class="form-control" name="debtor_first_name"
                                        placeholder="Debtor First">
                                </div>
                                <div class="col">
                                    <input type="text" class="form-control" name="debtor_surname"
                                        placeholder="Debtor Surname">
                                </div>
                                <div class="col">
                                    <input type="text" class="form-control" name="initials" placeholder="Initials">
                                </div>
                            </div>
                            </br>
                            <div class="row">
                                <div class="col">
                                    <input type="text" class="form-control" name="idnumber" placeholder="ID Number">
                                </div>
                                <div class="col">
                                    <input type="text" class="form-control" name="lastpaymentdate"
                                        placeholder="Last Payment Date">
                                </div>
                                <div class="col">
                                    <input type="text" class="form-control" name="lastamount"
                                        placeholder="Last Payment Amount">
                                </div>
                            </div> </br>

                            <div class="row">
                                <div class="col">
                                    <input type="text" class="form-control" name="address1" placeholder="Address">
                                </div>
                                <div class="col">
                                    <input type="text" class="form-control" name="address2" placeholder="Address 2">
                                </div>
                                <div class="col">
                                    <input type="text" class="form-control" name="address3" placeholder="Address 3">
                                </div>
                                <div class="col">
                                    <input type="text" class="form-control" name="postalcode" placeholder="Postal Code">
                                </div>
                            </div> </br>

                            <div class="row">
                                <div class="col">
                                    <input type="text" class="form-control" name="cell" placeholder="Phone #1">
                                </div>
                                <div class="col">
                                    <input type="text" class="form-control" name="cell_phone1" placeholder="Phone #2">
                                </div>

                            </div> </br>

                            <label>Debtor Employment Details</label></br>
                            <div class="row">

                                <div class="col">
                                    <input type="text" class="form-control" name="emp" placeholder="Employer">
                                </div>
                                <div class="col">
                                    <input type="text" class="form-control" name="empaddress" placeholder="Address">
                                </div>

                            </div>
                            </br>
                            <div class="row">
                                <div class="col">
                                    <input type="text" class="form-control" name="empcontacts"
                                        placeholder="Employee Contacts">
                                </div>


                            </div> </br>
                            <label>Interest</label></br>
                            <div class="row">
                                <div class="col">
                                    <input type="text" class="form-control" name="interest_rate"
                                        placeholder="Total Interest">
                                </div>


                            </div>
                            </br>
                            <input type="submit" value="Save" class="btn btn-success"></br>
                        </form>





                    @stop
