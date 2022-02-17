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
                    <li class="item-link"><a href="#" class="link">Create</a>
                    </li>
                </ul>
            </div>
        </div>


    </div>
    <div class="clearfix"></div>
    <div class="row">
        <div class="col-md-12 col-sm-12 col-xs-12">
            <div class="x_panel">
                <div class="x_title">
                    @if(session('stutus'))
                    <h2 style="color:green">{{session('stutus')}}</h2>
                    @else
                    <h2>Create Student</h2>
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
                    <br />
                    <form id="demo-form2" action="{{route('student.store')}}" method="post"
                        data-parsley-validate class="form-horizontal form-label-left" enctype="multipart/form-data">
                        @csrf 
                        <div class="row">
                            <div class="form-group col-md-11 mx-auto">
                                <label class="control-label col-md-3 col-sm-3 col-xs-12">Class</label>
                                <div class="col-md-7 col-sm-9 col-xs-12">
                                    <select class="form-control" id="department_code" name="department_code">
                                        <option>Choose Department</option>
                                        @foreach(DB::table('departments')->orderBy('name','asc')->get() as $data)
                                        <option value="{{$data->department_code}}">{{$data->name}}</option>
                                        @endforeach
                                    </select>
                                </div>
                            </div>

                            <div class="form-group col-md-11 mx-auto">
                                <label class="control-label col-md-3 col-sm-3 col-xs-12" for="student_id">Student Id <span
                                        >*</span>
                                </label>
                                <div class="col-md-6 col-sm-6 col-xs-12">
                                    <input type="text" id="student_id" name="student_id" 
                                        class="form-control col-md-7 col-xs-12 @error('student_id') is-invalid @enderror"
                                        placeholder="Must be unique">
                                    @error('student_id')
                                    <div class="alert alert-danger">{{ $message }}</div>
                                    @enderror
                                </div>
                            </div>

                           <div class="form-group col-md-11 mx-auto">
                                <label class="control-label col-md-3 col-sm-3 col-xs-12" for="name">Name <span
                                        >*</span>
                                </label>
                                <div class="col-md-6 col-sm-6 col-xs-12">
                                    <input type="text" id="name" name="name" 
                                        class="form-control col-md-7 col-xs-12 @error('name') is-invalid @enderror"
                                        placeholder="Name">
                                    @error('name')
                                    <div class="alert alert-danger">{{ $message }}</div>
                                    @enderror
                                </div>
                            </div>
                            <div class="form-group col-md-11 mx-auto">
                                <label class="control-label col-md-3 col-sm-3 col-xs-12" for="father_name">Father Name <span
                                        >*</span>
                                </label>
                                <div class="col-md-6 col-sm-6 col-xs-12">
                                    <input type="text" id="father_name" name="father_name" 
                                        class="form-control col-md-7 col-xs-12 @error('father_name') is-invalid @enderror"
                                        placeholder="Father Name">
                                    @error('father_name')
                                    <div class="alert alert-danger">{{ $message }}</div>
                                    @enderror
                                </div>
                            </div>

                            <div class="form-group col-md-11 mx-auto">
                                <label class="control-label col-md-3 col-sm-3 col-xs-12" for="mobile_number">Mobile Number <span
                                        >*</span>
                                </label>
                                <div class="col-md-6 col-sm-6 col-xs-12">
                                    <input type="number" id="mobile_number" name="mobile_number" 
                                        class="form-control col-md-7 col-xs-12 @error('mobile_number') is-invalid @enderror"
                                        placeholder="01X XXX XXX XX">
                                    @error('mobile_number')
                                    <div class="alert alert-danger">{{ $message }}</div>
                                    @enderror
                                </div>
                            </div>

                            <div class="form-group col-md-11 mx-auto">
                                <label class="control-label col-md-3 col-sm-3 col-xs-12" for="address">Address <span
                                        >*</span>
                                </label>
                                <div class="col-md-6 col-sm-6 col-xs-12">
                                    <input type="text" id="address" name="address" 
                                        class="form-control col-md-7 col-xs-12 @error('address') is-invalid @enderror"
                                        placeholder="write here address">
                                    @error('address')
                                    <div class="alert alert-danger">{{ $message }}</div>
                                    @enderror
                                </div>
                            </div>

                            <div class="form-group col-md-11 mx-auto">
                                <label for="image" class="control-label col-md-3 col-sm-3 col-xs-12">Image
                                  
                                </label>
                                <div class="col-md-6 col-sm-6 col-xs-12">
                                    <input id="image" class="form-control col-md-7 col-xs-12" type="file"
                                        name="image" required="required">
                                </div>
                            </div>

                        </div>
                       
                        
                        <div class="ln_solid"></div>
                        <div class="form-group">
                            <div class="col-md-6 col-sm-6 col-xs-12 col-md-offset-3">
                                <button class="btn btn-primary" id="input" data-role="tagsinput" type="reset">Reset</button>
                                <button  class="btn btn-success">Submit</button>
                            </div>
                        </div>

                    </form>
                </div>
            </div>
        </div>
    </div>


</div>


@endsection