<?php

/**
 * Avisota newsletter and mailing system
 * Copyright (C) 2013 Tristan Lins
 *
 * PHP version 5
 *
 * @copyright  bit3 UG 2013
 * @author     Tristan Lins <tristan.lins@bit3.de>
 * @package    avisota/contao-message-element-image
 * @license    LGPL-3.0+
 * @filesource
 */


/**
 * Table orm_avisota_message_content
 * Entity Avisota\Contao:MessageContent
 */
$GLOBALS['TL_DCA']['orm_avisota_message_content']['metapalettes']['image']       = array
(
	'type'      => array('type', 'cell', 'headline'),
	'source'    => array('imageSource'),
	'image'     => array('imageAlt', 'imageSize', 'imageMargin', 'imageUrl', 'imageCaption'),
	'expert'    => array(':hide', 'cssID', 'space'),
	'published' => array('invisible'),
);
$GLOBALS['TL_DCA']['orm_avisota_message_content']['metasubpalettes']['addImage'] = array
(
	'imageSource',
	'imageAlt',
	'imageSize',
	'imageMargin',
	'imageUrl',
	'imageCaption',
	'imageFloating',
);


$GLOBALS['TL_DCA']['orm_avisota_message_content']['fields']['addImage']    = array
(
	'label'     => &$GLOBALS['TL_LANG']['orm_avisota_message_content']['addImage'],
	'exclude'   => true,
	'inputType' => 'checkbox',
	'eval'      => array('submitOnChange' => true)
);
$GLOBALS['TL_DCA']['orm_avisota_message_content']['fields']['imageSource']   = array
(
	'label'     => &$GLOBALS['TL_LANG']['orm_avisota_message_content']['imageSource'],
	'exclude'   => true,
	'inputType' => 'fileTree',
	'eval'      => array('fieldType' => 'radio', 'files' => true, 'mandatory' => true, 'tl_class' => 'clr')
);
$GLOBALS['TL_DCA']['orm_avisota_message_content']['fields']['imageAlt']         = array
(
	'label'     => &$GLOBALS['TL_LANG']['orm_avisota_message_content']['imageAlt'],
	'exclude'   => true,
	'search'    => true,
	'inputType' => 'text',
	'eval'      => array('maxlength' => 255, 'tl_class' => 'long')
);
$GLOBALS['TL_DCA']['orm_avisota_message_content']['fields']['imageSize']        = array
(
	'label'     => &$GLOBALS['TL_LANG']['orm_avisota_message_content']['imageSize'],
	'exclude'   => true,
	'inputType' => 'imageSize',
	'options'   => array('crop', 'proportional', 'box'),
	'reference' => &$GLOBALS['TL_LANG']['MSC'],
	'eval'      => array('rgxp' => 'digit', 'nospace' => true, 'tl_class' => 'w50')
);
$GLOBALS['TL_DCA']['orm_avisota_message_content']['fields']['imageMargin'] = array
(
	'label'     => &$GLOBALS['TL_LANG']['orm_avisota_message_content']['imageMargin'],
	'exclude'   => true,
	'inputType' => 'trbl',
	'options'   => array('px', '%', 'em', 'pt', 'pc', 'in', 'cm', 'mm'),
	'eval'      => array('includeBlankOption' => true, 'tl_class' => 'w50')
);
$GLOBALS['TL_DCA']['orm_avisota_message_content']['fields']['imageUrl']    = array
(
	'label'     => &$GLOBALS['TL_LANG']['orm_avisota_message_content']['imageUrl'],
	'exclude'   => true,
	'search'    => true,
	'inputType' => 'text',
	'eval'      => array(
		'rgxp'           => 'url',
		'decodeEntities' => true,
		'maxlength'      => 255,
		'tl_class'       => 'w50 wizard'
	),
);
$GLOBALS['TL_DCA']['orm_avisota_message_content']['fields']['imageCaption']     = array
(
	'label'     => &$GLOBALS['TL_LANG']['orm_avisota_message_content']['imageCaption'],
	'exclude'   => true,
	'search'    => true,
	'inputType' => 'text',
	'eval'      => array('maxlength' => 255, 'tl_class' => 'w50')
);
$GLOBALS['TL_DCA']['orm_avisota_message_content']['fields']['imageFloating']    = array
(
	'label'     => &$GLOBALS['TL_LANG']['orm_avisota_message_content']['imageFloating'],
	'default'   => 'above',
	'exclude'   => true,
	'inputType' => 'radioTable',
	'options'   => array('above', 'left', 'right', 'below'),
	'reference' => &$GLOBALS['TL_LANG']['MSC'],
	'eval'      => array('mandatory' => true, 'tl_class' => 'w50')
);
