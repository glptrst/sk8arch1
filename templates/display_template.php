<div id="sortingBar">
	<form>
		Sorty by: 
		<input type="radio" name="votes" value="votes" checked="checked">votes</input>
		<input type="radio" name="skateboarder" value="skateboarder">skateboarder</input>
		<input type="radio" name="year" value="year">year</input> 
	</form>
</div>
<div>
    <table class="table table-striped">
        <thead>
            <tr>
                <th>Skater</th>
                <th>Trick</th>
                <th>Source</th>
                <th>Link</th>
            </tr>
        </thead>
        <tbody style="text-align: left;">
            <?php foreach ($tricks as $trick): ?>
                <tr>
                    <td><?= $trick['skater'] ?></td>
                    <td><?= $trick["trick"] ?></td>
                    <td><?= $trick["source"] ?></td>
                    <td><a href=<?= $trick["link"] ?> target="_blank">&#x21E8</a></td>
                </tr> 
            <?php endforeach ?>
        </tbody>
    </table>

    <div style="color:red;margin:100px;">
        Something missing? <a href="insert.php">Insert a trick</a>
    </div>
</div>
