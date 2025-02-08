<?php

namespace ContainerVKTaywh;


use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\ContainerInterface;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getTest_ServiceContainerService extends App_KernelTestDebugContainer
{
    /**
     * Gets the public 'test.service_container' shared service.
     *
     * @return \Symfony\Bundle\FrameworkBundle\Test\TestContainer
     */
    public static function do($container, $lazyLoad = true)
    {
        return $container->services['test.service_container'] = new \Symfony\Bundle\FrameworkBundle\Test\TestContainer(($container->services['kernel'] ?? $container->get('kernel', 1)), 'test.private_services_locator', ['cache.default_clearer' => 'cache.app_clearer', 'debug.event_dispatcher' => 'debug.event_dispatcher.inner', 'debug.controller_resolver' => 'debug.controller_resolver.inner', 'debug.argument_resolver' => 'debug.argument_resolver.inner', 'router.default' => 'router', 'security.csrf.same_origin_token_manager' => 'security.csrf.same_origin_token_manager.inner', 'profiler' => '.container.private.profiler', 'debug.validator' => 'debug.validator.inner', 'translator.data_collector' => 'translator', 'debug.security.access.decision_manager' => 'debug.security.access.decision_manager.inner', 'debug.security.firewall.authenticator.main' => 'debug.security.firewall.authenticator.main.inner', 'mercure.hub.default.traceable' => 'mercure.hub.default.traceable.inner', 'turbo.broadcaster.action_renderer' => 'turbo.broadcaster.action_renderer.inner', 'debug.security.event_dispatcher.main' => 'debug.security.event_dispatcher.main.inner', 'debug.traced.messenger.bus.default' => 'debug.traced.messenger.bus.default.inner', 'Symfony\\Component\\DependencyInjection\\ParameterBag\\ContainerBagInterface' => 'parameter_bag', 'Symfony\\Component\\DependencyInjection\\ParameterBag\\ParameterBagInterface' => 'parameter_bag', 'Symfony\\Component\\EventDispatcher\\EventDispatcherInterface' => 'debug.event_dispatcher.inner', 'Symfony\\Contracts\\EventDispatcher\\EventDispatcherInterface' => 'debug.event_dispatcher.inner', 'Psr\\EventDispatcher\\EventDispatcherInterface' => 'debug.event_dispatcher.inner', 'Symfony\\Component\\HttpKernel\\HttpKernelInterface' => 'http_kernel', 'Symfony\\Component\\HttpFoundation\\RequestStack' => 'request_stack', 'Symfony\\Component\\HttpFoundation\\UrlHelper' => 'url_helper', 'Symfony\\Component\\HttpKernel\\KernelInterface' => 'kernel', 'Symfony\\Component\\Filesystem\\Filesystem' => 'filesystem', 'Symfony\\Component\\HttpKernel\\Config\\FileLocator' => 'file_locator', 'Symfony\\Component\\HttpFoundation\\UriSigner' => 'uri_signer', 'Symfony\\Component\\String\\Slugger\\SluggerInterface' => 'slugger', 'Symfony\\Component\\Clock\\ClockInterface' => 'clock', 'Psr\\Clock\\ClockInterface' => 'clock', 'Symfony\\Component\\HttpKernel\\Fragment\\FragmentUriGeneratorInterface' => 'fragment.uri_generator', 'error_renderer.html' => 'twig.error_renderer.html', 'error_renderer' => 'error_handler.error_renderer.serializer', 'Psr\\Container\\ContainerInterface $parameterBag' => 'parameter_bag', 'Psr\\Cache\\CacheItemPoolInterface' => 'cache.app', 'Symfony\\Contracts\\Cache\\CacheInterface' => 'cache.app', 'Symfony\\Contracts\\Cache\\TagAwareCacheInterface' => 'cache.app.taggable', 'Symfony\\Contracts\\Translation\\TranslatorInterface' => 'translator', 'Symfony\\Component\\Asset\\Packages' => 'assets.packages', 'Symfony\\Contracts\\HttpClient\\HttpClientInterface' => 'http_client.uri_template.inner', 'Symfony\\Component\\Translation\\Reader\\TranslationReaderInterface' => 'translation.reader', 'Symfony\\Component\\Translation\\Extractor\\ExtractorInterface' => 'translation.extractor', 'Symfony\\Component\\Translation\\Writer\\TranslationWriterInterface' => 'translation.writer', 'Symfony\\Contracts\\Translation\\LocaleAwareInterface' => 'translation.locale_switcher', 'Symfony\\Component\\Translation\\LocaleSwitcher' => 'translation.locale_switcher', 'translator.formatter' => 'translator.formatter.default', 'Symfony\\Component\\ErrorHandler\\ErrorRenderer\\FileLinkFormatter' => 'debug.file_link_formatter', 'Symfony\\Component\\Stopwatch\\Stopwatch' => 'debug.stopwatch', 'Symfony\\Component\\Routing\\RouterInterface' => 'router', 'Symfony\\Component\\Routing\\Generator\\UrlGeneratorInterface' => 'router', 'Symfony\\Component\\Routing\\Matcher\\UrlMatcherInterface' => 'router', 'Symfony\\Component\\Routing\\RequestContextAwareInterface' => 'router', 'Symfony\\Component\\Routing\\RequestContext' => 'router.request_context', 'Symfony\\Component\\PropertyAccess\\PropertyAccessorInterface' => 'property_accessor', 'Symfony\\Component\\Serializer\\SerializerInterface' => 'serializer', 'Symfony\\Component\\Serializer\\Normalizer\\NormalizerInterface' => 'serializer', 'Symfony\\Component\\Serializer\\Normalizer\\DenormalizerInterface' => 'serializer', 'Symfony\\Component\\Serializer\\Encoder\\EncoderInterface' => 'serializer', 'Symfony\\Component\\Serializer\\Encoder\\DecoderInterface' => 'serializer', 'serializer.property_accessor' => 'property_accessor', 'Symfony\\Component\\Serializer\\Mapping\\ClassDiscriminatorResolverInterface' => 'serializer.mapping.class_discriminator_resolver', 'Symfony\\Component\\Serializer\\Mapping\\Factory\\ClassMetadataFactoryInterface' => 'serializer.mapping.class_metadata_factory', 'error_renderer.serializer' => 'error_handler.error_renderer.serializer', 'Symfony\\Component\\PropertyInfo\\PropertyAccessExtractorInterface' => 'property_info', 'Symfony\\Component\\PropertyInfo\\PropertyDescriptionExtractorInterface' => 'property_info', 'Symfony\\Component\\PropertyInfo\\PropertyInfoExtractorInterface' => 'property_info', 'Symfony\\Component\\PropertyInfo\\PropertyTypeExtractorInterface' => 'property_info', 'Symfony\\Component\\PropertyInfo\\PropertyListExtractorInterface' => 'property_info', 'Symfony\\Component\\PropertyInfo\\PropertyInitializableExtractorInterface' => 'property_info', 'Symfony\\Component\\PropertyInfo\\PropertyReadInfoExtractorInterface' => 'property_info.reflection_extractor', 'Symfony\\Component\\PropertyInfo\\PropertyWriteInfoExtractorInterface' => 'property_info.reflection_extractor', 'Symfony\\Component\\WebLink\\HttpHeaderSerializer' => 'web_link.http_header_serializer', 'cache.default_doctrine_dbal_provider' => 'doctrine.dbal.default_connection', 'SessionHandlerInterface' => 'session.handler.native', 'session.storage.factory' => 'session.storage.factory.mock_file', 'session.handler' => 'session.handler.native', 'session_listener' => 'test.session.listener', 'Symfony\\Component\\Security\\Csrf\\TokenGenerator\\TokenGeneratorInterface' => 'security.csrf.token_generator', 'Symfony\\Component\\Security\\Csrf\\TokenStorage\\TokenStorageInterface' => 'security.csrf.token_storage', 'Symfony\\Component\\Security\\Csrf\\CsrfTokenManagerInterface' => 'security.csrf.same_origin_token_manager.inner', 'Symfony\\Component\\Form\\ResolvedFormTypeFactoryInterface' => 'form.resolved_type_factory', 'Symfony\\Component\\Form\\FormRegistryInterface' => 'form.registry', 'Symfony\\Component\\Form\\FormFactoryInterface' => 'form.factory', 'form.property_accessor' => 'property_accessor', 'form.choice_list_factory' => 'form.choice_list_factory.cached', 'Symfony\\Component\\Validator\\Validator\\ValidatorInterface' => 'debug.validator.inner', 'validator.mapping.class_metadata_factory' => 'debug.validator.inner', 'Symfony\\Component\\Messenger\\Transport\\Serialization\\SerializerInterface' => 'messenger.transport.native_php_serializer', 'messenger.default_serializer' => 'messenger.transport.native_php_serializer', 'Symfony\\Component\\Messenger\\MessageBusInterface' => 'debug.traced.messenger.bus.default.inner', 'messenger.failure_transports.default' => 'messenger.transport.failed', 'Symfony\\Component\\Mime\\MimeTypesInterface' => 'mime_types', 'Symfony\\Component\\Mime\\MimeTypeGuesserInterface' => 'mime_types', 'Doctrine\\DBAL\\Connection' => 'doctrine.dbal.default_connection', 'Doctrine\\Persistence\\ManagerRegistry' => 'doctrine', 'Doctrine\\Common\\Persistence\\ManagerRegistry' => 'doctrine', 'doctrine.dbal.event_manager' => 'doctrine.dbal.default_connection.event_manager', 'Doctrine\\DBAL\\Connection $defaultConnection' => 'doctrine.dbal.default_connection', 'Doctrine\\ORM\\EntityManagerInterface' => 'doctrine.orm.default_entity_manager', 'doctrine.orm.default_metadata_cache' => 'cache.doctrine.orm.default.metadata', 'doctrine.orm.default_result_cache' => 'cache.doctrine.orm.default.result', 'doctrine.orm.default_query_cache' => 'cache.doctrine.orm.default.query', 'Doctrine\\ORM\\EntityManagerInterface $defaultEntityManager' => 'doctrine.orm.default_entity_manager', 'doctrine.orm.default_entity_manager.event_manager' => 'doctrine.dbal.default_connection.event_manager', 'doctrine.migrations.metadata_storage' => 'doctrine.migrations.storage.table_storage', 'Twig\\Environment' => 'twig', 'Symfony\\Component\\Mime\\BodyRendererInterface' => 'twig.mime_body_renderer', 'Symfony\\Component\\Security\\Core\\Authorization\\AuthorizationCheckerInterface' => 'security.authorization_checker', 'Symfony\\Component\\Security\\Core\\Authentication\\Token\\Storage\\TokenStorageInterface' => 'security.token_storage', 'Symfony\\Component\\Security\\Http\\Session\\SessionAuthenticationStrategyInterface' => 'security.authentication.session_strategy', 'Symfony\\Component\\Security\\Core\\Authorization\\AccessDecisionManagerInterface' => 'debug.security.access.decision_manager.inner', 'Symfony\\Component\\Security\\Core\\Role\\RoleHierarchyInterface' => 'security.role_hierarchy', 'Symfony\\Component\\Security\\Http\\Firewall' => 'debug.security.firewall', 'Symfony\\Component\\Security\\Http\\FirewallMapInterface' => 'security.firewall.map', 'Symfony\\Component\\Security\\Http\\HttpUtils' => 'security.http_utils', 'Symfony\\Component\\PasswordHasher\\Hasher\\PasswordHasherFactoryInterface' => 'security.password_hasher_factory', 'security.password_hasher' => 'security.user_password_hasher', 'Symfony\\Component\\PasswordHasher\\Hasher\\UserPasswordHasherInterface' => 'security.user_password_hasher', 'security.firewall' => 'debug.security.firewall', 'security.user_providers' => 'security.user.provider.concrete.users_in_memory', 'Symfony\\Component\\Security\\Core\\User\\UserProviderInterface' => 'security.user.provider.concrete.users_in_memory', 'security.authentication.session_strategy.main' => 'security.authentication.session_strategy', 'security.user_checker.main' => 'security.user_checker', 'security.firewall.context_locator' => '.service_locator.bsoXAxw', 'Symfony\\Component\\Security\\Core\\User\\UserCheckerInterface' => 'security.user_checker', 'logger' => 'monolog.logger', 'Psr\\Log\\LoggerInterface' => 'monolog.logger', 'Symfony\\Component\\Mercure\\Jwt\\TokenFactoryInterface $default' => 'mercure.hub.default.jwt.factory', 'Symfony\\Component\\Mercure\\Jwt\\TokenFactoryInterface $defaultFactory' => 'mercure.hub.default.jwt.factory', 'Symfony\\Component\\Mercure\\Jwt\\TokenFactoryInterface $defaultTokenFactory' => 'mercure.hub.default.jwt.factory', 'Symfony\\Component\\Mercure\\Jwt\\TokenProviderInterface $default' => 'mercure.hub.default.jwt.provider', 'Symfony\\Component\\Mercure\\Jwt\\TokenProviderInterface $defaultProvider' => 'mercure.hub.default.jwt.provider', 'Symfony\\Component\\Mercure\\Jwt\\TokenProviderInterface $defaultTokenProvider' => 'mercure.hub.default.jwt.provider', 'Symfony\\Component\\Mercure\\HubInterface $defaultHub' => 'mercure.hub.default.traceable.inner', 'Symfony\\Component\\Mercure\\HubInterface $default' => 'mercure.hub.default.traceable.inner', 'Symfony\\Component\\Mercure\\HubInterface' => 'mercure.hub.default.traceable.inner', 'Symfony\\WebpackEncoreBundle\\Asset\\EntrypointLookupCollectionInterface' => 'webpack_encore.entrypoint_lookup_collection', 'Symfony\\WebpackEncoreBundle\\Asset\\EntrypointLookupInterface' => 'webpack_encore.entrypoint_lookup[_default]', 'Symfony\\UX\\Turbo\\Broadcaster\\BroadcasterInterface' => 'turbo.broadcaster.action_renderer.inner', 'twig.loader.filesystem' => 'twig.loader.native_filesystem', 'argument_resolver.controller_locator' => '.service_locator.OVhKEaZ', 'doctrine.id_generator_locator' => '.service_locator.BxSdgVt', 'twig.loader' => 'twig.loader.native_filesystem', 'Psr\\Log\\LoggerInterface $requestLogger' => 'monolog.logger.request', 'Psr\\Log\\LoggerInterface $consoleLogger' => 'monolog.logger.console', 'Psr\\Log\\LoggerInterface $messengerLogger' => 'monolog.logger.messenger', 'Psr\\Log\\LoggerInterface $cacheLogger' => 'monolog.logger.cache', 'Psr\\Log\\LoggerInterface $httpClientLogger' => 'monolog.logger.http_client', 'Psr\\Log\\LoggerInterface $mailerLogger' => 'monolog.logger.mailer', 'Psr\\Log\\LoggerInterface $phpLogger' => 'monolog.logger.php', 'Psr\\Log\\LoggerInterface $eventLogger' => 'monolog.logger.event', 'Psr\\Log\\LoggerInterface $routerLogger' => 'monolog.logger.router', 'Psr\\Log\\LoggerInterface $profilerLogger' => 'monolog.logger.profiler', 'Psr\\Log\\LoggerInterface $doctrineLogger' => 'monolog.logger.doctrine', 'Psr\\Log\\LoggerInterface $securityLogger' => 'monolog.logger.security', 'Psr\\Log\\LoggerInterface $deprecationLogger' => 'monolog.logger.deprecation', 'turbo.mercure.stimulus_helper' => 'stimulus.helper', 'validator' => 'debug.validator.inner', 'http_client' => 'http_client.uri_template.inner', 'controller_resolver' => 'debug.controller_resolver.inner', 'argument_resolver' => 'debug.argument_resolver.inner', 'security.csrf.token_manager' => 'security.csrf.same_origin_token_manager.inner', 'translator.data_collector.inner' => 'translator.default', 'twig.error_renderer.html.inner' => 'error_handler.error_renderer.html', 'security.access.decision_manager' => 'debug.security.access.decision_manager.inner', 'security.firewall.authenticator.main' => 'debug.security.firewall.authenticator.main.inner', 'mercure.hub.default' => 'mercure.hub.default.traceable.inner', 'turbo.broadcaster.imux' => 'turbo.broadcaster.action_renderer.inner', 'security.event_dispatcher.main' => 'debug.security.event_dispatcher.main.inner', 'messenger.bus.default' => 'debug.traced.messenger.bus.default.inner', 'doctrine.orm.default_metadata_driver' => '.doctrine.orm.default_metadata_driver.inner', 'App\\Kernel' => 'kernel', 'database_connection' => 'doctrine.dbal.default_connection', 'doctrine.orm.entity_manager' => 'doctrine.orm.default_entity_manager']);
    }
}
