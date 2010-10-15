=== Simple Timed Content ===
Contributors: dartiss
Donate link: http://artiss.co.uk/donate
Tags: Timed, Start, Expire, Automatic, Content, Post, Page
Requires at least: 2.0.0
Tested up to: 3.0.1
Stable tag: 1.1

Adds a shortcode and function allowing you to force the contents of a post or page to appear or expire after a specific date, day and/or time.

== Description ==

After installation, simply use the shortcode `[timed]` around any post or page contents that you wish to appear or expire on a specific date and/or time.

Six parameters can be used - `ondate`, `offdate`, `ontime`, `offtime`, `onday` and `offday`.

**ondate** : Date after which you wish the content to appear, in format YYYYMMDD.

**offdate** : Date after which you wish the content to expire, in format YYYYMMDD.

**ontime** : Time after which you wish the content to appear, in format HHMM.

**offtime** : Time after which you wish the content to expire, in format HHMM.

**onday** : Day on which you wish the content to appear - 1 (for Monday) through 7 (for Sunday)

**offday** : Day on which you wish the content to expire - 1 (for Monday) through 7 (for Sunday)

If any of these aren't specified then a logical alternative is found - e.g. not specifying `ondate` or `ontime` means the text will appear immediately (until the conditions of any expiry date/time is met).

Here's some examples of use..

`[timed offdate="20102412"]It's nearly Christmas![/timed]`

This will cause the message to disappear after the 24th December 2010.

`[timed ondate="20100101" offdate="20101231"]It's 2010[/timed]`

This will cause the message to only appear during the year 2010.

`[timed ondate="20100101" offdate="20101231" ontime="0800" offtime="1200"]It's between 8am and midday[/timed]`

This will cause the message to appear between 8am and midday during the year 2010.

`[timed onday="1" offday="3"]It's Monday to Wednesday[/timed]`

This will cause the message to only appear Monday, Tuesday and Wednesday.

**Function Call**

If you wish to use this facility elsewhere in your theme - e.g. your sidebar - then you can do by calling a PHP function.

It uses the same parameters as above, each seperated by an ampersand.

For example...

`simple_timed_content(ondate=20100101&offdate=20101231);`

This will return either TRUE or FALSE depending on whether the content should be displayed or not. So, a full example may be...

`<?php if (function_exists('simple_timed_content')) : ?>`
`<?php if (simple_timed_content("ondate=20100101&offdate=20101231")) : ?>`
Some content goes here
`<?php endif; ?>`
`<?php endif; ?>`

This will only display the content if it's any date during the year 2010.

== Installation ==

1. Upload the entire `simple-timed-content` folder to your `wp-content/plugins/` directory.
2. Activate the plugin through the ‘Plugins’ menu in WordPress.
3. That's it - use the shortcode where required.

== Frequently Asked Questions ==

= How can I get help or request possible changes =

Feel free to report any problems, or suggestions for enhancements, to me either via [my contact form](http://www.artiss.co.uk/contact "Contact Me") or by [the plugins homepage](http://www.artiss.co.uk/simple-timed-content "Simple Timed Content").

== Acknowledgements ==

Thanks to Jeff Kereakoglow for the `onday` and `offday` suggestions, as well as pointing out the bug with the time.

== Changelog ==  
  
= 1.0 =
* Initial release

= 1.1 =
* Use local time rather than server time
* Add `onday` and `offday` parameters
* Added function call to allow timed content in other areas of theme
* Re-written (and simplified) logic that decides if content should be shown or not
* Minor changes and enhancements

== Upgrade Notice ==

= 1.0 =
* Initial release

= 1.1 =
* Upgrade to fix local time issue
* Also, upgrade is you wish to use function feature or specify days of the week