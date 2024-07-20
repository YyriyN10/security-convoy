WebP Express 0.25.8. Conversion triggered using bulk conversion, 2024-02-27 08:38:39

**WebP Convert 2.9.0 ignited** 
PHP version: 7.4.3-4ubuntu2.19
Server software: Apache/2.4.41 (Ubuntu)

source: [doc-root]/wp-content/uploads/2024/02/hw1_optimized-150x150.jpg
destination: [doc-root]/wp-content/webp-express/webp-images/uploads/2024/02/hw1_optimized-150x150.jpg.webp

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

Options:
------------
- encoding: "auto"
- quality: "auto"
- near-lossless: 60
- metadata: "all"
- log-call-arguments: true
- default-quality: 70** (deprecated)** 
- max-quality: 80** (deprecated)** 
- use-nice: true

Note that these are the resulting options after merging down the "jpeg" and "png" options and any converter-prefixed options

Defaults:
------------
The following options was not set, so using the following defaults:
- auto-limit: true
- alpha-quality: 85
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
*Setting "quality" to "auto" is deprecated. Instead, set "quality" to a number (0-100) and "auto-limit" to true. 
*"quality" has been set to: 80 (took the value of "max-quality").*
*"auto-limit" has been set to: true."*
Running auto-limit
Quality setting: 80. 
Quality of jpeg: 82. 
Auto-limit result: 80 (no limiting needed this time).
*Note: "sharp-yuv" option is not supported in your version of ImageMagick. ImageMagic >= 7.0.8-26 is required* 
*Note: "near-lossless" option is not supported in your version of ImageMagick. ImageMagic >= 7.0.10-54 is required* 
Tested "nice" command - it works :)
Executing command: nice /usr/bin/convert -quality '80' -define webp:alpha-quality=85 -define webp:method=6 '[doc-root]/wp-content/uploads/2024/02/hw1_optimized-150x150.jpg' 'webp:[doc-root]/wp-content/webp-express/webp-images/uploads/2024/02/hw1_optimized-150x150.jpg.webp.lossy.webp' 2>&1
success
Reduction: 57% (went from 3987 bytes to 1724 bytes)

Converting to lossless
Version: ImageMagick 6.9.10-23 Q16 x86_64 20190101 https://imagemagick.org
Extracted version number: 6.9.10-23
*Note: "sharp-yuv" option is not supported in your version of ImageMagick. ImageMagic >= 7.0.8-26 is required* 
*Note: "near-lossless" option is not supported in your version of ImageMagick. ImageMagic >= 7.0.10-54 is required* 
Tested "nice" command - it works :)
Executing command: nice /usr/bin/convert -quality '80' -define webp:lossless=true -define webp:alpha-quality=85 -define webp:method=6 '[doc-root]/wp-content/uploads/2024/02/hw1_optimized-150x150.jpg' 'webp:[doc-root]/wp-content/webp-express/webp-images/uploads/2024/02/hw1_optimized-150x150.jpg.webp.lossless.webp' 2>&1
success
Reduction: -208% (went from 3987 bytes to 12296 bytes)

Picking lossy
imagemagick succeeded :)

Converted image in 123 ms, reducing file size with 57% (went from 3987 bytes to 1724 bytes)
