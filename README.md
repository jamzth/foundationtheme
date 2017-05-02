# FoundationTheme

This is a starter-theme for WordPress based on Foundation 6, the most advanced responsive (mobile-first) framework in the world. The purpose of Foundation, is to act as a small and handy toolbox that contains the essentials needed to build any design. Foundation Theme is meant to be a starting point, not the final product.

Please fork, copy, modify, delete, share or do whatever you like with this.

All contributions are welcome!

## Requirements

**This project requires [Node.js](http://nodejs.org) v4.x.x to v6.9.x to be installed on your machine.** Please be aware that you will most likely encounter problems with the installation if you are using v7.1.0 with all the latest features.

Foundation Theme uses [Sass](http://Sass-lang.com/) (CSS with superpowers). In short, Sass is a CSS pre-processor that allows you to write styles more effectively and tidy.

The Sass is compiled using libsass, which requires the GCC to be installed on your machine. Windows users can install it through [MinGW](http://www.mingw.org/), and Mac users can install it through the [Xcode Command-line Tools](http://osxdaily.com/2014/02/12/install-command-line-tools-mac-os-x/).

## Quickstart

### 1. Clone the repository and install with npm
```bash
$ cd my-wordpress-folder/wp-content/themes/
$ git clone https://jamzth@bitbucket.org/jamzth/foundationtheme.git
$ cd foundationtheme
$ npm install
```

### 2. While you're working on your project, run:

```bash
$ npm run watch
```

If you want to take advantage of browser-sync (automatic browser refresh when a file is saved), simply open your Gulpfile.js and put your local dev-server address (e.g localhost) in this field ```var URL = '';``` , save the Gulpfile and run
```bash
$ npm run watch
```

### 3. For building all the assets, run:

```bash
$ npm run build
```

Build all assets minified and without sourcemaps:
```bash
$ npm run production
```

### 4. To create a .zip file of your theme, run:

```bash
$ npm run package
```

Running this command will build and minify the theme's assets and place a `.zip` archive of the theme in the `packaged` directory. This excludes the developer files/directories from your theme like `node_modules`, `assets/components`, etc. to keep the theme lightweight for transferring the theme to a staging or production server.

### Styles

 * `style.css`: Do not worry about this file. (For some reason) it's required by WordPress. All styling are handled in the Sass files described below

 * `assets/scss/foundation.scss`: Make imports for all your styles here
 * `assets/scss/global/*.scss`: Global settings
 * `assets/scss/components/*.scss`: Buttons etc.
 * `assets/scss/modules/*.scss`: Topbar, footer etc.
 * `assets/scss/templates/*.scss`: Page template spesific styling

Please note that you **must** run `npm run build` or `npm run watch` in your terminal for the styles to be copied and concatenated. See the Gulpfile.js for details

### Scripts

* `assets/javascript/custom`: This is the folder where you put all your custom scripts. Every .js file you put in this directory will be minified and concatenated one single .js file. (This is good for site speed and performance)

Please note that you must run `npm run build` or `npm run watch` in your terminal for the scripts to be copied and concatenated. See Gulpfile.js for details

### The main styles and scripts generated by the build

Version control on these files are turned off because they are automatically generated as part of the build process.

* `assets/stylesheets/foundation.css`: All Sass files are minified and compiled to this file
* `assets/stylesheets/foundation.css.map`: CSS source maps

* `assets/javascript/vendor`: Vendor scripts are copied from `assets/components/` to this directory. We use this path for enqueueing the vendor scripts in WordPress.

### Check For WordPress Coding Standards

Foundation comes with everything you need to run tests that will check your theme for WordPress Coding Standards. To enable this feature you'll need to install PHP Codesniffer, along with the WordPress Coding Standards set of "Sniffs". You'll need to have [Composer](https://getcomposer.org/) To install both run the following:
```bash
$ composer create-project wp-coding-standards/wpcs:dev-master --no-dev
```
When prompted to remove existing VCS, answer Yes by typing `Y`.

Once you have installed the packages, you can check your entire theme by running:
```bash
$ npm run phpcs
```

If there are errors that Code Sniffer can fix automatically, run the following command to fix them:
```bash
$ npm run phpcbf
```

## Unit Testing With Travis-CI

Foundation Theme is completely ready to be deployed to and tested by Travis-CI for WordPress Coding Standards and best practices. All you need to do to activate the test is sign up and follow the instructions to point Travis-CI towards your repo. Just don't forget to update the status badge to point to your repositories unit test.
[Travis-CI](https://travis-ci.org/)

## Documentation

* [Zurb Foundation Docs](http://foundation.zurb.com/docs/)
* [WordPress Codex](http://codex.wordpress.org/)
