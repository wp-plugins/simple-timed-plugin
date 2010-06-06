=== Simple Timed Content ===
Contributors: dartiss
Donate link: http://tinyurl.com/bdc4uu
Tags: Timed, Start, Expire, Automatic, Content, Post, Page
Requires at least: 2.0.0
Tested up to: 2.9.2
Stable tag: 1.0

Adds a shortcode allowing you to force the contents of a post or page to appear or expire after a specific date and/or time.

== Description ==

After installation, simply use the shortcode `[timed]` around any post or page contents that you wish to appear or expire on a specific date and/or time.

Four parameters can be used - `ondate`, `offdate`, `ontime` and `offtime`.

**ondate** : Date after which you wish the content to appear, in format YYYYMMDD.

**offdate** : Date after which you wish the content to expire, in format YYYYMMDD.

**ontime** : Time after which you wish the content to appear, in format HHMM.

**offtime** : Time after which you wish the content to expire, in format HHMM.

If any of these aren't specified then a logical alternative is found - e.g. not specifying `ondate` or `ontime` means the text will appear immediately (until the conditions of any expiry date/time is met).

Here's an example of use..

`[timed offdate="20102412"]It's nearly Christmas![/timed]`

This will cause the message to disappear after the 24th December 2010.

`[timed ondate="20100101" offdate="20101231"]It's 2010[/timed]`

This will cause the message to only appear during the year 2010.

== Installation ==

1. Upload the entire `simple-timed-content` folder to your `wp-content/plugins/` directory.
2. Activate the plugin through the ‘Plugins’ menu in WordPress.
3. That's it - use the shortcode where required.

== Frequently Asked Questions ==

= How can I get help or request possible changes =

Feel free to report any problems, or suggestions for enhancements, to me either via [my contact form](http://www.artiss.co.uk/contact "Contact Me") or by [the plugins homepage](http://www.artiss.co.uk/simple-timed-content "Simple Timed Content").

== Changelog ==  
  
= 1.0 =
* Initial release

== Upgrade Notice ==

= 1.0 =
* Initial release