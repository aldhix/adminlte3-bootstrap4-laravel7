@extends('admin.template')
@section('title','Table')
@section('content-header','Table')
@section('content')
<div class="row">
    <div class="col-12">
      <x-admin.table search='true'>
        <x-slot name="thead">
          <th>#</th><th>Nama</th><th>Action</th>
        </x-slot>
        <?php $data = [
          ['id'=>0,'nama'=>'Arjun Sing'],
          ['id'=>1,'nama'=>'Samir Khar'],
        ]; ?>
        @foreach($data as $td)
        <tr>
          <td>{{$td['id']}}</td><td>{{$td['nama']}}</td>
          <td>
            <x-admin.action 
            edit="#" 
            view="#" 
            :delete="route('admin.delete',['id'=>$td['id']])" />
          </td>
        </tr>
        @endforeach
        <x-slot name="footer">
          <div class="float-left pl-2 pt-2">Total : 123</div>
          <ul class="pagination m-0 float-right">
            <li class="page-item"><a class="page-link" href="#">&laquo;</a></li>
            <li class="page-item"><a class="page-link" href="#">1</a></li>
            <li class="page-item"><a class="page-link" href="#">2</a></li>
            <li class="page-item"><a class="page-link" href="#">3</a></li>
            <li class="page-item"><a class="page-link" href="#">&raquo;</a></li>
          </ul>
        </x-slot>
      </x-admin.table>
    </div>
</div>
@endsection