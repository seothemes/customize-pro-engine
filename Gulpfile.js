process.env.DISABLE_NOTIFIER = true;

'use strict';

var pkg = require('./package.json'),
    del = require('del'),
    gulp = require('gulp'),
    cleanCss = require('gulp-clean-css'),
    globs = require('gulp-src-ordered-globs'),
    g = require("gulp-load-plugins")(),
    json = require('gulp-sass-json'),
    rename = require("gulp-rename"),
    run = require('run-sequence'),
    toolkit = require('gulp-wp-toolkit'),
    wait = require('gulp-wait'),
    zip = require('gulp-zip');

toolkit.extendConfig(
    {
        theme: {
            name: pkg.theme.name,
            themeuri: pkg.theme.uri,
            description: pkg.description,
            author: pkg.author,
            authoruri: pkg.theme.authoruri,
            version: pkg.version,
            license: pkg.license,
            licenseuri: pkg.theme.licenseuri,
            tags: pkg.theme.tags,
            textdomain: pkg.theme.textdomain,
            domainpath: pkg.theme.domainpath,
            template: pkg.theme.template,
            templateversion: pkg.theme.templateversion,
            notes: pkg.theme.notes
        },
        src: {
            php: ['**/*.php', '!vendor/**'],
            images: 'assets/img/**/*',
            scss: 'assets/scss/**/*.scss',
            css: ['**/*.css', '!node_modules/**', '!assets/vendor/**'],
            js: ['assets/js/**/*.js', '!node_modules/**'],
            json: ['**/*.json', '!node_modules/**'],
            i18n: './assets/lang/',
            vars: 'assets/scss/settings/_colors.scss',
            mq: 'assets/css/all.css'
        },
        js: {
            'customize-pro': [
                'assets/js/general.js',
                'assets/js/compat.js',
                'assets/js/responsive-menus.js',
                'assets/js/split-nav.js',
                'assets/js/sticky-header.js',
                'assets/js/scroll-to-top.js',
                'assets/js/header-search.js'
            ],
            'isotope': [
                'assets/js/isotope.pkgd.js',
                'assets/js/isotope-init.js'
            ]
        },
        css: {
            basefontsize: 10, // Used by postcss-pxtorem.
            remmediaquery: false,
            remreplace: false,
            scss: {
                'all': {
                    src: 'assets/scss/style.scss',
                    dest: 'assets/css/',
                    outputStyle: 'expanded'
                },
                'beaver-builder': {
                    src: 'assets/scss/vendor/beaver-builder/__index.scss',
                    dest: 'assets/css/',
                    outputStyle: 'expanded'
                },
                'elementor': {
                    src: 'assets/scss/vendor/elementor/__index.scss',
                    dest: 'assets/css/',
                    outputStyle: 'expanded'
                },
                'simple-social-icons': {
                    src: 'assets/scss/vendor/simple-social-icons/__index.scss',
                    dest: 'assets/css/',
                    outputStyle: 'expanded'
                },
            }
        },
        dest: {
            i18npo: './assets/lang/',
            i18nmo: './assets/lang/',
            images: './assets/img/',
            js: './assets/js/min/'
        },
        server: {
            proxy: 'https://CustomizePro.test',
            host: 'CustomizePro.test',
            open: 'external',
            port: '8000',
            notify: false,
            https: {
                'key': '/Users/seothemes/.config/valet/Certificates/CustomizePro.test.key',
                'cert': '/Users/seothemes/.config/valet/Certificates/CustomizePro.test.crt'
            }
        }
    }
);

toolkit.extendTasks(gulp, {
    'json': function () {
        return gulp.src(toolkit.config.src.vars)
            .pipe(json())
            .pipe(gulp.dest('./'))
    },
    'extract': function () {
        return gulp.src(toolkit.config.src.mq)
            .pipe(g.extractMediaQueries())
            .pipe(gulp.dest('./assets/css'));
    },
    'clean-css': function () {
        return gulp.src(toolkit.config.src.mq)
            .pipe(cleanCss({compatibility: 'ie8'}))
            .pipe(gulp.dest('./assets/css'));
    },
    'rename-mobile': function () {
        return gulp.src('./assets/css/max-width-896px.css')
            .pipe(rename('./assets/css/mobile.css'))
            .pipe(gulp.dest('./'));
    },
    'rename-desktop': function () {
        return gulp.src('./assets/css/min-width-896px.css')
            .pipe(rename('./assets/css/desktop.css'))
            .pipe(gulp.dest('./'))
    },
    'clean-up': function () {
        return del([
            './assets/css/max-width-896px.css',
            './assets/css/min-width-896px.css',
        ]);
    },
    'css': function () {
        run('build', 'extract', 'rename-mobile', 'rename-desktop','clean-up')
    },
    'js': function () {
        run('build:js')
    },
});





