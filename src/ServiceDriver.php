<?php
class ServiceDriver implements ServiceInterface
{
    private $prise;

    public function __construct(int $prise)
    {
        $this->prise=$prise;
    }


    public function apply(TariffInterface $tariff, &$prise)
    {
        $prise += $this->prise;
    }
}
