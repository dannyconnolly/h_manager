module.exports = function(grunt) {

    // Project configuration.
    grunt.initConfig({
        pkg: grunt.file.readJSON('package.json'),
        uglify: {
            options: {
                banner: '/*! <%= pkg.name %> <%= grunt.template.today("yyyy-mm-dd") %> */\n'
            },
            my_target: {
                files: {
                    'assets/js/app.js': ['vendor/js/jquery-2.1.1.min.js', 'vendor/js/jquery-migrate-1.2.1.min.js', 'assets/js/vendor/jquery-ui-1.10.4.min.js', 'bower_components/bootstrap-css/js/bootstrap.min.js']
                }
            }
        },
        jshint: {
            all: ['Gruntfile.js', 'assets/js/*.js']
        },
        sass: {// Task
            dist: {// Target
                options: {// Target options
                    style: 'expanded'
                },
                files: {// Dictionary of files
                    'assets/css/app.css': 'assets/sass/app.scss' // 'destination': 'source'
                }
            }
        },
        watch: {
            css: {
                files: 'assets/sass/**/*.scss',
                tasks: ['sass']
            },
            scripts: {
                files: ['Gruntfile.js', 'assets/js/*.js', 'assets/js/**/*.js'],
                tasks: ['jshint', 'uglify'],
                options: {
                    spawn: false
                }
            }
        }
    });

    // Load the plugin that provides the "uglify" task.
    grunt.loadNpmTasks('grunt-contrib-uglify');
    grunt.loadNpmTasks('grunt-contrib-jshint');
    grunt.loadNpmTasks('grunt-contrib-sass');
    grunt.loadNpmTasks('grunt-contrib-watch');

    // Default task(s).
    grunt.registerTask('default', ['watch']);

};