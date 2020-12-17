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
                ['name'=>'Cytology No.:', 'result'=>'&nbsp;'],
                ['name'=>'Source of specimen:', 'result'=>'&nbsp;'],
                ['name'=>'C.S.:', 'result'=>'&nbsp;'],
                ['name'=>'Parity:', 'result'=>'&nbsp;'],
                ['name'=>'Date taken:', 'result'=>'&nbsp;'],
                ['name'=>'Conventional', 'result'=>false],
                ['name'=>'Thin Prep', 'result'=>false],
                ['name'=>'Maturation index', 'result'=>'&nbsp;'],
                ['name'=>'Satisfactory', 'result'=>false],
                ['name'=>'Limited by:', 'result'=>'&nbsp;'],
                ['name'=>'Unsatisfactory', 'result'=>'&nbsp;'],
                ['name'=>'Negative Intraepithelial Malignancy', 'result'=>false],
                ['name'=>'Epithelial Cell Abnormality', 'result'=>false],
                ['name'=>'Negative for Intraepithelial Malignancy:', 'result'=>'&nbsp;'],
                ['name'=>'Epithelial Cell Abnormality:', 'result'=>'&nbsp;'],
                ['name'=>'Mild', 'result'=>false],
                ['name'=>'Moderate', 'result'=>false],
                ['name'=>'Severe', 'result'=>false],
                ['name'=>'Squamos Cell', 'result'=>false],
                ['name'=>'Non Specific Infection', 'result'=>false],
                ['name'=>'Specific Infection', 'result'=>false],
                ['name'=>'Candidiasis', 'result'=>false],
                ['name'=>'Trichomoniasis', 'result'=>false],
                ['name'=>'Gonococcal infection', 'result'=>false],
                ['name'=>'Bacterial vaginosis', 'result'=>false],
                ['name'=>'Herpes Simplex infection', 'result'=>false],
                ['name'=>'ASCUS', 'result'=>false],
                ['name'=>'ASC-H', 'result'=>false],
                ['name'=>'LSIL', 'result'=>false],
                ['name'=>'HSIL', 'result'=>false],
                ['name'=>'Squamous cell carcinoma', 'result'=>false],
                ['name'=>'Glandular cell:', 'result'=>false],
                ['name'=>'Reactive changes', 'result'=>false],
                ['name'=>'Glandular cells, post-hysterectomy', 'result'=>false],
                ['name'=>'Atrophy', 'result'=>false],
                ['name'=>'AGCUS, favors neoplastic/AIS', 'result'=>false],
                ['name'=>'Adenocarcinoma', 'result'=>false],
                ['name'=>'Presence of endometrials in a woman >40 yrs. old', 'result'=>false],
                ['name'=>'Note', 'result'=>'&nbsp;'],
            ],
            "fecalysis" => [
                ['view'=>'fecalysis'],
                ['name'=>'Color','header'=>'GROSS EXAMINATION', 'result'=>'&nbsp;'],
                ['name'=>'Consistency', 'result'=>'&nbsp;'],
                ['name'=>'Blood', 'result'=>'&nbsp;'],
                ['name'=>'Mucos', 'result'=>'&nbsp;'],
                ['name'=>'OVA:','header'=>'MICROSCOPIC EXAMINATION', 'result'=>'&nbsp;'],
                ['name'=>'Ascaris', 'result'=>'&nbsp;'],
                ['name'=>'Trichuris', 'result'=>'&nbsp;'],
                ['name'=>'Hoolworm', 'result'=>'&nbsp;'],
                ['name'=>'Others', 'result'=>'&nbsp;'],
                ['name'=>'Entamoeba:', 'result'=>'&nbsp;'],
                ['name'=>'Trophozoites', 'result'=>'&nbsp;'],
                ['name'=>'Cysts', 'result'=>'&nbsp;'],
                ['name'=>'Trichomonas sp', 'result'=>'&nbsp;'],
                ['name'=>'Yeast Cells', 'result'=>'&nbsp;'],
                ['name'=>'Pus Cells', 'result'=>'&nbsp;'],
                ['name'=>'RBC', 'result'=>'&nbsp;'],
                ['name'=>'Bacteria', 'result'=>'&nbsp;'],
                ['name'=>'Fat Gobules', 'result'=>'&nbsp;'],
                ['name'=>'Test for occult blood', 'result'=>'&nbsp;'],
                ['name'=>'REMARKS', 'result'=>'&nbsp;'],
            ]
        ];
    }

    public static function labsList() {
        return [
            'blood chemistry'=>'Blood Chemistry',
            'cytology'=>'Cytology Report',
            'fecalysis'=>'Fecalysis'
        ];
    }
}
