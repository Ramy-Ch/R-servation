<?php

use Lomkit\Rest\Facades\Rest;

Rest::resource("salles",\App\Rest\Controllers\SallesController::class);
Rest::resource("reservations",\App\Rest\Controllers\ReservationsCOntroller::class);
Rest::resource("users", \App\Rest\Controllers\UsersController::class);
?>