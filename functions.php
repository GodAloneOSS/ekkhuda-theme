<?php

add_action('wp_footer', function () {
    if (!is_front_page()) { return; }
    echo <<<'JS'
<script>(function(){var h=document.querySelector('.hero');if(!h||!('IntersectionObserver' in window))return;new IntersectionObserver(function(e){document.body.classList.toggle('hero-in',e[0].isIntersecting);}).observe(h);})();</script>
JS;
}, 99);

/**
 * EkKhuda Premium — theme functions
 *
 * Hindi/Hindustani sister-site of godalone-premium. Same structure: assets,
 * menus, theme supports, Firebase login config, newsletter subscribe AJAX,
 * and contact-form AJAX. Reuses the same Firebase project as godalone.in
 * and kadavulmattum.org so Google sign-in works the same way everywhere.
 */

if (!defined('ABSPATH')) exit;

/**
 * Theme asset version = newest modification time of the theme's own files.
 * Editing style.css / header.php / footer.php / functions.php changes this
 * automatically, so browsers fetch the new file with no manual version bump.
 * Falls back to the fixed string below if the files cannot be read.
 */
if (!function_exists('ek_auto_ver')) {
	function ek_auto_ver() {
		static $v = null;
		if ($v !== null) { return $v; }
		$dir   = get_stylesheet_directory();
		$stamp = 0;
		foreach (array('style.css', 'header.php', 'footer.php', 'functions.php') as $f) {
			$p = $dir . '/' . $f;
			if (file_exists($p)) {
				$t = @filemtime($p);
				if ($t && $t > $stamp) { $stamp = $t; }
			}
		}
		$v = $stamp ? ('1.1.3.' . $stamp) : '1.1.3';
		return $v;
	}
}
if (!defined('EK_VER')) define('EK_VER', ek_auto_ver());

/**
 * Auto-purge the LiteSpeed page cache when any theme file changes, so edits
 * show up without clearing the cache by hand. Runs at most once per change.
 */
add_action('init', function () {
	if (!function_exists('get_option')) { return; }
	$sig = ek_auto_ver();
	if (get_option('ek_theme_sig') !== $sig) {
		update_option('ek_theme_sig', $sig, false);
		do_action('litespeed_purge_all');
	}
}, 99);

/* ---- Calculator-19 page routing (no wp-admin page exists for this slug) ---- */
add_action('init', function () {
	add_rewrite_rule('^calculator-19/?$', 'index.php?ek_calc19_page=1', 'top');
	if (get_option('ek_calc19_rewrite_flushed') !== EK_VER) {
		flush_rewrite_rules(false);
		update_option('ek_calc19_rewrite_flushed', EK_VER);
	}
}, 20);
add_filter('query_vars', function ($vars) { $vars[] = 'ek_calc19_page'; return $vars; });
add_filter('template_include', function ($template) {
	if (get_query_var('ek_calc19_page')) {
		$t = get_stylesheet_directory() . '/page-calculator-19.php';
		if (file_exists($t)) return $t;
	}
	return $template;
});


/* ---- Zakat Calculator page routing (no wp-admin page exists for this slug) ---- */
add_action('init', function () {
    add_rewrite_rule('^zakat-calculator/?$', 'index.php?ek_zakat_page=1', 'top');
    if (get_option('ek_zakat_rewrite_flushed') !== EK_VER) {
        flush_rewrite_rules(false);
        update_option('ek_zakat_rewrite_flushed', EK_VER);
    }
}, 20);
add_filter('query_vars', function ($vars) { $vars[] = 'ek_zakat_page'; return $vars; });
add_filter('template_include', function ($template) {
    if (get_query_var('ek_zakat_page')) {
        $t = get_stylesheet_directory() . '/page-zakat-calculator.php';
        if (file_exists($t)) return $t;
    }
    return $template;
});

/* ---- Downloads page routing (Hindi mirror of godalone.in/downloads/; no wp-admin page exists for this slug) ---- */
add_action('init', function () {
    add_rewrite_rule('^downloads/?$', 'index.php?ek_downloads_page=1', 'top');
    if (get_option('ek_downloads_rewrite_flushed') !== EK_VER) {
        flush_rewrite_rules(false);
        update_option('ek_downloads_rewrite_flushed', EK_VER);
    }
}, 20);
add_filter('query_vars', function ($vars) { $vars[] = 'ek_downloads_page'; return $vars; });
add_filter('template_include', function ($template) {
    if (get_query_var('ek_downloads_page')) {
        $t = get_stylesheet_directory() . '/page-downloads.php';
        if (file_exists($t)) return $t;
    }
    return $template;
});
/* ---- Videos page routing (playlists hub, EN/TA/HI; no wp-admin page exists for this slug) ---- */
add_action('init', function () {
add_rewrite_rule('^videos/?$', 'index.php?ek_videos_page=1', 'top');
if (get_option('ek_videos_rewrite_flushed') !== EK_VER) {
flush_rewrite_rules(false);
update_option('ek_videos_rewrite_flushed', EK_VER);
}
}, 20);
add_filter('query_vars', function ($vars) { $vars[] = 'ek_videos_page'; return $vars; });
add_filter('template_include', function ($template) {
if (get_query_var('ek_videos_page')) {
    $t = get_stylesheet_directory() . '/page-videos.php';
    if (file_exists($t)) return $t;
    }
    return $template;
    });
    
/* ---- Introduction page routing (Hindi; no wp-admin page exists for this slug) ---- */
add_action('init', function () {
    add_rewrite_rule('^introduction/?$', 'index.php?ek_intro_page=1', 'top');
    if (get_option('ek_intro_rewrite_flushed') !== EK_VER) {
        flush_rewrite_rules(false);
        update_option('ek_intro_rewrite_flushed', EK_VER);
    }
}, 20);
add_filter('query_vars', function ($vars) { $vars[] = 'ek_intro_page'; return $vars; });
add_filter('template_include', function ($template) {
    if (get_query_var('ek_intro_page')) {
        $t = get_stylesheet_directory() . '/page-introduction.php';
        if (file_exists($t)) return $t;
    }
    return $template;
});

/* ---- About / Privacy / Copyright routing (no wp-admin page) ---- */
add_action('init', function () {
    add_rewrite_rule('^(about|privacy-policy|copyright)/?$', 'index.php?ek_legal=$matches[1]', 'top');
    if (get_option('ek_legal_rewrite_flushed') !== EK_VER) {
        flush_rewrite_rules(false);
        update_option('ek_legal_rewrite_flushed', EK_VER);
    }
}, 20);
add_filter('query_vars', function ($vars) { $vars[] = 'ek_legal'; return $vars; });
add_filter('template_include', function ($template) {
    if (get_query_var('ek_legal')) {
        $t = get_stylesheet_directory() . '/page-legal.php';
        if (file_exists($t)) return $t;
    }
    return $template;
});

/* ---- Picture Messages (/picture-messages) ---- */
if (file_exists(get_stylesheet_directory() . '/inc-picture-messages.php')) { try { require_once get_stylesheet_directory() . '/inc-picture-messages.php'; } catch (\Throwable $e) { } }

/* ---- New-here pages routing (/is-this-for-me, /is-the-quran-enough, /check-it-yourself; no wp-admin pages) ---- */
add_action('init', function () {
    add_rewrite_rule('^is-this-for-me/?$', 'index.php?ek_forme_page=1', 'top');
    add_rewrite_rule('^is-the-quran-enough/?$', 'index.php?ek_qenough_page=1', 'top');
    add_rewrite_rule('^check-it-yourself/?$', 'index.php?ek_check_page=1', 'top');
    if (get_option('ek_newhere_rewrite_flushed') !== EK_VER) {
        flush_rewrite_rules(false);
        update_option('ek_newhere_rewrite_flushed', EK_VER);
    }
}, 20);
add_filter('query_vars', function ($vars) { $vars[] = 'ek_forme_page'; $vars[] = 'ek_qenough_page'; $vars[] = 'ek_check_page'; return $vars; });
add_filter('template_include', function ($template) {
    $map = array('ek_forme_page' => 'page-is-this-for-me.php', 'ek_qenough_page' => 'page-is-the-quran-enough.php', 'ek_check_page' => 'page-check-it-yourself.php');
    foreach ($map as $qv => $file) {
        if (get_query_var($qv)) {
            $t = get_stylesheet_directory() . '/' . $file;
            if (file_exists($t)) return $t;
        }
    }
    return $template;
});

/* ---- Homepage SEO: Hindi description, html lang (ek_home_seo_desc) ---- */
function ek_home_seo_desc() { return 'एक ख़ुदा – सिर्फ़ अल्लाह की इताअत में ख़ुशी। क़ुरआन का हिंदी अनुवाद, ऑडियो, वीडियो, किताबें और 19 कैलकुलेटर।'; }
foreach (array('aioseo_description', 'aioseo_og_description', 'aioseo_twitter_description') as $ek_a) {
    add_filter($ek_a, function ($d) { return is_front_page() ? ek_home_seo_desc() : $d; });
}
foreach (array('wpseo_metadesc', 'wpseo_opengraph_desc', 'wpseo_twitter_description') as $ek_h) {
    add_filter($ek_h, function ($d) { return is_front_page() ? ek_home_seo_desc() : $d; });
}
add_action('wp_head', function () {
    if (is_front_page() && !defined('WPSEO_VERSION') && !function_exists('aioseo')) {
        echo '<meta name="description" content="' . esc_attr(ek_home_seo_desc()) . '">' . "\n";
    }
}, 1);
add_filter('language_attributes', function ($o) { return preg_replace('/lang="[^"]*"/', 'lang="hi"', $o); });

/* ---- Contact page routing (/contact, no wp-admin page) ---- */
add_action('init', function () {
    add_rewrite_rule('^contact/?$', 'index.php?ek_contact_page=1', 'top');
    if (get_option('ek_contact_rewrite_flushed') !== EK_VER) {
        flush_rewrite_rules(false);
        update_option('ek_contact_rewrite_flushed', EK_VER);
    }
}, 20);
add_filter('query_vars', function ($vars) { $vars[] = 'ek_contact_page'; return $vars; });
add_filter('template_include', function ($template) {
    if (get_query_var('ek_contact_page')) {
        $t = get_stylesheet_directory() . '/page-contact.php';
        if (file_exists($t)) return $t;
    }
    return $template;
});

/* ---- Firebase config (Google sign-in) — same project as godalone.in ---- */
function ek_firebase_config() {
	return array(
		'apiKey' => 'AIzaSyAIvmDEiHvbxsyqIqvPnGg08aik1ra4yIw',
		'authDomain' => 'bayyinah-c110a.firebaseapp.com',
		'projectId' => 'bayyinah-c110a',
		'storageBucket' => 'bayyinah-c110a.firebasestorage.app',
		'messagingSenderId' => '831184810834',
		'appId' => '1:831184810834:web:b134bfb3ef6014e9ebc08b',
	);
}

/* ---- Theme supports ---- */
add_action('after_setup_theme', function () {
	add_theme_support('title-tag');
	add_theme_support('post-thumbnails');
	add_theme_support('automatic-feed-links');
	add_theme_support('html5', array('search-form','gallery','caption','style','script'));
	add_theme_support('responsive-embeds');
	add_theme_support('custom-logo', array('height'=>80,'width'=>80,'flex-height'=>true,'flex-width'=>true));
	register_nav_menus(array(
		'primary' => __('Primary Menu', 'ekkhuda'),
		'footer' => __('Footer Menu', 'ekkhuda'),
	));
});

/* ---- Assets ---- */
add_action('wp_enqueue_scripts', function () {
	// Google Fonts — same stack as godalone.in (Devanagari already included)
	wp_enqueue_style(
		'ek-fonts',
		'https://fonts.googleapis.com/css2?family=Marcellus&family=Inter:wght@400;500;600;700;800&family=Amiri:wght@400;700&family=Scheherazade+New:wght@400;700&family=Noto+Sans+Tamil:wght@400;500;600;700&family=Noto+Sans+Devanagari:wght@400;500;600;700&display=swap',
		array(), null
	);
	wp_enqueue_style('ek-style', get_stylesheet_uri(), array('ek-fonts'), EK_VER);

	// Firebase (compat build — same as godalone.in / kadavulmattum.org)
	wp_enqueue_script('ek-firebase-app', 'https://www.gstatic.com/firebasejs/10.14.1/firebase-app-compat.js', array(), null, false);
	wp_enqueue_script('ek-firebase-auth', 'https://www.gstatic.com/firebasejs/10.14.1/firebase-auth-compat.js', array('ek-firebase-app'), null, false);

	wp_enqueue_script('ek-main', get_template_directory_uri() . '/assets/js/main.js', array(), EK_VER, true);
	wp_localize_script('ek-main', 'EK', array(
		'ajax' => admin_url('admin-ajax.php'),
		'nonce' => wp_create_nonce('ek_news'),
		'firebase' => ek_firebase_config(),
		'quran' => 'https://godalone.in/quran/',
	));
});

/* ---- Newsletter subscribe (AJAX) ---- */
function ek_newsletter_subscribe() {
	// Honeypot + minimum fill-time (anti-bot)
	if (!empty($_POST['website'])) { wp_send_json(array('success'=>true,'data'=>'Shukriya, aapki subscription mil gayi!')); }
	$loaded = isset($_POST['form_load_time']) ? intval($_POST['form_load_time']) : 0;
	if ($loaded && (time() - $loaded) < 2) { wp_send_json(array('success'=>false,'data'=>'Meherbani karke dobara koshish karein.')); }

	$email = isset($_POST['newsletter_email']) ? sanitize_email(wp_unslash($_POST['newsletter_email'])) : '';
	$lang = isset($_POST['newsletter_language']) ? sanitize_text_field(wp_unslash($_POST['newsletter_language'])) : 'hindi';
	if (!$email || !is_email($email)) {
		wp_send_json(array('success'=>false,'data'=>'Meherbani karke sahi email address likhein.'));
	}

	$subs = get_option('ekkhuda_subscribers', array());
	$subs[$email] = array('lang'=>$lang, 'time'=>current_time('mysql'));
	update_option('ekkhuda_subscribers', $subs, false);

	@wp_mail(
		get_option('admin_email'),
		'New newsletter subscriber — EkKhuda.org',
		"Email: {$email}\nLanguage: {$lang}\nWhen: " . current_time('mysql')
	);

	wp_send_json(array('success'=>true,'data'=>'Subscribe ho gaya, Insha\'Allah! Allah qabool farmaaye.'));
}
add_action('wp_ajax_newsletter_subscribe', 'ek_newsletter_subscribe');
add_action('wp_ajax_nopriv_newsletter_subscribe', 'ek_newsletter_subscribe');

/* ---- Contact form submission (AJAX). Used by the Contact page's message form. ---- */
function ek_submit_contact_form() {
    $nonce = isset($_POST['nonce']) ? sanitize_text_field(wp_unslash($_POST['nonce'])) : '';
    if (!wp_verify_nonce($nonce, 'contact_form_nonce')) {
        wp_send_json(array('success' => false, 'data' => 'सुरक्षा जाँच विफल रही। कृपया पेज रीफ़्रेश करके दोबारा कोशिश कीजिए।'));
    }
    if (!empty($_POST['website'])) {
        wp_send_json(array('success' => true, 'data' => 'आपका संदेश मिल गया। जज़ाकल्लाह ख़ैर!'));
    }
    $name    = isset($_POST['contact_name']) ? sanitize_text_field(wp_unslash($_POST['contact_name'])) : '';
    $email   = isset($_POST['contact_email']) ? sanitize_email(wp_unslash($_POST['contact_email'])) : '';
    $phone   = isset($_POST['contact_phone']) ? sanitize_text_field(wp_unslash($_POST['contact_phone'])) : '';
    $message = isset($_POST['contact_message']) ? sanitize_textarea_field(wp_unslash($_POST['contact_message'])) : '';
    if (!$name || !$email || !is_email($email) || !$message) {
        wp_send_json(array('success' => false, 'data' => 'कृपया सभी ज़रूरी खाने भरिए।'));
    }
    $headers = array('Reply-To: ' . $name . ' <' . $email . '>');
    $body = "Naam: {$name}\nEmail: {$email}\nPhone: {$phone}\n\n{$message}";
    @wp_mail('info@godalone.in', 'New contact message - EkKhuda.org', $body, $headers);
    wp_send_json(array('success' => true, 'data' => 'आपका संदेश मिल गया। जज़ाकल्लाह ख़ैर!'));
}
add_action('wp_ajax_submit_contact_form', 'ek_submit_contact_form');
add_action('wp_ajax_nopriv_submit_contact_form', 'ek_submit_contact_form');

/* ---- Admin: list newsletter subscribers ---- */
add_action('admin_menu', function () {
	add_options_page('EkKhuda Subscribers', 'EkKhuda Subscribers', 'manage_options', 'ek-subscribers', function () {
		$subs = get_option('ekkhuda_subscribers', array());
		echo '<div class="wrap"><h1>Newsletter Subscribers (' . count($subs) . ')</h1>';
		echo '<table class="widefat striped"><thead><tr><th>Email</th><th>Language</th><th>Date</th></tr></thead><tbody>';
		foreach ($subs as $em => $row) {
			$lang = is_array($row) ? esc_html($row['lang']) : '';
			$time = is_array($row) ? esc_html($row['time']) : '';
			echo '<tr><td>' . esc_html($em) . '</td><td>' . $lang . '</td><td>' . $time . '</td></tr>';
		}
		echo '</tbody></table></div>';
	}, 'dashicons-email', 26);
});

/* ---- Helper: render the primary nav (falls back to the built-in link set) ---- */
function ek_primary_menu() {
	if (has_nav_menu('primary')) {
		wp_nav_menu(array('theme_location'=>'primary','container'=>false,'items_wrap'=>'%3$s','fallback_cb'=>'ek_default_menu'));
	} else {
		ek_default_menu();
	}
}
function ek_default_menu() {
	$items = array(
		array('🏠', 'होम', home_url('/'), ''),
		array('📖', 'तआरुफ़', home_url('/introduction'), ''),
        array('🤔', 'क्या यह मेरे लिए है?', home_url('/is-this-for-me'), ''),
        array('📖', 'क्या क़ुरआन काफ़ी है?', home_url('/is-the-quran-enough'), ''),
        array('🧮', 'ख़ुद जाँचिए', home_url('/check-it-yourself'), ''),
		array('🔢', 'गणित का करिश्मा', home_url('/mathematical-miracle'), ''),
		array('💻', 'ऑनलाइन क़ुरआन', 'https://godalone.in/quran/', '_blank'),
		array('📱', 'क़ुरआन डाउनलोड', home_url('/downloads'), ''),
		array('🎧', 'क़ुरआन ऑडियो', home_url('/audio-quran'), ''),
		array('🖼️', 'तस्वीरी पैग़ाम', home_url('/picture-messages'), ''),
		array('🛒', 'क़ुरआन ख़रीदें', '#buy', 'buy'),
		array('📚', 'लाइब्रेरी', 'https://ekkhuda.org/library/', ''),
		array('🎥', 'वीडियो', home_url('/videos'), ''),
		array('🤖', 'Telegram बॉट', 'https://t.me/quranalonebot', '_blank'),
		array('🕌', 'नमाज़ और रमज़ान का समय', home_url('/salat-timing'), ''),
		array('🌙', 'रमज़ान कैलकुलेटर', home_url('/ramadan-calculator'), ''),
		array('💰', 'ज़रूरी दान (ज़कात)', home_url('/zakat-calculator'), ''),
		array('🧰', 'सभी साधन', home_url('/utilities'), ''),
		array('❓', 'क़ुरआन के सवाल-जवाब', home_url('/quran-qa'), ''),
		array('💬', 'अक्सर पूछे जाने वाले सवाल', home_url('/faq'), ''),
		array('❤️', 'चैरिटी ट्रस्ट', home_url('/charity'), ''),
		array('📞', 'राब्ता', home_url('/contact'), ''),
	);
	foreach ($items as $it) {
		list($emoji, $label, $url, $mode) = $it;
		if ($mode === 'buy') {
			echo '<a class="gh-buy" href="#buy">' . $emoji . ' ' . esc_html($label) . '</a>';
		} else {
			$tgt = $mode === '_blank' ? ' target="_blank" rel="noopener"' : '';
			echo '<a href="' . esc_url($url) . '"' . $tgt . '>' . $emoji . ' ' . esc_html($label) . '</a>';
		}
	}
}

/* ---- Body class helper so front-page sections style correctly ---- */
add_filter('body_class', function ($c) { $c[] = 'ek'; return $c; });


/* ============================================================
 * Advanced Search Engine (kh_index) — Hindi (ekkhuda.org)
 * ============================================================ */

add_action('init', function () {
    register_post_type('kh_index', array(
        'label' => 'Search Index',
        'public' => false,
        'publicly_queryable' => true,
        'exclude_from_search' => false,
        'show_ui' => false,
        'supports' => array('title', 'excerpt', 'editor'),
    ));
});

add_action('pre_get_posts', function ($q) {
    if (is_admin() || !$q->is_main_query() || !$q->is_search()) return;
    $pt = $q->get('post_type');
    if (empty($pt)) $pt = array('post', 'page');
    if (!is_array($pt)) $pt = array($pt);
    if (!in_array('kh_index', $pt, true)) $pt[] = 'kh_index';
    $q->set('post_type', $pt);
});

function kh_index_url($post_id) {
    $u = get_post_meta($post_id, '_kh_url', true);
    return $u ? $u : get_permalink($post_id);
}

/* ---------- Highlighting ---------- */
function kh_highlight_plain($text, $q) {
    $q = trim((string) $q);
    $safe = esc_html($text);
    if ($q === '') return $safe;
    $safe = preg_replace('/(' . preg_quote(esc_html($q), '/') . ')/iu', '<mark class="srch-hl">$1</mark>', $safe);
    return $safe;
}
function kh_highlight_excerpt($text, $q, $len = 220) {
    $q = trim((string) $q);
    $text = wp_strip_all_tags($text);
    if ($q !== '' && mb_stripos($text, $q) !== false) {
        $pos = mb_stripos($text, $q);
        $start = max(0, $pos - 80);
        $excerpt = ($start > 0 ? '… ' : '') . mb_substr($text, $start, $len) . (mb_strlen($text) > $start + $len ? ' …' : '');
    } else {
        $excerpt = mb_substr($text, 0, $len) . (mb_strlen($text) > $len ? ' …' : '');
    }
    return kh_highlight_plain($excerpt, $q);
}

/* ---------- Verse-number detection ---------- */
function kh_looks_like_verse($q) {
    $q = trim((string) $q);
    if ($q === '') return false;
    if (preg_match('/^\d{1,3}\s*[:.\-]\s*\d{1,3}$/', $q)) return true;
    if (preg_match('/^\d{1,3}$/', $q)) {
        $n = (int) $q;
        if ($n >= 1 && $n <= 114) return true;
    }
    return false;
}

function kh_enrich_content($title, $fallback) {
    $map = array(
        'ज़रूरी दान (ज़कात)' => 'ज़कात हमारी शुद्ध आमदनी का 2.5% है, जो मिलने वाले दिन ही अदा करनी ज़रूरी है। ज़रूरी दान (ज़कात) फ़सल की कटाई वाले दिन ही अदा किया जाना चाहिए (6:141)। जब भी हमें शुद्ध आमदनी मिले, हमें उसका 2.5% अलग रखकर वालिदैन, रिश्तेदारों, यतीमों, ग़रीबों और मुसाफ़िर को देना चाहिए, इसी तरतीब में (2:215)। मेरी रहमत हर चीज़ को घेरे हुए है, मगर मैं इसे उन नेक लोगों के लिए ख़ास करता हूं जो ज़कात देते हैं (7:156)। क़ुरआन 6:141, 2:215, 7:156।',
        '19 कैलकुलेटर' => 'बड़ी से बड़ी संख्या को 19 से तक़सीम करने का आसान कैलकुलेटर — कोई भी लंबी संख्या 19 से तक़सीम होती है या नहीं, फ़ौरन मालूम करें। क़ुरआन में 114 सूरतें हैं = 19x6। लफ़्ज़ "अल्लाह" 2698 बार आया है = 19x142। क़ुरआन में कुल 6346 आयतें हैं = 19x334। "उस पर उन्नीस हैं" — क़ुरआन 74:30। क़ुरआन का रियाज़ी (गणितीय) मोजज़ा, संख्या 19 पर आधारित।',
    );
    return isset($map[$title]) ? ($map[$title] . ' ' . $fallback) : $fallback;
}

function kh_seed_index_items() {
    return array(
        array('title' => 'ज़रूरी दान (ज़कात)', 'url' => home_url('/zakat-calculator/'), 'excerpt' => 'अपनी शुद्ध आमदनी का 2.5% ज़कात रक़म फ़ौरन हिसाब लगाएं।'),
        array('title' => '19 कैलकुलेटर', 'url' => home_url('/calculator-19/'), 'excerpt' => 'कोई भी संख्या 19 से तक़सीम होती है या नहीं, फ़ौरन जांचें।'),
        array('title' => 'नमाज़ और रमज़ान का समय', 'url' => home_url('/salat-timing/'), 'excerpt' => 'अपने शहर के नमाज़ और रमज़ान के औक़ात देखें।'),
        array('title' => 'रमज़ान कैलकुलेटर', 'url' => home_url('/ramadan-calculator/'), 'excerpt' => 'रमज़ान के दिन और औक़ात का हिसाब।'),
        array('title' => 'सभी साधन', 'url' => home_url('/utilities/'), 'excerpt' => 'नमाज़, रमज़ान, ज़कात और 19 कैलकुलेटर एक जगह।'),
        array('title' => 'क़ुरआन के सवाल-जवाब', 'url' => home_url('/quran-qa/'), 'excerpt' => 'क़ुरआन से जुड़े सवाल और जवाब।'),
        array('title' => 'अक्सर पूछे जाने वाले सवाल', 'url' => home_url('/faq/'), 'excerpt' => 'आम सवालों के जवाब क़ुरआन की आयतों के साथ।'),
        array('title' => 'चैरिटी ट्रस्ट', 'url' => home_url('/charity/'), 'excerpt' => 'हमारा चैरिटी ट्रस्ट।'),
        array('title' => 'क़ुरआन ऑडियो', 'url' => home_url('/audio-quran/'), 'excerpt' => 'अरबी तिलावत और हिन्दी अनुवाद सुनें।'),
        array('title' => 'गणित का करिश्मा', 'url' => home_url('/mathematical-miracle/'), 'excerpt' => 'क़ुरआन में 19 का गणितीय चमत्कार।'),
    );
}

function kh_seed_index() {
    foreach (kh_seed_index_items() as $it) {
        $key = 'kh_' . md5($it['url']);
        $existing = get_posts(array('post_type' => 'kh_index', 'meta_key' => '_kh_key', 'meta_value' => $key, 'posts_per_page' => 1, 'post_status' => 'any'));
        $postarr = array(
            'post_type' => 'kh_index',
            'post_status' => 'publish',
            'post_title' => $it['title'],
            'post_excerpt' => $it['excerpt'],
            'post_content' => kh_enrich_content($it['title'], $it['excerpt']),
        );
        if ($existing) {
            $postarr['ID'] = $existing[0]->ID;
            wp_update_post($postarr);
            $pid = $existing[0]->ID;
        } else {
            $pid = wp_insert_post($postarr);
        }
        if ($pid && !is_wp_error($pid)) {
            update_post_meta($pid, '_kh_key', $key);
            update_post_meta($pid, '_kh_url', $it['url']);
        }
    }
}

add_action('init', function () {
    $ver = 'kh1.1.0';
    if (get_option('kh_index_seeded_ver') !== $ver) {
        kh_seed_index();
        update_option('kh_index_seeded_ver', $ver);
    }
}, 20);


// Sharing picture + preview text (Open Graph / Twitter) - no SEO plugin on this site
add_action('wp_head', function(){
	$img  = home_url('/wp-content/uploads/2026/10/share-hi.png?v=nl3');
	$desc = get_bloginfo('description');
	$url  = is_front_page() ? home_url('/') : get_permalink();
	echo "\n<meta property=\"og:type\" content=\"website\" />\n";
	echo '<meta property="og:site_name" content="' . esc_attr(get_bloginfo('name')) . '" />' . "\n";
	echo '<meta property="og:title" content="' . esc_attr(wp_get_document_title()) . '" />' . "\n";
	if ($desc) { echo '<meta property="og:description" content="' . esc_attr($desc) . '" />' . "\n"; }
	if ($url) { echo '<meta property="og:url" content="' . esc_url($url) . '" />' . "\n"; }
	echo '<meta property="og:image" content="' . esc_url($img) . '" />' . "\n";
	echo '<meta property="og:image:width" content="1200" />' . "\n";
	echo '<meta property="og:image:height" content="630" />' . "\n";
	echo '<meta name="twitter:card" content="summary_large_image" />' . "\n";
	echo '<meta name="twitter:image" content="' . esc_url($img) . '" />' . "\n";
}, 5);

require_once get_template_directory() . '/inc-bottombar.php';

/* ---- Hindi pages ported from godalone.in (no wp-admin page exists for these slugs) 15-10-2026 ---- */
if (!function_exists('ek_hindi_pages_map')) {
	function ek_hindi_pages_map() {
		return array(
			'salat-timing'         => 'page-salat-timing.php',
			'ramadan-calculator'   => 'page-ramadan-calculator.php',
			'faq'                  => 'page-faq.php',
			'charity'              => 'page-charity.php',
			'utilities'            => 'page-utilities.php',
			'mathematical-miracle' => 'page-mathematical-miracle.php',
			'audio-quran'          => 'page-audio-quran.php',
			'quran-qa'             => 'page-quran-qa.php',
		);
	}
}
add_action('init', function () {
	foreach (array_keys(ek_hindi_pages_map()) as $slug) {
		add_rewrite_rule('^' . $slug . '/?$', 'index.php?ek_hpage=' . $slug, 'top');
	}
	if (get_option('ek_hpages_rewrite_flushed') !== EK_VER) {
		flush_rewrite_rules(false);
		update_option('ek_hpages_rewrite_flushed', EK_VER);
	}
}, 21);
add_filter('query_vars', function ($vars) { $vars[] = 'ek_hpage'; return $vars; });
add_filter('template_include', function ($template) {
	$s = get_query_var('ek_hpage');
	$m = ek_hindi_pages_map();
	if ($s && isset($m[$s])) {
		$t = get_stylesheet_directory() . '/' . $m[$s];
		if (file_exists($t)) {
			status_header(200);
			return $t;
		}
	}
	return $template;
});

add_action('template_redirect', function(){ $u = isset($_SERVER['REQUEST_URI']) ? strtok($_SERVER['REQUEST_URI'],'?') : ''; if (rtrim($u,'/') === '/mathematical-miracle' && !file_exists(get_stylesheet_directory().'/page-mathematical-miracle.php')) { wp_safe_redirect(home_url('/check-it-yourself/'), 302); exit; } }, 1);

/* new logo 15-10-2026: cache-bust site icons (tab, apple-touch, tile) */
add_filter('get_site_icon_url', function($url){ return $url ? add_query_arg('v','nl3',$url) : $url; });

/* 15-10-2026: browsers were keeping page HTML for 7 days (max-age=604800) so visitors missed updates; keep HTML fresh for 10 min, assets keep their own long caching */
add_action('send_headers', function(){ if (is_admin() || is_user_logged_in() || (defined('DOING_AJAX') && DOING_AJAX) || (defined('REST_REQUEST') && REST_REQUEST)) return; header('Cache-Control: public, max-age=600, must-revalidate', true); }, 99);
