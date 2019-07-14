@extends('layouts.admin.master')
@section('content')
<div class="breadcrumb-wrapper">
    <h1>Orders</h1>
</div>
<div class="row">
    <div class="col-lg-12">
        <div class="card card-default">
            <div class="card-header card-header-border-bottom">
            </div>
            <div class="card-body">
                <div class="row">
                    <div class="col-md-7 border">
                        <h2>List</h2>
                        {{-- datatable --}}
                        @component('components.datatable', [
                        'table_id' => 'menu-datatable',
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
                                <div class="row">
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <input type="text" name="name" class="form-control" placeholder="name"
                                                disabled>
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <input type="number" name="price" class="form-control" placeholder="price"
                                                disabled>
                                        </div>
                                    </div>
                                </div>

                                <div class="row">
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <input type="number" name="discount" class="form-control"
                                                placeholder="Discount" disabled>
                                        </div>
                                    </div>

                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <input type="number" name="final_price" class="form-control"
                                                placeholder="final price" disabled>
                                        </div>
                                    </div>
                                </div>

                                <div class="row">
                                    <div class="col-md-4 m-auto p-auto">
                                        <div class="form-group">
                                            <label for="exampleInputEmail1">Quantity</label>
                                            <input type="number" name="quantity" value="1" class="form-control">
                                        </div>
                                    </div>
                                    <input type="hidden" name="menu_id" id="menu_id" value="">
                                </div>

                                <button type="submit" onclick="addForm()" class="btn btn-primary btn-block"><span
                                        class="glyphicon glyphicon-log-out" aria-hidden="true"></span>
                                    Submit</button>
                                {{-- <img src="{{ asset('loading.gif') }}" style="display: none;" class="loading"> --}}
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
                    <div class="col-md-8">
                        <table class="table table-bordered">
                            <thead>
                                <tr>
                                    <th>#</th>
                                    <th>Name</th>
                                    <th>Quantity</th>
                                    <th>Sub Total</th>
                                    <th>Action</th>
                                </tr>
                            </thead>
                            <tbody>

                            </tbody>
                        </table>
                    </div>
                    <div class="col-md-4">
                        <form method="POST" action="#">
                            @csrf
                            <div class="form-group">
                                <label for="exampleInputEmail1">Total Harga</label>
                                <input type="text" name="total" class="form-control" id="exampleInputEmail1"
                                    placeholder="Total Harga" value="" disabled="">
                            </div>
                            <div class="form-group">
                                <label for="exampleInputPassword1">Bayar (Rp)</label>
                                <input type="number" name="bayar" class="form-control" id="exampleInputPassword1"
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
@endsection

@push('scripts')
<script type="text/javascript">
    $(document).ready(function () {
        var table = $('#menu-datatable').DataTable();
        // row table on click
        $('#menu-datatable').on('click', 'tr', function () {
            var id = table.row(this).data()[1];
            var url = "order/" + id;
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

                $.ajax({
                    url: url,
                    type: "POST",
                    data: $('form#order').serialize(),
                    success: function (data) {
                        console.log(data);
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
        $('form#order')[0].reset();
    }

</script>
@endpush
