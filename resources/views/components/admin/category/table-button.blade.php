<div class="row">
    <div class="col-md-12 my-2 d-flex justify-content-between">
        <a class="btn btn-primary create-btn"
           href="{{ route("{$route}.create") }}">
            <i class="fas fa-plus-circle"></i>
            {{ MessageService::tr($title) }}
        </a>
        <a href="{{ route("{$route}.trashes") }}" class="btn btn-success create-btn">
            <i class="fas fa-recycle"></i>
            {{ MessageService::tr('Recycle bin') }}
        </a>
    </div>
</div>
