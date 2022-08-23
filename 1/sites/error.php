<?php

switch($code) {
    case 404:
        $message = "Die Seite wurde nicht gefunden.";
        break;
}

echo '
<div class="px-4 py-5 my-5 text-center">
    <h1 class="display-5 fw-bold">Fehler '.$_REQUEST["fehlercode"].'</h1>
    <div class="col-lg-6 mx-auto">
        <p class="lead mb-4">'.$message.'</p>
        <div class="d-grid gap-2 d-sm-flex justify-content-sm-center">
            <a href="index.php?site=home" class="btn btn-primary btn-lg px-4 gap-3">Zur Startseite</a>
        </div>
    </div>
</div>
';