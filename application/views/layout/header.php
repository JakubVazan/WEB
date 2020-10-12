<html>
    <head>
        <title>Maturitní Četba</title>
        <link href="<?php echo base_url()?>assets/bootstrap.min.css" rel="stylesheet" type="text/css">
        <link href="<?php echo base_url()?>assets/CeEsEs.css" rel="stylesheet" type="text/css">
        <script src="https://kit.fontawesome.com/65d96749db.js" crossorigin="anonymous"></script>
        <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
        <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
        <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js" integrity="sha384-B4gt1jrGC7Jh4AgTPSdUtOBvfO8shuf57BaghqFfPlYxofvL8/KUEfYiJOMMV+rV" crossorigin="anonymous"></script>
    </head>
    <body>
    <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
        <a class="navbar-brand" href="<?php echo base_url()?>petaridl">Peťa Rídl</a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarColor01" aria-controls="navbarColor01" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>

        <div class="collapse navbar-collapse" id="navbarColor01">
            <ul class="navbar-nav mr-auto">
            <?php foreach($menu as $m): ?>
                   <li class="nav-item">
                        <a class="nav-link" href="<?php echo base_url()?>vypisknih/<?= $m->idmenu ?>"><?= $m->kategorie ?><span class="sr-only">(current)</span></a>
                   </li>
                   <?php endforeach; ?>
                   <li class="nav-item">
                        <a class="nav-link" href="<?php echo base_url()?>assets/dokumentace/dokumentace.pdf">Dokumentace</a>
                    </li>
            </ul>
        </div>
    </nav>