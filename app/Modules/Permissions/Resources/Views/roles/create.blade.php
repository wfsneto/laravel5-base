@extends(config('layouts.administration'))

@section('content')
<div class="panel panel-default">
    @include('admin/shared/panel_heading', [ 'module' => 'permissions' ])

    <div class="panel-body">
        @include('permissions::roles/_form', [ 'options' => [
            'method' => 'POST',
            'action' => '\App\Modules\Permissions\Http\Controllers\RolesController@store'
        ] ])
    </div>
</div>
@endsection
