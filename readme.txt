=== Timed Content ===
Contributors: dartiss
Donate link: http://www.artiss.co.uk/donate
Tags: artiss, automatic, content, date, expire, page, post, simple, start, timed
Requires at least: 2.0
Tested up to: 4.3
Stable tag: 1.2.3
License: GPLv2 or later
License URI: http://www.gnu.org/licenses/gpl-2.0.html

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

 **If you would like to add a translation to his plugin then please [contact me](http://www.artiss.co.uk/plugin-contact "Contact")**

== Licence ==

This WordPress plugin is licensed under the [GPLv2 (or later)](http://wordpress.org/about/gpl/ "GNU General Public License").

== Acknowledgements ==

Thanks to Jeff Kereakoglow for the `onday` and `offday` suggestions, as well as pointing out the bug with the time.

== Installation ==

Timed Content can be found and installed via the Plugin menu within WordPress administration. Alternatively, it can be downloaded and installed manually...

1. Upload the entire `simple-timed-content` folder to your wp-content/plugins/ directory.
2. Activate the plugin through the 'Plugins' menu in WordPress.
3. That's it - use the shortcode or function call where required.

== Changelog ==

= 1.2.3 =
* Maintenance: Tiny, tiny change but one with big impact. Some users were getting prompts to update to a totally different plugin - same name, different author, not as good. That's now sorted.

= 1.2.2 =
* Enhancement: Added internationalisation

= 1.2.1 =
* Maintenance: Corrected support forum link

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

= 1.2.3 =
* Fixed WordPress links to updates appear correctly

= 1.2.2 =
* Added internationalisation

= 1.2.1 =
* Update to correct support forum link

= 1.2 =
* Upgrade to allow shortcodes within content

= 1.1.1 =
* Upgrade urgently to correct timing bug

= 1.1 =
* Upgrade to fix local time issue
* Also, upgrade is you wish to use function feature or specify days of the week

= 1.0 =
* Initial release