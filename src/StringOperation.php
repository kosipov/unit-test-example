<?php
namespace Kosipov\StringTests;

class StringOperation
{
    private string $operationString;

    public function __construct(string $operationString)
    {
        $this->operationString = $operationString;
    }

    public function revertString(): string
    {
        $revertString = '';

        for ($i = strlen($this->operationString) - 1; $i >= 0; $i--) {
            $revertString .= $this->operationString[$i];
        }

        return $revertString;
    }
}


$strOp = new StringOperation('abc');
echo $strOp->revertString();