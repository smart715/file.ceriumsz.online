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
                    <div class="card-header" >Clients</div>
                    <div class="card-body">
                        <a href="{{ url('/clients/create') }}" class="btn btn-success btn-sm" title="Add New Contact">
                            <i class="fa fa-plus" aria-hidden="true"></i> Add New
                        </a>
                        <br/>
                        <br/>
                        <div class="table-responsive">
                            <table class="table">
                                <thead>
                                    <tr>
                                        <th>#</th>
                                        <th>Name</th>
                                        <th>Group</th>
                                        <th>Location</th>
                                        <th>Contacts</th>
                                        <th>Actions</th>
                                    </tr>
                                </thead>
                                <tbody>
                                @foreach($clients as $item)
                                    <tr>
                                        <td>{{ $loop->iteration }}</td>
                                        <td>{{ $item->name }}</td>
                                        <td>{{ $item->group }}</td>
                                        <td>{{ $item->location }}</td>
                                        <td>{{ $item->contacts }}</td>
 
                                        <td>
                                            <a href="{{ url('/clients/' . $item->id) }}" title="View Student"><button class="btn btn-info btn-sm"><i class="fa fa-eye" aria-hidden="true"></i> View</button></a>
                                            <a href="{{ url('/clients/' . $item->id . '/edit') }}" title="Edit Student"><button class="btn btn-primary btn-sm"><i class="fa fa-pencil-square-o" aria-hidden="true"></i> Edit</button></a>
 
                                            <form method="POST" action="{{ url('/clients' . '/' . $item->id) }}" accept-charset="UTF-8" style="display:inline">
                                                {{ method_field('DELETE') }}
                                                {{ csrf_field() }}
                                                <button type="submit" class="btn btn-danger btn-sm" title="Delete Clients" onclick="return confirm(&quot;Confirm delete?&quot;)"><i class="fa fa-trash-o" aria-hidden="true"></i> Delete</button>
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
@endsection
