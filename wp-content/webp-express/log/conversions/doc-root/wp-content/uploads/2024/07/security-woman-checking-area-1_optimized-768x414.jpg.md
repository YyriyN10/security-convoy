WebP Express 0.25.8. Conversion triggered using bulk conversion, 2024-07-11 12:41:07

**WebP Convert 2.9.0 ignited** 
PHP version: 8.1.2-1ubuntu2.18
Server software: Apache/2.4.52 (Ubuntu)

source: [doc-root]/wp-content/uploads/2024/07/security-woman-checking-area-1_optimized-768x414.jpg
destination: [doc-root]/wp-content/webp-express/webp-images/uploads/2024/07/security-woman-checking-area-1_optimized-768x414.jpg.webp

**Stack converter ignited** 

Options:
------------
- encoding: "auto"
- quality: 70
- near-lossless: 60
- metadata: "all"
- log-call-arguments: true
- converters: (array of 2 items)

Note that these are the resulting options after merging down the "jpeg" and "png" options and any converter-prefixed options

Defaults:
------------
The following options was not set, so using the following defaults:
- auto-limit: true
- converter-options: (empty array)
- preferred-converters: (empty array)
- extra-converters: (empty array)
- shuffle: false


**imagemagick converter ignited** 

**Error: ** **imagemagick is not installed (cannot execute: "convert")** 
imagemagick is not installed (cannot execute: "convert")
imagemagick failed in 2 ms

**gd converter ignited** 

Options:
------------
- encoding: "auto"** (unsupported by gd)** 
- quality: 70
- near-lossless: 60** (unsupported by gd)** 
- metadata: "all"** (unsupported by gd)** 
- log-call-arguments: true
- skip-pngs: **  (unknown to gd)** 

Note that these are the resulting options after merging down the "jpeg" and "png" options and any converter-prefixed options

Defaults:
------------
The following options was not set, so using the following defaults:
- auto-limit: true

GD Version: 2.3.0
image is true color
Running auto-limit
Quality setting: 70. 
Quality of source image could not be established (Imagick or GraphicsMagick is required). Sorry, no auto-limit functionality for you. 
Using supplied quality (70).
gd succeeded :)

Converted image in 37 ms, reducing file size with 60% (went from 39 kb to 16 kb)
