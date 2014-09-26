module.exports = function (grunt) {
    grunt.initConfig({

        watch: {
            src: {
                //files: ['**/*.scss', '**/*.php'],
                files: ['**/*.scss', 'js/*.js', 'templates/*.php'],
                tasks: ['compass:dev', 'uglify'],
            },
            options: {
                livereload: true,
            },
        },
        // sudo gem install compass
        // sudo npm install grunt-contrib-compass --save-dev
        compass: {
            dev: {
                options: {
                    sassDir: 'scss',
                    cssDir: 'css',
                    //imagesPath: 'assets/img',
                    noLineComments: false,
                    //outputStyle: 'expanded',
                    //outputStyle: 'nested'
                    outputStyle: 'compressed',
                    //outputStyle: 'compact'
                }
            }
        },
        /*sass: {
            dist: {
                options: {
                    style: 'expanded'
                },
                files: {
                    'css/style.css': 'scss/bootstrap.scss',
                    'css/custom_theme.css': 'scss/custom_theme.scss'
                }
            }
        },*/
        uglify: {
            my_target: {
                files: {
                    'js-min/app.min.js': ['js/app.js'],
                    'js-min/waves.min.js': ['js/waves.js']
                }
            }
        }
    });
    grunt.loadNpmTasks('grunt-contrib-compass');
    grunt.loadNpmTasks('grunt-contrib-sass');
    grunt.loadNpmTasks('grunt-contrib-watch');
    grunt.loadNpmTasks('grunt-contrib-uglify');
};