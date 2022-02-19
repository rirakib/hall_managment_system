@extends('master')
@section('admin_title','Pending report')
@section('admin_content')



<div class="">
    <div class="page-title">
        <div class="title_left">
            <div class="wrap-breadcrumb">
                <ul>
                    <li class="item-link"><a href="{{route('dashboard.index')}}" class="link">Dashboard</a></li>
                    <li class="item-link"><a href="{{route('report.pending')}}" class="link">Pending</a>
                    </li>
                </ul>
            </div>
        </div>

        <div class="title_right">
            <div class="col-md-5 col-sm-5 col-xs-12 form-group pull-right top_search">
                <div class="input-group">
                    <input type="text" class="form-control" placeholder="Search for...">
                    <span class="input-group-btn">
                        <button class="btn btn-default" type="button">Go!</button>
                    </span>
                </div>
            </div>
        </div>


    </div>

    <div class="clearfix"></div>
    <div class="col-md-12 col-sm-12 col-xs-12">
        <div class="x_panel">
            <div class="x_title">
                @if(session('delete'))
                <h2 style="color:red">{{session('delete')}}</h2>
                @else

                <h2>Pending List</h2>
                @endif
                <ul class="nav navbar-right panel_toolbox">
                </ul>
                <div class="clearfix"></div>
            </div>

            <div class="x_content">


                <div class="table-responsive">
                    <table class="table table-striped jambo_table bulk_action">
                        <thead>
                            <tr class="headings">
                                <th class="column-title">Student Name</th>
                                <th class="column-title">Mobile Number</th>
                                <th class="column-title">Price</th>
                                <th class="column-title">Payment </th>
                                <th class="column-title">Due </th>
                                
                                </th>
                            </tr>
                        </thead>

                        <tbody>
                            @if(count($pending) == 0)
                            <tr class="odd pointer">
                                <td colspan="4" style="text-align:center">There have no data</td>
                            </tr>
                            @else

                            @foreach($pending as $data)
                            <tr class="even pointer">
                                <td class=" ">{{$data->name}}</td>
                                <td class=" ">{{$data->mobile_number}}</td>
                                <td class=" ">{{$data->price}}</td>
                                <td class=" ">{{$data->deposite}}</td>
                                {{-- <td class=" ">{{$data->price - $data->deposite_ammount}}</td>
                                <td class=" ">{{$data->price  == $data->deposite_ammount ? 'Paid' : 'Pending'}}</td>
                                <td class=" ">{{date('d-m-Y', strtotime($data->deposite_date))}}</td> --}}

                            </tr>
                            @endforeach

                            @endif
                        </tbody>
                    </table>
                </div>

                {!! $pending->links() !!}
            </div>
        </div>
    </div>



</div>
<style>
    thead {
        background-color: black !important;
        color: whitesmoke;
        height: 40px;
    }

    tr:nth-child(even) {
        background-color: #3f5467;
        color: #fff;
    }
</style>
@endsection