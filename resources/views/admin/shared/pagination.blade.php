<div class="row">
    <div class="col-md-12 text-center">
        @if($collection->hasMorePages())
            {!! $collection->render() !!}
        @endif
    </div>
</div>

