<?php
declare(strict_types=1)
interface BankGateWayInterface
{
    public function sendlead(Lead $lead):string;

}