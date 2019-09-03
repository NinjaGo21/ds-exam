<?php
/**
 * The template for displaying the footer
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package Custom-Template-ds-exam
 */

?>

	</div><!-- #content -->

	<footer>
		<div class="wrapper">
            
            <h1 class="logo">CrazyDemo</h1>
                <nav>
                    <h2>Links</h2>
                    <ul>
                        <li><img src="<?php echo(get_template_directory_uri());?>/images/thumb_25.png"></li>
                        <li><img src="<?php echo(get_template_directory_uri());?>/images/thumb_26.png"></li>
                        <li><img src="<?php echo(get_template_directory_uri());?>/images/thumb_27.png"></li>
                        <li><img src="<?php echo(get_template_directory_uri());?>/images/thumb_28.png"></li>
                    </ul>
                </nav>
            
		</div><!-- .site-info -->
	</footer><!-- #colophon -->
</div><!-- #page -->

<?php wp_footer(); ?>

</body>
</html>
