<div>
    <!-- START: Card Data-->
    <div class="row">
        <div class="col-12 col-sm-6 mt-3">
            <div class="card">
                <div class="card-header  justify-content-between align-items-center">
                    <h4 class="card-title">Liste des Caissiers</h4>
                    Class <span class="text-primary">.layout-primary</span>
                </div>
                <div class="card-body">
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
                                    <td>{{$item->nom}}</td>
                                    <td>{{$item->postnom}}</td>
                                    <td>{{$item->compteUSD}}</td>
                                    <td>{{$item->compteCDF}}</td>
                                    <td>{{$item->montantCDF}}</td>
                                    <td>{{$item->montantUSD}}</td>
                                </tr>
                                @empty

                                @endforelse
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- END: Card DATA-->
</div>
