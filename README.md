# Silverstripe Robots

This module will allow you to have a dynamic robots.txt 

# Installation

```
$ composer require michaeljjames/silverstripe-robots
```
You can also install manually by downloading the zip and extracting it into your site root.

You'll also need to run dev/build.

# Configuration

It is completely configurable inside /admin/settings

To configure your robots.txt file paste in your robots.txt confiuration into the textarea inside the robots tab in admin/settings/ or use the example below.

```
User-agent: *
Disallow: /admin
Disallow: /dev
Disallow: /?flush
Disallow: /assets
Allow: /

User-Agent: Googlebot-Image
Disallow: /admin
Disallow: /dev
Disallow: /?flush
Allow: /

Sitemap: https://www.domain.com/sitemap.xml
```
