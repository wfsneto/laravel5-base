@extends(config('layouts.administration'))

@section('content')
<div class="container-fluid">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <div class="panel-heading"><i class="fa fa-key fa-fw"></i> {{ trans('modules.auth.reset_pass') }}</div>
                <div class="panel-body">
                    <form class="form-horizontal" role="form" method="POST" action="{{ url('/password/reset') }}">
                        <input type="hidden" name="_token" value="{{ csrf_token() }}">
                        {{-- <input type="hidden" name="token" value="{{ $token }}"> --}}

                        <div class="form-group">
                            <label class="col-md-3 control-label">
                                {{ trans('modules.auth.email') }}
                            </label>
                            <div class="col-md-7">
                                <div class="input-group">
                                    <span class="input-group-addon"><i class="fa fa-envelope-o"></i></span>
                                    <input type="email" class="form-control" name="email" value="{{ old('email') }}" />
                                </div>
                            </div>
                        </div>

                        <div class="form-group">
                            <label class="col-md-3 control-label">
                                {{ trans('modules.auth.password') }}
                            </label>
                            <div class="col-md-7">
                                <div class="input-group">
                                    <span class="input-group-addon"><i class="fa fa-key"></i></span>
                                    <input type="password" class="form-control" name="password" />
                                </div>
                            </div>
                        </div>

                        <div class="form-group">
                            <label class="col-md-3 control-label">
                                {{ trans('modules.auth.password_confirmation') }}
                            </label>
                            <div class="col-md-7">
                                <div class="input-group">
                                    <span class="input-group-addon"><i class="fa fa-key"></i></span>
                                    <input type="password" class="form-control" name="password_confirmation" />
                                    <span class="input-group-btn">
                                        <button type="submit" class="btn btn-primary">
                                            {{ trans('modules.auth.reset_pass') }}
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
