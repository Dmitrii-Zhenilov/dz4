<?php
class ServiceGPS implements ServiceInterface
{
    private $prisePerHour;

    public function __construct(int $prisePerHour)
    {
        $this->prisePerHour=$prisePerHour;
    }


    public function apply(TariffInterface $tariff, &$prise)
    {
        $hours = ceil($tariff->getMinutes() / 60);
        $prise += $this->prisePerHour * $hours;

    }
}
