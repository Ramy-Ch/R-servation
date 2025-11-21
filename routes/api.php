<?php

use Lomkit\Rest\Facades\Rest;
use App\Rest\Resources\Salle;
use App\Rest\Resources\Reservation;
use App\Rest\Resources\User;


Rest::resource("salles",Salle::class);
Rest::resource("reservations",Reservation::class);
Rest::resource("users", \App\Rest\Resources\User::class);
?>