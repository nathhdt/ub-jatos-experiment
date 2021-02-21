<?php include('head.inc'); ?>
<?php
if(!isset($_SESSION['email']) || $_SESSION['email'] = '') {
	header('Location: index.php');
}
?>
		
		<div class="container-sm">
			<div class="card mx-auto">
  			<div class="card-body">
    			<h5 class="card-title text-center">Expérience « <?php echo($nom_experience); ?> »</h5>
    			
  			</div>
			</div>
		</div>

<?php include('foot.inc'); ?>