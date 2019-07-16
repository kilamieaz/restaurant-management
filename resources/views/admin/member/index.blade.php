@extends('layouts.admin.master')

@section('content')
<div class="breadcrumb-wrapper">
    <h1>Members</h1>
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
                'table_id' => 'member-datatable',
                'code' => '',
                'route_name' => 'datatable.member',
                'columns' => [
                ['header' => 'Nama', 'class' => 'all'],
                ['header' => 'Email', 'class' => 'all'],
                ['header' => 'Handphone', 'class' => 'all'],
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
'modal_id' => 'input-member-modal',
'modal_header' => 'Members',
'inputs' => [
['name' => 'name', 'type' => 'text' , 'value' => '', 'header' => 'Name', 'label_id' => 'label_name_member'],
['name' => 'email', 'type' => 'text' , 'value' => '', 'header' => 'Email', 'label_id' => 'label_email_member'],
['name' => 'handphone', 'type' => 'text' , 'value' => '', 'header' => 'Handphone', 'label_id' =>
'label_handphone_member'],
]
])
@endcomponent
{{-- end Modal --}}
@endsection

@push('scripts')
<script type="text/javascript">
    var save_method;
    $(document).ready(function () {
        var table = $('#member-datatable').DataTable();
        $('#input-member-modal form').on('submit', function (e) {
            if (!e.isDefaultPrevented()) {
                var id = $('#id_hidden').val();
                data = new FormData($("#input-member-modal form")[0]);
                if (save_method == "add") {
                    // url = "{{ route('member.store') }}";
                    url = "member"
                    $.ajax({
                        url: url,
                        type: "POST",
                        data: data,
                        processData: false,
                        contentType: false,
                        success: function (data) {
                            $('#input-member-modal').modal('hide');
                            table.ajax.reload();
                        },
                        error: function () {
                            alert("Can't save data!");
                        }
                    });
                    return false;
                } else {
                    url = "member/" + id;
                    $.ajax({
                        url: url,
                        type: "POST",
                        data: data,
                        dataType: 'JSON',
                        async: false,
                        processData: false,
                        contentType: false,
                        success: function (data) {
                            $('#input-member-modal').modal('hide');
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
        $('#input-member-modal').modal('show');
        $('#input-member-modal form')[0].reset();
        $('.modal-title').text('Add Members');
    }

    function editForm(id) {
        save_method = "edit";
        $('input[name=_method]').val('PATCH');
        $('#input-member-modal form')[0].reset();
        $.ajax({
            url: "member/" + id + "/edit",
            type: "GET",
            dataType: "JSON",
            success: function (data) {
                $('#input-member-modal').modal('show');
                $('.modal-title').text('Edit Members');
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
                    url: "member/" + id,
                    type: "POST",
                    data: {
                        '_method': 'DELETE',
                        '_token': $('meta[name=csrf-token]').attr('content')
                    },
                    success: function (data) {
                        $("#member-datatable").DataTable().ajax.reload();
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
