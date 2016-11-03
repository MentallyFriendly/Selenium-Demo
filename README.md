# Selenium Demo

### Description
Selenium is a dockerized demonstration of how developers can use PHPUnit/Selenium to help manage the functionality testing component of web projects.

### Authors
Name | Email | Role
--- | --- | ---
Stephen Chiu | [stephen@mentallyfriendly.com](mailto:stephen@mentallyfriendly.com) | Developer

## Prerequistites
### Dependencies & Requirements
* Docker
* VNC - Optional
 * The default node password is: secret
 * VNC port for Chrome is 5901

## Setup
### Local Setup
When setting up the project for the first time, execute the following commands:
* Navigate into this repository's directory on host computer
* Run:
  * docker-compose up -d
  * docker ps (take note of the name of the php container)
  * docker exec -it (php container name) bash
  * cd /app;composer install;./vendor/bin/phpunit

After the project is setup, then the demo can be executed using the commands:
* Navigate into this repository's directory on host computer
* Run:
  * docker-compose up -d
  * docker ps (take note of the name of the php container)
  * docker exec -it (php container name) bash
  * cd /app;./vendor/bin/phpunit
