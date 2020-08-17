@extends('admin.template')
@section('title','Form')
@section('content-header','Form')
@section('content')
<x-admin.alert>
  <h5><i class="icon fas fa-check"></i> Alert!</h5>
  Success alert preview. This alert is dismissable.
</x-admin.alert>

<x-admin.alert type="danger">
  <h5><i class="icon fas fa-ban"></i> Alert!</h5>
  Danger alert preview. This alert is dismissable. A wonderful serenity has taken possession of my entire soul, like these sweet mornings of spring which I enjoy with my whole heart.
</x-admin.alert>

<div class="row">
    
    <div class="col-6">
      <x-admin.form-card method="post">
        <x-slot name="title">Quick Example</x-slot>
        
         @csrf()

        <x-admin.input label="Nama" name="nama">
          <x-slot name="append"><i class="fas fa-user"></i></x-slot>
        </x-admin.input>

        <?php $option = [
            ['value'=>'L','label'=>'Laki-laki'],
            ['value'=>'P','label'=>'Perempuan'],
          ]; ?>
        
        <x-admin.select label="Jenis Kelamin" name="jenis_kelamin" :option="$option">
          <x-slot name="prepend"><i class="fas fa-venus-mars"></i></x-slot>
        </x-admin.select>

        <x-admin.input label="Email" name="email" type="email">
          <x-slot name="append"><i class="fas fa-envelope"></i></x-slot>
        </x-admin.input>
        
        <x-admin.input label="Password" name="password" type="password">
          <x-slot name="append"><i class="fas fa-key"></i></x-slot>
        </x-admin.input>
        
        <x-admin.textarea label="Alamat" name="alamat" rows="5" />

        <x-admin.input prepend="Input Group Button" name="input_group" append-type="button" append="Ok!">
          <x-slot name="appendBtnAttr"> onclick="alert('Ok Click Button!')" </x-slot>
        </x-admin.input>
        
        <x-slot name="footer">
          <x-admin.button btn="primary">Simpan</x-admin.button>
          <x-admin.button type="link" href="#">cancel</x-admin.button>
        </x-slot>
      </x-admin.form-card>
    </div>

    <div class="col-6">
      <x-admin.form-card method="post" type="warning" enctype="multipart/form-data">
        <x-slot name="title">Quick Example</x-slot>
        
         @csrf()
        

        <div class="form-group">
            <input id="input-image" name="images" type="file" class="file form-control" data-browse-on-zone-click="true">
            @error('images')
              <div class="text-danger">{{ $message }}</div>
            @enderror  
        </div>

        <x-admin.input label="Nama" name="nama" inline="true" />

        <?php $option = [
            ['value'=>'L','label'=>'Laki-laki'],
            ['value'=>'P','label'=>'Perempuan'],
          ]; ?>
        <x-admin.select label="Jenis Kelamin" name="jenis_kelamin" :option="$option" inline="true" />
        <x-admin.input label="Email" name="email" type="email" inline="true" />
        <x-admin.input label="Password" name="password" type="password" inline="true" />
        <x-admin.textarea label="Alamat" name="alamat" rows="5" inline="true" />
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