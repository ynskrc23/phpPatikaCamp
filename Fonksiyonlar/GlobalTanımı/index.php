<?php
    $isim = 'Şahin';
    function isim() {
        global $isim;
        return $isim;
    }
    echo isim();
?>