<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInita8011b477bb239488e5d139cdeb7b31e
{
    public static $files = array (
        '6e3fae29631ef280660b3cdad06f25a8' => __DIR__ . '/..' . '/symfony/deprecation-contracts/function.php',
        '320cde22f66dd4f5d3fd621d3e88b98f' => __DIR__ . '/..' . '/symfony/polyfill-ctype/bootstrap.php',
        'e69f7f6ee287b969198c3c9d6777bd38' => __DIR__ . '/..' . '/symfony/polyfill-intl-normalizer/bootstrap.php',
        'f598d06aa772fa33d905e87be6398fb1' => __DIR__ . '/..' . '/symfony/polyfill-intl-idn/bootstrap.php',
        '0e6d7bf4a5811bfa5cf40c5ccd6fae6a' => __DIR__ . '/..' . '/symfony/polyfill-mbstring/bootstrap.php',
        'f864ae44e8154e5ff6f4eec32f46d37f' => __DIR__ . '/../..' . '/config/setup.php',
        '87988fc7b1c1f093da22a1a3de972f3a' => __DIR__ . '/../..' . '/config/helpers.php',
    );

    public static $prefixLengthsPsr4 = array (
        'W' => 
        array (
            'Whoops\\' => 7,
        ),
        'S' => 
        array (
            'Symfony\\Polyfill\\Mbstring\\' => 26,
            'Symfony\\Polyfill\\Intl\\Normalizer\\' => 33,
            'Symfony\\Polyfill\\Intl\\Idn\\' => 26,
            'Symfony\\Polyfill\\Ctype\\' => 23,
            'Symfony\\Component\\Yaml\\' => 23,
        ),
        'P' => 
        array (
            'Psr\\Log\\' => 8,
            'PHPMailer\\PHPMailer\\' => 20,
        ),
        'L' => 
        array (
            'League\\ColorExtractor\\' => 22,
            'Laminas\\Escaper\\' => 16,
        ),
        'K' => 
        array (
            'Kirby\\' => 6,
        ),
        'C' => 
        array (
            'Composer\\Semver\\' => 16,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'Whoops\\' => 
        array (
            0 => __DIR__ . '/..' . '/filp/whoops/src/Whoops',
        ),
        'Symfony\\Polyfill\\Mbstring\\' => 
        array (
            0 => __DIR__ . '/..' . '/symfony/polyfill-mbstring',
        ),
        'Symfony\\Polyfill\\Intl\\Normalizer\\' => 
        array (
            0 => __DIR__ . '/..' . '/symfony/polyfill-intl-normalizer',
        ),
        'Symfony\\Polyfill\\Intl\\Idn\\' => 
        array (
            0 => __DIR__ . '/..' . '/symfony/polyfill-intl-idn',
        ),
        'Symfony\\Polyfill\\Ctype\\' => 
        array (
            0 => __DIR__ . '/..' . '/symfony/polyfill-ctype',
        ),
        'Symfony\\Component\\Yaml\\' => 
        array (
            0 => __DIR__ . '/..' . '/symfony/yaml',
        ),
        'Psr\\Log\\' => 
        array (
            0 => __DIR__ . '/..' . '/psr/log/src',
        ),
        'PHPMailer\\PHPMailer\\' => 
        array (
            0 => __DIR__ . '/..' . '/phpmailer/phpmailer/src',
        ),
        'League\\ColorExtractor\\' => 
        array (
            0 => __DIR__ . '/..' . '/league/color-extractor/src',
        ),
        'Laminas\\Escaper\\' => 
        array (
            0 => __DIR__ . '/..' . '/laminas/laminas-escaper/src',
        ),
        'Kirby\\' => 
        array (
            0 => __DIR__ . '/../..' . '/src',
            1 => __DIR__ . '/..' . '/getkirby/composer-installer/src',
        ),
        'Composer\\Semver\\' => 
        array (
            0 => __DIR__ . '/..' . '/composer/semver/src',
        ),
    );

    public static $prefixesPsr0 = array (
        'c' => 
        array (
            'claviska' => 
            array (
                0 => __DIR__ . '/..' . '/claviska/simpleimage/src',
            ),
        ),
        'M' => 
        array (
            'Michelf' => 
            array (
                0 => __DIR__ . '/..' . '/michelf/php-smartypants',
            ),
        ),
    );

    public static $classMap = array (
        'Composer\\InstalledVersions' => __DIR__ . '/..' . '/composer/InstalledVersions.php',
        'Composer\\Semver\\Comparator' => __DIR__ . '/..' . '/composer/semver/src/Comparator.php',
        'Composer\\Semver\\CompilingMatcher' => __DIR__ . '/..' . '/composer/semver/src/CompilingMatcher.php',
        'Composer\\Semver\\Constraint\\Bound' => __DIR__ . '/..' . '/composer/semver/src/Constraint/Bound.php',
        'Composer\\Semver\\Constraint\\Constraint' => __DIR__ . '/..' . '/composer/semver/src/Constraint/Constraint.php',
        'Composer\\Semver\\Constraint\\ConstraintInterface' => __DIR__ . '/..' . '/composer/semver/src/Constraint/ConstraintInterface.php',
        'Composer\\Semver\\Constraint\\MatchAllConstraint' => __DIR__ . '/..' . '/composer/semver/src/Constraint/MatchAllConstraint.php',
        'Composer\\Semver\\Constraint\\MatchNoneConstraint' => __DIR__ . '/..' . '/composer/semver/src/Constraint/MatchNoneConstraint.php',
        'Composer\\Semver\\Constraint\\MultiConstraint' => __DIR__ . '/..' . '/composer/semver/src/Constraint/MultiConstraint.php',
        'Composer\\Semver\\Interval' => __DIR__ . '/..' . '/composer/semver/src/Interval.php',
        'Composer\\Semver\\Intervals' => __DIR__ . '/..' . '/composer/semver/src/Intervals.php',
        'Composer\\Semver\\Semver' => __DIR__ . '/..' . '/composer/semver/src/Semver.php',
        'Composer\\Semver\\VersionParser' => __DIR__ . '/..' . '/composer/semver/src/VersionParser.php',
        'Kirby\\Api\\Api' => __DIR__ . '/../..' . '/src/Api/Api.php',
        'Kirby\\Api\\Collection' => __DIR__ . '/../..' . '/src/Api/Collection.php',
        'Kirby\\Api\\Model' => __DIR__ . '/../..' . '/src/Api/Model.php',
        'Kirby\\Blueprint\\Collection' => __DIR__ . '/../..' . '/src/Blueprint/Collection.php',
        'Kirby\\Blueprint\\Config' => __DIR__ . '/../..' . '/src/Blueprint/Config.php',
        'Kirby\\Blueprint\\Extension' => __DIR__ . '/../..' . '/src/Blueprint/Extension.php',
        'Kirby\\Blueprint\\Factory' => __DIR__ . '/../..' . '/src/Blueprint/Factory.php',
        'Kirby\\Blueprint\\Node' => __DIR__ . '/../..' . '/src/Blueprint/Node.php',
        'Kirby\\Blueprint\\NodeI18n' => __DIR__ . '/../..' . '/src/Blueprint/NodeI18n.php',
        'Kirby\\Blueprint\\NodeIcon' => __DIR__ . '/../..' . '/src/Blueprint/NodeIcon.php',
        'Kirby\\Blueprint\\NodeProperty' => __DIR__ . '/../..' . '/src/Blueprint/NodeProperty.php',
        'Kirby\\Blueprint\\NodeString' => __DIR__ . '/../..' . '/src/Blueprint/NodeString.php',
        'Kirby\\Blueprint\\NodeText' => __DIR__ . '/../..' . '/src/Blueprint/NodeText.php',
        'Kirby\\Cache\\ApcuCache' => __DIR__ . '/../..' . '/src/Cache/ApcuCache.php',
        'Kirby\\Cache\\Cache' => __DIR__ . '/../..' . '/src/Cache/Cache.php',
        'Kirby\\Cache\\FileCache' => __DIR__ . '/../..' . '/src/Cache/FileCache.php',
        'Kirby\\Cache\\MemCached' => __DIR__ . '/../..' . '/src/Cache/MemCached.php',
        'Kirby\\Cache\\MemoryCache' => __DIR__ . '/../..' . '/src/Cache/MemoryCache.php',
        'Kirby\\Cache\\NullCache' => __DIR__ . '/../..' . '/src/Cache/NullCache.php',
        'Kirby\\Cache\\Value' => __DIR__ . '/../..' . '/src/Cache/Value.php',
        'Kirby\\Cms\\Api' => __DIR__ . '/../..' . '/src/Cms/Api.php',
        'Kirby\\Cms\\App' => __DIR__ . '/../..' . '/src/Cms/App.php',
        'Kirby\\Cms\\AppCaches' => __DIR__ . '/../..' . '/src/Cms/AppCaches.php',
        'Kirby\\Cms\\AppErrors' => __DIR__ . '/../..' . '/src/Cms/AppErrors.php',
        'Kirby\\Cms\\AppPlugins' => __DIR__ . '/../..' . '/src/Cms/AppPlugins.php',
        'Kirby\\Cms\\AppTranslations' => __DIR__ . '/../..' . '/src/Cms/AppTranslations.php',
        'Kirby\\Cms\\AppUsers' => __DIR__ . '/../..' . '/src/Cms/AppUsers.php',
        'Kirby\\Cms\\Auth' => __DIR__ . '/../..' . '/src/Cms/Auth.php',
        'Kirby\\Cms\\Auth\\Challenge' => __DIR__ . '/../..' . '/src/Cms/Auth/Challenge.php',
        'Kirby\\Cms\\Auth\\EmailChallenge' => __DIR__ . '/../..' . '/src/Cms/Auth/EmailChallenge.php',
        'Kirby\\Cms\\Auth\\Status' => __DIR__ . '/../..' . '/src/Cms/Auth/Status.php',
        'Kirby\\Cms\\Block' => __DIR__ . '/../..' . '/src/Cms/Block.php',
        'Kirby\\Cms\\BlockConverter' => __DIR__ . '/../..' . '/src/Cms/BlockConverter.php',
        'Kirby\\Cms\\Blocks' => __DIR__ . '/../..' . '/src/Cms/Blocks.php',
        'Kirby\\Cms\\Blueprint' => __DIR__ . '/../..' . '/src/Cms/Blueprint.php',
        'Kirby\\Cms\\Collection' => __DIR__ . '/../..' . '/src/Cms/Collection.php',
        'Kirby\\Cms\\Collections' => __DIR__ . '/../..' . '/src/Cms/Collections.php',
        'Kirby\\Cms\\ContentLock' => __DIR__ . '/../..' . '/src/Cms/ContentLock.php',
        'Kirby\\Cms\\ContentLocks' => __DIR__ . '/../..' . '/src/Cms/ContentLocks.php',
        'Kirby\\Cms\\Core' => __DIR__ . '/../..' . '/src/Cms/Core.php',
        'Kirby\\Cms\\Email' => __DIR__ . '/../..' . '/src/Cms/Email.php',
        'Kirby\\Cms\\Event' => __DIR__ . '/../..' . '/src/Cms/Event.php',
        'Kirby\\Cms\\Fieldset' => __DIR__ . '/../..' . '/src/Cms/Fieldset.php',
        'Kirby\\Cms\\Fieldsets' => __DIR__ . '/../..' . '/src/Cms/Fieldsets.php',
        'Kirby\\Cms\\File' => __DIR__ . '/../..' . '/src/Cms/File.php',
        'Kirby\\Cms\\FileActions' => __DIR__ . '/../..' . '/src/Cms/FileActions.php',
        'Kirby\\Cms\\FileBlueprint' => __DIR__ . '/../..' . '/src/Cms/FileBlueprint.php',
        'Kirby\\Cms\\FileModifications' => __DIR__ . '/../..' . '/src/Cms/FileModifications.php',
        'Kirby\\Cms\\FilePermissions' => __DIR__ . '/../..' . '/src/Cms/FilePermissions.php',
        'Kirby\\Cms\\FilePicker' => __DIR__ . '/../..' . '/src/Cms/FilePicker.php',
        'Kirby\\Cms\\FileRules' => __DIR__ . '/../..' . '/src/Cms/FileRules.php',
        'Kirby\\Cms\\FileVersion' => __DIR__ . '/../..' . '/src/Cms/FileVersion.php',
        'Kirby\\Cms\\Files' => __DIR__ . '/../..' . '/src/Cms/Files.php',
        'Kirby\\Cms\\Find' => __DIR__ . '/../..' . '/src/Cms/Find.php',
        'Kirby\\Cms\\HasChildren' => __DIR__ . '/../..' . '/src/Cms/HasChildren.php',
        'Kirby\\Cms\\HasFiles' => __DIR__ . '/../..' . '/src/Cms/HasFiles.php',
        'Kirby\\Cms\\HasMethods' => __DIR__ . '/../..' . '/src/Cms/HasMethods.php',
        'Kirby\\Cms\\HasSiblings' => __DIR__ . '/../..' . '/src/Cms/HasSiblings.php',
        'Kirby\\Cms\\Helpers' => __DIR__ . '/../..' . '/src/Cms/Helpers.php',
        'Kirby\\Cms\\Html' => __DIR__ . '/../..' . '/src/Cms/Html.php',
        'Kirby\\Cms\\Ingredients' => __DIR__ . '/../..' . '/src/Cms/Ingredients.php',
        'Kirby\\Cms\\Item' => __DIR__ . '/../..' . '/src/Cms/Item.php',
        'Kirby\\Cms\\Items' => __DIR__ . '/../..' . '/src/Cms/Items.php',
        'Kirby\\Cms\\Language' => __DIR__ . '/../..' . '/src/Cms/Language.php',
        'Kirby\\Cms\\LanguageRouter' => __DIR__ . '/../..' . '/src/Cms/LanguageRouter.php',
        'Kirby\\Cms\\LanguageRoutes' => __DIR__ . '/../..' . '/src/Cms/LanguageRoutes.php',
        'Kirby\\Cms\\LanguageRules' => __DIR__ . '/../..' . '/src/Cms/LanguageRules.php',
        'Kirby\\Cms\\LanguageVariable' => __DIR__ . '/../..' . '/src/Cms/LanguageVariable.php',
        'Kirby\\Cms\\Languages' => __DIR__ . '/../..' . '/src/Cms/Languages.php',
        'Kirby\\Cms\\Layout' => __DIR__ . '/../..' . '/src/Cms/Layout.php',
        'Kirby\\Cms\\LayoutColumn' => __DIR__ . '/../..' . '/src/Cms/LayoutColumn.php',
        'Kirby\\Cms\\LayoutColumns' => __DIR__ . '/../..' . '/src/Cms/LayoutColumns.php',
        'Kirby\\Cms\\Layouts' => __DIR__ . '/../..' . '/src/Cms/Layouts.php',
        'Kirby\\Cms\\Loader' => __DIR__ . '/../..' . '/src/Cms/Loader.php',
        'Kirby\\Cms\\Media' => __DIR__ . '/../..' . '/src/Cms/Media.php',
        'Kirby\\Cms\\Model' => __DIR__ . '/../..' . '/src/Cms/Model.php',
        'Kirby\\Cms\\ModelPermissions' => __DIR__ . '/../..' . '/src/Cms/ModelPermissions.php',
        'Kirby\\Cms\\ModelWithContent' => __DIR__ . '/../..' . '/src/Cms/ModelWithContent.php',
        'Kirby\\Cms\\Nest' => __DIR__ . '/../..' . '/src/Cms/Nest.php',
        'Kirby\\Cms\\NestCollection' => __DIR__ . '/../..' . '/src/Cms/NestCollection.php',
        'Kirby\\Cms\\NestObject' => __DIR__ . '/../..' . '/src/Cms/NestObject.php',
        'Kirby\\Cms\\Page' => __DIR__ . '/../..' . '/src/Cms/Page.php',
        'Kirby\\Cms\\PageActions' => __DIR__ . '/../..' . '/src/Cms/PageActions.php',
        'Kirby\\Cms\\PageBlueprint' => __DIR__ . '/../..' . '/src/Cms/PageBlueprint.php',
        'Kirby\\Cms\\PagePermissions' => __DIR__ . '/../..' . '/src/Cms/PagePermissions.php',
        'Kirby\\Cms\\PagePicker' => __DIR__ . '/../..' . '/src/Cms/PagePicker.php',
        'Kirby\\Cms\\PageRules' => __DIR__ . '/../..' . '/src/Cms/PageRules.php',
        'Kirby\\Cms\\PageSiblings' => __DIR__ . '/../..' . '/src/Cms/PageSiblings.php',
        'Kirby\\Cms\\Pages' => __DIR__ . '/../..' . '/src/Cms/Pages.php',
        'Kirby\\Cms\\Pagination' => __DIR__ . '/../..' . '/src/Cms/Pagination.php',
        'Kirby\\Cms\\Permissions' => __DIR__ . '/../..' . '/src/Cms/Permissions.php',
        'Kirby\\Cms\\Picker' => __DIR__ . '/../..' . '/src/Cms/Picker.php',
        'Kirby\\Cms\\Plugin' => __DIR__ . '/../..' . '/src/Cms/Plugin.php',
        'Kirby\\Cms\\PluginAssets' => __DIR__ . '/../..' . '/src/Cms/PluginAssets.php',
        'Kirby\\Cms\\R' => __DIR__ . '/../..' . '/src/Cms/R.php',
        'Kirby\\Cms\\Responder' => __DIR__ . '/../..' . '/src/Cms/Responder.php',
        'Kirby\\Cms\\Response' => __DIR__ . '/../..' . '/src/Cms/Response.php',
        'Kirby\\Cms\\Role' => __DIR__ . '/../..' . '/src/Cms/Role.php',
        'Kirby\\Cms\\Roles' => __DIR__ . '/../..' . '/src/Cms/Roles.php',
        'Kirby\\Cms\\S' => __DIR__ . '/../..' . '/src/Cms/S.php',
        'Kirby\\Cms\\Search' => __DIR__ . '/../..' . '/src/Cms/Search.php',
        'Kirby\\Cms\\Section' => __DIR__ . '/../..' . '/src/Cms/Section.php',
        'Kirby\\Cms\\Site' => __DIR__ . '/../..' . '/src/Cms/Site.php',
        'Kirby\\Cms\\SiteActions' => __DIR__ . '/../..' . '/src/Cms/SiteActions.php',
        'Kirby\\Cms\\SiteBlueprint' => __DIR__ . '/../..' . '/src/Cms/SiteBlueprint.php',
        'Kirby\\Cms\\SitePermissions' => __DIR__ . '/../..' . '/src/Cms/SitePermissions.php',
        'Kirby\\Cms\\SiteRules' => __DIR__ . '/../..' . '/src/Cms/SiteRules.php',
        'Kirby\\Cms\\Structure' => __DIR__ . '/../..' . '/src/Cms/Structure.php',
        'Kirby\\Cms\\StructureObject' => __DIR__ . '/../..' . '/src/Cms/StructureObject.php',
        'Kirby\\Cms\\System' => __DIR__ . '/../..' . '/src/Cms/System.php',
        'Kirby\\Cms\\System\\UpdateStatus' => __DIR__ . '/../..' . '/src/Cms/System/UpdateStatus.php',
        'Kirby\\Cms\\Translation' => __DIR__ . '/../..' . '/src/Cms/Translation.php',
        'Kirby\\Cms\\Translations' => __DIR__ . '/../..' . '/src/Cms/Translations.php',
        'Kirby\\Cms\\Url' => __DIR__ . '/../..' . '/src/Cms/Url.php',
        'Kirby\\Cms\\User' => __DIR__ . '/../..' . '/src/Cms/User.php',
        'Kirby\\Cms\\UserActions' => __DIR__ . '/../..' . '/src/Cms/UserActions.php',
        'Kirby\\Cms\\UserBlueprint' => __DIR__ . '/../..' . '/src/Cms/UserBlueprint.php',
        'Kirby\\Cms\\UserPermissions' => __DIR__ . '/../..' . '/src/Cms/UserPermissions.php',
        'Kirby\\Cms\\UserPicker' => __DIR__ . '/../..' . '/src/Cms/UserPicker.php',
        'Kirby\\Cms\\UserRules' => __DIR__ . '/../..' . '/src/Cms/UserRules.php',
        'Kirby\\Cms\\Users' => __DIR__ . '/../..' . '/src/Cms/Users.php',
        'Kirby\\Cms\\Visitor' => __DIR__ . '/../..' . '/src/Cms/Visitor.php',
        'Kirby\\ComposerInstaller\\CmsInstaller' => __DIR__ . '/..' . '/getkirby/composer-installer/src/ComposerInstaller/CmsInstaller.php',
        'Kirby\\ComposerInstaller\\Installer' => __DIR__ . '/..' . '/getkirby/composer-installer/src/ComposerInstaller/Installer.php',
        'Kirby\\ComposerInstaller\\Plugin' => __DIR__ . '/..' . '/getkirby/composer-installer/src/ComposerInstaller/Plugin.php',
        'Kirby\\ComposerInstaller\\PluginInstaller' => __DIR__ . '/..' . '/getkirby/composer-installer/src/ComposerInstaller/PluginInstaller.php',
        'Kirby\\Content\\Content' => __DIR__ . '/../..' . '/src/Content/Content.php',
        'Kirby\\Content\\ContentStorage' => __DIR__ . '/../..' . '/src/Content/ContentStorage.php',
        'Kirby\\Content\\ContentStorageHandler' => __DIR__ . '/../..' . '/src/Content/ContentStorageHandler.php',
        'Kirby\\Content\\ContentTranslation' => __DIR__ . '/../..' . '/src/Content/ContentTranslation.php',
        'Kirby\\Content\\Field' => __DIR__ . '/../..' . '/src/Content/Field.php',
        'Kirby\\Content\\PlainTextContentStorageHandler' => __DIR__ . '/../..' . '/src/Content/PlainTextContentStorageHandler.php',
        'Kirby\\Data\\Data' => __DIR__ . '/../..' . '/src/Data/Data.php',
        'Kirby\\Data\\Handler' => __DIR__ . '/../..' . '/src/Data/Handler.php',
        'Kirby\\Data\\Json' => __DIR__ . '/../..' . '/src/Data/Json.php',
        'Kirby\\Data\\PHP' => __DIR__ . '/../..' . '/src/Data/PHP.php',
        'Kirby\\Data\\Txt' => __DIR__ . '/../..' . '/src/Data/Txt.php',
        'Kirby\\Data\\Xml' => __DIR__ . '/../..' . '/src/Data/Xml.php',
        'Kirby\\Data\\Yaml' => __DIR__ . '/../..' . '/src/Data/Yaml.php',
        'Kirby\\Data\\YamlSpyc' => __DIR__ . '/../..' . '/src/Data/YamlSpyc.php',
        'Kirby\\Data\\YamlSymfony' => __DIR__ . '/../..' . '/src/Data/YamlSymfony.php',
        'Kirby\\Database\\Database' => __DIR__ . '/../..' . '/src/Database/Database.php',
        'Kirby\\Database\\Db' => __DIR__ . '/../..' . '/src/Database/Db.php',
        'Kirby\\Database\\Query' => __DIR__ . '/../..' . '/src/Database/Query.php',
        'Kirby\\Database\\Sql' => __DIR__ . '/../..' . '/src/Database/Sql.php',
        'Kirby\\Database\\Sql\\Mysql' => __DIR__ . '/../..' . '/src/Database/Sql/Mysql.php',
        'Kirby\\Database\\Sql\\Sqlite' => __DIR__ . '/../..' . '/src/Database/Sql/Sqlite.php',
        'Kirby\\Email\\Body' => __DIR__ . '/../..' . '/src/Email/Body.php',
        'Kirby\\Email\\Email' => __DIR__ . '/../..' . '/src/Email/Email.php',
        'Kirby\\Email\\PHPMailer' => __DIR__ . '/../..' . '/src/Email/PHPMailer.php',
        'Kirby\\Exception\\AuthException' => __DIR__ . '/../..' . '/src/Exception/AuthException.php',
        'Kirby\\Exception\\BadMethodCallException' => __DIR__ . '/../..' . '/src/Exception/BadMethodCallException.php',
        'Kirby\\Exception\\DuplicateException' => __DIR__ . '/../..' . '/src/Exception/DuplicateException.php',
        'Kirby\\Exception\\ErrorPageException' => __DIR__ . '/../..' . '/src/Exception/ErrorPageException.php',
        'Kirby\\Exception\\Exception' => __DIR__ . '/../..' . '/src/Exception/Exception.php',
        'Kirby\\Exception\\InvalidArgumentException' => __DIR__ . '/../..' . '/src/Exception/InvalidArgumentException.php',
        'Kirby\\Exception\\LogicException' => __DIR__ . '/../..' . '/src/Exception/LogicException.php',
        'Kirby\\Exception\\NotFoundException' => __DIR__ . '/../..' . '/src/Exception/NotFoundException.php',
        'Kirby\\Exception\\PermissionException' => __DIR__ . '/../..' . '/src/Exception/PermissionException.php',
        'Kirby\\Field\\FieldOptions' => __DIR__ . '/../..' . '/src/Field/FieldOptions.php',
        'Kirby\\Filesystem\\Asset' => __DIR__ . '/../..' . '/src/Filesystem/Asset.php',
        'Kirby\\Filesystem\\Dir' => __DIR__ . '/../..' . '/src/Filesystem/Dir.php',
        'Kirby\\Filesystem\\F' => __DIR__ . '/../..' . '/src/Filesystem/F.php',
        'Kirby\\Filesystem\\File' => __DIR__ . '/../..' . '/src/Filesystem/File.php',
        'Kirby\\Filesystem\\Filename' => __DIR__ . '/../..' . '/src/Filesystem/Filename.php',
        'Kirby\\Filesystem\\IsFile' => __DIR__ . '/../..' . '/src/Filesystem/IsFile.php',
        'Kirby\\Filesystem\\Mime' => __DIR__ . '/../..' . '/src/Filesystem/Mime.php',
        'Kirby\\Form\\Field' => __DIR__ . '/../..' . '/src/Form/Field.php',
        'Kirby\\Form\\FieldClass' => __DIR__ . '/../..' . '/src/Form/FieldClass.php',
        'Kirby\\Form\\Field\\BlocksField' => __DIR__ . '/../..' . '/src/Form/Field/BlocksField.php',
        'Kirby\\Form\\Field\\LayoutField' => __DIR__ . '/../..' . '/src/Form/Field/LayoutField.php',
        'Kirby\\Form\\Fields' => __DIR__ . '/../..' . '/src/Form/Fields.php',
        'Kirby\\Form\\Form' => __DIR__ . '/../..' . '/src/Form/Form.php',
        'Kirby\\Form\\Mixin\\EmptyState' => __DIR__ . '/../..' . '/src/Form/Mixin/EmptyState.php',
        'Kirby\\Form\\Mixin\\Max' => __DIR__ . '/../..' . '/src/Form/Mixin/Max.php',
        'Kirby\\Form\\Mixin\\Min' => __DIR__ . '/../..' . '/src/Form/Mixin/Min.php',
        'Kirby\\Form\\Validations' => __DIR__ . '/../..' . '/src/Form/Validations.php',
        'Kirby\\Http\\Cookie' => __DIR__ . '/../..' . '/src/Http/Cookie.php',
        'Kirby\\Http\\Environment' => __DIR__ . '/../..' . '/src/Http/Environment.php',
        'Kirby\\Http\\Exceptions\\NextRouteException' => __DIR__ . '/../..' . '/src/Http/Exceptions/NextRouteException.php',
        'Kirby\\Http\\Header' => __DIR__ . '/../..' . '/src/Http/Header.php',
        'Kirby\\Http\\Idn' => __DIR__ . '/../..' . '/src/Http/Idn.php',
        'Kirby\\Http\\Params' => __DIR__ . '/../..' . '/src/Http/Params.php',
        'Kirby\\Http\\Path' => __DIR__ . '/../..' . '/src/Http/Path.php',
        'Kirby\\Http\\Query' => __DIR__ . '/../..' . '/src/Http/Query.php',
        'Kirby\\Http\\Remote' => __DIR__ . '/../..' . '/src/Http/Remote.php',
        'Kirby\\Http\\Request' => __DIR__ . '/../..' . '/src/Http/Request.php',
        'Kirby\\Http\\Request\\Auth' => __DIR__ . '/../..' . '/src/Http/Request/Auth.php',
        'Kirby\\Http\\Request\\Auth\\BasicAuth' => __DIR__ . '/../..' . '/src/Http/Request/Auth/BasicAuth.php',
        'Kirby\\Http\\Request\\Auth\\BearerAuth' => __DIR__ . '/../..' . '/src/Http/Request/Auth/BearerAuth.php',
        'Kirby\\Http\\Request\\Auth\\SessionAuth' => __DIR__ . '/../..' . '/src/Http/Request/Auth/SessionAuth.php',
        'Kirby\\Http\\Request\\Body' => __DIR__ . '/../..' . '/src/Http/Request/Body.php',
        'Kirby\\Http\\Request\\Data' => __DIR__ . '/../..' . '/src/Http/Request/Data.php',
        'Kirby\\Http\\Request\\Files' => __DIR__ . '/../..' . '/src/Http/Request/Files.php',
        'Kirby\\Http\\Request\\Query' => __DIR__ . '/../..' . '/src/Http/Request/Query.php',
        'Kirby\\Http\\Response' => __DIR__ . '/../..' . '/src/Http/Response.php',
        'Kirby\\Http\\Route' => __DIR__ . '/../..' . '/src/Http/Route.php',
        'Kirby\\Http\\Router' => __DIR__ . '/../..' . '/src/Http/Router.php',
        'Kirby\\Http\\Uri' => __DIR__ . '/../..' . '/src/Http/Uri.php',
        'Kirby\\Http\\Url' => __DIR__ . '/../..' . '/src/Http/Url.php',
        'Kirby\\Http\\Visitor' => __DIR__ . '/../..' . '/src/Http/Visitor.php',
        'Kirby\\Image\\Camera' => __DIR__ . '/../..' . '/src/Image/Camera.php',
        'Kirby\\Image\\Darkroom' => __DIR__ . '/../..' . '/src/Image/Darkroom.php',
        'Kirby\\Image\\Darkroom\\GdLib' => __DIR__ . '/../..' . '/src/Image/Darkroom/GdLib.php',
        'Kirby\\Image\\Darkroom\\ImageMagick' => __DIR__ . '/../..' . '/src/Image/Darkroom/ImageMagick.php',
        'Kirby\\Image\\Dimensions' => __DIR__ . '/../..' . '/src/Image/Dimensions.php',
        'Kirby\\Image\\Exif' => __DIR__ . '/../..' . '/src/Image/Exif.php',
        'Kirby\\Image\\Focus' => __DIR__ . '/../..' . '/src/Image/Focus.php',
        'Kirby\\Image\\Image' => __DIR__ . '/../..' . '/src/Image/Image.php',
        'Kirby\\Image\\Location' => __DIR__ . '/../..' . '/src/Image/Location.php',
        'Kirby\\Image\\QrCode' => __DIR__ . '/../..' . '/src/Image/QrCode.php',
        'Kirby\\Option\\Option' => __DIR__ . '/../..' . '/src/Option/Option.php',
        'Kirby\\Option\\Options' => __DIR__ . '/../..' . '/src/Option/Options.php',
        'Kirby\\Option\\OptionsApi' => __DIR__ . '/../..' . '/src/Option/OptionsApi.php',
        'Kirby\\Option\\OptionsProvider' => __DIR__ . '/../..' . '/src/Option/OptionsProvider.php',
        'Kirby\\Option\\OptionsQuery' => __DIR__ . '/../..' . '/src/Option/OptionsQuery.php',
        'Kirby\\Panel\\Assets' => __DIR__ . '/../..' . '/src/Panel/Assets.php',
        'Kirby\\Panel\\ChangesDialog' => __DIR__ . '/../..' . '/src/Panel/ChangesDialog.php',
        'Kirby\\Panel\\Dialog' => __DIR__ . '/../..' . '/src/Panel/Dialog.php',
        'Kirby\\Panel\\Document' => __DIR__ . '/../..' . '/src/Panel/Document.php',
        'Kirby\\Panel\\Drawer' => __DIR__ . '/../..' . '/src/Panel/Drawer.php',
        'Kirby\\Panel\\Dropdown' => __DIR__ . '/../..' . '/src/Panel/Dropdown.php',
        'Kirby\\Panel\\Field' => __DIR__ . '/../..' . '/src/Panel/Field.php',
        'Kirby\\Panel\\File' => __DIR__ . '/../..' . '/src/Panel/File.php',
        'Kirby\\Panel\\Home' => __DIR__ . '/../..' . '/src/Panel/Home.php',
        'Kirby\\Panel\\Json' => __DIR__ . '/../..' . '/src/Panel/Json.php',
        'Kirby\\Panel\\Menu' => __DIR__ . '/../..' . '/src/Panel/Menu.php',
        'Kirby\\Panel\\Model' => __DIR__ . '/../..' . '/src/Panel/Model.php',
        'Kirby\\Panel\\Page' => __DIR__ . '/../..' . '/src/Panel/Page.php',
        'Kirby\\Panel\\PageCreateDialog' => __DIR__ . '/../..' . '/src/Panel/PageCreateDialog.php',
        'Kirby\\Panel\\Panel' => __DIR__ . '/../..' . '/src/Panel/Panel.php',
        'Kirby\\Panel\\Plugins' => __DIR__ . '/../..' . '/src/Panel/Plugins.php',
        'Kirby\\Panel\\Redirect' => __DIR__ . '/../..' . '/src/Panel/Redirect.php',
        'Kirby\\Panel\\Request' => __DIR__ . '/../..' . '/src/Panel/Request.php',
        'Kirby\\Panel\\Search' => __DIR__ . '/../..' . '/src/Panel/Search.php',
        'Kirby\\Panel\\Site' => __DIR__ . '/../..' . '/src/Panel/Site.php',
        'Kirby\\Panel\\User' => __DIR__ . '/../..' . '/src/Panel/User.php',
        'Kirby\\Panel\\View' => __DIR__ . '/../..' . '/src/Panel/View.php',
        'Kirby\\Parsley\\Element' => __DIR__ . '/../..' . '/src/Parsley/Element.php',
        'Kirby\\Parsley\\Inline' => __DIR__ . '/../..' . '/src/Parsley/Inline.php',
        'Kirby\\Parsley\\Parsley' => __DIR__ . '/../..' . '/src/Parsley/Parsley.php',
        'Kirby\\Parsley\\Schema' => __DIR__ . '/../..' . '/src/Parsley/Schema.php',
        'Kirby\\Parsley\\Schema\\Blocks' => __DIR__ . '/../..' . '/src/Parsley/Schema/Blocks.php',
        'Kirby\\Parsley\\Schema\\Plain' => __DIR__ . '/../..' . '/src/Parsley/Schema/Plain.php',
        'Kirby\\Query\\Argument' => __DIR__ . '/../..' . '/src/Query/Argument.php',
        'Kirby\\Query\\Arguments' => __DIR__ . '/../..' . '/src/Query/Arguments.php',
        'Kirby\\Query\\Expression' => __DIR__ . '/../..' . '/src/Query/Expression.php',
        'Kirby\\Query\\Query' => __DIR__ . '/../..' . '/src/Query/Query.php',
        'Kirby\\Query\\Segment' => __DIR__ . '/../..' . '/src/Query/Segment.php',
        'Kirby\\Query\\Segments' => __DIR__ . '/../..' . '/src/Query/Segments.php',
        'Kirby\\Sane\\DomHandler' => __DIR__ . '/../..' . '/src/Sane/DomHandler.php',
        'Kirby\\Sane\\Handler' => __DIR__ . '/../..' . '/src/Sane/Handler.php',
        'Kirby\\Sane\\Html' => __DIR__ . '/../..' . '/src/Sane/Html.php',
        'Kirby\\Sane\\Sane' => __DIR__ . '/../..' . '/src/Sane/Sane.php',
        'Kirby\\Sane\\Svg' => __DIR__ . '/../..' . '/src/Sane/Svg.php',
        'Kirby\\Sane\\Svgz' => __DIR__ . '/../..' . '/src/Sane/Svgz.php',
        'Kirby\\Sane\\Xml' => __DIR__ . '/../..' . '/src/Sane/Xml.php',
        'Kirby\\Session\\AutoSession' => __DIR__ . '/../..' . '/src/Session/AutoSession.php',
        'Kirby\\Session\\FileSessionStore' => __DIR__ . '/../..' . '/src/Session/FileSessionStore.php',
        'Kirby\\Session\\Session' => __DIR__ . '/../..' . '/src/Session/Session.php',
        'Kirby\\Session\\SessionData' => __DIR__ . '/../..' . '/src/Session/SessionData.php',
        'Kirby\\Session\\SessionStore' => __DIR__ . '/../..' . '/src/Session/SessionStore.php',
        'Kirby\\Session\\Sessions' => __DIR__ . '/../..' . '/src/Session/Sessions.php',
        'Kirby\\Template\\Slot' => __DIR__ . '/../..' . '/src/Template/Slot.php',
        'Kirby\\Template\\Slots' => __DIR__ . '/../..' . '/src/Template/Slots.php',
        'Kirby\\Template\\Snippet' => __DIR__ . '/../..' . '/src/Template/Snippet.php',
        'Kirby\\Template\\Template' => __DIR__ . '/../..' . '/src/Template/Template.php',
        'Kirby\\Text\\KirbyTag' => __DIR__ . '/../..' . '/src/Text/KirbyTag.php',
        'Kirby\\Text\\KirbyTags' => __DIR__ . '/../..' . '/src/Text/KirbyTags.php',
        'Kirby\\Text\\Markdown' => __DIR__ . '/../..' . '/src/Text/Markdown.php',
        'Kirby\\Text\\SmartyPants' => __DIR__ . '/../..' . '/src/Text/SmartyPants.php',
        'Kirby\\Toolkit\\A' => __DIR__ . '/../..' . '/src/Toolkit/A.php',
        'Kirby\\Toolkit\\Collection' => __DIR__ . '/../..' . '/src/Toolkit/Collection.php',
        'Kirby\\Toolkit\\Component' => __DIR__ . '/../..' . '/src/Toolkit/Component.php',
        'Kirby\\Toolkit\\Config' => __DIR__ . '/../..' . '/src/Toolkit/Config.php',
        'Kirby\\Toolkit\\Controller' => __DIR__ . '/../..' . '/src/Toolkit/Controller.php',
        'Kirby\\Toolkit\\Date' => __DIR__ . '/../..' . '/src/Toolkit/Date.php',
        'Kirby\\Toolkit\\Dom' => __DIR__ . '/../..' . '/src/Toolkit/Dom.php',
        'Kirby\\Toolkit\\Escape' => __DIR__ . '/../..' . '/src/Toolkit/Escape.php',
        'Kirby\\Toolkit\\Facade' => __DIR__ . '/../..' . '/src/Toolkit/Facade.php',
        'Kirby\\Toolkit\\Html' => __DIR__ . '/../..' . '/src/Toolkit/Html.php',
        'Kirby\\Toolkit\\I18n' => __DIR__ . '/../..' . '/src/Toolkit/I18n.php',
        'Kirby\\Toolkit\\Iterator' => __DIR__ . '/../..' . '/src/Toolkit/Iterator.php',
        'Kirby\\Toolkit\\LazyValue' => __DIR__ . '/../..' . '/src/Toolkit/LazyValue.php',
        'Kirby\\Toolkit\\Locale' => __DIR__ . '/../..' . '/src/Toolkit/Locale.php',
        'Kirby\\Toolkit\\Obj' => __DIR__ . '/../..' . '/src/Toolkit/Obj.php',
        'Kirby\\Toolkit\\Pagination' => __DIR__ . '/../..' . '/src/Toolkit/Pagination.php',
        'Kirby\\Toolkit\\Properties' => __DIR__ . '/../..' . '/src/Toolkit/Properties.php',
        'Kirby\\Toolkit\\Silo' => __DIR__ . '/../..' . '/src/Toolkit/Silo.php',
        'Kirby\\Toolkit\\Str' => __DIR__ . '/../..' . '/src/Toolkit/Str.php',
        'Kirby\\Toolkit\\Tpl' => __DIR__ . '/../..' . '/src/Toolkit/Tpl.php',
        'Kirby\\Toolkit\\V' => __DIR__ . '/../..' . '/src/Toolkit/V.php',
        'Kirby\\Toolkit\\View' => __DIR__ . '/../..' . '/src/Toolkit/View.php',
        'Kirby\\Toolkit\\Xml' => __DIR__ . '/../..' . '/src/Toolkit/Xml.php',
        'Kirby\\Uuid\\BlockUuid' => __DIR__ . '/../..' . '/src/Uuid/BlockUuid.php',
        'Kirby\\Uuid\\FieldUuid' => __DIR__ . '/../..' . '/src/Uuid/FieldUuid.php',
        'Kirby\\Uuid\\FileUuid' => __DIR__ . '/../..' . '/src/Uuid/FileUuid.php',
        'Kirby\\Uuid\\HasUuids' => __DIR__ . '/../..' . '/src/Uuid/HasUuids.php',
        'Kirby\\Uuid\\Identifiable' => __DIR__ . '/../..' . '/src/Uuid/Identifiable.php',
        'Kirby\\Uuid\\ModelUuid' => __DIR__ . '/../..' . '/src/Uuid/ModelUuid.php',
        'Kirby\\Uuid\\PageUuid' => __DIR__ . '/../..' . '/src/Uuid/PageUuid.php',
        'Kirby\\Uuid\\SiteUuid' => __DIR__ . '/../..' . '/src/Uuid/SiteUuid.php',
        'Kirby\\Uuid\\StructureUuid' => __DIR__ . '/../..' . '/src/Uuid/StructureUuid.php',
        'Kirby\\Uuid\\Uri' => __DIR__ . '/../..' . '/src/Uuid/Uri.php',
        'Kirby\\Uuid\\UserUuid' => __DIR__ . '/../..' . '/src/Uuid/UserUuid.php',
        'Kirby\\Uuid\\Uuid' => __DIR__ . '/../..' . '/src/Uuid/Uuid.php',
        'Kirby\\Uuid\\Uuids' => __DIR__ . '/../..' . '/src/Uuid/Uuids.php',
        'Laminas\\Escaper\\Escaper' => __DIR__ . '/..' . '/laminas/laminas-escaper/src/Escaper.php',
        'Laminas\\Escaper\\Exception\\ExceptionInterface' => __DIR__ . '/..' . '/laminas/laminas-escaper/src/Exception/ExceptionInterface.php',
        'Laminas\\Escaper\\Exception\\InvalidArgumentException' => __DIR__ . '/..' . '/laminas/laminas-escaper/src/Exception/InvalidArgumentException.php',
        'Laminas\\Escaper\\Exception\\RuntimeException' => __DIR__ . '/..' . '/laminas/laminas-escaper/src/Exception/RuntimeException.php',
        'League\\ColorExtractor\\Color' => __DIR__ . '/..' . '/league/color-extractor/src/Color.php',
        'League\\ColorExtractor\\ColorExtractor' => __DIR__ . '/..' . '/league/color-extractor/src/ColorExtractor.php',
        'League\\ColorExtractor\\Palette' => __DIR__ . '/..' . '/league/color-extractor/src/Palette.php',
        'Michelf\\SmartyPants' => __DIR__ . '/..' . '/michelf/php-smartypants/Michelf/SmartyPants.php',
        'Michelf\\SmartyPantsTypographer' => __DIR__ . '/..' . '/michelf/php-smartypants/Michelf/SmartyPantsTypographer.php',
        'Normalizer' => __DIR__ . '/..' . '/symfony/polyfill-intl-normalizer/Resources/stubs/Normalizer.php',
        'PHPMailer\\PHPMailer\\DSNConfigurator' => __DIR__ . '/..' . '/phpmailer/phpmailer/src/DSNConfigurator.php',
        'PHPMailer\\PHPMailer\\Exception' => __DIR__ . '/..' . '/phpmailer/phpmailer/src/Exception.php',
        'PHPMailer\\PHPMailer\\OAuth' => __DIR__ . '/..' . '/phpmailer/phpmailer/src/OAuth.php',
        'PHPMailer\\PHPMailer\\OAuthTokenProvider' => __DIR__ . '/..' . '/phpmailer/phpmailer/src/OAuthTokenProvider.php',
        'PHPMailer\\PHPMailer\\PHPMailer' => __DIR__ . '/..' . '/phpmailer/phpmailer/src/PHPMailer.php',
        'PHPMailer\\PHPMailer\\POP3' => __DIR__ . '/..' . '/phpmailer/phpmailer/src/POP3.php',
        'PHPMailer\\PHPMailer\\SMTP' => __DIR__ . '/..' . '/phpmailer/phpmailer/src/SMTP.php',
        'Parsedown' => __DIR__ . '/../..' . '/dependencies/parsedown/Parsedown.php',
        'ParsedownExtra' => __DIR__ . '/../..' . '/dependencies/parsedown-extra/ParsedownExtra.php',
        'Psr\\Log\\AbstractLogger' => __DIR__ . '/..' . '/psr/log/src/AbstractLogger.php',
        'Psr\\Log\\InvalidArgumentException' => __DIR__ . '/..' . '/psr/log/src/InvalidArgumentException.php',
        'Psr\\Log\\LogLevel' => __DIR__ . '/..' . '/psr/log/src/LogLevel.php',
        'Psr\\Log\\LoggerAwareInterface' => __DIR__ . '/..' . '/psr/log/src/LoggerAwareInterface.php',
        'Psr\\Log\\LoggerAwareTrait' => __DIR__ . '/..' . '/psr/log/src/LoggerAwareTrait.php',
        'Psr\\Log\\LoggerInterface' => __DIR__ . '/..' . '/psr/log/src/LoggerInterface.php',
        'Psr\\Log\\LoggerTrait' => __DIR__ . '/..' . '/psr/log/src/LoggerTrait.php',
        'Psr\\Log\\NullLogger' => __DIR__ . '/..' . '/psr/log/src/NullLogger.php',
        'Spyc' => __DIR__ . '/../..' . '/dependencies/spyc/Spyc.php',
        'Symfony\\Component\\Yaml\\Command\\LintCommand' => __DIR__ . '/..' . '/symfony/yaml/Command/LintCommand.php',
        'Symfony\\Component\\Yaml\\Dumper' => __DIR__ . '/..' . '/symfony/yaml/Dumper.php',
        'Symfony\\Component\\Yaml\\Escaper' => __DIR__ . '/..' . '/symfony/yaml/Escaper.php',
        'Symfony\\Component\\Yaml\\Exception\\DumpException' => __DIR__ . '/..' . '/symfony/yaml/Exception/DumpException.php',
        'Symfony\\Component\\Yaml\\Exception\\ExceptionInterface' => __DIR__ . '/..' . '/symfony/yaml/Exception/ExceptionInterface.php',
        'Symfony\\Component\\Yaml\\Exception\\ParseException' => __DIR__ . '/..' . '/symfony/yaml/Exception/ParseException.php',
        'Symfony\\Component\\Yaml\\Exception\\RuntimeException' => __DIR__ . '/..' . '/symfony/yaml/Exception/RuntimeException.php',
        'Symfony\\Component\\Yaml\\Inline' => __DIR__ . '/..' . '/symfony/yaml/Inline.php',
        'Symfony\\Component\\Yaml\\Parser' => __DIR__ . '/..' . '/symfony/yaml/Parser.php',
        'Symfony\\Component\\Yaml\\Tag\\TaggedValue' => __DIR__ . '/..' . '/symfony/yaml/Tag/TaggedValue.php',
        'Symfony\\Component\\Yaml\\Unescaper' => __DIR__ . '/..' . '/symfony/yaml/Unescaper.php',
        'Symfony\\Component\\Yaml\\Yaml' => __DIR__ . '/..' . '/symfony/yaml/Yaml.php',
        'Symfony\\Polyfill\\Ctype\\Ctype' => __DIR__ . '/..' . '/symfony/polyfill-ctype/Ctype.php',
        'Symfony\\Polyfill\\Intl\\Idn\\Idn' => __DIR__ . '/..' . '/symfony/polyfill-intl-idn/Idn.php',
        'Symfony\\Polyfill\\Intl\\Idn\\Info' => __DIR__ . '/..' . '/symfony/polyfill-intl-idn/Info.php',
        'Symfony\\Polyfill\\Intl\\Idn\\Resources\\unidata\\DisallowedRanges' => __DIR__ . '/..' . '/symfony/polyfill-intl-idn/Resources/unidata/DisallowedRanges.php',
        'Symfony\\Polyfill\\Intl\\Idn\\Resources\\unidata\\Regex' => __DIR__ . '/..' . '/symfony/polyfill-intl-idn/Resources/unidata/Regex.php',
        'Symfony\\Polyfill\\Intl\\Normalizer\\Normalizer' => __DIR__ . '/..' . '/symfony/polyfill-intl-normalizer/Normalizer.php',
        'Symfony\\Polyfill\\Mbstring\\Mbstring' => __DIR__ . '/..' . '/symfony/polyfill-mbstring/Mbstring.php',
        'Whoops\\Exception\\ErrorException' => __DIR__ . '/..' . '/filp/whoops/src/Whoops/Exception/ErrorException.php',
        'Whoops\\Exception\\Formatter' => __DIR__ . '/..' . '/filp/whoops/src/Whoops/Exception/Formatter.php',
        'Whoops\\Exception\\Frame' => __DIR__ . '/..' . '/filp/whoops/src/Whoops/Exception/Frame.php',
        'Whoops\\Exception\\FrameCollection' => __DIR__ . '/..' . '/filp/whoops/src/Whoops/Exception/FrameCollection.php',
        'Whoops\\Exception\\Inspector' => __DIR__ . '/..' . '/filp/whoops/src/Whoops/Exception/Inspector.php',
        'Whoops\\Handler\\CallbackHandler' => __DIR__ . '/..' . '/filp/whoops/src/Whoops/Handler/CallbackHandler.php',
        'Whoops\\Handler\\Handler' => __DIR__ . '/..' . '/filp/whoops/src/Whoops/Handler/Handler.php',
        'Whoops\\Handler\\HandlerInterface' => __DIR__ . '/..' . '/filp/whoops/src/Whoops/Handler/HandlerInterface.php',
        'Whoops\\Handler\\JsonResponseHandler' => __DIR__ . '/..' . '/filp/whoops/src/Whoops/Handler/JsonResponseHandler.php',
        'Whoops\\Handler\\PlainTextHandler' => __DIR__ . '/..' . '/filp/whoops/src/Whoops/Handler/PlainTextHandler.php',
        'Whoops\\Handler\\PrettyPageHandler' => __DIR__ . '/..' . '/filp/whoops/src/Whoops/Handler/PrettyPageHandler.php',
        'Whoops\\Handler\\XmlResponseHandler' => __DIR__ . '/..' . '/filp/whoops/src/Whoops/Handler/XmlResponseHandler.php',
        'Whoops\\Inspector\\InspectorFactory' => __DIR__ . '/..' . '/filp/whoops/src/Whoops/Inspector/InspectorFactory.php',
        'Whoops\\Inspector\\InspectorFactoryInterface' => __DIR__ . '/..' . '/filp/whoops/src/Whoops/Inspector/InspectorFactoryInterface.php',
        'Whoops\\Inspector\\InspectorInterface' => __DIR__ . '/..' . '/filp/whoops/src/Whoops/Inspector/InspectorInterface.php',
        'Whoops\\Run' => __DIR__ . '/..' . '/filp/whoops/src/Whoops/Run.php',
        'Whoops\\RunInterface' => __DIR__ . '/..' . '/filp/whoops/src/Whoops/RunInterface.php',
        'Whoops\\Util\\HtmlDumperOutput' => __DIR__ . '/..' . '/filp/whoops/src/Whoops/Util/HtmlDumperOutput.php',
        'Whoops\\Util\\Misc' => __DIR__ . '/..' . '/filp/whoops/src/Whoops/Util/Misc.php',
        'Whoops\\Util\\SystemFacade' => __DIR__ . '/..' . '/filp/whoops/src/Whoops/Util/SystemFacade.php',
        'Whoops\\Util\\TemplateHelper' => __DIR__ . '/..' . '/filp/whoops/src/Whoops/Util/TemplateHelper.php',
        'claviska\\SimpleImage' => __DIR__ . '/..' . '/claviska/simpleimage/src/claviska/SimpleImage.php',
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->prefixLengthsPsr4 = ComposerStaticInita8011b477bb239488e5d139cdeb7b31e::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInita8011b477bb239488e5d139cdeb7b31e::$prefixDirsPsr4;
            $loader->prefixesPsr0 = ComposerStaticInita8011b477bb239488e5d139cdeb7b31e::$prefixesPsr0;
            $loader->classMap = ComposerStaticInita8011b477bb239488e5d139cdeb7b31e::$classMap;

        }, null, ClassLoader::class);
    }
}
