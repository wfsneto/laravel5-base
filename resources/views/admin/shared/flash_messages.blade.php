<div class="row">
    <div class="col-md-12">
        @if (Session::has('status'))
            <div class="alert alert-success">
                {{ Session::get('status') }}
            </div>
        @endif

        @if(Session::has('success'))
            <div class="alert alert-success">
                <strong>{{ ucfirst(trans('modules.success')) }}! </strong>  {!! Session::get('success') !!}
            </div>
        @endif

        @if(Session::has('danger'))
            <div class="alert alert-danger">
                <strong>{{ ucfirst(trans('modules.error')) }}! </strong>  {!! Session::get('danger') !!}
            </div>
        @endif

        @if(Session::has('error'))
            <div class="alert alert-danger">
                <strong>{{ ucfirst(trans('modules.error')) }}! </strong>  {!! Session::get('error') !!}
            </div>
        @endif

        @if(Session::has('info'))
            <div class="alert alert-info">
                <strong>{{ ucfirst(trans('modules.information')) }}! </strong>  {!! Session::get('info') !!}
            </div>
        @endif

        @if(Session::has('warning'))
            <div class="alert alert-warning">
                <strong>{{ ucfirst(trans('modules.warning')) }}! </strong>  {!! Session::get('warning') !!}
            </div>
        @endif

        @if (count($errors) > 0)
            <div class="alert alert-danger">
                <strong>Oops!</strong> {{ ucfirst(trans('modules.error_title')) }}.<br />
                <ul>
                    @foreach ($errors->all() as $error)
                        <li>{{ $error }}</li>
                    @endforeach
                </ul>
            </div>
        @endif
    </div>
</div>
