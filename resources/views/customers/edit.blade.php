@extends('common.base')

@section('browser_subtitle', 'Customers')

@section('body')

    <div class="page-header">
        <div class="page-header-content">
            <div class="page-title"><h4>Customers Management: {{$item->id ? $item->username : 'Add New'}}</h4>
            </div>
        </div>
    </div>

    <div class="content">

        @if(session('validationErrors'))
            <div class="alert alert-danger" role="alert">
                <button class="close" data-dismiss="alert"></button>
                {{session('validationErrors')}}
            </div>
        @endif

        <div class="panel panel-flat">
            <div class="panel-body">
                <form role="form" method="post" autocomplete="off" class="form-horizontal form-validate-jquery">
                    {{csrf_field()}}

                    <fieldset class="content-group">


                        <div class="form-group">
                            <label class="control-label col-lg-2">Name<span class="text-danger">*</span></label>
                            <div class="col-lg-10">
                                <input type="text" class="form-control" required="required" name="username" value="{{$item->username ?: old('username')}}">
                            </div>
                        </div>

                        <div class="form-group">
                            <label class="control-label col-lg-2">Email<span class="text-danger">*</span></label>
                            <div class="col-lg-10">
                                <input type="text" class="form-control" required="required" name="email" value="{{$item->email ?: old('email')}}">
                            </div>
                        </div>

                        <div class="form-group">
                            <label class="control-label col-lg-2">First Name<span class="text-danger">*</span></label>
                            <div class="col-lg-10">
                                <input type="text" class="form-control" required="required" name="first_name" value="{{$item->first_name ?: old('first_name')}}">
                            </div>
                        </div>
                        <div class="form-group">
                            <label class="control-label col-lg-2">Last Name<span class="text-danger">*</span></label>
                            <div class="col-lg-10">
                                <input type="text" class="form-control" required="required" name="last_name" value="{{$item->last_name ?: old('last_name')}}">
                            </div>
                        </div>
                        <div class="form-group">
                            <label class="control-label col-lg-2">Country<span class="text-danger">*</span></label>
                            <div class="col-lg-10">
                                <input type="text" class="form-control" required="required" name="country" value="{{$item->country ?: old('country')}}">
                            </div>
                        </div>
                        <div class="form-group">
                            <label class="control-label col-lg-2">Gender<span class="text-danger">*</span></label>
                            <div class="col-lg-10">
                                <input type="text" class="form-control" required="required" name="gender" value="{{$item->gender ?: old('gender')}}">
                            </div>
                        </div>
                        <div class="form-group">
                            <label class="control-label col-lg-2">DOB<span class="text-danger">*</span></label>
                            <div class="col-lg-10">
                                <input type="text" class="form-control" required="required" name="date_of_birth" value="{{$item->date_of_birth ?: old('date_of_birth')}}">
                            </div>
                        </div>
                        <div class="form-group">
                            <label class="control-label col-lg-2">Profession<span class="text-danger">*</span></label>
                            <div class="col-lg-10">
                                <input type="text" class="form-control" required="required" name="profession" value="{{$item->profession ?: old('profession')}}">
                            </div>
                        </div>
                        <div class="form-group">
                            <label class="control-label col-lg-2">Relationship Status<span class="text-danger">*</span></label>
                            <div class="col-lg-10">
                                <input type="text" class="form-control" required="required" name="relationship_status" value="{{$item->relationship_status ?: old('relationship_status')}}">
                            </div>
                        </div>

                    </fieldset>


                    <div class="text-right">
                        <button type="submit" class="btn btn-primary">Submit<i class="icon-arrow-right14 position-right"></i>
                        </button>
                    </div>
                </form>
            </div>
        </div>


    </div>
@stop
