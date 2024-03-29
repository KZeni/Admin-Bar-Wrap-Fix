=== Admin Bar Wrap Fix ===
Contributors: KZeni
Donate link: https://www.paypal.me/KZeni
License: GPLv3
Tags: Admin Bar, adminbar, ui, ui fix, overflow, wrapping
Stable tag: 1.2.7
Tested up to: 6.4
Requires at least: 4.6
Requires PHP: 5.4

Fixes the wrap behavior of the WordPress admin bar when it has too many items. Keep it neat; don't spill/overflow into the content.

== Description ==

Fixes the wrap behavior of the WordPress admin bar when it has too many items. Keep it neat; don't spill/overflow into the content.

Check things out on GitHub at [https://github.com/KZeni/Admin-Bar-Wrap-Fix](https://github.com/KZeni/Admin-Bar-Wrap-Fix)

== Frequently Asked Questions ==

= Shouldn't this be fixed within WordPress itself? =

I would think so. This has been submitted as a patch at [core ticket #44438](https://core.trac.wordpress.org/ticket/28983) & [core GitHub pull request #1082](https://github.com/WordPress/wordpress-develop/pull/1082), but I figured it would still be beneficial as a plugin to solve things for people in the meantime.

== Screenshots ==

1. Too many items to show with plugin (it at least shows the left icon & truncates text as needed).
2. Fewer items shown with plugin (shows normally).
3. What WordPress currently does without this plugin (overlapping items hijack hover and makes things inaccessible, and the user experience is generally broken).

== Changelog ==

= 1.2.7 =

Released October 24th, 2023

* Added links to the plugin details on the main plugin page.
* Confirmed WordPress 6.4 compliance.

== Changelog ==

= 1.2.6 =

Released July 24th, 2023

* Confirmed WordPress 6.3 compliance.

= 1.2.5 =

Released March 20th, 2023

* Confirmed WordPress 6.2 compliance.

= 1.2.4 =

Released October 31st, 2022

* Confirmed WordPress 6.1 compliance.

= 1.2.3 =

Released May 6th, 2022

* Confirmed WordPress 6.0 compliance.

= 1.2.2 =

Released January 24th, 2022

* Confirmed WordPress 5.9 compliance.

= 1.2.1 =

Released July 12th, 2021

* Confirmed WordPress 5.8 compliance.

= 1.2 =

Released May 31st, 2021

* Mobile admin bar is now accounted for as plugins have recently been adding their own items to the mobile menu as well & potentially causing items wrap onto a new line outside of the admin bar given the available space. Instead of wrapping to overlap the actual content, it simply offers a horizontal scroll for when there are too many items to show on screen at once (keeping the items all within the admin bar's one row of icons.)

= 1.1 =

Released March 25th, 2021

* Removed an unnecessary truncation.
* Made the CSS code smaller & simpler.
* Updated info to point to the current WordPress Core [Trac ticket](https://core.trac.wordpress.org/ticket/28983) and [GitHub pull request](https://github.com/WordPress/wordpress-develop/pull/1082).

= 1.0.7 =

Released March 3rd, 2021

* Confirmed WordPress 5.7 compliance.

= 1.0.6 =

Released November 23rd, 2020

* Confirmed WordPress 5.6 compliance.

= 1.0.5 =

Released August 14th, 2020

* Added GPLv3 license declaration to the plugin details.

= 1.0.4 =

Released August 3rd, 2020

* Made it so the stylesheet is only included when the admin bar is being shown.
* Updated to confirm WordPress 5.5 compatibility. Minor plugin metadata updates.

= 1.0.3 =

Released June 22nd, 2020

* Updated to confirm WordPress 5.4.2 compatibility. Minor plugin metadata updates.

= 1.0.2 =

Released March 6th, 2020

* Updated to confirm WordPress 5.4 compatibility.

= 1.0.1 =

Released January 9th, 2020

* Added GitHub info to description.

= 1.0.0 =

Released January 9th, 2020

* Implemented further CSS refinements (thanks, [@lunacodes](https://profiles.wordpress.org/lunacodes/)).
* Bumped to 1.0.0 given the positive feedback, growing usage, and lack of anyone reporting any bugs along the way.

= 0.9.3 =

Released December 9th, 2018

* Updated to confirm WordPress 5.0 compatibility.

= 0.9.2 =

Released August 15th, 2018

* Got the plugin listed & working on the WP.org plugin repository.

= 0.9.1 =

Released August 13th, 2018

* Implemented all necessary assets and submitted to WP.org plugin repository.

= 0.9 =

Released July 30th, 2018

* Packaged as a plugin.

= 0.5 =

Released July 6th, 2018

* Updated version of the original Patch for admin-bar.css to make it friendly for admin bars which don't have too many items shown.

= 0.1 =

Released June 22nd, 2018

* Initial implementation via [core ticket #44438](https://core.trac.wordpress.org/ticket/44438).

== Upgrade Notice ==

= 0.9.2 =
This version is the first one available via the WP.org plugin repository. As such, this should be the starting point rather than using older versions/implementations.
