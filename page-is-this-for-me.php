<?php
/**
 * Template Name: Is this for me?
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
<h1 class="reveal">क्या यह मेरे लिए है?</h1>
<p class="hero-sub">नए, जिज्ञासु या असमंजस में पड़े हर इंसान के लिए एक सीधा जवाब। आप कोई भी हों, कृपया आगे पढ़ें।</p>
</div>
</div>
<section class="blk">
<div class="wrap">
<div class="sec-head"><div class="kicker">1</div><h2>यह किसके लिए है?</h2></div>
<div class="stack">
<table class="who">
<thead><tr><th>अगर आप हैं...</th><th>तो...</th></tr></thead>
<tbody>
<tr><td>किसी भी जमात का मुसलमान</td><td>यह पैग़ाम आपसे सिर्फ़ एक अल्लाह की इबादत करने को कहता है। कृपया इसे क़ुरआन से जाँच लें।</td></tr>
<tr><td>ईसाई या यहूदी</td><td>आपका स्वागत है। क़ुरआन आपसे इज़्ज़त के साथ बात करता है।</td></tr>
<tr><td>हिन्दू, बौद्ध या किसी और रास्ते के</td><td>आपका स्वागत है। पढ़िए, सवाल पूछिए और आज़ादी से फ़ैसला कीजिए।</td></tr>
<tr><td>बिना किसी धर्म के</td><td>आपका स्वागत है। सबूत देखिए और अपना फ़ैसला ख़ुद कीजिए।</td></tr>
<tr><td>शक या मुश्किल सवाल रखने वाले</td><td>अच्छी बात है। पूछिए। यह साइट आपको हर चीज़ जाँचने की दावत देती है।</td></tr>
</tbody>
</table>
</div>
</div>
</section>
<section class="blk">
<div class="wrap">
<div class="sec-head"><div class="kicker">2</div><h2>क्या कोई दबाव है?</h2></div>
<div class="stack">
<div class="card reveal"><p class="big">नहीं।</p><p>यह साइट आपसे न किसी जमात में शामिल होने को कहती है, न पैसे देने को, न किसी चीज़ पर दस्तख़त करने को। अल्लाह फ़रमाता है:</p><div class="vc"><p class="en-s">“दीन के मामले में कोई ज़बरदस्ती नहीं है। बेशक सही रास्ता गलत रास्ते से जुदा हो चुका हैं। जिसने इनकार किया शैतान का और अल्लाह पर ईमान लाया तो उसने ऐसा मज़बूत सहारा थाम लिया जो कभी टूटनेवाला नहीं। और अल्लाह सब कुछ सुननेवाला और जाननेवाला है।”</p><cite>क़ुरआन 2:256</cite></div></div>
</div>
</div>
</section>
<section class="blk">
<div class="wrap">
<div class="sec-head"><div class="kicker">3</div><h2>एक ही गुज़ारिश क्या है?</h2></div>
<div class="stack">
<div class="card reveal"><p class="big">सिर्फ़ एक अल्लाह की इबादत कीजिए।</p><p>उसके साथ किसी को शरीक न कीजिए।</p><div class="vc"><p class="en-s">“कहो, 'ऐ किताबवालो! आओ उस एक बात की तरफ जो तुम में और हम में बराबर है कि हम एक अल्लाह के सिवा किसी की इबादत न करें और उसकी बन्दग़ी में किसी को शरीक न करें। और न परस्पर हममें से कोई एक-दूसरे को अल्लाह से हटकर रब बनाए। फिर अगर वह मुँह मोड़े (और कुबूल न करें) तो कह दो, गवाह रहो हम तो मुस्लिम हैं (खुदा के फ़रमाबरदार) ।”</p><cite>क़ुरआन 3:64</cite></div></div>
</div>
</div>
</section>
<section class="blk">
<div class="wrap">
<div class="sec-head"><div class="kicker">4</div><h2>क्या सिर्फ़ “हमारे” लोग अच्छे हैं?</h2></div>
<div class="stack">
<div class="card reveal"><p class="big">नहीं।</p><p>अल्लाह ईमान और नेक अमल को देखता है, लेबल को नहीं।</p><div class="vc"><p class="en-s">“यकीनन जो लोग ईमान रखते है और जो यहूदी हुए, और इसाई और जो मजहब बदल के तबदिल हो गए और जो कोई भी (१) ईमान लाए अल्लाह पर (२) और (ईमान लाए) कयामत के दिन पर (३) और नेक कर्म किये तो उनके रब के पास उन लोंगो को लिये बड़ा अज्र (इनाम) है. उन्हें न किसी का खौफ होगा और ना ही वह गमगीन होंगे।”</p><cite>क़ुरआन 2:62</cite></div><div class="vc"><p class="ar" lang="ar" dir="rtl">يٰأَيُّهَا النّاسُ إِنّا خَلَقنٰكُم مِن ذَكَرٍ وَأُنثىٰ وَجَعَلنٰكُم شُعوبًا وَقَبائِلَ لِتَعارَفوا إِنَّ أَكرَمَكُم عِندَ اللَّهِ أَتقىٰكُم إِنَّ اللَّهَ عَليمٌ خَبيرٌ</p><p class="note">इस आयत का हिन्दी अनुवाद तैयार हो रहा है। <a href="https://godalone.in/quran/" target="_blank" rel="noopener">ऑनलाइन क़ुरआन</a> में दूसरी ज़बानों में पढ़ सकते हैं।</p><cite>क़ुरआन 49:13</cite></div></div>
</div>
</div>
</section>
<section class="blk">
<div class="wrap">
<div class="sec-head"><div class="kicker">5</div><h2>शुरुआत कहाँ से करें?</h2></div>
<div class="stack">
<div class="card reveal"><ol class="steps">
<li><a href="<?php echo esc_url(home_url('/introduction')); ?>">तआरुफ़</a> पढ़िए।</li>
<li><a href="<?php echo esc_url(home_url('/mathematical-miracle')); ?>">गणित का करिश्मा</a> देखिए। संख्याएँ ख़ुद जाँचिए।</li>
<li><a href="https://godalone.in/quran/" target="_blank" rel="noopener">ऑनलाइन क़ुरआन</a> अपनी ज़बान में पढ़िए।</li>
</ol></div>
<div class="cta-row">
<a class="btn btn-gold" href="<?php echo esc_url(home_url('/introduction')); ?>">📖 तआरुफ़</a>
<a class="btn btn-ghost" href="<?php echo esc_url(home_url('/mathematical-miracle')); ?>">🔢 गणित का करिश्मा</a>
<a class="btn btn-ghost" href="https://godalone.in/quran/" target="_blank" rel="noopener">💻 क़ुरआन पढ़ें</a>
</div>
</div>
</div>
</section>
<?php get_footer(); ?>
