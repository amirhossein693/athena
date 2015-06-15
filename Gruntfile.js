module.exports = function(grunt) {

  // Project configuration.
  grunt.initConfig({
    pkg: grunt.file.readJSON('package.json'),

    jshint: {
      // define the files to lint
      files: ['gruntfile.js', 'src/js/*.js'],
      // configure JSHint (documented at http://www.jshint.com/docs/)
      options: {
        // more options here if you want to override JSHint defaults
        globals: {
          jQuery: true,
          console: true,
          module: true
        }
      }
    },

    uglify: {
      build: {
        files: [{
          expand: true,
          dot: true,
          extDot: 'last',
          cwd: 'src',
          src: ['js/**/*.js'],
          dest: 'dist/',
          ext: '.js',
        }],  
      }
    },

    compass: {
      build: {
        options: {
          importPath: ['src/bower_components/foundation/scss', 'src/scss'],
          sassDir: 'src/scss/',
          cssDir: 'src/css/',
          debugInfo: false,
          force: true,
          outputStyle: 'expanded',
          environment: 'production'         
        }
      }
    },

    autoprefixer: {
      options: {
        browsers: ['last 15 version']
      },
      build: {
        files: [
          {
            expand: true,
            cwd: 'src',
            src: ['css/**/*.css'],
            dest: 'src/',
            ext: '.css',
          }
        ]
      }
    },    

    cssmin: {
      build: {
        files: [{
          expand: true,
          dot: true,
          cwd: 'src',
          src: ['css/**/*.css'],
          dest: 'dist/',
          ext: '.css',
        }],  
      }
    },

    copy: {
      build: {
        files: [{
          expand: true,
          dot: true,
          cwd: 'src/',
          src: ['**/*', '!scss/**'],
          dest: 'dist/'
        }],
      },
      serve: {
        files: [{
          expand: true,
          dot: true,
          cwd: 'src/',
          src: ['**/*', '!scss/**'],
          dest: 'dist/'
        }],
      },      
    },

    webfont: {
      build: {
          src: 'src/images/iconfonts/*.svg',
          dest: 'src/fonts/iconfonts',
          options: {
            autoHint: false,
            templateOptions: {
                baseClass: 'ico',
                classPrefix: 'ico-',
                mixinPrefix: 'mico-'
            }          
          }
      }
    },  

    watch: {
      build: {
        files: ['src/**/*'],
        tasks: ['build'],
        options: {
          spawn: false,
        },
      },
      serve: {
        files: ['src/**/*'],
        tasks: ['serve'],
        options: {
          spawn: false,
        },
      },      
    },

    clean: {
      build: ["dist", "src/css"]
    }

  });

  // module(s)
  grunt.loadNpmTasks('grunt-contrib-uglify');
  grunt.loadNpmTasks('grunt-contrib-jshint');
  grunt.loadNpmTasks('grunt-autoprefixer');
  grunt.loadNpmTasks('grunt-contrib-cssmin');
  grunt.loadNpmTasks('grunt-contrib-copy');
  grunt.loadNpmTasks('grunt-contrib-watch');
  grunt.loadNpmTasks('grunt-contrib-compass');
  grunt.loadNpmTasks('grunt-contrib-clean');
  grunt.loadNpmTasks('grunt-webfont');

  // task(s).
  grunt.registerTask('build', [
                                'jshint',
                                'clean:build',
                                'webfont:build',
                                'uglify:build',
                                'compass:build',
                                'autoprefixer:build',
                                'cssmin:build',
                                'copy:build'
                              ]);

  grunt.registerTask('serve', [
                                'jshint',
                                'webfont:build',
                                'compass:build',
                                'autoprefixer:build',
                                'copy:serve',
                                'watch:serve'                                
                              ]);  

};