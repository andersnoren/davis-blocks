=== Davis Blocks ===
Contributors: Anlino
Donate link: https://www.paypal.com/cgi-bin/webscr?cmd=_donations&business=anders%40andersnoren%2ese&lc=US&item_name=Free%20WordPress%20Themes%20from%20Anders%20Noren&currency_code=USD&bn=PP%2dDonationsBF%3abtn_donateCC_LG%2egif%3aNonHosted
Requires at least: 6.0
Requires PHP: 5.6
Tested up to: 6.0
Stable tag: trunk
License: GPLv2 or later
License URI: https://gnu.org/licenses/gpl-2.0.html


== Installation ==

1. Make sure you're running WordPress 6.0 or later.
2. Upload the theme.
3. Activate the theme.


== Copyright ==

Davis Blocks WordPress Theme, Copyright (c) 2022 Anders Norén.

Davis Blocks is derived from the Tove theme, Copyright (c) 2021 Anders Norén.
Tove is distributed under the terms of the GNU GPL version 2.0.

Davis Blocks bundles the following third-party resources:

PT Serif font
License: SIL Open Font License, 1.1 
Source: https://fonts.google.com/specimen/PT+Serif

Photograph in screenshot.png
Author: Karol Dach
License: CC0
Source: https://stocksnap.io/photo/architectural-design-2XJ1VEE57Q

Code from Wei
Copyright (c) 2021 Rich Tabor
License: GPLv2, https://www.gnu.org/licenses/gpl-2.0.html
Source: https://wordpress.org/themes/wei/
Included as part of:
	- Temporary alignment styles in style.css.
	- Overall Templates and Template Parts structure.


== Changelog ==

Version 0.1.1 (2022-07-05)
-------------------------
- Changed theme screenshot to a CC0 one, and updated the licensing information.
- Restructured style.css slightly.
- Removed the post thumbnail size function call.
- Removed the theme localization function call.
- Removed the function_exists() checks in functions.php, since everything done by functions.php in Davis Blocks can be modified with Core filters.
- Added theme URI to style.css.
- Tweaked the padding of the group block.
- Updated the theme description.
- Updated loop.html to remove the is-style-tove-vertical-separators class from the Query Pagination block.
- Theme.json: Removed font-weight from headings, since 700 is the default.
- Theme.json: Removed undefined CSS variable from cover::spacing::padding.
- Theme.json: Removed disallowed customLineHeight property.

Version 0.1 (2022-07-04)
-------------------------