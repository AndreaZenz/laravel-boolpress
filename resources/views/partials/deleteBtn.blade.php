<form action="{{ route('admin.destroy', $id) }}" method="post" class="delete_form">
    @csrf
    @method('DELETE')

    <input class="btn btn-danger" type="submit" value="Cancella">
</form>
