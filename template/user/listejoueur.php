<div style="margin-left:50px 70px">
    <table>
        <tr>
            <th>Nom</th>
            <th>Prénom</th>
            <th>Score</th>
        </tr>
        <?php foreach ($data as $value) :?>
        <tr>
            <td><?=$value['nom']?></td>
            <td><?=$value['prenom']?></td>
            <td><?=$value['score']?></td>
        </tr>
        <?php endforeach ?>
    </table>
</div>
