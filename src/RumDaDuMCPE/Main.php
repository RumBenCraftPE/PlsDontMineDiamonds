<?php

namespace RumDaDuMCPE;

class Main extends \pocketmine\plugin\PluginBase implements \pocketmine\event\Listener {
	public function onEnable() {
		$this->getServer()->getPluginManager()->registerEvent($this, $this);
	}

	public function onBreak(\pocketmine\event\block\BlockBreakEvent $event) {
		if (($block = $event->getBlock())->getId() === 56) {
			if (!(($player = $event->getPlayer())->isOp()) {
				foreach ($this->getServer()->getOnlinePlayers() as $dudeordudette) {
					if ($dudeordudette->isOp()) {
						$dudeordudette->sendMessage("§l§a".$player->getName()." §eis trying to break a §bDiamond §eBlock!\n");
					} else {
						$this->getServer()->getLogger()->info($player->getName()." Mined a diamond block at coordinates: ".$block->getX().", ".$block->getY().", ".$block->getZ());
					}
				}
			}
		}
	}
}
?>
