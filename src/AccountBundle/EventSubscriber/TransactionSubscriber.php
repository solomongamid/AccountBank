<?php

namespace AccountBundle\EventSubscriber;

use AccountBundle\Entity\Transaction;
use AccountBundle\Service\TransactionService;
use Doctrine\ORM\Event\LifecycleEventArgs;
use Doctrine\Common\EventSubscriber;
use Doctrine\ORM\Event\PreUpdateEventArgs;
use Doctrine\ORM\Events;

/**
* 
*/
class TransactionSubscriber implements EventSubscriber
{
	private $transactionSv;

	public function __construct(TransactionService $transactionSv){
		$this->transactionSv = $transactionSv;
	}
	
	public function getSubscribedEvents(){
		return array(
			Events::preUpdate,
			Events::prePersist
		);
	}

	public function preUpdate(PreUpdateEventArgs $event){
		$this->handleEvent($event);
	}

	public function prePersist(LifecycleEventArgs $event){
		$this->handleEvent($event);
	}

	private function handleEvent($event){
		$entity = $event->getEntity();
		if($entity instanceof Transaction){
			$this->transactionSv->calcAccountBalance($entity->getStartAccount(), $entity->getAmount());
			$this->transactionSv->calcAccountBalance($entity->getEndAccount(), $entity->getAmount(), false);
		}
	}

}