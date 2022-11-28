<?php

// This file has been auto-generated by the Symfony Dependency Injection Component
// You can reference it in the "opcache.preload" php.ini setting on PHP >= 7.4 when preloading is desired

use Symfony\Component\DependencyInjection\Dumper\Preloader;

if (in_array(PHP_SAPI, ['cli', 'phpdbg'], true)) {
    return;
}

require dirname(__DIR__, 3).'/vendor/autoload.php';
(require __DIR__.'/App_KernelDevDebugContainer.php')->set(\ContainerVcoZjx0\App_KernelDevDebugContainer::class, null);
require __DIR__.'/ContainerVcoZjx0/EntityManager_9a5be93.php';
require __DIR__.'/ContainerVcoZjx0/getVarDumper_ServerConnectionService.php';
require __DIR__.'/ContainerVcoZjx0/getVarDumper_ClonerService.php';
require __DIR__.'/ContainerVcoZjx0/getSession_FactoryService.php';
require __DIR__.'/ContainerVcoZjx0/getServicesResetterService.php';
require __DIR__.'/ContainerVcoZjx0/getSerializer_Mapping_ClassMetadataFactoryService.php';
require __DIR__.'/ContainerVcoZjx0/getSerializerService.php';
require __DIR__.'/ContainerVcoZjx0/getSecurity_User_Provider_Concrete_AppUserProviderService.php';
require __DIR__.'/ContainerVcoZjx0/getSecurity_PasswordHasherFactoryService.php';
require __DIR__.'/ContainerVcoZjx0/getSecurity_Logout_Listener_CsrfTokenClearingService.php';
require __DIR__.'/ContainerVcoZjx0/getSecurity_Listener_UserProviderService.php';
require __DIR__.'/ContainerVcoZjx0/getSecurity_Listener_UserChecker_MainService.php';
require __DIR__.'/ContainerVcoZjx0/getSecurity_Listener_Session_MainService.php';
require __DIR__.'/ContainerVcoZjx0/getSecurity_Listener_PasswordMigratingService.php';
require __DIR__.'/ContainerVcoZjx0/getSecurity_Listener_Main_UserProviderService.php';
require __DIR__.'/ContainerVcoZjx0/getSecurity_Listener_CsrfProtectionService.php';
require __DIR__.'/ContainerVcoZjx0/getSecurity_Listener_CheckAuthenticatorCredentialsService.php';
require __DIR__.'/ContainerVcoZjx0/getSecurity_Firewall_Map_Context_MainService.php';
require __DIR__.'/ContainerVcoZjx0/getSecurity_Firewall_Map_Context_DevService.php';
require __DIR__.'/ContainerVcoZjx0/getSecurity_Csrf_TokenStorageService.php';
require __DIR__.'/ContainerVcoZjx0/getSecurity_Csrf_TokenManagerService.php';
require __DIR__.'/ContainerVcoZjx0/getSecurity_ChannelListenerService.php';
require __DIR__.'/ContainerVcoZjx0/getSecurity_AccessListenerService.php';
require __DIR__.'/ContainerVcoZjx0/getSecrets_VaultService.php';
require __DIR__.'/ContainerVcoZjx0/getRouting_LoaderService.php';
require __DIR__.'/ContainerVcoZjx0/getPropertyInfo_SerializerExtractorService.php';
require __DIR__.'/ContainerVcoZjx0/getErrorControllerService.php';
require __DIR__.'/ContainerVcoZjx0/getDoctrine_UuidGeneratorService.php';
require __DIR__.'/ContainerVcoZjx0/getDoctrine_UlidGeneratorService.php';
require __DIR__.'/ContainerVcoZjx0/getDoctrine_Orm_Listeners_DoctrineTokenProviderSchemaSubscriberService.php';
require __DIR__.'/ContainerVcoZjx0/getDoctrine_Orm_Listeners_DoctrineDbalCacheAdapterSchemaSubscriberService.php';
require __DIR__.'/ContainerVcoZjx0/getDoctrine_Orm_DefaultListeners_AttachEntityListenersService.php';
require __DIR__.'/ContainerVcoZjx0/getDoctrine_Orm_DefaultEntityManager_PropertyInfoExtractorService.php';
require __DIR__.'/ContainerVcoZjx0/getDoctrine_Orm_DefaultEntityManagerService.php';
require __DIR__.'/ContainerVcoZjx0/getDoctrine_Dbal_DefaultConnectionService.php';
require __DIR__.'/ContainerVcoZjx0/getDebug_Security_Voter_VoteListenerService.php';
require __DIR__.'/ContainerVcoZjx0/getDebug_Security_Voter_Security_Access_SimpleRoleVoterService.php';
require __DIR__.'/ContainerVcoZjx0/getDebug_Security_Voter_Security_Access_AuthenticatedVoterService.php';
require __DIR__.'/ContainerVcoZjx0/getDebug_Security_UserValueResolverService.php';
require __DIR__.'/ContainerVcoZjx0/getDebug_Security_Firewall_Authenticator_MainService.php';
require __DIR__.'/ContainerVcoZjx0/getDebug_ArgumentResolver_VariadicService.php';
require __DIR__.'/ContainerVcoZjx0/getDebug_ArgumentResolver_SessionService.php';
require __DIR__.'/ContainerVcoZjx0/getDebug_ArgumentResolver_ServiceService.php';
require __DIR__.'/ContainerVcoZjx0/getDebug_ArgumentResolver_RequestAttributeService.php';
require __DIR__.'/ContainerVcoZjx0/getDebug_ArgumentResolver_RequestService.php';
require __DIR__.'/ContainerVcoZjx0/getDebug_ArgumentResolver_NotTaggedControllerService.php';
require __DIR__.'/ContainerVcoZjx0/getDebug_ArgumentResolver_DefaultService.php';
require __DIR__.'/ContainerVcoZjx0/getDebug_ArgumentResolver_DatetimeService.php';
require __DIR__.'/ContainerVcoZjx0/getDebug_ArgumentResolver_BackedEnumResolverService.php';
require __DIR__.'/ContainerVcoZjx0/getDataCollector_DumpService.php';
require __DIR__.'/ContainerVcoZjx0/getContainer_GetRoutingConditionServiceService.php';
require __DIR__.'/ContainerVcoZjx0/getContainer_EnvVarProcessorsLocatorService.php';
require __DIR__.'/ContainerVcoZjx0/getContainer_EnvVarProcessorService.php';
require __DIR__.'/ContainerVcoZjx0/getCache_SystemClearerService.php';
require __DIR__.'/ContainerVcoZjx0/getCache_SystemService.php';
require __DIR__.'/ContainerVcoZjx0/getCache_GlobalClearerService.php';
require __DIR__.'/ContainerVcoZjx0/getCache_AppClearerService.php';
require __DIR__.'/ContainerVcoZjx0/getCache_AppService.php';
require __DIR__.'/ContainerVcoZjx0/getGlobalStateRegistryService.php';
require __DIR__.'/ContainerVcoZjx0/getConfigurationService.php';
require __DIR__.'/ContainerVcoZjx0/getChainManagerRegistryService.php';
require __DIR__.'/ContainerVcoZjx0/getTemplateControllerService.php';
require __DIR__.'/ContainerVcoZjx0/getRedirectControllerService.php';
require __DIR__.'/ContainerVcoZjx0/getUserRepositoryService.php';
require __DIR__.'/ContainerVcoZjx0/getTransformationRepositoryService.php';
require __DIR__.'/ContainerVcoZjx0/getSpellRepositoryService.php';
require __DIR__.'/ContainerVcoZjx0/getSkillRepositoryService.php';
require __DIR__.'/ContainerVcoZjx0/getRaceRepositoryService.php';
require __DIR__.'/ContainerVcoZjx0/getNoteRepositoryService.php';
require __DIR__.'/ContainerVcoZjx0/getFeedbackRepositoryService.php';
require __DIR__.'/ContainerVcoZjx0/getFaqRepositoryService.php';
require __DIR__.'/ContainerVcoZjx0/getCharacterRepositoryService.php';
require __DIR__.'/ContainerVcoZjx0/getCharacterClassRepositoryService.php';
require __DIR__.'/ContainerVcoZjx0/getCampaignRepositoryService.php';
require __DIR__.'/ContainerVcoZjx0/getBackgroundRepositoryService.php';
require __DIR__.'/ContainerVcoZjx0/getUserControllerService.php';
require __DIR__.'/ContainerVcoZjx0/getTransformationControllerService.php';
require __DIR__.'/ContainerVcoZjx0/getNoteControllerService.php';
require __DIR__.'/ContainerVcoZjx0/getFeedbackControllerService.php';
require __DIR__.'/ContainerVcoZjx0/getFAQControllerService.php';
require __DIR__.'/ContainerVcoZjx0/getCharacterControllerService.php';
require __DIR__.'/ContainerVcoZjx0/get_ServiceLocator_ZuueUfBService.php';
require __DIR__.'/ContainerVcoZjx0/get_ServiceLocator_XUrKPVUService.php';
require __DIR__.'/ContainerVcoZjx0/get_ServiceLocator_Vp14bQvService.php';
require __DIR__.'/ContainerVcoZjx0/get_ServiceLocator_LTsjRc6Service.php';
require __DIR__.'/ContainerVcoZjx0/get_ServiceLocator_JIxfAsiService.php';
require __DIR__.'/ContainerVcoZjx0/get_ServiceLocator_BRdave9Service.php';
require __DIR__.'/ContainerVcoZjx0/get_ServiceLocator_OsUHReUService.php';
require __DIR__.'/ContainerVcoZjx0/get_ServiceLocator_LwdZKSZService.php';

$classes = [];
$classes[] = 'Symfony\Bundle\FrameworkBundle\FrameworkBundle';
$classes[] = 'Doctrine\Bundle\DoctrineBundle\DoctrineBundle';
$classes[] = 'Doctrine\Bundle\MigrationsBundle\DoctrineMigrationsBundle';
$classes[] = 'Symfony\Bundle\DebugBundle\DebugBundle';
$classes[] = 'Symfony\Bundle\MakerBundle\MakerBundle';
$classes[] = 'Symfony\Bundle\SecurityBundle\SecurityBundle';
$classes[] = 'Doctrine\Bundle\FixturesBundle\DoctrineFixturesBundle';
$classes[] = 'Zenstruck\Foundry\ZenstruckFoundryBundle';
$classes[] = 'Sensio\Bundle\FrameworkExtraBundle\SensioFrameworkExtraBundle';
$classes[] = 'Symfony\Component\HttpFoundation\RequestMatcher';
$classes[] = 'Symfony\Component\DependencyInjection\ServiceLocator';
$classes[] = 'App\Controller\CharacterController';
$classes[] = 'App\Controller\FAQController';
$classes[] = 'App\Controller\FeedbackController';
$classes[] = 'App\Controller\NoteController';
$classes[] = 'App\Controller\TransformationController';
$classes[] = 'App\Controller\UserController';
$classes[] = 'App\Factory\BackgroundFactory';
$classes[] = 'App\Factory\CampaignFactory';
$classes[] = 'App\Factory\CharacterClassFactory';
$classes[] = 'App\Factory\CharacterFactory';
$classes[] = 'App\Factory\FaqFactory';
$classes[] = 'App\Factory\FeedbackFactory';
$classes[] = 'App\Factory\NoteFactory';
$classes[] = 'App\Factory\RaceFactory';
$classes[] = 'App\Factory\SkillFactory';
$classes[] = 'App\Factory\SpellFactory';
$classes[] = 'App\Factory\TransformationFactory';
$classes[] = 'App\Factory\UserFactory';
$classes[] = 'App\Repository\BackgroundRepository';
$classes[] = 'App\Repository\CampaignRepository';
$classes[] = 'App\Repository\CharacterClassRepository';
$classes[] = 'App\Repository\CharacterRepository';
$classes[] = 'App\Repository\FaqRepository';
$classes[] = 'App\Repository\FeedbackRepository';
$classes[] = 'App\Repository\NoteRepository';
$classes[] = 'App\Repository\RaceRepository';
$classes[] = 'App\Repository\SkillRepository';
$classes[] = 'App\Repository\SpellRepository';
$classes[] = 'App\Repository\TransformationRepository';
$classes[] = 'App\Repository\UserRepository';
$classes[] = 'Symfony\Bundle\FrameworkBundle\Controller\RedirectController';
$classes[] = 'Symfony\Bundle\FrameworkBundle\Controller\TemplateController';
$classes[] = 'Zenstruck\Foundry\ChainManagerRegistry';
$classes[] = 'Zenstruck\Foundry\Configuration';
$classes[] = 'Zenstruck\Foundry\StoryManager';
$classes[] = 'Zenstruck\Foundry\ModelFactoryManager';
$classes[] = 'Zenstruck\Foundry\Instantiator';
$classes[] = 'Faker\Generator';
$classes[] = 'Faker\Factory';
$classes[] = 'Zenstruck\Foundry\Test\GlobalStateRegistry';
$classes[] = 'Symfony\Component\Cache\Adapter\PhpArrayAdapter';
$classes[] = 'Doctrine\Common\Annotations\PsrCachedReader';
$classes[] = 'Doctrine\Common\Annotations\AnnotationReader';
$classes[] = 'Doctrine\Common\Annotations\AnnotationRegistry';
$classes[] = 'Symfony\Component\HttpKernel\ControllerMetadata\ArgumentMetadataFactory';
$classes[] = 'Symfony\Component\Cache\Adapter\AdapterInterface';
$classes[] = 'Symfony\Component\Cache\Adapter\AbstractAdapter';
$classes[] = 'Symfony\Component\Cache\Adapter\FilesystemAdapter';
$classes[] = 'Symfony\Component\Cache\Marshaller\DefaultMarshaller';
$classes[] = 'Symfony\Component\HttpKernel\CacheClearer\Psr6CacheClearer';
$classes[] = 'Symfony\Component\Cache\Adapter\ArrayAdapter';
$classes[] = 'Symfony\Component\Config\Resource\SelfCheckingResourceChecker';
$classes[] = 'Symfony\Component\DependencyInjection\EnvVarProcessor';
$classes[] = 'Symfony\Component\HttpKernel\DataCollector\DumpDataCollector';
$classes[] = 'Symfony\Component\HttpKernel\Controller\ArgumentResolver\TraceableValueResolver';
$classes[] = 'Symfony\Component\HttpKernel\Controller\ArgumentResolver\BackedEnumValueResolver';
$classes[] = 'Symfony\Component\HttpKernel\Controller\ArgumentResolver\DateTimeValueResolver';
$classes[] = 'Symfony\Component\HttpKernel\Controller\ArgumentResolver\DefaultValueResolver';
$classes[] = 'Symfony\Component\HttpKernel\Controller\ArgumentResolver\NotTaggedControllerValueResolver';
$classes[] = 'Symfony\Component\HttpKernel\Controller\ArgumentResolver\RequestValueResolver';
$classes[] = 'Symfony\Component\HttpKernel\Controller\ArgumentResolver\RequestAttributeValueResolver';
$classes[] = 'Symfony\Component\HttpKernel\Controller\ArgumentResolver\ServiceValueResolver';
$classes[] = 'Symfony\Component\HttpKernel\Controller\ArgumentResolver\SessionValueResolver';
$classes[] = 'Symfony\Component\HttpKernel\Controller\ArgumentResolver\VariadicValueResolver';
$classes[] = 'Symfony\Component\HttpKernel\EventListener\DebugHandlersListener';
$classes[] = 'Symfony\Component\HttpKernel\Debug\FileLinkFormatter';
$classes[] = 'Symfony\Component\Security\Core\Authorization\TraceableAccessDecisionManager';
$classes[] = 'Symfony\Component\Security\Core\Authorization\AccessDecisionManager';
$classes[] = 'Symfony\Component\Security\Core\Authorization\Strategy\AffirmativeStrategy';
$classes[] = 'Symfony\Bundle\SecurityBundle\Debug\TraceableFirewallListener';
$classes[] = 'Symfony\Bundle\SecurityBundle\Security\FirewallMap';
$classes[] = 'Symfony\Component\Security\Http\Logout\LogoutUrlGenerator';
$classes[] = 'Symfony\Component\Security\Http\Authenticator\Debug\TraceableAuthenticatorManagerListener';
$classes[] = 'Symfony\Component\Security\Http\Firewall\AuthenticatorManagerListener';
$classes[] = 'Symfony\Component\Security\Http\Authentication\AuthenticatorManager';
$classes[] = 'Symfony\Component\Security\Http\Controller\UserValueResolver';
$classes[] = 'Symfony\Component\Security\Core\Authorization\Voter\TraceableVoter';
$classes[] = 'Symfony\Component\Security\Core\Authorization\Voter\AuthenticatedVoter';
$classes[] = 'Symfony\Component\Security\Core\Authorization\Voter\RoleVoter';
$classes[] = 'Symfony\Bundle\SecurityBundle\EventListener\VoteListener';
$classes[] = 'Symfony\Component\Stopwatch\Stopwatch';
$classes[] = 'Symfony\Component\DependencyInjection\Config\ContainerParametersResourceChecker';
$classes[] = 'Symfony\Component\HttpKernel\EventListener\DisallowRobotsIndexingListener';
$classes[] = 'Doctrine\Bundle\DoctrineBundle\Registry';
$classes[] = 'Doctrine\DBAL\Connection';
$classes[] = 'Doctrine\Bundle\DoctrineBundle\ConnectionFactory';
$classes[] = 'Doctrine\DBAL\Configuration';
$classes[] = 'Doctrine\Bundle\DoctrineBundle\Middleware\DebugMiddleware';
$classes[] = 'Doctrine\Bundle\DoctrineBundle\Middleware\BacktraceDebugDataHolder';
$classes[] = 'Symfony\Bridge\Doctrine\ContainerAwareEventManager';
$classes[] = 'Doctrine\ORM\Mapping\Driver\AttributeDriver';
$classes[] = 'Doctrine\ORM\Proxy\Autoloader';
$classes[] = 'Doctrine\ORM\EntityManager';
$classes[] = 'Doctrine\ORM\Configuration';
$classes[] = 'Doctrine\Bundle\DoctrineBundle\Mapping\MappingDriver';
$classes[] = 'Doctrine\Persistence\Mapping\Driver\MappingDriverChain';
$classes[] = 'Doctrine\ORM\Mapping\UnderscoreNamingStrategy';
$classes[] = 'Doctrine\ORM\Mapping\DefaultQuoteStrategy';
$classes[] = 'Doctrine\Bundle\DoctrineBundle\Mapping\ContainerEntityListenerResolver';
$classes[] = 'Doctrine\Bundle\DoctrineBundle\Repository\ContainerRepositoryFactory';
$classes[] = 'Doctrine\Bundle\DoctrineBundle\ManagerConfigurator';
$classes[] = 'Symfony\Bridge\Doctrine\PropertyInfo\DoctrineExtractor';
$classes[] = 'Doctrine\ORM\Tools\AttachEntityListenersListener';
$classes[] = 'Symfony\Bridge\Doctrine\SchemaListener\DoctrineDbalCacheAdapterSchemaSubscriber';
$classes[] = 'Symfony\Bridge\Doctrine\SchemaListener\RememberMeTokenProviderDoctrineSchemaSubscriber';
$classes[] = 'Symfony\Bridge\Doctrine\IdGenerator\UlidGenerator';
$classes[] = 'Symfony\Bridge\Doctrine\IdGenerator\UuidGenerator';
$classes[] = 'Symfony\Component\HttpKernel\Controller\ErrorController';
$classes[] = 'Symfony\Component\ErrorHandler\ErrorRenderer\SerializerErrorRenderer';
$classes[] = 'Symfony\Component\ErrorHandler\ErrorRenderer\HtmlErrorRenderer';
$classes[] = 'Symfony\Component\HttpKernel\Debug\TraceableEventDispatcher';
$classes[] = 'Symfony\Component\EventDispatcher\EventDispatcher';
$classes[] = 'Symfony\Component\HttpKernel\EventListener\ErrorListener';
$classes[] = 'Sensio\Bundle\FrameworkExtraBundle\Request\ArgumentNameConverter';
$classes[] = 'Sensio\Bundle\FrameworkExtraBundle\EventListener\IsGrantedListener';
$classes[] = 'Symfony\Component\Runtime\Runner\Symfony\HttpKernelRunner';
$classes[] = 'Symfony\Component\Runtime\Runner\Symfony\ResponseRunner';
$classes[] = 'Symfony\Component\Runtime\SymfonyRuntime';
$classes[] = 'Symfony\Component\HttpKernel\HttpKernel';
$classes[] = 'Symfony\Component\HttpKernel\Controller\TraceableControllerResolver';
$classes[] = 'Symfony\Bundle\FrameworkBundle\Controller\ControllerResolver';
$classes[] = 'Symfony\Component\HttpKernel\Controller\TraceableArgumentResolver';
$classes[] = 'Symfony\Component\HttpKernel\Controller\ArgumentResolver';
$classes[] = 'App\Kernel';
$classes[] = 'Symfony\Component\HttpKernel\EventListener\LocaleAwareListener';
$classes[] = 'Symfony\Component\HttpKernel\EventListener\LocaleListener';
$classes[] = 'Symfony\Component\HttpKernel\Log\Logger';
$classes[] = 'Symfony\Component\DependencyInjection\ParameterBag\ContainerBag';
$classes[] = 'Symfony\Component\PropertyInfo\Extractor\PhpDocExtractor';
$classes[] = 'Symfony\Component\PropertyInfo\Extractor\PhpStanExtractor';
$classes[] = 'Symfony\Component\PropertyInfo\Extractor\ReflectionExtractor';
$classes[] = 'Symfony\Component\PropertyInfo\Extractor\SerializerExtractor';
$classes[] = 'Symfony\Component\HttpFoundation\RequestStack';
$classes[] = 'Symfony\Component\HttpKernel\EventListener\ResponseListener';
$classes[] = 'Symfony\Bundle\FrameworkBundle\Routing\Router';
$classes[] = 'Symfony\Component\Config\ResourceCheckerConfigCacheFactory';
$classes[] = 'Symfony\Component\Routing\RequestContext';
$classes[] = 'Symfony\Component\HttpKernel\EventListener\RouterListener';
$classes[] = 'Symfony\Bundle\FrameworkBundle\Routing\DelegatingLoader';
$classes[] = 'Symfony\Component\Config\Loader\LoaderResolver';
$classes[] = 'Symfony\Component\Routing\Loader\XmlFileLoader';
$classes[] = 'Symfony\Component\HttpKernel\Config\FileLocator';
$classes[] = 'Symfony\Component\Routing\Loader\YamlFileLoader';
$classes[] = 'Symfony\Component\Routing\Loader\PhpFileLoader';
$classes[] = 'Symfony\Component\Routing\Loader\GlobFileLoader';
$classes[] = 'Symfony\Component\Routing\Loader\DirectoryLoader';
$classes[] = 'Symfony\Component\Routing\Loader\ContainerLoader';
$classes[] = 'Symfony\Bundle\FrameworkBundle\Routing\AnnotatedRouteControllerLoader';
$classes[] = 'Symfony\Component\Routing\Loader\AnnotationDirectoryLoader';
$classes[] = 'Symfony\Component\Routing\Loader\AnnotationFileLoader';
$classes[] = 'Symfony\Bundle\FrameworkBundle\Secrets\SodiumVault';
$classes[] = 'Symfony\Component\String\LazyString';
$classes[] = 'Symfony\Component\Security\Http\Firewall\AccessListener';
$classes[] = 'Symfony\Component\Security\Http\AccessMap';
$classes[] = 'Symfony\Component\Security\Core\Authentication\AuthenticationTrustResolver';
$classes[] = 'Symfony\Component\Security\Core\Authorization\AuthorizationChecker';
$classes[] = 'Symfony\Component\Security\Http\Firewall\ChannelListener';
$classes[] = 'Symfony\Component\Security\Http\Firewall\ContextListener';
$classes[] = 'Symfony\Component\Security\Csrf\CsrfTokenManager';
$classes[] = 'Symfony\Component\Security\Csrf\TokenGenerator\UriSafeTokenGenerator';
$classes[] = 'Symfony\Component\Security\Csrf\TokenStorage\SessionTokenStorage';
$classes[] = 'Symfony\Bundle\SecurityBundle\Security\FirewallContext';
$classes[] = 'Symfony\Bundle\SecurityBundle\Security\FirewallConfig';
$classes[] = 'Symfony\Bundle\SecurityBundle\Security\LazyFirewallContext';
$classes[] = 'Symfony\Component\Security\Http\Firewall\ExceptionListener';
$classes[] = 'Symfony\Component\Security\Http\HttpUtils';
$classes[] = 'Symfony\Component\Security\Http\EventListener\CheckCredentialsListener';
$classes[] = 'Symfony\Component\Security\Http\EventListener\CsrfProtectionListener';
$classes[] = 'Symfony\Component\Security\Http\EventListener\UserProviderListener';
$classes[] = 'Symfony\Component\Security\Http\EventListener\PasswordMigratingListener';
$classes[] = 'Symfony\Component\Security\Http\EventListener\SessionStrategyListener';
$classes[] = 'Symfony\Component\Security\Http\Session\SessionAuthenticationStrategy';
$classes[] = 'Symfony\Component\Security\Http\EventListener\UserCheckerListener';
$classes[] = 'Symfony\Component\Security\Core\User\InMemoryUserChecker';
$classes[] = 'Symfony\Component\Security\Http\EventListener\CsrfTokenClearingLogoutListener';
$classes[] = 'Symfony\Component\PasswordHasher\Hasher\PasswordHasherFactory';
$classes[] = 'Symfony\Component\Security\Core\Authentication\Token\Storage\UsageTrackingTokenStorage';
$classes[] = 'Symfony\Component\Security\Core\Authentication\Token\Storage\TokenStorage';
$classes[] = 'Symfony\Bridge\Doctrine\Security\User\EntityUserProvider';
$classes[] = 'Sensio\Bundle\FrameworkExtraBundle\EventListener\HttpCacheListener';
$classes[] = 'Sensio\Bundle\FrameworkExtraBundle\EventListener\ControllerListener';
$classes[] = 'Sensio\Bundle\FrameworkExtraBundle\EventListener\ParamConverterListener';
$classes[] = 'Sensio\Bundle\FrameworkExtraBundle\Request\ParamConverter\ParamConverterManager';
$classes[] = 'Sensio\Bundle\FrameworkExtraBundle\Request\ParamConverter\DoctrineParamConverter';
$classes[] = 'Sensio\Bundle\FrameworkExtraBundle\Request\ParamConverter\DateTimeParamConverter';
$classes[] = 'Sensio\Bundle\FrameworkExtraBundle\EventListener\SecurityListener';
$classes[] = 'Symfony\Component\Security\Core\Role\RoleHierarchy';
$classes[] = 'Symfony\Component\Serializer\Serializer';
$classes[] = 'Symfony\Component\Serializer\Normalizer\UnwrappingDenormalizer';
$classes[] = 'Symfony\Component\PropertyAccess\PropertyAccessor';
$classes[] = 'Symfony\Component\Serializer\Normalizer\ProblemNormalizer';
$classes[] = 'Symfony\Component\Serializer\Normalizer\UidNormalizer';
$classes[] = 'Symfony\Component\Serializer\Normalizer\DateTimeNormalizer';
$classes[] = 'Symfony\Component\Serializer\Normalizer\ConstraintViolationListNormalizer';
$classes[] = 'Symfony\Component\Serializer\NameConverter\MetadataAwareNameConverter';
$classes[] = 'Symfony\Component\Serializer\Normalizer\DateTimeZoneNormalizer';
$classes[] = 'Symfony\Component\Serializer\Normalizer\DateIntervalNormalizer';
$classes[] = 'Symfony\Component\Serializer\Normalizer\FormErrorNormalizer';
$classes[] = 'Symfony\Component\Serializer\Normalizer\BackedEnumNormalizer';
$classes[] = 'Symfony\Component\Serializer\Normalizer\DataUriNormalizer';
$classes[] = 'Symfony\Component\Serializer\Normalizer\JsonSerializableNormalizer';
$classes[] = 'Symfony\Component\Serializer\Normalizer\ArrayDenormalizer';
$classes[] = 'Symfony\Component\Serializer\Normalizer\ObjectNormalizer';
$classes[] = 'Symfony\Component\PropertyInfo\PropertyInfoExtractor';
$classes[] = 'Symfony\Component\Serializer\Mapping\ClassDiscriminatorFromClassMetadata';
$classes[] = 'Symfony\Component\Serializer\Encoder\XmlEncoder';
$classes[] = 'Symfony\Component\Serializer\Encoder\JsonEncoder';
$classes[] = 'Symfony\Component\Serializer\Encoder\YamlEncoder';
$classes[] = 'Symfony\Component\Serializer\Encoder\CsvEncoder';
$classes[] = 'Symfony\Component\Serializer\Mapping\Factory\ClassMetadataFactory';
$classes[] = 'Symfony\Component\Serializer\Mapping\Loader\LoaderChain';
$classes[] = 'Symfony\Component\Serializer\Mapping\Loader\AnnotationLoader';
$classes[] = 'Symfony\Component\DependencyInjection\ContainerInterface';
$classes[] = 'Symfony\Component\HttpKernel\DependencyInjection\ServicesResetter';
$classes[] = 'Symfony\Component\HttpFoundation\Session\SessionFactory';
$classes[] = 'Symfony\Component\HttpFoundation\Session\Storage\NativeSessionStorageFactory';
$classes[] = 'Symfony\Component\HttpFoundation\Session\Storage\MetadataBag';
$classes[] = 'Symfony\Component\HttpKernel\EventListener\SessionListener';
$classes[] = 'Symfony\Component\String\Slugger\AsciiSlugger';
$classes[] = 'Symfony\Component\HttpKernel\EventListener\ValidateRequestListener';
$classes[] = 'Symfony\Component\VarDumper\Cloner\VarCloner';
$classes[] = 'Symfony\Component\VarDumper\Server\Connection';
$classes[] = 'Symfony\Component\VarDumper\Dumper\ContextProvider\SourceContextProvider';
$classes[] = 'Symfony\Component\VarDumper\Dumper\ContextProvider\RequestContextProvider';
$classes[] = 'Symfony\Component\VarDumper\Dumper\ContextProvider\CliContextProvider';

$preloaded = Preloader::preload($classes);
