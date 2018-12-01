'use strict';

// config
var environment = 'dev';
var dist = {
    root: 'dist/',
    public: 'dist/public/',
    admin: 'dist/admin/'
};

var gulp = require('gulp');

// plugins
var $ = require('gulp-load-plugins')();

// scss task
gulp.task('scss-compile', function(){
    // compile public scss
    gulp.src([
        './src/public/scss/**/*.scss',
        '!./src/public/scss/**/_*.scss'
    ])
    .pipe($.sourcemaps.init())
    .pipe($.sass().on('error', $.sass.logError))
    .pipe($.autoprefixer({
        browsers: ['last 2 versions'],
        cascade: true
    }))
    .pipe($.sourcemaps.write('./'))
    .pipe(gulp.dest('./src/public/css/'));
});

// merge and minify css task
gulp.task('merge-minify-css', function(){
    // public utils
    gulp.src([
        './src/public/css/**/!(style)*.css',
        './node_modules/@fortawesome/fontawesome-free/css/all.css',
    ], {base: './'})
    .pipe($.sourcemaps.init())
    .pipe($.concat("utils.css"))
    .pipe(gulp.dest(dist.public + 'css/'))
    .pipe($.rename('utils.min.css'))
    .pipe($.cssnano({
        discardComments: {removeAll: true}
    }))
    .pipe($.sourcemaps.write('./'))
    .pipe(gulp.dest(dist.public + 'css/'));
    
    // public style
    gulp.src([
        './src/public/css/style.css',
    ], {base: './'})
    .pipe($.sourcemaps.init())
    .pipe($.concat("style.css"))
    .pipe(gulp.dest(dist.public + 'css/'))
    .pipe($.rename('style.min.css'))
    .pipe($.cssnano({
        discardComments: {removeAll: true}
    }))
    .pipe($.sourcemaps.write('./'))
    .pipe(gulp.dest(dist.public + 'css/'));

    // admin style
    gulp.src([
        './src/admin/css/style.css',
    ], {base: './'})
    .pipe($.sourcemaps.init())
    .pipe($.concat("style.css"))
    .pipe(gulp.dest(dist.public + 'css/'))
    .pipe($.rename('style.min.css'))
    .pipe($.cssnano({
        discardComments: {removeAll: true}
    }))
    .pipe($.sourcemaps.write('./'))
    .pipe(gulp.dest(dist.admin + 'css/'));
});

// merge and minify js task
gulp.task('merge-minify-js', function(){
    // public utils
    gulp.src([
        './node_modules/vue/dist/vue.min.js',
        './src/public/js/**/!(scripts)*.js'
    ], { base: './' })
    .pipe($.sourcemaps.init())
    .pipe($.concat('utils.js'))
    .pipe(gulp.dest(dist.public + 'js/'))
    .pipe($.rename('utils.min.js'))
    .pipe($.uglify())
    .pipe($.sourcemaps.write('./'))
    .pipe(gulp.dest(dist.public + 'js/'));
    // public script
    gulp.src([
        './src/public/js/scripts.js'
    ], { base: './' })
    .pipe($.sourcemaps.init())
    .pipe($.concat('scripts.js'))
    .pipe(gulp.dest(dist.public + 'js/'))
    .pipe($.rename('scripts.min.js'))
    .pipe($.uglify())
    .pipe($.sourcemaps.write('./'))
    .pipe(gulp.dest(dist.public + 'js/'));

    // admin script
    gulp.src([
        './src/admin/js/scripts.js'
    ], { base: './' })
    .pipe($.sourcemaps.init())
    .pipe($.concat('scripts.js'))
    .pipe(gulp.dest(dist.public + 'js/'))
    .pipe($.rename('scripts.min.js'))
    .pipe($.uglify())
    .pipe($.sourcemaps.write('./'))
    .pipe(gulp.dest(dist.admin + 'js/'));
});

// image compress task
gulp.task('image-compress', function () {
    // public images
    gulp.src([
        './src/public/img/**/*'
    ])
    .pipe($.cache($.imagemin({
        optimizationLevel: 3,
        progressive: true,
        interlaced: true
    })))
    .pipe(gulp.dest(dist.public +'img/'))
    .pipe($.size());
});

// watcher
gulp.task('default', function () {
    gulp.watch([
        './src/+(public|admin)/scss/**/!(^_)*.scss'
    ],[
        'scss-compile'
    ]);
    gulp.watch([
        './src/+(public|admin)/css/**/*.css'
    ],[
        'merge-minify-css'
    ]);
    gulp.watch([
        './src/+(public|admin)/js/**/*.js'
    ],[
        'merge-minify-js'
    ]);
    gulp.watch([
        './src/+(public|admin)/img/**/*.(png|jpg|jpeg|svg)'
    ],[
        'image-compress'
    ]);
});
