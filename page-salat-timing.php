<?php
/**
 * नमाज़ और रमज़ान का समय (Salat & Ramadan Timing) — Hindi port of — Hindi port of
 * godalone.in's /salat-timing/ page. User enters a place name, we geocode
 * it (Open-Meteo Geocoding API, free/no-key/CORS-enabled) to get
 * latitude/longitude/timezone, then compute the five daily prayer times
 * using standard solar-position astronomical formulas (equation of time +
 * solar declination, per Jean Meeus' published algorithms) entirely
 * client-side — the exact same math already verified live on godalone.in.
 * Local wall-clock conversion is done via the browser's own Intl/timezone
 * database (no manual UTC-offset guessing), so it is automatically correct
 * for daylight-saving in every timezone.
 * Fully self-contained: markup + scoped <style> + inline <script>, matching
 * this theme's convention for page-specific interactive templates.
 */
if (!defined('ABSPATH')) exit;
get_header();
?>
<div class="page-hero">
  <div class="wrap">
    <div class="crumb">EkKhuda.org</div>
    <h1 class="reveal">🕌 नमाज़ और रमज़ान का समय</h1>
    <p class="reveal st-sub">धरती के किसी भी स्थान के लिए सटीक नमाज़ के समय — नीचे अपना शहर लिखें।</p>
  </div>
</div>

<section class="blk st-sec">
  <div class="wrap">

    <div class="st-card reveal">
      <label class="st-label" for="stPlace">स्थान का नाम लिखें</label>
      <div class="st-inputwrap">
        <input type="text" id="stPlace" class="st-input" placeholder="जैसे: चेन्नई, मक्का, लंदन..." autocomplete="off" />
      </div>
      <div class="st-btnrow">
        <button type="button" id="stFind" class="btn btn-gold">🔍 नमाज़ का समय खोजें</button>
        <button type="button" id="stLocate" class="btn btn-ghost">📍 मेरा वर्तमान स्थान इस्तेमाल करें</button>
      </div>
      <div id="stMsg" class="st-msg" hidden></div>
      <div id="stSuggestions" class="st-suggestions" hidden></div>
    </div>

    <div id="stResults" class="st-results" hidden>

      <div class="st-place-line reveal">
        <div class="st-place-name" id="stPlaceName">—</div>
        <div class="st-place-meta" id="stPlaceMeta">—</div>
        <div class="st-date-line" id="stDateLine">—</div>
      </div>

      <div class="st-next reveal" id="stNext">
        <div class="st-next-label">अगली नमाज़</div>
        <div class="st-next-name" id="stNextName">—</div>
        <div class="st-next-count" id="stNextCount">—</div>
      </div>

      <div class="grid st-grid reveal" id="stGrid">
        <div class="card st-time" data-key="fajr">
          <div class="st-time-icon">🌄</div>
          <div class="st-time-name">फ़ज्र</div>
          <div class="st-time-val" data-val="fajr">—</div>
          <div class="st-time-tag">सहरी का अंत</div>
        </div>
        <div class="card st-time" data-key="sunrise">
          <div class="st-time-icon">🌅</div>
          <div class="st-time-name">सूर्योदय</div>
          <div class="st-time-val" data-val="sunrise">—</div>
          <div class="st-time-tag st-time-tag-muted">नमाज़ का समय नहीं</div>
        </div>
        <div class="card st-time" data-key="dhuhr">
          <div class="st-time-icon">☀️</div>
          <div class="st-time-name">ज़ुहर</div>
          <div class="st-time-val" data-val="dhuhr">—</div>
        </div>
        <div class="card st-time" data-key="asr">
          <div class="st-time-icon">🌤️</div>
          <div class="st-time-name">अस्र</div>
          <div class="st-time-val" data-val="asr">—</div>
        </div>
        <div class="card st-time" data-key="maghrib">
          <div class="st-time-icon">🌇</div>
          <div class="st-time-name">मग़रिब</div>
          <div class="st-time-val" data-val="maghrib">—</div>
          <div class="st-time-tag">इफ़्तार का समय</div>
        </div>
        <div class="card st-time" data-key="isha">
          <div class="st-time-icon">🌙</div>
          <div class="st-time-name">इशा</div>
          <div class="st-time-val" data-val="isha">—</div>
        </div>
      </div>

    </div>

  </div>
</section>

<section class="blk st-rc-sec">
  <div class="wrap">
    <a href="<?php echo esc_url(home_url('/ramadan-calculator')); ?>" class="st-rc-card reveal">
      <div class="st-rc-icon">🌙</div>
      <div class="st-rc-text">
        <div class="st-rc-title">रमज़ान कैलकुलेटर</div>
        <div class="st-rc-sub">इस साल का रमज़ान — पहला और आख़िरी रोज़ा, 10 बरकत वाली रातें और क़द्र की रात — आपके स्थान के हिसाब से निकाले जाएँगे।</div>
      </div>
      <div class="st-rc-arrow">→</div>
    </a>
  </div>
</section>

<div class="verse">
  <div class="q">&#8220;</div>
  <blockquote>बेशक अल्लाह के नज़दीक जो दीन है वह इस्लाम है। और अहले किताब ने अपने पास इल्म आ जाने के बाद जो इख्तिलाफ किया वोह सिर्फ आपस की जिद, ईर्ष्या (और नफरत) की वजह से था। और जो लोग अल्लाह की आयातो (और हुक्मों) का इन्कार करें तो वह जान लें की अल्लाह बहुत जल्द हिसाब लेने वाला है।</blockquote>
  <cite>क़ुरआन 3:19</cite>
</div>

<p class="st-disclaimer">नोट: इस पेज पर दिए गए नमाज़ के समय आपके लिखे हुए स्थान के निर्देशांकों से मानक खगोलीय सूत्रों (सूर्य की स्थिति, समय-समीकरण) के आधार पर अपने-आप निकाले जाते हैं — किसी स्थानीय प्राधिकरण या चाँद देखने के आधार पर नहीं। ऊँचाई, गणना-विधि या स्थानीय रिवाज के कारण असली समय आपकी स्थानीय मस्जिद की तालिका से कुछ मिनट अलग हो सकता है — जहाँ सटीकता ज़रूरी हो, वहाँ स्थानीय स्तर पर जाँच लें और अपने विवेक का प्रयोग करें; ख़ासकर बहुत ऊँचे अक्षांशों के पास साल के कुछ हिस्सों में कुछ नमाज़ों के समय खगोलीय रूप से तय ही नहीं होते। दिखाई गई हिजरी तारीख़ केवल गणना (तालिका) पर आधारित अनुमान है — आपके स्थानीय चाँद देखने पर आधारित इस्लामी कैलेंडर से एक या दो दिन अलग हो सकती है।</p>

<style>
.st-sub{max-width:640px;margin:14px auto 0;color:var(--ink-soft);font-size:clamp(15px,2vw,17.5px)}
.st-sec{padding-top:56px}

.st-card{max-width:640px;margin:0 auto 32px;padding:32px 30px;border-radius:var(--radius-lg);
  background:linear-gradient(180deg,var(--panel),var(--panel-2));border:1px solid var(--line);box-shadow:var(--shadow-sm)}
.st-label{display:block;font-family:var(--font-display);font-size:14px;letter-spacing:.04em;
  text-transform:uppercase;color:var(--muted);margin-bottom:10px}
.st-inputwrap{margin-bottom:16px}
.st-input{width:100%;box-sizing:border-box;padding:14px 16px;border-radius:12px;border:1px solid var(--line);
  background:var(--bg-3);color:var(--ink);font-size:16px;font-family:var(--font-body)}
.st-input:focus{outline:2px solid var(--gold);outline-offset:1px}
.st-input.err{animation:stshake .35s}
@keyframes stshake{0%,100%{transform:translateX(0)}25%{transform:translateX(-6px)}75%{transform:translateX(6px)}}
.st-btnrow{display:flex;gap:12px;flex-wrap:wrap}
.st-btnrow .btn{flex:1 1 200px}
.st-msg{margin-top:14px;padding:12px 14px;border-radius:10px;font-size:14.5px;
  background:rgba(248,113,113,.1);border:1px solid rgba(248,113,113,.35);color:#f87171}
.st-msg.st-msg-loading{background:rgba(229,185,78,.1);border-color:rgba(229,185,78,.35);color:var(--ink-soft)}
.st-suggestions{margin-top:14px;display:flex;flex-direction:column;gap:8px}
.st-suggestion{display:block;width:100%;text-align:left;padding:12px 14px;border-radius:10px;
  border:1px solid var(--line);background:var(--bg-3);color:var(--ink);font-family:var(--font-body);
  font-size:15px;cursor:pointer;transition:border-color .15s ease,background .15s ease}
.st-suggestion:hover{border-color:var(--gold);background:var(--panel-2)}
.st-suggestion small{display:block;margin-top:3px;color:var(--muted);font-size:12.5px}

.st-results{max-width:900px;margin:0 auto}
.st-place-line{text-align:center;margin-bottom:22px}
.st-place-name{font-family:var(--font-display);font-size:22px;color:var(--ink)}
.st-place-meta{margin-top:4px;color:var(--muted);font-size:14px}
.st-date-line{margin-top:6px;color:var(--ink-soft);font-size:14.5px}

.st-next{max-width:420px;margin:0 auto 28px;text-align:center;padding:20px 24px;border-radius:var(--radius-lg);
  background:linear-gradient(135deg,rgba(212,175,55,.18),rgba(212,175,55,.06) 60%,var(--panel));
  border:1px solid rgba(212,175,55,.4);box-shadow:var(--shadow-sm)}
.st-next-label{font-family:var(--font-display);font-size:12.5px;letter-spacing:.05em;text-transform:uppercase;color:var(--muted)}
.st-next-name{margin-top:6px;font-family:var(--font-display);font-size:24px;color:var(--gold-bright)}
.st-next-count{margin-top:4px;color:var(--ink-soft);font-size:14.5px}

.st-grid{grid-template-columns:repeat(6,1fr);gap:14px}
@media (max-width:900px){.st-grid{grid-template-columns:repeat(3,1fr)}}
@media (max-width:560px){.st-grid{grid-template-columns:repeat(2,1fr)}}
.st-time{text-align:center;padding:20px 10px;transition:transform .2s ease,box-shadow .2s ease,border-color .2s ease}
.st-time.active{border-color:var(--gold);box-shadow:0 10px 26px -12px rgba(212,175,55,.5);transform:translateY(-2px)}
.st-time-icon{font-size:26px;margin-bottom:8px}
.st-time-name{font-family:var(--font-display);font-size:13.5px;letter-spacing:.03em;color:var(--muted);text-transform:uppercase}
.st-time-val{margin-top:6px;font-family:var(--font-display);font-size:18px;color:var(--ink)}
.st-time-tag{margin-top:6px;font-size:11.5px;color:var(--gold-bright);letter-spacing:.02em}
.st-time-tag-muted{color:var(--muted)}

.st-rc-sec{padding-top:8px}
.st-rc-card{max-width:640px;margin:0 auto;display:flex;align-items:center;gap:20px;padding:26px 28px;
  border-radius:var(--radius-lg);text-decoration:none;
  background:linear-gradient(135deg,rgba(229,185,78,.22),rgba(154,106,20,.12) 60%,var(--panel));
  border:1px solid rgba(229,185,78,.4);box-shadow:var(--shadow-sm);
  transition:transform .2s ease,box-shadow .2s ease,border-color .2s ease}
.st-rc-card:hover{transform:translateY(-2px);box-shadow:0 14px 34px -12px rgba(229,185,78,.45);border-color:var(--gold)}
.st-rc-icon{flex:0 0 auto;width:58px;height:58px;border-radius:50%;display:grid;place-items:center;
  font-size:28px;background:radial-gradient(circle at 32% 28%,var(--gold-bright),var(--gold-deep));
  box-shadow:0 0 0 4px rgba(229,185,78,.15)}
.st-rc-text{flex:1 1 auto;min-width:0}
.st-rc-title{font-family:var(--font-display);font-size:18px;color:var(--ink)}
.st-rc-sub{margin-top:4px;color:var(--ink-soft);font-size:14px;line-height:1.5}
.st-rc-arrow{flex:0 0 auto;font-size:22px;color:var(--gold);transition:transform .2s ease}
.st-rc-card:hover .st-rc-arrow{transform:translateX(5px)}

.st-disclaimer{max-width:760px;margin:28px auto 0;padding:0 16px;font-size:12px;color:var(--muted);
  text-align:center;line-height:1.6}
</style>

<script>
(function () {
  "use strict";

  // ---------- Solar-position prayer-time math (all internal times are UT decimal hours) ----------
  // Identical, verified logic already live on godalone.in/salat-timing/ — only the
  // visible UI strings below are translated into Tamil.

  function deg2rad(d) { return d * Math.PI / 180; }
  function rad2deg(r) { return r * 180 / Math.PI; }
  function norm360(x) { x = x % 360; return x < 0 ? x + 360 : x; }

  function julianDay(y, m, d) {
    if (m <= 2) { y -= 1; m += 12; }
    var A = Math.floor(y / 100);
    var B = 2 - A + Math.floor(A / 4);
    return Math.floor(365.25 * (y + 4716)) + Math.floor(30.6001 * (m + 1)) + d + B - 1524.5;
  }

  function sunPosition(jd) {
    var T = (jd - 2451545.0) / 36525.0;
    var L0 = norm360(280.46646 + 36000.76983 * T + 0.0003032 * T * T);
    var M = norm360(357.52911 + 35999.05029 * T - 0.0001537 * T * T);
    var e = 0.016708634 - 0.000042037 * T - 0.0000001267 * T * T;
    var Mrad = deg2rad(M);
    var C = (1.914602 - 0.004817 * T - 0.000014 * T * T) * Math.sin(Mrad)
          + (0.019993 - 0.000101 * T) * Math.sin(2 * Mrad)
          + 0.000289 * Math.sin(3 * Mrad);
    var trueLong = L0 + C;
    var omega = 125.04 - 1934.136 * T;
    var appLong = trueLong - 0.00569 - 0.00478 * Math.sin(deg2rad(omega));
    var eps0 = 23 + (26 + (21.448 - T * (46.815 + T * (0.00059 - T * 0.001813))) / 60) / 60;
    var eps = eps0 + 0.00256 * Math.cos(deg2rad(omega));
    var decl = rad2deg(Math.asin(Math.sin(deg2rad(eps)) * Math.sin(deg2rad(appLong))));
    var y = Math.pow(Math.tan(deg2rad(eps) / 2), 2);
    var eqTimeMin = 4 * rad2deg(
      y * Math.sin(2 * deg2rad(L0))
      - 2 * e * Math.sin(Mrad)
      + 4 * e * y * Math.sin(Mrad) * Math.cos(2 * deg2rad(L0))
      - 0.5 * y * y * Math.sin(4 * deg2rad(L0))
      - 1.25 * e * e * Math.sin(2 * Mrad)
    );
    return { decl: decl, eqTimeMin: eqTimeMin };
  }

  function hourAngle(lat, decl, angle) {
    var latR = deg2rad(lat), declR = deg2rad(decl);
    var cosH = (-Math.sin(deg2rad(angle)) - Math.sin(latR) * Math.sin(declR)) / (Math.cos(latR) * Math.cos(declR));
    if (cosH < -1 || cosH > 1 || isNaN(cosH)) return null;
    return rad2deg(Math.acos(cosH));
  }

  function asrHourAngle(lat, decl, factor) {
    var latR = deg2rad(lat), declR = deg2rad(decl);
    var altitude = Math.atan(1 / (factor + Math.tan(Math.abs(latR - declR))));
    var cosH = (Math.sin(altitude) - Math.sin(latR) * Math.sin(declR)) / (Math.cos(latR) * Math.cos(declR));
    if (cosH < -1 || cosH > 1 || isNaN(cosH)) return null;
    return rad2deg(Math.acos(cosH));
  }

  function computePrayerTimesUT(y, m, d, lat, lng, method, asrFactor) {
    var jd = julianDay(y, m, d) + 0.5 - lng / 360;
    var pos = sunPosition(jd);
    var decl = pos.decl, eqTimeMin = pos.eqTimeMin;
    var solarNoonUT = 12 - lng / 15 - eqTimeMin / 60;

    var fajrHA = hourAngle(lat, decl, method.fajr);
    var sunHA = hourAngle(lat, decl, 0.833);
    var asrHA = asrHourAngle(lat, decl, asrFactor);

    var out = {
      fajr: fajrHA === null ? null : solarNoonUT - fajrHA / 15,
      sunrise: sunHA === null ? null : solarNoonUT - sunHA / 15,
      dhuhr: solarNoonUT,
      asr: asrHA === null ? null : solarNoonUT + asrHA / 15,
      maghrib: sunHA === null ? null : solarNoonUT + sunHA / 15,
      isha: null
    };

    if (out.maghrib !== null && method.ishaInterval) {
      out.isha = out.maghrib + method.ishaInterval / 60;
    } else if (method.isha !== null && method.isha !== undefined) {
      var ishaHA = hourAngle(lat, decl, method.isha);
      out.isha = ishaHA === null ? null : solarNoonUT + ishaHA / 15;
    }
    return out;
  }

  var METHODS = {
    mwl:     { fajr: 18,   isha: 17,   ishaInterval: null },
    isna:    { fajr: 15,   isha: 15,   ishaInterval: null },
    egypt:   { fajr: 19.5, isha: 17.5, ishaInterval: null },
    karachi: { fajr: 18,   isha: 18,   ishaInterval: null },
    makkah:  { fajr: 18.5, isha: null, ishaInterval: 90 }
  };

  // ---------- Approximate (tabular/calculated) Hijri date — for reference only ----------

  var HIJRI_MONTHS = ["मुहर्रम","सफ़र","रबीउल अव्वल","रबीउल आख़िर","जुमादल ऊला",
    "जुमादल आख़िरा","रजब","शअबान","रमज़ान","शव्वाल","ज़ुल क़अदा","ज़ुल हिज्जा"];

  function gregorianToHijri(y, m, d) {
    var jd = julianDay(y, m, d);
    var jdn = Math.floor(jd + 0.5);
    var l = jdn - 1948440 + 10632;
    var n = Math.floor((l - 1) / 10631);
    l = l - 10631 * n + 354;
    var j = Math.floor((10985 - l) / 5316) * Math.floor((50 * l) / 17719) + Math.floor(l / 5670) * Math.floor((43 * l) / 15238);
    l = l - Math.floor((30 - j) / 15) * Math.floor((17719 * j) / 50) - Math.floor(j / 16) * Math.floor((15238 * j) / 43) + 29;
    var month = Math.floor((24 * l) / 709);
    var day = l - Math.floor((709 * month) / 24);
    var year = 30 * n + j - 30;
    return { year: year, month: month, day: day };
  }

  // ---------- Timezone-aware helpers ----------

  function nowInZone(tz) {
    var fmt = new Intl.DateTimeFormat("en-US", {
      timeZone: tz, year: "numeric", month: "2-digit", day: "2-digit",
      hour: "2-digit", minute: "2-digit", second: "2-digit", hour12: false
    });
    var parts = {};
    fmt.formatToParts(new Date()).forEach(function (p) { parts[p.type] = p.value; });
    return {
      y: parseInt(parts.year, 10), m: parseInt(parts.month, 10), d: parseInt(parts.day, 10),
      h: parseInt(parts.hour === "24" ? "0" : parts.hour, 10),
      min: parseInt(parts.minute, 10), s: parseInt(parts.second, 10)
    };
  }

  function utHourToDate(y, m, d, utHours) {
    return new Date(Date.UTC(y, m - 1, d, 0, 0, 0) + utHours * 3600 * 1000);
  }

  function formatLocalTime(date, tz) {
    return new Intl.DateTimeFormat("en-US", { timeZone: tz, hour: "numeric", minute: "2-digit", hour12: true }).format(date);
  }

  // ---------- UI wiring ----------

  var placeInput = document.getElementById("stPlace");
  var findBtn = document.getElementById("stFind");
  var locateBtn = document.getElementById("stLocate");
  var msgBox = document.getElementById("stMsg");
  var suggestBox = document.getElementById("stSuggestions");
  var resultsBox = document.getElementById("stResults");
  var placeNameEl = document.getElementById("stPlaceName");
  var placeMetaEl = document.getElementById("stPlaceMeta");
  var dateLineEl = document.getElementById("stDateLine");
  var nextNameEl = document.getElementById("stNextName");
  var nextCountEl = document.getElementById("stNextCount");

  var current = null; // {lat, lng, tz, label}
  var timesUT = null;
  var timesDate = null; // {y,m,d} used for the computation
  var countdownTimer = null;

  function showMsg(text, loading) {
    msgBox.hidden = false;
    msgBox.textContent = text;
    msgBox.classList.toggle("st-msg-loading", !!loading);
  }
  function hideMsg() { msgBox.hidden = true; }
  function hideSuggestions() { suggestBox.hidden = true; suggestBox.innerHTML = ""; }

  function saveLast(place) {
    try { localStorage.setItem("st_last_place_km", JSON.stringify(place)); } catch (e) {}
  }
  function loadLast() {
    try {
      var raw = localStorage.getItem("st_last_place_km");
      return raw ? JSON.parse(raw) : null;
    } catch (e) { return null; }
  }

  async function geocode(query) {
    var url = "https://geocoding-api.open-meteo.com/v1/search?name=" + encodeURIComponent(query) + "&count=6&language=en&format=json";
    var res = await fetch(url);
    if (!res.ok) throw new Error("network");
    var data = await res.json();
    return (data && data.results) ? data.results : [];
  }

  function resultLabel(r) {
    var bits = [r.name];
    if (r.admin1 && r.admin1 !== r.name) bits.push(r.admin1);
    if (r.country) bits.push(r.country);
    return bits.join(", ");
  }

  function pickPlace(r) {
    hideSuggestions();
    hideMsg();
    var place = { lat: r.latitude, lng: r.longitude, tz: r.timezone || "UTC", label: resultLabel(r) };
    current = place;
    saveLast(place);
    placeInput.value = r.name;
    render();
  }

  async function handleFind() {
    var q = placeInput.value.trim();
    if (!q) {
      placeInput.classList.remove("err"); void placeInput.offsetWidth; placeInput.classList.add("err");
      placeInput.focus();
      setTimeout(function () { placeInput.classList.remove("err"); }, 350);
      return;
    }
    hideSuggestions();
    showMsg("“" + q + "” को खोजा जा रहा है…", true);
    try {
      var results = await geocode(q);
      if (!results.length) {
        showMsg("स्थान नहीं मिला। कोई और वर्तनी आज़माएँ, या देश भी जोड़ें (जैसे “Springfield, USA”)।");
        return;
      }
      hideMsg();
      if (results.length === 1) {
        pickPlace(results[0]);
      } else {
        suggestBox.hidden = false;
        suggestBox.innerHTML = "";
        results.forEach(function (r) {
          var btn = document.createElement("button");
          btn.type = "button";
          btn.className = "st-suggestion";
          btn.innerHTML = resultLabel(r) + "<small>" + r.latitude.toFixed(2) + "°, " + r.longitude.toFixed(2) + "° · " + (r.timezone || "") + "</small>";
          btn.addEventListener("click", function () { pickPlace(r); });
          suggestBox.appendChild(btn);
        });
      }
    } catch (e) {
      showMsg("स्थान खोजने की सेवा तक पहुँच नहीं हो सकी। अपना इंटरनेट जाँचकर फिर कोशिश करें।");
    }
  }

  function handleLocate() {
    if (!navigator.geolocation) {
      showMsg("आपका ब्राउज़र स्थान की खोज का समर्थन नहीं करता — कृपया किसी स्थान का नाम लिखें।");
      return;
    }
    showMsg("आपका वर्तमान स्थान प्राप्त किया जा रहा है…", true);
    navigator.geolocation.getCurrentPosition(function (pos) {
      hideMsg();
      var tz = Intl.DateTimeFormat().resolvedOptions().timeZone || "UTC";
      var place = { lat: pos.coords.latitude, lng: pos.coords.longitude, tz: tz, label: "आपका वर्तमान स्थान" };
      current = place;
      saveLast(place);
      placeInput.value = "";
      render();
    }, function () {
      showMsg("आपका स्थान प्राप्त नहीं हो सका — स्थान की अनुमति दें, या किसी स्थान का नाम लिखें।");
    }, { timeout: 10000 });
  }

  function render() {
    if (!current) return;
    var zoned = nowInZone(current.tz);
    timesDate = { y: zoned.y, m: zoned.m, d: zoned.d };
    timesUT = computePrayerTimesUT(zoned.y, zoned.m, zoned.d, current.lat, current.lng, METHODS.mwl, 1);

    placeNameEl.textContent = "📍 " + current.label;
    placeMetaEl.textContent = current.lat.toFixed(3) + "°, " + current.lng.toFixed(3) + "° · " + (current.tz || "");

    var hijri = gregorianToHijri(zoned.y, zoned.m, zoned.d);
    var gregDate = new Date(Date.UTC(zoned.y, zoned.m - 1, zoned.d));
    var gregStr = new Intl.DateTimeFormat("en-US", { timeZone: "UTC", weekday: "long", year: "numeric", month: "long", day: "numeric" }).format(gregDate);
    dateLineEl.textContent = gregStr + "  ·  " + hijri.day + " " + HIJRI_MONTHS[hijri.month - 1] + " " + hijri.year + " AH (गणना आधारित)";

    var keys = ["fajr", "sunrise", "dhuhr", "asr", "maghrib", "isha"];
    keys.forEach(function (k) {
      var el = document.querySelector('[data-val="' + k + '"]');
      var ut = timesUT[k];
      if (ut === null || ut === undefined) {
        el.textContent = "—";
      } else {
        el.textContent = formatLocalTime(utHourToDate(zoned.y, zoned.m, zoned.d, ut), current.tz);
      }
    });

    resultsBox.hidden = false;
    updateCountdown();
    if (countdownTimer) clearInterval(countdownTimer);
    countdownTimer = setInterval(updateCountdown, 1000);
  }

  function updateCountdown() {
    if (!timesUT || !timesDate || !current) return;
    var keys = ["fajr", "sunrise", "dhuhr", "asr", "maghrib", "isha"];
    var now = new Date();
    var upcoming = null, upcomingKey = null;
    var todayDates = {};
    keys.forEach(function (k) {
      if (timesUT[k] !== null && timesUT[k] !== undefined) {
        todayDates[k] = utHourToDate(timesDate.y, timesDate.m, timesDate.d, timesUT[k]);
      }
    });
    for (var i = 0; i < keys.length; i++) {
      var k = keys[i];
      if (todayDates[k] && todayDates[k].getTime() > now.getTime()) { upcoming = todayDates[k]; upcomingKey = k; break; }
    }
    if (!upcoming) {
      // all of today's times have passed — show tomorrow's Fajr
      var tmrw = new Date(Date.UTC(timesDate.y, timesDate.m - 1, timesDate.d + 1));
      var nextDay = { y: tmrw.getUTCFullYear(), m: tmrw.getUTCMonth() + 1, d: tmrw.getUTCDate() };
      var t2 = computePrayerTimesUT(nextDay.y, nextDay.m, nextDay.d, current.lat, current.lng, METHODS.mwl, 1);
      if (t2.fajr !== null) {
        upcoming = utHourToDate(nextDay.y, nextDay.m, nextDay.d, t2.fajr);
        upcomingKey = "fajr";
      }
    }
    var names = { fajr: "फ़ज्र", sunrise: "सूर्योदय", dhuhr: "ज़ुहर", asr: "अस्र", maghrib: "मग़रिब", isha: "इशा" };
    document.querySelectorAll(".st-time").forEach(function (card) {
      card.classList.toggle("active", card.getAttribute("data-key") === upcomingKey);
    });
    if (upcoming && upcomingKey) {
      nextNameEl.textContent = names[upcomingKey] + " · " + formatLocalTime(upcoming, current.tz);
      var diff = Math.max(0, upcoming.getTime() - now.getTime());
      var h = Math.floor(diff / 3600000);
      var m = Math.floor((diff % 3600000) / 60000);
      var s = Math.floor((diff % 60000) / 1000);
      nextCountEl.textContent = "बाक़ी " + (h > 0 ? h + "घं " : "") + m + "मि " + s + "से";
    } else {
      nextNameEl.textContent = "—";
      nextCountEl.textContent = "इस अक्षांश पर आज खगोलीय रूप से तय नहीं";
    }
  }

  findBtn.addEventListener("click", handleFind);
  locateBtn.addEventListener("click", handleLocate);
  placeInput.addEventListener("keydown", function (e) { if (e.key === "Enter") handleFind(); });

  var last = loadLast();
  if (last && typeof last.lat === "number" && typeof last.lng === "number") {
    current = last;
    placeInput.value = last.label === "आपका वर्तमान स्थान" ? "" : (last.label.split(",")[0] || "");
    render();
  }
})();
</script>

<?php get_footer(); ?>
