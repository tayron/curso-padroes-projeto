<?php

namespace padroes\estruturais\proxy;

/** 
 * 
 */
class PdfProxy extends AbstractPdf
{
    /**
     * 
     */
    public function generate() 
    {
        $pdf = new Pdf();
        $pdf->setPages($this->pages);
        $pdf->generate();
    }
}
