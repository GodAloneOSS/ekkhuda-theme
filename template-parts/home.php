<?php if (!defined('ABSPATH')) exit; ?>

<!-- ══════════ HERO ══════════ -->
<section class="hero">
  <div class="hero-inner">
    <div class="flourish reveal"><i></i></div>
    <div class="bism reveal">بِسْمِ اللَّهِ الرَّحْمَٰنِ الرَّحِيمِ</div>
    <div class="bism-en reveal">अल्लाह के नाम से, जो निहायत रहम करने वाला और मेहरबान है</div>
    <h1 class="reveal"><span class="l1">ख़ुशी है</span><span class="l2 gold">सिर्फ़ अल्लाह की इताअत में</span></h1>
    <p class="hero-sub reveal">अल्लाह ने हमें सिर्फ़ उसी की इबादत के लिए पैदा किया है — मुकम्मल इताअत के साथ, हर तरह की बुतपरस्ती से आज़ाद होकर। यही इंसानियत के लिए अल्लाह का आख़िरी पैग़ाम है।</p>
    <div class="hero-cta reveal">
      <a class="btn btn-gold" href="https://godalone.in/quran/" target="_blank" rel="noopener">📖 क़ुरआन पढ़ें</a>
      <a class="btn btn-ghost" href="<?php echo esc_url(home_url('/introduction')); ?>">पैग़ाम जानें →</a>
    </div>
  </div>
</section>

<!-- ══════════ VERSE ══════════ -->
<div class="verse">
  <div class="q">"</div>
  <blockquote class="reveal">अल्लाह के नज़दीक सिर्फ़ इस्लाम (इताअत) ही सच्चा दीन है।</blockquote>
  <cite class="reveal">— क़ुरआन 3 : 19</cite>
</div>

<!-- ══════════ EXPLORE ══════════ -->
<section class="blk">
  <div class="wrap">
    <div class="sec-head">
      <span class="kicker reveal">तलाश करें</span>
      <h2 class="reveal">पैग़ाम को जानिए</h2>
      <p class="reveal">आख़िरी किताब (क़ुरआन) को पढ़ने, समझने और लोगों तक पहुंचाने के लिए जो कुछ चाहिए, सब यहां है।</p>
    </div>
    <div class="grid grid-4">
      <?php
      $cards = array(
        array('<img src="' . esc_url(content_url('uploads/card-icons/icon-math-miracle.png')) . '" alt="Mathematical Miracle" loading="lazy">','गणित का करिश्मा','नंबर 19 पर आधारित हैरतअंगेज़ पैटर्न, जो साबित करते हैं कि क़ुरआन अल्लाह की तरफ़ से है।','जानिए', home_url('/mathematical-miracle'), ''),
        array('<img src="' . esc_url(content_url('uploads/card-icons/icon-quran-downloads.png')) . '" alt="Quran Downloads" loading="lazy">','क़ुरआन डाउनलोड','कंप्यूटर, मोबाइल ऐप और PDF फ़ॉर्मैट में क़ुरआन डाउनलोड करें।','डाउनलोड करें', home_url('/downloads'), ''),
        array('<img src="' . esc_url(content_url('uploads/card-icons/icon-quran-audio.png')) . '" alt="Quran Audio" loading="lazy">','क़ुरआन ऑडियो','अरबी में ख़ूबसूरत तिलावत, अंग्रेज़ी और तमिल तर्जुमे के साथ।','सुनिए', home_url('/audio-quran'), ''),
        array('<img src="' . esc_url(content_url('uploads/card-icons/icon-purchase-quran.png')) . '" alt="Purchase Quran" loading="lazy">','क़ुरआन ख़रीदें','Amazon और Flipkart इंडिया के ज़रिए क़ुरआन की छपी हुई कॉपी मंगवाएं।','अभी ख़रीदें', '#buy', 'buy'),
        array('<img src="' . esc_url(content_url('uploads/card-icons/icon-book-library.png')) . '" alt="Book Library" loading="lazy">','किताबों की लाइब्रेरी','इताअत (इस्लाम) के बारे में हमारी किताबों का बड़ा ज़ख़ीरा।','देखिए', 'https://godalone.in/library/', ''),
        array('<img src="' . esc_url(content_url('uploads/card-icons/icon-submission-videos.png')) . '" alt="Submission Videos" loading="lazy">','इताअत की वीडियो','डॉ. रशाद ख़लीफ़ा के वीडियो और जुमे के ख़ुतबे।','देखिए', home_url('/videos'), ''),
        array('<img src="' . esc_url(content_url('uploads/card-icons/icon-charity-trust.png')) . '" alt="Charity Trust" loading="lazy">','ख़ैराती ट्रस्ट','नेक कामों और अल्लाह के पैग़ाम को फैलाने में मदद करें।','मदद करें', home_url('/charity'), ''),
        array('🎨','क़ुरआन कलरिंग बुक','बच्चों के लिए क़ुरआन की कहानियां ऑनलाइन रंगें या छापें।','रंग भरें', 'https://godalone.in/coloring-book/', ''),
      );
      foreach ($cards as $c) {
        list($icon,$title,$desc,$cta,$url,$mode) = $c;
        $cls = $mode === 'buy' ? 'card reveal gh-buy' : 'card reveal';
        $href = $mode === 'buy' ? '#buy' : $url;
        echo '<a class="'.$cls.'" href="'.esc_url($href).'">'
           . '<span class="ico">'.$icon.'</span>'
           . '<h3>'.esc_html($title).'</h3>'
           . '<p>'.esc_html($desc).'</p>'
           . '<span class="go">'.esc_html($cta).' →</span></a>';
      }
      ?>
    </div>
  </div>
</section>

<!-- ══════════ UTILITIES ══════════ -->
<section class="blk utils">
  <div class="wrap">
    <div class="sec-head">
      <span class="kicker reveal">🛠️ इस्लामी औज़ार</span>
      <h2 class="reveal">हर मानने वाले के लिए औज़ार</h2>
      <p class="reveal">हिसाब, नमाज़ के वक़्त और तालीम से जुड़ी चीज़ें।</p>
    </div>
    <div class="util-grid">
      <?php
      $utils = array(
        array('<img src="' . esc_url(content_url('uploads/card-icons/icon-coloring-book.png')) . '" alt="Quran Coloring Book" loading="lazy">','क़ुरआन कलरिंग बुक','बच्चों के लिए क़ुरआन की कहानियां ऑनलाइन रंगें या छापें।','https://godalone.in/coloring-book/','_blank'),
        array('<img src="' . esc_url(content_url('uploads/card-icons/icon-calculator-19.png')) . '" alt="19 Calculator" loading="lazy">','19 कैलकुलेटर','19 से तक़सीम की जांच करें', home_url('/calculator-19'),''),
        array('<img src="' . esc_url(content_url('uploads/card-icons/icon-salat-ramadan.png')) . '" alt="Salat & Ramadan Timing" loading="lazy">','नमाज़ और रमज़ान का वक़्त','सही नमाज़ टाइमिंग', home_url('/salat-timing'),''),
        array('<img src="' . esc_url(content_url('uploads/card-icons/icon-utility.png')) . '" alt="Utility" loading="lazy">','यूटिलिटी','रोज़े की तारीख़ें और वक़्त', home_url('/ramadan-calculator'),''),
        array('<img src="' . esc_url(content_url('uploads/card-icons/icon-zakat-calculator.png')) . '" alt="Zakat Calculator" loading="lazy">','ज़कात कैलकुलेटर','क़ुरआन के मुताबिक़ कैलकुलेटर', home_url('/zakat-calculator'),''),
      );
      foreach ($utils as $u) {
        list($icon,$title,$sub,$url,$tgt) = $u;
        $t = $tgt === '_blank' ? ' target="_blank" rel="noopener"' : '';
        echo '<a class="util reveal" href="'.esc_url($url).'"'.$t.'>'
           . '<span class="ui">'.$icon.'</span>'
           . '<b>'.$title.'</b><span>'.$sub.'</span></a>';
      }
      ?>
    </div>
  </div>
</section>

<!-- ══════════ TELEGRAM ══════════ -->
<section class="tg">
  <div class="wrap">
    <div class="flourish reveal"><i></i></div>
    <span class="kicker reveal">✈️ हमसे जुड़िए</span>
    <h2 class="reveal" style="margin-top:14px">रोज़ की आयतें और याद-दहानी</h2>
    <p class="reveal" style="color:var(--muted)">रोज़ की क़ुरआनी आयतें, गणित का करिश्मा और रूहानी याद-दहानी, इंशा'अल्लाह।</p>
    <div class="chip-row reveal">
      <a class="tg-btn" href="https://t.me/Quran6346" target="_blank" rel="noopener">✈️ अंग्रेज़ी चैनल</a>
      <a class="tg-btn" href="https://t.me/kadavulmattum_org" target="_blank" rel="noopener">✈️ तमिल चैनल</a>
    </div>
    <p class="reveal" style="margin-top:30px;font-family:var(--font-display);font-style:italic;color:var(--gold-tan);font-size:19px">"ऐ मेरे रब, मेरा इल्म बढ़ा दे" — क़ुरआन 20:114</p>
  </div>
</section>
