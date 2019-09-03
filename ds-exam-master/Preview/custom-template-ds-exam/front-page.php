<?php
/**
 * The main template file
 *
 * This is the most generic template file in a WordPress theme
 * and one of the two required files for a theme (the other being style.css).
 * It is used to display a page when nothing more specific matches a query.
 * E.g., it puts together the home page when no home.php file exists.
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package Custom-Template-ds-exam
 */

get_header();
?>

	<div id="primary" class="content-area">
		<main id="main" class="site-main">

		<section id="main-banner">
            <div class="wrapper">
<!--            <img src="images/thumb_2.png" alt="Welcome to Resto">-->
            </div>
        </section>
        <section id="feature">
        <div class="wrapper">
            <h1>Featured Tours</h1>
            <span>Explore the world with Intense! We offer you a vast varietyof tours of all types featuringboth exotic and already well-known destination, some of which are listed below.</span>
            <ul>
                <li>
                    <img src="<?php echo(get_template_directory_uri());?>/images/thumb_5.png">
                    <a class="resort" href="">Kamalame Cay Resort</a>
                    <span>Kamalame Cay, The Bahamas</span>
                    <a href="">READ MORE</a>
                </li>
                <li>
                    <img src="<?php echo(get_template_directory_uri());?>/images/thumb_6.png">
                    <a class="resort" href="">Kamalame Cay Resort</a>
                    <span>Kamalame Cay, The Bahamas</span>
                    <a href="">READ MORE</a>
                </li>
                <li>
                    <img src="<?php echo(get_template_directory_uri());?>/images/thumb_7.png">
                    <a class="resort" href="">Kamalame Cay Resort</a>
                    <span>Kamalame Cay, The Bahamas</span>
                    <a href="">READ MORE</a>
                </li>
                <li>
                    <img src="<?php echo(get_template_directory_uri());?>/images/thumb_8.png">
                    <a class="resort" href="">Kamalame Cay Resort</a>
                    <span>Kamalame Cay, The Bahamas</span>
                    <a href="">READ MORE</a>
                </li>
            </ul>
            </div>
        </section>
        
        <section id="provide">
            <div class="wrapper">
            <div class="provide-content">
                <h2>We Provide Only the Best  Tours</h2>
                <span>With more than 230 Trips toworldwide destinations, including Europe, North & Central, South America, Asia, Austrilia & New Zealand, we continue to offer new ways and the best tours for travelling every year.</span>
                <a href="">GET IN TOUCH</a>
            </div>
            </div>
        </section>
        <section id="whyus">
            <div class="wrapper">
            <h1>Why Us?</h1>    
            <ul>
                <li>
                    <img src="<?php echo(get_template_directory_uri());?>/images/thumb_10.png">
                    <h2>The Best Service</h2>
                    <span>Our aim is to provide you with the tour service of the top quality, ad we'll do our best to find the suitabble tour for you.</span>
                </li>
                <li>
                    <img src="<?php echo(get_template_directory_uri());?>/images/thumb_11.png">
                    <h2>Everything is Included</h2>
                    <span>There are dozens of aspects to pay attention to, while organizing a trip, and we'll make sure your tour includes everything you need.</span>
                </li>
                <li>
                    <img src="<?php echo(get_template_directory_uri());?>/images/thumb_13.png">
                    <h2>Great Prices</h2>
                    <span>All our tours and excursions are available at really affordable prices so you can allways pick a great destination.</span>
                </li>
            </ul>
            </div>    
        </section>
        <section id="partners">
            <div class="wrapper">
            <h2>Our Partners</h2>
            <ul>
                <li>
                    <img src="<?php echo(get_template_directory_uri());?>/images/thumb_14.png">
                </li>
                <li>
                    <img src="<?php echo(get_template_directory_uri());?>/images/thumb_15.png">
                </li>
                <li>
                    <img src="<?php echo(get_template_directory_uri());?>/images/thumb_16.png">
                </li>
                <li>
                    <img src="<?php echo(get_template_directory_uri());?>/images/thumb_17.png">
                </li>
                <li>
                    <img src="<?php echo(get_template_directory_uri());?>/images/thumb_19.png">
                </li>
                <li>
                    <img src="<?php echo(get_template_directory_uri());?>/images/thumb_20.png">
                </li>
            </ul>
            </div>
        </section>
        <section id="clients">
            <div class="wrapper">
            <h2>What Our Clients Say</h2>
            <ul>
                <li>
                    <img src="<?php echo(get_template_directory_uri());?>/images/thumb_21.png">
                    <span class="comment">Disney in December was absolutely delightfull! From our 1 day at Magic Kingdom, Our family was filled  with excitement and magical memories.</span>
                    <span class="name">-Lisa Evants</span>
                </li>
                <li>
                    <img src="<?php echo(get_template_directory_uri());?>/images/thumb_22.png">
                    <span class="comment">You were an excellent Travel Agency for us! You considered our unique needs while planning our itinerary. Every suggestion you made was excellent!</span>
                    <span class="name">-Nicholas Lane</span>
                </li>
                <li>
                    <img src="<?php echo(get_template_directory_uri());?>/images/thumb_23.png">
                    <span class="comment">I;m seding you a sincere 'thank you' for all of your assisstance during my recent tripto Colorado. It was invaluable to me and I realize and appreciate it greatly.</span>
                    <span class="name">-Ethan Dean</span>
                </li>
                <li class="btn">
                        <a href="">GET IN TOUCH</a>
                </li>
            </ul>
            </div>
        </section>  

		</main><!-- #main -->
	</div><!-- #primary -->

<?php
get_sidebar();
get_footer();
