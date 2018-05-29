<?php
/**
 * The template for displaying the footer
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package infobiz-theme
 */

?>

	<footer class="theme-footer">
		<div class="container">
			<div class="top-footer row">
			<?php dynamic_sidebar('footer_widgets_1'); ?>
				<!-- <h5>Follow us</h5>
				<ul>
					<li><a href="#" class="tran3s"><i class="fa fa-facebook" aria-hidden="true"></i></a></li>
					<li><a href="#" class="tran3s"><i class="fa fa-linkedin" aria-hidden="true"></i></a></li>
					<li><a href="#" class="tran3s"><i class="fa fa-dribbble" aria-hidden="true"></i></a></li>
					<li><a href="#" class="tran3s"><i class="fa fa-twitter" aria-hidden="true"></i></a></li>
					<li><a href="#" class="tran3s"><i class="fa fa-vimeo" aria-hidden="true"></i></a></li>
				</ul> -->
				

			<?php dynamic_sidebar('footer_widgets_2'); ?>

				<!-- <h5>About</h5>
				<ul>
					<li><a href="index.html" class="tran3s">Home</a></li>
					<li><a href="#" class="tran3s">Business Partners</a></li>
					<li><a href="#" class="tran3s">Inobiz </a></li>
					<li><a href="faq.html" class="tran3s">Faq</a></li>
					<li><a href="about-us.html" class="tran3s">About us</a></li>
					<li><a href="blog-grid.html" class="tran3s">Blog</a></li>
				</ul> -->
				

				<div class="col-md-4 col-xs-12 Subscribe">
					<h5>Subscribes</h5>
					<p>Sign up for our mailing list to get latest updates and offers</p>
					<form action="#">
						<input type="email" placeholder="Email">
						<button><i class="fa fa-envelope-o" aria-hidden="true"></i></button>
					</form>
					<p>Working Hours :  Monday-Saturday <br> Close : Sunday</p>
				</div> <!-- /.Subscribe -->
			</div> <!-- /.top-footer -->
		</div> <!-- /.container -->

		<div class="bottom-footer">
			<div class="container">
				<p>Copyright &copy; 2018 <a href="#" class="tran3s">Inobiz </a> Template by <a href="#" class="tran3s" target="_blank">Template_mr</a></p>
			</div> <!-- /.container -->
		</div> <!-- /.bottom-footer -->
	</footer>



	<!-- Scroll Top Button -->
	<button class="scroll-top tran3s">
		<i class="fa fa-angle-up" aria-hidden="true"></i>
	</button>

	
	




</div> <!-- /.main-page-wrapper -->

<?php wp_footer(); ?>

</body>

</html>