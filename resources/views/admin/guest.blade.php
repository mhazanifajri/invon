@extends('admin.layouts.default')
@section('content')
<!-- <link rel="stylesheet" href="/css/datatables/css/jquery.dataTables.min.css"> -->
<link rel="stylesheet" href="https://cdn.datatables.net/1.10.21/css/jquery.dataTables.min.css">
<link rel="stylesheet" href="/css/c_guest.css">
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
                <a href="#" data-reveal-id="AddGuest" class="button tiny bg-green radius"><i class="fontello-plus"></i> Add</a>
                <a href="#" class="button tiny bg-black-solid radius"><i class="fontello-trash-1"></i> Delete</a>
                <table id="TableGuest" class="display" style="width:100%">
                    <thead>
                        <tr>
                            <th style="text-align: center;" width="2%"><input id="check_all" type="checkbox"></th>
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
                            <td>Edinburgh</td>
                            <td>Edinburgh</td>
                            <td>-</td>
                            <td>61</td>
                        </tr>

                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div>
<!-- //@ ADD  -->
<div id="AddGuest" class="small reveal-modal" data-reveal>
    <form id="form" data-abide>
        {{ csrf_field() }}
        <div class="name-field">
            <label>Name <span class="text-red">*</span>
                <input type="text" name="name" placeholder="Guest Name" pattern="[a-zA-Z]+" required>
            </label>
            <small class="error">Name is required and must be a string.</small>
        </div>
        <div class="phone-field">
            <label>Phone <span class="text-red">*</span>
                <input type="text" name="phone" placeholder="Guest Phone" pattern="[a-zA-Z]+" required>
            </label>
            <small class="error">Phone is required and must be a string.</small>
        </div>
        <div class="email-field">
            <label>Email
                <input type="email" name="email" placeholder="Guest Email">
            </label>
            <small class="error">An email address is required.</small>
        </div>
        <div class="group-field">
            <label>Group <span class="text-red">*</span>
                <select name="group" required>
                    <option value="1" selected>Volvo</option>
                    <option value="2">Saab</option>
                    <option value="3">Mercedes</option>
                    <option value="4">Audi</option>
                </select>
            </label>
            <small class="error">Your password must match the requirements</small>
        </div>
        <div class="sgroup-field">
            <label>Sub Group <span class="text-red">*</span>
                <select name="sgroup" required>
                    <option value="1">Volvo</option>
                    <option value="2">Saab</option>
                    <option value="3">Mercedes</option>
                    <option value="5" selected>Audi</option>
                </select>
            </label>
            <small class="error">Your password must match the requirements</small>
        </div>
        <button type="submit" class="tiny">Submit</button>
        <a class="close-reveal-modal"><i class="fontello-cancel"></i></a>
    </form>
</div>
<!-- <script type='text/javascript' src="/js/datatables/jquery.dataTables.js"></script> -->
<script type='text/javascript' src="https://cdn.datatables.net/1.10.21/js/jquery.dataTables.min.js"></script>
<script>
    //@ INITIALIZATION    
    $(document).ready(function() {
        let = TableGuest = $('#TableGuest').DataTable({
            "columnDefs": [{
                "orderable": false,
                "targets": [0],
            }, ],
            "order": [],
        });
    });
    $('#TableGuest tbody').on('click', 'tr', function() {
        if ($(this).hasClass('selected')) {
            $(this).removeClass('selected');
        } else {
            TableGuest.$('tr.selected').removeClass('selected');
            $(this).addClass('selected');
        }
    });
    //@ EVENT CHECKED_TABLE
    $('#check_all').change(function() {
        let cek_guest = TableGuest.cells().nodes();
        $(cek_guest).find(':checkbox').prop('checked', $(this).is(':checked'));
    });
    //@ EVENT SUBMIT 
    $('#form').submit(function(e) {
        let data = $('#form').serialize();
        let url = "{{ url('belakang/guest') }}";
        $.ajax({
            url: url,
            type: 'POST',
            data: data,
            dataType: 'JSON',
            cache: false,
            success: function(data) {
                if (data.response == true) {
                    alert('success')
                }
            }
        });
        e.preventDefault();
        return false;
    });
</script>
@endsection