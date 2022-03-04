
<div class="list_joueur">
    
    <div>Nom</div>
    <div>Prénom</div>
    <div>Score</div>
    <?php foreach ($data as $value) :?>
        <div><?=$value['nom']?></div>
        <div><?=$value['prenom']?></div>
        <div><?=$value['score']?></div>
    <?php endforeach ?>
    <button id="btn_suivant">Suivant</button>
</div>