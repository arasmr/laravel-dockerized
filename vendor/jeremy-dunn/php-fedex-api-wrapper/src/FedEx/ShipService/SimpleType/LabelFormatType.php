<?php
namespace FedEx\ShipService\SimpleType;

use FedEx\AbstractSimpleType;

/**
 * LabelFormatType
 *
 * @author      Jeremy Dunn <jeremy@jsdunn.info>
 * @package     PHP FedEx API wrapper
 * @subpackage  Ship Service
 */
class LabelFormatType extends AbstractSimpleType
{
    const _COMMON2D = 'COMMON2D';
    const _LABEL_DATA_ONLY = 'LABEL_DATA_ONLY';
}
