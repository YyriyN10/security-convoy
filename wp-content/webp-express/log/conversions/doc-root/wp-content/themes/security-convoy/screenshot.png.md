WebP Express 0.25.8. Conversion triggered with the conversion script (wod/webp-on-demand.php), 2024-06-26 12:51:09

**WebP Convert 2.9.0 ignited** 
PHP version: 8.1.2-1ubuntu2.18
Server software: Apache/2.4.52 (Ubuntu)

source: [doc-root]/wp-content/themes/security-convoy/screenshot.png
destination: [doc-root]/wp-content/webp-express/webp-images/themes/security-convoy/screenshot.png.webp

**Stack converter ignited** 
Destination folder does not exist. Creating folder: [doc-root]/wp-content/webp-express/webp-images/themes/security-convoy

Options:
------------
- encoding: "auto"
- quality: 85
- alpha-quality: 80
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
imagemagick failed in 3 ms

**gd converter ignited** 

Options:
------------
- encoding: "auto"** (unsupported by gd)** 
- quality: 85
- alpha-quality: 80** (unsupported by gd)** 
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
image is not true color
converting color palette to true color
Bypassing auto-limit (it is only active for jpegs)
Quality: 85. 
gd succeeded :)

Converted image in 86 ms, reducing file size with -692% (went from 264 bytes to 2092 bytes)
