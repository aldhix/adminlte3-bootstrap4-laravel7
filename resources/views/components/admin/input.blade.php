@props(['label'=>'','name'=>'','value'=>'','type'=>'text'])

<div class="form-group">
	<label>{{ $label }}</label>
	<input type="{{ $type }}"
	{{ $attributes->merge(['class' =>'form-control '.($errors->has($name) ? 'is-invalid' : '')]) }}
	name="{{ $name }}" value="{{ old($name,$value) }}"/>
	@error($name)
    <div class="invalid-feedback">{{ $message }}</div>
	@enderror
</div>