

<h1 class="h1" style="margin-bottom: 30px; text-align: center;">Mise a jour serveur</h1>

<div class="panel panel-info">
    <div class="panel-heading"> Formulaire d'ajout de serveur</div>
    <div class="panel-body">
        <form method="post" action="?page=saveseveur" class="form-group">
            <div class="form-group">
                <input type="hidden" name="id" value="<?=(int)$serveur->idserv ?>">
                <label for="nom" class="control-label">Nom du serveur</label>
                <input type="text" name="nom" id="nom" required="required" class="form-control" value="<?= $serveur->nomserv ?>" />
            </div>
            <div class="form-group">
                <label for="addresse" class="control-label">L'addresse ip du Serveur</label>
                <input type="text" name="addresse" id="addresse" class="form-control" value="<?= $serveur->addrserv ?>" />
            </div>
            <div class="form-group">
                <button class="btn btn-primary" type="submit" name="editer"> Enregistrer</button>
                <button class="btn btn-primary" type="reset" name="annuler"> Annuler</button>
            </div>

        </form>
    </div>
</div>