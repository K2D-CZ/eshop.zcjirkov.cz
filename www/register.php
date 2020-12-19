<?php include "_head.php" ?>

<div class="mb-15-35"></div>

<section class="basic-section">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-lg-8">
                <div class="card">
                    <div class="card-body">
                        <h2 class="mb-3">Registrace</h2>
                        <form>
                            <h3 class="mb-3">Kontaktní údaje</h3>
                            <div class="row">
                                <div class="col-lg-6">
                                    <div class="form-group">
                                        <label>Jméno:</label>
                                        <input type="text" class="form-control form-control-sm">
                                    </div>
                                </div>
                                <div class="col-lg-6">
                                    <div class="form-group">
                                        <label>Příjmení:</label>
                                        <input type="text" class="form-control form-control-sm">
                                    </div>
                                </div>
                                <div class="col-lg-6">
                                    <div class="form-group">
                                        <label>E-mail:</label>
                                        <input type="text" class="form-control form-control-sm">
                                    </div>
                                </div>
                                <div class="col-lg-6">
                                    <div class="form-group">
                                        <label>Telefon:</label>
                                        <input type="text" class="form-control form-control-sm">
                                    </div>
                                </div>
                            </div>
                            <div class="mt-4"></div>
                            <h3 class="mb-3">Fakturační adresa</h3>
                            <div class="row">
                                <div class="col-lg-6">
                                    <div class="form-group">
                                        <label>Ulice a č.p.:</label>
                                        <input type="text" class="form-control form-control-sm">
                                    </div>
                                </div>
                                <div class="col-lg-6">
                                    <div class="form-group">
                                        <label>Město:</label>
                                        <input type="text" class="form-control form-control-sm">
                                    </div>
                                </div>
                                <div class="col-lg-6">
                                    <div class="form-group">
                                        <label>PSČ:</label>
                                        <input type="text" class="form-control form-control-sm">
                                    </div>
                                </div>
                                <div class="col-lg-6">
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
                                <label class="custom-control-label" for="registration-company">Registrace - Firma</label>
                            </div>
                            <div id="form-data-company" class="collapse">
                                <div class="mt-4"></div>
                                <h3 class="mb-3">Fakturační údaje</h3>
                                <div class="row">
                                    <div class="col-lg-6">
                                        <div class="form-group">
                                            <label>Firma:</label>
                                            <input type="text" class="form-control form-control-sm">
                                        </div>
                                    </div>
                                    <div class="col-lg-6">
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
                                    <div class="col-lg-6">
                                        <div class="form-group">
                                            <label>DIČ:</label>
                                            <input type="text" class="form-control form-control-sm">
                                        </div>
                                    </div>
                                    <div class="col-lg-6">
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
                                    <div class="col-lg-6">
                                        <div class="form-group">
                                            <label>Jméno / Název firmy:</label>
                                            <input type="text" class="form-control form-control-sm">
                                        </div>
                                    </div>
                                    <div class="col-lg-6">
                                        <div class="form-group">
                                            <label>Telefon:</label>
                                            <input type="text" class="form-control form-control-sm">
                                        </div>
                                    </div>
                                    <div class="col-lg-6">
                                        <div class="form-group">
                                            <label>Ulice a č.p.:</label>
                                            <input type="text" class="form-control form-control-sm">
                                        </div>
                                    </div>
                                    <div class="col-lg-6">
                                        <div class="form-group">
                                            <label>Město:</label>
                                            <input type="text" class="form-control form-control-sm">
                                        </div>
                                    </div>
                                    <div class="col-lg-6">
                                        <div class="form-group">
                                            <label>PSČ:</label>
                                            <input type="text" class="form-control form-control-sm">
                                        </div>
                                    </div>
                                    <div class="col-lg-6">
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
                                    <div class="form-group">
                                        <label>Poznámka:</label>
                                        <textarea class="form-control form-control-sm"></textarea>
                                    </div>
                                </div>
                            </div>
                            <div class="mt-4"></div>
                            <div class="custom-control custom-checkbox">
                                <input class="custom-control-input" type="checkbox" id="register-vop">
                                <label class="custom-control-label" for="register-vop">
                                    Souhlasím s <a href="#">obchodními podmínkami</a> a
                                    <a href="#">zpracováním osobních údajů</a>.
                                </label>
                            </div>
                            <div class="custom-control custom-checkbox">
                                <input class="custom-control-input" type="checkbox" id="register-news" checked>
                                <label class="custom-control-label" for="register-news">
                                    Ano, chci dostávat novinky e-mailem
                                </label>
                            </div>
                            <div class="text-center mt-4">
                                <button type="submit" class="btn btn-primary">
                                    Registrovat se
                                </button>
                            </div>
                        </form>
                        <hr />
                        <div class="text-center">
                            <a href="login.php" class="btn btn-outline-dark">
                                Zpět
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<div class="mb-15-35"></div>

<?php include "_footer.php"; ?>
