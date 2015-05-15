{!! FormTwbs::model($role, $options) !!}

<div class="row">
    <div class="col-md-3">
        <div class="{{ FormTwbs::classDivError('slug')}}">
            {!! FormTwbs::label('slug', trans('permissions::roles.slug')) !!}
            {!! FormTwbs::text('slug') !!}
        </div>
    </div>

    <div class="col-md-9">
        <div class="{{ FormTwbs::classDivError('name')}}">
            {!! FormTwbs::label('name', trans('permissions::roles.name')) !!}
            {!! FormTwbs::text('name') !!}
        </div>
    </div>
</div>

<div class="row">
    <div class="col-md-12">
        {!! FormTwbs::submit('permissions::roles.role', [ 'class' => 'btn-block' ]) !!}
    </div>
</div>

{!! Form::close() !!}
