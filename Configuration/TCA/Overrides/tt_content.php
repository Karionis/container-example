<?php

/*
\TYPO3\CMS\Core\Utility\GeneralUtility::makeInstance(\B13\Container\Tca\Registry::class)->configureContainer(
    (
        new \B13\Container\Tca\ContainerConfiguration(
            'b13-2cols-with-header-container', // CType
            '2 Column Container With Header', // label
            'Some Description of the Container', // description
            [
                [
                    ['name' => 'header', 'colPos' => 100, 'colspan' => 2, 'allowed' => ['CType' => 'header, textmedia, b13-2cols']]
                ],
                [
                    ['name' => 'left side', 'colPos' => 110],
                    ['name' => 'right side', 'colPos' => 120]
                ]
            ] // grid configuration
        )
    )
    // override default configurations
    ->setIcon('EXT:container_example/Resources/Public/Icons/b13-2cols-with-header-container.svg')
    ->setSaveAndCloseInNewContentElementWizard(false)
);
*/

// override default settings
// $GLOBALS['TCA']['tt_content']['types']['b13-2cols-with-header-container']['showitem'] = 'sys_language_uid,CType,header,tx_container_parent,colPos';

// second container
\TYPO3\CMS\Core\Utility\GeneralUtility::makeInstance(\B13\Container\Tca\Registry::class)->configureContainer(
    (
        new \B13\Container\Tca\ContainerConfiguration(
            'b13-2cols', // CType
            '2 Columns', // label
            'Some Description of the Container', // description
            [
                [
                    ['name' => '2-cols-left', 'colPos' => 110, 'allowed' => ['CType' => 'header, textpic, textmedia']],
                    ['name' => '2-cols-right', 'colPos' => 120]
                ]
            ] // grid configuration
        )
    )
);
