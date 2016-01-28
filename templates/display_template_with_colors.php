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
            <?php 
                foreach ($tricks as $trick) {
                    $skater = $trick["skater"];
                    $tricko = $trick["trick"];
                    $source = $trick["source"];
                    $link = $trick["link"];    

                    $target = '"_blank"';
                    
                    $info = '"info"';
                    $success = '"success"';
                    $danger = '"danger"';
                    $warning = '"warning"';
                    $active = '"active"';


                    if ( $counter == 0 || $counter == 1)
            		     echo "<tr>";
                    else if ($counter == 2)
                         echo "<tr class=$info>";
                    else if ($counter == 3)
                         echo "<tr class=$success>";
                    else if ($counter == 4)
                         echo "<tr class=$danger>";
                    else if ($counter == 5)
                         echo "<tr class=$warning>";
                    else if ($counter == 6)
                         echo "<tr class=$active>";
                    echo "<td>$skater</td>";
                    echo "<td>$tricko</td>";
                    echo "<td>$source</td>";
                    echo "<td><a href=$link target=$target>&#x21E8</a></td>";
                	echo "</tr>";

                    $counter = $counter + 1; 
                    if ($counter == 6) {
                        $counter = 0; 
                    }
                }     
            ?>
        </tbody>
    </table>

    <div style="color:red;margin:100px;">
        Something missing? <a href="insert.php">Insert a trick</a>
    </div>
</div>
