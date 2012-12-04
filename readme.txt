=== Artiss Timed Content ===
Contributors: dartiss
Donate link: http://www.artiss.co.uk/donate
Tags: automatic, content, expire, page, post, start, timed
Requires at least: 2.0
Tested up to: 3.4.2
Stable tag: 1.2

Adds a shortcode and function allowing you to force the contents of a post or page to appear or expire after a specific date, day and/or time.

== Description ==

After installation use the shortcode `[timed]` around any post or page contents that you wish to appear or expire on a specific date and/or time.

Six parameters can be used - `ondate`, `offdate`, `ontime`, `offtime`, `onday` and `offday`.

**ondate** : Date after which you wish the content to appear, in format YYYYMMDD.
**offdate** : Date after which you wish the content to expire, in format YYYYMMDD.
**ontime** : Time after which you wish the content to appear, in format HHMM.
**offtime** : Time after which you wish the content to expire, in format HHMM.
**onday** : Day on which you wish the content to appear - 1 (for Monday) through 7 (for Sunday)
**offday** : Day on which you wish the content to expire - 1 (for Monday) through 7 (for Sunday)

If any of these aren't specified then a logical alternative is found - e.g. not specifying `ondate` or `ontime` means the text will appear immediately (until the conditions of any expiry date/time is met).

Here's some examples of use..

`[timed offdate="20122412"]It's nearly Christmas![/timed]`

This will cause the message to disappear after the 24th December 2012.

`[timed ondate="20120101" offdate="20121231"]It's 2012[/timed]`

This will cause the message to only appear during the year 2012.

`[timed ondate="20120101" offdate="20121231" ontime="0800" offtime="1200"]It's between 8am and midday[/timed]`

This will cause the message to appear between 8am and midday during the year 2012.

`[timed onday="1" offday="3"]It's Monday to Wednesday[/timed]`

This will cause the message to only appear Monday, Tuesday and Wednesday.

**For help with this plugin, or simply to comment or get in touch, please read the appropriate section in "Other Notes" for details. This plugin, and all support, is supplied for free, but [donations](http://artiss.co.uk/donate "Donate") are always welcome.**

== Function Call ==

If you wish to use this facility elsewhere in your theme - e.g. your sidebar - then you can do by calling a PHP function.

It uses the same parameters as above, each seperated by an ampersand.

For example...

`timed_content(ondate=20120101&offdate=20121231);`

This will return either TRUE or FALSE depending on whether the content should be displayed or not. So, a full example may be...

`<?php if ( function_exists( 'timed_content' ) ) : ?>
<?php if ( timed_content( 'ondate=20120101&offdate=20121231' ) ) : ?>
Some content goes here
<?php endif; ?>
<?php endif; ?>`

This will only display the content if it's any date during the year 2012.

== Licence ==

This WordPress plugin is licensed under the [GPLv2 (or later)](http://wordpress.org/about/gpl/ "GNU General Public License").

== Support ==

All of my plugins are supported via [my website](http://www.artiss.co.uk "Artiss.co.uk").

Please feel free to visit the site for plugin updates and development news - either visit the site regularly or [follow me on Twitter](http://www.twitter.com/artiss_tech "Artiss.co.uk on Twitter") (@artiss_tech).

For problems, suggestions or enhancements for this plugin, there is [a dedicated page](http://www.artiss.co.uk/timed-content "Artiss Timed Content") and [a forum](http://www.artiss.co.uk/forum "WordPress Plugins Forum"). The dedicated page will also list any known issues and planned enhancements.

**This plugin, and all support, is supplied for free, but [donations](http://artiss.co.uk/donate "Donate") are always welcome.**

== Acknowledgements ==

Thanks to Jeff Kereakoglow for the `onday` and `offday` suggestions, as well as pointing out the bug with the time.

== Installation ==

1. Upload the entire `simple-timed-content` folder to your `wp-content/plugins/` directory.
2. Activate the plugin through the 'Plugins' menu in WordPress.
3. That's it - use the shortcode or function call where required.

== Frequently Asked Questions ==

= Which version of PHP does this plugin work with? =

It has been tested and been found valid from PHP 4 upwards.

Please note, however, that the minimum for WordPress is now PHP 5.2.4. Even though this plugin supports a lower version, I am not coding specifically to achieve this - therefore this minimum may change in the future.

== Changelog ==

= 1.2 =

* Maintenance: Brought code quality up-to-date
* Maintenance: README updated
* Enhancement: Allow a shortcode to be used with the content
* Enhancement: Added meta links to plugin screen entry

= 1.1.1 =
* Fixed bug causing timings to not operate correctly

= 1.1 =
* Use local time rather than server time
* Add `onday` and `offday` parameters
* Added function call to allow timed content in other areas of theme
* Re-written (and simplified) logic that decides if content should be shown or not
* Minor changes and enhancements

= 1.0 =
* Initial release

== Upgrade Notice ==

= 1.2 =
* Upgrade to allow shortcodes within content

= 1.1.1 =
* Upgrade urgently to correct timing bug

= 1.1 =
* Upgrade to fix local time issue
* Also, upgrade is you wish to use function feature or specify days of the week

= 1.0 =
* Initial release