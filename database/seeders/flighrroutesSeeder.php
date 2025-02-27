<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\flighr_routes;

class flighrroutesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        $data = [
            'UPG,MDC,MKS W32 MNO,1 HOUR 45 MIN,,FL600 -10.000',
            'UPG,SUB,MKS W32 SBR,1 HOUR 35 MIN,,FL600 - 8.000',
            'UPG,CGK,MKS W52 CKG,2 HOURS 25 MIN,,FL600-6.500',
            'UPG,CGK,MKS W52 CKG,TRANSIT (2H 25M),,FL600-6.500',
            'CGK,KNO, CKG T5 KNO,TRANSIT,,FL 600-290',
            'MDC,UPG,MNO W32 MKS,1HOUR 45 MIN,,FL600 -10.000',
            'MDC,CGK,MNO W15 CKG,3HOURS 10 MIN,,FL 600-12.000',
            'MDC,SUB,MNO W15 CKG W45 SBR,OVERFLYING (TIDAK TRANSIT),,',
            'MDC ,CGK,MNO W15 CGK ,TRANSIT,,',
            'CGK,KNO, CKG T5 KNO,TRANSIT,,',
            'CGK,UPG,CKG W52 MKS,2 HOURS 25 MIN,,',
            'CGK,SUB,CKG W45 SBR,1 HOUR 30 MIN,,',
            'CGK,MDC,CKG W15 MNO,3HOURS 10 MIN,,',
            'CGK,KNO,CKG T5 KNO,2HOURS 15 MIN,,',
            'SUB,CGK,SBR W45 CKG,1 HOUR 30 MIN,,',
            'SUB,UPG,SBR W32 MKS,1 HOUR 35 MIN,,',
            'SUB,MDC,SBR W32 MKS W32 MDC,2 HOURS 40 MIN (OVERFLYING),,',
            'SUB,CGK,SBR W45 CKG ,TRANSIT,,',
            'CGK,KNO,CKG T5 KNO,TRANSIT,,',
            'KNO,CGK,KNO T5 CKG ,TRANSIT,,',
            'CGK,UPG,CKG W52 MKS ,TRANSIT,,',
            'KNO,CGK,KNO T5 CKG,2HOURS 15 MIN,,',
            'KNO,CGK,KNO T5 CKG ,TRANSIT,,',
            'CGK,MDC,CKG W15 MNO,TRANSIT,,',
            'KNO,CGK,KNO T5 CKG ,TRANSIT,,',
            'CGK,SUB, CKG W45 SBR,TRANSIT,,',
        ];


        foreach ($data as $datum) {
            $parts = explode(',', $datum);
            $flighrRoute = new flighr_routes([
                'departure_aero' => $parts[0],
                'destination_aero' => $parts[1],
                'routes' => $parts[2],
                'est_waktu' => $parts[3],
                'speed' => $parts[4],
                'flight_level' => $parts[5],
            ]);
            $flighrRoute->save();
        }
    }
}
