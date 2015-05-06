{!! FormTwbs::model($region, $options) !!}

<div class="row">
    <div class="col-md-4">
        <div class="{{ FormTwbs::class_div_error('code')}}">
            {!! FormTwbs::label('code', trans('modules.regions.code')) !!}
            {!! FormTwbs::text('code') !!}
        </div>
    </div>

    <div class="col-md-8">
        <div class="{{ FormTwbs::class_div_error('name')}}">
            {!! FormTwbs::label('name', trans('modules.regions.name')) !!}
            {!! FormTwbs::text('name') !!}
        </div>
    </div>
</div>

<div class="row">
    <div class="col-md-12">
        {!! FormTwbs::submit('regions', [ 'class' => 'btn-block' ]) !!}
    </div>
</div>

{!! Form::close() !!}
