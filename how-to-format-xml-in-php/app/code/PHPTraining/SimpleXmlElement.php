<?php

declare(strict_types=1);

namespace PHPTraining;

use DOMDocument;

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

    /**
     * @return $this
     */
    public function format(): self
    {
        $dom = $this->newDomDocument();
        return new self($dom->saveXML());
    }

    /**
     * @param string $file
     */
    public function saveFormattedXML(string $file): void
    {
        $dom = $this->newDomDocument();
        $dom->save($file);
    }

    /**
     * @return DOMDocument
     */
    private function newDomDocument(): DOMDocument
    {
        $dom = new DOMDocument("1.0");
        $dom->preserveWhiteSpace = false;
        $dom->formatOutput = true;
        $dom->loadXML($this->asXML());
        return $dom;
    }
}