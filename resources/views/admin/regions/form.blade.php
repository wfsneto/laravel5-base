{!! Form::model($region, $options) !!}

<div class="form-group">
    <div class="row">
        <div class="col-md-4">
            {!! FormTwbs::text('regions', 'code') !!}
        </div>

        <div class="col-md-8">
            {!! FormTwbs::text('regions', 'name') !!}
        </div>
    </div>
</div>

<div class="form-group">
    <div class="row">
        <div class="col-md-12">
            {!! FormTwbs::submit('regions', [ 'class' => 'btn-block' ]) !!}
        </div>
    </div>
</div>

{!! Form::close() !!}
