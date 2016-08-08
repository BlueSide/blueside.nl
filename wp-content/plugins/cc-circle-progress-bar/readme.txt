=== CC Circle Progress Bar ===
Tags: circle, progress bar, animated progressbar, circle progressbar, circle, progress
Requires at least: 3.0.1
Tested up to: 3.9.1
Stable tag: 1.0
License: GPLv2 or later
License URI: http://www.gnu.org/licenses/gpl-2.0.html

Simple circle animated progress bar. It will Show any progress data by animation.

== Description ==

Simple circle animated progress bar.
No limit to use. <br>

Demo link: http://www.crazy-coder.com/plugins/cc-circle-progress-bar/

**Features**<br>
1. It will show any type of progressbar.<br>
2. You can controll height and width.<br>
3. You can control thickness.<br>

**Usages**<br>
Just use <b>`[progressbar]`</b> short code.<br>

Simple usage instruction:<br>
1. Install This plug in your WordPress Site<br>

2. Usage <b>`[progressbar]`</b> this shortcode where you want to use it.<br>

3. You can control this shortcode via attributes. There is all attributes. <br>
	`id="1"` => ID of every progressbar. Default value `1`. Must change this value if you add more then one progress bar in post or page.<br>
	`dimen="250"` => Height and width. Default value `250`. You can control height and width via this.<br>
	`text="90%"` => Text in the circle. Default value `90%`. Change it with your text or you can keep it blank if you don't wanna put any text.<br>
	`info="Photoshop"` => Information of the circle, it shown under text. Default value `Photoshop`. Change it with your text or you can keep it blank if you don't wanna put any text.<br>
	`width="10"` => Thickness of bar. Default value `10`. You can change it with your with your value.<br>
	`fontsize="25"` => Font size of text. Default value `25`. You can change it with your with your value.<br>
	`percent="90"` => Percent of progress. Default value `90`. You can change it with your with your value, value should be in 1 to 100.<br>
	`fgcolor="#eee"` => Foreground colour of progress. Default value `#eee`. You can change it with your with your value, value should be in RGB colour format start with Hash `(#)`.<br>
	`bgcolor="#000"` => Background colour of progress. Default value `#000`. You can change it with your with your value, value should be in RGB colour format start with Hash `(#)`.<br>
	`fillcolor="#000"` => Fill colour of progress. Default value `none`. You can change it with your with your value, value should be in RGB colour format start with Hash `(#)`.<br>
	`type="full"` => Type of progress. Default value `full`. You can its value as `half` of `full` for showing half or full view of progressbar.<br>
	`border="outline"` => Border type of progress. Default value `outline`. You can its value as `outline` of `inline`.<br>

4. So, what right now? :) It example time.<br>
	Example 1: Without any attribute.<br>
	`[progressbar]`<br>
	
	Example 2: With every attribute.<br>
	`[progressbar id="1" dimen="250" text="90%" info="Photoshop" width="10" fontsize="25" percent="90" fgcolor="#eee" bgcolor="#000" fillcolor="#000" type="full" border="outline"]`<br>
	
	Example 3: For inline border.<br>
	`[progressbar id="1" dimen="250" text="90%" info="Photoshop" width="10" fontsize="25" percent="90" fgcolor="#eee" bgcolor="#000" fillcolor="#000" type="full" border="inline"]`<br>
	
	Example 4: For half circle.<br>
	`[progressbar id="1" dimen="250" text="90%" info="Photoshop" width="10" fontsize="25" percent="90" fgcolor="#eee" bgcolor="#000" fillcolor="#000" type="half" border="inline"]`<br>

5. If you have any problem to use this plugin feel free to submit a ticket in plug in forum.<br>

6. You can use this in you theme by Place `<?php do_action('Your Shortcode'); ?>` in your templates<br>


== Installation ==

This section describes how to install the plugin and get it working.<br>


Simple usage instruction:<br>

1. 	a. Upload `plugin-name.php` to the `/wp-content/plugins/` directory. <br>
	b. Install This plug in your WordPress Site. <br>
	c. Activate the plugin through the 'Plugins' menu in WordPress. <br>

2. Usage <b>`[progressbar]`</b> this shortcode where you want to use it.<br>

3. You can control this shortcode via attributes. There is all attributes. <br>
	`id="1"` => ID of every progressbar. Default value `1`. Must change this value if you add more then one progress bar in post or page.<br>
	`dimen="250"` => Height and width. Default value `250`. You can control height and width via this.<br>
	`text="90%"` => Text in the circle. Default value `90%`. Change it with your text or you can keep it blank if you don't wanna put any text.<br>
	`info="Photoshop"` => Information of the circle, it shown under text. Default value `Photoshop`. Change it with your text or you can keep it blank if you don't wanna put any text.<br>
	`width="10"` => Thickness of bar. Default value `10`. You can change it with your with your value.<br>
	`fontsize="25"` => Font size of text. Default value `25`. You can change it with your with your value.<br>
	`percent="90"` => Percent of progress. Default value `90`. You can change it with your with your value, value should be in 1 to 100.<br>
	`fgcolor="#eee"` => Foreground colour of progress. Default value `#eee`. You can change it with your with your value, value should be in RGB colour format start with Hash `(#)`.<br>
	`bgcolor="#000"` => Background colour of progress. Default value `#000`. You can change it with your with your value, value should be in RGB colour format start with Hash `(#)`.<br>
	`fillcolor="#000"` => Fill colour of progress. Default value `none`. You can change it with your with your value, value should be in RGB colour format start with Hash `(#)`.<br>
	`type="full"` => Type of progress. Default value `full`. You can its value as `half` of `full` for showing half or full view of progressbar.<br>
	`border="outline"` => Border type of progress. Default value `outline`. You can its value as `outline` of `inline`.<br>

4. So, what right now? :) It example time.<br>
	Example 1: Without any attribute.<br>
	`[progressbar]`<br>
	
	Example 2: With every attribute.<br>
	`[progressbar id="1" dimen="250" text="90%" info="Photoshop" width="10" fontsize="25" percent="90" fgcolor="#eee" bgcolor="#000" fillcolor="#000" type="full" border="outline"]`<br>
	
	Example 3: For inline border.<br>
	`[progressbar id="1" dimen="250" text="90%" info="Photoshop" width="10" fontsize="25" percent="90" fgcolor="#eee" bgcolor="#000" fillcolor="#000" type="full" border="inline"]`<br>
	
	Example 4: For half circle.<br>
	`[progressbar id="1" dimen="250" text="90%" info="Photoshop" width="10" fontsize="25" percent="90" fgcolor="#eee" bgcolor="#000" fillcolor="#000" type="half" border="inline"]`<br>

5. If you have any problem to use this plugin feel free to submit a ticket in plugin forum.<br>

6. You can use this in you theme by Place `<?php do_action('Your Shortcode'); ?>` in your templates<br>



== Frequently Asked Questions ==


== Screenshots ==

1. Read `Installation` Carefully

== Changelog ==

= 1.0 =
* A change since the previous version.

== Arbitrary section ==

You may provide arbitrary sections, in the same format as the ones above.  This may be of use for extremely complicated
plugins where more information needs to be conveyed that doesn't fit into the categories of "description" or
"installation."  Arbitrary sections will be shown below the built-in sections outlined above.

== A brief Markdown Example ==

Ordered list:

1. Some feature
1. Another feature
1. Something else about the plugin


