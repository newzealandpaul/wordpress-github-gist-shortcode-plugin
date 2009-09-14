=== GitHub Gist Shortcode Plugin ===
Contributors: paul1999
Requires at least: 2.5.1
Tested up to: 2.8
Stable tag: trunk
Tags: github, gist, shortcode, embed, git, code, script

Allows the use of a simple shortcode to embed GitHub Gists in a post or page.

== Description ==

Instead of embedding a [GitHub Gist](http://gist.github.com) (a [pastie](http://pastie.org/) like service on steroids) by copying and pasting HTML you can simple embed it with a [gist] shortcode.

For example, to embed the [gist: 30948](http://gist.github.com/30948) enter this in a post or page:

	[gist id=30948]

It is that simple.

One problem with gists is that a search engine spiders (and users with javascript disabled) will not see your code in a blog entry. This plugin allows you to get around this by including text, such as content of the gist inside the shortcode. The text is wrapped inside these tags:

	<noscript><code class="gist"><pre>

You would use it like this:

	[gist id=30948]
	puts hello_world_test;
	i = 0
	5.times do
		i = i + 1
		puts i
	end
	[/gist]

The content inside a gist shortcode is optional.

View the [CHANGELOG](http://svn.wp-plugins.org/github-gist-shortcode/trunk/CHANGELOG) to see what has changed between versions.

== Installation ==

1) Download the plugin zip file.

2) Unzip.

3) Upload the github_gist_shortcode directory to your wordpress plugin directory (/wp-content/plugins).

4) Activate the plugin.

5) Use the gist shortcode in your posts or pages