<?php $name = 'name_' . app()->getLocale() ?>
<div class="card card-primary">
    <div class="card-header">
        <h3 class="card-title">{{ tr('Regions') }}</h3>
    </div>
    <div class="card-body">
        <div class="row">
            <div class="col-md-12 my-2">
                <a class="btn btn-primary create-btn" href="{{ route('regions.create') }}">
                    <i class="fas fa-plus-circle"></i>
                    {{ tr('Create Region') }}
                </a>
            </div>
        </div>
        <div class="table-responsive">
            <table class="table table-hover table-wrap">
                <thead>
                <tr>
                    <th>{{ tr('Id') }}</th>
                    <th>{{ tr('Parent Region') }}</th>
                    <th>{{ tr('Title') }}</th>
                    <th></th>
                </tr>
                <tr>
                    <th>
                        <input class="form-control" type="number" wire:model.debounce.300ms="filter_id">
                    </th>
                    <th>
                        <select class="form-control" wire:model.debounce.300ms="filter_parent_id">
                            <option></option>
                            @foreach($regionLists as $list)
                                <option value="{{ $list->id }}">{{ $list->{$name} }}</option>
                            @endforeach
                        </select>
                    </th>
                    <th>
                        <input class="form-control" type="text" wire:model.debounce.300ms="filter_name">
                    </th>
                    <th></th>
                </tr>
                </thead>
                <tbody>
                @foreach ($regions as $region)
                    <tr>
                        <td>{{ $region->id }}</td>
                        <td>{{ $region->parent->{$name} ?? '' }}</td>
                        <td>{{ $region->{$name} ?? '' }}</td>
                        <td class="d-flex">
                            <a class="btn btn-primary m-1" href="{{ route('regions.show', $region->id) }}"
                               title="View" aria-label="View"><span class="fas fa-eye"></span>
                            </a>
                            <a class="btn btn-primary m-1" href="{{ route('regions.edit', $region->id) }}"
                               title="Янгилаш" aria-label="Янгилаш"><span class="fas fa-pencil-alt"></span>
                            </a>
                            <form method="POST" action="{{ route('regions.destroy', $region->id) }}">
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
            <span class="d-flex pt-2 justify-content-end"> {{ $regions->links() }}</span>
        </div>
    </div>
</div>
