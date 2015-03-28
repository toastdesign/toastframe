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
            'js/plugins/*', // Custom scripts not trough bower
            'js/scripts.js', // Custom scripts loaded last
          ],
          '<%= config.dist %>/js/modernizr.min.js': [
            '<%= bower.directory %>/modernizr/modernizr.js',
          ]
        }
      }
    },
    compass: {                  // Task
      dist: {                   // Target
        options: {              // Target options
          require: 'susy',
          config: 'config.rb',
          watch: true
        }
      }
    },
  });
 
  grunt.loadNpmTasks('grunt-contrib-copy');
  grunt.loadNpmTasks('grunt-contrib-uglify');
  grunt.loadNpmTasks('grunt-contrib-compass');
 
  grunt.registerTask('default', [
    'copy',
    'uglify',
    'compass'
  ]);
};