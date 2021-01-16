<?php

declare(strict_types=1);

namespace PHPTraining;

/**
 * Class SimpleXmlElement
 *
 * @package PHPTraining
 */
class SimpleXmlElement extends \SimpleXMLElement
{
    /**
     * @param \SimpleXMLElement $child
     * @return $this
     */
    public function appendChildXML(\SimpleXMLElement $child): self
    {
        $root = dom_import_simplexml($this);
        $element = dom_import_simplexml($child);
        $root->appendChild($root->ownerDocument->importNode($element, true));
        return $this;
    }
}