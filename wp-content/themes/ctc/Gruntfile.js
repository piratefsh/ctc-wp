module.exports = function(grunt) {
    grunt.initConfig({
        pkg: grunt.file.readJSON('package.json'),
        watch: {
            files: ['**/*.php', 'assets/**/*.js', 'assets/styles/sass/**/*.sass'],
            tasks: ['concat:js', 'sass'],
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
                    'bower_components/uikit/js/components/slideset.min.js',
                ],
                dest: 'assets/dist/js/dependencies.js'
            },
            js:{
                src: [
                    'assets/scripts/**/*.js'
                ],
                dest: 'assets/dist/js/app.js'
            }
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
            fonts: {
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
            },
            images: {
                files: [
                    {
                        expand: true,
                        cwd: 'assets/images/css',
                        src: [
                            '**',
                            ], 
                        dest: 'assets/dist/css/images/'

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