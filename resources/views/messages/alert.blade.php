@if (session('success'))
<div class="alert alert-success alert-dismissible fade show" role="alert">
    <ul>
        <li>
            <strong>{{session('success')}}</strong>
            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
            <span aria-hidden="true">&times;</span>
        </button>
        </li>
    </ul>
</div>
@endif

@if (session('error'))
<div class="alert alert-success alert-dismissible fade show" role="alert">
    <ul>
        <li>
            <strong>{{session('error')}}</strong>
            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
            <span aria-hidden="true">&times;</span>
        </button>
        </li>
    </ul>
</div>
@endif