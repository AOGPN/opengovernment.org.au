# opengovernment [![Stories in Ready](https://badge.waffle.io/AOGPN/opengovernment.org.au.svg?label=ready&title=Ready)](http://waffle.io/AOGPN/opengovernment.org.au)
This is the WordPress theme for [the website](https://opengovernment.org.au/) of
the Australian Open Government Partnership Network.

It is a fork of
[the Open Government theme](https://github.com/helpful/opengovernment)
developed for Involve/UK Open Government Network

Please note that this theme assumes the availability of the following plugins (some premium):

- [Advanced Custom Fields Pro](http://www.advancedcustomfields.com/pro/)
- [Breadcrumb NavXT](https://wordpress.org/plugins/breadcrumb-navxt/)
- [Custom Post Type UI](https://wordpress.org/plugins/custom-post-type-ui/) (though the custom post types are handled in functions.php for the most part)
- [WP-PageNavi](https://wordpress.org/plugins/wp-pagenavi/)

We'd also recommend Akismet, WP Super Cache and a security plugin such as iThemes Security.

[Australia icon by Yohann Berger from the Noun Project](https://thenounproject.com/search/?q=Australia&i=203096).

## Development

### CSS

The [`master.css`](https://github.com/AOGPN/opengovernment.org.au/blob/master/css/master.css)
file, the theme’s main CSS file, is generated from [`master.less`](https://github.com/AOGPN/opengovernment.org.au/blob/master/less/master.less)
using the [*less* CSS pre-processor](http://lesscss.org/).

Make your style changes to the files in the [`less` directory](https://github.com/AOGPN/opengovernment.org.au/blob/master/less/)
then use *less* to regenerate the `master.css` file with a command like:

    lessc less/master.less css/master.css

Include changes from both the `less` and `css` files when committing your changes.
See commit 9eb8e60ee45902bc186ba12b73f37d77189b2a3f for example.
