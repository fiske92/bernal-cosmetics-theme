module.exports = function(grunt) {
    grunt.initConfig({
        sass: {
            options: {
                implementation: require('node-sass'), // Use node-sass as the compiler
                outputStyle: 'compressed' // or 'compressed'
            },
            dist: {
                files: {
                    'assets/public/dist/css/child.min.css': 'assets/public/src/scss/style.scss'
                }
            }
        },
        uglify: {
            options: {
                compress: true,
                mangle: true,
                beautify: false
            },
            dist: {
                files: {
                    'assets/public/dist/js/child.min.js': ['assets/public/src/js/*.js']
                }
            }
        },
        watch: {
            css: {
                files: 'assets/public/src/scss/**/*.scss',
                tasks: ['sass']
            },
            js: {
                files: 'assets/public/src/js/**/*.js',
                tasks: ['uglify']
            }
        }
    });

    grunt.loadNpmTasks('grunt-sass');
    grunt.loadNpmTasks('grunt-contrib-uglify-es');
    grunt.loadNpmTasks('grunt-contrib-watch');

    grunt.registerTask('default', ['sass', 'uglify']);
};
