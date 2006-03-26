<?php
/**
 * File containing the ezcDatabaseSchemaUnknownFormatException class
 *
 * @package DatabaseSchema
 * @version //autogen//
 * @copyright Copyright (C) 2005, 2006 eZ systems as. All rights reserved.
 * @license http://ez.no/licenses/new_bsd New BSD License
 */
/**
 * Exception that is thrown if no configuration object has been set to operate
 * on. The operation cannot continue with this object.
 *
 * @package DatabaseSchema
 * @version //autogen//
 */
class ezcDbSchemaUnknownFormatException extends ezcDbSchemaException
{
    function __construct( $format, $type )
    {
        parent::__construct( "There is no <$type> handler available for the <$format> format." );
    }
}
?>