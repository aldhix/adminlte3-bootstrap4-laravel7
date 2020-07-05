@props(['label'=>'','name'=>'', 'inline'=>false,'colLabel'=>'col-sm-4','colInput'=>'col-sm-8','formGroup'=>true,'width'=>120,'height'=>120])

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
		<img src="#" id="img-load" style="display:none;">
		<div id="preview" style="background:url({{url('images/no-image.png')}})" class="mb-1">
			<div id="band-img" style="display:none;"></div>
		</div>
		<button type="button" class="btn btn-link" id="loadImage" style="width:120px;">Cari File</button>
		<input type="file" id="inputGambar" hidden
		{{ $attributes->merge(['class' =>'form-control '.($errors->has($name) ? 'is-invalid' : '')]) }}
		name="{{ $name }}" />
		@error($name)
	    <div class="invalid-feedback">{{ $message }}</div>
		@enderror
		<div class="text-danger" id="invalid-image" style="display:none;"></div>
 	@if($inline) </div> @endif
@if($formGroup)</div> @endif

@push('css')
<style type="text/css">
#band-img{
	width: 120px;
	height: 120px;
	background-color: grey;
	opacity: 0.75;
	background-repeat: no-repeat;
	background-position: center center;
	border-radius: 10px;
	background-image: url({{url('images/banned.png')}});
}
#preview {
  width: 120px;
  height: 120px; 
  background-repeat: no-repeat;
  background-size: 120px;
  background-position: center center;
  border-radius: 10px;
}
</style>
@endpush

@push('js')
<script type="text/javascript">

var img_default = "{{url('images/no-image.png')}}";
var clone_input = '<input type="file" name="{{$name}}" class="form-control" id="inputGambar" hidden />';

function filePreview(input) {
    if (input.files && input.files[0]) {
        var reader = new FileReader();
        reader.onload = function (e) {
        	$('#img-load').attr('src',e.target.result).on('load', function() {
        	   imgSize({{$width}},{{$height}});
			   $('#preview').css({
	            	'background':'url('+e.target.result+')',
	            	'background-size':120,
	            	'background-position':'center center',
	            	'background-repeat':'no-repeat'
	            });
			});
        }
        reader.readAsDataURL(input.files[0]);
    }
}

 function imgSize(minWidth,minHeight){
    var myImg = document.querySelector("#img-load");
    var realWidth = myImg.naturalWidth;
    var realHeight = myImg.naturalHeight;
    
    console.log(realWidth+'x'+realHeight);
    if( realWidth >= minWidth && realHeight >= minHeight) {
    	$("#band-img").hide();
    } else {
    	$("#band-img").show();
    	$('#inputGambar').replaceWith(clone_input);
    	$("#invalid-image").html('Ukuran image min witdh '+minWidth+' x min height '+minHeight).show();
    }
}

function getExtension(filename) {
  var parts = filename.split('.');
  return parts[parts.length - 1];
}

function isImage(filename) {
  var ext = getExtension(filename);
  switch (ext.toLowerCase()) {
    case 'jpg':
    case 'gif':
    case 'bmp':
    case 'png':
    case 'jpeg':
      //etc
      return true;
  }
  return false;
}

$(function(){
	$("#loadImage").click(function(){
		$("#inputGambar").click();
	});

	$(document).on('change','#inputGambar',function () {
		   var file = $(this);
		   
		   $("#invalid-image").hide();
		   $("#band-img").hide();

      	   if( !isImage(file.val()) ){
      	   	  $('#inputGambar').replaceWith(clone_input);
	  	   	  $('#preview').css({
	            	'background':"url({{url('images/no-image.png')}})",
	            	'background-size':120,
	            	'background-position':'center center',
	            	'background-repeat':'no-repeat'
	           });
	  	   	  $("#band-img").show();
      	   	  $("#invalid-image").html('File harus bertype image. ').show();
      	   } else {
      	   		filePreview(this);
      	   }
    	
	});
});

</script>
@endpush
