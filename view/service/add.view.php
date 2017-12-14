
<h1 class="h1" style="margin-bottom: 30px; text-align: center;">Ajouter Un Service</h1>

<div class="panel panel-info">
    <div class="panel-heading"> Formulaire d'ajout de service</div>
    <div class="panel-body">
        <form method="post" action="?page=savesevice" class="form-group">
            <div class="form-group">
                <label for="nom" class="control-label">Nom du service</label>
                <input type="text" name="nom" id="nom" required="required" class="form-control"/>
            </div>
            <div class="form-group">
                <label for="port" class="control-label">Port du Service</label>
                <input type="number" name="port" id="port" class="form-control" required="required"/>
            </div>
            <div class="form-group">
                <label for="etat" class="control-label">L'etat du Service</label>
                <input type="text" name="etat" id="etat" class="form-control" required="required"/>
            </div>

            <div class="form-group">
                <label class="control-label">Nom du Serveur</label>
                <select name="idserv">
                    <?php
                        while ($ligne = mysqli_fetch_object($serveur))
                        {
                            echo "<option value='".(int)$ligne->idserv."'> $ligne->nomserv </option>";
                        }

                    ?>
                </select>
            </div>
            <div class="form-group">
                <button class="btn btn-primary" type="submit" name="valider"> Enregistrer</button>
                <button class="btn btn-primary" type="reset" name="annuler"> Annuler</button>
            </div>

        </form>
    </div>
</div>