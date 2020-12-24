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
                ['name'=>'Conventional', 'result'=>false, 'header'=>'METHOD'],
                ['name'=>'Thin Prep', 'result'=>false],
                ['name'=>'Maturation index', 'result'=>'&nbsp;'],
                ['name'=>'Satisfactory', 'result'=>false, 'header'=>'STATEMENT OF ADEQUACY'],
                ['name'=>'Limited by:', 'result'=>'&nbsp;'],
                ['name'=>'Unsatisfactory', 'result'=>'&nbsp;'],
                ['name'=>'Negative Intraepithelial Malignancy', 'result'=>false, 'header'=>'GENERAL CONSIDERATION'],
                ['name'=>'Epithelial Cell Abnormality', 'result'=>false],
                ['name'=>'Negative for Intraepithelial Malignancy:', 'result'=>'&nbsp;', 'header'=>'INTERPRETATION/RESULT'],
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
            ],
            "ecg" => [
                ['view'=>'ecg'],
                ['name'=>'remarks', 'result'=>'&nbsp;'],
                ['name'=>'Cardiologist/Internist', 'result'=>'&nbsp;']
            ],
            "hematology" => [
                ['view'=>'hematology'],
                [
                    'name'=>'WBC',
                    'normal'=>'Newborn: 10.0 - 30.0 x10^9/L<br>1 year old: 6.0 - 17.0 x10^9/L<br>Adult: 4.5 - 11.0x10^9/L',
                    'result'=>'&nbsp;',
                    'unit'=>'x10^9/L',
                    'header'=>'COMPLETE BLOOD COUNT'
                ],
                [
                    'name'=>'RBC',
                    'normal'=>'Newborn: 5.0 - 6.5 x 10^12/L<br>1 year old: 3.5 - 5.1 x 10^12/L<br>Female: 3.6 - 5.6 x 10^12/L<br>Male: 4.2 - 6.0 x 10^12/L',
                    'unit'=>'x10^12/L',
                    'result'=>'&nbsp;'
                ],
                [
                    'name'=>'Hemoglobin',
                    'normal'=>'Birth: 150-200 g/L<br>Female: 120-160 g/L<br>2 months: 90-140 g/L    Male: 130-180 g/L<br>10 years: 120-150 g/L',
                    'result'=>'&nbsp;',
                    'unit'=>'g/L',
                ],
                [
                    'name'=>'Hematocrit',
                    'normal'=>'Birth: 0.45 - 0.60%    Female: 0.36 - 0.48%<br>1 year: 0.27 - 0.44%    Male: 0.40 - 0.55%',
                    'result'=>'&nbsp;',
                    'unit'=>'%'
                ],
                [
                    'name'=>'Platelet',
                    'normal'=>'150 - 450 /cumm.',
                    'result'=>'&nbsp;',
                    'unit'=>'/cumm.'
                ],
                [
                    'name'=>'Retic. count',
                    'normal'=>'Newborn: 2.5 - 6.5%',
                    'result'=>'&nbsp;',
                    'unit'=>'%'
                ],
                [
                    'name'=>'ESR',
                    'normal'=>'Newborn: 0 - 2 mm/hr.  Female: 0 - 20 mm/hr.<br>Children: 3 - 13 mm/hr.   Male: 0 - 10 mm/hr.',
                    'result'=>'&nbsp;',
                    'unit'=>'mm/hr.'
                ],
                [
                    'name'=>'Stabs',
                    'adult'=>'0.01 - 0.04','zerotosix'=>'','sixtotwelve'=>'',
                    'result'=>'&nbsp;',
                    'header'=>'WBC Differential Count',
                    'unit'=>''
                ],
                [
                    'name'=>'Segmenters',
                    'adult'=>'0.45 - 0.65','zerotosix'=>'0.28 - 0.38','sixtotwelve'=>'0.31 - 0.40',
                    'result'=>'&nbsp;',
                    'unit'=>''
                ],
                [
                    'name'=>'Lymphocytes',
                    'adult'=>'0.20 - 0.35','zerotosix'=>'0.62 - 0.72','sixtotwelve'=>'0.60 - 0.69',
                    'result'=>'&nbsp;',
                    'unit'=>''
                ],
                [
                    'name'=>'Monocytes',
                    'adult'=>'0.02 - 0.06','zerotosix'=>'','sixtotwelve'=>'',
                    'result'=>'&nbsp;',
                    'unit'=>''
                ],
                [
                    'name'=>'Eosinophils',
                    'adult'=>'0.02 - 0.04','zerotosix'=>'','sixtotwelve'=>'',
                    'result'=>'&nbsp;',
                    'unit'=>''
                ],
                [
                    'name'=>'Basophils',
                    'adult'=>'0.00 - 0.01','zerotosix'=>'','sixtotwelve'=>'',
                    'result'=>'&nbsp;',
                    'unit'=>''
                ],
                [
                    'name'=>'Clotting time',
                    'normal'=>'2 - 6 minutes',
                    'result'=>'&nbsp;',
                    'unit'=>'minutes'
                ],
                [
                    'name'=>'Bleeding',
                    'normal'=>'1 - 3 minutes',
                    'result'=>'&nbsp;',
                    'unit'=>'minutes',
                ],
                [
                    'name'=>'Clot Observation time',
                    'normal'=>'5 - 15 minutes',
                    'unit'=>'minutes',
                    'result'=>'&nbsp;'
                ],
                [
                    'name'=>'Blood Type',
                    'result'=>'&nbsp;',
                    'unit'=>''
                ]
            ],
            "microbiology" => [
                ['view'=>'microbiology'],
                ['name'=>'Examination Desired', 'result'=>'&nbsp;'],
                ['name'=>'Remarks', 'result'=>'&nbsp;']
            ],
            "semenal" => [
                ['view'=>'semenal'],
                ['name'=>'Volume', 'unit'=>'ml', 'header'=>'MACROSCOPING EXAMINATION', 'result'=>'&nbsp;'],
                ['name'=>'Color', 'unit'=>'', 'result'=>'&nbsp;'],
                ['name'=>'PH', 'unit'=>'', 'result'=>'&nbsp;'],
                ['name'=>'Specific Gravity', 'unit'=>'', 'result'=>'&nbsp;'],
                ['name'=>'30 Mins', 'unit'=>'%', 'result'=>'&nbsp;', 'header'=>'LIQUEFACTION TIME'],
                ['name'=>'1 hour', 'unit'=>'%', 'result'=>'&nbsp;'],
                ['name'=>'PUS Cells', 'unit'=>'/hpf', 'result'=>'&nbsp;','header'=>'MICROSCOPIC EXAMINATION'],
                ['name'=>'Red Blood Cells', 'unit'=>'/hpf', 'result'=>'&nbsp;'],
                ['name'=>'Motility', 'unit'=>'%', 'result'=>'&nbsp;'],
                ['name'=>'Progression', 'unit'=>'', 'result'=>'&nbsp;'],
                ['name'=>'Sperm Count', 'unit'=>'/cumm', 'result'=>'&nbsp;'],
                ['name'=>'Normal Cells', 'unit'=>'%', 'result'=>'&nbsp;', 'header'=>'SPERM MORPHOLOGY'],
                ['name'=>'Abnormal Cells', 'unit'=>'%', 'result'=>'&nbsp;'],
                ['name'=>'Double Head', 'unit'=>'%', 'result'=>'&nbsp;'],
                ['name'=>'Pin Head', 'unit'=>'%', 'result'=>'&nbsp;'],
                ['name'=>'Ballon Head', 'unit'=>'%', 'result'=>'&nbsp;'],
                ['name'=>'Double Tail', 'unit'=>'%', 'result'=>'&nbsp;'],
                ['name'=>'Short Tail', 'unit'=>'%', 'result'=>'&nbsp;'],
                ['name'=>'Long Tail', 'unit'=>'%', 'result'=>'&nbsp;'],
            ],
        ];
    }

    public static function labsList() {
        return [
            'blood chemistry'=>'Blood Chemistry',
            'cytology'=>'Cytology Report',
            'fecalysis'=>'Fecalysis',
            'ecg'=>'Electrocardiogram',
            'hematology'=>'Hematology',
            'microbiology'=>'Microbiology',
            'semenal' => 'Semenal Analysis',
        ];
    }
}
