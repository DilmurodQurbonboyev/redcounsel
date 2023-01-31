<div class="card card-primary">
    <div class="card-header">
        <h3 class="card-title">{{ tr('Answers') }}</h3>
    </div>
    <div class="card-body">
        <div class="row">
            <div class="col-md-12 my-2 d-flex justify-content-between">
                <a class="btn btn-primary create-btn" href="{{ route('answers.create') }}">
                    <i class="fas fa-plus-circle"></i>
                    {{ tr('Create Answer') }}
                </a>
            </div>
        </div>
        <div class="table-responsive">
            <table class="table table-hover table-wrap">
                <thead>
                    <tr>
                        <th>{{ tr('Id') }}</th>
                        <th>{{ tr('Category') }}</th>
                        <th>{{ tr('Title') }}</th>
                        <th>{{ tr('Slug') }}</th>
                        <th>{{ tr('Status') }}</th>
                        <th>{{ tr('Creator') }}</th>
                        <th style="width: 100px"></th>
                    </tr>
                    <tr>
                        <th>
                            <input class="form-control" type="number" wire:model.debounce.300ms="filter_id" />
                        </th>
                        <th>
                            <select class="custom-select rounded-0 select2bs4"
                                wire:model.debounce.300ms="filter_category">
                                <option value></option>
                                @foreach ($answersCategories as $answersCategory)
                                <option value="{{ $answersCategory->id }}">{{ $answersCategory->title }}</option>
                                @endforeach
                            </select>
                        </th>
                        <th>
                            <input class="form-control" type="text" wire:model.debounce.300ms="filter_title">
                        </th>
                        <th>
                            <input class="form-control" type="text" wire:model.debounce.300ms="filter_slug">
                        </th>
                        <th>
                            <select class="form-control" wire:model.debounce.300ms="filter_status">
                                <option value></option>
                                <option value="2">{{ tr('Active') }}</option>
                                <option value="1">{{ tr('Inactive') }}</option>
                            </select>
                        </th>
                        <th>
                            <select class="custom-select rounded-0 select2bs4" wire:model.debounce.300ms="filter_user">
                                <option value></option>
                                @foreach ($users as $u)
                                <option value="{{ $u->id }}">{{ $u->name }}</option>
                                @endforeach
                            </select>
                        </th>
                        <th></th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($answers as $answer)
                    <tr>
                        <td>{{ $answer->id }}</td>
                        <td>
                            @if ($answer->category)
                            {{ $answer->category->title }}
                            @else
                            {{ tr('Not set') }}
                            @endif
                        </td>
                        <td>{{ Illuminate\Support\Str::of($answer->title)->words(4) }}</td>
                        <td>{{ $answer->slug }}</td>
                        <td>{!! Illuminate\Support\Str::of($answer->description)->words(6) !!}</td>
                        <td>{{ $answer->count_view }}</td>
                        <td>
                            @if ($answer->status == 2)
                            <span class="badge bg-success">{{ tr('Active') }}</span>
                            @else
                            <span class="badge bg-danger">{{ tr('Inactive') }}</span>
                            @endif
                        </td>
                        <td>{{ Str::ucfirst($answer->users->name) }}</td>
                        <td class="d-flex">
                            <a class="btn btn-primary m-1" href="{{ route('answers.show', $answer->id) }}" title="View"
                                aria-label="View"><span class="fas fa-eye"></span>
                            </a>
                            <a class="btn btn-primary m-1" href="{{ route('answers.edit', $answer->id) }}" title="Янгилаш"
                                aria-label="Янгилаш"><span class="fas fa-pencil-alt"></span>
                            </a>
                            <form method="POST" action="{{ route('answers.destroy', $answer->id) }}">
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
            <span class="d-flex pt-2 justify-content-end"> {{ $answers->links() }}</span>
        </div>
    </div>
</div>
