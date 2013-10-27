=== Youngwhan's Simple Latex ===
Contributors: Youngwhan Song
Donate link: http://blog.breadncup.com/donation/
Tags: latex, math, mathematic, equation, mathtex, forkosh, john, mimetex
Requires at least: 2.5
Tested up to: 3.2.1
Stable Tag: 1.4.0
License: GPLv2 or later
License URI: http://www.gnu.org/licenses/gpl-2.0.html

It enables to put latex formula in wordpress post or comment. Usage: [math]{Latex Syntax}[/math].

== Description ==

It enables to put latex formula in wordpress post or comment. It actually uses mathtex.cgi running top of latex with divpng.

= How does it work? =
- Simply, put your latex syntax wrapping [math] in your post or comment.
- For example, [math]x^2+y^2[/math].

= Do I need to install latex or mathtex.cgi in my server? =
- No. It is not necessary. By default, it is good enough to just install this plugin.

= Option (pre) =
* When you use simply [math]{Latex Syntax}[/math], or [math pre="0"]{Latex Syntax}[/math], your post will show latex formula.
* When you use [math pre="1"]{Latex Syntax}[/math], it will show the code like [math]{Latex Syntax}[/math]. It is useful when you wrap it with &lt;pre&gt; tag.
* When you use [math pre="2"]{Latex Syntax}[/math], it will show the code itself without [math] and [/math] code.

= Option (align) =
* Default align option is "top"
* Possible align options are: "top", "bottom", "middle", "left", and "right".
* These options are equivalent to <img style="float:[OPTION]" />, so it's useful if you want to align latex image with wrapping text.
* For example, [math align="left"]x^2+y^2[/math] will put the latex form at left with the wrapping text.

= More information =

This plugin depends on mathtex.cgi which is provided by <a href="http://www.forkosh.com/" title="John Forkosh" target=_blank>John Forkosh</a>. By default option, it uses http://www.forkosh.com/mathtex.cgi. It means while rendering your latex syntax, it accesses to the shared host to get the correct formula image. Some people does not want to do that.

Here is an option to use your own mathtex.cgi.
<ol>
	<li><a title="Installing Latex" href="http://blog.breadncup.com/2009/11/27/latex-install/">Install latex and dvipng</a></li>
	<li><a title="Installing mathtex.cgi" href="http://blog.breadncup.com/2009/11/27/installing-mathtex-cgi/">Get and Compile mathtex.cgi</a></li>
</ol>

Once you get the latex(+dvipng) and mathtex.cgi, copy mathtex.cgi into a directory, and specify where the mathtex.cgi is. Generally, it can be located in cgi-bin. For example, http://yourdomain.com/cgi-bin. In this case, you need to specify the location in YW Latex Option page as "/cgi-bin/mathtex.cgi"

If you insist to use the shared host, you have an option to select one of shared hosts like below:

* http://www.forkosh.com/mathtex.cgi (the default location)
* http://www.openmaths.org/cgi-bin/mathtex.cgi 
* http://www.quantnet.com/cgi-bin/mathtex.cgi

== Installation ==

To do a new installation of the plugin, please follow these steps

1. Download the zipped plugin file to your local machine.
2. Unzip the file.
3. Upload the 'yw-latex' folder to the '/wp-content/plugins/' directory.
4. Activate the plugin through the 'Plugins' menu in WordPress.
5. Optionally, go to the Options page (YW Latex), and choose the location of mathtex.cgi

== Frequently Asked Questions ==

= What is latex? =
- Refer to http://en.wikipedia.org/wiki/LaTeX

= How do I know latex syntax? =
- Refer to http://en.wikipedia.org/wiki/Math_markup

= What is usage of this plugin? =
- Simply, put your latex syntax wrapping [math] in your post. For example, [math]x^2+y^2[/math].

== Screenshots ==

1. Putting latex syntax in your post.
2. Actual showing in your blog.
3. Option menu in Administrator Panel
4. Option to specify mathtex.cgi location.

== Upgrade Notice ==

= 1.4.1 =

* Minor updated for readme.txt to follow wordpress readme.txt format

= 1.4.0 =
* Keep the version and updated readme.txt for the standard format
* Updated Forkosh's cgi location since it has changed.

== Changelog ==

= 1.4.1 =

* Minor updated for readme.txt to follow wordpress readme.txt format

= 1.4.0 =

* Updated Forkosh's cgi location since it has changed.

= 1.3.0 =

* Added a feature to enable to write latex in comment.

= 1.2.1 =

* Fix a bug in 1.2.0 printing 'n', which was typo.

= 1.2.0 =

* Added "align" option in "[math]" tag.

= 1.1.0 =

* Added "pre" option

= 1.0.3 =

* Updated readme.txt

= 1.0.2 =

* Modified small readme.txt

= 1.0 =

* Created the first version of latex plugin for wordpress.
