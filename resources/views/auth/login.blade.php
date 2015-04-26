@extends(env('LAYOUT_ADMIN'))

@section('content')
<div class="container-fluid">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <div class="panel-heading"><i class="fa fa-sign-in fa-fw"></i> {{ trans('modules.auth.sign_in') }}</div>
                <div class="panel-body">
                    <form class="form-horizontal" role="form" method="POST" action="{{ url('/auth/login') }}">
                        <input type="hidden" name="_token" value="{{ csrf_token() }}">

                        <div class="form-group">
                            <label class="col-md-3 control-label">{{ trans('modules.auth.email') }}</label>
                            <div class="col-md-7">

                                <div class="input-group">
                                    <span class="input-group-addon"><i class="fa fa-envelope-o"></i></span>
                                    <input type="email" class="form-control" name="email" value="{{ old('email') }}" />
                                </div>
                            </div>
                        </div>

                        <div class="form-group">
                            <label class="col-md-3 control-label">{{ trans('modules.auth.password') }}</label>
                            <div class="col-md-7">
                                <div class="input-group">
                                    <span class="input-group-addon"><i class="fa fa-key"></i></span>
                                    <input type="password" class="form-control" name="password" />
                                    <span class="input-group-btn">
                                        <button type="submit" class="btn btn-primary">
                                            {{ trans('modules.auth.sign_in') }}
                                        </button>
                                    </span>
                                </div>
                            </div>
                        </div>

                        <div class="form-group">
                            <div class="col-md-2 col-md-offset-3">
                                <div class="checkbox">
                                    <label>
                                        <input type="checkbox" name="remember"> {{ trans('modules.auth.remember') }}
                                    </label>
                                </div>
                            </div>

                            <div class="col-md-4">
                                <a class="btn btn-link" href="{{ url('/password/email') }}">
                                    {{ trans('modules.auth.forgot') }}
                                </a>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
