PHPUnit VSTS Bridge
===================

[![Travis](https://img.shields.io/travis/cb8/phpunit-vsts-bridge/master.svg)](https://travis-ci.org/cb8/phpunit-vsts-bridge)
[![Packagist](https://img.shields.io/packagist/v/cb8/phpunit-vsts-bridge.svg)](https://packagist.org/packages/cb8/phpunit-vsts-bridge)
[![License](https://img.shields.io/github/license/cb8/phpunit-vsts-bridge.svg)](./LICENSE)

Publish your test results from PHPUnit to VSTS!

Usage
-----

Add the following commands to your test definition:
```bash
composer require --dev cb8/phpunit-vsts-bridge
./vendor/bin/phpunit --log-junit=results.xml
./vendor/bin/phpunit-vsts-bridge results.xml > results-vsts.xml
```
... and add a task *Publish Test Results* to publish `results-vsts.xml`
