<?php
defined('BASEPATH') OR exit('No direct script access allowed');

/*
| -------------------------------------------------------------------------
| NCMH constant config
| -------------------------------------------------------------------------
| Your db related constant variables below
|
*/

$config['company'] = [
    'hospital_name' => 'National Center for Mental Health',
    'address' => 'Nuevo de Febrero St., Mandaluyong City'
];

$config['refresh_rate'] = 5000; // in milliseconds;
$config['password_auth_ttl'] = 10; // 10 minutes;

$config['patient_suffixes'] = [
    [ 'val'=>'SR', 'name'=>'Sr.' ],
    [ 'val'=>'JR', 'name'=>'Jr.' ],
    [ 'val'=>'II', 'name'=>'II' ],
    [ 'val'=>'III', 'name'=>'III' ],
    [ 'val'=>'IV', 'name'=>'IV' ],
    [ 'val'=>'V', 'name'=>'V' ],
    [ 'val'=>'VI', 'name'=>'VI' ],
    [ 'val'=>'VII', 'name'=>'VII' ],
    [ 'val'=>'VIII', 'name'=>'VIII' ],
    [ 'val'=>'IX', 'name'=>'IX' ],
    [ 'val'=>'X', 'name'=>'X' ]
];

$config['relationships'] = [
    [ 'val'=>'MOTHE', 'name'=>'Mother' ],
    [ 'val'=>'FATHE', 'name'=>'Father' ],
    [ 'val'=>'SISTE', 'name'=>'Sister' ],
    [ 'val'=>'BROTH', 'name'=>'Brother' ],
    [ 'val'=>'AUNT', 'name'=>'Aunt' ],
    [ 'val'=>'UNCLE', 'name'=>'Uncle' ],
    [ 'val'=>'NEPHE', 'name'=>'Nephew' ],
    [ 'val'=>'NIECE', 'name'=>'Niece' ],
    [ 'val'=>'COUSI', 'name'=>'Cousin' ],
    [ 'val'=>'SPOUS', 'name'=>'Spouse' ],
    [ 'val'=>'FHEAD', 'name'=>'Head of Family' ],
    [ 'val'=>'MOTIN', 'name'=>'Mother-In-Law' ],
    [ 'val'=>'NEIGH', 'name'=>'Neighbor' ],
    [ 'val'=>'FRIEN', 'name'=>'Friend' ],
    [ 'val'=>'DAUGH', 'name'=>'Daughter' ],
    [ 'val'=>'SON', 'name'=>'Son' ],
    [ 'val'=>'COLSP', 'name'=>'Common Law Spouse' ],
    [ 'val'=>'SISIN', 'name'=>'Sister-In-Law' ],
    [ 'val'=>'BROIN', 'name'=>'Brother-In-Law' ],
    [ 'val'=>'OTHER', 'name'=>'Others' ],
    [ 'val'=>'GNDCH', 'name'=>'Grandchild' ]
];

$config['type_of_payments'] = [
    [ 'val'=>'WORCO', 'name'=>'Worker\'s compensation' ],
    [ 'val'=>'OTHGO', 'name'=>'Other government payers' ],
    [ 'val'=>'SELPA', 'name'=>'Self-pay' ],
    [ 'val'=>'NOCHA', 'name'=>'No charge (free, charity, special research or teaching)' ],
    [ 'val'=>'INSUR', 'name'=>'Insurance Companies' ],
    [ 'val'=>'SPONS', 'name'=>'Sponsorship' ]
];

$config['genders'] = [
    [ 'val'=>'M', 'name'=>'Male' ],
    [ 'val'=>'F', 'name'=>'Female' ]
];

$config['civil_statuses'] = [
    [ 'val'=>'S', 'name'=>'Single' ],
    [ 'val'=>'M', 'name'=>'Married' ],
    [ 'val'=>'D', 'name'=>'Divorced' ],
    [ 'val'=>'X', 'name'=>'Separated' ],
    [ 'val'=>'W', 'name'=>'Widow/Widower' ],
    [ 'val'=>'N', 'name'=>'Not Applicable' ],
    [ 'val'=>'C', 'name'=>'Child' ]
];

$config['nationalities'] = [
    [ 'val'=>'FILIP', 'name'=>'Filipino' ],
    [ 'val'=>'AMERI', 'name'=>'American' ],
    [ 'val'=>'SPANI', 'name'=>'Spanish' ],
    [ 'val'=>'CHINE', 'name'=>'Chinese' ],
    [ 'val'=>'JAPAN', 'name'=>'Japanese' ],
    [ 'val'=>'GERMN', 'name'=>'German' ],
    [ 'val'=>'BANGD', 'name'=>'Bangladesh' ],
    [ 'val'=>'BRITS', 'name'=>'British' ],
    [ 'val'=>'ENGLS', 'name'=>'English' ],
    [ 'val'=>'FRNCH', 'name'=>'French' ],
    [ 'val'=>'CANAD', 'name'=>'Canadian' ],
    [ 'val'=>'UNKNO', 'name'=>'Unknown' ]
];

$config['consult_types'] = [
    [ 'val'=>'ADPAY', 'name'=>'Pay' ],
    [ 'val'=>'SERVI', 'name'=>'Service' ],
    [ 'val'=>'MEDPY', 'name'=>'PHIC Pay' ],
    [ 'val'=>'MEDCH', 'name'=>'PHIC Charity' ],
    [ 'val'=>'HMOPY', 'name'=>'Health Maintenance Org.' ]
];

$config['degrees'] = [
    [ 'val'=>'no-schooling', 'name'=>'No schooling completed, or less than 1 year' ],
    [ 'val'=>'elementary', 'name'=>'Nursery, kindergarten, and elementary (grades 1-8)' ],
    [ 'val'=>'hs-no-degree', 'name'=>'High school (grades 9-12, no degree)' ],
    [ 'val'=>'hs-graduate', 'name'=>'High school graduate (or equivalent)' ],
    [ 'val'=>'college', 'name'=>'Some college (1-4 years, no degree)' ],
    [ 'val'=>'associate-degree', 'name'=>'Associate\'s degree (including occupational or academic degrees)' ],
    [ 'val'=>'bachelor-degree', 'name'=>'Bachelor\'s degree' ],
    [ 'val'=>'master-degree', 'name'=>'Master\'s degree' ],
    [ 'val'=>'professional-degree', 'name'=>'Professional school degree' ],
    [ 'val'=>'doctorate-degree', 'name'=>'Doctorate degree' ]
];

$config['general_survey'] = [
    [ 'val'=>'ambulatory', 'name'=>'Ambulatory' ],
    [ 'val'=>'ambulatory-with-assistance', 'name'=>'Ambulatory with Assistance' ],
    [ 'val'=>'wheelchair-borne', 'name'=>'Wheelchair-borne' ],
    [ 'val'=>'stretcher-borne', 'name'=>'Stretcher-borne' ]
];

$config['level_of_cons'] = [
    [ 'val'=>'Alert', 'name'=>'Alert' ],
    [ 'val'=>'Drowsy', 'name'=>'Drowsy' ],
    [ 'val'=>'Stuporous', 'name'=>'Stuporous' ],
    [ 'val'=>'Lethargic', 'name'=>'Lethargic' ],
    [ 'val'=>'Unconscious', 'name'=>'Unconscious' ],
];

// Social History Forms
$config['sociable'] = [
    [ 'val'=>'undetermined', 'name'=>'Undetermined' ],
    [ 'val'=>'sociable', 'name'=>'Sociable' ],
    [ 'val'=>'partially-soc', 'name'=>'Partially Sociable' ],
    [ 'val'=>'withdrawn', 'name'=>'Withdrawn' ]
];

$config['social_supports'] = [
    [ 'val'=>'friends', 'name'=>'Friends' ],
    [ 'val'=>'church', 'name'=>'Church' ],
    [ 'val'=>'relatives', 'name'=>'Relatives' ],
    [ 'val'=>'community', 'name'=>'Community' ],
    [ 'val'=>'health-providers', 'name'=>'Health Providers' ]
];

$config['primary_caregivers'] = [
    [ 'val'=>'mother', 'name'=>'Mother' ],
    [ 'val'=>'father', 'name'=>'Father' ],
    [ 'val'=>'grandparents', 'name'=>'Grandparents' ],
    [ 'val'=>'others', 'name'=>'Others' ],
];

$config['sexual_orientations'] = [
    [ 'val'=>'heterosexual', 'name'=>'Heterosexual' ],
    [ 'val'=>'homosexual', 'name'=>'Homosexual' ],
    [ 'val'=>'bisexual', 'name'=>'Bisexual' ],
    [ 'val'=>'prefer_not_to_say', 'name'=>'Prefer not to say' ],
    [ 'val'=>'others', 'name'=>'Others' ],
];

$config['gender_identities'] = [
    [ 'val'=>'male', 'name'=>'Male' ],
    [ 'val'=>'female', 'name'=>'Female' ],
    [ 'val'=>'prefer_not_to_say', 'name'=>'Prefer not to say' ],
    [ 'val'=>'others', 'name'=>'Others' ],
];

$config['source_of_sexual_knowledge'] = [
    [ 'val'=>'parents', 'name'=>'Parents' ],
    [ 'val'=>'school', 'name'=>'School' ],
    [ 'val'=>'peers', 'name'=>'Peers' ],
    [ 'val'=>'social_media', 'name'=>'Social Media' ],
    [ 'val'=>'others', 'name'=>'Others' ],
];

$config['attitude_towards__categories'] = [
    [ 'val'=>'normal', 'name'=>'Normal' ],
    [ 'val'=>'timid', 'name'=>'Timid' ],
    [ 'val'=>'shy', 'name'=>'Shy' ],
    [ 'val'=>'aggressive', 'name'=>'Aggressive' ],
    [ 'val'=>'need_to_impress', 'name'=>'Need to impress' ],
    [ 'val'=>'seductive', 'name'=>'Seductive' ],
    [ 'val'=>'anxious', 'name'=>'Anxious' ],
];

$config['sexual_practices'] = [
    [ 'val'=>'normal', 'name'=>'Normal' ],
    [ 'val'=>'sexual_problems', 'name'=>'Sexual problems' ],
    [ 'val'=>'homosexual_exp', 'name'=>'Homosexual experiences' ],
    [ 'val'=>'multiple_sexual_partners', 'name'=>'Multiple sexual partners' ],
    [ 'val'=>'paraphilias', 'name'=>'Paraphilias' ],
    [ 'val'=>'voyeurism_practices', 'name'=>'Voyeurism practices' ],
    [ 'val'=>'contraceptive_use', 'name'=>'Contraceptive use' ],
];

$config['stds'] = [
    [ 'val'=>'chlamydia', 'name'=>'Chlamydia' ],
    [ 'val'=>'syphillis', 'name'=>'Syphillis' ],
    [ 'val'=>'gonorrhea', 'name'=>'Gonorrhea' ],
    [ 'val'=>'herpes', 'name'=>'Herpes' ],
    [ 'val'=>'hiv', 'name'=>'HIV' ],
];

$config['lvl_dysfunctionality'] = [
    [ 'val'=>'absent', 'name'=>'Absent' ],
    [ 'val'=>'mild_dysfunc', 'name'=> 'Mild Dysfunctionality' ],
    [ 'val'=>'moderate_dysfunc', 'name'=>'Moderate Dysfunctionality' ],
    [ 'val'=>'severe_dysfunc', 'name'=>'Severe Dysfunctionality' ],
];

$config['trtment_pt_initiated'] = [
    [ 'val'=>'cognitive behavioral therapy', 'name'=>'Cognitive Behavioral Therapy' ],
    [ 'val'=>'supportive', 'name'=> 'Supportive' ],
    [ 'val'=>'psychotherapy', 'name'=>'Psychotherapy' ],
    [ 'val'=>'family therapy', 'name'=>'Family Therapy' ],
    [ 'val'=>'group therapy', 'name'=>'Group Therapy' ],
    [ 'val'=>'others', 'name'=>'Others' ],
];

$config['trtment_psychosocial'] = [
    [ 'val' => 'cognitive behavioral therapy', 'name'=>'Cognitive Behavioral Therapy' ],
    [ 'val' => 'supportive', 'name'=> 'Supportive' ],
    [ 'val' => 'psychotherapy', 'name'=>'Psychotherapy' ],
    [ 'val' => 'family therapy', 'name'=>'Family Therapy' ],
    [ 'val' => 'group therapy', 'name'=>'Group Therapy' ],
    [ 'val' => 'others', 'name'=>'Others' ],
];

$config['trtment_somatic'] = [
    [ 'val'=> 'etc', 'name'=>'ETC' ],
    [ 'val'=> 'others', 'name'=>'Others' ],
];

$config['trtment_pharma_status'] = [
    [ 'val' => '1', 'name'=> 'On-going same dosage' ],
    [ 'val' => '2', 'name'=> 'On-going different dosage' ],
    [ 'val' => '3', 'name'=> 'Stopped' ],
];

$config['caregiver_education'] = [
    [ 'val' => 'college', 'name'=> 'College' ],
    [ 'val' => 'high-school', 'name'=> 'High School' ],
    [ 'val' => 'elementary', 'name'=> 'Elementary' ],
    [ 'val' => 'others', 'name'=> 'Others' ],
];

$config['treatment_frequency'] = [
    [ 'val' => 'HOU', 'name'=> 'Hour/s' ],
    [ 'val' => 'DAY', 'name'=> 'Day/s' ],
    [ 'val' => 'WEK', 'name'=> 'Week/s' ],
    [ 'val' => 'MON', 'name'=> 'Months/s' ],
    [ 'val' => 'YER', 'name'=> 'Year/s' ],
    [ 'val' => 'MIN', 'name'=> 'Minute/s' ],
    [ 'val' => 'PRN', 'name'=> 'As Needed' ],
];

$config['laboratory_request'] = [
    [ 'val' => 'complete blood count', 'name'=> 'Complete Blood Count' ],
    [ 'val' => 'urinalysis', 'name'=> 'Urinalysis' ],
    [ 'val' => 'fecalysis', 'name'=> 'Fecalysis' ],
    [ 'val' => 'thyroid stimulating hormone', 'name'=> 'Thyroid Stimulating Hormone' ],
    [ 'val' => 'comprehensive metabolic panel', 'name'=> 'Comprehensive Metabolic Panel' ],
    [ 'val' => 'lipid panel', 'name'=> 'Lipid Panel' ],
    [ 'val' => 'liver panel', 'name'=> 'Liver Panel' ]
];
