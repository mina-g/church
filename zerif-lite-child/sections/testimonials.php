<?php

			echo '<section class="testimonial" id="events">';

				echo '<div class="container">';

					echo '<div class="section-header">';

						$zerif_testimonials_title = get_theme_mod('zerif_testimonials_title',__('Testimonials','zerif-lite'));
						
						if( !empty($zerif_testimonials_title) ):
					
							echo '<h2 class="white-text">'.$zerif_testimonials_title.'</h2>';
							
						endif;	

						$zerif_testimonials_subtitle = get_theme_mod('zerif_testimonials_subtitle');

						if( !empty($zerif_testimonials_subtitle) ):

							echo '<h6 class="white-text section-legend">'.$zerif_testimonials_subtitle.'</h6>';

						endif;

					echo '</div>';

					echo '<div class="row" data-scrollreveal="enter right after 0s over 1s">';

						echo '<div class="col-md-12">';

							$pinterest_style = '';
							$zerif_testimonials_pinterest_style = get_theme_mod('zerif_testimonials_pinterest_style');
							if( isset($zerif_testimonials_pinterest_style) && $zerif_testimonials_pinterest_style != 0 ) {
								$pinterest_style = 'testimonial-masonry';
							}

							echo '<div id="client-feedbacks" class="owl-carousel owl-theme ' . $pinterest_style . ' ">';

									if(is_active_sidebar( 'sidebar-testimonials' )):

										/*dynamic_sidebar( 'sidebar-testimonials' );*/
echo '<div class="feedback-box"><!-- MESSAGE OF THE CLIENT --><h3> Daily Liturgies</h3><div class="message"><iframe frameborder="0" width="100%" height="500" src="http://www.hisvine.com/plugins/liturgies?gid=84&amp;height=271"></iframe></div></div>';
echo '<div class="feedback-box"><!-- MESSAGE OF THE CLIENT --><h3> What&apos;s on this week</h3><div class="message"><iframe frameborder="0" height="500" width="100%" src="http://www.hisvine.com/plugins/agenda?gid=84&amp;height=500"></iframe></div></div>';
echo '<div class="feedback-box"><!-- MESSAGE OF THE CLIENT --><h3> Upcoming Events</h3><div class="message"><iframe frameborder="0" width="100%" height="500" src="http://hisvine.com/plugins/upcomingEvents?gid=84&amp;height=400&amp;weeks=1&amp;showHeader=false&amp;showFollow=false&amp;size=small&amp;type=announcements"></iframe></iframe></div></div>';


									else:

										if ( file_exists( get_stylesheet_directory_uri().'/images/testimonial1.jpg' ) ):
											the_widget('zerif_testimonial_widget', 'title=Dana Lorem&text=Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Curabitur nec sem vel sapien venenatis mattis non vitae augue. Nullam congue commodo lorem vitae facilisis. Suspendisse malesuada id turpis interdum dictum.&image_uri=' . get_stylesheet_directory_uri() . '/images/testimonial1.jpg');
										else:
											the_widget('zerif_testimonial_widget', 'title=Dana Lorem&text=Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Curabitur nec sem vel sapien venenatis mattis non vitae augue. Nullam congue commodo lorem vitae facilisis. Suspendisse malesuada id turpis interdum dictum.&image_uri=' . get_template_directory_uri() . '/images/testimonial1.jpg');
										endif;

										if ( file_exists( get_stylesheet_directory_uri().'/images/testimonial2.jpg' ) ):
											the_widget('zerif_testimonial_widget', 'title=Linda Guthrie&text=Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Curabitur nec sem vel sapien venenatis mattis non vitae augue. Nullam congue commodo lorem vitae facilisis. Suspendisse malesuada id turpis interdum dictum.&image_uri=' . get_stylesheet_directory_uri() . '/images/testimonial2.jpg');
										else:
											the_widget( 'zerif_testimonial_widget','title=Linda Guthrie&text=Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Curabitur nec sem vel sapien venenatis mattis non vitae augue. Nullam congue commodo lorem vitae facilisis. Suspendisse malesuada id turpis interdum dictum.&image_uri='.get_template_directory_uri().'/images/testimonial2.jpg' );
										endif;

										if ( file_exists( get_stylesheet_directory_uri().'/images/testimonial3.jpg' ) ):
											the_widget( 'zerif_testimonial_widget','title=Cynthia Henry&text=Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Curabitur nec sem vel sapien venenatis mattis non vitae augue. Nullam congue commodo lorem vitae facilisis. Suspendisse malesuada id turpis interdum dictum.&image_uri='.get_stylesheet_directory_uri().'/images/testimonial3.jpg' );
										else:
											the_widget( 'zerif_testimonial_widget','title=Cynthia Henry&text=Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Curabitur nec sem vel sapien venenatis mattis non vitae augue. Nullam congue commodo lorem vitae facilisis. Suspendisse malesuada id turpis interdum dictum.&image_uri='.get_template_directory_uri().'/images/testimonial3.jpg' );
										endif;
									endif;

							echo '</div>';

						echo '</div>';

					echo '</div>';

				echo '</div>';

			echo '</section>';

?>