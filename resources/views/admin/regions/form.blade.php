{!! FormTwbs::model($region, $options) !!}

<div class="row">
    <div class="input-field col s4">
        {!! FormTwbs::label('code', trans('modules.regions.code')) !!}
        {!! FormTwbs::text('code') !!}
    </div>

    <div class="input-field col s8">
        {!! FormTwbs::label('name', trans('modules.regions.name')) !!}
        {!! FormTwbs::text('name') !!}
    </div>
</div>

<div class="row">
    <div class="col s12">
        {!! FormTwbs::submit('modules.regions.region', [ 'class' => 'btn-block' ]) !!}
    </div>
</div>

{!! Form::close() !!}
