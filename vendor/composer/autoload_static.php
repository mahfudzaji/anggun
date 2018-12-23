<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInit16cc2351b9b9c213b14e4980105150bc
{
    public static $files = array (
        '5255c38a0faeba867671b61dfda6d864' => __DIR__ . '/..' . '/paragonie/random_compat/lib/random.php',
    );

    public static $prefixLengthsPsr4 = array (
        'R' => 
        array (
            'ReCaptcha\\' => 10,
        ),
        'D' => 
        array (
            'Defuse\\Crypto\\' => 14,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'ReCaptcha\\' => 
        array (
            0 => __DIR__ . '/..' . '/google/recaptcha/src/ReCaptcha',
        ),
        'Defuse\\Crypto\\' => 
        array (
            0 => __DIR__ . '/..' . '/defuse/php-encryption/src',
        ),
    );

    public static $classMap = array (
        'App\\Controllers\\FormController' => __DIR__ . '/../..' . '/app/controllers/FormController.php',
        'App\\Controllers\\HomeController' => __DIR__ . '/../..' . '/app/controllers/HomeController.php',
        'App\\Controllers\\NotificationController' => __DIR__ . '/../..' . '/app/controllers/NotificationController.php',
        'App\\Controllers\\PAController' => __DIR__ . '/../..' . '/app/controllers/PAController.php',
        'App\\Controllers\\PageController' => __DIR__ . '/../..' . '/app/controllers/PageController.php',
        'App\\Controllers\\PartnerController' => __DIR__ . '/../..' . '/app/controllers/PartnerController.php',
        'App\\Controllers\\PrintController' => __DIR__ . '/../..' . '/app/controllers/PrintController.php',
        'App\\Controllers\\ProjectController' => __DIR__ . '/../..' . '/app/controllers/ProjectController.php',
        'App\\Controllers\\RoleController' => __DIR__ . '/../..' . '/app/controllers/RoleController.php',
        'App\\Controllers\\SettingController' => __DIR__ . '/../..' . '/app/controllers/SettingController.php',
        'App\\Controllers\\StockController' => __DIR__ . '/../..' . '/app/controllers/StockController.php',
        'App\\Controllers\\UploadController' => __DIR__ . '/../..' . '/app/controllers/UploadController.php',
        'App\\Controllers\\UserController' => __DIR__ . '/../..' . '/app/controllers/UserController.php',
        'App\\Core\\Activity' => __DIR__ . '/../..' . '/core/Activity.php',
        'App\\Core\\App' => __DIR__ . '/../..' . '/core/App.php',
        'App\\Core\\Auth' => __DIR__ . '/../..' . '/core/Auth.php',
        'App\\Core\\Request' => __DIR__ . '/../..' . '/core/Request.php',
        'App\\Core\\Role' => __DIR__ . '/../..' . '/core/Role.php',
        'App\\Core\\Router' => __DIR__ . '/../..' . '/core/Router.php',
        'Asset' => __DIR__ . '/../..' . '/app/Asset.php',
        'ComposerAutoloaderInit16cc2351b9b9c213b14e4980105150bc' => __DIR__ . '/..' . '/composer/autoload_real.php',
        'Composer\\Autoload\\ClassLoader' => __DIR__ . '/..' . '/composer/ClassLoader.php',
        'Composer\\Autoload\\ComposerStaticInit16cc2351b9b9c213b14e4980105150bc' => __DIR__ . '/..' . '/composer/autoload_static.php',
        'Connection' => __DIR__ . '/../..' . '/core/database/Connection.php',
        'Defuse\\Crypto\\Core' => __DIR__ . '/..' . '/defuse/php-encryption/src/Core.php',
        'Defuse\\Crypto\\Crypto' => __DIR__ . '/..' . '/defuse/php-encryption/src/Crypto.php',
        'Defuse\\Crypto\\DerivedKeys' => __DIR__ . '/..' . '/defuse/php-encryption/src/DerivedKeys.php',
        'Defuse\\Crypto\\Encoding' => __DIR__ . '/..' . '/defuse/php-encryption/src/Encoding.php',
        'Defuse\\Crypto\\Exception\\BadFormatException' => __DIR__ . '/..' . '/defuse/php-encryption/src/Exception/BadFormatException.php',
        'Defuse\\Crypto\\Exception\\CryptoException' => __DIR__ . '/..' . '/defuse/php-encryption/src/Exception/CryptoException.php',
        'Defuse\\Crypto\\Exception\\EnvironmentIsBrokenException' => __DIR__ . '/..' . '/defuse/php-encryption/src/Exception/EnvironmentIsBrokenException.php',
        'Defuse\\Crypto\\Exception\\IOException' => __DIR__ . '/..' . '/defuse/php-encryption/src/Exception/IOException.php',
        'Defuse\\Crypto\\Exception\\WrongKeyOrModifiedCiphertextException' => __DIR__ . '/..' . '/defuse/php-encryption/src/Exception/WrongKeyOrModifiedCiphertextException.php',
        'Defuse\\Crypto\\File' => __DIR__ . '/..' . '/defuse/php-encryption/src/File.php',
        'Defuse\\Crypto\\Key' => __DIR__ . '/..' . '/defuse/php-encryption/src/Key.php',
        'Defuse\\Crypto\\KeyOrPassword' => __DIR__ . '/..' . '/defuse/php-encryption/src/KeyOrPassword.php',
        'Defuse\\Crypto\\KeyProtectedByPassword' => __DIR__ . '/..' . '/defuse/php-encryption/src/KeyProtectedByPassword.php',
        'Defuse\\Crypto\\RuntimeTests' => __DIR__ . '/..' . '/defuse/php-encryption/src/RuntimeTests.php',
        'Document' => __DIR__ . '/../..' . '/app/Document.php',
        'EasyPeasyICS' => __DIR__ . '/..' . '/phpmailer/phpmailer/extras/EasyPeasyICS.php',
        'Error' => __DIR__ . '/..' . '/paragonie/random_compat/lib/error_polyfill.php',
        'Internal' => __DIR__ . '/../..' . '/app/Internal.php',
        'League\\OAuth2\\Client\\Provider\\Google' => __DIR__ . '/..' . '/phpmailer/phpmailer/get_oauth_token.php',
        'Mail' => __DIR__ . '/../..' . '/core/Mail.php',
        'PHPMailer' => __DIR__ . '/..' . '/phpmailer/phpmailer/class.phpmailer.php',
        'PHPMailerOAuth' => __DIR__ . '/..' . '/phpmailer/phpmailer/class.phpmaileroauth.php',
        'PHPMailerOAuthGoogle' => __DIR__ . '/..' . '/phpmailer/phpmailer/class.phpmaileroauthgoogle.php',
        'POP3' => __DIR__ . '/..' . '/phpmailer/phpmailer/class.pop3.php',
        'Partner' => __DIR__ . '/../..' . '/app/Partner.php',
        'Product' => __DIR__ . '/../..' . '/app/Product.php',
        'Project' => __DIR__ . '/../..' . '/app/Project.php',
        'QueryBuilder' => __DIR__ . '/../..' . '/core/database/QueryBuilder.php',
        'ReCaptcha\\ReCaptcha' => __DIR__ . '/..' . '/google/recaptcha/src/ReCaptcha/ReCaptcha.php',
        'ReCaptcha\\ReCaptchaTest' => __DIR__ . '/..' . '/google/recaptcha/tests/ReCaptcha/ReCaptchaTest.php',
        'ReCaptcha\\RequestMethod' => __DIR__ . '/..' . '/google/recaptcha/src/ReCaptcha/RequestMethod.php',
        'ReCaptcha\\RequestMethod\\Curl' => __DIR__ . '/..' . '/google/recaptcha/src/ReCaptcha/RequestMethod/Curl.php',
        'ReCaptcha\\RequestMethod\\CurlPost' => __DIR__ . '/..' . '/google/recaptcha/src/ReCaptcha/RequestMethod/CurlPost.php',
        'ReCaptcha\\RequestMethod\\CurlPostTest' => __DIR__ . '/..' . '/google/recaptcha/tests/ReCaptcha/RequestMethod/CurlPostTest.php',
        'ReCaptcha\\RequestMethod\\Post' => __DIR__ . '/..' . '/google/recaptcha/src/ReCaptcha/RequestMethod/Post.php',
        'ReCaptcha\\RequestMethod\\PostTest' => __DIR__ . '/..' . '/google/recaptcha/tests/ReCaptcha/RequestMethod/PostTest.php',
        'ReCaptcha\\RequestMethod\\Socket' => __DIR__ . '/..' . '/google/recaptcha/src/ReCaptcha/RequestMethod/Socket.php',
        'ReCaptcha\\RequestMethod\\SocketPost' => __DIR__ . '/..' . '/google/recaptcha/src/ReCaptcha/RequestMethod/SocketPost.php',
        'ReCaptcha\\RequestMethod\\SocketPostTest' => __DIR__ . '/..' . '/google/recaptcha/tests/ReCaptcha/RequestMethod/SocketPostTest.php',
        'ReCaptcha\\RequestParameters' => __DIR__ . '/..' . '/google/recaptcha/src/ReCaptcha/RequestParameters.php',
        'ReCaptcha\\RequestParametersTest' => __DIR__ . '/..' . '/google/recaptcha/tests/ReCaptcha/RequestParametersTest.php',
        'ReCaptcha\\Response' => __DIR__ . '/..' . '/google/recaptcha/src/ReCaptcha/Response.php',
        'ReCaptcha\\ResponseTest' => __DIR__ . '/..' . '/google/recaptcha/tests/ReCaptcha/ResponseTest.php',
        'Role' => __DIR__ . '/../..' . '/app/Role.php',
        'SMTP' => __DIR__ . '/..' . '/phpmailer/phpmailer/class.smtp.php',
        'Setting' => __DIR__ . '/../..' . '/app/Setting.php',
        'Stock' => __DIR__ . '/../..' . '/app/Stock.php',
        'TypeError' => __DIR__ . '/..' . '/paragonie/random_compat/lib/error_polyfill.php',
        'User' => __DIR__ . '/../..' . '/app/User.php',
        'ntlm_sasl_client_class' => __DIR__ . '/..' . '/phpmailer/phpmailer/extras/ntlm_sasl_client.php',
        'phpmailerException' => __DIR__ . '/..' . '/phpmailer/phpmailer/class.phpmailer.php',
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->prefixLengthsPsr4 = ComposerStaticInit16cc2351b9b9c213b14e4980105150bc::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInit16cc2351b9b9c213b14e4980105150bc::$prefixDirsPsr4;
            $loader->classMap = ComposerStaticInit16cc2351b9b9c213b14e4980105150bc::$classMap;

        }, null, ClassLoader::class);
    }
}