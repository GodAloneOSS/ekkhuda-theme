<?php
/**
* ज़रूरी दान (ज़कात) कैलकुलेटर — शुद्ध आमदनी पर वाजिब 2.5% ज़कात का हिसाब
* लगाता है (क़ुरआन 6:141, 2:215, 7:156)। इस स्लग के लिए कोई wp-admin पेज
* मौजूद नहीं है, इसलिए functions.php में जोड़े गए rewrite rule से रूट किया
* जाता है (calculator-19 जैसा ही पैटर्न)। पूरी तरह से self-contained:
* markup + scoped <style> + inline <script>, godalone.in और
* kadavulmattum.org के इसी पेज जैसा ढांचा।
*/
if (!defined('ABSPATH')) exit;
get_header();
?>
<div class="page-hero">
  <div class="wrap">
    <div class="crumb">Ekkhuda.org</div>
    <h1 class="reveal">💰 ज़रूरी दान (ज़कात)</h1>
    <p class="reveal zk-sub">ज़कात आपकी शुद्ध आमदनी का 2.5% है, जो मिलते ही अदा करना ज़रूरी है — हिसाब लगाने के लिए नीचे रक़म दर्ज करें।</p>
  </div>
</div>

<section class="blk zk-sec">
  <div class="wrap">

    <div class="zk-card reveal">
      <label class="zk-label" for="zkIncome">ज़कात का हिसाब लगाने के लिए आमदनी दर्ज करें :</label>
      <div class="zk-inputwrap">
        <input type="text" inputmode="decimal" autocomplete="off" spellcheck="false" id="zkIncome" class="zk-input" placeholder="मिसाल: 50000">
        <span class="zk-hint">× 2.5%</span>
      </div>
      <div class="zk-actions">
        <button type="button" id="zkCalc" class="btn btn-gold">🧮 हिसाब लगाएं</button>
        <button type="button" id="zkClear" class="btn btn-ghost">🗑️ साफ़ करें</button>
      </div>
      <div class="zk-result" id="zkResult" hidden></div>
    </div>

    <div class="card zk-article reveal">
      <h3>ज़रूरी दान (ज़कात)</h3>
      <p>ज़रूरी दान (ज़कात) "फ़सल कटाई के दिन" ही अदा कर देना ज़रूरी है (6:141)। जब भी हमें "शुद्ध आमदनी" हासिल हो, हमें उसका 2.5% अलग रखकर मुक़र्रर हक़दारों को देना चाहिए &mdash; माता-पिता, रिश्तेदार, यतीम, ग़रीब और मुसाफ़िर को, इसी तरतीब में (2:215)। ज़कात की अहमियत अल्लाह के इस फ़रमान से ज़ाहिर होती है: "मेरी रहमत हर चीज़ पर छाई हुई है, मगर मैं इसे उन नेक लोगों के लिए ख़ास करूंगा जो ज़कात देते हैं" (7:156)।</p>
    </div>

    <div class="grid zk-verses">

      <div class="card zk-verse reveal">
        <div class="zk-cite">क़ुरआन 6:141</div>
        <div class="zk-ar">وَهُوَ الَّذى أَنشَأَ جَنّٰتٍ مَعروشٰتٍ وَغَيرَ مَعروشٰتٍ وَالنَّخلَ وَالزَّرعَ مُختَلِفًا أُكُلُهُ وَالزَّيتونَ وَالرُّمّانَ مُتَشٰبِهًا وَغَيرَ مُتَشٰبِهٍ كُلوا مِن ثَمَرِهِ إِذا أَثمَرَ وَءاتوا حَقَّهُ يَومَ حَصادِهِ وَلا تُسرِفوا إِنَّهُ لا يُحِبُّ المُسرِفينَ</div>
        <p class="zk-tr">और वही है, जिसने बाग़ पैदा किए, जो सहारों के द्वारा उठाये जाते हैं और ऐसे भी जो सहारों के द्वारा उठाये नहीं जाते, और खजूर के पेड़, और अलग-अलग स्वाद वाली फ़सलें, और ज़ैतून, और अनार &mdash; फल जो एक जैसे हैं, फिर भी अलग हैं। उनके फलों से खाओ, जब वे पक जाएँ, और कटाई के दिन हक़ की ज़कात दो, और कुछ बर्बाद न करो। वह बर्बाद करने वालों को पसंद नहीं करता।</p>
        <p class="zk-fn"><strong>फ़ुटनोट:</strong> ज़कात इतना महत्वपूर्ण है कि रहमान ने अपनी रहमत उन्हीं लोगों तक सीमित कर दी है, जो इसे देते हैं (7:156)। फिर भी भ्रष्ट मुसलमान इस सबसे अहम फ़रमान को भूल गए हैं और साल में सिर्फ़ एक बार ज़कात देते हैं। यहाँ हम देखते हैं कि ज़कात "जिस दिन आमदनी मिले" उसी दिन देनी चाहिए। इब्राहीम के ज़रिए हमें जो हुक्म मिला है, वह हमारी शुद्ध आमदनी का 2.5% है।</p>
      </div>

      <div class="card zk-verse reveal">
        <div class="zk-cite">क़ुरआन 2:215</div>
        <div class="zk-ar">يَسـَٔلونَكَ ماذا يُنفِقونَ قُل ما أَنفَقتُم مِن خَيرٍ فَلِلوٰلِدَينِ وَالأَقرَبينَ وَاليَتٰمىٰ وَالمَسٰكينِ وَابنِ السَّبيلِ وَما تَفعَلوا مِن خَيرٍ فَإِنَّ اللَّهَ بِهِ عَليمٌ</div>
        <p class="zk-tr">लोग तुमसे पूछते हैं कि वह क्या ख़र्च करें। कह दो कि जो धन तुम ख़र्च करो, उसमें हक़ है तुम्हारे माता-पिता का, रिश्तेदारों का, अनाथों का, ग़रीबों का और मुसाफ़िरों का। और तुम जो भी भलाई करोगे, अल्लाह उसे पूरी तरह जानता है।</p>
      </div>

      <div class="card zk-verse reveal">
        <div class="zk-cite">क़ुरआन 7:156</div>
        <div class="zk-ar">وَاكتُب لَنا فى هٰذِهِ الدُّنيا حَسَنَةً وَفِى الـٔاخِرَةِ إِنّا هُدنا إِلَيكَ قالَ عَذابى أُصيبُ بِهِ مَن أَشاءُ وَرَحمَتى وَسِعَت كُلَّ شَىءٍ فَسَأَكتُبُها لِلَّذينَ يَتَّقونَ وَيُؤتونَ الزَّكوٰةَ وَالَّذينَ هُم بِـٔايٰتِنا يُؤمِنونَ</div>
        <p class="zk-tr">"और हमारे लिए इस दुनिया में और आख़िरत में भी भलाई लिख दे। हम तो तेरी तरफ़ ही रुजू करते हैं।" (ख़ुदा ने) फ़रमाया: "मेरा अज़ाब मैं जिसे चाहूं पहुंचाता हूं, और मेरी रहमत हर चीज़ पर छाई हुई है। लेकिन मैं इसे उनके लिए ख़ास करूंगा जो (1) नेक ज़िन्दगी गुज़ारते हैं, (2) ज़रूरी दान (ज़कात) अदा करते हैं, (3) हमारी आयतों पर ईमान लाते हैं, और&hellip;"</p>
        <p class="zk-fn"><strong>फ़ुटनोट:</strong> ज़रूरी दान (ज़कात) की अहमियत को जितना बयान किया जाए, कम है। जैसा कि 6:141 में मुक़र्रर किया गया है, ज़कात हर आमदनी हासिल होते ही अदा करनी चाहिए &mdash; अपनी शुद्ध आमदनी का 2.5% माता-पिता, रिश्तेदारों, यतीमों, ग़रीबों और मुसाफ़िरों को, इसी तरतीब में, देना चाहिए (देखें 2:215)।</p>
      </div>

    </div>

    <div class="zk-charity reveal">
      <a class="btn btn-gold" href="https://godalone.in/charity/" target="_blank" rel="noopener">❤️ ख़ैराती ट्रस्ट</a>
    </div>

  </div>
</section>

<style>
.zk-sub{max-width:640px;margin:14px auto 0;color:var(--ink-soft);font-size:clamp(15px,2vw,17.5px)}
.zk-sec{padding-top:56px}
.zk-card{max-width:640px;margin:0 auto 40px;padding:36px 32px;border-radius:var(--radius-lg);
  background:linear-gradient(180deg,var(--panel),var(--panel-2));border:1px solid var(--line-2);
  box-shadow:var(--shadow-sm)}
.zk-label{display:block;font-weight:700;font-size:14px;letter-spacing:.3px;color:var(--ink-soft);margin-bottom:10px}
.zk-inputwrap{position:relative}
.zk-input{width:100%;box-sizing:border-box;padding:20px 84px 20px 20px;border-radius:14px;
  border:1px solid var(--line);background:var(--bg-2);color:var(--ink);
  font-family:var(--font-body);font-variant-numeric:tabular-nums;font-weight:700;
  font-size:clamp(20px,4vw,28px);letter-spacing:.5px;transition:border-color .2s,box-shadow .2s}
.zk-input:focus{outline:none;border-color:var(--gold);box-shadow:0 0 0 3px rgba(216,180,94,.15)}
.zk-input.err{border-color:#f87171;animation:zkshake .32s}
@keyframes zkshake{0%,100%{transform:translateX(0)}25%{transform:translateX(-6px)}75%{transform:translateX(6px)}}
.zk-hint{position:absolute;right:18px;top:50%;transform:translateY(-50%);color:var(--muted);
  font-weight:600;font-size:15px;pointer-events:none}
.zk-actions{display:flex;gap:14px;margin-top:20px;flex-wrap:wrap}
.zk-actions .btn{flex:1;min-width:150px}
.zk-result{margin-top:26px;padding:28px 22px;border-radius:16px;text-align:center;
  border:1px solid rgba(52,211,153,.4);background:rgba(52,211,153,.08);animation:zkin .3s ease}
@keyframes zkin{from{opacity:0;transform:translateY(8px)}to{opacity:1;transform:none}}
.zk-r-icon{width:52px;height:52px;margin:0 auto 14px;border-radius:50%;display:grid;place-items:center;
  font-size:24px;background:rgba(52,211,153,.15);color:#34d399}
.zk-r-title{font-size:clamp(22px,3.6vw,28px);margin:0 0 8px;color:#34d399}
.zk-r-formula{font-family:var(--font-body);font-variant-numeric:tabular-nums;font-weight:700;
  font-size:clamp(15px,2.6vw,19px);color:var(--ink);word-break:break-all;margin-bottom:8px}
.zk-r-note{color:var(--muted);font-size:14.5px;margin:0}
.zk-article{max-width:820px;margin:0 auto 40px;padding:32px}
.zk-article h3{margin-top:0}
.zk-article p{color:var(--ink-soft);line-height:1.75;margin:0}
.zk-article a{color:var(--gold-tan);text-decoration:underline}
.zk-verses{grid-template-columns:1fr;gap:22px;max-width:820px;margin:0 auto}
.zk-verse{padding:30px 28px}
.zk-cite{font-weight:700;letter-spacing:1.5px;text-transform:uppercase;font-size:13px;color:var(--gold-tan);margin-bottom:14px}
.zk-cite a{color:inherit;text-decoration:none}
.zk-cite a:hover{text-decoration:underline}
.zk-ar{font-family:var(--font-ar);direction:rtl;text-align:right;font-size:clamp(19px,3vw,24px);
  line-height:2;color:var(--ink);margin-bottom:16px}
.zk-tr{color:var(--ink-soft);line-height:1.75;margin:0 0 12px;font-style:italic;font-family:var(--font-display)}
.zk-fn{color:var(--muted);font-size:14px;line-height:1.7;margin:0;padding-top:12px;border-top:1px dashed var(--line-2)}
.zk-charity{text-align:center;margin-top:46px}
@media(max-width:560px){
  .zk-card{padding:26px 20px}
  .zk-actions .btn{min-width:0}
  .zk-verse{padding:24px 20px}
}
</style>

<script>
(function () {
  "use strict";
  var input = document.getElementById("zkIncome");
  var resultBox = document.getElementById("zkResult");
  var calcBtn = document.getElementById("zkCalc");
  var clearBtn = document.getElementById("zkClear");

  function formatMoney(n) {
    var fixed = n.toFixed(2);
    var parts = fixed.split(".");
    var intPart = parts[0];
    var out = "";
    var count = 0;
    for (var i = intPart.length - 1; i >= 0; i--) {
      out = intPart.charAt(i) + out;
      count++;
      if (count % 3 === 0 && i !== 0) out = "," + out;
    }
    return out + "." + parts[1];
  }

  function sanitize(raw) {
    var s = String(raw).replace(/[^0-9.]/g, "");
    var firstDot = s.indexOf(".");
    if (firstDot !== -1) {
      s = s.slice(0, firstDot + 1) + s.slice(firstDot + 1).replace(/\./g, "");
    }
    return s;
  }

  function showError() {
    resultBox.hidden = true;
    input.classList.remove("err");
    void input.offsetWidth;
    input.classList.add("err");
    input.focus();
    setTimeout(function () { input.classList.remove("err"); }, 350);
  }

  function calculate() {
    var digits = sanitize(input.value);
    var income = parseFloat(digits);
    if (!digits || isNaN(income) || income <= 0) {
      showError();
      return;
    }
    input.value = digits;

    var zakat = income * 0.025;

    resultBox.hidden = false;
    resultBox.innerHTML =
      '<div class="zk-r-icon">💰</div>' +
      '<h3 class="zk-r-title">ज़कात: ' + formatMoney(zakat) + '</h3>' +
      '<div class="zk-r-formula">' + formatMoney(income) + ' &times; 2.5%</div>' +
      '<p class="zk-r-note">यह इस आमदनी पर वाजिब ज़कात है (क़ुरआन 6:141, 2:215)।</p>';
    resultBox.scrollIntoView({ behavior: "smooth", block: "nearest" });
  }

  function clearAll() {
    input.value = "";
    resultBox.hidden = true;
    resultBox.innerHTML = "";
    input.focus();
  }

  calcBtn.addEventListener("click", calculate);
  clearBtn.addEventListener("click", clearAll);
  input.addEventListener("keydown", function (evt) {
    if (evt.key === "Enter") calculate();
  });
})();
</script>

<?php get_footer(); ?>
