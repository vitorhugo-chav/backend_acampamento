<?php

namespace Database\Seeders;

use App\Models\Camping;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class CampingSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        // Mirin (10-12 anos)
        Camping::create([
            'notice' => 'Acampamento Mirin - Diversão garantida para crianças!',
            'term' => 'Participantes devem respeitar os horários e monitores.',
            'image' => 'mirin.jpg',
            'minimal_age' => 10,
            'maximal_age' => 12,
            'camper_fee' => 50.00,
            'servant_fee' => 30.00,
            'planned_man_vacancies' => 20,
            'planned_woman_vacancies' => 20,
            'planned_couple_vacancies' => 0,
            'raffle_man_vacancies' => 15,
            'raffle_woman_vacancies' => 15,
            'raffle_couple_vacancies' => 0,
            'raffle_total_vacancies' => 30,
            'raffle_camper_subscription_start_date' => '2026-06-01 00:00:00',
            'raffle_camper_subscription_end_date' => '2026-06-30 23:59:59',
            'raffle_camper_date' => '2026-07-05 10:00:00',
            'raffle_servant_subscription_start_date' => '2026-06-01 00:00:00',
            'raffle_servant_subscription_end_date' => '2026-06-30 23:59:59',
            'raffle_servant_date' => '2026-07-05 11:00:00',
            'camper_registration_start_date' => '2026-07-06 00:00:00',
            'camper_registration_end_date' => '2026-07-10 23:59:59',
            'camper_payment_link' => 'https://pagseguro.com/mirin2026',
            'camper_payment_date' => '2026-07-11 23:59:59',
            'servant_registration_start_date' => '2026-07-06 00:00:00',
            'servant_registration_end_date' => '2026-07-10 23:59:59',
            'servant_payment_link' => 'https://pagseguro.com/mirin-servo2026',
            'servant_payment_date' => '2026-07-11 23:59:59',
            'type' => 'mirin'
        ]);

        // FAC (14-17 anos)
        Camping::create([
            'notice' => 'Acampamento FAC - Aventura e fé para adolescentes!',
            'term' => 'Atividades ao ar livre com supervisão especializada.',
            'image' => 'fac.jpg',
            'minimal_age' => 14,
            'maximal_age' => 17,
            'camper_fee' => 60.00,
            'servant_fee' => 40.00,
            'planned_man_vacancies' => 25,
            'planned_woman_vacancies' => 25,
            'planned_couple_vacancies' => 0,
            'raffle_man_vacancies' => 20,
            'raffle_woman_vacancies' => 20,
            'raffle_couple_vacancies' => 0,
            'raffle_total_vacancies' => 40,
            'raffle_camper_subscription_start_date' => '2026-06-01 00:00:00',
            'raffle_camper_subscription_end_date' => '2026-06-30 23:59:59',
            'raffle_camper_date' => '2026-07-12 10:00:00',
            'raffle_servant_subscription_start_date' => '2026-06-01 00:00:00',
            'raffle_servant_subscription_end_date' => '2026-06-30 23:59:59',
            'raffle_servant_date' => '2026-07-12 11:00:00',
            'camper_registration_start_date' => '2026-07-13 00:00:00',
            'camper_registration_end_date' => '2026-07-17 23:59:59',
            'camper_payment_link' => 'https://pagseguro.com/fac2026',
            'camper_payment_date' => '2026-07-18 23:59:59',
            'servant_registration_start_date' => '2026-07-13 00:00:00',
            'servant_registration_end_date' => '2026-07-17 23:59:59',
            'servant_payment_link' => 'https://pagseguro.com/fac-servo2026',
            'servant_payment_date' => '2026-07-18 23:59:59',
            'type' => 'fac'
        ]);

        // Juvenil (18-24 anos)
        Camping::create([
            'notice' => 'Acampamento Juvenil - Jovens fortalecendo a fé!',
            'term' => 'Programação intensa com estudos bíblicos e recreação.',
            'image' => 'juvenil.jpg',
            'minimal_age' => 18,
            'maximal_age' => 24,
            'camper_fee' => 70.00,
            'servant_fee' => 50.00,
            'planned_man_vacancies' => 30,
            'planned_woman_vacancies' => 30,
            'planned_couple_vacancies' => 0,
            'raffle_man_vacancies' => 25,
            'raffle_woman_vacancies' => 25,
            'raffle_couple_vacancies' => 0,
            'raffle_total_vacancies' => 50,
            'raffle_camper_subscription_start_date' => '2026-06-01 00:00:00',
            'raffle_camper_subscription_end_date' => '2026-06-30 23:59:59',
            'raffle_camper_date' => '2026-07-19 10:00:00',
            'raffle_servant_subscription_start_date' => '2026-06-01 00:00:00',
            'raffle_servant_subscription_end_date' => '2026-06-30 23:59:59',
            'raffle_servant_date' => '2026-07-19 11:00:00',
            'camper_registration_start_date' => '2026-07-20 00:00:00',
            'camper_registration_end_date' => '2026-07-24 23:59:59',
            'camper_payment_link' => 'https://pagseguro.com/juvenil2026',
            'camper_payment_date' => '2026-07-25 23:59:59',
            'servant_registration_start_date' => '2026-07-20 00:00:00',
            'servant_registration_end_date' => '2026-07-24 23:59:59',
            'servant_payment_link' => 'https://pagseguro.com/juvenil-servo2026',
            'servant_payment_date' => '2026-07-25 23:59:59',
            'type' => 'juvenil'
        ]);

        // Senior (25-60 anos)
        Camping::create([
            'notice' => 'Acampamento Senior - Encontro de gerações na presença de Deus!',
            'term' => 'Atividades adaptadas para conforto e bem-estar.',
            'image' => 'senior.jpg',
            'minimal_age' => 25,
            'maximal_age' => 60,
            'camper_fee' => 80.00,
            'servant_fee' => 60.00,
            'planned_man_vacancies' => 40,
            'planned_woman_vacancies' => 40,
            'planned_couple_vacancies' => 20,
            'raffle_man_vacancies' => 30,
            'raffle_woman_vacancies' => 30,
            'raffle_couple_vacancies' => 15,
            'raffle_total_vacancies' => 75,
            'raffle_camper_subscription_start_date' => '2026-06-01 00:00:00',
            'raffle_camper_subscription_end_date' => '2026-06-30 23:59:59',
            'raffle_camper_date' => '2026-07-26 10:00:00',
            'raffle_servant_subscription_start_date' => '2026-06-01 00:00:00',
            'raffle_servant_subscription_end_date' => '2026-06-30 23:59:59',
            'raffle_servant_date' => '2026-07-26 11:00:00',
            'camper_registration_start_date' => '2026-07-27 00:00:00',
            'camper_registration_end_date' => '2026-07-31 23:59:59',
            'camper_payment_link' => 'https://pagseguro.com/senior2026',
            'camper_payment_date' => '2026-08-01 23:59:59',
            'servant_registration_start_date' => '2026-07-27 00:00:00',
            'servant_registration_end_date' => '2026-07-31 23:59:59',
            'servant_payment_link' => 'https://pagseguro.com/senior-servo2026',
            'servant_payment_date' => '2026-08-01 23:59:59',
            'type' => 'senior'
        ]);

        // Casais
        Camping::create([
            'notice' => 'Acampamento para Casais - Fortalecendo uniões em Cristo!',
            'term' => 'Casais devem comprovar residência conjunta no momento da entrevista.',
            'image' => 'casais.jpg',
            'minimal_age' => 18, // Casais podem ter qualquer idade a partir de 18
            'maximal_age' => 99,
            'camper_fee' => 90.00, // Por pessoa
            'servant_fee' => 70.00,
            'planned_man_vacancies' => 0,
            'planned_woman_vacancies' => 0,
            'planned_couple_vacancies' => 25,
            'raffle_man_vacancies' => 0,
            'raffle_woman_vacancies' => 0,
            'raffle_couple_vacancies' => 20,
            'raffle_total_vacancies' => 20,
            'raffle_camper_subscription_start_date' => '2026-06-01 00:00:00',
            'raffle_camper_subscription_end_date' => '2026-06-30 23:59:59',
            'raffle_camper_date' => '2026-08-02 10:00:00',
            'raffle_servant_subscription_start_date' => '2026-06-01 00:00:00',
            'raffle_servant_subscription_end_date' => '2026-06-30 23:59:59',
            'raffle_servant_date' => '2026-08-02 11:00:00',
            'camper_registration_start_date' => '2026-08-03 00:00:00',
            'camper_registration_end_date' => '2026-08-07 23:59:59',
            'camper_payment_link' => 'https://pagseguro.com/casais2026',
            'camper_payment_date' => '2026-08-08 23:59:59',
            'servant_registration_start_date' => '2026-08-03 00:00:00',
            'servant_registration_end_date' => '2026-08-07 23:59:59',
            'servant_payment_link' => 'https://pagseguro.com/casais-servo2026',
            'servant_payment_date' => '2026-08-08 23:59:59',
            'type' => 'casais'
        ]);
    }
}
