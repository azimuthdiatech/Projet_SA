

<div id="listjoueur">
    <h4 class="h2list">LISTE DES JOUEURS</h4>
    <div class="list_joueur">
        <div >Nom</div>
        <div >Prénom</div>
        <div >Score</div>
        <?php foreach ($data as $value) :?>
            <div><?=$value['nom']?></div>
            <div><?=$value['prenom']?></div>
            <div><?=$value['score']?></div>
        <?php endforeach ?>
        
    </div>
    <div id="div_btn_suiv">
        <button id="btn_suivant">Suivant</button>
    </div>
</div>
