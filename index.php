<!-- Oggi pomeriggio provate ad immaginare quali sono le classi necessarie per creare uno shop online con le seguenti caratteristiche.
L'e-commerce vende prodotti per gli animali.
I prodotti saranno oltre al cibo, anche giochi, cucce, etc.
L'utente potrà sia comprare i prodotti senza registrarsi, oppure iscriversi e ricevere il 20% di sconto su tutti i prodotti.
Il pagamento avviene con la carta di credito, che non deve essere scaduta. -->

<?php 

require_once __DIR__.'/Classes/Products.php';
require_once __DIR__.'/Classes/cartaCredito.php';
require_once __DIR__.'/Classes/UserPremium.php';




$items = [
    [
        'name' => 'Croccantini',
        'brand' => 'Monge',
        'price' =>  10.99
        

    ],
    [
        'name' => 'Advantix',
        'brand' => null,
        'price' => 14.99
        

    ],
    [
        'name' => 'dentastix',
        'brand' => 'pedigree',
        'price' => 8.99
        

    ],
    [
        'name' => 'Cuccia in PVC',
        'brand' => null,
        'price' => 120,99
        

    ],

];



// utente premium
$utente = new UserPremium('Antonio','Scarnera','a.scarnera@gmail.com','Mastercard');
$utente->setSconto('20%');

// carta di credito
$card = new cartaCredito('123456789','Antonio', 'Scarnera','02/2025');


$utente->setcartaCredito($card);

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-0evHe/X+R7YkIZDRvuzKMRqM+OrBnVFBL6DOitfPri4tjfHxaWutUpFmBp4vmVor" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.5/dist/umd/popper.min.js" integrity="sha384-Xe+8cL9oJa6tN/veChSP7q+mnSPaj5Bcu9mPX5F5xIGE0DVittaqT5lorf0EI7Vk" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/js/bootstrap.min.js" integrity="sha384-kjU+l4N0Yf4ZOJErLsIcvOU2qSb74wXpOhqTvwVx3OElZRweTnQ6d31fXEoRD1Jy" crossorigin="anonymous"></script>
    <title>Animal E-Commerce</title>
</head>
<body>
    <div class="container mt-5">
        <div class="row justify-content-start mb-4">
            <div class="col-sm-6 p-0">
                <div class="card">
                    <div class="card-body">
                        <h5 class="card-title"><?php echo $utente->getNome().' '.$utente->getCognome(); ?></h5>
                        <p class="card-text">Email: <?php echo $utente->getEmail(); ?></p>
                        <h6 class="card-title">Carta di Credito</h6>
                        <p class="card-text">Nome: <?php echo $card->getName(); ?></p>
                        <p class="card-text">Cognome: <?php echo $card->getSurname(); ?></p>
                        <p class="card-text">Numero Carta: <?php echo $card->getNumber(); ?></p>
                        <p class="card-text">Data di scadenza: <?php echo $card->getDate(); ?></p>
                    </div>
                </div>
            </div>
        </div>
        <div class="row mb-5 gap-4">
                <?php foreach($items as $key => $value){ 
                            $items = new Products($value['name'],$value['brand'],$value['price']);
                            
                    ?>         
            <div class="card col text-center" style="width: 18rem;">
                <div class="card-body">
                    <h5 class="card-title"> <?php echo $items->name ?> </h5>
                    <p class="card-text"> <?php echo $items->brand ?> </p>
                    <p class="card-text"> <?php echo $items->price.' €'; ?> </p>
                    
                </div>
                <button type="button" class="m-3 btn btn-primary">Shop</button>
                
                
            </div>
            <?php } ?>
            
    </div>
</div>
</body>
</html>