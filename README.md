# AWE Casino Client v1.0.0

The **AWE Client** has been created to make it easier to Begame developers to integrate our Casino Web Service in their PHP code. The installation can be done through Composer.

## Getting Started

If you are about integration the Begame Casino Web Service in a platform, you need to take the following points into consideration:

1. Getting credentials – Before you begin, you need credentials to be able to communicate with the service. So contact us in order to get them.
1. Minimum requirements – To run the SDK, your system will need to meet the minimum requirements, including having PHP >= 5.5 compiled with the cURL extension and cURL 7.16.2+ compiled with a TLS backend (e.g., NSS or OpenSSL).
1. Install the SDK – Using Composer is the recommended way to install the AWE Client.

## Installation

1. Create a file at the root level of your project called **composer.json** and add the following dependency for the AWE Client SDK

{
    "require": {
        "begame/casino": "master"
    }
}

2. Install the dependencies by running Composer's install command:

```$composer install```

3. Require Composer's autoloader by adding the following line to your code's bootstrap process (typically in index.php):

```xml
require '/path/to/sdk/vendor/autoload.php';
```

## Quick Example

Create an AWE Casino Client
```php
<?php
// Require the Composer autoloader.
require 'vendor/autoload.php';

use Begame\Casino\AWEClient;

$platform = AWEClient::get()
                ->setEndPoint("https://myplatform.endpoint")
                ->setDefaultCurrency(Currency::EUR)
                ->setDefaultLanguage(Language::ENGLISH)
                ->setSecretKey("ihd89hcebrc927b39fv824ni9483jhf8")
                ->setPlatformName("Casino Platform");
```
