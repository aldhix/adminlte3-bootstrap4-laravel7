@props(['label'=>'','name'=>'','value'=>'','type'=>'text', 'inline'=>false,'colLabel'=>'col-4','colInput'=>'col-8','formGroup'=>true,'append'=>'','prepend'=>''])


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
	@if($append != '' || $prepend != '') <div class="input-group"> @endif
		@if($prepend != '') <div class="input-group-prepend"><span class="input-group-text">{{$prepend}}</span></div>@endif
		<input type="{{ $type }}"
		{{ $attributes->merge(['class' =>'form-control '.($errors->has($name) ? 'is-invalid' : '')]) }}
		name="{{ $name }}" value="{{ old($name,$value) }}"/>
		@if($append != '') <div class="input-group-append"><span class="input-group-text">{{$append}}</span></div>@endif
		@error($name)
	    <div class="invalid-feedback">{{ $message }}</div>
		@enderror
	@if($append != '' || $prepend != '') </div> @endif
 	@if($inline) </div> @endif
@if($formGroup)</div> @endif