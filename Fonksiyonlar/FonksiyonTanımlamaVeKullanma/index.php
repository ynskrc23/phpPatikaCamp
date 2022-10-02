<?php
    //PHP'de fonksiyonları, yerleşik ve kullanıcı tanımlı olmak üzere ikiye ayırabiliriz:
    //Yerleşik fonksiyonlar: PHP'de önceden tanımlanmış olarak kullanıma hazır fonksiyonlardır.
    //Kullanıcı tanımlı fonksiyonlar: Geliştirici tarafından oluşturularak kullanılan fonksiyonlardır.

    function selamla()
    {
        return "Selam, nasılsın?";
    }

    $donen_deger = selamla();

    echo $donen_deger;


    //Parametrelere varsayılan değer atama
    //Parametrelere varsayılan değerler atayarak değer girilmediği durumları ele alabiliriz.

    function topla($sayi1, $sayi2 = 30) {
       return  $sayi1 + $sayi2;
    }

    echo topla(10, 20);
    echo topla(10);

?>