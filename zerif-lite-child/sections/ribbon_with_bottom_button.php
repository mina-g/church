<?php

	$zerif_bottomribbon_text = get_theme_mod('zerif_bottomribbon_text');

	if( !empty($zerif_bottomribbon_text) ):

		echo '<section class="separator-one">';

			echo '<div class="color-overlay">';

				echo '<h3 class="container text" data-scrollreveal="enter left after 0s over 1s">';

					echo $zerif_bottomribbon_text;

				echo '</h3>';

				$zerif_bottomribbon_buttonlabel = get_theme_mod('zerif_bottomribbon_buttonlabel');

				$zerif_bottomribbon_buttonlink = get_theme_mod('zerif_bottomribbon_buttonlink');

				if( !empty($zerif_bottomribbon_buttonlabel) && !empty($zerif_bottomribbon_buttonlink) ):

					echo '<div data-scrollreveal="enter right after 0s over 1s">';

						//echo '<a href="'.$zerif_bottomribbon_buttonlink.'" class="btn btn-primary custom-button green-btn">'.$zerif_bottomribbon_buttonlabel.'</a>';
                        echo '<div class="fb-page" data-href="https://www.facebook.com/1697704683792200/" data-width="500" data-height="500" data-small-header="true" data-adapt-container-width="true" data-hide-cover="false" data-show-facepile="false" data-show-posts="true"><div class="fb-xfbml-parse-ignore"><blockquote cite="https://www.facebook.com/1697704683792200/"><a href="https://www.facebook.com/1697704683792200/">St Mary &amp; St Merkorious Coptic Orthodox Church</a></blockquote></div></div>';
					echo '</div>';

				endif;

			echo '</div>';

		echo '</section>';	

	endif;
?>