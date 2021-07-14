     
<!-- Modal Confirm Delete -->
<div class="modal fade" id="modal-delete-<?= $rapports['id'] ?>">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title"><i class="fa fa-trash"></i> supprimer</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <p>voulez-vous supprimer le rapport <strong><?= $rapports['id'] ?></strong> ?</p>
            </div>
            <div class="modal-footer">
                <a href="delete.php?id=<?= $rapports['id'] ?>" class="btn btn-outline-success">Enregistrez les modifications</a>
                <button type="button" class="btn btn-outline-secondary" data-dismiss="modal">Fermer</button>
            </div>
        </div>
    </div>
</div>
<!-- End Modal -->