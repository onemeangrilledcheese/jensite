'use strict';
module.exports = function(grunt) {
    // load all grunt tasks matching the `grunt-*` pattern
    require('load-grunt-tasks')(grunt);

    grunt.initConfig({

        // watch for changes and trigger sass, jshint, uglify and livereload
        watch: {
            options: {
                    livereload: true,
            },
            sass: {
                files: ['library/scss/**/*.{scss,sass}'],
                tasks: ['sass']
            },
            css: {
                files: ['library/css/**/*.css'],
                tasks: []
              },
            js: {
                files: '<%= jshint.all %>',
                tasks: ['jshint', 'uglify']
            }
        },

        // sass
        sass: {
            dist: {
                options: {
                    style: 'expanded',
                },
                files: {
                    'library/css/style.css': 'library/scss/style.scss',
                }
            }
        },

        // autoprefixer
        autoprefixer: {
            options: {
                browsers: ['last 2 versions', 'ie 9', 'ios 6', 'android 4'],
                map: true
            },
            files: {
                expand: true,
                flatten: true,
                src: '*.css',
                dest: ''
            },
        },

        jshint: {
            options: {
                jshintrc: '.jshintrc',
                "force": true
            },
            all: [
                'Gruntfile.js',
                'library/js/**/*.js'
            ]
        },

        uglify: {
            plugins: {
                options: {
                    sourceMap: 'library/js/plugins.js.map',
                    sourceMappingURL: 'plugins.js.map',
                    sourceMapPrefix: 2
                },
                files: {
                    'library/js/plugins.min.js': [
                        'library/js/vendor/your-vendor-javascripts.js',
                    ]
                }
            },
            main: {
                options: {
                    sourceMap: 'library/js/main.js.map',
                    sourceMappingURL: 'main.js.map',
                    sourceMapPrefix: 2
                },
                files: {
                    'library/js/production.min.js': [
                        'library/js/production.js'
                    ]
                }
            }
        },

    });

    // register task
    grunt.registerTask('default', ['sass', 'autoprefixer', 'watch']);
    grunt.registerTask('dev', ['sass', 'autoprefixer', 'cssmin', 'uglify', 'watch']);    
};