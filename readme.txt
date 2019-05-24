=== Include Content By Shortcode ===
Contributors: kashanshah
Tags: include, include content, include HTML, nested content, copy content, duplicate content, shortcode, includes
Donate link: https://kashanshah.ga
Requires at least: 4.0.1
Tested up to: 5.2.1
Requires PHP: 5.2.4
Stable tag: 0.3.0
License: GPLv2 or later
License URI: http://www.gnu.org/licenses/gpl-2.0.html

This plugin allows to add single content in multiple posts and pages by a shortcode. It is used to fulfill the concept of PHP's 'include' function. It can add HTML, CSS and JS also by using just a simple shortcode.

== Description ==
This plugin allows the user to add single content in multiple posts and pages by means of a shortcode. It is used to fulfill the concept of PHP's 'include' function. It can add HTML, CSS and JS also by using just a simple shortcode.
For example, my brand's tagline, "The Best Of Its Kind" set to be used on various pages and posts, I would add that in Included Content and it will generate a shortcode against this content. This generated shortcode will now be placed everywhere I want to add my tagline. While adding the content, CSS and JS may also be added which will be included along with the HTML content, wherever the shortcode will be pasted. 
Now in future, if I would change my tagline, I would need to change it only in Included Content and it will change it everywhere the shortcode was used.

== Frequently Asked Questions ==
What will be the shortcode?
[includedcontentbyshortcode id=9999] will be the default shortcode with 9999 being replaced with the Included Content ID. The shortcode may be simply copied from Included Contents page against your post.

Can I use Included Content's slug in shortcode instead of the id?
Yes, instead of the id, slug may also be used like this: [includedcontentbyshortcode slug=MY_CONTENT_SLUG_HERE].

What if I dont't want to included custom CSS or JS on a specific page?
If you don't want to add the custom CSS written in Included Content on a specific page, you may pass the css parameter false in the shortcode like this: [includedcontentbyshortcode id=9999 css=false]. Similarly, if you don't want to add the custom JS written in Included Content on a specific page, you may pass the js parameter false in the shortcode like this: [includedcontentbyshortcode id=9999 js=false].


== Installation ==
1. Upload "include-content-by-shortcode" to the "/wp-content/plugins/" directory.
2. Activate the plugin through the "Plugins" menu in WordPress.

== Screenshots ==
1. Add a content
2. Copy the shortcode generated for that content
3. Paste the shortcode in any post or page
3. The included content will appear where the shortcode would be pasted

== Changelog ==
= 0.3.0 =
* Rich editor enable disable option added

= 0.2.1 =
* Slug parameter also added in shortcode

= 0.1 =
* CSS and JS options added.
* FAQs added to plugin directory page

= 0.0.9.6 =
* File-wise coded structure. 
* Meta boxes for CSS and JS added.

= 0.0.9.3 =
* Updated readme files
* Installation instructions and screenshots added to plugin directory page.

= 0.0.9 =
* First Release

== Upgrade Notice ==
Stable tag, 0.2.1, CSS/JS options added.