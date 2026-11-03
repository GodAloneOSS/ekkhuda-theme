<?php
/**
 * Template Name: Is the Quran enough?
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
<div class="page-hero">
<div class="wrap">
<div class="crumb">EkKhuda.org</div>
<h1 class="reveal">क्या क़ुरआन काफ़ी है?</h1>
<p class="hero-sub">क़ुरआन अपने बारे में क्या कहता है, इस पर एक शांत नज़र। पढ़िए, फिर ख़ुद फ़ैसला कीजिए।</p>
</div>
</div>
<section class="blk">
<div class="wrap">
<div class="sec-head"><div class="kicker">1</div><h2>सवाल</h2></div>
<div class="stack">
<div class="card reveal"><p>बहुत से लोग पूछते हैं: “क्या सिर्फ़ क़ुरआन मेरी रहनुमाई के लिए काफ़ी है?” सबसे अच्छा तरीक़ा है, क़ुरआन से ही पूछना।</p></div>
</div>
</div>
</section>
<section class="blk">
<div class="wrap">
<div class="sec-head"><div class="kicker">2</div><h2>क़ुरआन अपने बारे में क्या कहता है</h2></div>
<div class="stack">
<table class="who">
<thead><tr><th>क़ुरआन ख़ुद को कहता है...</th><th>आयत</th></tr></thead>
<tbody>
<tr><td>पूरी तरह खोलकर बयान की हुई</td><td>6:114</td></tr>
<tr><td>मुकम्मल</td><td>6:115</td></tr>
<tr><td>हर चीज़ की तफ़सील देने वाली</td><td>12:111</td></tr>
<tr><td>हर चीज़ को खोलकर बताने वाली, हिदायत और रहमत</td><td>16:89</td></tr>
</tbody>
</table>
</div>
</div>
</section>
<section class="blk">
<div class="wrap">
<div class="sec-head"><div class="kicker">3</div><h2>आयतें</h2></div>
<div class="stack">
<div class="card reveal"><div class="vc"><p class="en-s">“क्या मैं अल्लाह के (क़ानून के) सिवा किसी और को फ़ैसला करने वाला बनाऊँ, जबकि उसने तुम पर यह किताब पूरी तरह से खोलकर उतारी है? और जिन लोगों को हमने किताब दी है वे जानते हैं कि यह तुम्हारे रब की तरफ़ से सच्चाई के साथ उतारी गई है। सो तुम सन्देह करने वालों में से न बनो।”</p><cite>क़ुरआन 6:114</cite></div><div class="vc"><p class="en-s">“और तुम्हारे रब की बात सच और इंसाफ़ के साथ पूरी हो गई। उसकी बातों को कोई बदल नहीं सकता। और वह सब कुछ सुनता और जानता है।”</p><cite>क़ुरआन 6:115</cite></div><div class="vc"><p class="ar" lang="ar" dir="rtl">لَقَد كانَ فى قَصَصِهِم عِبرَةٌ لِأُولِى الأَلبٰبِ ما كانَ حَديثًا يُفتَرىٰ وَلٰكِن تَصديقَ الَّذى بَينَ يَدَيهِ وَتَفصيلَ كُلِّ شَىءٍ وَهُدًى وَرَحمَةً لِقَومٍ يُؤمِنونَ</p><p class="note">इस आयत का हिन्दी अनुवाद तैयार हो रहा है। <a href="https://godalone.in/quran/" target="_blank" rel="noopener">ऑनलाइन क़ुरआन</a> में दूसरी ज़बानों में पढ़ सकते हैं।</p><cite>क़ुरआन 12:111</cite></div><div class="vc"><p class="ar" lang="ar" dir="rtl">وَيَومَ نَبعَثُ فى كُلِّ أُمَّةٍ شَهيدًا عَلَيهِم مِن أَنفُسِهِم وَجِئنا بِكَ شَهيدًا عَلىٰ هٰؤُلاءِ وَنَزَّلنا عَلَيكَ الكِتٰبَ تِبيٰنًا لِكُلِّ شَىءٍ وَهُدًى وَرَحمَةً وَبُشرىٰ لِلمُسلِمينَ</p><p class="note">इस आयत का हिन्दी अनुवाद तैयार हो रहा है। <a href="https://godalone.in/quran/" target="_blank" rel="noopener">ऑनलाइन क़ुरआन</a> में दूसरी ज़बानों में पढ़ सकते हैं।</p><cite>क़ुरआन 16:89</cite></div></div>
</div>
</div>
</section>
<section class="blk">
<div class="wrap">
<div class="sec-head"><div class="kicker">4</div><h2>क़ुरआन का एक और सवाल</h2></div>
<div class="stack">
<div class="card reveal"><div class="vc"><p class="ar" lang="ar" dir="rtl">تِلكَ ءايٰتُ اللَّهِ نَتلوها عَلَيكَ بِالحَقِّ فَبِأَىِّ حَديثٍ بَعدَ اللَّهِ وَءايٰتِهِ يُؤمِنونَ</p><p class="note">इस आयत का हिन्दी अनुवाद तैयार हो रहा है। <a href="https://godalone.in/quran/" target="_blank" rel="noopener">ऑनलाइन क़ुरआन</a> में दूसरी ज़बानों में पढ़ सकते हैं।</p><cite>क़ुरआन 45:6</cite></div></div>
</div>
</div>
</section>
<section class="blk">
<div class="wrap">
<div class="sec-head"><div class="kicker">5</div><h2>यह पेज क्या नहीं कह रहा</h2></div>
<div class="stack">
<div class="card reveal"><ul class="dots"><li>यह नहीं कहता कि कोई बुरा इंसान है।</li><li>यह आपसे अपना परिवार या दोस्त छोड़ने को नहीं कहता।</li><li>यह सिर्फ़ इतना कहता है कि खुले दिमाग़ से क़ुरआन को ख़ुद जाँचिए। “सो तुम सन्देह करने वालों में से न बनो” (6:114) किताब को क़रीब से देखने की अल्लाह की अपनी दावत है।</li></ul></div>
</div>
</div>
</section>
<section class="blk">
<div class="wrap">
<div class="sec-head"><div class="kicker">6</div><h2>ख़ुद जाँचिए</h2></div>
<div class="stack">
<div class="card reveal"><ol class="steps">
<li><a href="https://godalone.in/quran/" target="_blank" rel="noopener">ऑनलाइन क़ुरआन</a> अपनी ज़बान में पढ़िए।</li>
<li><a href="<?php echo esc_url(home_url('/mathematical-miracle')); ?>">गणित का करिश्मा</a> देखिए। यह इस बात की निशानी है कि यह किताब महफ़ूज़ है।</li>
<li>अल्लाह से हिदायत माँगिए। वही सबसे अच्छा रहनुमा है।</li>
</ol></div>
<div class="cta-row">
<a class="btn btn-gold" href="https://godalone.in/quran/" target="_blank" rel="noopener">💻 क़ुरआन पढ़ें</a>
<a class="btn btn-ghost" href="<?php echo esc_url(home_url('/mathematical-miracle')); ?>">🔢 गणित का करिश्मा</a>
<a class="btn btn-ghost" href="<?php echo esc_url(home_url('/is-this-for-me')); ?>">🙋 क्या यह मेरे लिए है?</a>
</div>
</div>
</div>
</section>
<?php get_footer(); ?>
