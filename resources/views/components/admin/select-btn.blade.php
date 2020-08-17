@props(['label'=>'','name'=>'','value'=>'','option'=>[], 'inline'=>false,'colLabel'=>'col-sm-4','colInput'=>'col-sm-8','formGroup'=>true,'append'=>'','prepend'=>'','type'=>"button",'btnClass'=>'btn btn-outline-secondary'])

<?php $value = old($name,$value)  ?>

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
		@if($prepend != '') <div class="input-group-prepend"><button class="{{$btnClass}}" type="{{$type}}">{{$prepend}}</button></div>@endif
		<select name="{{ $name }}"
		{{ $attributes->merge(['class' =>'form-control '.($errors->has($name) ? 'is-invalid' : '')]) }}>
			<option value="" @if($value == '') selected @endif>
				{{ $slot == '' ? 'Pilih : ' : $slot  }}
			</option>
			@foreach($option as $opt)
				<option value="{{$opt['value']}}" @if($value == $opt['value']) selected @endif>
					{{$opt['label']}}
				</option>
			@endforeach
		</select>
		@if($append != '') 
			<div class="input-group-append">
				@if($appendType != '')
				<span class="input-group-text">{{$append}}</span>
				@else
				<button class="{{$btnClass}}" type="{{$appendType}}">{{$append}}</button>
				@endif
			</div>
		@endif
		@error($name)
	    <div class="invalid-feedback">{{ $message }}</div>
		@enderror
		@if($append != '' || $prepend != '') </div> @endif
	@if($inline) </div> @endif
@if($formGroup)</div> @endif
