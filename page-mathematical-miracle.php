<?php
/**
 * Template: Mathematical Miracle (Appendix 1) — HINDI version for ekkhuda.org
 * Faithful, verbatim reproduction of Appendix 1 of the Authorized English
 * translation of Quran by Rashad Khalifa, Ph.D. (Parts 1 & 2), restyled to
 * EkKhuda.org's design system (Hindi). No text, numbers, or letters altered from
 * the source — only structure, tables and typography were added for clarity.
 */
if (!defined('ABSPATH')) exit;
get_header();
?>
<style>
/* ============ Mathematical Miracle — scoped styles ============ */
.mm-hero-note{font-family:var(--font-display);font-style:italic;color:var(--gold-tan);font-size:15px;margin-top:6px}
.mm-wrap{max-width:880px;margin:0 auto;padding:0 22px 90px}
.mm-part-tag{display:inline-block;margin:44px 0 10px;font-family:var(--font-body);font-weight:700;font-size:12.5px;
  letter-spacing:3px;text-transform:uppercase;color:var(--gold-tan);border:1px solid var(--line);border-radius:999px;
  padding:7px 16px;background:rgba(216,180,94,.06)}
.mm-toc{background:linear-gradient(180deg,var(--panel),var(--panel-2));border:1px solid var(--line-2);border-radius:var(--radius);
  padding:26px 26px 10px;margin:34px 0 10px}
.mm-toc h2{font-size:20px;margin:0 0 14px}
.mm-toc ol{margin:0;padding:0 0 16px 0;list-style:none;display:grid;grid-template-columns:1fr 1fr;gap:6px 22px}
@media(max-width:640px){.mm-toc ol{grid-template-columns:1fr}}
.mm-toc li{font-size:14.5px}
.mm-toc a{color:var(--ink-soft);display:flex;gap:8px}
.mm-toc a:hover{color:var(--gold-bright)}
.mm-toc .n{color:var(--gold-tan);font-weight:700;min-width:20px}
.mm-section{scroll-margin-top:90px;margin-top:54px}
.mm-section h2{font-size:clamp(24px,3.6vw,32px);border-bottom:1px solid var(--line);padding-bottom:14px;margin-bottom:20px}
.mm-section h3{font-size:20px;color:var(--gold-bright);margin:2em 0 .5em}
.mm-lead{font-size:18.5px!important;color:var(--ink)!important}
.mm-callout{background:rgba(216,180,94,.07);border:1px solid var(--line);border-left:3px solid var(--gold);
  border-radius:12px;padding:18px 22px;margin:1.6em 0}
.mm-callout p{margin:0;font-size:15.5px!important;color:var(--ink-soft)!important}
.mm-callout p+p{margin-top:.8em}
.mm-callout .lbl{display:block;font-weight:700;color:var(--gold-bright);font-size:12.5px;letter-spacing:1.5px;
  text-transform:uppercase;margin-bottom:8px}
.mm-quote{border-left:3px solid var(--gold);padding:4px 0 4px 22px;margin:1.6em 0;font-family:var(--font-display);
  font-style:italic;font-size:19px;color:var(--ink);line-height:1.6}
.mm-quote cite{display:block;margin-top:8px;font-style:normal;font-family:var(--font-body);font-weight:600;
  font-size:12.5px;letter-spacing:1.5px;text-transform:uppercase;color:var(--gold-tan)}
.mm-facts{list-style:none;margin:1.4em 0;padding:0;counter-reset:mmfact}
.mm-facts li{counter-increment:mmfact;display:flex;gap:16px;align-items:baseline;padding:12px 0;
  border-bottom:1px solid var(--line-2);font-size:16.5px;color:var(--ink-soft)}
.mm-facts li::before{content:counter(mmfact);flex:none;width:28px;height:28px;border-radius:50%;
  background:var(--panel-hi);border:1px solid var(--line);color:var(--gold-bright);font-weight:700;font-size:13px;
  display:grid;place-items:center;font-family:var(--font-body)}
.mm-facts .ans{margin-left:auto;padding-left:14px;flex:none;font-weight:700;color:var(--gold-bright);
  font-family:var(--font-body);white-space:nowrap}
.mm-table-wrap{overflow-x:auto;margin:1.6em 0;border:1px solid var(--line-2);border-radius:14px;background:var(--panel-2)}
.mm-tcap{font-family:var(--font-body);font-weight:700;font-size:14px;color:var(--gold-bright);margin:2em 0 .6em;
  padding-left:2px}
table.mm-table{width:100%;border-collapse:collapse;font-size:14.5px;min-width:420px}
table.mm-table th,table.mm-table td{padding:10px 14px;text-align:left;border-bottom:1px solid var(--line-2);
  color:var(--ink-soft);white-space:nowrap}
table.mm-table th{background:var(--panel-hi);color:var(--gold-bright);font-weight:700;font-size:12.5px;
  letter-spacing:.4px;text-transform:uppercase;white-space:normal}
table.mm-table tr:last-child td{border-bottom:none}
table.mm-table tr.mm-tot td{color:var(--ink);font-weight:700;background:rgba(216,180,94,.06)}
table.mm-table td.mm-wrap-cell{white-space:normal;min-width:260px}
.mm-longnum{background:var(--bg-3);border:1px solid var(--line-2);border-radius:12px;padding:16px 18px;margin:1em 0;
  font-family:'Courier New',monospace;font-size:13.5px;color:var(--gold-tan);overflow-x:auto;white-space:pre}
.mm-numlabel{font-family:var(--font-body);font-weight:700;color:var(--gold-bright);font-size:14.5px;margin:1.4em 0 .3em}
.mm-back{display:inline-flex;align-items:center;gap:8px;margin-top:16px;font-size:13.5px}
</style>

<div class="page-hero">
  <div class="wrap">
    <div class="crumb">EkKhuda.org — परिशिष्ट 1</div>
    <h1 class="reveal">गणितीय चमत्कार</h1>
    <div class="mm-hero-note reveal">रशाद ख़लीफ़ा, पीएच.डी. द्वारा क़ुरआन के प्रामाणिक अंग्रेज़ी अनुवाद का परिशिष्ट 1</div>
  </div>
</div>

<div class="verse">
  <div class="q">“</div>
  <blockquote>[क़ुरआन 74:35] “One of the Great Miracles” — हिन्दी अनुवाद जल्द उपलब्ध होगा, इन्शा अल्लाह।</blockquote>
</div>

<article class="article reveal">
<div class="mm-wrap">

<div class="mm-toc reveal" id="top">
  <h2 class="gold">विषय-सूची</h2>
  <ol>
    <li><a href="#simple-to-understand"><span class="n">1.</span> समझने में आसान — नक़ल करना नामुमकिन</a></li>
    <li><a href="#simple-facts"><span class="n">2.</span> सीधे-सादे तथ्य</a></li>
    <li><a href="#literary-composition"><span class="n">3.</span> साहित्यिक गणितीय संरचना</a></li>
    <li><a href="#gematrical-value"><span class="n">4.</span> “जुम्मल मूल्य” (Gematrical Value) क्या है?</a></li>
    <li><a href="#other-properties"><span class="n">5.</span> आरंभिक अक्षरों वाली सूराओं के अन्य गणितीय गुण</a></li>
    <li><a href="#major-parameters"><span class="n">6.</span> क़ुरआनी आरंभिक अक्षरों के प्रमुख मापदंड</a></li>
    <li><a href="#special-words"><span class="n">7.</span> ख़ास शब्दों की गणितीय कोडिंग</a></li>
    <li><a href="#why-19"><span class="n">8.</span> 19 ही क्यों!</a></li>
    <li><a href="#word-quran"><span class="n">9.</span> शब्द “क़ुरआन”</a></li>
    <li><a href="#strong-foundation"><span class="n">10.</span> एक मज़बूत बुनियाद</a></li>
    <li><a href="#five-pillars"><span class="n">11.</span> इस्लाम के पाँच स्तंभ</a></li>
    <li><a href="#mathematical-structure"><span class="n">12.</span> क़ुरआन की गणितीय संरचना</a></li>
    <li><a href="#numbers-suras-verses"><span class="n">13.</span> सूराओं और आयतों की संख्याएँ</a></li>
    <li><a href="#superhuman-combinations"><span class="n">14.</span> मानवीय सामर्थ्य से परे संख्यात्मक संयोजन</a></li>
    <li><a href="#witness"><span class="n">15.</span> बनी इसराईल में से एक गवाह</a></li>
  </ol>
</div>

<span class="mm-part-tag">भाग 1</span>

<p class="mm-lead">क़ुरआन एक ऐसी अनोखी विशेषता रखता है जो किसी भी मानव-रचित किताब में नहीं मिलती। क़ुरआन का हर तत्व गणितीय रूप से रचा गया है — सूराएँ, आयतें, शब्द, कुछ विशेष अक्षरों की संख्या, एक ही मूल से बने शब्दों की संख्या, ख़ुदा के नामों की संख्या और विविधता, कुछ शब्दों की अनोखी वर्तनी, कुछ शब्दों के भीतर कुछ अक्षरों की अनुपस्थिति या जान-बूझकर किया गया परिवर्तन, और उसकी विषय-वस्तु के अलावा क़ुरआन के और भी कई तत्व। क़ुरआन की गणितीय प्रणाली के दो मुख्य पहलू हैं: (1) गणितीय साहित्यिक संरचना, और (2) सूराओं तथा आयतों की संख्याओं से जुड़ी गणितीय संरचना। इसी व्यापक गणितीय कोडिंग के कारण, क़ुरआन के पाठ या उसके भौतिक क्रम में तनिक-सी भी छेड़छाड़ तुरंत पकड़ में आ जाती है।</p>

<div class="mm-section" id="simple-to-understand">
<h2>समझने में आसान — नक़ल करना नामुमकिन</h2>
<p>इतिहास में पहली बार हमारे पास एक ऐसी किताब है जिसमें ख़ुदाई रचना का प्रमाण स्वयं उसी के भीतर मौजूद है — एक ऐसी गणितीय संरचना जो इंसान के बस की नहीं।</p>
<p>इस किताब का कोई भी पाठक क़ुरआन के गणितीय चमत्कार को आसानी से जाँच सकता है। पूरे पाठ में “ख़ुदा” (अल्लाह) शब्द मोटे बड़े अक्षरों में लिखा गया है। “ख़ुदा” शब्द के आने की संचयी संख्या हर पृष्ठ के नीचे बाईं ओर दी गई है। दाईं ओर का अंक उन आयतों की संख्याओं का संचयी योग है जिनमें “ख़ुदा” शब्द आया है। पाठ का अंतिम पृष्ठ, पृष्ठ 372, दिखाता है कि “ख़ुदा” शब्द कुल 2698 बार आया है, अर्थात् 19x142। “ख़ुदा” शब्द वाली सभी आयतों की संख्याओं का कुल योग 118123 है, जो भी 19 का गुणज है (118123 = 19x6217)।</p>
<div class="mm-callout"><p>उन्नीस क़ुरआन की पूरी गणितीय प्रणाली का साझा भाजक है।</p></div>
<p>अकेला यही तथ्य इस बात का अकाट्य प्रमाण है कि क़ुरआन दुनिया के नाम ख़ुदा का संदेश है। कोई भी इंसान “ख़ुदा” शब्द के 2698 बार आने का, और जिन आयतों में वे आए उनकी संख्याओं का हिसाब नहीं रख सकता था। यह इसलिए भी नामुमकिन है कि (1) क़ुरआन जिस युग में उतारा गया वह अज्ञानता का युग था, और (2) सूराएँ और आयतें समय तथा स्थान की दृष्टि से दूर-दूर उतरीं। अवतरण का कालक्रम अंतिम स्वरूप से बहुत भिन्न था (परिशिष्ट 23)। फिर भी, क़ुरआन की गणितीय प्रणाली केवल “ख़ुदा” शब्द तक सीमित नहीं है; वह अत्यंत विशाल, अत्यंत जटिल और पूरी तरह व्यापक है।</p>
</div>

<div class="mm-section" id="simple-facts">
<h2>सीधे-सादे तथ्य</h2>
<p>क़ुरआन की तरह ही, क़ुरआन की गणितीय कोडिंग भी बहुत सरल से लेकर बहुत जटिल तक फैली हुई है। सीधे-सादे तथ्य वे अवलोकन हैं जिन्हें बिना किसी साधन के जाँचा जा सकता है। जटिल तथ्यों के लिए कैलकुलेटर या कंप्यूटर की मदद चाहिए। नीचे दिए तथ्यों को जाँचने के लिए किसी साधन की ज़रूरत नहीं, पर कृपया याद रखें कि ये सब मूल अरबी पाठ से संबंधित हैं:</p>
<ol class="mm-facts">
<li>पहली आयत (1:1), जिसे “बिस्मिल्लाह” कहा जाता है, 19 अक्षरों की है।</li>
<li>क़ुरआन में 114 सूराएँ हैं, जो है <span class="ans">19 x 6</span></li>
<li>क़ुरआन में आयतों की कुल संख्या 6346 है, अर्थात् <span class="ans">19 x 334</span></li>
<li>[6234 क्रमांकित आयतें &amp; 112 बिना क्रमांक की आयतें (बिस्मिल्लाह) 6234+112 = 6346] ध्यान दें कि 6+3+4+6 = <span class="ans">19</span></li>
<li>बिस्मिल्लाह 114 बार आती है, हालाँकि सूरा 9 से वह स्पष्ट रूप से अनुपस्थित है (सूरा 27 में वह दो बार आती है) &amp; 114 = <span class="ans">19x6</span></li>
<li>सूरा 9 की ग़ायब बिस्मिल्लाह से लेकर सूरा 27 की अतिरिक्त बिस्मिल्लाह तक ठीक <span class="ans">19 सूराएँ</span></li>
<li>इससे यह निकलता है कि 9 से 27 तक की सूरा संख्याओं का योग (9+10+11+12+…+26+27) 342 है, अर्थात् <span class="ans">19 x 18</span></li>
<li>यह योग (342) सूरा 27 की दोनों बिस्मिल्लाहों के बीच आने वाले शब्दों की संख्या के भी बराबर है, और 342 = <span class="ans">19 x 18</span></li>
<li>प्रसिद्ध पहले अवतरण (96:1-5) में हैं <span class="ans">19 शब्द</span></li>
<li>19 शब्दों वाले इस पहले अवतरण में 76 अक्षर हैं <span class="ans">19 x 4</span></li>
<li>सूरा 96, कालक्रम में पहली, में हैं <span class="ans">19 आयतें</span></li>
<li>कालक्रम की यह पहली सूरा अंतिम <span class="ans">19 सूराओं के ऊपर रखी गई है</span></li>
<li>सूरा 96 में 304 अरबी अक्षर हैं, और 304 बराबर है <span class="ans">19 x 16</span></li>
<li>अंतिम अवतरण (सूरा 110) में हैं <span class="ans">19 शब्द</span></li>
<li>अंतिम अवतरण की पहली आयत (110:1) में हैं <span class="ans">19 अक्षर</span></li>
<li>14 अलग-अलग अरबी अक्षर, “क़ुरआनी आरंभिक अक्षरों” के 14 अलग-अलग समूह बनाते हैं (जैसे 2:1 का A.L.M.), और 29 सूराओं के आरंभ में आते हैं। ये संख्याएँ जुड़कर 14+14+29 = 57 = <span class="ans">19 x 3</span></li>
<li>जिन 29 सूराओं में क़ुरआनी आरंभिक अक्षर आते हैं उनकी संख्याओं का योग 2+3+7+…+50+68 = 822 है, और 822+14 (आरंभिक अक्षरों के 14 समूह) बराबर है 836, अर्थात् <span class="ans">19 x 44</span></li>
<li>पहली आरंभिक-अक्षर वाली सूरा (सूरा 2) और अंतिम आरंभिक-अक्षर वाली सूरा (सूरा 68) के बीच 38 बिना आरंभिक अक्षर वाली सूराएँ हैं <span class="ans">19 x 2</span></li>
<li>पहली और अंतिम आरंभिक-अक्षर वाली सूरा के बीच हैं <span class="ans">19 समूह</span> — बारी-बारी से आने वाली “आरंभिक अक्षरों वाली” और “बिना आरंभिक अक्षरों वाली” सूराओं के।</li>
<li>क़ुरआन में 30 अलग-अलग संख्याओं का उल्लेख है: 1, 2, 3, 4, 5, 6, 7, 8, 9, 10, 11, 12, 19, 20, 30, 40, 50, 60, 70, 80, 99, 100, 200, 300, 1000, 2000, 3000, 5000, 50,000, &amp; 100,000। इन संख्याओं का योग 162146 है, जो बराबर है <span class="ans">19x8534</span></li>
</ol>
<p>यह सीधे-सादे तथ्यों का संक्षिप्त सार है।</p>
<div class="mm-callout"><span class="lbl">क़ुरआन इंस्पेक्टर / Mod19</span><p>एक कंप्यूटर प्रोग्राम जो बहुत लंबी संख्याओं को भाग देने और क़ुरआनी आरंभिक अक्षर गिनने में मदद करता है।</p></div>
</div>

<div class="mm-section" id="literary-composition">
<h2>साहित्यिक गणितीय संरचना</h2>

<div class="mm-tcap">तालिका 1: क़ुरआनी आरंभिक अक्षरों और उनकी सूराओं की सूची</div>
<div class="mm-table-wrap"><table class="mm-table">
<thead><tr><th>क्र.</th><th>सूरा सं.</th><th>सूरा का नाम</th><th>क़ुरआनी आरंभिक अक्षर</th></tr></thead>
<tbody>
<tr><td>1</td><td>2</td><td>गाय</td><td>A.L.M</td></tr>
<tr><td>2</td><td>3</td><td>इमरान की संतान</td><td>A.L.M</td></tr>
<tr><td>3</td><td>7</td><td>आराफ़</td><td>A.L.M.S.</td></tr>
<tr><td>4</td><td>10</td><td>यूनुस</td><td>A.L.R.</td></tr>
<tr><td>5</td><td>11</td><td>हूद</td><td>A.L.R.</td></tr>
<tr><td>6</td><td>12</td><td>यूसुफ़</td><td>A.L.R.</td></tr>
<tr><td>7</td><td>13</td><td>गरज</td><td>A.L.M.R.</td></tr>
<tr><td>8</td><td>14</td><td>इबराहीम</td><td>A.L.R.</td></tr>
<tr><td>9</td><td>15</td><td>अल-हिज्र घाटी</td><td>A.L.R.</td></tr>
<tr><td>10</td><td>19</td><td>मरयम</td><td>K.H.Y.`A.S.</td></tr>
<tr><td>11</td><td>20</td><td>T.H.</td><td>T.H.</td></tr>
<tr><td>12</td><td>26</td><td>कवि</td><td>T.S.M.</td></tr>
<tr><td>13</td><td>27</td><td>चींटी</td><td>T.S.</td></tr>
<tr><td>14</td><td>28</td><td>इतिहास</td><td>T.S.M.</td></tr>
<tr><td>15</td><td>29</td><td>मकड़ी</td><td>A.L.M</td></tr>
<tr><td>16</td><td>30</td><td>रोमी</td><td>A.L.M</td></tr>
<tr><td>17</td><td>31</td><td>लुक़मान</td><td>A.L.M</td></tr>
<tr><td>18</td><td>32</td><td>सजदा</td><td>A.L.M</td></tr>
<tr><td>19</td><td>36</td><td>Y.S.</td><td>Y.S.</td></tr>
<tr><td>20</td><td>38</td><td>S.</td><td>S.</td></tr>
<tr><td>21</td><td>40</td><td>क्षमा करने वाला</td><td>H.M.</td></tr>
<tr><td>22</td><td>41</td><td>स्पष्ट किया गया</td><td>H.M.</td></tr>
<tr><td>23</td><td>42</td><td>परामर्श</td><td>H.M.`A.S.Q.</td></tr>
<tr><td>24</td><td>43</td><td>आभूषण</td><td>H.M.</td></tr>
<tr><td>25</td><td>44</td><td>धुआँ</td><td>H.M.</td></tr>
<tr><td>26</td><td>45</td><td>घुटने टेकना</td><td>H.M.</td></tr>
<tr><td>27</td><td>46</td><td>रेत के टीले</td><td>H.M.</td></tr>
<tr><td>28</td><td>50</td><td>Q.</td><td>Q.</td></tr>
<tr><td>29</td><td>68</td><td>क़लम</td><td>NuN</td></tr>
</tbody></table></div>

<p>क़ुरआन एक ऐसी अनोखी विशेषता रखता है जो किसी और किताब में नहीं मिलती; 29 सूराओं के आरंभ में “क़ुरआनी आरंभिक अक्षरों” के 14 अलग-अलग समूह आते हैं, जिनमें हर समूह में एक से पाँच अक्षर होते हैं। चौदह अक्षर, यानी अरबी वर्णमाला का आधा हिस्सा, इन आरंभिक अक्षरों में शामिल हैं। क़ुरआनी आरंभिक अक्षरों का महत्व 14 सदियों तक ख़ुदा की ओर से सुरक्षित रखा गया एक भेद रहा। क़ुरआन 10:20 और 25:4-6 में कहता है कि उसका चमत्कार, यानी ख़ुदाई रचना का प्रमाण, एक निश्चित पूर्वनिर्धारित अवधि तक भेद ही रहना तय था:</p>

<div class="mm-quote">वह लोग कहते हैंः उसके पास उसके रब की तरफ से कोई मोजिज़ा(चमत्कार)* क्यों नहीं नाज़िल हुआ? उनसे कह दो गैब का तअल्लुक अल्लाह से है इस लिए इन्तिज़ार करो और मैं भी तुम्हारे साथ इन्तिज़ार कर रहा हूँ।<cite>क़ुरआन 10:20</cite></div>

<div class="mm-quote">“This is a fabrication that he produced, with the help of some other people.” … “Tales from the past that he wrote down; they were dictated to him day and night.” Say, “This was revealed by the One who knows the Secret in the heavens and the earth. He is Forgiving, Most Merciful.” — इन आयतों का हिन्दी अनुवाद जल्द उपलब्ध होगा, इन्शा अल्लाह।<cite>क़ुरआन 25:4-6</cite></div>

<p>क़ुरआनी आरंभिक अक्षर क़ुरआन के 19 पर आधारित गणितीय चमत्कार का एक बड़ा हिस्सा हैं।</p>

<h3>ऐतिहासिक पृष्ठभूमि</h3>
<p>1968 में मुझे यह एहसास हुआ कि क़ुरआन के मौजूदा अंग्रेज़ी अनुवाद ख़ुदा की आख़िरी वसीयत का सच्चा संदेश पेश नहीं करते। मिसाल के तौर पर, दो सबसे मशहूर अनुवादक, यूसुफ़ अली और मार्माड्यूक पिकथॉल, 39:45 में दी गई क़ुरआन की महान कसौटी के मामले में अपनी बिगड़ी हुई धार्मिक परंपराओं से ऊपर नहीं उठ सके।</p>

<div class="mm-quote">“When God ALONE is mentioned, the hearts of those who do not believe in the Hereafter shrink with aversion. But when others are mentioned beside Him, they rejoice.” — इस आयत का हिन्दी अनुवाद जल्द उपलब्ध होगा, इन्शा अल्लाह।<cite>क़ुरआन 39:45</cite></div>

<p>यूसुफ़ अली ने अपने अनुवाद से निर्णायक शब्द “ALONE” (केवल/अकेले) को हटा दिया, और बाक़ी आयत में “(gods)” शब्द जोड़कर उसे बदल दिया। इस तरह उन्होंने क़ुरआन की इस सबसे महत्वपूर्ण कसौटी को पूरी तरह नष्ट कर दिया। उन्होंने 39:45 का अनुवाद इस प्रकार किया:</p>

<div class="mm-callout"><p>“When God, the One and Only, is mentioned, the hearts of those who believe not in the Hereafter are filled with disgust and horror; but when (gods) other than He are mentioned, behold, they are filled with joy.” [39:45] (ए. यूसुफ़ अली के अनुसार)</p></div>

<p>“When God, the One and Only, is mentioned,” यह कहना वैसा नहीं है जैसा “When God alone is mentioned” कहना। कोई “ख़ुदा, जो एक और अकेला है” का ज़िक्र कर सकता है और साथ ही मुहम्मद या ईसा का भी ज़िक्र कर सकता है, और किसी को बुरा नहीं लगेगा। लेकिन अगर “केवल ख़ुदा का ज़िक्र” हो, तो आप किसी और का नाम नहीं ले सकते, और बहुत-से लोग — वे जो मुहम्मद या ईसा को पूज्य बना लेते हैं — नाराज़ हो जाएँगे। इस तरह, यूसुफ़ अली अपने आपको क़ुरआन का सच पेश करने पर राज़ी न कर सके, क्योंकि वह उनकी बिगड़ी हुई आस्था को उजागर करता था।</p>

<p>मार्माड्यूक पिकथॉल ने “ALONE” का अनुवाद सही किया, पर कोष्ठक में अपनी निजी आस्था जोड़कर इस कसौटी को नष्ट कर दिया; उन्होंने 39:45 का अनुवाद इस प्रकार किया:</p>

<div class="mm-callout"><p>“And when Allah alone is mentioned, the hearts of those who believe not in the Hereafter are repelled, and when those (whom they worship) beside Him are mentioned, behold! they are glad.” [39:45] (मार्माड्यूक पिकथॉल के अनुसार)</p></div>

<p>जब मैंने ख़ुदा के कलाम के सच को इस तरह बिगड़ा हुआ देखा, तो मैंने तय किया कि मैं क़ुरआन का अनुवाद करूँगा, कम से कम अपने बच्चों के फ़ायदे के लिए। पेशे से मैं रसायनशास्त्री था, और अपनी गहरी धार्मिक पृष्ठभूमि के बावजूद — मेरे पिता मिस्र के एक प्रसिद्ध सूफ़ी पेशवा थे — मैंने ख़ुदा से वादा किया कि जब तक किसी आयत को पूरी तरह समझ न लूँ, अगली आयत पर नहीं बढ़ूँगा।</p>

<p>मैंने क़ुरआन के अनुवाद और व्याख्या (तफ़सीर) की जितनी किताबें मिल सकीं, सब ख़रीदीं, उन्हें एक बड़ी मेज़ पर रखा, और अपना अनुवाद शुरू किया। पहली सूरा, “कुंजी”, कुछ ही दिनों में पूरी हो गई। सूरा 2 की पहली आयत “A.L.M.” है। इस एक आयत के अनुवाद में चार साल लगे, और वही समय था जब ख़ुदा ने “वह भेद”, यानी क़ुरआन का महान गणितीय चमत्कार, खोला।</p>

<p>क़ुरआन की व्याख्या की किताबें एकमत थीं कि “क़ुरआनी आरंभिक अक्षरों A.L.M. या किसी भी अन्य आरंभिक अक्षर का अर्थ या महत्व कोई नहीं जानता।” मैंने तय किया कि मैं क़ुरआन को कंप्यूटर में दर्ज करूँ, पूरे पाठ का विश्लेषण करूँ, और देखूँ कि इन क़ुरआनी आरंभिक अक्षरों के बीच कोई गणितीय संबंध है या नहीं।</p>

<p>मैंने एक टाइम-शेयर टर्मिनल इस्तेमाल किया, जो टेलीफ़ोन के ज़रिए एक विशाल कंप्यूटर से जुड़ा था। अपनी परिकल्पना की जाँच के लिए मैंने एक-अक्षर वाले क़ुरआनी आरंभिक अक्षरों को देखने का फ़ैसला किया — सूरा 42 और 50 का “Q” (क़ाफ़), सूरा 7, 19 और 38 का “S” (साद), और सूरा 68 का “N” (नून)। जैसा कि मेरी पहली किताब MIRACLE OF THE QURAN: SIGNIFICANCE OF THE MYSTERIOUS ALPHABETS (इस्लामिक प्रोडक्शंस, 1973) में विस्तार से बताया गया है, इस भेद को खोलने की पहले की कई कोशिशें नाकाम रही थीं।</p>

<h3>क़ुरआनी आरंभिक अक्षर “Q” (क़ाफ़)</h3>
<p>कंप्यूटर के आँकड़ों ने दिखाया कि केवल Q से आरंभ होने वाली सूराओं, 42 और 50, के पाठ में Q की संख्या बराबर थी, 57 और 57। यह पहला संकेत था कि क़ुरआन में कोई जान-बूझकर रखी गई गणितीय प्रणाली हो सकती है।</p>
<p>सूरा 50 का नाम “Q” है, उसके आरंभ में “Q” है, और उसकी पहली आयत है, “Q, and the glorious Quran.” इससे संकेत मिला कि “Q” का अर्थ “Quran” (क़ुरआन) है, और दोनों Q-आरंभिक सूराओं में Q की कुल संख्या क़ुरआन की 114 सूराओं को दर्शाती है (57+57 = 114 = 19x6)। इस विचार को इस तथ्य से बल मिला कि “the Quran” शब्द क़ुरआन में 57 बार आता है।</p>
<p>सूरा “Q” में क़ुरआन को “मजीद” (गौरवशाली) कहा गया है, और अरबी शब्द “मजीद” का जुम्मल मूल्य 57 है: M (40) + J (3) + I (10) + D (4) = 57।</p>
<p>सूरा 42 में 53 आयतें हैं, और 42 + 53 = 95 = 19x5।</p>
<p>सूरा 50 में 45 आयतें हैं, और 50 + 45 = 95, सूरा 42 जितना ही योग।</p>
<p>पूरे क़ुरआन की हर “आयत 19” में अक्षर “Q” गिनने पर कुल संख्या 76 आती है, 19x4। Q से जुड़े आँकड़ों का सारांश यह है:</p>
<ol class="mm-facts">
<li>सूरा “Q” (सं. 50) में “Q” के आने की संख्या 57 है, <span class="ans">19x3</span></li>
<li>दूसरी Q-आरंभिक सूरा (सं. 42) में भी अक्षर “Q” ठीक उतनी ही बार आता है, <span class="ans">57</span></li>
<li>दोनों Q-आरंभिक सूराओं में अक्षर “Q” की कुल संख्या 114 है, जो क़ुरआन में <span class="ans">सूराओं की संख्या</span> के बराबर है।</li>
<li>“क़ुरआन” शब्द का उल्लेख क़ुरआन में आता है <span class="ans">57 बार</span></li>
<li>क़ुरआन का “मजीद” (गौरवशाली) के रूप में वर्णन हर Q-आरंभिक सूरा में अक्षर “Q” के आने की संख्या से जुड़ा है। शब्द “मजीद” का जुम्मल मूल्य है <span class="ans">57</span></li>
<li>सूरा 42 में 53 आयतें हैं, और 42 + 53 है 95, अर्थात् <span class="ans">19x5</span></li>
<li>सूरा 50 में 45 आयतें हैं, और 50 + 45 भी 95 है, <span class="ans">19x5</span></li>
<li>पूरे क़ुरआन में “19” क्रमांक वाली सभी आयतों में Q की संख्या 76 है, <span class="ans">19x4</span></li>
</ol>
<p>क़ुरआन की गणितीय रचना की झलकियाँ सामने आने लगीं। उदाहरण के लिए, यह देखा गया कि लूत को झुठलाने वाले लोगों का ज़िक्र 50:13 में है और वे क़ुरआन में 13 बार आते हैं — 7:80; 11:70, 11:74, 11:89; 21:74; 22:43; 26:160; 27:54, 27:56; 29:28; 38:13; 50:13; और 54:33। हर जगह उन्हें “क़ौम” कहा गया है, सिवाय Q-आरंभिक सूरा 50 के, जहाँ उन्हें “इख़वान” कहा गया है। ज़ाहिर है, अगर वहाँ भी Q वाला सामान्य शब्द “क़ौम” इस्तेमाल होता, तो सूरा 50 में अक्षर “Q” की गिनती 58 हो जाती, और यह पूरी परिघटना मिट जाती। गणित की मानी हुई पूर्ण सटीकता के साथ, एक अक्षर का फेरबदल भी पूरी प्रणाली को नष्ट कर देता है।</p>
<p>एक और प्रासंगिक उदाहरण 3:96 में मक्का का ज़िक्र “बक्का” के रूप में है! इस प्रसिद्ध नगर की यह अजीब वर्तनी सदियों से इस्लामी विद्वानों को उलझाती रही है। यद्यपि 48:24 में मक्का का नाम सही वर्तनी के साथ आया है, 3:96 में अक्षर “M” की जगह “B” रखा गया है। बात यह निकली कि सूरा 3 एक M-आरंभिक सूरा है, और अगर 3:96 में “मक्का” सही वर्तनी से लिखा जाता तो अक्षर “M” की गिनती क़ुरआन के कोड से हट जाती।</p>

<h3>NuN (नून)</h3>
<p>यह आरंभिक अक्षर अनोखा है; यह केवल एक सूरा, 68, में आता है, और मूल पाठ में इस अक्षर का नाम तीन अक्षरों — नून वाव नून — से लिखा गया है, इसलिए इसे दो N गिना जाता है। N-आरंभिक सूरा में इस अक्षर की कुल गिनती 133 है, 19x7।</p>
<p>यह तथ्य कि “N” अंतिम क़ुरआनी आरंभिक अक्षर है (देखें तालिका 1) कई विशेष अवलोकनों को सामने लाता है। उदाहरण के लिए, पहले क़ुरआनी आरंभिक अक्षर (2:1 का A.L.M.) से अंतिम आरंभिक अक्षर (68:1 का N.) तक आयतों की संख्या 5263 है, अर्थात् 19x277।</p>
<p>पहले आरंभिक अक्षर और अंतिम आरंभिक अक्षर के बीच “ख़ुदा” (अल्लाह) शब्द 2641 (19x139) बार आता है। चूँकि “ख़ुदा” शब्द कुल 2698 बार आता है, इससे निकलता है कि एक ओर 2:1 के “A.L.M.” और दूसरी ओर 68:1 के “N” से बाहर उसका आना 57 बार है, 19x3। तालिका 9 से 20 सिद्ध करती हैं कि आरंभिक अक्षर “NuN” को दो N दिखाने के लिए पूरा लिखा जाना चाहिए।</p>

<h3>S (साद)</h3>
<div class="mm-tcap">तालिका 2: साद-आरंभिक सूराओं में अक्षर “S” के आने की संख्या</div>
<div class="mm-table-wrap"><table class="mm-table">
<thead><tr><th>सूरा</th><th>“S” की संख्या</th></tr></thead>
<tbody>
<tr><td>7</td><td>97</td></tr>
<tr><td>19</td><td>26</td></tr>
<tr><td>38</td><td>29</td></tr>
<tr class="mm-tot"><td>कुल</td><td>152 (19x8)</td></tr>
</tbody></table></div>
<p>यह आरंभिक अक्षर तीन सूराओं — 7, 19 और 38 — के आरंभ में आता है, और इन तीनों सूराओं में अक्षर “S” (साद) का कुल आना 152 है, 19x8 (तालिका 2)। ध्यान देने योग्य है कि 7:69 में शब्द “बस्ततन” कुछ मुद्रणों में “सीन” के बजाय “साद” से लिखा गया है। यह एक ग़लत विकृति है जो क़ुरआन के कोड का उल्लंघन करती है। क़ुरआन की सबसे पुरानी उपलब्ध प्रति, ताशकंद प्रति, को देखने पर पाया गया कि शब्द “बस्ततन” सही रूप में “सीन” से लिखा गया है।</p>

<div class="mm-callout"><span class="lbl">ऐतिहासिक टिप्पणी</span><p>यह महत्वपूर्ण खोज कि “19” क़ुरआन का साझा भाजक है, जनवरी 1974 में सामने आई, जो ज़ुल-हिज्जा 1393 हिजरी के साथ पड़ी। क़ुरआन 13 हिजरी-पूर्व में उतारा गया था। इससे क़ुरआन के अवतरण से उसके चमत्कार के प्रकट होने तक वर्षों की संख्या 1393 + 13 = 1406 = 19x74 बनती है। जैसा ऊपर बताया गया, चमत्कार का उद्घाटन जनवरी 1974 में हुआ। 19x74 चंद्र वर्षों और 1974 सौर वर्षों के बीच का यह मेल ध्यान से बच नहीं सकता। यह इसलिए भी विस्मयकारी है कि “19” का उल्लेख सूरा 74 में है।</p></div>

<h3>Y. S. (या सीन)</h3>
<p>ये दो अक्षर सूरा 36 के आरंभ में हैं। अक्षर “Y” इस सूरा में 237 बार आता है, जबकि अक्षर “S” (सीन) 48 बार आता है। दोनों अक्षरों का कुल 285 है, 19x15।</p>
<p>ध्यान देने योग्य है कि अक्षर “Y” क़ुरआन में दो रूपों में लिखा जाता है; एक स्पष्ट और दूसरा सूक्ष्म। अक्षर का सूक्ष्म रूप उन लोगों को भ्रमित कर सकता है जो अरबी भाषा से पूरी तरह परिचित नहीं हैं। इसका एक अच्छा उदाहरण शब्द “अराअनी” है, जो 12:36 में दो बार आया है। इस शब्द में अक्षर “Y” दो बार प्रयुक्त है, पहला “Y” सूक्ष्म है और दूसरा स्पष्ट। सूरा 36 में सूक्ष्म प्रकार का एक भी “Y” नहीं है। यह एक उल्लेखनीय परिघटना है, और ऐसी जो सूरा 36 जैसी लंबी सूरा में सामान्यतः नहीं होती। मेरी किताब QURAN: VISUAL PRESENTATION OF THE MIRACLE (इस्लामिक प्रोडक्शंस, 1982) में सूरा 36 के हर “Y” और “S” पर एक तारा लगाया गया है।</p>

<h3>H.M. (हा मीम)</h3>
<div class="mm-tcap">तालिका 3: सात H.M.-आरंभिक सूराओं में अक्षर “H” और “M” का आना</div>
<div class="mm-table-wrap"><table class="mm-table">
<thead><tr><th>सूरा सं.</th><th>“H”</th><th>“M”</th><th>“H+M”</th></tr></thead>
<tbody>
<tr><td>40</td><td>64</td><td>380</td><td>444</td></tr>
<tr><td>41</td><td>48</td><td>276</td><td>324</td></tr>
<tr><td>42</td><td>53</td><td>300</td><td>353</td></tr>
<tr><td>43</td><td>44</td><td>324</td><td>368</td></tr>
<tr><td>44</td><td>16</td><td>150</td><td>166</td></tr>
<tr><td>45</td><td>31</td><td>200</td><td>231</td></tr>
<tr><td>46</td><td>36</td><td>225</td><td>261</td></tr>
<tr class="mm-tot"><td>कुल</td><td>292</td><td>1855</td><td>2147 (19x113)</td></tr>
</tbody></table></div>
<p>सात सूराओं के आरंभ में अक्षर “H” और “M” हैं; सूरा 40 से 46 तक। इन सात H.M.-आरंभिक सूराओं में इन दोनों अक्षरों का कुल आना 2147 है, अर्थात् 19x113। विस्तृत आँकड़े तालिका 3 में दिए गए हैं। स्वाभाविक रूप से, इन सात H.M.-आरंभिक सूराओं में से किसी में भी एक “H” या “M” का फेरबदल इस जटिल परिघटना को नष्ट कर देता।</p>

<h3>`A.S.Q. (`ऐन सीन क़ाफ़)</h3>
<p>ये आरंभिक अक्षर सूरा 42 की आयत 2 हैं, और इस सूरा में इन अक्षरों का कुल आना 209 है, अर्थात् 19x11। अक्षर “`A” (`ऐन) 98 बार, अक्षर “S” (सीन) 54 बार, और अक्षर “Q” (क़ाफ़) 57 बार आता है।</p>

<div class="mm-callout"><span class="lbl">Submission.org टीम द्वारा परिशिष्ट 1 में संपादकीय वृद्धि</span><p>HM-आरंभिक सूराएँ, चमत्कार के भीतर एक महान चमत्कार।</p></div>

<div class="mm-tcap">HM-आरंभिक सूराएँ — “H” और “M” की संख्या, और अंकों के योग</div>
<div class="mm-table-wrap"><table class="mm-table">
<thead><tr><th>अध्याय</th><th>आरंभिक अक्षर</th><th>संख्या (H)</th><th>संख्या (M)</th><th>संख्याओं का योग</th><th>अंकों का योग</th></tr></thead>
<tbody>
<tr><td>40</td><td>H M</td><td>64</td><td>380</td><td>444</td><td>21</td></tr>
<tr><td>41</td><td>H M</td><td>48</td><td>276</td><td>324</td><td>27</td></tr>
<tr><td>42</td><td>H M `A S Q</td><td>53</td><td>300</td><td>353</td><td>11</td></tr>
<tr><td>43</td><td>H M</td><td>44</td><td>324</td><td>368</td><td>17</td></tr>
<tr><td>44</td><td>H M</td><td>16</td><td>150</td><td>166</td><td>13</td></tr>
<tr><td>45</td><td>H M</td><td>31</td><td>200</td><td>231</td><td>6</td></tr>
<tr><td>46</td><td>H M</td><td>36</td><td>225</td><td>261</td><td>18</td></tr>
</tbody></table></div>
<p>बैंगनी रंग की संख्याएँ जुड़कर 19 x 59 बनाती हैं और इन संख्याओं के अंकों का योग भी 59 है। हरी संख्याएँ जुड़कर 19 x 54 बनाती हैं और इन संख्याओं के अंकों का योग भी 54 है। नीली संख्याएँ जुड़कर 19 x 55 बनाती हैं और इन संख्याओं के अंकों का योग भी 55 है। धूसर संख्याएँ जुड़कर 19 x 58 बनाती हैं और इन संख्याओं के अंकों का योग भी 58 है।</p>

<div class="mm-table-wrap"><table class="mm-table">
<thead><tr><th>अध्याय</th><th>(हा)</th><th>(मीम)</th><th>गिनतियों के अंक जोड़ें</th><th>कुल</th></tr></thead>
<tbody>
<tr><td>40</td><td>64</td><td>380</td><td>3 + 8 + 0 + 6 + 4</td><td>21</td></tr>
<tr><td>41</td><td>48</td><td>276</td><td>2 + 7 + 6 + 4 + 8</td><td>27</td></tr>
<tr><td>42</td><td>53</td><td>300</td><td>3 + 0 + 0 + 5 + 3</td><td>11</td></tr>
<tr><td>43</td><td>44</td><td>324</td><td>3 + 2 + 4 + 4 + 4</td><td>17</td></tr>
<tr><td>44</td><td>16</td><td>150</td><td>1 + 5 + 0 + 1 + 6</td><td>13</td></tr>
<tr><td>45</td><td>31</td><td>200</td><td>2 + 0 + 0 + 3 + 1</td><td>6</td></tr>
<tr><td>46</td><td>36</td><td>225</td><td>2 + 2 + 5 + 3 + 6</td><td>18</td></tr>
<tr class="mm-tot"><td>कुल</td><td>292</td><td>2147 (19x113)</td><td>16 + 24 + 15 + 26 + 32</td><td>113</td></tr>
</tbody></table></div>

<div class="mm-table-wrap"><table class="mm-table">
<thead><tr><th>अध्याय</th><th>(हा)</th><th>(मीम)</th><th>गिनतियों के अंक जोड़ें</th><th>कुल</th></tr></thead>
<tbody>
<tr><td>40</td><td>64</td><td>380</td><td>3 + 8 + 0 + 6 + 4</td><td>21</td></tr>
<tr><td>41</td><td>48</td><td>276</td><td>2 + 7 + 6 + 4 + 8</td><td>27</td></tr>
<tr><td>42</td><td>53</td><td>300</td><td>3 + 0 + 0 + 5 + 3</td><td>11</td></tr>
<tr class="mm-tot"><td>कुल</td><td>1121</td><td>(19x59)</td><td>9 + 15 + 6 + 15 + 15</td><td>59</td></tr>
</tbody></table></div>

<div class="mm-table-wrap"><table class="mm-table">
<thead><tr><th>अध्याय</th><th>(हा)</th><th>(मीम)</th><th>गिनतियों के अंक जोड़ें</th><th>कुल</th></tr></thead>
<tbody>
<tr><td>43</td><td>44</td><td>324</td><td>3 + 2 + 4 + 4 + 4</td><td>17</td></tr>
<tr><td>44</td><td>16</td><td>150</td><td>1 + 5 + 0 + 1 + 6</td><td>13</td></tr>
<tr><td>45</td><td>31</td><td>200</td><td>2 + 0 + 0 + 3 + 1</td><td>6</td></tr>
<tr><td>46</td><td>36</td><td>225</td><td>2 + 2 + 5 + 3 + 6</td><td>18</td></tr>
<tr class="mm-tot"><td>कुल</td><td>1026</td><td>(19x54)</td><td>8 + 9 + 9 + 11 + 17</td><td>54</td></tr>
</tbody></table></div>

<div class="mm-table-wrap"><table class="mm-table">
<thead><tr><th>अध्याय</th><th>(हा)</th><th>(मीम)</th><th>गिनतियों के अंक जोड़ें</th><th>कुल</th></tr></thead>
<tbody>
<tr><td>41</td><td>48</td><td>276</td><td>2 + 7 + 6 + 4 + 8</td><td>27</td></tr>
<tr><td>42</td><td>53</td><td>300</td><td>3 + 0 + 0 + 5 + 3</td><td>11</td></tr>
<tr><td>43</td><td>44</td><td>324</td><td>3 + 2 + 4 + 4 + 4</td><td>17</td></tr>
<tr class="mm-tot"><td>कुल</td><td>1045</td><td>(19x55)</td><td>8 + 9 + 10 + 13 + 15</td><td>55</td></tr>
</tbody></table></div>

<div class="mm-table-wrap"><table class="mm-table">
<thead><tr><th>अध्याय</th><th>(हा)</th><th>(मीम)</th><th>गिनतियों के अंक जोड़ें</th><th>कुल</th></tr></thead>
<tbody>
<tr><td>40</td><td>64</td><td>380</td><td>3 + 8 + 0 + 6 + 4</td><td>21</td></tr>
<tr><td>44</td><td>16</td><td>150</td><td>1 + 5 + 0 + 1 + 6</td><td>13</td></tr>
<tr><td>45</td><td>31</td><td>200</td><td>2 + 0 + 0 + 3 + 1</td><td>6</td></tr>
<tr><td>46</td><td>36</td><td>225</td><td>2 + 2 + 5 + 3 + 6</td><td>18</td></tr>
<tr class="mm-tot"><td>कुल</td><td>1102</td><td>(19x58)</td><td>8 + 15 + 5 + 13 + 17</td><td>58</td></tr>
</tbody></table></div>

<div class="mm-callout"><span class="lbl">Submission.org संपादकीय टिप्पणी</span><p>2002 में Submission.org द्वारा हाथ से तथा दो अलग-अलग कंप्यूटर गिनती प्रोग्रामों से की गई क़ुरआनी आरंभिक अक्षरों की गहन पुनर्गणना ने डॉ. रशाद ख़लीफ़ा की सभी गिनतियों की पुष्टि की, सिवाय आरंभिक अक्षरों “A” (अलिफ़) और “L” (लाम) की कुछ गिनतियों के। फिर भी, आरंभिक अक्षरों की यह हालिया पुनर्गणना 19 से विभाज्य बनी हुई है और क़ुरआन के गणितीय चमत्कार का हिस्सा है। इस पुनर्गणना पर शोध की ताज़ा जानकारी यहाँ देखी जा सकती है: क़ुरआनी आरंभिक अक्षरों ALM और ALR की अद्यतन गिनती तथा क़ुरआनी आरंभिक अक्षरों ALMR और ALMS की अद्यतन गिनती। पुनर्गणना का नवीनतम विवरण Quran Inspector से देखा और जाँचा जा सकता है।</p>
<p>“A” (अलिफ़) और “L” (लाम) की गिनतियों पर शोध जारी है।</p></div>

<h3>A.L.M. (अलिफ़ लाम मीम)</h3>
<div class="mm-tcap">तालिका 4: A.L.M.-आरंभिक सूराओं में अक्षर “A,” “L,” और “M” का आना</div>
<div class="mm-table-wrap"><table class="mm-table">
<thead><tr><th>सूरा सं.</th><th>“A”</th><th>“L”</th><th>“M”</th><th>कुल</th></tr></thead>
<tbody>
<tr><td>2</td><td>4502</td><td>3202</td><td>2195</td><td>9899 (19x521)</td></tr>
<tr><td>3</td><td>2521</td><td>1892</td><td>1249</td><td>5662 (19x298)</td></tr>
<tr><td>29</td><td>774</td><td>554</td><td>344</td><td>1672 (19x88)</td></tr>
<tr><td>30</td><td>544</td><td>393</td><td>317</td><td>1254 (19x66)</td></tr>
<tr><td>31</td><td>347</td><td>297</td><td>173</td><td>817 (19x43)</td></tr>
<tr><td>32</td><td>257</td><td>155</td><td>158</td><td>570 (19x30)</td></tr>
<tr class="mm-tot"><td>कुल</td><td>8945</td><td>6493</td><td>4436</td><td>19874 (19x1046)</td></tr>
</tbody></table></div>
<p>अक्षर “A,” “L,” और “M” अरबी भाषा में सबसे अधिक प्रयुक्त अक्षर हैं, और उसी क्रम में जिसमें हम उन्हें क़ुरआनी आरंभिक अक्षरों में देखते हैं — पहले “A,” फिर “L,” फिर “M।” ये अक्षर छह सूराओं — 2, 3, 29, 30, 31 और 32 — के आरंभ में आते हैं, और इन छहों में से हर सूरा में इन तीनों अक्षरों का कुल आना 19 का गुणज है [क्रमशः 9899 (19x521), 5662 (19x298), 1672 (19x88), 1254 (19x66), 817 (19x43), और 570 (19x30)]। इस प्रकार, छह सूराओं में तीनों अक्षरों का कुल आना 19874 (19x1046) है, और इनमें से किसी एक अक्षर का फेरबदल इस परिघटना को नष्ट कर देता है।</p>

<h3>A.L.R. (अलिफ़ लाम रा)</h3>
<div class="mm-tcap">तालिका 5: A.L.R.-आरंभिक सूराओं में अक्षर “A,” “L,” और “R” का आना</div>
<div class="mm-table-wrap"><table class="mm-table">
<thead><tr><th>सूरा सं.</th><th>“A”</th><th>“L”</th><th>“R”</th><th>कुल</th></tr></thead>
<tbody>
<tr><td>10</td><td>1319</td><td>913</td><td>257</td><td>2489 (19x131)</td></tr>
<tr><td>11</td><td>1370</td><td>794</td><td>325</td><td>2489 (19x131)</td></tr>
<tr><td>12</td><td>1306</td><td>812</td><td>257</td><td>2375 (19x125)</td></tr>
<tr><td>14</td><td>585</td><td>452</td><td>160</td><td>1197 (19x63)</td></tr>
<tr><td>15</td><td>493</td><td>323</td><td>96</td><td>912 (19x48)</td></tr>
<tr class="mm-tot"><td>कुल</td><td>5073</td><td>3294</td><td>1095</td><td>9462 (19x498)</td></tr>
</tbody></table></div>
<p>ये आरंभिक अक्षर सूरा 10, 11, 12, 14 और 15 में मिलते हैं। इन सूराओं में इन अक्षरों का कुल आना क्रमशः 2489 (19x131), 2489 (19x131), 2375 (19x125), 1197 (19x63), और 912 (19x48) है (तालिका 5)।</p>

<h3>A.L.M.R. (अलिफ़ लाम मीम रा)</h3>
<p>ये आरंभिक अक्षर एक सूरा, सं. 13, के आरंभ में हैं, और इन चारों अक्षरों के आने की कुल संख्या 1482 है, अर्थात् 19x78। अक्षर “A” 605 बार, “L” 480 बार, “M” 260 बार, और “R” 137 बार आता है।</p>

<h3>A.L.M.S. (अलिफ़ लाम मीम साद)</h3>
<p>केवल एक सूरा इन आरंभिक अक्षरों से आरंभ होती है, सूरा 7, और इस सूरा में अक्षर “A” 2529 बार, “L” 1530 बार, “M” 1164 बार, और “S” (साद) 97 बार आता है। इस प्रकार, इस सूरा में चारों अक्षरों का कुल आना 2529+1530+1164+97 = 5320 = 19x280 है।</p>
<p>यहाँ एक महत्वपूर्ण अवलोकन अक्षर “S” (साद) से जुड़ा परस्पर-गुँथा संबंध है। यह आरंभिक अक्षर सूरा 19 और 38 में भी आता है। सूरा 7 में अपने सहोदर अक्षरों के साथ मिलकर 19 से विभाज्य कुल देने के साथ-साथ, इस अक्षर की संख्या सूरा 19 और 38 में भी अपने सहोदर अक्षरों के साथ मिलकर 19 का गुणज देती है। (ऊपर देखें)।</p>
<p>इसके अलावा, क़ुरआनी आरंभिक अक्षर “S” (साद) सूरा 19 में क़ुरआनी आरंभिक अक्षरों “K.H.Y.`A.” (काफ़ हा या `ऐन) के साथ मिलकर एक और कुल देता है जो भी 19 का गुणज है। (नीचे देखें)। यह परस्पर-गुँथा संबंध — जो केवल आरंभिक अक्षर “S” (साद) तक सीमित नहीं है — क़ुरआन के संख्यात्मक कोड की जटिलता को और बढ़ाता है।</p>

<h3>K.H.Y.`A.S. (काफ़ हा या `ऐन साद)</h3>
<p>यह आरंभिक अक्षरों का सबसे लंबा समूह है, जिसमें पाँच अक्षर हैं, और यह एक ही सूरा, सूरा 19, में आता है। सूरा 19 में अक्षर “K” 137 बार, “H” 175 बार, “Y” 343 बार, “`A” 117 बार, और “S” (साद) 26 बार आता है। इस प्रकार, पाँचों अक्षरों का कुल आना 137+175+343+117+26 = 798 = 19x42 है।</p>

<h3>H., T.H. (ता हा), T.S. (ता सीन) &amp; T.S.M. (ता सीन मीम)</h3>
<p>एक जटिल परस्पर-गुँथा संबंध इन अतिव्यापी क़ुरआनी आरंभिक अक्षरों को जोड़कर एक ऐसा कुल बनाता है जो भी 19 का गुणज है। आरंभिक अक्षर “H.” सूरा 19 और 20 में मिलता है। आरंभिक अक्षर “T.H.” सूरा 20 के आरंभ में हैं। आरंभिक अक्षर “T.S.” सूरा 27 में मिलते हैं, जबकि आरंभिक अक्षर “T.S.M.” उसके आस-पास की सूराओं 26 &amp; 28 के आरंभ में हैं।</p>

<div class="mm-tcap">तालिका 6: क़ुरआनी आरंभिक अक्षरों “H.”, “T.H.”, “T.S.” और “T.S.M.” का उनकी सूराओं में आना</div>
<div class="mm-table-wrap"><table class="mm-table">
<thead><tr><th>सूरा</th><th>“H”</th><th>“T”</th><th>“S”</th><th>“M”</th></tr></thead>
<tbody>
<tr><td>19</td><td>175</td><td>&nbsp;</td><td>&nbsp;</td><td>&nbsp;</td></tr>
<tr><td>20</td><td>251</td><td>28</td><td>&nbsp;</td><td>&nbsp;</td></tr>
<tr><td>26</td><td>&nbsp;</td><td>33</td><td>94</td><td>484</td></tr>
<tr><td>27</td><td>&nbsp;</td><td>27</td><td>94</td><td>&nbsp;</td></tr>
<tr><td>28</td><td>&nbsp;</td><td>19</td><td>102</td><td>460</td></tr>
<tr class="mm-tot"><td>कुल</td><td>426</td><td>107</td><td>290</td><td>944</td></tr>
</tbody></table></div>
<p>426+107+290+944 = 1767 = (19x93)</p>
<p>यहाँ यह ध्यान देने योग्य है कि लंबे, अधिक जटिल, परस्पर-गुँथे और अतिव्यापी आरंभिक अक्षर उन्हीं सूराओं में मिलते हैं जहाँ असाधारण रूप से शक्तिशाली चमत्कार बयान किए गए हैं। उदाहरण के लिए, ईसा का कुँवारी से जन्म सूरा 19 में दिया गया है, जिसके आरंभ में आरंभिक अक्षरों का सबसे लंबा समूह K.H.Y.`A.S. है। परस्पर-गुँथे आरंभिक अक्षर “H.,” “T.H.,” “T.S.,” और “T.S.M.” उन सूराओं के आरंभ में हैं जो मूसा और ईसा के चमत्कारों तथा सुलैमान और उनके जिन्नों से जुड़ी असाधारण घटनाओं का वर्णन करती हैं। इस प्रकार ख़ुदा अधिक शक्तिशाली चमत्कारों के समर्थन में अधिक मज़बूत प्रमाण देता है। इन आरंभिक अक्षरों के आने की संख्याएँ तालिका 6 में दी गई हैं।</p>
</div>

<div class="mm-section" id="gematrical-value">
<h2>“जुम्मल मूल्य” (Gematrical Value) क्या है?</h2>
<p>जब क़ुरआन 14 सदियों पहले उतारा गया, तब आज की ज्ञात संख्याएँ मौजूद नहीं थीं। एक सार्वभौमिक प्रणाली प्रचलित थी जिसमें अरबी, इब्रानी, अरामी और यूनानी वर्णमालाओं के अक्षरों को अंकों के रूप में इस्तेमाल किया जाता था। हर अक्षर को दिया गया अंक उसका “जुम्मल मूल्य” है। अरबी वर्णमाला के संख्यात्मक मान तालिका 7 में दिए गए हैं।</p>

<div class="mm-tcap">तालिका 7: अरबी वर्णमाला के जुम्मल (अबजद) मूल्य</div>
<div class="mm-table-wrap"><table class="mm-table">
<thead><tr><th>अक्षर</th><th>मूल्य</th><th>&nbsp;</th><th>अक्षर</th><th>मूल्य</th><th>&nbsp;</th><th>अक्षर</th><th>मूल्य</th></tr></thead>
<tbody>
<tr><td>अलिफ़ ا</td><td>1</td><td>&nbsp;</td><td>या ي</td><td>10</td><td>&nbsp;</td><td>क़ाफ़ ق</td><td>100</td></tr>
<tr><td>बा ب</td><td>2</td><td>&nbsp;</td><td>काफ़ ك</td><td>20</td><td>&nbsp;</td><td>रा ر</td><td>200</td></tr>
<tr><td>जीम ج</td><td>3</td><td>&nbsp;</td><td>लाम ل</td><td>30</td><td>&nbsp;</td><td>शीन ش</td><td>300</td></tr>
<tr><td>दाल د</td><td>4</td><td>&nbsp;</td><td>मीम م</td><td>40</td><td>&nbsp;</td><td>ता ت</td><td>400</td></tr>
<tr><td>हा ه</td><td>5</td><td>&nbsp;</td><td>नून ن</td><td>50</td><td>&nbsp;</td><td>सा ث</td><td>500</td></tr>
<tr><td>वाव و</td><td>6</td><td>&nbsp;</td><td>सीन س</td><td>60</td><td>&nbsp;</td><td>ख़ा خ</td><td>600</td></tr>
<tr><td>ज़ै ز</td><td>7</td><td>&nbsp;</td><td>ऐन ع</td><td>70</td><td>&nbsp;</td><td>ज़ाल ذ</td><td>700</td></tr>
<tr><td>ह़ा ح</td><td>8</td><td>&nbsp;</td><td>फ़ा ف</td><td>80</td><td>&nbsp;</td><td>ज़ाद ض</td><td>800</td></tr>
<tr><td>तॉ ط</td><td>9</td><td>&nbsp;</td><td>साद ص</td><td>90</td><td>&nbsp;</td><td>ज़ॉ ظ</td><td>900</td></tr>
<tr><td>&nbsp;</td><td>&nbsp;</td><td>&nbsp;</td><td>&nbsp;</td><td>&nbsp;</td><td>&nbsp;</td><td>ग़ैन غ</td><td>1000</td></tr>
</tbody></table></div>
</div>

<div class="mm-section" id="other-properties">
<h2>आरंभिक अक्षरों वाली सूराओं के अन्य गणितीय गुण</h2>
<div class="mm-tcap">तालिका 8: क़ुरआनी आरंभिक अक्षर बनाने में प्रयुक्त 14 अक्षर</div>
<div class="mm-table-wrap"><table class="mm-table">
<thead><tr><th>अक्षर</th><th>मूल्य</th><th>पहली सूरा</th></tr></thead>
<tbody>
<tr><td>A (अलिफ़)</td><td>1</td><td>2</td></tr>
<tr><td>L (लाम)</td><td>30</td><td>2</td></tr>
<tr><td>M (मीम)</td><td>40</td><td>2</td></tr>
<tr><td>S (साद)</td><td>90</td><td>7</td></tr>
<tr><td>R (रा)</td><td>200</td><td>10</td></tr>
<tr><td>K (काफ़)</td><td>20</td><td>19</td></tr>
<tr><td>H (हा)</td><td>5</td><td>19</td></tr>
<tr><td>Y (या)</td><td>10</td><td>19</td></tr>
<tr><td>`A (`ऐन)</td><td>70</td><td>19</td></tr>
<tr><td>T (ता)</td><td>9</td><td>20</td></tr>
<tr><td>S (सीन)</td><td>60</td><td>26</td></tr>
<tr><td>H (हा)</td><td>8</td><td>40</td></tr>
<tr><td>Q (क़ाफ़)</td><td>100</td><td>42</td></tr>
<tr><td>N (नून)</td><td>50</td><td>68</td></tr>
<tr class="mm-tot"><td>कुल</td><td>693</td><td>295</td></tr>
</tbody></table></div>
<p>693 + 295 = 988 = 19x52। साथ ही 693 + 29 (सूराएँ) = 722 = 19x19x2।</p>
<p>चौदह अरबी अक्षर, यानी अरबी वर्णमाला का आधा हिस्सा, क़ुरआनी आरंभिक अक्षरों के 14 अलग-अलग समूह बनाने में शामिल हैं। इनमें से हर अक्षर का जुम्मल मूल्य जोड़ने पर, और उसमें उन सूराओं की संख्या (29) जोड़ने पर जिनके आरंभ में क़ुरआनी आरंभिक अक्षर हैं, हमें कुल 722 मिलता है, अर्थात् 19x19x2। इसके अलावा, अगर हम सभी 14 आरंभिक अक्षरों का कुल जुम्मल मूल्य जोड़ें, और उसमें उस पहली सूरा की संख्या जोड़ें जहाँ वह आरंभिक अक्षर आता है, तो महायोग 988 मिलता है, 19x52। तालिका 8 ये आँकड़े प्रस्तुत करती है। अगर हम तालिका 8 में दिए 14 अक्षरों में से हर एक के आरंभिक अक्षर के रूप में आने की संख्या जोड़ें, और उसमें उन सूराओं की संख्याएँ जोड़ें जहाँ वह आरंभिक अक्षर के रूप में आता है, तो महायोग 2033 आता है, 19x107। देखें तालिका 9।</p>

<div class="mm-tcap">तालिका 9: क़ुरआनी आरंभिक अक्षरों का गणितीय रूप से संरचित वितरण</div>
<div class="mm-table-wrap"><table class="mm-table">
<thead><tr><th>आरंभिक अक्षर</th><th>आने की संख्या</th><th class="mm-wrap-cell">सूराएँ जहाँ वह आता है</th><th>कुल</th></tr></thead>
<tbody>
<tr><td>A (अलिफ़)</td><td>13</td><td class="mm-wrap-cell">+2+3+7+10+11+12+13+14+15+29+30+31+32</td><td>222</td></tr>
<tr><td>L (लाम)</td><td>13</td><td class="mm-wrap-cell">+2+3+7+10+11+12+13+14+15+29+30+31+32</td><td>222</td></tr>
<tr><td>M (मीम)</td><td>17</td><td class="mm-wrap-cell">+2+3+7+13+26+28+29+30+31+32+40+41+42+43+44+45+46</td><td>519</td></tr>
<tr><td>S (साद)</td><td>3</td><td class="mm-wrap-cell">+7+19+38</td><td>67</td></tr>
<tr><td>R (रा)</td><td>6</td><td class="mm-wrap-cell">+10+11+12+13+14+15</td><td>81</td></tr>
<tr><td>K (काफ़)</td><td>1</td><td class="mm-wrap-cell">+19</td><td>20</td></tr>
<tr><td>H (हा)</td><td>2</td><td class="mm-wrap-cell">+19+20</td><td>41</td></tr>
<tr><td>Y (या)</td><td>2</td><td class="mm-wrap-cell">+19+36</td><td>57</td></tr>
<tr><td>`A (`ऐन)</td><td>2</td><td class="mm-wrap-cell">+19+42</td><td>63</td></tr>
<tr><td>T (ता)</td><td>4</td><td class="mm-wrap-cell">+20+26+27+28</td><td>105</td></tr>
<tr><td>S (सीन)</td><td>5</td><td class="mm-wrap-cell">+26+27+28+36+42</td><td>164</td></tr>
<tr><td>H (ह़ा)</td><td>7</td><td class="mm-wrap-cell">+40+41+42+43+44+45+46</td><td>308</td></tr>
<tr><td>Q (क़ाफ़)</td><td>2</td><td class="mm-wrap-cell">+42+50</td><td>94</td></tr>
<tr><td>N (नून)</td><td>2</td><td class="mm-wrap-cell">+68</td><td>70</td></tr>
<tr class="mm-tot"><td>कुल</td><td>79</td><td>1954</td><td>2033 (19x107)</td></tr>
</tbody></table></div>

<div class="mm-tcap">तालिका 10: सभी क़ुरआनी आरंभिक अक्षरों के उनकी सूराओं में कुल जुम्मल मूल्य</div>
<div class="mm-table-wrap"><table class="mm-table">
<thead><tr><th>सूरा</th><th>आरंभिक अक्षर</th><th>आरंभिक अक्षरों की संख्या</th><th>सूरा में कुल जु. मूल्य</th></tr></thead>
<tbody>
<tr><td>2</td><td>A.L.M.</td><td>9899</td><td>188362</td></tr>
<tr><td>3</td><td>A.L.M.</td><td>5662</td><td>109241</td></tr>
<tr><td>7</td><td>A.L.M.S.</td><td>5320</td><td>103719</td></tr>
<tr><td>10</td><td>A.L.R.</td><td>2489</td><td>80109</td></tr>
<tr><td>11</td><td>A.L.R.</td><td>2489</td><td>90190</td></tr>
<tr><td>12</td><td>A.L.R.</td><td>2375</td><td>77066</td></tr>
<tr><td>13</td><td>A.L.M.R.</td><td>1482</td><td>52805</td></tr>
<tr><td>14</td><td>A.L.R.</td><td>1197</td><td>46145</td></tr>
<tr><td>15</td><td>A.L.R.</td><td>912</td><td>29383</td></tr>
<tr><td>19</td><td>K.H.Y.`A.S.</td><td>798</td><td>17575</td></tr>
<tr><td>20</td><td>T.H.</td><td>279</td><td>1507</td></tr>
<tr><td>26</td><td>T.S.M.</td><td>611</td><td>25297</td></tr>
<tr><td>27</td><td>T.S.</td><td>121</td><td>5883</td></tr>
<tr><td>28</td><td>T.S.M.</td><td>581</td><td>24691</td></tr>
<tr><td>29</td><td>A.L.M.</td><td>1672</td><td>31154</td></tr>
<tr><td>30</td><td>A.L.M.</td><td>1254</td><td>25014</td></tr>
<tr><td>31</td><td>A.L.M.</td><td>817</td><td>16177</td></tr>
<tr><td>32</td><td>A.L.M.</td><td>570</td><td>11227</td></tr>
<tr><td>36</td><td>Y.S.</td><td>285</td><td>5250</td></tr>
<tr><td>38</td><td>S.</td><td>29</td><td>2610</td></tr>
<tr><td>40</td><td>H.M.</td><td>444</td><td>15712</td></tr>
<tr><td>41</td><td>H.M.</td><td>324</td><td>11424</td></tr>
<tr><td>42</td><td>H.M.-`A.S.Q.</td><td>562</td><td>28224</td></tr>
<tr><td>43</td><td>H.M.</td><td>368</td><td>13312</td></tr>
<tr><td>44</td><td>H.M.</td><td>166</td><td>6128</td></tr>
<tr><td>45</td><td>H.M.</td><td>231</td><td>8248</td></tr>
<tr><td>46</td><td>H.M.</td><td>261</td><td>9288</td></tr>
<tr><td>50</td><td>Q</td><td>57</td><td>5700</td></tr>
<tr><td>68</td><td>N,N</td><td>133</td><td>6650</td></tr>
<tr class="mm-tot"><td>कुल</td><td>&nbsp;</td><td>41388</td><td>1048091</td></tr>
</tbody></table></div>
<p>41388 + 1048091 = 1089479 (19 x 57341)</p>
<p>तालिका 10 क़ुरआनी आरंभिक अक्षरों के आने की कुल संख्या, तथा पूरी सूरा में इन अक्षरों का कुल जुम्मल मूल्य प्रस्तुत करती है। सभी आरंभिक अक्षरों वाली सूराओं का महायोग 1089479 है। दस लाख से अधिक की यह संख्या 19 का गुणज है (1089479 = 19 x 57341)। तनिक-सा भी फेरबदल या विकृति इस प्रणाली को नष्ट कर देती है। टिप्पणी: किसी सूरा में क़ुरआनी आरंभिक अक्षरों का कुल जुम्मल मूल्य हर आरंभिक अक्षर के जुम्मल मूल्य को उस सूरा में उसके आने की संख्या से गुणा करके निकाला जाता है।</p>
</div>

<div class="mm-section" id="major-parameters">
<h2>क़ुरआनी आरंभिक अक्षरों के प्रमुख मापदंड</h2>
<p>(सूराएँ, आयतें, संख्या, पहली सूरा, &amp; अंतिम सूरा)</p>
<p>तालिका 11 दिखाती है कि जिन सूराओं और आयतों में क़ुरआनी आरंभिक अक्षर मिलते हैं उनकी संख्याओं का योग, उसमें उस सूरा में उस आरंभिक अक्षर के आने की संख्या, उसमें उस पहली सूरा की संख्या जहाँ वे आरंभिक अक्षर आते हैं, और उसमें उस अंतिम सूरा की संख्या जहाँ वे आते हैं — ये सब मिलकर 44232 के बराबर कुल बनाते हैं, अर्थात् 19x2348। इस प्रकार, आरंभिक अक्षरों वाली सूराओं में क़ुरआनी आरंभिक अक्षरों का वितरण इतना जटिल है कि उनकी गिनतियाँ और सूराओं के भीतर उनका स्थान आपस में इस तरह गुँथे हैं कि महायोग 19 का गुणज बनता है।</p>
<p>ध्यान देने योग्य है कि आरंभिक अक्षर “N” को दो N गिना जाना चाहिए। यह इस तथ्य को दर्शाता है कि मूल क़ुरआनी पाठ में यह आरंभिक अक्षर 2 N के साथ पूरा लिखा गया है।</p>

<div class="mm-tcap">तालिका 11: 14 अलग-अलग क़ुरआनी आरंभिक अक्षरों के मापदंड</div>
<div class="mm-table-wrap"><table class="mm-table">
<thead><tr><th>आरंभिक अक्षर</th><th class="mm-wrap-cell">हर सूरा में सूरा, आयत, &amp; आरंभिक अक्षर की (संख्या)</th><th>पहली सूरा</th><th>अंतिम सूरा</th></tr></thead>
<tbody>
<tr><td>A (अलिफ़)</td><td class="mm-wrap-cell">2:1 (4502), 3:1 (2521), 7:1 (2529), 10:1 (1319), 11:1 (1370), 12:1 (1306), 13:1 (605), 14:1 (585), 15:1 (493), 29:1 (774), 30:1 (544), 31:1 (347), 32:1 (257)</td><td>2</td><td>32</td></tr>
<tr><td>L (लाम)</td><td class="mm-wrap-cell">2:1 (3202), 3:1 (1892), 7:1 (1530), 10:1 (913), 11:1 (794), 12:1 (812), 13:1 (480), 14:1 (452), 15:1 (323), 29:1 (554), 30:1 (393), 31:1 (297), 32:1 (155)</td><td>2</td><td>32</td></tr>
<tr><td>M (मीम)</td><td class="mm-wrap-cell">2:1 (2195), 3:1 (1249), 7:1 (1164), 13:1 (260), 26:1 (484), 28:1 (460), 29:1 (344), 30:1 (317), 31:1 (173), 32:1 (158), 40:1 (380), 41:1 (276), 42:1 (300), 43:1 (324), 44:1 (150), 45:1 (200), 46:1 (225)</td><td>2</td><td>46</td></tr>
<tr><td>S (साद)</td><td class="mm-wrap-cell">7:1 (97), 19:1 (26), 38:1 (29)</td><td>7</td><td>38</td></tr>
<tr><td>R (रा)</td><td class="mm-wrap-cell">10:1 (257), 11:1 (325), 12:1 (257), 13:1 (137), 14:1 (160), 15:1 (96)</td><td>10</td><td>15</td></tr>
<tr><td>K (काफ़)</td><td class="mm-wrap-cell">19:1 (137)</td><td>19</td><td>19</td></tr>
<tr><td>H (हा)</td><td class="mm-wrap-cell">19:1 (175), 20:1 (251)</td><td>19</td><td>20</td></tr>
<tr><td>Y (या)</td><td class="mm-wrap-cell">19:1 (343), 36:1 (237)</td><td>19</td><td>36</td></tr>
<tr><td>`A (`ऐन)</td><td class="mm-wrap-cell">19:1 (117), 42:2 (98)</td><td>19</td><td>42</td></tr>
<tr><td>T (ता)</td><td class="mm-wrap-cell">20:1 (28), 26:1 (33), 27:1 (27), 28:1 (19)</td><td>20</td><td>28</td></tr>
<tr><td>S (सीन)</td><td class="mm-wrap-cell">26:1 (94), 27:1 (94), 28:1 (102), 36:1 (48), 42:2 (54)</td><td>26</td><td>42</td></tr>
<tr><td>H (ह़ा)</td><td class="mm-wrap-cell">40:1 (64), 41:1 (48), 42:1 (53), 43:1 (44), 44:1 (16), 45:1 (31), 46:1 (36)</td><td>40</td><td>46</td></tr>
<tr><td>Q (क़ाफ़)</td><td class="mm-wrap-cell">42:2 (57), 50:1 (57)</td><td>42</td><td>50</td></tr>
<tr><td>N (NuN)</td><td class="mm-wrap-cell">68:1 (133)</td><td>68</td><td>68</td></tr>
<tr class="mm-tot"><td>कुल</td><td>43423</td><td>295</td><td>514</td></tr>
</tbody></table></div>
<p>महायोग = 43423+295+514 = 44232 = 19x2328</p>
<p>एक विशेष गणितीय कोडिंग उन आयतों की संख्या को प्रमाणित करती है जिनमें स्वयं क़ुरआनी आरंभिक अक्षर मिलते हैं। जैसा तालिका 11 में विस्तार से है, सभी क़ुरआनी आरंभिक अक्षर आयत 1 में आते हैं, सिवाय सूरा 42 के (आरंभिक अक्षर आयत 1 और 2 में)। इस तथ्य को तालिका 12 में दी गई उल्लेखनीय गणितीय परिघटना से बल मिलता है। अगर हम तालिका 12 के पहले दो स्तंभों को जोड़ने के बजाय गुणा करें, तब भी हमें ऐसा कुल मिलता है जो 19 से विभाज्य है (देखें तालिका 13)।</p>

<div class="mm-tcap">तालिका 12: आरंभिक अक्षरों वाली आयतों की संख्या की गणितीय कोडिंग</div>
<div class="mm-table-wrap"><table class="mm-table">
<thead><tr><th>सूरा सं.</th><th>आरंभिक अक्षरों की संख्या</th><th>आरंभिक अक्षरों वाली आयतें</th></tr></thead>
<tbody>
<tr><td>2</td><td>3</td><td>1</td></tr>
<tr><td>3</td><td>3</td><td>1</td></tr>
<tr><td>7</td><td>4</td><td>1</td></tr>
<tr><td>10</td><td>3</td><td>1</td></tr>
<tr><td>11</td><td>3</td><td>1</td></tr>
<tr><td>12</td><td>3</td><td>1</td></tr>
<tr><td>13</td><td>4</td><td>1</td></tr>
<tr><td>14</td><td>3</td><td>1</td></tr>
<tr><td>15</td><td>3</td><td>1</td></tr>
<tr><td>19</td><td>5</td><td>1</td></tr>
<tr><td>20</td><td>2</td><td>1</td></tr>
<tr><td>26</td><td>3</td><td>1</td></tr>
<tr><td>27</td><td>2</td><td>1</td></tr>
<tr><td>28</td><td>3</td><td>1</td></tr>
<tr><td>29</td><td>3</td><td>1</td></tr>
<tr><td>30</td><td>3</td><td>1</td></tr>
<tr><td>31</td><td>3</td><td>1</td></tr>
<tr><td>32</td><td>3</td><td>1</td></tr>
<tr><td>36</td><td>2</td><td>1</td></tr>
<tr><td>38</td><td>1</td><td>1</td></tr>
<tr><td>40</td><td>2</td><td>1</td></tr>
<tr><td>41</td><td>2</td><td>1</td></tr>
<tr><td>42</td><td>5</td><td>2</td></tr>
<tr><td>43</td><td>2</td><td>1</td></tr>
<tr><td>44</td><td>2</td><td>1</td></tr>
<tr><td>45</td><td>2</td><td>1</td></tr>
<tr><td>46</td><td>2</td><td>1</td></tr>
<tr><td>50</td><td>1</td><td>1</td></tr>
<tr><td>68</td><td>2</td><td>1</td></tr>
<tr class="mm-tot"><td>कुल</td><td>822</td><td>79</td></tr>
</tbody></table></div>
<p>822 + 79 + 30 = 931 (19x49)</p>
<p>ज़ाहिर है, क़ुरआन के गणितीय कोड के अनुरूप रहने के लिए सूरा 42 में दो अलग-अलग आरंभिक-अक्षर वाली आयतों का होना निर्णायक है। यह तथ्य कि सूरा 42 की आयत 1 दो क़ुरआनी आरंभिक अक्षरों “H.M.” से बनी है और दूसरी आयत तीन आरंभिक अक्षरों “`A.S.Q.” से, 14 सदियों से मुस्लिम विद्वानों और प्राच्यविदों को उलझाता रहा है। इस परिशिष्ट के अंत तक पाठक देख लेगा कि क़ुरआन का हर तत्व गणितीय रूप से प्रमाणित है। अभी हम जिन तत्वों से काम ले रहे हैं वे हैं “हर आरंभिक-अक्षर वाली सूरा में क़ुरआनी आरंभिक अक्षरों की संख्या” और “उन आयतों की संख्या जिनमें क़ुरआनी आरंभिक अक्षर हैं।” तालिका 11 से 13 तक इन्हीं दो तत्वों से संबंधित हैं। और अधिक गणितीय प्रमाण तालिका 14 और 15 में दिखाया गया है। तालिका 14 में, सभी आरंभिक-अक्षर वाली सूराओं की संख्याएँ हर सूरा की आयतों की संख्या में जोड़ी गई हैं, उसमें आरंभिक अक्षरों वाली आयतों की संख्या, और उन आरंभिक अक्षरों के जुम्मल मूल्य जोड़े गए हैं। महायोग 7030 है, अर्थात् 19x370।</p>

<div class="mm-tcap">तालिका 13: तालिका 12 के पहले दो स्तंभों को जोड़ने के बजाय गुणा करना</div>
<div class="mm-table-wrap"><table class="mm-table">
<thead><tr><th>सूरा सं.</th><th>&nbsp;</th><th>आरंभिक अक्षरों की संख्या</th><th>आरंभिक अक्षरों वाली आयतों की सं.</th></tr></thead>
<tbody>
<tr><td>2</td><td>X</td><td>3</td><td>1</td></tr>
<tr><td>3</td><td>X</td><td>3</td><td>1</td></tr>
<tr><td>7</td><td>X</td><td>4</td><td>1</td></tr>
<tr><td>…</td><td>&nbsp;</td><td>…</td><td>…</td></tr>
<tr><td>42</td><td>X</td><td>5</td><td>2</td></tr>
<tr><td>…</td><td>&nbsp;</td><td>…</td><td>…</td></tr>
<tr><td>50</td><td>X</td><td>1</td><td>1</td></tr>
<tr><td>68</td><td>X</td><td>2</td><td>1</td></tr>
</tbody></table></div>

<div class="mm-tcap">तालिका 14: आरंभिक अक्षरों वाली सूराओं के गणितीय गुण</div>
<div class="mm-table-wrap"><table class="mm-table">
<thead><tr><th>सूरा संख्या</th><th>आयतों की संख्या</th><th>आरंभिक अक्षरों वाली आयतों की संख्या</th><th>आरंभिक अक्षरों का जुम्मल मूल्य</th><th>कुल</th></tr></thead>
<tbody>
<tr><td>2</td><td>286</td><td>1</td><td>71</td><td>360</td></tr>
<tr><td>3</td><td>200</td><td>1</td><td>71</td><td>275</td></tr>
<tr><td>7</td><td>206</td><td>1</td><td>161</td><td>375</td></tr>
<tr><td>10</td><td>109</td><td>1</td><td>231</td><td>351</td></tr>
<tr><td>11</td><td>123</td><td>1</td><td>231</td><td>366</td></tr>
<tr><td>12</td><td>111</td><td>1</td><td>231</td><td>355</td></tr>
<tr><td>13</td><td>43</td><td>1</td><td>271</td><td>328</td></tr>
<tr><td>14</td><td>52</td><td>1</td><td>231</td><td>298</td></tr>
<tr><td>15</td><td>99</td><td>1</td><td>231</td><td>346</td></tr>
<tr><td>19</td><td>98</td><td>1</td><td>195</td><td>313</td></tr>
<tr><td>20</td><td>135</td><td>1</td><td>14</td><td>170</td></tr>
<tr><td>26</td><td>227</td><td>1</td><td>109</td><td>363</td></tr>
<tr><td>27</td><td>93</td><td>1</td><td>69</td><td>190</td></tr>
<tr><td>28</td><td>88</td><td>1</td><td>109</td><td>226</td></tr>
<tr><td>29</td><td>69</td><td>1</td><td>71</td><td>170</td></tr>
<tr><td>30</td><td>60</td><td>1</td><td>71</td><td>162</td></tr>
<tr><td>31</td><td>34</td><td>1</td><td>71</td><td>137</td></tr>
<tr><td>32</td><td>30</td><td>1</td><td>71</td><td>134</td></tr>
<tr><td>36</td><td>83</td><td>1</td><td>70</td><td>190</td></tr>
<tr><td>38</td><td>88</td><td>1</td><td>90</td><td>217</td></tr>
<tr><td>40</td><td>85</td><td>1</td><td>48</td><td>174</td></tr>
<tr><td>41</td><td>54</td><td>1</td><td>48</td><td>144</td></tr>
<tr><td>42</td><td>53</td><td>2</td><td>278</td><td>375</td></tr>
<tr><td>43</td><td>89</td><td>1</td><td>48</td><td>181</td></tr>
<tr><td>44</td><td>59</td><td>1</td><td>48</td><td>152</td></tr>
<tr><td>45</td><td>37</td><td>1</td><td>48</td><td>131</td></tr>
<tr><td>46</td><td>35</td><td>1</td><td>48</td><td>130</td></tr>
<tr><td>50</td><td>45</td><td>1</td><td>100</td><td>196</td></tr>
<tr><td>68</td><td>52</td><td>1</td><td>50+50</td><td>221</td></tr>
<tr class="mm-tot"><td>कुल</td><td>822</td><td>2743</td><td>30</td><td>3435</td></tr>
</tbody></table></div>
<p>822+2743+30+3435 = 7030</p>
<p>उल्लेखनीय रूप से, अगर हम तालिका 14 के पहले दो स्तंभों को जोड़ने के बजाय गुणा करें, तब भी हमें ऐसा महायोग मिलता है जो 19 से विभाज्य है (तालिका 15)।</p>

<div class="mm-tcap">तालिका 15: तालिका 14 के पहले 2 स्तंभों को जोड़ने के बजाय गुणा करना</div>
<div class="mm-table-wrap"><table class="mm-table">
<thead><tr><th>सूरा संख्या</th><th>&nbsp;</th><th>आयतों की संख्या</th><th>+</th><th>आरंभिक अक्षरों वाली आयतों की संख्या</th><th>+</th><th>आरंभिक अक्षरों का जुम्मल मूल्य</th><th>=</th></tr></thead>
<tbody>
<tr><td>2</td><td>X</td><td>286</td><td>+</td><td>1</td><td>+</td><td>71</td><td>=</td></tr>
<tr><td>3</td><td>X</td><td>200</td><td>+</td><td>1</td><td>+</td><td>71</td><td>=</td></tr>
<tr><td>7</td><td>X</td><td>206</td><td>+</td><td>1</td><td>+</td><td>161</td><td>=</td></tr>
<tr><td>…</td><td>&nbsp;</td><td>…</td><td>&nbsp;</td><td>&nbsp;</td><td>&nbsp;</td><td>&nbsp;</td><td>=</td></tr>
<tr><td>50</td><td>X</td><td>45</td><td>+</td><td>1</td><td>+</td><td>100</td><td>=</td></tr>
<tr><td>68</td><td>X</td><td>52</td><td>+</td><td>1</td><td>+</td><td>(50+50)</td><td>=</td></tr>
<tr class="mm-tot"><td>कुल</td><td>&nbsp;</td><td>60071</td><td>+</td><td>30</td><td>+</td><td>3435</td><td>=63536 (19x3344)</td></tr>
</tbody></table></div>
<p>हर सूरा में आयतों की संख्या, और हर आयत को दिए गए क्रमांक क़ुरआन के बुनियादी तत्वों में से हैं। ये तत्व न केवल गणितीय रूप से प्रमाणित हैं, बल्कि आरंभिक अक्षरों वाली और बिना आरंभिक अक्षरों वाली सूराएँ स्वतंत्र रूप से कोडित हैं। चूँकि हम अभी आरंभिक अक्षरों वाली सूराओं से काम ले रहे हैं, तालिका 16 इन सूराओं को दी गई संख्याएँ प्रस्तुत करती है, जिनमें हर सूरा की आयतों की संख्या और आयत-क्रमांकों का योग (1+2+3+…+n) जोड़ा गया है। महायोग 190133 है, अर्थात् 19x10007।</p>

<div class="mm-tcap">तालिका 16: आरंभिक अक्षरों वाली सूराओं की आयतों की गणितीय संरचना</div>
<div class="mm-table-wrap"><table class="mm-table">
<thead><tr><th>सूरा सं.</th><th>आयतों की सं.</th><th>आयत-क्रमांकों का योग</th><th>कुल</th></tr></thead>
<tbody>
<tr><td>2</td><td>286</td><td>41041</td><td>41329</td></tr>
<tr><td>3</td><td>200</td><td>20100</td><td>20303</td></tr>
<tr><td>7</td><td>206</td><td>21321</td><td>21534</td></tr>
<tr><td>…</td><td>…</td><td>…</td><td>…</td></tr>
<tr><td>50</td><td>45</td><td>1035</td><td>1130</td></tr>
<tr><td>68</td><td>52</td><td>1378</td><td>1498</td></tr>
<tr class="mm-tot"><td>कुल</td><td>822</td><td>2743</td><td>186568</td></tr>
</tbody></table></div>
<p>190133 (19x10007)</p>
<p>हर सूरा की संख्या को अगली सूरा की संख्या में जोड़ते हुए, और क़ुरआन के अंत तक यह क्रम चलाते हुए सूरा-संख्याओं के योग को संचित करते जाएँ, तो हर सूरा के लिए एक मान मिलेगा। इस प्रकार, सूरा 1 का मान 1 होगा, सूरा 2 का मान 1+2=3, सूरा 3 का मान 3+3=6, सूरा 4 का मान 6+4=10, और इसी तरह क़ुरआन के अंत तक। आरंभिक अक्षरों वाली और बिना आरंभिक अक्षरों वाली सूराओं के कुल मान स्वतंत्र रूप से 19 से विभाज्य हैं। आरंभिक अक्षरों वाली सूराओं के मान तालिका 17 में दिए गए हैं। बिना आरंभिक अक्षरों वाली सूराओं के लिए निकाले गए मान जुड़कर 237785 बनते हैं, जो भी 19 का गुणज है (237785 = 19x12515)।</p>

<div class="mm-tcap">तालिका 17: सूरा-संख्याओं के क्रमिक योग से प्राप्त मान</div>
<div class="mm-table-wrap"><table class="mm-table">
<thead><tr><th>सूरा संख्या</th><th>निकाला गया मान</th></tr></thead>
<tbody>
<tr><td>2</td><td>3</td></tr>
<tr><td>3</td><td>6</td></tr>
<tr><td>7</td><td>28</td></tr>
<tr><td>10</td><td>55</td></tr>
<tr><td>11</td><td>66</td></tr>
<tr><td>12</td><td>78</td></tr>
<tr><td>13</td><td>91</td></tr>
<tr><td>14</td><td>105</td></tr>
<tr><td>15</td><td>120</td></tr>
<tr><td>19</td><td>190</td></tr>
<tr><td>20</td><td>210</td></tr>
<tr><td>…</td><td>…</td></tr>
<tr><td>44</td><td>990</td></tr>
<tr><td>45</td><td>1035</td></tr>
<tr><td>46</td><td>1081</td></tr>
<tr><td>50</td><td>1275</td></tr>
<tr><td>68</td><td>2346</td></tr>
<tr class="mm-tot"><td>कुल</td><td>15675 (19x825)</td></tr>
</tbody></table></div>
</div>

<div class="mm-section" id="special-words">
<h2>ख़ास शब्दों की गणितीय कोडिंग</h2>
<h3>शब्द “ख़ुदा” (अल्लाह)</h3>
<p>[1] जैसा पहले दिखाया गया, शब्द “ख़ुदा” क़ुरआन में 2698 बार आता है, 19x142।</p>
<p>[2] जिन आयतों में शब्द “ख़ुदा” आता है उनके क्रमांक जुड़कर 118123 बनते हैं, जो भी 19 का गुणज है (118123 = 19x6217)।</p>

<div class="mm-tcap">तालिका 18: आरंभिक अक्षरों वाले भाग से बाहर शब्द “ख़ुदा” का आना</div>
<div class="mm-table-wrap"><table class="mm-table">
<thead><tr><th>सूरा सं.</th><th class="mm-wrap-cell">आयतों की सं.</th><th>कितनी बार आता है</th></tr></thead>
<tbody>
<tr><td>1</td><td class="mm-wrap-cell">1, 2</td><td>2</td></tr>
<tr><td>69</td><td class="mm-wrap-cell">33</td><td>1</td></tr>
<tr><td>70</td><td class="mm-wrap-cell">3</td><td>1</td></tr>
<tr><td>71</td><td class="mm-wrap-cell">3, 4, 13, 15, 17, 19, 25</td><td>7</td></tr>
<tr><td>72</td><td class="mm-wrap-cell">4, 5, 7, 12, 18, 19, 22, 23</td><td>10</td></tr>
<tr><td>73</td><td class="mm-wrap-cell">20</td><td>7</td></tr>
<tr><td>74</td><td class="mm-wrap-cell">31, 56</td><td>3</td></tr>
<tr><td>76</td><td class="mm-wrap-cell">6, 9, 11, 30</td><td>5</td></tr>
<tr><td>79</td><td class="mm-wrap-cell">25</td><td>1</td></tr>
<tr><td>81</td><td class="mm-wrap-cell">29</td><td>1</td></tr>
<tr><td>82</td><td class="mm-wrap-cell">19</td><td>1</td></tr>
<tr><td>84</td><td class="mm-wrap-cell">23</td><td>1</td></tr>
<tr><td>85</td><td class="mm-wrap-cell">8, 9, 20</td><td>3</td></tr>
<tr><td>87</td><td class="mm-wrap-cell">7</td><td>1</td></tr>
<tr><td>88</td><td class="mm-wrap-cell">24</td><td>1</td></tr>
<tr><td>91</td><td class="mm-wrap-cell">13</td><td>2</td></tr>
<tr><td>95</td><td class="mm-wrap-cell">8</td><td>1</td></tr>
<tr><td>96</td><td class="mm-wrap-cell">14</td><td>1</td></tr>
<tr><td>98</td><td class="mm-wrap-cell">2, 5, 8</td><td>3</td></tr>
<tr><td>104</td><td class="mm-wrap-cell">6</td><td>1</td></tr>
<tr><td>110</td><td class="mm-wrap-cell">1, 2</td><td>2</td></tr>
<tr><td>112</td><td class="mm-wrap-cell">1, 2</td><td>2</td></tr>
<tr class="mm-tot"><td>कुल</td><td>1798</td><td>634</td></tr>
</tbody></table></div>
<p>सूराओं &amp; आयतों की संख्याओं का योग = 1798 + 634 = 2432 = 19 x 128। आरंभिक अक्षरों वाले भाग से बाहर शब्द “ख़ुदा” का कुल आना = 57 (19 x 3)।</p>
<p>इन सीधी-सादी परिघटनाओं ने केवल शब्द “ख़ुदा” गिनते समय भी हमें बहुत कठिनाइयाँ दीं। हम कार्यकर्ताओं का एक दल थे, कंप्यूटरों से लैस, और हम सब कॉलेज से पढ़े हुए। फिर भी हमसे गिनने, हिसाब लगाने, या केवल “ख़ुदा” शब्द की गिनती लिखने में कई ग़लतियाँ हुईं। जो लोग आज भी दावा करते हैं कि क़ुरआन के रचयिता मुहम्मद थे, वे पूरी तरह अतार्किक हैं; वे कभी कॉलेज नहीं गए, और उनके पास कंप्यूटर नहीं था।</p>
<p>[3] पहले क़ुरआनी आरंभिक अक्षरों (A.L.M. 2:1) से अंतिम आरंभिक अक्षर (N. 68:1) तक, शब्द “ख़ुदा” 2641 बार, 19x139, आता है।</p>
<p>[4] आरंभिक अक्षरों से बाहर के भाग में शब्द “ख़ुदा” 57 बार आता है (तालिका 18)।</p>
<p>[5] जिन सूराओं और आयतों में शब्द “ख़ुदा” के ये 57 बार आना मिलते हैं, उनकी संख्याएँ जोड़ने पर हमें कुल 2432 मिलता है, अर्थात् 19x128। देखें तालिका 18।</p>
<p>[6] शब्द “ख़ुदा” 85 सूराओं में आता है। अगर हम हर सूरा की संख्या को शब्द “ख़ुदा” के पहले और अंतिम आने के बीच की आयतों की संख्या में जोड़ें, दोनों आयतों सहित, तो महायोग 8170 आता है, अर्थात् 19x430। आँकड़ों का संक्षिप्त रूप तालिका 19 में दिया गया है।</p>
<p>[7] क़ुरआन का प्रमुख संदेश यह है कि केवल “एक ख़ुदा” है। शब्द “एक”, अरबी में “वाहिद”, क़ुरआन में 25 बार आता है। इनमें से छह बार वह ख़ुदा के अलावा किसी और के लिए आया है (एक प्रकार का भोजन, एक दरवाज़ा, आदि)। बाक़ी 19 बार वह ख़ुदा के लिए है। ये आँकड़े प्रसिद्ध संदर्भ-ग्रंथ INDEX TO THE WORDS OF QURAN में मिलते हैं।</p>

<div class="mm-tcap">तालिका 19: वे सभी सूराएँ जिनमें शब्द “ख़ुदा” (अल्लाह) का उल्लेख है</div>
<div class="mm-table-wrap"><table class="mm-table">
<thead><tr><th>सूरा सं.</th><th>पहली आयत</th><th>अंतिम आयत</th><th>पहली से अंतिम तक आयतें</th></tr></thead>
<tbody>
<tr><td>1</td><td>1</td><td>1</td><td>2</td></tr>
<tr><td>2</td><td>2</td><td>7</td><td>286</td></tr>
<tr><td>3</td><td>3</td><td>2</td><td>200</td></tr>
<tr><td>…</td><td>…</td><td>…</td><td>…</td></tr>
<tr><td>84</td><td>110</td><td>1</td><td>2</td></tr>
<tr><td>85</td><td>112</td><td>1</td><td>2</td></tr>
<tr class="mm-tot"><td>कुल</td><td>3910</td><td>&nbsp;</td><td>4260</td></tr>
</tbody></table></div>
<p>3910+4260=8170 = 19x430</p>
<p>क़ुरआन के बुनियादी संदेश के रूप में शब्द “एक” का निर्णायक महत्व इस तथ्य से प्रकट होता है कि क़ुरआन का साझा भाजक, 19, संयोग से शब्द “एक” का ही जुम्मल मूल्य है।</p>
</div>

<span class="mm-part-tag" id="part2">भाग 2</span>
<div class="mm-quote">[क़ुरआन 74:35] “One of the Great Miracles” — हिन्दी अनुवाद जल्द उपलब्ध होगा, इन्शा अल्लाह।</div>

<div class="mm-section" id="why-19">
<h2>19 ही क्यों!</h2>
<p>जैसा इस परिशिष्ट में आगे बताया गया है, ख़ुदा की सभी किताबें, केवल क़ुरआन ही नहीं, संख्या “19” से गणितीय रूप से कोडित थीं। यहाँ तक कि समूचा ब्रह्मांड भी यह ख़ुदाई चिह्न लिए हुए है। संख्या 19 को सर्वशक्तिमान सृष्टिकर्ता के उस हस्ताक्षर के रूप में देखा जा सकता है जो उसने अपनी हर रचना पर किया है (देखें परिशिष्ट 38)। संख्या “19” में ऐसे अनोखे गणितीय गुण हैं जो इस परिशिष्ट के दायरे से बाहर हैं। उदाहरण के लिए:</p>
<ol class="mm-facts" style="counter-reset:none">
<li>यह एक अभाज्य संख्या है।</li>
<li>इसमें पहला अंक (1) और अंतिम अंक (9) दोनों समाए हुए हैं, मानो 57:3 में ख़ुदा के गुण “आदि और अंत” की घोषणा कर रहे हों।</li>
<li>यह दुनिया की सभी भाषाओं में एक जैसी दिखती है। इसके दोनों अंग, 1 और 9, ही ऐसे अंक हैं जो सभी भाषाओं में एक जैसे दिखते हैं।</li>
</ol>

<div class="mm-quote">हमारा रब, ख़ुदा, एक ही है! इसलिए तू अपने रब ख़ुदा की इबादत अपने पूरे दिल से, अपनी पूरी जान से, अपने पूरे मन से और अपनी पूरी ताक़त से कर।<cite>व्यवस्थाविवरण 6:4-5 · मरकुस 12:29 · क़ुरआन 2:163, 17:22-23</cite></div>

<div class="mm-tcap">तालिका 20: “19 ही क्यों!”</div>
<div class="mm-table-wrap"><table class="mm-table">
<thead><tr><th colspan="2">इब्रानी</th><th colspan="2">अरबी</th><th>मूल्य</th></tr></thead>
<tbody>
<tr><td colspan="2">V</td><td colspan="2">W</td><td>6</td></tr>
<tr><td colspan="2">A</td><td colspan="2">A</td><td>1</td></tr>
<tr><td colspan="2">H</td><td colspan="2">H</td><td>8</td></tr>
<tr><td colspan="2">D</td><td colspan="2">D</td><td>4</td></tr>
<tr class="mm-tot"><td colspan="4">कुल</td><td>19</td></tr>
</tbody></table></div>

<p>[4] इसमें कई विलक्षण गणितीय गुण हैं। उदाहरण के लिए, 19, 9 और 10 की पहली घातों का योग है, और 9 तथा 10 की दूसरी घातों का अंतर है। अब हम समझते हैं कि ख़ुदा की रचनाओं की संख्या 19 से सार्वभौमिक कोडिंग इस तथ्य पर टिकी है कि यह सभी किताबी भाषाओं — अरामी, इब्रानी और अरबी — में शब्द “एक” का जुम्मल मूल्य है।</p>
<p>इसलिए संख्या 19 सभी किताबों के पहले आदेश की घोषणा करती है: कि ख़ुदा केवल एक है।</p>
<p>जैसा तालिका 7 में दिखाया गया है, अरामी, इब्रानी और अरबी वर्णमालाएँ एक सार्वभौमिक रूप से स्थापित प्रणाली के अनुसार अंकों का भी काम करती थीं। “एक” के लिए इब्रानी शब्द “VAHD” है (उच्चारण V-AHAD)। अरबी में “एक” के लिए शब्द “WAHD” है (उच्चारण WAAHED)। देखें तालिका 20।</p>

<div class="mm-callout"><span class="lbl">Submission.org: इस भाग में संपादकीय अद्यतन</span>
<p>संख्या 19 निम्नलिखित सामूहिक गणितीय गुणों के कारण अनोखी है, उदाहरण के लिए:</p>
<ol class="mm-facts" style="counter-reset:none">
<li>यह एक अभाज्य संख्या है, जो केवल अपने आप से और एक से विभाज्य है।</li>
<li>इसमें पहला अंक (1) और अंतिम अंक (9) दोनों समाए हुए हैं, मानो 57:3 में ख़ुदा के गुण “आदि और अंत” की घोषणा कर रहे हों।</li>
<li>इसके अंक दुनिया की सभी भाषाओं में एक जैसे दिखते हैं। अंक (1) और (9) उदाहरण के लिए अरबी और अंग्रेज़ी में लगभग एक जैसे दिखते हैं।</li>
<li>19, 9 और 10 की पहली घातों का योग है, और 10 तथा 9 की दूसरी घातों का अंतर है।</li>
<li>संख्या 19 सभी किताबी भाषाओं — अरामी, इब्रानी और अरबी — में शब्द “एक” का संख्यात्मक मान है। इसलिए संख्या 19 सभी किताबों के पहले आदेश की घोषणा करती है: कि ख़ुदा केवल एक है।</li>
</ol></div>
<div class="mm-callout"><span class="lbl">क़ुरआन इंस्पेक्टर / Mod19</span><p>एक कंप्यूटर प्रोग्राम जो बहुत लंबी संख्याओं को भाग देने और क़ुरआनी आरंभिक अक्षर गिनने में मदद करता है।</p></div>
</div>

<div class="mm-section" id="word-quran">
<h2>शब्द “क़ुरआन”</h2>
<div class="mm-tcap">तालिका 21: वे सूराएँ और आयतें जहाँ “क़ुरआन” आता है</div>
<div class="mm-table-wrap"><table class="mm-table">
<thead><tr><th>सूरा</th><th>आयत</th><th>&nbsp;</th><th>सूरा</th><th>आयत</th></tr></thead>
<tbody>
<tr><td>2</td><td>185</td><td>&nbsp;</td><td>30</td><td>58</td></tr>
<tr><td>4</td><td>82</td><td>&nbsp;</td><td>34</td><td>31</td></tr>
<tr><td>5</td><td>101</td><td>&nbsp;</td><td>36</td><td>2</td></tr>
<tr><td>6</td><td>19</td><td>&nbsp;</td><td>—</td><td>69</td></tr>
<tr><td>7</td><td>204</td><td>&nbsp;</td><td>38</td><td>1</td></tr>
<tr><td>9</td><td>111</td><td>&nbsp;</td><td>39</td><td>27</td></tr>
<tr><td>10</td><td>37</td><td>&nbsp;</td><td>—</td><td>28</td></tr>
<tr><td>—</td><td>61</td><td>&nbsp;</td><td>41</td><td>3</td></tr>
<tr><td>12</td><td>2</td><td>&nbsp;</td><td>—</td><td>26</td></tr>
<tr><td>—</td><td>3</td><td>&nbsp;</td><td>42</td><td>7</td></tr>
<tr><td>15</td><td>1</td><td>&nbsp;</td><td>43</td><td>3</td></tr>
<tr><td>—</td><td>87</td><td>&nbsp;</td><td>—</td><td>31</td></tr>
<tr><td>—</td><td>91</td><td>&nbsp;</td><td>46</td><td>29</td></tr>
<tr><td>16</td><td>98</td><td>&nbsp;</td><td>47</td><td>24</td></tr>
<tr><td>17</td><td>9</td><td>&nbsp;</td><td>50</td><td>1</td></tr>
<tr><td>—</td><td>41</td><td>&nbsp;</td><td>—</td><td>45</td></tr>
<tr><td>—</td><td>45</td><td>&nbsp;</td><td>54</td><td>17</td></tr>
<tr><td>—</td><td>46</td><td>&nbsp;</td><td>—</td><td>22</td></tr>
<tr><td>—</td><td>60</td><td>&nbsp;</td><td>—</td><td>32</td></tr>
<tr><td>—</td><td>78</td><td>&nbsp;</td><td>—</td><td>40</td></tr>
<tr><td>—</td><td>82</td><td>&nbsp;</td><td>55</td><td>2</td></tr>
<tr><td>—</td><td>88</td><td>&nbsp;</td><td>56</td><td>77</td></tr>
<tr><td>—</td><td>89</td><td>&nbsp;</td><td>59</td><td>21</td></tr>
<tr><td>—</td><td>106</td><td>&nbsp;</td><td>72</td><td>1</td></tr>
<tr><td>18</td><td>54</td><td>&nbsp;</td><td>73</td><td>4</td></tr>
<tr><td>20</td><td>2</td><td>&nbsp;</td><td>—</td><td>20</td></tr>
<tr><td>—</td><td>113</td><td>&nbsp;</td><td>75</td><td>17</td></tr>
<tr><td>—</td><td>114</td><td>&nbsp;</td><td>—</td><td>18</td></tr>
<tr><td>25</td><td>30</td><td>&nbsp;</td><td>76</td><td>23</td></tr>
<tr><td>—</td><td>32</td><td>&nbsp;</td><td>84</td><td>21</td></tr>
<tr><td>27</td><td>1</td><td>&nbsp;</td><td>85</td><td>21</td></tr>
<tr><td>—</td><td>6</td><td>&nbsp;</td><td>&nbsp;</td><td>&nbsp;</td></tr>
<tr><td>—</td><td>76</td><td>&nbsp;</td><td>&nbsp;</td><td>&nbsp;</td></tr>
<tr><td>—</td><td>92</td><td>&nbsp;</td><td>&nbsp;</td><td>&nbsp;</td></tr>
<tr><td>28</td><td>85</td><td>&nbsp;</td><td>&nbsp;</td><td>&nbsp;</td></tr>
<tr class="mm-tot"><td>कुल</td><td>1356</td><td>&nbsp;</td><td>&nbsp;</td><td>3052</td></tr>
</tbody></table></div>
<p>1356+3052 = 4408 (19x232)</p>
<p>शब्द “क़ुरआन” क़ुरआन में 58 बार आता है, जिनमें से एक, 10:15 में, “एक और क़ुरआन” की ओर इशारा करता है। इसलिए इस विशेष बार को छोड़ना होगा। इस प्रकार, क़ुरआन में “इस क़ुरआन” के आने की संख्या 57 है, अर्थात् 19x3। शब्द “क़ुरआन” के दो अन्य व्याकरणिक रूप 12 आयतों में आते हैं। इनमें शब्द “क़ुरआनुन” और शब्द “क़ुरआनहु” शामिल हैं। इनमें से एक, 13:31 में, “एक और क़ुरआन” की ओर इशारा करता है जो पहाड़ों को चूर कर देता। दूसरा, 41:44 में, “एक ग़ैर-अरबी क़ुरआन” की ओर इशारा करता है। इसलिए इन दोनों को छोड़ा गया है। तालिका 21 उन सूराओं और आयतों की सूची दिखाती है जहाँ शब्द “क़ुरआन” अपने सभी व्याकरणिक रूपों में आता है।</p>
</div>

<div class="mm-section" id="strong-foundation">
<h2>एक मज़बूत बुनियाद</h2>
<p>क़ुरआन की पहली आयत, “अल्लाह के नाम से जो बेहद मेहरबान और रहमदिल है।”, जिसे बिस्मिल्लाह कहा जाता है, 19 अरबी अक्षरों की है। इसके घटक शब्द क़ुरआन में लगातार 19 के गुणजों में आते हैं।</p>
<div class="mm-table-wrap"><table class="mm-table">
<tbody>
<tr><td>पहला शब्द</td><td>“इस्म” (नाम)</td><td>19 बार आता है।</td></tr>
<tr><td>दूसरा शब्द</td><td>“अल्लाह” (ख़ुदा)</td><td>2698 बार आता है (19x142)</td></tr>
<tr><td>तीसरा शब्द</td><td>“अर-रहमान” (अत्यंत कृपाशील)</td><td>57 बार (19x3)</td></tr>
<tr><td>चौथा शब्द</td><td>“अर-रहीम” (अत्यंत दयावान)</td><td>114 बार (19x6)</td></tr>
</tbody></table></div>
<p>प्रोफ़ेसर सीज़र मजूल ने ख़ुदा के 400 से अधिक गुणवाचक नामों के जुम्मल मूल्य देखे, और केवल चार नाम ऐसे पाए जिनके जुम्मल मूल्य 19 के गुणज हैं:</p>
<div class="mm-table-wrap"><table class="mm-table">
<thead><tr><th>ख़ुदाई नाम</th><th>जुम्मल मूल्य</th></tr></thead>
<tbody>
<tr><td>1. “वाहिद” (एक)</td><td>19</td></tr>
<tr><td>2. “ज़ुल फ़ज़्ल अल-`अज़ीम” (असीम कृपा का स्वामी)</td><td>2698</td></tr>
<tr><td>3. “मजीद” (गौरवशाली)</td><td>57</td></tr>
<tr><td>4. “जामि`” (एकत्र करने वाला)</td><td>114</td></tr>
</tbody></table></div>
<p>जैसा ऊपर बताया गया, केवल वही ख़ुदाई नाम जिनके जुम्मल मूल्य 19 से विभाज्य हैं, ठीक बिस्मिल्लाह के चार शब्दों के आने की संख्याओं से मेल खाते हैं। नीचे का चित्र इस उल्लेखनीय परिघटना को दर्शाता है:</p>
<div class="mm-table-wrap"><table class="mm-table">
<thead><tr><th>बिस्मिल्लाह का शब्द</th><th>संख्या / जुम्मल मूल्य</th><th>ख़ुदाई नाम</th></tr></thead>
<tbody>
<tr><td>नाम (इस्म)</td><td>19</td><td>(वाहिद) एक</td></tr>
<tr><td>ख़ुदा (अल्लाह)</td><td>2698</td><td>(ज़ुल फ़ज़्ल अल-`अज़ीम) असीम कृपा का स्वामी</td></tr>
<tr><td>अत्यंत कृपाशील (अर-रहमान)</td><td>57</td><td>(मजीद) गौरवशाली</td></tr>
<tr><td>अत्यंत दयावान (अर-रहीम)</td><td>114</td><td>(जामि`) एकत्र करने वाला</td></tr>
</tbody></table></div>
<p>बिस्मिल्लाह के चार शब्द बाईं ओर दिखाए गए हैं, और वे चार ख़ुदाई नाम जिनके जुम्मल मूल्य 19 से विभाज्य हैं, दाईं ओर हैं। बीच की संख्याएँ बिस्मिल्लाह के शब्दों के आने की संख्याएँ हैं, और साथ ही उन चार ख़ुदाई नामों के जुम्मल मूल्य भी।</p>
</div>

<div class="mm-section" id="five-pillars">
<h2>इस्लाम के पाँच स्तंभ</h2>
<p>यद्यपि क़ुरआन हमारे जीवन के सभी पहलुओं को नियंत्रित करने वाले अनेक महत्वपूर्ण आदेश देता है (उदाहरण के लिए देखें 17:22-38), परंपरागत रूप से पाँच बुनियादी “स्तंभों” पर ज़ोर दिया गया है। वे हैं:</p>
<ol class="mm-facts" style="counter-reset:none">
<li><b>शहादा:</b>यह गवाही देना कि ख़ुदा के सिवा कोई और पूज्य नहीं।</li>
<li><b>सलात:</b>रोज़ाना पाँच बार संपर्क-नमाज़ अदा करना।</li>
<li><b>सियाम:</b>इस्लामी कैलेंडर के नौवें महीने (रमज़ान) में रोज़ा रखना।</li>
<li><b>ज़कात:</b>अपनी शुद्ध आय का 2.5% निर्दिष्ट लोगों को दान के रूप में देना।</li>
<li><b>हज:</b>जो लोग सामर्थ्य रखते हैं उनके लिए जीवन में एक बार मक्का की यात्रा।</li>
</ol>
<p>क़ुरआन की हर दूसरी चीज़ की तरह, ये भी गणितीय रूप से संरचित हैं।</p>

<div class="mm-tcap">तालिका 22: ला इलाहा इल्ला हू के पहले आने से अंतिम आने तक की सभी सूराएँ और आयतें</div>
<div class="mm-table-wrap"><table class="mm-table">
<thead><tr><th>सूरा सं.</th><th>आयतों की सं.</th><th>आयत-क्रमांकों का योग</th><th>कुल</th></tr></thead>
<tbody>
<tr><td>2</td><td>123</td><td>&nbsp;</td><td>&nbsp;</td></tr>
<tr><td>3</td><td>200</td><td>&nbsp;</td><td>&nbsp;</td></tr>
<tr><td>…</td><td>…</td><td>…</td><td>…</td></tr>
<tr><td>9</td><td>127</td><td>8128</td><td>8264</td></tr>
<tr><td>…</td><td>…</td><td>…</td><td>…</td></tr>
<tr><td>72</td><td>28</td><td>406</td><td>506</td></tr>
<tr><td>73</td><td>9</td><td>45</td><td>127</td></tr>
<tr class="mm-tot"><td>कुल</td><td>2700</td><td>5312</td><td>308490</td></tr>
</tbody></table></div>
<p>316502 (19x16658)</p>

<div class="mm-tcap">तालिका 23: निर्णायक वाक्यांश “ला इलाहा इल्ला हू” (उसके सिवा कोई और पूज्य नहीं) के आने की सभी जगहों की सूची</div>
<div class="mm-table-wrap"><table class="mm-table">
<thead><tr><th>क्र.</th><th>सूरा सं.</th><th class="mm-wrap-cell">शहादा वाली आयतें</th><th>शहादा की संख्या</th></tr></thead>
<tbody>
<tr><td>1.</td><td>2</td><td class="mm-wrap-cell">163, 255</td><td>2</td></tr>
<tr><td>2.</td><td>3</td><td class="mm-wrap-cell">2, 6, 18 (दो बार)</td><td>4</td></tr>
<tr><td>3.</td><td>4</td><td class="mm-wrap-cell">87</td><td>1</td></tr>
<tr><td>4.</td><td>6</td><td class="mm-wrap-cell">102, 106</td><td>2</td></tr>
<tr><td>5.</td><td>7</td><td class="mm-wrap-cell">158</td><td>1</td></tr>
<tr><td>6.</td><td>9</td><td class="mm-wrap-cell">31</td><td>1</td></tr>
<tr><td>7.</td><td>11</td><td class="mm-wrap-cell">14</td><td>1</td></tr>
<tr><td>8.</td><td>13</td><td class="mm-wrap-cell">30</td><td>1</td></tr>
<tr><td>9.</td><td>20</td><td class="mm-wrap-cell">8, 98</td><td>2</td></tr>
<tr><td>10.</td><td>23</td><td class="mm-wrap-cell">116</td><td>1</td></tr>
<tr><td>11.</td><td>27</td><td class="mm-wrap-cell">26</td><td>1</td></tr>
<tr><td>12.</td><td>28</td><td class="mm-wrap-cell">70, 88</td><td>2</td></tr>
<tr><td>13.</td><td>35</td><td class="mm-wrap-cell">3</td><td>1</td></tr>
<tr><td>14.</td><td>39</td><td class="mm-wrap-cell">6</td><td>1</td></tr>
<tr><td>15.</td><td>40</td><td class="mm-wrap-cell">3, 62, 65</td><td>3</td></tr>
<tr><td>16.</td><td>44</td><td class="mm-wrap-cell">8</td><td>1</td></tr>
<tr><td>17.</td><td>59</td><td class="mm-wrap-cell">22, 23</td><td>2</td></tr>
<tr><td>18.</td><td>64</td><td class="mm-wrap-cell">13</td><td>1</td></tr>
<tr><td>19.</td><td>73</td><td class="mm-wrap-cell">9</td><td>1</td></tr>
<tr class="mm-tot"><td colspan="2">कुल</td><td>507 1592</td><td>29</td></tr>
</tbody></table></div>
<p>507 + 1592 + 29 = 2128 = 19x112</p>

<h3>1. एक ख़ुदा (शहादा)</h3>
<p>जैसा पहले बताया गया, शब्द “एक” जो ख़ुदा की ओर इशारा करता है, क़ुरआन में 19 बार आता है। ख़ुदा “अकेले” का उल्लेख 5 बार आता है, और जिन सूराओं और आयतों में ये पाँच बार मिलते हैं उनकी संख्याओं का योग 361 है, 19x19। “इस्लाम का पहला स्तंभ” 3:18 में “ला इलाहा इल्ला हू” (उसके सिवा कोई और पूज्य नहीं) के रूप में कहा गया है। यह सबसे महत्वपूर्ण वाक्यांश 19 सूराओं में आता है। पहली बार वह 2:163 में आता है, और अंतिम बार 73:9 में। तालिका 22 दिखाती है कि सूरा-संख्याओं का कुल, उसमें पहले और अंतिम आने के बीच की आयतों की संख्या, और उसमें इन आयत-क्रमांकों का योग मिलाकर 316502 है, अर्थात् 19x16658। साथ ही, जिन 19 सूराओं में ला इलाहा इल्ला हू आता है उनकी संख्याएँ, उन आयतों के क्रमांक जहाँ यह निर्णायक वाक्यांश मिलता है, और उसके आने की कुल संख्या (29) जोड़ने पर महायोग 2128 आता है, अर्थात् 19x112। विवरण तालिका 23 में दिए गए हैं।</p>

<h3>2. संपर्क-नमाज़ “सलात”</h3>
<p>शब्द “सलात” क़ुरआन में 67 बार आता है, और जब हम इन 67 बार की सूराओं और आयतों की संख्याएँ जोड़ते हैं, तो कुल 4674 आता है, अर्थात् 19x246 (देखें INDEX OF THE QURAN)।</p>

<h3>3. रोज़ा (सियाम)</h3>
<p>रोज़े का आदेश 2:183, 2:184, 2:185, 2:187, 2:196; 4:92; 5:89, 95; 33:35, 35; &amp; 58:4 में आया है। इन संख्याओं का कुल 1387 है, अर्थात् 19x73। ध्यान देने योग्य है कि 33:35 में रोज़े का उल्लेख दो बार है, एक ईमान वाले पुरुषों के लिए और दूसरा ईमान वाली स्त्रियों के लिए।</p>

<h3>4. अनिवार्य दान (ज़कात) &amp; 5. मक्का की हज यात्रा</h3>
<p>जहाँ “इस्लाम के स्तंभों” में पहले तीन हर मुस्लिम पुरुष और स्त्री पर अनिवार्य हैं, वहीं ज़कात और हज केवल उन्हीं के लिए नियत हैं जो उनका सामर्थ्य रखते हैं। यही बात ज़कात और हज से जुड़ी दिलचस्प गणितीय परिघटना को समझाती है।</p>
<p>ज़कात का उल्लेख 2:43, 2:83, 2:110, 2:177, 2:277; 4:77, 4:162; 5:12, 5:55, 7:156; 9:5, 9:11, 9:18, 9:71; 18:81; 19:13, 19:31, 19:55; 21:73; 22:41, 22:78; 23:4; 24:37, 24:56; 27:3; 30:39; 31:4; 33:33; 41:7; 58:13; 73:20; और 98:5 में है। ये संख्याएँ जुड़कर 2395 बनती हैं। यह कुल 19 का गुणज होने से थोड़ा चूक जाता है; यह 1 अधिक है।</p>
<p>हज यात्रा 2:189, 2:196, 2:197; 9:3; और 22:27 में आती है। ये संख्याएँ जुड़कर 645 बनती हैं, और यह कुल भी 19 का गुणज होने से थोड़ा चूक जाता है; यह 1 कम है।</p>
<p>इस प्रकार, ज़कात और हज मिलकर कुल 2395+645 = 3040 = 19x160 देते हैं।</p>
</div>

<div class="mm-section" id="mathematical-structure">
<h2>क़ुरआन की गणितीय संरचना</h2>
<p>क़ुरआन की सूराएँ, आयतें, शब्द और अक्षर न केवल गणितीय रूप से रचे गए हैं, बल्कि एक ऐसी संरचना में सजाए गए हैं जो मानवीय सामर्थ्य से परे और विशुद्ध रूप से गणितीय है, अर्थात् साहित्यिक विषय-वस्तु का इस सजावट से कोई लेना-देना नहीं। चूँकि क़ुरआन की भौतिक रचना विशुद्ध रूप से गणितीय है, यह अपेक्षित होगा कि क़ुरआन में उल्लिखित संख्याएँ भी क़ुरआन के 19 पर आधारित कोड के अनुरूप हों।</p>
<p>क़ुरआन में कुल 30 अलग-अलग संख्याओं का उल्लेख है, और इन सभी संख्याओं का योग 162146 है, जो 19 का गुणज है (162146 = 19x8534)। तालिका 24 में क़ुरआन में उल्लिखित सभी संख्याएँ, बिना दोहराव के, दी गई हैं।</p>

<div class="mm-tcap">तालिका 24: सभी क़ुरआनी संख्याएँ</div>
<div class="mm-table-wrap"><table class="mm-table">
<thead><tr><th>संख्या</th><th>स्थान का उदाहरण</th></tr></thead>
<tbody>
<tr><td>1</td><td>2:163</td></tr>
<tr><td>2</td><td>4:11</td></tr>
<tr><td>3</td><td>4:171</td></tr>
<tr><td>4</td><td>9:2</td></tr>
<tr><td>5</td><td>18:22</td></tr>
<tr><td>6</td><td>25:59</td></tr>
<tr><td>7</td><td>41:12</td></tr>
<tr><td>8</td><td>69:17</td></tr>
<tr><td>9</td><td>27:48</td></tr>
<tr><td>10</td><td>2:196</td></tr>
<tr><td>11</td><td>12:4</td></tr>
<tr><td>12</td><td>9:36</td></tr>
<tr><td>19</td><td>74:30</td></tr>
<tr><td>20</td><td>8:65</td></tr>
<tr><td>30</td><td>7:142</td></tr>
<tr><td>40</td><td>7:142</td></tr>
<tr><td>50</td><td>29:14</td></tr>
<tr><td>60</td><td>58:4</td></tr>
<tr><td>70</td><td>9:80</td></tr>
<tr><td>80</td><td>24:4</td></tr>
<tr><td>99</td><td>38:23</td></tr>
<tr><td>100</td><td>2:259</td></tr>
<tr><td>200</td><td>8:65</td></tr>
<tr><td>300</td><td>18:25</td></tr>
<tr><td>1000</td><td>2:96</td></tr>
<tr><td>2000</td><td>8:66</td></tr>
<tr><td>3000</td><td>3:124</td></tr>
<tr><td>5000</td><td>3:125</td></tr>
<tr><td>50000</td><td>70:4</td></tr>
<tr><td>100000</td><td>37:147</td></tr>
<tr class="mm-tot"><td>कुल</td><td>162146 (19 x 8534)</td></tr>
</tbody></table></div>
<p>जिन संख्याओं का उल्लेख क़ुरआन में केवल एक बार है, वे हैं: 11, 19, 20, 50, 60, 80, 99, 300, 2000, 3000, 5000, 50000, और 100000। क़ुरआन में उल्लिखित सभी संख्याएँ, दोहराव सहित, 285 बार आती हैं, और यह संख्या 19 का गुणज है; 285 = 19x15।</p>
</div>

<div class="mm-section" id="numbers-suras-verses">
<h2>सूराओं और आयतों की संख्याएँ</h2>
<div class="mm-tcap">तालिका 25: सूरा और आयत संख्याओं की गणितीय कोडिंग</div>
<div class="mm-table-wrap"><table class="mm-table">
<thead><tr><th>सूरा सं.</th><th>आयतों की सं.</th><th>आयत-क्रमांकों का योग</th><th>कुल</th></tr></thead>
<tbody>
<tr><td>1</td><td>7</td><td>28</td><td>36</td></tr>
<tr><td>2</td><td>286</td><td>41041</td><td>41329</td></tr>
<tr><td>…</td><td>…</td><td>…</td><td>…</td></tr>
<tr><td>9</td><td>127</td><td>8128</td><td>8264</td></tr>
<tr><td>…</td><td>…</td><td>…</td><td>…</td></tr>
<tr><td>113</td><td>5</td><td>15</td><td>133</td></tr>
<tr><td>114</td><td>6</td><td>21</td><td>141</td></tr>
<tr class="mm-tot"><td>कुल</td><td>6555</td><td>6234</td><td>333410</td></tr>
</tbody></table></div>
<p>346199 (19x19x959)</p>
<p>क़ुरआन की सूराओं और आयतों की क्रम-संख्या प्रणाली पूर्ण रूप से सुरक्षित रखी गई है। केवल कुछ अनधिकृत और आसानी से पहचाने जा सकने वाले मुद्रण ही उस मानक प्रणाली से हटते हैं जो ख़ुदा की ओर से संरक्षित है। जब हम सभी सूराओं की संख्याओं को, हर सूरा की आयतों की संख्या को, और आयत-क्रमांकों के योग को जोड़ते हैं, तो पूरे क़ुरआन का महायोग 346199 आता है, 19x19x959। तालिका 25 इन आँकड़ों का संक्षिप्त प्रस्तुतीकरण है। इस प्रकार, किसी एक सूरा या आयत में तनिक भी परिवर्तन इस प्रणाली को नष्ट कर देता। जैसा तालिका 16 में दिखाया गया है, यदि हम केवल 29 आरंभिक अक्षरों वाली सूराओं पर विचार करें, तो ये ही आँकड़े एक महायोग देते हैं जो भी 19 का गुणज है। इससे यह निष्कर्ष निकलता है कि बिना आरंभिक अक्षरों वाली सूराओं के आँकड़े भी 19 से विभाज्य हैं।</p>

<div class="mm-tcap">तालिका 26: बिना आरंभिक अक्षरों वाली 85 सूराओं की गणितीय कोडिंग</div>
<div class="mm-table-wrap"><table class="mm-table">
<thead><tr><th>सूरा सं.</th><th>आयतों की सं.</th><th>आयत-क्रमांकों का योग</th><th>कुल</th></tr></thead>
<tbody>
<tr><td>1</td><td>7</td><td>28</td><td>36</td></tr>
<tr><td>4</td><td>176</td><td>15576</td><td>15756</td></tr>
<tr><td>…</td><td>…</td><td>…</td><td>…</td></tr>
<tr><td>9</td><td>127</td><td>8128</td><td>8264</td></tr>
<tr><td>…</td><td>…</td><td>…</td><td>…</td></tr>
<tr><td>113</td><td>5</td><td>15</td><td>133</td></tr>
<tr><td>114</td><td>6</td><td>21</td><td>141</td></tr>
<tr class="mm-tot"><td>कुल</td><td>5733</td><td>3491</td><td>146842</td></tr>
</tbody></table></div>
<p>156066 (19x8214)</p>
<p>तालिका 26 बिना आरंभिक अक्षरों वाली 85 सूराओं से संबंधित उन्हीं आँकड़ों का संक्षिप्त प्रस्तुतीकरण है।</p>
<p>अब आइए सूरा और आयत संख्याओं से जुड़े चमत्कारों के एक और समूह को देखें।</p>

<div class="mm-tcap">तालिका 27: हर सूरा के लिए सूरा, आयतों की कुल संख्या, आयत-क्रमांक और आयत-क्रमांकों का योग</div>
<div class="mm-table-wrap"><table class="mm-table">
<thead><tr><th>सूरा</th><th class="mm-wrap-cell">सूरा, आयतों की सं., आयत-क्रमांक &amp; आयत-क्रमांकों का योग</th></tr></thead>
<tbody>
<tr><td>1</td><td class="mm-wrap-cell">1 7 123456 7 28</td></tr>
<tr><td>2</td><td class="mm-wrap-cell">2 286 12345 … 286 41041</td></tr>
<tr><td>…</td><td class="mm-wrap-cell">…</td></tr>
<tr><td>114</td><td class="mm-wrap-cell">114 6 123456 21</td></tr>
</tbody></table></div>
<p>कुल 759 अंकों का है &amp; 19 का गुणज है।</p>
<p>सूरा संख्या लिखें, उसके बाद उस सूरा की आयतों की संख्या, फिर हर आयत का क्रमांक, और अंत में आयत-क्रमांकों का योग। इस प्रकार, सूरा 1 के लिए आप सूरा हेतु 1 लिखेंगे, फिर आयतों की संख्या हेतु 7, हर आयत-क्रमांक हेतु 1234567, और अंत में आयत-क्रमांकों के योग हेतु 28, अर्थात् 1 7 1234567 28। सूरा 2 की संख्या इस प्रकार होगी: 2 286 123456…286 41041। सभी 114 सूराओं के लिए यही करें, और फिर इन संख्याओं को जोड़ें। कुल योग 759 अंकों का है, और 19 का गुणज है।</p>

<div class="mm-tcap">तालिका 28: हर सूरा की आयतों की संख्या &amp; आयत-क्रमांकों का योग, बाईं ओर संरेखित</div>
<div class="mm-table-wrap"><table class="mm-table">
<thead><tr><th>सूरा</th><th>कुल आयतें &amp; आयतों का योग</th></tr></thead>
<tbody>
<tr><td>1</td><td>728</td></tr>
<tr><td>2</td><td>28641041</td></tr>
<tr><td>3</td><td>20020100</td></tr>
<tr><td>…</td><td>…</td></tr>
<tr><td>114</td><td>621</td></tr>
<tr class="mm-tot"><td>कुल</td><td>4859309774 = 19x255753146</td></tr>
</tbody></table></div>
<p>अब किसी सूरा की आयतों की कुल संख्या लिखें, उसके बाद आयत-क्रमांकों का योग, और सभी संख्याओं को बाईं ओर संरेखित रखें। उदाहरण के लिए, सूरा 1 में आयतों की संख्या 7 है, और आयत-क्रमांकों का योग 28 है। इस प्रकार सूरा 1 की संयुक्त संख्या होगी 7 28, सूरा 2 के लिए 286 41041, सूरा 3 के लिए 200 20100; और इसी तरह सूरा 114 तक, जिसकी संयुक्त संख्या 6 21 है। ध्यान रखें कि ये संख्याएँ पूरी तरह बाईं ओर से लिखी जाती हैं, जैसा तालिका 28 में दिखाया गया है। फिर उन्हें सामान्य रीति से, दाएँ से बाएँ जोड़ें। इन सभी बाईं ओर संरेखित संख्याओं का कुल योग 4,859,309,774 है, अर्थात् 19 x 255753146।</p>

<div class="mm-tcap">तालिका 29: आयत-क्रमांक और आयत-क्रमांकों का योग, बाईं ओर संरेखित</div>
<div class="mm-table-wrap"><table class="mm-table">
<thead><tr><th>सूरा</th><th class="mm-wrap-cell">आयत-क्रमांक &amp; आयतों का योग</th></tr></thead>
<tbody>
<tr><td>1</td><td class="mm-wrap-cell">123456728</td></tr>
<tr><td>2</td><td class="mm-wrap-cell">1234…28641041</td></tr>
<tr><td>…</td><td class="mm-wrap-cell">…</td></tr>
<tr><td>114</td><td class="mm-wrap-cell">12345621</td></tr>
</tbody></table></div>
<p>कुल 757 अंकों का है &amp; 19 का गुणज है।</p>
<p>अंत में, ऊपर बताए अनुसार ही करें (सभी संख्याओं को बाईं ओर संरेखित रखते हुए), केवल अंतर यह कि आयतों की कुल संख्या के स्थान पर हर आयत का क्रमांक लिखें। उदाहरण के लिए, सूरा 1 की संख्या उसके सात आयत-क्रमांकों (1234567) और उन संख्याओं के योग (28) से मिलकर बनती है। इस प्रकार सूरा 1 की संयुक्त संख्या होगी 1234567 28। सूरा 114 की संयुक्त संख्या होगी 123456 21।</p>
<p>तालिका 29 इस प्रक्रिया को दर्शाती है। इन सभी बाईं ओर संरेखित संख्याओं का कुल योग 757 अंकों का है, और फिर भी 19 का गुणज है।</p>
</div>

<div class="mm-section" id="superhuman-combinations">
<h2>मानवीय सामर्थ्य से परे संख्यात्मक संयोजन</h2>
<p>आइए क़ुरआन की हर आयत का क्रमांक लिखें, और हर सूरा से पहले उस सूरा की आयतों की संख्या रखें। इस प्रकार, सूरा 1, जिसमें सात आयतें हैं, संख्या 7 1234567 से दर्शाई जाएगी। यहाँ हम आयत-क्रमांकों को एक-दूसरे के साथ लिखकर लंबी संख्याएँ बना रहे हैं। सूरा 2 को दर्शाने वाली संख्या निकालने के लिए, आप इस सूरा की आयतों की संख्या, 286, लिखें, उसके बाद हर आयत का क्रमांक, एक-दूसरे के साथ लिखा हुआ। इस प्रकार, सूरा 2 को दर्शाने वाली संख्या ऐसी दिखेगी: 286 12345….284285286। पहली दो सूराओं को दर्शाने वाली दोनों संख्याएँ हैं:</p>
<div class="mm-longnum">7 1 2 3 4 5 6 7 &amp; 286 1 2 3 4 5….284 285 286.</div>
<p>इन दोनों संख्याओं को मिलाकर पहली दो सूराओं को दर्शाने वाली एक संख्या बनाने पर, हमें यह संख्या मिलती है:</p>
<div class="mm-longnum">7 1 2 3 4 5 6 7 286 1 2 3 4 5….284 285 286.</div>
<p>यह क्रम तब तक चलाया जाता है जब तक क़ुरआन की हर आयत लिख न ली जाए, और इस तरह एक बहुत लंबी संख्या बनती है जिसमें क़ुरआन की हर आयत की संख्या समाई हुई है। पूरे क़ुरआन को दर्शाने वाली यह संख्या 19 का गुणज है &amp; 12692 अंकों की है, जो भी 19 का गुणज है।</p>
<div class="mm-longnum">7 1234567 286 12345…286 …5 12345 6 123456</div>
<p class="mm-numlabel">पहली संख्या</p>
<p>यह बहुत लंबी संख्या 12692 अंकों (19x668) की है और इसमें क़ुरआन की हर आयत शामिल है। हर सूरा की आयतों की संख्या उसकी आयतों से पहले आती है। बहुत लंबी संख्याओं को भाग देने वाले एक विशेष कंप्यूटर प्रोग्राम ने दिखाया है कि यह लंबी संख्या 19 का गुणज है।</p>

<p>हर सूरा की आयतों की कुल संख्या सूरा से पहले रखने के बजाय, आइए उसे हर सूरा के अंत में रखें। इस प्रकार, सूरा 1 को दर्शाने वाली संख्या 7 1234567 के बजाय ऐसी दिखेगी: 1234567 7। सूरा 2 को दर्शाने वाली संख्या 286 12345….284285286 के बजाय ऐसी दिखेगी: 12345….284 285 286 286। पहली दो सूराओं को दर्शाने वाली संख्याएँ ऐसी दिखेंगी:</p>
<div class="mm-longnum">1 2 3 4 5 6 7 7 &amp; 1 2 3 4 5….284 285 286 286.</div>
<p>इन दोनों संख्याओं को मिलाकर पहली दो सूराओं को दर्शाने वाली एक लंबी संख्या बनाने पर, हमें ऐसी संख्या मिलती है:</p>
<div class="mm-longnum">1 2 3 4 5 6 7 7 1 2 3 4 5….284 285 286 286.</div>
<p>चूँकि हम हर सूरा की आयतों की कुल संख्या उस सूरा के अंत में रख रहे हैं, इसलिए हमें क्रमांकित आयतों की कुल संख्या (6234) क़ुरआन के अंत में रखनी होगी। इसलिए अंतिम संख्याएँ अंतिम सूरा (123456 6) को दर्शाती हैं, उसके बाद क़ुरआन की आयतों की संख्या (6234):</p>
<div class="mm-longnum">1 2 3 4 5 6 6 &amp; 6234 &gt;&gt;&gt;&gt;&gt;&gt; 1 2 3 4 5 6 6 6234.</div>
<p>सभी सूराओं की सभी आयतों को मिलाकर एक लंबी संख्या बनती है जो 12696 अंकों की है, और 19 का गुणज है।</p>
<div class="mm-longnum">1234567 7 12345…286 286 12345 5…123456 6 6234</div>
<p class="mm-numlabel">दूसरी संख्या</p>
<p>हर सूरा की हर आयत के क्रमांक के बाद उस सूरा की आयतों की संख्या आती है। यहाँ दिखाए गए अंतिम 11 अंक अंतिम सूरा की 6 आयतें हैं, उसके बाद उसकी आयतों की संख्या (6), और उसके बाद क़ुरआन की क्रमांकित आयतों की कुल संख्या (6234)। पूरी, बहुत लंबी संख्या 19 का गुणज है।</p>

<p>अब आइए हर सूरा की संख्या भी शामिल करें। हर सूरा की हर आयत का क्रमांक लिखें, उसके बाद सूरा की संख्या, और उसके बाद उस सूरा की आयतों की संख्या। इस प्रकार, सूरा 1 को दर्शाने वाली संख्या ऐसी दिखती है: 1 2 3 4 5 6 7 1 7। सूरा 2 को दर्शाने वाली संख्या ऐसी दिखती है: 1 2 3 4 5 ….284 285 286 2 286। अंतिम सूरा (सं. 114) को दर्शाने वाली संख्या ऐसी दिखती है: 1 2 3 4 5 6 114 6। फिर से, क्रमांकित आयतों की कुल संख्या (6234) अंत में जोड़ी जाती है। पूरे क़ुरआन को दर्शाने वाली यह संख्या 19 का गुणज है; वह ऐसी दिखती है:</p>
<div class="mm-longnum">1 2 3 4 5 6 7 1 7 12345 … 286 2 286 …123456 114 6 6234</div>
<p class="mm-numlabel">तीसरी संख्या</p>
<p>हर आयत का क्रमांक, उसके बाद सूरा संख्या, फिर उस सूरा की आयतों की संख्या। क्रमांकित आयतों की कुल संख्या अंत में जोड़ी जाती है। यह लंबी संख्या (12930 अंक) 19 का गुणज है।</p>

<p>हर सूरा की आयतों की कुल संख्या सूरा के बाद रखने के बजाय, आइए अब उसे सूरा से पहले रखें। इस प्रकार, सूरा 1 को दर्शाने वाली संख्या 1234567 1 7 के बजाय ऐसी दिखती है: 7 1234567 1, और सूरा 2 को दर्शाने वाली संख्या 12345 … 284 285 286 2 286 के बजाय ऐसी दिखती है: 286 12345….284 285 286 2। पूरे क़ुरआन को दर्शाने वाली यह बहुत लंबी संख्या 19 का गुणज है।</p>
<div class="mm-longnum">7 1234567 1 286 12345…286 2…6 123456 114 6234</div>
<p class="mm-numlabel">चौथी संख्या</p>
<p>हर सूरा की आयतों की कुल संख्या के बाद हर आयत का क्रमांक, फिर सूरा संख्या आती है। ऊपर दिखाए गए अंतिम 14 अंक अंतिम सूरा की आयतों की संख्या (6) हैं, उसके बाद छह आयतों के क्रमांक (123456), उसके बाद सूरा की संख्या (114), और फिर क़ुरआन की क्रमांकित आयतों की कुल संख्या। यह बहुत लंबी संख्या (12930 अंकों की) 19 का गुणज है।</p>

<p>अब आइए हर सूरा की हर आयत का क्रमांक लिखें, और उसके बाद हर सूरा के आयत-क्रमांकों का योग। सूरा 1 में 7 आयतें हैं, और आयत-क्रमांकों का योग 1+2+3+4+5+6+7 = 28 है। इस प्रकार, सूरा 1 को दर्शाने वाली संख्या ऐसी दिखती है: 1234567 28।</p>
<p>सूरा 2 के आयत-क्रमांकों का योग 41041 है (1+2+3+… + 286)। इस प्रकार, सूरा 2 को दर्शाने वाली संख्या ऐसी दिखती है: 12345…284 285 286 41041।</p>
<p>अंतिम सूरा, जिसमें 6 आयतें हैं, को दर्शाने वाली संख्या ऐसी दिखती है: 123456 21, क्योंकि 1+2+3+4+5+6 = 21।</p>
<p>पूरे क़ुरआन को दर्शाने वाली यह पूरी संख्या 12836 अंकों की है और 19 का गुणज है। वह ऐसी दिखती है:</p>
<div class="mm-longnum">1234567 28 12345…284285286 41041…123456 21</div>
<p class="mm-numlabel">पाँचवीं संख्या</p>
<p>हर सूरा की हर आयत के क्रमांक के बाद आयत-क्रमांकों का योग आता है। यह लंबी संख्या 12836 अंकों की है, और 19 का गुणज है।</p>

<p>उल्लेखनीय रूप से, अगर हम ऊपर दिखाई गई “पाँचवीं संख्या” लें और आयत-क्रमांकों तथा आयत-क्रमांकों के योग का क्रम उलट दें, अर्थात् आयत-क्रमांकों के योग को हटाकर सूरा से पहले रख दें, तो बनने वाली लंबी संख्या फिर भी 19 का गुणज रहती है।</p>
<div class="mm-longnum">28 1234567 41041 12345….285286….21 123456</div>
<p class="mm-numlabel">छठी संख्या</p>
<p>आयत-क्रमांकों के योग को हर सूरा के बाद रखने के बजाय उससे पहले रखने पर एक लंबी संख्या (12836 अंक) बनती है जो भी 19 का गुणज है।</p>

<p>यहाँ तक कि सूराओं को उल्टा लिखने पर भी, अर्थात् सूराओं का क्रम उलटकर अंतिम सूरा से शुरू कर पहली सूरा पर समाप्त करने पर, और हर सूरा की आयतों के बाद आयत-क्रमांकों का योग रखने पर, परिणाम फिर भी 19 का गुणज है।</p>
<div class="mm-longnum">123456 21 12345 15….12345…286 41041 1234567 28</div>
<p class="mm-numlabel">सातवीं संख्या</p>
<p>सूराओं का क्रम उलटकर — अंतिम सूरा से शुरू कर पहली सूरा पर समाप्त करते हुए — और हर आयत का क्रमांक लिखते हुए, हर सूरा की आयतों के बाद उसके आयत-क्रमांकों का योग रखने पर, परिणाम 12836 अंकों की एक लंबी संख्या है। यह लंबी संख्या 19 का गुणज है।</p>

<p>पूरे क़ुरआन के आयत-क्रमांकों का योग (333410) लिखें, उसके बाद क़ुरआन की क्रमांकित आयतों की कुल संख्या (6234), फिर सूराओं की संख्या (114)। इसके बाद हर सूरा उसकी संख्या और उसकी आयतों की संख्या से दर्शाई जाती है। सूरा 1 और 2 को दर्शाने वाली संख्याएँ हैं 1 7 और 2 286। क़ुरआन की सभी सूराओं को समेटने वाली यह पूरी संख्या 474 अंकों की है, और 19 का गुणज है — वह ऐसी दिखती है:</p>
<div class="mm-longnum">333410 6234 114 1 7 2 286 3 200 .. 113 5 114 6</div>
<p class="mm-numlabel">आठवीं संख्या</p>
<p>आयत-क्रमांकों के महायोग (333410) के बाद क्रमांकित आयतों की कुल संख्या (6234), सूराओं की संख्या (114), फिर हर सूरा की संख्या और उसकी आयतों की संख्या आती है।</p>

<p>अब आइए “आठवीं संख्या” में प्रस्तुत सूरा संख्या और उसकी आयतों की संख्या का क्रम उलट दें। इस प्रकार, पहली दो सूराओं को दर्शाने वाली संख्याएँ 1 7 &amp; 2 286 के बजाय ऐसी दिखती हैं: 7 1 &amp; 286 2। यह पूरी संख्या भी 474 अंकों की है और फिर भी 19 का गुणज है। वह ऐसी दिखती है:</p>
<div class="mm-longnum">333410 6234 114 7 1 286 2 200 3 … 5 113 6 114</div>
<p class="mm-numlabel">नवीं संख्या</p>
<p>सूरा संख्या और आयतों की संख्या का क्रम उलटने पर भी हमें एक लंबी संख्या मिलती है जो 19 का गुणज है।</p>

<p>अगर हम सूरा 1 के आयत-क्रमांकों का योग (28) लिखें, उसके बाद सूरा 2 के आयत-क्रमांकों का योग (41041), और इसी तरह क़ुरआन के अंत तक, और आयत-क्रमांकों का महायोग (333410) अंत में रखें, तो बनने वाली लंबी संख्या (दसवीं संख्या) 377 अंकों की है, और 19 का गुणज है।</p>
<div class="mm-longnum">28 41041 20100 ..... 15 21 333410</div>
<p class="mm-numlabel">दसवीं संख्या</p>
<p>क़ुरआन की हर सूरा के आयत-क्रमांकों के योग एक-दूसरे के साथ लिखे जाते हैं, और अंत में आयत-क्रमांकों का महायोग (333410) आता है। यह लंबी संख्या (377 अंक) 19 का गुणज है।</p>

<p>अगर हम क़ुरआन की सूराओं की संख्या (114) लिखें, उसके बाद क्रमांकित आयतों की कुल संख्या (6234), उसके बाद हर सूरा की संख्या और उसके आयत-क्रमांकों का योग, तो अंतिम लंबी संख्या (612 अंक) 19 का गुणज है।</p>
<div class="mm-longnum">114 6234 1 28 2 41041 3 20100 .... 113 15 114 21</div>
<p class="mm-numlabel">ग्यारहवीं संख्या</p>
<p>सूराओं की संख्या, उसके बाद क्रमांकित आयतों की कुल संख्या, फिर हर सूरा की संख्या और उसके आयत-क्रमांकों का योग — ये मिलकर यह लंबी संख्या (612 अंक) बनाते हैं जो 19 का गुणज है।</p>

<p>कहीं कोई यह न सोच ले कि क़ुरआन का कोई मापदंड इस विस्मयकारी गणितीय कोड से असुरक्षित छूट गया है, आइए और मापदंड देखें।</p>
<p>अगर हम सूराओं की संख्या (114) लिखें, उसके बाद क्रमांकित आयतों की कुल संख्या, उसके बाद पूरे क़ुरआन के आयत-क्रमांकों का महायोग (333410), उसके बाद हर सूरा और उसकी आयतों की संख्याएँ, तो हमें एक बहुत लंबी संख्या (12712 अंक) मिलती है जो 19 का गुणज है।</p>
<div class="mm-longnum">114 6234 333410 1 1 2 3 4 5 6 7..............114 1 2 3 4 5 6</div>
<p class="mm-numlabel">बारहवीं संख्या</p>

<p>अगर हम हर सूरा की आयतों की संख्याएँ एक-दूसरे के साथ लिखें, तो हमें 235 अंकों की एक संख्या मिलती है जो 19 का गुणज है। ऐसा करने के लिए, क़ुरआन की क्रमांकित आयतों की कुल संख्या (6234) लिखें, उसके बाद हर सूरा की आयतों की संख्या, फिर अंत में क़ुरआन की क्रमांकित आयतों की कुल संख्या रखें। अंतिम लंबी संख्या ऐसी दिखती है:</p>
<div class="mm-longnum">6234 7 286 200 176 ..... 127 ..... 5 4 5 6 6234 (कुल आयतें) (पहली 4 सूराएँ) (सूरा 9) (अंतिम 4 सूराएँ) (कुल आयतें)</div>
<p class="mm-numlabel">तेरहवीं संख्या</p>

<p>अगर हम क़ुरआन की क्रमांकित आयतों की संख्या (6234) लिखें, उसके बाद सूराओं की संख्या (114), उसके बाद हर सूरा की हर आयत का क्रमांक, फिर अंत में क़ुरआन की क्रमांकित आयतों की संख्या (6234) और सूराओं की संख्या (114) रखें, तो अंतिम संख्या 12479 अंकों की है, और 19 का गुणज है।</p>
<div class="mm-longnum">6234 114 1234567 12345.........286.............123456 6234 114</div>
<p class="mm-numlabel">चौदहवीं संख्या</p>

<p>12774 अंकों की एक और लंबी संख्या इस तरह बनती है: हर सूरा की हर आयत का क्रमांक लिखें, उसके बाद हर सूरा की संख्या में उसकी आयतों की संख्या जोड़कर रखें। सूरा 1 में 7 आयतें हैं, और 1+7 का कुल 8 है। इसलिए सूरा 1 को दर्शाने वाली संख्या ऐसी दिखती है: 1234567 8। चूँकि सूरा 2 में 286 आयतें हैं, सूरा 2 को दर्शाने वाली संख्या ऐसी दिखती है: 12345…286 288। यह क़ुरआन की हर सूरा के लिए किया जाता है। अंतिम संयुक्त संख्या 12774 अंकों की है, और 19 का गुणज है।</p>
<div class="mm-longnum">1234567   8   12345....286   288   ..........   123456   120
    (1+7)              (2+286)                              (114+6)</div>
<p class="mm-numlabel">पंद्रहवीं संख्या</p>

<p>और विशेष विशेषताएँ परिशिष्ट 2, 9, 19, 24, 25, 26, 29 और 37 में हैं।</p>
</div>

<div class="mm-section" id="witness">
<h2>बनी इसराईल में से एक गवाह [46:10]</h2>
<div class="mm-quote">Proclaim: “What if it is from God, and you disbelieved in it? A witness from the Children of Israel has borne witness to a similar phenomenon, and he has believed, while you have turned too arrogant to believe. God does not guide the wicked.” — इस आयत का हिन्दी अनुवाद जल्द उपलब्ध होगा, इन्शा अल्लाह।<cite>क़ुरआन 46:10</cite></div>
<p>निम्नलिखित उद्धरण STUDIES IN JEWISH MYSTICIM (एसोसिएशन फ़ॉर ज्यूइश स्टडीज़, कैम्ब्रिज, मैसाचुसेट्स, जोसेफ़ डैन &amp; फ़्रैंक टालमेज, संपादक, पृष्ठ 88, 1982) से लिया गया है। यह उद्धरण रब्बी यहूदा द पायस (12वीं सदी ईस्वी) के कार्य की ओर इशारा करता है:</p>
<div class="mm-callout"><p>“फ़्रांस के लोगों [यहूदियों] ने यह रिवाज बना लिया कि वे [सुबह की प्रार्थना में] ये शब्द जोड़ दें: ‘`अशरेइ तेमिमेइ देरेख़ [धन्य हैं वे जो धर्म के मार्ग पर चलते हैं],’ और हमारे रब्बी, द पायस, जिनकी स्मृति धन्य हो, ने लिखा कि वे पूरी तरह और सरासर ग़लत थे। यह सब घोर असत्य है, क्योंकि [सुबह की प्रार्थना के उस भाग में] पवित्र नाम का उल्लेख केवल उन्नीस बार है… और इसी तरह आप पाते हैं कि शब्द `एलोहीम वे-’एल्लेह शेमोत के अनुच्छेद में उन्नीस बार आता है…। इसी तरह, आप पाते हैं कि इसराईल को ‘पुत्र’ उन्नीस बार कहा गया है, और ऐसे और भी कई उदाहरण हैं। उन्नीस के ये सभी समूह आपस में बारीकी से गुँथे हुए हैं, और उनमें बहुत-से भेद और गूढ़ अर्थ छिपे हैं, जो आठ से अधिक बड़े ग्रंथों में समाए हुए हैं… इसके अलावा, इस भाग में 152 (19x8) शब्द हैं।”</p></div>

<p class="mm-back"><a href="#top">↑ विषय-सूची पर वापस</a></p>
</div>

</div>
</article>

<?php get_footer(); ?>
