<button type="button" class="btn btn-info btn-xs px-2 mx-2" data-toggle="modal" data-target="#showFailure{{ $failure->id }}">Detail</button>

<div class="modal fade" id="showFailure{{ $failure->id }}" tabindex="-1" role="dialog" aria-labelledby="showFailureLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="showFailureLabel">Detail SPK nomor <strong>{{ $failure->number }}</strong></h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">

        <div class="row">
            <div class="col-6"><strong>No SPK</strong></div>
            <div class="col-6">: {{ $failure->number }}</div>
            <div class="col-6"><strong>Tanggal</strong></div>
            <div class="col-6">: {{ $failure->created_at->format('d F Y') }}</div>
            <div class="col-6"><strong>Karyawan</strong></div>
            <div class="col-6">: {{ $failure->holder }}</div>
            <div class="col-6"><strong>Subtotal</strong></div>
            <div class="col-6">: {{ Str::formatRupiah($failure->subtotal) }}</div>
            <div class="col-6"><strong>Diskon</strong></div>
            <div class="col-6">: {{ Str::formatRupiah($failure->discount) }}</div>
            <div class="col-6"><strong>Total</strong></div>
            <div class="col-6">: {{ Str::formatRupiah($failure->total) }}</div>
            <div class="col-6"><strong>Catatan</strong></div>
            <div class="col-6">: {{ $failure->note }}</div>
            @if($failure->employee_id)
            <div class="col-6"><strong>Karyawan Tertaut</strong></div>
            <div class="col-6">: {{ $failure->employee->name }}</div>
            @endif
        </div>
        @include('auth.failure._related')
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Tutup</button>
      </div>
    </div>
  </div>
</div>
