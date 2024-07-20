WebP Express 0.25.8. Conversion triggered using bulk conversion, 2024-02-20 12:26:06

**WebP Convert 2.9.0 ignited** 
PHP version: 7.4.3-4ubuntu2.19
Server software: Apache/2.4.41 (Ubuntu)

source: [doc-root]/wp-content/uploads/2024/02/logo-21_optimized-150x150.png
destination: [doc-root]/wp-content/webp-express/webp-images/uploads/2024/02/logo-21_optimized-150x150.png.webp

**Stack converter ignited** 

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

Options:
------------
- encoding: "auto"
- quality: 85
- alpha-quality: 80
- near-lossless: 60
- metadata: "all"
- log-call-arguments: true
- use-nice: true

Note that these are the resulting options after merging down the "jpeg" and "png" options and any converter-prefixed options

Defaults:
------------
The following options was not set, so using the following defaults:
- auto-limit: true
- method: 6
- sharp-yuv: true
- auto-filter: false
- low-memory: false
- preset: "none"
- try-common-system-paths: true

Encoding is set to auto - converting to both lossless and lossy and selecting the smallest file

Converting to lossy
Version: ImageMagick 6.9.10-23 Q16 x86_64 20190101 https://imagemagick.org
Extracted version number: 6.9.10-23
Bypassing auto-limit (it is only active for jpegs)
Quality: 85. 
*Note: "sharp-yuv" option is not supported in your version of ImageMagick. ImageMagic >= 7.0.8-26 is required* 
*Note: "near-lossless" option is not supported in your version of ImageMagick. ImageMagic >= 7.0.10-54 is required* 
Tested "nice" command - it works :)
Executing command: nice /usr/bin/convert -quality '85' -define webp:alpha-quality=80 -define webp:method=6 '[doc-root]/wp-content/uploads/2024/02/logo-21_optimized-150x150.png' 'webp:[doc-root]/wp-content/webp-express/webp-images/uploads/2024/02/logo-21_optimized-150x150.png.webp.lossy.webp' 2>&1
success
Reduction: 81% (went from 25 kb to 5 kb)

Converting to lossless
Version: ImageMagick 6.9.10-23 Q16 x86_64 20190101 https://imagemagick.org
Extracted version number: 6.9.10-23
*Note: "sharp-yuv" option is not supported in your version of ImageMagick. ImageMagic >= 7.0.8-26 is required* 
*Note: "near-lossless" option is not supported in your version of ImageMagick. ImageMagic >= 7.0.10-54 is required* 
Tested "nice" command - it works :)
Executing command: nice /usr/bin/convert -quality '85' -define webp:lossless=true -define webp:alpha-quality=80 -define webp:method=6 '[doc-root]/wp-content/uploads/2024/02/logo-21_optimized-150x150.png' 'webp:[doc-root]/wp-content/webp-express/webp-images/uploads/2024/02/logo-21_optimized-150x150.png.webp.lossless.webp' 2>&1
success
Reduction: 30% (went from 25 kb to 17 kb)

Picking lossy
imagemagick succeeded :)

Converted image in 135 ms, reducing file size with 81% (went from 25 kb to 5 kb)
