@extends(config('layouts.administration'))

@section('content')
<div class="panel panel-default">
	@include('admin/shared/panel_heading')

    <div class="panel-body">
        @if($regions->isEmpty())
            {{ Message::not_found('regions', 'f') }}, {!! Link::click_to_create('region', 'Admin') !!}
        @else
            <table class="table">
                <thead>
                    <tr>
                        <th>{{ trans('modules.regions.name') }}</th>
                        <th class="actions right"></th>
                    </tr>
                </thead>
                <tbody>
                @foreach($regions as $key => $region)
                    <tr>
                        <td>[{{ $region->code }}] {{ $region->name }}</td>
                        <td>
                            <div class="right">
                                <!-- Dropdown Trigger -->
                                <a class="dropdown-button btn blue" href="#!" data-activates="regions-actions">{{ trans('general.actions') }}</a>

                                <!-- Dropdown Structure -->
                                <ul id="regions-actions" class="dropdown-content">
                                    <li><a href="#!"><i class="fa fa-pencil"></i> editar</a></li>
                                    <li><a href="#!"><span class="red-text"><i class="fa fa-times"></i> apagar</a></span></li>
                                </ul>
                                {!! Link::edit('region', $region->id, 'Admin') !!}
                                {!! Link::destroy('region', $region->id) !!}
                            </div>

                            @include('admin/shared/modal_destroy', [ 'controller' => 'Admin\RegionsController', 'id' => $region->id ])
                        </td>
                    </tr>
                @endforeach
                </tbody>
            </table>
            @include('admin/shared/pagination', [ 'collection' => $regions ])
        @endif
    </div>
</div>
@endsection
