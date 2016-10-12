<?php

/*
	Custom theme functions

	Note: we recommend you prefix all your functions to avoid any naming
	collisions or wrap your functions with if function_exists braces.
*/
function numeral($number, $hideIfOne = false) {
	if($hideIfOne === true and $number == 1) {
		return '';
	}

	$test = abs($number) % 10;
	$ext = ((abs($number) % 100 < 21 and abs($number) % 100 > 4) ? 'th' : (($test < 4) ? ($test < 3) ? ($test < 2) ? ($test < 1) ? 'th' : 'st' : 'nd' : 'rd' : 'th'));
	return $number . $ext;
}

function count_words($str) {
	return count(preg_split('/\s+/', strip_tags($str), null, PREG_SPLIT_NO_EMPTY));
}

function pluralise($amount, $str, $alt = '') {
	return intval($amount) === 1 ? $str : $str . ($alt !== '' ? $alt : 's');
}

function relative_time($date) {
	if(is_numeric($date)) $date = '@' . $date;

	$user_timezone = new DateTimeZone(Config::app('timezone'));
	$date = new DateTime($date, $user_timezone);

	// get current date in user timezone
	$now = new DateTime('now', $user_timezone);

	$elapsed = $now->format('U') - $date->format('U');

	if($elapsed <= 1) {
		return 'Just now';
	}

	$times = array(
		31104000 => 'year',
		2592000 => 'month',
		604800 => 'week',
		86400 => 'day',
		3600 => 'hour',
		60 => 'minute',
		1 => 'second'
	);

	foreach($times as $seconds => $title) {
		$rounded = $elapsed / $seconds;

		if($rounded > 1) {
			$rounded = round($rounded);
			return $rounded . ' ' . pluralise($rounded, $title) . ' ago';
		}
	}
}

function twitter_account() {
	return site_meta('twitter', 'idiot');
}

function twitter_url() {
	return 'https://twitter.com/' . twitter_account();
}

function total_articles() {
	return Post::where(Base::table('posts.status'), '=', 'published')->count();
}

function raw_category_title() {
	$slug = explode("/", $_SERVER['REQUEST_URI']);
	if (isset($slug[2]) && strlen($slug[2]) > 3) {
		return $slug[2];
	}
}

    function latest_posts() {
      // only run on the first call
      if( ! Registry::has('latest_posts')) {
        // capture original article if one is set
        if($article = Registry::get('article')) {
          Registry::set('original_article', $article);
        }
      }

      if( ! $posts = Registry::get('latest_posts')) {
        $posts = Post::where('status', '=', 'published')
                 ->sort('created', 'desc')->get();
        Registry::set('latest_posts', $posts = new Items($posts));
      }

      if($result = $posts->valid()) {
        // register single post
        Registry::set('article', $posts->current());
        // move to next
        $posts->next();
      } else {
        // back to the start
        $posts->rewind();
        // reset original article
        Registry::set('article', Registry::get('original_article'));
        // remove items
        Registry::set('latest_posts', false);
      }

      return $result;
    }
    
function html_page_content() {
    // if you just want the raw content you saved
    return Registry::prop('page', 'html');
}
    
function search_item_description() {
	return Registry::prop('search_item', 'description');
} 

function search_item_author() {
	return Registry::prop('search_item', 'author_name');
}

function search_item_time() {
	if($created = Registry::prop('search_item', 'created')) {
		return Date::format($created, 'U');
	}
}

function search_item_category() {
	if($category = Registry::prop('search_item', 'category')) {
		$categories = Registry::get('all_categories');

		return $categories[$category]->title;
	}
}