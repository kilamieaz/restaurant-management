@extends('layouts.admin.master')
@section('content')
<div class="breadcrumb-wrapper">
    <h1>Role</h1>
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
                'table_id' => 'role-datatable',
                'code' => '',
                'route_name' => 'datatable.role',
                'columns' => [
                ['header' => 'Nama', 'class' => 'all'],
                ['header' => 'Description', 'class' => 'all'],
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
'modal_id' => 'input-role-modal',
'modal_header' => 'Role',
'inputs' => [
['name' => 'name', 'type' => 'text' , 'value' => '', 'header' => 'Name', 'label_id' => 'label_name_role'],
['name' => 'description', 'type' => 'text', 'value' => '', 'header' => 'Description', 'label_id' =>
'label_description_role'],
]
])
@endcomponent
{{-- end Modal --}}
@endsection

@push('scripts')
<!-- Laravel Javascript Validation -->
<script type="text/javascript" src="{{ asset('vendor/jsvalidation/js/jsvalidation.js')}}"></script>
{!! JsValidator::formRequest('App\Http\Requests\RoleRequest') !!}
<script type="text/javascript">
    var save_method;
    $(document).ready(function () {
        var table = $('#role-datatable').DataTable();
        $('#input-role-modal form').on('submit', function (e) {
            if (!e.isDefaultPrevented()) {
                var id = $('#id_hidden').val();
                if (save_method == "add") url = "{{ route('role.store') }}";
                else url = "role/" + id;

                $.ajax({
                    url: url,
                    type: "POST",
                    data: $('#input-role-modal form').serialize(),
                    success: function (data) {
                        $('#input-role-modal').modal('hide');
                        table.ajax.reload();
                        Swal.fire(
                            'Good job!',
                            save_method,
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
                return false;
            }
        });
    });

    function addForm() {
        save_method = "add";
        $('input[name=_method]').val('POST');
        $('#input-role-modal').modal('show');
        $('#input-role-modal form')[0].reset();
        $('.modal-title').text('Add Role');
    }

    function editForm(id) {
        save_method = "edit";
        $('input[name=_method]').val('PATCH');
        $('#input-role-modal form')[0].reset();
        $.ajax({
            url: "role/" + id + "/edit",
            type: "GET",
            dataType: "JSON",
            success: function (data) {
                $('#input-role-modal').modal('show');
                $('.modal-title').text('Edit Role');
                $('#id_hidden').val(data.id);
                $('#name').val(data.name);
                $('#description').val(data.description);
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
                    url: "role/" + id,
                    type: "POST",
                    data: {
                        '_method': 'DELETE',
                        '_token': $('meta[name=csrf-token]').attr('content')
                    },
                    success: function (data) {
                        $("#role-datatable").DataTable().ajax.reload();
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
