<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Bookable extends Model
{
 use HasFactory;

 public function bookings()
 {
  return $this->hasMany(\App\Models\Booking::class);
 }

 public function reviews() {
     return $this->hasMany(\App\Models\Review::class);
 }

 public function availableFor($from, $to): bool
 {
  return 0 === $this->bookings()->betweenDates($from, $to)->count();
 }
}
