<?php
/**
 * Template Name: Check it yourself
 * Simple page for new visitors. Routed in functions.php (no wp-admin page).
 * Quran verses come from the site's own Quran data.
 */
if (!defined('ABSPATH')) exit;
get_header();
?>
<style>
.en-s{font-size:1.02rem;line-height:1.8;color:var(--ink-soft);margin:0 0 .6em}
.vc{margin-top:14px;padding:16px 16px 10px;border-radius:14px;background:rgba(0,0,0,.18);border:1px solid var(--line)}
.vc cite{display:block;font-style:normal;font-weight:600;font-size:13px;letter-spacing:.5px;color:var(--gold-tan);text-align:center;padding-bottom:4px}
.stack{max-width:820px;margin:0 auto}
.stack .card{margin-bottom:18px}
.stack p{line-height:1.8}
.who{width:100%;border-collapse:separate;border-spacing:0;border:1px solid var(--line);border-radius:16px;overflow:hidden;background:linear-gradient(180deg,var(--panel),var(--panel-2,var(--panel)))}
.who th,.who td{padding:14px 16px;text-align:left;vertical-align:top;line-height:1.6;border-bottom:1px solid var(--line)}
.who th{background:rgba(0,0,0,.2);color:var(--gold-bright);font-weight:700}
.who tr:last-child td{border-bottom:0}
.who td:first-child{font-weight:600;color:var(--ink);width:38%}
.who td:last-child{color:var(--ink-soft)}
.big{font-size:1.25rem;color:var(--ink);text-align:center;margin:0 0 6px}
.steps{counter-reset:s;list-style:none;margin:0;padding:0}
.steps li{counter-increment:s;position:relative;padding:12px 0 12px 52px;color:var(--ink);line-height:1.6}
.steps li::before{content:counter(s);position:absolute;left:0;top:8px;width:36px;height:36px;border-radius:50%;background:var(--gold-grad);color:#fff;font-weight:700;display:flex;align-items:center;justify-content:center}
.cta-row{display:flex;flex-wrap:wrap;gap:12px;justify-content:center;margin-top:22px}
.cta-row .btn{white-space:normal;text-align:center}
@media(max-width:560px){.who td:first-child{width:42%}.who th,.who td{padding:12px}}
</style>
<style>
/* page 3 extras */
.stack{max-width:820px;margin:0 auto}
.stack .card{margin-bottom:18px}
.stack p{line-height:1.8}
.who{width:100%;border-collapse:separate;border-spacing:0;border:1px solid var(--line);border-radius:16px;overflow:hidden;background:linear-gradient(180deg,var(--panel),var(--panel-2,var(--panel)))}
.who th,.who td{padding:14px 16px;text-align:left;vertical-align:middle;line-height:1.55;border-bottom:1px solid var(--line)}
.who th{background:rgba(0,0,0,.2);color:var(--gold-bright);font-weight:700}
.who tr:last-child td{border-bottom:0}
.who td:first-child{color:var(--ink);font-weight:600}
.who .num{font-size:1.15rem;font-weight:700;color:var(--gold-bright);white-space:nowrap}
.who .res{color:var(--ink-soft);white-space:nowrap}
.who .res b{color:var(--gold-bright);font-size:1.1rem}
.n{display:inline-flex;width:24px;height:24px;border-radius:50%;background:var(--gold-grad);color:#fff;font-size:13px;font-weight:700;align-items:center;justify-content:center;margin-right:6px}
.dots{margin:0;padding-left:20px;color:var(--ink);line-height:1.8}
.dots li{margin-bottom:8px}
.steps{counter-reset:s;list-style:none;margin:0;padding:0}
.steps li{counter-increment:s;position:relative;padding:12px 0 12px 52px;color:var(--ink);line-height:1.6}
.steps li::before{content:counter(s);position:absolute;left:0;top:8px;width:36px;height:36px;border-radius:50%;background:var(--gold-grad);color:#fff;font-weight:700;display:flex;align-items:center;justify-content:center}
.cta-row{display:flex;flex-wrap:wrap;gap:12px;justify-content:center;margin-top:22px}
.cta-row .btn{white-space:normal;text-align:center}
@media(max-width:600px){.who th,.who td{padding:10px 10px;font-size:.93rem}.who .res{white-space:normal}}
</style>
<style>.stack .card p.big{font-size:1.3rem;font-weight:600;color:var(--ink);text-align:center;margin:0 0 8px}ul.dots{list-style:none;margin:0;padding:0}ul.dots li{position:relative;padding:8px 0 8px 24px;line-height:1.7;color:var(--ink-soft)}ul.dots li::before{content:"";position:absolute;left:4px;top:18px;width:9px;height:9px;border-radius:50%;background:var(--gold-bright)}.vc .ar{font-family:"Amiri","Scheherazade New","Noto Naskh Arabic",serif;font-size:1.5rem;line-height:2;direction:rtl;text-align:right;color:var(--ink);margin:0 0 6px}.vc .note{font-size:.92rem;opacity:.85;margin:6px 0}</style>
<style>/*mob-who*/@media(max-width:560px){.who{font-size:.9rem}.who th,.who td{padding:10px 8px}.who td:first-child{width:auto}.who td.num{font-size:.95rem}.who td.res{white-space:nowrap}.who .n{margin-right:4px}}</style>
<div class="page-hero">
<div class="wrap">
<div class="crumb">EkKhuda.org</div>
<h1 class="reveal">5 मिनट में ख़ुद जाँचिए</h1>
<p class="hero-sub">आपको किसी पर भरोसा करने की ज़रूरत नहीं। कैलकुलेटर उठाइए और ये संख्याएँ ख़ुद जाँचिए।</p>
</div>
</div>
<section class="blk">
<div class="wrap">
<div class="sec-head"><div class="kicker">1</div><h2>आपको क्या चाहिए</h2></div>
<div class="stack">
<div class="card reveal"><ul class="dots"><li>एक फ़ोन या कैलकुलेटर। बस इतना।</li><li>5 मिनट।</li><li>खुला दिमाग़।</li></ul></div>
</div>
</div>
</section>
<section class="blk">
<div class="wrap">
<div class="sec-head"><div class="kicker">2</div><h2>जाँच</h2><p>हर संख्या को 19 से भाग दीजिए। अगर जवाब पूरी संख्या आए, तो वह मेल खाती है।</p></div>
<div class="stack">
<table class="who">
<thead><tr><th>हम क्या गिनते हैं</th><th>संख्या</th><th>जाँच</th></tr></thead>
<tbody>
<tr><td><span class="n">1</span> पहली आयत (बिस्मिल्लाह, 1:1) में अरबी हर्फ़</td><td class="num">19</td><td class="res">÷ 19 = <b>1</b> ✔</td></tr>
<tr><td><span class="n">2</span> क़ुरआन में सूरतें</td><td class="num">114</td><td class="res">÷ 19 = <b>6</b> ✔</td></tr>
<tr><td><span class="n">3</span> कुल आयतें (6234 गिनी हुई + 112 बिस्मिल्लाह)</td><td class="num">6346</td><td class="res">÷ 19 = <b>334</b> ✔</td></tr>
<tr><td><span class="n">4</span> “अल्लाह” शब्द कितनी बार आया</td><td class="num">2698</td><td class="res">÷ 19 = <b>142</b> ✔</td></tr>
<tr><td><span class="n">5</span> जिन आयतों में “अल्लाह” आया, उनके नंबरों का जोड़</td><td class="num">118123</td><td class="res">÷ 19 = <b>6217</b> ✔</td></tr>
</tbody>
</table>
</div>
</div>
</section>
<section class="blk">
<div class="wrap">
<div class="sec-head"><div class="kicker">3</div><h2>क़दम-दर-क़दम जाँच</h2></div>
<div class="stack">
<div class="card reveal"><ol class="steps">
<li>कैलकुलेटर खोलिए।</li>
<li>114 लिखिए, भाग दबाइए, 19 लिखिए। जवाब 6 आता है।</li>
<li>6346 के साथ भी यही कीजिए। जवाब 334।</li>
<li>2698 के साथ भी यही कीजिए। जवाब 142।</li>
<li>118123 के साथ भी यही कीजिए। जवाब 6217।</li>
<li>या हमारा <a href="<?php echo esc_url(home_url('/calculator-19')); ?>">19 कैलकुलेटर</a> इस्तेमाल कीजिए। कोई भी संख्या लिखिए, वह बता देगा।</li>
</ol></div>
</div>
</div>
</section>
<section class="blk">
<div class="wrap">
<div class="sec-head"><div class="kicker">4</div><h2>दो बातें याद रखें</h2></div>
<div class="stack">
<div class="card reveal"><ul class="dots"><li>ये तथ्य क़ुरआन के असली अरबी मूल पाठ के बारे में हैं।</li><li>“अल्लाह” शब्द की गिनती और आयत-नंबरों का जोड़ रशद ख़लीफ़ा के क़ुरआन अनुवाद के हर पन्ने पर दिया गया है, इसलिए किताब हाथ में रखने वाला कोई भी इन्हें देख सकता है।</li></ul></div>
</div>
</div>
</section>
<section class="blk">
<div class="wrap">
<div class="sec-head"><div class="kicker">5</div><h2>आगे क्या?</h2></div>
<div class="stack">
<div class="card reveal"><p>और देखना चाहें तो पूरा गणित का करिश्मा पेज (परिशिष्ट 1) इसे क़दम-दर-क़दम समझाता है।</p></div>
<div class="cta-row">
<a class="btn btn-gold" href="<?php echo esc_url(home_url('/calculator-19')); ?>">🔢 19 कैलकुलेटर</a>
<a class="btn btn-ghost" href="<?php echo esc_url(home_url('/mathematical-miracle')); ?>">📐 गणित का करिश्मा (पूरा पेज)</a>
<a class="btn btn-ghost" href="https://godalone.in/quran/" target="_blank" rel="noopener">💻 क़ुरआन पढ़ें</a>
</div>
</div>
</div>
</section>
<?php get_footer(); ?>
