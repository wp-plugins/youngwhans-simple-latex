=== Youngwhan's Simple Latex ===
Contributors: Youngwhan Song
Donate link: N/A
Tags: latex, math, mathematic, equation, mathtex, forkosh, john, mimetex
Requires at least: 1.5
Tested up to: 2.8.6
Stable tag: 1.0.1

Using mathtex based on latex (tex live) and divpng, it makes to enable to present latex formula on your post.

== Description ==

This plugin enables to put latex formula in wordpress post by using mathtex.cgi running top of latex with divpng.

In order to use this plugin, you don't need to install prerequisite software like latex, dvipng, or mathtex.cgi. However, if you don't install the softwares on your own local server, it will use shared host server for mathtex.cgi, which will give a little bit of low performance and a burden to the host server as well.

= Shared Server =
Here is some shared servers

* http://www.forkosh.dreamhost.com/mathtex.cgi (the default location)
* http://www.openmaths.org/cgi-bin/mathtex.cgi 
* http://www.quantnet.com/cgi-bin/mathtex.cgi

= Your own mathtex.cgi =

If you want to have your own mathtex.cgi, please, look at

* To install latex and divpng, look at http://www.tug.org/texlive/quickinstall.html
* To install mathtex.cgi, look at http://www.forkosh.dreamhost.com/source_mathtex.html#install

Anyhow, what it needs is mathtex.cgi for this plugin.

== Installation ==

To do a new installation of the plugin, please follow these steps

1. Download the zipped plugin file to your local machine.
2. Unzip the file.
3. Upload the 'yw-latex' folder to the '/wp-content/plugins/' directory.
4. Activate the plugin through the 'Plugins' menu in WordPress.
5. Optionally, go to the Options page (YW Latex), and choose the location of mathtex.cgi

Youngwhan Song
breadncup@gmail.com
blog.breadncup.com/yw-latex/

== Frequently Asked Questions ==

= How to use this plug-in? =
- Simply, put your latex syntax wrapping [math] in your post. For example, [math]x^2+y^2[/math].

= How do I know my server supports latex? =
- Type "which latex" in a shell command in your server. If it shows the location, it may support the latex.

= How do I know my server supports divpng? =
- Type "which divpng" in a shell command in your server. If it shows the location, it may support the latex.

= What is latex syntax? =
- You can refer to http://en.wikipedia.org/wiki/Math_markup

== Screenshots ==

1. Type latex syntax
2. Show in the post
3. Option menu in the dashboard panel
4. Option to specify mathtex.cgi

== Changelog ==

= 1.0 =
* Created the first version of latex plugin for wordpress.
