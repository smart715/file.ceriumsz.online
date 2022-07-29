@extends('componant.app')
@section('title', 'home')

@section('content')

    <div class="">
        <div class="">
            <div class="content-wrapper">
                <div class="card">
                    <div class="card-body">
                        <h4 class="card-title">Debtor</h4>
                        <div class="row">
                            <div class="col-12 table-responsive">
                                <table id="order-listing" class="table">
                                    <thead>
                                        <tr>
                                            <th>ID #</th>
                                            <th>Id Number</th>
                                            <th>Client Name</th>
                                            <th>Debtor Name</th>
                                            <th>Email</th>
                                            <th>Contact No</th>
                                            <th>Amount</th>
                                            <th>Interest Rate</th>
                                            <th>Actions</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        @foreach ($debtors as $key=>$debtor)
                                          <tr>
                                            <td>{{ ++$key }}</td>
                                            <td>{{$debtor->id_number}}</td>
                                            <td>{{ $debtor->debtor_first_name }}</td>
                                            <td>{{ $debtor->first_name }}</td>
                                            <td>{{ $debtor->email }}</td>
                                            <td>{{ $debtor->contact_no }}</td>
                                            <td>{{ $debtor->amount }}</td>

                                                <td>{{ $debtor->interest_rate }}</td>



                                                <td>
                                                     <i class="icon-credit-card" style="font-size: 20px;margin-right: 12px;"></i>
                                                  <a href="{{ url('debtor',$debtor->id) }}">  <i class="icon-eye" style="font-size: 20px;margin-right: 12px;"></i></a>
                                                    <i class="icon-pencil" style="font-size: 20px;margin-right: 12px;"></i>
                                                    <i class="icon-trash" style="font-size: 20px;margin-right: 12px;"></i>
                                                </td>

                                        </tr>
                                        @endforeach


                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
           @include('componant.footer')

        </div>

    </div>

@endsection
@section('script')
    <script src="{{ url('js/data-table.js') }}"></script>
@endsection
