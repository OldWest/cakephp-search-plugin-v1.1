# Sample application for Search Plugin for CakePHP #

## Install application ##

Using git install app possible really simple.

1. Clone repository for app:

	git clone git://github.com/CakeDC/Sample-Search-Application.git

2. Update submodules: 
	
	git submodule update --init

3. Setup application, create database and fill database.php

4. Run migrations to create app tables and populate it with sample data:
	
	cake migrations all
	
	
## Code guide ##	

Development performed step by step so using git history possible to view how each step was implmented.

Initial commit that contain baked tickets code is tagged with name bake_tickets
Always possible to see code state on that commit using command "git checkout bake_tickets".

Commit with tag simple_search show how to add search form to index page, implement search for one field, and how need to configure model and controller for that.

Tag multifield_search refered to more complex task: it is implementation of search by or condition against several fields. This search performed using 'query' type search using helper method in Ticket model. 



## Requirements ##

* PHP version: PHP 5.2+
* CakePHP version: Cakephp 1.3 Stable

## Support ##

For support and feature request, please visit the [Search Plugin Support Site](http://cakedc.lighthouseapp.com/projects/59618-search-plugin/).

For more information about our Professional CakePHP Services please visit the [Cake Development Corporation website](http://cakedc.com).

## License ##

Copyright 2009-2010, [Cake Development Corporation](http://cakedc.com)

Licensed under [The MIT License](http://www.opensource.org/licenses/mit-license.php)<br/>
Redistributions of files must retain the above copyright notice.

## Copyright ###

Copyright 2009-2010<br/>
[Cake Development Corporation](http://cakedc.com)<br/>
1785 E. Sahara Avenue, Suite 490-423<br/>
Las Vegas, Nevada 89104<br/>
http://cakedc.com<br/> 