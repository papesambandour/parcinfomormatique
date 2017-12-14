
<h1 class="h1" style="margin-bottom: 30px; text-align: center;">Mise a jour Service </h1>

<div class="panel panel-info">
    <div class="panel-heading"> Formulaire d'ajout de service</div>
    <div class="panel-body">
        <form method="post" action="?page=savesevice" class="form-group">
            <div class="form-group">
                <label for="nom" class="control-label" >Nom du service</label>
                <input type="text" name="nom" id="nom" required="required" class="form-control" value="<?=$service->noms ?>" />
                <input type="hidden" name="id" value="<?=(int)$service->ids ?>" />
            </div>
            <div class="form-group">
                <label for="port" class="control-label">Port du Service</label>
                <input type="number" name="port" id="port" class="form-control" value="<?=(int)$service->ports ?>" required="required"/>
            </div>
            <div class="form-group">
                <label for="etat" class="control-label">L'etat ip du Service</label>
                <input type="text" name="etat" id="etat" class="form-control" value="<?=$service->etats ?>" required="required"/>
            </div>

            <div class="form-group">
                <label class="control-label">Nom du Serveur</label>
                <select name="idserv">
                    <?php
                    while ($ligne = mysqli_fetch_object($listServeur))
                    {
                        echo "<option value='".(int)$ligne->idserv."'> $ligne->nomserv </option>";
                    }

                    ?>
                </select>
            </div>
            <div class="form-group">
                <button class="btn btn-primary" type="submit" name="editer"> Enregistrer</button>
                <button class="btn btn-primary" type="reset" name="annuler"> Annuler</button>
            </div>

        </form>
    </div>
</div>