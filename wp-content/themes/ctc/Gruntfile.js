module.exports = function(grunt) {
    grunt.initConfig({
        pkg: grunt.file.readJSON('package.json'),
        watch: {
            files: ['**/*.html', 'assets/**/*.js', 'assets/**/*.html', 'assets/styles/sass/*.sass'],
            tasks: ['concat', 'sass'],
            options: {
                livereload: {
                    port: 9006
                }
            }
        },
        concat: {
            cssDep: {
                src: [
                    'bower_components/normalize.css/normalize.css',
                ],
                dest: 'assets/dist/css/dependencies.css'
            },
            jsDep: {
                src: [
                    'bower_components/jquery/dist/jquery.min.js',
                    'bower_components/uikit/js/uikit.min.js',
                ],
                dest: 'assets/dist/js/dependencies.js'
            },
        },
        copy: {
            js: {
                files: [
                    {
                        expand: true,
                        flatten: true,
                        src: [
                            ], 
                        dest: 'assets/js/dist/'
                    }
                ]
            },
            css: {
                files: [
                    {
                        expand: true,
                        flatten: true,
                        src: [
                            'bower_components/fontawesome/fonts/*',
                            'bower_components/fontawesome/css/*.map'
                            ], 
                        dest: 'assets/styles/fonts/'

                    }

                ]
            }
        },
        sass: {
            dist: {
                options: {
                    style: 'expanded'
                },
                files: {                         
                    'assets/dist/css/main.css': 'assets/styles/sass/main.sass',
              }
            }
        }
    });
    grunt.loadNpmTasks('grunt-contrib-watch');
    grunt.loadNpmTasks('grunt-contrib-concat');
    grunt.loadNpmTasks('grunt-contrib-copy');
    grunt.loadNpmTasks('grunt-contrib-sass');

    grunt.registerTask('dependencies', ['concat', 'copy']);
}