<?php

if($_REQUEST["submit"] == "ok") {
    if(!$_REQUEST["name"]) $error = true;
    if(!$_REQUEST["email"]) $error = true;
    if(!$_REQUEST["message"]) $error = true;

    if(!$error) {
        $subject = "Nachricht von ".$_REQUEST["name"];
        $subject = $_REQUEST["message"]."\nEmail: ".$_REQUEST["message"];
        // EMAIL SENDEN
        $alert = '<div class="alert alert-success">Nachricht wurde gesendet</div>';
    } else $alert = '<div class="alert alert-danger">Bitte alle Felder ausfüllen</div>';
}

echo '
<div class="px-4 py-5 my-5 text-center">
    <h1 class="display-5 fw-bold">Kontakt</h1>
</div>

<form class="container" action="index.php" method="POST">

    <input type="hidden" name="site" value="kontakt">
    <input type="hidden" name="submit" value="ok">

    <div class="card">
        <div class="card-header">Schreib uns eine Nachricht</div>

        <div class="card-body">

            '.$alert.'

            <div>
                <label for="name" class="form-label">Name</label>
                <input type="text" class="form-control" id="name" name="name">
            </div>
            <div>
                <label for="email" class="form-label">Email Adresse</label>
                <input type="email" class="form-control" id="email" name="email">
            </div>
            <div>
                <label for="message" class="form-label">Nachricht</label>
                <textarea class="form-control" id="message" name="message"></textarea>
            </div>
        </div>

        <div class="card-footer text-muted"><button type="submit" class="btn btn-primary">Nachricht senden</button></div>
    </div>
</form>
';