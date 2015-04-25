@extends(env('LAYOUT_ADMIN'))

@section('content')
<div class="panel panel-default">
	@include('admin/shared/panel_heading')

    <div class="panel-body">
        @if($regions->isEmpty())
            {{ Message::not_found('regions', 'f') }}, clique
            <a href="{{ action('Admin\RegionsController@create') }}">aqui</a> para adicionar
        @else
            <table class="table">
                <thead>
                    <tr>
                        <th>{{ trans('modules.regions.name') }}</th>
                        <th class="actions text-right">{{ trans('modules.actions') }}</th>
                    </tr>
                </thead>
                <tbody>
                @foreach($regions as $key => $region)
                    <tr>
                        <td>[{{ $region->code }}] {{ $region->name }}</td>
                        <td>
                            <div class="text-right">
                                {!! Link::edit('Regions', $region->id, 'Admin') !!}
                                {!! Link::destroy('region', $region->id) !!}
                            </div>

                            @include('admin/shared/modal_destroy', [ 'name' => 'region', 'id' => $region->id ])
                        </td>
                    </tr>
                @endforeach
                </tbody>
            </table>
        @endif
    </div>
</div>
@endsection
