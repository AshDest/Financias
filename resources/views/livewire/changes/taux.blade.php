<div>
    <form wire:submit.prevent="save">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Configuration du Taux</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <div class="form-row">
                    <div class="col-md-6 mb-3">
                        <label for="code">Type de Taux</label>
                        <select class="form-control" wire:model='types' required>
                            <option value="">-- Type de Taux --</option>
                            <option value="vente">Vente</option>
                            <option value="achat">Achat</option>
                        </select>
                        {{-- @error('code')
                        <div class="invalid-feedback">
                            <i class="fas fa-exclamation-triangle"></i>&nbsp;{{ $message }}
                        </div>
                        @enderror --}}
                    </div>
                    <div class="col-md-6 mb-3">
                        <label for="nom">Valeur 1 USD en CDF</label>
                        <input type="number" wire:model='taux' class="form-control" id="taux"
                            placeholder="taux de changes" value="" required>
                    </div>
                </div>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                <button type="submit" class="btn btn-primary">Enregistre le Taux</button>
            </div>
        </div>
    </form>
</div>