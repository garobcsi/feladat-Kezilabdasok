<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class CsapattagSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table("csapattag")->insert(
            [
                ['csapat_id' => '2','jatekos_id' => '59','tol' => '2017','ig' => NULL],
                ['csapat_id' => '10','jatekos_id' => '59','tol' => '2005','ig' => '2014'],
                ['csapat_id' => '11','jatekos_id' => '59','tol' => '2014','ig' => '2017'],
                ['csapat_id' => '2','jatekos_id' => '60','tol' => '2016','ig' => NULL],
                ['csapat_id' => '12','jatekos_id' => '60','tol' => '2012','ig' => '2016'],
                ['csapat_id' => '2','jatekos_id' => '61','tol' => '2018','ig' => NULL],
                ['csapat_id' => '10','jatekos_id' => '61','tol' => '2014','ig' => '2015'],
                ['csapat_id' => '12','jatekos_id' => '61','tol' => '2009','ig' => '2010'],
                ['csapat_id' => '13','jatekos_id' => '61','tol' => '2010','ig' => '2011'],
                ['csapat_id' => '14','jatekos_id' => '61','tol' => '2013','ig' => '2013'],
                ['csapat_id' => '15','jatekos_id' => '61','tol' => '2013','ig' => '2014'],
                ['csapat_id' => '16','jatekos_id' => '61','tol' => '2014','ig' => '2014'],
                ['csapat_id' => '17','jatekos_id' => '61','tol' => '2015','ig' => '2016'],
                ['csapat_id' => '2','jatekos_id' => '62','tol' => '2016','ig' => NULL],
                ['csapat_id' => '10','jatekos_id' => '62','tol' => '2011','ig' => '2016'],
                ['csapat_id' => '12','jatekos_id' => '62','tol' => '2004','ig' => '2009'],
                ['csapat_id' => '18','jatekos_id' => '62','tol' => NULL,'ig' => '2004'],
                ['csapat_id' => '19','jatekos_id' => '62','tol' => '2009','ig' => '2010'],
                ['csapat_id' => '2','jatekos_id' => '63','tol' => '2013','ig' => NULL],
                ['csapat_id' => '20','jatekos_id' => '63','tol' => NULL,'ig' => '2001'],
                ['csapat_id' => '21','jatekos_id' => '63','tol' => '2001','ig' => '2002'],
                ['csapat_id' => '22','jatekos_id' => '63','tol' => '2002','ig' => '2004'],
                ['csapat_id' => '23','jatekos_id' => '63','tol' => '2004','ig' => '2006'],
                ['csapat_id' => '24','jatekos_id' => '63','tol' => '2006','ig' => '2009'],
                ['csapat_id' => '25','jatekos_id' => '63','tol' => '2009','ig' => '2013'],
                ['csapat_id' => '2','jatekos_id' => '64','tol' => '2012','ig' => '2015'],
                ['csapat_id' => '26','jatekos_id' => '64','tol' => '2009','ig' => '2012'],
                ['csapat_id' => '27','jatekos_id' => '64','tol' => '2015','ig' => '2016'],
                ['csapat_id' => '28','jatekos_id' => '64','tol' => '2016','ig' => '2017'],
                ['csapat_id' => '2','jatekos_id' => '65','tol' => '2018','ig' => NULL],
                ['csapat_id' => '24','jatekos_id' => '65','tol' => '2011','ig' => '2013'],
                ['csapat_id' => '29','jatekos_id' => '65','tol' => '2008','ig' => '2011'],
                ['csapat_id' => '30','jatekos_id' => '65','tol' => '2015','ig' => '2018'],
                ['csapat_id' => '1','jatekos_id' => '66','tol' => '2010','ig' => '2012'],
                ['csapat_id' => '2','jatekos_id' => '66','tol' => '2014','ig' => NULL],
                ['csapat_id' => '12','jatekos_id' => '66','tol' => '2012','ig' => '2014'],
                ['csapat_id' => '32','jatekos_id' => '66','tol' => '2004','ig' => '2010'],
                ['csapat_id' => '2','jatekos_id' => '67','tol' => '2012','ig' => '2014'],
                ['csapat_id' => '8','jatekos_id' => '67','tol' => '2014','ig' => '2016'],
                ['csapat_id' => '2','jatekos_id' => '68','tol' => '2017','ig' => NULL],
                ['csapat_id' => '33','jatekos_id' => '68','tol' => '2008','ig' => '2014'],
                ['csapat_id' => '34','jatekos_id' => '68','tol' => '2015','ig' => '2015'],
                ['csapat_id' => '35','jatekos_id' => '68','tol' => '2016','ig' => '2017'],
                ['csapat_id' => '2','jatekos_id' => '69','tol' => '2018','ig' => NULL],
                ['csapat_id' => '19','jatekos_id' => '69','tol' => '2016','ig' => '2012'],
                ['csapat_id' => '36','jatekos_id' => '69','tol' => '2012','ig' => '2018'],
                ['csapat_id' => '12','jatekos_id' => '70','tol' => '2009','ig' => '2014'],
                ['csapat_id' => '1','jatekos_id' => '71','tol' => '2010','ig' => '2014'],
                ['csapat_id' => '2','jatekos_id' => '71','tol' => '2014','ig' => NULL],
                ['csapat_id' => '37','jatekos_id' => '71','tol' => '2001','ig' => '2010'],
                ['csapat_id' => '38','jatekos_id' => '71','tol' => '2005','ig' => '2006'],
                ['csapat_id' => '1','jatekos_id' => '72','tol' => '1997','ig' => '2000'],
                ['csapat_id' => '2','jatekos_id' => '72','tol' => '2012','ig' => NULL],
                ['csapat_id' => '39','jatekos_id' => '72','tol' => '2000','ig' => '2012'],
                ['csapat_id' => '2','jatekos_id' => '73','tol' => '2014','ig' => NULL],
                ['csapat_id' => '30','jatekos_id' => '73','tol' => '2012','ig' => '2014'],
                ['csapat_id' => '40','jatekos_id' => '73','tol' => '2007','ig' => '2009'],
                ['csapat_id' => '41','jatekos_id' => '73','tol' => '2009','ig' => '2012'],
                ['csapat_id' => '1','jatekos_id' => '74','tol' => '2008','ig' => '2010'],
                ['csapat_id' => '2','jatekos_id' => '74','tol' => '2018','ig' => NULL],
                ['csapat_id' => '4','jatekos_id' => '74','tol' => '2012','ig' => '2014'],
                ['csapat_id' => '39','jatekos_id' => '74','tol' => '2007','ig' => '2008'],
                ['csapat_id' => '42','jatekos_id' => '74','tol' => NULL,'ig' => '2007'],
                ['csapat_id' => '43','jatekos_id' => '74','tol' => '2007','ig' => '2007'],
                ['csapat_id' => '44','jatekos_id' => '74','tol' => '2010','ig' => '2012'],
                ['csapat_id' => '45','jatekos_id' => '74','tol' => '2014','ig' => '2017'],
                ['csapat_id' => '2','jatekos_id' => '75','tol' => '2018','ig' => NULL],
                ['csapat_id' => '46','jatekos_id' => '75','tol' => NULL,'ig' => '2003'],
                ['csapat_id' => '47','jatekos_id' => '75','tol' => '2003','ig' => '2007'],
                ['csapat_id' => '48','jatekos_id' => '75','tol' => '2007','ig' => '2010'],
                ['csapat_id' => '49','jatekos_id' => '75','tol' => '2010','ig' => '2012'],
                ['csapat_id' => '50','jatekos_id' => '75','tol' => '2012','ig' => '2018'],
                ['csapat_id' => '2','jatekos_id' => '76','tol' => '2001','ig' => '2004'],
                ['csapat_id' => '39','jatekos_id' => '76','tol' => '2012','ig' => '2014'],
                ['csapat_id' => '51','jatekos_id' => '76','tol' => NULL,'ig' => '2001'],
                ['csapat_id' => '52','jatekos_id' => '76','tol' => '2004','ig' => '2011'],
                ['csapat_id' => '53','jatekos_id' => '76','tol' => '2011','ig' => '2012'],
                ['csapat_id' => '2','jatekos_id' => '77','tol' => '2009','ig' => NULL],
                ['csapat_id' => '12','jatekos_id' => '77','tol' => '2007','ig' => '2009'],
                ['csapat_id' => '19','jatekos_id' => '77','tol' => '2005','ig' => '2007'],
                ['csapat_id' => '55','jatekos_id' => '77','tol' => '1999','ig' => '2002'],
                ['csapat_id' => '56','jatekos_id' => '77','tol' => '2002','ig' => '2005'],
                ['csapat_id' => '2','jatekos_id' => '78','tol' => '2017','ig' => NULL],
                ['csapat_id' => '34','jatekos_id' => '78','tol' => '2013','ig' => '2015'],
                ['csapat_id' => '45','jatekos_id' => '78','tol' => '2015','ig' => '2017'],
                ['csapat_id' => '57','jatekos_id' => '78','tol' => NULL,'ig' => NULL],
                ['csapat_id' => '58','jatekos_id' => '78','tol' => NULL,'ig' => '2012'],
            ]);
    }
}
