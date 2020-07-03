@props(['label'=>'','search'=>false,'footer'=>''])

<div class="card">
@if($label != '' or $search)
  <div class="card-header">
    <h3 class="card-title">{{$label}}</h3>
    <div class="card-tools">
    @if($search)
      <form action="?">
        <div class="input-group" style="width: 200px;">
          <input type="text" name="keyword" 
          class="form-control float-right" 
          placeholder="Search" 
          value="{{request()->keyword}}">
          <div class="input-group-append">
            <button type="submit" class="btn btn-default"><i class="fas fa-search"></i></button>
          </div>
        </div>
      </form>
      @endif
    </div>
  </div>
  @endif
  <div class="card-body table-responsive p-0">
    <table class="table table-hover table-striped">
      <thead>
        <tr>
          {{$thead}}
        </tr>  
      </thead>
      <tbody>
        {{$slot}}
      </tbody>
    </table>    
  </div>
  @if($footer != '')
  <div class="card-footer clearfix p-1">
    {{$footer}}
  </div>
  @endif
</div>
