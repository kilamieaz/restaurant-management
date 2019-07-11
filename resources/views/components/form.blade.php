<form method="POST" enctype="multipart/form-data">
    @csrf
    @method('POST')
    <div class="modal-header">
        <h5 class="modal-title">Default</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
        </button>
    </div>
    <div class="modal-body">
        <input type="hidden" id="id_hidden" name="id">
        {{ $input ?? '' }}
    </div>
    <div class="modal-footer">
        <button type="button" class="btn btn-danger btn-pill" data-dismiss="modal">Close</button>
        <button type="submit" class="btn btn-primary btn-pill">Submit</button>
    </div>
</form>
