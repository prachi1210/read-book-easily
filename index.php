<?php
	require 'inc/function.inc.php';
    include 'inc/layout/header.inc.php';
    include 'inc/layout/navbar.inc.php';
    error_reporting(E_ERROR);
	if(isset($_POST['url']))
	{
		$url=$_POST['url'];
       // echo $url;
		$res = get_curl($url);
		$scraped_data= scrape_between($res,"Chapter 1", "All Rights Reserved");
	
	}
		
?>
<article>
    <div class="container">
        <div class="row">
            <div class="col-lg-8 col-lg-offset-2 col-md-10 col-md-offset-1">
                <?php echo  stripslashes(mb_convert_encoding($scraped_data,"HTML-ENTITIES", "UTF-8"));?>
            </div>
        </div>
    </div>
</article>
    
<div class="container">
    <table width="300" border="0" align="center" cellpadding="0" cellspacing="1" bgcolor="#cccccc">
        <tr>
            <form method="POST" >
                <td>
                    <table width="100%" border="0"  cellspacing="1" bgcolor="#ffffff">
                        <tr>
                            <td colspan="3"><strong><center>Enter URL to fetch book</cemter></strong></td>
                        </tr>
                        <tr>
                            <td width="78">URL</td>
                            <td width="6">:</td>
                            <td width="294"><input name="url" type="text" id="url"></td>
                        </tr>
                        <tr></tr>
                        <tr>
                            <td>&nbsp;</td>
                            <td>&nbsp;</td>
                            <td><input type="submit" name="Submit" value="GO"></td>
                         </tr>
                    </table>
                </td>
            </form>
        </tr>
    </table>
</div>
    <hr>

<?php include 'inc/layout/footer.inc.php';?>