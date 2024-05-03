=== Davis Blocks ===
Contributors: Anlino
Donate link: https://www.paypal.com/cgi-bin/webscr?cmd=_donations&business=anders%40andersnoren%2ese&lc=US&item_name=Free%20WordPress%20Themes%20from%20Anders%20Noren&currency_code=USD&bn=PP%2dDonationsBF%3abtn_donateCC_LG%2egif%3aNonHosted
Requires at least: 6.2
Requires PHP: 5.6
Tested up to: 6.5
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

Version 0.2.3 (2024-05-03)
-------------------------
- Updated stylesheet enqueues to make sure the parent theme stylesheets are loaded even when a child theme is active.

Version 0.2.2 (2024-03-02)
-------------------------
- Bumped "Tested up to" to 6.4.
- Fixed the visuals of the Davis separator style.
- Fixed border width in templates.

Version 0.2.1 (2023-08-21)
-------------------------
- Removed opt-in of the opinionated wp-block-styles, since it causes issues with pull quote styles in 6.3.
- Updated styles to account for removal of wp-block-styles.

Version 0.2 (2023-02-08)
-------------------------
- Bumped "Tested up to" and "Requires at least" to 6.1.
- Removed some custom styles for the search form and tables from style.css.
- Bumped copyright year in the footer to 2023.
- Changed the menu icon to a text button, to better match the original Davis.
- WordPress 6.1 updates:
	- Added Spacing Sizes support, and updated templates and template parts to use it.
	- Added button, heading and caption element styles in theme.json.
	- Added theme.json hover effects, and removed the old CSS for it.
	- Enables fluid font sizes in theme.json.
	- Enabled useRootPaddingAwareAlignments in theme.json, and removed custom alignment styles in CSS.
	- Enabled blockGap in theme.json.

Version 0.1.4 (2022-10-07)
-------------------------
- Removed index.php, since it's no longer needed to pass the WordPress.org automatic theme review.

Version 0.1.3 (2022-09-27)
-------------------------
- Updated <!-- wp:template-part --/> to omit the "theme":"davis-blocks" code, fixing issues when modifying template parts in child themes (thanks, @janboddez).

Version 0.1.2 (2022-07-06)
-------------------------
- Better post header structure on single.html and page.html.
- Removed unnecessary groups around separators in the comment area of single.html.
- Better default styles for input elements.
- Added CSS to match the alignment of the post editor title to match the front-end.
- Set all figcaptions to use the small font size, and made the figcaption targeting more universal.
- Button block: Reset the border width to the default 2px, to match default padding values.
- Added hover styles to navigation links.
- Adjusted the theme description.

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