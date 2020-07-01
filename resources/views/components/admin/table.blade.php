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

@push('modal')
<div class="modal fade" id="modal-delete">
  <div class="modal-dialog modal-sm">
    <div class="modal-content">
      <div class="modal-header">
        <h4 class="modal-title"><i class="fas fa-trash"></i> Delete</h4>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <p>Yakin mau dihapus ?</p>
      </div>
      <div class="modal-footer justify-content-between">
        <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
        <form method="post" action="#">
          @csrf()
          @method('delete')
          <button type="submit" class="btn btn-danger">Ok Delete !</button>
        </form>
      </div>
    </div>
    <!-- /.modal-content -->
  </div>
  <!-- /.modal-dialog -->
</div>
<!-- /.modal -->
@endpush

@push('js')
<script>
$(function(){
  $('table .btn-delete').click(function(){
      var url = $(this).attr('data-url');
      $('#modal-delete form').attr('action',url);
      $('#modal-delete').modal('show');
  });

  $('#modal-delete').on('hidden.bs.modal', function (e) {
     $('#modal-delete form').attr('action','#');
  })
});
</script>
@endpush