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
<input type="hidden" name="code" value={{ $code }}>
@endslot
@endcomponent

@push('scripts')
<script type="text/javascript" src="{{ asset('js/datatable.js') }}"></script>
<script type="text/javascript">
    $(document).ready(function () {
        var id = $("input[name='code']").val();
        if (id) url = "{!! route('transaction.show',"$code") !!}";

        else url = "{!! route($route_name) !!}";
        $("#{{$table_id}}").DataTable({
            "responsive": true,
            "processing": true,
            "pageLength": 20,
            "ajax": {
                'url': url,
                "type": "GET",
            }
        });
    });

</script>
@endpush
