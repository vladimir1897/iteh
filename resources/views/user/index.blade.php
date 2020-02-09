@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row col-md-offset-2">
            <div class="col-md-8 ">
                <div class="panel panel-default">
                    <div class="panel-heading">  <h4 >{{$user->name}}</h4></div>
                    <div class="panel-body">
                        <div class="box box-info">

                            <div class="box-body">
                                <div class="col-sm-6">
                                    <div  align="center"> <img alt="User Pic" src='https://x1.xingassets.com/assets/frontend_minified/img/users/nobody_m.original.jpg' id="profile-image1" class="img-circle img-responsive">
                                    </div>
                                    <br>
                                </div>
                                <div class="col-sm-6">
                                    <h4 style="color:#00b1b1;">{{$user->name}} </h4></span>
                                </div>
                                <div class="clearfix"></div>
                                <hr style="margin:5px 0 5px 0;">

                                <div class="col-sm-5 col-xs-6 tital " >Email</div><div class="col-sm-7 col-xs-6 ">{{$user->email}}</div>
                                <div class="clearfix"></div>
                                <div class="bot-border"></div>

                                <div class="col-sm-5 col-xs-6 tital " >Registrovan:</div><div class="col-sm-7"> {{$user->created_at}}</div>
                                <div class="clearfix"></div>
                                <div class="bot-border"></div>
                                <!-- /.box-body -->
                            </div>
                            <!-- /.box -->

                        </div>


                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
