@props(['size'=>'sm','edit'=>null,'view'=>null,'delete'=>null])

@if($edit!=null)
<a href="{{$edit}}" class="btn btn-warning btn-{{$size}}"><i class="fas fa-edit"></i></a>
@endif
@if($view!=null)
<a href={{$view}} class="btn btn-success btn-{{$size}}"><i class="fas fa-eye"></i></a>
@endif
@if($delete!=null)
<button type="button" data-url="{{$delete}}" class="btn btn-delete btn-danger btn-{{$size}}">
	<i class="fas fa-trash"></i>
</button>
@endif