<?php

namespace subclaim;

use pocketmine\plugin\PluginBase;
use subclaim\SubclaimListener;

class Subclaim extends PluginBase {

use SingletonTrait;

    protected function onLoad(): void {
        self::setInstance($this);
    }

    protected function onEnable(): void {
$this->registerListener(new SubclaimListener());
}

    private function registerListener(Listener $listener): void {
        $this->getServer()->getPluginManager()->registerEvents($listener, $this);
    }

}
