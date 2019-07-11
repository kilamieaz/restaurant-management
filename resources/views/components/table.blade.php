<div class="table-responsive">
    <table class="table table-bordered" id="{{ $table_id }}">
        <thead>
            <tr>
                {{ $thead ?? '' }}
            </tr>
        </thead>
        <tbody>
            <tr>
                {{ $tbody ?? '' }}
            </tr>
        </tbody>
        <tfoot>
            <tr>
                {{ $tfoot ?? '' }}
            </tr>
        </tfoot>
    </table>
</div>
