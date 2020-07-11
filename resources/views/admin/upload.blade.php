@extends('admin.template')
@section('title','Upload Image')
@section('content-header','Upload Image')
@section('content')

<div class="row">
    
    <div class="col-8">
      <x-admin.form-card method="post" enctype="multipart/form-data">
        <x-slot name="title">Quick Example</x-slot>        
         @csrf()

        <div class="form-group">
            <input id="input-image" name="images[]" multiple type="file" class="file form-control" data-browse-on-zone-click="true"> 
            @error('images.*')
              <div class="text-danger">{{ $message }}</div>
            @enderror  
        </div>

        <x-slot name="footer">
          <x-admin.button btn="primary">Simpan</x-admin.button>
          <x-admin.button type="link" href="#">cancel</x-admin.button>
        </x-slot>
      </x-admin.form-card>
    </div>

</div>

@endsection

@push('css')
<link href="{{url('bootstrap-fileinput/css/fileinput.min.css')}}" rel="stylesheet" type="text/css" />
<link href="{{url('bootstrap-fileinput/themes/explorer/theme.min.css')}}" rel="stylesheet" type="text/css" />
<style type="text/css">
  .file-upload-indicator{
    display: none;
  }
</style>
@endpush

@push('js')
<script src="{{url('bootstrap-fileinput/js/fileinput.min.js')}}"></script>
<script src="{{url('bootstrap-fileinput/themes/fas/theme.min.js')}}"></script>
<script src="{{url('bootstrap-fileinput/themes/explorer-fas/theme.min.js')}}"></script>
<script type="text/javascript">
    
 $('#input-image').fileinput({
    theme: 'fas',
    showUpload: false,
    maxFileCount: 4,
    allowedFileExtensions: ['jpg', 'png', 'gif','jpeg'],
});

</script>
@endpush

