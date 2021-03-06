@if($employee->hasOpenRecomendation())
<button type="button" class="btn btn-secondary btn-xs btn-block" data-toggle="modal" data-target="#recomendStatus{{ $employee->id }}">Status</button>

<div class="modal fade" id="recomendStatus{{ $employee->id }}" tabindex="-1" role="dialog" aria-labelledby="recomendStatus{{ $employee->id }}" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="recomendStatus{{ $employee->id }}">Status Rekomendasi</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        @include('auth.recomendation._show')
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary btn-sm px-2" data-dismiss="modal">Tutup</button>
      </div>
    </div>
  </div>
</div>

@endif
