<div> 
    <table class="table table-striped">
        <thead>
            <tr>
                <th>num</th>
                <th>id</th>
                <th>skater</th>
                <th>trick</th>
                <th>source</th>
                <th>link</th>
                <th>proposer</th>
            </th>
        </thead>
        <tbody style="text-align: left;">
            <?php foreach ($proposals as $proposal): ?>
                <tr>
                    <td><?= $proposal["num"]; ?></td>
                    <td><?= $proposal["id"]; ?></td>
                    <td><?= $proposal["skater"]; ?></td>
                    <td><?= $proposal["trick"]; ?></td>
                    <td><?= $proposal["source"]; ?></td>
                    <td><?= $proposal["link"]; ?></td>
                    <td><?= $proposal["proposer"]; ?></td>
                </tr>
            <?php endforeach ?>
        </tbody>
    </table> 


    <form action="assess_proposals.php" method="post">
    <fieldset>
        <div class="form-group">
            <input class="form-control" name="num" placeholder="num" type="text"/>
        </div>
        <div class="form-group">
            <button type="submit" class="btn btn-default">Accept</button>
        </div>
    </fieldset>
    </form>

    <form action="refuse_proposals.php" method="post">
        <div class="form-group">
            <input class="form-control" name="num" placeholder="num" type="text"/>
        </div>
        <div class="form-group">
            <button type="submit" class="btn btn-default">Refuse</button>
        </div>
    </form>
