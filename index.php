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
 * @package test
 */

get_header();
?>

			<div class="main-info">
                <p>Gemalto says its</p>
                <h1 class="title">Prank callers</h1>
                <a href="#" class="button button-1">Download it</a>
            </div>
        </div>
    </section>
    <section class="blok">
        <div class="conteiner-1">
            <h2 class="info">features</h2>
            <div class="cards">
                <div class="card card-4">
                    <a href="#">
                        <h3 class="card_title title-1">various aspects</h3>
                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Optio, molestias?</p>
                    </a>
                </div>
                <div class="card card-4">
                    <a href="#">
                        <h3 class="card_title title-1">various aspects</h3>
                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Optio, molestias?</p>
                    </a>
                </div>
                <div class="card card-4">
                    <a href="#">
                        <h3 class="card_title title-1">various aspects</h3>
                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Optio, molestias?</p>
                    </a>
                </div>
            </div>
            <a href="#" class="button button-2">Download it</a>
        </div>
    </section>

<?php
get_sidebar();
get_footer();
