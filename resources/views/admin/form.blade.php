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

<?php 
$tabs = [
  ['label'=>"Form Inline",'url'=>'?tab=current'],
  ['label'=>"Form Input Group",'url'=>'?tab=input-group'],
];
$tab = request()->tab;
$tab_active = !empty($tab) ? '?tab='.$tab : '?tab=current';
?>

<form method="post" action="?">
<x-admin.tabs-card :data-tabs="$tabs" :active="$tab_active">
@if($tab == 'current')
<div class="row">
  <div class="col-6">
   @csrf()
  <x-admin.input label="Nama" name="nama" inline="true" />
  <?php $option = [
      ['value'=>'L','label'=>'Laki-laki'],
      ['value'=>'P','label'=>'Perempuan'],
    ]; ?>
  <x-admin.select label="Jenis Kelamin" name="jenis_kelamin" :option="$option" inline="true" />
  <x-admin.input label="Email" name="email" type="email" inline="true" />
  <x-admin.input label="Password" name="password" type="password" inline="true" />
  <x-admin.textarea label="Alamat" name="alamat" rows="5" inline="true" />
  </div>
</div>
<x-slot name="footer">
  <x-admin.button btn="primary">Simpan</x-admin.button>
  <x-admin.button type="link" href="#">cancel</x-admin.button>
</x-slot>
@else
<div class="row">
  <div class="col-6">
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
  </div>
</div>

<x-slot name="footer">
  <x-admin.button btn="primary">Simpan</x-admin.button>
  <x-admin.button type="link" href="#">cancel</x-admin.button>
</x-slot>

@endif
</x-admin.tabs-card>
</form>

@endsection
