@extends(config('layouts.administration'))

@section('content')
<div class="panel panel-default">
    @include('admin/shared/panel_heading')

    <div class="panel-body">
        @include('admin/regions/form', [ 'options' => [
            'method' => 'POST',
            'action' => 'Admin\RegionsController@store'
        ] ])
    </div>
</div>
@endsection
