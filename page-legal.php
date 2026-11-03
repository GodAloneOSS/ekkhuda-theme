<?php
/**
 * Template Name: About / Privacy / Copyright (Hindi)
 * One template for three simple pages. Routed in functions.php (query var ek_legal).
 */
if (!defined('ABSPATH')) exit;
$k = get_query_var('ek_legal');
get_header();
?>
<style>
.stack{max-width:820px;margin:0 auto}
.stack .card{margin-bottom:18px}
.stack p{line-height:1.8}
.stack a{text-decoration:underline}
.dots{margin:0;padding-left:20px;color:var(--ink);line-height:1.8}
.dots li{margin-bottom:8px}
</style>
<?php if ($k === 'about') : ?>
<div class="page-hero"><div class="wrap"><div class="crumb">EkKhuda.org</div><h1 class="reveal">हमारे बारे में</h1><p class="hero-sub">सिर्फ़ अल्लाह, सिर्फ़ क़ुरआन।</p></div></div>
<section class="blk"><div class="wrap"><div class="stack">
 <div class="card reveal"><h3>हम कौन हैं</h3><p>EkKhuda.org अल्लाह का पैग़ाम, क़ुरआन, आसान हिंदी में पहुँचाने वाली एक मुफ़्त वेबसाइट है। हमारा मक़सद सीधा है: सिर्फ़ अल्लाह, सिर्फ़ क़ुरआन।</p></div>
 <div class="card reveal"><h3>हम क्या मानते हैं</h3><ul class="dots"><li>केवल एक अल्लाह है, और इबादत व इताअत सिर्फ़ उसी का हक़ है।</li><li>क़ुरआन अल्लाह की मुकम्मल और पूरी तरह तफ़सीली किताब है (6:114, 6:115)।</li><li>हम सिर्फ़ क़ुरआन की पैरवी करते हैं, इंसानों की लिखी किसी और धार्मिक किताब की नहीं।</li><li>अल्लाह के यहाँ पसंदीदा दीन सिर्फ़ उसकी इताअत (समर्पण) है (3:19)।</li></ul></div>
 <div class="card reveal"><h3>यहाँ क्या मिलेगा</h3><p>क़ुरआन, किताबें, वीडियो, 19 कैलकुलेटर, ज़कात और रमज़ान कैलकुलेटर, और नए लोगों के लिए आसान पेज।</p></div>
 <div class="card reveal"><h3>हमारी बहन साइटें</h3><p><a href="https://godalone.in" target="_blank" rel="noopener">GodAlone.in</a> (अंग्रेज़ी) और <a href="https://kadavulmattum.org" target="_blank" rel="noopener">Kadavulmattum.org</a> (तमिल)।</p></div>
 <div class="card reveal"><h3>इस साइट को कौन चलाता है</h3><p>EkKhuda.org टीम, क़ुरआन से महब्बत करने वाले कुछ दोस्त।</p></div>
 <div class="card reveal"><h3>संपर्क</h3><p><a href="<?php echo esc_url(home_url('/contact')); ?>">संपर्क पेज</a> पर लिखें, या <a href="mailto:info@godalone.in">info@godalone.in</a> पर ईमेल करें।</p></div>
</div></div></section>
<?php elseif ($k === 'privacy-policy') : ?>
<div class="page-hero"><div class="wrap"><div class="crumb">EkKhuda.org</div><h1 class="reveal">गोपनीयता नीति</h1><p class="hero-sub">हम बहुत कम जानकारी लेते हैं। हम आपकी जानकारी किसी को नहीं बेचते।</p></div></div>
<section class="blk"><div class="wrap"><div class="stack">
 <div class="card reveal"><h3>हम क्या लेते हैं</h3><ul class="dots"><li><b>संपर्क फ़ॉर्म:</b> आपका नाम, ईमेल और संदेश — सिर्फ़ आपको जवाब देने के लिए।</li><li><b>न्यूज़लैटर:</b> आपका ईमेल — सिर्फ़ न्यूज़लैटर भेजने के लिए। आप कभी भी हटवा सकते हैं।</li><li><b>साइट के आम रिकॉर्ड:</b> बाकी वेबसाइटों की तरह, हमारी होस्टिंग साइट को चलाने और महफ़ूज़ रखने के लिए बुनियादी विज़िट की जानकारी (जैसे पेज और ब्राउज़र) दर्ज करती है।</li></ul></div>
 <div class="card reveal"><h3>दूसरी सेवाएँ</h3><p>हमारे पेज Google Fonts से फ़ॉन्ट लोड करते हैं। लोड होते समय ये सेवाएँ आपका IP एड्रेस देख सकती हैं। YouTube, WhatsApp, Telegram, Facebook, X, GitHub जैसे लिंक उन साइटों को खोलते हैं, जिनकी अपनी गोपनीयता नीति है।</p></div>
 <div class="card reveal"><h3>कुकीज़</h3><p>हम सिर्फ़ वही छोटी फ़ाइलें इस्तेमाल करते हैं जो साइट को चलाने और जल्दी खुलने के लिए ज़रूरी हैं (जैसे लाइट या डार्क मोड याद रखना)।</p></div>
 <div class="card reveal"><h3>आपके विकल्प</h3><p>अपनी जानकारी देखने, सुधारने या हटवाने के लिए <a href="mailto:info@godalone.in">info@godalone.in</a> पर लिखें।</p></div>
 <div class="card reveal"><h3>बच्चे</h3><p>यह साइट सबके लिए है, पर हम जानते हुए छोटे बच्चों से जानकारी नहीं लेते।</p></div>
 <div class="card reveal"><h3>बदलाव</h3><p>अगर हम इस पेज को बदलेंगे, तो नई तारीख़ यहाँ दिखाई जाएगी। आख़िरी अपडेट: 14 अक्तूबर 2026।</p></div>
</div></div></section>
<?php else : ?>
<div class="page-hero"><div class="wrap"><div class="crumb">EkKhuda.org</div><h1 class="reveal">कॉपीराइट और इस्तेमाल</h1><p class="hero-sub">ओपन सोर्स, बाँटने के लिए मुफ़्त।</p></div></div>
<section class="blk"><div class="wrap"><div class="stack">
 <div class="card reveal"><h3>ओपन सोर्स, बाँटने के लिए मुफ़्त</h3><p>EkKhuda.org ओपन सोर्स और मुफ़्त है। वेबसाइट का कोड <a href="https://github.com/kadavulmattum" target="_blank" rel="noopener">GitHub</a> पर खुला है।</p></div>
 <div class="card reveal"><h3>क़ुरआन</h3><p>क़ुरआन अल्लाह की किताब है, हम उस पर अपना हक़ नहीं जताते। आप उसे पढ़ें, बाँटें और दूसरों को दें।</p></div>
 <div class="card reveal"><h3>अनुवाद और किताबें</h3><p>इस साइट पर कुछ अनुवाद और किताबें दूसरे लेखकों का काम हैं और उन्हीं की हैं। कृपया उन्हें बिना बदले, लेखक का नाम रखते हुए बाँटें।</p></div>
 <div class="card reveal"><h3>कृपया करें</h3><ul class="dots"><li>हमारे पेज और लिंक खुलकर शेयर करें।</li><li>कोई ग़लती दिखे तो हमें बताएँ, हम सुधार लेंगे।</li></ul></div>
 <div class="card reveal"><h3>कृपया न करें</h3><ul class="dots"><li>अल्लाह के कलाम या किसी आयत के मतलब को न बदलें।</li><li>हमारी मुफ़्त सामग्री को अपनी बताकर न बेचें, और इस साइट के नाम से वह न कहें जो हमने नहीं कहा।</li></ul></div>
</div></div></section>
<?php endif; ?>

<?php get_footer(); ?>
