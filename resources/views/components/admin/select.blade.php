@props(['label'=>'','name'=>'','value'=>'','option'=>[]])

<?php $value = old($name,$value)  ?>
<div class="form-group">
	<label>{{ $label }}</label>
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
	@error($name)
    <div class="invalid-feedback">{{ $message }}</div>
	@enderror
</div>