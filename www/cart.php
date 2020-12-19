<?php include "_head.php" ?>

<div class="mb-15-35"></div>

<section class="basic-section">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-lg-12">
                <div class="card">
                    <ul class="nav nav-tabs nav-justified nav-cart">
                        <li class="nav-item">
                            <a class="nav-link active" href="cart.php">Nákupní košík</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="cart_2.php">Doprava a platba</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link disabled" href="#" tabindex="-1" aria-disabled="true">Dodací údaje</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link disabled" href="#" tabindex="-1" aria-disabled="true">Rekapitulace</a>
                        </li>
                    </ul>
                    <div class="card-body">

                        <!-- Zobrazení košíku pro stolní počítač -->
                        <div class="d-none d-lg-block">
                            <table class="table table-sm table-small table-align-middle mb-0">
                                <thead>
                                <tr class="font-weight-bold">
                                    <td class="border-top-0" colspan="2">Název / Kód</td>
                                    <td class="text-center border-top-0">Počet</td>
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
                                    <td style="width: 130px">
                                        <div class="input-group">
                                            <input type="text" class="form-control form-control-sm text-right" value="2">
                                            <div class="input-group-append">
                                                <div class="btn btn-primary btn-sm">
                                                    <i class="mdi mdi-cart"></i>
                                                </div>
                                            </div>
                                        </div>
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
                                    <div class="pb-3 text-center d-flex justify-content-center">
                                        <div class="input-group" style="max-width: 150px">
                                            <input type="text" class="form-control form-control-sm text-right" value="2">
                                            <div class="input-group-append">
                                                <div class="btn btn-primary btn-sm">
                                                    <i class="mdi mdi-cart"></i>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
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
                            <div class="float-lg-right text-center">
                                <a href="cart_2.php" class="btn btn-primary">Pokračovat</a>
                            </div>
                            <div class="float-lg-left text-center mt-3 mt-lg-0">
                                <a href="index.php" class="btn btn-outline-dark">Zpět k nákupu</a>
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
