WebP Express 0.25.8. Conversion triggered with the conversion script (wod/webp-realizer.php), 2024-02-27 13:38:44

**WebP Convert 2.9.0 ignited** 
PHP version: 7.4.3-4ubuntu2.19
Server software: Apache/2.4.41 (Ubuntu)

source: [doc-root]/wp-content/themes/security-bsd/assets/img/right-phone.png
destination: [doc-root]/wp-content/webp-express/webp-images/themes/security-bsd/assets/img/right-phone.png.webp

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
Executing command: nice /usr/bin/convert -quality '85' -define webp:alpha-quality=80 -define webp:method=6 '[doc-root]/wp-content/themes/security-bsd/assets/img/right-phone.png' 'webp:[doc-root]/wp-content/webp-express/webp-images/themes/security-bsd/assets/img/right-phone.png.webp.lossy.webp' 2>&1
success
Reduction: -182% (went from 10 kb to 29 kb)

Converting to lossless
Version: ImageMagick 6.9.10-23 Q16 x86_64 20190101 https://imagemagick.org
Extracted version number: 6.9.10-23
*Note: "sharp-yuv" option is not supported in your version of ImageMagick. ImageMagic >= 7.0.8-26 is required* 
*Note: "near-lossless" option is not supported in your version of ImageMagick. ImageMagic >= 7.0.10-54 is required* 
Tested "nice" command - it works :)
Executing command: nice /usr/bin/convert -quality '85' -define webp:lossless=true -define webp:alpha-quality=80 -define webp:method=6 '[doc-root]/wp-content/themes/security-bsd/assets/img/right-phone.png' 'webp:[doc-root]/wp-content/webp-express/webp-images/themes/security-bsd/assets/img/right-phone.png.webp.lossless.webp' 2>&1
success
Reduction: 23% (went from 10 kb to 8 kb)

Picking lossless
imagemagick succeeded :)

Converted image in 187 ms, reducing file size with 23% (went from 10 kb to 8 kb)
