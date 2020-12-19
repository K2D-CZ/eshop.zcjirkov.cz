<?php include "_head.php" ?>

<div class="mb-15-35"></div>

<section class="basic-section">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-lg-4">
                <div class="card">
                    <div class="card-body">
                        <h2 class="mb-3">Přihlášení</h2>
                        <form>
                            <div class="form-group">
                                <label>Přihlašovací jméno</label>
                                <input type="text" class="form-control">
                            </div>
                            <div class="form-group">
                                <label>Heslo</label>
                                <small class="float-right pt-1">
                                    <a href="password.php">Zapomenuté heslo?</a>
                                </small>
                                <input type="password" class="form-control">
                            </div>
                            <div class="form-group mb-0 text-center">
                                <button type="submit" class="btn btn-primary">
                                    Přihlásit se
                                </button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
            <div class="col-lg-4">
                <div class="card">
                    <div class="card-body text-center">
                        <h2 class="mb-3">Nemáte ještě účet?</h2>
                        <a href="register.php" class="btn btn-primary">
                            Registrujte se
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<div class="mb-15-35"></div>

<?php include "_footer.php"; ?>
