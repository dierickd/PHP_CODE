<?php


class Speedometer
{
   private const CONVERT = 1.6;

   public static function convertKmToMiles($km)
   {
      return $km / self::CONVERT;
   }

   public static function convertMilesToKm($mile)
   {
      return $mile * self::CONVERT;
   }

}