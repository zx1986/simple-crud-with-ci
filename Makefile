init:
	bash setup_sparks.sh
	sudo apt-get install apache2 php5 php5-sqlite
	mkdir -p application/cache application/logs database
	chmod 777 application/cache application/logs database
	@echo 'Make sure .htaccess works in youre server!'
