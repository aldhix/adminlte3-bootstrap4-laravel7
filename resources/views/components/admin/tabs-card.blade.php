@props(['dataTabs'=>[],'active'=>'','header'=>'','classBody'=>''])

<div class="card card-primary card-tabs">
  <div class="card-header p-0 pt-1">
  	 {{ $header }}
     <ul class="nav nav-tabs">
      @foreach($dataTabs as $tabs)
      <li class="nav-item">
        <a class="nav-link @if($active == $tabs['url']) active @endif" href="{{ $tabs['url'] }}">{{ strtoupper($tabs['label']) }}</a>
      </li>
      @endforeach
    </ul>
  </div>
  <div class="card-body {{$classBody}}">
    {{ $slot }}
  </div>
</div>
<!-- /.card -->