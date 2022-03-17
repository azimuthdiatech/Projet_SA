<div class="containeur_q">
    <div class="titre">
        Paramétrer votre question
    </div>
    <div class="mini_contain">
        <div class="champ">
            <label for="" class="label_q">
                Questions
            </label>
            <div class="input_type">
                <input type="textarea" id="kestion" onfocus="this.value=''">
            </div>
        </div>
        <div class="champ">
            <label for="" class="label_q">
                Nbre de points
            </label>
            <div class="input_type">
                <div class="nbrpts" id="moins">-</div>
                <div id="nbr_point">01</div>
                <!-- <input type="text" name="" value="01" id="nbr_point"> -->
                <div class="nbrpts" id="plus">+</div>
            </div>
        </div>
        <div class="champ">
            <label for="" class="label_q">
                Type de réponse
            </label>
            <div class="input_type" id="type_rep">
                <div class="input_type">
                    <select id="type_reponse_q">
                    <option value="" >Donner le type de réponse</option>
                        <option value="txt" id="tarea">Réponse sipmle</option>
                        <option value="radio" id="rep_uni"><label for="radio">Réponse unique</label></option>
                        <option value="checkbox" id="choix_mult">Réponse à choix multiple</option>
                    </select>
                    <img src="<?=WEB_PUBLIC."img".DIRECTORY_SEPARATOR."ic-ajout-reponse.png"?>" id="add_q" alt="">
                </div>
            </div>
        </div>
        <div class="champbtn">
            <div class="save">
                <button id="btnsave">Enregistrer</button>
            </div>
        </div>
    </div>    
</div>




