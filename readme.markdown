Allows the use of a simple shortcode to embed GitHub Gists in a Wordpress blog post or page.

### Usage

Instead of embedding a [GitHub Gist](http://gist.github.com) by copying and pasting HTML you can simple embed it with a [gist] shortcode.

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

The content inside a gist is optional.