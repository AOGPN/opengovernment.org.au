# opengovernment [![Stories in Ready](https://badge.waffle.io/AOGPN/opengovernment.org.au.svg?label=ready&title=Ready)](http://waffle.io/AOGPN/opengovernment.org.au)

This is the WordPress theme for [opengovernment.org.au](https://opengovernment.org.au/), the website of
the Australian Open Government Partnership Network.

**[opengovernment.org.au](https://opengovernment.org.au/) helps the Network create ambitious OGP action plan commitments that address the key challenges we face in Australia.**

It does this by:

1. being a workspace for network members to develop and present ambitious action plan commitments
2. helping people learn about, join and coordinate working groups
3. attracting and enabling a diverse set of people to join the Network

This theme a fork of
[the Open Government theme](https://github.com/helpful/opengovernment)
developed for Involve/UK Open Government Network

Big thanks to the [UK Open Government Network](http://www.opengovernment.org.uk/)
and [Helpful Technology](http://www.helpfultechnology.com/) for their extra help in creating this our site.
They’re helping groups like us everywhere by allowing [their theme](https://github.com/helpful/opengovernment)
to be reused.

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
