<style>
	.coin {
		background: #999999;
		color: #333333;
		border-radius: 50%;
		padding: 50px;
		text-align: center;
		font-size: 2rem;
		font-weight: bold;
		width: 50px;
	}
</style>

<?php

function flip() {
	// Challenge: define this function
  return (0 == rand(0,1)) ? 'Heads' : 'Tails';
}

?>

<div class="coin">
	<?php echo flip(); ?>
</div>