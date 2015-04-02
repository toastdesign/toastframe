
var pkgjson = require('./package.json');
 
var config = {
  pkg: pkgjson,
  app: 'src',
  dist: 'dist'
}
 
module.exports = function (grunt) {
 
  // Configuration
  grunt.initConfig({
    config: config,
    pkg: config.pkg,
    bower: grunt.file.readJSON('./.bowerrc'),
    copy: {
      dist: {
       files: [{
         expand: true,
         cwd: '<%= config.app %>/_lib/font-awesome',
         src: 'css/font-awesome.min.css',
         dest: '<%= config.dist %>'
       },
       {
         expand: true,
         cwd: '<%= config.app %>/_lib/font-awesome',
         src: 'fonts/*',
         dest: '<%= config.dist %>'
       },
       {
         expand: true,
         cwd: '<%= config.app %>/_lib/magnific-popup',
         src: 'dist/magnific-popup.css',
         dest: '<%= config.dist %>'
       }]
      }
    },
    uglify: {
      options: {
        banner: '/*! <%= pkg.name %> lib - v<%= pkg.version %> -' +
          '<%= grunt.template.today("yyyy-mm-dd") %> */'
      },
      dist: {
        files: {
          '<%= config.dist %>/js/lib.min.js': [
            '<%= bower.directory %>/jquery/jquery.js',
            '<%= bower.directory %>/magnific-popup/dist/jquery.magnific-popup.min.js',
            'js/plugins/*', // Custom scripts not trough bower
            'js/scripts.js', // Custom scripts loaded last
          ],
          '<%= config.dist %>/js/modernizr.min.js': [
            '<%= bower.directory %>/modernizr/modernizr.js',
          ]
        }
      }
    },
    sass: {
        options: {
            sourceMap: true,
            outputStyle: 'compressed',
        },
        dist: {
            files: {
                'dist/css/master.css': 'scss/master.scss'
            }
        }
    },
    watch: {
      options: {
        livereload: false,
      },
      css: {
        files: ['scss/*.scss'],
        tasks: ['sass'],
      },
      scripts: {
        files: ['js/*.js'],
        tasks: ['uglify'],
        options: {
          spawn: false,
        },
      },
    },
  });
  
  grunt.loadNpmTasks('grunt-contrib-copy');
  grunt.loadNpmTasks('grunt-contrib-uglify');
  grunt.loadNpmTasks('grunt-sass');
  grunt.loadNpmTasks('grunt-contrib-watch');
 
  grunt.registerTask('default', [
    'copy',
    'uglify',
    'sass',
    'watch',
  ]);
};