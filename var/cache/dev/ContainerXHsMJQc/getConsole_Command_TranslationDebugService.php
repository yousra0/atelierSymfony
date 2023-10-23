<?php

namespace ContainerXHsMJQc;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getConsole_Command_TranslationDebugService extends App_KernelDevDebugContainer
{
    /**
     * Gets the private 'console.command.translation_debug' shared service.
     *
     * @return \Symfony\Bundle\FrameworkBundle\Command\TranslationDebugCommand
     */
    public static function do($container, $lazyLoad = true)
    {
        $container->privates['console.command.translation_debug'] = $instance = new \Symfony\Bundle\FrameworkBundle\Command\TranslationDebugCommand(($container->services['translator'] ?? $container->getTranslatorService()), ($container->privates['translation.reader'] ?? $container->load('getTranslation_ReaderService')), ($container->privates['translation.extractor'] ?? $container->load('getTranslation_ExtractorService')), 'C:\\atelierSymfony/translations', 'C:\\atelierSymfony/templates', [0 => 'C:\\atelierSymfony\\vendor\\symfony\\validator/Resources/translations', 1 => 'C:\\atelierSymfony\\vendor\\symfony\\form/Resources/translations', 2 => 'C:\\atelierSymfony\\vendor\\symfony\\security-core/Resources/translations'], [0 => 'C:\\atelierSymfony\\vendor\\symfony\\twig-bridge/Resources/views/Email', 1 => 'C:\\atelierSymfony\\vendor\\symfony\\twig-bridge/Resources/views/Form', 2 => 'C:\\atelierSymfony\\vendor\\symfony\\framework-bundle\\Command\\TranslationDebugCommand.php', 3 => 'C:\\atelierSymfony\\vendor\\symfony\\framework-bundle\\CacheWarmer\\TranslationsCacheWarmer.php', 4 => 'C:\\atelierSymfony\\vendor\\symfony\\form\\Extension\\Core\\Type\\ChoiceType.php', 5 => 'C:\\atelierSymfony\\vendor\\symfony\\form\\Extension\\Core\\Type\\ColorType.php', 6 => 'C:\\atelierSymfony\\vendor\\symfony\\form\\Extension\\Core\\Type\\TransformationFailureExtension.php', 7 => 'C:\\atelierSymfony\\vendor\\symfony\\form\\Extension\\Validator\\Type\\FormTypeValidatorExtension.php', 8 => 'C:\\atelierSymfony\\vendor\\symfony\\form\\Extension\\Validator\\Type\\UploadValidatorExtension.php', 9 => 'C:\\atelierSymfony\\vendor\\symfony\\form\\Extension\\Csrf\\Type\\FormTypeCsrfExtension.php', 10 => 'C:\\atelierSymfony\\vendor\\symfony\\validator\\ValidatorBuilder.php', 11 => 'C:\\atelierSymfony\\vendor\\symfony\\form\\Extension\\Core\\Type\\FileType.php', 12 => 'C:\\atelierSymfony\\vendor\\symfony\\translation\\DataCollector\\TranslationDataCollector.php', 13 => 'C:\\atelierSymfony\\vendor\\symfony\\twig-bridge\\Extension\\TranslationExtension.php', 14 => 'C:\\atelierSymfony\\vendor\\symfony\\twig-bridge\\Extension\\FormExtension.php'], []);

        $instance->setName('debug:translation');
        $instance->setDescription('Display translation messages information');

        return $instance;
    }
}
