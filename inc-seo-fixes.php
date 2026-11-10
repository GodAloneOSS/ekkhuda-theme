<?php
/* GodAlone SEO, language and security refinements (added 04-11-2026). Delete this file to switch everything off. */
if (!defined("ABSPATH")) { exit; }
function ga_hreflang_pages() {
    return array(
        'introduction' => array('en' => 'introduction', 'ta' => 'introduction', 'hi' => 'introduction'),
        'is-this-for-me' => array('en' => 'is-this-for-me', 'ta' => 'is-this-for-me', 'hi' => 'is-this-for-me'),
        'is-the-quran-enough' => array('en' => 'is-the-quran-enough', 'ta' => 'is-the-quran-enough', 'hi' => 'is-the-quran-enough'),
        'check-it-yourself' => array('en' => 'check-it-yourself', 'ta' => 'check-it-yourself', 'hi' => 'check-it-yourself'),
        'mathematical-miracle' => array('en' => 'mathematical-miracle', 'ta' => 'mathematical-miracle', 'hi' => 'mathematical-miracle'),
        'downloads' => array('en' => 'downloads', 'ta' => 'downloads', 'hi' => 'downloads'),
        'audio' => array('en' => 'audio-quran', 'ta' => 'audios', 'hi' => 'audio-quran'),
        'picture-messages' => array('en' => 'picture-messages', 'ta' => 'picture-messages', 'hi' => 'picture-messages'),
        'library' => array('en' => 'library', 'ta' => 'library', 'hi' => 'library'),
        'videos' => array('en' => 'videos', 'ta' => 'videos', 'hi' => 'videos'),
        'charity' => array('en' => 'charity', 'ta' => 'charity', 'hi' => 'charity'),
        'contact' => array('en' => 'contact', 'ta' => 'contact', 'hi' => 'contact'),
        'faq' => array('en' => 'faq', 'ta' => 'faq', 'hi' => 'faq'),
        'utilities' => array('en' => 'utilities', 'ta' => 'utilities', 'hi' => 'utilities'),
        'salat-timing' => array('en' => 'salat-timing', 'ta' => 'salat-timing', 'hi' => 'salat-timing'),
        'ramadan-calculator' => array('en' => 'ramadan-calculator', 'ta' => 'ramadan-calculator', 'hi' => 'ramadan-calculator'),
        'zakat-calculator' => array('en' => 'zakat-calculator', 'ta' => 'zakat-calculator', 'hi' => 'zakat-calculator'),
        'calculator-19' => array('en' => 'calculator-19', 'ta' => 'calculator-19', 'hi' => 'calculator-19'),
        'coloring-book' => array('en' => 'coloring-book', 'ta' => 'coloring-book', 'hi' => 'coloring-book'),
        'quran-qa' => array('en' => 'quran-qa', 'ta' => 'quran-qa', 'hi' => 'quran-qa'),
        'privacy-policy' => array('en' => 'privacy-policy', 'ta' => 'privacy-policy', 'hi' => 'privacy-policy'),
        'copyright' => array('en' => 'copyright', 'ta' => 'copyright', 'hi' => 'copyright'),
        'about' => array('en' => 'about', 'ta' => 'about', 'hi' => 'about'),
    );
}
add_action('wp_head', function () {
    $self = 'hi';
    $bases = array('en' => 'https://godalone.in', 'ta' => 'https://kadavulmattum.org', 'hi' => 'https://ekkhuda.org');
    if (is_404() || is_admin()) { return; }
    $reqPath = isset($_SERVER['REQUEST_URI']) ? trim((string) parse_url((string) $_SERVER['REQUEST_URI'], PHP_URL_PATH), '/') : '';
    $paths = array();
    if ($reqPath === '') {
        foreach ($bases as $l => $b) { $paths[$l] = $b . '/'; }
    } elseif (strpos($reqPath, '/') === false) {
        foreach (ga_hreflang_pages() as $row) {
            if (isset($row[$self]) && $row[$self] === $reqPath) {
                foreach ($bases as $l => $b) { if (isset($row[$l])) { $paths[$l] = $b . '/' . $row[$l] . '/'; } }
                break;
            }
        }
    }
    if (count($paths) < 2) { return; }
    foreach ($paths as $l => $u) { echo '<link rel="alternate" hreflang="' . esc_attr($l) . '" href="' . esc_url($u) . '" />' . "\n"; }
    if (isset($paths['en'])) { echo '<link rel="alternate" hreflang="x-default" href="' . esc_url($paths['en']) . '" />' . "\n"; }
}, 5);
add_action('send_headers', function () {
    if (is_admin()) { return; }
    header_remove('X-Powered-By');
    header('X-Content-Type-Options: nosniff');
    header('X-Frame-Options: SAMEORIGIN');
    header('Referrer-Policy: strict-origin-when-cross-origin');
    header('Strict-Transport-Security: max-age=31536000');
}, 1);
add_filter('rest_endpoints', function ($endpoints) {
    if (!is_user_logged_in()) {
        foreach (array('/wp/v2/users', '/wp/v2/users/(?P<id>[\d]+)') as $route) {
            if (isset($endpoints[$route])) { unset($endpoints[$route]); }
        }
    }
    return $endpoints;
});
add_action('template_redirect', function () {
    if (isset($_GET['author']) && !is_user_logged_in() && !is_admin()) { wp_safe_redirect(home_url('/'), 301); exit; }
}, 1);
remove_action('wp_head', 'wp_generator');


/* ---- Page-level rewrite: hreflang for pages with own header + proper titles/descriptions (added 04-11-2026) ---- */
function ga_hi_seo_rewrite($html) {
    try {
        if (!is_string($html) || strlen($html) < 500 || stripos($html, '</head>') === false) { return $html; }
        $path = isset($_SERVER['REQUEST_URI']) ? trim((string) parse_url((string) $_SERVER['REQUEST_URI'], PHP_URL_PATH), '/') : '';
        if ($path === '' || strpos($path, '/') !== false) { return $html; }
        if (function_exists('http_response_code') && http_response_code() !== 200) { return $html; }
        $bases = array('en' => 'https://godalone.in', 'ta' => 'https://kadavulmattum.org', 'hi' => 'https://ekkhuda.org');
        if (stripos($html, 'hreflang=') === false) {
            foreach (ga_hreflang_pages() as $row) {
                if (isset($row['hi']) && $row['hi'] === $path) {
                    $tags = '';
                    foreach ($bases as $l => $b) { if (isset($row[$l])) { $tags .= '<link rel="alternate" hreflang="' . $l . '" href="' . esc_url($b . '/' . $row[$l] . '/') . '" />' . "\n"; } }
                    if (isset($row['en'])) { $tags .= '<link rel="alternate" hreflang="x-default" href="' . esc_url($bases['en'] . '/' . $row['en'] . '/') . '" />' . "\n"; }
                    $pos = stripos($html, '</head>');
                    $html = substr($html, 0, $pos) . $tags . substr($html, $pos);
                    break;
                }
            }
        }
        if (preg_match('#<title>([^<]*)</title>#u', $html, $m) && strpos($m[1], 'एक ख़ुदा | EkKhuda.org') === 0) {
            if (preg_match('#<h1[^>]*>(.*?)</h1>#isu', $html, $hm, PREG_OFFSET_CAPTURE)) {
                $h1 = trim(html_entity_decode(wp_strip_all_tags($hm[1][0]), ENT_QUOTES, 'UTF-8'));
                $h1 = trim(preg_replace('/^[^\p{L}\p{N}]+/u', '', $h1));
                if ($h1 !== '' && strpos($h1, 'एक ख़ुदा') !== 0) {
                    $rest0 = substr($html, $hm[0][1] + strlen($hm[0][0]));
                    $title = esc_html($h1 . ' | EkKhuda.org');
                    $html = preg_replace_callback('#<title>[^<]*</title>#u', function ($x) use ($title) { return '<title>' . $title . '</title>'; }, $html, 1);
                    $html = preg_replace_callback('#<meta\s[^>]*?(?:name|property)=(["\'])(?:og:title|twitter:title)\1[^>]*>#iu', function ($x) use ($title) {
                        return preg_replace_callback('#content=(["\']).*?\1#isu', function ($y) use ($title) { return 'content="' . $title . '"'; }, $x[0], 1);
                    }, $html);
                    $desc = '';
                    $rest = $rest0;
                    if (preg_match_all('#<p[^>]*>(.*?)</p>#isu', $rest, $pm)) {
                        foreach ($pm[1] as $ptxt) {
                            $s = trim(preg_replace('/\s+/u', ' ', html_entity_decode(wp_strip_all_tags($ptxt), ENT_QUOTES, 'UTF-8')));
                            if (mb_strlen($s) >= 60) { $desc = mb_strlen($s) > 155 ? mb_substr($s, 0, 152) . '...' : $s; break; }
                        }
                    }
                    if ($desc !== '') {
                        $d = esc_attr($desc);
                        $found = false;
                        $html = preg_replace_callback('#<meta\s[^>]*?(?:name|property)=(["\'])(?:description|og:description|twitter:description)\1[^>]*>#iu', function ($x) use ($d, &$found) {
                            $found = true;
                            return preg_replace_callback('#content=(["\']).*?\1#isu', function ($y) use ($d) { return 'content="' . $d . '"'; }, $x[0], 1);
                        }, $html);
                        if (!$found) {
                            $pos = stripos($html, '</head>');
                            $html = substr($html, 0, $pos) . '<meta name="description" content="' . $d . '" />' . "\n" . substr($html, $pos);
                        }
                    }
                }
            }
        }
    } catch (\Throwable $e) { }
    return $html;
}
add_action('template_redirect', function () {
    if (is_admin() || is_feed() || (function_exists('wp_doing_ajax') && wp_doing_ajax())) { return; }
    ob_start('ga_hi_seo_rewrite');
}, 98);


/* GA-A11Y-2026-11-04 accessibility: skip link + footer heading levels */
function ga_a11y_rewrite($html) {
    try {
        if (!is_string($html) || strlen($html) < 500 || stripos($html, '<body') === false) { return $html; }
        if (strpos($html, 'ga-skip') !== false) { return $html; }
        $target = '';
        $html = preg_replace_callback('#<main\b([^>]*)>#i', function ($m) use (&$target) {
            if (preg_match('#\bid=(["\'])(.*?)\1#i', $m[1], $im)) { $target = $im[2]; return $m[0]; }
            $target = 'ga-main';
            return '<main' . $m[1] . ' id="ga-main" tabindex="-1">';
        }, $html, 1);
        if ($target !== '') {
            $html = preg_replace_callback('#<body\b[^>]*>#i', function ($m) use ($target) {
                return $m[0] . '<a class="ga-skip" href="#' . esc_attr($target) . '">मुख्य सामग्री पर जाएँ</a>';
            }, $html, 1);
        }
        $fp = stripos($html, '<footer');
        if ($fp !== false) {
            $tail = preg_replace('#<h4(?![^>]*aria-level)#i', '<h4 aria-level="3"', substr($html, $fp));
            if (is_string($tail)) { $html = substr($html, 0, $fp) . $tail; }
        }
    } catch (\Throwable $e) { }
    return $html;
}
add_action('template_redirect', function () {
    if (is_admin() || is_feed() || (function_exists('wp_doing_ajax') && wp_doing_ajax())) { return; }
    ob_start('ga_a11y_rewrite');
}, 97);


/* GA-SYNC-2026-11-04 cross-site reading progress */
add_action('wp_head', function () {
    $js = <<<'GAJS'
(function(){try{
var KEYS=['quranLastPos','quranReadStreak','quranChapterCounts114'],TS='gaSyncTs',LS=window.localStorage;
var HOSTS={'godalone.in':1,'quran.godalone.in':1,'kadavulmattum.org':1,'ekkhuda.org':1};
function norm(h){return String(h).replace(/^www\./,'')}
function valid(k,v){try{var j=JSON.parse(v);
if(k==='quranLastPos')return !!(j&&j.s>=1&&j.s<=114&&j.a>=0&&j.a<=300);
if(k==='quranReadStreak')return !!(j&&typeof j.count==='number'&&typeof j.last==='string'&&j.last.length<14);
if(k==='quranChapterCounts114')return Array.isArray(j)&&j.length===114;}catch(e){}return false}
function enc(o){return btoa(unescape(encodeURIComponent(JSON.stringify(o)))).replace(/\+/g,'-').replace(/\//g,'_').replace(/=+$/,'')}
function dec(s){s=s.replace(/-/g,'+').replace(/_/g,'/');while(s.length%4)s+='=';return JSON.parse(decodeURIComponent(escape(atob(s))))}
function bundle(){var k={};KEYS.forEach(function(n){var v=LS.getItem(n);if(v!==null&&valid(n,v))k[n]=v});return {ts:+LS.getItem(TS)||0,k:k}}
var os=Storage.prototype.setItem;
if(location.hash.indexOf('#gp=')===0){try{var inc=dec(location.hash.slice(4));
if(inc&&inc.k&&typeof inc.ts==='number'&&inc.ts<=Date.now()+86400000){var loc=+LS.getItem(TS)||0;
if(inc.ts>loc||!LS.getItem('quranLastPos')){KEYS.forEach(function(n){if(typeof inc.k[n]==='string'&&valid(n,inc.k[n]))os.call(LS,n,inc.k[n])});os.call(LS,TS,String(inc.ts))}}}catch(e){}
try{history.replaceState(null,'',location.pathname+location.search)}catch(e){}}
if(/[?&]continue=1/.test(location.search)&&/^\/quran\/?$/.test(location.pathname)){try{var p=JSON.parse(LS.getItem('quranLastPos'));if(p&&p.s>=1&&p.s<=114&&p.a>=1){history.replaceState(null,'','/quran/#/'+p.s+'/'+p.a)}}catch(e){}}
if(!LS.getItem(TS)&&LS.getItem('quranLastPos')){os.call(LS,TS,String(Date.now()))}
Storage.prototype.setItem=function(k,v){os.call(this,k,v);try{if(this===LS&&KEYS.indexOf(k)>-1)os.call(this,TS,String(Date.now()))}catch(e){}};
function tag(e){try{var a=e.target&&e.target.closest?e.target.closest('a[href]'):null;if(!a)return;var u=new URL(a.href,location.href);var uh=norm(u.hostname);
if(!HOSTS[uh]||uh===norm(location.hostname))return;if(u.hash&&u.hash.length>1&&u.hash.indexOf('#gp=')!==0)return;
var b=bundle();if(!b.k.quranLastPos)return;u.hash='gp='+enc(b);a.href=u.href}catch(x){}}
['mousedown','touchstart','keydown','contextmenu'].forEach(function(ev){document.addEventListener(ev,tag,true)});
}catch(e){}})();
GAJS;
    echo "<script>" . $js . "</script>\n";
}, 1);
add_action('wp_footer', function () {
    $js = <<<'GAJS'
(function(){try{var LANG='hi';var sec=document.querySelector('.gaj');if(!sec)return;var pos=null,streak=0;
try{pos=JSON.parse(localStorage.quranLastPos)}catch(e){}
if(!(pos&&pos.s>=1&&pos.s<=114&&pos.a>0))return;
try{var rs=JSON.parse(localStorage.quranReadStreak);var d=new Date(),t0=new Date(d.getFullYear(),d.getMonth(),d.getDate()).getTime();var pp=String(rs.last).split('-');var lt=new Date(+pp[0],+pp[1]-1,+pp[2]).getTime();if(t0-lt<=86400000*1.01)streak=rs.count||0}catch(e){}
var cta=sec.querySelector('.gaj-cta');if(cta){cta.href='https://godalone.in/quran/?continue=1';if(LANG==='hi')cta.textContent='पढ़ना जारी रखें →'}
if(LANG==='hi'){var h=sec.querySelector('h2');if(h)h.textContent='वापसी मुबारक — सूरा '+pos.s+', आयत '+pos.a+' से आगे बढ़ें';var c=sec.querySelector('.gaj-chip');if(c&&streak>0)c.textContent='🔥 '+streak+' दिन की लगातार पढ़ाई'}
}catch(e){}})();
GAJS;
    echo "<script>" . $js . "</script>\n";
}, 99);

/* GA-VOTD-2026-11-04: daily verse card on the front page (script is hosted on godalone.in). */
add_action('wp_footer', function () {
	if (!is_front_page()) { return; }
	echo '<script src="https://godalone.in/quran/ga-votd.js?v=2" defer></script>' . "\n";
}, 98);
