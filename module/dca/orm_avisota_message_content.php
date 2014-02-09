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
	'type'   => array('type', 'cell', 'headline'),
	'source' => array('singleSRC'),
	'image'  => array('alt', 'size', 'imagemargin', 'imageUrl', 'caption'),
	'expert' => array(':hide', 'cssID', 'space')
);
$GLOBALS['TL_DCA']['orm_avisota_message_content']['metasubpalettes']['addImage'] = array
(
	'singleSRC',
	'alt',
	'size',
	'imagemargin',
	'imageUrl',
	'caption',
	'floating',
);


$GLOBALS['TL_DCA']['orm_avisota_message_content']['fields']['addImage']    = array
(
	'label'     => &$GLOBALS['TL_LANG']['orm_avisota_message_content']['addImage'],
	'exclude'   => true,
	'inputType' => 'checkbox',
	'eval'      => array('submitOnChange' => true)
);
$GLOBALS['TL_DCA']['orm_avisota_message_content']['fields']['singleSRC']   = array
(
	'label'     => &$GLOBALS['TL_LANG']['orm_avisota_message_content']['singleSRC'],
	'exclude'   => true,
	'inputType' => 'fileTree',
	'eval'      => array('fieldType' => 'radio', 'files' => true, 'mandatory' => true, 'tl_class' => 'clr')
);
$GLOBALS['TL_DCA']['orm_avisota_message_content']['fields']['alt']         = array
(
	'label'     => &$GLOBALS['TL_LANG']['orm_avisota_message_content']['alt'],
	'exclude'   => true,
	'search'    => true,
	'inputType' => 'text',
	'eval'      => array('maxlength' => 255, 'tl_class' => 'long')
);
$GLOBALS['TL_DCA']['orm_avisota_message_content']['fields']['size']        = array
(
	'label'     => &$GLOBALS['TL_LANG']['orm_avisota_message_content']['size'],
	'exclude'   => true,
	'inputType' => 'imageSize',
	'options'   => array('crop', 'proportional', 'box'),
	'reference' => &$GLOBALS['TL_LANG']['MSC'],
	'eval'      => array('rgxp' => 'digit', 'nospace' => true, 'tl_class' => 'w50')
);
$GLOBALS['TL_DCA']['orm_avisota_message_content']['fields']['imagemargin'] = array
(
	'label'     => &$GLOBALS['TL_LANG']['orm_avisota_message_content']['imagemargin'],
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
	'wizard'    => array
	(
		array('Avisota\Contao\DataContainer\MessageContent', 'pagePicker')
	)
);
$GLOBALS['TL_DCA']['orm_avisota_message_content']['fields']['caption']     = array
(
	'label'     => &$GLOBALS['TL_LANG']['orm_avisota_message_content']['caption'],
	'exclude'   => true,
	'search'    => true,
	'inputType' => 'text',
	'eval'      => array('maxlength' => 255, 'tl_class' => 'w50')
);
$GLOBALS['TL_DCA']['orm_avisota_message_content']['fields']['floating']    = array
(
	'label'     => &$GLOBALS['TL_LANG']['orm_avisota_message_content']['floating'],
	'default'   => 'above',
	'exclude'   => true,
	'inputType' => 'radioTable',
	'options'   => array('above', 'left', 'right', 'below'),
	'reference' => &$GLOBALS['TL_LANG']['MSC'],
	'eval'      => array('mandatory' => true, 'tl_class' => 'w50')
);
