<div class="modal fade" id="deleteModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h1 class="modal-title fs-5" id="exampleModalLabel">Silinsin mi?</h1>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                Silmek istiyor musunuz?
            </div>
            <form class="modal-footer" method="POST">
                @csrf
                @method('DELETE')

                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Kapat</button>
                <button type="submit" class="btn btn-danger"><i class="fas fa-trash"></i> Kaldır</button>
            </form>
        </div>
    </div>
</div>