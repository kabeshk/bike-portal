<!DOCTYPE html>
<html>

<head>
<style>
body{
	 background-image:url("1.jpg");
}
</style>	 
<title>bikeportal</title>
<link rel="stylesheet" type="text/css" href="Styles/Stylesheet.css" /></head>

<body>
<nav id="navigation">
                <ul id="nav">
                    <li><a href="index.php">Home</a></li>
                    <li><a href="ho.php">Brands</a></li>
					<li><a href="bike.php">Bikes</a></li>
                    <li><a href="about.php">About</a></li>
				
                   
                </ul>
				
            </nav>
			 <div id="content_area">
                <?php echo $content; ?>
            </div>

            
</body>
</html>