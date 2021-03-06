<?php

declare(strict_types=1);

namespace PackageVersions;

use Composer\InstalledVersions;
use OutOfBoundsException;

class_exists(InstalledVersions::class);

/**
 * This class is generated by composer/package-versions-deprecated, specifically by
 * @see \PackageVersions\Installer
 *
 * This file is overwritten at every run of `composer install` or `composer update`.
 *
 * @deprecated in favor of the Composer\InstalledVersions class provided by Composer 2. Require composer-runtime-api:^2 to ensure it is present.
 */
final class Versions
{
    /**
     * @deprecated please use {@see self::rootPackageName()} instead.
     *             This constant will be removed in version 2.0.0.
     */
    const ROOT_PACKAGE_NAME = '__root__';

    /**
     * Array of all available composer packages.
     * Dont read this array from your calling code, but use the \PackageVersions\Versions::getVersion() method instead.
     *
     * @var array<string, string>
     * @internal
     */
    const VERSIONS          = array (
  'api-platform/core' => 'v2.5.7@37b5edf50cc05299b12cb8982be3efa035d726ce',
  'composer/package-versions-deprecated' => '1.11.99.1@7413f0b55a051e89485c5cb9f765fe24bb02a7b6',
  'doctrine/annotations' => '1.11.1@ce77a7ba1770462cd705a91a151b6c3746f9c6ad',
  'doctrine/cache' => '1.10.2@13e3381b25847283a91948d04640543941309727',
  'doctrine/collections' => '1.6.7@55f8b799269a1a472457bd1a41b4f379d4cfba4a',
  'doctrine/common' => '3.0.2@a3c6479858989e242a2465972b4f7a8642baf0d4',
  'doctrine/dbal' => '2.12.1@adce7a954a1c2f14f85e94aed90c8489af204086',
  'doctrine/doctrine-bundle' => '2.2.1@9e07bb1ff35d35d9ec4597b79e5d05502d7d4d43',
  'doctrine/doctrine-migrations-bundle' => '3.0.1@96e730b0ffa0bb39c0f913c1966213f1674bf249',
  'doctrine/event-manager' => '1.1.1@41370af6a30faa9dc0368c4a6814d596e81aba7f',
  'doctrine/inflector' => '1.4.3@4650c8b30c753a76bf44fb2ed00117d6f367490c',
  'doctrine/instantiator' => '1.4.0@d56bf6102915de5702778fe20f2de3b2fe570b5b',
  'doctrine/lexer' => '1.2.1@e864bbf5904cb8f5bb334f99209b48018522f042',
  'doctrine/migrations' => '3.0.1@69eaf2ca5bc48357b43ddbdc31ccdffc0e2a0882',
  'doctrine/orm' => '2.7.4@7d84a4998091ece4d645253ac65de9f879eeed2f',
  'doctrine/persistence' => '2.1.0@9899c16934053880876b920a3b8b02ed2337ac1d',
  'doctrine/sql-formatter' => '1.1.1@56070bebac6e77230ed7d306ad13528e60732871',
  'egulias/email-validator' => '2.1.24@ca90a3291eee1538cd48ff25163240695bd95448',
  'fig/link-util' => '1.1.1@c038ee75ca13663ddc2d1f185fe6f7533c00832a',
  'laminas/laminas-code' => '3.5.1@b549b70c0bb6e935d497f84f750c82653326ac77',
  'laminas/laminas-eventmanager' => '3.3.0@1940ccf30e058b2fd66f5a9d696f1b5e0027b082',
  'laminas/laminas-zendframework-bridge' => '1.1.1@6ede70583e101030bcace4dcddd648f760ddf642',
  'lcobucci/clock' => '2.0.0@353d83fe2e6ae95745b16b3d911813df6a05bfb3',
  'lcobucci/jwt' => '4.0.0@6d8665ccd924dc076a9b65d1ea8abe21d68f6958',
  'lexik/jwt-authentication-bundle' => 'v2.10.3@1bc35b61963760007928de310ba408bfaa8bbd45',
  'maennchen/zipstream-php' => '2.1.0@c4c5803cc1f93df3d2448478ef79394a5981cc58',
  'markbaker/complex' => '2.0.0@9999f1432fae467bc93c53f357105b4c31bb994c',
  'markbaker/matrix' => '2.0.0@9567d9c4c519fbe40de01dbd1e4469dbbb66f46a',
  'monolog/monolog' => '2.1.1@f9eee5cec93dfb313a38b6b288741e84e53f02d5',
  'myclabs/php-enum' => '1.7.7@d178027d1e679832db9f38248fcc7200647dc2b7',
  'namshi/jose' => '7.2.3@89a24d7eb3040e285dd5925fcad992378b82bcff',
  'nelmio/cors-bundle' => '2.1.0@be4d5824caebc86da9e224e935e02e1201b3ea54',
  'ocramius/proxy-manager' => '2.8.0@ac1dd414fd114cfc0da9930e0ab46063c2f5e62a',
  'phpdocumentor/reflection-common' => '2.2.0@1d01c49d4ed62f25aa84a747ad35d5a16924662b',
  'phpdocumentor/reflection-docblock' => '5.2.2@069a785b2141f5bcf49f3e353548dc1cce6df556',
  'phpdocumentor/type-resolver' => '1.4.0@6a467b8989322d92aa1c8bf2bebcc6e5c2ba55c0',
  'phpoffice/phpspreadsheet' => '1.15.0@a8e8068b31b8119e1daa5b1eb5715a3a8ea8305f',
  'psr/cache' => '1.0.1@d11b50ad223250cf17b86e38383413f5a6764bf8',
  'psr/container' => '1.0.0@b7ce3b176482dbbc1245ebf52b181af44c2cf55f',
  'psr/event-dispatcher' => '1.0.0@dbefd12671e8a14ec7f180cab83036ed26714bb0',
  'psr/http-client' => '1.0.1@2dfb5f6c5eff0e91e20e913f8c5452ed95b86621',
  'psr/http-factory' => '1.0.1@12ac7fcd07e5b077433f5f2bee95b3a771bf61be',
  'psr/http-message' => '1.0.1@f6561bf28d520154e4b0ec72be95418abe6d9363',
  'psr/link' => '1.0.0@eea8e8662d5cd3ae4517c9b864493f59fca95562',
  'psr/log' => '1.1.3@0f73288fd15629204f9d42b7055f72dacbe811fc',
  'psr/simple-cache' => '1.0.1@408d5eafb83c57f6365a3ca330ff23aa4a5fa39b',
  'swiftmailer/swiftmailer' => 'v6.2.3@149cfdf118b169f7840bbe3ef0d4bc795d1780c9',
  'symfony/asset' => 'v5.1.9@19c59713f750642206b21a1edec5c18dea80f979',
  'symfony/cache' => 'v5.1.9@f81360f9acb25aa356bc662d8b32bfaa70d264a9',
  'symfony/cache-contracts' => 'v2.2.0@8034ca0b61d4dd967f3698aaa1da2507b631d0cb',
  'symfony/config' => 'v5.1.9@25fe2a2d023c38ade5dbc2d80679462592284ed5',
  'symfony/console' => 'v5.1.9@037b57ac42cafb64b7b55273fe1786f35d623077',
  'symfony/dependency-injection' => 'v5.1.9@8b2ec9f453430252379aea343d02ed3579b18b44',
  'symfony/deprecation-contracts' => 'v2.2.0@5fa56b4074d1ae755beb55617ddafe6f5d78f665',
  'symfony/doctrine-bridge' => 'v5.1.9@f8824e9c5adf3040fd64254e4d453fbc1bacf30c',
  'symfony/dotenv' => 'v5.1.9@264ca18dd6e4ab3cfa525ee52cceff9540a1019e',
  'symfony/error-handler' => 'v5.1.9@4be32277488607e38ad1108b08ca200882ef6077',
  'symfony/event-dispatcher' => 'v5.1.9@2c660884ec9413455af753515140ce696913693c',
  'symfony/event-dispatcher-contracts' => 'v2.2.0@0ba7d54483095a198fa51781bc608d17e84dffa2',
  'symfony/expression-language' => 'v5.1.9@54a17a1dbaef38408000daa9423cb1d3a5201900',
  'symfony/filesystem' => 'v5.1.9@bb92ba7f38b037e531908590a858a04d85c0e238',
  'symfony/finder' => 'v5.1.9@fd8305521692f27eae3263895d1ef1571c71a78d',
  'symfony/flex' => 'v1.10.0@e38520236bdc911c2f219634b485bc328746e980',
  'symfony/framework-bundle' => 'v5.1.9@d070863c197c6eb72ed3a54611b0a1bc5749ecc2',
  'symfony/google-mailer' => 'v5.1.9@9f459cbd57dd33a70fd8aa475575641ea4ae3369',
  'symfony/http-client-contracts' => 'v2.3.1@41db680a15018f9c1d4b23516059633ce280ca33',
  'symfony/http-foundation' => 'v5.1.9@1e6e9e28369ddd3fd66ca14a469c21ae9b51969a',
  'symfony/http-kernel' => 'v5.1.9@2d0daaf17c9fe14eb3519b94b83d746554ecfd9c',
  'symfony/mailer' => 'v5.1.9@a8be34b60e81c54f764f5ecee2a143b1dfbc60dc',
  'symfony/mime' => 'v5.1.9@698cab643bbb517a0d9d317e2ec9fc1636e97f1f',
  'symfony/monolog-bridge' => 'v5.1.9@763f8d9ca7e1e1a5be5cdda8a6702291825aff67',
  'symfony/monolog-bundle' => 'v3.6.0@e495f5c7e4e672ffef4357d4a4d85f010802f940',
  'symfony/polyfill-intl-grapheme' => 'v1.20.0@c7cf3f858ec7d70b89559d6e6eb1f7c2517d479c',
  'symfony/polyfill-intl-idn' => 'v1.20.0@3b75acd829741c768bc8b1f84eb33265e7cc5117',
  'symfony/polyfill-intl-normalizer' => 'v1.20.0@727d1096295d807c309fb01a851577302394c897',
  'symfony/polyfill-mbstring' => 'v1.20.0@39d483bdf39be819deabf04ec872eb0b2410b531',
  'symfony/polyfill-php73' => 'v1.20.0@8ff431c517be11c78c48a39a66d37431e26a6bed',
  'symfony/polyfill-php80' => 'v1.20.0@e70aa8b064c5b72d3df2abd5ab1e90464ad009de',
  'symfony/property-access' => 'v5.1.9@d979b802a230cce0e7ff0d60e643c5d74edb2daf',
  'symfony/property-info' => 'v5.1.9@5bc012adfe3d365db3cec3b050513950b19966b3',
  'symfony/routing' => 'v5.1.9@461b184cfe5c2e677bbd67761aa377914ab48a16',
  'symfony/security-bundle' => 'v5.1.9@1060810a1dc7361304c50d4aa2569fe5b4da60c6',
  'symfony/security-core' => 'v5.1.9@a6d771e97bf3886e3ff5bdcf93f358e81bd873b4',
  'symfony/security-csrf' => 'v5.1.9@d98a521e3c7ffa15c142e8b1e68a55fdeb58d4b7',
  'symfony/security-guard' => 'v5.1.9@e9d11fd6fcdb27ca5b83db44093289a1d6a3b771',
  'symfony/security-http' => 'v5.1.9@a3a65306b8bf48611bd85deec8acccd4e8bcae0b',
  'symfony/serializer' => 'v5.1.9@5bc62ff6cd4678363ae19a633667fd318b1a72f7',
  'symfony/service-contracts' => 'v2.2.0@d15da7ba4957ffb8f1747218be9e1a121fd298a1',
  'symfony/stopwatch' => 'v5.1.9@fcda7f14c3b39d33f9c788aea9afb1b5f5c288c6',
  'symfony/string' => 'v5.1.9@a97573e960303db71be0dd8fda9be3bca5e0feea',
  'symfony/swiftmailer-bundle' => 'v3.5.1@933be6a3196fb354615290f53ff7ff61e0bdde58',
  'symfony/translation-contracts' => 'v2.3.0@e2eaa60b558f26a4b0354e1bbb25636efaaad105',
  'symfony/twig-bridge' => 'v5.1.9@49a58af9f34ffcb11ef47d1ba1f8425396a6eac4',
  'symfony/twig-bundle' => 'v5.1.9@370bb30a9e8dc2b0c29791eec300b0b529bd783f',
  'symfony/validator' => 'v5.1.9@acf84937b932fe575e4e4892eecee5a6c5ca8b78',
  'symfony/var-dumper' => 'v5.1.9@006fc2312ee014e1ba46c01185423c010310d00f',
  'symfony/var-exporter' => 'v5.1.9@fbc3507f23d263d75417e09a12d77c009f39676c',
  'symfony/web-link' => 'v5.1.9@e805314ad8c4298d9bfc75335e35f83d6db2f43f',
  'symfony/yaml' => 'v5.1.9@bb73619b2ae5121bbbcd9f191dfd53ded17ae598',
  'twig/twig' => 'v3.1.1@b02fa41f3783a2616eccef7b92fbc2343ffed737',
  'webimpress/safe-writer' => '2.1.0@5cfafdec5873c389036f14bf832a5efc9390dcdd',
  'webmozart/assert' => '1.9.1@bafc69caeb4d49c39fd0779086c03a3738cbb389',
  'willdurand/negotiation' => 'v2.3.1@03436ededa67c6e83b9b12defac15384cb399dc9',
  'doctrine/data-fixtures' => '1.4.4@16a03fadb5473f49aad70384002dfd5012fe680e',
  'doctrine/doctrine-fixtures-bundle' => '3.4.0@870189619a7770f468ffb0b80925302e065a3b34',
  'fzaninotto/faker' => 'v1.9.1@fc10d778e4b84d5bd315dad194661e091d307c6f',
  'nikic/php-parser' => 'v4.10.2@658f1be311a230e0907f5dfe0213742aff0596de',
  'symfony/debug-bundle' => 'v5.1.9@183a36bdb251eeeeff640ffbceea3403ac5c8d40',
  'symfony/maker-bundle' => 'v1.24.2@87620ef23319ebbdfc5b51dd6b6e7d12003f4564',
  'paragonie/random_compat' => '2.*@',
  'symfony/polyfill-ctype' => '*@',
  'symfony/polyfill-iconv' => '*@',
  'symfony/polyfill-php72' => '*@',
  'symfony/polyfill-php71' => '*@',
  'symfony/polyfill-php70' => '*@',
  'symfony/polyfill-php56' => '*@',
  '__root__' => 'No version set (parsed as 1.0.0)@',
);

    private function __construct()
    {
    }

    /**
     * @psalm-pure
     *
     * @psalm-suppress ImpureMethodCall we know that {@see InstalledVersions} interaction does not
     *                                  cause any side effects here.
     */
    public static function rootPackageName() : string
    {
        if (!class_exists(InstalledVersions::class, false) || !InstalledVersions::getRawData()) {
            return self::ROOT_PACKAGE_NAME;
        }

        return InstalledVersions::getRootPackage()['name'];
    }

    /**
     * @throws OutOfBoundsException If a version cannot be located.
     *
     * @psalm-param key-of<self::VERSIONS> $packageName
     * @psalm-pure
     *
     * @psalm-suppress ImpureMethodCall we know that {@see InstalledVersions} interaction does not
     *                                  cause any side effects here.
     */
    public static function getVersion(string $packageName): string
    {
        if (class_exists(InstalledVersions::class, false) && InstalledVersions::getRawData()) {
            return InstalledVersions::getPrettyVersion($packageName)
                . '@' . InstalledVersions::getReference($packageName);
        }

        if (isset(self::VERSIONS[$packageName])) {
            return self::VERSIONS[$packageName];
        }

        throw new OutOfBoundsException(
            'Required package "' . $packageName . '" is not installed: check your ./vendor/composer/installed.json and/or ./composer.lock files'
        );
    }
}
