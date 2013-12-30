/*
 * grunt-civet
 * https://github.com/xudafeng/grunt-civet
 *
 * Copyright (c) 2013 xudafeng
 * Licensed under the MIT license.
 */
'use strict';
module.exports = function (grunt) {
    grunt.initConfig({
        civet: {
            buildVM:{
                options:{
                    'type':'velocity'
                },
                files:{
                    'test/dest/vm/123.vm' : 'test/fixtures/123',
                    'test/dest/vm/testing.vm': 'test/fixtures/testing'
                }
            },
            buildPHP:{
                options:{
                    'type':'php'
                },
                files:{
                    'test/dest/php/123.php' : 'test/fixtures/123',
                    'test/dest/php/testing.php' : 'test/fixtures/testing'
                }
            }
        }
    });
    grunt.loadTasks('tasks');
    grunt.registerTask('default', ['civet']);
};
