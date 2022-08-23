<?php

echo '
<div class="container">
    <header class="d-flex flex-wrap justify-content-center py-3 mb-4 border-bottom">
        <ul class="nav nav-pills">
            <li class="nav-item"><a href="'.ABSOLUTE_PATH.'startseite" class="nav-link '.($site == "startseite" ? "active" : "").'">Home</a></li>
            <li class="nav-item"><a href="'.ABSOLUTE_PATH.'kontakt" class="nav-link '.($site == "kontakt" ? "active" : "").'">Kontakt</a></li>
            <li class="nav-item"><a href="'.ABSOLUTE_PATH.'anmelden" class="nav-link '.($site == "anmelden" ? "active" : "").'">Login</a></li>
        </ul>
    </header>
</div>
';