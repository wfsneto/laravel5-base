@extends(config('layouts.administration'))

@section('content')
{!! Form::open([ 'url' => url('/auth/login'), 'class' => 'col s12' ]) !!}
    <i class="fa fa-sign-in fa-fw"></i>
    {{ trans('modules.auth.sign_in') }}
    <div class="row">
        <div class="input-field col s6">
            <i class="fa fa-envelope-o prefix"></i>
            {!! Form::label('email', trans('modules.auth.email')) !!}
            {!! Form::text('email') !!}
        </div>

        <div class="input-field col s6">
            <i class="fa fa-key prefix"></i>
            {!! Form::label('password', trans('modules.auth.password')) !!}
            {!! Form::password('password') !!}
        </div>
    </div>

    <div class="row">
        <div class="col s6">
            <input type="checkbox" id="auth_remember" />
            <label for="auth_remember">{{ trans('modules.auth.remember') }}</label>
        </div>

        <div class="col s6">
            <div class="right">
                <button type="submit" class="btn btn-primary">
                    {{ trans('modules.auth.sign_in') }}
                </button>
            </div>
        </div>

        {{-- <div class="col s4 right">
            <a class="right" href="{{ url('/password/email') }}">
                {{ trans('modules.auth.forgot') }}
            </a>
        </div> --}}
    </div>
{!! Form::close() !!}
@endsection
