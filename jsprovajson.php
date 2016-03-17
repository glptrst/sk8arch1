<!DOCTYPE html>
<html>
<body>
<script>
	var req = new XMLHttpRequest();
	req.onreadystatechange = function() {
		if (req.readyState === 4) {
			if (req.status === 200) {
				console.log(req.response); 
			}
		}
	};
	req.open("GET", "http://sk8arch1.atwebpages.com/provajson.php");
	req.send(null);
</script>
</body>
</html>