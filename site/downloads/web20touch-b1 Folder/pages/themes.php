<div class="toolbar">
	<h1>Themes</h1>
	<a class="button back" onclick="jsTouch.loadPage('pages/home.php', { transition: 'slide-right' });"><span></span>Back</a>
</div>
<div class="content">
<div>
	<h2>Select a Theme to view</h2>
	<ul class="rounded">
		<li><a href="javascript:" onclick=" $('#mainCSS').attr('href', 'css/apple.css'); $('a').removeClass('clicked'); $(this).addClass('clicked');">Apple Theme</a></li>
		<li><a href="javascript:" onclick=" $('#mainCSS').attr('href', 'css/ipad-light.css'); $('a').removeClass('clicked'); $(this).addClass('clicked');">iPad Light</a></li>
		<li><a href="javascript:" onclick=" $('#mainCSS').attr('href', 'css/ipad-dark.css'); $('a').removeClass('clicked'); $(this).addClass('clicked');">iPad Dark</a></li>
	</ul>
	<div style="padding: 0px 10px;">
	You can easily create more customized themes. To see an example open any of the files in /css folder. Each file is a separate theme.
	</div>
</div>
</div>