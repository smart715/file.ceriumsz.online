@extends('componant.app')
@section('title', 'home')
@section('content')
@section('link')

    <style>
        .icon-size-css {
            font-size: 35px;
            padding: 50px;

        }
    </style>

    <style>
        h4.card-title {
            font-weight: 700;
            font-size: 18px !important;
        }

        .card-header table tr td {
            vertical-align: middle;
            font-size: 14px;
            color: #515151;
            padding: 0 0 150px 150px !important;
        }

        .card-header table tr td[scope="row"] {
            font-weight: 500 !important;
        }
    </style>
@endsection
<div class="container">
    <div class="main-panel">
        <div class="content-wrapper">
            <div class="row">
                <div class="col-12 ">
                    <div class="card">
                        <div class="card-header">debtors</div>
                        <div class="card-body">
                            <a href="{{ url('/debtors/create') }}" class="btn btn-success btn-sm"
                                title="Add New Contact">
                                <i class="fa fa-plus" aria-hidden="true"></i> Add New
                            </a>
                            <a href="javascript:void(0);" class="btn btn-success btn-sm csv-upload" title="Add New Contact">
                                <i class="fa fa-plus" aria-hidden="true"></i> Upload CSV
                            </a>
                            <form action="{{route('debtors.csv.upload')}}" method="POST"
                                enctype="multipart/form-data" style="display: none;" id="csv-upload">
                                {{ csrf_field() }}
                                <input type="file" name="csv" id="csv" />
                            </form>
                            <br />
                            <br />
                            <div class="table-responsive">
                                <table class="table">
                                    <thead>
                                        <tr>
                                            <th>#</th>
                                            <th>Account#</th>
                                            <th>ClientName</th>
                                            <th>DebtorName</th>
                                            <th>Contacts</th>
                                            <th>Amount</th>
                                            <th>Actions</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        @foreach ($debtors as $item)
                                            <tr>
                                                <td>{{ $loop->iteration }}</td>
                                                <td>{{ $item->accountno }}</td>
                                                <td>{{ $item->client_name }}</td>
                                                <td>{{ $item->debtor_first_name }}</td>
                                                <td>{{ $item->cell }}</td>
                                                <td>{{ $item->totalbalance }}</td>

                                                <td>
                                                    <a href="{{ url('debtor/detail', $item->id) }}"
                                                        title="View Student"><button class="btn btn-info btn-sm"><i
                                                                class="fa fa-eye" aria-hidden="true"></i>
                                                            View</button></a>
                                                    <a href="{{ url('/debtors/' . $item->id . '/edit') }}"
                                                        title="Edit Student"><button class="btn btn-primary btn-sm"><i
                                                                class="fa fa-pencil-square-o" aria-hidden="true"></i>
                                                            Edit</button></a>

                                                    <form method="POST"
                                                        action="{{ url('/debtors' . '/' . $item->id) }}"
                                                        accept-charset="UTF-8" style="display:inline">
                                                        {{ method_field('DELETE') }}
                                                        {{ csrf_field() }}
                                                        <button type="submit" class="btn btn-danger btn-sm"
                                                            title="Delete debtors"
                                                            onclick="return confirm(&quot;Confirm delete?&quot;)"><i
                                                                class="fa fa-trash-o" aria-hidden="true"></i>
                                                            Delete</button>
                                                    </form>
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
        </div>
    </div>
</div>

<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>

<script>
    $(document).on('click', '.csv-upload', function() {
        $("#csv").click();
    });

    $(document).on('change', '#csv', function() {
        $("#csv-upload").submit();
    })
</script>
@endsection
