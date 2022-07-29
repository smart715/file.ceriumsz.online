@extends('componant.app')
@section('title', 'home')
@section('link')

    <style>
        .icon-size-css {
            font-size: 35px;
            padding: 10px;

        }
    </style>

    <style>
        h4.card-title {
            font-weight: 700;
            font-size: 18px !important;
        }

        .debtors-card table tr td {
            vertical-align: middle;
            font-size: 14px;
            color: #515151;
            padding: 0 0 10px 10px !important;
        }

        .debtors-card table tr td[scope="row"] {
            font-weight: 500 !important;
        }
    </style>
@endsection

@section('content')

    <div class="">
        <div class=" ">

            <div class="content-wrapper">


                <div class="row">
                    <div class="col-12 my-5">
                        <div class="card debtors-card shadow-sm border border-secondary">
                            <div class="card-body">
                                <div class="row">
                                    <!-- Debtors Table -->
                                    <div class="col-lg-8 col-6 border-right"
                                        style="border-width: 3px !important; border-color: #515151">
                                        <h4 class="card-title mb-4">Debtors Info</h4>
                                        <div class="table-responsive">
                                            <table class="table table-borderless table-hover table-sm">
                                                <tbody>
                                                    <tr>
                                                        <td scope="row">Id Number</td>
                                                        <td>{{ $debtors->id_number }}</td>

                                                        <td scope="row">Surname</td>
                                                        <td>{{ $debtors->surname }}</td>
                                                    </tr>

                                                    <tr>
                                                        <td scope="row">First Name</td>
                                                        <td>{{ $debtors->first_name }}</td>

                                                        <td scope="row">Second Name</td>
                                                        <td>{{ $debtors->second_name }}</td>
                                                    </tr>

                                                    <tr>
                                                        <td scope="row">Email</td>
                                                        <td>{{ $debtors->email }}</td>

                                                        <td scope="row">Contact No</td>
                                                        <td>{{ $debtors->contact_no }}</td>
                                                    </tr>

                                                    <tr>
                                                        <td scope="row">Initials</td>
                                                        <td>{{ $debtors->initial }}</td>

                                                        <td scope="row">Title</td>
                                                        <td>{{ $debtors->title }}</td>
                                                    </tr>

                                                    <tr>
                                                        <td scope="row">Client Reference</td>
                                                        <td>{{ $debtors->client_reference }}</td>

                                                        <td scope="row">Client Division</td>
                                                        <td>{{ $debtors->client_division }}</td>
                                                    </tr>

                                                    <tr>
                                                        <td scope="row">Old Client Reference</td>
                                                        <td>{{ $debtors->old_client_reference }}</td>

                                                        <td scope="row">Client Profile Account</td>
                                                        <td>{{ $debtors->client_profile_account }}</td>
                                                    </tr>

                                                    <tr>
                                                        <td scope="row">Account Type</td>
                                                        <td>{{ $debtors->account_type }}</td>

                                                        <td scope="row">Amount</td>
                                                        <td>{{ $debtors->amount }}</td>
                                                    </tr>

                                                    <tr>
                                                        <td scope="row">Debtor First Name</td>
                                                        <td>{{ $debtors->debtor_first_name }}</td>

                                                        <td scope="row">Debtor Second Name</td>
                                                        <td>debtor_second_name</td>
                                                    </tr>

                                                    <tr>
                                                        <td scope="row">Debtor Surname</td>
                                                        <td>{{ $debtors->debtor_surname }}</td>

                                                        <td scope="row">Debtor Initials</td>
                                                        <td>{{ $debtors->debtor_initial }}</td>
                                                    </tr>

                                                    <tr>
                                                        <td scope="row">Debtor Title</td>
                                                        <td>{{ $debtors->debtor_title }}</td>

                                                        <td scope="row">Home Phone 1</td>
                                                        <td>{{ $debtors->home_phone1 }}</td>
                                                    </tr>

                                                    <tr>
                                                        <td scope="row">Home Phone 2</td>
                                                        <td>{{ $debtors->home_phone2 }}</td>

                                                        <td scope="row">Cell Phone 1</td>
                                                        <td>{{ $debtors->cell_phone1 }}</td>
                                                    </tr>

                                                    <tr>
                                                        <td scope="row">Cell Phone 2</td>
                                                        <td>{{ $debtors->cell_phone2 }}</td>

                                                        <td scope="row">Interest Rate</td>
                                                        <td>{{ $debtors->interest_rate }}</td>
                                                    </tr>
                                                </tbody>
                                            </table>
                                        </div>
                                    </div>

                                    <!-- Account Info Table -->
                                    <div class="col-lg-4 col-6">
                                        <h4 class="card-title mb-4">Account Info</h4>

                                        <div class="table-responsive">
                                            <table class="table table-borderless table-sm">
                                                <tbody>
                                                    <tr>
                                                        <td scope="row">Handover Amount</td>
                                                        <td align="right">1000.0</td>
                                                    </tr>

                                                    <tr>
                                                        <td scope="row">Initial Interest Date</td>
                                                        <td align="right">2021/12/01</td>
                                                    </tr>

                                                    <tr>
                                                        <td scope="row">Current Interest Rate</td>
                                                        <td align="right">0.00 %</td>
                                                    </tr>

                                                    <tr>
                                                        <td scope="row">Interest to Date</td>
                                                        <td align="right">R 0.00</td>
                                                    </tr>

                                                    <tr>
                                                        <td scope="row">
                                                            Fees & Expenses to Date
                                                            <small class="text-danger">(Incl. VAT && FCC)</small>
                                                        </td>
                                                        <td align="right">R 1000.0</td>
                                                    </tr>

                                                    <tr>
                                                        <td colspan="2">
                                                            <hr class="border-dark m-0" />
                                                        </td>
                                                    </tr>

                                                    <tr>
                                                        <td scope="row">Payments to Date</td>
                                                        <td align="right">(R 0.00)</td>
                                                    </tr>

                                                    <tr>
                                                        <td colspan="2">
                                                            <hr class="border-dark m-0" />
                                                        </td>
                                                    </tr>

                                                    <tr>
                                                        <td scope="row">Balance</td>
                                                        <td align="right">R 10000.0</td>
                                                    </tr>

                                                    <tr>
                                                        <td scope="row">
                                                            Balance <small class="text-danger">(Incl. FCC)</small>
                                                        </td>
                                                        <td align="right">R 10000.0</td>
                                                    </tr>
                                                </tbody>
                                            </table>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>




                </div>


            </div>

            <div class="card mb-3">
                <div class="card-body">
                    <h4 class="card-title">Account History</h4>
                    <div class="row">
                        <div class="col-12 table-responsive">
                            <div id="order-listing_wrapper" class="dataTables_wrapper container-fluid dt-bootstrap4 no-footer">
                                <table id="table1" class="table dataTable no-footer" role="grid" aria-describedby="order-listing_info">
                                    <thead>
                                        <tr role="row">
                                            <th>ID</th>
                                            <th>Date</th>
                                            <th>Account No.</th>
                                            <th>Action Type</th>
                                            <th>Cost</th>
                                            <th>User Name</th>
                                            <th>Status</th>
                                            <th>Comments</th>
                                        </tr>
                                    </thead>
                                    <tbody>

                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

            <div class="card mb-3">
                <div class="card-body">
                    <h4 class="card-title">Comments</h4>
                    <div class="row">
                        <div class="col-12 table-responsive">
                            <div id="order-listing_wrapper" class="dataTables_wrapper container-fluid dt-bootstrap4 no-footer">
                                <table id="table2" class="table dataTable no-footer" role="grid" aria-describedby="order-listing_info">
                                    <thead>
                                        <tr role="row">
                                            <th>ID</th>
                                            <th>Date</th>
                                            <th>Account</th>
                                            <th>User</th>
                                            <th>Comment</th>
                                        </tr>
                                    </thead>
                                    <tbody>

                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>


    </div>
    @endsection


@section('script')

<script src="{{ url('js/data-table.js') }}"></script>
<script>
     $(document).ready( function () {
    $('#table1').DataTable();
    $('#table2').DataTable();
} );
</script>




@endsection


