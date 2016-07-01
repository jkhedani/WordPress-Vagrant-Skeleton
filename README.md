# Vagrant Box for WordPress

@todo: Add config folder to server on startup (e.g. to load custom php.ini)

### Requirements
1. Git (http://git-scm.com/)
2. VirtualBox (https://www.virtualbox.org/wiki/Downloads)
2. Vagrant (https://www.vagrantup.com/)
3. (database gui optional) (http://www.sequelpro.com/)

### Installation
1. DOWNLOAD this project from GitHub. Do not clone it unless you want to work on improving it.
2. Rename your project folder to something representative of your project. (e.g. your-project-wp)
3. Designate an IP address in the `Vagrantfile`. (e.g. 192.168.10.10)
4. Setup the local config file for wordpress by copying the sample into `local-config.php`

        $ cd your-project-wp
        $ cp www/local-config-sample.php www/local-config.php

5. Designate a name for your local database in `www/local-config.php`.
6. Initialize the www/ folder with Git. This will be the directory you'll use to deploy your build.
7. Install WordPress via Git submodules:

        $ git submodule add https://github.com/WordPress/WordPress

8. Start the virtual machine:

        $ vagrant up

9. Create a new local database entry. See Local Database Configuration section.


### Local Database Configuration

1. Use Sequel Pro (or any native database manager) and add the following settings (access over ssh)

    MySQL Host: 127.0.0.1
    Username: root
    Password: root
    SSH Host: 192.168.10.10
    SSH User: vagrant
    SSH Key: ~/.vagrant.d/insecureprivatekey

 2. Create a new table based on the name you put in your local config file. (e.g. wp_yourproject)

 > NOTE: For WordPress use the UTF8 collation

### Remote Deployment & Usage

See `www/README.md` for more information
