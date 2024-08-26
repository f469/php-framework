coding-standard: vendor
	vendor/bin/php-cs-fixer fix src && vendor/bin/php-cs-fixer fix tests

unit-tests: vendor
	vendor/bin/phpunit tests