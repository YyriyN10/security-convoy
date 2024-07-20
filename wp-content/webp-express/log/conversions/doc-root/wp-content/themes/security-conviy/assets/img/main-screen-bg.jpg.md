WebP Express 0.25.8. Conversion triggered with the conversion script (wod/webp-on-demand.php), 2024-07-11 14:07:45

**WebP Convert 2.9.0 ignited** 
PHP version: 8.1.2-1ubuntu2.18
Server software: Apache/2.4.52 (Ubuntu)

source: [doc-root]/wp-content/themes/security-conviy/assets/img/main-screen-bg.jpg
destination: [doc-root]/wp-content/webp-express/webp-images/themes/security-conviy/assets/img/main-screen-bg.jpg.webp

**Stack converter ignited** 

Options:
------------
- encoding: "auto"
- quality: "auto"
- near-lossless: 60
- metadata: "all"
- log-call-arguments: true
- default-quality: 70** (deprecated)** 
- max-quality: 80** (deprecated)** 
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
imagemagick failed in 3 ms

**gd converter ignited** 

Options:
------------
- encoding: "auto"** (unsupported by gd)** 
- quality: "auto"
- near-lossless: 60** (unsupported by gd)** 
- metadata: "all"** (unsupported by gd)** 
- log-call-arguments: true
- default-quality: 70** (deprecated)** 
- max-quality: 80** (deprecated)** 
- skip-pngs: **  (unknown to gd)** 

Note that these are the resulting options after merging down the "jpeg" and "png" options and any converter-prefixed options

Defaults:
------------
The following options was not set, so using the following defaults:
- auto-limit: true

GD Version: 2.3.0
image is true color
*Setting "quality" to "auto" is deprecated. Instead, set "quality" to a number (0-100) and "auto-limit" to true. 
*"quality" has been set to: 80 (took the value of "max-quality").*
*"auto-limit" has been set to: true."*
Running auto-limit
Quality setting: 80. 
Quality of source image could not be established (Imagick or GraphicsMagick is required). Sorry, no auto-limit functionality for you. 
Using default-quality (70).
gd succeeded :)

Converted image in 331 ms, reducing file size with 49% (went from 165 kb to 84 kb)
