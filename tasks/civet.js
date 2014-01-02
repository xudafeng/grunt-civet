/*
 * grunt-civet
 * https://github.com/xudafeng/grunt-civet
 *
 * Copyright (c) 2013 xudafeng
 * Licensed under the MIT license.
 */

'use strict';
module.exports = function(grunt) {
    var civet = require('civet');
    var colors = require( "colors")
    grunt.registerMultiTask('civet', 'civet for grunt', function() {
        var options = this.options({
            type: 'velocity',
            separator: ', '
        });
        var that = this;
        that.files.forEach(function(f) {
            var src = f.src.filter(function(filepath) {
                if (!grunt.file.exists(filepath)) {
                    grunt.log.warn('civet:Source file "' + filepath + '" not found.');
                    return false;
                } else {
                    return true;
                }
            }).map(function(filepath) {
                return grunt.file.read(filepath);
            }).join(grunt.util.normalizelf(options.separator));
            switch(options['type']){
                case 'velocity':
                default:
                    src = civet.juicer2vm(src);
                    break;
                case 'php':
                    src = civet.juicer2php(src);
                    break;
            }
            grunt.file.write(f.dest, src);
            grunt.log.writeln('civet'.rainbow+':File '+'"'.yellow + f.dest.yellow + '"'.yellow+' created.');
        });
    });
};
