@props(['label'=>'','name'=>'','value'=>''])

<div class="form-group">
	<label>{{ $label }}</label>
	<textarea 
	{{ $attributes->merge(['class' =>'form-control '.($errors->has($name) ? 'is-invalid' : '')]) }}
	name={{$name}}>{{ old($name,$value) }}</textarea>
	@error($name)
    <div class="invalid-feedback">{{ $message }}</div>
	@enderror
</div>