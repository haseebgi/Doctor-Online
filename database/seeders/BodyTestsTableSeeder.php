<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class BodyTestsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
   public function run()
{
        \App\Models\BodyTest::insert([
        ['name' => 'Blood Test', 'original_price' => 500],
        ['name' => 'Urine Test', 'original_price' => 300],
        ['name' => 'X-Ray', 'original_price' => 1500],
        ['name' => 'MRI Scan', 'original_price' => 4000],
        ['name' => 'ECG', 'original_price' => 800],
        ['name' => 'Ultrasound', 'original_price' => 2000],
        ['name' => 'Cholesterol Test', 'original_price' => 600],
        ['name' => 'Glucose Test', 'original_price' => 450],
        ['name' => 'Liver Function Test', 'original_price' => 900],
        ['name' => 'Kidney Function Test', 'original_price' => 900],
        ['name' => 'Thyroid Test', 'original_price' => 700],
        ['name' => 'Hemoglobin Test', 'original_price' => 400],
        ['name' => 'Vitamin D Test', 'original_price' => 1200],
        ['name' => 'Platelet Count', 'original_price' => 500],
        ['name' => 'Blood Group', 'original_price' => 350],
        ['name' => 'Electrolytes Panel', 'original_price' => 800],
        ['name' => 'Calcium Test', 'original_price' => 600],
        ['name' => 'Serum Iron Test', 'original_price' => 700],
        ['name' => 'Pregnancy Test', 'original_price' => 300],
        ['name' => 'Pap Smear', 'original_price' => 1000],
        ['name' => 'HIV Test', 'original_price' => 1500],
        ['name' => 'Hepatitis B Test', 'original_price' => 1500],
        ['name' => 'Hepatitis C Test', 'original_price' => 1500],
        ['name' => 'Blood Sugar Fasting', 'original_price' => 400],
        ['name' => 'Blood Sugar Random', 'original_price' => 350],
        ['name' => 'Complete Blood Count (CBC)', 'original_price' => 700],
        ['name' => 'ESR (Erythrocyte Sedimentation Rate)', 'original_price' => 300],
        ['name' => 'CRP (C-Reactive Protein)', 'original_price' => 500],
        ['name' => 'Vitamin B12 Test', 'original_price' => 1100],
        ['name' => 'Urine Culture', 'original_price' => 1200],
        ['name' => 'Stool Test', 'original_price' => 600],
        ['name' => 'Sputum Test', 'original_price' => 800],
        ['name' => 'Lipid Profile', 'original_price' => 1000],
        ['name' => 'Prostate Specific Antigen (PSA)', 'original_price' => 1400],
        ['name' => 'Electrolytes', 'original_price' => 800],
        ['name' => 'Coagulation Profile', 'original_price' => 1300],
        ['name' => 'Serum Creatinine', 'original_price' => 600],
        ['name' => 'Blood Urea Nitrogen (BUN)', 'original_price' => 600],
        ['name' => 'Amylase Test', 'original_price' => 1000],
        ['name' => 'Lipase Test', 'original_price' => 1100],
        ['name' => 'Arterial Blood Gas (ABG)', 'original_price' => 2000],
        ['name' => 'Bone Density Test', 'original_price' => 2500],
        ['name' => 'Allergy Test', 'original_price' => 3000],
        ['name' => 'Vitamin A Test', 'original_price' => 1000],
        ['name' => 'Vitamin E Test', 'original_price' => 1000],
        ['name' => 'Serum Protein Electrophoresis', 'original_price' => 2000],
        ['name' => 'Blood Culture', 'original_price' => 1800],
        ['name' => 'T3, T4 Test', 'original_price' => 800],
        ['name' => 'Anti-Streptolysin O (ASO)', 'original_price' => 900],
        ['name' => 'Rheumatoid Factor', 'original_price' => 1000],
        ['name' => 'Urinalysis', 'original_price' => 400],
        ['name' => 'Blood Gas Analysis', 'original_price' => 1500],
        ['name' => 'Hormone Panel', 'original_price' => 3500],
        ['name' => 'Cortisol Test', 'original_price' => 1200],
    ]);

}

}
