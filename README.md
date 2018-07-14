PHPUnit VSTS Bridge
===================

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
