@if(session('status'))
    <div class="alert alert-success">
        <button type="button" class="close" data-dismiss="alert">&times;</button>
        <strong>Perefecto!</strong>
        {{ session('status') }}
    </div>
@endif