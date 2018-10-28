# BossBarAPI
BossBarAPI for PocketMine. Inspired by https://github.com/InventivetalentDev/BossBarAPI 

Poggit status + download: [![Poggit-CI](https://poggit.pmmp.io/ci.badge/thebigsmileXD/BossBarAPI/BossBarAPI)](https://poggit.pmmp.io/ci/thebigsmileXD/BossBarAPI/BossBarAPI)

This API makes sending, changing and updating the "Boss Bar" known from the EnderDragon or the Wither easy!

Just initialize a new BossBar and set its contents, and you are set!

Below are code examples of 2 plugins that use this API so you can easily learn how to use it!

Enjoy!

## Annotation
Inside of this project there is a SendTask class. With that class you can easily set up a scheduled task that calls a function (must be called "sendBossBar") in your Plugin, with which you then can update its text or fill stage :) 

## Usage
**To see the usage, check out these plugins:**

[BossBarTest](https://github.com/thebigsmileXD/BossBarTest)
- Show 'Loading..' on join, show PlayerName + current Time after that (is updating all time)

[BossAnnouncement](https://github.com/thebigsmileXD/BossAnnouncement)
- Show Boss bar and change Text every x seconds. Configureable Never changing Head message (for example 'Hello {player}! Welcome to the xxx network)
