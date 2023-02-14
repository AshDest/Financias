<div class="row">
    <div class="col-12">
        <form class="needs-validation" novalidate wire:submit.prevent="save">
            <div class="form-row">
                <div class="col-md-4 mb-3">
                    <label for="fournisseur">Fournisseur</label>
                    <input type="text" wire:model='fournisseur'
                        class="form-control @error('fournisseur') is-invalid @enderror" id="fournisseur"
                        placeholder="First name" value="" required>
                    @error('fournisseur')
                    <div class="invalid-feedback">
                        <i class="fas fa-exclamation-triangle"></i>&nbsp;{{ $message }}
                    </div>
                    @enderror
                </div>
            </div>
            <div class="form-row">
                <div class="col-md-6 mb-3">
                    <label for="montant_approvCDF">Montant USD</label>
                    <input type="number" wire:model='montant_approvCDF'
                        class="form-control @error('montant_approvCDF') is-invalid @enderror" id="montant_approvCDF"
                        placeholder="Montant en $" required>
                    @error('montant_approvCDF')
                    <div class="invalid-feedback">
                        <i class="fas fa-exclamation-triangle"></i>&nbsp;{{ $message }}
                    </div>
                    @enderror
                </div>
                <div class="col-md-6 mb-3">
                    <label for="validationCustom04">Montant CDF</label>
                    <input type="number" wire:model='montantCDF'
                        class="form-control @error('montantCDF') is-invalid @enderror" id="validationCustom04"
                        placeholder="Montant en Franc Congolais" required>
                    @error('montantCDF')
                    <div class="invalid-feedback">
                        <i class="fas fa-exclamation-triangle"></i>&nbsp;{{ $message }}
                    </div>
                    @enderror
                </div>
            </div>
            <div class="form-group col-sm-12">
                <button type="submit" class="btn btn-primary col-12 col-sm-12 mt-3">
                    <i class="icon-plus"></i>&ensp;&ensp;Enregistrer Caissier
                </button>
            </div>
            {{-- <button class="btn btn-primary" type="submit">Enregistrer Caissier</button>
            --}}
        </form>
    </div>
</div>
