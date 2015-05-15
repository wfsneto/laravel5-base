@extends(config('layouts.administration'))

@section('content')
<div class="panel panel-default">
    @include('admin/shared/panel_heading', [ 'module' => 'permissions' ])

    <div class="panel-body">
        @include('permissions::roles/_form', [ 'options' => [
            'method' => 'PATCH',
            'action' => [ '\App\Modules\Permissions\Http\Controllers\RolesController@update', $role->id ]
        ] ])
    </div>
</div>
@endsection
