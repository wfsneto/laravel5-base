<div class="row">
    <div class="col-md-12">
        @if (Session::has('status'))
            <div class="teal lighten-4">
                {{ Session::get('status') }}
            </div>
        @endif

        @if(Session::has('success'))
            <div class="teal lighten-4">
                <strong>{{ ucfirst(trans('general.success')) }}! </strong>  {!! Session::get('success') !!}
            </div>
        @endif

        @if(Session::has('danger'))
            <div class="white-text red lighten-1">
                <strong>{{ ucfirst(trans('general.error')) }}! </strong>  {!! Session::get('danger') !!}
            </div>
        @endif

        @if(Session::has('error'))
            <div class="white-text red lighten-1">
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
            <ul class="white-text red lighten-1">
                <li><strong>Oops!</strong> {{ ucfirst(trans('general.error_title')) }}</li>

                @if($errors->any())
                    @foreach($errors->getMessages('default') as $key => $messages)
                        @foreach ($messages as $message)
                            <li><small>* {{ ucfirst(strtolower($message)) }}</small></li>
                        @endforeach
                    @endforeach
                @endif
            </ul>
        @endif
    </div>
</div>
