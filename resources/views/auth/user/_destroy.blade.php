@if (!$user->currentlyLogin())
<form action="{{ route('auth.user.destroy', $user) }}" method="POST">
  @csrf
  @method('DELETE')

  <input type="submit" value="Hapus" class="btn btn-xs btn-block btn-danger">
</form>
@endif
