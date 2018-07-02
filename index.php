<html>
	<?php
		echo "wubbalubbadubdub";
	?>
	<head>
		<title>nsr</title>
	</head>
	<body>
		<h1>Welcome!</h1>
		<?php
			if ( have_posts() ) {
				while ( have_posts() ) {
					the_post(); 
					?>
						<?php
							$title = the_title();
							$content = the_content();
						?>

						<?php the_title( '<h3>', '</h3>' ); ?>
						<b><?php $content; ?></b>

					<?php
				} // end while
			} // end if
		?>
		
	</body>	
</html>