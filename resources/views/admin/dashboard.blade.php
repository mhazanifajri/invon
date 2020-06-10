@extends('admin.layouts.default')
@section('content')
<!-- breadcrumbs -->
<ul class="breadcrumbs">
    <li><a href="#"><span class="entypo-home"></span></a></li>
    <li>Dashboard</li>
</ul>
<!-- end of breadcrumbs -->
<!-- Container Begin -->
<div class="row">
    <div class="large-12 columns">
        <div class="box bg-white">
            <div class="row" style="margin-top:-20px">
                <div class="large-8 columns">
                    <div class="box bg-transparent ">
                        <!-- /.box-header -->
                        <div class="box-header no-pad bg-transparent">

                            <h3 style="margin-bottom:20px;" class="box-title">
                                <span>ACTIVE STUDENTS</span>
                            </h3>


                        </div>
                        <div class="box-body no-pad">

                            <div id="line-chart" style="height: 235px;"></div>

                        </div>
                        <!-- /.box-body -->
                    </div>
                    <!-- /.box -->
                </div>

                <div class="large-4 columns">
                    <div class="box bg-transparent ">
                        <!-- /.box-header -->
                        <div class="box-header no-pad bg-transparent">

                            <h3 style="margin:0 20px 0 -5px;" class="box-title">
                                <span>STATS</span>
                            </h3>


                        </div>
                        <div style="margin:15px 0 0" class="box-body no-pad">

                            <div class="stats-wrap">
                                <h2><b class="counter-up" style="color:#666;">65,800</b> <span style="background:#666;">+<b class="counter-up">20</b>%</span></h2>
                                <p class="text-grey">Total students<small>This Year</small>
                                </p>

                                <h4><b class="counter-up" style="color:#888;">1,204</b> <span style="background:#888;">+<b class="counter-up">5</b>%</span></h4>
                                <p>Graduate <small>This week</small>
                                </p>

                                <h4 style="color:#333;"><b class="counter-up">2,690</b> <span style="background:#333;">+<b class="counter-up">12,5</b></span></h4>
                                <p>New students<small>This Month</small>
                                </p>

                            </div>

                        </div>
                        <!-- /.box-body -->
                    </div>
                    <!-- /.box -->
                </div>
            </div>
        </div>
    </div>
</div>
<!-- End of Container Begin -->
@endsection