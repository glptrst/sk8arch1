<form action="insert.php" method="post">
    <fieldset>
    select spot:
        <div class="form-group">
            <select class="form-control" name="spot">
                <option value=""> </option>
                <?php foreach($rows as $row): ?>
                <option value="<?= $row["name"] ?>"><?= $row["name"] ?></option>
                <?php endforeach ?>
            </select>
        </div>
        <div class="form-group">
            <input class="form-control" name="skater" placeholder="Skater" type="text"/>
        </div>
        <div class="form-group">
            <input class="form-control" name="trick" placeholder="Trick" type="text"/>
        </div>
        <div class="form-group">
            <input class="form-control" name="source" placeholder="Source" type="text"/>
        </div>
        <div class="form-group">
            <input class="form-control" name="link" placeholder="Link (if any)" type="url"/>
        </div>
        <div class="form-group">
            <button type="submit" class="btn btn-default">Insert</button>
        </div>
    </fieldset>
</form>
