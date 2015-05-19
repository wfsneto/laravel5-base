{{-- Modal --}}
<?php $name = strtolower(str_replace('Controller', '', class_basename($controller))); ?>
<div class="modal fade" id="{{ $name }}_destroy_{{ $id }}" role="dialog">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <span class="close" data-dismiss="modal">
                    <i class="fa fa-times"></i>
                </span>
                <h3 class="modal-title">
                    {{ trans('form.Attention') }}!
                </h3>
            </div>

            <div class="modal-body">
                {{ trans('form.wanna_remove') }}
            </div>

            <div class="modal-footer">
                {!! Form::open([ 'action' => [ $controller . '@destroy', $id ], 'method' => 'DELETE' ]) !!}
                    <span class="btn btn-xs btn-default" data-dismiss="modal">
                        <i class="{{ trans('general.icon_cancel') }}"></i>
                        {{ trans('form.button_cancel') }}
                    </span>

                    <button type="submit" class="btn btn-xs btn-danger">
                        <i class="{{ trans('general.icon_remove') }}"></i>
                        {{ trans('form.button_remove') }}
                    </button>
                {!! Form::close() !!}
            </div>
        </div>
    </div>
</div>
