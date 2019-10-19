# LED Helmet

This is WIP project for [helmet with changable minecraft skin faces](https://www.instagram.com/p/B3RPYErj5Qg/).

## Hardware
 - Arduino Pro Mini
 - ws2812 LEDs
 - Photoresistor (correct brightness)
 - DC step down (power LED)
 - 9V battery (power everything)

## Features
 - Display up to 3 faces 8x8 with transition between of them
 - Brightness correction based on photoresistor

## TODO
 - Store faces different way to save memory
 - Use PROGMEM to store faces (or SD card)
 - Find better way to store `usedPoint` array for transition
