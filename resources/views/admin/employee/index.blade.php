@extends('layouts.admin.master')

@section('content')
<div class="breadcrumb-wrapper">
    <h1>Employees</h1>
</div>
<div class="row">
    <div class="col-lg-12">
        <div class="card card-default">
            <div class="card-header card-header-border-bottom">
                <button type="button" onclick="addForm()" class="btn btn-success float-right"><i
                        class="fa fa-plus-circle"></i> Add</button>
            </div>
            <div class="card-body">
                {{-- datatable --}}
                @component('components.datatable', [
                'table_id' => 'employee-datatable',
                'code' => '',
                'route_name' => 'datatable.employee',
                'columns' => [
                ['header' => 'Nama', 'class' => 'all'],
                ['header' => 'Position', 'class' => 'all'],
                ['header' => 'Email', 'class' => 'all'],
                // ['header' => 'Email', 'class' => 'all'],
                ['header' => 'Handphone', 'class' => 'all'],
                ['header' => 'Photo', 'class' => 'all'],
                ['header' => 'Action', 'class' => 'all'],
                ]
                ])
                @endcomponent
                {{-- end datatable --}}
            </div>
        </div>
    </div>
</div>

{{-- Modal --}}
@component('components.modal', [
'modal_id' => 'input-employee-modal',
'modal_header' => 'Employees',
'inputs' => [
['name' => 'name', 'type' => 'text' , 'value' => '', 'header' => 'Name', 'label_id' => 'label_name_employee'],
['name' => 'role_id', 'type' => 'select', 'value' => $roles, 'header' => 'Position', 'label_id' =>
'label_role_employee'],
['name' => 'email', 'type' => 'email' , 'value' => '', 'header' => 'Email', 'label_id' => 'label_email_employee'],
['name' => 'password', 'type' => 'password' , 'value' => '', 'header' => 'Password', 'label_id' => 'label_password_employee'],
['name' => 'handphone', 'type' => 'text' , 'value' => '', 'header' => 'Handphone', 'label_id' =>
'label_handphone_employee'],
['name' => 'photo', 'type' => 'file' , 'value' => '', 'header' => 'Photo', 'label_id' => 'label_photo_employee'],
]
])
@endcomponent
{{-- end Modal --}}
@endsection

@push('scripts')
<script type="text/javascript">
    var save_method;
    $(document).ready(function () {
        var table = $('#employee-datatable').DataTable();
        $('#input-employee-modal form').on('submit', function (e) {
            if (!e.isDefaultPrevented()) {
                var id = $('#id_hidden').val();
                data = new FormData($("#input-employee-modal form")[0]);
                if (save_method == "add") {
                    // url = "{{ route('employee.store') }}";
                    url = "employee"
                    $.ajax({
                        url: url,
                        type: "POST",
                        data: data,
                        processData: false,
                        contentType: false,
                        success: function (data) {
                            $('#input-employee-modal').modal('hide');
                            table.ajax.reload();
                        },
                        error: function () {
                            alert("Can't save data!");
                        }
                    });
                    return false;
                } else {
                    url = "employee/" + id;
                    $.ajax({
                        url: url,
                        type: "POST",
                        data: data,
                        dataType: 'JSON',
                        async: false,
                        processData: false,
                        contentType: false,
                        success: function (data) {
                            $('#input-employee-modal').modal('hide');
                            table.ajax.reload();
                        },
                        error: function () {
                            alert("Error!");
                        }
                    });
                    return false;
                }
            }
        });
    });

    function addForm() {
        save_method = "add";
        $('input[name=_method]').val('POST');
        $('#input-employee-modal').modal('show');
        $('#input-employee-modal form')[0].reset();
        $('.modal-title').text('Add Employees');
    }

    function editForm(id) {
        save_method = "edit";
        $('input[name=_method]').val('PATCH');
        $('#input-employee-modal form')[0].reset();
        $.ajax({
            url: "employee/" + id + "/edit",
            type: "GET",
            dataType: "JSON",
            success: function (data) {
                $('#input-employee-modal').modal('show');
                $('.modal-title').text('Edit Employees');
                $('#id_hidden').val(data.id);
                $('#nip').val(data.nip);
                $('#name').val(data.name);
                $('#email').val(data.email);
                $('#birth_date').val(data.birth_date);
                $('#address').val(data.address);
                $('#phone').val(data.phone);
                $('#gender').val(data.gender);
                $('#religion').val(data.religion);
                $('#position').val(data.position);
                // $('#image').val(data.image);
            },
            error: function () {
                Swal.fire({
                    type: 'error',
                    title: 'Oops...',
                    text: 'Something went wrong!'
                })
            }
        });
    }

    function deleteData(id) {
        const swalWithBootstrapButtons = Swal.mixin({
            customClass: {
                confirmButton: 'btn btn-success',
                cancelButton: 'btn btn-danger'
            },
            buttonsStyling: false,
        })

        swalWithBootstrapButtons.fire({
            title: 'Are you sure?',
            text: "You won't be able to revert this!",
            type: 'warning',
            showCancelButton: true,
            confirmButtonText: 'Yes, delete it!',
            cancelButtonText: 'No, cancel!',
            reverseButtons: true
        }).then((result) => {
            if (result.value) {
                $.ajax({
                    url: "employee/" + id,
                    type: "POST",
                    data: {
                        '_method': 'DELETE',
                        '_token': $('meta[name=csrf-token]').attr('content')
                    },
                    success: function (data) {
                        $("#employee-datatable").DataTable().ajax.reload();
                        swalWithBootstrapButtons.fire(
                            'Deleted!',
                            'Your file has been deleted.',
                            'success'
                        )
                    },
                    error: function () {
                        Swal.fire({
                            type: 'error',
                            title: 'Oops...',
                            text: 'Something went wrong!'
                        })
                    }
                });
            } else if (
                // Read more about handling dismissals
                result.dismiss === Swal.DismissReason.cancel
            ) {
                swalWithBootstrapButtons.fire(
                    'Cancelled',
                    'Your imaginary file is safe :)',
                    'error'
                )
            }
        })
    }

</script>
@endpush
