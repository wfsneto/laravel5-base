@extends(config('layouts.administration'))

@section('content')
<div class="container-fluid">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <div class="panel-heading"><i class="fa fa-key fa-fw"></i> {{ trans('modules.auth.forgot') }}</div>
                <div class="panel-body">
                    <form class="form-horizontal" role="form" method="POST" action="{{ url('/password/email') }}">
                        <input type="hidden" name="_token" value="{{ csrf_token() }}">

                        <div class="form-group">
                            <label class="col-md-3 control-label">{{ trans('modules.auth.email') }}</label>
                            <div class="col-md-7">
                                <div class="input-group">
                                    <span class="input-group-addon"><i class="fa fa-envelope-o"></i></span>
                                    <input type="email" class="form-control" name="email" value="{{ old('email') }}">
                                    <span class="input-group-btn">
                                        <button type="submit" class="btn btn-primary">
                                            {{ trans('modules.auth.send_pass') }}
                                        </button>
                                    </span>
                                </div>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
