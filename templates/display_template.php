<div id="spot_title">
Spot: <?= $spot_info[0]["name"] ?>, <?= $spot_info[0]["city"] ?>, <?= $spot_info[0]["state"] ?>.
</div>

<!-- SORTING CHOICE -->
<div id="sortingBar">
<?php
    //load the right page when user sorts the tricks (chose the right query string for the action attribute of the form)
    if ($_GET["id"] == 1)
        echo "<form action=\"display.php?id=1\" method=\"post\">";
    if ($_GET["id"] == 2)
        echo "<form action=\"display.php?id=2\" method=\"post\">";
    if ($_GET["id"] == 3)
        echo "<form action=\"display.php?id=3\" method=\"post\">";
    if ($_GET["id"] == 4)
        echo "<form action=\"display.php?id=4\" method=\"post\">";
?>
Sort by: 
<input type="radio" name="sortingMethod" value="skater" onclick="this.form.submit();" 
<?php if($_SERVER["REQUEST_METHOD"] == "GET" || $_POST["sortingMethod"] == "skater") echo "checked"; ?> >skateboarder</input>
<input type="radio" name="sortingMethod" value="source" onclick="this.form.submit();" 
<?php if ($_SERVER["REQUEST_METHOD"] == "POST" && $_POST["sortingMethod"] == "source") echo "checked"; ?> >source</input> 
	</form>
</div>
<!-- TRICKS -->
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
