<?php

namespace xenialdan\BossBarAPI;

use pocketmine\plugin\Plugin;
use pocketmine\scheduler\Task;

class SendTask extends Task
{

    /** @var API */
    private $owner;

    /**
     * SendTask constructor.
     * @param Plugin $owner - This owner must have the function "sendBossBar()"!
     */
    public function __construct(Plugin $owner)
    {
        $this->owner = $owner;
	}

	public function onRun(int $currentTick){
        if (!method_exists($this->owner, 'sendBossBar')) {
            $this->cancel();
            return;
        }
        $this->owner->sendBossBar();
	}

	public function cancel(){
		$this->getHandler()->cancel();
	}
}