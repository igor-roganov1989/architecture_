<?php
declare(strict_types=1);
use App\Domain\Model\AbstractLead;
interface LeadRepositoryInterface
{
    public function findLeadById(string $id):?AbstractLead;

}