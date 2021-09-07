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
    protected $Prodotti = []; 
    public $tipoProdotto;
    public $utente;
}

class Product extends EShop {
    public function aggiungiProdotti(string $product, string $typeProduct){
        $this->Prodotti = $product;      
        $this->tipoProdotto = $typeProduct;          
    }
}


class User {
    public $userNormale;
    public $userPremium;
    public $sconto;
    public $carta;

    public function getTypeUser(string $user, int $sconto){
        if($sconto = 0){
            $this->userNormale = $user;
        } else {
            $this->userPremium = $user;
            $this->sconto = $sconto;
        };
        $this->utente = $user;
    }
}

$shop = new EShop;
$product = new Product;
$user = new User;
$product->aggiungiProdotti('ferrari', 'auto');
$user->getTypeUser('antonio', 0);
var_dump($product);



class CartaDiCredito {
                
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