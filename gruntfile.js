module.exports = function(grunt){
  grunt.initConfig({
    pkg:grunt.file.readJSON('package.json'),
    coffee:{
      compile:{
        files:{
          'website/js/site.js' : 'website/coffee/site.coffee'
        }
      }
    },
    less:{
      compile:{
        files:{
          'website/css/site.css' : 'website/less/site.less'
        }
      }
    }
  });

  grunt.loadNpmTasks('grunt-contrib-less');
  grunt.loadNpmTasks('grunt-contrib-coffee');
  grunt.registerTask('default',['coffee','less'])

}
