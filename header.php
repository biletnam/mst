<?php

if(is_page_template('front-page.php')) {
	get_template_part('template-parts/headers/home');
} else {
	get_template_part('template-parts/headers/common');
}