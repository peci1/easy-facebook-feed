=== Easy Facebook Feed ===
Contributors: timwass
Author: Tim
Tags: facebook, feed, wall, posts, widget, plugin, page, shortcode, social, events
Requires at least: 3.0.1
Tested up to: 4.9
Stable tag: 3.0.25
Version: 3.0.25
License: GPLv2 or later
License URI: http://www.gnu.org/licenses/gpl-2.0.html

Easy Facebook Feed makes things easy and will save you time, no annoying hassle with access tokens with the one-click solution to generate one.

== Description ==

Easy Facebook Feed makes things easy and will save you time, no annoying hassle with access tokens with the one-click solution to generate one. It just displays a nice clean responsive feed of your website.

*"Really easy and it is the best!"* - [wxia0822](https://wordpress.org/support/topic/really-easy-and-it-is-the-best/)

*"Just what I was looking for, very pleased with the ease of set-up and the nice clean result. Thank you!"* - [essjay88](https://wordpress.org/support/topic/super-easy-nice-styling/)

*"Excellent and easy plugin, super support!"* - [mashut](https://wordpress.org/support/topic/excellent-and-easy-plugin-super-support/)

[Easy Facebook Feed Demo](http://shop.stage16.nl/)

= Features =

*   Displays shared links, video's, status updates, events and photo's from your Facebook page.
*   Multiple feeds.
*   SEO friendly.
*   Responsive layout.
*   Uses the colors of your theme.
*   Adjustable number of posts.
*   Usable as full page (shortcode).
*   Usable as widget.
*	Caching for optimal performance.
*   Translation ready.
*   Easy to use.

= Pro Version =

For the price of 2 cup of coffee's you support us to continue to improve Easy Facebook Feed, you also get the following advantages:

*   Blend Easy Facebook Feed Pro seamlessly into your website design with customization options.
*   Show the number of likes, shares and posts in each post.

[More information](http://shop.stage16.nl/product/easy-facebook-feed-pro/)

= Other plugins we have made =

Did you like Easy Facebook Feed but you are looking for something similar for Instagram? Then checkout our new [Easy Instagram Slider](https://wordpress.org/plugins/easy-instagram-slider) plugin. If you have any suggestions or feedback, please let us know.

== Installation ==

= Installation =
1. Upload `easy-facebook-feed` to the `/wp-content/plugins/` directory,
2. Activate the plugin through the 'Plugins' menu in WordPress,
3. Go to the Easy Facebook settings and add your own Facebook ID,

= Display as page =
4. Place `[easy_facebook_feed]` on your page,
5. Optional: if you want to use different feeds on different pages you can add parameters to the shortcode,
for example: `[easy_facebook_feed id=bbcnews limit=3]`.

= Display as widget =
4. Go to Appearance -> Widgets,
5. Add the Easy Facebook Feed widget to your widget area

And thats it, you are done!

== Frequently Asked Questions ==

= Where can I find my facebook id? =

Your facebook id can be found in the url of your facebook page, for example: https://www.facebook.com/bbcnews, is this example 'bbcnews' is the facebook id.

= Why does the shortcode generate no content? =

* Check if your Facebook ID is correctly typed.
* Make sure your Facebook page has no age restrictions.
* Make sure your server supports php-curl.
* Make sure allow_url_fopen is enabled in your php.ini.

= Can I use custom shortcodes? =

There are 2 optional shortcode parameters, id and limit. Id overwrites your default facebook id. Limit overwrites your default post limit. This way you can use different shortcodes for different pages and situations. Example: `[easy_facebook_feed id=bbcnews limit=5]`.

= Can I use multiple feeds on a single page? =

You can add multiple Facebook feeds to the shortcode id separated by comma. For example: `[easy_facebook_feed id=bbcnews,natgeo]`.

= Can I use Easy Facebook Feed in my templates? =

Yes you can, simple add `<?php echo do_shortcode('[easy_facebook_feed]'); ?>` to your template.

= Is Easy Facebook Feed using caching? =

Yes, to offer optimal website performance Easy Facebook Feed will automatically cache your feed data.

= Why do some images not display? =

This is an issue with Jetpack Photon, Photon is breaking some of the image urls. Its recommended to disable Photon.

== Screenshots ==

1. full-page Easy Facebook Feed.
2. Easy Facebook Feed as widget in a sidebar.

== Changelog ==

= 3.0.24 =
* Fixed some debug warnings

= 3.0.22 =
* Added shortcode to exclude post types

= 3.0.21 =
* Generate access token option

= 3.0.20 =
* Added option to add your own access token

= 3.0.19 =
* Access token update

= 3.0.18 =
* Changed icon and text

= 3.0.16 =
* Added Events (credits to Marc Lacroix)

= 3.0.11 =
* Minor css fixes

= 3.0.9 =
* Added extra hooks
* CSS fixes

= 3.0.8 =
* url bugfix

= 3.0.4 =
* CSS bugfix
* Added demo url

= 3.0.3 =
* Caching default value bugfix

= 3.0.2 =
* Added Danish translations (credits to Mathias)
* Admin bugfixes

= 3.0.0 =
* Code cleanup
* Bugfixes
* New caching options
* Added translation support
* Added Dutch translations

= 2.7 =
* Removed Font Awesome to avoid conflics with themes
* Fixed a curl ssl bug
* Improved caching

= 2.6 =
* Bug fixes

= 2.5 =
* Error fix

= 2.4 =
* Added caching (Credits to Alex)
* Its now possible to add multiple id's to the shortcode (Credits to Alex)
* Fixed some warning messages

= 2.3 =
* Fixed some strict php errors

= 2.2 =
* Message line-break fix

= 2.1 =
* Time ago bugfix

= 2.0 =
* Updated Facebook graph api to v2.6

= 1.9 =
* Some technical improvements
* Added curl support
* Added improved error messages
* Added scss file

= 1.8 =
* Long url overflow fix
* Image resize fix

= 1.7 =
* View link now opens in new screen

= 1.6 =
* Fixed a bug with hashtag urls

= 1.5 =
* Added support for Facebook events
* updated FAQ

= 1.4 =
* Fixed some strict php errors

= 1.3 =
* Changed alt text for Facebook image
* Css header fix

= 1.2 =
* Removed bootstrap css to avoid conflicts with custom themes
* Made shared link pictures clickable
* Url link bugfix

= 1.1 =
* Settings link bugfix

= 1.0 =
* Improved performance
* Code cleanup
* Added Hashtag support
* Added url support
* Some small bugfixes

= 0.7 =
* Added support for multiple Facebook feeds

= 0.6 =
* Facebook graph api update

= 0.5 =
* Added widget support
* Added settings shortcut on plugin page.

= 0.4 =
* Facebook made some graph changed causing errors in Easy Facebook Feed.

= 0.3 =
* Fixed a problem with the images because of a Facebook graph change. 
* Layout bugfix in the link type post.

= 0.2 =
* Solved a small bug that occurred with older php versions.

= 0.1 =
* First release
