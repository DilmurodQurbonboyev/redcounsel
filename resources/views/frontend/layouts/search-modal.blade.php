<section class="hide">
    <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <form action="{{ route('search') }}" method="get">
                    @csrf
                    <div class="modal-header">
                        <h5 class="modal-title" id="exampleModalLabel">{{ tr('Search') }}</h5>
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                    <div class="modal-body">
                        <input type="search" class="form-control" name="search" id="search" placeholder="search...">
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">{{tr('Close')}}</button>
                        <button class="btn btn-success" type="submit">{{ tr('Search') }}</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</section>
