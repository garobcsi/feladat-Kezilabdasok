<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class JatekosSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table("jatekos")->insert(
            [
                ['id' => '1','nev' => 'Ancsin Gábor','mezszam' => '27','poszt' => 'átlövő','allampolgarsag' => 'magyar','szuletesi_datum' => '1990-11-27','magassag' => '202'],
                ['id' => '2','nev' => 'Bali Richárd','mezszam' => '30','poszt' => 'átlövő','allampolgarsag' => 'magyar','szuletesi_datum' => '1989-03-30','magassag' => '194'],
                ['id' => '3','nev' => 'Benis Bence','mezszam' => '10','poszt' => 'szélső','allampolgarsag' => 'magyar','szuletesi_datum' => '1989-02-22','magassag' => '189'],
                ['id' => '4','nev' => 'Benmiloud Yassine','mezszam' => '13','poszt' => 'beálló','allampolgarsag' => 'magyar','szuletesi_datum' => '1990-03-04','magassag' => '202'],
                ['id' => '5','nev' => 'Bozo Andjelic','mezszam' => '32','poszt' => 'irányító','allampolgarsag' => 'montenegrói','szuletesi_datum' => '1992-03-16','magassag' => '187'],
                ['id' => '6','nev' => 'Bujdosó Bendegúz','mezszam' => '94','poszt' => 'szélső','allampolgarsag' => 'magyar','szuletesi_datum' => '1994-12-10','magassag' => '185'],
                ['id' => '7','nev' => 'Debreczeni Dávid','mezszam' => '23','poszt' => 'beálló','allampolgarsag' => 'magyar','szuletesi_datum' => '1992-09-23','magassag' => '198'],
                ['id' => '8','nev' => 'Grebenár Gábor','mezszam' => '8','poszt' => 'irányító,átlövő','allampolgarsag' => 'magyar','szuletesi_datum' => '1984-08-17','magassag' => '194'],
                ['id' => '9','nev' => 'Holdosi Bence','mezszam' => '3','poszt' => 'szélső','allampolgarsag' => 'magyar','szuletesi_datum' => '2000-12-17','magassag' => '174'],
                ['id' => '10','nev' => 'Kovacsics Péter','mezszam' => '99','poszt' => 'szélső','allampolgarsag' => 'magyar','szuletesi_datum' => '1994-06-13','magassag' => '190'],
                ['id' => '11','nev' => 'Marczinkó Máté','mezszam' => '23','poszt' => 'átlövő','allampolgarsag' => 'magyar','szuletesi_datum' => '1991-01-23','magassag' => '195'],
                ['id' => '12','nev' => 'Marián Zernovic','mezszam' => '67','poszt' => 'kapus','allampolgarsag' => 'szlovák','szuletesi_datum' => '1991-07-01','magassag' => '186'],
                ['id' => '13','nev' => 'Merkovszki Pál','mezszam' => '12','poszt' => 'kapus','allampolgarsag' => 'magyar','szuletesi_datum' => '2000-05-05','magassag' => '198'],
                ['id' => '14','nev' => 'Mikita Bence','mezszam' => '97','poszt' => 'irányító','allampolgarsag' => 'magyar','szuletesi_datum' => '1997-12-13','magassag' => '184'],
                ['id' => '15','nev' => 'Nagy Máté','mezszam' => '66','poszt' => 'szélső','allampolgarsag' => 'magyar','szuletesi_datum' => '1986-03-13','magassag' => '175'],
                ['id' => '16','nev' => 'Oláh Tamás','mezszam' => '9','poszt' => 'átlövő','allampolgarsag' => 'magar','szuletesi_datum' => '1993-02-14','magassag' => '195'],
                ['id' => '17','nev' => 'Pálos Gábor','mezszam' => '14','poszt' => 'szélső','allampolgarsag' => 'magyar','szuletesi_datum' => '1985-06-21','magassag' => '185'],
                ['id' => '18','nev' => 'Pordán Bálint','mezszam' => '22','poszt' => 'beálló','allampolgarsag' => 'magyar','szuletesi_datum' => '1988-10-12','magassag' => '185'],
                ['id' => '19','nev' => 'Rade Mijatovic','mezszam' => '1','poszt' => 'kapus','allampolgarsag' => 'montenegrói','szuletesi_datum' => '1981-06-30','magassag' => '191'],
                ['id' => '20','nev' => 'Rédai Krisztián','mezszam' => '24','poszt' => 'átlövő','allampolgarsag' => 'magyar','szuletesi_datum' => '1995-07-29','magassag' => '206'],
                ['id' => '21','nev' => 'Schuch Timuzsin','mezszam' => '5','poszt' => 'beálló','allampolgarsag' => 'magyar','szuletesi_datum' => '1985-06-05','magassag' => '197'],
                ['id' => '22','nev' => 'Szakály Benedek','mezszam' => '8','poszt' => 'szélső','allampolgarsag' => 'magyar','szuletesi_datum' => '1997-09-07','magassag' => '178'],
                ['id' => '23','nev' => 'Teimuraz Orjonikidze','mezszam' => '19','poszt' => 'átlövő','allampolgarsag' => 'grúz','szuletesi_datum' => '1996-02-07','magassag' => '198'],
                ['id' => '24','nev' => 'Alen Blazevic','mezszam' => '21','poszt' => 'balátlövő','allampolgarsag' => 'horvát','szuletesi_datum' => '1986-03-26','magassag' => '200'],
                ['id' => '25','nev' => 'Alilovic Mirko','mezszam' => '32','poszt' => 'kapus','allampolgarsag' => 'horvát','szuletesi_datum' => '1985-09-15','magassag' => '200'],
                ['id' => '26','nev' => 'Balogh Zsolt','mezszam' => '19','poszt' => 'jobbátlövő','allampolgarsag' => 'magyar','szuletesi_datum' => '1989-03-29','magassag' => '189'],
                ['id' => '27','nev' => 'Bánhidi Bence','mezszam' => '27','poszt' => 'beálló','allampolgarsag' => 'magyar','szuletesi_datum' => '1995-05-09','magassag' => '204'],
                ['id' => '28','nev' => 'Bodó Richárd','mezszam' => '9','poszt' => 'balátlövő','allampolgarsag' => 'magyar','szuletesi_datum' => '1994-03-13','magassag' => '203'],
                ['id' => '29','nev' => 'Dean Bombac','mezszam' => '44','poszt' => 'irányító','allampolgarsag' => 'szlovén','szuletesi_datum' => '1989-04-04','magassag' => '195'],
                ['id' => '30','nev' => 'Dmitrij Zhitnikov','mezszam' => '89','poszt' => 'irányító','allampolgarsag' => 'orosz','szuletesi_datum' => '1989-11-20','magassag' => '193'],
                ['id' => '31','nev' => 'Joan Canellas','mezszam' => '14','poszt' => 'irányító','allampolgarsag' => 'spanyol','szuletesi_datum' => '1986-09-30','magassag' => '198'],
                ['id' => '32','nev' => 'Jonas Källman','mezszam' => '8','poszt' => 'balszélső','allampolgarsag' => 'svéd','szuletesi_datum' => '1981-07-17','magassag' => '200'],
                ['id' => '33','nev' => 'Jorge Maqueda','mezszam' => '5','poszt' => 'jobbátlövő','allampolgarsag' => 'spanyol','szuletesi_datum' => '1988-02-06','magassag' => '197'],
                ['id' => '34','nev' => 'Marin Sego','mezszam' => '16','poszt' => 'kapus','allampolgarsag' => 'horvát','szuletesi_datum' => '1984-08-02','magassag' => '194'],
                ['id' => '35','nev' => 'Mario Sostaric','mezszam' => '24','poszt' => 'jobbszélső','allampolgarsag' => 'szlovén','szuletesi_datum' => '1992-11-24','magassag' => '193'],
                ['id' => '36','nev' => 'Matej Gaber','mezszam' => '22','poszt' => 'beálló','allampolgarsag' => 'szlovén','szuletesi_datum' => '1991-07-22','magassag' => '198'],
                ['id' => '37','nev' => 'Nagy Martin','mezszam' => '52','poszt' => 'kapus','allampolgarsag' => 'magyar','szuletesi_datum' => '2000-01-09','magassag' => '202'],
                ['id' => '38','nev' => 'Nik Henigman','mezszam' => '15','poszt' => 'balátlövő','allampolgarsag' => 'szlovén','szuletesi_datum' => '1995-12-04','magassag' => '200'],
                ['id' => '39','nev' => 'Rodríguez Pedro','mezszam' => '26','poszt' => 'jobbszélső','allampolgarsag' => 'spanyol','szuletesi_datum' => '1990-08-22','magassag' => '192'],
                ['id' => '40','nev' => 'Stanislav Kasparek','mezszam' => '37','poszt' => 'jobbátlövő','allampolgarsag' => 'cseh','szuletesi_datum' => '1996-06-11','magassag' => '200'],
                ['id' => '41','nev' => 'Stefan Ráfn Sigurmannsson','mezszam' => '10','poszt' => 'balszélső','allampolgarsag' => 'magyar','szuletesi_datum' => '1990-05-19','magassag' => '197'],
                ['id' => '42','nev' => 'Bartuc lászló','mezszam' => '16','poszt' => 'kapus','allampolgarsag' => NULL,'szuletesi_datum' => '1991-10-05','magassag' => '194'],
                ['id' => '43','nev' => 'Bozovic Milos','mezszam' => '2','poszt' => 'balátlövő','allampolgarsag' => 'montenegrói','szuletesi_datum' => '1994-12-10','magassag' => '199'],
                ['id' => '44','nev' => 'Dénes János','mezszam' => '24','poszt' => 'beálló/balszélső','allampolgarsag' => 'magyar','szuletesi_datum' => '1984-11-15','magassag' => '195'],
                ['id' => '45','nev' => 'Fekete Dániel','mezszam' => '51','poszt' => 'balátlövő','allampolgarsag' => 'román','szuletesi_datum' => '1999-06-14','magassag' => '194'],
                ['id' => '46','nev' => 'Grigoras Demis Cosmin','mezszam' => '23','poszt' => 'jobbátlövő','allampolgarsag' => 'román','szuletesi_datum' => '1993-06-30','magassag' => '194'],
                ['id' => '47','nev' => 'Győri Mátyás','mezszam' => '22','poszt' => 'irányító','allampolgarsag' => 'magyar','szuletesi_datum' => '1997-02-02','magassag' => '192'],
                ['id' => '48','nev' => 'Iancu Ionut-Ciprian','mezszam' => '1','poszt' => 'kapus','allampolgarsag' => 'román','szuletesi_datum' => '1994-02-18','magassag' => '194'],
                ['id' => '49','nev' => 'Ilyés Ferenc','mezszam' => '18','poszt' => 'balátlövő','allampolgarsag' => 'magyar','szuletesi_datum' => '1981-12-20','magassag' => '198'],
                ['id' => '50','nev' => 'Juhász Ádám','mezszam' => '7','poszt' => 'irányító','allampolgarsag' => 'magyar','szuletesi_datum' => '1996-06-06','magassag' => '188'],
                ['id' => '51','nev' => 'Pásztor Ákos','mezszam' => '4','poszt' => 'jobbszélső','allampolgarsag' => 'magyar','szuletesi_datum' => '1991-06-24','magassag' => '189'],
                ['id' => '52','nev' => 'Rosta Miklós','mezszam' => '19','poszt' => 'beálló','allampolgarsag' => 'magyar','szuletesi_datum' => '1999-02-14','magassag' => '203'],
                ['id' => '53','nev' => 'Sipos Adrián','mezszam' => '8','poszt' => 'beálló','allampolgarsag' => 'magyar/román','szuletesi_datum' => '1990-03-08','magassag' => '198'],
                ['id' => '54','nev' => 'Székely Márton','mezszam' => '12','poszt' => 'kapus','allampolgarsag' => 'magyar','szuletesi_datum' => '1990-01-02','magassag' => '194'],
                ['id' => '55','nev' => 'Szöllősi Balázs','mezszam' => '14','poszt' => 'irányító','allampolgarsag' => 'magyar','szuletesi_datum' => '1992-10-24','magassag' => '193'],
                ['id' => '56','nev' => 'Vranjes Vladimir','mezszam' => '77','poszt' => 'beálló','allampolgarsag' => 'bosnyák','szuletesi_datum' => '1988-12-14','magassag' => '200'],
                ['id' => '57','nev' => 'Vrankovic Jakov','mezszam' => '93','poszt' => 'jobblövő','allampolgarsag' => 'horvát','szuletesi_datum' => '1993-06-12','magassag' => '200'],
                ['id' => '58','nev' => 'Vujovic Milos','mezszam' => '6','poszt' => 'balszélső','allampolgarsag' => 'motenegrói','szuletesi_datum' => '1993-09-05','magassag' => '181'],
                ['id' => '59','nev' => 'Accambray William','mezszam' => '20','poszt' => 'ballövő','allampolgarsag' => 'francia','szuletesi_datum' => '1988-04-08','magassag' => '194'],
                ['id' => '60','nev' => 'Blagotinsek Blaz','mezszam' => '31','poszt' => 'beálló','allampolgarsag' => 'szlovén','szuletesi_datum' => '1994-01-17','magassag' => '202'],
                ['id' => '61','nev' => 'Borut Mackovsek','mezszam' => '51','poszt' => 'balátlövő','allampolgarsag' => 'szlovén','szuletesi_datum' => '1992-09-11','magassag' => '203'],
                ['id' => '62','nev' => 'Gajic Dragan','mezszam' => '17','poszt' => 'jobbszélső','allampolgarsag' => 'szlovén','szuletesi_datum' => '1984-07-21','magassag' => '188'],
                ['id' => '63','nev' => 'Ilic Momir','mezszam' => '13','poszt' => 'ballövő','allampolgarsag' => 'szerb/magyar','szuletesi_datum' => '1981-12-22','magassag' => '198'],
                ['id' => '64','nev' => 'Jamali Moorchegani Iman','mezszam' => '44','poszt' => 'ballövő','allampolgarsag' => 'iráni/magyar','szuletesi_datum' => '1991-10-11','magassag' => '200'],
                ['id' => '65','nev' => 'Kentin Mahé','mezszam' => '35','poszt' => 'irányító,balszélső','allampolgarsag' => 'francia','szuletesi_datum' => '1991-05-22','magassag' => '186'],
                ['id' => '66','nev' => 'Lékai Máté','mezszam' => '66','poszt' => 'irányító','allampolgarsag' => 'magyar','szuletesi_datum' => '1988-06-16','magassag' => '190'],
                ['id' => '67','nev' => 'Ligetvári Patrik','mezszam' => '96','poszt' => 'ballövő','allampolgarsag' => 'magyar','szuletesi_datum' => '1996-02-13','magassag' => '200'],
                ['id' => '68','nev' => 'Manaskov Dejan','mezszam' => '2','poszt' => 'balszélső','allampolgarsag' => 'macedón','szuletesi_datum' => '1992-08-26','magassag' => '180'],
                ['id' => '69','nev' => 'Manuel Štrlek','mezszam' => '26','poszt' => 'balszélső','allampolgarsag' => 'horvát','szuletesi_datum' => '1988-12-01','magassag' => '181'],
                ['id' => '70','nev' => 'Marguč Gašper','mezszam' => '24','poszt' => 'jobbszélső','allampolgarsag' => 'szlovén','szuletesi_datum' => '1990-08-20','magassag' => '180'],
                ['id' => '71','nev' => 'Mikler Roland','mezszam' => '16','poszt' => 'kapus','allampolgarsag' => 'magyar','szuletesi_datum' => '1984-09-20','magassag' => '190'],
                ['id' => '72','nev' => 'Nagy László','mezszam' => '19','poszt' => 'jobblövő','allampolgarsag' => 'magyar','szuletesi_datum' => '1981-03-03','magassag' => '207'],
                ['id' => '73','nev' => 'Nilsson Andreas','mezszam' => '18','poszt' => 'beálló','allampolgarsag' => 'svéd','szuletesi_datum' => '1990-04-12','magassag' => '196'],
                ['id' => '74','nev' => 'Petar Nenadić','mezszam' => '34','poszt' => 'irányító','allampolgarsag' => 'szerb','szuletesi_datum' => '1986-06-28','magassag' => '198'],
                ['id' => '75','nev' => 'René Toft Hansen','mezszam' => '7','poszt' => 'beálló','allampolgarsag' => 'dán','szuletesi_datum' => '1984-11-01','magassag' => '200'],
                ['id' => '76','nev' => 'Sterbik Árpád','mezszam' => '1','poszt' => 'kapus','allampolgarsag' => 'szerb/spanyol','szuletesi_datum' => '1979-11-22','magassag' => NULL],
                ['id' => '77','nev' => 'Terzic Mirsad','mezszam' => '30','poszt' => 'ballövő','allampolgarsag' => 'bosnyák','szuletesi_datum' => '1983-07-12','magassag' => '196'],
                ['id' => '78','nev' => 'Tønnesen Kent Robin','mezszam' => '15','poszt' => 'jobblövő','allampolgarsag' => 'norvég','szuletesi_datum' => '1991-06-05','magassag' => '195']
              ]
        );
    }
}
