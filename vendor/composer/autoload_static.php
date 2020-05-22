<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInitee0359872c8ace6ff17dc6fe6283e106
{
    public static $prefixLengthsPsr4 = array (
        'c' => 
        array (
            'cq\\' => 3,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'cq\\' => 
        array (
            0 => __DIR__ . '/..' . '/cq/php-classes/src',
        ),
    );

    public static $prefixesPsr0 = array (
        'S' => 
        array (
            'Slim' => 
            array (
                0 => __DIR__ . '/..' . '/slim/slim',
            ),
        ),
        'R' => 
        array (
            'Rain' => 
            array (
                0 => __DIR__ . '/..' . '/rain/raintpl/library',
            ),
        ),
    );

    public static $classMap = array (
        'EasyPeasyICS' => __DIR__ . '/..' . '/phpmailer/phpmailer/extras/EasyPeasyICS.php',
        'PHPMailer' => __DIR__ . '/..' . '/phpmailer/phpmailer/class.phpmailer.php',
        'PHPMailerOAuth' => __DIR__ . '/..' . '/phpmailer/phpmailer/class.phpmaileroauth.php',
        'PHPMailerOAuthGoogle' => __DIR__ . '/..' . '/phpmailer/phpmailer/class.phpmaileroauthgoogle.php',
        'POP3' => __DIR__ . '/..' . '/phpmailer/phpmailer/class.pop3.php',
        'SMTP' => __DIR__ . '/..' . '/phpmailer/phpmailer/class.smtp.php',
        'ntlm_sasl_client_class' => __DIR__ . '/..' . '/phpmailer/phpmailer/extras/ntlm_sasl_client.php',
        'phpmailerException' => __DIR__ . '/..' . '/phpmailer/phpmailer/class.phpmailer.php',
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->prefixLengthsPsr4 = ComposerStaticInitee0359872c8ace6ff17dc6fe6283e106::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInitee0359872c8ace6ff17dc6fe6283e106::$prefixDirsPsr4;
            $loader->prefixesPsr0 = ComposerStaticInitee0359872c8ace6ff17dc6fe6283e106::$prefixesPsr0;
            $loader->classMap = ComposerStaticInitee0359872c8ace6ff17dc6fe6283e106::$classMap;

        }, null, ClassLoader::class);
    }
}
