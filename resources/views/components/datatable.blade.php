@push('styles')
<link rel="stylesheet" href="{{ asset('css/datatable.css') }}">
@endpush

@component('components.table', ['table_id' => $table_id])
@slot('thead')
<th class="all">No</th>
@foreach($columns as $column)
<th class="{{ $column['class']}}">{{ $column['header'] }}</th>
@endforeach
{{-- <th class="all" id="action">Action</th> --}}
@endslot
@endcomponent

@push('scripts')
<script type="text/javascript" src="{{ asset('js/datatable.js') }}"></script>
<script type="text/javascript" src="https://cdn.datatables.net/responsive/2.2.3/js/dataTables.responsive.min.js"></script>
<script type="text/javascript">
    $(document).ready(function () {
        $("#{{$table_id}}").DataTable({
            "responsive": true,
            "processing": true,
            "ajax": {
                'url': '{!! route($route_name) !!}',
                "type": "GET",
            }
        });
    });

</script>
@endpush
