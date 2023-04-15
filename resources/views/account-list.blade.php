@extends('components.main')
@section('title')
    DIAMONDEXCH9
@endsection
@section('page_css')
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.1.3/dist/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.14.3/dist/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.1.3/dist/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link href="https://cdn.jsdelivr.net/gh/gitbrent/bootstrap4-toggle@3.6.1/css/bootstrap4-toggle.min.css" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/gh/gitbrent/bootstrap4-toggle@3.6.1/js/bootstrap4-toggle.min.js"></script>
    <link href="css/style.css" rel="stylesheet">
@endsection
@section('content')
<div class="modal fade" id="depositModal" tabindex="-1" role="dialog" aria-labelledby="depositModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
        <div class="modal-header">
            <h5 class="modal-title" id="depositModalLabel">Deposit</h5>
            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
            </button>
        </div>
        <div class="modal-body">
            <form>
                <div class="form-group">
                    <div class="row">
                        <div class="col-md-4">
                            <label class="col-form-label">AKTRYM</label>
                        </div>
                        <div class="col-md-4">
                            <input type="text" class="form-control text-right" value="10000.00" readonly id="depositAKTRYM1">
                        </div>
                        <div class="col-md-4">
                            <input type="text" class="form-control" readonly id="depositAKTRYM2">
                        </div>
                        <div class="col-md-4 mt-4">
                            <label class="col-form-label">luloo</label>
                        </div>
                        <div class="col-md-4 mt-4">
                            <input type="text" class="form-control text-right" readonly value="0.00" id="depositluloo1">
                        </div>
                        <div class="col-md-4 mt-4">
                            <input type="text" class="form-control" readonly id="depositluloo2">
                        </div>
                        <div class="col-md-4 mt-4">
                            <label class="col-form-label">Amount</label>
                        </div>
                        <div class="col-md-8 mt-4">
                            <input type="text" class="form-control" id="depositAmount">
                        </div>
                        <div class="col-md-4 mt-4">
                            <label class="col-form-label">Remark</label>
                        </div>
                        <div class="col-md-8 mt-4">
                            <textarea class="form-control" id="depositRemark"></textarea>
                        </div>
                        <div class="col-md-4 mt-4">
                            <label class="col-form-label">Transaction Password</label>
                        </div>
                        <div class="col-md-8 mt-4">
                            <input type="text" class="form-control" id="depositPassword">
                        </div>
                    </div>
                </div>
            </form>
        </div>
        <div class="modal-footer">
            <button type="button" class="btn btn-secondary" data-dismiss="modal"><i class="fa fa-undo"></i> Back</button>
            <button type="button" class="btn btn-primary">Submit <i class="fa fa-sign-out"></i></button>
        </div>
        </div>
    </div>
</div>

<div class="modal fade" id="withdrawModal" tabindex="-1" role="dialog" aria-labelledby="withdrawModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
        <div class="modal-header">
            <h5 class="modal-title" id="withdrawModalLabel">Withdraw</h5>
            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
            </button>
        </div>
        <div class="modal-body">
            <form>
                <div class="form-group">
                    <div class="row">
                        <div class="col-md-4">
                            <label class="col-form-label">AKTRYM</label>
                        </div>
                        <div class="col-md-4">
                            <input type="text" class="form-control text-right" value="10000.00" readonly id="withdrawAKTRYM1">
                        </div>
                        <div class="col-md-4">
                            <input type="text" class="form-control" readonly id="withdrawAKTRYM2">
                        </div>
                        <div class="col-md-4 mt-4">
                            <label class="col-form-label">luloo</label>
                        </div>
                        <div class="col-md-4 mt-4">
                            <input type="text" class="form-control text-right" value="0.00" readonly id="withdrawluloo1">
                        </div>
                        <div class="col-md-4 mt-4">
                            <input type="text" class="form-control" readonly id="withdrawluloo2">
                        </div>
                        <div class="col-md-4 mt-4">
                            <label class="col-form-label">Amount</label>
                        </div>
                        <div class="col-md-8 mt-4">
                            <input type="text" class="form-control" id="withdrawAmount">
                        </div>
                        <div class="col-md-4 mt-4">
                            <label class="col-form-label">Remark</label>
                        </div>
                        <div class="col-md-8 mt-4">
                            <textarea class="form-control" id="withdrawRemark"></textarea>
                        </div>
                        <div class="col-md-4 mt-4">
                            <label class="col-form-label">Transaction Password</label>
                        </div>
                        <div class="col-md-8 mt-4">
                            <input type="text" class="form-control" id="withdrawPassword">
                        </div>
                    </div>
                </div>
            </form>
        </div>
        <div class="modal-footer">
            <button type="button" class="btn btn-secondary" data-dismiss="modal"><i class="fa fa-undo"></i> Back</button>
            <button type="button" class="btn btn-primary">Submit <i class="fa fa-sign-out"></i></button>
        </div>
        </div>
    </div>
</div>

<div class="modal fade" id="limitModal" tabindex="-1" role="dialog" aria-labelledby="withdrawModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
        <div class="modal-header">
            <h5 class="modal-title" id="withdrawModalLabel">Exposure Limit</h5>
            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
            </button>
        </div>
        <div class="modal-body">
            <form>
                <div class="form-group">
                    <div class="row">
                        <div class="col-md-4 mt-4">
                            <label class="col-form-label">Old Limit</label>
                        </div>
                        <div class="col-md-8 mt-4">
                            <input type="text" class="form-control text-right" readonly value="0.00" id="oldLimit">
                        </div>
                        <div class="col-md-4 mt-4">
                            <label class="col-form-label">New Limit</label>
                        </div>
                        <div class="col-md-8 mt-4">
                        <input type="text" class="form-control" id="newLimit">
                        </div>
                        <div class="col-md-4 mt-4">
                            <label class="col-form-label">Transaction Password</label>
                        </div>
                        <div class="col-md-8 mt-4">
                            <input type="text" class="form-control" id="limitPassword">
                        </div>
                    </div>
                </div>
            </form>
        </div>
        <div class="modal-footer">
            <button type="button" class="btn btn-secondary" data-dismiss="modal"><i class="fa fa-undo"></i> Back</button>
            <button type="button" class="btn btn-primary">Submit <i class="fa fa-sign-out"></i></button>
        </div>
        </div>
    </div>
</div>

<div class="modal fade" id="creditModal" tabindex="-1" role="dialog" aria-labelledby="creditModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
        <div class="modal-header">
            <h5 class="modal-title" id="creditModalLabel">Credit</h5>
            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
            </button>
        </div>
        <div class="modal-body">
            <form>
                <div class="form-group">
                    <div class="row">
                        <div class="col-md-4 mt-4">
                            <label class="col-form-label">Old Credit</label>
                        </div>
                        <div class="col-md-8 mt-4">
                            <input type="text" class="form-control text-right" readonly value="0.00" id="oldcredit">
                        </div>
                        <div class="col-md-4 mt-4">
                            <label class="col-form-label">New Credit</label>
                        </div>
                        <div class="col-md-8 mt-4">
                        <input type="text" class="form-control" id="newcredit">
                        </div>
                        <div class="col-md-4 mt-4">
                            <label class="col-form-label">Transaction Password</label>
                        </div>
                        <div class="col-md-8 mt-4">
                            <input type="text" class="form-control" id="creditPassword">
                        </div>
                    </div>
                </div>
            </form>
        </div>
        <div class="modal-footer">
            <button type="button" class="btn btn-secondary" data-dismiss="modal"><i class="fa fa-undo"></i> Back</button>
            <button type="button" class="btn btn-primary">Submit <i class="fa fa-sign-out"></i></button>
        </div>
        </div>
    </div>
</div>

<div class="modal fade" id="statusModal" tabindex="-1" role="dialog" aria-labelledby="statusModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
        <div class="modal-header">
            <h5 class="modal-title" id="statusModalLabel">Change Status</h5>
            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
            </button>
        </div>
        <div class="modal-body">
            <form>
                <div class="form-group">
                    <div class="row">
                        <div class="col-md-12 mt-4 d-flex">
                            <label class="col-form-label text-warning">luloo</label>
                            <label class="col-form-label text-success w-100 text-right">Active</label>
                        </div>
                        <div class="col-md-6 mt-4 text-center">
                            <label class="col-form-label w-100">User Active</label>
                            <input type="checkbox" checked data-toggle="toggle">
                        </div>
                        <div class="col-md-6 mt-4 text-center">
                            <label class="col-form-label w-100">Bet Active</label>
                            <input type="checkbox" checked data-toggle="toggle">
                        </div>
                        <div class="col-md-4 mt-4">
                            <label class="col-form-label">Transaction Password</label>
                        </div>
                        <div class="col-md-8 mt-4">
                            <input type="text" class="form-control" id="creditPassword">
                        </div>
                    </div>
                </div>
            </form>
        </div>
        <div class="modal-footer">
            <button type="button" class="btn btn-secondary" data-dismiss="modal"><i class="fa fa-undo"></i> Back</button>
            <button type="button" class="btn btn-primary">Submit <i class="fa fa-sign-out"></i></button>
        </div>
        </div>
    </div>
</div>
@include('components.header')
<div class="row p-4">
    <div class="col-md-12 d-flex">
        <h3 class="p2">Account List</h3>
        <button class="ml-auto p2 btn btn-blue">Add Account</button>
    </div>
    <div class="col-md-12 mt-3">
        <button class="btn btn-danger"><i class="fa fa-file-pdf-o"></i> PDF</button>
        <button class="btn btn-success"><i class="fa fa-file-excel-o"></i> Excel</button>
        <table class="table table-striped table-bordered mt-3">
            <thead>
                <tr>
                    <th>User Name</th>
                    <th>Credit Reference</th>
                    <th>U St</th>
                    <th>B St</th>
                    <th>Ecposore Limit</th>
                    <th>Default %</th>
                    <th>Account Type</th>
                    <th>Casino Total</th>
                    <th>Actions</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <td></td>
                    <td class="text-right">300000</td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                </tr>
                <tr>
                    <td><button class="btn btn-dark">LULOO</button></td>
                    <td class="text-right">300000</td>
                    <td><button class="btn btn-dark"><i class="fa fa-check"></i></button></td>
                    <td><button class="btn btn-dark"><i class="fa fa-check"></i></button></td>
                    <td class="text-right">0</td>
                    <td>0</td>
                    <td>Master</td>
                    <td class="text-right">0.00</td>
                    <td>
                        <button class="btn btn-dark" data-toggle="modal" data-target="#depositModal">D</button>
                        <button class="btn btn-dark" data-toggle="modal" data-target="#withdrawModal">W</button>
                        <button class="btn btn-dark" data-toggle="modal" data-target="#limitModal">L</button>
                        <button class="btn btn-dark" data-toggle="modal" data-target="#creditModal">C</button>
                        <button class="btn btn-dark" data-toggle="modal" data-target="#depositModal">P</button>
                        <button class="btn btn-dark" data-toggle="modal" data-target="#statusModal">S</button>
                        <button class="btn btn-dark" data-toggle="modal" data-target="#depositModal">MORE</button>
                    </td>
                </tr>
            </tbody>
          </table>
    </div>
</div>
@endsection
@section('page_scripts')
@endsection
