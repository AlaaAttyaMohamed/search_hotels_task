@extends('common.base')

@section('browser_subtitle', 'Customers')

@section('body')

    <div class="page-header">
        <div class="page-header-content">
            <div class="page-title"><h4>Customers Management</h4></div>

            <div class="heading-elements">
                <!-- <div class="heading-btn-group">
                    <a href="{{url('customers/item')}}" class="btn btn-link btn-float has-text"><i class="icon-plus-circle2 text-primary"></i><span>Add New</span></a>
                </div> -->
            </div>
        </div>
    </div>

    <div class="content">

        <div class="row">
            <div class="col-md-12">

                @if(session('success'))
                    <div class="alert alert-success" role="alert">
                        <button type="button" class="close" data-dismiss="alert"><span>×</span><span class="sr-only">Close</span></button>
                        Saving operation completed successfully.
                    </div>
                @endif


                <div class="row mb-15">
                    <form action="">
                        <div class="col-md-1">
                            <input type="text" class="form-control" name="filters[first_name]" placeholder="First Name" value="{{request('filters.first_name')}}">
                        </div>
                        <div class="col-md-1">
                            <input type="text" class="form-control" name="filters[last_name]" placeholder="Last Name" value="{{request('filters.last_name')}}">
                        </div>
                        <div class="col-md-2">
                            <input type="text" class="form-control" name="filters[email]" placeholder="Email" value="{{request('filters.email')}}">
                        </div>
                        <div class="col-md-1">
                          <select name="filters[country]" class="form-control select2">
                              {!! selectBoxOptionsBuilder([''=>'Country']+\App\Customer::pluck('country','country')->toArray(), request('filters.country')) !!}
                          </select>
                        </div>
                        <div class="col-md-1">
                          <select name="filters[gender]" class="form-control select2">
                              {!! selectBoxOptionsBuilder([''=>'Gender']+['male'=>'male','female'=>'female'], request('filters.gender')) !!}
                          </select>
                          </div>
                          <div class="col-md-1">
                            <select name="filters[profession]" class="form-control select2">
                                {!! selectBoxOptionsBuilder([''=>'Profession']+\App\Customer::pluck('profession','profession')->toArray(), request('filters.profession')) !!}
                            </select>
                          </div>
                          <div class="col-md-1">
                            <select name="filters[relationship_status]" class="form-control select2">
                                {!! selectBoxOptionsBuilder([''=>'Relationship Status']+\App\Customer::pluck('relationship_status','relationship_status')->toArray(), request('filters.relationship_status')) !!}
                            </select>
                          </div>

                        <div class="col-md-1">
                            <button class="btn btn-info btn-sm">
                                <i class="icon-filter3 position-left"></i> Filter
                            </button>
                        </div>
                        <div>
                            <a href="{{URL('reports/excelindex?first_name='.request('filters.first_name').'&last_name='.request('filters.last_name').'&email='.request('filters.email').'&country='.request('filters.country').'&gender='.request('filters.gender').'&relationship_status='.request('filters.relationship_status').'&profession='.request('filters.profession'))}}" class="btn btn-success">Export to csv</a>
                        </div>
                    </form>

                </div>

                <div class="panel panel-flat">
                    <div class="table-responsive">
                        <table class="table table-hover table-striped">
                            <thead>
                            <tr>
                                <!-- <th style="width:4%">Username</th> -->
                                <th style="width:4%">First Name</th>
                                <th style="width:4%">Last Name</th>
                                <th style="width:5%">Email</th>
                                <th style="width:4%">Country</th>
                                <th style="width:2%">Gender</th>
                                <th style="width:8%">DOB</th>
                                <th style="width:5%">Profession</th>
                                <!-- <th style="width:5%">Longitude</th>
                                <th style="width:5%">Latitude</th> -->
                                <th style="width:5%">Relationship Status</th>
                                <th></th>
                            </tr>
                            </thead>
                            <tbody>
                            @forelse($items as $item)
                                <tr>
                                    <!-- <td class="v-align-middle semi-bold">{{$item->username}}</td> -->
                                    <td class="v-align-middle semi-bold">{{$item->first_name}}</td>
                                    <td class="v-align-middle semi-bold">{{$item->last_name}}</td>
                                    <td class="v-align-middle semi-bold">{{$item->email}}</td>
                                    <td class="v-align-middle semi-bold">{{$item->country}}</td>
                                    <td class="v-align-middle semi-bold">{{$item->gender}}</td>
                                    <td class="v-align-middle semi-bold">{{$item->date_of_birth}}</td>
                                    <td class="v-align-middle semi-bold">{{$item->profession}}</td>
                                    <!-- <td class="v-align-middle semi-bold">{{$item->lng}}</td>
                                    <td class="v-align-middle semi-bold">{{$item->lat}}</td> -->
                                    <td class="v-align-middle semi-bold">{{$item->relationship_status}}</td>
                                    <td class="v-align-middle text-right text-nowrap">
                                      <a href="{{url('customers/showDog/'.$item->id)}}" class="btn btn-warning btn-xs"><i class="icon-eye"></i> Show Dog</a>
                                        <a href="{{url('customers/item/'.$item->id)}}" class="btn btn-primary btn-xs"><i class="icon-pencil5"></i></a>
                                        <a href="{{url('customers/item/'.$item->id)}}" class="btn btn-danger btn-xs deleter"><i class="icon-trash"></i></a>
                                    </td>
                                </tr>
                            @empty
                                <tr>
                                    <td colspan="41" class="text-center">No records were found.</td>
                                </tr>
                            @endforelse
                            </tbody>
                        </table>
                    </div>
                </div>

            </div>
        </div>

    </div>

@stop
