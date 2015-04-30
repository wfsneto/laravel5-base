<div class="row">
    <div class="col-md-12">
        @if (Session::has('status'))
            <div class="alert alert-success">
                {{ Session::get('status') }}
            </div>
        @endif

        @if(Session::has('success'))
            <div class="alert alert-success">
                <strong>{{ ucfirst(trans('general.success')) }}! </strong>  {!! Session::get('success') !!}
            </div>
        @endif

        @if(Session::has('danger'))
            <div class="alert alert-danger">
                <strong>{{ ucfirst(trans('general.error')) }}! </strong>  {!! Session::get('danger') !!}
            </div>
        @endif

        @if(Session::has('error'))
            <div class="alert alert-danger">
                <strong>{{ ucfirst(trans('general.error')) }}! </strong>  {!! Session::get('error') !!}
            </div>
        @endif

        @if(Session::has('info'))
            <div class="alert alert-info">
                <strong>{{ ucfirst(trans('general.information')) }}! </strong>  {!! Session::get('info') !!}
            </div>
        @endif

        @if(Session::has('warning'))
            <div class="alert alert-warning">
                <strong>{{ ucfirst(trans('general.warning')) }}! </strong>  {!! Session::get('warning') !!}
            </div>
        @endif

        @if ($errors->any())
            <div class="alert alert-danger">
                <strong>Oops!</strong> {{ ucfirst(trans('general.error_title')) }}<br />
            </div>
        @endif
    </div>
</div>
