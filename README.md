# Bundler
<i>System to Bundle PHP/Twig Projects into html for use in PhoneGap and Element, or hosting where dynamic content is unavailable - such as in Amazon S3 or Github Pages</i>
##Usage
<ol>
	<li>Download and unzip the latest <a href="https://github.com/Jbithell/Bundler/releases">release</a> into a directory you use for the development area of your site <i>(ie `beta.yourdomain.com`)</i></li>
	<li>Place all your required files (e.g. `bootstrap.css`, `jquery.min.js`, images, etc. in `weblibs/` - <b>When referencing your weblibs from code be sure to include the weblibs file - ie `<script src="weblibs/jquery.min.js"></script>`)</li>
	<li>Place all your twig files in `twig/`
		<ul>
			<li>For dymanically produced javascript, templates, etc. place them in the `twig/` directory and reference them within your twig.</li>
			<li><b>All twig paths are relative to `twig/`</b></li>
		</ul>
	</li>
	<li>For each page you would like to create: add it to the `$PAGES` variable in `pages.php`, with its `"TWIG"` value set to the path (from within `twig/`) of your twig file, and the key to the page url <i>(ie for the contactus page you may set it to `"contactus"` - <b>Only use paths a maximum of three levels deep - don't use "contact/us/today/online"</b>)</i></li>
	<li><b>For a live view and testing</b> - access your directory (ie `beta.yourdomain.com`), with `/PAGENAME` for each page - <b>the index file is returned if no page name is passed</b>, and the 404 page if the page doesn't exist.</li>
	<li>For each release call `php index.php "VERSION NUMBER (ie 0.1.1)"` from your command line - your release will be saved in `releases/VERSION NUMBER/` - and upload it to your site, S3, Github Pages, or whatever you are hosting the production site on. It should be compatible with Atom and PhoneGap</li>
</ol>
##Support
For issues please use the <a href="https://github.com/Jbithell/Bundler/issues">Github issues tracker</a>, rather than directly contacting me.
