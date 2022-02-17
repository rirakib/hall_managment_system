@extends('master')
@section('admin_title','Student')
@section('admin_content')


    <div class="">
        <div class="page-title">
            <div class="title_left">
                <div class="wrap-breadcrumb">
                    <ul>
                        <li class="item-link"><a href="{{route('dashboard.index')}}" class="link">Dashboard</a></li>
                        <li class="item-link"><a href="{{route('student.index')}}" class="link">Student</a>
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
                        <h2>Student List</h2>
                    @endif
                    <ul class="nav navbar-right panel_toolbox">
                        <li><a class="collapse-link"><i class="fa fa-chevron-up"></i></a>
                        </li>
                        <li class="dropdown">
                            <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button"
                                aria-expanded="false"><i class="fa fa-wrench"></i></a>
                            <ul class="dropdown-menu" role="menu">
                                <li><a href="#">Settings 1</a>
                                </li>
                                <li><a href="#">Settings 2</a>
                                </li>
                            </ul>
                        </li>
                        <li><a class="close-link"><i class="fa fa-close"></i></a>
                        </li>
                    </ul>
                    <div class="clearfix"></div>
                </div>

                <div class="x_content">


                    <div class="table-responsive">
                        <table class="table table-striped jambo_table bulk_action">
                            <thead>
                                <tr class="headings">
                                    <th class="column-title">Id </th>
                                    <th class="column-title">Image </th>
                                    <th class="column-title">Name </th>
                                    <th class="column-title">Father Name </th>
                                    <th class="column-title">Mobile Number</th>
                                    <th class="column-title">Department</th>
                                    <th class="column-title">Address</th>
                                    <th class="column-title">Edit </th>
                                    <th class="column-title no-link last"><span class="nobr">Delete</span>
                                    </th>
                                </tr>
                            </thead>

                            <tbody>
                                @if(count($student) == 0)
                                    <tr class="odd pointer">
                                        <td colspan="4" style="text-align:center">There have no data</td>
                                    </tr>
                                @else

                                @foreach($student as $data)
                                <tr class="even pointer">
                                    <td class=" ">{{$data->student_id}}</td>
                                    <td class=" "><img src="{{asset('images/student/image/'.$data->image)}}"
                                        style="height: 70px; width:70px; object-fit:cover; object-position:center; border-radius:50%"
                                        alt=""></td>
                                    <td class=" ">{{$data->name}}</td>
                                    <td class=" ">{{$data->father_name}}</td>
                                    <td class=" ">{{$data->mobile_number}}</td>
                                    <td class=" ">{{$data->department->name}}</td>
                                    <td class=" ">{{$data->address}}</td>
                                    <td class="a-right a-right"><a href="{{route('student.edit',$data->id)}}" class="btn btn-success">Edit</a></td>
                                    <td class=" last">
                                        <form action="{{route('student.destroy',$data->id)}}" method="POST">
                                            @csrf 
                                            @method('Delete')
                                            <button type="submit" class="btn btn-danger">Delete</button>
                                        </form>
                                    </td>
                                </tr>
                                @endforeach

                                @endif
                            </tbody>
                        </table>
                    </div>
                    {!! $student->links() !!}

                </div>
            </div>
        </div>



    </div>
    
@endsection