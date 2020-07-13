===Esotera===

Contributors: Cryout Creations
Requires at least: 4.5
Tested up to: 5.2.3
Stable tag: 1.1.1
Requires PHP: 5.5
License: GPLv3
License URI: http://www.gnu.org/licenses/gpl.html

Copyright 2019 Cryout Creations
https://www.cryoutcreations.eu/

== Description ==
 Colorful, clean and beautifully animated, Esotera is a highly customizable, multi-purpose responsive theme that’s perfect for your blog, portfolio, photography or business website. Demo: https://demos.cryoutcreations.eu/wp/esotera

== License ==

This program is free software: you can redistribute it and/or modify
it under the terms of the GNU General Public License as published by
the Free Software Foundation, either version 3 of the License, or
(at your option) any later version.

This program is distributed in the hope that it will be useful,
but WITHOUT ANY WARRANTY; without even the implied warranty of
MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the
GNU General Public License for more details.

You should have received a copy of the GNU General Public License
along with this program. If not, see http://www.gnu.org/copyleft/gpl.html


== Third Party Resources ==

Esotera WordPress Theme bundles the following third-party resources:

HTML5Shiv, Copyright Alexander Farkas (aFarkas)
Dual licensed under the terms of the GPL v2 and MIT licenses
Source: https://github.com/aFarkas/html5shiv/

FitVids, Copyright Chris Coyier - http://css-tricks.com + Dave Rupert - http://daverupert.com
Licensed under the terms of the WTFPLlicense
Source: http://fitvidsjs.com/

== Bundled Fonts ==

Icomoon icons, Copyright Keyamoon.com
Licensed under the terms of the GPL license
Source: https://icomoon.io/#icons-icomoon

Entypo+ icons, Copyright Daniel Bruce
Licensed under the terms of the CC BY-SA 4.0 license
Source: http://www.entypo.com/faq.php

Zocial CSS social buttons, Copyright Sam Collins
Licensed under the terms of the MIT license
Source: https://github.com/smcllns/css-social-buttons

== Bundled Images ==

The following bundled images are released into the public domain under Creative Commons CC0:

Header images:
https://www.nicepik.com/nikon-sunset-smile-jean-jacket-denim-blonde-camera-pier-ocean-beach-portrait-woman-free-photo-1304826
https://www.nicepik.com/closeup-shot-of-light-bulbs-various-technology-electric-lamp-lighting-equipment-illuminated-free-photo-403707

Preview demo images:
1.jpg - https://pxhere.com/en/photo/1456587
2.jpg - https://pxhere.com/en/photo/1451599
3.jpg - https://pxhere.com/en/photo/1451433
4.jpg - https://pxhere.com/en/photo/99193
5.jpg - https://pxhere.com/en/photo/117936
6.jpg - https://pxhere.com/en/photo/1585
7.jpg - https://pxhere.com/en/photo/949588
8.jpg - https://pxhere.com/en/photo/655321
9.jpg - https://pxhere.com/en/photo/1325885
10.jpg - https://pxhere.com/en/photo/757423

The rest of the bundled images are created by Cryout Creations and released with the theme under GPLv3


== Changelog ==

= 1.1.1 =
*Release Date - 11.10.2019*

* Fixed extra top margin on body when no header image is used
* Improved fixed mobile menu functionality to only execute when fixed menu option is enabled
* Fixed mobile side menu close button not usable in some instances since 1.1.0
* Fixed some landing page elements missing effects on older Edge releases due to :focus-within changes in 1.1.0

= 1.1.0 =
*Release Date - 02.10.2019*

* Fixed paragraphs indentation option not working
* Fixed boxes ratio issue
* Added 'esotera_header_image' and 'esotera_header_image_url' filters to allow custom control over featured images in header functionality
* Fixed breadcrumbs missing link on home icon on WooCommerce pages
* Added option to disable default pages navigation and improved mobile menu functionality to hide toggler when main navigation is empty
* Fixed 'wp_body_open' action hook support for WordPress versions older than 5.2
* Improved main navigation usability on tables by adding the option to force the mobile menu activation
* Fixed Gutenberg lists displaying bullets outside of content on landing page sections
* Improved list bullets styling in landing page text areas
* Improved dark color schemes support for HTML select elements 
* Added visibility on scroll functionality on the fixed menu on mobile devices
* Improved mobile menu dark color schemes support by using non-link texts to use the configured menu text color
* Updated fixed menu styling to account for WordPress admin bar responsiveness breakpoints changes
* Improved keyboard navigation accessibility:
	* Added 'skip to content' link
	* Added focus support for post featured images, landing page featured boxes, landing page portfolio, main navigation search form
	* Converted menu close element to button
* Added support for future official child themes
* Updated to Cryout Framework 0.8.4.1:
	* Optimized options migration check to reduce calls
	* (Finally?) fixed 'Too few arguments' warning in breadcrumbs on Polylang multi-lingual sites
	* Removed news feed from theme's about page per TRT requirements - https://themes.trac.wordpress.org/ticket/73150#comment:3
	
[]child theme support
    [x]admin/css changed styling
    [x]admin/main.php filter for parent/child version, filter for description, added features.png image
    [x]admin/options.php added info section filters
    [x]customizer.css extra sytling

= 1.0.0 =
*Release Date - 04.07.2019*

* Added option to enable/disable the static slider title animation
* Fixed sub-submenus under-menu indicators being always visible on the right margin
* Fixed sub-submenus having an extra bottom border
* Fixed items with sub-menus having no right padding
* Fixed hamburger menu button in the main navigation not being clickable in some cases
* Updated style.css description

= 0.9.1 =
*Release Date - 23.06.2019*

* Fixed submenus having wrong background color on IE11 and Edge
* Fixed Site Title not being vertically aligned on some rare occasions on Chrome
* Fixed Site Title size on mobile on Chrome
* Scaled down menu items size on mobile
* Fixed dot character being inside link in footer link

= 0.9 =
*Release Date - 21.06.2019*

* First Esotera release
