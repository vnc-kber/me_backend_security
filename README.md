# TYPO3 Extension "me_backend_security"

A extension to specify secure password rules and force backend user to change his password, if the password is older then a defined limit.

In extension settings you can define:
* Minimum number of capital characters
* Minimum number of lowercase characters
* Minimum number of digits
* Minimum number of special characters
* Minimum length of password
* Maximum days before password must change

If a backend user logs in and his password need to change, user will logged out and redirect to comfortable password change form.
After password was changed, the user will automatically logged in and can start his work in backend.

The password rules will also be checked when the user try to change his password in user settings in backend.

Users imported from extension ig_ldap_sso_auth will be ignored.

## Install and usage

1. Basic install via composer in TYPO3 projects add this line to the composer.json

    ```
    "move-elevator/me-backend-security": "1.0.0"
    ```
2. Modify extension settings in TYPO3 backend
3. Be safer :)

## Checks
Run each command in the project root directory.

### Execute PHPUnit tests

```
./vendor/bin/phpunit.phar -c ./phpunit.xml --debug --verbose
```

### Execute PHPMD checks

```
./vendor/bin/phpmd.phar ./Classes text ./phpmd.xml
```

### Execute PHPCS checks

```
./vendor/bin/phpcs.phar -p --standard=PSR2 --extensions=php ./Classes
```

### Execute PHPCPD checks

```
./vendor/bin/phpcpd.phar ./Classes
```

# Contact

* Mail: typo3@move-elevator.de
* Website: http://www.move-elevator.de

# Changelog
2017-12-04 - Philipp Heckelt <phe@move-elevator.de>
```
Release 1.0.0
```
