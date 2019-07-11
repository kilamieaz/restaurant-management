<div class="modal fade" id="{{ $modal_id }}" tabindex="-1" role="dialog" aria-labelledby="{{ $modal_id }}"
    aria-hidden="true">
    <div class="modal-dialog modal-lg" role="document">
        <div class="modal-content">
            @component('components.form')
            @slot('input')
            @foreach($inputs as $input)
            @if ($input['type'] == 'select')
            <div class="form-group">
                <label for="{{ $input['name'] }}" id="{{ $input['label_id'] }}">{{ $input['header'] }}</label>
                <select data-placeholder="{{ $input['header'] }}" class="form-control select2-modal"
                    id="{{ $input['name'] }}" name="{{ $input['name'] }}">
                    @forelse ($input['value'] as $item)
                    <option value="{{ $item->selectValue() }}">{{ $item->selectText() }}</option>
                    @empty
                    <option disabled>-- No Data --</option>
                    @endforelse
                </select>
            </div>
            @elseif($input['type'] == 'year')
            <div class="form-group">
                <label for="{{ $input['name'] }}" class="col-form-label"
                    id="{{ $input['label_id'] }}">{{ $input['header'] }}</label>
                <input data-date-format="yyyy" class="form-control" id="{{ $input['name'] }}"
                    name="{{ $input['name'] }}" value="{{ old($input['name']) }}" placeholder="{{ $input['header'] }}">
            </div>
            @elseif($input['type'] == 'date')
            <div class="form-group">
                <label for="{{ $input['name'] }}" class="col-form-label"
                    id="{{ $input['label_id'] }}">{{ $input['header'] }}</label>
                <input data-date-format="dd/mm/yyyy" class="form-control" id="{{ $input['name'] }}"
                    name="{{ $input['name'] }}" value="{{ old($input['name']) }}" placeholder="{{ $input['header'] }}">
            </div>
            @else
            <div class="form-group">
                <label for="{{ $input['name'] }}" class="col-form-label"
                    id="{{ $input['label_id'] }}">{{ $input['header'] }}</label>
                <input type="{{ $input['type'] }}" class="form-control" id="{{ $input['name'] }}"
                    name="{{ $input['name'] }}" value="{{ old($input['name']) }}" placeholder="{{ $input['header'] }}">
            </div>
            @endif
            @endforeach
            @endslot
            @endcomponent
        </div>
    </div>
</div>

@push('scripts')
<script type="text/javascript">
    $(document).ready(function () {
        $(".select2-modal").select2();
    });
</script>
@endpush
