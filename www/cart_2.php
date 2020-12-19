<?php include "_head.php" ?>

<div class="mb-15-35"></div>

<section class="basic-section">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-lg-12">
                <div class="card">
                    <ul class="nav nav-tabs nav-justified nav-cart">
                        <li class="nav-item">
                            <a class="nav-link" href="cart.php">Nákupní košík</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link active" href="cart_2.php">Doprava a platba</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="cart_3.php">Dodací údaje</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link disabled" href="#" tabindex="-1" aria-disabled="true">Rekapitulace</a>
                        </li>
                    </ul>
                    <div class="card-body">
                        <div class="row">
                            <div class="col-lg-4">
                                <h3>Způsob dopravy</h3>
                                <div class="custom-control custom-radio">
                                    <input type="radio" id="doprava1" name="doprava" class="custom-control-input" checked>
                                    <label class="custom-control-label" for="doprava1">Česká pošta</label>
                                </div>
                                <div class="custom-control custom-radio">
                                    <input type="radio" id="doprava2" name="doprava" class="custom-control-input">
                                    <label class="custom-control-label" for="doprava2">PPL</label>
                                </div>
                                <div class="custom-control custom-radio">
                                    <input type="radio" id="doprava3" name="doprava" class="custom-control-input">
                                    <label class="custom-control-label" for="doprava3">Osobní odběr</label>
                                </div>
                            </div>
                            <div class="col-lg-4 mt-4 mt-lg-0">
                                <h3>Způsob platby</h3>
                                <div class="custom-control custom-radio">
                                    <input type="radio" id="platba1" name="platba" class="custom-control-input">
                                    <label class="custom-control-label" for="platba1">Dobírka</label>
                                </div>
                                <div class="custom-control custom-radio">
                                    <input type="radio" id="platba2" name="platba" class="custom-control-input">
                                    <label class="custom-control-label" for="platba2">Hotově</label>
                                </div>
                                <div class="custom-control custom-radio">
                                    <input type="radio" id="platba3" name="platba" class="custom-control-input" checked>
                                    <label class="custom-control-label" for="platba3">Předem na bankovní účet</label>
                                </div>
                            </div>
                            <div class="col-lg-4 mt-4 mt-lg-0">
                                <h3 class="mb-3">Máte poukaz / slevový kód?</h3>
                                <div class="input-group">
                                    <input type="text" class="form-control" placeholder="Zadejte kód poukazu">
                                    <div class="input-group-append">
                                        <div class="btn btn-primary">Uplatnit</div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="mt-4">
                            <div class="alert alert-primary alert-dismissible">
                                <i class="mdi mdi-check mdi-scale-1-5 mr-2"></i> Dopravu máte zdarma!
                            </div>
                        </div>

                        <div class="mt-4">
                            <div class="float-lg-right text-center">
                                <a href="cart_3.php" class="btn btn-primary">Pokračovat</a>
                            </div>
                            <div class="float-lg-left text-center mt-3 mt-lg-0">
                                <a href="cart.php" class="btn btn-outline-dark">Zpět do košíku</a>
                            </div>
                            <div class="clearfix"></div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<div class="mb-15-35"></div>

<?php include "_footer.php"; ?>
