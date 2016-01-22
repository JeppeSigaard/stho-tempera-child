<?php

require 'functions/scripts.php';
require 'functions/post-types.php';
require 'functions/meta-box.php';
require 'functions/columns.php';
require 'functions/form_shortcode.php';
require 'functions/form-shortcode_erhverv.php';
require 'functions/ajax-form.php';
require 'functions/kirki.php';
require 'functions/blog-sync.php';
require 'functions/origin-title.php';

remove_action('cryout_footer_hook','tempera_site_info',99);