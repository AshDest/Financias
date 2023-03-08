<main>
    <div class="container-fluid site-width">
        <!-- START: Card Data-->
        <div class="row">
            <div class="col-12 mt-3">
                <div class="card">
                    <div class="card-header  justify-content-between align-items-center"
                        style="background-color: #4461a0;">
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
                                    <div class="col-3 my-auto">
                                        <a href="{{ route('adduser') }}" class="btn btn-outline-dark col-12"><i
                                                class="icon-plus"></i>
                                            &ensp;&ensp;Ajouter Nouveau Utilisateur</a>
                                    </div>
                                </div>
                            </div>
                            <div class="table-responsive">
                                <table class="table layout-primary">
                                    <thead>
                                        <tr>
                                            <th scope="col">#</th>
                                            <th scope="col">Utilisateur</th>
                                            <th scope="col">Noms</th>
                                            <th scope="col">Actions</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        @php
                                        $i = 1;
                                        @endphp
                                        @forelse ($users as $item)
                                        <tr>
                                            <th scope="row">@php
                                                echo $i;
                                                $i++;
                                                @endphp</th>
                                            <td>{{$item->name}}</td>
                                            <td>@if ($item->caissier)
                                                {{$item->caissier->nom}} - {{$item->caissier->postnom}}
                                                @else
                                                SUPER ADMIN
                                                @endif</td>
                                            <td width="10%">
                                                <a href="{{ route('edituser', ['ids'=>$item->id]) }}"
                                                    class="badge outline-badge-dark" data-toggle="tooltip"
                                                    data-placement="top" title="Modifier Compte Caissier"
                                                    style="cursor:pointer;">
                                                    <i class="fas fa-edit"></i>
                                                </a>
                                                {{-- <span class="badge outline-badge-danger"
                                                    wire:click="alertsupr({{$client->id}})" data-toggle="tooltip"
                                                    data-placement="top" title="Supprimer Client"
                                                    style="cursor:pointer;">
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
                                    @if (count($users))
                                    {{ $users->links('vendor.livewire.bootstrap') }}
                                    @endif
                                </center>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- END: Card DATA-->
    </div>
</main>
