<div class="container-fluid site-width">
    <!-- START: Card Data-->
    <div class="row">
        <div class="col-12 mt-3">
            <div class="profile-menu mt-4 theme-background border  z-index-1 p-2">
                <div class="d-sm-flex">
                    <div class="align-self-center">
                        <ul class="nav nav-pills flex-column flex-sm-row" id="myTab" role="tablist">
                            <li class="nav-item ml-0">
                                <a wire:click='shiftsection(1)'
                                    class="nav-link  py-2 px-3 px-lg-4 @if(!is_null($tab1)) active @endif "
                                    style="cursor:pointer;">
                                    Approvisionnement</a>
                            </li>
                            <li class="nav-item ml-0">
                                <a wire:click='shiftsection(2)'
                                    class="nav-link  py-2 px-4 px-lg-4 @if(!is_null($tab2)) active @endif "
                                    style="cursor:pointer;"> Sortie Caisse</a>
                            </li>
                            <li class="nav-item ml-0">
                                <a class="nav-link py-2 px-4 px-lg-4 @if(!is_null($tab3)) active @endif "
                                    style="cursor:pointer;" wire:click='shiftsection(3)'>Prêt à
                                    Accorder
                                </a>
                            </li>
                            <li class="nav-item ml-0 mb-2 mb-sm-0">
                                <a class="nav-link py-2 px-4 px-lg-4" style="cursor:pointer;">
                                    Message</a>
                            </li>
                        </ul>
                    </div>
                    <div class="align-self-center ml-auto text-center text-sm-right">
                        <a data-toggle="modal" data-target="#exampleModal" style="cursor:pointer;">
                            <i class="icon-event h5"></i>
                            <h4>1 USD = 2200 CDF</h4>
                        </a>
                        <a href="#">
                            <span>1 USD = 2200 CDF</span>
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

    <!-- Modal -->
    <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
        aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Modal title</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    Modal body text goes here.
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                    <button type="button" class="btn btn-primary">Save changes</button>
                </div>
            </div>
        </div>
    </div>
</div>
