<!-- Oggi pomeriggio provate ad immaginare quali sono le classi necessarie per creare uno shop online;
ad esempio, ci saranno sicuramente dei 
-prodotti da acquistare e degli 
-utenti che fanno shopping.
Strutturare le classi gestendo l’ereditarietà dove necessario;
ad esempio ci potrebbero essere degli utenti premium che hanno diritto a degli sconti esclusivi, oppure diverse tipologie di prodotti.
Provate a far interagire tra di loro gli oggetti: ad esempio, l’utente dello shop inserisce una carta di credito... -->

<?php 

class EShop {

    // mettiamo una lista di prodotti

    public $tipoProdotto; 

    public $utente;
}

// ---------------------------------------------

class Product {
    public $categoria; //bellezza, elettronica ecc
}

Class TechProduct extends Product {
    public $pc;
    public $computer;
}

    class Pc extends TechProduct {
        public $typeProcessor;
        public $grandezzaSchermo;
    }

Class BeautyProduct extends Product {    
    public $creme;
    public $trucchi;
}

Class CarProduct extends Product {
    public $pneumatici;
    public $motore;    
}

// ---------------------------------------------

class User {
    public $sconto = 0;
}

class PremiumUser {
    // qui dentro potrebbe avere la definizione di una percentuale di 
    // sconto per ogni prodotto.
    public $sconto = 50;
}

// ----------------------------------------------


/*
1. creiamo l'eshop
2. creiamo diversi prodotti
3. aggiungiamoli all'eshop
4. creaiamo l'utente normale
5. creiamo un utente premium
6. inseriamo le carte di credito per ciascun utente
6. l'utente normale acquista un prodotto
7. l'utente premium acquista un altro prodotto (e riceve lo sconto)
*/ 