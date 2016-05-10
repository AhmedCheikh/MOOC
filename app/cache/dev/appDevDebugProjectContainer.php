<?php

use Symfony\Component\DependencyInjection\ContainerInterface;
use Symfony\Component\DependencyInjection\Container;
use Symfony\Component\DependencyInjection\Exception\InactiveScopeException;
use Symfony\Component\DependencyInjection\Exception\InvalidArgumentException;
use Symfony\Component\DependencyInjection\Exception\LogicException;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;
use Symfony\Component\DependencyInjection\ParameterBag\FrozenParameterBag;

/**
 * appDevDebugProjectContainer.
 *
 * This class has been auto-generated
 * by the Symfony Dependency Injection Component.
 */
class appDevDebugProjectContainer extends Container
{
    private $parameters;
    private $targetDirs = array();

    /**
     * Constructor.
     */
    public function __construct()
    {
        $dir = __DIR__;
        for ($i = 1; $i <= 4; ++$i) {
            $this->targetDirs[$i] = $dir = dirname($dir);
        }
        $this->parameters = $this->getDefaultParameters();

        $this->services =
        $this->scopedServices =
        $this->scopeStacks = array();
        $this->scopes = array('request' => 'container');
        $this->scopeChildren = array('request' => array());
        $this->methodMap = array(
            'annotation_reader' => 'getAnnotationReaderService',
            'assetic.asset_factory' => 'getAssetic_AssetFactoryService',
            'assetic.asset_manager' => 'getAssetic_AssetManagerService',
            'assetic.filter.cssrewrite' => 'getAssetic_Filter_CssrewriteService',
            'assetic.filter_manager' => 'getAssetic_FilterManagerService',
            'avanzu_admin_theme.context_listener' => 'getAvanzuAdminTheme_ContextListenerService',
            'avanzu_admin_theme.exception_controller' => 'getAvanzuAdminTheme_ExceptionControllerService',
            'avanzu_admin_theme.setup_theme_listener' => 'getAvanzuAdminTheme_SetupThemeListenerService',
            'avanzu_admin_theme.theme_manager' => 'getAvanzuAdminTheme_ThemeManagerService',
            'avanzu_admin_theme.widget_extension.class' => 'getAvanzuAdminTheme_WidgetExtension_ClassService',
            'cache_clearer' => 'getCacheClearerService',
            'cache_warmer' => 'getCacheWarmerService',
            'controller_name_converter' => 'getControllerNameConverterService',
            'data_collector.dump' => 'getDataCollector_DumpService',
            'data_collector.form' => 'getDataCollector_FormService',
            'data_collector.form.extractor' => 'getDataCollector_Form_ExtractorService',
            'data_collector.request' => 'getDataCollector_RequestService',
            'data_collector.router' => 'getDataCollector_RouterService',
            'debug.controller_resolver' => 'getDebug_ControllerResolverService',
            'debug.debug_handlers_listener' => 'getDebug_DebugHandlersListenerService',
            'debug.dump_listener' => 'getDebug_DumpListenerService',
            'debug.event_dispatcher' => 'getDebug_EventDispatcherService',
            'debug.stopwatch' => 'getDebug_StopwatchService',
            'debug.templating.engine.php' => 'getDebug_Templating_Engine_PhpService',
            'doctrine' => 'getDoctrineService',
            'doctrine.dbal.connection_factory' => 'getDoctrine_Dbal_ConnectionFactoryService',
            'doctrine.dbal.default_connection' => 'getDoctrine_Dbal_DefaultConnectionService',
            'doctrine.dbal.logger.profiling.default' => 'getDoctrine_Dbal_Logger_Profiling_DefaultService',
            'doctrine.orm.default_entity_listener_resolver' => 'getDoctrine_Orm_DefaultEntityListenerResolverService',
            'doctrine.orm.default_entity_manager' => 'getDoctrine_Orm_DefaultEntityManagerService',
            'doctrine.orm.default_manager_configurator' => 'getDoctrine_Orm_DefaultManagerConfiguratorService',
            'doctrine.orm.validator.unique' => 'getDoctrine_Orm_Validator_UniqueService',
            'doctrine.orm.validator_initializer' => 'getDoctrine_Orm_ValidatorInitializerService',
            'doctrine_cache.providers.doctrine.orm.default_metadata_cache' => 'getDoctrineCache_Providers_Doctrine_Orm_DefaultMetadataCacheService',
            'doctrine_cache.providers.doctrine.orm.default_query_cache' => 'getDoctrineCache_Providers_Doctrine_Orm_DefaultQueryCacheService',
            'doctrine_cache.providers.doctrine.orm.default_result_cache' => 'getDoctrineCache_Providers_Doctrine_Orm_DefaultResultCacheService',
            'easyadmin.configurator' => 'getEasyadmin_ConfiguratorService',
            'easyadmin.form.type' => 'getEasyadmin_Form_TypeService',
            'easyadmin.form.type.extension' => 'getEasyadmin_Form_Type_ExtensionService',
            'easyadmin.listener.request_post_initialize' => 'getEasyadmin_Listener_RequestPostInitializeService',
            'easyadmin.paginator' => 'getEasyadmin_PaginatorService',
            'easyadmin.query_builder' => 'getEasyadmin_QueryBuilderService',
            'file_locator' => 'getFileLocatorService',
            'filesystem' => 'getFilesystemService',
            'form.csrf_provider' => 'getForm_CsrfProviderService',
            'form.factory' => 'getForm_FactoryService',
            'form.registry' => 'getForm_RegistryService',
            'form.resolved_type_factory' => 'getForm_ResolvedTypeFactoryService',
            'form.type.birthday' => 'getForm_Type_BirthdayService',
            'form.type.button' => 'getForm_Type_ButtonService',
            'form.type.checkbox' => 'getForm_Type_CheckboxService',
            'form.type.choice' => 'getForm_Type_ChoiceService',
            'form.type.collection' => 'getForm_Type_CollectionService',
            'form.type.country' => 'getForm_Type_CountryService',
            'form.type.currency' => 'getForm_Type_CurrencyService',
            'form.type.date' => 'getForm_Type_DateService',
            'form.type.datetime' => 'getForm_Type_DatetimeService',
            'form.type.email' => 'getForm_Type_EmailService',
            'form.type.entity' => 'getForm_Type_EntityService',
            'form.type.file' => 'getForm_Type_FileService',
            'form.type.form' => 'getForm_Type_FormService',
            'form.type.hidden' => 'getForm_Type_HiddenService',
            'form.type.integer' => 'getForm_Type_IntegerService',
            'form.type.language' => 'getForm_Type_LanguageService',
            'form.type.locale' => 'getForm_Type_LocaleService',
            'form.type.money' => 'getForm_Type_MoneyService',
            'form.type.number' => 'getForm_Type_NumberService',
            'form.type.password' => 'getForm_Type_PasswordService',
            'form.type.percent' => 'getForm_Type_PercentService',
            'form.type.radio' => 'getForm_Type_RadioService',
            'form.type.repeated' => 'getForm_Type_RepeatedService',
            'form.type.reset' => 'getForm_Type_ResetService',
            'form.type.search' => 'getForm_Type_SearchService',
            'form.type.submit' => 'getForm_Type_SubmitService',
            'form.type.text' => 'getForm_Type_TextService',
            'form.type.textarea' => 'getForm_Type_TextareaService',
            'form.type.time' => 'getForm_Type_TimeService',
            'form.type.timezone' => 'getForm_Type_TimezoneService',
            'form.type.url' => 'getForm_Type_UrlService',
            'form.type_extension.csrf' => 'getForm_TypeExtension_CsrfService',
            'form.type_extension.form.data_collector' => 'getForm_TypeExtension_Form_DataCollectorService',
            'form.type_extension.form.http_foundation' => 'getForm_TypeExtension_Form_HttpFoundationService',
            'form.type_extension.form.validator' => 'getForm_TypeExtension_Form_ValidatorService',
            'form.type_extension.repeated.validator' => 'getForm_TypeExtension_Repeated_ValidatorService',
            'form.type_extension.submit.validator' => 'getForm_TypeExtension_Submit_ValidatorService',
            'form.type_guesser.doctrine' => 'getForm_TypeGuesser_DoctrineService',
            'form.type_guesser.validator' => 'getForm_TypeGuesser_ValidatorService',
            'fragment.handler' => 'getFragment_HandlerService',
            'fragment.listener' => 'getFragment_ListenerService',
            'fragment.renderer.esi' => 'getFragment_Renderer_EsiService',
            'fragment.renderer.hinclude' => 'getFragment_Renderer_HincludeService',
            'fragment.renderer.inline' => 'getFragment_Renderer_InlineService',
            'fragment.renderer.ssi' => 'getFragment_Renderer_SsiService',
            'http_kernel' => 'getHttpKernelService',
            'image.handling' => 'getImage_HandlingService',
            'kernel' => 'getKernelService',
            'locale_listener' => 'getLocaleListenerService',
            'logger' => 'getLoggerService',
            'monolog.handler.console' => 'getMonolog_Handler_ConsoleService',
            'monolog.handler.console_very_verbose' => 'getMonolog_Handler_ConsoleVeryVerboseService',
            'monolog.handler.debug' => 'getMonolog_Handler_DebugService',
            'monolog.handler.main' => 'getMonolog_Handler_MainService',
            'monolog.logger.assetic' => 'getMonolog_Logger_AsseticService',
            'monolog.logger.doctrine' => 'getMonolog_Logger_DoctrineService',
            'monolog.logger.event' => 'getMonolog_Logger_EventService',
            'monolog.logger.php' => 'getMonolog_Logger_PhpService',
            'monolog.logger.profiler' => 'getMonolog_Logger_ProfilerService',
            'monolog.logger.request' => 'getMonolog_Logger_RequestService',
            'monolog.logger.router' => 'getMonolog_Logger_RouterService',
            'monolog.logger.security' => 'getMonolog_Logger_SecurityService',
            'monolog.logger.templating' => 'getMonolog_Logger_TemplatingService',
            'monolog.logger.translation' => 'getMonolog_Logger_TranslationService',
            'nomaya.socialbarhelper' => 'getNomaya_SocialbarhelperService',
            'nomaya.sociallinkshelper' => 'getNomaya_SociallinkshelperService',
            'profiler' => 'getProfilerService',
            'profiler_listener' => 'getProfilerListenerService',
            'property_accessor' => 'getPropertyAccessorService',
            'request' => 'getRequestService',
            'request_stack' => 'getRequestStackService',
            'response_listener' => 'getResponseListenerService',
            'router' => 'getRouterService',
            'router.request_context' => 'getRouter_RequestContextService',
            'router_listener' => 'getRouterListenerService',
            'routing.loader' => 'getRouting_LoaderService',
            'security.access.decision_manager' => 'getSecurity_Access_DecisionManagerService',
            'security.authentication.manager' => 'getSecurity_Authentication_ManagerService',
            'security.authentication.trust_resolver' => 'getSecurity_Authentication_TrustResolverService',
            'security.authentication_utils' => 'getSecurity_AuthenticationUtilsService',
            'security.authorization_checker' => 'getSecurity_AuthorizationCheckerService',
            'security.context' => 'getSecurity_ContextService',
            'security.csrf.token_manager' => 'getSecurity_Csrf_TokenManagerService',
            'security.encoder_factory' => 'getSecurity_EncoderFactoryService',
            'security.firewall' => 'getSecurity_FirewallService',
            'security.firewall.map.context.demo_login' => 'getSecurity_Firewall_Map_Context_DemoLoginService',
            'security.firewall.map.context.demo_secured_area' => 'getSecurity_Firewall_Map_Context_DemoSecuredAreaService',
            'security.firewall.map.context.dev' => 'getSecurity_Firewall_Map_Context_DevService',
            'security.password_encoder' => 'getSecurity_PasswordEncoderService',
            'security.rememberme.response_listener' => 'getSecurity_Rememberme_ResponseListenerService',
            'security.role_hierarchy' => 'getSecurity_RoleHierarchyService',
            'security.secure_random' => 'getSecurity_SecureRandomService',
            'security.token_storage' => 'getSecurity_TokenStorageService',
            'security.user.provider.concrete.in_memory' => 'getSecurity_User_Provider_Concrete_InMemoryService',
            'security.validator.user_password' => 'getSecurity_Validator_UserPasswordService',
            'sensio_distribution.security_checker' => 'getSensioDistribution_SecurityCheckerService',
            'sensio_distribution.security_checker.command' => 'getSensioDistribution_SecurityChecker_CommandService',
            'sensio_distribution.webconfigurator' => 'getSensioDistribution_WebconfiguratorService',
            'sensio_framework_extra.cache.listener' => 'getSensioFrameworkExtra_Cache_ListenerService',
            'sensio_framework_extra.controller.listener' => 'getSensioFrameworkExtra_Controller_ListenerService',
            'sensio_framework_extra.converter.datetime' => 'getSensioFrameworkExtra_Converter_DatetimeService',
            'sensio_framework_extra.converter.doctrine.orm' => 'getSensioFrameworkExtra_Converter_Doctrine_OrmService',
            'sensio_framework_extra.converter.listener' => 'getSensioFrameworkExtra_Converter_ListenerService',
            'sensio_framework_extra.converter.manager' => 'getSensioFrameworkExtra_Converter_ManagerService',
            'sensio_framework_extra.security.listener' => 'getSensioFrameworkExtra_Security_ListenerService',
            'sensio_framework_extra.view.guesser' => 'getSensioFrameworkExtra_View_GuesserService',
            'sensio_framework_extra.view.listener' => 'getSensioFrameworkExtra_View_ListenerService',
            'service_container' => 'getServiceContainerService',
            'session' => 'getSessionService',
            'session.save_listener' => 'getSession_SaveListenerService',
            'session.storage.filesystem' => 'getSession_Storage_FilesystemService',
            'session.storage.metadata_bag' => 'getSession_Storage_MetadataBagService',
            'session.storage.native' => 'getSession_Storage_NativeService',
            'session.storage.php_bridge' => 'getSession_Storage_PhpBridgeService',
            'session_listener' => 'getSessionListenerService',
            'star_rating.twig' => 'getStarRating_TwigService',
            'star_rating.type' => 'getStarRating_TypeService',
            'streamed_response_listener' => 'getStreamedResponseListenerService',
            'swiftmailer.email_sender.listener' => 'getSwiftmailer_EmailSender_ListenerService',
            'swiftmailer.mailer.default' => 'getSwiftmailer_Mailer_DefaultService',
            'swiftmailer.mailer.default.plugin.messagelogger' => 'getSwiftmailer_Mailer_Default_Plugin_MessageloggerService',
            'swiftmailer.mailer.default.spool' => 'getSwiftmailer_Mailer_Default_SpoolService',
            'swiftmailer.mailer.default.transport' => 'getSwiftmailer_Mailer_Default_TransportService',
            'swiftmailer.mailer.default.transport.eventdispatcher' => 'getSwiftmailer_Mailer_Default_Transport_EventdispatcherService',
            'swiftmailer.mailer.default.transport.real' => 'getSwiftmailer_Mailer_Default_Transport_RealService',
            'templating' => 'getTemplatingService',
            'templating.asset.package_factory' => 'getTemplating_Asset_PackageFactoryService',
            'templating.filename_parser' => 'getTemplating_FilenameParserService',
            'templating.globals' => 'getTemplating_GlobalsService',
            'templating.helper.actions' => 'getTemplating_Helper_ActionsService',
            'templating.helper.assets' => 'getTemplating_Helper_AssetsService',
            'templating.helper.code' => 'getTemplating_Helper_CodeService',
            'templating.helper.form' => 'getTemplating_Helper_FormService',
            'templating.helper.logout_url' => 'getTemplating_Helper_LogoutUrlService',
            'templating.helper.request' => 'getTemplating_Helper_RequestService',
            'templating.helper.router' => 'getTemplating_Helper_RouterService',
            'templating.helper.security' => 'getTemplating_Helper_SecurityService',
            'templating.helper.session' => 'getTemplating_Helper_SessionService',
            'templating.helper.slots' => 'getTemplating_Helper_SlotsService',
            'templating.helper.stopwatch' => 'getTemplating_Helper_StopwatchService',
            'templating.helper.translator' => 'getTemplating_Helper_TranslatorService',
            'templating.loader' => 'getTemplating_LoaderService',
            'templating.locator' => 'getTemplating_LocatorService',
            'templating.name_parser' => 'getTemplating_NameParserService',
            'translation.dumper.csv' => 'getTranslation_Dumper_CsvService',
            'translation.dumper.ini' => 'getTranslation_Dumper_IniService',
            'translation.dumper.json' => 'getTranslation_Dumper_JsonService',
            'translation.dumper.mo' => 'getTranslation_Dumper_MoService',
            'translation.dumper.php' => 'getTranslation_Dumper_PhpService',
            'translation.dumper.po' => 'getTranslation_Dumper_PoService',
            'translation.dumper.qt' => 'getTranslation_Dumper_QtService',
            'translation.dumper.res' => 'getTranslation_Dumper_ResService',
            'translation.dumper.xliff' => 'getTranslation_Dumper_XliffService',
            'translation.dumper.yml' => 'getTranslation_Dumper_YmlService',
            'translation.extractor' => 'getTranslation_ExtractorService',
            'translation.extractor.php' => 'getTranslation_Extractor_PhpService',
            'translation.loader' => 'getTranslation_LoaderService',
            'translation.loader.csv' => 'getTranslation_Loader_CsvService',
            'translation.loader.dat' => 'getTranslation_Loader_DatService',
            'translation.loader.ini' => 'getTranslation_Loader_IniService',
            'translation.loader.json' => 'getTranslation_Loader_JsonService',
            'translation.loader.mo' => 'getTranslation_Loader_MoService',
            'translation.loader.php' => 'getTranslation_Loader_PhpService',
            'translation.loader.po' => 'getTranslation_Loader_PoService',
            'translation.loader.qt' => 'getTranslation_Loader_QtService',
            'translation.loader.res' => 'getTranslation_Loader_ResService',
            'translation.loader.xliff' => 'getTranslation_Loader_XliffService',
            'translation.loader.yml' => 'getTranslation_Loader_YmlService',
            'translation.writer' => 'getTranslation_WriterService',
            'translator' => 'getTranslatorService',
            'translator.default' => 'getTranslator_DefaultService',
            'translator_listener' => 'getTranslatorListenerService',
            'twig' => 'getTwigService',
            'twig.controller.exception' => 'getTwig_Controller_ExceptionService',
            'twig.controller.preview_error' => 'getTwig_Controller_PreviewErrorService',
            'twig.exception_listener' => 'getTwig_ExceptionListenerService',
            'twig.extension.image' => 'getTwig_Extension_ImageService',
            'twig.extension.nomaya_social_bar' => 'getTwig_Extension_NomayaSocialBarService',
            'twig.extension.nomaya_social_links' => 'getTwig_Extension_NomayaSocialLinksService',
            'twig.loader' => 'getTwig_LoaderService',
            'twig.translation.extractor' => 'getTwig_Translation_ExtractorService',
            'uri_signer' => 'getUriSignerService',
            'validator' => 'getValidatorService',
            'validator.builder' => 'getValidator_BuilderService',
            'validator.email' => 'getValidator_EmailService',
            'validator.expression' => 'getValidator_ExpressionService',
            'var_dumper.cli_dumper' => 'getVarDumper_CliDumperService',
            'var_dumper.cloner' => 'getVarDumper_ClonerService',
            'vich_uploader.download_handler' => 'getVichUploader_DownloadHandlerService',
            'vich_uploader.form.type.file' => 'getVichUploader_Form_Type_FileService',
            'vich_uploader.form.type.image' => 'getVichUploader_Form_Type_ImageService',
            'vich_uploader.metadata_reader' => 'getVichUploader_MetadataReaderService',
            'vich_uploader.namer_origname' => 'getVichUploader_NamerOrignameService',
            'vich_uploader.namer_property' => 'getVichUploader_NamerPropertyService',
            'vich_uploader.namer_uniqid' => 'getVichUploader_NamerUniqidService',
            'vich_uploader.property_mapping_factory' => 'getVichUploader_PropertyMappingFactoryService',
            'vich_uploader.storage' => 'getVichUploader_StorageService',
            'vich_uploader.templating.helper.uploader_helper' => 'getVichUploader_Templating_Helper_UploaderHelperService',
            'vich_uploader.upload_handler' => 'getVichUploader_UploadHandlerService',
            'web_profiler.controller.exception' => 'getWebProfiler_Controller_ExceptionService',
            'web_profiler.controller.profiler' => 'getWebProfiler_Controller_ProfilerService',
            'web_profiler.controller.router' => 'getWebProfiler_Controller_RouterService',
            'web_profiler.debug_toolbar' => 'getWebProfiler_DebugToolbarService',
        );
        $this->aliases = array(
            'console.command.sensiolabs_security_command_securitycheckercommand' => 'sensio_distribution.security_checker.command',
            'database_connection' => 'doctrine.dbal.default_connection',
            'debug.templating.engine.twig' => 'templating',
            'doctrine.orm.default_metadata_cache' => 'doctrine_cache.providers.doctrine.orm.default_metadata_cache',
            'doctrine.orm.default_query_cache' => 'doctrine_cache.providers.doctrine.orm.default_query_cache',
            'doctrine.orm.default_result_cache' => 'doctrine_cache.providers.doctrine.orm.default_result_cache',
            'doctrine.orm.entity_manager' => 'doctrine.orm.default_entity_manager',
            'event_dispatcher' => 'debug.event_dispatcher',
            'mailer' => 'swiftmailer.mailer.default',
            'sensio.distribution.webconfigurator' => 'sensio_distribution.webconfigurator',
            'session.storage' => 'session.storage.native',
            'swiftmailer.mailer' => 'swiftmailer.mailer.default',
            'swiftmailer.plugin.messagelogger' => 'swiftmailer.mailer.default.plugin.messagelogger',
            'swiftmailer.spool' => 'swiftmailer.mailer.default.spool',
            'swiftmailer.transport' => 'swiftmailer.mailer.default.transport',
            'swiftmailer.transport.real' => 'swiftmailer.mailer.default.transport.real',
        );
    }

    /**
     * {@inheritdoc}
     */
    public function compile()
    {
        throw new LogicException('You cannot compile a dumped frozen container.');
    }

    /**
     * Gets the 'annotation_reader' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Doctrine\Common\Annotations\FileCacheReader A Doctrine\Common\Annotations\FileCacheReader instance.
     */
    protected function getAnnotationReaderService()
    {
        return $this->services['annotation_reader'] = new \Doctrine\Common\Annotations\FileCacheReader(new \Doctrine\Common\Annotations\AnnotationReader(), (__DIR__.'/annotations'), true);
    }

    /**
     * Gets the 'assetic.asset_manager' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Assetic\Factory\LazyAssetManager A Assetic\Factory\LazyAssetManager instance.
     */
    protected function getAssetic_AssetManagerService()
    {
        $a = $this->get('templating.loader');

        $this->services['assetic.asset_manager'] = $instance = new \Assetic\Factory\LazyAssetManager($this->get('assetic.asset_factory'), array('config' => new \Symfony\Bundle\AsseticBundle\Factory\Loader\ConfigurationLoader(), 'twig' => new \Assetic\Factory\Loader\CachedFormulaLoader(new \Assetic\Extension\Twig\TwigFormulaLoader($this->get('twig'), $this->get('monolog.logger.assetic', ContainerInterface::NULL_ON_INVALID_REFERENCE)), new \Assetic\Cache\ConfigCache((__DIR__.'/assetic/config')), true)));

        $instance->addResource(new \Symfony\Bundle\AsseticBundle\Factory\Resource\ConfigurationResource(array('modernizr_js' => array(0 => array(0 => '@AvanzuAdminThemeBundle/Resources/public/vendor/modernizr/modernizr.js'), 1 => array(), 2 => array()), 'common_js' => array(0 => array(0 => '@AvanzuAdminThemeBundle/Resources/public/vendor/jquery/dist/jquery.js', 1 => '@AvanzuAdminThemeBundle/Resources/public/vendor/jquery-ui/jquery-ui.js', 2 => '@AvanzuAdminThemeBundle/Resources/public/vendor/underscore/underscore.js', 3 => '@AvanzuAdminThemeBundle/Resources/public/vendor/backbone/backbone.js', 4 => '@AvanzuAdminThemeBundle/Resources/public/vendor/marionette/lib/backbone.marionette.js', 5 => '@AvanzuAdminThemeBundle/Resources/public/vendor/bootstrap/dist/js/bootstrap.min.js', 6 => '@AvanzuAdminThemeBundle/Resources/public/vendor/bootbox/bootbox.js', 7 => '@AvanzuAdminThemeBundle/Resources/public/js/dialogs.js', 8 => '@AvanzuAdminThemeBundle/Resources/public/js/namespace.js'), 1 => array(), 2 => array()), 'tools_js' => array(0 => array(0 => '@common_js', 1 => '@AvanzuAdminThemeBundle/Resources/public/vendor/momentjs/moment.js', 2 => '@AvanzuAdminThemeBundle/Resources/public/vendor/holderjs/holder.js', 3 => '@AvanzuAdminThemeBundle/Resources/public/vendor/spinjs/spin.js'), 1 => array(), 2 => array()), 'admin_lte_js' => array(0 => array(0 => '@AvanzuAdminThemeBundle/Resources/public/vendor/adminlte/plugins/bootstrap-slider/bootstrap-slider.js', 1 => '@AvanzuAdminThemeBundle/Resources/public/vendor/adminlte/plugins/datatables/jquery.dataTables.js', 2 => '@AvanzuAdminThemeBundle/Resources/public/vendor/adminlte/plugins/datatables/dataTables.bootstrap.js', 3 => '@AvanzuAdminThemeBundle/Resources/public/vendor/adminlte/plugins/slimScroll/jquery.slimscroll.js', 4 => '@AvanzuAdminThemeBundle/Resources/public/js/adminLTE.js'), 1 => array(), 2 => array()), 'admin_lte_css' => array(0 => array(0 => 'bundles/avanzuadmintheme/vendor/adminlte/bootstrap/css/bootstrap.min.css', 1 => 'bundles/avanzuadmintheme/vendor/adminlte/plugins/bootstrap-slider/slider.css', 2 => 'bundles/avanzuadmintheme/vendor/adminlte/plugins/datatables/dataTables.bootstrap.css', 3 => 'bundles/avanzuadmintheme/vendor/fontawesome/css/font-awesome.min.css', 4 => 'bundles/avanzuadmintheme/vendor/ionicons/css/ionicons.min.css', 5 => 'bundles/avanzuadmintheme/vendor/adminlte/dist/css/AdminLTE.css', 6 => 'bundles/avanzuadmintheme/vendor/adminlte/dist/css/skins/_all-skins.css'), 1 => array(), 2 => array()), 'admin_lte_forms_js' => array(0 => array(0 => '@AvanzuAdminThemeBundle/Resources/public/vendor/adminlte/plugins/colorpicker/bootstrap-colorpicker.js', 1 => '@AvanzuAdminThemeBundle/Resources/public/vendor/adminlte/plugins/daterangepicker/daterangepicker.js', 2 => '@AvanzuAdminThemeBundle/Resources/public/vendor/adminlte/plugins/timepicker/bootstrap-timepicker.js', 3 => '@AvanzuAdminThemeBundle/Resources/public/vendor/adminlte/plugins/input-mask/jquery.inputmask.js', 4 => '@AvanzuAdminThemeBundle/Resources/public/vendor/adminlte/plugins/iCheck/icheck.js'), 1 => array(), 2 => array()), 'admin_lte_forms_css' => array(0 => array(0 => 'bundles/avanzuadmintheme/vendor/adminlte/plugins/colorpicker/bootstrap-colorpicker.css', 1 => 'bundles/avanzuadmintheme/vendor/adminlte/plugins/daterangepicker/daterangepicker-bs3.css', 2 => 'bundles/avanzuadmintheme/vendor/adminlte/plugins/timepicker/bootstrap-timepicker.css', 3 => 'bundles/avanzuadmintheme/vendor/adminlte/plugins/iCheck/all.css', 4 => 'bundles/avanzuadmintheme/vendor/adminlte/plugins/iCheck/square/_all.css'), 1 => array(), 2 => array()), 'admin_lte_wysiwyg' => array(0 => array(0 => '@AvanzuAdminThemeBundle/Resources/public/vendor/adminlte/plugins/bootstrap-wysihtml5/bootstrap3-wysihtml5.all.min.js'), 1 => array(), 2 => array()), 'admin_lte_wysiwyg_css' => array(0 => array(0 => 'bundles/avanzuadmintheme/vendor/adminlte/plugins/bootstrap-wysihtml5/bootstrap3-wysihtml5.min.css'), 1 => array(), 2 => array()), 'admin_lte_morris' => array(0 => array(0 => '@AvanzuAdminThemeBundle/Resources/public/vendor/adminlte/plugins/morris/morris.js'), 1 => array(), 2 => array()), 'admin_lte_morris_css' => array(0 => array(0 => 'bundles/avanzuadmintheme/vendor/adminlte/plugins/morris/morris.css'), 1 => array(), 2 => array()), 'admin_lte_flot' => array(0 => array(0 => '@AvanzuAdminThemeBundle/Resources/public/vendor/adminlte/plugins/flot/*'), 1 => array(), 2 => array()), 'admin_lte_calendar' => array(0 => array(0 => '@AvanzuAdminThemeBundle/Resources/public/vendor/fullcalendar/dist/fullcalendar.min.js'), 1 => array(), 2 => array()), 'admin_lte_calendar_css' => array(0 => array(0 => 'bundles/avanzuadmintheme/vendor/fullcalendar/dist/fullcalendar.css'), 1 => array(), 2 => array()), 'avatar_img' => array(0 => array(0 => '@AvanzuAdminThemeBundle/Resources/public/img/avatar.png'), 1 => array(), 2 => array()), 'admin_lte_all' => array(0 => array(0 => '@tools_js', 1 => '@admin_lte_forms_js', 2 => '@admin_lte_wysiwyg', 3 => '@admin_lte_morris', 4 => '@admin_lte_calendar', 5 => '@admin_lte_js'), 1 => array(), 2 => array()), 'admin_lte_all_css' => array(0 => array(0 => '@admin_lte_css', 1 => '@admin_lte_forms_css', 2 => '@admin_lte_wysiwyg_css', 3 => '@admin_lte_calendar_css', 4 => '@admin_lte_morris_css'), 1 => array(), 2 => array()))), 'config');
        $instance->addResource(new \Symfony\Bundle\AsseticBundle\Factory\Resource\CoalescingDirectoryResource(array(0 => new \Symfony\Bundle\AsseticBundle\Factory\Resource\DirectoryResource($a, 'AvanzuAdminThemeBundle', ($this->targetDirs[2].'/Resources/AvanzuAdminThemeBundle/views'), '/\\.[^.]+\\.twig$/'), 1 => new \Symfony\Bundle\AsseticBundle\Factory\Resource\DirectoryResource($a, 'AvanzuAdminThemeBundle', ($this->targetDirs[3].'\\vendor\\avanzu\\admin-theme-bundle/Resources/views'), '/\\.[^.]+\\.twig$/'))), 'twig');
        $instance->addResource(new \Symfony\Bundle\AsseticBundle\Factory\Resource\DirectoryResource($a, '', ($this->targetDirs[2].'/Resources/views'), '/\\.[^.]+\\.twig$/'), 'twig');

        return $instance;
    }

    /**
     * Gets the 'assetic.filter.cssrewrite' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Assetic\Filter\CssRewriteFilter A Assetic\Filter\CssRewriteFilter instance.
     */
    protected function getAssetic_Filter_CssrewriteService()
    {
        return $this->services['assetic.filter.cssrewrite'] = new \Assetic\Filter\CssRewriteFilter();
    }

    /**
     * Gets the 'assetic.filter_manager' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Symfony\Bundle\AsseticBundle\FilterManager A Symfony\Bundle\AsseticBundle\FilterManager instance.
     */
    protected function getAssetic_FilterManagerService()
    {
        return $this->services['assetic.filter_manager'] = new \Symfony\Bundle\AsseticBundle\FilterManager($this, array('cssrewrite' => 'assetic.filter.cssrewrite'));
    }

    /**
     * Gets the 'avanzu_admin_theme.context_listener' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Avanzu\AdminThemeBundle\EventListener\ContextListener A Avanzu\AdminThemeBundle\EventListener\ContextListener instance.
     */
    protected function getAvanzuAdminTheme_ContextListenerService()
    {
        return $this->services['avanzu_admin_theme.context_listener'] = new \Avanzu\AdminThemeBundle\EventListener\ContextListener($this);
    }

    /**
     * Gets the 'avanzu_admin_theme.exception_controller' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Avanzu\AdminThemeBundle\Controller\ExceptionController A Avanzu\AdminThemeBundle\Controller\ExceptionController instance.
     */
    protected function getAvanzuAdminTheme_ExceptionControllerService()
    {
        return $this->services['avanzu_admin_theme.exception_controller'] = new \Avanzu\AdminThemeBundle\Controller\ExceptionController($this->get('twig'), true);
    }

    /**
     * Gets the 'avanzu_admin_theme.setup_theme_listener' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Avanzu\AdminThemeBundle\EventListener\SetupThemeListener A Avanzu\AdminThemeBundle\EventListener\SetupThemeListener instance.
     */
    protected function getAvanzuAdminTheme_SetupThemeListenerService()
    {
        return $this->services['avanzu_admin_theme.setup_theme_listener'] = new \Avanzu\AdminThemeBundle\EventListener\SetupThemeListener($this->get('avanzu_admin_theme.theme_manager'), '', '');
    }

    /**
     * Gets the 'avanzu_admin_theme.theme_manager' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Avanzu\AdminThemeBundle\Theme\ThemeManager A Avanzu\AdminThemeBundle\Theme\ThemeManager instance.
     */
    protected function getAvanzuAdminTheme_ThemeManagerService()
    {
        return $this->services['avanzu_admin_theme.theme_manager'] = new \Avanzu\AdminThemeBundle\Theme\ThemeManager($this, '');
    }

    /**
     * Gets the 'avanzu_admin_theme.widget_extension.class' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Avanzu\AdminThemeBundle\Twig\WidgetExtension A Avanzu\AdminThemeBundle\Twig\WidgetExtension instance.
     */
    protected function getAvanzuAdminTheme_WidgetExtension_ClassService()
    {
        return $this->services['avanzu_admin_theme.widget_extension.class'] = new \Avanzu\AdminThemeBundle\Twig\WidgetExtension();
    }

    /**
     * Gets the 'cache_clearer' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Symfony\Component\HttpKernel\CacheClearer\ChainCacheClearer A Symfony\Component\HttpKernel\CacheClearer\ChainCacheClearer instance.
     */
    protected function getCacheClearerService()
    {
        return $this->services['cache_clearer'] = new \Symfony\Component\HttpKernel\CacheClearer\ChainCacheClearer(array());
    }

    /**
     * Gets the 'cache_warmer' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Symfony\Component\HttpKernel\CacheWarmer\CacheWarmerAggregate A Symfony\Component\HttpKernel\CacheWarmer\CacheWarmerAggregate instance.
     */
    protected function getCacheWarmerService()
    {
        $a = $this->get('kernel');
        $b = $this->get('templating.filename_parser');

        $c = new \Symfony\Bundle\FrameworkBundle\CacheWarmer\TemplateFinder($a, $b, ($this->targetDirs[2].'/Resources'));

        return $this->services['cache_warmer'] = new \Symfony\Component\HttpKernel\CacheWarmer\CacheWarmerAggregate(array(0 => new \Symfony\Bundle\FrameworkBundle\CacheWarmer\TemplatePathsCacheWarmer($c, $this->get('templating.locator')), 1 => new \Symfony\Bundle\AsseticBundle\CacheWarmer\AssetManagerCacheWarmer($this), 2 => new \Symfony\Bundle\FrameworkBundle\CacheWarmer\RouterCacheWarmer($this->get('router')), 3 => new \Symfony\Bundle\TwigBundle\CacheWarmer\TemplateCacheCacheWarmer($this, $c), 4 => new \Symfony\Bridge\Doctrine\CacheWarmer\ProxyCacheWarmer($this->get('doctrine'))));
    }

    /**
     * Gets the 'data_collector.dump' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Symfony\Component\HttpKernel\DataCollector\DumpDataCollector A Symfony\Component\HttpKernel\DataCollector\DumpDataCollector instance.
     */
    protected function getDataCollector_DumpService()
    {
        return $this->services['data_collector.dump'] = new \Symfony\Component\HttpKernel\DataCollector\DumpDataCollector($this->get('debug.stopwatch', ContainerInterface::NULL_ON_INVALID_REFERENCE), NULL, 'UTF-8', $this->get('request_stack'), NULL);
    }

    /**
     * Gets the 'data_collector.form' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Symfony\Component\Form\Extension\DataCollector\FormDataCollector A Symfony\Component\Form\Extension\DataCollector\FormDataCollector instance.
     */
    protected function getDataCollector_FormService()
    {
        return $this->services['data_collector.form'] = new \Symfony\Component\Form\Extension\DataCollector\FormDataCollector($this->get('data_collector.form.extractor'));
    }

    /**
     * Gets the 'data_collector.form.extractor' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Symfony\Component\Form\Extension\DataCollector\FormDataExtractor A Symfony\Component\Form\Extension\DataCollector\FormDataExtractor instance.
     */
    protected function getDataCollector_Form_ExtractorService()
    {
        return $this->services['data_collector.form.extractor'] = new \Symfony\Component\Form\Extension\DataCollector\FormDataExtractor();
    }

    /**
     * Gets the 'data_collector.request' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Symfony\Component\HttpKernel\DataCollector\RequestDataCollector A Symfony\Component\HttpKernel\DataCollector\RequestDataCollector instance.
     */
    protected function getDataCollector_RequestService()
    {
        return $this->services['data_collector.request'] = new \Symfony\Component\HttpKernel\DataCollector\RequestDataCollector();
    }

    /**
     * Gets the 'data_collector.router' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Symfony\Bundle\FrameworkBundle\DataCollector\RouterDataCollector A Symfony\Bundle\FrameworkBundle\DataCollector\RouterDataCollector instance.
     */
    protected function getDataCollector_RouterService()
    {
        return $this->services['data_collector.router'] = new \Symfony\Bundle\FrameworkBundle\DataCollector\RouterDataCollector();
    }

    /**
     * Gets the 'debug.controller_resolver' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Symfony\Component\HttpKernel\Controller\TraceableControllerResolver A Symfony\Component\HttpKernel\Controller\TraceableControllerResolver instance.
     */
    protected function getDebug_ControllerResolverService()
    {
        return $this->services['debug.controller_resolver'] = new \Symfony\Component\HttpKernel\Controller\TraceableControllerResolver(new \Symfony\Bundle\FrameworkBundle\Controller\ControllerResolver($this, $this->get('controller_name_converter'), $this->get('monolog.logger.request', ContainerInterface::NULL_ON_INVALID_REFERENCE)), $this->get('debug.stopwatch'));
    }

    /**
     * Gets the 'debug.debug_handlers_listener' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Symfony\Component\HttpKernel\EventListener\DebugHandlersListener A Symfony\Component\HttpKernel\EventListener\DebugHandlersListener instance.
     */
    protected function getDebug_DebugHandlersListenerService()
    {
        return $this->services['debug.debug_handlers_listener'] = new \Symfony\Component\HttpKernel\EventListener\DebugHandlersListener('', $this->get('monolog.logger.php', ContainerInterface::NULL_ON_INVALID_REFERENCE), NULL, NULL, true, NULL);
    }

    /**
     * Gets the 'debug.dump_listener' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Symfony\Component\HttpKernel\EventListener\DumpListener A Symfony\Component\HttpKernel\EventListener\DumpListener instance.
     */
    protected function getDebug_DumpListenerService()
    {
        return $this->services['debug.dump_listener'] = new \Symfony\Component\HttpKernel\EventListener\DumpListener($this->get('var_dumper.cloner'), $this->get('data_collector.dump'));
    }

    /**
     * Gets the 'debug.event_dispatcher' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Symfony\Component\HttpKernel\Debug\TraceableEventDispatcher A Symfony\Component\HttpKernel\Debug\TraceableEventDispatcher instance.
     */
    protected function getDebug_EventDispatcherService()
    {
        $this->services['debug.event_dispatcher'] = $instance = new \Symfony\Component\HttpKernel\Debug\TraceableEventDispatcher(new \Symfony\Component\EventDispatcher\ContainerAwareEventDispatcher($this), $this->get('debug.stopwatch'), $this->get('monolog.logger.event', ContainerInterface::NULL_ON_INVALID_REFERENCE));

        $instance->addListenerService('kernel.controller', array(0 => 'data_collector.router', 1 => 'onKernelController'), 0);
        $instance->addListenerService('easy_admin.post_initialize', array(0 => 'easyadmin.listener.request_post_initialize', 1 => 'initializeRequest'), 0);
        $instance->addListenerService('kernel.controller', array(0 => 'avanzu_admin_theme.setup_theme_listener', 1 => 'onKernelController'), 0);
        $instance->addListenerService('kernel.request', array(0 => 'avanzu_admin_theme.context_listener', 1 => 'onRequest'), 0);
        $instance->addSubscriberService('response_listener', 'Symfony\\Component\\HttpKernel\\EventListener\\ResponseListener');
        $instance->addSubscriberService('streamed_response_listener', 'Symfony\\Component\\HttpKernel\\EventListener\\StreamedResponseListener');
        $instance->addSubscriberService('locale_listener', 'Symfony\\Component\\HttpKernel\\EventListener\\LocaleListener');
        $instance->addSubscriberService('translator_listener', 'Symfony\\Component\\HttpKernel\\EventListener\\TranslatorListener');
        $instance->addSubscriberService('session_listener', 'Symfony\\Bundle\\FrameworkBundle\\EventListener\\SessionListener');
        $instance->addSubscriberService('session.save_listener', 'Symfony\\Component\\HttpKernel\\EventListener\\SaveSessionListener');
        $instance->addSubscriberService('fragment.listener', 'Symfony\\Component\\HttpKernel\\EventListener\\FragmentListener');
        $instance->addSubscriberService('profiler_listener', 'Symfony\\Component\\HttpKernel\\EventListener\\ProfilerListener');
        $instance->addSubscriberService('data_collector.request', 'Symfony\\Component\\HttpKernel\\DataCollector\\RequestDataCollector');
        $instance->addSubscriberService('router_listener', 'Symfony\\Component\\HttpKernel\\EventListener\\RouterListener');
        $instance->addSubscriberService('debug.debug_handlers_listener', 'Symfony\\Component\\HttpKernel\\EventListener\\DebugHandlersListener');
        $instance->addSubscriberService('security.firewall', 'Symfony\\Component\\Security\\Http\\Firewall');
        $instance->addSubscriberService('security.rememberme.response_listener', 'Symfony\\Component\\Security\\Http\\RememberMe\\ResponseListener');
        $instance->addSubscriberService('twig.exception_listener', 'Symfony\\Component\\HttpKernel\\EventListener\\ExceptionListener');
        $instance->addSubscriberService('monolog.handler.console', 'Symfony\\Bridge\\Monolog\\Handler\\ConsoleHandler');
        $instance->addSubscriberService('monolog.handler.console_very_verbose', 'Symfony\\Bridge\\Monolog\\Handler\\ConsoleHandler');
        $instance->addSubscriberService('swiftmailer.email_sender.listener', 'Symfony\\Bundle\\SwiftmailerBundle\\EventListener\\EmailSenderListener');
        $instance->addSubscriberService('sensio_framework_extra.controller.listener', 'Sensio\\Bundle\\FrameworkExtraBundle\\EventListener\\ControllerListener');
        $instance->addSubscriberService('sensio_framework_extra.converter.listener', 'Sensio\\Bundle\\FrameworkExtraBundle\\EventListener\\ParamConverterListener');
        $instance->addSubscriberService('sensio_framework_extra.view.listener', 'Sensio\\Bundle\\FrameworkExtraBundle\\EventListener\\TemplateListener');
        $instance->addSubscriberService('sensio_framework_extra.cache.listener', 'Sensio\\Bundle\\FrameworkExtraBundle\\EventListener\\HttpCacheListener');
        $instance->addSubscriberService('sensio_framework_extra.security.listener', 'Sensio\\Bundle\\FrameworkExtraBundle\\EventListener\\SecurityListener');
        $instance->addSubscriberService('debug.dump_listener', 'Symfony\\Component\\HttpKernel\\EventListener\\DumpListener');
        $instance->addSubscriberService('web_profiler.debug_toolbar', 'Symfony\\Bundle\\WebProfilerBundle\\EventListener\\WebDebugToolbarListener');

        return $instance;
    }

    /**
     * Gets the 'debug.stopwatch' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Symfony\Component\Stopwatch\Stopwatch A Symfony\Component\Stopwatch\Stopwatch instance.
     */
    protected function getDebug_StopwatchService()
    {
        return $this->services['debug.stopwatch'] = new \Symfony\Component\Stopwatch\Stopwatch();
    }

    /**
     * Gets the 'debug.templating.engine.php' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Symfony\Bundle\FrameworkBundle\Templating\TimedPhpEngine A Symfony\Bundle\FrameworkBundle\Templating\TimedPhpEngine instance.
     */
    protected function getDebug_Templating_Engine_PhpService()
    {
        $this->services['debug.templating.engine.php'] = $instance = new \Symfony\Bundle\FrameworkBundle\Templating\TimedPhpEngine($this->get('templating.name_parser'), $this, $this->get('templating.loader'), $this->get('debug.stopwatch'), $this->get('templating.globals'));

        $instance->setCharset('UTF-8');
        $instance->setHelpers(array('slots' => 'templating.helper.slots', 'assets' => 'templating.helper.assets', 'request' => 'templating.helper.request', 'session' => 'templating.helper.session', 'router' => 'templating.helper.router', 'actions' => 'templating.helper.actions', 'code' => 'templating.helper.code', 'translator' => 'templating.helper.translator', 'form' => 'templating.helper.form', 'stopwatch' => 'templating.helper.stopwatch', 'logout_url' => 'templating.helper.logout_url', 'security' => 'templating.helper.security', 'assetic' => 'assetic.helper.static', 'vich_uploader' => 'vich_uploader.templating.helper.uploader_helper', 'social-buttons' => 'nomaya.socialbarhelper', 'social-links' => 'nomaya.sociallinkshelper'));

        return $instance;
    }

    /**
     * Gets the 'doctrine' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Doctrine\Bundle\DoctrineBundle\Registry A Doctrine\Bundle\DoctrineBundle\Registry instance.
     */
    protected function getDoctrineService()
    {
        return $this->services['doctrine'] = new \Doctrine\Bundle\DoctrineBundle\Registry($this, array('default' => 'doctrine.dbal.default_connection'), array('default' => 'doctrine.orm.default_entity_manager'), 'default', 'default');
    }

    /**
     * Gets the 'doctrine.dbal.connection_factory' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Doctrine\Bundle\DoctrineBundle\ConnectionFactory A Doctrine\Bundle\DoctrineBundle\ConnectionFactory instance.
     */
    protected function getDoctrine_Dbal_ConnectionFactoryService()
    {
        return $this->services['doctrine.dbal.connection_factory'] = new \Doctrine\Bundle\DoctrineBundle\ConnectionFactory(array());
    }

    /**
     * Gets the 'doctrine.dbal.default_connection' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Doctrine\DBAL\Connection A Doctrine\DBAL\Connection instance.
     */
    protected function getDoctrine_Dbal_DefaultConnectionService()
    {
        $a = $this->get('vich_uploader.metadata_reader');
        $b = $this->get('vich_uploader.upload_handler');

        $c = new \Doctrine\DBAL\Logging\LoggerChain();
        $c->addLogger(new \Symfony\Bridge\Doctrine\Logger\DbalLogger($this->get('monolog.logger.doctrine', ContainerInterface::NULL_ON_INVALID_REFERENCE), $this->get('debug.stopwatch', ContainerInterface::NULL_ON_INVALID_REFERENCE)));
        $c->addLogger($this->get('doctrine.dbal.logger.profiling.default'));

        $d = new \Doctrine\DBAL\Configuration();
        $d->setSQLLogger($c);

        $e = new \Vich\UploaderBundle\Adapter\ORM\DoctrineORMAdapter();

        $f = new \Symfony\Bridge\Doctrine\ContainerAwareEventManager($this);
        $f->addEventSubscriber(new \Vich\UploaderBundle\EventListener\Doctrine\CleanListener('formateur_image', $e, $a, $b));
        $f->addEventSubscriber(new \Vich\UploaderBundle\EventListener\Doctrine\CleanListener('formateur_cv', $e, $a, $b));
        $f->addEventSubscriber(new \Vich\UploaderBundle\EventListener\Doctrine\RemoveListener('formateur_cv', $e, $a, $b));
        $f->addEventSubscriber(new \Vich\UploaderBundle\EventListener\Doctrine\RemoveListener('formateur_image', $e, $a, $b));
        $f->addEventSubscriber(new \Vich\UploaderBundle\EventListener\Doctrine\UploadListener('formateur_image', $e, $a, $b));
        $f->addEventSubscriber(new \Vich\UploaderBundle\EventListener\Doctrine\UploadListener('formateur_cv', $e, $a, $b));

        return $this->services['doctrine.dbal.default_connection'] = $this->get('doctrine.dbal.connection_factory')->createConnection(array('driver' => 'pdo_mysql', 'host' => '127.0.0.1', 'port' => NULL, 'dbname' => 'mooc', 'user' => 'root', 'password' => NULL, 'charset' => 'UTF8', 'driverOptions' => array(), 'defaultTableOptions' => array()), $d, $f, array());
    }

    /**
     * Gets the 'doctrine.orm.default_entity_listener_resolver' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Doctrine\ORM\Mapping\DefaultEntityListenerResolver A Doctrine\ORM\Mapping\DefaultEntityListenerResolver instance.
     */
    protected function getDoctrine_Orm_DefaultEntityListenerResolverService()
    {
        return $this->services['doctrine.orm.default_entity_listener_resolver'] = new \Doctrine\ORM\Mapping\DefaultEntityListenerResolver();
    }

    /**
     * Gets the 'doctrine.orm.default_entity_manager' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Doctrine\ORM\EntityManager A Doctrine\ORM\EntityManager instance.
     */
    protected function getDoctrine_Orm_DefaultEntityManagerService()
    {
        $a = new \Doctrine\Common\Persistence\Mapping\Driver\MappingDriverChain();
        $a->addDriver(new \Doctrine\ORM\Mapping\Driver\AnnotationDriver($this->get('annotation_reader'), array(0 => ($this->targetDirs[3].'\\src\\Mooc\\MoocBundle\\Entity'))), 'Mooc\\MoocBundle\\Entity');

        $b = new \Doctrine\ORM\Configuration();
        $b->setEntityNamespaces(array('MoocMoocBundle' => 'Mooc\\MoocBundle\\Entity'));
        $b->setMetadataCacheImpl($this->get('doctrine_cache.providers.doctrine.orm.default_metadata_cache'));
        $b->setQueryCacheImpl($this->get('doctrine_cache.providers.doctrine.orm.default_query_cache'));
        $b->setResultCacheImpl($this->get('doctrine_cache.providers.doctrine.orm.default_result_cache'));
        $b->setMetadataDriverImpl($a);
        $b->setProxyDir((__DIR__.'/doctrine/orm/Proxies'));
        $b->setProxyNamespace('Proxies');
        $b->setAutoGenerateProxyClasses(true);
        $b->setClassMetadataFactoryName('Doctrine\\ORM\\Mapping\\ClassMetadataFactory');
        $b->setDefaultRepositoryClassName('Doctrine\\ORM\\EntityRepository');
        $b->setNamingStrategy(new \Doctrine\ORM\Mapping\DefaultNamingStrategy());
        $b->setQuoteStrategy(new \Doctrine\ORM\Mapping\DefaultQuoteStrategy());
        $b->setEntityListenerResolver($this->get('doctrine.orm.default_entity_listener_resolver'));

        $this->services['doctrine.orm.default_entity_manager'] = $instance = \Doctrine\ORM\EntityManager::create($this->get('doctrine.dbal.default_connection'), $b);

        $this->get('doctrine.orm.default_manager_configurator')->configure($instance);

        return $instance;
    }

    /**
     * Gets the 'doctrine.orm.default_manager_configurator' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Doctrine\Bundle\DoctrineBundle\ManagerConfigurator A Doctrine\Bundle\DoctrineBundle\ManagerConfigurator instance.
     */
    protected function getDoctrine_Orm_DefaultManagerConfiguratorService()
    {
        return $this->services['doctrine.orm.default_manager_configurator'] = new \Doctrine\Bundle\DoctrineBundle\ManagerConfigurator(array(), array());
    }

    /**
     * Gets the 'doctrine.orm.validator.unique' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Symfony\Bridge\Doctrine\Validator\Constraints\UniqueEntityValidator A Symfony\Bridge\Doctrine\Validator\Constraints\UniqueEntityValidator instance.
     */
    protected function getDoctrine_Orm_Validator_UniqueService()
    {
        return $this->services['doctrine.orm.validator.unique'] = new \Symfony\Bridge\Doctrine\Validator\Constraints\UniqueEntityValidator($this->get('doctrine'));
    }

    /**
     * Gets the 'doctrine.orm.validator_initializer' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Symfony\Bridge\Doctrine\Validator\DoctrineInitializer A Symfony\Bridge\Doctrine\Validator\DoctrineInitializer instance.
     */
    protected function getDoctrine_Orm_ValidatorInitializerService()
    {
        return $this->services['doctrine.orm.validator_initializer'] = new \Symfony\Bridge\Doctrine\Validator\DoctrineInitializer($this->get('doctrine'));
    }

    /**
     * Gets the 'doctrine_cache.providers.doctrine.orm.default_metadata_cache' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Doctrine\Common\Cache\ArrayCache A Doctrine\Common\Cache\ArrayCache instance.
     */
    protected function getDoctrineCache_Providers_Doctrine_Orm_DefaultMetadataCacheService()
    {
        $this->services['doctrine_cache.providers.doctrine.orm.default_metadata_cache'] = $instance = new \Doctrine\Common\Cache\ArrayCache();

        $instance->setNamespace('sf2orm_default_3367d5f0454021691b579520967c2ec2922f2b974c667119c40ddabad3495f57');

        return $instance;
    }

    /**
     * Gets the 'doctrine_cache.providers.doctrine.orm.default_query_cache' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Doctrine\Common\Cache\ArrayCache A Doctrine\Common\Cache\ArrayCache instance.
     */
    protected function getDoctrineCache_Providers_Doctrine_Orm_DefaultQueryCacheService()
    {
        $this->services['doctrine_cache.providers.doctrine.orm.default_query_cache'] = $instance = new \Doctrine\Common\Cache\ArrayCache();

        $instance->setNamespace('sf2orm_default_3367d5f0454021691b579520967c2ec2922f2b974c667119c40ddabad3495f57');

        return $instance;
    }

    /**
     * Gets the 'doctrine_cache.providers.doctrine.orm.default_result_cache' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Doctrine\Common\Cache\ArrayCache A Doctrine\Common\Cache\ArrayCache instance.
     */
    protected function getDoctrineCache_Providers_Doctrine_Orm_DefaultResultCacheService()
    {
        $this->services['doctrine_cache.providers.doctrine.orm.default_result_cache'] = $instance = new \Doctrine\Common\Cache\ArrayCache();

        $instance->setNamespace('sf2orm_default_3367d5f0454021691b579520967c2ec2922f2b974c667119c40ddabad3495f57');

        return $instance;
    }

    /**
     * Gets the 'easyadmin.configurator' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \JavierEguiluz\Bundle\EasyAdminBundle\Configuration\Configurator A JavierEguiluz\Bundle\EasyAdminBundle\Configuration\Configurator instance.
     */
    protected function getEasyadmin_ConfiguratorService()
    {
        return $this->services['easyadmin.configurator'] = new \JavierEguiluz\Bundle\EasyAdminBundle\Configuration\Configurator(array('design' => array('brand_color' => '#3C8DBC', 'menu' => array(0 => array('entity' => 'Formateur', 'icon' => 'fa-group', 'children' => array(), 'default' => false, 'target' => false, 'menu_index' => 0, 'submenu_index' => -1, 'type' => 'entity', 'label' => 'Formateurs', 'params' => array()), 1 => array('entity' => 'Cours', 'icon' => 'fa-book', 'children' => array(), 'default' => false, 'target' => false, 'menu_index' => 1, 'submenu_index' => -1, 'type' => 'entity', 'label' => 'Cours', 'params' => array()), 2 => array('label' => 'Frontend', 'url' => 'http://localhost/Mooc_web/web/app_dev.php/', 'icon' => 'fa-home', 'children' => array(), 'default' => false, 'target' => false, 'menu_index' => 2, 'submenu_index' => -1, 'type' => 'link')), 'theme' => 'default', 'color_scheme' => 'dark', 'form_theme' => array(0 => '@EasyAdmin/form/bootstrap_3_horizontal_layout.html.twig'), 'assets' => array('css' => array(), 'js' => array(), 'favicon' => array('path' => 'favicon.ico', 'mime_type' => 'image/x-icon')), 'templates' => array('layout' => '@EasyAdmin/default/layout.html.twig', 'menu' => '@EasyAdmin/default/menu.html.twig', 'edit' => '@EasyAdmin/default/edit.html.twig', 'list' => '@EasyAdmin/default/list.html.twig', 'new' => '@EasyAdmin/default/new.html.twig', 'show' => '@EasyAdmin/default/show.html.twig', 'exception' => '@EasyAdmin/default/exception.html.twig', 'flash_messages' => '@EasyAdmin/default/flash_messages.html.twig', 'paginator' => '@EasyAdmin/default/paginator.html.twig', 'field_array' => '@EasyAdmin/default/field_array.html.twig', 'field_association' => '@EasyAdmin/default/field_association.html.twig', 'field_bigint' => '@EasyAdmin/default/field_bigint.html.twig', 'field_boolean' => '@EasyAdmin/default/field_boolean.html.twig', 'field_date' => '@EasyAdmin/default/field_date.html.twig', 'field_datetime' => '@EasyAdmin/default/field_datetime.html.twig', 'field_datetimetz' => '@EasyAdmin/default/field_datetimetz.html.twig', 'field_decimal' => '@EasyAdmin/default/field_decimal.html.twig', 'field_email' => '@EasyAdmin/default/field_email.html.twig', 'field_float' => '@EasyAdmin/default/field_float.html.twig', 'field_guid' => '@EasyAdmin/default/field_guid.html.twig', 'field_id' => '@EasyAdmin/default/field_id.html.twig', 'field_image' => '@EasyAdmin/default/field_image.html.twig', 'field_json_array' => '@EasyAdmin/default/field_json_array.html.twig', 'field_integer' => '@EasyAdmin/default/field_integer.html.twig', 'field_object' => '@EasyAdmin/default/field_object.html.twig', 'field_raw' => '@EasyAdmin/default/field_raw.html.twig', 'field_simple_array' => '@EasyAdmin/default/field_simple_array.html.twig', 'field_smallint' => '@EasyAdmin/default/field_smallint.html.twig', 'field_string' => '@EasyAdmin/default/field_string.html.twig', 'field_tel' => '@EasyAdmin/default/field_tel.html.twig', 'field_text' => '@EasyAdmin/default/field_text.html.twig', 'field_time' => '@EasyAdmin/default/field_time.html.twig', 'field_toggle' => '@EasyAdmin/default/field_toggle.html.twig', 'field_url' => '@EasyAdmin/default/field_url.html.twig', 'label_empty' => '@EasyAdmin/default/label_empty.html.twig', 'label_inaccessible' => '@EasyAdmin/default/label_inaccessible.html.twig', 'label_null' => '@EasyAdmin/default/label_null.html.twig', 'label_undefined' => '@EasyAdmin/default/label_undefined.html.twig')), 'site_name' => 'MOO<i><font color="grey">Comité</font></i>', 'entities' => array('Formateur' => array('class' => 'Mooc\\MoocBundle\\Entity\\Formateur', 'label' => 'Formateurs', 'list' => array('title' => 'Liste des formateurs', 'fields' => array('cin' => array('css_class' => '', 'format' => NULL, 'help' => NULL, 'label' => NULL, 'type' => 'string', 'fieldType' => 'text', 'dataType' => 'string', 'virtual' => false, 'sortable' => true, 'template' => '@EasyAdmin/default/field_string.html.twig', 'type_options' => array(), 'fieldName' => 'cin', 'scale' => 0, 'length' => 8, 'unique' => false, 'nullable' => false, 'precision' => 0, 'columnName' => 'cin', 'id' => true, 'property' => 'cin'), 'nom' => array('css_class' => '', 'format' => NULL, 'help' => NULL, 'label' => NULL, 'type' => 'string', 'fieldType' => 'text', 'dataType' => 'string', 'virtual' => false, 'sortable' => true, 'template' => '@EasyAdmin/default/field_string.html.twig', 'type_options' => array(), 'fieldName' => 'nom', 'scale' => 0, 'length' => 45, 'unique' => false, 'nullable' => false, 'precision' => 0, 'columnName' => 'nom', 'property' => 'nom'), 'prenom' => array('css_class' => '', 'format' => NULL, 'help' => NULL, 'label' => NULL, 'type' => 'string', 'fieldType' => 'text', 'dataType' => 'string', 'virtual' => false, 'sortable' => true, 'template' => '@EasyAdmin/default/field_string.html.twig', 'type_options' => array(), 'fieldName' => 'prenom', 'scale' => 0, 'length' => 45, 'unique' => false, 'nullable' => false, 'precision' => 0, 'columnName' => 'prenom', 'property' => 'prenom'), 'email' => array('css_class' => '', 'format' => NULL, 'help' => NULL, 'label' => NULL, 'type' => 'string', 'fieldType' => 'text', 'dataType' => 'string', 'virtual' => false, 'sortable' => true, 'template' => '@EasyAdmin/default/field_string.html.twig', 'type_options' => array(), 'fieldName' => 'email', 'scale' => 0, 'length' => 45, 'unique' => false, 'nullable' => false, 'precision' => 0, 'columnName' => 'email', 'property' => 'email'), 'avatar' => array('css_class' => '', 'format' => NULL, 'help' => NULL, 'label' => 'Photo', 'type' => 'image', 'fieldType' => 'text', 'dataType' => 'image', 'virtual' => false, 'sortable' => true, 'template' => '@EasyAdmin/default/field_image.html.twig', 'type_options' => array(), 'fieldName' => 'avatar', 'scale' => 0, 'length' => NULL, 'unique' => false, 'nullable' => true, 'precision' => 0, 'columnName' => 'avatar', 'property' => 'avatar', 'base_path' => 'http://localhost/Mooc_web/web/img/avatar/'), 'cv' => array('css_class' => '', 'format' => NULL, 'help' => NULL, 'label' => 'CV', 'type' => 'blob', 'fieldType' => 'textarea', 'dataType' => 'blob', 'virtual' => false, 'sortable' => true, 'template' => 'easy_admin/Formateur/cv.html.twig', 'type_options' => array(), 'fieldName' => 'cv', 'scale' => 0, 'length' => NULL, 'unique' => false, 'nullable' => true, 'precision' => 0, 'columnName' => 'cv', 'property' => 'cv', 'base_path' => '/file/cv'), 'etat' => array('css_class' => '', 'format' => NULL, 'help' => NULL, 'label' => 'Valide', 'type' => 'toggle', 'fieldType' => 'integer', 'dataType' => 'toggle', 'virtual' => false, 'sortable' => true, 'template' => '@EasyAdmin/default/field_toggle.html.twig', 'type_options' => array(), 'fieldName' => 'etat', 'scale' => 0, 'length' => NULL, 'unique' => false, 'nullable' => true, 'precision' => 0, 'columnName' => 'etat', 'property' => 'etat')), 'actions' => array('show' => array('name' => 'show', 'type' => 'method', 'label' => '', 'css_class' => ' action-show', 'icon' => 'search'), 'delete' => array('name' => 'delete', 'type' => 'method', 'label' => '', 'css_class' => 'text-danger action-delete', 'icon' => 'trash'), 'edit' => array('name' => 'edit', 'type' => 'method', 'label' => '', 'css_class' => 'text-primary action-edit', 'icon' => 'pencil', 'class' => ''), 'new' => array('name' => 'new', 'type' => 'method', 'label' => 'action.new', 'css_class' => 'btn btn-primary action-new', 'icon' => NULL), 'search' => array('name' => 'search', 'type' => 'method', 'label' => 'action.search', 'css_class' => ' action-search', 'icon' => NULL))), 'show' => array('fields' => array('cin' => array('css_class' => '', 'format' => NULL, 'help' => NULL, 'label' => NULL, 'type' => 'string', 'fieldType' => 'text', 'dataType' => 'string', 'virtual' => false, 'sortable' => true, 'template' => '@EasyAdmin/default/field_string.html.twig', 'type_options' => array(), 'fieldName' => 'cin', 'scale' => 0, 'length' => 8, 'unique' => false, 'nullable' => false, 'precision' => 0, 'columnName' => 'cin', 'id' => true, 'property' => 'cin'), 'nom' => array('css_class' => '', 'format' => NULL, 'help' => NULL, 'label' => NULL, 'type' => 'string', 'fieldType' => 'text', 'dataType' => 'string', 'virtual' => false, 'sortable' => true, 'template' => '@EasyAdmin/default/field_string.html.twig', 'type_options' => array(), 'fieldName' => 'nom', 'scale' => 0, 'length' => 45, 'unique' => false, 'nullable' => false, 'precision' => 0, 'columnName' => 'nom', 'property' => 'nom'), 'prenom' => array('css_class' => '', 'format' => NULL, 'help' => NULL, 'label' => NULL, 'type' => 'string', 'fieldType' => 'text', 'dataType' => 'string', 'virtual' => false, 'sortable' => true, 'template' => '@EasyAdmin/default/field_string.html.twig', 'type_options' => array(), 'fieldName' => 'prenom', 'scale' => 0, 'length' => 45, 'unique' => false, 'nullable' => false, 'precision' => 0, 'columnName' => 'prenom', 'property' => 'prenom'), 'email' => array('css_class' => '', 'format' => NULL, 'help' => NULL, 'label' => NULL, 'type' => 'string', 'fieldType' => 'text', 'dataType' => 'string', 'virtual' => false, 'sortable' => true, 'template' => '@EasyAdmin/default/field_string.html.twig', 'type_options' => array(), 'fieldName' => 'email', 'scale' => 0, 'length' => 45, 'unique' => false, 'nullable' => false, 'precision' => 0, 'columnName' => 'email', 'property' => 'email'), 'etat' => array('css_class' => '', 'format' => NULL, 'help' => NULL, 'label' => NULL, 'type' => 'integer', 'fieldType' => 'integer', 'dataType' => 'integer', 'virtual' => false, 'sortable' => true, 'template' => '@EasyAdmin/default/field_integer.html.twig', 'type_options' => array(), 'fieldName' => 'etat', 'scale' => 0, 'length' => NULL, 'unique' => false, 'nullable' => true, 'precision' => 0, 'columnName' => 'etat', 'property' => 'etat'), 'avatar' => array('css_class' => '', 'format' => NULL, 'help' => NULL, 'label' => NULL, 'type' => 'string', 'fieldType' => 'text', 'dataType' => 'string', 'virtual' => false, 'sortable' => true, 'template' => '@EasyAdmin/default/field_string.html.twig', 'type_options' => array(), 'fieldName' => 'avatar', 'scale' => 0, 'length' => NULL, 'unique' => false, 'nullable' => true, 'precision' => 0, 'columnName' => 'avatar', 'property' => 'avatar'), 'cv' => array('css_class' => '', 'format' => NULL, 'help' => NULL, 'label' => NULL, 'type' => 'blob', 'fieldType' => 'textarea', 'dataType' => 'blob', 'virtual' => false, 'sortable' => true, 'template' => '@EasyAdmin/default/label_undefined.html.twig', 'type_options' => array(), 'fieldName' => 'cv', 'scale' => 0, 'length' => NULL, 'unique' => false, 'nullable' => true, 'precision' => 0, 'columnName' => 'cv', 'property' => 'cv'), 'login' => array('css_class' => '', 'format' => NULL, 'help' => NULL, 'label' => NULL, 'type' => 'string', 'fieldType' => 'text', 'dataType' => 'string', 'virtual' => false, 'sortable' => true, 'template' => '@EasyAdmin/default/field_string.html.twig', 'type_options' => array(), 'fieldName' => 'login', 'scale' => 0, 'length' => 45, 'unique' => false, 'nullable' => false, 'precision' => 0, 'columnName' => 'login', 'property' => 'login'), 'password' => array('css_class' => '', 'format' => NULL, 'help' => NULL, 'label' => NULL, 'type' => 'string', 'fieldType' => 'text', 'dataType' => 'string', 'virtual' => false, 'sortable' => true, 'template' => '@EasyAdmin/default/field_string.html.twig', 'type_options' => array(), 'fieldName' => 'password', 'scale' => 0, 'length' => 45, 'unique' => false, 'nullable' => false, 'precision' => 0, 'columnName' => 'password', 'property' => 'password')), 'actions' => array('edit' => array('name' => 'edit', 'type' => 'method', 'label' => 'action.edit', 'css_class' => 'btn btn-primary action-edit', 'icon' => 'edit'), 'delete' => array('name' => 'delete', 'type' => 'method', 'label' => 'action.delete', 'css_class' => 'btn btn-default action-delete', 'icon' => 'trash-o'), 'list' => array('name' => 'list', 'type' => 'method', 'label' => 'action.list', 'css_class' => 'btn btn-secondary action-list', 'icon' => NULL))), 'fields' => array(0 => array('property' => 'avatar', 'type' => 'image', 'label' => 'Photo', 'base_path' => 'http://localhost/Mooc_web/web/img/avatar/'), 1 => 'nom', 2 => 'prenom', 3 => 'email', 4 => array('property' => 'cv', 'label' => 'CV', 'template' => 'cv.html.twig', 'base_path' => '/file/cv'), 5 => array('property' => 'etat', 'type' => 'toggle', 'label' => 'Valide')), 'name' => 'Formateur', 'edit' => array('fields' => array('nom' => array('css_class' => '', 'format' => NULL, 'help' => NULL, 'label' => NULL, 'type' => 'string', 'fieldType' => 'text', 'dataType' => 'string', 'virtual' => false, 'sortable' => true, 'template' => NULL, 'type_options' => array(), 'fieldName' => 'nom', 'scale' => 0, 'length' => 45, 'unique' => false, 'nullable' => false, 'precision' => 0, 'columnName' => 'nom', 'property' => 'nom'), 'prenom' => array('css_class' => '', 'format' => NULL, 'help' => NULL, 'label' => NULL, 'type' => 'string', 'fieldType' => 'text', 'dataType' => 'string', 'virtual' => false, 'sortable' => true, 'template' => NULL, 'type_options' => array(), 'fieldName' => 'prenom', 'scale' => 0, 'length' => 45, 'unique' => false, 'nullable' => false, 'precision' => 0, 'columnName' => 'prenom', 'property' => 'prenom'), 'email' => array('css_class' => '', 'format' => NULL, 'help' => NULL, 'label' => NULL, 'type' => 'string', 'fieldType' => 'text', 'dataType' => 'string', 'virtual' => false, 'sortable' => true, 'template' => NULL, 'type_options' => array(), 'fieldName' => 'email', 'scale' => 0, 'length' => 45, 'unique' => false, 'nullable' => false, 'precision' => 0, 'columnName' => 'email', 'property' => 'email'), 'etat' => array('css_class' => '', 'format' => NULL, 'help' => NULL, 'label' => NULL, 'type' => 'integer', 'fieldType' => 'integer', 'dataType' => 'integer', 'virtual' => false, 'sortable' => true, 'template' => NULL, 'type_options' => array(), 'fieldName' => 'etat', 'scale' => 0, 'length' => NULL, 'unique' => false, 'nullable' => true, 'precision' => 0, 'columnName' => 'etat', 'property' => 'etat'), 'avatar' => array('css_class' => '', 'format' => NULL, 'help' => NULL, 'label' => NULL, 'type' => 'string', 'fieldType' => 'text', 'dataType' => 'string', 'virtual' => false, 'sortable' => true, 'template' => NULL, 'type_options' => array(), 'fieldName' => 'avatar', 'scale' => 0, 'length' => NULL, 'unique' => false, 'nullable' => true, 'precision' => 0, 'columnName' => 'avatar', 'property' => 'avatar'), 'login' => array('css_class' => '', 'format' => NULL, 'help' => NULL, 'label' => NULL, 'type' => 'string', 'fieldType' => 'text', 'dataType' => 'string', 'virtual' => false, 'sortable' => true, 'template' => NULL, 'type_options' => array(), 'fieldName' => 'login', 'scale' => 0, 'length' => 45, 'unique' => false, 'nullable' => false, 'precision' => 0, 'columnName' => 'login', 'property' => 'login'), 'password' => array('css_class' => '', 'format' => NULL, 'help' => NULL, 'label' => NULL, 'type' => 'string', 'fieldType' => 'text', 'dataType' => 'string', 'virtual' => false, 'sortable' => true, 'template' => NULL, 'type_options' => array(), 'fieldName' => 'password', 'scale' => 0, 'length' => 45, 'unique' => false, 'nullable' => false, 'precision' => 0, 'columnName' => 'password', 'property' => 'password')), 'form_options' => array(), 'actions' => array('delete' => array('name' => 'delete', 'type' => 'method', 'label' => 'action.delete', 'css_class' => 'btn btn-default action-delete', 'icon' => 'trash-o'), 'list' => array('name' => 'list', 'type' => 'method', 'label' => 'action.list', 'css_class' => 'btn btn-secondary action-list', 'icon' => NULL))), 'new' => array('fields' => array('nom' => array('css_class' => '', 'format' => NULL, 'help' => NULL, 'label' => NULL, 'type' => 'string', 'fieldType' => 'text', 'dataType' => 'string', 'virtual' => false, 'sortable' => true, 'template' => NULL, 'type_options' => array(), 'fieldName' => 'nom', 'scale' => 0, 'length' => 45, 'unique' => false, 'nullable' => false, 'precision' => 0, 'columnName' => 'nom', 'property' => 'nom'), 'prenom' => array('css_class' => '', 'format' => NULL, 'help' => NULL, 'label' => NULL, 'type' => 'string', 'fieldType' => 'text', 'dataType' => 'string', 'virtual' => false, 'sortable' => true, 'template' => NULL, 'type_options' => array(), 'fieldName' => 'prenom', 'scale' => 0, 'length' => 45, 'unique' => false, 'nullable' => false, 'precision' => 0, 'columnName' => 'prenom', 'property' => 'prenom'), 'email' => array('css_class' => '', 'format' => NULL, 'help' => NULL, 'label' => NULL, 'type' => 'string', 'fieldType' => 'text', 'dataType' => 'string', 'virtual' => false, 'sortable' => true, 'template' => NULL, 'type_options' => array(), 'fieldName' => 'email', 'scale' => 0, 'length' => 45, 'unique' => false, 'nullable' => false, 'precision' => 0, 'columnName' => 'email', 'property' => 'email'), 'etat' => array('css_class' => '', 'format' => NULL, 'help' => NULL, 'label' => NULL, 'type' => 'integer', 'fieldType' => 'integer', 'dataType' => 'integer', 'virtual' => false, 'sortable' => true, 'template' => NULL, 'type_options' => array(), 'fieldName' => 'etat', 'scale' => 0, 'length' => NULL, 'unique' => false, 'nullable' => true, 'precision' => 0, 'columnName' => 'etat', 'property' => 'etat'), 'avatar' => array('css_class' => '', 'format' => NULL, 'help' => NULL, 'label' => NULL, 'type' => 'string', 'fieldType' => 'text', 'dataType' => 'string', 'virtual' => false, 'sortable' => true, 'template' => NULL, 'type_options' => array(), 'fieldName' => 'avatar', 'scale' => 0, 'length' => NULL, 'unique' => false, 'nullable' => true, 'precision' => 0, 'columnName' => 'avatar', 'property' => 'avatar'), 'login' => array('css_class' => '', 'format' => NULL, 'help' => NULL, 'label' => NULL, 'type' => 'string', 'fieldType' => 'text', 'dataType' => 'string', 'virtual' => false, 'sortable' => true, 'template' => NULL, 'type_options' => array(), 'fieldName' => 'login', 'scale' => 0, 'length' => 45, 'unique' => false, 'nullable' => false, 'precision' => 0, 'columnName' => 'login', 'property' => 'login'), 'password' => array('css_class' => '', 'format' => NULL, 'help' => NULL, 'label' => NULL, 'type' => 'string', 'fieldType' => 'text', 'dataType' => 'string', 'virtual' => false, 'sortable' => true, 'template' => NULL, 'type_options' => array(), 'fieldName' => 'password', 'scale' => 0, 'length' => 45, 'unique' => false, 'nullable' => false, 'precision' => 0, 'columnName' => 'password', 'property' => 'password')), 'form_options' => array(), 'actions' => array('list' => array('name' => 'list', 'type' => 'method', 'label' => 'action.list', 'css_class' => 'btn btn-secondary action-list', 'icon' => NULL))), 'search' => array('fields' => array('cin' => array('css_class' => '', 'format' => NULL, 'help' => NULL, 'label' => NULL, 'type' => 'string', 'fieldType' => 'text', 'dataType' => 'string', 'virtual' => false, 'sortable' => true, 'template' => NULL, 'type_options' => array(), 'fieldName' => 'cin', 'scale' => 0, 'length' => 8, 'unique' => false, 'nullable' => false, 'precision' => 0, 'columnName' => 'cin', 'id' => true, 'property' => 'cin'), 'nom' => array('css_class' => '', 'format' => NULL, 'help' => NULL, 'label' => NULL, 'type' => 'string', 'fieldType' => 'text', 'dataType' => 'string', 'virtual' => false, 'sortable' => true, 'template' => NULL, 'type_options' => array(), 'fieldName' => 'nom', 'scale' => 0, 'length' => 45, 'unique' => false, 'nullable' => false, 'precision' => 0, 'columnName' => 'nom', 'property' => 'nom'), 'prenom' => array('css_class' => '', 'format' => NULL, 'help' => NULL, 'label' => NULL, 'type' => 'string', 'fieldType' => 'text', 'dataType' => 'string', 'virtual' => false, 'sortable' => true, 'template' => NULL, 'type_options' => array(), 'fieldName' => 'prenom', 'scale' => 0, 'length' => 45, 'unique' => false, 'nullable' => false, 'precision' => 0, 'columnName' => 'prenom', 'property' => 'prenom'), 'email' => array('css_class' => '', 'format' => NULL, 'help' => NULL, 'label' => NULL, 'type' => 'string', 'fieldType' => 'text', 'dataType' => 'string', 'virtual' => false, 'sortable' => true, 'template' => NULL, 'type_options' => array(), 'fieldName' => 'email', 'scale' => 0, 'length' => 45, 'unique' => false, 'nullable' => false, 'precision' => 0, 'columnName' => 'email', 'property' => 'email'), 'etat' => array('css_class' => '', 'format' => NULL, 'help' => NULL, 'label' => NULL, 'type' => 'integer', 'fieldType' => 'integer', 'dataType' => 'integer', 'virtual' => false, 'sortable' => true, 'template' => NULL, 'type_options' => array(), 'fieldName' => 'etat', 'scale' => 0, 'length' => NULL, 'unique' => false, 'nullable' => true, 'precision' => 0, 'columnName' => 'etat', 'property' => 'etat'), 'avatar' => array('css_class' => '', 'format' => NULL, 'help' => NULL, 'label' => NULL, 'type' => 'string', 'fieldType' => 'text', 'dataType' => 'string', 'virtual' => false, 'sortable' => true, 'template' => NULL, 'type_options' => array(), 'fieldName' => 'avatar', 'scale' => 0, 'length' => NULL, 'unique' => false, 'nullable' => true, 'precision' => 0, 'columnName' => 'avatar', 'property' => 'avatar'), 'login' => array('css_class' => '', 'format' => NULL, 'help' => NULL, 'label' => NULL, 'type' => 'string', 'fieldType' => 'text', 'dataType' => 'string', 'virtual' => false, 'sortable' => true, 'template' => NULL, 'type_options' => array(), 'fieldName' => 'login', 'scale' => 0, 'length' => 45, 'unique' => false, 'nullable' => false, 'precision' => 0, 'columnName' => 'login', 'property' => 'login'))), 'disabled_actions' => array(), 'primary_key_field_name' => 'cin', 'properties' => array('cin' => array('css_class' => '', 'format' => NULL, 'help' => NULL, 'label' => NULL, 'type' => 'string', 'fieldType' => 'text', 'dataType' => 'string', 'virtual' => false, 'sortable' => true, 'template' => NULL, 'type_options' => array(), 'fieldName' => 'cin', 'scale' => 0, 'length' => 8, 'unique' => false, 'nullable' => false, 'precision' => 0, 'columnName' => 'cin', 'id' => true, 'property' => 'cin'), 'nom' => array('css_class' => '', 'format' => NULL, 'help' => NULL, 'label' => NULL, 'type' => 'string', 'fieldType' => 'text', 'dataType' => 'string', 'virtual' => false, 'sortable' => true, 'template' => NULL, 'type_options' => array(), 'fieldName' => 'nom', 'scale' => 0, 'length' => 45, 'unique' => false, 'nullable' => false, 'precision' => 0, 'columnName' => 'nom', 'property' => 'nom'), 'prenom' => array('css_class' => '', 'format' => NULL, 'help' => NULL, 'label' => NULL, 'type' => 'string', 'fieldType' => 'text', 'dataType' => 'string', 'virtual' => false, 'sortable' => true, 'template' => NULL, 'type_options' => array(), 'fieldName' => 'prenom', 'scale' => 0, 'length' => 45, 'unique' => false, 'nullable' => false, 'precision' => 0, 'columnName' => 'prenom', 'property' => 'prenom'), 'email' => array('css_class' => '', 'format' => NULL, 'help' => NULL, 'label' => NULL, 'type' => 'string', 'fieldType' => 'text', 'dataType' => 'string', 'virtual' => false, 'sortable' => true, 'template' => NULL, 'type_options' => array(), 'fieldName' => 'email', 'scale' => 0, 'length' => 45, 'unique' => false, 'nullable' => false, 'precision' => 0, 'columnName' => 'email', 'property' => 'email'), 'etat' => array('css_class' => '', 'format' => NULL, 'help' => NULL, 'label' => NULL, 'type' => 'integer', 'fieldType' => 'integer', 'dataType' => 'integer', 'virtual' => false, 'sortable' => true, 'template' => NULL, 'type_options' => array(), 'fieldName' => 'etat', 'scale' => 0, 'length' => NULL, 'unique' => false, 'nullable' => true, 'precision' => 0, 'columnName' => 'etat', 'property' => 'etat'), 'avatar' => array('css_class' => '', 'format' => NULL, 'help' => NULL, 'label' => NULL, 'type' => 'string', 'fieldType' => 'text', 'dataType' => 'string', 'virtual' => false, 'sortable' => true, 'template' => NULL, 'type_options' => array(), 'fieldName' => 'avatar', 'scale' => 0, 'length' => NULL, 'unique' => false, 'nullable' => true, 'precision' => 0, 'columnName' => 'avatar', 'property' => 'avatar'), 'cv' => array('css_class' => '', 'format' => NULL, 'help' => NULL, 'label' => NULL, 'type' => 'blob', 'fieldType' => 'textarea', 'dataType' => 'blob', 'virtual' => false, 'sortable' => true, 'template' => NULL, 'type_options' => array(), 'fieldName' => 'cv', 'scale' => 0, 'length' => NULL, 'unique' => false, 'nullable' => true, 'precision' => 0, 'columnName' => 'cv', 'property' => 'cv'), 'login' => array('css_class' => '', 'format' => NULL, 'help' => NULL, 'label' => NULL, 'type' => 'string', 'fieldType' => 'text', 'dataType' => 'string', 'virtual' => false, 'sortable' => true, 'template' => NULL, 'type_options' => array(), 'fieldName' => 'login', 'scale' => 0, 'length' => 45, 'unique' => false, 'nullable' => false, 'precision' => 0, 'columnName' => 'login', 'property' => 'login'), 'password' => array('css_class' => '', 'format' => NULL, 'help' => NULL, 'label' => NULL, 'type' => 'string', 'fieldType' => 'text', 'dataType' => 'string', 'virtual' => false, 'sortable' => true, 'template' => NULL, 'type_options' => array(), 'fieldName' => 'password', 'scale' => 0, 'length' => 45, 'unique' => false, 'nullable' => false, 'precision' => 0, 'columnName' => 'password', 'property' => 'password')), 'templates' => array('layout' => '@EasyAdmin/default/layout.html.twig', 'menu' => '@EasyAdmin/default/menu.html.twig', 'edit' => '@EasyAdmin/default/edit.html.twig', 'list' => '@EasyAdmin/default/list.html.twig', 'new' => '@EasyAdmin/default/new.html.twig', 'show' => '@EasyAdmin/default/show.html.twig', 'exception' => '@EasyAdmin/default/exception.html.twig', 'flash_messages' => '@EasyAdmin/default/flash_messages.html.twig', 'paginator' => '@EasyAdmin/default/paginator.html.twig', 'field_array' => '@EasyAdmin/default/field_array.html.twig', 'field_association' => '@EasyAdmin/default/field_association.html.twig', 'field_bigint' => '@EasyAdmin/default/field_bigint.html.twig', 'field_boolean' => '@EasyAdmin/default/field_boolean.html.twig', 'field_date' => '@EasyAdmin/default/field_date.html.twig', 'field_datetime' => '@EasyAdmin/default/field_datetime.html.twig', 'field_datetimetz' => '@EasyAdmin/default/field_datetimetz.html.twig', 'field_decimal' => '@EasyAdmin/default/field_decimal.html.twig', 'field_email' => '@EasyAdmin/default/field_email.html.twig', 'field_float' => '@EasyAdmin/default/field_float.html.twig', 'field_guid' => '@EasyAdmin/default/field_guid.html.twig', 'field_id' => '@EasyAdmin/default/field_id.html.twig', 'field_image' => '@EasyAdmin/default/field_image.html.twig', 'field_json_array' => '@EasyAdmin/default/field_json_array.html.twig', 'field_integer' => '@EasyAdmin/default/field_integer.html.twig', 'field_object' => '@EasyAdmin/default/field_object.html.twig', 'field_raw' => '@EasyAdmin/default/field_raw.html.twig', 'field_simple_array' => '@EasyAdmin/default/field_simple_array.html.twig', 'field_smallint' => '@EasyAdmin/default/field_smallint.html.twig', 'field_string' => '@EasyAdmin/default/field_string.html.twig', 'field_tel' => '@EasyAdmin/default/field_tel.html.twig', 'field_text' => '@EasyAdmin/default/field_text.html.twig', 'field_time' => '@EasyAdmin/default/field_time.html.twig', 'field_toggle' => '@EasyAdmin/default/field_toggle.html.twig', 'field_url' => '@EasyAdmin/default/field_url.html.twig', 'label_empty' => '@EasyAdmin/default/label_empty.html.twig', 'label_inaccessible' => '@EasyAdmin/default/label_inaccessible.html.twig', 'label_null' => '@EasyAdmin/default/label_null.html.twig', 'label_undefined' => '@EasyAdmin/default/label_undefined.html.twig')), 'Cours' => array('class' => 'Mooc\\MoocBundle\\Entity\\Cours', 'list' => array('title' => 'Liste des cours à valider', 'fields' => array('nomCours' => array('css_class' => '', 'format' => NULL, 'help' => NULL, 'label' => NULL, 'type' => 'string', 'fieldType' => 'text', 'dataType' => 'string', 'virtual' => false, 'sortable' => true, 'template' => '@EasyAdmin/default/field_string.html.twig', 'type_options' => array(), 'fieldName' => 'nomCours', 'scale' => 0, 'length' => 255, 'unique' => false, 'nullable' => false, 'precision' => 0, 'columnName' => 'nom_cours', 'property' => 'nomCours'), 'description' => array('css_class' => '', 'format' => NULL, 'help' => NULL, 'label' => NULL, 'type' => 'string', 'fieldType' => 'text', 'dataType' => 'string', 'virtual' => false, 'sortable' => true, 'template' => '@EasyAdmin/default/field_string.html.twig', 'type_options' => array(), 'fieldName' => 'description', 'scale' => 0, 'length' => 255, 'unique' => false, 'nullable' => false, 'precision' => 0, 'columnName' => 'description', 'property' => 'description'), 'difficulte' => array('css_class' => '', 'format' => NULL, 'help' => NULL, 'label' => NULL, 'type' => 'string', 'fieldType' => 'text', 'dataType' => 'string', 'virtual' => false, 'sortable' => true, 'template' => '@EasyAdmin/default/field_string.html.twig', 'type_options' => array(), 'fieldName' => 'difficulte', 'scale' => 0, 'length' => 45, 'unique' => false, 'nullable' => false, 'precision' => 0, 'columnName' => 'difficulte', 'property' => 'difficulte'), 'objectif' => array('css_class' => '', 'format' => NULL, 'help' => NULL, 'label' => NULL, 'type' => 'string', 'fieldType' => 'text', 'dataType' => 'string', 'virtual' => false, 'sortable' => true, 'template' => '@EasyAdmin/default/field_string.html.twig', 'type_options' => array(), 'fieldName' => 'objectif', 'scale' => 0, 'length' => 255, 'unique' => false, 'nullable' => false, 'precision' => 0, 'columnName' => 'objectif', 'property' => 'objectif'), 'cinformateur' => array('css_class' => '', 'format' => NULL, 'help' => NULL, 'label' => 'Formateur', 'type' => 'association', 'fieldType' => 'entity', 'dataType' => 'association', 'virtual' => false, 'sortable' => true, 'template' => '@EasyAdmin/default/field_association.html.twig', 'type_options' => array(), 'fieldName' => 'cinformateur', 'joinColumns' => array(0 => array('name' => 'cinformateur', 'unique' => false, 'nullable' => true, 'onDelete' => NULL, 'columnDefinition' => NULL, 'referencedColumnName' => 'cin')), 'cascade' => array(), 'inversedBy' => NULL, 'targetEntity' => 'Mooc\\MoocBundle\\Entity\\Formateur', 'fetch' => 2, 'mappedBy' => NULL, 'isOwningSide' => true, 'sourceEntity' => 'Mooc\\MoocBundle\\Entity\\Cours', 'isCascadeRemove' => false, 'isCascadePersist' => false, 'isCascadeRefresh' => false, 'isCascadeMerge' => false, 'isCascadeDetach' => false, 'sourceToTargetKeyColumns' => array('cinformateur' => 'cin'), 'joinColumnFieldNames' => array('cinformateur' => 'cinformateur'), 'targetToSourceKeyColumns' => array('cin' => 'cinformateur'), 'orphanRemoval' => false, 'associationType' => 2, 'property' => 'cinformateur'), 'etat' => array('css_class' => '', 'format' => NULL, 'help' => NULL, 'label' => 'Etat', 'type' => 'toggle', 'fieldType' => 'integer', 'dataType' => 'toggle', 'virtual' => false, 'sortable' => true, 'template' => '@EasyAdmin/default/field_toggle.html.twig', 'type_options' => array(), 'fieldName' => 'etat', 'scale' => 0, 'length' => NULL, 'unique' => false, 'nullable' => true, 'precision' => 0, 'columnName' => 'etat', 'property' => 'etat')), 'actions' => array('show' => array('name' => 'show', 'type' => 'method', 'label' => '', 'css_class' => ' action-show', 'icon' => 'search'), 'delete' => array('name' => 'delete', 'type' => 'method', 'label' => '', 'css_class' => 'text-danger action-delete', 'icon' => 'trash'), 'edit' => array('name' => 'edit', 'type' => 'method', 'label' => '', 'css_class' => 'text-primary action-edit', 'icon' => 'pencil', 'class' => ''), 'new' => array('name' => 'new', 'type' => 'method', 'label' => 'action.new', 'css_class' => 'btn btn-primary action-new', 'icon' => NULL), 'search' => array('name' => 'search', 'type' => 'method', 'label' => 'action.search', 'css_class' => ' action-search', 'icon' => NULL))), 'form' => array('fields' => array(0 => 'nomCours', 1 => 'description', 2 => 'difficulte', 3 => 'objectif')), 'name' => 'Cours', 'label' => 'Cours', 'new' => array('fields' => array('nomCours' => array('css_class' => '', 'format' => NULL, 'help' => NULL, 'label' => NULL, 'type' => 'string', 'fieldType' => 'text', 'dataType' => 'string', 'virtual' => false, 'sortable' => true, 'template' => NULL, 'type_options' => array(), 'fieldName' => 'nomCours', 'scale' => 0, 'length' => 255, 'unique' => false, 'nullable' => false, 'precision' => 0, 'columnName' => 'nom_cours', 'property' => 'nomCours'), 'description' => array('css_class' => '', 'format' => NULL, 'help' => NULL, 'label' => NULL, 'type' => 'string', 'fieldType' => 'text', 'dataType' => 'string', 'virtual' => false, 'sortable' => true, 'template' => NULL, 'type_options' => array(), 'fieldName' => 'description', 'scale' => 0, 'length' => 255, 'unique' => false, 'nullable' => false, 'precision' => 0, 'columnName' => 'description', 'property' => 'description'), 'difficulte' => array('css_class' => '', 'format' => NULL, 'help' => NULL, 'label' => NULL, 'type' => 'string', 'fieldType' => 'text', 'dataType' => 'string', 'virtual' => false, 'sortable' => true, 'template' => NULL, 'type_options' => array(), 'fieldName' => 'difficulte', 'scale' => 0, 'length' => 45, 'unique' => false, 'nullable' => false, 'precision' => 0, 'columnName' => 'difficulte', 'property' => 'difficulte'), 'objectif' => array('css_class' => '', 'format' => NULL, 'help' => NULL, 'label' => NULL, 'type' => 'string', 'fieldType' => 'text', 'dataType' => 'string', 'virtual' => false, 'sortable' => true, 'template' => NULL, 'type_options' => array(), 'fieldName' => 'objectif', 'scale' => 0, 'length' => 255, 'unique' => false, 'nullable' => false, 'precision' => 0, 'columnName' => 'objectif', 'property' => 'objectif')), 'form_options' => array(), 'actions' => array('list' => array('name' => 'list', 'type' => 'method', 'label' => 'action.list', 'css_class' => 'btn btn-secondary action-list', 'icon' => NULL))), 'edit' => array('fields' => array('nomCours' => array('css_class' => '', 'format' => NULL, 'help' => NULL, 'label' => NULL, 'type' => 'string', 'fieldType' => 'text', 'dataType' => 'string', 'virtual' => false, 'sortable' => true, 'template' => NULL, 'type_options' => array(), 'fieldName' => 'nomCours', 'scale' => 0, 'length' => 255, 'unique' => false, 'nullable' => false, 'precision' => 0, 'columnName' => 'nom_cours', 'property' => 'nomCours'), 'description' => array('css_class' => '', 'format' => NULL, 'help' => NULL, 'label' => NULL, 'type' => 'string', 'fieldType' => 'text', 'dataType' => 'string', 'virtual' => false, 'sortable' => true, 'template' => NULL, 'type_options' => array(), 'fieldName' => 'description', 'scale' => 0, 'length' => 255, 'unique' => false, 'nullable' => false, 'precision' => 0, 'columnName' => 'description', 'property' => 'description'), 'difficulte' => array('css_class' => '', 'format' => NULL, 'help' => NULL, 'label' => NULL, 'type' => 'string', 'fieldType' => 'text', 'dataType' => 'string', 'virtual' => false, 'sortable' => true, 'template' => NULL, 'type_options' => array(), 'fieldName' => 'difficulte', 'scale' => 0, 'length' => 45, 'unique' => false, 'nullable' => false, 'precision' => 0, 'columnName' => 'difficulte', 'property' => 'difficulte'), 'objectif' => array('css_class' => '', 'format' => NULL, 'help' => NULL, 'label' => NULL, 'type' => 'string', 'fieldType' => 'text', 'dataType' => 'string', 'virtual' => false, 'sortable' => true, 'template' => NULL, 'type_options' => array(), 'fieldName' => 'objectif', 'scale' => 0, 'length' => 255, 'unique' => false, 'nullable' => false, 'precision' => 0, 'columnName' => 'objectif', 'property' => 'objectif')), 'form_options' => array(), 'actions' => array('delete' => array('name' => 'delete', 'type' => 'method', 'label' => 'action.delete', 'css_class' => 'btn btn-default action-delete', 'icon' => 'trash-o'), 'list' => array('name' => 'list', 'type' => 'method', 'label' => 'action.list', 'css_class' => 'btn btn-secondary action-list', 'icon' => NULL))), 'search' => array('fields' => array('idcours' => array('css_class' => '', 'format' => NULL, 'help' => NULL, 'label' => NULL, 'type' => 'integer', 'fieldType' => 'integer', 'dataType' => 'integer', 'virtual' => false, 'sortable' => true, 'template' => NULL, 'type_options' => array(), 'fieldName' => 'idcours', 'scale' => 0, 'length' => NULL, 'unique' => false, 'nullable' => false, 'precision' => 0, 'columnName' => 'idcours', 'id' => true, 'property' => 'idcours'), 'nomCours' => array('css_class' => '', 'format' => NULL, 'help' => NULL, 'label' => NULL, 'type' => 'string', 'fieldType' => 'text', 'dataType' => 'string', 'virtual' => false, 'sortable' => true, 'template' => NULL, 'type_options' => array(), 'fieldName' => 'nomCours', 'scale' => 0, 'length' => 255, 'unique' => false, 'nullable' => false, 'precision' => 0, 'columnName' => 'nom_cours', 'property' => 'nomCours'), 'description' => array('css_class' => '', 'format' => NULL, 'help' => NULL, 'label' => NULL, 'type' => 'string', 'fieldType' => 'text', 'dataType' => 'string', 'virtual' => false, 'sortable' => true, 'template' => NULL, 'type_options' => array(), 'fieldName' => 'description', 'scale' => 0, 'length' => 255, 'unique' => false, 'nullable' => false, 'precision' => 0, 'columnName' => 'description', 'property' => 'description'), 'difficulte' => array('css_class' => '', 'format' => NULL, 'help' => NULL, 'label' => NULL, 'type' => 'string', 'fieldType' => 'text', 'dataType' => 'string', 'virtual' => false, 'sortable' => true, 'template' => NULL, 'type_options' => array(), 'fieldName' => 'difficulte', 'scale' => 0, 'length' => 45, 'unique' => false, 'nullable' => false, 'precision' => 0, 'columnName' => 'difficulte', 'property' => 'difficulte'), 'objectif' => array('css_class' => '', 'format' => NULL, 'help' => NULL, 'label' => NULL, 'type' => 'string', 'fieldType' => 'text', 'dataType' => 'string', 'virtual' => false, 'sortable' => true, 'template' => NULL, 'type_options' => array(), 'fieldName' => 'objectif', 'scale' => 0, 'length' => 255, 'unique' => false, 'nullable' => false, 'precision' => 0, 'columnName' => 'objectif', 'property' => 'objectif'), 'video' => array('css_class' => '', 'format' => NULL, 'help' => NULL, 'label' => NULL, 'type' => 'string', 'fieldType' => 'text', 'dataType' => 'string', 'virtual' => false, 'sortable' => true, 'template' => NULL, 'type_options' => array(), 'fieldName' => 'video', 'scale' => 0, 'length' => 100, 'unique' => false, 'nullable' => true, 'precision' => 0, 'columnName' => 'video', 'property' => 'video'), 'etat' => array('css_class' => '', 'format' => NULL, 'help' => NULL, 'label' => NULL, 'type' => 'integer', 'fieldType' => 'integer', 'dataType' => 'integer', 'virtual' => false, 'sortable' => true, 'template' => NULL, 'type_options' => array(), 'fieldName' => 'etat', 'scale' => 0, 'length' => NULL, 'unique' => false, 'nullable' => true, 'precision' => 0, 'columnName' => 'etat', 'property' => 'etat'))), 'show' => array('fields' => array('idcours' => array('css_class' => '', 'format' => NULL, 'help' => NULL, 'label' => NULL, 'type' => 'integer', 'fieldType' => 'integer', 'dataType' => 'integer', 'virtual' => false, 'sortable' => true, 'template' => '@EasyAdmin/default/field_integer.html.twig', 'type_options' => array(), 'fieldName' => 'idcours', 'scale' => 0, 'length' => NULL, 'unique' => false, 'nullable' => false, 'precision' => 0, 'columnName' => 'idcours', 'id' => true, 'property' => 'idcours'), 'nomCours' => array('css_class' => '', 'format' => NULL, 'help' => NULL, 'label' => NULL, 'type' => 'string', 'fieldType' => 'text', 'dataType' => 'string', 'virtual' => false, 'sortable' => true, 'template' => '@EasyAdmin/default/field_string.html.twig', 'type_options' => array(), 'fieldName' => 'nomCours', 'scale' => 0, 'length' => 255, 'unique' => false, 'nullable' => false, 'precision' => 0, 'columnName' => 'nom_cours', 'property' => 'nomCours'), 'description' => array('css_class' => '', 'format' => NULL, 'help' => NULL, 'label' => NULL, 'type' => 'string', 'fieldType' => 'text', 'dataType' => 'string', 'virtual' => false, 'sortable' => true, 'template' => '@EasyAdmin/default/field_string.html.twig', 'type_options' => array(), 'fieldName' => 'description', 'scale' => 0, 'length' => 255, 'unique' => false, 'nullable' => false, 'precision' => 0, 'columnName' => 'description', 'property' => 'description'), 'difficulte' => array('css_class' => '', 'format' => NULL, 'help' => NULL, 'label' => NULL, 'type' => 'string', 'fieldType' => 'text', 'dataType' => 'string', 'virtual' => false, 'sortable' => true, 'template' => '@EasyAdmin/default/field_string.html.twig', 'type_options' => array(), 'fieldName' => 'difficulte', 'scale' => 0, 'length' => 45, 'unique' => false, 'nullable' => false, 'precision' => 0, 'columnName' => 'difficulte', 'property' => 'difficulte'), 'objectif' => array('css_class' => '', 'format' => NULL, 'help' => NULL, 'label' => NULL, 'type' => 'string', 'fieldType' => 'text', 'dataType' => 'string', 'virtual' => false, 'sortable' => true, 'template' => '@EasyAdmin/default/field_string.html.twig', 'type_options' => array(), 'fieldName' => 'objectif', 'scale' => 0, 'length' => 255, 'unique' => false, 'nullable' => false, 'precision' => 0, 'columnName' => 'objectif', 'property' => 'objectif'), 'video' => array('css_class' => '', 'format' => NULL, 'help' => NULL, 'label' => NULL, 'type' => 'string', 'fieldType' => 'text', 'dataType' => 'string', 'virtual' => false, 'sortable' => true, 'template' => '@EasyAdmin/default/field_string.html.twig', 'type_options' => array(), 'fieldName' => 'video', 'scale' => 0, 'length' => 100, 'unique' => false, 'nullable' => true, 'precision' => 0, 'columnName' => 'video', 'property' => 'video'), 'etat' => array('css_class' => '', 'format' => NULL, 'help' => NULL, 'label' => NULL, 'type' => 'integer', 'fieldType' => 'integer', 'dataType' => 'integer', 'virtual' => false, 'sortable' => true, 'template' => '@EasyAdmin/default/field_integer.html.twig', 'type_options' => array(), 'fieldName' => 'etat', 'scale' => 0, 'length' => NULL, 'unique' => false, 'nullable' => true, 'precision' => 0, 'columnName' => 'etat', 'property' => 'etat'), 'idquiz' => array('css_class' => '', 'format' => NULL, 'help' => NULL, 'label' => NULL, 'type' => 'association', 'fieldType' => 'entity', 'dataType' => 'association', 'virtual' => false, 'sortable' => true, 'template' => '@EasyAdmin/default/field_association.html.twig', 'type_options' => array(), 'fieldName' => 'idquiz', 'joinColumns' => array(0 => array('name' => 'idQuiz', 'unique' => false, 'nullable' => true, 'onDelete' => NULL, 'columnDefinition' => NULL, 'referencedColumnName' => 'id')), 'cascade' => array(), 'inversedBy' => NULL, 'targetEntity' => 'Mooc\\MoocBundle\\Entity\\Quiz', 'fetch' => 2, 'mappedBy' => NULL, 'isOwningSide' => true, 'sourceEntity' => 'Mooc\\MoocBundle\\Entity\\Cours', 'isCascadeRemove' => false, 'isCascadePersist' => false, 'isCascadeRefresh' => false, 'isCascadeMerge' => false, 'isCascadeDetach' => false, 'sourceToTargetKeyColumns' => array('idQuiz' => 'id'), 'joinColumnFieldNames' => array('idQuiz' => 'idQuiz'), 'targetToSourceKeyColumns' => array('id' => 'idQuiz'), 'orphanRemoval' => false, 'associationType' => 2, 'property' => 'idquiz'), 'cinformateur' => array('css_class' => '', 'format' => NULL, 'help' => NULL, 'label' => NULL, 'type' => 'association', 'fieldType' => 'entity', 'dataType' => 'association', 'virtual' => false, 'sortable' => true, 'template' => '@EasyAdmin/default/field_association.html.twig', 'type_options' => array(), 'fieldName' => 'cinformateur', 'joinColumns' => array(0 => array('name' => 'cinformateur', 'unique' => false, 'nullable' => true, 'onDelete' => NULL, 'columnDefinition' => NULL, 'referencedColumnName' => 'cin')), 'cascade' => array(), 'inversedBy' => NULL, 'targetEntity' => 'Mooc\\MoocBundle\\Entity\\Formateur', 'fetch' => 2, 'mappedBy' => NULL, 'isOwningSide' => true, 'sourceEntity' => 'Mooc\\MoocBundle\\Entity\\Cours', 'isCascadeRemove' => false, 'isCascadePersist' => false, 'isCascadeRefresh' => false, 'isCascadeMerge' => false, 'isCascadeDetach' => false, 'sourceToTargetKeyColumns' => array('cinformateur' => 'cin'), 'joinColumnFieldNames' => array('cinformateur' => 'cinformateur'), 'targetToSourceKeyColumns' => array('cin' => 'cinformateur'), 'orphanRemoval' => false, 'associationType' => 2, 'property' => 'cinformateur')), 'actions' => array('edit' => array('name' => 'edit', 'type' => 'method', 'label' => 'action.edit', 'css_class' => 'btn btn-primary action-edit', 'icon' => 'edit'), 'delete' => array('name' => 'delete', 'type' => 'method', 'label' => 'action.delete', 'css_class' => 'btn btn-default action-delete', 'icon' => 'trash-o'), 'list' => array('name' => 'list', 'type' => 'method', 'label' => 'action.list', 'css_class' => 'btn btn-secondary action-list', 'icon' => NULL))), 'disabled_actions' => array(), 'primary_key_field_name' => 'idcours', 'properties' => array('idcours' => array('css_class' => '', 'format' => NULL, 'help' => NULL, 'label' => NULL, 'type' => 'integer', 'fieldType' => 'integer', 'dataType' => 'integer', 'virtual' => false, 'sortable' => true, 'template' => NULL, 'type_options' => array(), 'fieldName' => 'idcours', 'scale' => 0, 'length' => NULL, 'unique' => false, 'nullable' => false, 'precision' => 0, 'columnName' => 'idcours', 'id' => true, 'property' => 'idcours'), 'nomCours' => array('css_class' => '', 'format' => NULL, 'help' => NULL, 'label' => NULL, 'type' => 'string', 'fieldType' => 'text', 'dataType' => 'string', 'virtual' => false, 'sortable' => true, 'template' => NULL, 'type_options' => array(), 'fieldName' => 'nomCours', 'scale' => 0, 'length' => 255, 'unique' => false, 'nullable' => false, 'precision' => 0, 'columnName' => 'nom_cours', 'property' => 'nomCours'), 'description' => array('css_class' => '', 'format' => NULL, 'help' => NULL, 'label' => NULL, 'type' => 'string', 'fieldType' => 'text', 'dataType' => 'string', 'virtual' => false, 'sortable' => true, 'template' => NULL, 'type_options' => array(), 'fieldName' => 'description', 'scale' => 0, 'length' => 255, 'unique' => false, 'nullable' => false, 'precision' => 0, 'columnName' => 'description', 'property' => 'description'), 'difficulte' => array('css_class' => '', 'format' => NULL, 'help' => NULL, 'label' => NULL, 'type' => 'string', 'fieldType' => 'text', 'dataType' => 'string', 'virtual' => false, 'sortable' => true, 'template' => NULL, 'type_options' => array(), 'fieldName' => 'difficulte', 'scale' => 0, 'length' => 45, 'unique' => false, 'nullable' => false, 'precision' => 0, 'columnName' => 'difficulte', 'property' => 'difficulte'), 'objectif' => array('css_class' => '', 'format' => NULL, 'help' => NULL, 'label' => NULL, 'type' => 'string', 'fieldType' => 'text', 'dataType' => 'string', 'virtual' => false, 'sortable' => true, 'template' => NULL, 'type_options' => array(), 'fieldName' => 'objectif', 'scale' => 0, 'length' => 255, 'unique' => false, 'nullable' => false, 'precision' => 0, 'columnName' => 'objectif', 'property' => 'objectif'), 'video' => array('css_class' => '', 'format' => NULL, 'help' => NULL, 'label' => NULL, 'type' => 'string', 'fieldType' => 'text', 'dataType' => 'string', 'virtual' => false, 'sortable' => true, 'template' => NULL, 'type_options' => array(), 'fieldName' => 'video', 'scale' => 0, 'length' => 100, 'unique' => false, 'nullable' => true, 'precision' => 0, 'columnName' => 'video', 'property' => 'video'), 'etat' => array('css_class' => '', 'format' => NULL, 'help' => NULL, 'label' => NULL, 'type' => 'integer', 'fieldType' => 'integer', 'dataType' => 'integer', 'virtual' => false, 'sortable' => true, 'template' => NULL, 'type_options' => array(), 'fieldName' => 'etat', 'scale' => 0, 'length' => NULL, 'unique' => false, 'nullable' => true, 'precision' => 0, 'columnName' => 'etat', 'property' => 'etat'), 'idquiz' => array('css_class' => '', 'format' => NULL, 'help' => NULL, 'label' => NULL, 'type' => 'association', 'fieldType' => 'entity', 'dataType' => 'association', 'virtual' => false, 'sortable' => true, 'template' => NULL, 'type_options' => array(), 'fieldName' => 'idquiz', 'joinColumns' => array(0 => array('name' => 'idQuiz', 'unique' => false, 'nullable' => true, 'onDelete' => NULL, 'columnDefinition' => NULL, 'referencedColumnName' => 'id')), 'cascade' => array(), 'inversedBy' => NULL, 'targetEntity' => 'Mooc\\MoocBundle\\Entity\\Quiz', 'fetch' => 2, 'mappedBy' => NULL, 'isOwningSide' => true, 'sourceEntity' => 'Mooc\\MoocBundle\\Entity\\Cours', 'isCascadeRemove' => false, 'isCascadePersist' => false, 'isCascadeRefresh' => false, 'isCascadeMerge' => false, 'isCascadeDetach' => false, 'sourceToTargetKeyColumns' => array('idQuiz' => 'id'), 'joinColumnFieldNames' => array('idQuiz' => 'idQuiz'), 'targetToSourceKeyColumns' => array('id' => 'idQuiz'), 'orphanRemoval' => false, 'associationType' => 2, 'property' => 'idquiz'), 'cinformateur' => array('css_class' => '', 'format' => NULL, 'help' => NULL, 'label' => NULL, 'type' => 'association', 'fieldType' => 'entity', 'dataType' => 'association', 'virtual' => false, 'sortable' => true, 'template' => NULL, 'type_options' => array(), 'fieldName' => 'cinformateur', 'joinColumns' => array(0 => array('name' => 'cinformateur', 'unique' => false, 'nullable' => true, 'onDelete' => NULL, 'columnDefinition' => NULL, 'referencedColumnName' => 'cin')), 'cascade' => array(), 'inversedBy' => NULL, 'targetEntity' => 'Mooc\\MoocBundle\\Entity\\Formateur', 'fetch' => 2, 'mappedBy' => NULL, 'isOwningSide' => true, 'sourceEntity' => 'Mooc\\MoocBundle\\Entity\\Cours', 'isCascadeRemove' => false, 'isCascadePersist' => false, 'isCascadeRefresh' => false, 'isCascadeMerge' => false, 'isCascadeDetach' => false, 'sourceToTargetKeyColumns' => array('cinformateur' => 'cin'), 'joinColumnFieldNames' => array('cinformateur' => 'cinformateur'), 'targetToSourceKeyColumns' => array('cin' => 'cinformateur'), 'orphanRemoval' => false, 'associationType' => 2, 'property' => 'cinformateur')), 'templates' => array('layout' => '@EasyAdmin/default/layout.html.twig', 'menu' => '@EasyAdmin/default/menu.html.twig', 'edit' => '@EasyAdmin/default/edit.html.twig', 'list' => '@EasyAdmin/default/list.html.twig', 'new' => '@EasyAdmin/default/new.html.twig', 'show' => '@EasyAdmin/default/show.html.twig', 'exception' => '@EasyAdmin/default/exception.html.twig', 'flash_messages' => '@EasyAdmin/default/flash_messages.html.twig', 'paginator' => '@EasyAdmin/default/paginator.html.twig', 'field_array' => '@EasyAdmin/default/field_array.html.twig', 'field_association' => '@EasyAdmin/default/field_association.html.twig', 'field_bigint' => '@EasyAdmin/default/field_bigint.html.twig', 'field_boolean' => '@EasyAdmin/default/field_boolean.html.twig', 'field_date' => '@EasyAdmin/default/field_date.html.twig', 'field_datetime' => '@EasyAdmin/default/field_datetime.html.twig', 'field_datetimetz' => '@EasyAdmin/default/field_datetimetz.html.twig', 'field_decimal' => '@EasyAdmin/default/field_decimal.html.twig', 'field_email' => '@EasyAdmin/default/field_email.html.twig', 'field_float' => '@EasyAdmin/default/field_float.html.twig', 'field_guid' => '@EasyAdmin/default/field_guid.html.twig', 'field_id' => '@EasyAdmin/default/field_id.html.twig', 'field_image' => '@EasyAdmin/default/field_image.html.twig', 'field_json_array' => '@EasyAdmin/default/field_json_array.html.twig', 'field_integer' => '@EasyAdmin/default/field_integer.html.twig', 'field_object' => '@EasyAdmin/default/field_object.html.twig', 'field_raw' => '@EasyAdmin/default/field_raw.html.twig', 'field_simple_array' => '@EasyAdmin/default/field_simple_array.html.twig', 'field_smallint' => '@EasyAdmin/default/field_smallint.html.twig', 'field_string' => '@EasyAdmin/default/field_string.html.twig', 'field_tel' => '@EasyAdmin/default/field_tel.html.twig', 'field_text' => '@EasyAdmin/default/field_text.html.twig', 'field_time' => '@EasyAdmin/default/field_time.html.twig', 'field_toggle' => '@EasyAdmin/default/field_toggle.html.twig', 'field_url' => '@EasyAdmin/default/field_url.html.twig', 'label_empty' => '@EasyAdmin/default/label_empty.html.twig', 'label_inaccessible' => '@EasyAdmin/default/label_inaccessible.html.twig', 'label_null' => '@EasyAdmin/default/label_null.html.twig', 'label_undefined' => '@EasyAdmin/default/label_undefined.html.twig'))), 'formats' => array('date' => 'Y-m-d', 'time' => 'H:i:s', 'datetime' => 'F j, Y H:i'), 'disabled_actions' => array(), 'list' => array('actions' => array(), 'max_results' => 15), 'edit' => array('actions' => array()), 'new' => array('actions' => array()), 'show' => array('actions' => array()), '_internal' => array('custom_css' => '


.sf-toolbarreset {
    -webkit-font-smoothing: subpixel-antialiased;
    -moz-osx-font-smoothing: auto;
}

body {
    font-family: Helvetica, "Helvetica Neue", Arial, sans-serif;
}

a        { color: #205081; }
a:hover  { opacity: 0.9; }
a:active { outline: 0; }

#main a:active {
    position: relative;
    top: 1px;
}

a.text-primary,
a.text-primary:focus {
    color: #205081;
}
a.text-danger,
a.text-danger:focus {
    color: #D42124;
}
a.text-primary:hover,
a.text-danger:hover {
    opacity: 0.9;
}

ul, ol {
    margin: 1em 0 1em 1em;
    padding: 0;
}
li {
    margin-bottom: 1em;
}

ul.inline {
    list-style: none;
    margin: 0;
}
ul.inline li {
    margin: 0;
}

div.flash {
    padding: .5em;
}
div.flash-success {
    background: #006B2E;
    color: #FFFFFF;
}
div.flash-error {
    background: #D42124;
    color: #FFFFFF;
}
div.flash-error strong {
    padding-right: .5em;
}

.label:not([class*=label-]) {
    background: #252525;
}
.label {
    color: #FFFFFF;
    display: inline-block;
    font-size: 11px;
    padding: 4px;
    text-transform: uppercase;
}

.label-success {
        background: #006B2E !important;
}
.label-danger {
        background: #D42124 !iportant;
}
.label-empty {
    background: transparent;
    border: 2px dotted;
    border-radius: 4px;
    color: #CCC;
    padding: 4px 8px;
}

.boolean .label,
.toggle .label {
    min-width: 33px;
}

.toggle.btn-xs {
 width: 44px;
}
.toggle-group .btn,
.toggle-group .btn:hover {
   border-radius: 3px;
   font-size: 10px;
   font-weight: bold;
   text-transform: uppercase;
}
.toggle-group .btn {
   padding: 4px 6px;
}
.toggle-group .btn:hover {
    border: 0;
}
.toggle-group .btn + .btn {
    margin-left: 0;
}
.toggle-group .toggle-on,
.toggle-group .toggle-on.btn-xs,
.toggle-group .toggle-on:hover,
.toggle-group .toggle-on:active,
.toggle-group .toggle-on:active:hover {
    background: #006B2E;
    border-color: #006B2E;
    color: #FFFFFF;
    padding: 4px 5px 4px 0;
    border: 0;
}
.toggle-group .toggle-off,
.toggle-group .toggle-off.btn-xs,
.toggle-group .toggle-off:hover,
.toggle-group .toggle-off:active,
.toggle-group .toggle-off:active:hover {
    background: #D42124;
    border-color: #D42124;
    color: #FFFFFF;
    padding: 4px 0 4px 5px;
    border: 0;
}
.toggle-group .toggle-handle,
.toggle-group .toggle-handle:hover,
.toggle-group .toggle-handle:active,
.toggle-group .toggle-handle:active:hover {
    background: #F5F5F5;
    border: 0;
    border-radius: 2px;
    height: 19px;
    margin-top: 2px;
    padding: 5px;
}
.toggle .btn-success .toggle-handle {
    box-shadow: -2px 0 1px rgba(0, 0, 0, .2);
}
.toggle .btn-danger .toggle-handle {
    box-shadow: 2px 0 1px rgba(0, 0, 0, .2);
}

span.badge {
    background-color: #3C8DBC;
}

.btn:focus {
    outline: none;
}
.btn + .btn {
    margin-left: 5px;
}

button.btn:active {
    position: relative;
    top: 1px;
}

.btn,
.btn:hover,
.btn:active,
.btn:focus,
.btn:active:hover  {
    background: #CCC;
    border: 1px solid transparent;
    border-radius: 4px;
    box-shadow: none;
    color: #222222;
    display: inline-block;
    line-height: 1.42857143;
    opacity: 1;
    outline: none;
    padding: 6px 12px;
    text-align: center;
}

.btn-primary,
.btn-primary:hover,
.btn-primary:active,
.btn-primary:focus,
.btn-primary:active:hover {
    background-color: #3C8DBC;
    border-color: transparent;
    color: #FFFFFF;
}
.btn-default,
.btn-default:hover,
.btn-default:active,
.btn-default:focus,
.btn-default:active:hover {
    border-color: transparent;
}

.btn-danger,
.btn-danger:hover,
.btn-danger:active,
.btn-danger:focus,
.btn-danger:active:hover {
    background-color: #D42124;
    border-color: transparent;
    color: #FFFFFF;
}

.btn-success,
.btn-success:hover,
.btn-success:active,
.btn-success:focus,
.btn-success:active:hover {
    background-color: #006B2E;
    border-color: transparent;
    color: #FFFFFF;
}

.btn-secondary,
.btn-secondary:hover,
.btn-secondary:active,
.btn-secondary:focus,
.btn-secondary:active:hover {
    background: transparent;
    color: #3C8DBC;
    text-decoration: underline;
}
.btn-secondary:hover {
    text-decoration: none;
}

.btn-primary,
.btn-danger,
.btn-success {
    font-weight: bold;
}

.btn i {
    font-size: 16px;
    margin-right: 2px;
}

.btn-flat,
.btn-flat:hover,
.btn-flat:active,
.btn-flat:focus,
.btn-flat:active:hover {
    border-radius: 0;
}

.form-inline .form-control {
    margin-bottom: 5px;
}
.form-control,
.form-inline .form-control {
    border: 1px solid #AAA;
    border-radius: 0;
    box-shadow: 0 0 3px rgba(0, 0, 0, .15);
    color: #222222;
    -webkit-transition: none;
    transition: none;
}
.form-control:focus {
    border-color: #444;
    box-shadow: 0 0 3px rgba(0, 0, 0, .15);
}

.has-error .error-block {
    color: #D42124;
    font-weight: bold;
    padding-top: 5px;
}
.has-error .error-block .label-danger {
    margin-right: 3px;
}
.has-error .error-block ul {
    margin: .5em 0 .5em 1.5em;
}
.has-error .error-block ul li {
    margin-bottom: .5em;
}

.help-block,
.has-error .help-block {
    color: #737373;
    font-size: 13px;
}
.nullable-control {
   padding-top: 5px;
}

.form-actions.stuck {
    bottom: 0;
    position: fixed;
    background-color: #F5F5F5;
    box-shadow: 0 -1px 4px #CCC;
    height: 52px;
    padding-top: 10px;
    height: 85px;
    padding-bottom: 45px;
}

form:not(.form-horizontal) .field-checkbox label {
    padding-top: 23px;
}

.field-collection .collection-empty {
    margin: .5em 0;
}

.select2-container {
    width: 100% !important;
}
.select2-container--bootstrap .select2-selection {
    border: 1px solid #AAA;
    border-radius: 0;
    box-shadow: 0 0 3px rgba(0, 0, 0, .15);
    color: #222222;
    -webkit-transition: none;
    transition: none;
}
.select2-container--bootstrap .select2-selection .select2-search--inline {
    margin: 0;
}
.select2-container--bootstrap .select2-selection--single .select2-selection__rendered {
    color: #222222;
    padding-top: 4px;
}
.select2-container--bootstrap .select2-results__option {
    margin-bottom: 0;
}
.select2-container--bootstrap .select2-results__option[aria-selected=true] {
    background-color: #CCC;
    font-weight: bold;
}
.select2-container--bootstrap .select2-results__option--highlighted[aria-selected] {
    background-color: #3C8DBC;
}
.select2-container--bootstrap .select2-selection--multiple .select2-selection__choice {
    color: #222222;
}
.select2-container--bootstrap .select2-selection--multiple .select2-selection__choice__remove {
    color: #D42124;
    font-weight: bold;
    position: relative;
    top: -1px;
}
.select2-container--bootstrap .select2-search--dropdown .select2-search__field {
    border: 1px solid #444;
    border-radius: 0;
    margin: 5px 10px;
    padding: 6px;
    width: 96%;
}
.select2-search--inline .select2-search__field:focus {
    outline: 0;
    border: 0;
}

.easyadmin-vich-image img {
    border: 3px solid #FFFFFF;
    box-shadow: 0 0 3px #AAA;
    max-height: 300px;
    max-width: 400px;
}
.easyadmin-vich-image input[type="file"],
.easyadmin-vich-file input[type="file"] {
    padding-top: 7px;
}
.easyadmin-vich-file a {
    display: inline-block;
    padding-top: 7px;
}
.easyadmin-vich-file .field-checkbox {
    margin-bottom: 0;
}
.easyadmin-vich-file .field-checkbox .col-sm-2,
.easyadmin-vich-image .field-checkbox .col-sm-2 {
    display: none;
}

.easyadmin-thumbnail img {
    border: 3px solid #FFFFFF;
    box-shadow: 0 0 3px #AAA;
    max-height: 100px;
    max-width: 100%;
}
.easyadmin-thumbnail img:hover {
    cursor: zoom-in;
}
.featherlight .easyadmin-lightbox:hover {
    cursor: zoom-out;
}
.easyadmin-lightbox {
    display: none;
}
.featherlight .easyadmin-lightbox {
    display: block;
}
.easyadmin-lightbox img {
    max-width: 100%;
}

.modal-dialog .modal-content {
    border-radius: 0;
}
.modal-dialog .modal-content .modal-body h4 {
    font-size: 21px;
    margin: .5em 0;
}
.modal-dialog .modal-footer {
    background: #F5F5F5;
    border-top: 1px solid #CCC;
    margin-top: 1.5em;
}


.content-wrapper {
    background: #F5F5F5;
}
.fixed .content-wrapper {
    padding-top: 50px;
}

.main-header {
    background: #3C8DBC;
}
.main-header .logo {
    background: rgba(0, 0, 0, 0.15);
    color: #FFFFFF;
    font-family: Helvetica, "Helvetica Neue", Arial, sans-serif;     font-weight: bold;
    height: 40px;
}
.main-header .logo-lg {
    overflow: hidden;
    text-overflow: ellipsis;
    white-space: nowrap;
}
.main-header .logo-mini {
    font-weight: bold;
    text-align: center;
}
.main-header .logo-long .logo-lg {
    font-size: 16px;
}
.main-header > img {
    margin-top: -2px;
    max-height: 26px;
    max-width: 94%;
}
.main-header li {
    margin-bottom: 0;
}

.main-header > .navbar {
    background-color: #3C8DBC;
    color: #FFFFFF;
    min-height: 40px;
}

.main-header .navbar .sidebar-toggle {
    color: #FFFFFF;
    padding: 10px;
}
.main-header .navbar .sidebar-toggle:hover {
    background: rgba(0, 0, 0, 0.15);
}

.navbar-custom-menu .user-menu {
    color: rgba(255, 255, 255, 0.8);
    font-size: 13px;
    font-weight: bold;
    padding: 10px;
}

#content #main {
    padding-bottom: 3em;
}
.content {
    padding-top: 10px;
}
.content-header {
    padding: 12px 15px 0 15px;
}
.content-header h1 {
    margin: 0;
    font-size: 24px;
}

.main-sidebar,
.wrapper {
    background-color: rgb(34, 34, 34);
}
.main-sidebar {
    padding-top: 40px;
}

.sidebar-menu li.header {
    color: #FFFFFF;
    font-size: 12px;
    font-weight: bold;
    opacity: 0.4;
    text-transform: uppercase;
}
.treeview-menu > li.header {
    padding-left: 28px;
}

.sidebar-menu > li > a,
.sidebar-menu .treeview-menu > li > a {
    color: #FFFFFF;
    opacity: 0.8;
    border-left: 3px solid transparent;
    display: block;
    font-weight: bold;
}
.sidebar-menu .treeview-menu > li > a {
    font-size: 13px;
    padding: 8px 5px 8px 25px;
}
.sidebar-menu > li:hover > a,
.sidebar-menu > li.active > a,
.sidebar-menu .treeview-menu > li:hover > a,
.sidebar-menu .treeview-menu > li.active > a {
    color: #FFFFFF;
    background: rgb(15, 15, 15);
    border-left-color: rgb(115, 115, 115);
    opacity: 1;
}

.sidebar-menu > li > a > .fa {
    width: 22px;
}

.sidebar-menu .treeview-menu {
    background: rgb(60, 60, 60);
    margin: 0;
    padding: 0;
}

.sidebar-menu > li.active.submenu-active > a {
    background: rgb(34, 34, 34);
    border-left-color: transparent;
}
.sidebar-menu li > a > .pull-right {
    font-weight: bold;
    text-align: right;
}
.sidebar-menu li.active > a > .fa-angle-left {
    top: 30px;
    right: 0;
}
.sidebar-collapse .sidebar-menu > li > a > .fa {
    width: 28px;
}

body.easyadmin h1.title {
    margin-bottom: 10px;
}


body.list .global-actions {
    display: table;
    width: 100%;
}
body.list .global-actions .button-action {
    display: table-cell;
    padding-left: 10px;
    vertical-align: middle;
    width: 120px;
}
body.list .global-actions .button-action a {
    float: right;
}
body.list .global-actions .form-action {
    display: table-cell;
    width: 100%;
}
body.list .global-actions .form-action .input-group {
    width: 100%;
}

body.list .global-actions .form-control {
    box-shadow: none;
}
body.list .global-actions .input-group-btn > button.btn:not(:last-child) {
    border-bottom-right-radius: 3px;
    border-top-right-radius: 3px;
}
body.list .global-actions .input-group-btn a.btn {
    border-radius: 3px;
    margin-left: 10px;
}

body.list .table-responsive,
body.list table {
    background: transparent;
    border: 0;
}
body.list table thead {
    display: none;
}
body.list .table tbody {
    background: transparent;
    border: 0;
}
body.list table tbody tr {
    background: #FFFFFF;
    border: 1px solid #CCC;
    display: block;
    margin-bottom: 1em;
}
body.list table tbody td {
    border-bottom: 1px solid #DDD;
    border-top: 0;
    display: block;
    text-align: right;
    vertical-align: middle;
}
body.list table tbody td:last-child {
    border-bottom: 0;
}
table td:before {
    content: attr(data-label);
    float: left;
    font-weight: bold;
}
table td:after {
    clear: both;
    content: "";
    display: block;
}

body.list table tbody td.image .easyadmin-thumbnail img {
    border-width: 2px;
    max-height: 50px;
    max-width: 150px;
}
body.list table tbody td.association .badge {
    font-size: 13px;
}
body.list table tbody td.actions a {
    font-weight: bold;
    margin-left: 10px;
}

body.list .table tbody span.highlight {
    background: #FF9;
    border-radius: 2px;
    padding: 1px;
}
body.list .table tbody .no-results span.highlight,
body.list .table tbody .actions span.highlight {
    background: 0;
    border-radius: 0;
}

body.list .pagination {
    float: right;
    margin: 0;
}
body.list .pagination > .disabled > span {
    background: transparent;
    border: 1px solid transparent;
    color: #737373;
}
body.list .pagination > li > a {
    background: #FFFFFF;
    border-color: #CCC;
    border-radius: 0;
    color: #222222;
}
body.list .pagination > li > a:hover {
    background: #3C8DBC;
    color: #FFFFFF;
}
.pagination > li > a,
.pagination > li > span {
    padding: 6px 8px;
}
body.list .pagination > li i {
    padding: 0 3px;
}
body.list .pagination.last-page li:nth-child(2) {
    position: relative;
    z-index: 1;
}

form label.control-label.required:after {
    content: "\\00a0*";
    color: #D42124;
    font-size: 16px;
    position: absolute;
}

body.new textarea {
    min-height: 250px;
}
body.new .field-collection-action {
    margin: -15px 0 10px;
}
body.new .field-collection-item-action {
    margin: 5px 0 0;
}

body.new #form-actions-row button,
body.new #form-actions-row a.btn {
    margin-bottom: 10px;
}
body.new .form-horizontal #form-actions-row {
    padding-left: 15px;
    padding-right: 15px;
}

body.edit textarea {
    min-height: 250px;
}
body.edit .field-collection-action {
    margin: -15px 0 10px;
}
body.edit .field-collection-item-action {
    margin: 5px 0 0;
}

body.edit #form-actions-row button,
body.edit #form-actions-row a.btn {
    margin-bottom: 10px;
}
body.edit .form-horizontal #form-actions-row {
    padding-left: 15px;
    padding-right: 15px;
}

body.show .form-control {
    background: #FFFFFF;
    border: 0;
    border-radius: 0;
    box-shadow: none;
    height: auto;
}
body.show .form-control.text {
    min-height: 34px;
    max-height: 250px;
    overflow-y: auto;
}

body.error .error-description {
    background: #FFFFFF;
    border: 1px solid #F5F5F5;
    box-shadow: 0 0 3px #CCC;
    margin: 2em auto 2em;
    max-width: 90%;
    min-height: 150px;
    padding: 0;
}
body.error .error-description h1 {
    background: #D42124;
    color: #FFFFFF;
    font-size: 18px;
    font-weight: bold;
    margin-top: 0;
    padding: 10px;
    text-transform: uppercase;
}
body.error .error-message {
    font-size: 16px;
    padding: 15px;
}


@media (min-width: 768px) {
    ul, ol {
        margin-left: 2em;
    }

    .main-header > .navbar {
      min-height: 50px;
    }
    .main-header .logo {
        text-align: left;
        height: 50px;
    }
    .main-header .logo img {
        max-height: 48px;
    }

    .main-header .navbar .sidebar-toggle {
        padding: 15px;
    }
    .navbar-custom-menu .user-menu {
        padding: 17px 15px 13px;
    }
    .navbar-custom-menu .user-menu i {
        padding-right: 4px;
    }

    .main-sidebar {
        padding-top: 50px;
    }

        body.list table {
        background: #FFFFFF;
        border: 1px solid #CCC;
    }
    body.list table thead {
        display: table-header-group;
    }
    body.list table thead th {
        background: #EEE;
        padding: 0;
    }
    body.list table thead th i {
        color: #AAA;
        padding: 0 3px;
    }
    body.list table thead th a,
    body.list table thead th span {
        color: #222222;
        display: block;
        padding: 10px 6px;
        white-space: nowrap;
    }
    body.list table thead th a:hover {
        background: #CCC;
        text-decoration: none;
    }
    body.list table thead th.sorted,
    body.list table thead th.sorted a {
        background: #3C8DBC;
        color: #FFFFFF;
    }
    body.list table thead th.sorted a:hover i,
    body.list table thead th.sorted i {
        color: #FFFFFF;
    }
    body.list th.boolean, body.list td.boolean,
    body.list th.toggle, body.list td.toggle,
    body.list td.image {
        text-align: center;
    }

    body.list .table thead tr th {
        border-bottom: 2px solid #CCC;
    }
    body.list .table thead tr th.sorted {
        border-bottom: 2px outset #3C8DBC;
    }
        body.list .table thead tr th:first-child.sorted {
        border-left: 1px solid #3C8DBC;
        border-top: 1px solid #3C8DBC;
    }
    body.list .table tbody {
        border-bottom: 2px double #CCC;
    }
    body.list table tbody tr {
        border: 0;
        display: table-row;
        margin-bottom: 0;
    }
    body.list table tbody td {
        border-bottom: 0;
        border-top: 1px solid #DDD;
        display: table-cell;
        text-align: left;
    }
    table td:before {
        content: none;
        float: none;
    }
    body.list table tbody td.sorted {
        background: #F5F5F5;
        border-color: #DDD;
    }
    body.list .table tbody tr:hover td {
        background: #F5F5F5;
    }
    body.list table tbody td.actions a {
        margin-left: 0;
        margin-right: 10px;
    }

    .field-date select + select,
    .field-time select + select,
    .field-datetime select + select {
        margin-left: 2px;
    }

    body.error .error-description {
        max-width: 70%;
    }

    .pagination > li > a,
    .pagination > li > span {
        padding: 6px 12px;
    }

    .form-inline .form-control {
        margin-bottom: 0;
    }

    body.new .form-horizontal #form-actions-row {
        margin-left: 16.66666667%;
    }

    body.edit .form-horizontal #form-actions-row {
        margin-left: 16.66666667%;
    }
}
'), 'default_entity_name' => 'Formateur', 'default_menu_item' => NULL, 'homepage' => array('route' => 'easyadmin', 'params' => array('action' => 'list', 'entity' => 'Formateur'))), $this->get('property_accessor'));
    }

    /**
     * Gets the 'easyadmin.form.type' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \JavierEguiluz\Bundle\EasyAdminBundle\Form\Type\EasyAdminFormType A JavierEguiluz\Bundle\EasyAdminBundle\Form\Type\EasyAdminFormType instance.
     */
    protected function getEasyadmin_Form_TypeService()
    {
        $a = $this->get('form.type_guesser.validator');
        $b = $this->get('form.type_guesser.doctrine');

        $c = new \Symfony\Component\Form\FormTypeGuesserChain(array(0 => $a, 1 => $b));

        return $this->services['easyadmin.form.type'] = new \JavierEguiluz\Bundle\EasyAdminBundle\Form\Type\EasyAdminFormType($this->get('easyadmin.configurator'), array(3 => new \JavierEguiluz\Bundle\EasyAdminBundle\Form\Type\Configurator\CollectionTypeConfigurator(), 2 => new \JavierEguiluz\Bundle\EasyAdminBundle\Form\Type\Configurator\CheckboxTypeConfigurator(), 1 => new \JavierEguiluz\Bundle\EasyAdminBundle\Form\Type\Configurator\RequiredOptionConfigurator($c), 0 => new \JavierEguiluz\Bundle\EasyAdminBundle\Form\Type\Configurator\EntityTypeConfigurator($c)));
    }

    /**
     * Gets the 'easyadmin.form.type.extension' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \JavierEguiluz\Bundle\EasyAdminBundle\Form\Extension\EasyAdminExtension A JavierEguiluz\Bundle\EasyAdminBundle\Form\Extension\EasyAdminExtension instance.
     */
    protected function getEasyadmin_Form_Type_ExtensionService()
    {
        return $this->services['easyadmin.form.type.extension'] = new \JavierEguiluz\Bundle\EasyAdminBundle\Form\Extension\EasyAdminExtension($this->get('request_stack', ContainerInterface::NULL_ON_INVALID_REFERENCE));
    }

    /**
     * Gets the 'easyadmin.listener.request_post_initialize' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \JavierEguiluz\Bundle\EasyAdminBundle\EventListener\RequestPostInitializeListener A JavierEguiluz\Bundle\EasyAdminBundle\EventListener\RequestPostInitializeListener instance.
     */
    protected function getEasyadmin_Listener_RequestPostInitializeService()
    {
        return $this->services['easyadmin.listener.request_post_initialize'] = new \JavierEguiluz\Bundle\EasyAdminBundle\EventListener\RequestPostInitializeListener($this->get('doctrine'), $this->get('request_stack', ContainerInterface::NULL_ON_INVALID_REFERENCE));
    }

    /**
     * Gets the 'easyadmin.paginator' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \JavierEguiluz\Bundle\EasyAdminBundle\Search\Paginator A JavierEguiluz\Bundle\EasyAdminBundle\Search\Paginator instance.
     */
    protected function getEasyadmin_PaginatorService()
    {
        return $this->services['easyadmin.paginator'] = new \JavierEguiluz\Bundle\EasyAdminBundle\Search\Paginator();
    }

    /**
     * Gets the 'easyadmin.query_builder' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \JavierEguiluz\Bundle\EasyAdminBundle\Search\QueryBuilder A JavierEguiluz\Bundle\EasyAdminBundle\Search\QueryBuilder instance.
     */
    protected function getEasyadmin_QueryBuilderService()
    {
        return $this->services['easyadmin.query_builder'] = new \JavierEguiluz\Bundle\EasyAdminBundle\Search\QueryBuilder($this->get('doctrine'));
    }

    /**
     * Gets the 'file_locator' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Symfony\Component\HttpKernel\Config\FileLocator A Symfony\Component\HttpKernel\Config\FileLocator instance.
     */
    protected function getFileLocatorService()
    {
        return $this->services['file_locator'] = new \Symfony\Component\HttpKernel\Config\FileLocator($this->get('kernel'), ($this->targetDirs[2].'/Resources'));
    }

    /**
     * Gets the 'filesystem' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Symfony\Component\Filesystem\Filesystem A Symfony\Component\Filesystem\Filesystem instance.
     */
    protected function getFilesystemService()
    {
        return $this->services['filesystem'] = new \Symfony\Component\Filesystem\Filesystem();
    }

    /**
     * Gets the 'form.csrf_provider' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Symfony\Component\Form\Extension\Csrf\CsrfProvider\CsrfTokenManagerAdapter A Symfony\Component\Form\Extension\Csrf\CsrfProvider\CsrfTokenManagerAdapter instance.
     */
    protected function getForm_CsrfProviderService()
    {
        return $this->services['form.csrf_provider'] = new \Symfony\Component\Form\Extension\Csrf\CsrfProvider\CsrfTokenManagerAdapter($this->get('security.csrf.token_manager'));
    }

    /**
     * Gets the 'form.factory' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Symfony\Component\Form\FormFactory A Symfony\Component\Form\FormFactory instance.
     */
    protected function getForm_FactoryService()
    {
        return $this->services['form.factory'] = new \Symfony\Component\Form\FormFactory($this->get('form.registry'), $this->get('form.resolved_type_factory'));
    }

    /**
     * Gets the 'form.registry' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Symfony\Component\Form\FormRegistry A Symfony\Component\Form\FormRegistry instance.
     */
    protected function getForm_RegistryService()
    {
        return $this->services['form.registry'] = new \Symfony\Component\Form\FormRegistry(array(0 => new \Symfony\Component\Form\Extension\DependencyInjection\DependencyInjectionExtension($this, array('form' => 'form.type.form', 'birthday' => 'form.type.birthday', 'checkbox' => 'form.type.checkbox', 'choice' => 'form.type.choice', 'collection' => 'form.type.collection', 'country' => 'form.type.country', 'date' => 'form.type.date', 'datetime' => 'form.type.datetime', 'email' => 'form.type.email', 'file' => 'form.type.file', 'hidden' => 'form.type.hidden', 'integer' => 'form.type.integer', 'language' => 'form.type.language', 'locale' => 'form.type.locale', 'money' => 'form.type.money', 'number' => 'form.type.number', 'password' => 'form.type.password', 'percent' => 'form.type.percent', 'radio' => 'form.type.radio', 'repeated' => 'form.type.repeated', 'search' => 'form.type.search', 'textarea' => 'form.type.textarea', 'text' => 'form.type.text', 'time' => 'form.type.time', 'timezone' => 'form.type.timezone', 'url' => 'form.type.url', 'button' => 'form.type.button', 'submit' => 'form.type.submit', 'reset' => 'form.type.reset', 'currency' => 'form.type.currency', 'entity' => 'form.type.entity', 'easyadmin' => 'easyadmin.form.type', 'vich_file' => 'vich_uploader.form.type.file', 'vich_image' => 'vich_uploader.form.type.image', 'rating' => 'star_rating.type'), array('form' => array(0 => 'form.type_extension.form.http_foundation', 1 => 'form.type_extension.form.validator', 2 => 'form.type_extension.csrf', 3 => 'form.type_extension.form.data_collector', 4 => 'easyadmin.form.type.extension'), 'repeated' => array(0 => 'form.type_extension.repeated.validator'), 'submit' => array(0 => 'form.type_extension.submit.validator')), array(0 => 'form.type_guesser.validator', 1 => 'form.type_guesser.doctrine'))), $this->get('form.resolved_type_factory'));
    }

    /**
     * Gets the 'form.resolved_type_factory' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Symfony\Component\Form\Extension\DataCollector\Proxy\ResolvedTypeFactoryDataCollectorProxy A Symfony\Component\Form\Extension\DataCollector\Proxy\ResolvedTypeFactoryDataCollectorProxy instance.
     */
    protected function getForm_ResolvedTypeFactoryService()
    {
        return $this->services['form.resolved_type_factory'] = new \Symfony\Component\Form\Extension\DataCollector\Proxy\ResolvedTypeFactoryDataCollectorProxy(new \Symfony\Component\Form\ResolvedFormTypeFactory(), $this->get('data_collector.form'));
    }

    /**
     * Gets the 'form.type.birthday' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Symfony\Component\Form\Extension\Core\Type\BirthdayType A Symfony\Component\Form\Extension\Core\Type\BirthdayType instance.
     */
    protected function getForm_Type_BirthdayService()
    {
        return $this->services['form.type.birthday'] = new \Symfony\Component\Form\Extension\Core\Type\BirthdayType();
    }

    /**
     * Gets the 'form.type.button' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Symfony\Component\Form\Extension\Core\Type\ButtonType A Symfony\Component\Form\Extension\Core\Type\ButtonType instance.
     */
    protected function getForm_Type_ButtonService()
    {
        return $this->services['form.type.button'] = new \Symfony\Component\Form\Extension\Core\Type\ButtonType();
    }

    /**
     * Gets the 'form.type.checkbox' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Symfony\Component\Form\Extension\Core\Type\CheckboxType A Symfony\Component\Form\Extension\Core\Type\CheckboxType instance.
     */
    protected function getForm_Type_CheckboxService()
    {
        return $this->services['form.type.checkbox'] = new \Symfony\Component\Form\Extension\Core\Type\CheckboxType();
    }

    /**
     * Gets the 'form.type.choice' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Symfony\Component\Form\Extension\Core\Type\ChoiceType A Symfony\Component\Form\Extension\Core\Type\ChoiceType instance.
     */
    protected function getForm_Type_ChoiceService()
    {
        return $this->services['form.type.choice'] = new \Symfony\Component\Form\Extension\Core\Type\ChoiceType();
    }

    /**
     * Gets the 'form.type.collection' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Symfony\Component\Form\Extension\Core\Type\CollectionType A Symfony\Component\Form\Extension\Core\Type\CollectionType instance.
     */
    protected function getForm_Type_CollectionService()
    {
        return $this->services['form.type.collection'] = new \Symfony\Component\Form\Extension\Core\Type\CollectionType();
    }

    /**
     * Gets the 'form.type.country' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Symfony\Component\Form\Extension\Core\Type\CountryType A Symfony\Component\Form\Extension\Core\Type\CountryType instance.
     */
    protected function getForm_Type_CountryService()
    {
        return $this->services['form.type.country'] = new \Symfony\Component\Form\Extension\Core\Type\CountryType();
    }

    /**
     * Gets the 'form.type.currency' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Symfony\Component\Form\Extension\Core\Type\CurrencyType A Symfony\Component\Form\Extension\Core\Type\CurrencyType instance.
     */
    protected function getForm_Type_CurrencyService()
    {
        return $this->services['form.type.currency'] = new \Symfony\Component\Form\Extension\Core\Type\CurrencyType();
    }

    /**
     * Gets the 'form.type.date' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Symfony\Component\Form\Extension\Core\Type\DateType A Symfony\Component\Form\Extension\Core\Type\DateType instance.
     */
    protected function getForm_Type_DateService()
    {
        return $this->services['form.type.date'] = new \Symfony\Component\Form\Extension\Core\Type\DateType();
    }

    /**
     * Gets the 'form.type.datetime' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Symfony\Component\Form\Extension\Core\Type\DateTimeType A Symfony\Component\Form\Extension\Core\Type\DateTimeType instance.
     */
    protected function getForm_Type_DatetimeService()
    {
        return $this->services['form.type.datetime'] = new \Symfony\Component\Form\Extension\Core\Type\DateTimeType();
    }

    /**
     * Gets the 'form.type.email' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Symfony\Component\Form\Extension\Core\Type\EmailType A Symfony\Component\Form\Extension\Core\Type\EmailType instance.
     */
    protected function getForm_Type_EmailService()
    {
        return $this->services['form.type.email'] = new \Symfony\Component\Form\Extension\Core\Type\EmailType();
    }

    /**
     * Gets the 'form.type.entity' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Symfony\Bridge\Doctrine\Form\Type\EntityType A Symfony\Bridge\Doctrine\Form\Type\EntityType instance.
     */
    protected function getForm_Type_EntityService()
    {
        return $this->services['form.type.entity'] = new \Symfony\Bridge\Doctrine\Form\Type\EntityType($this->get('doctrine'));
    }

    /**
     * Gets the 'form.type.file' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Symfony\Component\Form\Extension\Core\Type\FileType A Symfony\Component\Form\Extension\Core\Type\FileType instance.
     */
    protected function getForm_Type_FileService()
    {
        return $this->services['form.type.file'] = new \Symfony\Component\Form\Extension\Core\Type\FileType();
    }

    /**
     * Gets the 'form.type.form' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Symfony\Component\Form\Extension\Core\Type\FormType A Symfony\Component\Form\Extension\Core\Type\FormType instance.
     */
    protected function getForm_Type_FormService()
    {
        return $this->services['form.type.form'] = new \Symfony\Component\Form\Extension\Core\Type\FormType($this->get('property_accessor'));
    }

    /**
     * Gets the 'form.type.hidden' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Symfony\Component\Form\Extension\Core\Type\HiddenType A Symfony\Component\Form\Extension\Core\Type\HiddenType instance.
     */
    protected function getForm_Type_HiddenService()
    {
        return $this->services['form.type.hidden'] = new \Symfony\Component\Form\Extension\Core\Type\HiddenType();
    }

    /**
     * Gets the 'form.type.integer' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Symfony\Component\Form\Extension\Core\Type\IntegerType A Symfony\Component\Form\Extension\Core\Type\IntegerType instance.
     */
    protected function getForm_Type_IntegerService()
    {
        return $this->services['form.type.integer'] = new \Symfony\Component\Form\Extension\Core\Type\IntegerType();
    }

    /**
     * Gets the 'form.type.language' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Symfony\Component\Form\Extension\Core\Type\LanguageType A Symfony\Component\Form\Extension\Core\Type\LanguageType instance.
     */
    protected function getForm_Type_LanguageService()
    {
        return $this->services['form.type.language'] = new \Symfony\Component\Form\Extension\Core\Type\LanguageType();
    }

    /**
     * Gets the 'form.type.locale' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Symfony\Component\Form\Extension\Core\Type\LocaleType A Symfony\Component\Form\Extension\Core\Type\LocaleType instance.
     */
    protected function getForm_Type_LocaleService()
    {
        return $this->services['form.type.locale'] = new \Symfony\Component\Form\Extension\Core\Type\LocaleType();
    }

    /**
     * Gets the 'form.type.money' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Symfony\Component\Form\Extension\Core\Type\MoneyType A Symfony\Component\Form\Extension\Core\Type\MoneyType instance.
     */
    protected function getForm_Type_MoneyService()
    {
        return $this->services['form.type.money'] = new \Symfony\Component\Form\Extension\Core\Type\MoneyType();
    }

    /**
     * Gets the 'form.type.number' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Symfony\Component\Form\Extension\Core\Type\NumberType A Symfony\Component\Form\Extension\Core\Type\NumberType instance.
     */
    protected function getForm_Type_NumberService()
    {
        return $this->services['form.type.number'] = new \Symfony\Component\Form\Extension\Core\Type\NumberType();
    }

    /**
     * Gets the 'form.type.password' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Symfony\Component\Form\Extension\Core\Type\PasswordType A Symfony\Component\Form\Extension\Core\Type\PasswordType instance.
     */
    protected function getForm_Type_PasswordService()
    {
        return $this->services['form.type.password'] = new \Symfony\Component\Form\Extension\Core\Type\PasswordType();
    }

    /**
     * Gets the 'form.type.percent' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Symfony\Component\Form\Extension\Core\Type\PercentType A Symfony\Component\Form\Extension\Core\Type\PercentType instance.
     */
    protected function getForm_Type_PercentService()
    {
        return $this->services['form.type.percent'] = new \Symfony\Component\Form\Extension\Core\Type\PercentType();
    }

    /**
     * Gets the 'form.type.radio' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Symfony\Component\Form\Extension\Core\Type\RadioType A Symfony\Component\Form\Extension\Core\Type\RadioType instance.
     */
    protected function getForm_Type_RadioService()
    {
        return $this->services['form.type.radio'] = new \Symfony\Component\Form\Extension\Core\Type\RadioType();
    }

    /**
     * Gets the 'form.type.repeated' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Symfony\Component\Form\Extension\Core\Type\RepeatedType A Symfony\Component\Form\Extension\Core\Type\RepeatedType instance.
     */
    protected function getForm_Type_RepeatedService()
    {
        return $this->services['form.type.repeated'] = new \Symfony\Component\Form\Extension\Core\Type\RepeatedType();
    }

    /**
     * Gets the 'form.type.reset' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Symfony\Component\Form\Extension\Core\Type\ResetType A Symfony\Component\Form\Extension\Core\Type\ResetType instance.
     */
    protected function getForm_Type_ResetService()
    {
        return $this->services['form.type.reset'] = new \Symfony\Component\Form\Extension\Core\Type\ResetType();
    }

    /**
     * Gets the 'form.type.search' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Symfony\Component\Form\Extension\Core\Type\SearchType A Symfony\Component\Form\Extension\Core\Type\SearchType instance.
     */
    protected function getForm_Type_SearchService()
    {
        return $this->services['form.type.search'] = new \Symfony\Component\Form\Extension\Core\Type\SearchType();
    }

    /**
     * Gets the 'form.type.submit' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Symfony\Component\Form\Extension\Core\Type\SubmitType A Symfony\Component\Form\Extension\Core\Type\SubmitType instance.
     */
    protected function getForm_Type_SubmitService()
    {
        return $this->services['form.type.submit'] = new \Symfony\Component\Form\Extension\Core\Type\SubmitType();
    }

    /**
     * Gets the 'form.type.text' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Symfony\Component\Form\Extension\Core\Type\TextType A Symfony\Component\Form\Extension\Core\Type\TextType instance.
     */
    protected function getForm_Type_TextService()
    {
        return $this->services['form.type.text'] = new \Symfony\Component\Form\Extension\Core\Type\TextType();
    }

    /**
     * Gets the 'form.type.textarea' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Symfony\Component\Form\Extension\Core\Type\TextareaType A Symfony\Component\Form\Extension\Core\Type\TextareaType instance.
     */
    protected function getForm_Type_TextareaService()
    {
        return $this->services['form.type.textarea'] = new \Symfony\Component\Form\Extension\Core\Type\TextareaType();
    }

    /**
     * Gets the 'form.type.time' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Symfony\Component\Form\Extension\Core\Type\TimeType A Symfony\Component\Form\Extension\Core\Type\TimeType instance.
     */
    protected function getForm_Type_TimeService()
    {
        return $this->services['form.type.time'] = new \Symfony\Component\Form\Extension\Core\Type\TimeType();
    }

    /**
     * Gets the 'form.type.timezone' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Symfony\Component\Form\Extension\Core\Type\TimezoneType A Symfony\Component\Form\Extension\Core\Type\TimezoneType instance.
     */
    protected function getForm_Type_TimezoneService()
    {
        return $this->services['form.type.timezone'] = new \Symfony\Component\Form\Extension\Core\Type\TimezoneType();
    }

    /**
     * Gets the 'form.type.url' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Symfony\Component\Form\Extension\Core\Type\UrlType A Symfony\Component\Form\Extension\Core\Type\UrlType instance.
     */
    protected function getForm_Type_UrlService()
    {
        return $this->services['form.type.url'] = new \Symfony\Component\Form\Extension\Core\Type\UrlType();
    }

    /**
     * Gets the 'form.type_extension.csrf' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Symfony\Component\Form\Extension\Csrf\Type\FormTypeCsrfExtension A Symfony\Component\Form\Extension\Csrf\Type\FormTypeCsrfExtension instance.
     */
    protected function getForm_TypeExtension_CsrfService()
    {
        return $this->services['form.type_extension.csrf'] = new \Symfony\Component\Form\Extension\Csrf\Type\FormTypeCsrfExtension($this->get('form.csrf_provider'), true, '_token', $this->get('translator.default'), 'validators');
    }

    /**
     * Gets the 'form.type_extension.form.data_collector' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Symfony\Component\Form\Extension\DataCollector\Type\DataCollectorTypeExtension A Symfony\Component\Form\Extension\DataCollector\Type\DataCollectorTypeExtension instance.
     */
    protected function getForm_TypeExtension_Form_DataCollectorService()
    {
        return $this->services['form.type_extension.form.data_collector'] = new \Symfony\Component\Form\Extension\DataCollector\Type\DataCollectorTypeExtension($this->get('data_collector.form'));
    }

    /**
     * Gets the 'form.type_extension.form.http_foundation' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Symfony\Component\Form\Extension\HttpFoundation\Type\FormTypeHttpFoundationExtension A Symfony\Component\Form\Extension\HttpFoundation\Type\FormTypeHttpFoundationExtension instance.
     */
    protected function getForm_TypeExtension_Form_HttpFoundationService()
    {
        return $this->services['form.type_extension.form.http_foundation'] = new \Symfony\Component\Form\Extension\HttpFoundation\Type\FormTypeHttpFoundationExtension(new \Symfony\Component\Form\Extension\HttpFoundation\HttpFoundationRequestHandler());
    }

    /**
     * Gets the 'form.type_extension.form.validator' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Symfony\Component\Form\Extension\Validator\Type\FormTypeValidatorExtension A Symfony\Component\Form\Extension\Validator\Type\FormTypeValidatorExtension instance.
     */
    protected function getForm_TypeExtension_Form_ValidatorService()
    {
        return $this->services['form.type_extension.form.validator'] = new \Symfony\Component\Form\Extension\Validator\Type\FormTypeValidatorExtension($this->get('validator'));
    }

    /**
     * Gets the 'form.type_extension.repeated.validator' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Symfony\Component\Form\Extension\Validator\Type\RepeatedTypeValidatorExtension A Symfony\Component\Form\Extension\Validator\Type\RepeatedTypeValidatorExtension instance.
     */
    protected function getForm_TypeExtension_Repeated_ValidatorService()
    {
        return $this->services['form.type_extension.repeated.validator'] = new \Symfony\Component\Form\Extension\Validator\Type\RepeatedTypeValidatorExtension();
    }

    /**
     * Gets the 'form.type_extension.submit.validator' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Symfony\Component\Form\Extension\Validator\Type\SubmitTypeValidatorExtension A Symfony\Component\Form\Extension\Validator\Type\SubmitTypeValidatorExtension instance.
     */
    protected function getForm_TypeExtension_Submit_ValidatorService()
    {
        return $this->services['form.type_extension.submit.validator'] = new \Symfony\Component\Form\Extension\Validator\Type\SubmitTypeValidatorExtension();
    }

    /**
     * Gets the 'form.type_guesser.doctrine' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Symfony\Bridge\Doctrine\Form\DoctrineOrmTypeGuesser A Symfony\Bridge\Doctrine\Form\DoctrineOrmTypeGuesser instance.
     */
    protected function getForm_TypeGuesser_DoctrineService()
    {
        return $this->services['form.type_guesser.doctrine'] = new \Symfony\Bridge\Doctrine\Form\DoctrineOrmTypeGuesser($this->get('doctrine'));
    }

    /**
     * Gets the 'form.type_guesser.validator' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Symfony\Component\Form\Extension\Validator\ValidatorTypeGuesser A Symfony\Component\Form\Extension\Validator\ValidatorTypeGuesser instance.
     */
    protected function getForm_TypeGuesser_ValidatorService()
    {
        return $this->services['form.type_guesser.validator'] = new \Symfony\Component\Form\Extension\Validator\ValidatorTypeGuesser($this->get('validator'));
    }

    /**
     * Gets the 'fragment.handler' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Symfony\Component\HttpKernel\Fragment\FragmentHandler A Symfony\Component\HttpKernel\Fragment\FragmentHandler instance.
     */
    protected function getFragment_HandlerService()
    {
        $this->services['fragment.handler'] = $instance = new \Symfony\Component\HttpKernel\Fragment\FragmentHandler(array(), true, $this->get('request_stack'));

        $instance->addRenderer($this->get('fragment.renderer.inline'));
        $instance->addRenderer($this->get('fragment.renderer.hinclude'));
        $instance->addRenderer($this->get('fragment.renderer.esi'));
        $instance->addRenderer($this->get('fragment.renderer.ssi'));

        return $instance;
    }

    /**
     * Gets the 'fragment.listener' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Symfony\Component\HttpKernel\EventListener\FragmentListener A Symfony\Component\HttpKernel\EventListener\FragmentListener instance.
     */
    protected function getFragment_ListenerService()
    {
        return $this->services['fragment.listener'] = new \Symfony\Component\HttpKernel\EventListener\FragmentListener($this->get('uri_signer'), '/_fragment');
    }

    /**
     * Gets the 'fragment.renderer.esi' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Symfony\Component\HttpKernel\Fragment\EsiFragmentRenderer A Symfony\Component\HttpKernel\Fragment\EsiFragmentRenderer instance.
     */
    protected function getFragment_Renderer_EsiService()
    {
        $this->services['fragment.renderer.esi'] = $instance = new \Symfony\Component\HttpKernel\Fragment\EsiFragmentRenderer(NULL, $this->get('fragment.renderer.inline'), $this->get('uri_signer'));

        $instance->setFragmentPath('/_fragment');

        return $instance;
    }

    /**
     * Gets the 'fragment.renderer.hinclude' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Symfony\Bundle\FrameworkBundle\Fragment\ContainerAwareHIncludeFragmentRenderer A Symfony\Bundle\FrameworkBundle\Fragment\ContainerAwareHIncludeFragmentRenderer instance.
     */
    protected function getFragment_Renderer_HincludeService()
    {
        $this->services['fragment.renderer.hinclude'] = $instance = new \Symfony\Bundle\FrameworkBundle\Fragment\ContainerAwareHIncludeFragmentRenderer($this, $this->get('uri_signer'), NULL);

        $instance->setFragmentPath('/_fragment');

        return $instance;
    }

    /**
     * Gets the 'fragment.renderer.inline' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Symfony\Component\HttpKernel\Fragment\InlineFragmentRenderer A Symfony\Component\HttpKernel\Fragment\InlineFragmentRenderer instance.
     */
    protected function getFragment_Renderer_InlineService()
    {
        $this->services['fragment.renderer.inline'] = $instance = new \Symfony\Component\HttpKernel\Fragment\InlineFragmentRenderer($this->get('http_kernel'), $this->get('debug.event_dispatcher'));

        $instance->setFragmentPath('/_fragment');

        return $instance;
    }

    /**
     * Gets the 'fragment.renderer.ssi' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Symfony\Component\HttpKernel\Fragment\SsiFragmentRenderer A Symfony\Component\HttpKernel\Fragment\SsiFragmentRenderer instance.
     */
    protected function getFragment_Renderer_SsiService()
    {
        $this->services['fragment.renderer.ssi'] = $instance = new \Symfony\Component\HttpKernel\Fragment\SsiFragmentRenderer(NULL, $this->get('fragment.renderer.inline'), $this->get('uri_signer'));

        $instance->setFragmentPath('/_fragment');

        return $instance;
    }

    /**
     * Gets the 'http_kernel' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Symfony\Component\HttpKernel\DependencyInjection\ContainerAwareHttpKernel A Symfony\Component\HttpKernel\DependencyInjection\ContainerAwareHttpKernel instance.
     */
    protected function getHttpKernelService()
    {
        return $this->services['http_kernel'] = new \Symfony\Component\HttpKernel\DependencyInjection\ContainerAwareHttpKernel($this->get('debug.event_dispatcher'), $this, $this->get('debug.controller_resolver'), $this->get('request_stack'));
    }

    /**
     * Gets the 'image.handling' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Gregwar\ImageBundle\Services\ImageHandling A Gregwar\ImageBundle\Services\ImageHandling instance.
     */
    protected function getImage_HandlingService()
    {
        return $this->services['image.handling'] = new \Gregwar\ImageBundle\Services\ImageHandling('my_cache_image_dir', NULL, 'Gregwar\\ImageBundle\\ImageHandler', $this, $this->get('file_locator'), false, 'web/bundles/moocmooc/ApprenantAssets/img/defaut.jpg');
    }

    /**
     * Gets the 'kernel' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @throws RuntimeException always since this service is expected to be injected dynamically
     */
    protected function getKernelService()
    {
        throw new RuntimeException('You have requested a synthetic service ("kernel"). The DIC does not know how to construct this service.');
    }

    /**
     * Gets the 'locale_listener' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Symfony\Component\HttpKernel\EventListener\LocaleListener A Symfony\Component\HttpKernel\EventListener\LocaleListener instance.
     */
    protected function getLocaleListenerService()
    {
        return $this->services['locale_listener'] = new \Symfony\Component\HttpKernel\EventListener\LocaleListener('fr', $this->get('router', ContainerInterface::NULL_ON_INVALID_REFERENCE), $this->get('request_stack'));
    }

    /**
     * Gets the 'logger' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Symfony\Bridge\Monolog\Logger A Symfony\Bridge\Monolog\Logger instance.
     */
    protected function getLoggerService()
    {
        $this->services['logger'] = $instance = new \Symfony\Bridge\Monolog\Logger('app');

        $instance->useMicrosecondTimestamps(true);
        $instance->pushHandler($this->get('monolog.handler.console'));
        $instance->pushHandler($this->get('monolog.handler.main'));
        $instance->pushHandler($this->get('monolog.handler.debug'));

        return $instance;
    }

    /**
     * Gets the 'monolog.handler.console' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Symfony\Bridge\Monolog\Handler\ConsoleHandler A Symfony\Bridge\Monolog\Handler\ConsoleHandler instance.
     */
    protected function getMonolog_Handler_ConsoleService()
    {
        return $this->services['monolog.handler.console'] = new \Symfony\Bridge\Monolog\Handler\ConsoleHandler(NULL, false, array(2 => 200, 3 => 100, 1 => 300, 4 => 100));
    }

    /**
     * Gets the 'monolog.handler.console_very_verbose' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Symfony\Bridge\Monolog\Handler\ConsoleHandler A Symfony\Bridge\Monolog\Handler\ConsoleHandler instance.
     */
    protected function getMonolog_Handler_ConsoleVeryVerboseService()
    {
        return $this->services['monolog.handler.console_very_verbose'] = new \Symfony\Bridge\Monolog\Handler\ConsoleHandler(NULL, false, array(2 => 250, 3 => 250, 4 => 100, 1 => 300));
    }

    /**
     * Gets the 'monolog.handler.debug' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Symfony\Bridge\Monolog\Handler\DebugHandler A Symfony\Bridge\Monolog\Handler\DebugHandler instance.
     */
    protected function getMonolog_Handler_DebugService()
    {
        return $this->services['monolog.handler.debug'] = new \Symfony\Bridge\Monolog\Handler\DebugHandler(100, true);
    }

    /**
     * Gets the 'monolog.handler.main' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Monolog\Handler\StreamHandler A Monolog\Handler\StreamHandler instance.
     */
    protected function getMonolog_Handler_MainService()
    {
        return $this->services['monolog.handler.main'] = new \Monolog\Handler\StreamHandler(($this->targetDirs[2].'\\logs/dev.log'), 100, true, NULL);
    }

    /**
     * Gets the 'monolog.logger.assetic' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Symfony\Bridge\Monolog\Logger A Symfony\Bridge\Monolog\Logger instance.
     */
    protected function getMonolog_Logger_AsseticService()
    {
        $this->services['monolog.logger.assetic'] = $instance = new \Symfony\Bridge\Monolog\Logger('assetic');

        $instance->pushHandler($this->get('monolog.handler.console'));
        $instance->pushHandler($this->get('monolog.handler.main'));
        $instance->pushHandler($this->get('monolog.handler.debug'));

        return $instance;
    }

    /**
     * Gets the 'monolog.logger.doctrine' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Symfony\Bridge\Monolog\Logger A Symfony\Bridge\Monolog\Logger instance.
     */
    protected function getMonolog_Logger_DoctrineService()
    {
        $this->services['monolog.logger.doctrine'] = $instance = new \Symfony\Bridge\Monolog\Logger('doctrine');

        $instance->pushHandler($this->get('monolog.handler.console_very_verbose'));
        $instance->pushHandler($this->get('monolog.handler.main'));
        $instance->pushHandler($this->get('monolog.handler.debug'));

        return $instance;
    }

    /**
     * Gets the 'monolog.logger.event' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Symfony\Bridge\Monolog\Logger A Symfony\Bridge\Monolog\Logger instance.
     */
    protected function getMonolog_Logger_EventService()
    {
        $this->services['monolog.logger.event'] = $instance = new \Symfony\Bridge\Monolog\Logger('event');

        $instance->pushHandler($this->get('monolog.handler.console'));
        $instance->pushHandler($this->get('monolog.handler.main'));
        $instance->pushHandler($this->get('monolog.handler.debug'));

        return $instance;
    }

    /**
     * Gets the 'monolog.logger.php' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Symfony\Bridge\Monolog\Logger A Symfony\Bridge\Monolog\Logger instance.
     */
    protected function getMonolog_Logger_PhpService()
    {
        $this->services['monolog.logger.php'] = $instance = new \Symfony\Bridge\Monolog\Logger('php');

        $instance->pushHandler($this->get('monolog.handler.console'));
        $instance->pushHandler($this->get('monolog.handler.main'));
        $instance->pushHandler($this->get('monolog.handler.debug'));

        return $instance;
    }

    /**
     * Gets the 'monolog.logger.profiler' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Symfony\Bridge\Monolog\Logger A Symfony\Bridge\Monolog\Logger instance.
     */
    protected function getMonolog_Logger_ProfilerService()
    {
        $this->services['monolog.logger.profiler'] = $instance = new \Symfony\Bridge\Monolog\Logger('profiler');

        $instance->pushHandler($this->get('monolog.handler.console'));
        $instance->pushHandler($this->get('monolog.handler.main'));
        $instance->pushHandler($this->get('monolog.handler.debug'));

        return $instance;
    }

    /**
     * Gets the 'monolog.logger.request' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Symfony\Bridge\Monolog\Logger A Symfony\Bridge\Monolog\Logger instance.
     */
    protected function getMonolog_Logger_RequestService()
    {
        $this->services['monolog.logger.request'] = $instance = new \Symfony\Bridge\Monolog\Logger('request');

        $instance->pushHandler($this->get('monolog.handler.console'));
        $instance->pushHandler($this->get('monolog.handler.main'));
        $instance->pushHandler($this->get('monolog.handler.debug'));

        return $instance;
    }

    /**
     * Gets the 'monolog.logger.router' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Symfony\Bridge\Monolog\Logger A Symfony\Bridge\Monolog\Logger instance.
     */
    protected function getMonolog_Logger_RouterService()
    {
        $this->services['monolog.logger.router'] = $instance = new \Symfony\Bridge\Monolog\Logger('router');

        $instance->pushHandler($this->get('monolog.handler.console'));
        $instance->pushHandler($this->get('monolog.handler.main'));
        $instance->pushHandler($this->get('monolog.handler.debug'));

        return $instance;
    }

    /**
     * Gets the 'monolog.logger.security' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Symfony\Bridge\Monolog\Logger A Symfony\Bridge\Monolog\Logger instance.
     */
    protected function getMonolog_Logger_SecurityService()
    {
        $this->services['monolog.logger.security'] = $instance = new \Symfony\Bridge\Monolog\Logger('security');

        $instance->pushHandler($this->get('monolog.handler.console'));
        $instance->pushHandler($this->get('monolog.handler.main'));
        $instance->pushHandler($this->get('monolog.handler.debug'));

        return $instance;
    }

    /**
     * Gets the 'monolog.logger.templating' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Symfony\Bridge\Monolog\Logger A Symfony\Bridge\Monolog\Logger instance.
     */
    protected function getMonolog_Logger_TemplatingService()
    {
        $this->services['monolog.logger.templating'] = $instance = new \Symfony\Bridge\Monolog\Logger('templating');

        $instance->pushHandler($this->get('monolog.handler.console'));
        $instance->pushHandler($this->get('monolog.handler.main'));
        $instance->pushHandler($this->get('monolog.handler.debug'));

        return $instance;
    }

    /**
     * Gets the 'monolog.logger.translation' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Symfony\Bridge\Monolog\Logger A Symfony\Bridge\Monolog\Logger instance.
     */
    protected function getMonolog_Logger_TranslationService()
    {
        $this->services['monolog.logger.translation'] = $instance = new \Symfony\Bridge\Monolog\Logger('translation');

        $instance->pushHandler($this->get('monolog.handler.console'));
        $instance->pushHandler($this->get('monolog.handler.main'));
        $instance->pushHandler($this->get('monolog.handler.debug'));

        return $instance;
    }

    /**
     * Gets the 'nomaya.socialbarhelper' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Nomaya\SocialBundle\Helpers\SocialBarHelper A Nomaya\SocialBundle\Helpers\SocialBarHelper instance.
     */
    protected function getNomaya_SocialbarhelperService()
    {
        return $this->services['nomaya.socialbarhelper'] = new \Nomaya\SocialBundle\Helpers\SocialBarHelper($this->get('templating'));
    }

    /**
     * Gets the 'nomaya.sociallinkshelper' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Nomaya\SocialBundle\Helpers\SocialLinksHelper A Nomaya\SocialBundle\Helpers\SocialLinksHelper instance.
     */
    protected function getNomaya_SociallinkshelperService()
    {
        return $this->services['nomaya.sociallinkshelper'] = new \Nomaya\SocialBundle\Helpers\SocialLinksHelper($this->get('templating'));
    }

    /**
     * Gets the 'profiler' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Symfony\Component\HttpKernel\Profiler\Profiler A Symfony\Component\HttpKernel\Profiler\Profiler instance.
     */
    protected function getProfilerService()
    {
        $a = $this->get('monolog.logger.profiler', ContainerInterface::NULL_ON_INVALID_REFERENCE);
        $b = $this->get('kernel', ContainerInterface::NULL_ON_INVALID_REFERENCE);

        $c = new \Symfony\Component\HttpKernel\DataCollector\ConfigDataCollector();
        if ($this->has('kernel')) {
            $c->setKernel($b);
        }

        $d = new \Doctrine\Bundle\DoctrineBundle\DataCollector\DoctrineDataCollector($this->get('doctrine'));
        $d->addLogger('default', $this->get('doctrine.dbal.logger.profiling.default'));

        $this->services['profiler'] = $instance = new \Symfony\Component\HttpKernel\Profiler\Profiler(new \Symfony\Component\HttpKernel\Profiler\FileProfilerStorage(('file:'.__DIR__.'/profiler'), '', '', 86400), $a);

        $instance->add($c);
        $instance->add($this->get('data_collector.request'));
        $instance->add(new \Symfony\Bundle\FrameworkBundle\DataCollector\AjaxDataCollector());
        $instance->add(new \Symfony\Component\HttpKernel\DataCollector\ExceptionDataCollector());
        $instance->add(new \Symfony\Component\HttpKernel\DataCollector\EventDataCollector($this->get('debug.event_dispatcher', ContainerInterface::NULL_ON_INVALID_REFERENCE)));
        $instance->add(new \Symfony\Component\HttpKernel\DataCollector\LoggerDataCollector($a));
        $instance->add(new \Symfony\Component\HttpKernel\DataCollector\TimeDataCollector($b, $this->get('debug.stopwatch', ContainerInterface::NULL_ON_INVALID_REFERENCE)));
        $instance->add(new \Symfony\Component\HttpKernel\DataCollector\MemoryDataCollector());
        $instance->add($this->get('data_collector.router'));
        $instance->add($this->get('data_collector.form'));
        $instance->add($d);
        $instance->add(new \Symfony\Bundle\SwiftmailerBundle\DataCollector\MessageDataCollector($this));
        $instance->add(new \Symfony\Bundle\SecurityBundle\DataCollector\SecurityDataCollector($this->get('security.token_storage', ContainerInterface::NULL_ON_INVALID_REFERENCE)));
        $instance->add(new \JavierEguiluz\Bundle\EasyAdminBundle\DataCollector\EasyAdminDataCollector($this->get('easyadmin.configurator')));
        $instance->add($this->get('data_collector.dump'));

        return $instance;
    }

    /**
     * Gets the 'profiler_listener' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Symfony\Component\HttpKernel\EventListener\ProfilerListener A Symfony\Component\HttpKernel\EventListener\ProfilerListener instance.
     */
    protected function getProfilerListenerService()
    {
        return $this->services['profiler_listener'] = new \Symfony\Component\HttpKernel\EventListener\ProfilerListener($this->get('profiler'), NULL, false, false, $this->get('request_stack'));
    }

    /**
     * Gets the 'property_accessor' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Symfony\Component\PropertyAccess\PropertyAccessor A Symfony\Component\PropertyAccess\PropertyAccessor instance.
     */
    protected function getPropertyAccessorService()
    {
        return $this->services['property_accessor'] = new \Symfony\Component\PropertyAccess\PropertyAccessor(false, false);
    }

    /**
     * Gets the 'request' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @throws RuntimeException always since this service is expected to be injected dynamically
     * @throws InactiveScopeException when the 'request' service is requested while the 'request' scope is not active
     */
    protected function getRequestService()
    {
        if (!isset($this->scopedServices['request'])) {
            throw new InactiveScopeException('request', 'request');
        }

        throw new RuntimeException('You have requested a synthetic service ("request"). The DIC does not know how to construct this service.');
    }

    /**
     * Gets the 'request_stack' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Symfony\Component\HttpFoundation\RequestStack A Symfony\Component\HttpFoundation\RequestStack instance.
     */
    protected function getRequestStackService()
    {
        return $this->services['request_stack'] = new \Symfony\Component\HttpFoundation\RequestStack();
    }

    /**
     * Gets the 'response_listener' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Symfony\Component\HttpKernel\EventListener\ResponseListener A Symfony\Component\HttpKernel\EventListener\ResponseListener instance.
     */
    protected function getResponseListenerService()
    {
        return $this->services['response_listener'] = new \Symfony\Component\HttpKernel\EventListener\ResponseListener('UTF-8');
    }

    /**
     * Gets the 'router' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Symfony\Bundle\FrameworkBundle\Routing\Router A Symfony\Bundle\FrameworkBundle\Routing\Router instance.
     */
    protected function getRouterService()
    {
        return $this->services['router'] = new \Symfony\Bundle\FrameworkBundle\Routing\Router($this, ($this->targetDirs[2].'/config/routing_dev.yml'), array('cache_dir' => __DIR__, 'debug' => true, 'generator_class' => 'Symfony\\Component\\Routing\\Generator\\UrlGenerator', 'generator_base_class' => 'Symfony\\Component\\Routing\\Generator\\UrlGenerator', 'generator_dumper_class' => 'Symfony\\Component\\Routing\\Generator\\Dumper\\PhpGeneratorDumper', 'generator_cache_class' => 'appDevUrlGenerator', 'matcher_class' => 'Symfony\\Bundle\\FrameworkBundle\\Routing\\RedirectableUrlMatcher', 'matcher_base_class' => 'Symfony\\Bundle\\FrameworkBundle\\Routing\\RedirectableUrlMatcher', 'matcher_dumper_class' => 'Symfony\\Component\\Routing\\Matcher\\Dumper\\PhpMatcherDumper', 'matcher_cache_class' => 'appDevUrlMatcher', 'strict_requirements' => true), $this->get('router.request_context', ContainerInterface::NULL_ON_INVALID_REFERENCE), $this->get('monolog.logger.router', ContainerInterface::NULL_ON_INVALID_REFERENCE));
    }

    /**
     * Gets the 'router_listener' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Symfony\Component\HttpKernel\EventListener\RouterListener A Symfony\Component\HttpKernel\EventListener\RouterListener instance.
     */
    protected function getRouterListenerService()
    {
        return $this->services['router_listener'] = new \Symfony\Component\HttpKernel\EventListener\RouterListener($this->get('router'), $this->get('router.request_context', ContainerInterface::NULL_ON_INVALID_REFERENCE), $this->get('monolog.logger.request', ContainerInterface::NULL_ON_INVALID_REFERENCE), $this->get('request_stack'));
    }

    /**
     * Gets the 'routing.loader' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Symfony\Bundle\FrameworkBundle\Routing\DelegatingLoader A Symfony\Bundle\FrameworkBundle\Routing\DelegatingLoader instance.
     */
    protected function getRouting_LoaderService()
    {
        $a = $this->get('file_locator');
        $b = $this->get('annotation_reader');

        $c = new \Sensio\Bundle\FrameworkExtraBundle\Routing\AnnotatedRouteControllerLoader($b);

        $d = new \Symfony\Component\Config\Loader\LoaderResolver();
        $d->addLoader(new \Symfony\Component\Routing\Loader\XmlFileLoader($a));
        $d->addLoader(new \Symfony\Component\Routing\Loader\YamlFileLoader($a));
        $d->addLoader(new \Symfony\Component\Routing\Loader\PhpFileLoader($a));
        $d->addLoader(new \Symfony\Component\Routing\Loader\AnnotationDirectoryLoader($a, $c));
        $d->addLoader(new \Symfony\Component\Routing\Loader\AnnotationFileLoader($a, $c));
        $d->addLoader($c);

        return $this->services['routing.loader'] = new \Symfony\Bundle\FrameworkBundle\Routing\DelegatingLoader($this->get('controller_name_converter'), $this->get('monolog.logger.router', ContainerInterface::NULL_ON_INVALID_REFERENCE), $d);
    }

    /**
     * Gets the 'security.authentication_utils' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Symfony\Component\Security\Http\Authentication\AuthenticationUtils A Symfony\Component\Security\Http\Authentication\AuthenticationUtils instance.
     */
    protected function getSecurity_AuthenticationUtilsService()
    {
        return $this->services['security.authentication_utils'] = new \Symfony\Component\Security\Http\Authentication\AuthenticationUtils($this->get('request_stack'));
    }

    /**
     * Gets the 'security.authorization_checker' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Symfony\Component\Security\Core\Authorization\AuthorizationChecker A Symfony\Component\Security\Core\Authorization\AuthorizationChecker instance.
     */
    protected function getSecurity_AuthorizationCheckerService()
    {
        return $this->services['security.authorization_checker'] = new \Symfony\Component\Security\Core\Authorization\AuthorizationChecker($this->get('security.token_storage'), $this->get('security.authentication.manager'), $this->get('security.access.decision_manager'), false);
    }

    /**
     * Gets the 'security.context' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Symfony\Component\Security\Core\SecurityContext A Symfony\Component\Security\Core\SecurityContext instance.
     */
    protected function getSecurity_ContextService()
    {
        return $this->services['security.context'] = new \Symfony\Component\Security\Core\SecurityContext($this->get('security.token_storage'), $this->get('security.authorization_checker'));
    }

    /**
     * Gets the 'security.csrf.token_manager' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Symfony\Component\Security\Csrf\CsrfTokenManager A Symfony\Component\Security\Csrf\CsrfTokenManager instance.
     */
    protected function getSecurity_Csrf_TokenManagerService()
    {
        return $this->services['security.csrf.token_manager'] = new \Symfony\Component\Security\Csrf\CsrfTokenManager(new \Symfony\Component\Security\Csrf\TokenGenerator\UriSafeTokenGenerator($this->get('security.secure_random')), new \Symfony\Component\Security\Csrf\TokenStorage\SessionTokenStorage($this->get('session')));
    }

    /**
     * Gets the 'security.encoder_factory' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Symfony\Component\Security\Core\Encoder\EncoderFactory A Symfony\Component\Security\Core\Encoder\EncoderFactory instance.
     */
    protected function getSecurity_EncoderFactoryService()
    {
        return $this->services['security.encoder_factory'] = new \Symfony\Component\Security\Core\Encoder\EncoderFactory(array('Symfony\\Component\\Security\\Core\\User\\User' => array('class' => 'Symfony\\Component\\Security\\Core\\Encoder\\PlaintextPasswordEncoder', 'arguments' => array(0 => false))));
    }

    /**
     * Gets the 'security.firewall' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Symfony\Component\Security\Http\Firewall A Symfony\Component\Security\Http\Firewall instance.
     */
    protected function getSecurity_FirewallService()
    {
        return $this->services['security.firewall'] = new \Symfony\Component\Security\Http\Firewall(new \Symfony\Bundle\SecurityBundle\Security\FirewallMap($this, array('security.firewall.map.context.dev' => new \Symfony\Component\HttpFoundation\RequestMatcher('^/(_(profiler|wdt)|css|images|js)/'), 'security.firewall.map.context.demo_login' => new \Symfony\Component\HttpFoundation\RequestMatcher('^/demo/secured/login$'), 'security.firewall.map.context.demo_secured_area' => new \Symfony\Component\HttpFoundation\RequestMatcher('^/demo/secured/'))), $this->get('debug.event_dispatcher'));
    }

    /**
     * Gets the 'security.firewall.map.context.demo_login' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Symfony\Bundle\SecurityBundle\Security\FirewallContext A Symfony\Bundle\SecurityBundle\Security\FirewallContext instance.
     */
    protected function getSecurity_Firewall_Map_Context_DemoLoginService()
    {
        return $this->services['security.firewall.map.context.demo_login'] = new \Symfony\Bundle\SecurityBundle\Security\FirewallContext(array(), NULL);
    }

    /**
     * Gets the 'security.firewall.map.context.demo_secured_area' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Symfony\Bundle\SecurityBundle\Security\FirewallContext A Symfony\Bundle\SecurityBundle\Security\FirewallContext instance.
     */
    protected function getSecurity_Firewall_Map_Context_DemoSecuredAreaService()
    {
        $a = $this->get('monolog.logger.security', ContainerInterface::NULL_ON_INVALID_REFERENCE);
        $b = $this->get('security.context');
        $c = $this->get('debug.event_dispatcher', ContainerInterface::NULL_ON_INVALID_REFERENCE);
        $d = $this->get('router', ContainerInterface::NULL_ON_INVALID_REFERENCE);
        $e = $this->get('http_kernel');
        $f = $this->get('security.authentication.manager');

        $g = new \Symfony\Component\Security\Http\AccessMap();

        $h = new \Symfony\Component\Security\Http\HttpUtils($d, $d);

        $i = new \Symfony\Component\Security\Http\Firewall\LogoutListener($b, $h, new \Symfony\Component\Security\Http\Logout\DefaultLogoutSuccessHandler($h, '_demo'), array('csrf_parameter' => '_csrf_token', 'intention' => 'logout', 'logout_path' => '_demo_logout'));
        $i->addHandler(new \Symfony\Component\Security\Http\Logout\SessionLogoutHandler());

        $j = new \Symfony\Component\Security\Http\Authentication\DefaultAuthenticationSuccessHandler($h, array());
        $j->setOptions(array('login_path' => '_demo_login', 'always_use_default_target_path' => false, 'default_target_path' => '/', 'target_path_parameter' => '_target_path', 'use_referer' => false));
        $j->setProviderKey('demo_secured_area');

        $k = new \Symfony\Component\Security\Http\Authentication\DefaultAuthenticationFailureHandler($e, $h, array(), $a);
        $k->setOptions(array('login_path' => '_demo_login', 'failure_path' => NULL, 'failure_forward' => false, 'failure_path_parameter' => '_failure_path'));

        return $this->services['security.firewall.map.context.demo_secured_area'] = new \Symfony\Bundle\SecurityBundle\Security\FirewallContext(array(0 => new \Symfony\Component\Security\Http\Firewall\ChannelListener($g, new \Symfony\Component\Security\Http\EntryPoint\RetryAuthenticationEntryPoint(80, 443), $a), 1 => new \Symfony\Component\Security\Http\Firewall\ContextListener($b, array(0 => $this->get('security.user.provider.concrete.in_memory')), 'demo_secured_area', $a, $c), 2 => $i, 3 => new \Symfony\Component\Security\Http\Firewall\UsernamePasswordFormAuthenticationListener($b, $f, new \Symfony\Component\Security\Http\Session\SessionAuthenticationStrategy('migrate'), $h, 'demo_secured_area', $j, $k, array('check_path' => '_demo_security_check', 'use_forward' => false, 'require_previous_session' => true, 'username_parameter' => '_username', 'password_parameter' => '_password', 'csrf_parameter' => '_csrf_token', 'intention' => 'authenticate', 'post_only' => true), $a, $c, NULL), 4 => new \Symfony\Component\Security\Http\Firewall\AccessListener($b, $this->get('security.access.decision_manager'), $g, $f)), new \Symfony\Component\Security\Http\Firewall\ExceptionListener($b, $this->get('security.authentication.trust_resolver'), $h, 'demo_secured_area', new \Symfony\Component\Security\Http\EntryPoint\FormAuthenticationEntryPoint($e, $h, '_demo_login', false), NULL, NULL, $a));
    }

    /**
     * Gets the 'security.firewall.map.context.dev' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Symfony\Bundle\SecurityBundle\Security\FirewallContext A Symfony\Bundle\SecurityBundle\Security\FirewallContext instance.
     */
    protected function getSecurity_Firewall_Map_Context_DevService()
    {
        return $this->services['security.firewall.map.context.dev'] = new \Symfony\Bundle\SecurityBundle\Security\FirewallContext(array(), NULL);
    }

    /**
     * Gets the 'security.password_encoder' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Symfony\Component\Security\Core\Encoder\UserPasswordEncoder A Symfony\Component\Security\Core\Encoder\UserPasswordEncoder instance.
     */
    protected function getSecurity_PasswordEncoderService()
    {
        return $this->services['security.password_encoder'] = new \Symfony\Component\Security\Core\Encoder\UserPasswordEncoder($this->get('security.encoder_factory'));
    }

    /**
     * Gets the 'security.rememberme.response_listener' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Symfony\Component\Security\Http\RememberMe\ResponseListener A Symfony\Component\Security\Http\RememberMe\ResponseListener instance.
     */
    protected function getSecurity_Rememberme_ResponseListenerService()
    {
        return $this->services['security.rememberme.response_listener'] = new \Symfony\Component\Security\Http\RememberMe\ResponseListener();
    }

    /**
     * Gets the 'security.secure_random' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Symfony\Component\Security\Core\Util\SecureRandom A Symfony\Component\Security\Core\Util\SecureRandom instance.
     */
    protected function getSecurity_SecureRandomService()
    {
        return $this->services['security.secure_random'] = new \Symfony\Component\Security\Core\Util\SecureRandom((__DIR__.'/secure_random.seed'), $this->get('monolog.logger.security', ContainerInterface::NULL_ON_INVALID_REFERENCE));
    }

    /**
     * Gets the 'security.token_storage' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Symfony\Component\Security\Core\Authentication\Token\Storage\TokenStorage A Symfony\Component\Security\Core\Authentication\Token\Storage\TokenStorage instance.
     */
    protected function getSecurity_TokenStorageService()
    {
        return $this->services['security.token_storage'] = new \Symfony\Component\Security\Core\Authentication\Token\Storage\TokenStorage();
    }

    /**
     * Gets the 'security.validator.user_password' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Symfony\Component\Security\Core\Validator\Constraints\UserPasswordValidator A Symfony\Component\Security\Core\Validator\Constraints\UserPasswordValidator instance.
     */
    protected function getSecurity_Validator_UserPasswordService()
    {
        return $this->services['security.validator.user_password'] = new \Symfony\Component\Security\Core\Validator\Constraints\UserPasswordValidator($this->get('security.context'), $this->get('security.encoder_factory'));
    }

    /**
     * Gets the 'sensio_distribution.security_checker' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \SensioLabs\Security\SecurityChecker A SensioLabs\Security\SecurityChecker instance.
     */
    protected function getSensioDistribution_SecurityCheckerService()
    {
        return $this->services['sensio_distribution.security_checker'] = new \SensioLabs\Security\SecurityChecker();
    }

    /**
     * Gets the 'sensio_distribution.security_checker.command' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \SensioLabs\Security\Command\SecurityCheckerCommand A SensioLabs\Security\Command\SecurityCheckerCommand instance.
     */
    protected function getSensioDistribution_SecurityChecker_CommandService()
    {
        return $this->services['sensio_distribution.security_checker.command'] = new \SensioLabs\Security\Command\SecurityCheckerCommand($this->get('sensio_distribution.security_checker'));
    }

    /**
     * Gets the 'sensio_distribution.webconfigurator' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Sensio\Bundle\DistributionBundle\Configurator\Configurator A Sensio\Bundle\DistributionBundle\Configurator\Configurator instance.
     */
    protected function getSensioDistribution_WebconfiguratorService()
    {
        $this->services['sensio_distribution.webconfigurator'] = $instance = new \Sensio\Bundle\DistributionBundle\Configurator\Configurator($this->targetDirs[2]);

        $instance->addStep(new \Sensio\Bundle\DistributionBundle\Configurator\Step\DoctrineStep(), 10);
        $instance->addStep(new \Sensio\Bundle\DistributionBundle\Configurator\Step\SecretStep(), 0);

        return $instance;
    }

    /**
     * Gets the 'sensio_framework_extra.cache.listener' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Sensio\Bundle\FrameworkExtraBundle\EventListener\HttpCacheListener A Sensio\Bundle\FrameworkExtraBundle\EventListener\HttpCacheListener instance.
     */
    protected function getSensioFrameworkExtra_Cache_ListenerService()
    {
        return $this->services['sensio_framework_extra.cache.listener'] = new \Sensio\Bundle\FrameworkExtraBundle\EventListener\HttpCacheListener();
    }

    /**
     * Gets the 'sensio_framework_extra.controller.listener' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Sensio\Bundle\FrameworkExtraBundle\EventListener\ControllerListener A Sensio\Bundle\FrameworkExtraBundle\EventListener\ControllerListener instance.
     */
    protected function getSensioFrameworkExtra_Controller_ListenerService()
    {
        return $this->services['sensio_framework_extra.controller.listener'] = new \Sensio\Bundle\FrameworkExtraBundle\EventListener\ControllerListener($this->get('annotation_reader'));
    }

    /**
     * Gets the 'sensio_framework_extra.converter.datetime' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Sensio\Bundle\FrameworkExtraBundle\Request\ParamConverter\DateTimeParamConverter A Sensio\Bundle\FrameworkExtraBundle\Request\ParamConverter\DateTimeParamConverter instance.
     */
    protected function getSensioFrameworkExtra_Converter_DatetimeService()
    {
        return $this->services['sensio_framework_extra.converter.datetime'] = new \Sensio\Bundle\FrameworkExtraBundle\Request\ParamConverter\DateTimeParamConverter();
    }

    /**
     * Gets the 'sensio_framework_extra.converter.doctrine.orm' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Sensio\Bundle\FrameworkExtraBundle\Request\ParamConverter\DoctrineParamConverter A Sensio\Bundle\FrameworkExtraBundle\Request\ParamConverter\DoctrineParamConverter instance.
     */
    protected function getSensioFrameworkExtra_Converter_Doctrine_OrmService()
    {
        return $this->services['sensio_framework_extra.converter.doctrine.orm'] = new \Sensio\Bundle\FrameworkExtraBundle\Request\ParamConverter\DoctrineParamConverter($this->get('doctrine', ContainerInterface::NULL_ON_INVALID_REFERENCE));
    }

    /**
     * Gets the 'sensio_framework_extra.converter.listener' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Sensio\Bundle\FrameworkExtraBundle\EventListener\ParamConverterListener A Sensio\Bundle\FrameworkExtraBundle\EventListener\ParamConverterListener instance.
     */
    protected function getSensioFrameworkExtra_Converter_ListenerService()
    {
        return $this->services['sensio_framework_extra.converter.listener'] = new \Sensio\Bundle\FrameworkExtraBundle\EventListener\ParamConverterListener($this->get('sensio_framework_extra.converter.manager'), true);
    }

    /**
     * Gets the 'sensio_framework_extra.converter.manager' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Sensio\Bundle\FrameworkExtraBundle\Request\ParamConverter\ParamConverterManager A Sensio\Bundle\FrameworkExtraBundle\Request\ParamConverter\ParamConverterManager instance.
     */
    protected function getSensioFrameworkExtra_Converter_ManagerService()
    {
        $this->services['sensio_framework_extra.converter.manager'] = $instance = new \Sensio\Bundle\FrameworkExtraBundle\Request\ParamConverter\ParamConverterManager();

        $instance->add($this->get('sensio_framework_extra.converter.doctrine.orm'), 0, 'doctrine.orm');
        $instance->add($this->get('sensio_framework_extra.converter.datetime'), 0, 'datetime');

        return $instance;
    }

    /**
     * Gets the 'sensio_framework_extra.security.listener' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Sensio\Bundle\FrameworkExtraBundle\EventListener\SecurityListener A Sensio\Bundle\FrameworkExtraBundle\EventListener\SecurityListener instance.
     */
    protected function getSensioFrameworkExtra_Security_ListenerService()
    {
        return $this->services['sensio_framework_extra.security.listener'] = new \Sensio\Bundle\FrameworkExtraBundle\EventListener\SecurityListener(NULL, new \Sensio\Bundle\FrameworkExtraBundle\Security\ExpressionLanguage(), $this->get('security.authentication.trust_resolver', ContainerInterface::NULL_ON_INVALID_REFERENCE), $this->get('security.role_hierarchy', ContainerInterface::NULL_ON_INVALID_REFERENCE), $this->get('security.token_storage', ContainerInterface::NULL_ON_INVALID_REFERENCE), $this->get('security.authorization_checker', ContainerInterface::NULL_ON_INVALID_REFERENCE));
    }

    /**
     * Gets the 'sensio_framework_extra.view.guesser' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Sensio\Bundle\FrameworkExtraBundle\Templating\TemplateGuesser A Sensio\Bundle\FrameworkExtraBundle\Templating\TemplateGuesser instance.
     */
    protected function getSensioFrameworkExtra_View_GuesserService()
    {
        return $this->services['sensio_framework_extra.view.guesser'] = new \Sensio\Bundle\FrameworkExtraBundle\Templating\TemplateGuesser($this->get('kernel'));
    }

    /**
     * Gets the 'sensio_framework_extra.view.listener' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Sensio\Bundle\FrameworkExtraBundle\EventListener\TemplateListener A Sensio\Bundle\FrameworkExtraBundle\EventListener\TemplateListener instance.
     */
    protected function getSensioFrameworkExtra_View_ListenerService()
    {
        return $this->services['sensio_framework_extra.view.listener'] = new \Sensio\Bundle\FrameworkExtraBundle\EventListener\TemplateListener($this);
    }

    /**
     * Gets the 'service_container' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @throws RuntimeException always since this service is expected to be injected dynamically
     */
    protected function getServiceContainerService()
    {
        throw new RuntimeException('You have requested a synthetic service ("service_container"). The DIC does not know how to construct this service.');
    }

    /**
     * Gets the 'session' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Symfony\Component\HttpFoundation\Session\Session A Symfony\Component\HttpFoundation\Session\Session instance.
     */
    protected function getSessionService()
    {
        return $this->services['session'] = new \Symfony\Component\HttpFoundation\Session\Session($this->get('session.storage.native'), new \Symfony\Component\HttpFoundation\Session\Attribute\AttributeBag(), new \Symfony\Component\HttpFoundation\Session\Flash\FlashBag());
    }

    /**
     * Gets the 'session.save_listener' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Symfony\Component\HttpKernel\EventListener\SaveSessionListener A Symfony\Component\HttpKernel\EventListener\SaveSessionListener instance.
     */
    protected function getSession_SaveListenerService()
    {
        return $this->services['session.save_listener'] = new \Symfony\Component\HttpKernel\EventListener\SaveSessionListener();
    }

    /**
     * Gets the 'session.storage.filesystem' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Symfony\Component\HttpFoundation\Session\Storage\MockFileSessionStorage A Symfony\Component\HttpFoundation\Session\Storage\MockFileSessionStorage instance.
     */
    protected function getSession_Storage_FilesystemService()
    {
        return $this->services['session.storage.filesystem'] = new \Symfony\Component\HttpFoundation\Session\Storage\MockFileSessionStorage((__DIR__.'/sessions'), 'MOCKSESSID', $this->get('session.storage.metadata_bag'));
    }

    /**
     * Gets the 'session.storage.native' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Symfony\Component\HttpFoundation\Session\Storage\NativeSessionStorage A Symfony\Component\HttpFoundation\Session\Storage\NativeSessionStorage instance.
     */
    protected function getSession_Storage_NativeService()
    {
        return $this->services['session.storage.native'] = new \Symfony\Component\HttpFoundation\Session\Storage\NativeSessionStorage(array('gc_probability' => 1), NULL, $this->get('session.storage.metadata_bag'));
    }

    /**
     * Gets the 'session.storage.php_bridge' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Symfony\Component\HttpFoundation\Session\Storage\PhpBridgeSessionStorage A Symfony\Component\HttpFoundation\Session\Storage\PhpBridgeSessionStorage instance.
     */
    protected function getSession_Storage_PhpBridgeService()
    {
        return $this->services['session.storage.php_bridge'] = new \Symfony\Component\HttpFoundation\Session\Storage\PhpBridgeSessionStorage(NULL, $this->get('session.storage.metadata_bag'));
    }

    /**
     * Gets the 'session_listener' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Symfony\Bundle\FrameworkBundle\EventListener\SessionListener A Symfony\Bundle\FrameworkBundle\EventListener\SessionListener instance.
     */
    protected function getSessionListenerService()
    {
        return $this->services['session_listener'] = new \Symfony\Bundle\FrameworkBundle\EventListener\SessionListener($this);
    }

    /**
     * Gets the 'star_rating.twig' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \blackknight467\StarRatingBundle\Extensions\StarRatingExtension A blackknight467\StarRatingBundle\Extensions\StarRatingExtension instance.
     */
    protected function getStarRating_TwigService()
    {
        return $this->services['star_rating.twig'] = new \blackknight467\StarRatingBundle\Extensions\StarRatingExtension($this);
    }

    /**
     * Gets the 'star_rating.type' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \blackknight467\StarRatingBundle\Form\RatingType A blackknight467\StarRatingBundle\Form\RatingType instance.
     */
    protected function getStarRating_TypeService()
    {
        return $this->services['star_rating.type'] = new \blackknight467\StarRatingBundle\Form\RatingType();
    }

    /**
     * Gets the 'streamed_response_listener' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Symfony\Component\HttpKernel\EventListener\StreamedResponseListener A Symfony\Component\HttpKernel\EventListener\StreamedResponseListener instance.
     */
    protected function getStreamedResponseListenerService()
    {
        return $this->services['streamed_response_listener'] = new \Symfony\Component\HttpKernel\EventListener\StreamedResponseListener();
    }

    /**
     * Gets the 'swiftmailer.email_sender.listener' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Symfony\Bundle\SwiftmailerBundle\EventListener\EmailSenderListener A Symfony\Bundle\SwiftmailerBundle\EventListener\EmailSenderListener instance.
     */
    protected function getSwiftmailer_EmailSender_ListenerService()
    {
        return $this->services['swiftmailer.email_sender.listener'] = new \Symfony\Bundle\SwiftmailerBundle\EventListener\EmailSenderListener($this, $this->get('logger', ContainerInterface::NULL_ON_INVALID_REFERENCE));
    }

    /**
     * Gets the 'swiftmailer.mailer.default' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Swift_Mailer A Swift_Mailer instance.
     */
    protected function getSwiftmailer_Mailer_DefaultService()
    {
        return $this->services['swiftmailer.mailer.default'] = new \Swift_Mailer($this->get('swiftmailer.mailer.default.transport'));
    }

    /**
     * Gets the 'swiftmailer.mailer.default.plugin.messagelogger' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Swift_Plugins_MessageLogger A Swift_Plugins_MessageLogger instance.
     */
    protected function getSwiftmailer_Mailer_Default_Plugin_MessageloggerService()
    {
        return $this->services['swiftmailer.mailer.default.plugin.messagelogger'] = new \Swift_Plugins_MessageLogger();
    }

    /**
     * Gets the 'swiftmailer.mailer.default.spool' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Swift_MemorySpool A Swift_MemorySpool instance.
     */
    protected function getSwiftmailer_Mailer_Default_SpoolService()
    {
        return $this->services['swiftmailer.mailer.default.spool'] = new \Swift_MemorySpool();
    }

    /**
     * Gets the 'swiftmailer.mailer.default.transport' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Swift_Transport_SpoolTransport A Swift_Transport_SpoolTransport instance.
     */
    protected function getSwiftmailer_Mailer_Default_TransportService()
    {
        $this->services['swiftmailer.mailer.default.transport'] = $instance = new \Swift_Transport_SpoolTransport($this->get('swiftmailer.mailer.default.transport.eventdispatcher'), $this->get('swiftmailer.mailer.default.spool'));

        $instance->registerPlugin($this->get('swiftmailer.mailer.default.plugin.messagelogger'));

        return $instance;
    }

    /**
     * Gets the 'swiftmailer.mailer.default.transport.real' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Swift_Transport_EsmtpTransport A Swift_Transport_EsmtpTransport instance.
     */
    protected function getSwiftmailer_Mailer_Default_Transport_RealService()
    {
        $a = new \Swift_Transport_Esmtp_AuthHandler(array(0 => new \Swift_Transport_Esmtp_Auth_CramMd5Authenticator(), 1 => new \Swift_Transport_Esmtp_Auth_LoginAuthenticator(), 2 => new \Swift_Transport_Esmtp_Auth_PlainAuthenticator()));
        $a->setUsername('mooc.smart.dev');
        $a->setPassword('mooctest');
        $a->setAuthMode('login');

        $this->services['swiftmailer.mailer.default.transport.real'] = $instance = new \Swift_Transport_EsmtpTransport(new \Swift_Transport_StreamBuffer(new \Swift_StreamFilters_StringReplacementFilterFactory()), array(0 => $a), $this->get('swiftmailer.mailer.default.transport.eventdispatcher'));

        $instance->setHost('smtp.gmail.com');
        $instance->setPort(465);
        $instance->setEncryption('ssl');
        $instance->setTimeout(30);
        $instance->setSourceIp(NULL);

        return $instance;
    }

    /**
     * Gets the 'templating' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Symfony\Bundle\TwigBundle\Debug\TimedTwigEngine A Symfony\Bundle\TwigBundle\Debug\TimedTwigEngine instance.
     */
    protected function getTemplatingService()
    {
        return $this->services['templating'] = new \Symfony\Bundle\TwigBundle\Debug\TimedTwigEngine($this->get('twig'), $this->get('templating.name_parser'), $this->get('templating.locator'), $this->get('debug.stopwatch'));
    }

    /**
     * Gets the 'templating.asset.package_factory' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Symfony\Bundle\FrameworkBundle\Templating\Asset\PackageFactory A Symfony\Bundle\FrameworkBundle\Templating\Asset\PackageFactory instance.
     */
    protected function getTemplating_Asset_PackageFactoryService()
    {
        return $this->services['templating.asset.package_factory'] = new \Symfony\Bundle\FrameworkBundle\Templating\Asset\PackageFactory($this);
    }

    /**
     * Gets the 'templating.filename_parser' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Symfony\Bundle\FrameworkBundle\Templating\TemplateFilenameParser A Symfony\Bundle\FrameworkBundle\Templating\TemplateFilenameParser instance.
     */
    protected function getTemplating_FilenameParserService()
    {
        return $this->services['templating.filename_parser'] = new \Symfony\Bundle\FrameworkBundle\Templating\TemplateFilenameParser();
    }

    /**
     * Gets the 'templating.globals' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Symfony\Bundle\FrameworkBundle\Templating\GlobalVariables A Symfony\Bundle\FrameworkBundle\Templating\GlobalVariables instance.
     */
    protected function getTemplating_GlobalsService()
    {
        return $this->services['templating.globals'] = new \Symfony\Bundle\FrameworkBundle\Templating\GlobalVariables($this);
    }

    /**
     * Gets the 'templating.helper.actions' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Symfony\Bundle\FrameworkBundle\Templating\Helper\ActionsHelper A Symfony\Bundle\FrameworkBundle\Templating\Helper\ActionsHelper instance.
     */
    protected function getTemplating_Helper_ActionsService()
    {
        return $this->services['templating.helper.actions'] = new \Symfony\Bundle\FrameworkBundle\Templating\Helper\ActionsHelper($this->get('fragment.handler'));
    }

    /**
     * Gets the 'templating.helper.assets' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Symfony\Component\Templating\Helper\CoreAssetsHelper A Symfony\Component\Templating\Helper\CoreAssetsHelper instance.
     * 
     * @throws InactiveScopeException when the 'templating.helper.assets' service is requested while the 'request' scope is not active
     */
    protected function getTemplating_Helper_AssetsService()
    {
        if (!isset($this->scopedServices['request'])) {
            throw new InactiveScopeException('templating.helper.assets', 'request');
        }

        return $this->services['templating.helper.assets'] = $this->scopedServices['request']['templating.helper.assets'] = new \Symfony\Component\Templating\Helper\CoreAssetsHelper(new \Symfony\Bundle\FrameworkBundle\Templating\Asset\PathPackage($this->get('request'), NULL, '%s?%s'), array());
    }

    /**
     * Gets the 'templating.helper.code' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Symfony\Bundle\FrameworkBundle\Templating\Helper\CodeHelper A Symfony\Bundle\FrameworkBundle\Templating\Helper\CodeHelper instance.
     */
    protected function getTemplating_Helper_CodeService()
    {
        return $this->services['templating.helper.code'] = new \Symfony\Bundle\FrameworkBundle\Templating\Helper\CodeHelper(NULL, $this->targetDirs[2], 'UTF-8');
    }

    /**
     * Gets the 'templating.helper.form' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Symfony\Bundle\FrameworkBundle\Templating\Helper\FormHelper A Symfony\Bundle\FrameworkBundle\Templating\Helper\FormHelper instance.
     */
    protected function getTemplating_Helper_FormService()
    {
        return $this->services['templating.helper.form'] = new \Symfony\Bundle\FrameworkBundle\Templating\Helper\FormHelper(new \Symfony\Component\Form\FormRenderer(new \Symfony\Component\Form\Extension\Templating\TemplatingRendererEngine($this->get('debug.templating.engine.php'), array(0 => 'FrameworkBundle:Form')), $this->get('form.csrf_provider', ContainerInterface::NULL_ON_INVALID_REFERENCE)));
    }

    /**
     * Gets the 'templating.helper.logout_url' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Symfony\Bundle\SecurityBundle\Templating\Helper\LogoutUrlHelper A Symfony\Bundle\SecurityBundle\Templating\Helper\LogoutUrlHelper instance.
     */
    protected function getTemplating_Helper_LogoutUrlService()
    {
        $this->services['templating.helper.logout_url'] = $instance = new \Symfony\Bundle\SecurityBundle\Templating\Helper\LogoutUrlHelper($this, $this->get('router'));

        $instance->registerListener('demo_secured_area', '_demo_logout', 'logout', '_csrf_token', NULL);

        return $instance;
    }

    /**
     * Gets the 'templating.helper.request' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Symfony\Bundle\FrameworkBundle\Templating\Helper\RequestHelper A Symfony\Bundle\FrameworkBundle\Templating\Helper\RequestHelper instance.
     */
    protected function getTemplating_Helper_RequestService()
    {
        return $this->services['templating.helper.request'] = new \Symfony\Bundle\FrameworkBundle\Templating\Helper\RequestHelper($this->get('request_stack'));
    }

    /**
     * Gets the 'templating.helper.router' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Symfony\Bundle\FrameworkBundle\Templating\Helper\RouterHelper A Symfony\Bundle\FrameworkBundle\Templating\Helper\RouterHelper instance.
     */
    protected function getTemplating_Helper_RouterService()
    {
        return $this->services['templating.helper.router'] = new \Symfony\Bundle\FrameworkBundle\Templating\Helper\RouterHelper($this->get('router'));
    }

    /**
     * Gets the 'templating.helper.security' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Symfony\Bundle\SecurityBundle\Templating\Helper\SecurityHelper A Symfony\Bundle\SecurityBundle\Templating\Helper\SecurityHelper instance.
     */
    protected function getTemplating_Helper_SecurityService()
    {
        return $this->services['templating.helper.security'] = new \Symfony\Bundle\SecurityBundle\Templating\Helper\SecurityHelper($this->get('security.context', ContainerInterface::NULL_ON_INVALID_REFERENCE));
    }

    /**
     * Gets the 'templating.helper.session' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Symfony\Bundle\FrameworkBundle\Templating\Helper\SessionHelper A Symfony\Bundle\FrameworkBundle\Templating\Helper\SessionHelper instance.
     */
    protected function getTemplating_Helper_SessionService()
    {
        return $this->services['templating.helper.session'] = new \Symfony\Bundle\FrameworkBundle\Templating\Helper\SessionHelper($this->get('request_stack'));
    }

    /**
     * Gets the 'templating.helper.slots' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Symfony\Component\Templating\Helper\SlotsHelper A Symfony\Component\Templating\Helper\SlotsHelper instance.
     */
    protected function getTemplating_Helper_SlotsService()
    {
        return $this->services['templating.helper.slots'] = new \Symfony\Component\Templating\Helper\SlotsHelper();
    }

    /**
     * Gets the 'templating.helper.stopwatch' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Symfony\Bundle\FrameworkBundle\Templating\Helper\StopwatchHelper A Symfony\Bundle\FrameworkBundle\Templating\Helper\StopwatchHelper instance.
     */
    protected function getTemplating_Helper_StopwatchService()
    {
        return $this->services['templating.helper.stopwatch'] = new \Symfony\Bundle\FrameworkBundle\Templating\Helper\StopwatchHelper($this->get('debug.stopwatch', ContainerInterface::NULL_ON_INVALID_REFERENCE));
    }

    /**
     * Gets the 'templating.helper.translator' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Symfony\Bundle\FrameworkBundle\Templating\Helper\TranslatorHelper A Symfony\Bundle\FrameworkBundle\Templating\Helper\TranslatorHelper instance.
     */
    protected function getTemplating_Helper_TranslatorService()
    {
        return $this->services['templating.helper.translator'] = new \Symfony\Bundle\FrameworkBundle\Templating\Helper\TranslatorHelper($this->get('translator'));
    }

    /**
     * Gets the 'templating.loader' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Symfony\Bundle\FrameworkBundle\Templating\Loader\FilesystemLoader A Symfony\Bundle\FrameworkBundle\Templating\Loader\FilesystemLoader instance.
     */
    protected function getTemplating_LoaderService()
    {
        return $this->services['templating.loader'] = new \Symfony\Bundle\FrameworkBundle\Templating\Loader\FilesystemLoader($this->get('templating.locator'));
    }

    /**
     * Gets the 'templating.name_parser' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Symfony\Bundle\FrameworkBundle\Templating\TemplateNameParser A Symfony\Bundle\FrameworkBundle\Templating\TemplateNameParser instance.
     */
    protected function getTemplating_NameParserService()
    {
        return $this->services['templating.name_parser'] = new \Symfony\Bundle\FrameworkBundle\Templating\TemplateNameParser($this->get('kernel'));
    }

    /**
     * Gets the 'translation.dumper.csv' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Symfony\Component\Translation\Dumper\CsvFileDumper A Symfony\Component\Translation\Dumper\CsvFileDumper instance.
     */
    protected function getTranslation_Dumper_CsvService()
    {
        return $this->services['translation.dumper.csv'] = new \Symfony\Component\Translation\Dumper\CsvFileDumper();
    }

    /**
     * Gets the 'translation.dumper.ini' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Symfony\Component\Translation\Dumper\IniFileDumper A Symfony\Component\Translation\Dumper\IniFileDumper instance.
     */
    protected function getTranslation_Dumper_IniService()
    {
        return $this->services['translation.dumper.ini'] = new \Symfony\Component\Translation\Dumper\IniFileDumper();
    }

    /**
     * Gets the 'translation.dumper.json' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Symfony\Component\Translation\Dumper\JsonFileDumper A Symfony\Component\Translation\Dumper\JsonFileDumper instance.
     */
    protected function getTranslation_Dumper_JsonService()
    {
        return $this->services['translation.dumper.json'] = new \Symfony\Component\Translation\Dumper\JsonFileDumper();
    }

    /**
     * Gets the 'translation.dumper.mo' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Symfony\Component\Translation\Dumper\MoFileDumper A Symfony\Component\Translation\Dumper\MoFileDumper instance.
     */
    protected function getTranslation_Dumper_MoService()
    {
        return $this->services['translation.dumper.mo'] = new \Symfony\Component\Translation\Dumper\MoFileDumper();
    }

    /**
     * Gets the 'translation.dumper.php' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Symfony\Component\Translation\Dumper\PhpFileDumper A Symfony\Component\Translation\Dumper\PhpFileDumper instance.
     */
    protected function getTranslation_Dumper_PhpService()
    {
        return $this->services['translation.dumper.php'] = new \Symfony\Component\Translation\Dumper\PhpFileDumper();
    }

    /**
     * Gets the 'translation.dumper.po' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Symfony\Component\Translation\Dumper\PoFileDumper A Symfony\Component\Translation\Dumper\PoFileDumper instance.
     */
    protected function getTranslation_Dumper_PoService()
    {
        return $this->services['translation.dumper.po'] = new \Symfony\Component\Translation\Dumper\PoFileDumper();
    }

    /**
     * Gets the 'translation.dumper.qt' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Symfony\Component\Translation\Dumper\QtFileDumper A Symfony\Component\Translation\Dumper\QtFileDumper instance.
     */
    protected function getTranslation_Dumper_QtService()
    {
        return $this->services['translation.dumper.qt'] = new \Symfony\Component\Translation\Dumper\QtFileDumper();
    }

    /**
     * Gets the 'translation.dumper.res' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Symfony\Component\Translation\Dumper\IcuResFileDumper A Symfony\Component\Translation\Dumper\IcuResFileDumper instance.
     */
    protected function getTranslation_Dumper_ResService()
    {
        return $this->services['translation.dumper.res'] = new \Symfony\Component\Translation\Dumper\IcuResFileDumper();
    }

    /**
     * Gets the 'translation.dumper.xliff' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Symfony\Component\Translation\Dumper\XliffFileDumper A Symfony\Component\Translation\Dumper\XliffFileDumper instance.
     */
    protected function getTranslation_Dumper_XliffService()
    {
        return $this->services['translation.dumper.xliff'] = new \Symfony\Component\Translation\Dumper\XliffFileDumper();
    }

    /**
     * Gets the 'translation.dumper.yml' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Symfony\Component\Translation\Dumper\YamlFileDumper A Symfony\Component\Translation\Dumper\YamlFileDumper instance.
     */
    protected function getTranslation_Dumper_YmlService()
    {
        return $this->services['translation.dumper.yml'] = new \Symfony\Component\Translation\Dumper\YamlFileDumper();
    }

    /**
     * Gets the 'translation.extractor' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Symfony\Component\Translation\Extractor\ChainExtractor A Symfony\Component\Translation\Extractor\ChainExtractor instance.
     */
    protected function getTranslation_ExtractorService()
    {
        $this->services['translation.extractor'] = $instance = new \Symfony\Component\Translation\Extractor\ChainExtractor();

        $instance->addExtractor('php', $this->get('translation.extractor.php'));
        $instance->addExtractor('twig', $this->get('twig.translation.extractor'));

        return $instance;
    }

    /**
     * Gets the 'translation.extractor.php' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Symfony\Bundle\FrameworkBundle\Translation\PhpExtractor A Symfony\Bundle\FrameworkBundle\Translation\PhpExtractor instance.
     */
    protected function getTranslation_Extractor_PhpService()
    {
        return $this->services['translation.extractor.php'] = new \Symfony\Bundle\FrameworkBundle\Translation\PhpExtractor();
    }

    /**
     * Gets the 'translation.loader' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Symfony\Bundle\FrameworkBundle\Translation\TranslationLoader A Symfony\Bundle\FrameworkBundle\Translation\TranslationLoader instance.
     */
    protected function getTranslation_LoaderService()
    {
        $a = $this->get('translation.loader.xliff');

        $this->services['translation.loader'] = $instance = new \Symfony\Bundle\FrameworkBundle\Translation\TranslationLoader();

        $instance->addLoader('php', $this->get('translation.loader.php'));
        $instance->addLoader('yml', $this->get('translation.loader.yml'));
        $instance->addLoader('xlf', $a);
        $instance->addLoader('xliff', $a);
        $instance->addLoader('po', $this->get('translation.loader.po'));
        $instance->addLoader('mo', $this->get('translation.loader.mo'));
        $instance->addLoader('ts', $this->get('translation.loader.qt'));
        $instance->addLoader('csv', $this->get('translation.loader.csv'));
        $instance->addLoader('res', $this->get('translation.loader.res'));
        $instance->addLoader('dat', $this->get('translation.loader.dat'));
        $instance->addLoader('ini', $this->get('translation.loader.ini'));
        $instance->addLoader('json', $this->get('translation.loader.json'));

        return $instance;
    }

    /**
     * Gets the 'translation.loader.csv' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Symfony\Component\Translation\Loader\CsvFileLoader A Symfony\Component\Translation\Loader\CsvFileLoader instance.
     */
    protected function getTranslation_Loader_CsvService()
    {
        return $this->services['translation.loader.csv'] = new \Symfony\Component\Translation\Loader\CsvFileLoader();
    }

    /**
     * Gets the 'translation.loader.dat' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Symfony\Component\Translation\Loader\IcuDatFileLoader A Symfony\Component\Translation\Loader\IcuDatFileLoader instance.
     */
    protected function getTranslation_Loader_DatService()
    {
        return $this->services['translation.loader.dat'] = new \Symfony\Component\Translation\Loader\IcuDatFileLoader();
    }

    /**
     * Gets the 'translation.loader.ini' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Symfony\Component\Translation\Loader\IniFileLoader A Symfony\Component\Translation\Loader\IniFileLoader instance.
     */
    protected function getTranslation_Loader_IniService()
    {
        return $this->services['translation.loader.ini'] = new \Symfony\Component\Translation\Loader\IniFileLoader();
    }

    /**
     * Gets the 'translation.loader.json' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Symfony\Component\Translation\Loader\JsonFileLoader A Symfony\Component\Translation\Loader\JsonFileLoader instance.
     */
    protected function getTranslation_Loader_JsonService()
    {
        return $this->services['translation.loader.json'] = new \Symfony\Component\Translation\Loader\JsonFileLoader();
    }

    /**
     * Gets the 'translation.loader.mo' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Symfony\Component\Translation\Loader\MoFileLoader A Symfony\Component\Translation\Loader\MoFileLoader instance.
     */
    protected function getTranslation_Loader_MoService()
    {
        return $this->services['translation.loader.mo'] = new \Symfony\Component\Translation\Loader\MoFileLoader();
    }

    /**
     * Gets the 'translation.loader.php' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Symfony\Component\Translation\Loader\PhpFileLoader A Symfony\Component\Translation\Loader\PhpFileLoader instance.
     */
    protected function getTranslation_Loader_PhpService()
    {
        return $this->services['translation.loader.php'] = new \Symfony\Component\Translation\Loader\PhpFileLoader();
    }

    /**
     * Gets the 'translation.loader.po' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Symfony\Component\Translation\Loader\PoFileLoader A Symfony\Component\Translation\Loader\PoFileLoader instance.
     */
    protected function getTranslation_Loader_PoService()
    {
        return $this->services['translation.loader.po'] = new \Symfony\Component\Translation\Loader\PoFileLoader();
    }

    /**
     * Gets the 'translation.loader.qt' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Symfony\Component\Translation\Loader\QtFileLoader A Symfony\Component\Translation\Loader\QtFileLoader instance.
     */
    protected function getTranslation_Loader_QtService()
    {
        return $this->services['translation.loader.qt'] = new \Symfony\Component\Translation\Loader\QtFileLoader();
    }

    /**
     * Gets the 'translation.loader.res' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Symfony\Component\Translation\Loader\IcuResFileLoader A Symfony\Component\Translation\Loader\IcuResFileLoader instance.
     */
    protected function getTranslation_Loader_ResService()
    {
        return $this->services['translation.loader.res'] = new \Symfony\Component\Translation\Loader\IcuResFileLoader();
    }

    /**
     * Gets the 'translation.loader.xliff' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Symfony\Component\Translation\Loader\XliffFileLoader A Symfony\Component\Translation\Loader\XliffFileLoader instance.
     */
    protected function getTranslation_Loader_XliffService()
    {
        return $this->services['translation.loader.xliff'] = new \Symfony\Component\Translation\Loader\XliffFileLoader();
    }

    /**
     * Gets the 'translation.loader.yml' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Symfony\Component\Translation\Loader\YamlFileLoader A Symfony\Component\Translation\Loader\YamlFileLoader instance.
     */
    protected function getTranslation_Loader_YmlService()
    {
        return $this->services['translation.loader.yml'] = new \Symfony\Component\Translation\Loader\YamlFileLoader();
    }

    /**
     * Gets the 'translation.writer' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Symfony\Component\Translation\Writer\TranslationWriter A Symfony\Component\Translation\Writer\TranslationWriter instance.
     */
    protected function getTranslation_WriterService()
    {
        $this->services['translation.writer'] = $instance = new \Symfony\Component\Translation\Writer\TranslationWriter();

        $instance->addDumper('php', $this->get('translation.dumper.php'));
        $instance->addDumper('xlf', $this->get('translation.dumper.xliff'));
        $instance->addDumper('po', $this->get('translation.dumper.po'));
        $instance->addDumper('mo', $this->get('translation.dumper.mo'));
        $instance->addDumper('yml', $this->get('translation.dumper.yml'));
        $instance->addDumper('ts', $this->get('translation.dumper.qt'));
        $instance->addDumper('csv', $this->get('translation.dumper.csv'));
        $instance->addDumper('ini', $this->get('translation.dumper.ini'));
        $instance->addDumper('json', $this->get('translation.dumper.json'));
        $instance->addDumper('res', $this->get('translation.dumper.res'));

        return $instance;
    }

    /**
     * Gets the 'translator' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Symfony\Component\Translation\LoggingTranslator A Symfony\Component\Translation\LoggingTranslator instance.
     */
    protected function getTranslatorService()
    {
        return $this->services['translator'] = new \Symfony\Component\Translation\LoggingTranslator($this->get('translator.default'), $this->get('monolog.logger.translation'));
    }

    /**
     * Gets the 'translator.default' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Symfony\Bundle\FrameworkBundle\Translation\Translator A Symfony\Bundle\FrameworkBundle\Translation\Translator instance.
     */
    protected function getTranslator_DefaultService()
    {
        $this->services['translator.default'] = $instance = new \Symfony\Bundle\FrameworkBundle\Translation\Translator($this, new \Symfony\Component\Translation\MessageSelector(), array('translation.loader.php' => array(0 => 'php'), 'translation.loader.yml' => array(0 => 'yml'), 'translation.loader.xliff' => array(0 => 'xlf', 1 => 'xliff'), 'translation.loader.po' => array(0 => 'po'), 'translation.loader.mo' => array(0 => 'mo'), 'translation.loader.qt' => array(0 => 'ts'), 'translation.loader.csv' => array(0 => 'csv'), 'translation.loader.res' => array(0 => 'res'), 'translation.loader.dat' => array(0 => 'dat'), 'translation.loader.ini' => array(0 => 'ini'), 'translation.loader.json' => array(0 => 'json')), array('cache_dir' => (__DIR__.'/translations'), 'debug' => true));

        $instance->setFallbackLocales(array(0 => 'en'));
        $instance->addResource('xlf', ($this->targetDirs[3].'\\vendor\\symfony\\symfony\\src\\Symfony\\Component\\Validator/Resources/translations\\validators.af.xlf'), 'af', 'validators');
        $instance->addResource('xlf', ($this->targetDirs[3].'\\vendor\\symfony\\symfony\\src\\Symfony\\Component\\Validator/Resources/translations\\validators.ar.xlf'), 'ar', 'validators');
        $instance->addResource('xlf', ($this->targetDirs[3].'\\vendor\\symfony\\symfony\\src\\Symfony\\Component\\Validator/Resources/translations\\validators.az.xlf'), 'az', 'validators');
        $instance->addResource('xlf', ($this->targetDirs[3].'\\vendor\\symfony\\symfony\\src\\Symfony\\Component\\Validator/Resources/translations\\validators.bg.xlf'), 'bg', 'validators');
        $instance->addResource('xlf', ($this->targetDirs[3].'\\vendor\\symfony\\symfony\\src\\Symfony\\Component\\Validator/Resources/translations\\validators.ca.xlf'), 'ca', 'validators');
        $instance->addResource('xlf', ($this->targetDirs[3].'\\vendor\\symfony\\symfony\\src\\Symfony\\Component\\Validator/Resources/translations\\validators.cs.xlf'), 'cs', 'validators');
        $instance->addResource('xlf', ($this->targetDirs[3].'\\vendor\\symfony\\symfony\\src\\Symfony\\Component\\Validator/Resources/translations\\validators.cy.xlf'), 'cy', 'validators');
        $instance->addResource('xlf', ($this->targetDirs[3].'\\vendor\\symfony\\symfony\\src\\Symfony\\Component\\Validator/Resources/translations\\validators.da.xlf'), 'da', 'validators');
        $instance->addResource('xlf', ($this->targetDirs[3].'\\vendor\\symfony\\symfony\\src\\Symfony\\Component\\Validator/Resources/translations\\validators.de.xlf'), 'de', 'validators');
        $instance->addResource('xlf', ($this->targetDirs[3].'\\vendor\\symfony\\symfony\\src\\Symfony\\Component\\Validator/Resources/translations\\validators.el.xlf'), 'el', 'validators');
        $instance->addResource('xlf', ($this->targetDirs[3].'\\vendor\\symfony\\symfony\\src\\Symfony\\Component\\Validator/Resources/translations\\validators.en.xlf'), 'en', 'validators');
        $instance->addResource('xlf', ($this->targetDirs[3].'\\vendor\\symfony\\symfony\\src\\Symfony\\Component\\Validator/Resources/translations\\validators.es.xlf'), 'es', 'validators');
        $instance->addResource('xlf', ($this->targetDirs[3].'\\vendor\\symfony\\symfony\\src\\Symfony\\Component\\Validator/Resources/translations\\validators.et.xlf'), 'et', 'validators');
        $instance->addResource('xlf', ($this->targetDirs[3].'\\vendor\\symfony\\symfony\\src\\Symfony\\Component\\Validator/Resources/translations\\validators.eu.xlf'), 'eu', 'validators');
        $instance->addResource('xlf', ($this->targetDirs[3].'\\vendor\\symfony\\symfony\\src\\Symfony\\Component\\Validator/Resources/translations\\validators.fa.xlf'), 'fa', 'validators');
        $instance->addResource('xlf', ($this->targetDirs[3].'\\vendor\\symfony\\symfony\\src\\Symfony\\Component\\Validator/Resources/translations\\validators.fi.xlf'), 'fi', 'validators');
        $instance->addResource('xlf', ($this->targetDirs[3].'\\vendor\\symfony\\symfony\\src\\Symfony\\Component\\Validator/Resources/translations\\validators.fr.xlf'), 'fr', 'validators');
        $instance->addResource('xlf', ($this->targetDirs[3].'\\vendor\\symfony\\symfony\\src\\Symfony\\Component\\Validator/Resources/translations\\validators.gl.xlf'), 'gl', 'validators');
        $instance->addResource('xlf', ($this->targetDirs[3].'\\vendor\\symfony\\symfony\\src\\Symfony\\Component\\Validator/Resources/translations\\validators.he.xlf'), 'he', 'validators');
        $instance->addResource('xlf', ($this->targetDirs[3].'\\vendor\\symfony\\symfony\\src\\Symfony\\Component\\Validator/Resources/translations\\validators.hr.xlf'), 'hr', 'validators');
        $instance->addResource('xlf', ($this->targetDirs[3].'\\vendor\\symfony\\symfony\\src\\Symfony\\Component\\Validator/Resources/translations\\validators.hu.xlf'), 'hu', 'validators');
        $instance->addResource('xlf', ($this->targetDirs[3].'\\vendor\\symfony\\symfony\\src\\Symfony\\Component\\Validator/Resources/translations\\validators.hy.xlf'), 'hy', 'validators');
        $instance->addResource('xlf', ($this->targetDirs[3].'\\vendor\\symfony\\symfony\\src\\Symfony\\Component\\Validator/Resources/translations\\validators.id.xlf'), 'id', 'validators');
        $instance->addResource('xlf', ($this->targetDirs[3].'\\vendor\\symfony\\symfony\\src\\Symfony\\Component\\Validator/Resources/translations\\validators.it.xlf'), 'it', 'validators');
        $instance->addResource('xlf', ($this->targetDirs[3].'\\vendor\\symfony\\symfony\\src\\Symfony\\Component\\Validator/Resources/translations\\validators.ja.xlf'), 'ja', 'validators');
        $instance->addResource('xlf', ($this->targetDirs[3].'\\vendor\\symfony\\symfony\\src\\Symfony\\Component\\Validator/Resources/translations\\validators.lb.xlf'), 'lb', 'validators');
        $instance->addResource('xlf', ($this->targetDirs[3].'\\vendor\\symfony\\symfony\\src\\Symfony\\Component\\Validator/Resources/translations\\validators.lt.xlf'), 'lt', 'validators');
        $instance->addResource('xlf', ($this->targetDirs[3].'\\vendor\\symfony\\symfony\\src\\Symfony\\Component\\Validator/Resources/translations\\validators.mn.xlf'), 'mn', 'validators');
        $instance->addResource('xlf', ($this->targetDirs[3].'\\vendor\\symfony\\symfony\\src\\Symfony\\Component\\Validator/Resources/translations\\validators.nb.xlf'), 'nb', 'validators');
        $instance->addResource('xlf', ($this->targetDirs[3].'\\vendor\\symfony\\symfony\\src\\Symfony\\Component\\Validator/Resources/translations\\validators.nl.xlf'), 'nl', 'validators');
        $instance->addResource('xlf', ($this->targetDirs[3].'\\vendor\\symfony\\symfony\\src\\Symfony\\Component\\Validator/Resources/translations\\validators.no.xlf'), 'no', 'validators');
        $instance->addResource('xlf', ($this->targetDirs[3].'\\vendor\\symfony\\symfony\\src\\Symfony\\Component\\Validator/Resources/translations\\validators.pl.xlf'), 'pl', 'validators');
        $instance->addResource('xlf', ($this->targetDirs[3].'\\vendor\\symfony\\symfony\\src\\Symfony\\Component\\Validator/Resources/translations\\validators.pt.xlf'), 'pt', 'validators');
        $instance->addResource('xlf', ($this->targetDirs[3].'\\vendor\\symfony\\symfony\\src\\Symfony\\Component\\Validator/Resources/translations\\validators.pt_BR.xlf'), 'pt_BR', 'validators');
        $instance->addResource('xlf', ($this->targetDirs[3].'\\vendor\\symfony\\symfony\\src\\Symfony\\Component\\Validator/Resources/translations\\validators.ro.xlf'), 'ro', 'validators');
        $instance->addResource('xlf', ($this->targetDirs[3].'\\vendor\\symfony\\symfony\\src\\Symfony\\Component\\Validator/Resources/translations\\validators.ru.xlf'), 'ru', 'validators');
        $instance->addResource('xlf', ($this->targetDirs[3].'\\vendor\\symfony\\symfony\\src\\Symfony\\Component\\Validator/Resources/translations\\validators.sk.xlf'), 'sk', 'validators');
        $instance->addResource('xlf', ($this->targetDirs[3].'\\vendor\\symfony\\symfony\\src\\Symfony\\Component\\Validator/Resources/translations\\validators.sl.xlf'), 'sl', 'validators');
        $instance->addResource('xlf', ($this->targetDirs[3].'\\vendor\\symfony\\symfony\\src\\Symfony\\Component\\Validator/Resources/translations\\validators.sq.xlf'), 'sq', 'validators');
        $instance->addResource('xlf', ($this->targetDirs[3].'\\vendor\\symfony\\symfony\\src\\Symfony\\Component\\Validator/Resources/translations\\validators.sr_Cyrl.xlf'), 'sr_Cyrl', 'validators');
        $instance->addResource('xlf', ($this->targetDirs[3].'\\vendor\\symfony\\symfony\\src\\Symfony\\Component\\Validator/Resources/translations\\validators.sr_Latn.xlf'), 'sr_Latn', 'validators');
        $instance->addResource('xlf', ($this->targetDirs[3].'\\vendor\\symfony\\symfony\\src\\Symfony\\Component\\Validator/Resources/translations\\validators.sv.xlf'), 'sv', 'validators');
        $instance->addResource('xlf', ($this->targetDirs[3].'\\vendor\\symfony\\symfony\\src\\Symfony\\Component\\Validator/Resources/translations\\validators.th.xlf'), 'th', 'validators');
        $instance->addResource('xlf', ($this->targetDirs[3].'\\vendor\\symfony\\symfony\\src\\Symfony\\Component\\Validator/Resources/translations\\validators.tr.xlf'), 'tr', 'validators');
        $instance->addResource('xlf', ($this->targetDirs[3].'\\vendor\\symfony\\symfony\\src\\Symfony\\Component\\Validator/Resources/translations\\validators.uk.xlf'), 'uk', 'validators');
        $instance->addResource('xlf', ($this->targetDirs[3].'\\vendor\\symfony\\symfony\\src\\Symfony\\Component\\Validator/Resources/translations\\validators.vi.xlf'), 'vi', 'validators');
        $instance->addResource('xlf', ($this->targetDirs[3].'\\vendor\\symfony\\symfony\\src\\Symfony\\Component\\Validator/Resources/translations\\validators.zh_CN.xlf'), 'zh_CN', 'validators');
        $instance->addResource('xlf', ($this->targetDirs[3].'\\vendor\\symfony\\symfony\\src\\Symfony\\Component\\Validator/Resources/translations\\validators.zh_TW.xlf'), 'zh_TW', 'validators');
        $instance->addResource('xlf', ($this->targetDirs[3].'\\vendor\\symfony\\symfony\\src\\Symfony\\Component\\Form/Resources/translations\\validators.ar.xlf'), 'ar', 'validators');
        $instance->addResource('xlf', ($this->targetDirs[3].'\\vendor\\symfony\\symfony\\src\\Symfony\\Component\\Form/Resources/translations\\validators.az.xlf'), 'az', 'validators');
        $instance->addResource('xlf', ($this->targetDirs[3].'\\vendor\\symfony\\symfony\\src\\Symfony\\Component\\Form/Resources/translations\\validators.bg.xlf'), 'bg', 'validators');
        $instance->addResource('xlf', ($this->targetDirs[3].'\\vendor\\symfony\\symfony\\src\\Symfony\\Component\\Form/Resources/translations\\validators.ca.xlf'), 'ca', 'validators');
        $instance->addResource('xlf', ($this->targetDirs[3].'\\vendor\\symfony\\symfony\\src\\Symfony\\Component\\Form/Resources/translations\\validators.cs.xlf'), 'cs', 'validators');
        $instance->addResource('xlf', ($this->targetDirs[3].'\\vendor\\symfony\\symfony\\src\\Symfony\\Component\\Form/Resources/translations\\validators.da.xlf'), 'da', 'validators');
        $instance->addResource('xlf', ($this->targetDirs[3].'\\vendor\\symfony\\symfony\\src\\Symfony\\Component\\Form/Resources/translations\\validators.de.xlf'), 'de', 'validators');
        $instance->addResource('xlf', ($this->targetDirs[3].'\\vendor\\symfony\\symfony\\src\\Symfony\\Component\\Form/Resources/translations\\validators.el.xlf'), 'el', 'validators');
        $instance->addResource('xlf', ($this->targetDirs[3].'\\vendor\\symfony\\symfony\\src\\Symfony\\Component\\Form/Resources/translations\\validators.en.xlf'), 'en', 'validators');
        $instance->addResource('xlf', ($this->targetDirs[3].'\\vendor\\symfony\\symfony\\src\\Symfony\\Component\\Form/Resources/translations\\validators.es.xlf'), 'es', 'validators');
        $instance->addResource('xlf', ($this->targetDirs[3].'\\vendor\\symfony\\symfony\\src\\Symfony\\Component\\Form/Resources/translations\\validators.et.xlf'), 'et', 'validators');
        $instance->addResource('xlf', ($this->targetDirs[3].'\\vendor\\symfony\\symfony\\src\\Symfony\\Component\\Form/Resources/translations\\validators.eu.xlf'), 'eu', 'validators');
        $instance->addResource('xlf', ($this->targetDirs[3].'\\vendor\\symfony\\symfony\\src\\Symfony\\Component\\Form/Resources/translations\\validators.fa.xlf'), 'fa', 'validators');
        $instance->addResource('xlf', ($this->targetDirs[3].'\\vendor\\symfony\\symfony\\src\\Symfony\\Component\\Form/Resources/translations\\validators.fi.xlf'), 'fi', 'validators');
        $instance->addResource('xlf', ($this->targetDirs[3].'\\vendor\\symfony\\symfony\\src\\Symfony\\Component\\Form/Resources/translations\\validators.fr.xlf'), 'fr', 'validators');
        $instance->addResource('xlf', ($this->targetDirs[3].'\\vendor\\symfony\\symfony\\src\\Symfony\\Component\\Form/Resources/translations\\validators.gl.xlf'), 'gl', 'validators');
        $instance->addResource('xlf', ($this->targetDirs[3].'\\vendor\\symfony\\symfony\\src\\Symfony\\Component\\Form/Resources/translations\\validators.he.xlf'), 'he', 'validators');
        $instance->addResource('xlf', ($this->targetDirs[3].'\\vendor\\symfony\\symfony\\src\\Symfony\\Component\\Form/Resources/translations\\validators.hr.xlf'), 'hr', 'validators');
        $instance->addResource('xlf', ($this->targetDirs[3].'\\vendor\\symfony\\symfony\\src\\Symfony\\Component\\Form/Resources/translations\\validators.hu.xlf'), 'hu', 'validators');
        $instance->addResource('xlf', ($this->targetDirs[3].'\\vendor\\symfony\\symfony\\src\\Symfony\\Component\\Form/Resources/translations\\validators.hy.xlf'), 'hy', 'validators');
        $instance->addResource('xlf', ($this->targetDirs[3].'\\vendor\\symfony\\symfony\\src\\Symfony\\Component\\Form/Resources/translations\\validators.id.xlf'), 'id', 'validators');
        $instance->addResource('xlf', ($this->targetDirs[3].'\\vendor\\symfony\\symfony\\src\\Symfony\\Component\\Form/Resources/translations\\validators.it.xlf'), 'it', 'validators');
        $instance->addResource('xlf', ($this->targetDirs[3].'\\vendor\\symfony\\symfony\\src\\Symfony\\Component\\Form/Resources/translations\\validators.ja.xlf'), 'ja', 'validators');
        $instance->addResource('xlf', ($this->targetDirs[3].'\\vendor\\symfony\\symfony\\src\\Symfony\\Component\\Form/Resources/translations\\validators.lb.xlf'), 'lb', 'validators');
        $instance->addResource('xlf', ($this->targetDirs[3].'\\vendor\\symfony\\symfony\\src\\Symfony\\Component\\Form/Resources/translations\\validators.lt.xlf'), 'lt', 'validators');
        $instance->addResource('xlf', ($this->targetDirs[3].'\\vendor\\symfony\\symfony\\src\\Symfony\\Component\\Form/Resources/translations\\validators.lv.xlf'), 'lv', 'validators');
        $instance->addResource('xlf', ($this->targetDirs[3].'\\vendor\\symfony\\symfony\\src\\Symfony\\Component\\Form/Resources/translations\\validators.mn.xlf'), 'mn', 'validators');
        $instance->addResource('xlf', ($this->targetDirs[3].'\\vendor\\symfony\\symfony\\src\\Symfony\\Component\\Form/Resources/translations\\validators.nb.xlf'), 'nb', 'validators');
        $instance->addResource('xlf', ($this->targetDirs[3].'\\vendor\\symfony\\symfony\\src\\Symfony\\Component\\Form/Resources/translations\\validators.nl.xlf'), 'nl', 'validators');
        $instance->addResource('xlf', ($this->targetDirs[3].'\\vendor\\symfony\\symfony\\src\\Symfony\\Component\\Form/Resources/translations\\validators.pl.xlf'), 'pl', 'validators');
        $instance->addResource('xlf', ($this->targetDirs[3].'\\vendor\\symfony\\symfony\\src\\Symfony\\Component\\Form/Resources/translations\\validators.pt.xlf'), 'pt', 'validators');
        $instance->addResource('xlf', ($this->targetDirs[3].'\\vendor\\symfony\\symfony\\src\\Symfony\\Component\\Form/Resources/translations\\validators.pt_BR.xlf'), 'pt_BR', 'validators');
        $instance->addResource('xlf', ($this->targetDirs[3].'\\vendor\\symfony\\symfony\\src\\Symfony\\Component\\Form/Resources/translations\\validators.ro.xlf'), 'ro', 'validators');
        $instance->addResource('xlf', ($this->targetDirs[3].'\\vendor\\symfony\\symfony\\src\\Symfony\\Component\\Form/Resources/translations\\validators.ru.xlf'), 'ru', 'validators');
        $instance->addResource('xlf', ($this->targetDirs[3].'\\vendor\\symfony\\symfony\\src\\Symfony\\Component\\Form/Resources/translations\\validators.sk.xlf'), 'sk', 'validators');
        $instance->addResource('xlf', ($this->targetDirs[3].'\\vendor\\symfony\\symfony\\src\\Symfony\\Component\\Form/Resources/translations\\validators.sl.xlf'), 'sl', 'validators');
        $instance->addResource('xlf', ($this->targetDirs[3].'\\vendor\\symfony\\symfony\\src\\Symfony\\Component\\Form/Resources/translations\\validators.sr_Cyrl.xlf'), 'sr_Cyrl', 'validators');
        $instance->addResource('xlf', ($this->targetDirs[3].'\\vendor\\symfony\\symfony\\src\\Symfony\\Component\\Form/Resources/translations\\validators.sr_Latn.xlf'), 'sr_Latn', 'validators');
        $instance->addResource('xlf', ($this->targetDirs[3].'\\vendor\\symfony\\symfony\\src\\Symfony\\Component\\Form/Resources/translations\\validators.sv.xlf'), 'sv', 'validators');
        $instance->addResource('xlf', ($this->targetDirs[3].'\\vendor\\symfony\\symfony\\src\\Symfony\\Component\\Form/Resources/translations\\validators.uk.xlf'), 'uk', 'validators');
        $instance->addResource('xlf', ($this->targetDirs[3].'\\vendor\\symfony\\symfony\\src\\Symfony\\Component\\Form/Resources/translations\\validators.zh_CN.xlf'), 'zh_CN', 'validators');
        $instance->addResource('xlf', ($this->targetDirs[3].'\\vendor\\symfony\\symfony\\src\\Symfony\\Component\\Security\\Core\\Exception/../Resources/translations\\security.ar.xlf'), 'ar', 'security');
        $instance->addResource('xlf', ($this->targetDirs[3].'\\vendor\\symfony\\symfony\\src\\Symfony\\Component\\Security\\Core\\Exception/../Resources/translations\\security.az.xlf'), 'az', 'security');
        $instance->addResource('xlf', ($this->targetDirs[3].'\\vendor\\symfony\\symfony\\src\\Symfony\\Component\\Security\\Core\\Exception/../Resources/translations\\security.bg.xlf'), 'bg', 'security');
        $instance->addResource('xlf', ($this->targetDirs[3].'\\vendor\\symfony\\symfony\\src\\Symfony\\Component\\Security\\Core\\Exception/../Resources/translations\\security.ca.xlf'), 'ca', 'security');
        $instance->addResource('xlf', ($this->targetDirs[3].'\\vendor\\symfony\\symfony\\src\\Symfony\\Component\\Security\\Core\\Exception/../Resources/translations\\security.cs.xlf'), 'cs', 'security');
        $instance->addResource('xlf', ($this->targetDirs[3].'\\vendor\\symfony\\symfony\\src\\Symfony\\Component\\Security\\Core\\Exception/../Resources/translations\\security.da.xlf'), 'da', 'security');
        $instance->addResource('xlf', ($this->targetDirs[3].'\\vendor\\symfony\\symfony\\src\\Symfony\\Component\\Security\\Core\\Exception/../Resources/translations\\security.de.xlf'), 'de', 'security');
        $instance->addResource('xlf', ($this->targetDirs[3].'\\vendor\\symfony\\symfony\\src\\Symfony\\Component\\Security\\Core\\Exception/../Resources/translations\\security.el.xlf'), 'el', 'security');
        $instance->addResource('xlf', ($this->targetDirs[3].'\\vendor\\symfony\\symfony\\src\\Symfony\\Component\\Security\\Core\\Exception/../Resources/translations\\security.en.xlf'), 'en', 'security');
        $instance->addResource('xlf', ($this->targetDirs[3].'\\vendor\\symfony\\symfony\\src\\Symfony\\Component\\Security\\Core\\Exception/../Resources/translations\\security.es.xlf'), 'es', 'security');
        $instance->addResource('xlf', ($this->targetDirs[3].'\\vendor\\symfony\\symfony\\src\\Symfony\\Component\\Security\\Core\\Exception/../Resources/translations\\security.fa.xlf'), 'fa', 'security');
        $instance->addResource('xlf', ($this->targetDirs[3].'\\vendor\\symfony\\symfony\\src\\Symfony\\Component\\Security\\Core\\Exception/../Resources/translations\\security.fr.xlf'), 'fr', 'security');
        $instance->addResource('xlf', ($this->targetDirs[3].'\\vendor\\symfony\\symfony\\src\\Symfony\\Component\\Security\\Core\\Exception/../Resources/translations\\security.gl.xlf'), 'gl', 'security');
        $instance->addResource('xlf', ($this->targetDirs[3].'\\vendor\\symfony\\symfony\\src\\Symfony\\Component\\Security\\Core\\Exception/../Resources/translations\\security.he.xlf'), 'he', 'security');
        $instance->addResource('xlf', ($this->targetDirs[3].'\\vendor\\symfony\\symfony\\src\\Symfony\\Component\\Security\\Core\\Exception/../Resources/translations\\security.hr.xlf'), 'hr', 'security');
        $instance->addResource('xlf', ($this->targetDirs[3].'\\vendor\\symfony\\symfony\\src\\Symfony\\Component\\Security\\Core\\Exception/../Resources/translations\\security.hu.xlf'), 'hu', 'security');
        $instance->addResource('xlf', ($this->targetDirs[3].'\\vendor\\symfony\\symfony\\src\\Symfony\\Component\\Security\\Core\\Exception/../Resources/translations\\security.id.xlf'), 'id', 'security');
        $instance->addResource('xlf', ($this->targetDirs[3].'\\vendor\\symfony\\symfony\\src\\Symfony\\Component\\Security\\Core\\Exception/../Resources/translations\\security.it.xlf'), 'it', 'security');
        $instance->addResource('xlf', ($this->targetDirs[3].'\\vendor\\symfony\\symfony\\src\\Symfony\\Component\\Security\\Core\\Exception/../Resources/translations\\security.ja.xlf'), 'ja', 'security');
        $instance->addResource('xlf', ($this->targetDirs[3].'\\vendor\\symfony\\symfony\\src\\Symfony\\Component\\Security\\Core\\Exception/../Resources/translations\\security.lb.xlf'), 'lb', 'security');
        $instance->addResource('xlf', ($this->targetDirs[3].'\\vendor\\symfony\\symfony\\src\\Symfony\\Component\\Security\\Core\\Exception/../Resources/translations\\security.lt.xlf'), 'lt', 'security');
        $instance->addResource('xlf', ($this->targetDirs[3].'\\vendor\\symfony\\symfony\\src\\Symfony\\Component\\Security\\Core\\Exception/../Resources/translations\\security.nl.xlf'), 'nl', 'security');
        $instance->addResource('xlf', ($this->targetDirs[3].'\\vendor\\symfony\\symfony\\src\\Symfony\\Component\\Security\\Core\\Exception/../Resources/translations\\security.no.xlf'), 'no', 'security');
        $instance->addResource('xlf', ($this->targetDirs[3].'\\vendor\\symfony\\symfony\\src\\Symfony\\Component\\Security\\Core\\Exception/../Resources/translations\\security.pl.xlf'), 'pl', 'security');
        $instance->addResource('xlf', ($this->targetDirs[3].'\\vendor\\symfony\\symfony\\src\\Symfony\\Component\\Security\\Core\\Exception/../Resources/translations\\security.pt_BR.xlf'), 'pt_BR', 'security');
        $instance->addResource('xlf', ($this->targetDirs[3].'\\vendor\\symfony\\symfony\\src\\Symfony\\Component\\Security\\Core\\Exception/../Resources/translations\\security.pt_PT.xlf'), 'pt_PT', 'security');
        $instance->addResource('xlf', ($this->targetDirs[3].'\\vendor\\symfony\\symfony\\src\\Symfony\\Component\\Security\\Core\\Exception/../Resources/translations\\security.ro.xlf'), 'ro', 'security');
        $instance->addResource('xlf', ($this->targetDirs[3].'\\vendor\\symfony\\symfony\\src\\Symfony\\Component\\Security\\Core\\Exception/../Resources/translations\\security.ru.xlf'), 'ru', 'security');
        $instance->addResource('xlf', ($this->targetDirs[3].'\\vendor\\symfony\\symfony\\src\\Symfony\\Component\\Security\\Core\\Exception/../Resources/translations\\security.sk.xlf'), 'sk', 'security');
        $instance->addResource('xlf', ($this->targetDirs[3].'\\vendor\\symfony\\symfony\\src\\Symfony\\Component\\Security\\Core\\Exception/../Resources/translations\\security.sl.xlf'), 'sl', 'security');
        $instance->addResource('xlf', ($this->targetDirs[3].'\\vendor\\symfony\\symfony\\src\\Symfony\\Component\\Security\\Core\\Exception/../Resources/translations\\security.sr_Cyrl.xlf'), 'sr_Cyrl', 'security');
        $instance->addResource('xlf', ($this->targetDirs[3].'\\vendor\\symfony\\symfony\\src\\Symfony\\Component\\Security\\Core\\Exception/../Resources/translations\\security.sr_Latn.xlf'), 'sr_Latn', 'security');
        $instance->addResource('xlf', ($this->targetDirs[3].'\\vendor\\symfony\\symfony\\src\\Symfony\\Component\\Security\\Core\\Exception/../Resources/translations\\security.sv.xlf'), 'sv', 'security');
        $instance->addResource('xlf', ($this->targetDirs[3].'\\vendor\\symfony\\symfony\\src\\Symfony\\Component\\Security\\Core\\Exception/../Resources/translations\\security.th.xlf'), 'th', 'security');
        $instance->addResource('xlf', ($this->targetDirs[3].'\\vendor\\symfony\\symfony\\src\\Symfony\\Component\\Security\\Core\\Exception/../Resources/translations\\security.tr.xlf'), 'tr', 'security');
        $instance->addResource('xlf', ($this->targetDirs[3].'\\vendor\\symfony\\symfony\\src\\Symfony\\Component\\Security\\Core\\Exception/../Resources/translations\\security.ua.xlf'), 'ua', 'security');
        $instance->addResource('xlf', ($this->targetDirs[3].'\\vendor\\symfony\\symfony\\src\\Symfony\\Component\\Security\\Core\\Exception/../Resources/translations\\security.vi.xlf'), 'vi', 'security');
        $instance->addResource('xlf', ($this->targetDirs[3].'\\vendor\\symfony\\symfony\\src\\Symfony\\Component\\Security\\Core\\Exception/../Resources/translations\\security.zh_CN.xlf'), 'zh_CN', 'security');
        $instance->addResource('xlf', ($this->targetDirs[3].'\\src\\Mooc\\MoocBundle/Resources/translations\\messages.fr.xlf'), 'fr', 'messages');
        $instance->addResource('xlf', ($this->targetDirs[3].'\\vendor\\javiereguiluz\\easyadmin-bundle/Resources/translations\\EasyAdminBundle.bg.xlf'), 'bg', 'EasyAdminBundle');
        $instance->addResource('xlf', ($this->targetDirs[3].'\\vendor\\javiereguiluz\\easyadmin-bundle/Resources/translations\\EasyAdminBundle.ca.xlf'), 'ca', 'EasyAdminBundle');
        $instance->addResource('xlf', ($this->targetDirs[3].'\\vendor\\javiereguiluz\\easyadmin-bundle/Resources/translations\\EasyAdminBundle.cs.xlf'), 'cs', 'EasyAdminBundle');
        $instance->addResource('xlf', ($this->targetDirs[3].'\\vendor\\javiereguiluz\\easyadmin-bundle/Resources/translations\\EasyAdminBundle.de.xlf'), 'de', 'EasyAdminBundle');
        $instance->addResource('xlf', ($this->targetDirs[3].'\\vendor\\javiereguiluz\\easyadmin-bundle/Resources/translations\\EasyAdminBundle.en.xlf'), 'en', 'EasyAdminBundle');
        $instance->addResource('xlf', ($this->targetDirs[3].'\\vendor\\javiereguiluz\\easyadmin-bundle/Resources/translations\\EasyAdminBundle.es.xlf'), 'es', 'EasyAdminBundle');
        $instance->addResource('xlf', ($this->targetDirs[3].'\\vendor\\javiereguiluz\\easyadmin-bundle/Resources/translations\\EasyAdminBundle.eu.xlf'), 'eu', 'EasyAdminBundle');
        $instance->addResource('xlf', ($this->targetDirs[3].'\\vendor\\javiereguiluz\\easyadmin-bundle/Resources/translations\\EasyAdminBundle.fr.xlf'), 'fr', 'EasyAdminBundle');
        $instance->addResource('xlf', ($this->targetDirs[3].'\\vendor\\javiereguiluz\\easyadmin-bundle/Resources/translations\\EasyAdminBundle.it.xlf'), 'it', 'EasyAdminBundle');
        $instance->addResource('xlf', ($this->targetDirs[3].'\\vendor\\javiereguiluz\\easyadmin-bundle/Resources/translations\\EasyAdminBundle.nl.xlf'), 'nl', 'EasyAdminBundle');
        $instance->addResource('xlf', ($this->targetDirs[3].'\\vendor\\javiereguiluz\\easyadmin-bundle/Resources/translations\\EasyAdminBundle.pl.xlf'), 'pl', 'EasyAdminBundle');
        $instance->addResource('xlf', ($this->targetDirs[3].'\\vendor\\javiereguiluz\\easyadmin-bundle/Resources/translations\\EasyAdminBundle.pt.xlf'), 'pt', 'EasyAdminBundle');
        $instance->addResource('xlf', ($this->targetDirs[3].'\\vendor\\javiereguiluz\\easyadmin-bundle/Resources/translations\\EasyAdminBundle.ro.xlf'), 'ro', 'EasyAdminBundle');
        $instance->addResource('xlf', ($this->targetDirs[3].'\\vendor\\javiereguiluz\\easyadmin-bundle/Resources/translations\\EasyAdminBundle.ru.xlf'), 'ru', 'EasyAdminBundle');
        $instance->addResource('xlf', ($this->targetDirs[3].'\\vendor\\javiereguiluz\\easyadmin-bundle/Resources/translations\\EasyAdminBundle.sl.xlf'), 'sl', 'EasyAdminBundle');
        $instance->addResource('xlf', ($this->targetDirs[3].'\\vendor\\javiereguiluz\\easyadmin-bundle/Resources/translations\\EasyAdminBundle.sv.xlf'), 'sv', 'EasyAdminBundle');
        $instance->addResource('xlf', ($this->targetDirs[3].'\\vendor\\javiereguiluz\\easyadmin-bundle/Resources/translations\\EasyAdminBundle.tr.xlf'), 'tr', 'EasyAdminBundle');
        $instance->addResource('xlf', ($this->targetDirs[3].'\\vendor\\javiereguiluz\\easyadmin-bundle/Resources/translations\\messages.bg.xlf'), 'bg', 'messages');
        $instance->addResource('xlf', ($this->targetDirs[3].'\\vendor\\javiereguiluz\\easyadmin-bundle/Resources/translations\\messages.ca.xlf'), 'ca', 'messages');
        $instance->addResource('xlf', ($this->targetDirs[3].'\\vendor\\javiereguiluz\\easyadmin-bundle/Resources/translations\\messages.cs.xlf'), 'cs', 'messages');
        $instance->addResource('xlf', ($this->targetDirs[3].'\\vendor\\javiereguiluz\\easyadmin-bundle/Resources/translations\\messages.de.xlf'), 'de', 'messages');
        $instance->addResource('xlf', ($this->targetDirs[3].'\\vendor\\javiereguiluz\\easyadmin-bundle/Resources/translations\\messages.en.xlf'), 'en', 'messages');
        $instance->addResource('xlf', ($this->targetDirs[3].'\\vendor\\javiereguiluz\\easyadmin-bundle/Resources/translations\\messages.es.xlf'), 'es', 'messages');
        $instance->addResource('xlf', ($this->targetDirs[3].'\\vendor\\javiereguiluz\\easyadmin-bundle/Resources/translations\\messages.eu.xlf'), 'eu', 'messages');
        $instance->addResource('xlf', ($this->targetDirs[3].'\\vendor\\javiereguiluz\\easyadmin-bundle/Resources/translations\\messages.fr.xlf'), 'fr', 'messages');
        $instance->addResource('xlf', ($this->targetDirs[3].'\\vendor\\javiereguiluz\\easyadmin-bundle/Resources/translations\\messages.it.xlf'), 'it', 'messages');
        $instance->addResource('xlf', ($this->targetDirs[3].'\\vendor\\javiereguiluz\\easyadmin-bundle/Resources/translations\\messages.nl.xlf'), 'nl', 'messages');
        $instance->addResource('xlf', ($this->targetDirs[3].'\\vendor\\javiereguiluz\\easyadmin-bundle/Resources/translations\\messages.pl.xlf'), 'pl', 'messages');
        $instance->addResource('xlf', ($this->targetDirs[3].'\\vendor\\javiereguiluz\\easyadmin-bundle/Resources/translations\\messages.pt.xlf'), 'pt', 'messages');
        $instance->addResource('xlf', ($this->targetDirs[3].'\\vendor\\javiereguiluz\\easyadmin-bundle/Resources/translations\\messages.ro.xlf'), 'ro', 'messages');
        $instance->addResource('xlf', ($this->targetDirs[3].'\\vendor\\javiereguiluz\\easyadmin-bundle/Resources/translations\\messages.ru.xlf'), 'ru', 'messages');
        $instance->addResource('xlf', ($this->targetDirs[3].'\\vendor\\javiereguiluz\\easyadmin-bundle/Resources/translations\\messages.sl.xlf'), 'sl', 'messages');
        $instance->addResource('xlf', ($this->targetDirs[3].'\\vendor\\javiereguiluz\\easyadmin-bundle/Resources/translations\\messages.sv.xlf'), 'sv', 'messages');
        $instance->addResource('xlf', ($this->targetDirs[3].'\\vendor\\javiereguiluz\\easyadmin-bundle/Resources/translations\\messages.tr.xlf'), 'tr', 'messages');
        $instance->addResource('yml', ($this->targetDirs[3].'\\vendor\\vich\\uploader-bundle/Resources/translations\\VichUploaderBundle.ar.yml'), 'ar', 'VichUploaderBundle');
        $instance->addResource('yml', ($this->targetDirs[3].'\\vendor\\vich\\uploader-bundle/Resources/translations\\VichUploaderBundle.de.yml'), 'de', 'VichUploaderBundle');
        $instance->addResource('yml', ($this->targetDirs[3].'\\vendor\\vich\\uploader-bundle/Resources/translations\\VichUploaderBundle.en.yml'), 'en', 'VichUploaderBundle');
        $instance->addResource('yml', ($this->targetDirs[3].'\\vendor\\vich\\uploader-bundle/Resources/translations\\VichUploaderBundle.es.yml'), 'es', 'VichUploaderBundle');
        $instance->addResource('yml', ($this->targetDirs[3].'\\vendor\\vich\\uploader-bundle/Resources/translations\\VichUploaderBundle.fr.yml'), 'fr', 'VichUploaderBundle');
        $instance->addResource('yml', ($this->targetDirs[3].'\\vendor\\vich\\uploader-bundle/Resources/translations\\VichUploaderBundle.pl.yml'), 'pl', 'VichUploaderBundle');
        $instance->addResource('yml', ($this->targetDirs[3].'\\vendor\\vich\\uploader-bundle/Resources/translations\\VichUploaderBundle.ru.yml'), 'ru', 'VichUploaderBundle');
        $instance->addResource('yml', ($this->targetDirs[3].'\\vendor\\vich\\uploader-bundle/Resources/translations\\VichUploaderBundle.uk.yml'), 'uk', 'VichUploaderBundle');

        return $instance;
    }

    /**
     * Gets the 'translator_listener' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Symfony\Component\HttpKernel\EventListener\TranslatorListener A Symfony\Component\HttpKernel\EventListener\TranslatorListener instance.
     */
    protected function getTranslatorListenerService()
    {
        return $this->services['translator_listener'] = new \Symfony\Component\HttpKernel\EventListener\TranslatorListener($this->get('translator'), $this->get('request_stack'));
    }

    /**
     * Gets the 'twig' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Twig_Environment A Twig_Environment instance.
     */
    protected function getTwigService()
    {
        $this->services['twig'] = $instance = new \Twig_Environment($this->get('twig.loader'), array('form_themes' => array(0 => 'form_div_layout.html.twig', 1 => 'AvanzuAdminThemeBundle:layout:form-theme.html.twig'), 'debug' => true, 'strict_variables' => true, 'exception_controller' => 'twig.controller.exception:showAction', 'autoescape' => array(0 => 'Symfony\\Bundle\\TwigBundle\\TwigDefaultEscapingStrategy', 1 => 'guess'), 'cache' => (__DIR__.'/twig'), 'charset' => 'UTF-8', 'paths' => array()));

        $instance->addExtension(new \Symfony\Bundle\SecurityBundle\Twig\Extension\LogoutUrlExtension($this->get('templating.helper.logout_url')));
        $instance->addExtension(new \Symfony\Bridge\Twig\Extension\SecurityExtension($this->get('security.context', ContainerInterface::NULL_ON_INVALID_REFERENCE)));
        $instance->addExtension(new \Symfony\Bridge\Twig\Extension\TranslationExtension($this->get('translator')));
        $instance->addExtension(new \Symfony\Bundle\TwigBundle\Extension\AssetsExtension($this, $this->get('router.request_context', ContainerInterface::NULL_ON_INVALID_REFERENCE)));
        $instance->addExtension(new \Symfony\Bundle\TwigBundle\Extension\ActionsExtension($this));
        $instance->addExtension(new \Symfony\Bridge\Twig\Extension\CodeExtension(NULL, $this->targetDirs[2], 'UTF-8'));
        $instance->addExtension(new \Symfony\Bridge\Twig\Extension\RoutingExtension($this->get('router')));
        $instance->addExtension(new \Symfony\Bridge\Twig\Extension\YamlExtension());
        $instance->addExtension(new \Symfony\Bridge\Twig\Extension\StopwatchExtension($this->get('debug.stopwatch', ContainerInterface::NULL_ON_INVALID_REFERENCE), true));
        $instance->addExtension(new \Symfony\Bridge\Twig\Extension\ExpressionExtension());
        $instance->addExtension(new \Symfony\Bridge\Twig\Extension\HttpKernelExtension($this->get('fragment.handler')));
        $instance->addExtension(new \Symfony\Bridge\Twig\Extension\FormExtension(new \Symfony\Bridge\Twig\Form\TwigRenderer(new \Symfony\Bridge\Twig\Form\TwigRendererEngine(array(0 => 'StarRatingBundle::rating.html.twig', 1 => 'form_div_layout.html.twig', 2 => 'AvanzuAdminThemeBundle:layout:form-theme.html.twig')), $this->get('form.csrf_provider', ContainerInterface::NULL_ON_INVALID_REFERENCE))));
        $instance->addExtension(new \Twig_Extension_Debug());
        $instance->addExtension(new \Symfony\Bundle\AsseticBundle\Twig\AsseticExtension($this->get('assetic.asset_factory'), $this->get('templating.name_parser'), false, array(), array(0 => 'AvanzuAdminThemeBundle'), new \Symfony\Bundle\AsseticBundle\DefaultValueSupplier($this)));
        $instance->addExtension(new \Doctrine\Bundle\DoctrineBundle\Twig\DoctrineExtension());
        $instance->addExtension(new \JavierEguiluz\Bundle\EasyAdminBundle\Twig\EasyAdminTwigExtension($this->get('easyadmin.configurator'), $this->get('property_accessor'), true));
        $instance->addExtension(new \Vich\UploaderBundle\Twig\Extension\UploaderExtension($this->get('vich_uploader.templating.helper.uploader_helper')));
        $instance->addExtension($this->get('avanzu_admin_theme.widget_extension.class'));
        $instance->addExtension($this->get('twig.extension.nomaya_social_bar'));
        $instance->addExtension($this->get('twig.extension.nomaya_social_links'));
        $instance->addExtension($this->get('star_rating.twig'));
        $instance->addExtension($this->get('twig.extension.image'));
        $instance->addExtension(new \Symfony\Bridge\Twig\Extension\DumpExtension($this->get('var_dumper.cloner')));
        $instance->addExtension(new \Symfony\Bundle\WebProfilerBundle\Twig\WebProfilerExtension());
        $instance->addGlobal('app', $this->get('templating.globals'));
        $instance->addGlobal('admin_theme', $this->get('avanzu_admin_theme.theme_manager'));

        return $instance;
    }

    /**
     * Gets the 'twig.controller.exception' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Avanzu\AdminThemeBundle\Controller\ExceptionController A Avanzu\AdminThemeBundle\Controller\ExceptionController instance.
     */
    protected function getTwig_Controller_ExceptionService()
    {
        return $this->services['twig.controller.exception'] = new \Avanzu\AdminThemeBundle\Controller\ExceptionController($this->get('twig'), true);
    }

    /**
     * Gets the 'twig.controller.preview_error' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Symfony\Bundle\TwigBundle\Controller\PreviewErrorController A Symfony\Bundle\TwigBundle\Controller\PreviewErrorController instance.
     */
    protected function getTwig_Controller_PreviewErrorService()
    {
        return $this->services['twig.controller.preview_error'] = new \Symfony\Bundle\TwigBundle\Controller\PreviewErrorController($this->get('http_kernel'), 'twig.controller.exception:showAction');
    }

    /**
     * Gets the 'twig.exception_listener' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Symfony\Component\HttpKernel\EventListener\ExceptionListener A Symfony\Component\HttpKernel\EventListener\ExceptionListener instance.
     */
    protected function getTwig_ExceptionListenerService()
    {
        return $this->services['twig.exception_listener'] = new \Symfony\Component\HttpKernel\EventListener\ExceptionListener('twig.controller.exception:showAction', $this->get('monolog.logger.request', ContainerInterface::NULL_ON_INVALID_REFERENCE));
    }

    /**
     * Gets the 'twig.extension.image' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Gregwar\ImageBundle\Extensions\ImageTwig A Gregwar\ImageBundle\Extensions\ImageTwig instance.
     */
    protected function getTwig_Extension_ImageService()
    {
        return $this->services['twig.extension.image'] = new \Gregwar\ImageBundle\Extensions\ImageTwig($this->get('image.handling'), ($this->targetDirs[2].'/../web'));
    }

    /**
     * Gets the 'twig.extension.nomaya_social_bar' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Nomaya\SocialBundle\Twig\Extension\NomayaTwigSocialBar A Nomaya\SocialBundle\Twig\Extension\NomayaTwigSocialBar instance.
     */
    protected function getTwig_Extension_NomayaSocialBarService()
    {
        $this->services['twig.extension.nomaya_social_bar'] = $instance = new \Nomaya\SocialBundle\Twig\Extension\NomayaTwigSocialBar($this);

        $instance->setNetworks(array(0 => 'facebook', 1 => 'twitter', 2 => 'googleplus', 3 => 'linkedin', 4 => 'pinterest'));

        return $instance;
    }

    /**
     * Gets the 'twig.extension.nomaya_social_links' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Nomaya\SocialBundle\Twig\Extension\NomayaTwigSocialLinks A Nomaya\SocialBundle\Twig\Extension\NomayaTwigSocialLinks instance.
     */
    protected function getTwig_Extension_NomayaSocialLinksService()
    {
        return $this->services['twig.extension.nomaya_social_links'] = new \Nomaya\SocialBundle\Twig\Extension\NomayaTwigSocialLinks($this);
    }

    /**
     * Gets the 'twig.loader' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Symfony\Bundle\TwigBundle\Loader\FilesystemLoader A Symfony\Bundle\TwigBundle\Loader\FilesystemLoader instance.
     */
    protected function getTwig_LoaderService()
    {
        $this->services['twig.loader'] = $instance = new \Symfony\Bundle\TwigBundle\Loader\FilesystemLoader($this->get('templating.locator'), $this->get('templating.name_parser'));

        $instance->addPath(($this->targetDirs[3].'\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\FrameworkBundle/Resources/views'), 'Framework');
        $instance->addPath(($this->targetDirs[3].'\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\SecurityBundle/Resources/views'), 'Security');
        $instance->addPath(($this->targetDirs[3].'\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\TwigBundle/Resources/views'), 'Twig');
        $instance->addPath(($this->targetDirs[3].'\\vendor\\symfony\\swiftmailer-bundle/Resources/views'), 'Swiftmailer');
        $instance->addPath(($this->targetDirs[3].'\\vendor\\doctrine\\doctrine-bundle/Resources/views'), 'Doctrine');
        $instance->addPath(($this->targetDirs[3].'\\src\\Mooc\\MoocBundle/Resources/views'), 'MoocMooc');
        $instance->addPath(($this->targetDirs[3].'\\vendor\\javiereguiluz\\easyadmin-bundle/Resources/views'), 'EasyAdmin');
        $instance->addPath(($this->targetDirs[3].'\\vendor\\vich\\uploader-bundle/Resources/views'), 'VichUploader');
        $instance->addPath(($this->targetDirs[3].'\\vendor\\avanzu\\admin-theme-bundle/Resources/views'), 'AvanzuAdminTheme');
        $instance->addPath(($this->targetDirs[3].'\\vendor\\nomaya\\social-bundle\\Nomaya\\SocialBundle/Resources/views'), 'NomayaSocial');
        $instance->addPath(($this->targetDirs[3].'\\vendor\\blackknight467\\star-rating-bundle\\blackknight467\\StarRatingBundle/Resources/views'), 'StarRating');
        $instance->addPath(($this->targetDirs[3].'\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\DebugBundle/Resources/views'), 'Debug');
        $instance->addPath(($this->targetDirs[3].'\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\WebProfilerBundle/Resources/views'), 'WebProfiler');
        $instance->addPath(($this->targetDirs[3].'\\vendor\\sensio\\distribution-bundle\\Sensio\\Bundle\\DistributionBundle/Resources/views'), 'SensioDistribution');
        $instance->addPath(($this->targetDirs[2].'/Resources/views'));
        $instance->addPath(($this->targetDirs[3].'\\vendor\\symfony\\symfony\\src\\Symfony\\Bridge\\Twig/Resources/views/Form'));

        return $instance;
    }

    /**
     * Gets the 'twig.translation.extractor' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Symfony\Bridge\Twig\Translation\TwigExtractor A Symfony\Bridge\Twig\Translation\TwigExtractor instance.
     */
    protected function getTwig_Translation_ExtractorService()
    {
        return $this->services['twig.translation.extractor'] = new \Symfony\Bridge\Twig\Translation\TwigExtractor($this->get('twig'));
    }

    /**
     * Gets the 'uri_signer' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Symfony\Component\HttpKernel\UriSigner A Symfony\Component\HttpKernel\UriSigner instance.
     */
    protected function getUriSignerService()
    {
        return $this->services['uri_signer'] = new \Symfony\Component\HttpKernel\UriSigner('ThisTokenIsNotSoSecretChangeIt');
    }

    /**
     * Gets the 'validator' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Symfony\Component\Validator\ValidatorInterface A Symfony\Component\Validator\ValidatorInterface instance.
     */
    protected function getValidatorService()
    {
        return $this->services['validator'] = $this->get('validator.builder')->getValidator();
    }

    /**
     * Gets the 'validator.builder' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Symfony\Component\Validator\ValidatorBuilderInterface A Symfony\Component\Validator\ValidatorBuilderInterface instance.
     */
    protected function getValidator_BuilderService()
    {
        $this->services['validator.builder'] = $instance = \Symfony\Component\Validator\Validation::createValidatorBuilder();

        $instance->setConstraintValidatorFactory(new \Symfony\Bundle\FrameworkBundle\Validator\ConstraintValidatorFactory($this, array('validator.expression' => 'validator.expression', 'Symfony\\Component\\Validator\\Constraints\\EmailValidator' => 'validator.email', 'security.validator.user_password' => 'security.validator.user_password', 'doctrine.orm.validator.unique' => 'doctrine.orm.validator.unique')));
        $instance->setTranslator($this->get('translator'));
        $instance->setTranslationDomain('validators');
        $instance->addXmlMappings(array(0 => ($this->targetDirs[3].'\\vendor\\symfony\\symfony\\src\\Symfony\\Component\\Form/Resources/config/validation.xml')));
        $instance->enableAnnotationMapping($this->get('annotation_reader'));
        $instance->addMethodMapping('loadValidatorMetadata');
        $instance->setApiVersion(3);
        $instance->addObjectInitializers(array(0 => $this->get('doctrine.orm.validator_initializer')));

        return $instance;
    }

    /**
     * Gets the 'validator.email' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Symfony\Component\Validator\Constraints\EmailValidator A Symfony\Component\Validator\Constraints\EmailValidator instance.
     */
    protected function getValidator_EmailService()
    {
        return $this->services['validator.email'] = new \Symfony\Component\Validator\Constraints\EmailValidator(false);
    }

    /**
     * Gets the 'validator.expression' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Symfony\Component\Validator\Constraints\ExpressionValidator A Symfony\Component\Validator\Constraints\ExpressionValidator instance.
     */
    protected function getValidator_ExpressionService()
    {
        return $this->services['validator.expression'] = new \Symfony\Component\Validator\Constraints\ExpressionValidator($this->get('property_accessor'));
    }

    /**
     * Gets the 'var_dumper.cli_dumper' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Symfony\Component\VarDumper\Dumper\CliDumper A Symfony\Component\VarDumper\Dumper\CliDumper instance.
     */
    protected function getVarDumper_CliDumperService()
    {
        return $this->services['var_dumper.cli_dumper'] = new \Symfony\Component\VarDumper\Dumper\CliDumper(NULL, 'UTF-8');
    }

    /**
     * Gets the 'var_dumper.cloner' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Symfony\Component\VarDumper\Cloner\VarCloner A Symfony\Component\VarDumper\Cloner\VarCloner instance.
     */
    protected function getVarDumper_ClonerService()
    {
        $this->services['var_dumper.cloner'] = $instance = new \Symfony\Component\VarDumper\Cloner\VarCloner();

        $instance->setMaxItems(2500);
        $instance->setMaxString(-1);

        return $instance;
    }

    /**
     * Gets the 'vich_uploader.download_handler' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @param bool    $lazyLoad whether to try lazy-loading the service with a proxy
     *
     * @return \Vich\UploaderBundle\Handler\DownloadHandler A Vich\UploaderBundle\Handler\DownloadHandler instance.
     */
    public function getVichUploader_DownloadHandlerService($lazyLoad = true)
    {
        if ($lazyLoad) {
            $container = $this;

            return $this->services['vich_uploader.download_handler'] = new VichUploaderBundleHandlerDownloadHandler_000000006f3b5022000000005e788bd83c6b334300e435587111272351cb6f0c(
                function (&$wrappedInstance, \ProxyManager\Proxy\LazyLoadingInterface $proxy) use ($container) {
                    $wrappedInstance = $container->getVichUploader_DownloadHandlerService(false);

                    $proxy->setProxyInitializer(null);

                    return true;
                }
            );
        }

        return new \Vich\UploaderBundle\Handler\DownloadHandler($this->get('vich_uploader.property_mapping_factory'), $this->get('vich_uploader.storage'));
    }

    /**
     * Gets the 'vich_uploader.form.type.file' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Vich\UploaderBundle\Form\Type\VichFileType A Vich\UploaderBundle\Form\Type\VichFileType instance.
     */
    protected function getVichUploader_Form_Type_FileService()
    {
        return $this->services['vich_uploader.form.type.file'] = new \Vich\UploaderBundle\Form\Type\VichFileType($this->get('vich_uploader.storage'), $this->get('vich_uploader.upload_handler'), $this->get('translator'));
    }

    /**
     * Gets the 'vich_uploader.form.type.image' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Vich\UploaderBundle\Form\Type\VichImageType A Vich\UploaderBundle\Form\Type\VichImageType instance.
     */
    protected function getVichUploader_Form_Type_ImageService()
    {
        return $this->services['vich_uploader.form.type.image'] = new \Vich\UploaderBundle\Form\Type\VichImageType($this->get('vich_uploader.storage'), $this->get('vich_uploader.upload_handler'), $this->get('translator'));
    }

    /**
     * Gets the 'vich_uploader.namer_origname' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Vich\UploaderBundle\Naming\OrignameNamer A Vich\UploaderBundle\Naming\OrignameNamer instance.
     */
    protected function getVichUploader_NamerOrignameService()
    {
        return $this->services['vich_uploader.namer_origname'] = new \Vich\UploaderBundle\Naming\OrignameNamer();
    }

    /**
     * Gets the 'vich_uploader.namer_property' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Vich\UploaderBundle\Naming\PropertyNamer A Vich\UploaderBundle\Naming\PropertyNamer instance.
     */
    protected function getVichUploader_NamerPropertyService()
    {
        return $this->services['vich_uploader.namer_property'] = new \Vich\UploaderBundle\Naming\PropertyNamer();
    }

    /**
     * Gets the 'vich_uploader.namer_uniqid' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Vich\UploaderBundle\Naming\UniqidNamer A Vich\UploaderBundle\Naming\UniqidNamer instance.
     */
    protected function getVichUploader_NamerUniqidService()
    {
        return $this->services['vich_uploader.namer_uniqid'] = new \Vich\UploaderBundle\Naming\UniqidNamer();
    }

    /**
     * Gets the 'vich_uploader.storage' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Vich\UploaderBundle\Storage\FileSystemStorage A Vich\UploaderBundle\Storage\FileSystemStorage instance.
     */
    protected function getVichUploader_StorageService()
    {
        return $this->services['vich_uploader.storage'] = new \Vich\UploaderBundle\Storage\FileSystemStorage($this->get('vich_uploader.property_mapping_factory'));
    }

    /**
     * Gets the 'vich_uploader.templating.helper.uploader_helper' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Vich\UploaderBundle\Templating\Helper\UploaderHelper A Vich\UploaderBundle\Templating\Helper\UploaderHelper instance.
     */
    protected function getVichUploader_Templating_Helper_UploaderHelperService()
    {
        return $this->services['vich_uploader.templating.helper.uploader_helper'] = new \Vich\UploaderBundle\Templating\Helper\UploaderHelper($this->get('vich_uploader.storage'));
    }

    /**
     * Gets the 'vich_uploader.upload_handler' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @param bool    $lazyLoad whether to try lazy-loading the service with a proxy
     *
     * @return \Vich\UploaderBundle\Handler\UploadHandler A Vich\UploaderBundle\Handler\UploadHandler instance.
     */
    public function getVichUploader_UploadHandlerService($lazyLoad = true)
    {
        if ($lazyLoad) {
            $container = $this;

            return $this->services['vich_uploader.upload_handler'] = new VichUploaderBundleHandlerUploadHandler_000000006f3b5020000000005e788bd83c6b334300e435587111272351cb6f0c(
                function (&$wrappedInstance, \ProxyManager\Proxy\LazyLoadingInterface $proxy) use ($container) {
                    $wrappedInstance = $container->getVichUploader_UploadHandlerService(false);

                    $proxy->setProxyInitializer(null);

                    return true;
                }
            );
        }

        $a = $this->get('vich_uploader.storage');

        return new \Vich\UploaderBundle\Handler\UploadHandler($this->get('vich_uploader.property_mapping_factory'), $a, new \Vich\UploaderBundle\Injector\FileInjector($a), $this->get('debug.event_dispatcher'));
    }

    /**
     * Gets the 'web_profiler.controller.exception' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Symfony\Bundle\WebProfilerBundle\Controller\ExceptionController A Symfony\Bundle\WebProfilerBundle\Controller\ExceptionController instance.
     */
    protected function getWebProfiler_Controller_ExceptionService()
    {
        return $this->services['web_profiler.controller.exception'] = new \Symfony\Bundle\WebProfilerBundle\Controller\ExceptionController($this->get('profiler', ContainerInterface::NULL_ON_INVALID_REFERENCE), $this->get('twig'), true);
    }

    /**
     * Gets the 'web_profiler.controller.profiler' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Symfony\Bundle\WebProfilerBundle\Controller\ProfilerController A Symfony\Bundle\WebProfilerBundle\Controller\ProfilerController instance.
     */
    protected function getWebProfiler_Controller_ProfilerService()
    {
        return $this->services['web_profiler.controller.profiler'] = new \Symfony\Bundle\WebProfilerBundle\Controller\ProfilerController($this->get('router', ContainerInterface::NULL_ON_INVALID_REFERENCE), $this->get('profiler', ContainerInterface::NULL_ON_INVALID_REFERENCE), $this->get('twig'), array('data_collector.config' => array(0 => 'config', 1 => '@WebProfiler/Collector/config.html.twig'), 'data_collector.request' => array(0 => 'request', 1 => '@WebProfiler/Collector/request.html.twig'), 'data_collector.ajax' => array(0 => 'ajax', 1 => '@WebProfiler/Collector/ajax.html.twig'), 'data_collector.exception' => array(0 => 'exception', 1 => '@WebProfiler/Collector/exception.html.twig'), 'data_collector.events' => array(0 => 'events', 1 => '@WebProfiler/Collector/events.html.twig'), 'data_collector.logger' => array(0 => 'logger', 1 => '@WebProfiler/Collector/logger.html.twig'), 'data_collector.time' => array(0 => 'time', 1 => '@WebProfiler/Collector/time.html.twig'), 'data_collector.memory' => array(0 => 'memory', 1 => '@WebProfiler/Collector/memory.html.twig'), 'data_collector.router' => array(0 => 'router', 1 => '@WebProfiler/Collector/router.html.twig'), 'data_collector.form' => array(0 => 'form', 1 => '@WebProfiler/Collector/form.html.twig'), 'data_collector.doctrine' => array(0 => 'db', 1 => '@Doctrine/Collector/db.html.twig'), 'swiftmailer.data_collector' => array(0 => 'swiftmailer', 1 => '@Swiftmailer/Collector/swiftmailer.html.twig'), 'data_collector.security' => array(0 => 'security', 1 => '@Security/Collector/security.html.twig'), 'easyadmin.data_collector' => array(0 => 'easyadmin', 1 => '@EasyAdmin/data_collector/easyadmin.html.twig'), 'data_collector.dump' => array(0 => 'dump', 1 => '@Debug/Profiler/dump.html.twig')), 'bottom');
    }

    /**
     * Gets the 'web_profiler.controller.router' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Symfony\Bundle\WebProfilerBundle\Controller\RouterController A Symfony\Bundle\WebProfilerBundle\Controller\RouterController instance.
     */
    protected function getWebProfiler_Controller_RouterService()
    {
        return $this->services['web_profiler.controller.router'] = new \Symfony\Bundle\WebProfilerBundle\Controller\RouterController($this->get('profiler', ContainerInterface::NULL_ON_INVALID_REFERENCE), $this->get('twig'), $this->get('router', ContainerInterface::NULL_ON_INVALID_REFERENCE));
    }

    /**
     * Gets the 'web_profiler.debug_toolbar' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Symfony\Bundle\WebProfilerBundle\EventListener\WebDebugToolbarListener A Symfony\Bundle\WebProfilerBundle\EventListener\WebDebugToolbarListener instance.
     */
    protected function getWebProfiler_DebugToolbarService()
    {
        return $this->services['web_profiler.debug_toolbar'] = new \Symfony\Bundle\WebProfilerBundle\EventListener\WebDebugToolbarListener($this->get('twig'), false, 2, 'bottom', $this->get('router', ContainerInterface::NULL_ON_INVALID_REFERENCE), '^/(app(_[\\w]+)?\\.php/)?_wdt');
    }

    /**
     * Gets the 'assetic.asset_factory' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * This service is private.
     * If you want to be able to request this service from the container directly,
     * make it public, otherwise you might end up with broken code.
     *
     * @return \Symfony\Bundle\AsseticBundle\Factory\AssetFactory A Symfony\Bundle\AsseticBundle\Factory\AssetFactory instance.
     */
    protected function getAssetic_AssetFactoryService()
    {
        return $this->services['assetic.asset_factory'] = new \Symfony\Bundle\AsseticBundle\Factory\AssetFactory($this->get('kernel'), $this, $this->getParameterBag(), ($this->targetDirs[2].'/../web'), true);
    }

    /**
     * Gets the 'controller_name_converter' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * This service is private.
     * If you want to be able to request this service from the container directly,
     * make it public, otherwise you might end up with broken code.
     *
     * @return \Symfony\Bundle\FrameworkBundle\Controller\ControllerNameParser A Symfony\Bundle\FrameworkBundle\Controller\ControllerNameParser instance.
     */
    protected function getControllerNameConverterService()
    {
        return $this->services['controller_name_converter'] = new \Symfony\Bundle\FrameworkBundle\Controller\ControllerNameParser($this->get('kernel'));
    }

    /**
     * Gets the 'doctrine.dbal.logger.profiling.default' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * This service is private.
     * If you want to be able to request this service from the container directly,
     * make it public, otherwise you might end up with broken code.
     *
     * @return \Doctrine\DBAL\Logging\DebugStack A Doctrine\DBAL\Logging\DebugStack instance.
     */
    protected function getDoctrine_Dbal_Logger_Profiling_DefaultService()
    {
        return $this->services['doctrine.dbal.logger.profiling.default'] = new \Doctrine\DBAL\Logging\DebugStack();
    }

    /**
     * Gets the 'router.request_context' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * This service is private.
     * If you want to be able to request this service from the container directly,
     * make it public, otherwise you might end up with broken code.
     *
     * @return \Symfony\Component\Routing\RequestContext A Symfony\Component\Routing\RequestContext instance.
     */
    protected function getRouter_RequestContextService()
    {
        return $this->services['router.request_context'] = new \Symfony\Component\Routing\RequestContext('', 'GET', 'localhost', 'http', 80, 443);
    }

    /**
     * Gets the 'security.access.decision_manager' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * This service is private.
     * If you want to be able to request this service from the container directly,
     * make it public, otherwise you might end up with broken code.
     *
     * @return \Symfony\Component\Security\Core\Authorization\AccessDecisionManager A Symfony\Component\Security\Core\Authorization\AccessDecisionManager instance.
     */
    protected function getSecurity_Access_DecisionManagerService()
    {
        $a = $this->get('security.role_hierarchy');
        $b = $this->get('security.authentication.trust_resolver');

        return $this->services['security.access.decision_manager'] = new \Symfony\Component\Security\Core\Authorization\AccessDecisionManager(array(0 => new \Symfony\Component\Security\Core\Authorization\Voter\RoleHierarchyVoter($a), 1 => new \Symfony\Component\Security\Core\Authorization\Voter\ExpressionVoter(new \Symfony\Component\Security\Core\Authorization\ExpressionLanguage(), $b, $a), 2 => new \Symfony\Component\Security\Core\Authorization\Voter\AuthenticatedVoter($b)), 'affirmative', false, true);
    }

    /**
     * Gets the 'security.authentication.manager' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * This service is private.
     * If you want to be able to request this service from the container directly,
     * make it public, otherwise you might end up with broken code.
     *
     * @return \Symfony\Component\Security\Core\Authentication\AuthenticationProviderManager A Symfony\Component\Security\Core\Authentication\AuthenticationProviderManager instance.
     */
    protected function getSecurity_Authentication_ManagerService()
    {
        $this->services['security.authentication.manager'] = $instance = new \Symfony\Component\Security\Core\Authentication\AuthenticationProviderManager(array(0 => new \Symfony\Component\Security\Core\Authentication\Provider\DaoAuthenticationProvider($this->get('security.user.provider.concrete.in_memory'), new \Symfony\Component\Security\Core\User\UserChecker(), 'demo_secured_area', $this->get('security.encoder_factory'), true)), true);

        $instance->setEventDispatcher($this->get('debug.event_dispatcher'));

        return $instance;
    }

    /**
     * Gets the 'security.authentication.trust_resolver' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * This service is private.
     * If you want to be able to request this service from the container directly,
     * make it public, otherwise you might end up with broken code.
     *
     * @return \Symfony\Component\Security\Core\Authentication\AuthenticationTrustResolver A Symfony\Component\Security\Core\Authentication\AuthenticationTrustResolver instance.
     */
    protected function getSecurity_Authentication_TrustResolverService()
    {
        return $this->services['security.authentication.trust_resolver'] = new \Symfony\Component\Security\Core\Authentication\AuthenticationTrustResolver('Symfony\\Component\\Security\\Core\\Authentication\\Token\\AnonymousToken', 'Symfony\\Component\\Security\\Core\\Authentication\\Token\\RememberMeToken');
    }

    /**
     * Gets the 'security.role_hierarchy' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * This service is private.
     * If you want to be able to request this service from the container directly,
     * make it public, otherwise you might end up with broken code.
     *
     * @return \Symfony\Component\Security\Core\Role\RoleHierarchy A Symfony\Component\Security\Core\Role\RoleHierarchy instance.
     */
    protected function getSecurity_RoleHierarchyService()
    {
        return $this->services['security.role_hierarchy'] = new \Symfony\Component\Security\Core\Role\RoleHierarchy(array('ROLE_ADMIN' => array(0 => 'ROLE_USER'), 'ROLE_SUPER_ADMIN' => array(0 => 'ROLE_USER', 1 => 'ROLE_ADMIN', 2 => 'ROLE_ALLOWED_TO_SWITCH')));
    }

    /**
     * Gets the 'security.user.provider.concrete.in_memory' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * This service is private.
     * If you want to be able to request this service from the container directly,
     * make it public, otherwise you might end up with broken code.
     *
     * @return \Symfony\Component\Security\Core\User\InMemoryUserProvider A Symfony\Component\Security\Core\User\InMemoryUserProvider instance.
     */
    protected function getSecurity_User_Provider_Concrete_InMemoryService()
    {
        $this->services['security.user.provider.concrete.in_memory'] = $instance = new \Symfony\Component\Security\Core\User\InMemoryUserProvider();

        $instance->createUser(new \Symfony\Component\Security\Core\User\User('user', 'userpass', array(0 => 'ROLE_USER')));
        $instance->createUser(new \Symfony\Component\Security\Core\User\User('admin', 'adminpass', array(0 => 'ROLE_ADMIN')));

        return $instance;
    }

    /**
     * Gets the 'session.storage.metadata_bag' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * This service is private.
     * If you want to be able to request this service from the container directly,
     * make it public, otherwise you might end up with broken code.
     *
     * @return \Symfony\Component\HttpFoundation\Session\Storage\MetadataBag A Symfony\Component\HttpFoundation\Session\Storage\MetadataBag instance.
     */
    protected function getSession_Storage_MetadataBagService()
    {
        return $this->services['session.storage.metadata_bag'] = new \Symfony\Component\HttpFoundation\Session\Storage\MetadataBag('_sf2_meta', '0');
    }

    /**
     * Gets the 'swiftmailer.mailer.default.transport.eventdispatcher' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * This service is private.
     * If you want to be able to request this service from the container directly,
     * make it public, otherwise you might end up with broken code.
     *
     * @return \Swift_Events_SimpleEventDispatcher A Swift_Events_SimpleEventDispatcher instance.
     */
    protected function getSwiftmailer_Mailer_Default_Transport_EventdispatcherService()
    {
        return $this->services['swiftmailer.mailer.default.transport.eventdispatcher'] = new \Swift_Events_SimpleEventDispatcher();
    }

    /**
     * Gets the 'templating.locator' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * This service is private.
     * If you want to be able to request this service from the container directly,
     * make it public, otherwise you might end up with broken code.
     *
     * @return \Symfony\Bundle\FrameworkBundle\Templating\Loader\TemplateLocator A Symfony\Bundle\FrameworkBundle\Templating\Loader\TemplateLocator instance.
     */
    protected function getTemplating_LocatorService()
    {
        return $this->services['templating.locator'] = new \Symfony\Bundle\FrameworkBundle\Templating\Loader\TemplateLocator($this->get('file_locator'), __DIR__);
    }

    /**
     * Gets the 'vich_uploader.metadata_reader' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * This service is private.
     * If you want to be able to request this service from the container directly,
     * make it public, otherwise you might end up with broken code.
     *
     * @return \Vich\UploaderBundle\Metadata\MetadataReader A Vich\UploaderBundle\Metadata\MetadataReader instance.
     */
    protected function getVichUploader_MetadataReaderService()
    {
        $a = new \Vich\UploaderBundle\Metadata\Driver\FileLocator(array());

        $b = new \Metadata\MetadataFactory(new \Vich\UploaderBundle\Metadata\Driver\ChainDriver(array(0 => new \Vich\UploaderBundle\Metadata\Driver\AnnotationDriver($this->get('annotation_reader')), 1 => new \Vich\UploaderBundle\Metadata\Driver\YamlDriver($a), 2 => new \Vich\UploaderBundle\Metadata\Driver\XmlDriver($a))));
        $b->setCache(new \Metadata\Cache\FileCache((__DIR__.'/vich_uploader')));

        return $this->services['vich_uploader.metadata_reader'] = new \Vich\UploaderBundle\Metadata\MetadataReader($b);
    }

    /**
     * Gets the 'vich_uploader.property_mapping_factory' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * This service is private.
     * If you want to be able to request this service from the container directly,
     * make it public, otherwise you might end up with broken code.
     *
     * @return \Vich\UploaderBundle\Mapping\PropertyMappingFactory A Vich\UploaderBundle\Mapping\PropertyMappingFactory instance.
     */
    protected function getVichUploader_PropertyMappingFactoryService()
    {
        return $this->services['vich_uploader.property_mapping_factory'] = new \Vich\UploaderBundle\Mapping\PropertyMappingFactory($this, $this->get('vich_uploader.metadata_reader'), array('formateur_image' => array('uri_prefix' => '/img/avatar', 'upload_destination' => ($this->targetDirs[2].'/../web/img/avatar'), 'namer' => array('service' => NULL, 'options' => NULL), 'directory_namer' => NULL, 'delete_on_remove' => true, 'delete_on_update' => true, 'inject_on_load' => false, 'db_driver' => 'orm'), 'formateur_cv' => array('uri_prefix' => '/file/cv', 'upload_destination' => ($this->targetDirs[2].'/../web/file/cv'), 'namer' => array('service' => NULL, 'options' => NULL), 'directory_namer' => NULL, 'delete_on_remove' => true, 'delete_on_update' => true, 'inject_on_load' => false, 'db_driver' => 'orm')), '_name');
    }

    /**
     * {@inheritdoc}
     */
    public function getParameter($name)
    {
        $name = strtolower($name);

        if (!(isset($this->parameters[$name]) || array_key_exists($name, $this->parameters))) {
            throw new InvalidArgumentException(sprintf('The parameter "%s" must be defined.', $name));
        }

        return $this->parameters[$name];
    }

    /**
     * {@inheritdoc}
     */
    public function hasParameter($name)
    {
        $name = strtolower($name);

        return isset($this->parameters[$name]) || array_key_exists($name, $this->parameters);
    }

    /**
     * {@inheritdoc}
     */
    public function setParameter($name, $value)
    {
        throw new LogicException('Impossible to call set() on a frozen ParameterBag.');
    }

    /**
     * {@inheritdoc}
     */
    public function getParameterBag()
    {
        if (null === $this->parameterBag) {
            $this->parameterBag = new FrozenParameterBag($this->parameters);
        }

        return $this->parameterBag;
    }

    /**
     * Gets the default parameters.
     *
     * @return array An array of the default parameters
     */
    protected function getDefaultParameters()
    {
        return array(
            'kernel.root_dir' => $this->targetDirs[2],
            'kernel.environment' => 'dev',
            'kernel.debug' => true,
            'kernel.name' => 'ap_',
            'kernel.cache_dir' => __DIR__,
            'kernel.logs_dir' => ($this->targetDirs[2].'\\logs'),
            'kernel.bundles' => array(
                'FrameworkBundle' => 'Symfony\\Bundle\\FrameworkBundle\\FrameworkBundle',
                'SecurityBundle' => 'Symfony\\Bundle\\SecurityBundle\\SecurityBundle',
                'TwigBundle' => 'Symfony\\Bundle\\TwigBundle\\TwigBundle',
                'MonologBundle' => 'Symfony\\Bundle\\MonologBundle\\MonologBundle',
                'SwiftmailerBundle' => 'Symfony\\Bundle\\SwiftmailerBundle\\SwiftmailerBundle',
                'AsseticBundle' => 'Symfony\\Bundle\\AsseticBundle\\AsseticBundle',
                'DoctrineBundle' => 'Doctrine\\Bundle\\DoctrineBundle\\DoctrineBundle',
                'SensioFrameworkExtraBundle' => 'Sensio\\Bundle\\FrameworkExtraBundle\\SensioFrameworkExtraBundle',
                'AppBundle' => 'AppBundle\\AppBundle',
                'MoocMoocBundle' => 'Mooc\\MoocBundle\\MoocMoocBundle',
                'EasyAdminBundle' => 'JavierEguiluz\\Bundle\\EasyAdminBundle\\EasyAdminBundle',
                'VichUploaderBundle' => 'Vich\\UploaderBundle\\VichUploaderBundle',
                'AvanzuAdminThemeBundle' => 'Avanzu\\AdminThemeBundle\\AvanzuAdminThemeBundle',
                'NomayaSocialBundle' => 'Nomaya\\SocialBundle\\NomayaSocialBundle',
                'StarRatingBundle' => 'blackknight467\\StarRatingBundle\\StarRatingBundle',
                'GregwarImageBundle' => 'Gregwar\\ImageBundle\\GregwarImageBundle',
                'DebugBundle' => 'Symfony\\Bundle\\DebugBundle\\DebugBundle',
                'WebProfilerBundle' => 'Symfony\\Bundle\\WebProfilerBundle\\WebProfilerBundle',
                'SensioDistributionBundle' => 'Sensio\\Bundle\\DistributionBundle\\SensioDistributionBundle',
                'SensioGeneratorBundle' => 'Sensio\\Bundle\\GeneratorBundle\\SensioGeneratorBundle',
            ),
            'kernel.charset' => 'UTF-8',
            'kernel.container_class' => 'appDevDebugProjectContainer',
            'database_driver' => 'pdo_mysql',
            'database_host' => '127.0.0.1',
            'database_port' => NULL,
            'database_name' => 'mooc',
            'database_user' => 'root',
            'database_password' => NULL,
            'mailer_transport' => 'gmail',
            'mailer_host' => 'smtp.gmail.com',
            'mailer_user' => 'mooc.smart.dev',
            'mailer_password' => 'mooctest',
            'locale' => 'fr',
            'secret' => 'ThisTokenIsNotSoSecretChangeIt',
            'app.path.formateur_images' => '/img/avatar',
            'app.path.formateur_cv' => '/file/cv',
            'controller_resolver.class' => 'Symfony\\Bundle\\FrameworkBundle\\Controller\\ControllerResolver',
            'controller_name_converter.class' => 'Symfony\\Bundle\\FrameworkBundle\\Controller\\ControllerNameParser',
            'response_listener.class' => 'Symfony\\Component\\HttpKernel\\EventListener\\ResponseListener',
            'streamed_response_listener.class' => 'Symfony\\Component\\HttpKernel\\EventListener\\StreamedResponseListener',
            'locale_listener.class' => 'Symfony\\Component\\HttpKernel\\EventListener\\LocaleListener',
            'event_dispatcher.class' => 'Symfony\\Component\\EventDispatcher\\ContainerAwareEventDispatcher',
            'http_kernel.class' => 'Symfony\\Component\\HttpKernel\\DependencyInjection\\ContainerAwareHttpKernel',
            'filesystem.class' => 'Symfony\\Component\\Filesystem\\Filesystem',
            'cache_warmer.class' => 'Symfony\\Component\\HttpKernel\\CacheWarmer\\CacheWarmerAggregate',
            'cache_clearer.class' => 'Symfony\\Component\\HttpKernel\\CacheClearer\\ChainCacheClearer',
            'file_locator.class' => 'Symfony\\Component\\HttpKernel\\Config\\FileLocator',
            'uri_signer.class' => 'Symfony\\Component\\HttpKernel\\UriSigner',
            'request_stack.class' => 'Symfony\\Component\\HttpFoundation\\RequestStack',
            'fragment.handler.class' => 'Symfony\\Component\\HttpKernel\\Fragment\\FragmentHandler',
            'fragment.renderer.inline.class' => 'Symfony\\Component\\HttpKernel\\Fragment\\InlineFragmentRenderer',
            'fragment.renderer.hinclude.class' => 'Symfony\\Bundle\\FrameworkBundle\\Fragment\\ContainerAwareHIncludeFragmentRenderer',
            'fragment.renderer.hinclude.global_template' => NULL,
            'fragment.renderer.esi.class' => 'Symfony\\Component\\HttpKernel\\Fragment\\EsiFragmentRenderer',
            'fragment.path' => '/_fragment',
            'translator.class' => 'Symfony\\Bundle\\FrameworkBundle\\Translation\\Translator',
            'translator.identity.class' => 'Symfony\\Component\\Translation\\IdentityTranslator',
            'translator.selector.class' => 'Symfony\\Component\\Translation\\MessageSelector',
            'translation.loader.php.class' => 'Symfony\\Component\\Translation\\Loader\\PhpFileLoader',
            'translation.loader.yml.class' => 'Symfony\\Component\\Translation\\Loader\\YamlFileLoader',
            'translation.loader.xliff.class' => 'Symfony\\Component\\Translation\\Loader\\XliffFileLoader',
            'translation.loader.po.class' => 'Symfony\\Component\\Translation\\Loader\\PoFileLoader',
            'translation.loader.mo.class' => 'Symfony\\Component\\Translation\\Loader\\MoFileLoader',
            'translation.loader.qt.class' => 'Symfony\\Component\\Translation\\Loader\\QtFileLoader',
            'translation.loader.csv.class' => 'Symfony\\Component\\Translation\\Loader\\CsvFileLoader',
            'translation.loader.res.class' => 'Symfony\\Component\\Translation\\Loader\\IcuResFileLoader',
            'translation.loader.dat.class' => 'Symfony\\Component\\Translation\\Loader\\IcuDatFileLoader',
            'translation.loader.ini.class' => 'Symfony\\Component\\Translation\\Loader\\IniFileLoader',
            'translation.loader.json.class' => 'Symfony\\Component\\Translation\\Loader\\JsonFileLoader',
            'translation.dumper.php.class' => 'Symfony\\Component\\Translation\\Dumper\\PhpFileDumper',
            'translation.dumper.xliff.class' => 'Symfony\\Component\\Translation\\Dumper\\XliffFileDumper',
            'translation.dumper.po.class' => 'Symfony\\Component\\Translation\\Dumper\\PoFileDumper',
            'translation.dumper.mo.class' => 'Symfony\\Component\\Translation\\Dumper\\MoFileDumper',
            'translation.dumper.yml.class' => 'Symfony\\Component\\Translation\\Dumper\\YamlFileDumper',
            'translation.dumper.qt.class' => 'Symfony\\Component\\Translation\\Dumper\\QtFileDumper',
            'translation.dumper.csv.class' => 'Symfony\\Component\\Translation\\Dumper\\CsvFileDumper',
            'translation.dumper.ini.class' => 'Symfony\\Component\\Translation\\Dumper\\IniFileDumper',
            'translation.dumper.json.class' => 'Symfony\\Component\\Translation\\Dumper\\JsonFileDumper',
            'translation.dumper.res.class' => 'Symfony\\Component\\Translation\\Dumper\\IcuResFileDumper',
            'translation.extractor.php.class' => 'Symfony\\Bundle\\FrameworkBundle\\Translation\\PhpExtractor',
            'translation.loader.class' => 'Symfony\\Bundle\\FrameworkBundle\\Translation\\TranslationLoader',
            'translation.extractor.class' => 'Symfony\\Component\\Translation\\Extractor\\ChainExtractor',
            'translation.writer.class' => 'Symfony\\Component\\Translation\\Writer\\TranslationWriter',
            'property_accessor.class' => 'Symfony\\Component\\PropertyAccess\\PropertyAccessor',
            'kernel.secret' => 'ThisTokenIsNotSoSecretChangeIt',
            'kernel.http_method_override' => true,
            'kernel.trusted_hosts' => array(

            ),
            'kernel.trusted_proxies' => array(

            ),
            'kernel.default_locale' => 'fr',
            'session.class' => 'Symfony\\Component\\HttpFoundation\\Session\\Session',
            'session.flashbag.class' => 'Symfony\\Component\\HttpFoundation\\Session\\Flash\\FlashBag',
            'session.attribute_bag.class' => 'Symfony\\Component\\HttpFoundation\\Session\\Attribute\\AttributeBag',
            'session.storage.metadata_bag.class' => 'Symfony\\Component\\HttpFoundation\\Session\\Storage\\MetadataBag',
            'session.metadata.storage_key' => '_sf2_meta',
            'session.storage.native.class' => 'Symfony\\Component\\HttpFoundation\\Session\\Storage\\NativeSessionStorage',
            'session.storage.php_bridge.class' => 'Symfony\\Component\\HttpFoundation\\Session\\Storage\\PhpBridgeSessionStorage',
            'session.storage.mock_file.class' => 'Symfony\\Component\\HttpFoundation\\Session\\Storage\\MockFileSessionStorage',
            'session.handler.native_file.class' => 'Symfony\\Component\\HttpFoundation\\Session\\Storage\\Handler\\NativeFileSessionHandler',
            'session.handler.write_check.class' => 'Symfony\\Component\\HttpFoundation\\Session\\Storage\\Handler\\WriteCheckSessionHandler',
            'session_listener.class' => 'Symfony\\Bundle\\FrameworkBundle\\EventListener\\SessionListener',
            'session.storage.options' => array(
                'gc_probability' => 1,
            ),
            'session.save_path' => (__DIR__.'/sessions'),
            'session.metadata.update_threshold' => '0',
            'security.secure_random.class' => 'Symfony\\Component\\Security\\Core\\Util\\SecureRandom',
            'form.resolved_type_factory.class' => 'Symfony\\Component\\Form\\ResolvedFormTypeFactory',
            'form.registry.class' => 'Symfony\\Component\\Form\\FormRegistry',
            'form.factory.class' => 'Symfony\\Component\\Form\\FormFactory',
            'form.extension.class' => 'Symfony\\Component\\Form\\Extension\\DependencyInjection\\DependencyInjectionExtension',
            'form.type_guesser.validator.class' => 'Symfony\\Component\\Form\\Extension\\Validator\\ValidatorTypeGuesser',
            'form.type_extension.form.request_handler.class' => 'Symfony\\Component\\Form\\Extension\\HttpFoundation\\HttpFoundationRequestHandler',
            'form.type_extension.csrf.enabled' => true,
            'form.type_extension.csrf.field_name' => '_token',
            'security.csrf.token_generator.class' => 'Symfony\\Component\\Security\\Csrf\\TokenGenerator\\UriSafeTokenGenerator',
            'security.csrf.token_storage.class' => 'Symfony\\Component\\Security\\Csrf\\TokenStorage\\SessionTokenStorage',
            'security.csrf.token_manager.class' => 'Symfony\\Component\\Security\\Csrf\\CsrfTokenManager',
            'templating.engine.delegating.class' => 'Symfony\\Bundle\\FrameworkBundle\\Templating\\DelegatingEngine',
            'templating.name_parser.class' => 'Symfony\\Bundle\\FrameworkBundle\\Templating\\TemplateNameParser',
            'templating.filename_parser.class' => 'Symfony\\Bundle\\FrameworkBundle\\Templating\\TemplateFilenameParser',
            'templating.cache_warmer.template_paths.class' => 'Symfony\\Bundle\\FrameworkBundle\\CacheWarmer\\TemplatePathsCacheWarmer',
            'templating.locator.class' => 'Symfony\\Bundle\\FrameworkBundle\\Templating\\Loader\\TemplateLocator',
            'templating.loader.filesystem.class' => 'Symfony\\Bundle\\FrameworkBundle\\Templating\\Loader\\FilesystemLoader',
            'templating.loader.cache.class' => 'Symfony\\Component\\Templating\\Loader\\CacheLoader',
            'templating.loader.chain.class' => 'Symfony\\Component\\Templating\\Loader\\ChainLoader',
            'templating.finder.class' => 'Symfony\\Bundle\\FrameworkBundle\\CacheWarmer\\TemplateFinder',
            'templating.engine.php.class' => 'Symfony\\Bundle\\FrameworkBundle\\Templating\\PhpEngine',
            'templating.helper.slots.class' => 'Symfony\\Component\\Templating\\Helper\\SlotsHelper',
            'templating.helper.assets.class' => 'Symfony\\Component\\Templating\\Helper\\CoreAssetsHelper',
            'templating.helper.actions.class' => 'Symfony\\Bundle\\FrameworkBundle\\Templating\\Helper\\ActionsHelper',
            'templating.helper.router.class' => 'Symfony\\Bundle\\FrameworkBundle\\Templating\\Helper\\RouterHelper',
            'templating.helper.request.class' => 'Symfony\\Bundle\\FrameworkBundle\\Templating\\Helper\\RequestHelper',
            'templating.helper.session.class' => 'Symfony\\Bundle\\FrameworkBundle\\Templating\\Helper\\SessionHelper',
            'templating.helper.code.class' => 'Symfony\\Bundle\\FrameworkBundle\\Templating\\Helper\\CodeHelper',
            'templating.helper.translator.class' => 'Symfony\\Bundle\\FrameworkBundle\\Templating\\Helper\\TranslatorHelper',
            'templating.helper.form.class' => 'Symfony\\Bundle\\FrameworkBundle\\Templating\\Helper\\FormHelper',
            'templating.helper.stopwatch.class' => 'Symfony\\Bundle\\FrameworkBundle\\Templating\\Helper\\StopwatchHelper',
            'templating.form.engine.class' => 'Symfony\\Component\\Form\\Extension\\Templating\\TemplatingRendererEngine',
            'templating.form.renderer.class' => 'Symfony\\Component\\Form\\FormRenderer',
            'templating.globals.class' => 'Symfony\\Bundle\\FrameworkBundle\\Templating\\GlobalVariables',
            'templating.asset.path_package.class' => 'Symfony\\Bundle\\FrameworkBundle\\Templating\\Asset\\PathPackage',
            'templating.asset.url_package.class' => 'Symfony\\Component\\Templating\\Asset\\UrlPackage',
            'templating.asset.package_factory.class' => 'Symfony\\Bundle\\FrameworkBundle\\Templating\\Asset\\PackageFactory',
            'templating.helper.code.file_link_format' => NULL,
            'templating.helper.form.resources' => array(
                0 => 'FrameworkBundle:Form',
            ),
            'debug.templating.engine.php.class' => 'Symfony\\Bundle\\FrameworkBundle\\Templating\\TimedPhpEngine',
            'templating.loader.cache.path' => NULL,
            'templating.engines' => array(
                0 => 'twig',
            ),
            'validator.class' => 'Symfony\\Component\\Validator\\ValidatorInterface',
            'validator.builder.class' => 'Symfony\\Component\\Validator\\ValidatorBuilderInterface',
            'validator.builder.factory.class' => 'Symfony\\Component\\Validator\\Validation',
            'validator.mapping.cache.apc.class' => 'Symfony\\Component\\Validator\\Mapping\\Cache\\ApcCache',
            'validator.mapping.cache.prefix' => '',
            'validator.validator_factory.class' => 'Symfony\\Bundle\\FrameworkBundle\\Validator\\ConstraintValidatorFactory',
            'validator.expression.class' => 'Symfony\\Component\\Validator\\Constraints\\ExpressionValidator',
            'validator.email.class' => 'Symfony\\Component\\Validator\\Constraints\\EmailValidator',
            'validator.translation_domain' => 'validators',
            'validator.api' => 3,
            'fragment.listener.class' => 'Symfony\\Component\\HttpKernel\\EventListener\\FragmentListener',
            'profiler.class' => 'Symfony\\Component\\HttpKernel\\Profiler\\Profiler',
            'profiler_listener.class' => 'Symfony\\Component\\HttpKernel\\EventListener\\ProfilerListener',
            'data_collector.config.class' => 'Symfony\\Component\\HttpKernel\\DataCollector\\ConfigDataCollector',
            'data_collector.request.class' => 'Symfony\\Component\\HttpKernel\\DataCollector\\RequestDataCollector',
            'data_collector.exception.class' => 'Symfony\\Component\\HttpKernel\\DataCollector\\ExceptionDataCollector',
            'data_collector.events.class' => 'Symfony\\Component\\HttpKernel\\DataCollector\\EventDataCollector',
            'data_collector.logger.class' => 'Symfony\\Component\\HttpKernel\\DataCollector\\LoggerDataCollector',
            'data_collector.time.class' => 'Symfony\\Component\\HttpKernel\\DataCollector\\TimeDataCollector',
            'data_collector.memory.class' => 'Symfony\\Component\\HttpKernel\\DataCollector\\MemoryDataCollector',
            'data_collector.router.class' => 'Symfony\\Bundle\\FrameworkBundle\\DataCollector\\RouterDataCollector',
            'form.resolved_type_factory.data_collector_proxy.class' => 'Symfony\\Component\\Form\\Extension\\DataCollector\\Proxy\\ResolvedTypeFactoryDataCollectorProxy',
            'form.type_extension.form.data_collector.class' => 'Symfony\\Component\\Form\\Extension\\DataCollector\\Type\\DataCollectorTypeExtension',
            'data_collector.form.class' => 'Symfony\\Component\\Form\\Extension\\DataCollector\\FormDataCollector',
            'data_collector.form.extractor.class' => 'Symfony\\Component\\Form\\Extension\\DataCollector\\FormDataExtractor',
            'profiler_listener.only_exceptions' => false,
            'profiler_listener.only_master_requests' => false,
            'profiler.storage.dsn' => ('file:'.__DIR__.'/profiler'),
            'profiler.storage.username' => '',
            'profiler.storage.password' => '',
            'profiler.storage.lifetime' => 86400,
            'translator.logging' => true,
            'router.class' => 'Symfony\\Bundle\\FrameworkBundle\\Routing\\Router',
            'router.request_context.class' => 'Symfony\\Component\\Routing\\RequestContext',
            'routing.loader.class' => 'Symfony\\Bundle\\FrameworkBundle\\Routing\\DelegatingLoader',
            'routing.resolver.class' => 'Symfony\\Component\\Config\\Loader\\LoaderResolver',
            'routing.loader.xml.class' => 'Symfony\\Component\\Routing\\Loader\\XmlFileLoader',
            'routing.loader.yml.class' => 'Symfony\\Component\\Routing\\Loader\\YamlFileLoader',
            'routing.loader.php.class' => 'Symfony\\Component\\Routing\\Loader\\PhpFileLoader',
            'router.options.generator_class' => 'Symfony\\Component\\Routing\\Generator\\UrlGenerator',
            'router.options.generator_base_class' => 'Symfony\\Component\\Routing\\Generator\\UrlGenerator',
            'router.options.generator_dumper_class' => 'Symfony\\Component\\Routing\\Generator\\Dumper\\PhpGeneratorDumper',
            'router.options.matcher_class' => 'Symfony\\Bundle\\FrameworkBundle\\Routing\\RedirectableUrlMatcher',
            'router.options.matcher_base_class' => 'Symfony\\Bundle\\FrameworkBundle\\Routing\\RedirectableUrlMatcher',
            'router.options.matcher_dumper_class' => 'Symfony\\Component\\Routing\\Matcher\\Dumper\\PhpMatcherDumper',
            'router.cache_warmer.class' => 'Symfony\\Bundle\\FrameworkBundle\\CacheWarmer\\RouterCacheWarmer',
            'router.options.matcher.cache_class' => 'appDevUrlMatcher',
            'router.options.generator.cache_class' => 'appDevUrlGenerator',
            'router_listener.class' => 'Symfony\\Component\\HttpKernel\\EventListener\\RouterListener',
            'router.request_context.host' => 'localhost',
            'router.request_context.scheme' => 'http',
            'router.request_context.base_url' => '',
            'router.resource' => ($this->targetDirs[2].'/config/routing_dev.yml'),
            'router.cache_class_prefix' => 'appDev',
            'request_listener.http_port' => 80,
            'request_listener.https_port' => 443,
            'annotations.reader.class' => 'Doctrine\\Common\\Annotations\\AnnotationReader',
            'annotations.cached_reader.class' => 'Doctrine\\Common\\Annotations\\CachedReader',
            'annotations.file_cache_reader.class' => 'Doctrine\\Common\\Annotations\\FileCacheReader',
            'debug.debug_handlers_listener.class' => 'Symfony\\Component\\HttpKernel\\EventListener\\DebugHandlersListener',
            'debug.stopwatch.class' => 'Symfony\\Component\\Stopwatch\\Stopwatch',
            'debug.error_handler.throw_at' => -1,
            'debug.event_dispatcher.class' => 'Symfony\\Component\\HttpKernel\\Debug\\TraceableEventDispatcher',
            'debug.container.dump' => (__DIR__.'/appDevDebugProjectContainer.xml'),
            'debug.controller_resolver.class' => 'Symfony\\Component\\HttpKernel\\Controller\\TraceableControllerResolver',
            'security.context.class' => 'Symfony\\Component\\Security\\Core\\SecurityContext',
            'security.user_checker.class' => 'Symfony\\Component\\Security\\Core\\User\\UserChecker',
            'security.encoder_factory.generic.class' => 'Symfony\\Component\\Security\\Core\\Encoder\\EncoderFactory',
            'security.encoder.digest.class' => 'Symfony\\Component\\Security\\Core\\Encoder\\MessageDigestPasswordEncoder',
            'security.encoder.plain.class' => 'Symfony\\Component\\Security\\Core\\Encoder\\PlaintextPasswordEncoder',
            'security.encoder.pbkdf2.class' => 'Symfony\\Component\\Security\\Core\\Encoder\\Pbkdf2PasswordEncoder',
            'security.encoder.bcrypt.class' => 'Symfony\\Component\\Security\\Core\\Encoder\\BCryptPasswordEncoder',
            'security.user.provider.in_memory.class' => 'Symfony\\Component\\Security\\Core\\User\\InMemoryUserProvider',
            'security.user.provider.in_memory.user.class' => 'Symfony\\Component\\Security\\Core\\User\\User',
            'security.user.provider.chain.class' => 'Symfony\\Component\\Security\\Core\\User\\ChainUserProvider',
            'security.authentication.trust_resolver.class' => 'Symfony\\Component\\Security\\Core\\Authentication\\AuthenticationTrustResolver',
            'security.authentication.trust_resolver.anonymous_class' => 'Symfony\\Component\\Security\\Core\\Authentication\\Token\\AnonymousToken',
            'security.authentication.trust_resolver.rememberme_class' => 'Symfony\\Component\\Security\\Core\\Authentication\\Token\\RememberMeToken',
            'security.authentication.manager.class' => 'Symfony\\Component\\Security\\Core\\Authentication\\AuthenticationProviderManager',
            'security.authentication.session_strategy.class' => 'Symfony\\Component\\Security\\Http\\Session\\SessionAuthenticationStrategy',
            'security.access.decision_manager.class' => 'Symfony\\Component\\Security\\Core\\Authorization\\AccessDecisionManager',
            'security.access.simple_role_voter.class' => 'Symfony\\Component\\Security\\Core\\Authorization\\Voter\\RoleVoter',
            'security.access.authenticated_voter.class' => 'Symfony\\Component\\Security\\Core\\Authorization\\Voter\\AuthenticatedVoter',
            'security.access.role_hierarchy_voter.class' => 'Symfony\\Component\\Security\\Core\\Authorization\\Voter\\RoleHierarchyVoter',
            'security.access.expression_voter.class' => 'Symfony\\Component\\Security\\Core\\Authorization\\Voter\\ExpressionVoter',
            'security.firewall.class' => 'Symfony\\Component\\Security\\Http\\Firewall',
            'security.firewall.map.class' => 'Symfony\\Bundle\\SecurityBundle\\Security\\FirewallMap',
            'security.firewall.context.class' => 'Symfony\\Bundle\\SecurityBundle\\Security\\FirewallContext',
            'security.matcher.class' => 'Symfony\\Component\\HttpFoundation\\RequestMatcher',
            'security.expression_matcher.class' => 'Symfony\\Component\\HttpFoundation\\ExpressionRequestMatcher',
            'security.role_hierarchy.class' => 'Symfony\\Component\\Security\\Core\\Role\\RoleHierarchy',
            'security.http_utils.class' => 'Symfony\\Component\\Security\\Http\\HttpUtils',
            'security.validator.user_password.class' => 'Symfony\\Component\\Security\\Core\\Validator\\Constraints\\UserPasswordValidator',
            'security.expression_language.class' => 'Symfony\\Component\\Security\\Core\\Authorization\\ExpressionLanguage',
            'security.authentication.retry_entry_point.class' => 'Symfony\\Component\\Security\\Http\\EntryPoint\\RetryAuthenticationEntryPoint',
            'security.channel_listener.class' => 'Symfony\\Component\\Security\\Http\\Firewall\\ChannelListener',
            'security.authentication.form_entry_point.class' => 'Symfony\\Component\\Security\\Http\\EntryPoint\\FormAuthenticationEntryPoint',
            'security.authentication.listener.form.class' => 'Symfony\\Component\\Security\\Http\\Firewall\\UsernamePasswordFormAuthenticationListener',
            'security.authentication.listener.simple_form.class' => 'Symfony\\Component\\Security\\Http\\Firewall\\SimpleFormAuthenticationListener',
            'security.authentication.listener.simple_preauth.class' => 'Symfony\\Component\\Security\\Http\\Firewall\\SimplePreAuthenticationListener',
            'security.authentication.listener.basic.class' => 'Symfony\\Component\\Security\\Http\\Firewall\\BasicAuthenticationListener',
            'security.authentication.basic_entry_point.class' => 'Symfony\\Component\\Security\\Http\\EntryPoint\\BasicAuthenticationEntryPoint',
            'security.authentication.listener.digest.class' => 'Symfony\\Component\\Security\\Http\\Firewall\\DigestAuthenticationListener',
            'security.authentication.digest_entry_point.class' => 'Symfony\\Component\\Security\\Http\\EntryPoint\\DigestAuthenticationEntryPoint',
            'security.authentication.listener.x509.class' => 'Symfony\\Component\\Security\\Http\\Firewall\\X509AuthenticationListener',
            'security.authentication.listener.anonymous.class' => 'Symfony\\Component\\Security\\Http\\Firewall\\AnonymousAuthenticationListener',
            'security.authentication.switchuser_listener.class' => 'Symfony\\Component\\Security\\Http\\Firewall\\SwitchUserListener',
            'security.logout_listener.class' => 'Symfony\\Component\\Security\\Http\\Firewall\\LogoutListener',
            'security.logout.handler.session.class' => 'Symfony\\Component\\Security\\Http\\Logout\\SessionLogoutHandler',
            'security.logout.handler.cookie_clearing.class' => 'Symfony\\Component\\Security\\Http\\Logout\\CookieClearingLogoutHandler',
            'security.logout.success_handler.class' => 'Symfony\\Component\\Security\\Http\\Logout\\DefaultLogoutSuccessHandler',
            'security.access_listener.class' => 'Symfony\\Component\\Security\\Http\\Firewall\\AccessListener',
            'security.access_map.class' => 'Symfony\\Component\\Security\\Http\\AccessMap',
            'security.exception_listener.class' => 'Symfony\\Component\\Security\\Http\\Firewall\\ExceptionListener',
            'security.context_listener.class' => 'Symfony\\Component\\Security\\Http\\Firewall\\ContextListener',
            'security.authentication.provider.dao.class' => 'Symfony\\Component\\Security\\Core\\Authentication\\Provider\\DaoAuthenticationProvider',
            'security.authentication.provider.simple.class' => 'Symfony\\Component\\Security\\Core\\Authentication\\Provider\\SimpleAuthenticationProvider',
            'security.authentication.provider.pre_authenticated.class' => 'Symfony\\Component\\Security\\Core\\Authentication\\Provider\\PreAuthenticatedAuthenticationProvider',
            'security.authentication.provider.anonymous.class' => 'Symfony\\Component\\Security\\Core\\Authentication\\Provider\\AnonymousAuthenticationProvider',
            'security.authentication.success_handler.class' => 'Symfony\\Component\\Security\\Http\\Authentication\\DefaultAuthenticationSuccessHandler',
            'security.authentication.failure_handler.class' => 'Symfony\\Component\\Security\\Http\\Authentication\\DefaultAuthenticationFailureHandler',
            'security.authentication.simple_success_failure_handler.class' => 'Symfony\\Component\\Security\\Http\\Authentication\\SimpleAuthenticationHandler',
            'security.authentication.provider.rememberme.class' => 'Symfony\\Component\\Security\\Core\\Authentication\\Provider\\RememberMeAuthenticationProvider',
            'security.authentication.listener.rememberme.class' => 'Symfony\\Component\\Security\\Http\\Firewall\\RememberMeListener',
            'security.rememberme.token.provider.in_memory.class' => 'Symfony\\Component\\Security\\Core\\Authentication\\RememberMe\\InMemoryTokenProvider',
            'security.authentication.rememberme.services.persistent.class' => 'Symfony\\Component\\Security\\Http\\RememberMe\\PersistentTokenBasedRememberMeServices',
            'security.authentication.rememberme.services.simplehash.class' => 'Symfony\\Component\\Security\\Http\\RememberMe\\TokenBasedRememberMeServices',
            'security.rememberme.response_listener.class' => 'Symfony\\Component\\Security\\Http\\RememberMe\\ResponseListener',
            'templating.helper.logout_url.class' => 'Symfony\\Bundle\\SecurityBundle\\Templating\\Helper\\LogoutUrlHelper',
            'templating.helper.security.class' => 'Symfony\\Bundle\\SecurityBundle\\Templating\\Helper\\SecurityHelper',
            'twig.extension.logout_url.class' => 'Symfony\\Bundle\\SecurityBundle\\Twig\\Extension\\LogoutUrlExtension',
            'twig.extension.security.class' => 'Symfony\\Bridge\\Twig\\Extension\\SecurityExtension',
            'data_collector.security.class' => 'Symfony\\Bundle\\SecurityBundle\\DataCollector\\SecurityDataCollector',
            'security.access.denied_url' => NULL,
            'security.authentication.manager.erase_credentials' => true,
            'security.authentication.session_strategy.strategy' => 'migrate',
            'security.access.always_authenticate_before_granting' => false,
            'security.authentication.hide_user_not_found' => true,
            'security.role_hierarchy.roles' => array(
                'ROLE_ADMIN' => array(
                    0 => 'ROLE_USER',
                ),
                'ROLE_SUPER_ADMIN' => array(
                    0 => 'ROLE_USER',
                    1 => 'ROLE_ADMIN',
                    2 => 'ROLE_ALLOWED_TO_SWITCH',
                ),
            ),
            'twig.class' => 'Twig_Environment',
            'twig.loader.filesystem.class' => 'Symfony\\Bundle\\TwigBundle\\Loader\\FilesystemLoader',
            'twig.loader.chain.class' => 'Twig_Loader_Chain',
            'templating.engine.twig.class' => 'Symfony\\Bundle\\TwigBundle\\TwigEngine',
            'twig.cache_warmer.class' => 'Symfony\\Bundle\\TwigBundle\\CacheWarmer\\TemplateCacheCacheWarmer',
            'twig.extension.trans.class' => 'Symfony\\Bridge\\Twig\\Extension\\TranslationExtension',
            'twig.extension.assets.class' => 'Symfony\\Bundle\\TwigBundle\\Extension\\AssetsExtension',
            'twig.extension.actions.class' => 'Symfony\\Bundle\\TwigBundle\\Extension\\ActionsExtension',
            'twig.extension.code.class' => 'Symfony\\Bridge\\Twig\\Extension\\CodeExtension',
            'twig.extension.routing.class' => 'Symfony\\Bridge\\Twig\\Extension\\RoutingExtension',
            'twig.extension.yaml.class' => 'Symfony\\Bridge\\Twig\\Extension\\YamlExtension',
            'twig.extension.form.class' => 'Symfony\\Bridge\\Twig\\Extension\\FormExtension',
            'twig.extension.httpkernel.class' => 'Symfony\\Bridge\\Twig\\Extension\\HttpKernelExtension',
            'twig.extension.debug.stopwatch.class' => 'Symfony\\Bridge\\Twig\\Extension\\StopwatchExtension',
            'twig.extension.expression.class' => 'Symfony\\Bridge\\Twig\\Extension\\ExpressionExtension',
            'twig.form.engine.class' => 'Symfony\\Bridge\\Twig\\Form\\TwigRendererEngine',
            'twig.form.renderer.class' => 'Symfony\\Bridge\\Twig\\Form\\TwigRenderer',
            'twig.translation.extractor.class' => 'Symfony\\Bridge\\Twig\\Translation\\TwigExtractor',
            'twig.exception_listener.class' => 'Symfony\\Component\\HttpKernel\\EventListener\\ExceptionListener',
            'twig.controller.exception.class' => 'Avanzu\\AdminThemeBundle\\Controller\\ExceptionController',
            'twig.controller.preview_error.class' => 'Symfony\\Bundle\\TwigBundle\\Controller\\PreviewErrorController',
            'twig.exception_listener.controller' => 'twig.controller.exception:showAction',
            'twig.form.resources' => array(
                0 => 'StarRatingBundle::rating.html.twig',
                1 => 'form_div_layout.html.twig',
                2 => 'AvanzuAdminThemeBundle:layout:form-theme.html.twig',
            ),
            'debug.templating.engine.twig.class' => 'Symfony\\Bundle\\TwigBundle\\Debug\\TimedTwigEngine',
            'twig.options' => array(
                'form_themes' => array(
                    0 => 'form_div_layout.html.twig',
                    1 => 'AvanzuAdminThemeBundle:layout:form-theme.html.twig',
                ),
                'debug' => true,
                'strict_variables' => true,
                'exception_controller' => 'twig.controller.exception:showAction',
                'autoescape' => array(
                    0 => 'Symfony\\Bundle\\TwigBundle\\TwigDefaultEscapingStrategy',
                    1 => 'guess',
                ),
                'cache' => (__DIR__.'/twig'),
                'charset' => 'UTF-8',
                'paths' => array(

                ),
            ),
            'monolog.logger.class' => 'Symfony\\Bridge\\Monolog\\Logger',
            'monolog.gelf.publisher.class' => 'Gelf\\MessagePublisher',
            'monolog.gelfphp.publisher.class' => 'Gelf\\Publisher',
            'monolog.handler.stream.class' => 'Monolog\\Handler\\StreamHandler',
            'monolog.handler.console.class' => 'Symfony\\Bridge\\Monolog\\Handler\\ConsoleHandler',
            'monolog.handler.group.class' => 'Monolog\\Handler\\GroupHandler',
            'monolog.handler.buffer.class' => 'Monolog\\Handler\\BufferHandler',
            'monolog.handler.deduplication.class' => 'Monolog\\Handler\\DeduplicationHandler',
            'monolog.handler.rotating_file.class' => 'Monolog\\Handler\\RotatingFileHandler',
            'monolog.handler.syslog.class' => 'Monolog\\Handler\\SyslogHandler',
            'monolog.handler.syslogudp.class' => 'Monolog\\Handler\\SyslogUdpHandler',
            'monolog.handler.null.class' => 'Monolog\\Handler\\NullHandler',
            'monolog.handler.test.class' => 'Monolog\\Handler\\TestHandler',
            'monolog.handler.gelf.class' => 'Monolog\\Handler\\GelfHandler',
            'monolog.handler.rollbar.class' => 'Monolog\\Handler\\RollbarHandler',
            'monolog.handler.flowdock.class' => 'Monolog\\Handler\\FlowdockHandler',
            'monolog.handler.browser_console.class' => 'Monolog\\Handler\\BrowserConsoleHandler',
            'monolog.handler.firephp.class' => 'Symfony\\Bridge\\Monolog\\Handler\\FirePHPHandler',
            'monolog.handler.chromephp.class' => 'Symfony\\Bridge\\Monolog\\Handler\\ChromePhpHandler',
            'monolog.handler.debug.class' => 'Symfony\\Bridge\\Monolog\\Handler\\DebugHandler',
            'monolog.handler.swift_mailer.class' => 'Symfony\\Bridge\\Monolog\\Handler\\SwiftMailerHandler',
            'monolog.handler.native_mailer.class' => 'Monolog\\Handler\\NativeMailerHandler',
            'monolog.handler.socket.class' => 'Monolog\\Handler\\SocketHandler',
            'monolog.handler.pushover.class' => 'Monolog\\Handler\\PushoverHandler',
            'monolog.handler.raven.class' => 'Monolog\\Handler\\RavenHandler',
            'monolog.handler.newrelic.class' => 'Monolog\\Handler\\NewRelicHandler',
            'monolog.handler.hipchat.class' => 'Monolog\\Handler\\HipChatHandler',
            'monolog.handler.slack.class' => 'Monolog\\Handler\\SlackHandler',
            'monolog.handler.cube.class' => 'Monolog\\Handler\\CubeHandler',
            'monolog.handler.amqp.class' => 'Monolog\\Handler\\AmqpHandler',
            'monolog.handler.error_log.class' => 'Monolog\\Handler\\ErrorLogHandler',
            'monolog.handler.loggly.class' => 'Monolog\\Handler\\LogglyHandler',
            'monolog.handler.logentries.class' => 'Monolog\\Handler\\LogEntriesHandler',
            'monolog.handler.whatfailuregroup.class' => 'Monolog\\Handler\\WhatFailureGroupHandler',
            'monolog.activation_strategy.not_found.class' => 'Symfony\\Bundle\\MonologBundle\\NotFoundActivationStrategy',
            'monolog.handler.fingers_crossed.class' => 'Monolog\\Handler\\FingersCrossedHandler',
            'monolog.handler.fingers_crossed.error_level_activation_strategy.class' => 'Monolog\\Handler\\FingersCrossed\\ErrorLevelActivationStrategy',
            'monolog.handler.filter.class' => 'Monolog\\Handler\\FilterHandler',
            'monolog.handler.mongo.class' => 'Monolog\\Handler\\MongoDBHandler',
            'monolog.mongo.client.class' => 'MongoClient',
            'monolog.handler.elasticsearch.class' => 'Monolog\\Handler\\ElasticSearchHandler',
            'monolog.elastica.client.class' => 'Elastica\\Client',
            'monolog.use_microseconds' => true,
            'monolog.swift_mailer.handlers' => array(

            ),
            'monolog.handlers_to_channels' => array(
                'monolog.handler.console_very_verbose' => array(
                    'type' => 'inclusive',
                    'elements' => array(
                        0 => 'doctrine',
                    ),
                ),
                'monolog.handler.console' => array(
                    'type' => 'exclusive',
                    'elements' => array(
                        0 => 'doctrine',
                    ),
                ),
                'monolog.handler.main' => NULL,
            ),
            'swiftmailer.class' => 'Swift_Mailer',
            'swiftmailer.transport.sendmail.class' => 'Swift_Transport_SendmailTransport',
            'swiftmailer.transport.mail.class' => 'Swift_Transport_MailTransport',
            'swiftmailer.transport.failover.class' => 'Swift_Transport_FailoverTransport',
            'swiftmailer.plugin.redirecting.class' => 'Swift_Plugins_RedirectingPlugin',
            'swiftmailer.plugin.impersonate.class' => 'Swift_Plugins_ImpersonatePlugin',
            'swiftmailer.plugin.messagelogger.class' => 'Swift_Plugins_MessageLogger',
            'swiftmailer.plugin.antiflood.class' => 'Swift_Plugins_AntiFloodPlugin',
            'swiftmailer.transport.smtp.class' => 'Swift_Transport_EsmtpTransport',
            'swiftmailer.plugin.blackhole.class' => 'Swift_Plugins_BlackholePlugin',
            'swiftmailer.spool.file.class' => 'Swift_FileSpool',
            'swiftmailer.spool.memory.class' => 'Swift_MemorySpool',
            'swiftmailer.email_sender.listener.class' => 'Symfony\\Bundle\\SwiftmailerBundle\\EventListener\\EmailSenderListener',
            'swiftmailer.data_collector.class' => 'Symfony\\Bundle\\SwiftmailerBundle\\DataCollector\\MessageDataCollector',
            'swiftmailer.mailer.default.transport.name' => 'smtp',
            'swiftmailer.mailer.default.delivery.enabled' => true,
            'swiftmailer.mailer.default.transport.smtp.encryption' => 'ssl',
            'swiftmailer.mailer.default.transport.smtp.port' => 465,
            'swiftmailer.mailer.default.transport.smtp.host' => 'smtp.gmail.com',
            'swiftmailer.mailer.default.transport.smtp.username' => 'mooc.smart.dev',
            'swiftmailer.mailer.default.transport.smtp.password' => 'mooctest',
            'swiftmailer.mailer.default.transport.smtp.auth_mode' => 'login',
            'swiftmailer.mailer.default.transport.smtp.timeout' => 30,
            'swiftmailer.mailer.default.transport.smtp.source_ip' => NULL,
            'swiftmailer.spool.default.memory.path' => (__DIR__.'/swiftmailer/spool/default'),
            'swiftmailer.mailer.default.spool.enabled' => true,
            'swiftmailer.mailer.default.plugin.impersonate' => NULL,
            'swiftmailer.mailer.default.single_address' => NULL,
            'swiftmailer.spool.enabled' => true,
            'swiftmailer.delivery.enabled' => true,
            'swiftmailer.single_address' => NULL,
            'swiftmailer.mailers' => array(
                'default' => 'swiftmailer.mailer.default',
            ),
            'swiftmailer.default_mailer' => 'default',
            'assetic.asset_factory.class' => 'Symfony\\Bundle\\AsseticBundle\\Factory\\AssetFactory',
            'assetic.asset_manager.class' => 'Assetic\\Factory\\LazyAssetManager',
            'assetic.asset_manager_cache_warmer.class' => 'Symfony\\Bundle\\AsseticBundle\\CacheWarmer\\AssetManagerCacheWarmer',
            'assetic.cached_formula_loader.class' => 'Assetic\\Factory\\Loader\\CachedFormulaLoader',
            'assetic.config_cache.class' => 'Assetic\\Cache\\ConfigCache',
            'assetic.config_loader.class' => 'Symfony\\Bundle\\AsseticBundle\\Factory\\Loader\\ConfigurationLoader',
            'assetic.config_resource.class' => 'Symfony\\Bundle\\AsseticBundle\\Factory\\Resource\\ConfigurationResource',
            'assetic.coalescing_directory_resource.class' => 'Symfony\\Bundle\\AsseticBundle\\Factory\\Resource\\CoalescingDirectoryResource',
            'assetic.directory_resource.class' => 'Symfony\\Bundle\\AsseticBundle\\Factory\\Resource\\DirectoryResource',
            'assetic.filter_manager.class' => 'Symfony\\Bundle\\AsseticBundle\\FilterManager',
            'assetic.worker.ensure_filter.class' => 'Assetic\\Factory\\Worker\\EnsureFilterWorker',
            'assetic.worker.cache_busting.class' => 'Assetic\\Factory\\Worker\\CacheBustingWorker',
            'assetic.value_supplier.class' => 'Symfony\\Bundle\\AsseticBundle\\DefaultValueSupplier',
            'assetic.node.paths' => array(

            ),
            'assetic.cache_dir' => (__DIR__.'/assetic'),
            'assetic.bundles' => array(
                0 => 'AvanzuAdminThemeBundle',
            ),
            'assetic.twig_extension.class' => 'Symfony\\Bundle\\AsseticBundle\\Twig\\AsseticExtension',
            'assetic.twig_formula_loader.class' => 'Assetic\\Extension\\Twig\\TwigFormulaLoader',
            'assetic.helper.dynamic.class' => 'Symfony\\Bundle\\AsseticBundle\\Templating\\DynamicAsseticHelper',
            'assetic.helper.static.class' => 'Symfony\\Bundle\\AsseticBundle\\Templating\\StaticAsseticHelper',
            'assetic.php_formula_loader.class' => 'Symfony\\Bundle\\AsseticBundle\\Factory\\Loader\\AsseticHelperFormulaLoader',
            'assetic.debug' => true,
            'assetic.use_controller' => false,
            'assetic.enable_profiler' => false,
            'assetic.read_from' => ($this->targetDirs[2].'/../web'),
            'assetic.write_to' => ($this->targetDirs[2].'/../web'),
            'assetic.variables' => array(

            ),
            'assetic.java.bin' => 'C:\\ProgramData\\Oracle\\Java\\javapath\\java.EXE',
            'assetic.node.bin' => '/usr/bin/node',
            'assetic.ruby.bin' => '/usr/bin/ruby',
            'assetic.sass.bin' => '/usr/bin/sass',
            'assetic.reactjsx.bin' => '/usr/bin/jsx',
            'assetic.filter.cssrewrite.class' => 'Assetic\\Filter\\CssRewriteFilter',
            'assetic.twig_extension.functions' => array(

            ),
            'doctrine_cache.apc.class' => 'Doctrine\\Common\\Cache\\ApcCache',
            'doctrine_cache.apcu.class' => 'Doctrine\\Common\\Cache\\ApcuCache',
            'doctrine_cache.array.class' => 'Doctrine\\Common\\Cache\\ArrayCache',
            'doctrine_cache.chain.class' => 'Doctrine\\Common\\Cache\\ChainCache',
            'doctrine_cache.couchbase.class' => 'Doctrine\\Common\\Cache\\CouchbaseCache',
            'doctrine_cache.couchbase.connection.class' => 'Couchbase',
            'doctrine_cache.couchbase.hostnames' => 'localhost:8091',
            'doctrine_cache.file_system.class' => 'Doctrine\\Common\\Cache\\FilesystemCache',
            'doctrine_cache.php_file.class' => 'Doctrine\\Common\\Cache\\PhpFileCache',
            'doctrine_cache.memcache.class' => 'Doctrine\\Common\\Cache\\MemcacheCache',
            'doctrine_cache.memcache.connection.class' => 'Memcache',
            'doctrine_cache.memcache.host' => 'localhost',
            'doctrine_cache.memcache.port' => 11211,
            'doctrine_cache.memcached.class' => 'Doctrine\\Common\\Cache\\MemcachedCache',
            'doctrine_cache.memcached.connection.class' => 'Memcached',
            'doctrine_cache.memcached.host' => 'localhost',
            'doctrine_cache.memcached.port' => 11211,
            'doctrine_cache.mongodb.class' => 'Doctrine\\Common\\Cache\\MongoDBCache',
            'doctrine_cache.mongodb.collection.class' => 'MongoCollection',
            'doctrine_cache.mongodb.connection.class' => 'MongoClient',
            'doctrine_cache.mongodb.server' => 'localhost:27017',
            'doctrine_cache.predis.client.class' => 'Predis\\Client',
            'doctrine_cache.predis.scheme' => 'tcp',
            'doctrine_cache.predis.host' => 'localhost',
            'doctrine_cache.predis.port' => 6379,
            'doctrine_cache.redis.class' => 'Doctrine\\Common\\Cache\\RedisCache',
            'doctrine_cache.redis.connection.class' => 'Redis',
            'doctrine_cache.redis.host' => 'localhost',
            'doctrine_cache.redis.port' => 6379,
            'doctrine_cache.riak.class' => 'Doctrine\\Common\\Cache\\RiakCache',
            'doctrine_cache.riak.bucket.class' => 'Riak\\Bucket',
            'doctrine_cache.riak.connection.class' => 'Riak\\Connection',
            'doctrine_cache.riak.bucket_property_list.class' => 'Riak\\BucketPropertyList',
            'doctrine_cache.riak.host' => 'localhost',
            'doctrine_cache.riak.port' => 8087,
            'doctrine_cache.sqlite3.class' => 'Doctrine\\Common\\Cache\\SQLite3Cache',
            'doctrine_cache.sqlite3.connection.class' => 'SQLite3',
            'doctrine_cache.void.class' => 'Doctrine\\Common\\Cache\\VoidCache',
            'doctrine_cache.wincache.class' => 'Doctrine\\Common\\Cache\\WinCacheCache',
            'doctrine_cache.xcache.class' => 'Doctrine\\Common\\Cache\\XcacheCache',
            'doctrine_cache.zenddata.class' => 'Doctrine\\Common\\Cache\\ZendDataCache',
            'doctrine_cache.security.acl.cache.class' => 'Doctrine\\Bundle\\DoctrineCacheBundle\\Acl\\Model\\AclCache',
            'doctrine.dbal.logger.chain.class' => 'Doctrine\\DBAL\\Logging\\LoggerChain',
            'doctrine.dbal.logger.profiling.class' => 'Doctrine\\DBAL\\Logging\\DebugStack',
            'doctrine.dbal.logger.class' => 'Symfony\\Bridge\\Doctrine\\Logger\\DbalLogger',
            'doctrine.dbal.configuration.class' => 'Doctrine\\DBAL\\Configuration',
            'doctrine.data_collector.class' => 'Doctrine\\Bundle\\DoctrineBundle\\DataCollector\\DoctrineDataCollector',
            'doctrine.dbal.connection.event_manager.class' => 'Symfony\\Bridge\\Doctrine\\ContainerAwareEventManager',
            'doctrine.dbal.connection_factory.class' => 'Doctrine\\Bundle\\DoctrineBundle\\ConnectionFactory',
            'doctrine.dbal.events.mysql_session_init.class' => 'Doctrine\\DBAL\\Event\\Listeners\\MysqlSessionInit',
            'doctrine.dbal.events.oracle_session_init.class' => 'Doctrine\\DBAL\\Event\\Listeners\\OracleSessionInit',
            'doctrine.class' => 'Doctrine\\Bundle\\DoctrineBundle\\Registry',
            'doctrine.entity_managers' => array(
                'default' => 'doctrine.orm.default_entity_manager',
            ),
            'doctrine.default_entity_manager' => 'default',
            'doctrine.dbal.connection_factory.types' => array(

            ),
            'doctrine.connections' => array(
                'default' => 'doctrine.dbal.default_connection',
            ),
            'doctrine.default_connection' => 'default',
            'doctrine.orm.configuration.class' => 'Doctrine\\ORM\\Configuration',
            'doctrine.orm.entity_manager.class' => 'Doctrine\\ORM\\EntityManager',
            'doctrine.orm.manager_configurator.class' => 'Doctrine\\Bundle\\DoctrineBundle\\ManagerConfigurator',
            'doctrine.orm.cache.array.class' => 'Doctrine\\Common\\Cache\\ArrayCache',
            'doctrine.orm.cache.apc.class' => 'Doctrine\\Common\\Cache\\ApcCache',
            'doctrine.orm.cache.memcache.class' => 'Doctrine\\Common\\Cache\\MemcacheCache',
            'doctrine.orm.cache.memcache_host' => 'localhost',
            'doctrine.orm.cache.memcache_port' => 11211,
            'doctrine.orm.cache.memcache_instance.class' => 'Memcache',
            'doctrine.orm.cache.memcached.class' => 'Doctrine\\Common\\Cache\\MemcachedCache',
            'doctrine.orm.cache.memcached_host' => 'localhost',
            'doctrine.orm.cache.memcached_port' => 11211,
            'doctrine.orm.cache.memcached_instance.class' => 'Memcached',
            'doctrine.orm.cache.redis.class' => 'Doctrine\\Common\\Cache\\RedisCache',
            'doctrine.orm.cache.redis_host' => 'localhost',
            'doctrine.orm.cache.redis_port' => 6379,
            'doctrine.orm.cache.redis_instance.class' => 'Redis',
            'doctrine.orm.cache.xcache.class' => 'Doctrine\\Common\\Cache\\XcacheCache',
            'doctrine.orm.cache.wincache.class' => 'Doctrine\\Common\\Cache\\WinCacheCache',
            'doctrine.orm.cache.zenddata.class' => 'Doctrine\\Common\\Cache\\ZendDataCache',
            'doctrine.orm.metadata.driver_chain.class' => 'Doctrine\\Common\\Persistence\\Mapping\\Driver\\MappingDriverChain',
            'doctrine.orm.metadata.annotation.class' => 'Doctrine\\ORM\\Mapping\\Driver\\AnnotationDriver',
            'doctrine.orm.metadata.xml.class' => 'Doctrine\\ORM\\Mapping\\Driver\\SimplifiedXmlDriver',
            'doctrine.orm.metadata.yml.class' => 'Doctrine\\ORM\\Mapping\\Driver\\SimplifiedYamlDriver',
            'doctrine.orm.metadata.php.class' => 'Doctrine\\ORM\\Mapping\\Driver\\PHPDriver',
            'doctrine.orm.metadata.staticphp.class' => 'Doctrine\\ORM\\Mapping\\Driver\\StaticPHPDriver',
            'doctrine.orm.proxy_cache_warmer.class' => 'Symfony\\Bridge\\Doctrine\\CacheWarmer\\ProxyCacheWarmer',
            'form.type_guesser.doctrine.class' => 'Symfony\\Bridge\\Doctrine\\Form\\DoctrineOrmTypeGuesser',
            'doctrine.orm.validator.unique.class' => 'Symfony\\Bridge\\Doctrine\\Validator\\Constraints\\UniqueEntityValidator',
            'doctrine.orm.validator_initializer.class' => 'Symfony\\Bridge\\Doctrine\\Validator\\DoctrineInitializer',
            'doctrine.orm.security.user.provider.class' => 'Symfony\\Bridge\\Doctrine\\Security\\User\\EntityUserProvider',
            'doctrine.orm.listeners.resolve_target_entity.class' => 'Doctrine\\ORM\\Tools\\ResolveTargetEntityListener',
            'doctrine.orm.listeners.attach_entity_listeners.class' => 'Doctrine\\ORM\\Tools\\AttachEntityListenersListener',
            'doctrine.orm.naming_strategy.default.class' => 'Doctrine\\ORM\\Mapping\\DefaultNamingStrategy',
            'doctrine.orm.naming_strategy.underscore.class' => 'Doctrine\\ORM\\Mapping\\UnderscoreNamingStrategy',
            'doctrine.orm.quote_strategy.default.class' => 'Doctrine\\ORM\\Mapping\\DefaultQuoteStrategy',
            'doctrine.orm.quote_strategy.ansi.class' => 'Doctrine\\ORM\\Mapping\\AnsiQuoteStrategy',
            'doctrine.orm.entity_listener_resolver.class' => 'Doctrine\\ORM\\Mapping\\DefaultEntityListenerResolver',
            'doctrine.orm.second_level_cache.default_cache_factory.class' => 'Doctrine\\ORM\\Cache\\DefaultCacheFactory',
            'doctrine.orm.second_level_cache.default_region.class' => 'Doctrine\\ORM\\Cache\\Region\\DefaultRegion',
            'doctrine.orm.second_level_cache.filelock_region.class' => 'Doctrine\\ORM\\Cache\\Region\\FileLockRegion',
            'doctrine.orm.second_level_cache.logger_chain.class' => 'Doctrine\\ORM\\Cache\\Logging\\CacheLoggerChain',
            'doctrine.orm.second_level_cache.logger_statistics.class' => 'Doctrine\\ORM\\Cache\\Logging\\StatisticsCacheLogger',
            'doctrine.orm.second_level_cache.cache_configuration.class' => 'Doctrine\\ORM\\Cache\\CacheConfiguration',
            'doctrine.orm.second_level_cache.regions_configuration.class' => 'Doctrine\\ORM\\Cache\\RegionsConfiguration',
            'doctrine.orm.auto_generate_proxy_classes' => true,
            'doctrine.orm.proxy_dir' => (__DIR__.'/doctrine/orm/Proxies'),
            'doctrine.orm.proxy_namespace' => 'Proxies',
            'sensio_framework_extra.view.guesser.class' => 'Sensio\\Bundle\\FrameworkExtraBundle\\Templating\\TemplateGuesser',
            'sensio_framework_extra.controller.listener.class' => 'Sensio\\Bundle\\FrameworkExtraBundle\\EventListener\\ControllerListener',
            'sensio_framework_extra.routing.loader.annot_dir.class' => 'Symfony\\Component\\Routing\\Loader\\AnnotationDirectoryLoader',
            'sensio_framework_extra.routing.loader.annot_file.class' => 'Symfony\\Component\\Routing\\Loader\\AnnotationFileLoader',
            'sensio_framework_extra.routing.loader.annot_class.class' => 'Sensio\\Bundle\\FrameworkExtraBundle\\Routing\\AnnotatedRouteControllerLoader',
            'sensio_framework_extra.converter.listener.class' => 'Sensio\\Bundle\\FrameworkExtraBundle\\EventListener\\ParamConverterListener',
            'sensio_framework_extra.converter.manager.class' => 'Sensio\\Bundle\\FrameworkExtraBundle\\Request\\ParamConverter\\ParamConverterManager',
            'sensio_framework_extra.converter.doctrine.class' => 'Sensio\\Bundle\\FrameworkExtraBundle\\Request\\ParamConverter\\DoctrineParamConverter',
            'sensio_framework_extra.converter.datetime.class' => 'Sensio\\Bundle\\FrameworkExtraBundle\\Request\\ParamConverter\\DateTimeParamConverter',
            'sensio_framework_extra.view.listener.class' => 'Sensio\\Bundle\\FrameworkExtraBundle\\EventListener\\TemplateListener',
            'easyadmin.config' => array(
                'design' => array(
                    'brand_color' => '#3C8DBC',
                    'menu' => array(
                        0 => array(
                            'entity' => 'Formateur',
                            'icon' => 'fa-group',
                            'children' => array(

                            ),
                            'default' => false,
                            'target' => false,
                            'menu_index' => 0,
                            'submenu_index' => -1,
                            'type' => 'entity',
                            'label' => 'Formateurs',
                            'params' => array(

                            ),
                        ),
                        1 => array(
                            'entity' => 'Cours',
                            'icon' => 'fa-book',
                            'children' => array(

                            ),
                            'default' => false,
                            'target' => false,
                            'menu_index' => 1,
                            'submenu_index' => -1,
                            'type' => 'entity',
                            'label' => 'Cours',
                            'params' => array(

                            ),
                        ),
                        2 => array(
                            'label' => 'Frontend',
                            'url' => 'http://localhost/Mooc_web/web/app_dev.php/',
                            'icon' => 'fa-home',
                            'children' => array(

                            ),
                            'default' => false,
                            'target' => false,
                            'menu_index' => 2,
                            'submenu_index' => -1,
                            'type' => 'link',
                        ),
                    ),
                    'theme' => 'default',
                    'color_scheme' => 'dark',
                    'form_theme' => array(
                        0 => '@EasyAdmin/form/bootstrap_3_horizontal_layout.html.twig',
                    ),
                    'assets' => array(
                        'css' => array(

                        ),
                        'js' => array(

                        ),
                        'favicon' => array(
                            'path' => 'favicon.ico',
                            'mime_type' => 'image/x-icon',
                        ),
                    ),
                    'templates' => array(
                        'layout' => '@EasyAdmin/default/layout.html.twig',
                        'menu' => '@EasyAdmin/default/menu.html.twig',
                        'edit' => '@EasyAdmin/default/edit.html.twig',
                        'list' => '@EasyAdmin/default/list.html.twig',
                        'new' => '@EasyAdmin/default/new.html.twig',
                        'show' => '@EasyAdmin/default/show.html.twig',
                        'exception' => '@EasyAdmin/default/exception.html.twig',
                        'flash_messages' => '@EasyAdmin/default/flash_messages.html.twig',
                        'paginator' => '@EasyAdmin/default/paginator.html.twig',
                        'field_array' => '@EasyAdmin/default/field_array.html.twig',
                        'field_association' => '@EasyAdmin/default/field_association.html.twig',
                        'field_bigint' => '@EasyAdmin/default/field_bigint.html.twig',
                        'field_boolean' => '@EasyAdmin/default/field_boolean.html.twig',
                        'field_date' => '@EasyAdmin/default/field_date.html.twig',
                        'field_datetime' => '@EasyAdmin/default/field_datetime.html.twig',
                        'field_datetimetz' => '@EasyAdmin/default/field_datetimetz.html.twig',
                        'field_decimal' => '@EasyAdmin/default/field_decimal.html.twig',
                        'field_email' => '@EasyAdmin/default/field_email.html.twig',
                        'field_float' => '@EasyAdmin/default/field_float.html.twig',
                        'field_guid' => '@EasyAdmin/default/field_guid.html.twig',
                        'field_id' => '@EasyAdmin/default/field_id.html.twig',
                        'field_image' => '@EasyAdmin/default/field_image.html.twig',
                        'field_json_array' => '@EasyAdmin/default/field_json_array.html.twig',
                        'field_integer' => '@EasyAdmin/default/field_integer.html.twig',
                        'field_object' => '@EasyAdmin/default/field_object.html.twig',
                        'field_raw' => '@EasyAdmin/default/field_raw.html.twig',
                        'field_simple_array' => '@EasyAdmin/default/field_simple_array.html.twig',
                        'field_smallint' => '@EasyAdmin/default/field_smallint.html.twig',
                        'field_string' => '@EasyAdmin/default/field_string.html.twig',
                        'field_tel' => '@EasyAdmin/default/field_tel.html.twig',
                        'field_text' => '@EasyAdmin/default/field_text.html.twig',
                        'field_time' => '@EasyAdmin/default/field_time.html.twig',
                        'field_toggle' => '@EasyAdmin/default/field_toggle.html.twig',
                        'field_url' => '@EasyAdmin/default/field_url.html.twig',
                        'label_empty' => '@EasyAdmin/default/label_empty.html.twig',
                        'label_inaccessible' => '@EasyAdmin/default/label_inaccessible.html.twig',
                        'label_null' => '@EasyAdmin/default/label_null.html.twig',
                        'label_undefined' => '@EasyAdmin/default/label_undefined.html.twig',
                    ),
                ),
                'site_name' => 'MOO<i><font color="grey">Comité</font></i>',
                'entities' => array(
                    'Formateur' => array(
                        'class' => 'Mooc\\MoocBundle\\Entity\\Formateur',
                        'label' => 'Formateurs',
                        'list' => array(
                            'title' => 'Liste des formateurs',
                            'fields' => array(
                                'cin' => array(
                                    'css_class' => '',
                                    'format' => NULL,
                                    'help' => NULL,
                                    'label' => NULL,
                                    'type' => 'string',
                                    'fieldType' => 'text',
                                    'dataType' => 'string',
                                    'virtual' => false,
                                    'sortable' => true,
                                    'template' => '@EasyAdmin/default/field_string.html.twig',
                                    'type_options' => array(

                                    ),
                                    'fieldName' => 'cin',
                                    'scale' => 0,
                                    'length' => 8,
                                    'unique' => false,
                                    'nullable' => false,
                                    'precision' => 0,
                                    'columnName' => 'cin',
                                    'id' => true,
                                    'property' => 'cin',
                                ),
                                'nom' => array(
                                    'css_class' => '',
                                    'format' => NULL,
                                    'help' => NULL,
                                    'label' => NULL,
                                    'type' => 'string',
                                    'fieldType' => 'text',
                                    'dataType' => 'string',
                                    'virtual' => false,
                                    'sortable' => true,
                                    'template' => '@EasyAdmin/default/field_string.html.twig',
                                    'type_options' => array(

                                    ),
                                    'fieldName' => 'nom',
                                    'scale' => 0,
                                    'length' => 45,
                                    'unique' => false,
                                    'nullable' => false,
                                    'precision' => 0,
                                    'columnName' => 'nom',
                                    'property' => 'nom',
                                ),
                                'prenom' => array(
                                    'css_class' => '',
                                    'format' => NULL,
                                    'help' => NULL,
                                    'label' => NULL,
                                    'type' => 'string',
                                    'fieldType' => 'text',
                                    'dataType' => 'string',
                                    'virtual' => false,
                                    'sortable' => true,
                                    'template' => '@EasyAdmin/default/field_string.html.twig',
                                    'type_options' => array(

                                    ),
                                    'fieldName' => 'prenom',
                                    'scale' => 0,
                                    'length' => 45,
                                    'unique' => false,
                                    'nullable' => false,
                                    'precision' => 0,
                                    'columnName' => 'prenom',
                                    'property' => 'prenom',
                                ),
                                'email' => array(
                                    'css_class' => '',
                                    'format' => NULL,
                                    'help' => NULL,
                                    'label' => NULL,
                                    'type' => 'string',
                                    'fieldType' => 'text',
                                    'dataType' => 'string',
                                    'virtual' => false,
                                    'sortable' => true,
                                    'template' => '@EasyAdmin/default/field_string.html.twig',
                                    'type_options' => array(

                                    ),
                                    'fieldName' => 'email',
                                    'scale' => 0,
                                    'length' => 45,
                                    'unique' => false,
                                    'nullable' => false,
                                    'precision' => 0,
                                    'columnName' => 'email',
                                    'property' => 'email',
                                ),
                                'avatar' => array(
                                    'css_class' => '',
                                    'format' => NULL,
                                    'help' => NULL,
                                    'label' => 'Photo',
                                    'type' => 'image',
                                    'fieldType' => 'text',
                                    'dataType' => 'image',
                                    'virtual' => false,
                                    'sortable' => true,
                                    'template' => '@EasyAdmin/default/field_image.html.twig',
                                    'type_options' => array(

                                    ),
                                    'fieldName' => 'avatar',
                                    'scale' => 0,
                                    'length' => NULL,
                                    'unique' => false,
                                    'nullable' => true,
                                    'precision' => 0,
                                    'columnName' => 'avatar',
                                    'property' => 'avatar',
                                    'base_path' => 'http://localhost/Mooc_web/web/img/avatar/',
                                ),
                                'cv' => array(
                                    'css_class' => '',
                                    'format' => NULL,
                                    'help' => NULL,
                                    'label' => 'CV',
                                    'type' => 'blob',
                                    'fieldType' => 'textarea',
                                    'dataType' => 'blob',
                                    'virtual' => false,
                                    'sortable' => true,
                                    'template' => 'easy_admin/Formateur/cv.html.twig',
                                    'type_options' => array(

                                    ),
                                    'fieldName' => 'cv',
                                    'scale' => 0,
                                    'length' => NULL,
                                    'unique' => false,
                                    'nullable' => true,
                                    'precision' => 0,
                                    'columnName' => 'cv',
                                    'property' => 'cv',
                                    'base_path' => '/file/cv',
                                ),
                                'etat' => array(
                                    'css_class' => '',
                                    'format' => NULL,
                                    'help' => NULL,
                                    'label' => 'Valide',
                                    'type' => 'toggle',
                                    'fieldType' => 'integer',
                                    'dataType' => 'toggle',
                                    'virtual' => false,
                                    'sortable' => true,
                                    'template' => '@EasyAdmin/default/field_toggle.html.twig',
                                    'type_options' => array(

                                    ),
                                    'fieldName' => 'etat',
                                    'scale' => 0,
                                    'length' => NULL,
                                    'unique' => false,
                                    'nullable' => true,
                                    'precision' => 0,
                                    'columnName' => 'etat',
                                    'property' => 'etat',
                                ),
                            ),
                            'actions' => array(
                                'show' => array(
                                    'name' => 'show',
                                    'type' => 'method',
                                    'label' => '',
                                    'css_class' => ' action-show',
                                    'icon' => 'search',
                                ),
                                'delete' => array(
                                    'name' => 'delete',
                                    'type' => 'method',
                                    'label' => '',
                                    'css_class' => 'text-danger action-delete',
                                    'icon' => 'trash',
                                ),
                                'edit' => array(
                                    'name' => 'edit',
                                    'type' => 'method',
                                    'label' => '',
                                    'css_class' => 'text-primary action-edit',
                                    'icon' => 'pencil',
                                    'class' => '',
                                ),
                                'new' => array(
                                    'name' => 'new',
                                    'type' => 'method',
                                    'label' => 'action.new',
                                    'css_class' => 'btn btn-primary action-new',
                                    'icon' => NULL,
                                ),
                                'search' => array(
                                    'name' => 'search',
                                    'type' => 'method',
                                    'label' => 'action.search',
                                    'css_class' => ' action-search',
                                    'icon' => NULL,
                                ),
                            ),
                        ),
                        'show' => array(
                            'fields' => array(
                                'cin' => array(
                                    'css_class' => '',
                                    'format' => NULL,
                                    'help' => NULL,
                                    'label' => NULL,
                                    'type' => 'string',
                                    'fieldType' => 'text',
                                    'dataType' => 'string',
                                    'virtual' => false,
                                    'sortable' => true,
                                    'template' => '@EasyAdmin/default/field_string.html.twig',
                                    'type_options' => array(

                                    ),
                                    'fieldName' => 'cin',
                                    'scale' => 0,
                                    'length' => 8,
                                    'unique' => false,
                                    'nullable' => false,
                                    'precision' => 0,
                                    'columnName' => 'cin',
                                    'id' => true,
                                    'property' => 'cin',
                                ),
                                'nom' => array(
                                    'css_class' => '',
                                    'format' => NULL,
                                    'help' => NULL,
                                    'label' => NULL,
                                    'type' => 'string',
                                    'fieldType' => 'text',
                                    'dataType' => 'string',
                                    'virtual' => false,
                                    'sortable' => true,
                                    'template' => '@EasyAdmin/default/field_string.html.twig',
                                    'type_options' => array(

                                    ),
                                    'fieldName' => 'nom',
                                    'scale' => 0,
                                    'length' => 45,
                                    'unique' => false,
                                    'nullable' => false,
                                    'precision' => 0,
                                    'columnName' => 'nom',
                                    'property' => 'nom',
                                ),
                                'prenom' => array(
                                    'css_class' => '',
                                    'format' => NULL,
                                    'help' => NULL,
                                    'label' => NULL,
                                    'type' => 'string',
                                    'fieldType' => 'text',
                                    'dataType' => 'string',
                                    'virtual' => false,
                                    'sortable' => true,
                                    'template' => '@EasyAdmin/default/field_string.html.twig',
                                    'type_options' => array(

                                    ),
                                    'fieldName' => 'prenom',
                                    'scale' => 0,
                                    'length' => 45,
                                    'unique' => false,
                                    'nullable' => false,
                                    'precision' => 0,
                                    'columnName' => 'prenom',
                                    'property' => 'prenom',
                                ),
                                'email' => array(
                                    'css_class' => '',
                                    'format' => NULL,
                                    'help' => NULL,
                                    'label' => NULL,
                                    'type' => 'string',
                                    'fieldType' => 'text',
                                    'dataType' => 'string',
                                    'virtual' => false,
                                    'sortable' => true,
                                    'template' => '@EasyAdmin/default/field_string.html.twig',
                                    'type_options' => array(

                                    ),
                                    'fieldName' => 'email',
                                    'scale' => 0,
                                    'length' => 45,
                                    'unique' => false,
                                    'nullable' => false,
                                    'precision' => 0,
                                    'columnName' => 'email',
                                    'property' => 'email',
                                ),
                                'etat' => array(
                                    'css_class' => '',
                                    'format' => NULL,
                                    'help' => NULL,
                                    'label' => NULL,
                                    'type' => 'integer',
                                    'fieldType' => 'integer',
                                    'dataType' => 'integer',
                                    'virtual' => false,
                                    'sortable' => true,
                                    'template' => '@EasyAdmin/default/field_integer.html.twig',
                                    'type_options' => array(

                                    ),
                                    'fieldName' => 'etat',
                                    'scale' => 0,
                                    'length' => NULL,
                                    'unique' => false,
                                    'nullable' => true,
                                    'precision' => 0,
                                    'columnName' => 'etat',
                                    'property' => 'etat',
                                ),
                                'avatar' => array(
                                    'css_class' => '',
                                    'format' => NULL,
                                    'help' => NULL,
                                    'label' => NULL,
                                    'type' => 'string',
                                    'fieldType' => 'text',
                                    'dataType' => 'string',
                                    'virtual' => false,
                                    'sortable' => true,
                                    'template' => '@EasyAdmin/default/field_string.html.twig',
                                    'type_options' => array(

                                    ),
                                    'fieldName' => 'avatar',
                                    'scale' => 0,
                                    'length' => NULL,
                                    'unique' => false,
                                    'nullable' => true,
                                    'precision' => 0,
                                    'columnName' => 'avatar',
                                    'property' => 'avatar',
                                ),
                                'cv' => array(
                                    'css_class' => '',
                                    'format' => NULL,
                                    'help' => NULL,
                                    'label' => NULL,
                                    'type' => 'blob',
                                    'fieldType' => 'textarea',
                                    'dataType' => 'blob',
                                    'virtual' => false,
                                    'sortable' => true,
                                    'template' => '@EasyAdmin/default/label_undefined.html.twig',
                                    'type_options' => array(

                                    ),
                                    'fieldName' => 'cv',
                                    'scale' => 0,
                                    'length' => NULL,
                                    'unique' => false,
                                    'nullable' => true,
                                    'precision' => 0,
                                    'columnName' => 'cv',
                                    'property' => 'cv',
                                ),
                                'login' => array(
                                    'css_class' => '',
                                    'format' => NULL,
                                    'help' => NULL,
                                    'label' => NULL,
                                    'type' => 'string',
                                    'fieldType' => 'text',
                                    'dataType' => 'string',
                                    'virtual' => false,
                                    'sortable' => true,
                                    'template' => '@EasyAdmin/default/field_string.html.twig',
                                    'type_options' => array(

                                    ),
                                    'fieldName' => 'login',
                                    'scale' => 0,
                                    'length' => 45,
                                    'unique' => false,
                                    'nullable' => false,
                                    'precision' => 0,
                                    'columnName' => 'login',
                                    'property' => 'login',
                                ),
                                'password' => array(
                                    'css_class' => '',
                                    'format' => NULL,
                                    'help' => NULL,
                                    'label' => NULL,
                                    'type' => 'string',
                                    'fieldType' => 'text',
                                    'dataType' => 'string',
                                    'virtual' => false,
                                    'sortable' => true,
                                    'template' => '@EasyAdmin/default/field_string.html.twig',
                                    'type_options' => array(

                                    ),
                                    'fieldName' => 'password',
                                    'scale' => 0,
                                    'length' => 45,
                                    'unique' => false,
                                    'nullable' => false,
                                    'precision' => 0,
                                    'columnName' => 'password',
                                    'property' => 'password',
                                ),
                            ),
                            'actions' => array(
                                'edit' => array(
                                    'name' => 'edit',
                                    'type' => 'method',
                                    'label' => 'action.edit',
                                    'css_class' => 'btn btn-primary action-edit',
                                    'icon' => 'edit',
                                ),
                                'delete' => array(
                                    'name' => 'delete',
                                    'type' => 'method',
                                    'label' => 'action.delete',
                                    'css_class' => 'btn btn-default action-delete',
                                    'icon' => 'trash-o',
                                ),
                                'list' => array(
                                    'name' => 'list',
                                    'type' => 'method',
                                    'label' => 'action.list',
                                    'css_class' => 'btn btn-secondary action-list',
                                    'icon' => NULL,
                                ),
                            ),
                        ),
                        'fields' => array(
                            0 => array(
                                'property' => 'avatar',
                                'type' => 'image',
                                'label' => 'Photo',
                                'base_path' => 'http://localhost/Mooc_web/web/img/avatar/',
                            ),
                            1 => 'nom',
                            2 => 'prenom',
                            3 => 'email',
                            4 => array(
                                'property' => 'cv',
                                'label' => 'CV',
                                'template' => 'cv.html.twig',
                                'base_path' => '/file/cv',
                            ),
                            5 => array(
                                'property' => 'etat',
                                'type' => 'toggle',
                                'label' => 'Valide',
                            ),
                        ),
                        'name' => 'Formateur',
                        'edit' => array(
                            'fields' => array(
                                'nom' => array(
                                    'css_class' => '',
                                    'format' => NULL,
                                    'help' => NULL,
                                    'label' => NULL,
                                    'type' => 'string',
                                    'fieldType' => 'text',
                                    'dataType' => 'string',
                                    'virtual' => false,
                                    'sortable' => true,
                                    'template' => NULL,
                                    'type_options' => array(

                                    ),
                                    'fieldName' => 'nom',
                                    'scale' => 0,
                                    'length' => 45,
                                    'unique' => false,
                                    'nullable' => false,
                                    'precision' => 0,
                                    'columnName' => 'nom',
                                    'property' => 'nom',
                                ),
                                'prenom' => array(
                                    'css_class' => '',
                                    'format' => NULL,
                                    'help' => NULL,
                                    'label' => NULL,
                                    'type' => 'string',
                                    'fieldType' => 'text',
                                    'dataType' => 'string',
                                    'virtual' => false,
                                    'sortable' => true,
                                    'template' => NULL,
                                    'type_options' => array(

                                    ),
                                    'fieldName' => 'prenom',
                                    'scale' => 0,
                                    'length' => 45,
                                    'unique' => false,
                                    'nullable' => false,
                                    'precision' => 0,
                                    'columnName' => 'prenom',
                                    'property' => 'prenom',
                                ),
                                'email' => array(
                                    'css_class' => '',
                                    'format' => NULL,
                                    'help' => NULL,
                                    'label' => NULL,
                                    'type' => 'string',
                                    'fieldType' => 'text',
                                    'dataType' => 'string',
                                    'virtual' => false,
                                    'sortable' => true,
                                    'template' => NULL,
                                    'type_options' => array(

                                    ),
                                    'fieldName' => 'email',
                                    'scale' => 0,
                                    'length' => 45,
                                    'unique' => false,
                                    'nullable' => false,
                                    'precision' => 0,
                                    'columnName' => 'email',
                                    'property' => 'email',
                                ),
                                'etat' => array(
                                    'css_class' => '',
                                    'format' => NULL,
                                    'help' => NULL,
                                    'label' => NULL,
                                    'type' => 'integer',
                                    'fieldType' => 'integer',
                                    'dataType' => 'integer',
                                    'virtual' => false,
                                    'sortable' => true,
                                    'template' => NULL,
                                    'type_options' => array(

                                    ),
                                    'fieldName' => 'etat',
                                    'scale' => 0,
                                    'length' => NULL,
                                    'unique' => false,
                                    'nullable' => true,
                                    'precision' => 0,
                                    'columnName' => 'etat',
                                    'property' => 'etat',
                                ),
                                'avatar' => array(
                                    'css_class' => '',
                                    'format' => NULL,
                                    'help' => NULL,
                                    'label' => NULL,
                                    'type' => 'string',
                                    'fieldType' => 'text',
                                    'dataType' => 'string',
                                    'virtual' => false,
                                    'sortable' => true,
                                    'template' => NULL,
                                    'type_options' => array(

                                    ),
                                    'fieldName' => 'avatar',
                                    'scale' => 0,
                                    'length' => NULL,
                                    'unique' => false,
                                    'nullable' => true,
                                    'precision' => 0,
                                    'columnName' => 'avatar',
                                    'property' => 'avatar',
                                ),
                                'login' => array(
                                    'css_class' => '',
                                    'format' => NULL,
                                    'help' => NULL,
                                    'label' => NULL,
                                    'type' => 'string',
                                    'fieldType' => 'text',
                                    'dataType' => 'string',
                                    'virtual' => false,
                                    'sortable' => true,
                                    'template' => NULL,
                                    'type_options' => array(

                                    ),
                                    'fieldName' => 'login',
                                    'scale' => 0,
                                    'length' => 45,
                                    'unique' => false,
                                    'nullable' => false,
                                    'precision' => 0,
                                    'columnName' => 'login',
                                    'property' => 'login',
                                ),
                                'password' => array(
                                    'css_class' => '',
                                    'format' => NULL,
                                    'help' => NULL,
                                    'label' => NULL,
                                    'type' => 'string',
                                    'fieldType' => 'text',
                                    'dataType' => 'string',
                                    'virtual' => false,
                                    'sortable' => true,
                                    'template' => NULL,
                                    'type_options' => array(

                                    ),
                                    'fieldName' => 'password',
                                    'scale' => 0,
                                    'length' => 45,
                                    'unique' => false,
                                    'nullable' => false,
                                    'precision' => 0,
                                    'columnName' => 'password',
                                    'property' => 'password',
                                ),
                            ),
                            'form_options' => array(

                            ),
                            'actions' => array(
                                'delete' => array(
                                    'name' => 'delete',
                                    'type' => 'method',
                                    'label' => 'action.delete',
                                    'css_class' => 'btn btn-default action-delete',
                                    'icon' => 'trash-o',
                                ),
                                'list' => array(
                                    'name' => 'list',
                                    'type' => 'method',
                                    'label' => 'action.list',
                                    'css_class' => 'btn btn-secondary action-list',
                                    'icon' => NULL,
                                ),
                            ),
                        ),
                        'new' => array(
                            'fields' => array(
                                'nom' => array(
                                    'css_class' => '',
                                    'format' => NULL,
                                    'help' => NULL,
                                    'label' => NULL,
                                    'type' => 'string',
                                    'fieldType' => 'text',
                                    'dataType' => 'string',
                                    'virtual' => false,
                                    'sortable' => true,
                                    'template' => NULL,
                                    'type_options' => array(

                                    ),
                                    'fieldName' => 'nom',
                                    'scale' => 0,
                                    'length' => 45,
                                    'unique' => false,
                                    'nullable' => false,
                                    'precision' => 0,
                                    'columnName' => 'nom',
                                    'property' => 'nom',
                                ),
                                'prenom' => array(
                                    'css_class' => '',
                                    'format' => NULL,
                                    'help' => NULL,
                                    'label' => NULL,
                                    'type' => 'string',
                                    'fieldType' => 'text',
                                    'dataType' => 'string',
                                    'virtual' => false,
                                    'sortable' => true,
                                    'template' => NULL,
                                    'type_options' => array(

                                    ),
                                    'fieldName' => 'prenom',
                                    'scale' => 0,
                                    'length' => 45,
                                    'unique' => false,
                                    'nullable' => false,
                                    'precision' => 0,
                                    'columnName' => 'prenom',
                                    'property' => 'prenom',
                                ),
                                'email' => array(
                                    'css_class' => '',
                                    'format' => NULL,
                                    'help' => NULL,
                                    'label' => NULL,
                                    'type' => 'string',
                                    'fieldType' => 'text',
                                    'dataType' => 'string',
                                    'virtual' => false,
                                    'sortable' => true,
                                    'template' => NULL,
                                    'type_options' => array(

                                    ),
                                    'fieldName' => 'email',
                                    'scale' => 0,
                                    'length' => 45,
                                    'unique' => false,
                                    'nullable' => false,
                                    'precision' => 0,
                                    'columnName' => 'email',
                                    'property' => 'email',
                                ),
                                'etat' => array(
                                    'css_class' => '',
                                    'format' => NULL,
                                    'help' => NULL,
                                    'label' => NULL,
                                    'type' => 'integer',
                                    'fieldType' => 'integer',
                                    'dataType' => 'integer',
                                    'virtual' => false,
                                    'sortable' => true,
                                    'template' => NULL,
                                    'type_options' => array(

                                    ),
                                    'fieldName' => 'etat',
                                    'scale' => 0,
                                    'length' => NULL,
                                    'unique' => false,
                                    'nullable' => true,
                                    'precision' => 0,
                                    'columnName' => 'etat',
                                    'property' => 'etat',
                                ),
                                'avatar' => array(
                                    'css_class' => '',
                                    'format' => NULL,
                                    'help' => NULL,
                                    'label' => NULL,
                                    'type' => 'string',
                                    'fieldType' => 'text',
                                    'dataType' => 'string',
                                    'virtual' => false,
                                    'sortable' => true,
                                    'template' => NULL,
                                    'type_options' => array(

                                    ),
                                    'fieldName' => 'avatar',
                                    'scale' => 0,
                                    'length' => NULL,
                                    'unique' => false,
                                    'nullable' => true,
                                    'precision' => 0,
                                    'columnName' => 'avatar',
                                    'property' => 'avatar',
                                ),
                                'login' => array(
                                    'css_class' => '',
                                    'format' => NULL,
                                    'help' => NULL,
                                    'label' => NULL,
                                    'type' => 'string',
                                    'fieldType' => 'text',
                                    'dataType' => 'string',
                                    'virtual' => false,
                                    'sortable' => true,
                                    'template' => NULL,
                                    'type_options' => array(

                                    ),
                                    'fieldName' => 'login',
                                    'scale' => 0,
                                    'length' => 45,
                                    'unique' => false,
                                    'nullable' => false,
                                    'precision' => 0,
                                    'columnName' => 'login',
                                    'property' => 'login',
                                ),
                                'password' => array(
                                    'css_class' => '',
                                    'format' => NULL,
                                    'help' => NULL,
                                    'label' => NULL,
                                    'type' => 'string',
                                    'fieldType' => 'text',
                                    'dataType' => 'string',
                                    'virtual' => false,
                                    'sortable' => true,
                                    'template' => NULL,
                                    'type_options' => array(

                                    ),
                                    'fieldName' => 'password',
                                    'scale' => 0,
                                    'length' => 45,
                                    'unique' => false,
                                    'nullable' => false,
                                    'precision' => 0,
                                    'columnName' => 'password',
                                    'property' => 'password',
                                ),
                            ),
                            'form_options' => array(

                            ),
                            'actions' => array(
                                'list' => array(
                                    'name' => 'list',
                                    'type' => 'method',
                                    'label' => 'action.list',
                                    'css_class' => 'btn btn-secondary action-list',
                                    'icon' => NULL,
                                ),
                            ),
                        ),
                        'search' => array(
                            'fields' => array(
                                'cin' => array(
                                    'css_class' => '',
                                    'format' => NULL,
                                    'help' => NULL,
                                    'label' => NULL,
                                    'type' => 'string',
                                    'fieldType' => 'text',
                                    'dataType' => 'string',
                                    'virtual' => false,
                                    'sortable' => true,
                                    'template' => NULL,
                                    'type_options' => array(

                                    ),
                                    'fieldName' => 'cin',
                                    'scale' => 0,
                                    'length' => 8,
                                    'unique' => false,
                                    'nullable' => false,
                                    'precision' => 0,
                                    'columnName' => 'cin',
                                    'id' => true,
                                    'property' => 'cin',
                                ),
                                'nom' => array(
                                    'css_class' => '',
                                    'format' => NULL,
                                    'help' => NULL,
                                    'label' => NULL,
                                    'type' => 'string',
                                    'fieldType' => 'text',
                                    'dataType' => 'string',
                                    'virtual' => false,
                                    'sortable' => true,
                                    'template' => NULL,
                                    'type_options' => array(

                                    ),
                                    'fieldName' => 'nom',
                                    'scale' => 0,
                                    'length' => 45,
                                    'unique' => false,
                                    'nullable' => false,
                                    'precision' => 0,
                                    'columnName' => 'nom',
                                    'property' => 'nom',
                                ),
                                'prenom' => array(
                                    'css_class' => '',
                                    'format' => NULL,
                                    'help' => NULL,
                                    'label' => NULL,
                                    'type' => 'string',
                                    'fieldType' => 'text',
                                    'dataType' => 'string',
                                    'virtual' => false,
                                    'sortable' => true,
                                    'template' => NULL,
                                    'type_options' => array(

                                    ),
                                    'fieldName' => 'prenom',
                                    'scale' => 0,
                                    'length' => 45,
                                    'unique' => false,
                                    'nullable' => false,
                                    'precision' => 0,
                                    'columnName' => 'prenom',
                                    'property' => 'prenom',
                                ),
                                'email' => array(
                                    'css_class' => '',
                                    'format' => NULL,
                                    'help' => NULL,
                                    'label' => NULL,
                                    'type' => 'string',
                                    'fieldType' => 'text',
                                    'dataType' => 'string',
                                    'virtual' => false,
                                    'sortable' => true,
                                    'template' => NULL,
                                    'type_options' => array(

                                    ),
                                    'fieldName' => 'email',
                                    'scale' => 0,
                                    'length' => 45,
                                    'unique' => false,
                                    'nullable' => false,
                                    'precision' => 0,
                                    'columnName' => 'email',
                                    'property' => 'email',
                                ),
                                'etat' => array(
                                    'css_class' => '',
                                    'format' => NULL,
                                    'help' => NULL,
                                    'label' => NULL,
                                    'type' => 'integer',
                                    'fieldType' => 'integer',
                                    'dataType' => 'integer',
                                    'virtual' => false,
                                    'sortable' => true,
                                    'template' => NULL,
                                    'type_options' => array(

                                    ),
                                    'fieldName' => 'etat',
                                    'scale' => 0,
                                    'length' => NULL,
                                    'unique' => false,
                                    'nullable' => true,
                                    'precision' => 0,
                                    'columnName' => 'etat',
                                    'property' => 'etat',
                                ),
                                'avatar' => array(
                                    'css_class' => '',
                                    'format' => NULL,
                                    'help' => NULL,
                                    'label' => NULL,
                                    'type' => 'string',
                                    'fieldType' => 'text',
                                    'dataType' => 'string',
                                    'virtual' => false,
                                    'sortable' => true,
                                    'template' => NULL,
                                    'type_options' => array(

                                    ),
                                    'fieldName' => 'avatar',
                                    'scale' => 0,
                                    'length' => NULL,
                                    'unique' => false,
                                    'nullable' => true,
                                    'precision' => 0,
                                    'columnName' => 'avatar',
                                    'property' => 'avatar',
                                ),
                                'login' => array(
                                    'css_class' => '',
                                    'format' => NULL,
                                    'help' => NULL,
                                    'label' => NULL,
                                    'type' => 'string',
                                    'fieldType' => 'text',
                                    'dataType' => 'string',
                                    'virtual' => false,
                                    'sortable' => true,
                                    'template' => NULL,
                                    'type_options' => array(

                                    ),
                                    'fieldName' => 'login',
                                    'scale' => 0,
                                    'length' => 45,
                                    'unique' => false,
                                    'nullable' => false,
                                    'precision' => 0,
                                    'columnName' => 'login',
                                    'property' => 'login',
                                ),
                            ),
                        ),
                        'disabled_actions' => array(

                        ),
                        'primary_key_field_name' => 'cin',
                        'properties' => array(
                            'cin' => array(
                                'css_class' => '',
                                'format' => NULL,
                                'help' => NULL,
                                'label' => NULL,
                                'type' => 'string',
                                'fieldType' => 'text',
                                'dataType' => 'string',
                                'virtual' => false,
                                'sortable' => true,
                                'template' => NULL,
                                'type_options' => array(

                                ),
                                'fieldName' => 'cin',
                                'scale' => 0,
                                'length' => 8,
                                'unique' => false,
                                'nullable' => false,
                                'precision' => 0,
                                'columnName' => 'cin',
                                'id' => true,
                                'property' => 'cin',
                            ),
                            'nom' => array(
                                'css_class' => '',
                                'format' => NULL,
                                'help' => NULL,
                                'label' => NULL,
                                'type' => 'string',
                                'fieldType' => 'text',
                                'dataType' => 'string',
                                'virtual' => false,
                                'sortable' => true,
                                'template' => NULL,
                                'type_options' => array(

                                ),
                                'fieldName' => 'nom',
                                'scale' => 0,
                                'length' => 45,
                                'unique' => false,
                                'nullable' => false,
                                'precision' => 0,
                                'columnName' => 'nom',
                                'property' => 'nom',
                            ),
                            'prenom' => array(
                                'css_class' => '',
                                'format' => NULL,
                                'help' => NULL,
                                'label' => NULL,
                                'type' => 'string',
                                'fieldType' => 'text',
                                'dataType' => 'string',
                                'virtual' => false,
                                'sortable' => true,
                                'template' => NULL,
                                'type_options' => array(

                                ),
                                'fieldName' => 'prenom',
                                'scale' => 0,
                                'length' => 45,
                                'unique' => false,
                                'nullable' => false,
                                'precision' => 0,
                                'columnName' => 'prenom',
                                'property' => 'prenom',
                            ),
                            'email' => array(
                                'css_class' => '',
                                'format' => NULL,
                                'help' => NULL,
                                'label' => NULL,
                                'type' => 'string',
                                'fieldType' => 'text',
                                'dataType' => 'string',
                                'virtual' => false,
                                'sortable' => true,
                                'template' => NULL,
                                'type_options' => array(

                                ),
                                'fieldName' => 'email',
                                'scale' => 0,
                                'length' => 45,
                                'unique' => false,
                                'nullable' => false,
                                'precision' => 0,
                                'columnName' => 'email',
                                'property' => 'email',
                            ),
                            'etat' => array(
                                'css_class' => '',
                                'format' => NULL,
                                'help' => NULL,
                                'label' => NULL,
                                'type' => 'integer',
                                'fieldType' => 'integer',
                                'dataType' => 'integer',
                                'virtual' => false,
                                'sortable' => true,
                                'template' => NULL,
                                'type_options' => array(

                                ),
                                'fieldName' => 'etat',
                                'scale' => 0,
                                'length' => NULL,
                                'unique' => false,
                                'nullable' => true,
                                'precision' => 0,
                                'columnName' => 'etat',
                                'property' => 'etat',
                            ),
                            'avatar' => array(
                                'css_class' => '',
                                'format' => NULL,
                                'help' => NULL,
                                'label' => NULL,
                                'type' => 'string',
                                'fieldType' => 'text',
                                'dataType' => 'string',
                                'virtual' => false,
                                'sortable' => true,
                                'template' => NULL,
                                'type_options' => array(

                                ),
                                'fieldName' => 'avatar',
                                'scale' => 0,
                                'length' => NULL,
                                'unique' => false,
                                'nullable' => true,
                                'precision' => 0,
                                'columnName' => 'avatar',
                                'property' => 'avatar',
                            ),
                            'cv' => array(
                                'css_class' => '',
                                'format' => NULL,
                                'help' => NULL,
                                'label' => NULL,
                                'type' => 'blob',
                                'fieldType' => 'textarea',
                                'dataType' => 'blob',
                                'virtual' => false,
                                'sortable' => true,
                                'template' => NULL,
                                'type_options' => array(

                                ),
                                'fieldName' => 'cv',
                                'scale' => 0,
                                'length' => NULL,
                                'unique' => false,
                                'nullable' => true,
                                'precision' => 0,
                                'columnName' => 'cv',
                                'property' => 'cv',
                            ),
                            'login' => array(
                                'css_class' => '',
                                'format' => NULL,
                                'help' => NULL,
                                'label' => NULL,
                                'type' => 'string',
                                'fieldType' => 'text',
                                'dataType' => 'string',
                                'virtual' => false,
                                'sortable' => true,
                                'template' => NULL,
                                'type_options' => array(

                                ),
                                'fieldName' => 'login',
                                'scale' => 0,
                                'length' => 45,
                                'unique' => false,
                                'nullable' => false,
                                'precision' => 0,
                                'columnName' => 'login',
                                'property' => 'login',
                            ),
                            'password' => array(
                                'css_class' => '',
                                'format' => NULL,
                                'help' => NULL,
                                'label' => NULL,
                                'type' => 'string',
                                'fieldType' => 'text',
                                'dataType' => 'string',
                                'virtual' => false,
                                'sortable' => true,
                                'template' => NULL,
                                'type_options' => array(

                                ),
                                'fieldName' => 'password',
                                'scale' => 0,
                                'length' => 45,
                                'unique' => false,
                                'nullable' => false,
                                'precision' => 0,
                                'columnName' => 'password',
                                'property' => 'password',
                            ),
                        ),
                        'templates' => array(
                            'layout' => '@EasyAdmin/default/layout.html.twig',
                            'menu' => '@EasyAdmin/default/menu.html.twig',
                            'edit' => '@EasyAdmin/default/edit.html.twig',
                            'list' => '@EasyAdmin/default/list.html.twig',
                            'new' => '@EasyAdmin/default/new.html.twig',
                            'show' => '@EasyAdmin/default/show.html.twig',
                            'exception' => '@EasyAdmin/default/exception.html.twig',
                            'flash_messages' => '@EasyAdmin/default/flash_messages.html.twig',
                            'paginator' => '@EasyAdmin/default/paginator.html.twig',
                            'field_array' => '@EasyAdmin/default/field_array.html.twig',
                            'field_association' => '@EasyAdmin/default/field_association.html.twig',
                            'field_bigint' => '@EasyAdmin/default/field_bigint.html.twig',
                            'field_boolean' => '@EasyAdmin/default/field_boolean.html.twig',
                            'field_date' => '@EasyAdmin/default/field_date.html.twig',
                            'field_datetime' => '@EasyAdmin/default/field_datetime.html.twig',
                            'field_datetimetz' => '@EasyAdmin/default/field_datetimetz.html.twig',
                            'field_decimal' => '@EasyAdmin/default/field_decimal.html.twig',
                            'field_email' => '@EasyAdmin/default/field_email.html.twig',
                            'field_float' => '@EasyAdmin/default/field_float.html.twig',
                            'field_guid' => '@EasyAdmin/default/field_guid.html.twig',
                            'field_id' => '@EasyAdmin/default/field_id.html.twig',
                            'field_image' => '@EasyAdmin/default/field_image.html.twig',
                            'field_json_array' => '@EasyAdmin/default/field_json_array.html.twig',
                            'field_integer' => '@EasyAdmin/default/field_integer.html.twig',
                            'field_object' => '@EasyAdmin/default/field_object.html.twig',
                            'field_raw' => '@EasyAdmin/default/field_raw.html.twig',
                            'field_simple_array' => '@EasyAdmin/default/field_simple_array.html.twig',
                            'field_smallint' => '@EasyAdmin/default/field_smallint.html.twig',
                            'field_string' => '@EasyAdmin/default/field_string.html.twig',
                            'field_tel' => '@EasyAdmin/default/field_tel.html.twig',
                            'field_text' => '@EasyAdmin/default/field_text.html.twig',
                            'field_time' => '@EasyAdmin/default/field_time.html.twig',
                            'field_toggle' => '@EasyAdmin/default/field_toggle.html.twig',
                            'field_url' => '@EasyAdmin/default/field_url.html.twig',
                            'label_empty' => '@EasyAdmin/default/label_empty.html.twig',
                            'label_inaccessible' => '@EasyAdmin/default/label_inaccessible.html.twig',
                            'label_null' => '@EasyAdmin/default/label_null.html.twig',
                            'label_undefined' => '@EasyAdmin/default/label_undefined.html.twig',
                        ),
                    ),
                    'Cours' => array(
                        'class' => 'Mooc\\MoocBundle\\Entity\\Cours',
                        'list' => array(
                            'title' => 'Liste des cours à valider',
                            'fields' => array(
                                'nomCours' => array(
                                    'css_class' => '',
                                    'format' => NULL,
                                    'help' => NULL,
                                    'label' => NULL,
                                    'type' => 'string',
                                    'fieldType' => 'text',
                                    'dataType' => 'string',
                                    'virtual' => false,
                                    'sortable' => true,
                                    'template' => '@EasyAdmin/default/field_string.html.twig',
                                    'type_options' => array(

                                    ),
                                    'fieldName' => 'nomCours',
                                    'scale' => 0,
                                    'length' => 255,
                                    'unique' => false,
                                    'nullable' => false,
                                    'precision' => 0,
                                    'columnName' => 'nom_cours',
                                    'property' => 'nomCours',
                                ),
                                'description' => array(
                                    'css_class' => '',
                                    'format' => NULL,
                                    'help' => NULL,
                                    'label' => NULL,
                                    'type' => 'string',
                                    'fieldType' => 'text',
                                    'dataType' => 'string',
                                    'virtual' => false,
                                    'sortable' => true,
                                    'template' => '@EasyAdmin/default/field_string.html.twig',
                                    'type_options' => array(

                                    ),
                                    'fieldName' => 'description',
                                    'scale' => 0,
                                    'length' => 255,
                                    'unique' => false,
                                    'nullable' => false,
                                    'precision' => 0,
                                    'columnName' => 'description',
                                    'property' => 'description',
                                ),
                                'difficulte' => array(
                                    'css_class' => '',
                                    'format' => NULL,
                                    'help' => NULL,
                                    'label' => NULL,
                                    'type' => 'string',
                                    'fieldType' => 'text',
                                    'dataType' => 'string',
                                    'virtual' => false,
                                    'sortable' => true,
                                    'template' => '@EasyAdmin/default/field_string.html.twig',
                                    'type_options' => array(

                                    ),
                                    'fieldName' => 'difficulte',
                                    'scale' => 0,
                                    'length' => 45,
                                    'unique' => false,
                                    'nullable' => false,
                                    'precision' => 0,
                                    'columnName' => 'difficulte',
                                    'property' => 'difficulte',
                                ),
                                'objectif' => array(
                                    'css_class' => '',
                                    'format' => NULL,
                                    'help' => NULL,
                                    'label' => NULL,
                                    'type' => 'string',
                                    'fieldType' => 'text',
                                    'dataType' => 'string',
                                    'virtual' => false,
                                    'sortable' => true,
                                    'template' => '@EasyAdmin/default/field_string.html.twig',
                                    'type_options' => array(

                                    ),
                                    'fieldName' => 'objectif',
                                    'scale' => 0,
                                    'length' => 255,
                                    'unique' => false,
                                    'nullable' => false,
                                    'precision' => 0,
                                    'columnName' => 'objectif',
                                    'property' => 'objectif',
                                ),
                                'cinformateur' => array(
                                    'css_class' => '',
                                    'format' => NULL,
                                    'help' => NULL,
                                    'label' => 'Formateur',
                                    'type' => 'association',
                                    'fieldType' => 'entity',
                                    'dataType' => 'association',
                                    'virtual' => false,
                                    'sortable' => true,
                                    'template' => '@EasyAdmin/default/field_association.html.twig',
                                    'type_options' => array(

                                    ),
                                    'fieldName' => 'cinformateur',
                                    'joinColumns' => array(
                                        0 => array(
                                            'name' => 'cinformateur',
                                            'unique' => false,
                                            'nullable' => true,
                                            'onDelete' => NULL,
                                            'columnDefinition' => NULL,
                                            'referencedColumnName' => 'cin',
                                        ),
                                    ),
                                    'cascade' => array(

                                    ),
                                    'inversedBy' => NULL,
                                    'targetEntity' => 'Mooc\\MoocBundle\\Entity\\Formateur',
                                    'fetch' => 2,
                                    'mappedBy' => NULL,
                                    'isOwningSide' => true,
                                    'sourceEntity' => 'Mooc\\MoocBundle\\Entity\\Cours',
                                    'isCascadeRemove' => false,
                                    'isCascadePersist' => false,
                                    'isCascadeRefresh' => false,
                                    'isCascadeMerge' => false,
                                    'isCascadeDetach' => false,
                                    'sourceToTargetKeyColumns' => array(
                                        'cinformateur' => 'cin',
                                    ),
                                    'joinColumnFieldNames' => array(
                                        'cinformateur' => 'cinformateur',
                                    ),
                                    'targetToSourceKeyColumns' => array(
                                        'cin' => 'cinformateur',
                                    ),
                                    'orphanRemoval' => false,
                                    'associationType' => 2,
                                    'property' => 'cinformateur',
                                ),
                                'etat' => array(
                                    'css_class' => '',
                                    'format' => NULL,
                                    'help' => NULL,
                                    'label' => 'Etat',
                                    'type' => 'toggle',
                                    'fieldType' => 'integer',
                                    'dataType' => 'toggle',
                                    'virtual' => false,
                                    'sortable' => true,
                                    'template' => '@EasyAdmin/default/field_toggle.html.twig',
                                    'type_options' => array(

                                    ),
                                    'fieldName' => 'etat',
                                    'scale' => 0,
                                    'length' => NULL,
                                    'unique' => false,
                                    'nullable' => true,
                                    'precision' => 0,
                                    'columnName' => 'etat',
                                    'property' => 'etat',
                                ),
                            ),
                            'actions' => array(
                                'show' => array(
                                    'name' => 'show',
                                    'type' => 'method',
                                    'label' => '',
                                    'css_class' => ' action-show',
                                    'icon' => 'search',
                                ),
                                'delete' => array(
                                    'name' => 'delete',
                                    'type' => 'method',
                                    'label' => '',
                                    'css_class' => 'text-danger action-delete',
                                    'icon' => 'trash',
                                ),
                                'edit' => array(
                                    'name' => 'edit',
                                    'type' => 'method',
                                    'label' => '',
                                    'css_class' => 'text-primary action-edit',
                                    'icon' => 'pencil',
                                    'class' => '',
                                ),
                                'new' => array(
                                    'name' => 'new',
                                    'type' => 'method',
                                    'label' => 'action.new',
                                    'css_class' => 'btn btn-primary action-new',
                                    'icon' => NULL,
                                ),
                                'search' => array(
                                    'name' => 'search',
                                    'type' => 'method',
                                    'label' => 'action.search',
                                    'css_class' => ' action-search',
                                    'icon' => NULL,
                                ),
                            ),
                        ),
                        'form' => array(
                            'fields' => array(
                                0 => 'nomCours',
                                1 => 'description',
                                2 => 'difficulte',
                                3 => 'objectif',
                            ),
                        ),
                        'name' => 'Cours',
                        'label' => 'Cours',
                        'new' => array(
                            'fields' => array(
                                'nomCours' => array(
                                    'css_class' => '',
                                    'format' => NULL,
                                    'help' => NULL,
                                    'label' => NULL,
                                    'type' => 'string',
                                    'fieldType' => 'text',
                                    'dataType' => 'string',
                                    'virtual' => false,
                                    'sortable' => true,
                                    'template' => NULL,
                                    'type_options' => array(

                                    ),
                                    'fieldName' => 'nomCours',
                                    'scale' => 0,
                                    'length' => 255,
                                    'unique' => false,
                                    'nullable' => false,
                                    'precision' => 0,
                                    'columnName' => 'nom_cours',
                                    'property' => 'nomCours',
                                ),
                                'description' => array(
                                    'css_class' => '',
                                    'format' => NULL,
                                    'help' => NULL,
                                    'label' => NULL,
                                    'type' => 'string',
                                    'fieldType' => 'text',
                                    'dataType' => 'string',
                                    'virtual' => false,
                                    'sortable' => true,
                                    'template' => NULL,
                                    'type_options' => array(

                                    ),
                                    'fieldName' => 'description',
                                    'scale' => 0,
                                    'length' => 255,
                                    'unique' => false,
                                    'nullable' => false,
                                    'precision' => 0,
                                    'columnName' => 'description',
                                    'property' => 'description',
                                ),
                                'difficulte' => array(
                                    'css_class' => '',
                                    'format' => NULL,
                                    'help' => NULL,
                                    'label' => NULL,
                                    'type' => 'string',
                                    'fieldType' => 'text',
                                    'dataType' => 'string',
                                    'virtual' => false,
                                    'sortable' => true,
                                    'template' => NULL,
                                    'type_options' => array(

                                    ),
                                    'fieldName' => 'difficulte',
                                    'scale' => 0,
                                    'length' => 45,
                                    'unique' => false,
                                    'nullable' => false,
                                    'precision' => 0,
                                    'columnName' => 'difficulte',
                                    'property' => 'difficulte',
                                ),
                                'objectif' => array(
                                    'css_class' => '',
                                    'format' => NULL,
                                    'help' => NULL,
                                    'label' => NULL,
                                    'type' => 'string',
                                    'fieldType' => 'text',
                                    'dataType' => 'string',
                                    'virtual' => false,
                                    'sortable' => true,
                                    'template' => NULL,
                                    'type_options' => array(

                                    ),
                                    'fieldName' => 'objectif',
                                    'scale' => 0,
                                    'length' => 255,
                                    'unique' => false,
                                    'nullable' => false,
                                    'precision' => 0,
                                    'columnName' => 'objectif',
                                    'property' => 'objectif',
                                ),
                            ),
                            'form_options' => array(

                            ),
                            'actions' => array(
                                'list' => array(
                                    'name' => 'list',
                                    'type' => 'method',
                                    'label' => 'action.list',
                                    'css_class' => 'btn btn-secondary action-list',
                                    'icon' => NULL,
                                ),
                            ),
                        ),
                        'edit' => array(
                            'fields' => array(
                                'nomCours' => array(
                                    'css_class' => '',
                                    'format' => NULL,
                                    'help' => NULL,
                                    'label' => NULL,
                                    'type' => 'string',
                                    'fieldType' => 'text',
                                    'dataType' => 'string',
                                    'virtual' => false,
                                    'sortable' => true,
                                    'template' => NULL,
                                    'type_options' => array(

                                    ),
                                    'fieldName' => 'nomCours',
                                    'scale' => 0,
                                    'length' => 255,
                                    'unique' => false,
                                    'nullable' => false,
                                    'precision' => 0,
                                    'columnName' => 'nom_cours',
                                    'property' => 'nomCours',
                                ),
                                'description' => array(
                                    'css_class' => '',
                                    'format' => NULL,
                                    'help' => NULL,
                                    'label' => NULL,
                                    'type' => 'string',
                                    'fieldType' => 'text',
                                    'dataType' => 'string',
                                    'virtual' => false,
                                    'sortable' => true,
                                    'template' => NULL,
                                    'type_options' => array(

                                    ),
                                    'fieldName' => 'description',
                                    'scale' => 0,
                                    'length' => 255,
                                    'unique' => false,
                                    'nullable' => false,
                                    'precision' => 0,
                                    'columnName' => 'description',
                                    'property' => 'description',
                                ),
                                'difficulte' => array(
                                    'css_class' => '',
                                    'format' => NULL,
                                    'help' => NULL,
                                    'label' => NULL,
                                    'type' => 'string',
                                    'fieldType' => 'text',
                                    'dataType' => 'string',
                                    'virtual' => false,
                                    'sortable' => true,
                                    'template' => NULL,
                                    'type_options' => array(

                                    ),
                                    'fieldName' => 'difficulte',
                                    'scale' => 0,
                                    'length' => 45,
                                    'unique' => false,
                                    'nullable' => false,
                                    'precision' => 0,
                                    'columnName' => 'difficulte',
                                    'property' => 'difficulte',
                                ),
                                'objectif' => array(
                                    'css_class' => '',
                                    'format' => NULL,
                                    'help' => NULL,
                                    'label' => NULL,
                                    'type' => 'string',
                                    'fieldType' => 'text',
                                    'dataType' => 'string',
                                    'virtual' => false,
                                    'sortable' => true,
                                    'template' => NULL,
                                    'type_options' => array(

                                    ),
                                    'fieldName' => 'objectif',
                                    'scale' => 0,
                                    'length' => 255,
                                    'unique' => false,
                                    'nullable' => false,
                                    'precision' => 0,
                                    'columnName' => 'objectif',
                                    'property' => 'objectif',
                                ),
                            ),
                            'form_options' => array(

                            ),
                            'actions' => array(
                                'delete' => array(
                                    'name' => 'delete',
                                    'type' => 'method',
                                    'label' => 'action.delete',
                                    'css_class' => 'btn btn-default action-delete',
                                    'icon' => 'trash-o',
                                ),
                                'list' => array(
                                    'name' => 'list',
                                    'type' => 'method',
                                    'label' => 'action.list',
                                    'css_class' => 'btn btn-secondary action-list',
                                    'icon' => NULL,
                                ),
                            ),
                        ),
                        'search' => array(
                            'fields' => array(
                                'idcours' => array(
                                    'css_class' => '',
                                    'format' => NULL,
                                    'help' => NULL,
                                    'label' => NULL,
                                    'type' => 'integer',
                                    'fieldType' => 'integer',
                                    'dataType' => 'integer',
                                    'virtual' => false,
                                    'sortable' => true,
                                    'template' => NULL,
                                    'type_options' => array(

                                    ),
                                    'fieldName' => 'idcours',
                                    'scale' => 0,
                                    'length' => NULL,
                                    'unique' => false,
                                    'nullable' => false,
                                    'precision' => 0,
                                    'columnName' => 'idcours',
                                    'id' => true,
                                    'property' => 'idcours',
                                ),
                                'nomCours' => array(
                                    'css_class' => '',
                                    'format' => NULL,
                                    'help' => NULL,
                                    'label' => NULL,
                                    'type' => 'string',
                                    'fieldType' => 'text',
                                    'dataType' => 'string',
                                    'virtual' => false,
                                    'sortable' => true,
                                    'template' => NULL,
                                    'type_options' => array(

                                    ),
                                    'fieldName' => 'nomCours',
                                    'scale' => 0,
                                    'length' => 255,
                                    'unique' => false,
                                    'nullable' => false,
                                    'precision' => 0,
                                    'columnName' => 'nom_cours',
                                    'property' => 'nomCours',
                                ),
                                'description' => array(
                                    'css_class' => '',
                                    'format' => NULL,
                                    'help' => NULL,
                                    'label' => NULL,
                                    'type' => 'string',
                                    'fieldType' => 'text',
                                    'dataType' => 'string',
                                    'virtual' => false,
                                    'sortable' => true,
                                    'template' => NULL,
                                    'type_options' => array(

                                    ),
                                    'fieldName' => 'description',
                                    'scale' => 0,
                                    'length' => 255,
                                    'unique' => false,
                                    'nullable' => false,
                                    'precision' => 0,
                                    'columnName' => 'description',
                                    'property' => 'description',
                                ),
                                'difficulte' => array(
                                    'css_class' => '',
                                    'format' => NULL,
                                    'help' => NULL,
                                    'label' => NULL,
                                    'type' => 'string',
                                    'fieldType' => 'text',
                                    'dataType' => 'string',
                                    'virtual' => false,
                                    'sortable' => true,
                                    'template' => NULL,
                                    'type_options' => array(

                                    ),
                                    'fieldName' => 'difficulte',
                                    'scale' => 0,
                                    'length' => 45,
                                    'unique' => false,
                                    'nullable' => false,
                                    'precision' => 0,
                                    'columnName' => 'difficulte',
                                    'property' => 'difficulte',
                                ),
                                'objectif' => array(
                                    'css_class' => '',
                                    'format' => NULL,
                                    'help' => NULL,
                                    'label' => NULL,
                                    'type' => 'string',
                                    'fieldType' => 'text',
                                    'dataType' => 'string',
                                    'virtual' => false,
                                    'sortable' => true,
                                    'template' => NULL,
                                    'type_options' => array(

                                    ),
                                    'fieldName' => 'objectif',
                                    'scale' => 0,
                                    'length' => 255,
                                    'unique' => false,
                                    'nullable' => false,
                                    'precision' => 0,
                                    'columnName' => 'objectif',
                                    'property' => 'objectif',
                                ),
                                'video' => array(
                                    'css_class' => '',
                                    'format' => NULL,
                                    'help' => NULL,
                                    'label' => NULL,
                                    'type' => 'string',
                                    'fieldType' => 'text',
                                    'dataType' => 'string',
                                    'virtual' => false,
                                    'sortable' => true,
                                    'template' => NULL,
                                    'type_options' => array(

                                    ),
                                    'fieldName' => 'video',
                                    'scale' => 0,
                                    'length' => 100,
                                    'unique' => false,
                                    'nullable' => true,
                                    'precision' => 0,
                                    'columnName' => 'video',
                                    'property' => 'video',
                                ),
                                'etat' => array(
                                    'css_class' => '',
                                    'format' => NULL,
                                    'help' => NULL,
                                    'label' => NULL,
                                    'type' => 'integer',
                                    'fieldType' => 'integer',
                                    'dataType' => 'integer',
                                    'virtual' => false,
                                    'sortable' => true,
                                    'template' => NULL,
                                    'type_options' => array(

                                    ),
                                    'fieldName' => 'etat',
                                    'scale' => 0,
                                    'length' => NULL,
                                    'unique' => false,
                                    'nullable' => true,
                                    'precision' => 0,
                                    'columnName' => 'etat',
                                    'property' => 'etat',
                                ),
                            ),
                        ),
                        'show' => array(
                            'fields' => array(
                                'idcours' => array(
                                    'css_class' => '',
                                    'format' => NULL,
                                    'help' => NULL,
                                    'label' => NULL,
                                    'type' => 'integer',
                                    'fieldType' => 'integer',
                                    'dataType' => 'integer',
                                    'virtual' => false,
                                    'sortable' => true,
                                    'template' => '@EasyAdmin/default/field_integer.html.twig',
                                    'type_options' => array(

                                    ),
                                    'fieldName' => 'idcours',
                                    'scale' => 0,
                                    'length' => NULL,
                                    'unique' => false,
                                    'nullable' => false,
                                    'precision' => 0,
                                    'columnName' => 'idcours',
                                    'id' => true,
                                    'property' => 'idcours',
                                ),
                                'nomCours' => array(
                                    'css_class' => '',
                                    'format' => NULL,
                                    'help' => NULL,
                                    'label' => NULL,
                                    'type' => 'string',
                                    'fieldType' => 'text',
                                    'dataType' => 'string',
                                    'virtual' => false,
                                    'sortable' => true,
                                    'template' => '@EasyAdmin/default/field_string.html.twig',
                                    'type_options' => array(

                                    ),
                                    'fieldName' => 'nomCours',
                                    'scale' => 0,
                                    'length' => 255,
                                    'unique' => false,
                                    'nullable' => false,
                                    'precision' => 0,
                                    'columnName' => 'nom_cours',
                                    'property' => 'nomCours',
                                ),
                                'description' => array(
                                    'css_class' => '',
                                    'format' => NULL,
                                    'help' => NULL,
                                    'label' => NULL,
                                    'type' => 'string',
                                    'fieldType' => 'text',
                                    'dataType' => 'string',
                                    'virtual' => false,
                                    'sortable' => true,
                                    'template' => '@EasyAdmin/default/field_string.html.twig',
                                    'type_options' => array(

                                    ),
                                    'fieldName' => 'description',
                                    'scale' => 0,
                                    'length' => 255,
                                    'unique' => false,
                                    'nullable' => false,
                                    'precision' => 0,
                                    'columnName' => 'description',
                                    'property' => 'description',
                                ),
                                'difficulte' => array(
                                    'css_class' => '',
                                    'format' => NULL,
                                    'help' => NULL,
                                    'label' => NULL,
                                    'type' => 'string',
                                    'fieldType' => 'text',
                                    'dataType' => 'string',
                                    'virtual' => false,
                                    'sortable' => true,
                                    'template' => '@EasyAdmin/default/field_string.html.twig',
                                    'type_options' => array(

                                    ),
                                    'fieldName' => 'difficulte',
                                    'scale' => 0,
                                    'length' => 45,
                                    'unique' => false,
                                    'nullable' => false,
                                    'precision' => 0,
                                    'columnName' => 'difficulte',
                                    'property' => 'difficulte',
                                ),
                                'objectif' => array(
                                    'css_class' => '',
                                    'format' => NULL,
                                    'help' => NULL,
                                    'label' => NULL,
                                    'type' => 'string',
                                    'fieldType' => 'text',
                                    'dataType' => 'string',
                                    'virtual' => false,
                                    'sortable' => true,
                                    'template' => '@EasyAdmin/default/field_string.html.twig',
                                    'type_options' => array(

                                    ),
                                    'fieldName' => 'objectif',
                                    'scale' => 0,
                                    'length' => 255,
                                    'unique' => false,
                                    'nullable' => false,
                                    'precision' => 0,
                                    'columnName' => 'objectif',
                                    'property' => 'objectif',
                                ),
                                'video' => array(
                                    'css_class' => '',
                                    'format' => NULL,
                                    'help' => NULL,
                                    'label' => NULL,
                                    'type' => 'string',
                                    'fieldType' => 'text',
                                    'dataType' => 'string',
                                    'virtual' => false,
                                    'sortable' => true,
                                    'template' => '@EasyAdmin/default/field_string.html.twig',
                                    'type_options' => array(

                                    ),
                                    'fieldName' => 'video',
                                    'scale' => 0,
                                    'length' => 100,
                                    'unique' => false,
                                    'nullable' => true,
                                    'precision' => 0,
                                    'columnName' => 'video',
                                    'property' => 'video',
                                ),
                                'etat' => array(
                                    'css_class' => '',
                                    'format' => NULL,
                                    'help' => NULL,
                                    'label' => NULL,
                                    'type' => 'integer',
                                    'fieldType' => 'integer',
                                    'dataType' => 'integer',
                                    'virtual' => false,
                                    'sortable' => true,
                                    'template' => '@EasyAdmin/default/field_integer.html.twig',
                                    'type_options' => array(

                                    ),
                                    'fieldName' => 'etat',
                                    'scale' => 0,
                                    'length' => NULL,
                                    'unique' => false,
                                    'nullable' => true,
                                    'precision' => 0,
                                    'columnName' => 'etat',
                                    'property' => 'etat',
                                ),
                                'idquiz' => array(
                                    'css_class' => '',
                                    'format' => NULL,
                                    'help' => NULL,
                                    'label' => NULL,
                                    'type' => 'association',
                                    'fieldType' => 'entity',
                                    'dataType' => 'association',
                                    'virtual' => false,
                                    'sortable' => true,
                                    'template' => '@EasyAdmin/default/field_association.html.twig',
                                    'type_options' => array(

                                    ),
                                    'fieldName' => 'idquiz',
                                    'joinColumns' => array(
                                        0 => array(
                                            'name' => 'idQuiz',
                                            'unique' => false,
                                            'nullable' => true,
                                            'onDelete' => NULL,
                                            'columnDefinition' => NULL,
                                            'referencedColumnName' => 'id',
                                        ),
                                    ),
                                    'cascade' => array(

                                    ),
                                    'inversedBy' => NULL,
                                    'targetEntity' => 'Mooc\\MoocBundle\\Entity\\Quiz',
                                    'fetch' => 2,
                                    'mappedBy' => NULL,
                                    'isOwningSide' => true,
                                    'sourceEntity' => 'Mooc\\MoocBundle\\Entity\\Cours',
                                    'isCascadeRemove' => false,
                                    'isCascadePersist' => false,
                                    'isCascadeRefresh' => false,
                                    'isCascadeMerge' => false,
                                    'isCascadeDetach' => false,
                                    'sourceToTargetKeyColumns' => array(
                                        'idQuiz' => 'id',
                                    ),
                                    'joinColumnFieldNames' => array(
                                        'idQuiz' => 'idQuiz',
                                    ),
                                    'targetToSourceKeyColumns' => array(
                                        'id' => 'idQuiz',
                                    ),
                                    'orphanRemoval' => false,
                                    'associationType' => 2,
                                    'property' => 'idquiz',
                                ),
                                'cinformateur' => array(
                                    'css_class' => '',
                                    'format' => NULL,
                                    'help' => NULL,
                                    'label' => NULL,
                                    'type' => 'association',
                                    'fieldType' => 'entity',
                                    'dataType' => 'association',
                                    'virtual' => false,
                                    'sortable' => true,
                                    'template' => '@EasyAdmin/default/field_association.html.twig',
                                    'type_options' => array(

                                    ),
                                    'fieldName' => 'cinformateur',
                                    'joinColumns' => array(
                                        0 => array(
                                            'name' => 'cinformateur',
                                            'unique' => false,
                                            'nullable' => true,
                                            'onDelete' => NULL,
                                            'columnDefinition' => NULL,
                                            'referencedColumnName' => 'cin',
                                        ),
                                    ),
                                    'cascade' => array(

                                    ),
                                    'inversedBy' => NULL,
                                    'targetEntity' => 'Mooc\\MoocBundle\\Entity\\Formateur',
                                    'fetch' => 2,
                                    'mappedBy' => NULL,
                                    'isOwningSide' => true,
                                    'sourceEntity' => 'Mooc\\MoocBundle\\Entity\\Cours',
                                    'isCascadeRemove' => false,
                                    'isCascadePersist' => false,
                                    'isCascadeRefresh' => false,
                                    'isCascadeMerge' => false,
                                    'isCascadeDetach' => false,
                                    'sourceToTargetKeyColumns' => array(
                                        'cinformateur' => 'cin',
                                    ),
                                    'joinColumnFieldNames' => array(
                                        'cinformateur' => 'cinformateur',
                                    ),
                                    'targetToSourceKeyColumns' => array(
                                        'cin' => 'cinformateur',
                                    ),
                                    'orphanRemoval' => false,
                                    'associationType' => 2,
                                    'property' => 'cinformateur',
                                ),
                            ),
                            'actions' => array(
                                'edit' => array(
                                    'name' => 'edit',
                                    'type' => 'method',
                                    'label' => 'action.edit',
                                    'css_class' => 'btn btn-primary action-edit',
                                    'icon' => 'edit',
                                ),
                                'delete' => array(
                                    'name' => 'delete',
                                    'type' => 'method',
                                    'label' => 'action.delete',
                                    'css_class' => 'btn btn-default action-delete',
                                    'icon' => 'trash-o',
                                ),
                                'list' => array(
                                    'name' => 'list',
                                    'type' => 'method',
                                    'label' => 'action.list',
                                    'css_class' => 'btn btn-secondary action-list',
                                    'icon' => NULL,
                                ),
                            ),
                        ),
                        'disabled_actions' => array(

                        ),
                        'primary_key_field_name' => 'idcours',
                        'properties' => array(
                            'idcours' => array(
                                'css_class' => '',
                                'format' => NULL,
                                'help' => NULL,
                                'label' => NULL,
                                'type' => 'integer',
                                'fieldType' => 'integer',
                                'dataType' => 'integer',
                                'virtual' => false,
                                'sortable' => true,
                                'template' => NULL,
                                'type_options' => array(

                                ),
                                'fieldName' => 'idcours',
                                'scale' => 0,
                                'length' => NULL,
                                'unique' => false,
                                'nullable' => false,
                                'precision' => 0,
                                'columnName' => 'idcours',
                                'id' => true,
                                'property' => 'idcours',
                            ),
                            'nomCours' => array(
                                'css_class' => '',
                                'format' => NULL,
                                'help' => NULL,
                                'label' => NULL,
                                'type' => 'string',
                                'fieldType' => 'text',
                                'dataType' => 'string',
                                'virtual' => false,
                                'sortable' => true,
                                'template' => NULL,
                                'type_options' => array(

                                ),
                                'fieldName' => 'nomCours',
                                'scale' => 0,
                                'length' => 255,
                                'unique' => false,
                                'nullable' => false,
                                'precision' => 0,
                                'columnName' => 'nom_cours',
                                'property' => 'nomCours',
                            ),
                            'description' => array(
                                'css_class' => '',
                                'format' => NULL,
                                'help' => NULL,
                                'label' => NULL,
                                'type' => 'string',
                                'fieldType' => 'text',
                                'dataType' => 'string',
                                'virtual' => false,
                                'sortable' => true,
                                'template' => NULL,
                                'type_options' => array(

                                ),
                                'fieldName' => 'description',
                                'scale' => 0,
                                'length' => 255,
                                'unique' => false,
                                'nullable' => false,
                                'precision' => 0,
                                'columnName' => 'description',
                                'property' => 'description',
                            ),
                            'difficulte' => array(
                                'css_class' => '',
                                'format' => NULL,
                                'help' => NULL,
                                'label' => NULL,
                                'type' => 'string',
                                'fieldType' => 'text',
                                'dataType' => 'string',
                                'virtual' => false,
                                'sortable' => true,
                                'template' => NULL,
                                'type_options' => array(

                                ),
                                'fieldName' => 'difficulte',
                                'scale' => 0,
                                'length' => 45,
                                'unique' => false,
                                'nullable' => false,
                                'precision' => 0,
                                'columnName' => 'difficulte',
                                'property' => 'difficulte',
                            ),
                            'objectif' => array(
                                'css_class' => '',
                                'format' => NULL,
                                'help' => NULL,
                                'label' => NULL,
                                'type' => 'string',
                                'fieldType' => 'text',
                                'dataType' => 'string',
                                'virtual' => false,
                                'sortable' => true,
                                'template' => NULL,
                                'type_options' => array(

                                ),
                                'fieldName' => 'objectif',
                                'scale' => 0,
                                'length' => 255,
                                'unique' => false,
                                'nullable' => false,
                                'precision' => 0,
                                'columnName' => 'objectif',
                                'property' => 'objectif',
                            ),
                            'video' => array(
                                'css_class' => '',
                                'format' => NULL,
                                'help' => NULL,
                                'label' => NULL,
                                'type' => 'string',
                                'fieldType' => 'text',
                                'dataType' => 'string',
                                'virtual' => false,
                                'sortable' => true,
                                'template' => NULL,
                                'type_options' => array(

                                ),
                                'fieldName' => 'video',
                                'scale' => 0,
                                'length' => 100,
                                'unique' => false,
                                'nullable' => true,
                                'precision' => 0,
                                'columnName' => 'video',
                                'property' => 'video',
                            ),
                            'etat' => array(
                                'css_class' => '',
                                'format' => NULL,
                                'help' => NULL,
                                'label' => NULL,
                                'type' => 'integer',
                                'fieldType' => 'integer',
                                'dataType' => 'integer',
                                'virtual' => false,
                                'sortable' => true,
                                'template' => NULL,
                                'type_options' => array(

                                ),
                                'fieldName' => 'etat',
                                'scale' => 0,
                                'length' => NULL,
                                'unique' => false,
                                'nullable' => true,
                                'precision' => 0,
                                'columnName' => 'etat',
                                'property' => 'etat',
                            ),
                            'idquiz' => array(
                                'css_class' => '',
                                'format' => NULL,
                                'help' => NULL,
                                'label' => NULL,
                                'type' => 'association',
                                'fieldType' => 'entity',
                                'dataType' => 'association',
                                'virtual' => false,
                                'sortable' => true,
                                'template' => NULL,
                                'type_options' => array(

                                ),
                                'fieldName' => 'idquiz',
                                'joinColumns' => array(
                                    0 => array(
                                        'name' => 'idQuiz',
                                        'unique' => false,
                                        'nullable' => true,
                                        'onDelete' => NULL,
                                        'columnDefinition' => NULL,
                                        'referencedColumnName' => 'id',
                                    ),
                                ),
                                'cascade' => array(

                                ),
                                'inversedBy' => NULL,
                                'targetEntity' => 'Mooc\\MoocBundle\\Entity\\Quiz',
                                'fetch' => 2,
                                'mappedBy' => NULL,
                                'isOwningSide' => true,
                                'sourceEntity' => 'Mooc\\MoocBundle\\Entity\\Cours',
                                'isCascadeRemove' => false,
                                'isCascadePersist' => false,
                                'isCascadeRefresh' => false,
                                'isCascadeMerge' => false,
                                'isCascadeDetach' => false,
                                'sourceToTargetKeyColumns' => array(
                                    'idQuiz' => 'id',
                                ),
                                'joinColumnFieldNames' => array(
                                    'idQuiz' => 'idQuiz',
                                ),
                                'targetToSourceKeyColumns' => array(
                                    'id' => 'idQuiz',
                                ),
                                'orphanRemoval' => false,
                                'associationType' => 2,
                                'property' => 'idquiz',
                            ),
                            'cinformateur' => array(
                                'css_class' => '',
                                'format' => NULL,
                                'help' => NULL,
                                'label' => NULL,
                                'type' => 'association',
                                'fieldType' => 'entity',
                                'dataType' => 'association',
                                'virtual' => false,
                                'sortable' => true,
                                'template' => NULL,
                                'type_options' => array(

                                ),
                                'fieldName' => 'cinformateur',
                                'joinColumns' => array(
                                    0 => array(
                                        'name' => 'cinformateur',
                                        'unique' => false,
                                        'nullable' => true,
                                        'onDelete' => NULL,
                                        'columnDefinition' => NULL,
                                        'referencedColumnName' => 'cin',
                                    ),
                                ),
                                'cascade' => array(

                                ),
                                'inversedBy' => NULL,
                                'targetEntity' => 'Mooc\\MoocBundle\\Entity\\Formateur',
                                'fetch' => 2,
                                'mappedBy' => NULL,
                                'isOwningSide' => true,
                                'sourceEntity' => 'Mooc\\MoocBundle\\Entity\\Cours',
                                'isCascadeRemove' => false,
                                'isCascadePersist' => false,
                                'isCascadeRefresh' => false,
                                'isCascadeMerge' => false,
                                'isCascadeDetach' => false,
                                'sourceToTargetKeyColumns' => array(
                                    'cinformateur' => 'cin',
                                ),
                                'joinColumnFieldNames' => array(
                                    'cinformateur' => 'cinformateur',
                                ),
                                'targetToSourceKeyColumns' => array(
                                    'cin' => 'cinformateur',
                                ),
                                'orphanRemoval' => false,
                                'associationType' => 2,
                                'property' => 'cinformateur',
                            ),
                        ),
                        'templates' => array(
                            'layout' => '@EasyAdmin/default/layout.html.twig',
                            'menu' => '@EasyAdmin/default/menu.html.twig',
                            'edit' => '@EasyAdmin/default/edit.html.twig',
                            'list' => '@EasyAdmin/default/list.html.twig',
                            'new' => '@EasyAdmin/default/new.html.twig',
                            'show' => '@EasyAdmin/default/show.html.twig',
                            'exception' => '@EasyAdmin/default/exception.html.twig',
                            'flash_messages' => '@EasyAdmin/default/flash_messages.html.twig',
                            'paginator' => '@EasyAdmin/default/paginator.html.twig',
                            'field_array' => '@EasyAdmin/default/field_array.html.twig',
                            'field_association' => '@EasyAdmin/default/field_association.html.twig',
                            'field_bigint' => '@EasyAdmin/default/field_bigint.html.twig',
                            'field_boolean' => '@EasyAdmin/default/field_boolean.html.twig',
                            'field_date' => '@EasyAdmin/default/field_date.html.twig',
                            'field_datetime' => '@EasyAdmin/default/field_datetime.html.twig',
                            'field_datetimetz' => '@EasyAdmin/default/field_datetimetz.html.twig',
                            'field_decimal' => '@EasyAdmin/default/field_decimal.html.twig',
                            'field_email' => '@EasyAdmin/default/field_email.html.twig',
                            'field_float' => '@EasyAdmin/default/field_float.html.twig',
                            'field_guid' => '@EasyAdmin/default/field_guid.html.twig',
                            'field_id' => '@EasyAdmin/default/field_id.html.twig',
                            'field_image' => '@EasyAdmin/default/field_image.html.twig',
                            'field_json_array' => '@EasyAdmin/default/field_json_array.html.twig',
                            'field_integer' => '@EasyAdmin/default/field_integer.html.twig',
                            'field_object' => '@EasyAdmin/default/field_object.html.twig',
                            'field_raw' => '@EasyAdmin/default/field_raw.html.twig',
                            'field_simple_array' => '@EasyAdmin/default/field_simple_array.html.twig',
                            'field_smallint' => '@EasyAdmin/default/field_smallint.html.twig',
                            'field_string' => '@EasyAdmin/default/field_string.html.twig',
                            'field_tel' => '@EasyAdmin/default/field_tel.html.twig',
                            'field_text' => '@EasyAdmin/default/field_text.html.twig',
                            'field_time' => '@EasyAdmin/default/field_time.html.twig',
                            'field_toggle' => '@EasyAdmin/default/field_toggle.html.twig',
                            'field_url' => '@EasyAdmin/default/field_url.html.twig',
                            'label_empty' => '@EasyAdmin/default/label_empty.html.twig',
                            'label_inaccessible' => '@EasyAdmin/default/label_inaccessible.html.twig',
                            'label_null' => '@EasyAdmin/default/label_null.html.twig',
                            'label_undefined' => '@EasyAdmin/default/label_undefined.html.twig',
                        ),
                    ),
                ),
                'formats' => array(
                    'date' => 'Y-m-d',
                    'time' => 'H:i:s',
                    'datetime' => 'F j, Y H:i',
                ),
                'disabled_actions' => array(

                ),
                'list' => array(
                    'actions' => array(

                    ),
                    'max_results' => 15,
                ),
                'edit' => array(
                    'actions' => array(

                    ),
                ),
                'new' => array(
                    'actions' => array(

                    ),
                ),
                'show' => array(
                    'actions' => array(

                    ),
                ),
                '_internal' => array(
                    'custom_css' => '


.sf-toolbarreset {
    -webkit-font-smoothing: subpixel-antialiased;
    -moz-osx-font-smoothing: auto;
}

body {
    font-family: Helvetica, "Helvetica Neue", Arial, sans-serif;
}

a        { color: #205081; }
a:hover  { opacity: 0.9; }
a:active { outline: 0; }

#main a:active {
    position: relative;
    top: 1px;
}

a.text-primary,
a.text-primary:focus {
    color: #205081;
}
a.text-danger,
a.text-danger:focus {
    color: #D42124;
}
a.text-primary:hover,
a.text-danger:hover {
    opacity: 0.9;
}

ul, ol {
    margin: 1em 0 1em 1em;
    padding: 0;
}
li {
    margin-bottom: 1em;
}

ul.inline {
    list-style: none;
    margin: 0;
}
ul.inline li {
    margin: 0;
}

div.flash {
    padding: .5em;
}
div.flash-success {
    background: #006B2E;
    color: #FFFFFF;
}
div.flash-error {
    background: #D42124;
    color: #FFFFFF;
}
div.flash-error strong {
    padding-right: .5em;
}

.label:not([class*=label-]) {
    background: #252525;
}
.label {
    color: #FFFFFF;
    display: inline-block;
    font-size: 11px;
    padding: 4px;
    text-transform: uppercase;
}

.label-success {
        background: #006B2E !important;
}
.label-danger {
        background: #D42124 !iportant;
}
.label-empty {
    background: transparent;
    border: 2px dotted;
    border-radius: 4px;
    color: #CCC;
    padding: 4px 8px;
}

.boolean .label,
.toggle .label {
    min-width: 33px;
}

.toggle.btn-xs {
 width: 44px;
}
.toggle-group .btn,
.toggle-group .btn:hover {
   border-radius: 3px;
   font-size: 10px;
   font-weight: bold;
   text-transform: uppercase;
}
.toggle-group .btn {
   padding: 4px 6px;
}
.toggle-group .btn:hover {
    border: 0;
}
.toggle-group .btn + .btn {
    margin-left: 0;
}
.toggle-group .toggle-on,
.toggle-group .toggle-on.btn-xs,
.toggle-group .toggle-on:hover,
.toggle-group .toggle-on:active,
.toggle-group .toggle-on:active:hover {
    background: #006B2E;
    border-color: #006B2E;
    color: #FFFFFF;
    padding: 4px 5px 4px 0;
    border: 0;
}
.toggle-group .toggle-off,
.toggle-group .toggle-off.btn-xs,
.toggle-group .toggle-off:hover,
.toggle-group .toggle-off:active,
.toggle-group .toggle-off:active:hover {
    background: #D42124;
    border-color: #D42124;
    color: #FFFFFF;
    padding: 4px 0 4px 5px;
    border: 0;
}
.toggle-group .toggle-handle,
.toggle-group .toggle-handle:hover,
.toggle-group .toggle-handle:active,
.toggle-group .toggle-handle:active:hover {
    background: #F5F5F5;
    border: 0;
    border-radius: 2px;
    height: 19px;
    margin-top: 2px;
    padding: 5px;
}
.toggle .btn-success .toggle-handle {
    box-shadow: -2px 0 1px rgba(0, 0, 0, .2);
}
.toggle .btn-danger .toggle-handle {
    box-shadow: 2px 0 1px rgba(0, 0, 0, .2);
}

span.badge {
    background-color: #3C8DBC;
}

.btn:focus {
    outline: none;
}
.btn + .btn {
    margin-left: 5px;
}

button.btn:active {
    position: relative;
    top: 1px;
}

.btn,
.btn:hover,
.btn:active,
.btn:focus,
.btn:active:hover  {
    background: #CCC;
    border: 1px solid transparent;
    border-radius: 4px;
    box-shadow: none;
    color: #222222;
    display: inline-block;
    line-height: 1.42857143;
    opacity: 1;
    outline: none;
    padding: 6px 12px;
    text-align: center;
}

.btn-primary,
.btn-primary:hover,
.btn-primary:active,
.btn-primary:focus,
.btn-primary:active:hover {
    background-color: #3C8DBC;
    border-color: transparent;
    color: #FFFFFF;
}
.btn-default,
.btn-default:hover,
.btn-default:active,
.btn-default:focus,
.btn-default:active:hover {
    border-color: transparent;
}

.btn-danger,
.btn-danger:hover,
.btn-danger:active,
.btn-danger:focus,
.btn-danger:active:hover {
    background-color: #D42124;
    border-color: transparent;
    color: #FFFFFF;
}

.btn-success,
.btn-success:hover,
.btn-success:active,
.btn-success:focus,
.btn-success:active:hover {
    background-color: #006B2E;
    border-color: transparent;
    color: #FFFFFF;
}

.btn-secondary,
.btn-secondary:hover,
.btn-secondary:active,
.btn-secondary:focus,
.btn-secondary:active:hover {
    background: transparent;
    color: #3C8DBC;
    text-decoration: underline;
}
.btn-secondary:hover {
    text-decoration: none;
}

.btn-primary,
.btn-danger,
.btn-success {
    font-weight: bold;
}

.btn i {
    font-size: 16px;
    margin-right: 2px;
}

.btn-flat,
.btn-flat:hover,
.btn-flat:active,
.btn-flat:focus,
.btn-flat:active:hover {
    border-radius: 0;
}

.form-inline .form-control {
    margin-bottom: 5px;
}
.form-control,
.form-inline .form-control {
    border: 1px solid #AAA;
    border-radius: 0;
    box-shadow: 0 0 3px rgba(0, 0, 0, .15);
    color: #222222;
    -webkit-transition: none;
    transition: none;
}
.form-control:focus {
    border-color: #444;
    box-shadow: 0 0 3px rgba(0, 0, 0, .15);
}

.has-error .error-block {
    color: #D42124;
    font-weight: bold;
    padding-top: 5px;
}
.has-error .error-block .label-danger {
    margin-right: 3px;
}
.has-error .error-block ul {
    margin: .5em 0 .5em 1.5em;
}
.has-error .error-block ul li {
    margin-bottom: .5em;
}

.help-block,
.has-error .help-block {
    color: #737373;
    font-size: 13px;
}
.nullable-control {
   padding-top: 5px;
}

.form-actions.stuck {
    bottom: 0;
    position: fixed;
    background-color: #F5F5F5;
    box-shadow: 0 -1px 4px #CCC;
    height: 52px;
    padding-top: 10px;
    height: 85px;
    padding-bottom: 45px;
}

form:not(.form-horizontal) .field-checkbox label {
    padding-top: 23px;
}

.field-collection .collection-empty {
    margin: .5em 0;
}

.select2-container {
    width: 100%% !important;
}
.select2-container--bootstrap .select2-selection {
    border: 1px solid #AAA;
    border-radius: 0;
    box-shadow: 0 0 3px rgba(0, 0, 0, .15);
    color: #222222;
    -webkit-transition: none;
    transition: none;
}
.select2-container--bootstrap .select2-selection .select2-search--inline {
    margin: 0;
}
.select2-container--bootstrap .select2-selection--single .select2-selection__rendered {
    color: #222222;
    padding-top: 4px;
}
.select2-container--bootstrap .select2-results__option {
    margin-bottom: 0;
}
.select2-container--bootstrap .select2-results__option[aria-selected=true] {
    background-color: #CCC;
    font-weight: bold;
}
.select2-container--bootstrap .select2-results__option--highlighted[aria-selected] {
    background-color: #3C8DBC;
}
.select2-container--bootstrap .select2-selection--multiple .select2-selection__choice {
    color: #222222;
}
.select2-container--bootstrap .select2-selection--multiple .select2-selection__choice__remove {
    color: #D42124;
    font-weight: bold;
    position: relative;
    top: -1px;
}
.select2-container--bootstrap .select2-search--dropdown .select2-search__field {
    border: 1px solid #444;
    border-radius: 0;
    margin: 5px 10px;
    padding: 6px;
    width: 96%%;
}
.select2-search--inline .select2-search__field:focus {
    outline: 0;
    border: 0;
}

.easyadmin-vich-image img {
    border: 3px solid #FFFFFF;
    box-shadow: 0 0 3px #AAA;
    max-height: 300px;
    max-width: 400px;
}
.easyadmin-vich-image input[type="file"],
.easyadmin-vich-file input[type="file"] {
    padding-top: 7px;
}
.easyadmin-vich-file a {
    display: inline-block;
    padding-top: 7px;
}
.easyadmin-vich-file .field-checkbox {
    margin-bottom: 0;
}
.easyadmin-vich-file .field-checkbox .col-sm-2,
.easyadmin-vich-image .field-checkbox .col-sm-2 {
    display: none;
}

.easyadmin-thumbnail img {
    border: 3px solid #FFFFFF;
    box-shadow: 0 0 3px #AAA;
    max-height: 100px;
    max-width: 100%%;
}
.easyadmin-thumbnail img:hover {
    cursor: zoom-in;
}
.featherlight .easyadmin-lightbox:hover {
    cursor: zoom-out;
}
.easyadmin-lightbox {
    display: none;
}
.featherlight .easyadmin-lightbox {
    display: block;
}
.easyadmin-lightbox img {
    max-width: 100%%;
}

.modal-dialog .modal-content {
    border-radius: 0;
}
.modal-dialog .modal-content .modal-body h4 {
    font-size: 21px;
    margin: .5em 0;
}
.modal-dialog .modal-footer {
    background: #F5F5F5;
    border-top: 1px solid #CCC;
    margin-top: 1.5em;
}


.content-wrapper {
    background: #F5F5F5;
}
.fixed .content-wrapper {
    padding-top: 50px;
}

.main-header {
    background: #3C8DBC;
}
.main-header .logo {
    background: rgba(0, 0, 0, 0.15);
    color: #FFFFFF;
    font-family: Helvetica, "Helvetica Neue", Arial, sans-serif;     font-weight: bold;
    height: 40px;
}
.main-header .logo-lg {
    overflow: hidden;
    text-overflow: ellipsis;
    white-space: nowrap;
}
.main-header .logo-mini {
    font-weight: bold;
    text-align: center;
}
.main-header .logo-long .logo-lg {
    font-size: 16px;
}
.main-header > img {
    margin-top: -2px;
    max-height: 26px;
    max-width: 94%%;
}
.main-header li {
    margin-bottom: 0;
}

.main-header > .navbar {
    background-color: #3C8DBC;
    color: #FFFFFF;
    min-height: 40px;
}

.main-header .navbar .sidebar-toggle {
    color: #FFFFFF;
    padding: 10px;
}
.main-header .navbar .sidebar-toggle:hover {
    background: rgba(0, 0, 0, 0.15);
}

.navbar-custom-menu .user-menu {
    color: rgba(255, 255, 255, 0.8);
    font-size: 13px;
    font-weight: bold;
    padding: 10px;
}

#content #main {
    padding-bottom: 3em;
}
.content {
    padding-top: 10px;
}
.content-header {
    padding: 12px 15px 0 15px;
}
.content-header h1 {
    margin: 0;
    font-size: 24px;
}

.main-sidebar,
.wrapper {
    background-color: rgb(34, 34, 34);
}
.main-sidebar {
    padding-top: 40px;
}

.sidebar-menu li.header {
    color: #FFFFFF;
    font-size: 12px;
    font-weight: bold;
    opacity: 0.4;
    text-transform: uppercase;
}
.treeview-menu > li.header {
    padding-left: 28px;
}

.sidebar-menu > li > a,
.sidebar-menu .treeview-menu > li > a {
    color: #FFFFFF;
    opacity: 0.8;
    border-left: 3px solid transparent;
    display: block;
    font-weight: bold;
}
.sidebar-menu .treeview-menu > li > a {
    font-size: 13px;
    padding: 8px 5px 8px 25px;
}
.sidebar-menu > li:hover > a,
.sidebar-menu > li.active > a,
.sidebar-menu .treeview-menu > li:hover > a,
.sidebar-menu .treeview-menu > li.active > a {
    color: #FFFFFF;
    background: rgb(15, 15, 15);
    border-left-color: rgb(115, 115, 115);
    opacity: 1;
}

.sidebar-menu > li > a > .fa {
    width: 22px;
}

.sidebar-menu .treeview-menu {
    background: rgb(60, 60, 60);
    margin: 0;
    padding: 0;
}

.sidebar-menu > li.active.submenu-active > a {
    background: rgb(34, 34, 34);
    border-left-color: transparent;
}
.sidebar-menu li > a > .pull-right {
    font-weight: bold;
    text-align: right;
}
.sidebar-menu li.active > a > .fa-angle-left {
    top: 30px;
    right: 0;
}
.sidebar-collapse .sidebar-menu > li > a > .fa {
    width: 28px;
}

body.easyadmin h1.title {
    margin-bottom: 10px;
}


body.list .global-actions {
    display: table;
    width: 100%%;
}
body.list .global-actions .button-action {
    display: table-cell;
    padding-left: 10px;
    vertical-align: middle;
    width: 120px;
}
body.list .global-actions .button-action a {
    float: right;
}
body.list .global-actions .form-action {
    display: table-cell;
    width: 100%%;
}
body.list .global-actions .form-action .input-group {
    width: 100%%;
}

body.list .global-actions .form-control {
    box-shadow: none;
}
body.list .global-actions .input-group-btn > button.btn:not(:last-child) {
    border-bottom-right-radius: 3px;
    border-top-right-radius: 3px;
}
body.list .global-actions .input-group-btn a.btn {
    border-radius: 3px;
    margin-left: 10px;
}

body.list .table-responsive,
body.list table {
    background: transparent;
    border: 0;
}
body.list table thead {
    display: none;
}
body.list .table tbody {
    background: transparent;
    border: 0;
}
body.list table tbody tr {
    background: #FFFFFF;
    border: 1px solid #CCC;
    display: block;
    margin-bottom: 1em;
}
body.list table tbody td {
    border-bottom: 1px solid #DDD;
    border-top: 0;
    display: block;
    text-align: right;
    vertical-align: middle;
}
body.list table tbody td:last-child {
    border-bottom: 0;
}
table td:before {
    content: attr(data-label);
    float: left;
    font-weight: bold;
}
table td:after {
    clear: both;
    content: "";
    display: block;
}

body.list table tbody td.image .easyadmin-thumbnail img {
    border-width: 2px;
    max-height: 50px;
    max-width: 150px;
}
body.list table tbody td.association .badge {
    font-size: 13px;
}
body.list table tbody td.actions a {
    font-weight: bold;
    margin-left: 10px;
}

body.list .table tbody span.highlight {
    background: #FF9;
    border-radius: 2px;
    padding: 1px;
}
body.list .table tbody .no-results span.highlight,
body.list .table tbody .actions span.highlight {
    background: 0;
    border-radius: 0;
}

body.list .pagination {
    float: right;
    margin: 0;
}
body.list .pagination > .disabled > span {
    background: transparent;
    border: 1px solid transparent;
    color: #737373;
}
body.list .pagination > li > a {
    background: #FFFFFF;
    border-color: #CCC;
    border-radius: 0;
    color: #222222;
}
body.list .pagination > li > a:hover {
    background: #3C8DBC;
    color: #FFFFFF;
}
.pagination > li > a,
.pagination > li > span {
    padding: 6px 8px;
}
body.list .pagination > li i {
    padding: 0 3px;
}
body.list .pagination.last-page li:nth-child(2) {
    position: relative;
    z-index: 1;
}

form label.control-label.required:after {
    content: "\\00a0*";
    color: #D42124;
    font-size: 16px;
    position: absolute;
}

body.new textarea {
    min-height: 250px;
}
body.new .field-collection-action {
    margin: -15px 0 10px;
}
body.new .field-collection-item-action {
    margin: 5px 0 0;
}

body.new #form-actions-row button,
body.new #form-actions-row a.btn {
    margin-bottom: 10px;
}
body.new .form-horizontal #form-actions-row {
    padding-left: 15px;
    padding-right: 15px;
}

body.edit textarea {
    min-height: 250px;
}
body.edit .field-collection-action {
    margin: -15px 0 10px;
}
body.edit .field-collection-item-action {
    margin: 5px 0 0;
}

body.edit #form-actions-row button,
body.edit #form-actions-row a.btn {
    margin-bottom: 10px;
}
body.edit .form-horizontal #form-actions-row {
    padding-left: 15px;
    padding-right: 15px;
}

body.show .form-control {
    background: #FFFFFF;
    border: 0;
    border-radius: 0;
    box-shadow: none;
    height: auto;
}
body.show .form-control.text {
    min-height: 34px;
    max-height: 250px;
    overflow-y: auto;
}

body.error .error-description {
    background: #FFFFFF;
    border: 1px solid #F5F5F5;
    box-shadow: 0 0 3px #CCC;
    margin: 2em auto 2em;
    max-width: 90%%;
    min-height: 150px;
    padding: 0;
}
body.error .error-description h1 {
    background: #D42124;
    color: #FFFFFF;
    font-size: 18px;
    font-weight: bold;
    margin-top: 0;
    padding: 10px;
    text-transform: uppercase;
}
body.error .error-message {
    font-size: 16px;
    padding: 15px;
}


@media (min-width: 768px) {
    ul, ol {
        margin-left: 2em;
    }

    .main-header > .navbar {
      min-height: 50px;
    }
    .main-header .logo {
        text-align: left;
        height: 50px;
    }
    .main-header .logo img {
        max-height: 48px;
    }

    .main-header .navbar .sidebar-toggle {
        padding: 15px;
    }
    .navbar-custom-menu .user-menu {
        padding: 17px 15px 13px;
    }
    .navbar-custom-menu .user-menu i {
        padding-right: 4px;
    }

    .main-sidebar {
        padding-top: 50px;
    }

        body.list table {
        background: #FFFFFF;
        border: 1px solid #CCC;
    }
    body.list table thead {
        display: table-header-group;
    }
    body.list table thead th {
        background: #EEE;
        padding: 0;
    }
    body.list table thead th i {
        color: #AAA;
        padding: 0 3px;
    }
    body.list table thead th a,
    body.list table thead th span {
        color: #222222;
        display: block;
        padding: 10px 6px;
        white-space: nowrap;
    }
    body.list table thead th a:hover {
        background: #CCC;
        text-decoration: none;
    }
    body.list table thead th.sorted,
    body.list table thead th.sorted a {
        background: #3C8DBC;
        color: #FFFFFF;
    }
    body.list table thead th.sorted a:hover i,
    body.list table thead th.sorted i {
        color: #FFFFFF;
    }
    body.list th.boolean, body.list td.boolean,
    body.list th.toggle, body.list td.toggle,
    body.list td.image {
        text-align: center;
    }

    body.list .table thead tr th {
        border-bottom: 2px solid #CCC;
    }
    body.list .table thead tr th.sorted {
        border-bottom: 2px outset #3C8DBC;
    }
        body.list .table thead tr th:first-child.sorted {
        border-left: 1px solid #3C8DBC;
        border-top: 1px solid #3C8DBC;
    }
    body.list .table tbody {
        border-bottom: 2px double #CCC;
    }
    body.list table tbody tr {
        border: 0;
        display: table-row;
        margin-bottom: 0;
    }
    body.list table tbody td {
        border-bottom: 0;
        border-top: 1px solid #DDD;
        display: table-cell;
        text-align: left;
    }
    table td:before {
        content: none;
        float: none;
    }
    body.list table tbody td.sorted {
        background: #F5F5F5;
        border-color: #DDD;
    }
    body.list .table tbody tr:hover td {
        background: #F5F5F5;
    }
    body.list table tbody td.actions a {
        margin-left: 0;
        margin-right: 10px;
    }

    .field-date select + select,
    .field-time select + select,
    .field-datetime select + select {
        margin-left: 2px;
    }

    body.error .error-description {
        max-width: 70%%;
    }

    .pagination > li > a,
    .pagination > li > span {
        padding: 6px 12px;
    }

    .form-inline .form-control {
        margin-bottom: 0;
    }

    body.new .form-horizontal #form-actions-row {
        margin-left: 16.66666667%%;
    }

    body.edit .form-horizontal #form-actions-row {
        margin-left: 16.66666667%%;
    }
}
',
                ),
                'default_entity_name' => 'Formateur',
                'default_menu_item' => NULL,
                'homepage' => array(
                    'route' => 'easyadmin',
                    'params' => array(
                        'action' => 'list',
                        'entity' => 'Formateur',
                    ),
                ),
            ),
            'vich_uploader.default_filename_attribute_suffix' => '_name',
            'vich_uploader.mappings' => array(
                'formateur_image' => array(
                    'uri_prefix' => '/img/avatar',
                    'upload_destination' => ($this->targetDirs[2].'/../web/img/avatar'),
                    'namer' => array(
                        'service' => NULL,
                        'options' => NULL,
                    ),
                    'directory_namer' => NULL,
                    'delete_on_remove' => true,
                    'delete_on_update' => true,
                    'inject_on_load' => false,
                    'db_driver' => 'orm',
                ),
                'formateur_cv' => array(
                    'uri_prefix' => '/file/cv',
                    'upload_destination' => ($this->targetDirs[2].'/../web/file/cv'),
                    'namer' => array(
                        'service' => NULL,
                        'options' => NULL,
                    ),
                    'directory_namer' => NULL,
                    'delete_on_remove' => true,
                    'delete_on_update' => true,
                    'inject_on_load' => false,
                    'db_driver' => 'orm',
                ),
            ),
            'vich_uploader.file_injector.class' => 'Vich\\UploaderBundle\\Injector\\FileInjector',
            'avanzu_admin_theme.bower_bin' => '/usr/local/bin/bower',
            'avanzu_admin_theme.navbar_user_listener.class' => 'Avanzu\\AdminThemeBundle\\EventListener\\NavbarShowUserDemoListener',
            'avanzu_admin_theme.navbar_task_listener.class' => 'Avanzu\\AdminThemeBundle\\EventListener\\NavbarTaskListDemoListener',
            'avanzu_admin_theme.navbar_notify_listener.class' => 'Avanzu\\AdminThemeBundle\\EventListener\\NavbarNotificationListDemoListener',
            'avanzu_admin_theme.navbar_msg_listener.class' => 'Avanzu\\AdminThemeBundle\\EventListener\\NavbarMessageListDemoListener',
            'avanzu_admin_theme.setup_menu_listener.class' => 'Avanzu\\AdminThemeBundle\\EventListener\\SidebarSetupMenuDemoListener',
            'avanzu_admin_theme.exception_controller.class' => 'Avanzu\\AdminThemeBundle\\Controller\\ExceptionController',
            'avanzu_admin_theme.widget_extension.class' => 'Avanzu\\AdminThemeBundle\\Twig\\WidgetExtension',
            'avanzu_admin_theme.theme_manager.class' => 'Avanzu\\AdminThemeBundle\\Theme\\ThemeManager',
            'avanzu_admin_theme.setup_theme_listener.class' => 'Avanzu\\AdminThemeBundle\\EventListener\\SetupThemeListener',
            'avanzu_admin_theme.dependency_resolver.class' => '',
            'avanzu_admin_theme.css_base' => '',
            'avanzu_admin_theme.lte_admin' => '',
            'buttons.facebook' => array(
                'url' => NULL,
                'locale' => 'fr_FR',
                'send' => false,
                'width' => 300,
                'showFaces' => false,
                'layout' => 'button_count',
                'share' => true,
            ),
            'buttons.twitter' => array(
                'url' => NULL,
                'locale' => 'fr',
                'message' => 'Je veux partager ça avec vous',
                'text' => 'Tweet',
                'via' => 'L\'Equipe cartedevisitevirtuelle.fr',
                'tag' => 'ttot',
                'showFaces' => false,
                'send' => true,
                'share' => true,
            ),
            'buttons.googleplus' => array(
                'url' => NULL,
                'locale' => 'fr',
                'size' => 'medium',
                'annotation' => 'bubble',
                'width' => 300,
                'showFaces' => false,
                'send' => true,
                'share' => true,
            ),
            'buttons.linkedin' => array(
                'url' => NULL,
                'locale' => 'fr_FR',
                'counter' => 'right',
                'showFaces' => false,
                'send' => true,
                'share' => true,
            ),
            'buttons.pinterest' => array(
                'url' => NULL,
                'locale' => 'fr',
                'showFaces' => false,
                'send' => true,
                'share' => true,
            ),
            'links.facebook' => array(
                'network' => 'facebook',
                'url' => 'https://www.facebook.com/MOOC-1126207164109545/',
                'theme' => 'default',
            ),
            'links.googleplus' => array(
                'network' => 'googleplus',
                'url' => 'https://plus.google.com/104563127504930701172/',
                'theme' => 'default',
            ),
            'social.theme' => 'default',
            'star_rating.config' => array(

            ),
            'gregwar_image.cache_dir' => 'my_cache_image_dir',
            'gregwar_image.cache_dir_mode' => NULL,
            'gregwar_image.throw_exception' => false,
            'gregwar_image.fallback_image' => 'web/bundles/moocmooc/ApprenantAssets/img/defaut.jpg',
            'gregwar_image.web_dir' => ($this->targetDirs[2].'/../web'),
            'image.handling.class' => 'Gregwar\\ImageBundle\\Services\\ImageHandling',
            'image.handler.class' => 'Gregwar\\ImageBundle\\ImageHandler',
            'web_profiler.controller.profiler.class' => 'Symfony\\Bundle\\WebProfilerBundle\\Controller\\ProfilerController',
            'web_profiler.controller.router.class' => 'Symfony\\Bundle\\WebProfilerBundle\\Controller\\RouterController',
            'web_profiler.controller.exception.class' => 'Symfony\\Bundle\\WebProfilerBundle\\Controller\\ExceptionController',
            'twig.extension.webprofiler.class' => 'Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension',
            'web_profiler.debug_toolbar.position' => 'bottom',
            'web_profiler.debug_toolbar.class' => 'Symfony\\Bundle\\WebProfilerBundle\\EventListener\\WebDebugToolbarListener',
            'web_profiler.debug_toolbar.intercept_redirects' => false,
            'web_profiler.debug_toolbar.mode' => 2,
            'sensio_distribution.webconfigurator.class' => 'Sensio\\Bundle\\DistributionBundle\\Configurator\\Configurator',
            'sensio_distribution.webconfigurator.doctrine_step.class' => 'Sensio\\Bundle\\DistributionBundle\\Configurator\\Step\\DoctrineStep',
            'sensio_distribution.webconfigurator.secret_step.class' => 'Sensio\\Bundle\\DistributionBundle\\Configurator\\Step\\SecretStep',
            'sensio_distribution.security_checker.class' => 'SensioLabs\\Security\\SecurityChecker',
            'sensio_distribution.security_checker.command.class' => 'SensioLabs\\Security\\Command\\SecurityCheckerCommand',
            'data_collector.templates' => array(
                'data_collector.config' => array(
                    0 => 'config',
                    1 => '@WebProfiler/Collector/config.html.twig',
                ),
                'data_collector.request' => array(
                    0 => 'request',
                    1 => '@WebProfiler/Collector/request.html.twig',
                ),
                'data_collector.ajax' => array(
                    0 => 'ajax',
                    1 => '@WebProfiler/Collector/ajax.html.twig',
                ),
                'data_collector.exception' => array(
                    0 => 'exception',
                    1 => '@WebProfiler/Collector/exception.html.twig',
                ),
                'data_collector.events' => array(
                    0 => 'events',
                    1 => '@WebProfiler/Collector/events.html.twig',
                ),
                'data_collector.logger' => array(
                    0 => 'logger',
                    1 => '@WebProfiler/Collector/logger.html.twig',
                ),
                'data_collector.time' => array(
                    0 => 'time',
                    1 => '@WebProfiler/Collector/time.html.twig',
                ),
                'data_collector.memory' => array(
                    0 => 'memory',
                    1 => '@WebProfiler/Collector/memory.html.twig',
                ),
                'data_collector.router' => array(
                    0 => 'router',
                    1 => '@WebProfiler/Collector/router.html.twig',
                ),
                'data_collector.form' => array(
                    0 => 'form',
                    1 => '@WebProfiler/Collector/form.html.twig',
                ),
                'data_collector.doctrine' => array(
                    0 => 'db',
                    1 => '@Doctrine/Collector/db.html.twig',
                ),
                'swiftmailer.data_collector' => array(
                    0 => 'swiftmailer',
                    1 => '@Swiftmailer/Collector/swiftmailer.html.twig',
                ),
                'data_collector.security' => array(
                    0 => 'security',
                    1 => '@Security/Collector/security.html.twig',
                ),
                'easyadmin.data_collector' => array(
                    0 => 'easyadmin',
                    1 => '@EasyAdmin/data_collector/easyadmin.html.twig',
                ),
                'data_collector.dump' => array(
                    0 => 'dump',
                    1 => '@Debug/Profiler/dump.html.twig',
                ),
            ),
            'console.command.ids' => array(
                0 => 'sensio_distribution.security_checker.command',
            ),
        );
    }
}

class VichUploaderBundleHandlerDownloadHandler_000000006f3b5022000000005e788bd83c6b334300e435587111272351cb6f0c extends \Vich\UploaderBundle\Handler\DownloadHandler implements \ProxyManager\Proxy\VirtualProxyInterface
{

    /**
     * @var \Closure|null initializer responsible for generating the wrapped object
     */
    private $valueHolder5731b16541111346008539 = null;

    /**
     * @var \Closure|null initializer responsible for generating the wrapped object
     */
    private $initializer5731b16541164329459544 = null;

    /**
     * @var bool[] map of public properties of the parent class
     */
    private static $publicProperties5731b1654103b615137374 = array(
        
    );

    /**
     * {@inheritDoc}
     */
    public function downloadObject($object, $field, $className = null, $fileName = null)
    {
        $this->initializer5731b16541164329459544 && $this->initializer5731b16541164329459544->__invoke($this->valueHolder5731b16541111346008539, $this, 'downloadObject', array('object' => $object, 'field' => $field, 'className' => $className, 'fileName' => $fileName), $this->initializer5731b16541164329459544);

        return $this->valueHolder5731b16541111346008539->downloadObject($object, $field, $className, $fileName);
    }

    /**
     * @override constructor for lazy initialization
     *
     * @param \Closure|null $initializer
     */
    public function __construct($initializer)
    {
        $this->initializer5731b16541164329459544 = $initializer;
    }

    /**
     * @param string $name
     */
    public function & __get($name)
    {
        $this->initializer5731b16541164329459544 && $this->initializer5731b16541164329459544->__invoke($this->valueHolder5731b16541111346008539, $this, '__get', array('name' => $name), $this->initializer5731b16541164329459544);

        if (isset(self::$publicProperties5731b1654103b615137374[$name])) {
            return $this->valueHolder5731b16541111346008539->$name;
        }

        $realInstanceReflection = new \ReflectionClass(get_parent_class($this));

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolder5731b16541111346008539;

            $backtrace = debug_backtrace(false);
            trigger_error('Undefined property: ' . get_parent_class($this) . '::$' . $name . ' in ' . $backtrace[0]['file'] . ' on line ' . $backtrace[0]['line'], \E_USER_NOTICE);
            return $targetObject->$name;;
            return;
        }

        $targetObject = $this->valueHolder5731b16541111346008539;
        $accessor = function & () use ($targetObject, $name) {
            return $targetObject->$name;
        };
            $backtrace = debug_backtrace(true);
            $scopeObject = isset($backtrace[1]['object']) ? $backtrace[1]['object'] : new \stdClass();
            $accessor = $accessor->bindTo($scopeObject, get_class($scopeObject));
        $returnValue = & $accessor();

        return $returnValue;
    }

    /**
     * @param string $name
     * @param mixed $value
     */
    public function __set($name, $value)
    {
        $this->initializer5731b16541164329459544 && $this->initializer5731b16541164329459544->__invoke($this->valueHolder5731b16541111346008539, $this, '__set', array('name' => $name, 'value' => $value), $this->initializer5731b16541164329459544);

        $realInstanceReflection = new \ReflectionClass(get_parent_class($this));

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolder5731b16541111346008539;

            return $targetObject->$name = $value;;
            return;
        }

        $targetObject = $this->valueHolder5731b16541111346008539;
        $accessor = function & () use ($targetObject, $name, $value) {
            return $targetObject->$name = $value;
        };
            $backtrace = debug_backtrace(true);
            $scopeObject = isset($backtrace[1]['object']) ? $backtrace[1]['object'] : new \stdClass();
            $accessor = $accessor->bindTo($scopeObject, get_class($scopeObject));
        $returnValue = & $accessor();

        return $returnValue;
    }

    /**
     * @param string $name
     */
    public function __isset($name)
    {
        $this->initializer5731b16541164329459544 && $this->initializer5731b16541164329459544->__invoke($this->valueHolder5731b16541111346008539, $this, '__isset', array('name' => $name), $this->initializer5731b16541164329459544);

        $realInstanceReflection = new \ReflectionClass(get_parent_class($this));

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolder5731b16541111346008539;

            return isset($targetObject->$name);;
            return;
        }

        $targetObject = $this->valueHolder5731b16541111346008539;
        $accessor = function () use ($targetObject, $name) {
            return isset($targetObject->$name);
        };
            $backtrace = debug_backtrace(true);
            $scopeObject = isset($backtrace[1]['object']) ? $backtrace[1]['object'] : new \stdClass();
            $accessor = $accessor->bindTo($scopeObject, get_class($scopeObject));
        $returnValue = $accessor();

        return $returnValue;
    }

    /**
     * @param string $name
     */
    public function __unset($name)
    {
        $this->initializer5731b16541164329459544 && $this->initializer5731b16541164329459544->__invoke($this->valueHolder5731b16541111346008539, $this, '__unset', array('name' => $name), $this->initializer5731b16541164329459544);

        $realInstanceReflection = new \ReflectionClass(get_parent_class($this));

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolder5731b16541111346008539;

            unset($targetObject->$name);;
            return;
        }

        $targetObject = $this->valueHolder5731b16541111346008539;
        $accessor = function () use ($targetObject, $name) {
            unset($targetObject->$name);
        };
            $backtrace = debug_backtrace(true);
            $scopeObject = isset($backtrace[1]['object']) ? $backtrace[1]['object'] : new \stdClass();
            $accessor = $accessor->bindTo($scopeObject, get_class($scopeObject));
        $returnValue = $accessor();

        return $returnValue;
    }

    public function __clone()
    {
        $this->initializer5731b16541164329459544 && $this->initializer5731b16541164329459544->__invoke($this->valueHolder5731b16541111346008539, $this, '__clone', array(), $this->initializer5731b16541164329459544);

        $this->valueHolder5731b16541111346008539 = clone $this->valueHolder5731b16541111346008539;
    }

    public function __sleep()
    {
        $this->initializer5731b16541164329459544 && $this->initializer5731b16541164329459544->__invoke($this->valueHolder5731b16541111346008539, $this, '__sleep', array(), $this->initializer5731b16541164329459544);

        return array('valueHolder5731b16541111346008539');
    }

    public function __wakeup()
    {
    }

    /**
     * {@inheritDoc}
     */
    public function setProxyInitializer(\Closure $initializer = null)
    {
        $this->initializer5731b16541164329459544 = $initializer;
    }

    /**
     * {@inheritDoc}
     */
    public function getProxyInitializer()
    {
        return $this->initializer5731b16541164329459544;
    }

    /**
     * {@inheritDoc}
     */
    public function initializeProxy()
    {
        return $this->initializer5731b16541164329459544 && $this->initializer5731b16541164329459544->__invoke($this->valueHolder5731b16541111346008539, $this, 'initializeProxy', array(), $this->initializer5731b16541164329459544);
    }

    /**
     * {@inheritDoc}
     */
    public function isProxyInitialized()
    {
        return null !== $this->valueHolder5731b16541111346008539;
    }

    /**
     * {@inheritDoc}
     */
    public function getWrappedValueHolderValue()
    {
        return $this->valueHolder5731b16541111346008539;
    }


}

class VichUploaderBundleHandlerUploadHandler_000000006f3b5020000000005e788bd83c6b334300e435587111272351cb6f0c extends \Vich\UploaderBundle\Handler\UploadHandler implements \ProxyManager\Proxy\VirtualProxyInterface
{

    /**
     * @var \Closure|null initializer responsible for generating the wrapped object
     */
    private $valueHolder5731b16543c49050405965 = null;

    /**
     * @var \Closure|null initializer responsible for generating the wrapped object
     */
    private $initializer5731b16543c92085026171 = null;

    /**
     * @var bool[] map of public properties of the parent class
     */
    private static $publicProperties5731b16543bca119179568 = array(
        
    );

    /**
     * {@inheritDoc}
     */
    public function upload($obj, $fieldName)
    {
        $this->initializer5731b16543c92085026171 && $this->initializer5731b16543c92085026171->__invoke($this->valueHolder5731b16543c49050405965, $this, 'upload', array('obj' => $obj, 'fieldName' => $fieldName), $this->initializer5731b16543c92085026171);

        return $this->valueHolder5731b16543c49050405965->upload($obj, $fieldName);
    }

    /**
     * {@inheritDoc}
     */
    public function inject($obj, $fieldName)
    {
        $this->initializer5731b16543c92085026171 && $this->initializer5731b16543c92085026171->__invoke($this->valueHolder5731b16543c49050405965, $this, 'inject', array('obj' => $obj, 'fieldName' => $fieldName), $this->initializer5731b16543c92085026171);

        return $this->valueHolder5731b16543c49050405965->inject($obj, $fieldName);
    }

    /**
     * {@inheritDoc}
     */
    public function clean($obj, $fieldName)
    {
        $this->initializer5731b16543c92085026171 && $this->initializer5731b16543c92085026171->__invoke($this->valueHolder5731b16543c49050405965, $this, 'clean', array('obj' => $obj, 'fieldName' => $fieldName), $this->initializer5731b16543c92085026171);

        return $this->valueHolder5731b16543c49050405965->clean($obj, $fieldName);
    }

    /**
     * {@inheritDoc}
     */
    public function remove($obj, $fieldName)
    {
        $this->initializer5731b16543c92085026171 && $this->initializer5731b16543c92085026171->__invoke($this->valueHolder5731b16543c49050405965, $this, 'remove', array('obj' => $obj, 'fieldName' => $fieldName), $this->initializer5731b16543c92085026171);

        return $this->valueHolder5731b16543c49050405965->remove($obj, $fieldName);
    }

    /**
     * @override constructor for lazy initialization
     *
     * @param \Closure|null $initializer
     */
    public function __construct($initializer)
    {
        $this->initializer5731b16543c92085026171 = $initializer;
    }

    /**
     * @param string $name
     */
    public function & __get($name)
    {
        $this->initializer5731b16543c92085026171 && $this->initializer5731b16543c92085026171->__invoke($this->valueHolder5731b16543c49050405965, $this, '__get', array('name' => $name), $this->initializer5731b16543c92085026171);

        if (isset(self::$publicProperties5731b16543bca119179568[$name])) {
            return $this->valueHolder5731b16543c49050405965->$name;
        }

        $realInstanceReflection = new \ReflectionClass(get_parent_class($this));

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolder5731b16543c49050405965;

            $backtrace = debug_backtrace(false);
            trigger_error('Undefined property: ' . get_parent_class($this) . '::$' . $name . ' in ' . $backtrace[0]['file'] . ' on line ' . $backtrace[0]['line'], \E_USER_NOTICE);
            return $targetObject->$name;;
            return;
        }

        $targetObject = $this->valueHolder5731b16543c49050405965;
        $accessor = function & () use ($targetObject, $name) {
            return $targetObject->$name;
        };
            $backtrace = debug_backtrace(true);
            $scopeObject = isset($backtrace[1]['object']) ? $backtrace[1]['object'] : new \stdClass();
            $accessor = $accessor->bindTo($scopeObject, get_class($scopeObject));
        $returnValue = & $accessor();

        return $returnValue;
    }

    /**
     * @param string $name
     * @param mixed $value
     */
    public function __set($name, $value)
    {
        $this->initializer5731b16543c92085026171 && $this->initializer5731b16543c92085026171->__invoke($this->valueHolder5731b16543c49050405965, $this, '__set', array('name' => $name, 'value' => $value), $this->initializer5731b16543c92085026171);

        $realInstanceReflection = new \ReflectionClass(get_parent_class($this));

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolder5731b16543c49050405965;

            return $targetObject->$name = $value;;
            return;
        }

        $targetObject = $this->valueHolder5731b16543c49050405965;
        $accessor = function & () use ($targetObject, $name, $value) {
            return $targetObject->$name = $value;
        };
            $backtrace = debug_backtrace(true);
            $scopeObject = isset($backtrace[1]['object']) ? $backtrace[1]['object'] : new \stdClass();
            $accessor = $accessor->bindTo($scopeObject, get_class($scopeObject));
        $returnValue = & $accessor();

        return $returnValue;
    }

    /**
     * @param string $name
     */
    public function __isset($name)
    {
        $this->initializer5731b16543c92085026171 && $this->initializer5731b16543c92085026171->__invoke($this->valueHolder5731b16543c49050405965, $this, '__isset', array('name' => $name), $this->initializer5731b16543c92085026171);

        $realInstanceReflection = new \ReflectionClass(get_parent_class($this));

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolder5731b16543c49050405965;

            return isset($targetObject->$name);;
            return;
        }

        $targetObject = $this->valueHolder5731b16543c49050405965;
        $accessor = function () use ($targetObject, $name) {
            return isset($targetObject->$name);
        };
            $backtrace = debug_backtrace(true);
            $scopeObject = isset($backtrace[1]['object']) ? $backtrace[1]['object'] : new \stdClass();
            $accessor = $accessor->bindTo($scopeObject, get_class($scopeObject));
        $returnValue = $accessor();

        return $returnValue;
    }

    /**
     * @param string $name
     */
    public function __unset($name)
    {
        $this->initializer5731b16543c92085026171 && $this->initializer5731b16543c92085026171->__invoke($this->valueHolder5731b16543c49050405965, $this, '__unset', array('name' => $name), $this->initializer5731b16543c92085026171);

        $realInstanceReflection = new \ReflectionClass(get_parent_class($this));

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolder5731b16543c49050405965;

            unset($targetObject->$name);;
            return;
        }

        $targetObject = $this->valueHolder5731b16543c49050405965;
        $accessor = function () use ($targetObject, $name) {
            unset($targetObject->$name);
        };
            $backtrace = debug_backtrace(true);
            $scopeObject = isset($backtrace[1]['object']) ? $backtrace[1]['object'] : new \stdClass();
            $accessor = $accessor->bindTo($scopeObject, get_class($scopeObject));
        $returnValue = $accessor();

        return $returnValue;
    }

    public function __clone()
    {
        $this->initializer5731b16543c92085026171 && $this->initializer5731b16543c92085026171->__invoke($this->valueHolder5731b16543c49050405965, $this, '__clone', array(), $this->initializer5731b16543c92085026171);

        $this->valueHolder5731b16543c49050405965 = clone $this->valueHolder5731b16543c49050405965;
    }

    public function __sleep()
    {
        $this->initializer5731b16543c92085026171 && $this->initializer5731b16543c92085026171->__invoke($this->valueHolder5731b16543c49050405965, $this, '__sleep', array(), $this->initializer5731b16543c92085026171);

        return array('valueHolder5731b16543c49050405965');
    }

    public function __wakeup()
    {
    }

    /**
     * {@inheritDoc}
     */
    public function setProxyInitializer(\Closure $initializer = null)
    {
        $this->initializer5731b16543c92085026171 = $initializer;
    }

    /**
     * {@inheritDoc}
     */
    public function getProxyInitializer()
    {
        return $this->initializer5731b16543c92085026171;
    }

    /**
     * {@inheritDoc}
     */
    public function initializeProxy()
    {
        return $this->initializer5731b16543c92085026171 && $this->initializer5731b16543c92085026171->__invoke($this->valueHolder5731b16543c49050405965, $this, 'initializeProxy', array(), $this->initializer5731b16543c92085026171);
    }

    /**
     * {@inheritDoc}
     */
    public function isProxyInitialized()
    {
        return null !== $this->valueHolder5731b16543c49050405965;
    }

    /**
     * {@inheritDoc}
     */
    public function getWrappedValueHolderValue()
    {
        return $this->valueHolder5731b16543c49050405965;
    }


}
