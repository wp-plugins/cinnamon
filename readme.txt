=== Cinnamon ===
Contributors: dartiss
Donate link: http://artiss.co.uk/donate
Tags: browser, cinnamon, find, search, synonym, text
Requires at least: 2.8
Tested up to: 3.5.1
Stable tag: 1.0

Find in-page text using synonyms

== Description ==

A visitor to your site decides to follow you on Twitter. You have a link in your footer - but their search for "Twitter" comes up empty and they move on. Unfortunately, you named the link "@username" instead.

Cinnamon.js prevents just this situation, taking some of the pain out of naming things. It allows users to find links, images, and other content by their synonyms, using the browser's built-in Find function.

Using it is incredibly simple - simply wrap the shortcode of `[cinnamon]` around with your word with each parameter being a synonym. For example..

`[cinnamon Azure Cerulean Cobalt>Blue[/cinnamon]`

This will output the word "Blue" but searches for azue, cerulean or cobalt in the browser will find the same word.

**Before using this plugin it is highly recommended that you read the FAQ as there are concerns with regard to its use**

Acknowledgements must go to [Thomas Park](http://thomaspark.me "Thomas Park") for creating the Cinnamon script.

**For help with this plugin, or simply to comment or get in touch, please read the appropriate section in "Other Notes" for details. This plugin, and all support, is supplied for free, but [donations](http://artiss.co.uk/donate "Donate") are always welcome.**

== Licence ==

This WordPress plugin is licensed under the [GPLv2 (or later)](http://wordpress.org/about/gpl/ "GNU General Public License"). Cinnamon is licensed under the [MIT license](http://mit-license.org/ "MIT license"), which is compatible with GPL.

== Support ==

All of my plugins are supported via [my website](http://www.artiss.co.uk "Artiss.co.uk").

Please feel free to visit the site for plugin updates and development news - either visit the site regularly or [follow me on Twitter](http://www.twitter.com/davidartiss "Artiss.co.uk on Twitter") (@davidartiss).

For problems, suggestions or enhancements for this plugin, there is [a dedicated page](http://www.artiss.co.uk/cinnamon "Cinnamon") and [a forum](http://www.artiss.co.uk/forum "WordPress Plugins Forum"). The dedicated page will also list any known issues and planned enhancements.

**This plugin, and all support, is supplied for free, but [donations](http://artiss.co.uk/donate "Donate") are always welcome.**

== Installation ==

Cinnamon can be found and installed via the Plugin menu within WordPress administration. Alternatively, it can be downloaded and installed manually...

1. Upload the entire `cinnamon` folder to your wp-content/plugins/ directory.
2. Activate the plugin through the 'Plugins' menu in WordPress.
3. That's it, you're done - you just need to add the shortcode!

== Frequently Asked Questions ==

= Does using this plugin affect your page ranking? =

Hidden text, used deceptively, can be penalized by Google. Precisely what's counted as deception is anyone's guess, but there's a risk that it's deemed a dirty SEO tactic even if it is not intended as such.

= Does Cinnamon hurt accessibility? =

No - it uses `aria-hidden` to tell screen readers to ignore the synonyms.

= Will the browser find "invisible" text? =

If text is set to display: none;, Find doesn't see it at all - this much is true of all browsers. Same goes for visibility: hidden; (except for Opera, where Find matches the synonym but nothing is seen).

When opacity is set to 0, most browsers match the text, but nothing is visibly highlighted (Opera is the odd man out again, highlighting the background of the matched text).

When text is set to color: transparent; most browsers, including Firefox and Chrome, will highlight the area while the text stays transparent - just what we want!

= Does it work on all browsers? =

That I'm aware of - some edge cases may have been missed.

However, Safari does things differently. When transparent text is found, Safari will display it as black text on yellow. If the text is buried under elements with a higher z-index, it brings it to the top.

Another difference: most browsers match text in the middle of a string. Safari only does so when the string is CamelCase.

== Changelog ==  
  
= 1.0 =
* Initial release

== Upgrade Notice ==

= 1.0 =
* Initial release