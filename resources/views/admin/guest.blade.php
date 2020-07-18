@extends('admin.layouts.default')
@section('content')
<link rel="stylesheet" href="/css/datatables/css/jquery.dataTables.min.css">
<style>
    td .tiny {
        margin: 0;
    }
    td input#checkbox1 {
        margin: 0;
    }
    th input#checkbox1 {
        margin: 0;
    }
</style>
<ul class="breadcrumbs">
    <li><a href="#"><span class="entypo-home"></span></a></li>
    <li>Users</li>
    <li>Guest</li>
</ul>

<div class="row">
    <div class="large-12 columns">
        <div class="box">
            <div class="box-header bg-transparent">
                <div class="pull-right box-tools">
                    <span class="box-btn" data-widget="collapse"><i class="icon-minus"></i>
                    </span>
                    <span class="box-btn" data-widget="remove"><i class="icon-cross"></i>
                    </span>
                </div>
                <h3 class="box-title"><i class="fontello-th-large-outline"></i>
                    <span>Guest</span>
                </h3>
            </div>
            <div class="box-body hover unstriped" style="display: block;">
            <a href="#" class="button tiny bg-green radius"><i class="fontello-plus"></i> Add</a>
            <a href="#" class="button tiny bg-black-solid radius"><i class="fontello-trash-1"></i> Delete</a>
                <table id="example" class="display" style="width:100%">
                    <thead>
                        <tr>
                            <th style="text-align: center;" width="2%"><input id="checkbox1" type="checkbox"></th>
                            <th>Name</th>
                            <th>Phone</th>
                            <th>Email</th>
                            <th>Group</th>
                            <th>Sub Group</th>
                            <th>Status</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td style="text-align: center;"><input id="checkbox1" type="checkbox"></td>
                            <td>Tiger Nixon</td>
                            <td>021 (8890954)</td>
                            <td>Edinburgh</td>
                            <td>Edinburgh</td>
                            <td>-</td>
                            <td>61</td>
                        </tr>
                        <tr>
                            <td style="text-align: center;"><input id="checkbox1" type="checkbox"></td>
                            <td>Tiger Nixon</td>
                            <td>021 (8890954)</td>
                            <td>Teman Kantor</td>
                            <td>Teman Kantor</td>
                            <td>Edinburgh</td>
                            <td>61</td>
                        </tr>
                      
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div>
<script type='text/javascript' src="/js/datatables/jquery.dataTables.js"></script>
<script>
    $(document).ready(function() {
        $('#example').DataTable();
    });
</script>
@endsection