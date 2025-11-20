<?php

namespace App\Rest\Controllers;


use Lomkit\Rest\Http\Controllers\Controller;
use App\Rest\Resources\Reservation;

class ReservationController extends Controller
{
    /**
     * The resource the controller corresponds to.
     *
     * @var class-string<\Lomkit\Rest\Http\Resource>
     */
    public static $resource = Reservation::class;
}
