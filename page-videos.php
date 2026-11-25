<?php
/**
* Template Name: Videos (Hindi)
*
* Hindi (Hindustani) mirror of godalone-premium's page-videos.php. Auto-loads
* for the "videos" route via the rewrite rule + template_include filter added
* in functions.php (no wp-admin page exists for this slug, same pattern as
* /downloads, /calculator-19 and /zakat-calculator).
*/
if (!defined('ABSPATH')) exit;
get_header();
?>
<style>
.ar-verse{font-family:var(--font-ar);direction:rtl;font-size:1.55rem;line-height:2.1;color:var(--gold-bright);text-align:center;margin:0 0 .7em}
.vd-bar{position:relative;z-index:2;padding:12px 0;background:rgba(8,14,32,.86);backdrop-filter:blur(10px);-webkit-backdrop-filter:blur(10px);border-bottom:1px solid rgba(255,255,255,.08)}
.vd-bar .wrap{display:flex;flex-wrap:wrap;gap:10px;align-items:center;justify-content:center}
.vd-chips{display:flex;flex-wrap:wrap;gap:8px;justify-content:center}
.vd-chip{cursor:pointer;border:1px solid rgba(255,255,255,.18);background:rgba(255,255,255,.05);color:#e8ecf8;padding:9px 18px;border-radius:999px;font-size:.95rem;font-weight:600;font-family:inherit;line-height:1.2;transition:all .2s}
.vd-chip:hover{border-color:var(--gold-bright);transform:translateY(-1px)}
.vd-chip.on{background:linear-gradient(135deg,#f3c969,#d9a441);color:#1a1405;border-color:transparent;box-shadow:0 4px 14px rgba(217,164,65,.35)}
.vd-chip small{opacity:.75;font-weight:700;margin-left:4px}
.vd-search{flex:1 1 220px;max-width:320px;padding:10px 16px;border-radius:999px;border:1px solid rgba(255,255,255,.18);background:rgba(255,255,255,.06);color:#fff;font-size:1rem;font-family:inherit}
.vd-search::placeholder{color:rgba(255,255,255,.55)}
.vd-search:focus{outline:2px solid var(--gold-bright);outline-offset:1px}
.vd-main{padding:34px 0 10px}
.vd-sec{margin:0 0 42px}
.vd-sec-h{display:flex;align-items:center;gap:12px;margin:0 0 18px}
.vd-sec-h h2{margin:0;font-size:1.6rem}
.vd-sec-h .vd-ct{font-size:.85rem;opacity:.75;border:1px solid rgba(255,255,255,.2);border-radius:999px;padding:3px 12px}
.vd-grid{display:grid;grid-template-columns:repeat(auto-fill,minmax(270px,1fr));gap:18px}
.vd-card{position:relative;display:flex;flex-direction:column;gap:10px;padding:0 0 18px;border-radius:18px;overflow:hidden;text-decoration:none;color:#eef1fb;background:linear-gradient(160deg,rgba(255,255,255,.07),rgba(255,255,255,.02));border:1px solid rgba(255,255,255,.12);transition:transform .25s,border-color .25s,box-shadow .25s}
.vd-card:hover,.vd-card:focus-visible{transform:translateY(-5px);border-color:var(--gold-bright);box-shadow:0 14px 34px rgba(0,0,0,.35);outline:none}
.vd-top{position:relative;height:120px;display:flex;align-items:center;justify-content:center;font-size:3rem;background:radial-gradient(circle at 30% 20%,rgba(243,201,105,.30),transparent 55%),linear-gradient(135deg,#1d2a5a,#0e1633)}
.vd-play{position:absolute;right:14px;bottom:-18px;width:44px;height:44px;border-radius:50%;background:#ff0033;color:#fff;display:flex;align-items:center;justify-content:center;font-size:1.05rem;box-shadow:0 6px 16px rgba(255,0,51,.45);transition:transform .25s}
.vd-card:hover .vd-play{transform:scale(1.12)}
.vd-tag{position:absolute;left:12px;top:12px;font-size:.78rem;font-weight:700;padding:4px 10px;border-radius:999px;background:rgba(0,0,0,.45);color:#f3c969}
.vd-card h3{margin:10px 18px 0;font-size:1.15rem;line-height:1.4;color:#fff}
.vd-card p{margin:0 18px;font-size:.95rem;line-height:1.6;color:rgba(238,241,251,.8);flex:1}
.vd-go{margin:4px 18px 0;font-weight:700;color:var(--gold-bright);font-size:.95rem}
.vd-empty{display:none;text-align:center;padding:36px 12px;opacity:.85;font-size:1.05rem}
.vd-cta{margin:10px auto 40px;max-width:760px;text-align:center;padding:30px 22px;border-radius:22px;background:linear-gradient(135deg,rgba(255,0,51,.18),rgba(243,201,105,.10));border:1px solid rgba(255,255,255,.14)}
.vd-cta h2{margin:0 0 8px}
.vd-cta p{margin:0 0 18px;opacity:.9}
.vd-btn{display:inline-block;padding:13px 28px;border-radius:999px;background:#ff0033;color:#fff;font-weight:700;text-decoration:none;box-shadow:0 8px 22px rgba(255,0,51,.35);transition:transform .2s}
.vd-btn:hover{transform:translateY(-2px)}
html.theme-day .vd-bar{background:rgba(255,255,255,.92);border-bottom-color:rgba(0,0,0,.1)}
html.theme-day .vd-chip{background:#fff;color:#1c2340;border-color:rgba(0,0,0,.18)}
html.theme-day .vd-chip.on{color:#1a1405}
html.theme-day .vd-search{background:#fff;color:#1c2340;border-color:rgba(0,0,0,.2)}
html.theme-day .vd-search::placeholder{color:rgba(28,35,64,.55)}
html.theme-day .vd-card{background:#fff;color:#1c2340;border-color:rgba(0,0,0,.12);box-shadow:0 4px 16px rgba(20,30,70,.08)}
html.theme-day .vd-card h3{color:#14193a}
html.theme-day .vd-card p{color:#3a4262}
html.theme-day .vd-go{color:#9a6a00}
html.theme-day .vd-sec-h .vd-ct{border-color:rgba(0,0,0,.2)}
html.theme-day .vd-cta{background:linear-gradient(135deg,rgba(255,0,51,.08),rgba(243,201,105,.25));border-color:rgba(0,0,0,.12)}
html.theme-day .vd-cta h2,html.theme-day .vd-cta p{color:#14193a}
@media(max-width:600px){.vd-chip{padding:8px 14px;font-size:.9rem}.vd-grid{grid-template-columns:1fr}.vd-top{height:96px}}
</style>

<?php
$vd_langs = array(
  'en' => array('🎙️','अंग्रेज़ी','प्लेलिस्ट'),
  'ta' => array('🎧','तमिल','प्लेलिस्ट'),
  'hi' => array('🕌','हिंदी','प्लेलिस्ट'),
);
$vd_items = array(
  array('en','🎙️','डॉ. रशाद ख़लीफ़ा — तक़रीरें','डॉ. रशाद ख़लीफ़ा की तक़रीरें और तालीमात।','https://www.youtube.com/playlist?list=PL5aSCB9_3K7lqdebZHRvd6Fzja7Mvqzgj'),
  array('en','🎧','अंग्रेज़ी क़ुरआन ऑडियो','मुकम्मल अंग्रेज़ी क़ुरआन ऑडियो तिलावत।','https://www.youtube.com/playlist?list=PL1ZWur9ydxbTFg--5zWUILdBvc_UiLEN2'),
  array('en','📺','HiddenSecret.org वीडियो','HiddenSecret.org चैनल की पूरी प्लेलिस्ट लाइब्रेरी।','https://www.youtube.com/@HiddenSecret741/playlists'),
  array('en','📿','ज़िक्र मेडिटेशन','अल्लाह की याद — ज़िक्र और मेडिटेशन ऑडियो।','https://www.youtube.com/playlist?list=PL5aSCB9_3K7lEOC9JOUUjywIeFANWHdfY'),
  array('en','🎬','सबमिशन शॉर्ट्स','अल्लाह अकेले की इताअत पर मुख़्तसर याद-दहानियाँ।','https://www.youtube.com/playlist?list=PL5aSCB9_3K7m2fgsXr-mSzvfei1Kom6-d'),
  array('ta','🎧','तमिल क़ुरआन ऑडियो','मुकम्मल तमिल क़ुरआन ऑडियो तिलावत।','https://www.youtube.com/playlist?list=PL5aSCB9_3K7n2A0q5CqE1m6kavQuthQHV'),
  array('ta','🎙️','डॉ. रशाद ख़लीफ़ा तक़रीर (तमिल)','डॉ. रशाद ख़लीफ़ा की तालीमात, तमिल में।','https://www.youtube.com/playlist?list=PL5aSCB9_3K7m5XjjdP8KwZgHliPMDtIj2'),
  array('ta','🕌','तमिल जुमा बयान','जुमा (शुक्रवार) की याद-दहानियाँ तमिल में।','https://www.youtube.com/playlist?list=PL5aSCB9_3K7lME7RdoIgVTZA64KHZHs9B'),
  array('ta','🎓','तमिल क़ुरआन स्टडी','तमिल में गहरा क़ुरआन अध्ययन सत्र।','https://www.youtube.com/playlist?list=PL5aSCB9_3K7kaca87xieCFDTMfieHQGRC'),
  array('hi','🕌','हिंदी जुमा','जुमा (शुक्रवार) की याद-दहानियाँ हिंदी में।','https://www.youtube.com/playlist?list=PLBnAo-0FxRAB9pIwHWZWtE45DMBF0VvMc'),
);
$vd_nohead = false;
$vd_count = array();
foreach ($vd_langs as $vd_k => $vd_l) { $vd_count[$vd_k] = 0; }
foreach ($vd_items as $vd_i) { $vd_count[$vd_i[0]]++; }
$vd_lab = function ($k) use ($vd_langs) { return $vd_langs[$k][1]; };
?>

<div class="page-hero">
<div class="wrap">
<div class="crumb">EkKhuda.org</div>
<h1 class="reveal">🎬 वीडियो और प्लेलिस्ट</h1>
<p class="hero-sub">यूट्यूब प्लेलिस्ट का मजमूआ — क़ुरआन तिलावत, डॉ. रशाद ख़लीफ़ा का भाषण, जुमा के ख़ुत्बे और भी बहुत कुछ — अंग्रेज़ी, तमिल और हिंदी में, इंशा'अल्लाह।</p>
</div>
</div>

<div class="vd-bar" id="vdBar">
<div class="wrap">
<div class="vd-chips" role="group" aria-label="भाषा चुनें">
<button type="button" class="vd-chip on" data-f="all">सभी <small><?php echo (int) count($vd_items); ?></small></button>
<?php foreach ($vd_langs as $vd_k => $vd_l) : ?>
<button type="button" class="vd-chip" data-f="<?php echo esc_attr($vd_k); ?>"><?php echo esc_html($vd_l[1]); ?> <small><?php echo (int) $vd_count[$vd_k]; ?></small></button>
<?php endforeach; ?>
</div>
<input type="search" class="vd-search" id="vdSearch" placeholder="🔍 वीडियो खोजें…" aria-label="वीडियो खोजें" autocomplete="off">
</div>
</div>

<section class="blk vd-main">
<div class="wrap">
<?php foreach ($vd_langs as $vd_k => $vd_l) : if ($vd_nohead && $vd_k !== array_keys($vd_langs)[0]) continue; ?>
<div class="vd-sec" data-sec="<?php echo esc_attr($vd_k); ?>">
<?php if (!$vd_nohead) : ?><div class="vd-sec-h"><h2><?php echo esc_html($vd_l[0] . ' ' . $vd_l[1] . ' ' . $vd_l[2]); ?></h2><span class="vd-ct"><?php echo (int) $vd_count[$vd_k]; ?></span></div><?php endif; ?>
<div class="vd-grid">
<?php foreach ($vd_items as $vd_i) : if (!$vd_nohead && $vd_i[0] !== $vd_k) continue; ?>
<a class="vd-card" data-lang="<?php echo esc_attr($vd_i[0]); ?>" data-s="<?php echo esc_attr(mb_strtolower($vd_i[2] . ' ' . $vd_i[3] . ' ' . $vd_langs[$vd_i[0]][1], 'UTF-8')); ?>" href="<?php echo esc_url($vd_i[4]); ?>" target="_blank" rel="noopener">
<div class="vd-top"><span class="vd-tag"><?php echo esc_html($vd_langs[$vd_i[0]][1]); ?></span><span aria-hidden="true"><?php echo esc_html($vd_i[1]); ?></span><span class="vd-play" aria-hidden="true">▶</span></div>
<h3><?php echo esc_html($vd_i[2]); ?></h3>
<p><?php echo esc_html($vd_i[3]); ?></p>
<span class="vd-go">यूट्यूब पर देखें →</span>
</a>
<?php endforeach; ?>
</div>
</div>
<?php endforeach; ?>
<div class="vd-empty" id="vdEmpty">कोई वीडियो नहीं मिला। कृपया दूसरा शब्द आज़माएँ, इंशा’अल्लाह।</div>

<div class="vd-cta">
<h2>🔔 यूट्यूब पर सब्सक्राइब करें</h2>
<p>नए वीडियो लगातार जोड़े जाते हैं। सब्सक्राइब करें ताकि कोई याद-दहानी न छूटे।</p>
<a class="vd-btn" href="https://www.youtube.com/kadavulmattum" target="_blank" rel="noopener">▶ हमारा यूट्यूब चैनल खोलें</a>
</div>
</div>
</section>

<script>
(function(){
var chips=document.querySelectorAll('.vd-chip'),cards=document.querySelectorAll('.vd-card'),secs=document.querySelectorAll('.vd-sec'),q=document.getElementById('vdSearch'),empty=document.getElementById('vdEmpty'),f='all';
function run(){
var t=(q.value||'').toLowerCase().trim(),shown=0;
cards.forEach(function(c){
var ok=(f==='all'||c.getAttribute('data-lang')===f)&&(!t||c.getAttribute('data-s').indexOf(t)>-1);
c.style.display=ok?'':'none';if(ok)shown++;
});
secs.forEach(function(s){
var any=false;s.querySelectorAll('.vd-card').forEach(function(c){if(c.style.display!=='none')any=true;});
s.style.display=any?'':'none';
});
empty.style.display=shown?'none':'block';
}
chips.forEach(function(b){b.addEventListener('click',function(){
chips.forEach(function(x){x.classList.remove('on');});
b.classList.add('on');f=b.getAttribute('data-f');run();
});});
q.addEventListener('input',run);
})();
</script>

<section class="verse">
<div class="wrap">
<p class="ar-verse">فَذَكِّرْ إِنْ نَفَعَتِ الذِّكْرَى</p>
<blockquote>&ldquo;पस याद-दहानी करो, अगर याद-दहानी फाईदा दे।&rdquo;</blockquote>
<cite>क़ुरआन 87:9</cite>
</div>
</section>
<?php get_footer(); ?>
