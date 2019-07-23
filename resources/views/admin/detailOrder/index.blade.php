@extends('layouts.admin.master')

@push('styles')
<link rel="stylesheet" href="{{ asset('css/datatable.css') }}">
@endpush
@section('content')
<div class="breadcrumb-wrapper">
    <h1>Detail Orders</h1>
</div>
<div class="row">
    <div class="col-lg-12">
        <div class="card card-default">
            <div class="card-header card-header-border-bottom">
            </div>
            <div class="card-body">
                <table class="table border" id="order-table">
                    <thead>
                        <tr>
                            <th scope="col">Id</th>
                            <th scope="col">Tabel</th>
                            <th scope="col">Menu</th>
                            <th scope="col">Price</th>
                            <th scope="col">Quantity</th>
                            <th scope="col">SubTotal</th>
                            <th scope="col">Status</th>
                            <th scope="col">Message</th>
                        </tr>
                    </thead>
                </table>
            </div>
        </div>
    </div>
</div>

@endsection

@push('scripts')
<script type="text/javascript" src="{{ asset('js/datatable.js') }}"></script>
<script type="text/javascript">
    const app = new Vue({
        el: '#app',
        data: {
            orders: {},
            dataTable: null,
            userRole: {!! $userRole !!},
        },
        mounted() {
            this.getOrders();
            this.listen();
        },
        methods: {
            getOrders() {
                let status = {
                    1:'Ordered', 2:'Cooked', 3:'Delivered'
                };
                let orders = [];
                this.dataTable = $('#order-table').DataTable({
                    "order": [[ 0, "desc" ]]
                });
                if (this.userRole === 1 || this.userRole === 2) {
                    var url = '/api/order'
                } else if(this.userRole === 3) {
                    var url = '/api/chef'
                } else {
                    var url = '/api/waiter'
                };
                axios.get('/api/order')
                    .then((response) => {
                        this.orders = response.data
                    })
                    .then(data => {
                        this.orders.forEach(order => {
                            order.detail_orders.forEach(detail => {
                                this.dataTable.row.add([
                                    detail.id,
                                    detail.table.name,
                                    detail.menu.name,
                                    detail.menu.price,
                                    detail.quantity,
                                    detail.sub_total,
                                    status[detail.status],
                                    detail.message
                                ]).draw(false)
                            })
                        })
                    })
                    .catch(function (error) {
                        console.log(error);
                    });
            },
            listen() {
                window.Echo.channel('transaction')
                    .listen('.new.transaction', (order) => {
                        this.getOrders();
                    });
            }
        }
    })

</script>
@endpush
