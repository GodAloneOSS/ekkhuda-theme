<?php
/**
 * EkKhuda Premium — theme functions
 *
 * Hindi/Hindustani sister-site of godalone-premium. Same structure: assets,
 * menus, theme supports, Firebase login config, newsletter subscribe AJAX,
 * and contact-form AJAX. Reuses the same Firebase project as godalone.in
 * and kadavulmattum.org so Google sign-in works the same way everywhere.
 */

if (!defined('ABSPATH')) exit;

if (!defined('EK_VER')) define('EK_VER', '1.1.2');

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
		wp_send_json(array('success'=>false,'data'=>'Security check fail ho gaya. Meherbani karke page refresh karke dobara koshish karein.'));
	}
	$name = isset($_POST['contact_name']) ? sanitize_text_field(wp_unslash($_POST['contact_name'])) : '';
	$email = isset($_POST['contact_email']) ? sanitize_email(wp_unslash($_POST['contact_email'])) : '';
	$message = isset($_POST['contact_message']) ? sanitize_textarea_field(wp_unslash($_POST['contact_message'])) : '';
	if (!$name || !$email || !is_email($email) || !$message) {
		wp_send_json(array('success'=>false,'data'=>'Meherbani karke saare khaane bharein.'));
	}
	@wp_mail(
		get_option('admin_email'),
		'New contact message — EkKhuda.org',
		"Naam: {$name}\nEmail: {$email}\n\n{$message}"
	);
	wp_send_json(array('success'=>true,'data'=>'Aapka paighaam mil gaya. Jazak Allah khair!'));
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
		array('🔢', 'गणित का करिश्मा', home_url('/mathematical-miracle'), ''),
		array('💻', 'ऑनलाइन क़ुरआन', 'https://godalone.in/quran/', '_blank'),
		array('📱', 'क़ुरआन डाउनलोड', home_url('/downloads'), ''),
		array('🎧', 'क़ुरआन ऑडियो', home_url('/audio-quran'), ''),
		array('🛒', 'क़ुरआन ख़रीदें', '#buy', 'buy'),
		array('📚', 'लाइब्रेरी', 'https://ekkhuda.org/library/', ''),
		array('🎥', 'वीडियो', home_url('/videos'), ''),
		array('🤖', 'Telegram बॉट', 'https://t.me/quranalonebot', '_blank'),
		array('❤️', 'ख़ैराती ट्रस्ट', home_url('/charity'), ''),
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
    $ver = 'kh1.0.0';
    if (get_option('kh_index_seeded_ver') !== $ver) {
        kh_seed_index();
        update_option('kh_index_seeded_ver', $ver);
    }
}, 20);
