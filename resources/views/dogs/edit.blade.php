@extends('common.base')

@section('browser_subtitle', 'Dogs')

@section('body')

    <div class="page-header">
        <div class="page-header-content">
            <div class="page-title"><h4>Dogs Management: {{$item->id ? $item->name : 'Add New'}}</h4>
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
                          <label class="control-label col-lg-2">Customer</label>
                          <div class="col-lg-10">
                              <select name="user_id" class="form-control select2" required="required">
                                  {!! selectBoxOptionsBuilder([''=>'Please Select']+\App\Customer::pluck('username','id')->toArray(), old('user_id', $item->user_id)) !!}
                              </select>
                          </div>
                      </div>

                        <div class="form-group">
                            <label class="control-label col-lg-2">Name<span class="text-danger">*</span></label>
                            <div class="col-lg-10">
                                <input type="text" class="form-control" required="required" name="name" value="{{$item->name ?: old('name')}}">
                            </div>
                        </div>

                        <div class="form-group">
                            <label class="control-label col-lg-2">Breed<span class="text-danger">*</span></label>
                            <div class="col-lg-10">
                                <input type="text" class="form-control" required="required" name="breed" value="{{$item->breed ?: old('breed')}}">
                            </div>
                        </div>

                        <div class="form-group">
                            <label class="control-label col-lg-2">Age<span class="text-danger">*</span></label>
                            <div class="col-lg-10">
                                <input type="text" class="form-control" required="required" name="age" value="{{$item->age ?: old('age')}}">
                            </div>
                        </div>
                        <div class="form-group">
                            <label class="control-label col-lg-2">Gender<span class="text-danger">*</span></label>
                            <div class="col-lg-10">
                                <input type="text" class="form-control" required="required" name="sex" value="{{$item->sex ?: old('sex')}}">
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
