<div>
    <div class="row">
        <div class="col-12 mt-3">
            <div class="card">
                <div class="card-header">
                    <h4 class="card-title">Ajouter un Caissier</h4>
                </div>
                <div class="card-content">
                    <div class="card-body">
                        <div class="row">
                            <div class="col-12">
                                <form class="needs-validation" novalidate>
                                    <div class="form-row">
                                        <div class="col-md-4 mb-3">
                                            <label for="nom">Nom</label>
                                            <input type="text" wire:model='nom'
                                                class="form-control @error('nom') is-invalid @enderror" id="nom"
                                                placeholder="First name" value="" required>
                                            @error('nom')
                                            <div class="invalid-feedback">
                                                <i class="fas fa-exclamation-triangle"></i>&nbsp;{{ $message }}
                                            </div>
                                            @enderror
                                        </div>
                                        <div class="col-md-4 mb-3">
                                            <label for="postnom">Post-Nom</label>
                                            <input type="text" wire:model='postnom'
                                                class="form-control @error('postnom') is-invalid @enderror" id="postnom"
                                                placeholder="Last name" value="" required>
                                            @error('postnom')
                                            <div class="invalid-feedback">
                                                <i class="fas fa-exclamation-triangle"></i>&nbsp;{{ $message }}
                                            </div>
                                            @enderror
                                        </div>
                                    </div>
                                    <div class="form-row">
                                        <div class="col-md-6 mb-3">
                                            <label for="montantUSD">Montant USD</label>
                                            <input type="number" wire:model='montantUSD'
                                                class="form-control @error('montantUSD') is-invalid @enderror"
                                                id="montantUSD" placeholder="Montant en $" required>
                                            @error('montantUSD')
                                            <div class="invalid-feedback">
                                                <i class="fas fa-exclamation-triangle"></i>&nbsp;{{ $message }}
                                            </div>
                                            @enderror
                                        </div>
                                        <div class="col-md-3 mb-3">
                                            <label for="validationCustom04">Montant CDF</label>
                                            <input type="number" wire:model='montantCDF'
                                                class="form-control @error('montantCDF') is-invalid @enderror"
                                                id="validationCustom04" placeholder="Montant en Franc Congolais"
                                                required>
                                            @error('montantCDF')
                                            <div class="invalid-feedback">
                                                <i class="fas fa-exclamation-triangle"></i>&nbsp;{{ $message }}
                                            </div>
                                            @enderror
                                        </div>
                                    </div>
                                    <button class="btn btn-primary" type="submit">Enregistrer Caissier</button>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- END: Card DATA-->
</div>
