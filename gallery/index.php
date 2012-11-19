<?php
	require_once('../layout.php');

	echo Layout::header('gallery', 'gallery');
?>

<hgroup>
	<h1>Photo Gallery</h1>
	<h2>Click a photo to see the larger version and more information</h2>
</hgroup>

<div class="rect">

	<a href="../img/gallery/01.jpg" class="pic window">
		<img src="../img/gallery/01_thumb.png" alt="" data-desc="James Stewart from a photo shoot" \>
		<span>James Stewart</span>
	</a>

	<a href="../img/gallery/02.jpg" class="pic window">
		<img src="../img/gallery/02_thumb.png" alt="" data-desc="Fictional set used for the film. A giant soundstage had to be built to enclose it." \>
		<span>L.B. Jefferies' Window View</span>
	</a>

	<a href="../img/gallery/03.jpg" class="pic window">
		<img src="../img/gallery/03_thumb.png" alt="" data-desc="Grace Kelly and James Stewart on set." \>
		<span>Grace Kelly</span>
	</a>

	<a href="../img/gallery/04.jpg" class="pic window">
		<img src="../img/gallery/04_thumb.png" alt="" data-desc="L.B. Jefferies' diligent caretaker looks concerned." \>
		<span>Thelma Ritter</span>
	</a>

	<a href="../img/gallery/05.jpg" class="pic window">
		<img src="../img/gallery/05_thumb.png" alt="" data-desc="James Stewart looks shocked. Oh no!" \>
		<span>James Stewart</span>
	</a>

	<a href="../img/gallery/06.jpg" class="pic window">
		<img src="../img/gallery/06_thumb.png" alt="" data-desc=" Grace Kelly and James Stewart about to... kiss!" \>
		<span>Grace Kelly</span>
	</a>					

</div>

<?php 
	echo Layout::footer();
?>