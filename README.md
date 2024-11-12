# 201ElementorTheme

Wordpress Child Theme for Hello Elementor

## USE WITH LANDO

### Create Lando wordpress project

    [Lando](https://docs.lando.dev/plugins/wordpress/getting-started.html)

    or use [newlando](https://github.com/jf201/landoScript)

    make sure to change php version to latest and install relevant images (mailhog, phpmyadmin) - detailed instructions in [newlando](https://github.com/jf201/landoScript) readme


### Enter the Docker wordpress service with bash

use the command below to find docker_image_id

```bash
docker ps
```

```bash
docker exec -it ***docker_image_id*** bash
```

### Switch into the theme directory

```bash
cd ./wordpress/wp-content/themes/201ElementorTheme
```

### Install dependencies

Make sure to install the dependencies:
```bash
composer install
```

### Get Plugins from production

### Search & Replace namespaces (case sensitive!)

1. REPLACE "elementor_starter_201" with "desired_name"
2. REPLACE "ElementorStarterTNO" with "DesiredName"

### Install npm packages

run ```npm install```

### Unregister hello-elementor theme styles

You can find this under Appearance > Theme Settings in wp-admin

## Sharing environment internally
Database can be exported with

```bash
lando db-export
```

and imported with

```bash
lando db-import
```

## Legacy projects

1. Start server
2. Enter phpmyAdmin
3. import SQL dump
4. copy plugins
5. Enter docker image bash and run wp cli search and replace

```bash
docker exec -it ***docker_image_id*** bash
```
 
```bash
wp search-replace ***'http://example-legacy-project.com'***  ***'http://lando-domain.lndo.site'*** --recurse-objects --skip-columns=guid --skip-tables=wp_users --allow-root

wp search-replace ***'example-legacy-project.com'***  ***'lando-domain.lndo.site'*** --recurse-objects --skip-columns=guid --skip-tables=wp_users --allow-root
```