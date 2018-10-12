=== Plugin Name ===
Contributors: cminatti
Donate link: paypal.me/cminatti
Tags: images, image size
Requires at least: 3.0.1
Tested up to: 4.8
Stable tag: 4.8
License: GPLv2 or later
License URI: http://www.gnu.org/licenses/gpl-2.0.html

This plugin allows you to automatically delete the original image after upload, or do it in bulk for old images.

== Description ==

Delete Original Image is a Wordpress plugin to delete the the original image file uploaded.

The problem that solves, is that the original image file is usually huge (can be >6MB if it is a photograph) and it is never published on the pages, so there is no need to keep it on your server, and it it a must to delete it, if you have limited storage space and you are uploading tons of pictures.

The plugin gives you the option to enable/disable this, to be done automatically when you upload an image.

And/or you can do it in bulk for all your previously uploaded images.

Specifically, this plugin copy the 'large' image ( i.e: your-pic-1038x576.jpg ) to the original file path ( i.e.: your-pic.jpg ).

Nothing should brake, all other plugins should keep working, but you need to know that the original image is no longer available on your site, so please do a backup if you think you may need the original images in the future.

== Installation ==

This section describes how to install the plugin and get it working.


1. Upload the plugin files to the `/wp-content/plugins/delete-original-image` directory, or install the plugin through the WordPress plugins screen directly.
2. Activate the plugin through the 'Plugins' screen in WordPress
3. Use the Tools -> Delete Original Image screen to configure the plugin

== Frequently Asked Questions ==

= Can I revert the changes? =

No. I encourage you to do a backup of your site, or at least your images, in case you want the original, full size image in the future.

= Will I have to change anything on my posts? =

No, no other action should be necessary, the original file you uploaded, is replaced with the Wordpress `large` image.

== Screenshots ==

1. screenshot1.png
2. screenshot2.png

== Changelog ==

= 0.1 =
* Plugin released

= 0.2 =
* April 2016. Fixed bug! The plugin failed for images that were not uploaded in the current month

= 0.3 =
* June 2017. Fixed Readme.txt

= 0.4 =
* Updated plugin's and donation's link


