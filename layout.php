<?php
class Layout {

  private static $class_name;


	public static function header($title = null, $class = null) {

    self::$class_name = $class;

		// make the title uppercased
		$page_title = ucwords($title !== null ? ' - ' . $title : '');

		// make the title classed
		$page_class = ' ' . preg_replace('/ /', '-', self::$class_name !== null ? 'class="' . self::$class_name . '"' : '');

	return <<<EOT

<!DOCTYPE html> 
<html dir="ltr" lang="en-US">
 
<head>
<meta charset="utf-8" />
<title>Rear Window - Page$page_title</title>
<link rel="stylesheet" type="text/css" media="all" href="../css/main.css" />
<link href='http://fonts.googleapis.com/css?family=Michroma' rel='stylesheet' type='text/css'>
<link href='http://fonts.googleapis.com/css?family=Kaushan+Script' rel='stylesheet' type='text/css'>

<script type="text/javascript" src="http://code.jquery.com/jquery-latest.min.js"></script>
<script type="text/javascript" src="../js/script.js"></script>
<script type="text/javascript" src="../js/blinds.js"></script>
</head>

<body$page_class>

<div class="overlay start"></div>

<header>
  <p>An <span>Alfred Hitchcock</span> Film</p>
  <h1 class="logo"><a href="about.php">Rear Window</a></h1>
</header>

<section class="content">
EOT;

	}

	public static function footer() {

$footer = ('
</section>
<nav>
  <ul>
    <li class="about');
    $footer .= self::$class_name == 'about' ? ' selected' : null;  
  $footer .= ('"><a href="../about">
      <span>About</span>
      The Film
    </a></li>
    <li class="trailer');
    $footer .= self::$class_name == 'trailer' ? ' selected' : null;  
  $footer .= ('"><a href="../trailer">
      <span>Trailer</span>
      Take a peek
    </a></li>    
    <li class="castncrew');
    $footer .= self::$class_name == 'castncrew' ? ' selected' : null;  
  $footer .= ('"><a href="../cast-and-crew">
      <span>Spy On</span>
      Cast &amp; Crew
    </a></li> 
    <li class="gallery');
    $footer .= self::$class_name == 'gallery' ? ' selected' : null;  
  $footer .= ('"><a href="../gallery">
      <span>Photo</span>
      Gallery
    </a></li>       
  </ul>
</nav>

');

  $footer .= <<<EOT
<footer>
  <div class="col left share">
    <p>Share your paranoia</p>
    <ul>
      <li class="facebook"><a href="http://facebook.com">Facebook</a></li>
      <li class="twitter"><a href="http://twitter.com/keegan">Twitter</a></li>
      <li class="email"><a href="mailto:keeganberry@gmail.com">Email</a></li>
    </ul>
  </div>

  <div class="col middle reviews">
      <p class="callout">On DVD and Bluray November 26th!</p>
      <p>Release in limited theaters nationwide! <a href="http://ticketmaster.com" class="tickets">Buy tickets</a></p>
      <p class="see">See reviews and find out more</p>
      <ul>
        <li class="imdb"><a href="http://www.imdb.com/title/tt0047396/">Imdb</a></li>
        <li class="metacritic"><a href="http://www.reddit.com/r/movies/comments/12n9xy/hitchcocks_rear_window_as_an_absolutely_epic_one/">Metacritic</a></li>
      </ul>
  </div>

  <div class="col right buy">
    <p>Available now for preorder</p>
    <a href="http://www.amazon.com/Window-Collectors-Edition-James-Stewart/dp/B00003CXC7" class="amazon">Amazon.com</a>
  </div>

</footer>

</body>
</html>

EOT;

return $footer;

	}

}