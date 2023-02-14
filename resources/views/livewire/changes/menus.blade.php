<div class="container-fluid site-width">
    <!-- START: Card Data-->
    <div class="row">
        <div class="col-12 mt-3">
            <div class="profile-menu mt-4 theme-background border  z-index-1 p-2">
                <div class="d-sm-flex">
                    <div class="align-self-center">
                        <ul class="nav nav-pills flex-column flex-sm-row" id="myTab" role="tablist">
                            <li class="nav-item ml-0">
                                <a wire:click='sorties()' class="nav-link  py-2 px-3 px-lg-4 active"
                                    style="cursor:pointer;" data-toggle="tab">
                                    Approvisionnement</a>
                            </li>
                            <li class="nav-item ml-0">
                                <a wire:click='approvisionnements()' class="nav-link  py-2 px-4 px-lg-4 "
                                    style="cursor:pointer;" data-toggle="tab"> Sortie Caisse</a>
                            </li>
                            <li class="nav-item ml-0">
                                <a class="nav-link py-2 px-4 px-lg-4" data-toggle="tab" style="cursor:pointer;">Prêt à
                                    Accorder
                                </a>
                            </li>
                            <li class="nav-item ml-0 mb-2 mb-sm-0">
                                <a class="nav-link py-2 px-4 px-lg-4" data-toggle="tab" style="cursor:pointer;">
                                    Message</a>
                            </li>
                        </ul>
                    </div>
                    <div class="align-self-center ml-auto text-center text-sm-right">
                        <a href="#">
                            <i class="icon-social-dropbox h5"></i>
                        </a>
                        <a href="#">
                            <i class="icon-social-facebook h5"></i>
                        </a>
                        <a href="#">
                            <i class="icon-social-github h5"></i>
                        </a>
                        <a href="#">
                            <i class="icon-social-google h5"></i>
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </div>
    @if ($formapprovisionnement)
    <div class="row mt-3">
        <div class="col-xl-12">
            <div class="card">
                <div class="card-body">
                    @include('livewire.changes.approv')
                </div>
            </div>
        </div>
    </div>
    @elseif ($formsortie)
    <div class="row mt-3">
        <div class="col-xl-12">
            <div class="card">
                <div class="card-body">

                </div>
            </div>
        </div>
    </div>
    @endif

    <!-- END: Card DATA-->
</div>
