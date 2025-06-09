<?php
namespace SIMONKOEHLER\BusinessTheme\Controller;

use Psr\Http\Message\ResponseInterface;
use TYPO3\CMS\Backend\Template\ModuleTemplate;
use TYPO3\CMS\Backend\Template\ModuleTemplateFactory;
use TYPO3\CMS\Core\Utility\GeneralUtility;
use TYPO3\CMS\DataHandling\Core\Import\ImportManager;
use TYPO3\CMS\Extbase\Mvc\Controller\ActionController;

class ImportController extends ActionController
{

    protected ?ModuleTemplate $moduleTemplate = null;

    public function __construct(protected readonly ModuleTemplateFactory $moduleTemplateFactory)
    {

    }

    protected function initializeAction():void
    {
        $this->moduleTemplate = $this->moduleTemplateFactory->create($this->request);
    }

    public function importAction(): ResponseInterface
    {
        $message = '';

        try {
            $importManager = GeneralUtility::makeInstance(ImportManager::class);
            $importManager->importFromYamlFile('EXT:business_theme/Configuration/DataImport/Import.yaml');
            $message = 'Example pages and content were imported successfully.';
        } catch (\Throwable $e) {
            $message = 'Import failed: ' . $e->getMessage();
        }

        $content = '<h1>Import Example Content</h1>';
        $content .= '<p>' . htmlspecialchars($message) . '</p>';

        $this->moduleTemplate->setTitle(
            '<h1>Import Example Content</h1><p>' . htmlspecialchars($message) . '</p>'
        );

        return $this->moduleTemplate->renderResponse('Import');
    }
}
