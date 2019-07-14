<div class="table-responsive ">
    <table class="table table-bordered display responsive" id="{{ $table_id }}">
        <thead class="thead-dark">
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
