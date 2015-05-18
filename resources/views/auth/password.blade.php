@extends(config('layouts.administration'))

@section('content')
{!! Form::open([ 'url' => url('/auth/email'), 'class' => 'col s12' ]) !!}
  <i class="fa fa-key fa-fw"></i>
  {{ trans('modules.auth.forgot') }}
  <div class="row">
    <div class="input-field col s12">
      {!! Form::label('email', trans('modules.auth.email')) !!}
      {!! Form::text('email') !!}
    </div>
  </div>

  <div class="row">
    <div class="col s12">
      <button type="submit" class="btn btn-primary">
        {{ trans('modules.auth.send_pass') }}
      </button>
    </div>
  </div>
{!! Form::close() !!}
@endsection


