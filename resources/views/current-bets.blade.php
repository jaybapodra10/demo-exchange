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
    <link href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.5.2/css/bootstrap.css" rel="stylesheet">
    <link href="https://cdn.datatables.net/1.13.2/css/dataTables.bootstrap4.min.css" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/gh/gitbrent/bootstrap4-toggle@3.6.1/js/bootstrap4-toggle.min.js"></script>
    <link href="css/style.css" rel="stylesheet">
@endsection
@section('content')
    @include("components.header")
    <div class="row p-4">
        <div class="col-md-12 d-flex">
            <h3 class="">Current Bets</h3>
        </div>
        <div class="col-md-2">
            <label class="col-form-label">Choose Type</label>
            <select class="form-control">
                <option class="form-control">Matched</option>
            </select>
        </div>
        <div class="col-md-2 align-self-end">
            <button class="btn btn-primary">Load</button>
        </div>
        <div class="col-md-12 mt-3">
            <table id="betsTable" class="table table-striped table-bordered mt-3">
                <thead>
                    <tr>
                        <th>Event Type</th>
                        <th>Event Name</th>
                        <th>Username</th>
                        <th>Runner Name</th>
                        <th>Bet Type</th>
                        <th>User Rate</th>
                        <th>Amount</th>
                        <th>Place Date</th>
                        <th>Match Date</th>
                    </tr>
                </thead>
                <tbody>
                    <!-- <tr>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                    </tr> -->
                </tbody>
              </table>
        </div>
    </div>
@endsection
@section('page_scripts')
<script src="https://code.jquery.com/jquery-3.5.1.js"></script>
<script src="https://cdn.datatables.net/1.13.2/js/jquery.dataTables.min.js"></script>
<script src="https://cdn.datatables.net/1.13.2/js/dataTables.bootstrap4.min.js"></script>
<script>
    $(document).ready(function () {
        $('#betsTable').DataTable();
    });
</script>
@endsection