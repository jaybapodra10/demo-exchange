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
                    <div class="w-100 text-right mb-3">
                        <button class="btn text-white mr-4" style="background-color: #0b2042;">Bet Lock</button>
                        <button class="btn text-white mr-4" style="background-color: #0b2042;">Fancy Lock</button>
                        <button class="btn text-white mr-4" style="background-color: #0b2042;">User Book</button>
                        <button class="btn text-white" style="background-color: #0b2042;">Bookmarkers Book</button>
                    </div>
                    <div class="row">
                        <div class="col-md-8 mt-4">
                            <div class="p-2 text-white" style="background-color:#0b2042;">International Twenty20 Matches -> India v New Zealand -> MATCH_ODDS -> 1/29/2023 7:00:00 PM</div>
                            <table class="table table-striped table-bordered mt-3">
                                <thead>
                                    <tr>
                                        <th width="45%">Runners</th>
                                        <th></th>
                                        <th></th>
                                        <th class="text-center" style="background-color: #73C2FB;">Back</th>
                                        <th class="text-center" style="background-color: #FF9999;">lay</th>
                                        <th></th>
                                        <th></th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <td width="45%">India<br>0</td>
                                        <td class="text-center" style="background-color: #C0E6F0;">
                                            <h6 class="font-weight-bold mb-0">1.52</h6><span style="font-size: 12px;">5095.57</span>
                                        </td>
                                        <td class="text-center" style="background-color: #89CFF0;">
                                            <h6 class="font-weight-bold mb-0">1.53</h6><span style="font-size: 12px;">5727.9</span>
                                        </td>
                                        <td class="text-center" style="background-color: #73C2FB;">
                                            <h6 class="font-weight-bold mb-0">1.54</h6><span style="font-size: 12px;">54.73</span>
                                        </td>
                                        <td class="text-center" style="background-color: #FF9999;">
                                            <h6 class="font-weight-bold mb-0">1.55</h6><span style="font-size: 12px;">3824.92</span>
                                        </td>
                                        <td class="text-center" style="background-color: #FFC1CC;">
                                            <h6 class="font-weight-bold mb-0">1.56</h6><span style="font-size: 12px;">2268.15</span>
                                        </td>
                                        <td class="text-center" style="background-color: #FFD1DD;">
                                            <h6 class="font-weight-bold mb-0">1.57</h6><span style="font-size: 12px;">2268.15</span>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td width="45%">New Zealand<br>0</td>
                                        <td class="text-center" style="background-color: #C0E6F0;">
                                            <h6 class="font-weight-bold mb-0">2.78</h6><span style="font-size: 12px;">1272.77</span>
                                        </td>
                                        <td class="text-center" style="background-color: #89CFF0;">
                                            <h6 class="font-weight-bold mb-0">2.8</h6><span style="font-size: 12px;">1318.8</span>
                                        </td>
                                        <td class="text-center" style="background-color: #73C2FB;">
                                            <h6 class="font-weight-bold mb-0">2.82</h6><span style="font-size: 12px;">792.9</span>
                                        </td>
                                        <td class="text-center" style="background-color: #FF9999;">
                                            <h6 class="font-weight-bold mb-0">2.86</h6><span style="font-size: 12px;">29.47</span>
                                        </td>
                                        <td class="text-center" style="background-color: #FFC1CC;">
                                            <h6 class="font-weight-bold mb-0">2.9</h6><span style="font-size: 12px;">3021.96</span>
                                        </td>
                                        <td class="text-center" style="background-color: #FFD1DD;">
                                            <h6 class="font-weight-bold mb-0">2.94</h6><span style="font-size: 12px;">2634.44</span>
                                        </td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                        <div class="col-md-4 mt-4">
                            <div class="p-2 text-white bg-secondary">Live Match</div>
                            <div class="p-2 mt-3 text-white bg-secondary">Scorecard</div>
                            <div class="p-2 mt-3 text-white bg-secondary d-flex">
                                <button class="p-2 btn btn-primary">Matched</button>
                                <button class="p-2 btn btn-secondary">Unmatched</button>
                                <button class="ml-auto p-2 btn text-white" style="background-color: #0b2042;">Unmatched</button></div>
                                <div style="overflow-x:auto;">
                                    <table>
                                        <tr>
                                            <th class="p-3" style="width:40%;">Runners</th>
                                            <th class="p-3">Rate</th>
                                            <th class="p-3">Amount</th>
                                            <th class="p-3">Place Date</th>
                                            <th class="p-3">Match</th>
                                        </tr>
                                    </table>
                                </div>
                        </div>
                        <div class="col-md-8">
                            <div class="p-2 text-white bg-secondary">Bookmakers Market 0% commission fast bet confirm</div>
                            <table class="table table-striped table-bordered mt-3">
                                <thead>
                                    <tr>
                                        <th class="text-info" width="60%">Min: 100 Max: 100000</th>
                                        <th></th>
                                        <th></th>
                                        <th class="text-center" style="background-color: #73C2FB;">Back</th>
                                        <th class="text-center" style="background-color: #FF9999;">lay</th>
                                        <th></th>
                                        <th></th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <td width="45%">India<br>0</td>
                                        <td class="text-center" style="background-color: #C0E6F0;">
                                        </td>
                                        <td class="text-center" style="background-color: #89CFF0;">
                                        </td>
                                        <td class="text-center" style="background-color: #73C2FB;">
                                            <h6 class="font-weight-bold mb-0">50</h6><span style="font-size: 12px;">100k</span>
                                        </td>
                                        <td class="text-center" style="background-color: #FF9999;">
                                            <h6 class="font-weight-bold mb-0">54</h6><span style="font-size: 12px;">100k</span>
                                        </td>
                                        <td class="text-center" style="background-color: #FFC1CC;">
                                        </td>
                                        <td class="text-center" style="background-color: #FFD1DD;">
                                        </td>
                                    </tr>
                                    <tr>
                                        <td width="45%">New Zealand<br>0</td>
                                        <td width="7%" class="text-center" style="background-color: #C0E6F0;">
                                        </td>
                                        <td width="7%" class="text-center" style="background-color: #89CFF0;">
                                        </td>
                                        <td width="7%" class="text-center" style="background-color: #73C2FB;">
                                        </td>
                                        <td width="7%" class="text-center" style="background-color: #FF9999;">
                                        </td>
                                        <td width="7%" class="text-center" style="background-color: #FFC1CC;">
                                        </td>
                                        <td width="7%" class="text-center" style="background-color: #FFD1DD;">
                                        </td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                        <div class="col-md-4"></div>
                        <div class="col-md-4">
                            <div class="p-2 text-white bg-secondary">Fancy Market</div>
                            <table class="table table-striped table-bordered mt-3">
                                <thead>
                                    <tr>
                                        <th class="text-info" width="50%"></th>
                                        <th class="text-center" style="background-color: #FF9999;">No</th>
                                        <th class="text-center" style="background-color: #73C2FB;">Yes</th>
                                        <th class="text-info" width="20%"></th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <td width="45%"><p style="font-size:12px;" class="text-primary">6 over runs IND(IND vs NZ)adv<br>0</p></td>
                                        <td class="text-center" style="background-color: #FF9999;">
                                            <h6 class="font-weight-bold mb-0">49</h6><span style="font-size: 12px;">100</span>
                                        </td>
                                        <td class="text-center" style="background-color: #73C2FB;">
                                            <h6 class="font-weight-bold mb-0">51</h6><span style="font-size: 12px;">100</span>
                                        </td>
                                        <td class="text-right"><p style="font-size:12px;" class="text-info">Min: 100<br>Max: 50000</p></td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                        <div class="col-md-4">
                            <div class="p-2 text-white bg-secondary">Ball By Ball Session Market</div>
                            <table class="table table-striped table-bordered mt-3">
                                <thead>
                                    <tr>
                                        <th class="text-info" width="50%"></th>
                                        <th class="text-center" style="background-color: #FF9999;">No</th>
                                        <th class="text-center" style="background-color: #73C2FB;">Yes</th>
                                        <th class="text-info" width="20%"></th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <td width="45%"><p style="font-size:12px;" class="text-primary">1st wicket pship Boundaries IND(IND vs NZ)adv<br>0</p></td>
                                        <td class="text-center" style="background-color: #FF9999;">
                                            <h6 class="font-weight-bold mb-0">3</h6><span style="font-size: 12px;">100</span>
                                        </td>
                                        <td class="text-center" style="background-color: #73C2FB;">
                                            <h6 class="font-weight-bold mb-0">4</h6><span style="font-size: 12px;">100</span>
                                        </td>
                                        <td class="text-right"><p style="font-size:12px;" class="text-info">Min: 100<br>Max: 10000</p></td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
@section('page_scripts')
@endsection