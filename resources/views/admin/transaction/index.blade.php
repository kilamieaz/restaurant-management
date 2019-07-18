@extends('layouts.admin.master')

@section('content')
<div class="breadcrumb-wrapper">
    <h1>Transaction {{ $order_code }}</h1>
</div>
<div class="row">
    <div class="col-lg-12">
        <div class="card card-default">
            <div class="card-header card-header-border-bottom">
            </div>
            <div class="card-body">
                <div class="row">
                    <div class="col-md-12 border p-2">
                        <h2>List Table</h2>
                        {{-- datatable --}}
                        @component('components.datatable', [
                        'table_id' => 'table-datatable',
                        'code' => '',
                        'route_name' => 'datatable.table',
                        'columns' => [
                        ['header' => 'id', 'class' => 'never'],
                        ['header' => 'Nama', 'class' => 'all'],
                        ['header' => 'Capacity', 'class' => 'all'],
                        ['header' => 'Action', 'class' => 'never'],
                        ]
                        ])
                        @endcomponent
                        {{-- end datatable --}}
                    </div>
                </div>
            </div>
        </div>

        <div class="card card-default">
            <div class="card-header card-header-border-bottom">
            </div>
            <div class="card-body">
                <div class="row">
                    <div class="col-md-7 border p-2">
                        <h2>List Menu</h2>
                        {{-- datatable --}}
                        @component('components.datatable', [
                        'table_id' => 'menu-datatable',
                        'code' => '',
                        'route_name' => 'datatable.menu',
                        'columns' => [
                        ['header' => 'id', 'class' => 'never'],
                        ['header' => 'Nama', 'class' => 'all'],
                        ['header' => 'Category', 'class' => 'never'],
                        ['header' => 'Stock', 'class' => 'never'],
                        ['header' => 'Price', 'class' => 'all'],
                        ['header' => 'Description', 'class' => 'never'],
                        ['header' => 'Photo', 'class' => 'all'],
                        ['header' => 'Action', 'class' => 'never'],
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
                                    <div class="col-md-12">
                                        <div class="form-group">
                                            <input type="text" id="table_name" name="table_name" class="form-control"
                                                placeholder="name table" readonly>
                                        </div>
                                    </div>
                                </div>

                                <div class="row">
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <input type="text" id="menu_name" name="name" class="form-control"
                                                placeholder="name menu" readonly>
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <input type="number" id="menu_price" name="price" class="form-control"
                                                placeholder="price" readonly>
                                        </div>
                                    </div>
                                </div>

                                <div class="row">
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <input type="number" id="menu_discount" name="discount" class="form-control"
                                                placeholder="Discount" readonly>
                                        </div>
                                    </div>

                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <input type="number" id="menu_final_price" name="final_price"
                                                class="form-control" placeholder="final price" value="" disabled>
                                        </div>
                                    </div>
                                </div>

                                <div class="row">
                                    <div class="col-md-4 m-auto p-auto">
                                        <div class="form-group">
                                            <label for="quantity">Quantity</label>
                                            <input type="number" id="menu_quantity" name="quantity" value="1"
                                                class="form-control">
                                        </div>
                                    </div>
                                    <input type="hidden" name="menu_id" id="menu_id" value="">
                                    <input type="hidden" name="table_id" id="table_id" value="">
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
                        <form method="POST" id="calculate">
                            @csrf
                            <div class="form-group">
                                <label for="total">Total Harga</label>
                                <input type="text" name="total" class="form-control" id="total"
                                    placeholder="Total Harga" value="" disabled="">
                            </div>
                            <div class="form-group">
                                <label for="pay">Bayar (Rp)</label>
                                <input type="number" name="pay" class="form-control" id="pay" placeholder="Bayar">
                            </div>
                            <button type="button" onclick="calculate()" class="btn btn-primary btn-block">Selesai <span
                                    class="glyphicon glyphicon-ok" aria-hidden="true" id="transaction_complete"></span></button>
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
['name' => 'quantity', 'type' => 'number' , 'value' => '', 'header' => 'Quantity', 'label_id' =>
'label_quantity_order'],
]
])
@endcomponent
{{-- end Modal --}}
@endsection

@push('scripts')
<script type="text/javascript">
    $(document).ready(function () {
        var table_table = $('#table-datatable').DataTable();
        // row table on click
        $('#table-datatable').on('click', 'tr', function () {
            var id = table_table.row(this).data()[1];
            var url = "table/" + id;
            $.ajax({
                type: 'get',
                url: url,
                success: function (data) {
                    $("#table_id").val(data.id);
                    $("#table_name").val(data.name);
                }
            })
        });
        var table_menu = $('#menu-datatable').DataTable();
        // row menu on click
        $('#menu-datatable').on('click', 'tr', function () {
            var id = table_menu.row(this).data()[1];
            var url = "menu/" + id;
            $.ajax({
                type: 'get',
                url: url,
                success: function (data) {
                    $("#menu_id").val(data.id);
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
                if (save_method == "add") url = "{{ route('transaction.store') }}";
                else url = "transaction/" + id;
                var data = $('form#order').serialize();

                $.ajax({
                    url: url,
                    type: "POST",
                    data: $('form#order').serialize(),
                    success: function (data) {
                        $('form#order')[0].reset();
                        $("input[name='order_code']").val(data.code);
                        $("input[name='total']").val(data.total);
                        $("#table_id").val(data.table_id);
                        $("#table_name").val(data.table_name);
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
                var url = "transaction/" + id;

                $.ajax({
                    url: url,
                    type: "POST",
                    data: $('#input-order-modal form').serialize(),
                    success: function (data) {
                        $('#input-order-modal').modal('hide');
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

    function addForm() {
        save_method = "add";
        $('input[name=_method]').val('POST');
    }

    function editForm(id) {
        save_method = "edit";
        $('input[name=_method]').val('PATCH');
        // $('#input-order-modal form')[0].reset();
        $.ajax({
            url: "transaction/" + id + "/edit",
            type: "GET",
            dataType: "JSON",
            success: function (data) {
                $('#input-order-modal').modal('show');
                $('.modal-title').text('Edit Quantity');
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
                    url: "transaction/" + id,
                    type: "POST",
                    data: {
                        '_method': 'DELETE',
                        '_token': $('meta[name=csrf-token]').attr('content')
                    },
                    success: function (data) {
                        $("#order-datatable").DataTable().ajax.reload();
                        $("input[name='total']").val(data.total);
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

    function calculate() {
        var total = $('#total').val();
        // console.log(total);
        var pay = $('#pay').val();
        var calculate = pay - total;
        Swal.fire(
            'Change',
            calculate.toString(),
            'success'
        )
    }

</script>
@endpush
