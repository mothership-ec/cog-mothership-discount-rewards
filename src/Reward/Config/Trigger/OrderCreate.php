<?php

namespace Message\Mothership\DiscountReward\Reward\Config\Trigger;

use Message\Mothership\ReferAFriend\Reward\Config\Trigger\TriggerInterface;

use Message\Mothership\Commerce\Order\Events as OrderEvents;

class OrderCreate implements TriggerInterface
{
	public function getName()
	{
		return 'discount_reward_order_create';
	}

	public function getDisplayName()
	{
		return 'ms.discount_reward.reward.triggers.order_create.name';
	}

	public function getDescription()
	{
		return 'ms.discount_reward.reward.triggers.order_create.description';
	}

	public function getTypes()
	{
		return [
			'discount_reward',
		];
	}

	public function getEventName()
	{
		return OrderEvents::CREATE_COMPLETE;
	}
}