@extends('common.base')

@section('browser_subtitle', 'NewsFeed Posts')

@section('body')

    <div class="page-header">
        <div class="page-header-content">
            <div class="page-title"><h4>Posts Management</h4></div>

            <div class="heading-elements">
                <!-- <div class="heading-btn-group">
                    <a href="{{url('dogs/item')}}" class="btn btn-link btn-float has-text"><i class="icon-plus-circle2 text-primary"></i><span>Add New</span></a>
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


                <div class="row mb-20">
                    <form action="">
                      <div class="col-md-2">
                        <select name="filters[user_id]" class="form-control select2">
                            {!! selectBoxOptionsBuilder([''=>'Customer']+\App\Customer::pluck('username','id')->toArray(), request('filters.user_id')) !!}
                        </select>
                    </div>
                        <!-- <div class="col-md-2">
                            <input type="text" class="form-control" name="filters[name]" placeholder="Dog Name" value="{{request('filters.name')}}">
                        </div> -->

                        <div class="col-md-2">
                            <button class="btn btn-info btn-sm">
                                <i class="icon-filter3 position-left"></i> Filter
                            </button>
                        </div>
                    </form>
                </div>

                <div class="panel panel-flat">
                    <div class="table-responsive">
                        <table class="table table-hover table-striped">
                            <thead>
                            <tr>
                                <th style="width:6%">Customer</th>
                                <th style="width:30%">Post</th>
                                <th style="width:10%">Caption</th>
                                <th style="width:15%">Date</th>
                                <th></th>
                            </tr>
                            </thead>
                            <tbody>
                            @forelse($items as $item)
                            <?php
                            $user=\App\Customer::where('id',$item->user_id)->first();
                            // $images=\App\Images::where('user_id','=',$item->user_id)->get();
                            ?>
                                <tr>
                                    <td class="v-align-middle semi-bold">{{$user->username}}</td>
                                    <td class="v-align-middle semi-bold">
                                      @if($item->thumb != null)
                                      <a href="{{url('uploads/'.$item->video)}}">
                                      <img src="{{url('uploads/'.$item->video)}}" style="width:100%">
                                      </a>
                                      @elseif($item->thumb == null)
                                        <video style="width:100%" controls>
                                          <source src="{{url('uploads/'.$item->video)}}" type="video/mp4">
                                        </video>
                                      @endif
                                    </td>
                                    <td class="v-align-middle semi-bold">{{$item->caption}}</td>
                                    <td class="v-align-middle semi-bold">{{$item->created_at}}</td>
                                    <td class="v-align-middle text-right text-nowrap">
                                        <!-- <a href="{{url('dogs/item/'.$item->id)}}" class="btn btn-primary btn-xs"><i class="icon-pencil5"></i></a> -->
                                        <a href="{{url('posts/item/'.$item->id)}}" class="btn btn-danger btn-xs deleter"><i class="icon-trash"></i></a>
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
                {!!$items->render()!!}
            </div>
        </div>

    </div>

@stop
