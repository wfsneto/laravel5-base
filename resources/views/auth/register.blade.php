@extends(config('layouts.administration'))

@section('content')
<i class="fa fa-sign-in fa-fw"></i>
{{ trans('modules.auth.sign_up') }}

{!! Form::open([ 'url' => url('/auth/register'), 'class' => 'col s12' ]) !!}
    <div class="row">
        <div class="input-field col s6">
            <i class="fa fa-user prefix"></i>
            {!! Form::label('name', trans('modules.auth.name')) !!}
            {!! Form::text('name') !!}
        </div>

        <div class="input-field col s6">
            <i class="fa fa-envelope-o prefix"></i>
            {!! Form::label('email', trans('modules.auth.email')) !!}
            {!! Form::text('email') !!}
        </div>
    </div>

    <div class="row">
        <div class="input-field col s6">
            <i class="fa fa-key prefix"></i>
            {!! Form::label('password', trans('modules.auth.password')) !!}
            {!! Form::password('password') !!}
        </div>

        <div class="input-field col s6">
            <i class="fa fa-key prefix"></i>
            {!! Form::label('password_confirmation', trans('modules.auth.password_confirmation')) !!}
            {!! Form::password('password_confirmation') !!}
        </div>
    </div>

    <div class="row">
        <button type="submit" class="btn btn-primary right">
            {{ trans('modules.auth.sign_up') }}
        </button>
    </div>
{!! Form::close() !!}
@endsection
