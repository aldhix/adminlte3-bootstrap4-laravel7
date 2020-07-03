@props(['label'=>'','name'=>'','value'=>'','inline'=>false,'colLabel'=>'col-4','colInput'=>'col-8','formGroup'=>true])

@if($inline)
@if($formGroup)
<div class="row form-group">
	<label class="{{$colLabel}}">{{ $label }}</label>
@endif 
@else
@if($formGroup)
	<div class="form-group">
	<label>{{ $label }}</label>
@endif	
@endif 
	@if($inline) <div class="{{$colInput}}">@endif
		<textarea 
		{{ $attributes->merge(['class' =>'form-control '.($errors->has($name) ? 'is-invalid' : '')]) }}
		name={{$name}}>{{ old($name,$value) }}</textarea>
		@error($name)
	    <div class="invalid-feedback">{{ $message }}</div>
		@enderror
	@if($inline) </div> @endif
@if($formGroup)</div> @endif
