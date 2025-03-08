<?php

namespace Database\Seeders;

use App\Models\User;
// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Http\Controllers\EventController;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        $eventController = new EventController();
        $eventController->create_event("../../images/chorale.png", "Chorale", "Charité", "Saint-Honoré", date_create("2025-03-07"), date("h:i:s"), ['../../images/vente_garage.jpg', '../../images/collecte_fond.jpg']);
        $eventController->create_event("../../images/vente_garage.jpg", "Vente de garage", "Charité", "Saint-Honoré", date_create("2025-01-05"), date("h:i:s"), ['../../images/vente_garage.jpg', '../../images/collecte_fond.jpg']);
        $eventController->create_event("../../images/collecte_fond.jpg", "Collecte de fond", "Charité", "Rue de saint-honoré", date_create("2025-02-10"), date("h:i:s"), ['../../images/vente_garage.jpg', '../../images/collecte_fond.jpg']);
        $eventController->create_event("../../images/denrees.jpg", "Collecte de denrées", "Charité", "Chicoutimi", date_create("2024-11-15"), date("h:i:s"), ['../../images/vente_garage.jpg', '../../images/collecte_fond.jpg']);
        $eventController->create_event("../../images/vetements.jpg", "Collecte de vêtements", "Charité", "Chicoutimi-Nord", date_create("2025-03-22"), date("h:i:s"), ['../../images/vente_garage.jpg', '../../images/collecte_fond.jpg']);
    }
}
