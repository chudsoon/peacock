module.exports = function(grunt) {

  // Project configuration.
  grunt.initConfig({
    pkg: grunt.file.readJSON('package.json'),
    less: {
      development: {
        options: {
          paths: ["less/"]
        },
        files: {
          "style.css": "less/style.less"
        }
      },
      production: {
        options: {
          paths: ["less/"],
          cleancss: true
        },
        files: {
          "style.css": "less/style.less"
        }
      }
    },
    watch: {
      less: {
        files: ['less/*.less'],
        tasks: ['less:development'],
        options: {
          livereload: true
        }
      },
      html: {
        files: ['*.html'],
        options: {
          livereload: true
        }
      }
    }
  });

  // Load the plugin that provides the "uglify" task.
  // grunt.loadNpmTasks('grunt-contrib-uglify');

  grunt.loadNpmTasks('grunt-contrib-less');
  grunt.loadNpmTasks('grunt-contrib-watch');

  // Default task(s).
  // grunt.registerTask('default', ['uglify']);

};