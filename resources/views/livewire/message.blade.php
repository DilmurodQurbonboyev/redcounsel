<div class="card">
    <div class="card-body">
        <div class="row">
            <div class="col-md-12 my-2 d-flex justify-content-between">
                <a href="{{ route('messages.create') }}" class="btn btn-primary mb-4">
                    <i class="fa-solid fa-circle-plus"></i>
                    {{ MessageService::tr('Create Message') }}
                </a>
            </div>
        </div>
        <div class="table-responsive">
            <table class="table table-hover">
                <thead>
                <tr>
                    <th>{{ MessageService::tr('Id') }}</th>
                    <th>{{ MessageService::tr('Key') }}</th>
                    <th>{{ MessageService::tr('Title') }}</th>
                    <th>{{ MessageService::tr('Messages') }}</th>
                    <th></th>
                </tr>
                <tr>
                    <th>
                        <input class="form-control" type="number" wire:model.debounce.300ms="searchId">
                    </th>
                    <th>
                        <input class="form-control" type="text" wire:model.debounce.300ms="searchKey">
                    </th>
                    <th>
                        <input class="form-control" type="text" wire:model.debounce.300ms="searchTitle">
                    </th>
                    <th></th>
                    <th></th>
                </tr>
                </thead>
                <tbody>
                @foreach ($messages as $message)
                    <tr>
                        <td>{{ $message->id }}</td>
                        <td>{{ $message->key ?? '' }}</td>
                        <td>{{ $message->title ?? '' }}</td>
                        <td width="200px">
                            @foreach(Config::get('laravellocalization.supportedLocales') as $key => $lang)
                                @if($message->translate($key)->title)
                                    <span class="badge bg-success">{{$lang['native']}}</span>
                                @else
                                    <span class="badge bg-danger">{{$lang['native']}}</span>
                                @endif
                            @endforeach
                        </td>
                        <td class="d-flex">
                            <a class="btn btn-primary m-1" href="{{ route('messages.show', $message->id) }}"
                               title="View" aria-label="View"><span class="fas fa-eye"></span>
                            </a>
                            <a class="btn btn-primary m-1" href="{{ route('messages.edit', $message->id) }}"
                               title="Янгилаш" aria-label="Янгилаш"><span class="fas fa-pencil-alt"></span>
                            </a>
                            <form method="POST" action="{{ route('messages.destroy', $message->id) }}">
                                @csrf
                                <input name="_method" type="hidden" value="DELETE">
                                <button type="submit" class="btn btn-primary deleteBtn m-1">
                                    <span class="fas fa-eraser"></span></button>
                            </form>
                        </td>
                    </tr>
                @endforeach
                </tbody>
            </table>
            <span class="d-flex pt-2 justify-content-center">{{ $messages->links() }}</span>
        </div>
    </div>
</div>
