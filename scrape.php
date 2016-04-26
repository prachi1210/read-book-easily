<?php
	require 'inc/function.inc.php';
	if(isset($_POST['text']))
	{
		$url=$_POST['url'];
		echo $url;
		$res = get_curl($url);
		$scraped_data= scrape_between($res,"Chapter 1", "All Rights Reserved");
	
		echo $scraped_data;
	}
	require 'inc/layout/header.inc.php';
	require 'inc/layout/navbar.inc.php';	
?>
  <div class="container">
        <div class="row">
            <div class="col-md-6 col-md-offset-3">
                <div class="upload-popup">
                    <form action="" method="POST" >
                        <input type="text" name="url">
                        <input type="submit" class="btn btn-warning" value="Go">
                    </form>
                </div>
            </div>
        </div>
    </div>

<?php
    require 'inc/layout/footer.inc.php';
?>