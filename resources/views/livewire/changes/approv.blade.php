<div class="row">
    <div class="col-12">
        <form class="needs-validation" novalidate wire:submit.prevent="approv">
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
                <div class="col-md-4 mb-3">
                    <label for="montantusd">Montant USD</label>
                    <input type="number" wire:model='montantusd'
                        class="form-control @error('montantusd') is-invalid @enderror" id="montantusd"
                        placeholder="montantusd en $" required>
                    <div>
                        <span style="color: yellowgreen;"> Valeur en CDF : {{number_format($valeurCDF).'
                            CDF'}}</span>
                    </div>
                    @error('montant')
                    <div class="invalid-feedback">
                        <i class="fas fa-exclamation-triangle"></i>&nbsp;{{ $message }}
                    </div>
                    @enderror
                </div>
                <div class="col-md-4 mb-3">
                    <label for="validationCustom04">Montant CDF</label>
                    <input type="number" wire:model='montantcdf'
                        class="form-control @error('montantcdf') is-invalid @enderror" id="validationCustom04"
                        placeholder="Montant en Franc Congolais" required>
                    <span style="color: yellowgreen;">Valeur en USD : {{number_format($valeurUSD, 2).'
                        CDF'}}</span>
                </div>
            </div>
            <div class="form-row">

            </div>
            <div class="form-group col-sm-12">
                <button type="submit" class="btn btn-primary col-12 col-sm-12 mt-3">
                    <i class="icon-plus"></i>&ensp;&ensp;Enregistrer l'Approvisionnement
                </button>
            </div>
            {{-- <button class="btn btn-primary" type="submit">Enregistrer Caissier</button>
            --}}
        </form>
    </div>
</div>