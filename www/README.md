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


### Deployment To Live Server

1. Clone this repository to remote web directory (usually `/var/www/` or `/var/www/html/`)
2. Copy the local-config-sample.php to local-config.php and fill out required fields
3. Install WordPress via Submodules (remember to checkout correct version.)
4. Logout then login into WordPress to update database if necessary
5. Update permalinks & .htaccess file if necessary.


### Current Remote to Local Download Process

> NOTE: This could work from Local to Remote but should probably only be done on initial upload
if content is available.

1. Use the WP Migrate DB to download the database. (seems to be the best tool)
2. Download Uploads to your local instance.
3. Update permalinks.
4. Done!
