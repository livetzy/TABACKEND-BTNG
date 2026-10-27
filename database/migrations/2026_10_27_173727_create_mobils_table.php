2026-10-27T22:22:50.893Z (CRON) STARTUP (1.7.2)
2026-10-27T22:22:50.894Z (CRON) INFO (RANDOM_DELAY will be scaled with factor 31% if used.)
2026-10-27T22:22:50.894Z (CRON) INFO (running with inotify support)
2026-10-27T22:22:52.785Z Received response from supernova
2026-10-27T22:22:53.212Z Configuring /etc/rsyslog-pulsar.conf to crawl logs...
2026-10-27T22:22:53.212Z Starting rsyslog-pulsar.service...
2026-10-27T22:22:53.906Z rsyslog-pulsar.service started
2026-10-27T22:22:53.918Z Capturing output of: wg genkey
2026-10-27T22:22:53.922Z Capturing output of: wg pubkey
2026-10-27T22:22:56.482Z Preparing application environment…
2026-10-27T22:22:57.135Z Inject DB_DATABASE
2026-10-27T22:22:57.135Z Inject DB_PASSWORD
2026-10-27T22:22:57.135Z Inject CC_COMPOSER_VERSION
2026-10-27T22:22:57.135Z Inject INSTANCE_NUMBER
2026-10-27T22:22:57.135Z Inject DB_HOST
2026-10-27T22:22:57.135Z Inject CC_CGI_IMPLEMENTATION
2026-10-27T22:22:57.135Z Inject CC_PRE_RUN_HOOK
2026-10-27T22:22:57.136Z Inject CC_DEPLOYMENT_ID
2026-10-27T22:22:57.136Z Inject CC_REVERSE_PROXY_IPS
2026-10-27T22:22:57.136Z Inject CC_APP_NAME
2026-10-27T22:22:57.137Z Inject INSTANCE_TYPE
2026-10-27T22:22:57.137Z Inject DB_CONNECTION
2026-10-27T22:22:57.137Z Inject WEB_ROOT
2026-10-27T22:22:57.137Z Inject CC_OWNER_ID
2026-10-27T22:22:57.137Z Inject APP_DEBUG
2026-10-27T22:22:57.137Z Inject DB_USERNAME
2026-10-27T22:22:57.137Z Inject APP_ENV
2026-10-27T22:22:57.137Z Inject DB_PORT
2026-10-27T22:22:57.137Z Inject APP_KEY
2026-10-27T22:22:57.137Z Inject CC_PHP_VERSION
2026-10-27T22:22:57.137Z Inject CC_PRETTY_INSTANCE_NAME
2026-10-27T22:22:57.137Z Inject PORT
2026-10-27T22:22:57.137Z Inject INSTANCE_ID
2026-10-27T22:22:57.137Z Inject CC_INSTANCE_ID
2026-10-27T22:22:57.137Z Inject COMMIT_ID
2026-10-27T22:22:57.138Z Inject CC_COMMIT_ID
2026-10-27T22:22:57.138Z Inject APP_ID
2026-10-27T22:22:57.138Z Inject CC_APP_ID
2026-10-27T22:22:57.138Z Inject APP_HOME
2026-10-27T22:22:57.138Z Added sourceable file /home/bas/applicationrc
2026-10-27T22:22:57.203Z Checking cache data: GET /api/builds/app_a40c7fb1-5078-497b-897a-38f06a15fa2c/b14dcb5b3e8df222c5f73499aa13865836e9fec8/php-20261027
2026-10-27T22:23:00.379Z No build cache archive has been detected, performing a new build…
2026-10-27T22:23:00.407Z Cloning into '/home/bas/app_a40c7fb1-5078-497b-897a-38f06a15fa2c'...
2026-10-27T22:23:01.576Z Note: switching to 'b14dcb5b3e8df222c5f73499aa13865836e9fec8'.
2026-10-27T22:23:01.576Z You are in 'detached HEAD' state. You can look around, make experimental
2026-10-27T22:23:01.576Z changes and commit them, and you can discard any commits you make in this
2026-10-27T22:23:01.576Z state without impacting any branches by switching back to a branch.
2026-10-27T22:23:01.576Z If you want to create a new branch to retain commits you create, you may
2026-10-27T22:23:01.576Z do so (now or later) by using -c with the switch command. Example:
2026-10-27T22:23:01.576Z   git switch -c <new-branch-name>
2026-10-27T22:23:01.576Z Or undo this operation with:
2026-10-27T22:23:01.576Z   git switch -
2026-10-27T22:23:01.576Z Turn off this advice by setting config variable advice.detachedHead to false
2026-10-27T22:23:01.577Z HEAD is now at b14dcb5 update
2026-10-27T22:23:01.586Z Generating public/private ed25519 key pair.
2026-10-27T22:23:01.586Z Your identification has been saved in /home/bas/.ssh/id_ed25519
2026-10-27T22:23:01.586Z Your public key has been saved in /home/bas/.ssh/id_ed25519.pub
2026-10-27T22:23:01.586Z The key fingerprint is:
2026-10-27T22:23:01.586Z SHA256:7iEyFWCG3BMEKyRWqoqKnPd9R3s0iDx3tqKmRuvlBJM bas@2798e443-8f47-4465-9e9f-d1efae30d3d6
2026-10-27T22:23:01.586Z The key's randomart image is:
2026-10-27T22:23:01.586Z +--[ED25519 256]--+
2026-10-27T22:23:01.586Z |.+o**.           |
2026-10-27T22:23:01.586Z |+ ++o.           |
2026-10-27T22:23:01.586Z |...  ..          |
2026-10-27T22:23:01.586Z |..     ..        |
2026-10-27T22:23:01.586Z |.     .ES . .    |
2026-10-27T22:23:01.586Z |o    . oo+ + =   |
2026-10-27T22:23:01.586Z |o   o o +o+ = o  |
2026-10-27T22:23:01.586Z |+ .. o.=++ + o   |
2026-10-27T22:23:01.586Z |oo. ..o+=oo o    |
2026-10-27T22:23:01.586Z +----[SHA256]-----+
2026-10-27T22:23:02.308Z No Clever Cloud specific configuration file detected. Continuing…
2026-10-27T22:23:02.358Z Using Gradle version 8
2026-10-27T22:23:02.398Z Using Hugo version 0.163
2026-10-27T22:23:02.759Z Using PHP version 8.5 with composer 2
2026-10-27T22:23:03.111Z Using Yarn 1.x as system Yarn version
2026-10-27T22:23:03.175Z Using Python version 3.13
2026-10-27T22:23:03.424Z Changing current directory to /home/bas/app_a40c7fb1-5078-497b-897a-38f06a15fa2c…
2026-10-27T22:23:03.424Z We are now in /home/bas/app_a40c7fb1-5078-497b-897a-38f06a15fa2c, let's build and run the app.
2026-10-27T22:23:03.425Z Deploying commit ID b14dcb5b3e8df222c5f73499aa13865836e9fec8
2026-10-27T22:23:04.150Z Using max_children 26
2026-10-27T22:23:04.194Z composer.json file detected
2026-10-27T22:23:04.199Z Running /usr/bin/composer.phar install with memory_limit=3303M --no-dev
2026-10-27T22:23:04.199Z Running: /usr/host/libexec/rubydeployer/scripts/tmp/setup-php.sh 3303 /usr/bin/composer.phar --no-dev
2026-10-27T22:23:05.555Z Installing dependencies from lock file
2026-10-27T22:23:05.562Z Verifying lock file contents can be installed on current platform.
2026-10-27T22:23:05.643Z Package operations: 82 installs, 0 updates, 0 removals
2026-10-27T22:23:05.664Z   - Downloading voku/portable-ascii (2.1.1)
2026-10-27T22:23:05.664Z   - Downloading symfony/polyfill-php80 (v1.43.0)
2026-10-27T22:23:05.664Z   - Downloading symfony/polyfill-mbstring (v1.43.0)
2026-10-27T22:23:05.665Z   - Downloading symfony/polyfill-ctype (v1.37.0)
2026-10-27T22:23:05.665Z   - Downloading phpoption/phpoption (1.10.0)
2026-10-27T22:23:05.665Z   - Downloading graham-campbell/result-type (v1.2.0)
2026-10-27T22:23:05.666Z   - Downloading vlucas/phpdotenv (v5.8.0)
2026-10-27T22:23:05.666Z   - Downloading symfony/css-selector (v7.4.18)
2026-10-27T22:23:05.667Z   - Downloading tijsverkoyen/css-to-inline-styles (v2.4.0)
2026-10-27T22:23:05.667Z   - Downloading symfony/deprecation-contracts (v3.7.1)
2026-10-27T22:23:05.667Z   - Downloading symfony/var-dumper (v7.4.21)
2026-10-27T22:23:05.667Z   - Downloading symfony/polyfill-uuid (v1.43.0)
2026-10-27T22:23:05.668Z   - Downloading symfony/uid (v7.4.21)
2026-10-27T22:23:05.668Z   - Downloading symfony/routing (v7.4.21)
2026-10-27T22:23:05.668Z   - Downloading symfony/process (v7.4.21)
2026-10-27T22:23:05.668Z   - Downloading symfony/polyfill-php85 (v1.43.0)
2026-10-27T22:23:05.669Z   - Downloading symfony/polyfill-php84 (v1.43.0)
2026-10-27T22:23:05.669Z   - Downloading symfony/polyfill-php83 (v1.43.0)
2026-10-27T22:23:05.669Z   - Downloading symfony/polyfill-intl-normalizer (v1.43.0)
2026-10-27T22:23:05.670Z   - Downloading symfony/polyfill-intl-idn (v1.43.0)
2026-10-27T22:23:05.670Z   - Downloading symfony/mime (v7.4.19)
2026-10-27T22:23:05.670Z   - Downloading psr/container (2.0.2)
2026-10-27T22:23:05.670Z   - Downloading symfony/service-contracts (v3.7.3)
2026-10-27T22:23:05.670Z   - Downloading psr/event-dispatcher (1.0.0)
2026-10-27T22:23:05.670Z   - Downloading symfony/event-dispatcher-contracts (v3.7.1)
2026-10-27T22:23:05.670Z   - Downloading symfony/event-dispatcher (v7.4.17)
2026-10-27T22:23:05.671Z   - Downloading psr/log (3.0.2)
2026-10-27T22:23:05.671Z   - Downloading doctrine/lexer (3.0.3)
2026-10-27T22:23:05.671Z   - Downloading egulias/email-validator (4.0.4)
2026-10-27T22:23:05.671Z   - Downloading symfony/mailer (v7.4.19)
2026-10-27T22:23:05.671Z   - Downloading symfony/http-foundation (v7.4.21)
2026-10-27T22:23:05.672Z   - Downloading symfony/error-handler (v7.4.20)
2026-10-27T22:23:05.672Z   - Downloading symfony/http-kernel (v7.4.21)
2026-10-27T22:23:05.672Z   - Downloading symfony/finder (v7.4.20)
2026-10-27T22:23:05.672Z   - Downloading symfony/polyfill-intl-grapheme (v1.43.0)
2026-10-27T22:23:05.672Z   - Downloading symfony/string (v7.4.21)
2026-10-27T22:23:05.672Z   - Downloading symfony/console (v7.4.21)
2026-10-27T22:23:05.673Z   - Downloading ramsey/collection (2.1.1)
2026-10-27T22:23:05.673Z   - Downloading brick/math (0.14.8)
2026-10-27T22:23:05.673Z   - Downloading ramsey/uuid (4.9.4)
2026-10-27T22:23:05.673Z   - Downloading psr/simple-cache (3.0.0)
2026-10-27T22:23:05.674Z   - Downloading nunomaduro/termwind (v2.4.0)
2026-10-27T22:23:05.674Z   - Downloading symfony/translation-contracts (v3.7.1)
2026-10-27T22:23:05.674Z   - Downloading symfony/translation (v7.4.17)
2026-10-27T22:23:05.674Z   - Downloading symfony/polyfill-time (v1.42.0)
2026-10-27T22:23:05.674Z   - Downloading psr/clock (1.0.0)
2026-10-27T22:23:05.675Z   - Downloading symfony/clock (v7.4.21)
2026-10-27T22:23:05.675Z   - Downloading carbonphp/carbon-doctrine-types (3.2.1)
2026-10-27T22:23:05.675Z   - Downloading nesbot/carbon (3.15.1)
2026-10-27T22:23:05.675Z   - Downloading monolog/monolog (3.12.1)
2026-10-27T22:23:05.676Z   - Downloading psr/http-message (2.0)
2026-10-27T22:23:05.676Z   - Downloading psr/http-factory (1.1.0)
2026-10-27T22:23:05.676Z   - Downloading league/uri-interfaces (7.9.0)
2026-10-27T22:23:05.676Z   - Downloading league/uri (7.9.0)
2026-10-27T22:23:05.676Z   - Downloading league/mime-type-detection (1.17.0)
2026-10-27T22:23:05.676Z   - Downloading league/flysystem-local (3.35.3)
2026-10-27T22:23:05.677Z   - Downloading league/flysystem (3.36.0)
2026-10-27T22:23:05.677Z   - Downloading nette/utils (v4.1.6)
2026-10-27T22:23:05.677Z   - Downloading nette/schema (v1.4.0)
2026-10-27T22:23:05.677Z   - Downloading dflydev/dot-access-data (v3.0.3)
2026-10-27T22:23:05.677Z   - Downloading league/config (v1.2.0)
2026-10-27T22:23:05.678Z   - Downloading league/commonmark (2.10.4)
2026-10-27T22:23:05.678Z   - Downloading laravel/serializable-closure (v2.1.0)
2026-10-27T22:23:05.678Z   - Downloading laravel/prompts (v0.3.26)
2026-10-27T22:23:05.678Z   - Downloading guzzlehttp/uri-template (v1.0.11)
2026-10-27T22:23:05.679Z   - Downloading psr/http-client (1.0.3)
2026-10-27T22:23:05.679Z   - Downloading ralouphie/getallheaders (3.0.3)
2026-10-27T22:23:05.679Z   - Downloading guzzlehttp/psr7 (2.13.2)
2026-10-27T22:23:05.679Z   - Downloading guzzlehttp/promises (2.6.0)
2026-10-27T22:23:05.679Z   - Downloading guzzlehttp/guzzle (7.16.1)
2026-10-27T22:23:05.680Z   - Downloading fruitcake/php-cors (v1.4.0)
2026-10-27T22:23:05.680Z   - Downloading dragonmantank/cron-expression (v3.6.1)
2026-10-27T22:23:05.680Z   - Downloading doctrine/inflector (2.1.1)
2026-10-27T22:23:05.680Z   - Downloading laravel/framework (v12.70.2)
2026-10-27T22:23:05.680Z   - Downloading spatie/laravel-package-tools (1.93.3)
2026-10-27T22:23:05.681Z   - Downloading phpstan/phpdoc-parser (2.3.8)
2026-10-27T22:23:05.681Z   - Downloading nikic/php-parser (v5.9.0)
2026-10-27T22:23:05.681Z   - Downloading myclabs/deep-copy (1.14.0)
2026-10-27T22:23:05.681Z   - Downloading dedoc/scramble (v0.13.51)
2026-10-27T22:23:05.682Z   - Downloading laravel/sanctum (v4.3.3)
2026-10-27T22:23:05.682Z   - Downloading psy/psysh (v0.12.24)
2026-10-27T22:23:05.682Z   - Downloading laravel/tinker (v2.11.1)
2026-10-27T22:23:09.540Z   - Installing voku/portable-ascii (2.1.1): Extracting archive
2026-10-27T22:23:09.543Z   - Installing symfony/polyfill-php80 (v1.43.0): Extracting archive
2026-10-27T22:23:09.544Z   - Installing symfony/polyfill-mbstring (v1.43.0): Extracting archive
2026-10-27T22:23:09.547Z   - Installing symfony/polyfill-ctype (v1.37.0): Extracting archive
2026-10-27T22:23:09.547Z   - Installing phpoption/phpoption (1.10.0): Extracting archive
2026-10-27T22:23:09.551Z   - Installing graham-campbell/result-type (v1.2.0): Extracting archive
2026-10-27T22:23:09.551Z   - Installing vlucas/phpdotenv (v5.8.0): Extracting archive
2026-10-27T22:23:09.554Z   - Installing symfony/css-selector (v7.4.18): Extracting archive
2026-10-27T22:23:09.555Z   - Installing tijsverkoyen/css-to-inline-styles (v2.4.0): Extracting archive
2026-10-27T22:23:09.561Z   - Installing symfony/deprecation-contracts (v3.7.1): Extracting archive
2026-10-27T22:23:09.578Z   - Installing symfony/var-dumper (v7.4.21): Extracting archive
2026-10-27T22:23:09.581Z   - Installing symfony/polyfill-uuid (v1.43.0): Extracting archive
2026-10-27T22:23:09.581Z   - Installing symfony/uid (v7.4.21): Extracting archive
2026-10-27T22:23:09.581Z   - Installing symfony/routing (v7.4.21): Extracting archive
2026-10-27T22:23:09.581Z   - Installing symfony/process (v7.4.21): Extracting archive
2026-10-27T22:23:09.581Z   - Installing symfony/polyfill-php85 (v1.43.0): Extracting archive
2026-10-27T22:23:09.586Z   - Installing symfony/polyfill-php84 (v1.43.0): Extracting archive
2026-10-27T22:23:09.586Z   - Installing symfony/polyfill-php83 (v1.43.0): Extracting archive
2026-10-27T22:23:09.586Z   - Installing symfony/polyfill-intl-normalizer (v1.43.0): Extracting archive
2026-10-27T22:23:09.589Z   - Installing symfony/polyfill-intl-idn (v1.43.0): Extracting archive
2026-10-27T22:23:09.589Z   - Installing symfony/mime (v7.4.19): Extracting archive
2026-10-27T22:23:09.590Z   - Installing psr/container (2.0.2): Extracting archive
2026-10-27T22:23:09.590Z   - Installing symfony/service-contracts (v3.7.3): Extracting archive
2026-10-27T22:23:09.590Z   - Installing psr/event-dispatcher (1.0.0): Extracting archive
2026-10-27T22:23:09.591Z   - Installing symfony/event-dispatcher-contracts (v3.7.1): Extracting archive
2026-10-27T22:23:09.591Z   - Installing symfony/event-dispatcher (v7.4.17): Extracting archive
2026-10-27T22:23:09.591Z   - Installing psr/log (3.0.2): Extracting archive
2026-10-27T22:23:09.592Z   - Installing doctrine/lexer (3.0.3): Extracting archive
2026-10-27T22:23:09.592Z   - Installing egulias/email-validator (4.0.4): Extracting archive
2026-10-27T22:23:09.592Z   - Installing symfony/mailer (v7.4.19): Extracting archive
2026-10-27T22:23:09.603Z   - Installing symfony/http-foundation (v7.4.21): Extracting archive
2026-10-27T22:23:09.603Z   - Installing symfony/error-handler (v7.4.20): Extracting archive
2026-10-27T22:23:09.603Z   - Installing symfony/http-kernel (v7.4.21): Extracting archive
2026-10-27T22:23:09.603Z   - Installing symfony/finder (v7.4.20): Extracting archive
2026-10-27T22:23:09.603Z   - Installing symfony/polyfill-intl-grapheme (v1.43.0): Extracting archive
2026-10-27T22:23:09.603Z   - Installing symfony/string (v7.4.21): Extracting archive
2026-10-27T22:23:09.603Z   - Installing symfony/console (v7.4.21): Extracting archive
2026-10-27T22:23:09.603Z   - Installing ramsey/collection (2.1.1): Extracting archive
2026-10-27T22:23:09.603Z   - Installing brick/math (0.14.8): Extracting archive
2026-10-27T22:23:09.603Z   - Installing ramsey/uuid (4.9.4): Extracting archive
2026-10-27T22:23:09.603Z   - Installing psr/simple-cache (3.0.0): Extracting archive
2026-10-27T22:23:09.603Z   - Installing nunomaduro/termwind (v2.4.0): Extracting archive
2026-10-27T22:23:09.603Z   - Installing symfony/translation-contracts (v3.7.1): Extracting archive
2026-10-27T22:23:09.603Z   - Installing symfony/translation (v7.4.17): Extracting archive
2026-10-27T22:23:09.603Z   - Installing symfony/polyfill-time (v1.42.0): Extracting archive
2026-10-27T22:23:09.603Z   - Installing psr/clock (1.0.0): Extracting archive
2026-10-27T22:23:09.603Z   - Installing symfony/clock (v7.4.21): Extracting archive
2026-10-27T22:23:09.603Z   - Installing carbonphp/carbon-doctrine-types (3.2.1): Extracting archive
2026-10-27T22:23:09.603Z   - Installing nesbot/carbon (3.15.1): Extracting archive
2026-10-27T22:23:09.603Z   - Installing monolog/monolog (3.12.1): Extracting archive
2026-10-27T22:23:09.603Z   - Installing psr/http-message (2.0): Extracting archive
2026-10-27T22:23:09.603Z   - Installing psr/http-factory (1.1.0): Extracting archive
2026-10-27T22:23:09.618Z   - Installing league/uri-interfaces (7.9.0): Extracting archive
2026-10-27T22:23:09.618Z   - Installing league/uri (7.9.0): Extracting archive
2026-10-27T22:23:09.618Z   - Installing league/mime-type-detection (1.17.0): Extracting archive
2026-10-27T22:23:09.618Z   - Installing league/flysystem-local (3.35.3): Extracting archive
2026-10-27T22:23:09.618Z   - Installing league/flysystem (3.36.0): Extracting archive
2026-10-27T22:23:09.618Z   - Installing nette/utils (v4.1.6): Extracting archive
2026-10-27T22:23:09.618Z   - Installing nette/schema (v1.4.0): Extracting archive
2026-10-27T22:23:09.618Z   - Installing dflydev/dot-access-data (v3.0.3): Extracting archive
2026-10-27T22:23:09.618Z   - Installing league/config (v1.2.0): Extracting archive
2026-10-27T22:23:09.618Z   - Installing league/commonmark (2.10.4): Extracting archive
2026-10-27T22:23:09.618Z   - Installing laravel/serializable-closure (v2.1.0): Extracting archive
2026-10-27T22:23:09.618Z   - Installing laravel/prompts (v0.3.26): Extracting archive
2026-10-27T22:23:09.619Z   - Installing guzzlehttp/uri-template (v1.0.11): Extracting archive
2026-10-27T22:23:09.619Z   - Installing psr/http-client (1.0.3): Extracting archive
2026-10-27T22:23:09.619Z   - Installing ralouphie/getallheaders (3.0.3): Extracting archive
2026-10-27T22:23:09.620Z   - Installing guzzlehttp/psr7 (2.13.2): Extracting archive
2026-10-27T22:23:09.620Z   - Installing guzzlehttp/promises (2.6.0): Extracting archive
2026-10-27T22:23:09.620Z   - Installing guzzlehttp/guzzle (7.16.1): Extracting archive
2026-10-27T22:23:09.621Z   - Installing fruitcake/php-cors (v1.4.0): Extracting archive
2026-10-27T22:23:09.621Z   - Installing dragonmantank/cron-expression (v3.6.1): Extracting archive
2026-10-27T22:23:09.622Z   - Installing doctrine/inflector (2.1.1): Extracting archive
2026-10-27T22:23:09.622Z   - Installing laravel/framework (v12.70.2): Extracting archive
2026-10-27T22:23:09.622Z   - Installing spatie/laravel-package-tools (1.93.3): Extracting archive
2026-10-27T22:23:09.623Z   - Installing phpstan/phpdoc-parser (2.3.8): Extracting archive
2026-10-27T22:23:09.623Z   - Installing nikic/php-parser (v5.9.0): Extracting archive
2026-10-27T22:23:09.623Z   - Installing myclabs/deep-copy (1.14.0): Extracting archive
2026-10-27T22:23:09.627Z   - Installing dedoc/scramble (v0.13.51): Extracting archive
2026-10-27T22:23:09.627Z   - Installing laravel/sanctum (v4.3.3): Extracting archive
2026-10-27T22:23:09.627Z   - Installing psy/psysh (v0.12.24): Extracting archive
2026-10-27T22:23:09.627Z   - Installing laravel/tinker (v2.11.1): Extracting archive
2026-10-27T22:23:10.707Z Generating optimized autoload files
2026-10-27T22:23:11.989Z Class App\Models\Mobil located in ./app/Models/mobil.php does not comply with psr-4 autoloading standard (rule: App\ => ./app). Skipping.
2026-10-27T22:23:12.083Z > Illuminate\Foundation\ComposerScripts::postAutoloadDump
2026-10-27T22:23:12.107Z > @php artisan package:discover --ansi
2026-10-27T22:23:12.359Z    INFO  Discovering packages.
2026-10-27T22:23:12.364Z   dedoc/scramble ........................................................ DONE
2026-10-27T22:23:12.364Z   laravel/sanctum ....................................................... DONE
2026-10-27T22:23:12.365Z   laravel/tinker ........................................................ DONE
2026-10-27T22:23:12.365Z   nesbot/carbon ......................................................... DONE
2026-10-27T22:23:12.366Z   nunomaduro/termwind ................................................... DONE
2026-10-27T22:23:12.378Z 57 packages you are using are looking for funding.
2026-10-27T22:23:12.378Z Use the `composer fund` command to find out more!
2026-10-27T22:23:12.398Z Creating build cache archive…
2026-10-27T22:23:12.882Z build cache archive successfully created
2026-10-27T22:23:12.883Z No cron to setup
2026-10-27T22:23:12.900Z Uploading application build cache archive… file is 42M before compression.
2026-10-27T22:23:22.454Z 2026-10-27T22:23:22.454343Z  INFO multipart_upload_lib::uploader: Uploaded part=1
2026-10-27T22:23:23.459Z 2026-10-27T22:23:23.459414Z  INFO multipart_upload_lib::uploader: Completed the multipart upload
2026-10-27T22:23:23.462Z Done uploading build cache archive
2026-10-27T22:23:23.474Z Build succeeded in 0 minutes and 20 seconds
2026-10-27T22:23:38.868Z (CRON) STARTUP (1.7.2)
2026-10-27T22:23:38.870Z (CRON) INFO (RANDOM_DELAY will be scaled with factor 93% if used.)
2026-10-27T22:23:38.870Z (CRON) INFO (running with inotify support)
2026-10-27T22:23:42.042Z Received response from supernova
2026-10-27T22:23:42.588Z Configuring /etc/rsyslog-pulsar.conf to crawl logs...
2026-10-27T22:23:42.589Z Starting rsyslog-pulsar.service...
2026-10-27T22:23:43.524Z rsyslog-pulsar.service started
2026-10-27T22:23:43.542Z Capturing output of: wg genkey
2026-10-27T22:23:43.551Z Capturing output of: wg pubkey
2026-10-27T22:23:47.372Z Preparing application environment…
2026-10-27T22:23:48.333Z Inject APP_ENV
2026-10-27T22:23:48.334Z Inject CC_PRE_RUN_HOOK
2026-10-27T22:23:48.334Z Inject CC_REVERSE_PROXY_IPS
2026-10-27T22:23:48.334Z Inject INSTANCE_TYPE
2026-10-27T22:23:48.334Z Inject DB_CONNECTION
2026-10-27T22:23:48.334Z Inject CC_DEPLOYMENT_ID
2026-10-27T22:23:48.334Z Inject INSTANCE_NUMBER
2026-10-27T22:23:48.334Z Inject CC_OWNER_ID
2026-10-27T22:23:48.336Z Inject CC_APP_NAME
2026-10-27T22:23:48.336Z Inject DB_PORT
2026-10-27T22:23:48.336Z Inject APP_KEY
2026-10-27T22:23:48.336Z Inject WEB_ROOT
2026-10-27T22:23:48.336Z Inject APP_DEBUG
2026-10-27T22:23:48.336Z Inject DB_HOST
2026-10-27T22:23:48.336Z Inject DB_USERNAME
2026-10-27T22:23:48.336Z Inject DB_PASSWORD
2026-10-27T22:23:48.336Z Inject DB_DATABASE
2026-10-27T22:23:48.336Z Inject CC_CGI_IMPLEMENTATION
2026-10-27T22:23:48.336Z Inject CC_PHP_VERSION
2026-10-27T22:23:48.337Z Inject CC_COMPOSER_VERSION
2026-10-27T22:23:48.337Z Inject CC_PRETTY_INSTANCE_NAME
2026-10-27T22:23:48.337Z Inject PORT
2026-10-27T22:23:48.338Z Inject INSTANCE_ID
2026-10-27T22:23:48.338Z Inject CC_INSTANCE_ID
2026-10-27T22:23:48.339Z Inject COMMIT_ID
2026-10-27T22:23:48.339Z Inject CC_COMMIT_ID
2026-10-27T22:23:48.339Z Inject APP_ID
2026-10-27T22:23:48.339Z Inject CC_APP_ID
2026-10-27T22:23:48.339Z Inject APP_HOME
2026-10-27T22:23:48.339Z Added sourceable file /home/bas/applicationrc
2026-10-27T22:23:48.445Z Checking cache data: GET /api/builds/app_a40c7fb1-5078-497b-897a-38f06a15fa2c/b14dcb5b3e8df222c5f73499aa13865836e9fec8/php-20261027
2026-10-27T22:23:49.052Z A build cache archive exists, downloading in progress…
2026-10-27T22:23:52.614Z Successfully downloaded build cache archive
2026-10-27T22:23:52.623Z Generating public/private ed25519 key pair.
2026-10-27T22:23:52.623Z Your identification has been saved in /home/bas/.ssh/id_ed25519
2026-10-27T22:23:52.623Z Your public key has been saved in /home/bas/.ssh/id_ed25519.pub
2026-10-27T22:23:52.623Z The key fingerprint is:
2026-10-27T22:23:52.623Z SHA256:KNezmlFaKjcKmXDlInQ0e249UPQZDNKTvxSVZXBvnb0 bas@9f33dacb-fa15-437f-b247-8dd44735c0d1
2026-10-27T22:23:52.623Z The key's randomart image is:
2026-10-27T22:23:52.623Z +--[ED25519 256]--+
2026-10-27T22:23:52.623Z |   o .o++..o++   |
2026-10-27T22:23:52.623Z |  . o o+.oo.o . +|
2026-10-27T22:23:52.623Z | . o.o  oo.    +o|
2026-10-27T22:23:52.623Z |. .oo oo o    . .|
2026-10-27T22:23:52.623Z |o o ooooS .    E |
2026-10-27T22:23:52.623Z | + +.o =.+       |
2026-10-27T22:23:52.623Z |  + . * .        |
2026-10-27T22:23:52.623Z |   . + =         |
2026-10-27T22:23:52.623Z |    . o          |
2026-10-27T22:23:52.623Z +----[SHA256]-----+
2026-10-27T22:23:53.487Z No Clever Cloud specific configuration file detected. Continuing…
2026-10-27T22:23:53.548Z Using Gradle version 8
2026-10-27T22:23:53.598Z Using Hugo version 0.163
2026-10-27T22:23:54.042Z Using PHP version 8.5 with composer 2
2026-10-27T22:23:54.437Z Using Yarn 1.x as system Yarn version
2026-10-27T22:23:54.502Z Using Python version 3.13
2026-10-27T22:23:54.764Z Changing current directory to /home/bas/app_a40c7fb1-5078-497b-897a-38f06a15fa2c…
2026-10-27T22:23:54.765Z We are now in /home/bas/app_a40c7fb1-5078-497b-897a-38f06a15fa2c, let's build and run the app.
2026-10-27T22:23:54.765Z Deploying commit ID b14dcb5b3e8df222c5f73499aa13865836e9fec8
2026-10-27T22:23:55.538Z Using max_children 6
2026-10-27T22:23:55.597Z Running CC_PRE_RUN_HOOK: php artisan config:clear && php artisan migrate --force
2026-10-27T22:23:57.965Z    INFO  Configuration cache cleared successfully.
2026-10-27T22:23:58.501Z    INFO  Running migrations.
2026-10-27T22:23:58.543Z   2026_10_27_171345_create_personal_access_tokens_table ......... 37.50ms FAIL
2026-10-27T22:23:58.587Z In Connection.php line 838:
2026-10-27T22:23:58.588Z                                                                                
2026-10-27T22:23:58.588Z   SQLSTATE[42S01]: Base table or view already exists: 1050 Table 'personal_ac
2026-10-27T22:23:58.588Z   cess_tokens' already exists (Connection: mysql, Host: bebtng.dnccudinus.org
2026-10-27T22:23:58.588Z   , Port: 3307, Database: db_a11_2026_16823, SQL: create table `personal_acce
2026-10-27T22:23:58.588Z   ss_tokens` (`id` bigint unsigned not null auto_increment primary key, `toke
2026-10-27T22:23:58.588Z   nable_type` varchar(255) not null, `tokenable_id` bigint unsigned not null,
2026-10-27T22:23:58.588Z    `name` text not null, `token` varchar(64) not null, `abilities` text null,
2026-10-27T22:23:58.588Z    `last_used_at` timestamp null, `expires_at` timestamp null, `created_at` t
2026-10-27T22:23:58.588Z   imestamp null, `updated_at` timestamp null) default character set utf8mb4 c
2026-10-27T22:23:58.588Z   ollate 'utf8mb4_unicode_ci')
2026-10-27T22:23:58.588Z                                                                                
2026-10-27T22:23:58.589Z In Connection.php line 584:
2026-10-27T22:23:58.589Z                                                                                
2026-10-27T22:23:58.590Z   SQLSTATE[42S01]: Base table or view already exists: 1050 Table 'personal_ac
2026-10-27T22:23:58.590Z   cess_tokens' already exists
2026-10-27T22:23:58.590Z                                                                                
2026-10-27T22:23:58.604Z [ERROR] Error during hook CC_PRE_RUN_HOOK: please review the log for more information
2026-10-27T22:23:58.604Z [ERROR] Deploy failed in 0 minutes and 16 seconds. Please review the lines above to find out why