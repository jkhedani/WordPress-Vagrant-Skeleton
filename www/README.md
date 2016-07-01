# WordPress
A portable version
> NOTE: IF you haven't already read the `README.md` in the root directory of this build please do so before continuing.

### Local Theme Configuration

1. If you wish to use less to compile your style.css

      $ mv content/themes/gulpfile.js content/themes/yourtheme
      $ cd content/themes/yourtheme
      $ gulp

2. If you want to add the following modules via Bower

  - Bootstrap
  - Font Awesome
  - jQuery (is needed by Bootstrap here so you'll have to copies including the native install with WP : / )
  - scrollreveal


  $ mv content/themes/gulpfile.js content/themes/yourtheme
  $ cd content/themes/yourtheme
  $ bower install
