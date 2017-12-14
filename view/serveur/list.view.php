
<h1 class="h1" style="margin-bottom: 30px; text-align: center;"> La Liste des Serveur</h1>

<div class="panel panel-primary">
    <div class="panel-heading">Liste des serveur</div>
    <div class="panel-body">
        <table class="table table-bordered table-striped table-responsive">
            <tr>
                <th>Identification du server</th>
                <th>Nom du serveur</th>
                <th>Addresse du serveur</th>
                <th>Edite</th>
                <th>Supprimer</th>
            </tr>
            <?php
                while ($ligne = mysqli_fetch_object($listServeur))
                {
                    echo "<tr>
                            <td>$ligne->idserv</td>
                            <td>$ligne->nomserv</td>
                            <td>$ligne->addrserv</td>
                            <td>
                                <form method='post' action='?page=editserveur'> 
                                        <input type='hidden' name='id' value='".$ligne->idserv."'>
                                        <input type='submit' value='Editer' class='btn btn-success'>
                                  </form>
                            </td>
                            <td>
                                <form method='post' action='?page=delserveur'> 
                                        <input type='hidden' name='id' value='".$ligne->idserv."'>
                                        <input type='submit' name ='supripmer' value='Supprimer' class='btn btn-danger' onclick='return confirmation()'>
                                 </form>
                            </td>
                         </tr>" ;
                }
            ?>

        </table>
    </div>
</div>

