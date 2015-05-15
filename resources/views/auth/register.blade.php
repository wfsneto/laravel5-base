@extends(config('layouts.administration'))

@section('content')
<div class="container-fluid">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <div class="panel-heading">
                    <i class="fa fa-user-plus"></i>
                    {{ trans('modules.auth.sign_up') }}
                </div>
                <div class="panel-body">
                    <form class="form-horizontal" role="form" method="POST" action="{{ url('/auth/register') }}">
                        <input type="hidden" name="_token" value="{{ csrf_token() }}">

                        <div class="form-group">
                            <label class="col-md-3 control-label">
                                {{ trans('modules.auth.name') }}
                            </label>
                            <div class="col-md-7">
                                <div class="input-group">
                                    <span class="input-group-addon"><i class="fa fa-user"></i></span>
                                    <input type="text" class="form-control" name="name" value="{{ old('name') }}">
                                </div>
                            </div>
                        </div>

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
                                            {{ trans('modules.auth.sign_up') }}
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
