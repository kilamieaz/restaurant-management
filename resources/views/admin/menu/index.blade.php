@extends('layouts.admin.master')

@section('content')
<div class="breadcrumb-wrapper">
    <h1>Menus</h1>
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
                'table_id' => 'menu-datatable',
                'code' => '',
                'route_name' => 'datatable.menu',
                'columns' => [
                ['header' => 'id', 'class' => 'never'],
                ['header' => 'Nama', 'class' => 'all'],
                ['header' => 'Category', 'class' => 'all'],
                ['header' => 'Stock', 'class' => 'all'],
                ['header' => 'Price', 'class' => 'all'],
                ['header' => 'Description', 'class' => 'all'],
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
'modal_id' => 'input-menu-modal',
'modal_header' => 'Menu',
'inputs' => [
['name' => 'name', 'type' => 'text' , 'value' => '', 'header' => 'Name', 'label_id' => 'label_name_menu'],
['name' => 'category_id', 'type' => 'select', 'value' => $categories, 'header' => 'Category', 'label_id' =>
'label_category_menu'],
['name' => 'stock', 'type' => 'text' , 'value' => '', 'header' => 'Stock', 'label_id' => 'label_stock_menu'],
['name' => 'price', 'type' => 'text' , 'value' => '', 'header' => 'Price', 'label_id' => 'label_price_menu'],
['name' => 'description', 'type' => 'text' , 'value' => '', 'header' => 'Description', 'label_id' =>
'label_description_menu'],
['name' => 'photo', 'type' => 'file' , 'value' => '', 'header' => 'Photo', 'label_id' => 'label_photo_menu'],
]
])
@endcomponent
{{-- end Modal --}}
@endsection

@push('scripts')
<script type="text/javascript">
    var save_method;
    $(document).ready(function () {
        var table = $('#menu-datatable').DataTable();
        $('#input-menu-modal form').on('submit', function (e) {
            if (!e.isDefaultPrevented()) {
                var id = $('#id_hidden').val();
                data = new FormData($("#input-menu-modal form")[0]);
                if (save_method == "add") {
                    // url = "{{ route('menu.store') }}";
                    url = "menu"
                    $.ajax({
                        url: url,
                        type: "POST",
                        data: data,
                        processData: false,
                        contentType: false,
                        success: function (data) {
                            $('#input-menu-modal').modal('hide');
                            table.ajax.reload();
                        },
                        error: function () {
                            alert("Can't save data!");
                        }
                    });
                    return false;
                } else {
                    url = "menu/" + id;
                    $.ajax({
                        url: url,
                        type: "POST",
                        data: data,
                        dataType: 'JSON',
                        async: false,
                        processData: false,
                        contentType: false,
                        success: function (data) {
                            $('#input-menu-modal').modal('hide');
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
        $('#input-menu-modal').modal('show');
        $('#input-menu-modal form')[0].reset();
        $('.modal-title').text('Add Menus');
    }

    function editForm(id) {
        save_method = "edit";
        $('input[name=_method]').val('PATCH');
        $('#input-menu-modal form')[0].reset();
        $.ajax({
            url: "menu/" + id + "/edit",
            type: "GET",
            dataType: "JSON",
            success: function (data) {
                $('#input-menu-modal').modal('show');
                $('.modal-title').text('Edit Menus');
                $('#id_hidden').val(data.id);
                $('#name').val(data.name);
                $('#category_id').val(data.category_id).trigger('change');
                $('#stock').val(data.stock);
                $('#price').val(data.price);
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
                    url: "menu/" + id,
                    type: "POST",
                    data: {
                        '_method': 'DELETE',
                        '_token': $('meta[name=csrf-token]').attr('content')
                    },
                    success: function (data) {
                        $("#menu-datatable").DataTable().ajax.reload();
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
