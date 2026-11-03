<?php
/**
 * Template for the Contact page (slug: contact), Hindi.
 * Routed by a rewrite rule in functions.php (ek_contact_page query var).
 */
if (!defined('ABSPATH')) exit;
get_header();
$ek_contact_nonce = wp_create_nonce('contact_form_nonce');
?>
<style>
.contact-form label{display:block;color:var(--gold-bright);margin-bottom:6px;font-weight:600;font-size:.92rem}
.contact-form input,.contact-form textarea{width:100%;padding:12px;border:2px solid var(--line);
  border-radius:10px;background:var(--panel-2);color:var(--ink);font-size:1rem;font-family:inherit;box-sizing:border-box}
.contact-form input:focus,.contact-form textarea:focus{outline:none;border-color:var(--gold);
  box-shadow:0 0 0 3px rgba(216,180,94,.25)}
.contact-form .field{margin-bottom:18px}
.contact-form .req{color:#e0685f}
#contactHint{display:none;padding:14px;border-radius:10px;text-align:center;margin-top:14px;font-weight:600;background:linear-gradient(135deg,#F7D97E,#E5B94E);color:#fff}
#contactHint.show{display:block}
#contactHint.err{background:linear-gradient(135deg,#ef4444,#dc2626)}
.contact-info-card{background:var(--panel-2);padding:22px;border-radius:var(--radius);border:1px solid var(--line);
  text-align:center;transition:.2s}
.contact-info-card:hover{transform:translateY(-3px)}
.contact-info-card .ico{font-size:1.6rem;margin-bottom:8px}
.contact-grid{display:grid;grid-template-columns:1.3fr 1fr;gap:24px}
@media (max-width:820px){.contact-grid{grid-template-columns:1fr}}
.contact-cards{display:flex;flex-direction:column;gap:18px}
</style>
<div class="page-hero">
  <div class="wrap">
    <div class="crumb">EkKhuda.org</div>
    <h1>📞 राब्ता करें</h1>
    <p style="color:var(--ink-soft);max-width:640px;margin:14px auto 0">क़ुरआन के बारे में कोई सवाल है, या साइट इस्तेमाल करने में मदद चाहिए? हमें लिखिए। हम हर संदेश पढ़ते हैं, इन्शा अल्लाह।</p>
  </div>
</div>
<section class="blk">
  <div class="wrap">
    <div class="contact-grid">
      <div class="card">
        <h2 style="margin-bottom:20px">✉️ हमें संदेश भेजिए</h2>
        <form id="contactForm" class="contact-form">
          <div class="field"><label>नाम <span class="req">*</span></label><input type="text" name="contact_name" required></div>
          <div class="field"><label>ईमेल <span class="req">*</span></label><input type="email" name="contact_email" required></div>
          <div class="field"><label>फ़ोन (वैकल्पिक)</label><input type="tel" name="contact_phone"></div>
          <div class="field"><label>संदेश <span class="req">*</span></label><textarea name="contact_message" rows="5" required></textarea></div>
          <input type="text" id="contactHoney" class="honey" name="website" tabindex="-1" autocomplete="off">
          <button type="submit" class="btn btn-gold" style="width:100%">📤 संदेश भेजें</button>
          <p id="contactHint"></p>
        </form>
      </div>
      <div class="contact-cards">
        <div class="contact-info-card"><div class="ico">📞</div><h3 style="margin-bottom:.4rem">फ़ोन</h3><a href="tel:+919566268619" style="color:var(--ink-soft);text-decoration:none">+91 95662 68619</a></div>
        <div class="contact-info-card"><div class="ico">✉️</div><h3 style="margin-bottom:.4rem">ईमेल</h3><a href="mailto:info@godalone.in" style="color:var(--ink-soft);text-decoration:none">info@godalone.in</a></div>
        <div class="contact-info-card"><div class="ico">💬</div><h3 style="margin-bottom:.4rem">WhatsApp</h3><a href="https://wa.me/919566268619" target="_blank" rel="noopener" style="color:var(--ink-soft);text-decoration:none">WhatsApp पर संदेश भेजें</a></div>
      </div>
    </div>
  </div>
</section>
<section class="news reveal">
  <div class="news-inner">
    <div class="kicker">✉️ न्यूज़लेटर</div>
    <h2>अपडेट पाने के लिए जुड़िए</h2>
    <p>नए लेख, वीडियो और किताबों की सूचना सीधे अपने ईमेल पर पाइए।</p>
    <form id="ghNews">
      <div class="lang-pick">
        <label><input type="radio" name="newsletter_lang" value="hindi" checked><span>हिन्दी</span></label>
        <label><input type="radio" name="newsletter_lang" value="english"><span>English</span></label>
        <label><input type="radio" name="newsletter_lang" value="both"><span>Both</span></label>
      </div>
      <div class="row"><input type="email" class="ghne" placeholder="your@email.com" required><button type="submit" class="btn btn-gold sub">✉️ जुड़ें</button></div>
      <input type="text" id="ghHoney" class="honey" name="website" tabindex="-1" autocomplete="off">
      <input type="hidden" id="ghFt" value="<?php echo time(); ?>">
      <p class="hint" id="ghHint"></p>
    </form>
  </div>
</section>
<section class="verse">
  <div class="wrap">
    <p class="ar">وَإِذَا سَأَلَكَ عِبَادِي عَنِّي فَإِنِّي قَرِيبٌ ۖ أُجِيبُ دَعْوَةَ الدَّاعِ إِذَا دَعَانِ</p>
    <blockquote>और जब मेरे बन्दे तुमसे मेरे बारे में पूछें तो (कह दो कि) मै तो (तुम्हारे) क़रीब ही हूँ और मैं उसकी पुकार का जवाब देता हूँ जब वह मुझे पुकारता है। तो (उनको चाहिऐ कि) वह मेरा हुक्म मानें और मुझपर ईमान लाएँ, ताकि वे सीधे मार्ग पर रहें।</blockquote>
    <cite>क़ुरआन 2:186</cite>
  </div>
</section>
<script>
(function(){
  var f=document.getElementById('contactForm');if(!f)return;
  var hint=document.getElementById('contactHint');
  var ajax=(window.EK&&EK.ajax)?EK.ajax:'<?php echo esc_url(admin_url('admin-ajax.php')); ?>';
  f.addEventListener('submit',function(e){
    e.preventDefault();
    var btn=f.querySelector('button[type=submit]');
    function show(m,err){hint.textContent=m;hint.className='show'+(err?' err':'');}
    if(document.getElementById('contactHoney').value!==''){show('✅ शुक्रिया! आपका संदेश मिल गया।');f.reset();return;}
    var old=btn.textContent;btn.disabled=true;btn.textContent='⏳ भेजा जा रहा है…';
    var fd=new FormData(f);fd.append('action','submit_contact_form');fd.append('nonce','<?php echo esc_js($ek_contact_nonce); ?>');
    fetch(ajax,{method:'POST',body:fd,credentials:'same-origin'}).then(function(r){return r.json()}).then(function(j){
      if(j&&j.success){show('✅ '+j.data);f.reset();}else{show('❌ '+((j&&j.data)||'कुछ गड़बड़ हुई। दोबारा कोशिश कीजिए।'),true);}
    }).catch(function(){show('❌ कुछ गड़बड़ हुई। दोबारा कोशिश कीजिए।',true);}).then(function(){btn.disabled=false;btn.textContent=old;});
  });
})();
</script>
<?php get_footer(); ?>
