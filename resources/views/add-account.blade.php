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
    @include("components.header")
    <div class="row p-4">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header">
                    <h5 class="card-title">Add Account</h5>
                    <form action="">
                        <div class="row">
                            <div class="col-md-6">
                                <div class="p-1 text-white" style="background-color:#0b2042;">Personal Detail</div>
                                <div class="row mt-3">
                                    <div class="col-md-6">
                                        <label class="col-form-label">Client Name:</label>
                                        <input type="text" class="form-control" placeholder="Client Name" id="toDate">
                                    </div>
                                    <div class="col-md-6">
                                        <label class="col-form-label">User Password:</label>
                                        <input type="text" class="form-control" placeholder="Transaction Password" id="toDate">
                                    </div>
                                    <div class="col-md-6">
                                        <label class="col-form-label">Retype Password:</label>
                                        <input type="text" class="form-control" placeholder="Retype Password" id="toDate">
                                    </div>
                                    <div class="col-md-6">
                                        <label class="col-form-label">Full Name:</label>
                                        <input type="text" class="form-control" placeholder="Full Name" id="toDate">
                                    </div>
                                    <div class="col-md-6">
                                        <label class="col-form-label">City:</label>
                                        <input type="text" class="form-control" placeholder="City" id="toDate">
                                    </div>
                                    <div class="col-md-6">
                                        <label class="col-form-label">Phone:</label>
                                        <input type="text" class="form-control" placeholder="Phone" id="toDate">
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="p-1 text-white" style="background-color:#0b2042;">Account Detail</div>
                                <div class="row mt-3">
                                    <div class="col-md-6">
                                        <label class="col-form-label">Account Type:</label>
                                        <select class="form-control">
                                            <option>-Select Your A/c. Type-</option>
                                        </select>
                                    </div>
                                    <div class="col-md-6">
                                        <label class="col-form-label">Credit Reference:</label>
                                        <input type="text" class="form-control" placeholder="Credit Reference" id="toDate">
                                    </div>
                                    <div class="col-md-6">
                                        <label class="col-form-label">Exposer Limit:</label>
                                        <input type="text" class="form-control" placeholder="Exposer Limit" id="toDate">
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-12 mt-4">
                                <div class="p-1 text-white" style="background-color:#0b2042;">Commission Settings</div>
                                <table class="table table-striped table-bordered mt-3">
                                    <thead>
                                        <tr>
                                            <th></th>
                                            <th>Cricket</th>
                                            <th>Football</th>
                                            <th>Tennis</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr>
                                            <td>Upline</td>
                                            <td>0</td>
                                            <td>0</td>
                                            <td>0</td>
                                        </tr>
                                        <tr>
                                            <td class="align-middle">Downline</td>
                                            <td><input type="number" class="form-control" value="0" id="commissionDownline1"></td>
                                            <td><input type="number" class="form-control" value="0" id="commissionDownline2"></td>
                                            <td><input type="number" class="form-control" value="0" id="commissionDownline3"></td>
                                        </tr>
                                        <tr>
                                            <td>Our</td>
                                            <td>0</td>
                                            <td>0</td>
                                            <td>0</td>
                                        </tr>
                                    </tbody>
                                </table>
                            </div>
                            <div class="col-md-12 mt-4">
                                <div class="p-1 text-white" style="background-color:#0b2042;">Partnership</div>
                                <table class="table table-striped table-bordered mt-3">
                                    <thead>
                                        <tr>
                                            <th></th>
                                            <th>Cricket</th>
                                            <th>Football</th>
                                            <th>Tennis</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr>
                                            <td>Upline</td>
                                            <td>0</td>
                                            <td>0</td>
                                            <td>0</td>
                                        </tr>
                                        <tr>
                                            <td class="align-middle">Downline</td>
                                            <td><input type="number" class="form-control" value="0" id="partnershipDownline1"></td>
                                            <td><input type="number" class="form-control" value="0" id="partnershipDownline2"></td>
                                            <td><input type="number" class="form-control" value="0" id="partnershipDownline3"></td>
                                        </tr>
                                        <tr>
                                            <td>Our</td>
                                            <td>0</td>
                                            <td>0</td>
                                            <td>0</td>
                                        </tr>
                                    </tbody>
                                </table>
                            </div>
                            <div class="col-md-12 mt-4">
                                <div class="p-1 text-white" style="background-color:#0b2042;">Min Max Bet</div>
                                <table class="table table-striped table-bordered mt-3">
                                    <thead>
                                        <tr>
                                            <th></th>
                                            <th>Cricket</th>
                                            <th>Football</th>
                                            <th>Tennis</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr>
                                            <td class="align-middle" rowspan="2">Min Bet</td>
                                            <td>100</td>
                                            <td>100</td>
                                            <td>100</td>
                                        </tr>
                                        <tr>
                                            <td><input type="number" class="form-control" value="100" id="minBet1"></td>
                                            <td><input type="number" class="form-control" value="100" id="minBet2"></td>
                                            <td><input type="number" class="form-control" value="100" id="minBet3"></td>
                                        </tr>
                                        <tr>
                                            <td class="align-middle" rowspan="2">Max Bet</td>
                                            <td>5000000</td>
                                            <td>2500000</td>
                                            <td>1000000</td>
                                        </tr>
                                        <tr>
                                            <td><input type="number" class="form-control" value="5000000" id="maxBet1"></td>
                                            <td><input type="number" class="form-control" value="2500000" id="maxBet2"></td>
                                            <td><input type="number" class="form-control" value="1000000" id="maxBet3"></td>
                                        </tr>
                                        <tr>
                                            <td class="align-middle" rowspan="2">Delay</td>
                                            <td>5.00</td>
                                            <td>5.00</td>
                                            <td>5.00</td>
                                        </tr>
                                        <tr>
                                            <td><input type="number" class="form-control" value="5.00" id="delay1"></td>
                                            <td><input type="number" class="form-control" value="5.00" id="delay2"></td>
                                            <td><input type="number" class="form-control" value="5.00" id="delay3"></td>
                                        </tr>
                                    </tbody>
                                </table>
                            </div>
                            <div class="col-md-4"></div>
                            <div class="col-md-4"></div>
                            <div class="col-md-4">
                                <label class="col-form-label">Transaction Password:</label>
                                <input type="text" class="form-control" placeholder="Transaction Password" id="toDate">
                            </div>
                            <div class="col-md-10"></div>
                            <div class="col-md-2 text-right mt-3">
                                <button class="btn btn-primary">Create Account</button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
@endsection
@section('page_scripts')
@endsection