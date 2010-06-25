***Bogart is currently unreleased. This is just a preview sandbox app.***

Bogart: Sinatra for PHP
=======================

This is Bogart, Sinatra for PHP. We can't be as consise as Ruby, but can at least try.

Installation
------------

Try this first:

    git clone git@github.com:thrashr888/Bogart-sandbox.git project_folder
    cd project_folder
    
    git submodule add git@github.com:thrashr888/Bogart.git vendor/Bogart/
    git submodule init
    git submodule update --init --recursive

You can find the Bogart library code here:  
[https://github.com/thrashr888/Bogart](https://github.com/thrashr888/Bogart)

Place the Bogart library code into ``vendor/Bogart``.

Set your docroot to ``/public`` and point your browser to [http://localhost/](http://localhost/).

*This will get easier, I'll update this readme when I get that worked out. I'll also add a method that should play nice on shared servers in which the docroot cannot be set.*

Examples
-------

- ``index.php`` routes for showing off Bogart's features
- ``hello.php`` hello world
- ``login.php`` log in and log out
- ``post.php`` blog posts
- ``assets.php`` css and js assets

Requires
--------

- PHP 5.3
- MongoDB

Change Log
----------

**Version 0.1-ALPHA**

- This will be the first release. Meant to be somewhat stable and usable in non-critical projects.

License
-------

MIT

Copyright (c) 2010 Paul Thrasher

Permission is hereby granted, free of charge, to any person
obtaining a copy of this software and associated documentation
files (the "Software"), to deal in the Software without
restriction, including without limitation the rights to use,
copy, modify, merge, publish, distribute, sublicense, and/or sell
copies of the Software, and to permit persons to whom the
Software is furnished to do so, subject to the following
conditions:

The above copyright notice and this permission notice shall be
included in all copies or substantial portions of the Software.

THE SOFTWARE IS PROVIDED "AS IS", WITHOUT WARRANTY OF ANY KIND,
EXPRESS OR IMPLIED, INCLUDING BUT NOT LIMITED TO THE WARRANTIES
OF MERCHANTABILITY, FITNESS FOR A PARTICULAR PURPOSE AND
NONINFRINGEMENT. IN NO EVENT SHALL THE AUTHORS OR COPYRIGHT
HOLDERS BE LIABLE FOR ANY CLAIM, DAMAGES OR OTHER LIABILITY,
WHETHER IN AN ACTION OF CONTRACT, TORT OR OTHERWISE, ARISING
FROM, OUT OF OR IN CONNECTION WITH THE SOFTWARE OR THE USE OR
OTHER DEALINGS IN THE SOFTWARE.

Author
------

Paul Thrasher

[http://github.com/thrashr888](http://github.com/thrashr888)  
[http://vastermonster.com](http://vastermonster.com)  
[http://paulthrasher.com](http://paulthrasher.com)  
[http://twitter.com/thrashr888](http://twitter.com/thrashr888)
