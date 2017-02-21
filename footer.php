<?php
if(is_page_template('front-page.php')) {
	get_template_part('template-parts/footers/home');
} else {
	get_template_part('template-parts/footers/common');
}