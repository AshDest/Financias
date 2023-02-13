<div class="container-fluid site-width">
    <!-- START: Card Data-->
    <div class="row">
        <div class="col-12 mt-3">
            <div class="card">
                <div class="card-header  justify-content-between align-items-center" style="background-color: #4461a0;">
                    <h6 class="card-title"><b style="color: white; ">Liste Caissiers</b></h6>
                </div>
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
                        <div class="col-2 my-auto">
                            <div class="input-group">
                                <div class="input-group-append">
                                    <span class="input-group-text bg-transparent border-left-0"><i
                                            class="fas fa-utensil-spoon"></i></span>
                                </div>
                                <select class="form-control form-control-sm" id="filterByOrder"
                                    style="background-color: #f7f9fa; ">
                                    <option> Affichage</option>
                                    <option value="A-Z"> A - Z</option>
                                    <option value="Z-A"> Z - A</option>
                                </select>
                            </div>
                        </div>
                        <div class="col-3 my-auto">
                            <a href="{{ route('addcaissier') }}" class="btn btn-outline-dark col-12"><i
                                    class="icon-plus"></i>
                                &ensp;&ensp;Ajouter Nouveau Caissier</a>
                        </div>
                    </div>
                </div>
                <div class="table-responsive">
                    <table class="table layout-primary">
                        <thead>
                            <tr>
                                <th scope="col">#</th>
                                <th scope="col">Code</th>
                                <th scope="col">Noms</th>
                                <th scope="col">Compte USD</th>
                                <th scope="col">Compte CDF</th>
                                <th scope="col">Montant USD</th>
                                <th scope="col">Montant CDF</th>
                            </tr>
                        </thead>
                        <tbody>
                            @php
                            $i = 1;
                            @endphp
                            @forelse ($casheers as $item)
                            <tr>
                                <th scope="row">@php
                                    echo $i;
                                    $i++;
                                    @endphp</th>
                                <td>{{$item->code}}</td>
                                <td>{{$item->nom}} - {{$item->postnom}}</td>
                                <td>{{$item->compteUSD}}</td>
                                <td>{{$item->compteCDF}}</td>
                                <td>{{number_format($item->montantUSD).' $'}}</td>
                                <td>{{number_format($item->montantCDF).' FC'}}</td>
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
                        @if (count($casheers))
                        {{ $casheers->links('vendor.livewire.bootstrap') }}
                        @endif
                    </center>
                </div>
            </div>
        </div>
    </div>
    <!-- END: Card DATA-->
</div>
