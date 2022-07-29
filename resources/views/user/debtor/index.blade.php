@extends('componant.app')
@section('title', 'home')
@section('link')

    <style>
        .icon-size-css {
            font-size: 35px;
            padding: 10px;
        }

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

    <div class="container-fluid page-body-wrapper">
        <div class="main-panel">

            <div class="content-wrapper">
                <div class="row">
                    <div class="col-md-12 mt-3">
                        <div style="display: flex; justify-content: space-between; align-items: center">
                            <a href="#" data-toggle="modal" data-target="#phonecallmodal"> <i
                                    class="fa-solid fa-phone-volume fa-2x" style="color: #6a0cae;" data-toggle="tooltip"
                                    title="" data-original-title="Phone Call"></i></a>
                            <a href="#" data-toggle="modal" data-target="#smsmodal"><i
                                    class="fa-solid fa-comment-sms fa-2x" style="color: #6a0cae;" data-toggle="tooltip"
                                    title="" data-original-title="SMS"></i></a>
                            <a href="#" data-toggle="modal" data-target="#yebopaymodal"><i class="fa-solid fa-money-check-dollar fa-2x" style="color: #6a0cae;" data-toggle="tooltip"
                                title="" data-original-title="Yebopay"></i></a>
                            <a href="#" data-toggle="modal" data-target="#myModal"> <i
                                    class="fa-solid fa-envelope-open-text fa-2x" style="color: #6a0cae;"
                                    data-toggle="tooltip" title="" data-original-title="Email"></i></a>
                            <i class="fa-solid fa-file-invoice fa-2x" style="color: #6a0cae;" data-toggle="tooltip"
                                title="" data-original-title="Trace"></i>

                            <a href="#" data-toggle="modal" data-target="#ptpmodal"><i
                                    class="fa-regular fa-thumbs-up fa-2x" style="color: #6a0cae;" data-toggle="tooltip"
                                    title="" data-original-title="Promise to Pay (PTP)"></i></a>

                            <a href="#" data-toggle="modal" data-target="#refusalmodal"><i
                                    class="fa-regular fa-thumbs-down fa-2x" style="color: #6a0cae;" data-toggle="tooltip"
                                    title="" data-original-title="Refusals to Pay (RTP)"></i></a>

                            <i class="fa-solid fa-person-circle-exclamation fa-2x" style="color: #6a0cae;"
                                data-toggle="tooltip" title=""
                                data-original-title="Acknowledgement of Debt (AOD)"></i>
                            <a href="#" data-toggle="modal" data-target="#accountcmtmodal"><i
                                    class="fa-solid fa-comments fa-2x" style="color: #6a0cae;" data-toggle="tooltip"
                                    title="" data-original-title="Comment"></i></a>
                            <a href="#" data-toggle="modal" data-target="#remainmodal"><i
                                    class="fa-solid fa-bullhorn fa-2x" style="color: #6a0cae;" data-toggle="tooltip"
                                    title="" data-original-title="Reminders"></i></a>
                            <i class="fa-solid fa-pen-to-square fa-2x" style="color: #6a0cae;" data-toggle="tooltip"
                                title="" data-original-title="Edit"></i>
                        </div>
                    </div>
                </div>

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
                                            @foreach ($account_histories as $account_histor)
                                                <tr>
                                                     <td>{{ $account_histor->id }}</td>
                                                     <td>{{ $account_histor->created_at }}</td>
                                                     <td>{{ $account_histor->account_no }}</td>
                                                     <td>{{ $account_histor->action_type }}</td>
                                                     <td></td>
                                                     <td>{{ $account_histor->user_name }}</td>
                                                     <td></td>
                                                     <td>{{ $account_histor->comments }}</td>

                                                 </tr>
                                            @endforeach

                                        </tbody>
                                    </table>
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

            @include('componant.footer')

        </div>

    </div>
    {{-- Mail send --}}
    <div class="modal" id="myModal">
        <div class="modal-dialog  modal-lg">
            <div class="modal-content">

                <!-- Modal Header -->
                <div class="modal-header">
                    <h4 class="modal-title"> Send Mail</h4>
                    <button type="button" class="close" data-dismiss="modal">&times;</button>
                </div>

                <!-- Modal body -->
                <div class="modal-body">
                    <div class="row">
                        <div class="col-md-6  ">
                            <div class="card">
                                <div class="card-body">
                                    <h4 class="card-title">Send an Email</h4>
                                    <p class="card-description">
                                        Send an Email
                                    </p>
                                    <form class="forms-sample">
                                        <div class="form-group">
                                            <label for="exampleInputUsername1">From Address</label>
                                            <input type="text" class="form-control" id="exampleInputUsername1"
                                                placeholder="From Address">
                                        </div>
                                        <div class="form-group">
                                            <label for="exampleInputEmail1">Recipient address</label>
                                            <input type="email" class="form-control" id="exampleInputEmail1"
                                                placeholder="Recipient Address">
                                        </div>
                                        <div class="form-group row">

                                            <div class="col-sm-4">
                                                <div class="form-check">
                                                    <label class="form-check-label">
                                                        <input type="radio" class="form-check-input"
                                                            name="membershipRadios" id="membershipRadios1" value=""
                                                            checked="">
                                                        Normal Mail
                                                        <i class="input-helper"></i></label>
                                                </div>
                                            </div>
                                            <div class="col-sm-5">
                                                <div class="form-check">
                                                    <label class="form-check-label">
                                                        <input type="radio" class="form-check-input"
                                                            name="membershipRadios" id="membershipRadios2"
                                                            value="option2">
                                                        Centralized Email
                                                        <i class="input-helper"></i></label>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <label for="exampleInputPassword1">Templete</label>
                                            <select class="form-control" id="exampleInputPassword1">
                                                <option selected>Select Templete</option>
                                            </select>
                                        </div>

                                        <div class="form-group">
                                            <label for="subject">Subject</label>
                                            <input type="text" class="form-control" id="subject"
                                                placeholder="Subject">

                                        </div>
                                        <div class="form-group">
                                            <label for="Message">Message</label>
                                            <textarea type="text" class="form-control" placeholder="Message" id="Message"></textarea>

                                        </div>


                                        <button type="submit" class="btn btn-primary mr-2">Submit</button>
                                        <button class="btn btn-light">Cancel</button>
                                    </form>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6  ">
                            <div class="card">
                                <div class="card-body">
                                    <h4 class="card-title">Attachments</h4>

                                    <form class="forms-sample">
                                        <div class="form-group row">
                                            <label for="exampleInputUsername2" class="col-sm-3 col-form-label">Upload
                                                Attach File</label>
                                            <div class="col-sm-9">
                                                <input type="file" class="form-control" id="exampleInputUsername2"
                                                    placeholder="Username">
                                            </div>
                                        </div>

                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Modal footer -->
                <div class="modal-footer">
                    <button type="button" class="btn btn-danger" data-dismiss="modal">Close</button>
                </div>

            </div>
        </div>
    </div>
    {{-- Phone call --}}
    <div class="modal" id="phonecallmodal">
        <div class="modal-dialog  modal-lg">
            <div class="modal-content">

                <!-- Modal Header -->
                <div class="modal-header">
                    <h4 class="modal-title"> Phone Call</h4>
                    <button type="button" class="close" data-dismiss="modal">&times;</button>
                </div>

                <!-- Modal body -->
                <div class="modal-body">
                    <div class="row">
                        <div class="col-md-12  ">
                            <div class="card">
                                <div class="card-body">

                                    <form class="forms-sample">
                                        <div class="form-group row">

                                            <div class="col-sm-4">
                                                <div class="form-check">
                                                    <label class="form-check-label">
                                                        <input type="radio" class="form-check-input" name="calls"
                                                            id="calls" value="" checked="">
                                                        Outgoing Call
                                                        <i class="input-helper"></i></label>
                                                </div>
                                            </div>
                                            <div class="col-sm-5">
                                                <div class="form-check">
                                                    <label class="form-check-label">
                                                        <input type="radio" class="form-check-input" name="calls"
                                                            id="calls" value="option2">
                                                        Incoming Call
                                                        <i class="input-helper"></i></label>
                                                </div>
                                            </div>
                                        </div>

                                        <div class="form-group">
                                            <label for="numberid">Number</label>
                                            <input type="text" class="form-control" id="numberid"
                                                placeholder="Number">
                                        </div>

                                        <div class="form-group">
                                            <label for="exampleInputPassword1">Templete</label>
                                            <select class="form-control" id="exampleInputPassword1">
                                                <option selected>Select Templete</option>
                                            </select>
                                        </div>

                                        <div class="form-group">
                                            <label for="Content">Content</label>
                                            <textarea type="text" class="form-control" placeholder="Content" id="Content"></textarea>
                                        </div>

                                        <div class="form-group row">
                                            <div class="col-sm-4">
                                                <div class="form-check">
                                                    <label class="form-check-label">
                                                        <input type="radio" class="form-check-input"
                                                            name="membershipRadios" id="membershipRadios1" value=""
                                                            checked="">
                                                        Contact
                                                        <i class="input-helper"></i></label>
                                                </div>
                                            </div>

                                            <div class="col-sm-4">
                                                <div class="form-check">
                                                    <label class="form-check-label">
                                                        <input type="radio" class="form-check-input"
                                                            name="membershipRadios" id="membershipRadios2"
                                                            value="option2">
                                                        Contact Related Party
                                                        <i class="input-helper"></i></label>
                                                </div>
                                            </div>

                                            <div class="col-sm-4">
                                                <div class="form-check">
                                                    <label class="form-check-label">
                                                        <input type="radio" class="form-check-input"
                                                            name="membershipRadios" id="membershipRadios2"
                                                            value="option2">
                                                        Left Message
                                                        <i class="input-helper"></i></label>
                                                </div>
                                            </div>

                                        </div>

                                        <div class="form-group row">

                                            <div class="col-sm-4">
                                                <div class="form-check">
                                                    <label class="form-check-label">
                                                        <input type="radio" class="form-check-input" name="callparty"
                                                            id="callparty" value="" checked="">
                                                        Wrong Party
                                                        <i class="input-helper"></i></label>
                                                </div>
                                            </div>
                                            <div class="col-sm-4">
                                                <div class="form-check">
                                                    <label class="form-check-label">
                                                        <input type="radio" class="form-check-input" name="callparty"
                                                            id="callparty2" value="option2">
                                                        No Contact
                                                        <i class="input-helper"></i></label>
                                                </div>
                                            </div>
                                            <div class="col-sm-4">
                                                <div class="form-check">
                                                    <label class="form-check-label">
                                                        <input type="radio" class="form-check-input" name="callparty"
                                                            id="callparty2" value="option2">
                                                        Invalid Number
                                                        <i class="input-helper"></i></label>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="form-group row">
                                            <div style="text-align: center" class="col-sm-12 ">Previous Contact Phone Call
                                            </div>
                                            <br>
                                            <div class="col-sm-12">
                                                Number Contacts:
                                                <br>
                                            </div>
                                        </div>

                                        <button type="submit" class="btn btn-primary mr-2">Save</button>
                                        <button class="btn btn-light">Cancel</button>
                                    </form>
                                </div>
                            </div>
                        </div>

                    </div>
                </div>

                <!-- Modal footer -->
                <div class="modal-footer">
                    <button type="button" class="btn btn-danger" data-dismiss="modal">Close</button>
                </div>

            </div>
        </div>
    </div>

    {{-- SMS Display --}}

    <div class="modal" id="smsmodal">
        <div class="modal-dialog">
            <div class="modal-content">

                <!-- Modal Header -->
                <div class="modal-header">
                    <h4 class="modal-title">Send SMS</h4>
                    <button type="button" class="close" data-dismiss="modal">&times;</button>
                </div>

                <!-- Modal body -->
                <div class="modal-body">
                    <div class="card">
                        <div class="card-body">

                            <form class="forms-sample">
                                <div class="form-group">
                                    <label for="CustomerNumber">Number</label>
                                    <input type="text" class="form-control" id="CustomerNumber"
                                        placeholder="Customer Number">
                                </div>
                                <div class="form-check">
                                    <label class="form-check-label">
                                        <input type="checkbox" class="form-check-input">
                                        Cell Number:302023009
                                        <i class="input-helper"></i></label>
                                </div>
                                <div class="form-check">
                                    <label class="form-check-label">
                                        <input type="checkbox" class="form-check-input">
                                        Cell Number
                                        <i class="input-helper"></i></label>
                                </div>
                                <div class="form-group">
                                    <label for="templete">Templete</label>
                                    <select class="form-control" id="templete">
                                        <option>Select Templete</option>

                                    </select>
                                </div>
                                <div class="form-check">
                                    <label class="form-check-label">
                                        <input type="checkbox" class="form-check-input">
                                        Incoming
                                        <i class="input-helper"></i></label>
                                </div>
                                <div class="form-group">
                                    <label for="Message">Message</label>
                                    <textarea class="form-control" id="Message" placeholder="message"></textarea>
                                </div>

                                <button type="submit" class="btn btn-primary mr-2">Send</button>
                                <button class="btn btn-light">Cancel</button>
                            </form>
                        </div>
                    </div>
                </div>

                <!-- Modal footer -->
                <div class="modal-footer">
                    <button type="button" class="btn btn-danger" data-dismiss="modal">Close</button>
                </div>

            </div>
        </div>
    </div>


    {{-- Yebopay Display --}}

    <div class="modal" id="yebopaymodal">
        <div class="modal-dialog">
            <div class="modal-content">

                <!-- Modal Header -->
                <div class="modal-header">
                    <h4 class="modal-title">Yebo pay</h4>
                    <button type="button" class="close" data-dismiss="modal">&times;</button>
                </div>

                <!-- Modal body -->
                <div class="modal-body">
                    <div class="card">
                        <div class="card-body">

                            <form class="forms-sample" id="yebo_pay_form">
                                <div class="form-group">
                                    <button type="button" class="btn btn-primary mr-2" >Pay Now</button>
                                    <button type="button" class="btn btn-primary mr-2" id="send_payment_link" >Send Payment Link</button>
                                </div>

                                <div class="form-group row payment-link-options" style="display: none">
                                    <div class="col-sm-4">
                                        <div class="form-check">
                                            <label class="form-check-label">
                                                <input type="radio" class="form-check-input payment_link_options" name="payment_link_options" value="email" required>
                                                Email
                                                <i class="input-helper"></i></label>
                                        </div>
                                    </div>
                                    <div class="col-sm-5">
                                        <div class="form-check">
                                            <label class="form-check-label">
                                                <input type="radio" class="form-check-input payment_link_options" name="payment_link_options" value="sms" required>
                                                SMS
                                                <i class="input-helper"></i></label>
                                        </div>
                                    </div>
                                </div>

                                <div class="form-group" id="payment_customer_email" style="display: none" >
                                    <label for="CustomerEmail">Email Address</label>
                                    <input type="email" class="form-control" id="customer_email" name="customer_email"
                                        placeholder="Customer Email" pattern="\b[A-Za-z0-9._%+-]+@[A-Za-z0-9.-]+\.[A-Za-z]{2,4}\b">
                                </div>
                                <div class="form-group" id="payment_customer_mobile_number" style="display: none">
                                    <label for="CustomerSMS">Mobile Number</label>
                                    <input type="text" class="form-control" id="customer_mobile_number" name="customer_mobile_number"
                                        placeholder="Customer Mobile Number">
                                </div>
                                
                                <button class="btn btn-primary mr-2" id="yebo_pay_form_submit">Send</button>
                                <button type="button" class="btn btn-light"  id="yebo_pay_form_cancel">Cancel</button>

                                <div class="form-group">
                                    <b><span class="text-success" id="success-message"> </span><b>
                                </div>

                                <div class="alert" role="alert" id="yebo_pay_form_alert_dive" style="display:none;"></div>
                            </form>
                        </div>
                    </div>
                </div>

                <!-- Modal footer -->
                <div class="modal-footer">
                    <button type="button" class="btn btn-danger" data-dismiss="modal">Close</button>
                </div>

            </div>
        </div>
    </div>


    {{-- refusals Display --}}
    <div class="modal" id="refusalmodal">
        <div class="modal-dialog">
            <div class="modal-content">

                <!-- Modal Header -->
                <div class="modal-header">
                    <h4 class="modal-title">Refusals</h4>
                    <button type="button" class="close" data-dismiss="modal">&times;</button>
                </div>

                <!-- Modal body -->
                <div class="modal-body">
                    <div class="card">
                        <div class="card-body">

                            <form class="forms-sample">

                                <div class="form-group">
                                    <label for="Comment">Comment</label>
                                    <textarea class="form-control" rows="6" id="Comment" placeholder="Comment"></textarea>
                                </div>

                                <button type="submit" class="btn btn-primary mr-2">Comment</button>

                            </form>
                        </div>
                    </div>
                </div>

                <!-- Modal footer -->
                <div class="modal-footer">
                    <button type="button" class="btn btn-danger" data-dismiss="modal">Close</button>
                </div>

            </div>
        </div>
    </div>

    {{-- Account comment --}}
    <div class="modal" id="accountcmtmodal">
        <div class="modal-dialog modal-lg">
            <div class="modal-content">

                <!-- Modal Header -->
                <div class="modal-header">
                    <h4 class="modal-title">Account Comment</h4>
                    <button type="button" class="close" data-dismiss="modal">&times;</button>
                </div>

                <!-- Modal body -->
                <div class="modal-body">
                    <div class="card">
                        <div class="card-body">

                            <div class="card shadow-sm border border-secondary">
                                <div class="card-body">
                                    <h4 class="card-title">Comments</h4>
                                    <div class="row">
                                        <div class="col-12 table-responsive">
                                            <table id="order-listing" class="table table-hover table-sm table-striped">
                                                <thead>
                                                    <tr>
                                                        <th>ID #</th>
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

                <!-- Modal footer -->
                <div class="modal-footer">
                    <button type="button" id="nextform" class="btn btn-info btn-fw">Comment</button>

                    <button type="button" class="btn btn-danger" data-dismiss="modal">Close</button>
                </div>

            </div>
        </div>
    </div>

    {{-- add comment --}}
    <div class="modal" id="addcomment">
        <div class="modal-dialog modal-lg">
            <div class="modal-content">

                <!-- Modal Header -->
                <div class="modal-header">
                    <h4 class="modal-title">Add Comment</h4>
                    <button type="button" class="close" data-dismiss="modal">&times;</button>
                </div>

                <!-- Modal body -->
                <div class="modal-body">
                    <div class="card">
                        <div class="card-body">

                            <form class="forms-sample">
                                <div class="form-check">
                                    <label class="form-check-label">
                                        <input type="checkbox" class="form-check-input">
                                        Set as main Comment
                                        <i class="input-helper"></i></label>
                                </div>
                                <div class="form-group">
                                    <label for="Comment">Comment</label>
                                    <textarea class="form-control" rows="6" id="Comment" placeholder="Comment"></textarea>
                                </div>

                                <button type="submit" class="btn btn-primary mr-2">Comment</button>

                            </form>
                        </div>
                    </div>
                </div>

                <!-- Modal footer -->
                <div class="modal-footer">
                    <button type="button" class="btn btn-danger" data-dismiss="modal">Close</button>
                </div>

            </div>
        </div>
    </div>

    {{-- Remanin set --}}
    <div class="modal" id="remainmodal">
        <div class="modal-dialog">
            <div class="modal-content">

                <!-- Modal Header -->
                <div class="modal-header">
                    <h4 class="modal-title">Remainder</h4>
                    <button type="button" class="close" data-dismiss="modal">&times;</button>
                </div>

                <!-- Modal body -->
                <div class="modal-body">
                    <div class="card">
                        <div class="card-body">

                            <form class="forms-sample">
                                <h4 class="card-title">Reminder Date</h4>
                                <p class="card-description">Select Date </p>
                                <div id="datepicker-popup" class="input-group date datepicker">
                                    <input type="text" class="form-control">
                                    <span class="input-group-addon input-group-append border-left">
                                        <span class="icon-calendar input-group-text"></span>
                                    </span>
                                </div>
                                <br>
                                <h4 class="card-title">Reminder Time</h4>
                                <p class="card-description">Select Time</p>
                                <div class="input-group date" id="timepicker-example" data-target-input="nearest">
                                    <div class="input-group" data-target="#timepicker-example"
                                        data-toggle="datetimepicker">
                                        <input type="text" class="form-control datetimepicker-input"
                                            data-target="#timepicker-example">
                                        <div class="input-group-addon input-group-append"><i
                                                class="icon-clock input-group-text"></i></div>
                                    </div>
                                </div>
                                <br>
                                <div class="form-group">
                                    <label for="messagereminder">Message</label>
                                    <textarea class="form-control" rows="6" id="messagereminder" placeholder="Message"></textarea>
                                </div>

                                <button type="submit" class="btn btn-primary mr-2">Submit</button>

                            </form>
                        </div>
                    </div>
                </div>

                <!-- Modal footer -->
                <div class="modal-footer">
                    <button type="button" class="btn btn-danger" data-dismiss="modal">Close</button>
                </div>

            </div>
        </div>
    </div>

    {{-- {PTP} --}}
    <div class="modal" id="ptpmodal">
        <div class="modal-dialog modal-lg">
            <div class="modal-content">

                <!-- Modal Header -->
                <div class="modal-header">
                    <h4 class="modal-title">Promise to pay</h4>
                    <button type="button" class="close" data-dismiss="modal">&times;</button>
                </div>
                <form action="{{ route('debit.order.store', ['debtor_id' => $debtors->id]) }}" method="post">
                    @csrf
                    <input type="hidden" name="account_no" value="{{$debtors->id_number}}">
                    <!-- Modal body -->
                    <div class="modal-body">
                        <div class="card">
                            <div class="card-body">
                                <div class="row">
                                    <div class="col-md-6 grid-margin stretch-card">
                                        <div class="card">
                                            <div class="card-body">
                                                <h4 class="card-title">Existing Promise To Pay </h4>


                                                <div class="form-group">
                                                    <label for="Amount">Amount</label>
                                                    <input type="text" name="amount" required class="form-control"
                                                        id="Amount" placeholder="Amount">
                                                </div>
                                                <div class="form-group">
                                                    <label for="period">Period</label>
                                                    <select required name="period" class="form-control" required
                                                        id="period">
                                                        <option>Select Period</option>
                                                        <option value="once_off">Once off</option>
                                                        <option value="once_on">Once on</option>
                                                    </select>
                                                </div>
                                                <div class="form-group">
                                                    <label for="duedate">Due Date</label>
                                                    <input type="date" name="due_date" class="form-control"
                                                        id="duedate" required placeholder="Due Date">
                                                </div>
                                                <div class="form-group">
                                                    <label for="comment">PTP Comments</label>
                                                    <textarea required name="ptp_comments" class="form-control" id="comment" placeholder="Comment"></textarea>
                                                </div>
                                                <div class="form-group">
                                                    <label for="comment">This PTP result from</label>
                                                    <select name="ptp_result" required class="form-control"
                                                        id="comment">
                                                        <option value="outgoing">Phone Call (Outgoing) </option>
                                                        <option value="incoming">Phone Call (Incoming) </option>
                                                        <option value="sms">SMS</option>
                                                    </select>
                                                </div>
                                                <div class="form-group">
                                                    <label for="comment">Cash PTP Garce Period:</label>
                                                    <div class="form-control">
                                                        3 days (2022-11-03)
                                                    </div>
                                                </div>

                                            </div>
                                        </div>
                                    </div>

                                    <div class="col-md-6 grid-margin stretch-card">
                                        <div class="card">
                                            <div class="card-body">
                                                <h4 class="card-title">Debit Order</h4>


                                                <div class="form-check">
                                                    <label class="form-check-label">
                                                        <input type="checkbox" name="incoming" class="form-check-input">
                                                        Incoming
                                                        <i class="input-helper"></i></label>
                                                </div>
                                                <div class="form-group">
                                                    <label for="accholder">Account Holder</label>
                                                    <input required name="account_holder" type="text"
                                                        class="form-control" id="accholder" placeholder="Account Holder">
                                                </div>
                                                <div class="form-group">
                                                    <label for="bankname">Bank Name</label>
                                                    <input required name="bank_name" type="text" class="form-control"
                                                        id="bankname" placeholder="Bank Name">
                                                </div>
                                                <div class="form-group">
                                                    <label for="branchname">Branch Name</label>
                                                    <input name="branch_name" type="text" class="form-control"
                                                        id="branchname" placeholder="Branch Name">
                                                </div>
                                                <div class="form-group">
                                                    <label for="branchnum">Branch Number</label>
                                                    <input name="branch_number" type="text" class="form-control"
                                                        id="branchnum" placeholder="Branch Number">
                                                </div>
                                                <div class="form-group">
                                                    <label for="accnum">Account Number</label>
                                                    <input required name="account_number" type="text"
                                                        class="form-control" id="accnum" placeholder="Account Number">
                                                </div>
                                                <div class="form-group">
                                                    <label for="acctype">Account Type</label>
                                                    <select required name="account_type" class="form-control"
                                                        id="acctype">
                                                        <option value="saving">Saving</option>
                                                        <option value="business">Business</option>
                                                        <option value="fixed_deposit">Fixed deposit</option>
                                                    </select>
                                                </div>

                                                <div class="form-group">
                                                    <label for="acctype">Debit order type</label>
                                                </div>
                                                <div class="form-check">
                                                    <label class="form-check-label">
                                                        <input type="radio" class="form-check-input"
                                                            name="debit_order_type" id="debitordertype" value="normal"
                                                            checked>
                                                        Normal
                                                        <i class="input-helper"></i></label>
                                                </div>
                                                <div class="form-check">
                                                    <label class="form-check-label">
                                                        <input type="radio" class="form-check-input"
                                                            name="debit_order_type" id="debitordertype"
                                                            value="debit_check">
                                                        Debit Check
                                                        <i class="input-helper"></i></label>
                                                </div>
                                                <div class="form-group">
                                                    <label for="methodnum">Method of Contact </label>
                                                    <select name="method_of_contact" required class="form-control"
                                                        id="methodnum">
                                                        <option value="outgoing">Phone Call ( Outgoing )</option>
                                                        <option value="incoming">Phone Call ( Incoming )</option>
                                                    </select>
                                                </div>
                                                <div class="form-group">
                                                    <label for="dedInst">Deduction Instruction</label>
                                                    <textarea required name="deduction_instruction" class="form-control" id="debInst"
                                                        placeholder="Deduction Instructions"></textarea>
                                                </div>
                                                <div class="form-check">
                                                    <label class="form-check-label">
                                                        <input name="foreign_account" type="checkbox"
                                                            class="form-check-input">
                                                        Foreign Account
                                                        <i class="input-helper"></i></label>
                                                </div>
                                                <div class="form-group">
                                                    <label for="acctype">Acount:</label>
                                                    <div class="form-control">{{ $debtors->amount }}

                                                    </div>
                                                </div>
                                                <div class="form-group">
                                                    <label for="acctype">Frequency:</label>
                                                    <div class="form-control">Once Off

                                                    </div>
                                                </div>
                                                <div class="form-group">
                                                    <label for="acctype">First Deduction Date:</label>
                                                    <div class="form-control">21/10/31 (sunday)

                                                    </div>
                                                </div>
                                                <div class="form-group">
                                                    <label for="acctype">D/O Grace Period:</label>
                                                    <div class="form-control">3 Days (2021-11-03)

                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- Modal footer -->
                    <div class="modal-footer">
                        <button type="submit" class="btn btn-primary mr-2">Submit</button>
                        <button type="button" class="btn btn-danger" data-dismiss="modal">Close</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
@endsection

@section('script')
    <script>
        $(function() {
            $('[data-toggle="tooltip"]').tooltip()
        });

        $('#nextform').click(function() {
            $('#accountcmtmodal').modal('hide');
            $('#addcomment').modal('show');
        });

        $(document).ready( function () {
            $('#table1').DataTable();
            $('#table2').DataTable();
        });

        //Yebopay Payment Send Link Options
        $(document).ready( function () {
            $('#yebo_pay_form_cancel').click(function() {
                $('#yebopaymodal').modal('toggle');
            });
                
            $('#yebo_pay_form_submit').prop('disabled', true);

            $('#send_payment_link').click(function() {
                
                if ($('.payment-link-options').is(':hidden')) {
                    $('.payment-link-options').show();
                } else {
                    $('.payment-link-options').hide();
                }
            });

            $('.payment_link_options').click(function() {
                $('#yebo_pay_form_submit').prop('disabled', false);
                if( $('input[type=radio][name=payment_link_options]:checked').attr('value') == "email" ) {
                    $("#customer_email").prop('required',true);
                    $("#customer_mobile_number").prop('required',false);

                    $('#payment_customer_mobile_number').hide();
                    $('#payment_customer_email').show();
                } else {
                    $("#customer_email").prop('required',false);
                    $("#customer_mobile_number").prop('required',true);

                    $('#payment_customer_mobile_number').show();
                    $('#payment_customer_email').hide();
                }
            });

            // Send mail
            $.ajaxSetup({
                headers: {
                    'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                }
            });

            $('#yebo_pay_form').on('submit', function(event) {
                event.preventDefault();
                $('#yebo_pay_form_submit').prop('disabled', true);

                if( $('input[type=radio][name=payment_link_options]:checked').attr('value') == "email" ) {
                    payment_customer_email = $('#customer_email').val();
                    payment_customer_mobile_number = '';
                } else {
                    payment_customer_email = '';
                    payment_customer_mobile_number = $('#customer_mobile_number').val();
                }

                $('#success-message').text('');

                $.ajax({
                  url: "yebo-pay-form",
                  type: "POST",
                  data:{
                      payment_link_options:$('input[type=radio][name=payment_link_options]:checked').attr('value'),
                      payment_customer_email:payment_customer_email,
                      payment_customer_mobile_number:payment_customer_mobile_number,
                  },
                  success:function(response){
                    //console.log(response);
                    if (response) {
                        $('.payment-link-options').hide();
                        $('#payment_customer_email').hide();
                        $('#payment_customer_mobile_number').hide();

                        $("#yebo_pay_form_alert_dive").show();
                        $("#yebo_pay_form_alert_dive").removeClass("alert-danger");
                        $("#yebo_pay_form_alert_dive").addClass("alert-success");
                        $('#yebo_pay_form_alert_dive').text(response.success);
                        $("#yebo_pay_form")[0].reset();
                    }
                  },
                  error: function(response) {
                    $("#yebo_pay_form_alert_dive").show();
                    $("#yebo_pay_form_alert_dive").removeClass("alert-success");
                    $("#yebo_pay_form_alert_dive").addClass("alert-danger");
                    //$('#yebo_pay_form_alert_dive').text(response.responseJSON.errors.payment_customer_email);
                    $('#yebo_pay_form_alert_dive').text(response.responseJSON.message);
                    $('#yebo_pay_form_submit').prop('disabled', false);
                  }
                 });

                setTimeout(function() {
                    $('#yebo_pay_form_alert_dive').fadeOut('fast');
                }, 10000);

                });

            });
    </script>
    <script src="{{ url('js/data-table.js') }}"></script>
    <script src="{{ url('js/formpickers.js') }}"></script>
    @if (session('status'))

    <script>
        swal({
            title: 'Form Submit',
            text: '{{session('status')}}',
            timer: 2000,
            button: false
        }).then(
            function() {},
                // handling the promise rejection
                function(dismiss) {
                    if (dismiss === 'timer') {
                        console.log('I was closed by the timer')
                    }
                }
            )
    </script>
    @endif
@endsection