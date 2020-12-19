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
                            <a class="nav-link active" href="cart_3.php">Dodací údaje</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="cart_4.php">Rekapitulace</a>
                        </li>
                    </ul>
                    <div class="card-body">
                        <form>
                            <h3 class="mb-3">Kontaktní údaje</h3>
                            <div class="row">
                                <div class="col-lg-3">
                                    <div class="form-group">
                                        <label>Jméno:</label>
                                        <input type="text" class="form-control form-control-sm">
                                    </div>
                                </div>
                                <div class="col-lg-3">
                                    <div class="form-group">
                                        <label>Příjmení:</label>
                                        <input type="text" class="form-control form-control-sm">
                                    </div>
                                </div>
                                <div class="col-lg-4">
                                    <div class="form-group">
                                        <label>E-mail:</label>
                                        <input type="text" class="form-control form-control-sm">
                                    </div>
                                </div>
                                <div class="col-lg-2">
                                    <div class="form-group">
                                        <label>Telefon:</label>
                                        <input type="text" class="form-control form-control-sm">
                                    </div>
                                </div>
                            </div>
                            <div class="mt-4"></div>
                            <h3 class="mb-3">Fakturační adresa</h3>
                            <div class="row">
                                <div class="col-lg-4">
                                    <div class="form-group">
                                        <label>Ulice a č.p.:</label>
                                        <input type="text" class="form-control form-control-sm">
                                    </div>
                                </div>
                                <div class="col-lg-3">
                                    <div class="form-group">
                                        <label>Město:</label>
                                        <input type="text" class="form-control form-control-sm">
                                    </div>
                                </div>
                                <div class="col-lg-2">
                                    <div class="form-group">
                                        <label>PSČ:</label>
                                        <input type="text" class="form-control form-control-sm">
                                    </div>
                                </div>
                                <div class="col-lg-3">
                                    <div class="form-group">
                                        <label>Stát:</label>
                                        <select class="form-control form-control-sm">
                                            <option value="Česká republika">Česká republika</option>
                                        </select>
                                    </div>
                                </div>
                            </div>
                            <div class="mt-4"></div>
                            <div class="custom-control custom-checkbox collapsed" data-toggle="collapse" data-target="#form-data-company" aria-expanded="false">
                                <input class="custom-control-input" type="checkbox" id="registration-company">
                                <label class="custom-control-label" for="registration-company">Nákup na firmu</label>
                            </div>
                            <div id="form-data-company" class="collapse">
                                <div class="mt-4"></div>
                                <h3 class="mb-3">Fakturační údaje</h3>
                                <div class="row">
                                    <div class="col-lg-3">
                                        <div class="form-group">
                                            <label>Firma:</label>
                                            <input type="text" class="form-control form-control-sm">
                                        </div>
                                    </div>
                                    <div class="col-lg-4">
                                        <div class="form-group">
                                            <label>IČ:</label>
                                            <div class="input-group">
                                                <input type="text" class="form-control form-control-sm">
                                                <div class="input-group-append">
                                                    <div class="btn btn-primary btn-sm">
                                                        Doplnit z ARESu
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-lg-2">
                                        <div class="form-group">
                                            <label>DIČ:</label>
                                            <input type="text" class="form-control form-control-sm">
                                        </div>
                                    </div>
                                    <div class="col-lg-3">
                                        <div class="form-group">
                                            <label>WWW:</label>
                                            <input type="text" class="form-control form-control-sm">
                                        </div>
                                    </div>
                                </div>
                                <div class="mb-4"></div>
                            </div>
                            <div class="custom-control custom-checkbox collapsed" data-toggle="collapse" data-target="#form-data-address" aria-expanded="false">
                                <input class="custom-control-input" type="checkbox" id="registration-address">
                                <label class="custom-control-label" for="registration-address">Dodací adresa (vyplňujte, neshoduje-li se s fakturační adresou)</label>
                            </div>
                            <div id="form-data-address" class="collapse">
                                <div class="mt-4"></div>
                                <h3 class="mb-3">Dodací adresa</h3>
                                <div class="row">
                                    <div class="col-lg-4">
                                        <div class="form-group">
                                            <label>Jméno / Název firmy:</label>
                                            <input type="text" class="form-control form-control-sm">
                                        </div>
                                    </div>
                                    <div class="col-lg-4">
                                        <div class="form-group">
                                            <label>Telefon:</label>
                                            <input type="text" class="form-control form-control-sm">
                                        </div>
                                    </div>
                                    <div class="col-lg-4">
                                        <div class="form-group">
                                            <label>Ulice a č.p.:</label>
                                            <input type="text" class="form-control form-control-sm">
                                        </div>
                                    </div>
                                    <div class="col-lg-4">
                                        <div class="form-group">
                                            <label>Město:</label>
                                            <input type="text" class="form-control form-control-sm">
                                        </div>
                                    </div>
                                    <div class="col-lg-4">
                                        <div class="form-group">
                                            <label>PSČ:</label>
                                            <input type="text" class="form-control form-control-sm">
                                        </div>
                                    </div>
                                    <div class="col-lg-4">
                                        <div class="form-group">
                                            <label>Stát:</label>
                                            <select class="form-control form-control-sm">
                                                <option value="Česká republika">Česká republika</option>
                                            </select>
                                        </div>
                                    </div>
                                </div>
                                <div class="mb-4"></div>
                            </div>
                            <div class="custom-control custom-checkbox collapsed" data-toggle="collapse" data-target="#form-data-login" aria-expanded="false">
                                <input class="custom-control-input" type="checkbox" id="registration-login">
                                <label class="custom-control-label" for="registration-login">Chci se zaregistrovat</label>
                            </div>
                            <div id="form-data-login" class="collapse">
                                <div class="mt-4"></div>
                                <h3 class="mb-3">
                                    Přihlašovací údaje
                                </h3>
                                <div class="row">
                                    <div class="col-lg-4">
                                        <div class="form-group">
                                            <label>Přihlašovací jméno:</label>
                                            <input type="text" class="form-control form-control-sm">
                                        </div>
                                    </div>
                                    <div class="col-lg-4">
                                        <div class="form-group">
                                            <label>Heslo:</label>
                                            <input type="text" class="form-control form-control-sm">
                                        </div>
                                    </div>
                                    <div class="col-lg-4">
                                        <div class="form-group">
                                            <label>Heslo (znovu):</label>
                                            <input type="text" class="form-control form-control-sm">
                                        </div>
                                    </div>
                                    <div class="col-lg-12">
                                        <div class="custom-control custom-checkbox">
                                            <input class="custom-control-input" type="checkbox" id="register-news" checked>
                                            <label class="custom-control-label" for="register-news">
                                                Ano, chci dostávat novinky e-mailem
                                            </label>
                                        </div>
                                    </div>
                                </div>
                                <div class="mb-4"></div>
                            </div>
                            <div class="mt-4"></div>
                            <div class="row">
                                <div class="col-lg-12">
                                    <div class="form-group">
                                        <label>Poznámka:</label>
                                        <textarea class="form-control form-control-sm"></textarea>
                                    </div>
                                </div>
                            </div>
                        </form>

                        <div class="mt-4">
                            <div class="float-lg-right text-center">
                                <a href="cart_4.php" class="btn btn-primary">Pokračovat</a>
                            </div>
                            <div class="float-lg-left text-center mt-3 mt-lg-0">
                                <a href="cart.php" class="btn btn-outline-dark">Zpět na dopravu a platbu</a>
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
