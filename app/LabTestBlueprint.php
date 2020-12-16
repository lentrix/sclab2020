<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class LabTestBlueprint extends Model
{
    public static function blueprint() {
        return [
            "blood chemistry" => [
                ['view'=>'standard'],
                ['name'=>"FBS",'normal'=>'75-115 mg/dL', 'unit'=>'mg/dL', 'result'=>''],
                ['name'=>"RBS/CBS",'normal'=>"less than 140 mg/dL", 'unit'=>'mg/dL', 'result'=>''],
                ['name'=>"2HPRBS", 'normal'=>"", 'unit'=>'mg/dL', 'result'=>''],
                ['name'=>"Creatinine", 'normal'=>"M=0.50-1.20 mg/dL<br>F=0.50-0.90 mg/dL", 'unit'=>'mg/dL', 'result'=>''],
                ['name'=>"Uric Acid", 'normal'=>"M=3.6-8.2 mg/dL<br>F=2.3-6.1 mg/dL", 'unit'=>'mg/dL', 'result' => ''],
                ['name'=>"Total Cholesterol", 'normal'=>"less than 200 mg/dL", 'unit'=>'mg/dL', 'result'=>''],
                ['name'=>"Triglycerides", 'normal'=>'up to 200 mg/dL', 'unit'=>'mg/dL', 'result'=>''],
                ['name'=>"HDL-C", 'normal'=>'M=35-55 mg/dL <br>F=46-65 mg/dL', 'unit'=>'mg/dL', 'result'=>''],
                ['name'=>"LDL-C", 'normal'=>'0-150 mg/dL', 'unit'=>'mg/dL', 'result'=>''],
                ['name'=>"VLDL", 'normal'=>'0-140 mg/dL', 'unit'=>'mg/dL', 'result'=>''],
                ['name'=>"SGOT (AST)", 'normal'=>'M=up to 42 U/L <br>F=up to 32	U/L', 'unit'=>'U/L', 'result'=>''],
                ['name'=>"SGPT (ALT)", 'normal'=>'M=up to 41 U/L<br>F=up to 31 U/L', 'unit'=>'U/L', 'result'=>''],
                ['name'=>"Sodium", 'normal'=>'135-145 mmol/L', 'unit'=>'mmol/L', 'result'=>''],
                ['name'=>"Potassium", 'normal'=>'3.60-5.40 mmol/L', 'unit'=>'mmol/L', 'result'=>''],
                ['name'=>"BUN", 'normal'=>'4.0-23.0	mg/dL', 'unit'=>'mg/dL', 'result'=>''],
            ],
            "cytology" => [
                ['view'=>'cytology'],
                ['name'=>'Source of specimen:', 'value'=>' '],
                ['name'=>'C.S.:', 'value'=>' '],
                ['name'=>'Parity:', 'value'=>' '],
                ['name'=>'Date taken:', 'value'=>' '],
                ['name'=>'Conventional', 'value'=>false],
                ['name'=>'Thin Prep', 'value'=>false],
                ['name'=>'Maturation index', 'value'=>' '],
                ['name'=>'Satisfactory', 'value'=>false],
                ['name'=>'Limited by:', 'value'=>' '],
                ['name'=>'Unsatisfactory', 'value'=>' '],
                ['name'=>'Negative Intraepithelial Malignancy', 'value'=>false],
                ['name'=>'Epithelial Cell Abnormality', 'value'=>false],
                ['name'=>'Negative for Intraepithelial Malignancy:', 'value'=>' '],
                ['name'=>'Epithelial Cell Abnormality:', 'value'=>' '],
                ['name'=>'Mild', 'value'=>false],
                ['name'=>'Moderate', 'value'=>false],
                ['name'=>'Severe', 'value'=>false],
                ['name'=>'Squamos Cell', 'value'=>false],
                ['name'=>'Non Specific', 'value'=>false],
                ['name'=>'Specific Infection', 'value'=>false],
                ['name'=>'Candidiasis', 'value'=>false],
                ['name'=>'Trichomoniasis', 'value'=>false],
                ['name'=>'Gonococcal infection', 'value'=>false],
                ['name'=>'Bacterial vaginosis', 'value'=>false],
                ['name'=>'Herpes Simplex infection', 'value'=>false],
                ['name'=>'Squamous cell carcinoma', 'value'=>false],
                ['name'=>'Glandular cell:', 'value'=>false],
                ['name'=>'Reactive changes', 'value'=>false],
                ['name'=>'Glandular cells, post-hysterectomy', 'value'=>false],
                ['name'=>'Atrophy', 'value'=>false],
                ['name'=>'AGCUS, favors neoplastic/AIS', 'value'=>false],
                ['name'=>'Adenocarcinoma', 'value'=>false],
                ['name'=>'Presence of endometrials in a woman >40 yrs. old', 'value'=>false],
                ['name'=>'Note', 'value'=>' '],
            ]
        ];
    }

    public static function labsList() {
        return [
            'blood chemistry'=>'Blood Chemistry',
            'cytology'=>'Cytology',
            'fecalysis'=>'Fecalysis'
        ];
    }
}
