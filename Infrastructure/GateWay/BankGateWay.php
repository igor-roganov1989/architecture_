<?php
declare(strict_types=1);
use App\Domain\Model\AbstractLead;
class BankGateWay
{
    public function sendlead(AbstractLead $lead):string{
        sleep(2);
        $id = random_int(10_000, 99_999);
        if ($id % 10 <=2){
            throw new Exception('Errior bank');
        }
        return (string)$id;
    }

}