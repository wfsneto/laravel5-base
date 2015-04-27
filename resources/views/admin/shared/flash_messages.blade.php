<div class="row">
    <div class="col-md-12">
        @if (Session::has('status'))
            <div class="alert alert-success">
                {{ Session::get('status') }}
            </div>
        @endif

        @if(Session::has('success'))
            <div class="container">
                <div class="alert alert-success">
                    <strong>Success! </strong>  {!! Session::get('success') !!}
                </div>
            </div>
        @endif

        @if(Session::has('danger'))
            <div class="container">
                <div class="alert alert-danger">
                    <strong>Error! </strong>  {!! Session::get('danger') !!}
                </div>
            </div>
        @endif

        @if(Session::has('error'))
            <div class="container">
                <div class="alert alert-danger">
                    <strong>Error! </strong>  {!! Session::get('error') !!}
                </div>
            </div>
        @endif

        @if(Session::has('info'))
            <div class="container">
                <div class="alert alert-info">
                    <strong>Information! </strong>  {!! Session::get('info') !!}
                </div>
            </div>
        @endif

        @if(Session::has('warning'))
            <div class="container">
                <div class="alert alert-warning">
                    <strong>Warning! </strong>  {!! Session::get('warning') !!}
                </div>
            </div>
        @endif

        @if (count($errors) > 0)
            <div class="alert alert-danger">
                <strong>Oops!</strong> Ocorreu alguns erros.<br />
                <ul>
                    @foreach ($errors->all() as $error)
                        <li>{{ $error }}</li>
                    @endforeach
                </ul>
            </div>
        @endif
    </div>
</div>
