@extends(config('layouts.administration'))

@section('content')
<div class="panel panel-default">
    @include('admin/shared/panel_heading', [ 'module' => 'permissions' ])
</div>
@endsection
