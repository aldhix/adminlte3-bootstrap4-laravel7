@extends('admin.template')
@section('title','Form')
@section('content-header','Form')
@section('content')
<div class="row">
    <div class="col-6">
      <x-admin.form-card method="post">
        <x-slot name="header">Quick Example</x-slot>
         @csrf()
        <x-admin.input label="Nama" name="nama" />
        <?php $option = [
            ['value'=>'L','label'=>'Laki-laki'],
            ['value'=>'P','label'=>'Perempuan'],
          ]; ?>
        <x-admin.select label="Jenis Kelamin" name="jenis_kelamin" :option="$option" />
        <x-admin.input label="Email" name="email" type="email" />
        <x-admin.input label="Password" name="password" type="password" />
        <x-admin.textarea label="Alamat" name="alamat" rows="5" />
        <x-slot name="footer">
          <x-admin.button btn="primary">Simpan</x-admin.button>
          <x-admin.button type="link" href="#">cancel</x-admin.button>
        </x-slot>
      </x-admin.form-card>
    </div>
</div>

@endsection
