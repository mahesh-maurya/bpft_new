<!--
<META HTTP-EQUIV="refresh" CONTENT="0;URL=<?php echo site_url($webtemplate."?1=1"); 
//if(isset($alert))
//echo "&alert=$alert";

?>">
-->
<?php
	$this->load->view("website/header.php");
	$this->load->view("website/$page.php");
	$this->load->view("website/footer.php");

?>