@extends('admin.layouts.default')
@section('content')
<link rel="stylesheet" href="{{asset('css/plugins/dataTables.bootstrap4.min.css')}}">
<link rel="stylesheet" href="{{asset('css/custom/datatables.css')}}">
<link rel="stylesheet" href="https://cdn.datatables.net/select/1.3.1/css/select.dataTables.min.css">

<div class="pcoded-main-container">
    <div class="pcoded-content">
        <!-- //@ breadcumb -->
        <div class="page-header">
            <div class="page-block">
                <div class="row align-items-center">
                    <div class="col-md-12">
                        <div class="page-header-title">
                            <h5 class="m-b-10">Guest</h5>
                        </div>
                        <ul class="breadcrumb">
                            <li class="breadcrumb-item"><a href="{{url('belakang/dashboard')}}"><i class="feather icon-grid"></i></a></li>
                            <li class="breadcrumb-item"><a href="#!">Users</a></li>
                            <li class="breadcrumb-item"><a href="#!">Guest</a></li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
        <!-- //@ breadcumb -->

        <!-- //@ table -->
        <div class="col-sm-12">
            <div class="card">
                <div class="card-header">
                    <button type="button" id="add" class="btn btn-primary btn-sm" data-toggle="modal" data-target="#modalAdd"><i class="feather mr-2 icon-plus-circle"></i>Add</button>
                    <button type="button" id="delete" disabled class="btn btn-outline-danger btn-sm"><i class="feather mr-2 icon-trash-2"></i>Delete</button>
                </div>
                <div class="card-body">
                    <table id="table-datatable" class="table table-sm table-striped table-hover nowrap compact" cellspacing="0" width="100%">
                        <thead class="border-bottom-primary">
                            <tr>
                                <th width="2%">
                                    <center style="padding-left: 10px;"><button style="border: none; background: transparent; font-size: 14px;" id="MyTableCheckAllButton"><i class="far fa-square"></i></button></center>
                                </th>
                                <th>Name</th>
                                <th>Email</th>
                                <th>Phone</th>
                                <th>Address</th>
                                <th>Status</th>
                                <th>Group</th>
                                <th>Sub Group</th>
                            </tr>
                        </thead>
                        <tbody>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
        <!-- //@ table -->

        <!-- //@ modal-add -->
        <div id="modalAdd" class="modal fade" tabindex="-1" role="dialog" aria-labelledby="modalAddLabel" aria-hidden="true">
            <div class="modal-dialog" role="document">
                <form class="modal-content" id="formGuest" runat="server">
                    <div class="modal-header">
                        <h5 class="modal-title" id="modalAddLabel"><i class="feather mr-2 icon-plus-circle"></i>Add Guest</h5>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                    </div>
                    <div class="modal-body">
                        <div class="form-group">
                            <label class="floating-label" for="Name"><i class="feather mr-2 icon-user-plus"></i>Name <span class="text-c-red mr-2">*</span></label>
                            <input type="text" class="form-control" name="name" id="Name" aria-describedby="NameHelp">
                        </div>
                        <div class="form-group">
                            <label class="floating-label" for="Email"><i class="feather mr-2 icon-mail"></i>Email</label>
                            <input type="email" class="form-control" name="email" id="Email" aria-describedby="EmailHelp">
                        </div>
                        <div class="form-group">
                            <label class="floating-label" for="Phone"><i class="feather mr-2 icon-phone-call"></i>Phone <span class="text-c-red mr-2">*</span></label>
                            <input type="text" class="form-control mob_no" name="phone" id="Phone" data-mask="9999-9999-9999">
                        </div>
                        <div class="form-group">
                            <textarea class="form-control max-textarea" name="address" rows="4"></textarea>
                        </div>
                        <label><i class="feather mr-2 icon-user"></i>Status</label>
                        <div class="form-group">
                            <div class="switch switch-success d-inline m-r-10">
                                <input type="checkbox" id="switch-s-1" checked>
                                <label for="switch-s-1" class="cr"></label>
                            </div>
                            <label>Active</label>
                        </div>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-sm btn-outline-secondary" data-dismiss="modal">Close</button>
                        <button type="submit" class="btn btn-sm btn-primary" onclick="handleSubmit('admin/guest')">Save changes</button>
                    </div>
                </form>
            </div>
        </div>
        <!-- //@ modal-add -->

    </div>
</div>
<script src="{{ asset('/js/plugins/jquery.dataTables.min.js')}}"></script>
<script src="{{ asset('/js/plugins/dataTables.bootstrap4.min.js')}}"></script>
<script src="{{ asset('/js/plugins/jquery.mask.min.js')}}"></script>
<script src="{{ asset('/js/plugins/bootstrap-maxlength.js')}}"></script>
<script src="{{ asset('/js/plugins/jquery.validate.min.js')}}"></script>
<script src="{{ asset('/js/pages/form-validation.js')}}"></script>
<script src="https://cdn.datatables.net/select/1.3.1/js/dataTables.select.min.js"></script>
<script src="https://unpkg.com/axios/dist/axios.min.js"></script>
<script>
        //! postData axios
        function handleSubmit(param){
            event.preventDefault()
            const data = new FormData(form);
            axios.post(param, data)
            .then((response) => {
                console.log(response);
            }, (error) => {
                console.log(error);
            });
        };
    $(document).ready(function() {
        let datatable = $('#table-datatable').DataTable({
            processing: true,
            serverSide: true,
            ajax: '{{ url('guest/create')}}',
            columns: [{
                    data: function(row, type, set) {
                        return '';
                    }
                },
                {
                    data: 'name',
                    render: function(data, type, full, meta) {
                        return '<a href="#" class="font-weight-bold">' + data + '</a>';
                    }
                },
                {
                    data: 'email',
                },
                {
                    data: 'phone',
                },
                {
                    data: 'address',
                    render: function(data, type, full, meta) {
                        return data.substr(0, 26) + ' ...';
                    }
                },
                {
                    data: 'status',
                    render: function(data, type, full, meta) {
                        status = '<i class="fa fa-circle text-c-green mr-2"></i> Active';
                        if (data == 'N') {
                            status = '<i class="fa fa-circle text-c-red mr-2"></i>Non Active';
                        }
                        return status;
                    }
                },
                {
                    data: 'id_group',
                },
                {
                    data: 'id_sub_group',
                },
            ],
            deferRender: true,
            autoWidth: false,
            retrieve: true,
            scrollX: true,
            order: [
                [1, 'asc']
            ],
            lengthMenu: [
                [10, 25, 50, -1],
                [10, 25, 50, "All"]
            ],
            columnDefs: [{
                targets: [0],
                orderable: false,
                searchable: false,
                className: 'select-checkbox',
            }, ],
            select: {
                style: 'multi',
                selector: 'td:first-child',
                // blurable: true
            },
            initComplete: function(settings, json) {
                $('body').find('.dataTables_scrollBody').addClass("scrollbar"); //? set scrollBar custom
            },
        });
        //! checkAll
        $('#MyTableCheckAllButton').click(function() {
            if (datatable.rows({
                    selected: true
                }).count() > 0) {
                datatable.rows().deselect();
                return;
            }
            datatable.rows().select();
        });
        datatable.on('select deselect', function(e, dt, type, indexes) {
            if (type === 'row') {
                // We may use dt instead of myTable to have the freshest data.
                if (dt.rows().count() === dt.rows({
                        selected: true
                    }).count()) {
                    // Deselect all items button.
                    $('#MyTableCheckAllButton i').attr('class', 'far fa-check-square');
                    $('#add').prop("disabled", true);
                    $('#delete').prop("disabled", false);
                    document.getElementById('add').className = "btn btn-outline-primary btn-sm";
                    document.getElementById('delete').className = "btn btn-danger btn-sm";
                    return;
                }

                if (dt.rows({
                        selected: true
                    }).count() === 0) {
                    // Select all items button.
                    $('#MyTableCheckAllButton i').attr('class', 'far fa-square');
                    $('#add').prop("disabled", false);
                    $('#delete').prop("disabled", true);
                    document.getElementById('add').className = "btn btn-primary btn-sm";
                    document.getElementById('delete').className = "btn btn-outline-danger btn-sm";
                    return;
                }

                // Deselect some items button.
                $('#MyTableCheckAllButton i').attr('class', 'far fa-minus-square');
                $('#add').prop("disabled", true);
                $('#delete').prop("disabled", false);
                document.getElementById('add').className = "btn btn-outline-primary btn-sm";
                document.getElementById('delete').className = "btn btn-danger btn-sm";
            }
        });

        //! formValidation
        $.validator.addMethod(
            'mobile_phone',
            function(value, element) {
                return this.optional(element) || /^\d{4}\-\d{4}\-\d{4}$/.test(value);
            },
            'Invalid phone number.'
        );
        $('#formGuest').validate({
            ignore: '.ignore, .select2-input',
            focusInvalid: false,
            rules: {
                'name': {
                    required: true,
                    minlength: 6,
                    maxlength: 20
                },
                'email': {
                    required: false,
                    email: true
                },
                'phone': {
                    required: true,
                    mobile_phone: true
                },
                'address': {
                    required: true,
                    minlength: 6,
                    maxlength: 200
                },
            },
            errorPlacement: function errorPlacement(error, element) {
                var $parent = $(element).parents('.form-group');
                if ($parent.find('.jquery-validation-error').length) {
                    return;
                }

                $parent.append(
                    error.addClass('jquery-validation-error small form-text invalid-feedback')
                );
            },
            highlight: function(element) {
                var $el = $(element);
                var $parent = $el.parents('.form-group');
                $el.addClass('is-invalid');
                if ($el.hasClass('select2-hidden-accessible') || $el.attr('data-role') === 'tagsinput') {
                    $el.parent().addClass('is-invalid');
                }
            },
            unhighlight: function(element) {
                $(element).parents('.form-group').find('.is-invalid').removeClass('is-invalid');
            }
        });
    });
</script>
@endsection