# Bundler
System to Bundle PHP/Twig Projects into html for use in PhoneGap and Element
##IN DEVELOPMENT
##Usage
<ol>
	<li>Clone entire repo into a directory you use for the development area of your site (<i>ie beta.yourdomain.com</i>)</li>
	<li>Place all your required files, e.g. bootstrap.css, images, etc. in weblibs/</li>
	<li>Place all your twig files in twig/
		<ul>
			<li>For Javascript etc. or templates that you need for twig place them in the twig file and reference them within your twig.</li>
			<li>All twig paths are relative to twig/</li>
		</ul>
	</li>
	<li>For each page add it to the $PAGES variable in index.php, with its "TWIG" set to the path (from within twig/) of that file, and the key to the page url (ie for the contactus page you may set it to "contactus" - Only use paths one level deep - don't use "contact/us")</li>
	<li>For a live view and testing - access your directory (ie beta.yourdomain.com) /PAGENAME for each page - the index file is returned if no page name is passed.</li>
	<li>For each release call php index.php "VERSION NUMBER (ie 0.1.1)" from the command line - your release will be saved in releaes/VERSION NUMBER/ - and upload it to your site</li>
</ol>
