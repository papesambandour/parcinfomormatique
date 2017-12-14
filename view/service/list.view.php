
<h1 class="h1" style="margin-bottom: 30px; text-align: center;">La Liste Des Services</h1>

<div class="panel panel-primary">
    <div class="panel-heading">Liste des service</div>
    <div class="panel-body">
        <table class="table table-bordered table-striped table-responsive">
            <tr>
                <th>Identification du Service</th>
                <th>Nom du Serveur</th>
                <th>Port du Service</th>
                <th>Etat du Service</th>
                <th>Edite</th>
                <th>Supprimer</th>
            </tr>
            <?php
            while ($ligne = mysqli_fetch_object($listService))
            {
                echo "<tr>
                            <td>$ligne->ids</td>
                            <td>$ligne->noms</td>
                            <td>$ligne->ports</td>
                            <td>$ligne->etats</td>
                            <td>
                                <form method='post' action='?page=editservice'> 
                                        <input type='hidden' name='id' value='".(int)$ligne->ids."'>
                                        <input type='submit' value='Editer' class='btn btn-success'>
                                  </form>
                            </td>
                            <td>
                                <form method='post' action='?page=delservice'> 
                                        <input type='hidden' name='id' value='".(int)$ligne->ids."'>
                                        <input type='submit' name ='supripmer' value='Supprimer' class='btn btn-danger'>
                                 </form>
                            </td>
                         </tr>" ;
            }
            ?>

        </table>
    </div>
</div>
