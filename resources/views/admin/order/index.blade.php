@extends('layouts.admin.master')

@section('content')
<div class="breadcrumb-wrapper">
    <h1>Orders {{ $order_code }}</h1>
</div>
<div class="row">
    <div class="col-lg-12">
        <div class="card card-default">
            <div class="card-header card-header-border-bottom">
            </div>
            <div class="card-body">
                <div class="row">
                    <div class="col-md-7 border p-2">
                        <h2>List</h2>
                        {{-- datatable --}}
                        @component('components.datatable', [
                        'table_id' => 'menu-datatable',
                        'code' => '',
                        'route_name' => 'datatable.menu',
                        'columns' => [
                        ['header' => 'id', 'class' => 'none'],
                        ['header' => 'Nama', 'class' => 'all'],
                        ['header' => 'Category', 'class' => 'none'],
                        ['header' => 'Stock', 'class' => 'none'],
                        ['header' => 'Price', 'class' => 'all'],
                        ['header' => 'Description', 'class' => 'none'],
                        ['header' => 'Photo', 'class' => 'all'],
                        ['header' => 'Action', 'class' => 'none'],
                        ]
                        ])
                        @endcomponent
                        {{-- end datatable --}}
                    </div>

                    <div class="col-md-5 border p-2">
                        <h2>Total</h2>
                        <div class="panel panel-default bg">
                            <form id="order" method="POST">
                                @csrf
                                @method('POST')
                                <input type="hidden" name="order_code" value="{{ $order_code }}">
                                <div class="row">
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <input type="text" name="name" class="form-control" placeholder="name"
                                                readonly>
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <input type="number" name="price" class="form-control" placeholder="price"
                                                readonly>
                                        </div>
                                    </div>
                                </div>

                                <div class="row">
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <input type="number" name="discount" class="form-control"
                                                placeholder="Discount" readonly>
                                        </div>
                                    </div>

                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <input type="number" name="final_price" class="form-control"
                                                placeholder="final price" value="" disabled>
                                        </div>
                                    </div>
                                </div>

                                <div class="row">
                                    <div class="col-md-4 m-auto p-auto">
                                        <div class="form-group">
                                            <label for="quantity">Quantity</label>
                                            <input type="number" name="quantity" value="1" class="form-control">
                                        </div>
                                    </div>
                                    <input type="hidden" name="menu_id" id="menu_id" value="">
                                </div>

                                <button type="submit" onclick="addForm()" class="btn btn-primary btn-block"><span
                                        class="glyphicon glyphicon-log-out" aria-hidden="true"></span>
                                    Submit</button>
                            </form>
                        </div>

                    </div>
                </div>
            </div>
        </div>

        <div class="card card-default">
            <div class="card-header card-header-border-bottom">
            </div>
            <div class="card-body">
                <div class="row">
                    <div class="col-md-8 border p-2">
                        {{-- datatable --}}
                        @component('components.datatable', [
                        'table_id' => 'order-datatable',
                        'code' => $order_code,
                        'route_name' => 'datatable.order',
                        'columns' => [
                        ['header' => 'Nama Menu', 'class' => 'all'],
                        ['header' => 'Price', 'class' => 'all'],
                        ['header' => 'Quantity', 'class' => 'all'],
                        ['header' => 'Sub Total', 'class' => 'all'],
                        ['header' => 'Action', 'class' => 'all'],
                        ]
                        ])
                        @endcomponent
                        {{-- end datatable --}}
                    </div>
                    <div class="col-md-4 border p-2">
                        <form method="POST" action="#">
                            @csrf
                            <div class="form-group">
                                <label for="total">Total Harga</label>
                                <input type="text" name="total" class="form-control" id="total"
                                    placeholder="Total Harga" value="" disabled="">
                            </div>
                            <div class="form-group">
                                <label for="bayar">Bayar (Rp)</label>
                                <input type="number" name="bayar" class="form-control" id="bayar"
                                    placeholder="Bayar">
                            </div>
                            <button type="submit" class="btn btn-primary btn-block btn-selesai">Selesai <span
                                    class="glyphicon glyphicon-ok" aria-hidden="true"></span></button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

{{-- Modal --}}
@component('components.modal', [
'modal_id' => 'input-order-modal',
'modal_header' => 'Role',
'inputs' => [
['name' => 'quantity', 'type' => 'number' , 'value' => '', 'header' => 'Quantity', 'label_id' => 'label_quantity_order'],
]
])
@endcomponent
{{-- end Modal --}}
@endsection

@push('scripts')
<script type="text/javascript">
    $(document).ready(function () {
        var table = $('#menu-datatable').DataTable();
        // row table on click
        $('#menu-datatable').on('click', 'tr', function () {
            var id = table.row(this).data()[1];
            var url = "menu/" + id;
            $.ajax({
                type: 'get',
                url: url,
                success: function (data) {
                    $("input[name='menu_id']").val(data.id);
                    $("input[name='name']").val(data.name);
                    $("input[name='price']").val(data.price);
                    $("input[name='discount']").val(0);
                    $("input[name='final_price']").val(data.price);
                }
            })
        });
    });

    var save_method;
    $(document).ready(function () {
        var table = $('#order-datatable').DataTable();
        $('form#order').on('submit', function (e) {
            if (!e.isDefaultPrevented()) {
                var id = $('#menu_id').val();
                if (save_method == "add") url = "{{ route('order.store') }}";
                else url = "order/" + id;
                var data = $('form#order').serialize();

                $.ajax({
                    url: url,
                    type: "POST",
                    data: $('form#order').serialize(),
                    success: function (data) {
                        $('form#order')[0].reset();
                        $("input[name='order_code']").val(data.code);
                        $("input[name='total']").val(data.total);
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

    $(document).ready(function () {
        var table = $('#order-datatable').DataTable();
        $('#input-order-modal form').on('submit', function (e) {
            if (!e.isDefaultPrevented()) {
                var id = $('#id_hidden').val();
                var url = "order/" + id;

                $.ajax({
                    url: url,
                    type: "POST",
                    data: $('#input-order-modal form').serialize(),
                    success: function (data) {
                        $('#input-order-modal').modal('hide');
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
    }

    function editForm(id) {
        save_method = "edit";
        $('input[name=_method]').val('PATCH');
        // $('#input-order-modal form')[0].reset();
        $.ajax({
            url: "order/" + id + "/edit",
            type: "GET",
            dataType: "JSON",
            success: function (data) {
                $('#input-order-modal').modal('show');
                $('.modal-title').text('Edit Role');
                $('#id_hidden').val(data.id);
                $('#quantity').val(data.quantity);
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
                    url: "order/" + id,
                    type: "POST",
                    data: {
                        '_method': 'DELETE',
                        '_token': $('meta[name=csrf-token]').attr('content')
                    },
                    success: function (data) {
                        $("#order-datatable").DataTable().ajax.reload();
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
