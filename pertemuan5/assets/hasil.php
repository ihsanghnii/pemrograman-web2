<?php
class kalkulatorBMI
{
    public function hitungBMI($beratBadan, $tinggiBadan)
    {
        $tinggiBadanMeter = $tinggiBadan / 100;
        $bmi = $beratBadan / ($tinggiBadanMeter * $tinggiBadanMeter);
        return $bmi;
    }

    public function keteranganBMI($bmi)
    {
        if ($bmi < 18.5) {
            return "Kekurangan Berat Badan";
        } elseif ($bmi >= 18.5 && $bmi <= 24.9) {
            return "Normal (ideal)";
        } elseif ($bmi >= 25 && $bmi <= 29.9) {
            return "Kelebihan Berat Badan";
        } else {
            return "Kegemukan (obesitas)";
        }
    }
}
