# LED Helmet

This is WIP project for [helmet with changeable Minecraft skin faces](https://www.instagram.com/p/B39RZATDYHr/) for my kid. And it is a prototype on cardboard at that moment.

## Hardware
 - Arduino Pro Mini
 - ws2812 LEDs
 - Photoresistor (correct brightness)
 - DC step down (power LED)
 - 9V battery (power everything)

## Features
 - Display up to XX faces 8x8 with transition between of them (I don't know how much exactly, it is storing as byte array in Flash, instead of using SRAM in previous version)
 - Brightness correction based on photoresistor

## TODO
 - Find better way to store `usedPoint` array for transition
