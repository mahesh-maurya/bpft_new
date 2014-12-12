<?php
	$this->load->view("website/header.php");
	$this->load->view("website/menunonhome.php");
	$this->load->view("website/$page.php");
	$this->load->view("website/footernonhome.php");
    $this->load->view("website/footer.php");
?>