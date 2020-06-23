=== Admin Bar Wrap Fix ===
Contributors: KZeni
Donate link: https://www.paypal.me/KZeni
Tags: Admin Bar, adminbar, ui, ui fix, overflow, wrapping
Stable tag: 1.0.3
Tested up to: 5.4.2
Requires at least: 4.6
Requires PHP: 5.4

Fixes the wrap behavior of the WordPress admin bar when it has too many items. Keep it neat; don't spill/overflow into the content.

== Description ==

Fixes the wrap behavior of the WordPress admin bar when it has too many items. Keep it neat; don't spill/overflow into the content.

Check things out on GitHub at [https://github.com/KZeni/Admin-Bar-Wrap-Fix](https://github.com/KZeni/Admin-Bar-Wrap-Fix)

== Frequently Asked Questions ==

= Shouldn't this be fixed within WordPress itself? =

I would think so. This has been submitted as a patch at https://core.trac.wordpress.org/ticket/44438, but I figured it would still be beneficial as a plugin in the meantime.

== Screenshots ==

1. Too many items to show with plugin (it at least shows the left icon & truncates text as needed).
2. Fewer items shown with plugin (shows normally).
3. What WordPress currently does without this plugin (overlapping items hijack hover and makes things inaccessible, and the user experience is generally broken).

== Changelog ==

= 1.0.3 =

Released March 6th, 2020

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
