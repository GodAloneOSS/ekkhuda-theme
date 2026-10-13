<?php
/**
 * Template: Library (किताबों की लाइब्रेरी) — ekkhuda.org
 *
 * Auto-loads for the page with slug "library" via the WordPress template
 * hierarchy. Reads the shared book feed on godalone.in (one source of truth
 * for all three sites) and renders the grid server-side, in Hindi.
 *
 * Feed: godalone.in /wp-content/uploads/data/books.json
 * Cached for 12 hours in the ek_library_books_v2 transient.
 * Colours come from the theme tokens, so day/night mode need no extra rules.
 */

get_header();

$ek_lang = 'hi';
$ek_feed = 'https://godalone.in/wp-content/uploads/data/books.json';

$ek_books = get_transient( 'ek_library_books_v2' );
if ( false === $ek_books ) {
	$ek_res = wp_remote_get( $ek_feed, array( 'timeout' => 10 ) );
	if ( ! is_wp_error( $ek_res ) && 200 === (int) wp_remote_retrieve_response_code( $ek_res ) ) {
		$ek_data = json_decode( wp_remote_retrieve_body( $ek_res ), true );
		if ( ! empty( $ek_data['books'] ) && is_array( $ek_data['books'] ) ) {
			$ek_books = $ek_data['books'];
			set_transient( 'ek_library_books_v2', $ek_books, 12 * HOUR_IN_SECONDS );
		}
	}
}
if ( ! is_array( $ek_books ) ) {
	$ek_books = array();
}

/* Hindi books first, the rest in feed order. */
$ek_hi = array();
$ek_other = array();
foreach ( $ek_books as $ek_b ) {
	if ( isset( $ek_b['lang'] ) && 'hi' === $ek_b['lang'] ) {
		$ek_hi[] = $ek_b;
	} else {
		$ek_other[] = $ek_b;
	}
}
$ek_books = array_merge( $ek_hi, $ek_other );

if ( ! function_exists( 'ek_lib_pick' ) ) {
	function ek_lib_pick( $field, $book, $lang = 'hi' ) {
		if ( ! empty( $book[ $field ][ $lang ] ) ) {
			return $book[ $field ][ $lang ];
		}
		if ( ! empty( $book[ $field ]['en'] ) ) {
			return $book[ $field ]['en'];
		}
		return '';
	}
}

$ek_lang_names = array(
	'ta' => 'तमिल',
	'en' => 'अंग्रेज़ी',
	'hi' => 'हिंदी',
	'ur' => 'उर्दू',
);
$ek_filters = array(
	'all' => '🌍 सभी भाषाएँ',
	'hi'  => 'हिंदी',
	'en'  => 'अंग्रेज़ी',
	'ta'  => 'तमिल',
	'ur'  => 'उर्दू',
);
?>

<section class="page-hero">
	<div class="wrap">
		<div class="crumb"><a href="<?php echo esc_url( home_url( '/' ) ); ?>">होम</a> / किताबों की लाइब्रेरी</div>
		<h1>📚 किताबों की लाइब्रेरी</h1>
		<p class="ar">اقْرَأْ بِاسْمِ رَبِّكَ</p>
		<p>“पढ़ो अपने रब के नाम से जिसने पैदा किया।” — कुरआन 96:1<br>
		अल्हम्दुलिल्लाह, नीचे दी गई हर किताब मुफ़्त डाउनलोड के लिए उपलब्ध है।</p>
	</div>
</section>

<section class="blk">
	<div class="wrap">

	<?php if ( empty( $ek_books ) ) : ?>

		<p class="ekb-state">⚠️ किताबों की सूची अभी लोड नहीं हो सकी।</p>
		<p class="ekb-state"><a class="btn btn-gold" href="https://godalone.in/library/">godalone.in लाइब्रेरी खोलें</a></p>

	<?php else : ?>

		<nav class="ekb-filters" id="ekbFilters" aria-label="भाषा फ़िल्टर">
			<?php foreach ( $ek_filters as $ek_code => $ek_label ) : ?>
				<button type="button" class="ekb-chip<?php echo ( 'all' === $ek_code ) ? ' is-active' : ''; ?>" data-lang="<?php echo esc_attr( $ek_code ); ?>"><?php echo esc_html( $ek_label ); ?></button>
			<?php endforeach; ?>
		</nav>

		<p class="ekb-count" id="ekbCount" aria-live="polite">कुल <?php echo count( $ek_books ); ?> किताबों में से <?php echo count( $ek_books ); ?> दिखाई जा रही हैं</p>

		<div class="grid grid-4 ekb-grid" id="ekbGrid">
			<?php
			foreach ( $ek_books as $ek_b ) :
				$ek_title = ek_lib_pick( 'title', $ek_b, $ek_lang );
				$ek_code  = isset( $ek_b['lang'] ) ? $ek_b['lang'] : '';
				$ek_pages = ek_lib_pick( 'pagesLabel', $ek_b, $ek_lang );
				?>
				<article class="ekb-card" data-lang="<?php echo esc_attr( $ek_code ); ?>">
					<div class="ekb-cover">
						<?php if ( ! empty( $ek_b['cover'] ) ) : ?>
							<img src="<?php echo esc_url( $ek_b['cover'] ); ?>" alt="<?php echo esc_attr( $ek_title ); ?>" loading="lazy">
						<?php else : ?>
							<span class="ekb-ph">📖</span>
						<?php endif; ?>
						<?php if ( $ek_pages ) : ?><span class="ekb-pages"><?php echo esc_html( $ek_pages ); ?></span><?php endif; ?>
						<?php if ( isset( $ek_lang_names[ $ek_code ] ) ) : ?><span class="ekb-tag"><?php echo esc_html( $ek_lang_names[ $ek_code ] ); ?></span><?php endif; ?>
					</div>
					<div class="ekb-body">
						<h2 class="ekb-name"><?php echo esc_html( $ek_title ); ?></h2>
						<p class="ekb-by"><?php echo esc_html( ek_lib_pick( 'author', $ek_b, $ek_lang ) ); ?></p>
						<p class="ekb-desc"><?php echo esc_html( ek_lib_pick( 'desc', $ek_b, $ek_lang ) ); ?></p>
						<div class="ekb-btns">
							<?php if ( ! empty( $ek_b['download'] ) ) : ?>
								<a class="btn btn-gold" href="<?php echo esc_url( $ek_b['download'] ); ?>" target="_blank" rel="noopener">📥 मुफ़्त डाउनलोड</a>
							<?php endif; ?>
							<?php if ( ! empty( $ek_b['page'] ) ) : ?>
								<a class="btn btn-gold" href="<?php echo esc_url( $ek_b['page'] ); ?>">↗️ पेज खोलें</a>
							<?php endif; ?>
							<?php if ( ! empty( $ek_b['purchase'] ) ) : ?>
								<a class="btn btn-ghost" href="<?php echo esc_url( $ek_b['purchase'] ); ?>" target="_blank" rel="noopener">🛒 ख़रीदें</a>
							<?php endif; ?>
						</div>
					</div>
				</article>
			<?php endforeach; ?>
		</div>

	<?php endif; ?>

		<div class="ekb-foot">
			<p class="ar">رَبِّ زِدْنِي عِلْمًا</p>
			<p>“ऐ मेरे रब, मेरे ज्ञान में वृद्धि कर।” — कुरआन 20:114</p>
		</div>

	</div>
</section>

<style>
.ekb-filters{display:flex;flex-wrap:wrap;gap:9px;justify-content:center;margin:0 0 16px}
.ekb-chip{font:inherit;font-size:.9rem;cursor:pointer;padding:8px 16px;border-radius:999px;
	border:1px solid var(--line-2);background:var(--panel-2);color:inherit;transition:.18s}
.ekb-chip:hover{border-color:var(--line)}
.ekb-chip.is-active{background:var(--gold);border-color:var(--gold);color:#fff;font-weight:700}
.ekb-count{text-align:center;color:var(--muted);font-size:.9rem;margin:0 0 22px}
.ekb-state{text-align:center;color:var(--muted);padding:12px}
.ekb-card{display:flex;flex-direction:column;overflow:hidden;
	background:linear-gradient(180deg,var(--panel),var(--panel-2));
	border:1px solid var(--line-2);border-radius:var(--radius);
	transition:transform .22s,border-color .22s,box-shadow .22s}
.ekb-card.is-hidden{display:none}
.ekb-card:hover{transform:translateY(-6px);border-color:var(--line);box-shadow:var(--shadow)}
.ekb-cover{position:relative;aspect-ratio:3/4;overflow:hidden;display:flex;align-items:center;justify-content:center;
	background:radial-gradient(circle at 30% 25%,rgba(34,197,94,.20),rgba(34,197,94,.04))}
.ekb-cover img{width:100%;height:100%;object-fit:cover;display:block}
.ekb-ph{font-size:2.6rem;opacity:.5}
.ekb-pages{position:absolute;top:10px;right:10px;background:rgba(0,0,0,.62);color:#fff;font-size:.72rem;padding:4px 9px;border-radius:999px}
.ekb-tag{position:absolute;bottom:10px;left:10px;background:var(--gold);color:#fff;font-size:.72rem;font-weight:700;padding:4px 9px;border-radius:999px}
.ekb-body{padding:15px 16px 17px;display:flex;flex-direction:column;flex:1;gap:7px;min-width:0}
.ekb-name{font-size:1.02rem;font-weight:700;margin:0;line-height:1.4;overflow-wrap:break-word}
.ekb-by{font-size:.82rem;color:var(--muted);margin:0}
.ekb-desc{font-size:.86rem;color:var(--muted);margin:0 0 4px;flex:1;overflow-wrap:break-word}
.ekb-btns{display:flex;flex-wrap:wrap;gap:8px}
.ekb-btns .btn{flex:1 1 140px;min-width:0;text-align:center;font-size:.84rem;padding:9px 10px;white-space:normal;overflow-wrap:break-word;line-height:1.3}
.ekb-foot{text-align:center;margin-top:40px;padding-top:24px;border-top:1px solid var(--line-2);color:var(--muted)}
@media(max-width:560px){
	.ekb-btns .btn{flex:1 1 100%;font-size:.78rem;padding:8px 10px}
	.ekb-pages{font-size:.68rem;padding:3px 7px}
	.ekb-grid{display:grid;grid-template-columns:repeat(2,1fr);gap:14px}
	.ekb-body{padding:12px}
	.ekb-name{font-size:.92rem}
	.ekb-desc{display:none}
}
</style>

<script>
(function(){
	var f=document.getElementById('ekbFilters');
	if(!f) return;
	var cards=[].slice.call(document.querySelectorAll('.ekb-card'));
	var count=document.getElementById('ekbCount');
	var total=cards.length;
	f.addEventListener('click',function(e){
		var b=e.target.closest('.ekb-chip');
		if(!b) return;
		[].forEach.call(f.querySelectorAll('.ekb-chip'),function(c){c.classList.remove('is-active');});
		b.classList.add('is-active');
		var want=b.getAttribute('data-lang'),shown=0;
		cards.forEach(function(c){
			var ok=(want==='all'||c.getAttribute('data-lang')===want);
			c.classList.toggle('is-hidden',!ok);
			if(ok) shown++;
		});
		count.textContent= shown ? ('कुल '+total+' किताबों में से '+shown+' दिखाई जा रही हैं')
			: '😔 इस भाषा में कोई किताब नहीं मिली। कोई दूसरी भाषा चुनें।';
	});
})();
</script>

<?php get_footer(); ?>
