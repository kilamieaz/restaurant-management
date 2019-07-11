@push('styles')
<link rel="stylesheet" href="{{ asset('css/datatable.css') }}">
@endpush

@component('components.table', ['table_id' => $table_id])
@slot('thead')
<th>No</th>
@foreach($columns as $column)
<th>{{ $column['header'] }}</th>
@endforeach
<th>Action</th>
@endslot
@endcomponent

@push('scripts')
<script type="text/javascript" src="{{ asset('js/datatable.js') }}"></script>
<script type="text/javascript">
    $(document).ready(function () {
        $("#{{$table_id}}").DataTable({
            "processing": true,
            "ajax": {
                'url': '{!! route($route_name) !!}',
                "type": "GET",
            }
        });
    });

</script>
@endpush
