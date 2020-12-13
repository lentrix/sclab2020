<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class LabTestBlueprint extends Model
{
    public static function blueprint() {
        return [
            "hematology" => [
                "FBS"               => ['normal'=>'75-115 mg/dL', 'result'=>''],
                "RBS/CBS"           => ['normal'=>"less than 140 mg/dL", 'result'=>''],
                "2HPRBS"            => ['normal'=>"", 'result'=>''],
                "Creatinine"	    => ['normal'=>"M=0.50-1.20 mg/dL<br>F=0.50-0.90	mg/dL", 'result'=>''],
                "Uric Acid"         => ['normal'=>"M=3.6-8.2 mg/dL<br>F=2.3-6.1	mg/dL", 'result' => ''],
                "Total Cholesterol"	=> ['normal'=>"less than 200 mg/dL", 'result'=>''],
                "Triglycerides"     => ['normal'=>'up to 200 mg/dL', 'result'=>''],
                "HDL-C"             => ['normal'=>'M=35-55	mg/dL <br>F=46-65	mg/dL', 'result'=>''],
                "LDL-C"             => ['normal'=>'0-150 mg/dL', 'result'=>''],
                "VLDL"              => ['normal'=>'0-140 mg/dL', 'result'=>''],
                "SGOT (AST)"        => ['normal'=>'M=up to 42 U/L <br>F=up to 32	U/L', 'result'=>''],
                "SGPT (ALT)"        => ['normal'=>'M=up to 41 U/L<br>F=up to 31	U/L	', 'result'=>''],
                "Sodium"            => ['normal'=>'135-145 mmol/L', 'result'=>''],
                "Potassium"         => ['normal'=>'3.60-5.40 mmol/L', 'result'=>''],
                "BUN"               => ['normal'=>'4.0-23.0	mg/dL', 'result'=>''],
            ],
        ];
    }

    public static function labsList() {
        return [
            'hematology'=>'Hematology',
            'cytology'=>'Cytology',
            'fecalysis'=>'Fecalysis'
        ];
    }
}
