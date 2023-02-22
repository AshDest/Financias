<main>
    <div class="container-fluid site-width">
        <div class="row">
            <div class="col-12 mt-3">
                <div class="card">
                    <div class="card-header">
                        <h4 class="card-title">Ajouter un Utilisateur</h4>
                    </div>
                    <div class="card-content">
                        <div class="card-body">
                            <div class="row">
                                <div class="col-12">
                                    <form wire:submit.prevent="save">
                                        <div class="form-group row">
                                            <label for="name" class="col-sm-4 col-form-label">Nom
                                                d'utilisateur</label>
                                            <div class="col-sm-8">
                                                <input type="text"
                                                    class="form-control @error('name') is-invalid @enderror" id="name"
                                                    wire:model="name" placeholder="saisir le nom d'utilisateur">
                                                @error('name')
                                                <i class="fas fa-exclamation-triangle" style="color: red; "></i>&nbsp;
                                                {{ $message }}
                                                @enderror
                                            </div>
                                        </div>
                                        <div class="form-group row">
                                            <label for="email" class="col-sm-4 col-form-label">Email Utilisateur</label>
                                            <div class="col-sm-8">
                                                <input type="email"
                                                    class="form-control @error('email') is-invalid @enderror" id="email"
                                                    wire:model="email" placeholder="saisir le nom d'utilisateur">
                                                @error('email')
                                                <i class="fas fa-exclamation-triangle" style="color: red; "></i>&nbsp;
                                                {{ $message }}
                                                @enderror
                                            </div>
                                        </div>
                                        <div class="form-group row">
                                            <label for="password" class="col-sm-4 col-form-label">Mot de
                                                passe</label>
                                            <div class="col-sm-8">
                                                <input type="password"
                                                    class="form-control @error('password') is-invalid @enderror"
                                                    id="password" wire:model="password" name="password"
                                                    placeholder="saisir le mot de passe">
                                                @error('password')
                                                <i class="fas fa-exclamation-triangle" style="color: red; "></i>&nbsp;
                                                {{ $message }}
                                                @enderror
                                            </div>
                                        </div>
                                        <div class="form-group row">
                                            <label for="password_confirmation" class="col-sm-4 col-form-label">Confirme
                                                le
                                                mot passe</label>
                                            <div class="col-sm-8">
                                                <input type="password" class="form-control" id="password_confirmation"
                                                    wire:model="password_confirmation" name="password_confirmation"
                                                    placeholder="confirmer le mot de passe">
                                                @error('password_confirmation')
                                                <i class="fas fa-exclamation-triangle" style="color: red; "></i>&nbsp;
                                                {{ $message }}
                                                @enderror
                                            </div>
                                        </div>
                                        <div class="form-group row">
                                            <label for="caissier_id" class="col-sm-4 col-form-label">Caissier</label>
                                            <div class="col-sm-8">
                                                <select id="caissier_id"
                                                    class="form-control @error('caissier_id') is-invalid @enderror"
                                                    wire:searchable="true" wire:model="caissier_id">
                                                    <option selected>Selectioner le caissier...</option>
                                                    @forelse ( $caissiers as $caissier )
                                                    <option value="{{ $caissier->id }}">{{ $caissier->nom }} -
                                                        {{$caissier->postnom}}</option>
                                                    @empty
                                                    <span style="color: red;">Aucun enregistrement</span>
                                                    @endforelse
                                                </select>
                                            </div>
                                        </div>
                                        <div class="form-group row">
                                            <div class="col-sm-12">
                                                <button type="submit" class="btn btn-primary col-sm-12">
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
    </div>
</main>
