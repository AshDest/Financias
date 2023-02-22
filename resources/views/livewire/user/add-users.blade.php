<main>
    <div class="container-fluid site-width">
        <div class="row">
            <div class="col-12 mt-3">
                <div class="card">
                    <div class="card-header">
                        <h4 class="card-title">Ajouter un Utilisateur</h4>
                    </div>
                    <div class="card-content">
                        <div class="row">
                            <div class="col-12">
                                <form wire:submit.prevent="saveuser">
                                    <div class="form-group row">
                                        <label for="nom" class="col-sm-4 col-form-label">Nom</label>
                                        <div class="col-sm-8">
                                            <input type="text" class="form-control" id="nom" wire:model="nom"
                                                placeholder="saisir le nom">
                                            @error('nom')
                                            <i class="fas fa-exclamation-triangle"></i>&nbsp;
                                            {{ $message }}
                                            @enderror
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label for="postnom" class="col-sm-4 col-form-label">Postnom</label>
                                        <div class="col-sm-8">
                                            <input type="text" class="form-control" id="postnom" wire:model="postnom"
                                                placeholder="saisir le postnom">
                                            @error('postnom')
                                            <i class="fas fa-exclamation-triangle"></i>&nbsp;
                                            {{ $message }}
                                            @enderror
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label for="email" class="col-sm-4 col-form-label">Adresse
                                            mail</label>
                                        <div class="col-sm-8">
                                            <input type="text" class="form-control" id="email" wire:model="email"
                                                placeholder="saisir l'adresse mail">
                                            @error('email')
                                            <i class="fas fa-exclamation-triangle" style="color: red; "></i>&nbsp;
                                            {{ $message }}
                                            @enderror
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label for="username" class="col-sm-4 col-form-label">Nom
                                            d'utilisateur</label>
                                        <div class="col-sm-8">
                                            <input type="text" class="form-control" id="username" wire:model="username"
                                                placeholder="saisir le nom d'utilisateur">
                                            @error('username')
                                            <i class="fas fa-exclamation-triangle" style="color: red; "></i>&nbsp;
                                            {{ $message }}
                                            @enderror
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label for="password" class="col-sm-4 col-form-label">Mot de
                                            passe</label>
                                        <div class="col-sm-8">
                                            <input type="password" class="form-control" id="password"
                                                wire:model="password" placeholder="saisir le mot de passe">
                                            @error('password')
                                            <i class="fas fa-exclamation-triangle" style="color: red; "></i>&nbsp;
                                            {{ $message }}
                                            @enderror
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label for="password_confirmation" class="col-sm-4 col-form-label">Confirme le
                                            mot passe</label>
                                        <div class="col-sm-8">
                                            <input type="password" class="form-control" id="password_confirmation"
                                                wire:model="password_confirmation"
                                                placeholder="confirmer le mot de passe">
                                            @error('password_confirmation')
                                            <i class="fas fa-exclamation-triangle" style="color: red; "></i>&nbsp;
                                            {{ $message }}
                                            @enderror
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label class="col-sm-4 col-form-label">Logo</label>
                                        <div class="col-sm-8">
                                            @if (!$logo)
                                            <input type="file" wire:model="logo"
                                                class="form-control @error('logo') is-invalid @enderror" id="logo">
                                            @endif

                                            @if ($logo)
                                            <img src="{{ $logo->temporaryUrl() }}"
                                                style="height: 40px; border-radius: 4px; ">
                                            &nbsp;&nbsp;
                                            <div class="tooltipcabinet">
                                                <a wire:click.prevent="resetphoto" style="cursor:pointer;">
                                                    <i class="fas fa-redo mr-1" style="color: #EF8354;"></i>
                                                </a>
                                                <span class="tooltiptextcabinet">Recharger la photo</span>
                                            </div>

                                            @endif

                                            <div wire:loading wire:target="logo" style="color: #2f8045; ">
                                                Uploading <img src="{{ asset('dist/downloaded/load.png') }}"
                                                    width="14" />
                                            </div>

                                            @error('logo')
                                            <div class="invalid-feedback">
                                                {{ $message }}
                                            </div>
                                            @enderror
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label for="niveauacce_id" class="col-sm-4 col-form-label">Niveau</label>
                                        <div class="col-sm-8">
                                            <select id="niveauacce_id" class="form-control" wire:searchable="true"
                                                wire:model="niveauacce_id">
                                                <option selected>Selectioner le niveau d'accès...</option>
                                                @forelse ( $niveaus as $niveau )
                                                <option value="{{ $niveau->id }}">{{ $niveau->niveau }}</option>
                                                @empty
                                                <span style="color: red;">Aucun enregistrement</span>
                                                @endforelse
                                            </select>
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <div class="col-sm-12">
                                            <button type="submit" class="btn btn-dark col-sm-12">
                                                <span class="icon-plus"></span> Enregistrer</button>
                                        </div>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</main>
