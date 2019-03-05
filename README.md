Sorting library
===============

This is a test Sorting library.




![Custom badge](https://img.shields.io/badge/senttor-trainingsortinglibrary--project-red.svg)

Installation
------------

For creating new project based on this template just execute the following command

```
$ composer require senttor/trainingsortinglibrary-project
```

> NOTE: You can add `--no-dev` right after `create-project` flag if you don't want to install dev dependencies to your project


Main changes that you need to do:

1. Update `name`, `description`, `keywords`, `authors` section of the `composer.json` file, [lines 2-4](composer.json#L2-L4), [9-10](composer.json#L9-L10).

2. Update header template in `.php_cs` file, [lines 4-9](.php_cs#L4-L9).

3. Update copyright in `LICENSE` file, [line 3](LICENSE#L3).

Other changes that you may do:

1. Change namespace for source code in `composer.json`, [line 23](composer.json#L23) and for tests [line 28](composer.json#L28).

2. Change PHP version in `composer.json` [line 15](composer.json#L15).

3. Change rules for code style in `.php_cs` file.

4. Add some new files and directories to `.gitignore` file to exclude them from Git.

5. Update readme according to your project

6. Update changelog according to your project


Usage
-----
input value
```
 1.$stringArray = ['first', 'second', 'third', 'fourth'];
```
goal - asc sorting
Choosing Asc sort 
```
2. $asc_sort = new \Vendor\Sorting\AscSorting();
   $strategy_asc = new \Vendor\Sorting\Strategy( $asc_sort );
```
sorting...
```
 $strategy_asc->sorting($stringArray)
```


Code style fixer
----------------


To fix the code style just run the following command

```
$ composer cs-fix
```

License
-------

[![license](https://img.shields.io/github/license/senttor/Sorting.svg)](LICENSE)

This project is released under the terms of the BSD-3-Clause [license](LICENSE).

Copyright (c) 2018, c
