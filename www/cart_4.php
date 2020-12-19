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
                            <a class="nav-link" href="cart_2.php">Doprava a platba</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="cart_3.php">Dodací údaje</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link active" href="cart_4.php">Rekapitulace</a>
                        </li>
                    </ul>
                    <div class="card-body">
                        <div class="row">
                            <div class="col-lg-4">
                                <h3>Fakturační adresa</h3>
                                <strong>Jméno Příjmení</strong>
                                <br /><br />
                                Ulice a ČP.<br />
                                PSČ, Město<br />
                                Česká republika<br />
                                <br />
                                <strong>E-mail:</strong> email@domain.com<br />
                                <strong>Tel.:</strong> +420 777 666 555<br />
                            </div>
                            <div class="col-lg-4 mt-4 mt-lg-0">
                                <h3>Dodací adresa</h3>
                                Ulice a ČP.<br />
                                PSČ, Město<br />
                                Česká republika<br />
                            </div>
                            <!-- Popřípadě další údaje (firma, atp.) -->
                        </div>

                        <div class="mt-4"></div>

                        <div class="row">
                            <div class="col-lg-6">
                                <div class="alert alert-primary">
                                    <strong>Způsob dopravy:</strong><br />
                                    Česká pošta
                                </div>
                            </div>
                            <div class="col-lg-6">
                                <div class="alert alert-primary">
                                    <strong>Způsob platby:</strong><br />
                                    Předem na bankovní účet
                                </div>
                            </div>
                        </div>

                        <div class="mt-4"></div>

                        <h3>Rekapitulace</h3>

                        <!-- Zobrazení košíku pro stolní počítač -->
                        <div class="d-none d-lg-block">
                            <table class="table table-sm table-small table-align-middle mb-0">
                                <thead>
                                <tr class="font-weight-bold">
                                    <td class="border-top-0" colspan="2">Název / Kód</td>
                                    <td class="text-right border-top-0">Počet</td>
                                    <td class="text-right border-top-0">Cena s DPH</td>
                                    <td class="text-right border-top-0">DPH</td>
                                    <td class="text-right border-top-0">Celkem s DPH</td>
                                </tr>
                                </thead>
                                <tbody>
                                <tr>
                                    <td style="width: 50px;">
                                        <img height="50px" src="/dist/img/product.jpg" alt="Produkt - AGRO Travní směs DOSEV 0,5 kg">
                                    </td>
                                    <td>
                                        <a href="product.php">
                                            AGRO Travní směs DOSEV 0,5 kg
                                        </a>
                                        <br />
                                        <small>
                                            KODPRODUKTU0123
                                        </small>
                                    </td>
                                    <td class="text-right">
                                        2
                                    </td>
                                    <td class="text-right">
                                        79 Kč
                                    </td>
                                    <td class="text-right">21%</td>
                                    <td class="text-right">
                                        158 Kč
                                    </td>
                                </tr>
                                <tr class="font-weight-bold">
                                    <td colspan="6" class="text-right pt-3">
                                        <span class="text-secondary">
                                            Celkem k úhradě: 158 Kč<br>
                                        </span>
                                        <small>
                                            Celkem bez DPH: 124,82 Kč
                                        </small>
                                    </td>
                                </tr>
                                </tbody>
                            </table>
                        </div>

                        <!-- Zobrazení košíku pro mobilní telefony -->
                        <div class="d-lg-none text-center">
                            <div class="border-bottom">
                                <div class="py-3">
                                    <img height="50px" src="/dist/img/product.jpg" alt="Produkt - AGRO Travní směs DOSEV 0,5 kg">
                                </div>
                                <div class="pb-2">
                                    2x
                                    <a href="product.php">
                                        AGRO Travní směs DOSEV 0,5 kg
                                    </a>
                                    <br>
                                    79 Kč / ks,
                                    21%,
                                    <b class="text-nowrap">
                                        158 Kč
                                    </b>
                                </div>
                            </div>
                            <div class="font-weight-bold pt-3 text-nowrap">
                                <span class="text-secondary">
                                    Celkem s DPH: 158 Kč<br>
                                </span>
                                <small>
                                    Celkem bez DPH: 124,82 Kč
                                </small>
                            </div>
                        </div>

                        <div class="mt-4">
                            <div class="text-center">
                                <div class="custom-control custom-checkbox mb-4">
                                    <input class="custom-control-input" type="checkbox" id="register-vop">
                                    <label class="custom-control-label" for="register-vop">
                                        Souhlasím s <a href="#">obchodními podmínkami</a> a
                                        <a href="#">zpracováním osobních údajů</a>.
                                    </label>
                                </div>
                                <a href="cart_5.php" class="btn btn-primary btn-lg">Odeslat objednávku</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<div class="mb-15-35"></div>

<?php include "_footer.php"; ?>
