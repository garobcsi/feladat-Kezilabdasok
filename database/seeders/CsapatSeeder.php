<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class CsapatSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table("csapat")->insert(
            [
                ['id' => '1','nev' => 'MOL-Pick Szeged','orszag' => 'Magyarország','varos' => 'Szeged','stadion' => 'Városi Sportcsarnok','stadion_meret' => '3200'],
                ['id' => '2','nev' => 'Telekom Veszprém','orszag' => 'Magyarország','varos' => 'Veszprém','stadion' => 'Veszprém Aréna','stadion_meret' => '5096'],
                ['id' => '3','nev' => 'Kadetten Schaffhausen','orszag' => 'Svájc','varos' => 'Schaffhausen','stadion' => 'BBC-Arena','stadion_meret' => '3500'],
                ['id' => '4','nev' => 'Wisła Płock','orszag' => 'Lengyelország','varos' => 'Płock','stadion' => 'Kazimierz Górski Stadium','stadion_meret' => '10978'],
                ['id' => '5','nev' => 'TBV Lemgo','orszag' => 'Németország','varos' => 'Lemgo','stadion' => 'Gerry-Weber-Stadion','stadion_meret' => '11000'],
                ['id' => '6','nev' => 'Székelyudvarhelyi KC','orszag' => 'Románia','varos' => 'Székelyudvarhely','stadion' => 'Városi Sportcsarnok','stadion_meret' => '1300'],
                ['id' => '7','nev' => 'Grundfos Tatabánya','orszag' => 'Magyarország','varos' => 'Tatabánya','stadion' => 'Földi imre Sportcsarnok','stadion_meret' => '1000'],
                ['id' => '8','nev' => 'Balatonfüredi KSE','orszag' => 'Magyarország','varos' => 'Balatonfüred','stadion' => 'Észak- Balatoni Regionális Konferencia Közpon','stadion_meret' => '712'],
                ['id' => '9','nev' => 'Fradi','orszag' => 'Magyarország','varos' => NULL,'stadion' => NULL,'stadion_meret' => NULL],
                ['id' => '10','nev' => 'Montpellier HB','orszag' => 'Franciaország','varos' => 'Montpellier','stadion' => NULL,'stadion_meret' => NULL],
                ['id' => '11','nev' => 'Paris Saint-Germain','orszag' => 'Franciaország','varos' => 'Párizs','stadion' => NULL,'stadion_meret' => NULL],
                ['id' => '12','nev' => 'Rk Celje','orszag' => 'Szlovénia','varos' => 'Celje','stadion' => NULL,'stadion_meret' => NULL],
                ['id' => '13','nev' => 'RK Maribor Branik','orszag' => 'Szlovénia','varos' => 'Maribor','stadion' => NULL,'stadion_meret' => NULL],
                ['id' => '14','nev' => 'Asz-Szadd','orszag' => 'Katar','varos' => 'Doha','stadion' => NULL,'stadion_meret' => NULL],
                ['id' => '15','nev' => 'TSV Hannover-Burgdorf','orszag' => 'Németország','varos' => 'Hannover','stadion' => NULL,'stadion_meret' => NULL],
                ['id' => '16','nev' => 'Dinama Minszk','orszag' => 'Fehéroroszország','varos' => 'Minszk','stadion' => NULL,'stadion_meret' => NULL],
                ['id' => '17','nev' => 'ThSV Eisenach','orszag' => 'Németország','varos' => 'Eisenach','stadion' => NULL,'stadion_meret' => NULL],
                ['id' => '18','nev' => 'RK Rudar Evj Trbovlije','orszag' => 'Szlovénia','varos' => 'Trbovlije','stadion' => NULL,'stadion_meret' => NULL],
                ['id' => '19','nev' => 'RK Zagreb','orszag' => 'Horvátorszáh','varos' => 'Zágráb','stadion' => NULL,'stadion_meret' => NULL],
                ['id' => '20','nev' => 'Samot Aranđelovac','orszag' => 'Szerbia','varos' => 'Aranđelovac','stadion' => NULL,'stadion_meret' => NULL],
                ['id' => '21','nev' => 'HC Kolubara-Lazarevac','orszag' => 'Szerbia','varos' => 'Lazarevac','stadion' => NULL,'stadion_meret' => NULL],
                ['id' => '22','nev' => 'RK Fidelinka Subotica','orszag' => 'Szerbia','varos' => 'Subotica','stadion' => NULL,'stadion_meret' => NULL],
                ['id' => '23','nev' => 'RK Gorenje Velenje','orszag' => 'Szlovénia','varos' => 'Velenje','stadion' => NULL,'stadion_meret' => NULL],
                ['id' => '24','nev' => 'VfL Gummersbach','orszag' => 'Németország','varos' => 'Gummersbach','stadion' => NULL,'stadion_meret' => NULL],
                ['id' => '25','nev' => 'THW Kiel','orszag' => 'Németország','varos' => 'Kiel','stadion' => NULL,'stadion_meret' => NULL],
                ['id' => '26','nev' => 'Fulád Szepáhán','orszag' => 'Irán','varos' => 'Iszfahán','stadion' => NULL,'stadion_meret' => NULL],
                ['id' => '27','nev' => 'IFK Kristianstad','orszag' => 'Svédország','varos' => 'Kristianstad','stadion' => NULL,'stadion_meret' => NULL],
                ['id' => '28','nev' => 'Meskov Breszt','orszag' => 'Fehéroroszország','varos' => 'Breszt','stadion' => NULL,'stadion_meret' => NULL],
                ['id' => '29','nev' => 'DHC Rheinland','orszag' => 'Németország','varos' => 'Dormagen','stadion' => NULL,'stadion_meret' => NULL],
                ['id' => '30','nev' => 'HSV Hamburg','orszag' => 'Németország','varos' => 'Hamburg','stadion' => NULL,'stadion_meret' => NULL],
                ['id' => '31','nev' => 'SG Flensburg-Handewitt','orszag' => 'Németország','varos' => 'Flensburg','stadion' => NULL,'stadion_meret' => NULL],
                ['id' => '32','nev' => 'PLER KC','orszag' => 'Magyarország','varos' => 'Budapest','stadion' => NULL,'stadion_meret' => NULL],
                ['id' => '33','nev' => 'Metalurg Szkopje','orszag' => 'Macedónia','varos' => 'Skopje','stadion' => 'Boris Trajkovski','stadion_meret' => '7000'],
                ['id' => '34','nev' => 'HSG Wetzlar','orszag' => 'Németország','varos' => 'Wetzlar','stadion' => NULL,'stadion_meret' => NULL],
                ['id' => '35','nev' => 'Rhein-Neckar Löwen','orszag' => 'Németország','varos' => 'Mannheim','stadion' => NULL,'stadion_meret' => NULL],
                ['id' => '36','nev' => 'Vive Kielce','orszag' => 'Lengyelország','varos' => 'Kielce','stadion' => NULL,'stadion_meret' => NULL],
                ['id' => '37','nev' => 'Dunaferr KC','orszag' => 'Magyarország','varos' => 'Dunaújváros','stadion' => NULL,'stadion_meret' => NULL],
                ['id' => '38','nev' => 'Kalocsai KC','orszag' => 'Magyarország','varos' => 'Kalocsa','stadion' => NULL,'stadion_meret' => NULL],
                ['id' => '39','nev' => 'FC Barcelona','orszag' => 'Spanyolország','varos' => 'Barcelona','stadion' => NULL,'stadion_meret' => NULL],
                ['id' => '40','nev' => 'IFK Trelleborg','orszag' => 'Svédország','varos' => 'Trelleborg','stadion' => NULL,'stadion_meret' => NULL],
                ['id' => '41','nev' => 'IFK Skövde','orszag' => 'Svédország','varos' => 'Skövde','stadion' => NULL,'stadion_meret' => NULL],
                ['id' => '42','nev' => 'Crvena Zvezda','orszag' => 'Szerbia','varos' => 'Belgrád','stadion' => 'Rajko Mitić Stadion','stadion_meret' => NULL],
                ['id' => '43','nev' => 'Algeciras BM','orszag' => 'Spanyolország','varos' => 'Algeciras','stadion' => 'Ciudad de Algeciras','stadion_meret' => '2300'],
                ['id' => '44','nev' => 'TTH Holstebro','orszag' => 'Dánia','varos' => 'Holstebro','stadion' => 'Gråkjær Arena','stadion_meret' => '3250'],
                ['id' => '45','nev' => 'Füchse Berlin','orszag' => 'Németország','varos' => 'Berlin','stadion' => 'Max-Schmeling-Halle','stadion_meret' => '9000'],
                ['id' => '46','nev' => 'HF Mors','orszag' => 'Dánia','varos' => 'Mors','stadion' => NULL,'stadion_meret' => NULL],
                ['id' => '47','nev' => 'Viborg HK','orszag' => 'Dánia','varos' => 'Viborg','stadion' => 'Vibocold Arena Viborg','stadion_meret' => '3000'],
                ['id' => '48','nev' => 'KIF Kolding','orszag' => 'Dánia','varos' => 'Koppenhága','stadion' => 'Sydbank Arena','stadion_meret' => NULL],
                ['id' => '49','nev' => 'AG København','orszag' => 'Dánia','varos' => 'Koppenhága','stadion' => 'Ballerup Super Arena','stadion_meret' => '7500'],
                ['id' => '50','nev' => 'THW Kiel','orszag' => 'Németország','varos' => 'Kiel','stadion' => 'Sparkassen-Arena','stadion_meret' => '13500'],
                ['id' => '51','nev' => 'RK Jugović','orszag' => 'Szerbia','varos' => 'Kać','stadion' => 'Hram Sport Hall','stadion_meret' => '2000'],
                ['id' => '52','nev' => 'BM Ciudad Real','orszag' => 'Spanyolország','varos' => 'Ciudad Real','stadion' => 'Quijote Arena','stadion_meret' => NULL],
                ['id' => '53','nev' => 'BM Atlético Madrid','orszag' => 'Spanyolország','varos' => 'Madrid','stadion' => 'Antonio Magariños','stadion_meret' => '3000'],
                ['id' => '55','nev' => 'RK Željezničar','orszag' => 'Bosznia-Hercegovina','varos' => 'Szarajevó','stadion' => NULL,'stadion_meret' => NULL],
                ['id' => '56','nev' => 'HRK Izviđač','orszag' => 'Bosznia-Hercegovina','varos' => 'Ljubuški','stadion' => NULL,'stadion_meret' => '4000'],
                ['id' => '57','nev' => 'Fjellhammer IL','orszag' => 'Norvégia','varos' => 'Lørenskog','stadion' => NULL,'stadion_meret' => NULL],
                ['id' => '58','nev' => 'Haslum HK','orszag' => 'Norvégia','varos' => 'Haslum','stadion' => NULL,'stadion_meret' => NULL],
                ['id' => '59','nev' => 'IK Sävehof','orszag' => 'Svédország','varos' => 'Partille','stadion' => 'Partille Arena','stadion_meret' => '2000']
              ]
                
        );
    }
}
