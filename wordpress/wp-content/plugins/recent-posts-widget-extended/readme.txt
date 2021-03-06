=== Recent Posts Widget Extended ===
Contributors: satrya, themejunkie
Donate link: http://satrya.me/donate/
Tags: recent posts, random posts, thumbnails, widget, widgets, sidebar, excerpt, category, post tag, post type, multiple widgets
Requires at least: 3.6
Tested up to: 3.9.2
Stable tag: 0.9.3
License: GPLv2 or later
License URI: http://www.gnu.org/licenses/gpl-2.0.html

Provides flexible and advanced recent posts widget. Allows you to display them with thumbnails, post excerpt, multiple category and more.

== Description ==

This plugin will enable a custom, flexible and super advanced recent posts widget. Allows you to display a list of the most recent posts with thumbnail, excerpt and post date, also you can display it from all or specific or multiple category or tag.

= Features Include: =

* WordPress 3.9.2 Support.
* Set the title url.
* Display by date, comment count or random.
* Display thumbnails, with customizable size and alignment.
* Display excerpt, with customizable length.
* Display from all, specific or multiple category.
* Display from all, specific or multiple tag.
* Display post date and you can set the format.
* Default thumbnail.
* Read more option.
* Post type option.
* Custom CSS
* Multiple widgets.
* Support [Get the Image](http://wordpress.org/plugins/get-the-image/) plugin.

= Ugly Image Sizes =

This plugin creates custom image sizes. If you use images that were uploaded to the media library before you installed this plugin, please install [Regenerate Thumbnails](http://wordpress.org/extend/plugins/regenerate-thumbnails/) plugin to corrected the sizes.

= Tested Themes =

* [Twenty Eleven](http://wordpress.org/themes/twentyeleven)
* [Twenty Twelve](http://wordpress.org/themes/twentytwelve)
* [Twenty Fourteen](http://wordpress.org/themes/twentyfourteen)
* [Stargazer](http://wordpress.org/themes/stargazer)
* [Satu](http://wordpress.org/themes/satu)
* [Tiga](http://wordpress.org/themes/tiga)
* [Skyfall](http://wordpress.org/themes/skyfall)

= Support =

* Go to [forum support](http://wordpress.org/support/plugin/recent-posts-widget-extended).
* [Rate/Review the plugin](http://wordpress.org/support/view/plugin-reviews/recent-posts-widget-extended).

= Plugin Info =
* Developed by [Satrya](http://satrya.me/) & [Theme Junkie](http://www.theme-junkie.com/)
* Check out the [Github](https://github.com/satrya/recent-posts-widget-extended) repo to contribute.

= Contributors =
* [David Kryzaniak](http://profiles.wordpress.org/davidkryzaniak/)
* [AKbyte](http://profiles.wordpress.org/akbyte/)

== Installation ==

**Through Dashboard**

1. Log in to your WordPress admin panel and go to Plugins -> Add New
2. Type **recent posts widget extended** in the search box and click on search button.
3. Find Recent Posts Widget Extended plugin.
4. Then click on Install Now after that activate the plugin.
5. Go to the widgets page **Appearance -> Widgets**.
6. Find **Recent Posts Extended** widget.

**Installing Via FTP**

1. Download the plugin to your hardisk.
2. Unzip.
3. Upload the **recent-posts-widget-extended** folder into your plugins directory.
4. Log in to your WordPress admin panel and click the Plugins menu.
5. Then activate the plugin.
6. Go to the widgets page **Appearance -> Widgets**.
7. Find **Recent Posts Extended** widget.

== Frequently Asked Questions ==

= How to filter the post query? =
You can use `rpwe_default_query_arguments` to filter it. 
`
add_filter( 'rpwe_default_query_arguments', 'your_custom_function' );
function your_custom_function( $args ) {
	$args['posts_per_page'] = 10; // Changing the number of posts to show.
	return $args;
}
`

= Thumbnail size option not working properly =
Yes, this is because the plugin uses `the_post_thumbnail` custom sizes and not uses `add_image_size` function, [more information](http://codex.wordpress.org/Function_Reference/the_post_thumbnail). At the moment I have no idea how to fix this issue.

= Ordering not working! =
Did you installed any Post or Post Type Order? Please try to deactivate it and try again the ordering. [(related question)](http://wordpress.org/support/topic/ordering-set-to-descending-not-working)

= No image options =
Your theme needs to support Post Thumbnail, please go to http://codex.wordpress.org/Post_Thumbnails to read more info and how to activate it in your theme.

== Screenshots ==

1. The widget settings

== Changelog ==

= 0.9.3 - 8/31/2014 =
* I'm sorry for long wait the bug fixes update. I'm back to support and maintenance this plugin again :)
* Added: `strip_shortcodes()` to prevent shorcodes showing in the post excert, Pros [jeffreyvr](http://www.web-on.nl/). It should fixed issue [excerpt not displaying](http://wordpress.org/support/topic/excerpts-not-displaying-1)
* Added: French translation, Pros rwatuny [french translation](http://wordpress.org/support/topic/plugin-recent-posts-widget-extended-french-translation)
* Added: Option to set `suppress_filters` true or false.
* Fixed: Arguments in `the_post_thumbnail()`, it should width as first item and height as second.

= 0.9.2 - 5/20/2014 =
* Fix missing stylesheet in the admin area.

= 0.9.1 - 4/22/2014 =
* If you use caching plugin, please flush the cache after updating
* Only load admin widget style on Widgets page
* Replaced `get_the_excerpt()` with `get_the_content()` for the post excert. Props [Akbyte](http://profiles.wordpress.org/akbyte/)
* Fix issue when no posts exist
* Set `suppress_filters` to false to support WPML
* Removed date format option. I have to removed it since some people need the date translatable, it will uses 'Date Format' on Settings > General panel.
* Update language