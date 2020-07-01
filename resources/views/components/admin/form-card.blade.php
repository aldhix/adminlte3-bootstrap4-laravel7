@props(['type'=>'primary','header'=>'','footer'=>''])

<div class="card card-{{$type}}">
    <div class="card-header">
      <h3 class="card-title">{{ $header }}</h3>
    </div>
    <form {{$attributes}}>
    	<div class="card-body">
    		{{$slot}}
    	</div>
	    <div class="card-footer">
	    	{{$footer}}
	    </div>
    </form>
</div>
