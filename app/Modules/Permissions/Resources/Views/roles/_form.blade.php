{!! FormTwbs::model($role, $options) !!}

<div class="row">
    <div class="input-field col s3">
        {!! FormTwbs::label('slug', trans('permissions::roles.slug')) !!}
        {!! FormTwbs::text('slug') !!}
    </div>

    <div class="input-field col s9">
        {!! FormTwbs::label('name', trans('permissions::roles.name')) !!}
        {!! FormTwbs::text('name') !!}
    </div>
</div>

<div class="row">
    <div class="input-field col s12">
        {!! FormTwbs::label('description', trans('permissions::roles.description')) !!}
        {!! FormTwbs::textarea('description') !!}
    </div>
</div>

<div class="row">
    <div class="col s12">
        {!! FormTwbs::submit('permissions::roles.role', [ 'class' => 'btn-block right' ]) !!}
    </div>
</div>

{!! Form::close() !!}
