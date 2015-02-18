# Easy Menu

Easy Menu is a IPS4 plugin which let you modify main navigation easily. it supports external links as well as internal links.


## Features
* Extremely simple to use.
* Support external links
* Auto application link
* Submenu support
* Permission option

## How To Install

first you need upload all contents of upload folder to IPS root folder

then you need install the plugin (Admin CP > System > Site Features > Plugins > Install)

## Configuration

first you need goto Admin CP > System > Site Features > Plugins > EasyMenu > Edit,
Active plugin and add links

## Example

~~~
{calendar}
Test|#
--Skinod|http://skinod.com
--Google|http://google.com|1,2,3,4,5,6,7
--{forums}
{download}
--Skinod|http://skinod.com
~~~