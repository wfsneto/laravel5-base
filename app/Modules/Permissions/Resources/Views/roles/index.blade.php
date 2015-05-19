@extends(config('layouts.administration'))

@section('content')
<div class="panel panel-default">
    @include('admin/shared/panel_heading', [ 'module' => 'permissions' ])

    <div class="panel-body">
        @if($roles->isEmpty())
            {{ Message::not_found('permissions::roles.role', 'f') }}
        @else
            <table class="table">
                <thead>
                    <tr>
                        <th>{{ trans('permissions::roles.slug') }}</th>
                        <th>{{ trans('permissions::roles.name') }}</th>
                        <th class="actions text-right"></th>
                    </tr>
                </thead>
                <tbody>
                @foreach($roles as $key => $role)
                    <tr>
                        <td width="30">{{ $role->slug }}</td>
                        <td> {{ $role->name }}</td>
                        <td>
                            <div class="right">
                                <a href="{{ action('\App\Modules\Permissions\Http\Controllers\RolesController@users', $role->id) }}" class="tooltipped modal-trigger waves-effect waves-light btn blue" data-tooltip="usuários" data-position="top">
                                    <i class="fa fa-users"></i>
                                </a>
                                {!! Link::edit('role', $role->id, '\App\Modules\Permissions\Http\Controllers') !!}
                                {!! Link::destroy('role', $role->id) !!}
                            </div>

                            @include('admin/shared/modal_destroy', [ 'controller' => '\App\Modules\Permissions\Http\Controllers\RolesController', 'id' => $role->id ])
                        </td>
                    </tr>
                @endforeach
                </tbody>
            </table>
            @include('admin/shared/pagination', [ 'collection' => $roles ])
        @endif
    </div>
</div>
@endsection
