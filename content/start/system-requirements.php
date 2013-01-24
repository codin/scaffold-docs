<h1>System Requirements</h1>
<p>Scaffold’s main aim is to keep things small, simple and quick, which unfortunately means that older - legacy - versions of PHP and MySQL are not supported. There are also a couple of other requirements that vary on a server-by-server basis.</p>
<p>In order to use Scaffold properly, you’ll need to meet the following base requirements. The general rule for requirements is that you should be on the latest stable version, but here’s the exact numbers.</p>

<ol>
	<li>PHP 5.3 or newer.</li>
	<li>PDO (a PHP module).</li>
	<li>A database type supported by PDO.</li>
	<li>Apache 2 (or equivalent).</li>
	<li><code>mod_rewrite</code> (or equivalent).</li>
	<li>Access to change the <a href="./paths">PHP include path</a>.</li>
	<li>Ability to have files outside the <code>DocumentRoot</code>.</li>
</ol>

<p>Although it sounds like a lot, most shared servers are capable of handling Scaffold easily. If you’re not sure about version numbers, we made a little script to check for you. Just upload to your site and visit the file:</p>

<p><a class="btn" href="/checker.php">Download compatibility-checker.zip</a></p>