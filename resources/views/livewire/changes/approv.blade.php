<div class="row">
    <div class="col-sm-6">
        <div class="card">
            <div class="card-header  justify-content-between align-items-center" style="background-color: #a08f44;">
                <h6 class="card-title"><b style="color: white; ">Ajouter une Approvisionnement</b></h6>
            </div>
            <div class="card-content">
                <div class="card-body">
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
                                    <span style="color: yellowgreen;"> Valeur en CDF : {{number_format($valeurCDF, 2).'
                                        FC'}}</span>
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
                                    class="form-control @error('montantcdf') is-invalid @enderror"
                                    id="validationCustom04" placeholder="Montant en Franc Congolais" required>
                                <span style="color: yellowgreen;">Valeur en USD : {{number_format($valeurUSD, 2).'
                                    $'}}</span>
                            </div>
                        </div>
                        <div class="form-row">
                        </div>
                        <div class="form-group col-sm-12">
                            <button type="submit" class="btn btn-success col-12 col-sm-12 mt-3">
                                <i class="icon-plus"></i>&ensp;&ensp;Enregistrer l'Approvisionnement
                            </button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
    <div class="col-sm-6">
        <div class="card">
            <div class="card-header  justify-content-between align-items-center" style="background-color: #a08f44;">
                <h6 class="card-title"><b style="color: white; ">Liste des Utilisateurs</b></h6>
            </div>
            <div class="card-content">
                <div class="card-body">
                    <div class="card-header  justify-content-between align-items-center">
                        <div class="form-row">
                            <div class="col-7 my-auto">
                                <div class="input-group">
                                    <div class="input-group-append">
                                        <span class="input-group-text bg-transparent border-left-0"><i
                                                class="fas fa-search"></i></span>
                                    </div>
                                    <input class="form-control form-control-sm" id="search"
                                        style="background-color: #f7f9fa; " placeholder=" Recherche par motif "
                                        wire:model="reseach" />
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="table-responsive">
                        <table class="table layout-primary">
                            <thead style="background-color: #a08f44;">
                                <tr>
                                    <th scope="col">#</th>
                                    <th scope="col">Fournisseur</th>
                                    <th scope="col">Montant USD</th>
                                    <th scope="col">Montant CDF</th>
                                    <th scope="col">Actions</th>
                                </tr>
                            </thead>
                            <tbody>
                                @php
                                $i = 1;
                                @endphp
                                @forelse ($approvs as $item)
                                <tr>
                                    <th scope="row">@php
                                        echo $i;
                                        $i++;
                                        @endphp</th>
                                    <td>{{$item->fournisseur}}</td>
                                    <td>{{number_format($item->montantUSD).' $'}}</td>
                                    <td>{{number_format($item->montantCDF).' FC'}}</td>
                                    <td width="10%">
                                        <a href="{{ route('editcaissier', ['ids'=>$item->id]) }}"
                                            class="badge outline-badge-dark" data-toggle="tooltip" data-placement="top"
                                            title="Modifier Compte Caissier" style="cursor:pointer;">
                                            <i class="fas fa-edit"></i>
                                        </a>
                                        {{-- <span class="badge outline-badge-danger"
                                            wire:click="alertsupr({{$client->id}})" data-toggle="tooltip"
                                            data-placement="top" title="Supprimer Client" style="cursor:pointer;">
                                            <i class="fas fa-trash-alt"></i>
                                        </span> --}}
                                    </td>
                                </tr>
                                @empty
                                <tr>
                                    <td colspan="10" class="alert alert-danger">
                                        <center> ... Liste vide ....</center>
                                    </td>
                                </tr>
                                @endforelse
                            </tbody>
                        </table>
                        <br>
                        <center>
                            @if (count($approvs))
                            {{ $approvs->links('vendor.livewire.bootstrap') }}
                            @endif
                        </center>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
