{{-- Modal --}}
<?php $name = strtolower(str_replace('Controller', '', class_basename($controller))); ?>

<div id="{{ $name }}_destroy_{{ $id }}" class="modal bottom-sheet">
<div class="modal-content">
    <h4>{{ trans('form.Attention') }}!</h4>
    <div class="row">
        <div class="col s6">
            {{ trans('form.wanna_remove') }}
        </div>
        <div class="col s6">
            {!! Form::open([ 'action' => [ $controller . '@destroy', $id ], 'method' => 'DELETE' ]) !!}
            <button type="submit" class="btn-flat right waves-effect waves-light">
                <i class="{{ trans('general.icon_remove') }}"></i>
                {{ trans('form.button_remove') }}
            </button>
            {!! Form::close() !!}
        </div>
    </div>
    <ul class="">
        <li class="collection-item avatar">
        </li>
    </ul>
</div>
</div>
