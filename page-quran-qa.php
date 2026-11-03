<?php
/**
 * Template: Quran Q&A (Hindi)
 *
 * Routed for the /quran-qa/ slug by ek_hindi_pages_map() in functions.php.
 * Renders the Quranic Quiz (Hindi) plugin, seeded with 471 Hindi questions.
 *
 * 16-10-2026: replaced the "coming soon" stub with the live quiz.
 * Stub kept at page-quran-qa.php.bak-before-quiz-16-10-2026
 */
if (!defined('ABSPATH')) exit;
get_header();
?>
<div class="page-hero">
  <div class="flourish reveal" style="margin-bottom:18px"><i></i></div>
  <h1>❓ क़ुरआन के सवाल-जवाब</h1>
  <p>क़ुरआन के बारे में अपनी समझ परखें और बढ़ाएँ — इन्शा अल्लाह।</p>
</div>

<div class="article">
  <?php echo do_shortcode('[quranic_quiz]'); ?>
</div>

<?php get_footer(); ?>
