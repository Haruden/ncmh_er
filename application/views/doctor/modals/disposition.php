<div class="modal diagnosis-modal fade" id="discharge_pdiagnosis_modal" data-backdrop="static" tabindex="-1" role="dialog">
    <div class="modal-dialog" role="document">
        <form id="diagnosis_form">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="diagnosis-modal-title">Add New Diagnosis</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">

                    <!-- ICD10 Diagnosis -->
                    <div class="form-group mb-3">
                        <label for="diag_diagnosis">
                            <strong id="diag_diagnosis_req" class="text-red">*</strong>Diagnosis (ICD 10)
                        </label>
                        <select data-allow-clear="true" class="form-control mb-2 mr-sm-2 select2bs4" id="diag_diagnosis" name="diag_diagnosis" data-placeholder="ICD Code">
                            <option value=""></option>
                            <option value="F00.0">F00.0 - Dementia in Alzheimer's disease with early onset (G30.0+)</option>
                            <option value="F00.1">F00.1 - Dementia in Alzheimer's disease with late onset (G30.1+)</option>
                            <option value="F00.2">F00.2 - Dementia in Alzheimer's disease, atypical or mixed type (G30.8+)</option>
                            <option value="F00.9">F00.9 - Dementia in Alzheimer's disease, unspecified (G30.9+)</option>
                            <option value="F01.0">F01.0 - Vascular dementia of acute onset</option>
                            <option value="F01.1">F01.1 - Multi-infarct dementia</option>
                            <option value="F01.2">F01.2 - Subcortical vascular dementia</option>
                            <option value="F01.3">F01.3 - Mixed cortical and subcortical vascular dementia</option>
                            <option value="F01.4">F01.4 - Vascular dementia without behavioral disturbance</option>
                            <option value="F01.5">F01.5 - Vascular dementia with behavioral disturbance</option>
                            <option value="F01.8">F01.8 - Other vascular dementia</option>
                            <option value="F01.9">F01.9 - Vascular dementia, unspecified</option>
                            <option value="F02.0">F02.0 - Dementia in Pick's disease (G31.0+)</option>
                            <option value="F02.1">F02.1 - Dementia in Creutzfeldt-Jakob disease (A81.0+)</option>
                            <option value="F02.2">F02.2 - Dementia in Huntington's disease (G10+)</option>
                            <option value="F02.3">F02.3 - Dementia in Parkinson's disease (G20+)</option>
                            <option value="F02.4">F02.4 - Dementia in human immunodeficiency virus [HIV] disease (B22.0+)</option>
                            <option value="F02.5">F02.5 - Dementia in other diseases classified elsewhere, without behavioral disturbance</option>
                            <option value="F02.6">F02.6 - Dementia in other diseases classified elsewhere, with behavioral disturbance</option>
                            <option value="F02.8">F02.8 - Dementia in other specified diseases classified elsewhere</option>
                            <option value="F05.0">F05.0 - Delirium not superimposed on dementia, so described</option>
                            <option value="F05.1">F05.1 - Delirium superimposed on dementia</option>
                            <option value="F05.8">F05.8 - Other delirium</option>
                            <option value="F05.9">F05.9 - Delirium, unspecified</option>
                            <option value="F06.0">F06.0 - Psychotic disorder with hallucinations due to known physiological condition</option>
                            <option value="F06.1">F06.1 - Catatonic disorder due to known physiological condition</option>
                            <option value="F06.2">F06.2 - Psychotic disorder with delusions due to known physiological condition</option>
                            <option value="F06.3">F06.3 - Mood disorder due to known physiological condition</option>
                            <option value="F06.30">F06.30 - Mood disorder due to known physiological condition, unspecified</option>
                            <option value="F06.31">F06.31 - Mood disorder due to known physiological condition with depressive features</option>
                            <option value="F06.32">F06.32 - Mood disorder due to known physiological condition with major depressive-like episode</option>
                            <option value="F06.33">F06.33 - Mood disorder due to known physiological condition with manic features</option>
                            <option value="F06.34">F06.34 - Mood disorder due to known physiological condition with mixed features</option>
                            <option value="F06.4">F06.4 - Anxiety disorder due to known physiological condition</option>
                            <option value="F06.5">F06.5 - Organic dissociative disorder</option>
                            <option value="F06.6">F06.6 - Organic emotionally labile [asthenic] disorder</option>
                            <option value="F06.7">F06.7 - Mild cognitive disorder</option>
                            <option value="F06.8">F06.8 - Other specified mental disorders due to known physiological condition</option>
                            <option value="F06.9">F06.9 - Unspecified mental disorder due to known physiological condition</option>
                            <option value="F07.0">F07.0 - Personality change due to known physiological condition</option>
                            <option value="F07.1">F07.1 - Postencephalitic syndrome</option>
                            <option value="F07.2">F07.2 - Postconcussional syndrome</option>
                            <option value="F07.8">F07.8 - Other personality and behavioral disorders due to known physiological condition</option>
                            <option value="F07.9">F07.9 - Unspecified personality and behavioral disorder due to known physiological condition</option>
                            <option value="F10.0">F10.0 - Alcohol abuse</option>
                            <option value="F10.00">F10.00 - Alcohol abuse, uncomplicated</option>
                            <option value="F10.02">F10.02 - Alcohol abuse with intoxication</option>
                            <option value="F10.020">F10.020 - Alcohol abuse with intoxication, uncomplicated</option>
                            <option value="F10.021">F10.021 - Alcohol abuse with intoxication delirium</option>
                            <option value="F10.029">F10.029 - Alcohol abuse with intoxication, unspecified</option>
                            <option value="F10.04">F10.04 - Alcohol abuse with alcohol-induced mood disorder</option>
                            <option value="F10.05">F10.05 - Alcohol abuse with alcohol-induced psychotic disorder</option>
                            <option value="F10.050">F10.050 - Alcohol abuse with alcohol-induced psychotic disorder with delusions</option>
                            <option value="F10.051">F10.051 - Alcohol abuse with alcohol-induced psychotic disorder with hallucinations</option>
                            <option value="F10.059">F10.059 - Alcohol abuse with alcohol-induced psychotic disorder, unspecified</option>
                            <option value="F10.08">F10.08 - Alcohol abuse with other alcohol-induced disorders</option>
                            <option value="F10.080">F10.080 - Alcohol abuse with alcohol-induced anxiety disorder</option>
                            <option value="F10.081">F10.081 - Alcohol abuse with alcohol-induced sexual dysfunction</option>
                            <option value="F10.082">F10.082 - Alcohol abuse with alcohol-induced sleep disorder</option>
                            <option value="F10.088">F10.088 - Alcohol abuse with other alcohol-induced disorder</option>
                            <option value="F10.09">F10.09 - Alcohol abuse with unspecified alcohol-induced disorder</option>
                            <option value="F10.1">F10.1 - Alcohol dependence</option>
                            <option value="F10.10">F10.10 - Alcohol dependence, uncomplicated</option>
                            <option value="F10.11">F10.11 - Alcohol dependence, in remission</option>
                            <option value="F10.12">F10.12 - Alcohol dependence with intoxication</option>
                            <option value="F10.120">F10.120 - Alcohol dependence with intoxication, uncomplicated</option>
                            <option value="F10.121">F10.121 - Alcohol dependence with intoxication delirium</option>
                            <option value="F10.129">F10.129 - Alcohol dependence with intoxication, unspecified</option>
                            <option value="F10.13">F10.13 - Alcohol dependence with withdrawal</option>
                            <option value="F10.130">F10.130 - Alcohol dependence with withdrawal, uncomplicated</option>
                            <option value="F10.131">F10.131 - Alcohol dependence with withdrawal delirium</option>
                            <option value="F10.132">F10.132 - Alcohol dependence with withdrawal with perceptual disturbance</option>
                            <option value="F10.139">F10.139 - Alcohol dependence with withdrawal, unspecified</option>
                            <option value="F10.14">F10.14 - Alcohol dependence with alcohol-induced mood disorder</option>
                            <option value="F10.15">F10.15 - Alcohol dependence with alcohol-induced psychotic disorder</option>
                            <option value="F10.150">F10.150 - Alcohol dependence with alcohol-induced psychotic disorder with delusions</option>
                            <option value="F10.151">F10.151 - Alcohol dependence with alcohol-induced psychotic disorder with hallucinations</option>
                            <option value="F10.159">F10.159 - Alcohol dependence with alcohol-induced psychotic disorder, unspecified</option>
                            <option value="F10.16">F10.16 - Alcohol dependence with alcohol persisting amnestic disorder</option>
                            <option value="F10.17">F10.17 - Alcohol dependence with alcohol persisting dementia</option>
                            <option value="F10.18">F10.18 - Alcohol dependence with other alcohol-induced disorders</option>
                            <option value="F10.180">F10.180 - Alcohol dependence with alcohol-induced anxiety disorder</option>
                            <option value="F10.181">F10.181 - Alcohol dependence with alcohol-induced sexual dysfunction</option>
                            <option value="F10.182">F10.182 - Alcohol dependence with alcohol-induced sleep disorder</option>
                            <option value="F10.188">F10.188 - Alcohol dependence with other alcohol-induced disorder</option>
                            <option value="F10.19">F10.19 - Alcohol dependence with unspecified alcohol-induced disorder</option>
                            <option value="F10.2">F10.2 - Mental and behavioural disorders due to use of alcohol: Dependency syndrome</option>
                            <option value="F10.9">F10.9 - Alcohol use, unspecified, complicated</option>
                            <option value="F10.92">F10.92 - Alcohol use, unspecified with intoxication</option>
                            <option value="F10.920">F10.920 - Alcohol use, unspecified with intoxication, uncomplicated</option>
                            <option value="F10.921">F10.921 - Alcohol use, unspecified with intoxication delirium</option>
                            <option value="F10.929">F10.929 - Alcohol use, unspecified with intoxication, unspecified</option>
                            <option value="F10.94">F10.94 - Alcohol use, unspecified with alcohol-induced mood disorder</option>
                            <option value="F10.95">F10.95 - Alcohol use, unspecified with alcohol-induced psychotic disorder</option>
                            <option value="F10.950">F10.950 - Alcohol use, unspecified with alcohol-induced psychotic disorder with delusions</option>
                            <option value="F10.951">F10.951 - Alcohol use, unspecified with alcohol-induced psychotic disorder with hallucinations</option>
                            <option value="F10.959">F10.959 - Alcohol use, unspecified with alcohol-induced psychotic disorder, unspecified</option>
                            <option value="F10.96">F10.96 - Alcohol use, unspecified with alcohol persisting amnestic disorder</option>
                            <option value="F10.97">F10.97 - Alcohol use, unspecified with alcohol persisting dementia</option>
                            <option value="F10.98">F10.98 - Alcohol use, unspecified with other alcohol-induced disorders</option>
                            <option value="F10.980">F10.980 - Alcohol use, unspecified with alcohol-induced anxiety disorder</option>
                            <option value="F10.981">F10.981 - Alcohol use, unspecified with alcohol-induced sexual dysfunction</option>
                            <option value="F10.982">F10.982 - Alcohol use, unspecified with alcohol-induced sleep disorder</option>
                            <option value="F10.988">F10.988 - Alcohol use, unspecified with other alcohol-induced disorder</option>
                            <option value="F10.99">F10.99 - Alcohol use, unspecified with unspecified alcohol-induced disorder</option>
                            <option value="F11.0">F11.0 - Opioid abuse</option>
                            <option value="F11.00">F11.00 - Opioid abuse, uncomplicated</option>
                            <option value="F11.02">F11.02 - Opioid abuse with intoxication</option>
                            <option value="F11.020">F11.020 - Opioid abuse with intoxication, uncomplicated</option>
                            <option value="F11.021">F11.021 - Opioid abuse with intoxication delirium</option>
                            <option value="F11.022">F11.022 - Opioid abuse with intoxication with perceptual disturbance</option>
                            <option value="F11.029">F11.029 - Opioid abuse with intoxication, unspecified</option>
                            <option value="F11.04">F11.04 - Opioid abuse with opioid-induced mood disorder</option>
                            <option value="F11.05">F11.05 - Opioid abuse with opioid-induced psychotic disorder</option>
                            <option value="F11.050">F11.050 - Opioid abuse with opioid-induced psychotic disorder with delusions</option>
                            <option value="F11.051">F11.051 - Opioid abuse with opioid-induced psychotic disorder with hallucinations</option>
                            <option value="F11.059">F11.059 - Opioid abuse with opioid-induced psychotic disorder, unspecified</option>
                            <option value="F11.08">F11.08 - Opioid abuse with other opioid-induced disorder</option>
                            <option value="F11.081">F11.081 - Opioid abuse with opioid-induced sexual dysfunction</option>
                            <option value="F11.082">F11.082 - Opioid abuse with opioid-induced sleep disorder</option>
                            <option value="F11.088">F11.088 - Opioid abuse with other opioid-induced disorder</option>
                            <option value="F11.09">F11.09 - Opioid abuse with unspecified opioid-induced disorder</option>
                            <option value="F11.1">F11.1 - Opioid dependence</option>
                            <option value="F11.10">F11.10 - Opioid dependence, uncomplicated</option>
                            <option value="F11.11">F11.11 - Opioid dependence, in remission</option>
                            <option value="F11.12">F11.12 - Opioid dependence with intoxication</option>
                            <option value="F11.120">F11.120 - Opioid dependence with intoxication, uncomplicated</option>
                            <option value="F11.121">F11.121 - Opioid dependence with intoxication delirium</option>
                            <option value="F11.122">F11.122 - Opioid dependence with intoxication with perceptual disturbance</option>
                            <option value="F11.129">F11.129 - Opioid dependence with intoxication, unspecified</option>
                            <option value="F11.13">F11.13 - Opioid dependence with withdrawal</option>
                            <option value="F11.14">F11.14 - Opioid dependence with opioid-induced mood disorder</option>
                            <option value="F11.15">F11.15 - Opioid dependence with opioid-induced psychotic disorder</option>
                            <option value="F11.150">F11.150 - Opioid dependence with opioid-induced psychotic disorder with delusions</option>
                            <option value="F11.151">F11.151 - Opioid dependence with opioid-induced psychotic disorder with hallucinations</option>
                            <option value="F11.159">F11.159 - Opioid dependence with opioid-induced psychotic disorder, unspecified</option>
                            <option value="F11.18">F11.18 - Opioid dependence with other opioid-induced disorder</option>
                            <option value="F11.181">F11.181 - Opioid dependence with opioid-induced sexual dysfunction</option>
                            <option value="F11.182">F11.182 - Opioid dependence with opioid-induced sleep disorder</option>
                            <option value="F11.188">F11.188 - Opioid dependence with other opioid-induced disorder</option>
                            <option value="F11.19">F11.19 - Opioid dependence with unspecified opioid-induced disorder</option>
                            <option value="F11.9">F11.9 - Opioid use, unspecified, complicated</option>
                            <option value="F11.92">F11.92 - Opioid use, unspecified with intoxication</option>
                            <option value="F11.920">F11.920 - Opioid use, unspecified with intoxication, uncomplicated</option>
                            <option value="F11.921">F11.921 - Opioid use, unspecified with intoxication delirium</option>
                            <option value="F11.922">F11.922 - Opioid use, unspecified with intoxication with perceptual disturbance</option>
                            <option value="F11.929">F11.929 - Opioid use, unspecified with intoxication, unspecified</option>
                            <option value="F11.93">F11.93 - Opioid use, unspecified with withdrawal</option>
                            <option value="F11.94">F11.94 - Opioid use, unspecified with opioid-induced mood disorder</option>
                            <option value="F11.95">F11.95 - Opioid use, unspecified with opioid-induced psychotic disorder</option>
                            <option value="F11.950">F11.950 - Opioid use, unspecified with opioid-induced psychotic disorder with delusions</option>
                            <option value="F11.951">F11.951 - Opioid use, unspecified with opioid-induced psychotic disorder with hallucinations</option>
                            <option value="F11.959">F11.959 - Opioid use, unspecified with opioid-induced psychotic disorder, unspecified</option>
                            <option value="F11.98">F11.98 - Opioid use, unspecified with other specified opioid-induced disorder</option>
                            <option value="F11.981">F11.981 - Opioid use, unspecified with opioid-induced sexual dysfunction</option>
                            <option value="F11.982">F11.982 - Opioid use, unspecified with opioid-induced sleep disorder</option>
                            <option value="F11.988">F11.988 - Opioid use, unspecified with other opioid-induced disorder</option>
                            <option value="F11.99">F11.99 - Opioid use, unspecified with unspecified opioid-induced disorder</option>
                            <option value="F12.0">F12.0 - Cannabis abuse</option>
                            <option value="F12.00">F12.00 - Cannabis abuse, uncomplicated</option>
                            <option value="F12.02">F12.02 - Cannabis abuse with intoxication</option>
                            <option value="F12.020">F12.020 - Cannabis abuse with intoxication, uncomplicated</option>
                            <option value="F12.021">F12.021 - Cannabis abuse with intoxication delirium</option>
                            <option value="F12.022">F12.022 - Cannabis abuse with intoxication with perceptual disturbance</option>
                            <option value="F12.029">F12.029 - Cannabis abuse with intoxication, unspecified</option>
                            <option value="F12.05">F12.05 - Cannabis abuse with psychotic disorder</option>
                            <option value="F12.050">F12.050 - Cannabis abuse with psychotic disorder with delusions</option>
                            <option value="F12.051">F12.051 - Cannabis abuse with psychotic disorder with hallucinations</option>
                            <option value="F12.059">F12.059 - Cannabis abuse with psychotic disorder, unspecified</option>
                            <option value="F12.08">F12.08 - Cannabis abuse with other cannabis-induced disorder</option>
                            <option value="F12.080">F12.080 - Cannabis abuse with cannabis-induced anxiety disorder</option>
                            <option value="F12.088">F12.088 - Cannabis abuse with other cannabis-induced disorder</option>
                            <option value="F12.09">F12.09 - Cannabis abuse with unspecified cannibis-induced disorder</option>
                            <option value="F12.1">F12.1 - Cannabis dependence</option>
                            <option value="F12.10">F12.10 - Cannabis dependence, uncomplicated</option>
                            <option value="F12.11">F12.11 - Cannabis dependence, in remission</option>
                            <option value="F12.12">F12.12 - Cannabis dependence with intoxication</option>
                            <option value="F12.120">F12.120 - Cannabis dependence with intoxication, uncomplicated</option>
                            <option value="F12.121">F12.121 - Cannabis dependence with intoxication delirium</option>
                            <option value="F12.122">F12.122 - Cannabis dependence with intoxication with perceptual disturbance</option>
                            <option value="F12.129">F12.129 - Cannabis dependence with intoxication, unspecified</option>
                            <option value="F12.15">F12.15 - Cannabis dependence with psychotic disorder</option>
                            <option value="F12.150">F12.150 - Cannabis dependence with psychotic disorder with delusions</option>
                            <option value="F12.151">F12.151 - Cannabis dependence with psychotic disorder with hallucinations</option>
                            <option value="F12.159">F12.159 - Cannabis dependence with psychotic disorder, unspecified</option>
                            <option value="F12.18">F12.18 - Cannabis dependence with other cannabis-induced disorder</option>
                            <option value="F12.180">F12.180 - Cannabis dependence with cannabis-induced anxiety disorder</option>
                            <option value="F12.188">F12.188 - Cannabis dependence with other cannabis-induced disorder</option>
                            <option value="F12.19">F12.19 - Cannabis dependence with unspecified cannibis-induced disorder</option>
                            <option value="F12.9">F12.9 - Cannabis use, unspecified, complicated</option>
                            <option value="F12.92">F12.92 - Cannabis use, unspecified with intoxication</option>
                            <option value="F12.920">F12.920 - Cannabis use, unspecified with intoxication, uncomplicated</option>
                            <option value="F12.921">F12.921 - Cannabis use, unspecified with intoxication delirium</option>
                            <option value="F12.922">F12.922 - Cannabis use, unspecified with intoxication with perceptual disturbance</option>
                            <option value="F12.929">F12.929 - Cannabis use, unspecified with intoxication, unspecified</option>
                            <option value="F12.95">F12.95 - Cannabis use, unspecified with psychotic disorder</option>
                            <option value="F12.950">F12.950 - Cannabis use, unspecified with psychotic disorder with delusions</option>
                            <option value="F12.951">F12.951 - Cannabis use, unspecified with psychotic disorder with hallucinations</option>
                            <option value="F12.959">F12.959 - Cannabis use, unspecified with psychotic disorder, unspecified</option>
                            <option value="F12.98">F12.98 - Cannabis use, unspecified with other cannabis-induced disorder</option>
                            <option value="F12.980">F12.980 - Cannabis use, unspecified with anxiety disorder</option>
                            <option value="F12.988">F12.988 - Cannabis use, unspecified with other cannabis-induced disorder</option>
                            <option value="F12.99">F12.99 - Cannabis use, unspecified with unspecified cannibis-induced disorder</option>
                            <option value="F13.0">F13.0 - Sedative, hypnotic or anxiolytic-related abuse</option>
                            <option value="F13.00">F13.00 - Sedative, hypnotic or anxiolytic abuse, uncomplicated</option>
                            <option value="F13.02">F13.02 - Sedative, hypnotic or anxiolytic abuse with intoxication</option>
                            <option value="F13.020">F13.020 - Sedative, hypnotic or anxiolytic abuse with intoxication, uncomplicated</option>
                            <option value="F13.021">F13.021 - Sedative, hypnotic or anxiolytic abuse with intoxication delirium</option>
                            <option value="F13.029">F13.029 - Sedative, hypnotic or anxiolytic abuse with intoxication, unspecified</option>
                            <option value="F13.04">F13.04 - Sedative, hypnotic or anxiolytic abuse with sedative, hypnotic or anxiolytic-induced mood disorder</option>
                            <option value="F13.05">F13.05 - Sedative, hypnotic or anxiolytic abuse with sedative, hypnotic or anxiolytic-induced psychotic disorde</option>
                            <option value="F13.050">F13.050 - Sedative, hypnotic or anxiolytic abuse with sedative, hypnotic or anxiolytic-induced psychotic disorde</option>
                            <option value="F13.051">F13.051 - Sedative, hypnotic or anxiolytic abuse with sedative, hypnotic or anxiolytic-induced psychotic disorde</option>
                            <option value="F13.059">F13.059 - Sedative, hypnotic or anxiolytic abuse with sedative, hypnotic or anxiolytic-induced psychotic disorde</option>
                            <option value="F13.08">F13.08 - Sedative, hypnotic or anxiolytic abuse with other sedative, hypnotic or anxiolytic-induced disorders</option>
                            <option value="F13.080">F13.080 - Sedative, hypnotic or anxiolytic abuse with sedative, hypnotic or anxiolytic-induced anxiety disorder</option>
                            <option value="F13.081">F13.081 - Sedative, hypnotic or anxiolytic abuse with sedative, hypnotic or anxiolytic-induced sexual dysfunctio</option>
                            <option value="F13.082">F13.082 - Sedative, hypnotic or anxiolytic abuse with sedative, hypnotic or anxiolytic-induced sleep disorder</option>
                            <option value="F13.088">F13.088 - Sedative, hypnotic or anxiolytic abuse with other sedative, hypnotic or anxiolytic-induced disorder</option>
                            <option value="F13.09">F13.09 - Sedative, hypnotic or anxiolytic abuse with unspecified sedative, hypnotic or anxiolytic-induced disor</option>
                            <option value="F13.1">F13.1 - Sedative, hypnotic or anxiolytic-related dependence</option>
                            <option value="F13.10">F13.10 - Sedative, hypnotic or anxiolytic dependence, uncomplicated</option>
                            <option value="F13.11">F13.11 - Sedative, hypnotic or anxiolytic dependence, in remission</option>
                            <option value="F13.12">F13.12 - Sedative, hypnotic or anxiolytic dependence with intoxication</option>
                            <option value="F13.120">F13.120 - Sedative, hypnotic or anxiolytic dependence with intoxication, uncomplicated</option>
                            <option value="F13.121">F13.121 - Sedative, hypnotic or anxiolytic dependence with intoxication delirium</option>
                            <option value="F13.129">F13.129 - Sedative, hypnotic or anxiolytic dependence with intoxication, unspecified</option>
                            <option value="F13.13">F13.13 - Sedative, hypnotic or anxiolytic dependence with withdrawal</option>
                            <option value="F13.130">F13.130 - Sedative, hypnotic or anxiolytic dependence with withdrawal, uncomplicated</option>
                            <option value="F13.131">F13.131 - Sedative, hypnotic or anxiolytic dependence with withdrawal delirium</option>
                            <option value="F13.132">F13.132 - Sedative, hypnotic or anxiolytic dependence with withdrawal with perceptual disturbance</option>
                            <option value="F13.139">F13.139 - Sedative, hypnotic or anxiolytic dependence with withdrawal, unspecified</option>
                            <option value="F13.14">F13.14 - Sedative, hypnotic or anxiolytic dependence with sedative, hypnotic or anxiolytic-induced mood disorde</option>
                            <option value="F13.15">F13.15 - Sedative, hypnotic or anxiolytic dependence with sedative, hypnotic or anxiolytic-induced psychotic di</option>
                            <option value="F13.150">F13.150 - Sedative, hypnotic or anxiolytic dependence with sedative, hypnotic or anxiolytic-induced psychotic di</option>
                            <option value="F13.151">F13.151 - Sedative, hypnotic or anxiolytic dependence with sedative, hypnotic or anxiolytic-induced psychotic di</option>
                            <option value="F13.159">F13.159 - Sedative, hypnotic or anxiolytic dependence with sedative, hypnotic or anxiolytic-induced psychotic di</option>
                            <option value="F13.16">F13.16 - Sedative, hypnotic or anxiolytic dependence with sedative, hypnotic or anxiolytic persisting amnestic</option>
                            <option value="F13.17">F13.17 - Sedative, hypnotic or anxiolytic dependence with sedative, hypnotic or anxiolytic persisting dementia</option>
                            <option value="F13.18">F13.18 - Sedative, hypnotic or anxiolytic dependence with other sedative, hypnotic or anxiolytic-induced disord</option>
                            <option value="F13.180">F13.180 - Sedative, hypnotic or anxiolytic dependence with sedative, hypnotic or anxiolytic-induced anxiety diso</option>
                            <option value="F13.181">F13.181 - Sedative, hypnotic or anxiolytic dependence with sedative, hypnotic or anxiolytic-induced sexual dysfu</option>
                            <option value="F13.182">F13.182 - Sedative, hypnotic or anxiolytic dependence with sedative, hypnotic or anxiolytic-induced sleep disord</option>
                            <option value="F13.188">F13.188 - Sedative, hypnotic or anxiolytic dependence with other sedative, hypnotic or anxiolytic-induced disord</option>
                            <option value="F13.19">F13.19 - Sedative, hypnotic or anxiolytic dependence with unspecified sedative, hypnotic or anxiolytic-induced</option>
                            <option value="F13.9">F13.9 - Sedative, hypnotic or anxiolytic-related, unspecified, complicated</option>
                            <option value="F13.92">F13.92 - Sedative, hypnotic or anxiolytic use, unspecified with intoxication</option>
                            <option value="F13.920">F13.920 - Sedative, hypnotic or anxiolytic use, unspecified with intoxication, uncomplicated</option>
                            <option value="F13.921">F13.921 - Sedative, hypnotic or anxiolytic use, unspecified with intoxication delirium</option>
                            <option value="F13.929">F13.929 - Sedative, hypnotic or anxiolytic use, unspecified with intoxication, unspecified</option>
                            <option value="F13.93">F13.93 - Sedative, hypnotic or anxiolytic use, unspecified with withdrawal</option>
                            <option value="F13.94">F13.94 - Sedative, hypnotic or anxiolytic use, unspecified with sedative, hypnotic or anxiolytic-induced mood d</option>
                            <option value="F13.95">F13.95 - Sedative, hypnotic or anxiolytic use, unspecified with sedative, hypnotic or anxiolytic-induced psycho</option>
                            <option value="F13.950">F13.950 - Sedative, hypnotic or anxiolytic use, unspecified with sedative, hypnotic or anxiolytic-induced psycho</option>
                            <option value="F13.951">F13.951 - Sedative, hypnotic or anxiolytic use, unspecified with sedative, hypnotic or anxiolytic-induced psycho</option>
                            <option value="F13.959">F13.959 - Sedative, hypnotic or anxiolytic use, unspecified with sedative, hypnotic or anxiolytic-induced psycho</option>
                            <option value="F13.96">F13.96 - Sedative, hypnotic or anxiolytic use, unspecified with sedative, hypnotic or anxiolytic persisting amn</option>
                            <option value="F13.97">F13.97 - Sedative, hypnotic or anxiolytic use, unspecified with sedative, hypnotic or anxiolytic persisting dem</option>
                            <option value="F13.98">F13.98 - Sedative, hypnotic or anxiolytic use, unspecified with other sedative, hypnotic or anxiolytic-induced</option>
                            <option value="F13.980">F13.980 - Sedative, hypnotic or anxiolytic use, unspecified with sedative, hypnotic or anxiolytic-induced anxiet</option>
                            <option value="F13.981">F13.981 - Sedative, hypnotic or anxiolytic use, unspecified with sedative, hypnotic or anxiolytic-induced sexual</option>
                            <option value="F13.982">F13.982 - Sedative, hypnotic or anxiolytic use, unspecified with sedative, hypnotic or anxiolytic-induced sleep</option>
                            <option value="F13.988">F13.988 - Sedative, hypnotic or anxiolytic use, unspecified with other sedative, hypnotic or anxiolytic-induced</option>
                            <option value="F13.99">F13.99 - Sedative, hypnotic or anxiolytic use, unspecified with unspecified sedative, hypnotic or anxiolytic-in</option>
                            <option value="F14.0">F14.0 - Cocaine abuse</option>
                            <option value="F14.00">F14.00 - Cocaine abuse, uncomplicated</option>
                            <option value="F14.02">F14.02 - Cocaine abuse with intoxication</option>
                            <option value="F14.020">F14.020 - Cocaine abuse with intoxication, uncomplicated</option>
                            <option value="F14.021">F14.021 - Cocaine abuse with intoxication with delirium</option>
                            <option value="F14.022">F14.022 - Cocaine abuse with intoxication with perceptual disturbance</option>
                            <option value="F14.029">F14.029 - Cocaine abuse with intoxication, unspecified</option>
                            <option value="F14.04">F14.04 - Cocaine abuse with cocaine-induced mood disorder</option>
                            <option value="F14.05">F14.05 - Cocaine abuse with cocaine-induced psychotic disorder</option>
                            <option value="F14.050">F14.050 - Cocaine abuse with cocaine-induced psychotic disorder with delusions</option>
                            <option value="F14.051">F14.051 - Cocaine abuse with cocaine-induced psychotic disorder with hallucinations</option>
                            <option value="F14.059">F14.059 - Cocaine abuse with cocaine-induced psychotic disorder, unspecified</option>
                            <option value="F14.08">F14.08 - Cocaine abuse with other cocaine-induced disorder</option>
                            <option value="F14.080">F14.080 - Cocaine abuse with cocaine-induced anxiety disorder</option>
                            <option value="F14.081">F14.081 - Cocaine abuse with cocaine-induced sexual dysfunction</option>
                            <option value="F14.082">F14.082 - Cocaine abuse with cocaine-induced sleep disorder</option>
                            <option value="F14.088">F14.088 - Cocaine abuse with other cocaine-induced disorder</option>
                            <option value="F14.09">F14.09 - Cocaine abuse with unspecified cocaine-induced disorder</option>
                            <option value="F14.1">F14.1 - Cocaine dependence</option>
                            <option value="F14.10">F14.10 - Cocaine dependence, uncomplicated</option>
                            <option value="F14.11">F14.11 - Cocaine dependence, in remission</option>
                            <option value="F14.12">F14.12 - Cocaine dependence with intoxication</option>
                            <option value="F14.120">F14.120 - Cocaine dependence with intoxication, uncomplicated</option>
                            <option value="F14.121">F14.121 - Cocaine dependence with intoxication delirium</option>
                            <option value="F14.122">F14.122 - Cocaine dependence with intoxication with perceptual disturbance</option>
                            <option value="F14.129">F14.129 - Cocaine dependence with intoxication, unspecified</option>
                            <option value="F14.13">F14.13 - Cocaine dependence with withdrawal</option>
                            <option value="F14.14">F14.14 - Cocaine dependence with cocaine-induced mood disorder</option>
                            <option value="F14.15">F14.15 - Cocaine dependence with cocaine-induced psychotic disorder</option>
                            <option value="F14.150">F14.150 - Cocaine dependence with cocaine-induced psychotic disorder with delusions</option>
                            <option value="F14.151">F14.151 - Cocaine dependence with cocaine-induced psychotic disorder with hallucinations</option>
                            <option value="F14.159">F14.159 - Cocaine dependence with cocaine-induced psychotic disorder, unspecified</option>
                            <option value="F14.18">F14.18 - Cocaine dependence with other cocaine-induced disorder</option>
                            <option value="F14.180">F14.180 - Cocaine dependence with cocaine-induced anxiety diosrder</option>
                            <option value="F14.181">F14.181 - Cocaine dependence with cocaine-induced sexual dysfunction</option>
                            <option value="F14.182">F14.182 - Cocaine dependence with cocaine-induced sleep disorder</option>
                            <option value="F14.188">F14.188 - Cocaine dependence with other cocaine-induced disorder</option>
                            <option value="F14.19">F14.19 - Cocaine dependence with unspecified cocaine-induced disorder</option>
                            <option value="F14.9">F14.9 - Cocaine use, unspecified, complicated</option>
                            <option value="F14.92">F14.92 - Cocaine use, unspecified with intoxication</option>
                            <option value="F14.920">F14.920 - Cocaine use, unspecified with intoxication, uncomplicated</option>
                            <option value="F14.921">F14.921 - Cocaine use, unspecified with intoxication delirium</option>
                            <option value="F14.922">F14.922 - Cocaine use, unspecified with intoxication with perceptual disturbance</option>
                            <option value="F14.929">F14.929 - Cocaine use, unspecified with intoxication, unspecified</option>
                            <option value="F14.94">F14.94 - Cocaine use, unspecified with cocaine-induced mood disorder</option>
                            <option value="F14.95">F14.95 - Cocaine use, unspecified with cocaine-induced psychotic disorder</option>
                            <option value="F14.950">F14.950 - Cocaine use, unspecified with cocaine-induced psychotic disorder with delusions</option>
                            <option value="F14.951">F14.951 - Cocaine use, unspecified with cocaine-induced psychotic disorder with hallucinations</option>
                            <option value="F14.959">F14.959 - Cocaine use, unspecified with cocaine-induced psychotic disorder, unspecified</option>
                            <option value="F14.98">F14.98 - Cocaine use, unspecified with other specified cocaine-induced disorder</option>
                            <option value="F14.980">F14.980 - Cocaine use, unspecified with cocaine-induced anxiety disorder</option>
                            <option value="F14.981">F14.981 - Cocaine use, unspecified with cocaine-induced sexual dysfunction</option>
                            <option value="F14.982">F14.982 - Cocaine use, unspecified with cocaine-induced sleep disorder</option>
                            <option value="F14.988">F14.988 - Cocaine use, unspecified with other cocaine-induced disorder</option>
                            <option value="F14.99">F14.99 - Cocaine use, unspecified with unspecified cocaine-induced disorder</option>
                            <option value="F15.0">F15.0 - Other stimulant abuse</option>
                            <option value="F15.00">F15.00 - Other stimulant abuse, uncomplicated</option>
                            <option value="F15.02">F15.02 - Other stimulant abuse with intoxication</option>
                            <option value="F15.020">F15.020 - Other stimulant abuse with intoxication, uncomplicated</option>
                            <option value="F15.021">F15.021 - Other stimulant abuse with intoxication delirium</option>
                            <option value="F15.022">F15.022 - Other stimulant abuse with intoxication with perceptual disturbance</option>
                            <option value="F15.029">F15.029 - Other stimulant abuse with intoxication, unspecified</option>
                            <option value="F15.04">F15.04 - Other stimulant abuse with stimulant-induced mood disorder</option>
                            <option value="F15.05">F15.05 - Other stimulant abuse with stimulant-induced psychotic disorder</option>
                            <option value="F15.050">F15.050 - Other stimulant abuse with stimulant-induced psychotic disorder with delusions</option>
                            <option value="F15.051">F15.051 - Other stimulant abuse with stimulant-induced psychotic disorder with hallucinations</option>
                            <option value="F15.059">F15.059 - Other stimulant abuse with stimulant-induced psychotic disorder, unspecified</option>
                            <option value="F15.08">F15.08 - Other stimulant abuse with other stimulant-induced disorder</option>
                            <option value="F15.080">F15.080 - Other stimulant abuse with stimulant-induced anxiety disorder</option>
                            <option value="F15.081">F15.081 - Other stimulant abuse with stimulant-induced sexual dysfunction</option>
                            <option value="F15.082">F15.082 - Other stimulant abuse with stimulant-induced sleep disorder</option>
                            <option value="F15.088">F15.088 - Other stimulant abuse with other stimulant-induced disorder</option>
                            <option value="F15.09">F15.09 - Other stimulant abuse with unspecified stimulant-induced disorder</option>
                            <option value="F15.1">F15.1 - Other stimulant dependence</option>
                            <option value="F15.10">F15.10 - Other stimulant dependence, uncomplicated</option>
                            <option value="F15.11">F15.11 - Other stimulant dependence, in remission</option>
                            <option value="F15.12">F15.12 - Other stimulant dependence with intoxication</option>
                            <option value="F15.120">F15.120 - Other stimulant dependence with intoxication, uncomplicated</option>
                            <option value="F15.121">F15.121 - Other stimulant dependence with intoxication delirium</option>
                            <option value="F15.122">F15.122 - Other stimulant dependence with intoxication with perceptual disturbance</option>
                            <option value="F15.129">F15.129 - Other stimulant dependence with intoxication, unspecified</option>
                            <option value="F15.13">F15.13 - Other stimulant dependence with withdrawal</option>
                            <option value="F15.14">F15.14 - Other stimulant dependence with stimulant-induced mood disorder</option>
                            <option value="F15.15">F15.15 - Other stimulant dependence with stimulant-induced psychotic disorder</option>
                            <option value="F15.150">F15.150 - Other stimulant dependence with stimulant-induced psychotic disorder with delusions</option>
                            <option value="F15.151">F15.151 - Other stimulant dependence with stimulant-induced psychotic disorder with hallucinations</option>
                            <option value="F15.159">F15.159 - Other stimulant dependence with stimulant-induced psychotic disorder, unspecified</option>
                            <option value="F15.18">F15.18 - Other stimulant dependence with other stimulant-induced disorder</option>
                            <option value="F15.180">F15.180 - Other stimulant dependence with stimulant-induced anxiety disorder</option>
                            <option value="F15.181">F15.181 - Other stimulant dependence with stimulant-induced sexual dysfunction</option>
                            <option value="F15.182">F15.182 - Other stimulant dependence with stimulant-induced sleep disorder</option>
                            <option value="F15.188">F15.188 - Other stimulant dependence with other stimulant-induced disorder</option>
                            <option value="F15.19">F15.19 - Other stimulant dependence with unspecified stimulant-induced disorder</option>
                            <option value="F15.5">F15.5 - Other stimulants use, including caffeine with psychotic disorder </option>
                            <option value="F15.9">F15.9 - Other stimulant use, unspecified, complicated</option>
                            <option value="F15.92">F15.92 - Other stimulant use, unspecified with intoxication</option>
                            <option value="F15.920">F15.920 - Other stimulant use, unspecified with intoxication, uncomplicated</option>
                            <option value="F15.921">F15.921 - Other stimulant use, unspecified with intoxication delirium</option>
                            <option value="F15.922">F15.922 - Other stimulant use, unspecified with intoxication with perceptual disturbance</option>
                            <option value="F15.929">F15.929 - Other stimulant use, unspecified with intoxication, unspecified</option>
                            <option value="F15.93">F15.93 - Other stimulant use, unspecified with withdrawal</option>
                            <option value="F15.94">F15.94 - Other stimulant use, unspecified with stimulant-induced mood disorder</option>
                            <option value="F15.95">F15.95 - Other stimulant use, unspecified with stimulant-induced psychotic disorder</option>
                            <option value="F15.950">F15.950 - Other stimulant use, unspecified with stimulant-induced psychotic disorder with delusions</option>
                            <option value="F15.951">F15.951 - Other stimulant use, unspecified with stimulant-induced psychotic disorder with hallucinations</option>
                            <option value="F15.959">F15.959 - Other stimulant use, unspecified with stimulant-induced psychotic disorder, unspecified</option>
                            <option value="F15.98">F15.98 - Other stimulant use, unspecified with other stimulant-induced disorder</option>
                            <option value="F15.980">F15.980 - Other stimulant use, unspecified with stimulant-induced anxiety disorder</option>
                            <option value="F15.981">F15.981 - Other stimulant use, unspecified with stimulant-induced sexual dysfunction</option>
                            <option value="F15.982">F15.982 - Other stimulant use, unspecified with stimulant-induced sleep disorder</option>
                            <option value="F15.988">F15.988 - Other stimulant use, unspecified with other stimulant-induced disorder</option>
                            <option value="F15.99">F15.99 - Other stimulant use, unspecified with unspecified stimulant-induced disorder</option>
                            <option value="F16.0">F16.0 - Hallucinogen abuse</option>
                            <option value="F16.00">F16.00 - Hallucinogen abuse, uncomplicated</option>
                            <option value="F16.02">F16.02 - Hallucinogen abuse with intoxication</option>
                            <option value="F16.020">F16.020 - Hallucinogen abuse with intoxication, uncomplicated</option>
                            <option value="F16.021">F16.021 - Hallucinogen abuse with intoxication with delirium</option>
                            <option value="F16.029">F16.029 - Hallucinogen abuse with intoxication, unspecified</option>
                            <option value="F16.04">F16.04 - Hallucinogen abuse with hallucinogen-induced mood disorder</option>
                            <option value="F16.05">F16.05 - Hallucinogen abuse with hallucinogen-induced psychotic disorder</option>
                            <option value="F16.050">F16.050 - Hallucinogen abuse with hallucinogen-induced psychotic disorder with delusions</option>
                            <option value="F16.051">F16.051 - Hallucinogen abuse with hallucinogen-induced psychotic disorder with hallucinations</option>
                            <option value="F16.059">F16.059 - Hallucinogen abuse with hallucinogen-induced psychotic disorder, unspecified</option>
                            <option value="F16.08">F16.08 - Hallucinogen abuse with other hallucinogen-induced disorder</option>
                            <option value="F16.080">F16.080 - Hallucinogen abuse with hallucinogen-induced anxiety disorder</option>
                            <option value="F16.083">F16.083 - Hallucinogen abuse with hallucinogen persisting perception disorder (flashbacks)</option>
                            <option value="F16.088">F16.088 - Hallucinogen abuse with other hallucinogen-induced disorder</option>
                            <option value="F16.09">F16.09 - Hallucinogen abuse with unspecified hallucinogen-induced disorder</option>
                            <option value="F16.1">F16.1 - Hallucinogen dependence</option>
                            <option value="F16.10">F16.10 - Hallucinogen dependence, uncomplicated</option>
                            <option value="F16.11">F16.11 - Hallucinogen dependence, in remission</option>
                            <option value="F16.12">F16.12 - Hallucinogen dependence with intoxication</option>
                            <option value="F16.120">F16.120 - Hallucinogen dependence with intoxication, uncomplicated</option>
                            <option value="F16.121">F16.121 - Hallucinogen dependence with intoxication with delirium</option>
                            <option value="F16.129">F16.129 - Hallucinogen dependence with intoxication, unspecified</option>
                            <option value="F16.14">F16.14 - Hallucinogen dependence with hallucinogen-induced mood disorder</option>
                            <option value="F16.15">F16.15 - Hallucinogen dependence with hallucinogen-induced psychotic disorder</option>
                            <option value="F16.150">F16.150 - Hallucinogen dependence with hallucinogen-induced psychotic disorder with delusions</option>
                            <option value="F16.151">F16.151 - Hallucinogen dependence with hallucinogen-induced psychotic disorder with hallucinations</option>
                            <option value="F16.159">F16.159 - Hallucinogen dependence with hallucinogen-induced psychotic disorder, unspecified</option>
                            <option value="F16.18">F16.18 - Hallucinogen dependence with other hallucinogen-induced disorder</option>
                            <option value="F16.180">F16.180 - Hallucinogen dependence with hallucinogen-induced anxiety disorder</option>
                            <option value="F16.183">F16.183 - Hallucinogen dependence with hallucinogen persisting perception disorder (flashbacks)</option>
                            <option value="F16.188">F16.188 - Hallucinogen dependence with other hallucinogen-induced disorder</option>
                            <option value="F16.19">F16.19 - Hallucinogen dependence with unspecified hallucinogen-induced disorder</option>
                            <option value="F16.9">F16.9 - Hallucinogen use, unspecified, complicated</option>
                            <option value="F16.90">F16.90 - Hallucinogen use, unspecified, uncomplicated</option>
                            <option value="F16.92">F16.92 - Hallucinogen use, unspecified with intoxication</option>
                            <option value="F16.920">F16.920 - Hallucinogen use, unspecified with intoxication, uncomplicated</option>
                            <option value="F16.921">F16.921 - Hallucinogen use, unspecified with intoxication with delirium</option>
                            <option value="F16.929">F16.929 - Hallucinogen use, unspecified with intoxication, unspecified</option>
                            <option value="F16.94">F16.94 - Hallucinogen use, unspecified with hallucinogen-induced mood disorder</option>
                            <option value="F16.95">F16.95 - Hallucinogen use, unspecified with hallucinogen-induced psychotic disorder</option>
                            <option value="F16.950">F16.950 - Hallucinogen use, unspecified with hallucinogen-induced psychotic disorder with delusions</option>
                            <option value="F16.951">F16.951 - Hallucinogen use, unspecified with hallucinogen-induced psychotic disorder with hallucinations</option>
                            <option value="F16.959">F16.959 - Hallucinogen use, unspecified with hallucinogen-induced psychotic disorder, unspecified</option>
                            <option value="F16.98">F16.98 - Hallucinogen use, unspecified with other specified hallucinogen-induced disorder</option>
                            <option value="F16.980">F16.980 - Hallucinogen use, unspecified with hallucinogen-induced anxiety disorder</option>
                            <option value="F16.983">F16.983 - Hallucinogen use, unspecified with hallucinogen persisting perception disorder (flashbacks)</option>
                            <option value="F16.988">F16.988 - Hallucinogen use, unspecified with other hallucinogen-induced disorder</option>
                            <option value="F16.99">F16.99 - Hallucinogen use, unspecified with unspecified hallucinogen-induced disorder</option>
                            <option value="F17.1">F17.1 - Nicotine dependence</option>
                            <option value="F17.10">F17.10 - Nicotine dependence, uncomplicated</option>
                            <option value="F17.11">F17.11 - Nicotine dependence, in remission</option>
                            <option value="F17.13">F17.13 - Nicotine dependence with withdrawal</option>
                            <option value="F17.18">F17.18 - Nicotine dependence with other nicotine-induced disorders</option>
                            <option value="F17.19">F17.19 - Nicotine dependence with unspecified nicotine-induced disorders</option>
                            <option value="F18.0">F18.0 - Inhalant abuse</option>
                            <option value="F18.00">F18.00 - Inhalant abuse, uncomplicated</option>
                            <option value="F18.02">F18.02 - Inhalant abuse with intoxication</option>
                            <option value="F18.020">F18.020 - Inhalant abuse with intoxication, uncomplicated</option>
                            <option value="F18.021">F18.021 - Inhalant abuse with intoxication delirium</option>
                            <option value="F18.029">F18.029 - Inhalant abuse with intoxication, unspecified</option>
                            <option value="F18.04">F18.04 - Inhalant abuse with inhalant-induced mood disorder</option>
                            <option value="F18.05">F18.05 - Inhalant abuse with inhalant-induced psychotic disorder</option>
                            <option value="F18.050">F18.050 - Inhalant abuse with inhalant-induced psychotic disorder with delusions</option>
                            <option value="F18.051">F18.051 - Inhalant abuse with inhalant-induced psychotic disorder with hallucinations</option>
                            <option value="F18.059">F18.059 - Inhalant abuse with inhalant-induced psychotic disorder, unspecified</option>
                            <option value="F18.07">F18.07 - Inhalant abuse with inhalant-induced dementia</option>
                            <option value="F18.08">F18.08 - Inhalant abuse with other inhalant-induced disorders</option>
                            <option value="F18.080">F18.080 - Inhalant abuse with inhalant-induced anxiety disorder</option>
                            <option value="F18.088">F18.088 - Inhalant abuse with other inhalant-induced disorder</option>
                            <option value="F18.09">F18.09 - Inhalant abuse with unspecified inhalant-induced disorder</option>
                            <option value="F18.1">F18.1 - Inhalant dependence</option>
                            <option value="F18.10">F18.10 - Inhalant dependence, uncomplicated</option>
                            <option value="F18.11">F18.11 - Inhalant dependence, in remission</option>
                            <option value="F18.12">F18.12 - Inhalant dependence with intoxication</option>
                            <option value="F18.120">F18.120 - Inhalant dependence with intoxication, uncomplicated</option>
                            <option value="F18.121">F18.121 - Inhalant dependence with intoxication delirium</option>
                            <option value="F18.129">F18.129 - Inhalant dependence with intoxication, unspecified</option>
                            <option value="F18.14">F18.14 - Inhalant dependence with inhalant-induced mood disorder</option>
                            <option value="F18.15">F18.15 - Inhalant dependence with inhalant-induced psychotic disorder</option>
                            <option value="F18.150">F18.150 - Inhalant dependence with inhalant-induced psychotic disorder with delusions</option>
                            <option value="F18.151">F18.151 - Inhalant dependence with inhalant-induced psychotic disorder with hallucinations</option>
                            <option value="F18.159">F18.159 - Inhalant dependence with inhalant-induced psychotic disorder, unspecified</option>
                            <option value="F18.17">F18.17 - Inhalant dependence with inhalant-induced dementia</option>
                            <option value="F18.18">F18.18 - Inhalant dependence with other inhalant-induced disorders</option>
                            <option value="F18.180">F18.180 - Inhalant dependence with inhalant-induced anxiety disorder</option>
                            <option value="F18.188">F18.188 - Inhalant dependence with other inhalant-induced disorder</option>
                            <option value="F18.19">F18.19 - Inhalant dependence with unspecified inhalant-induced disorder</option>
                            <option value="F18.9">F18.9 - Inhalant use, unspecified, complicated</option>
                            <option value="F18.92">F18.92 - Inhalant use, unspecified with intoxication</option>
                            <option value="F18.920">F18.920 - Inhalant use, unspecified with intoxication, uncomplicated</option>
                            <option value="F18.921">F18.921 - Inhalant use, unspecified with intoxication with delirium</option>
                            <option value="F18.929">F18.929 - Inhalant use, unspecified with intoxication, unspecified</option>
                            <option value="F18.94">F18.94 - Inhalant use, unspecified with inhalant-induced mood disorder</option>
                            <option value="F18.95">F18.95 - Inhalant use, unspecified with inhalant-induced psychotic disorder</option>
                            <option value="F18.950">F18.950 - Inhalant use, unspecified with inhalant-induced psychotic disorder with delusions</option>
                            <option value="F18.951">F18.951 - Inhalant use, unspecified with inhalant-induced psychotic disorder with hallucinations</option>
                            <option value="F18.959">F18.959 - Inhalant use, unspecified with inhalant-induced psychotic disorder, unspecified</option>
                            <option value="F18.97">F18.97 - Inhalant use, unspecified with inhalant-induced dementia</option>
                            <option value="F18.98">F18.98 - Inhalant use, unspecified with other inhalant-induced disorders</option>
                            <option value="F18.980">F18.980 - Inhalant use, unspecified with inhalant-induced anxiety disorder</option>
                            <option value="F18.988">F18.988 - Inhalant use, unspecified with other inhalant-induced disorder</option>
                            <option value="F18.99">F18.99 - Inhalant use, unspecified with unspecified inhalant-induced disorder</option>
                            <option value="F19.0">F19.0 - Other psychoactive substance abuse</option>
                            <option value="F19.00">F19.00 - Other psychoactive substance abuse, uncomplicated</option>
                            <option value="F19.02">F19.02 - Other psychoactive substance abuse with intoxication</option>
                            <option value="F19.020">F19.020 - Other psychoactive substance abuse with intoxication, uncomplicated</option>
                            <option value="F19.021">F19.021 - Other psychoactive substance abuse with intoxication with delirium</option>
                            <option value="F19.022">F19.022 - Other psychoactive substance abuse with intoxication with perceptual disturbances</option>
                            <option value="F19.029">F19.029 - Other psychoactive substance abuse with intoxication, unspecified</option>
                            <option value="F19.04">F19.04 - Other psychoactive substance abuse with psychoactive substance-induced mood disorder</option>
                            <option value="F19.05">F19.05 - Other psychoactive substance abuse with psychoactive substance-induced psychotic disorder</option>
                            <option value="F19.050">F19.050 - Other psychoactive substance abuse with psychoactive substance-induced psychotic disorder with delusio</option>
                            <option value="F19.051">F19.051 - Other psychoactive substance abuse with psychoactive substance-induced psychotic disorder with halluci</option>
                            <option value="F19.059">F19.059 - Other psychoactive substance abuse with psychoactive substance-induced psychotic disorder, unspecified</option>
                            <option value="F19.06">F19.06 - Other psychoactive substance abuse with psychoactive substance-induced amnestic disorder</option>
                            <option value="F19.07">F19.07 - Other psychoactive substance abuse with psychoactive substance-induced dementia</option>
                            <option value="F19.08">F19.08 - Other psychoactive substance abuse with other psychoactive substance-induced disorders</option>
                            <option value="F19.080">F19.080 - Other psychoactive substance abuse with psychoactive substance-induced anxiety disorder</option>
                            <option value="F19.081">F19.081 - Other psychoactive substance abuse with psychoactive substance-induced sexual dysfunction</option>
                            <option value="F19.082">F19.082 - Other psychoactive substance abuse with psychoactive substance-induced sleep disorder</option>
                            <option value="F19.088">F19.088 - Other psychoactive substance abuse with other psychoactive substance-induced disorder</option>
                            <option value="F19.09">F19.09 - Other psychoactive substance abuse with unspecified psychoactive substance-induced disorder</option>
                            <option value="F19.1">F19.1 - Other psychoactive substance dependence</option>
                            <option value="F19.10">F19.10 - Other psychoactive substance dependence, uncomplicated</option>
                            <option value="F19.11">F19.11 - Other psychoactive substance dependence, in remission</option>
                            <option value="F19.12">F19.12 - Other psychoactive substance dependence with intoxication</option>
                            <option value="F19.120">F19.120 - Other psychoactive substance dependence with intoxication, uncomplicated</option>
                            <option value="F19.121">F19.121 - Other psychoactive substance dependence with intoxication delirium</option>
                            <option value="F19.122">F19.122 - Other psychoactive substance dependence with intoxication with perceptual disturbance</option>
                            <option value="F19.129">F19.129 - Other psychoactive substance dependence with intoxication, unspecified</option>
                            <option value="F19.13">F19.13 - Other psychoactive substance dependence with withdrawal</option>
                            <option value="F19.14">F19.14 - Other psychoactive substance dependence with psychoactive substance-induced mood disorder</option>
                            <option value="F19.15">F19.15 - Other psychoactive substance dependence with psychoactive substance-induced psychotic disorder</option>
                            <option value="F19.150">F19.150 - Other psychoactive substance dependence with psychoactive substance-induced psychotic disorder with de</option>
                            <option value="F19.151">F19.151 - Other psychoactive substance dependence with psychoactive substance-induced psychotic disorder with ha</option>
                            <option value="F19.159">F19.159 - Other psychoactive substance dependence with psychoactive substance-induced psychotic disorder, unspec</option>
                            <option value="F19.16">F19.16 - Other psychoactive substance dependence with psychoactive substance-induced amnestic disorder</option>
                            <option value="F19.17">F19.17 - Other psychoactive substance dependence with psychoactive substance-induced dementia</option>
                            <option value="F19.18">F19.18 - Other psychoactive substance dependence with other psychoactive substance-induced disorders</option>
                            <option value="F19.180">F19.180 - Other psychoactive substance dependence with psychoactive substance-induced anxiety disorder</option>
                            <option value="F19.181">F19.181 - Other psychoactive substance dependence with psychoactive substance-induced sexual dysfunction</option>
                            <option value="F19.182">F19.182 - Other psychoactive substance dependence with psychoactive substance-induced sleep disorder</option>
                            <option value="F19.188">F19.188 - Other psychoactive substance dependence with other psychoactive substance-induced disorder</option>
                            <option value="F19.19">F19.19 - Other psychoactive substance dependence with unspecified psychoactive substance-induced disorder</option>
                            <option value="F19.5">F19.5 - Other psychoactive substances; misuse of drugs NOS: harmful use</option>
                            <option value="F19.9">F19.9 - Other psychoactive substance use, unspecified, complicated</option>
                            <option value="F19.92">F19.92 - Other psychoactive substance use, unspecified with intoxication</option>
                            <option value="F19.920">F19.920 - Other psychoactive substance use, unspecified with intoxication, uncomplicated</option>
                            <option value="F19.921">F19.921 - Other psychoactive substance use, unspecified with intoxication with delirium</option>
                            <option value="F19.922">F19.922 - Other psychoactive substance use, unspecified with intoxication with perceptual disturbance</option>
                            <option value="F19.929">F19.929 - Other psychoactive substance use, unspecified with intoxication, unspecified</option>
                            <option value="F19.93">F19.93 - Other psychoactive substance use, unspecified with withdrawal</option>
                            <option value="F19.94">F19.94 - Other psychoactive substance use, unspecified with psychoactive substance-induced mood disorder</option>
                            <option value="F19.95">F19.95 - Other psychoactive substance use, unspecified with psychoactive substance-induced psychotic disorder</option>
                            <option value="F19.950">F19.950 - Other psychoactive substance use, unspecified with psychoactive substance-induced psychotic disorder w</option>
                            <option value="F19.951">F19.951 - Other psychoactive substance use, unspecified with psychoactive substance-induced psychotic disorder w</option>
                            <option value="F19.959">F19.959 - Other psychoactive substance use, unspecified with psychoactive substance-induced psychotic disorder,</option>
                            <option value="F19.96">F19.96 - Other psychoactive substance use, unspecified with psychoactive substance-induced amnestic disorder</option>
                            <option value="F19.97">F19.97 - Other psychoactive substance use, unspecified with psychoactive substance-induced dementia</option>
                            <option value="F19.98">F19.98 - Other psychoactive substance use, unspecified with other psychoactive substance-induced disorders</option>
                            <option value="F19.980">F19.980 - Other psychoactive substance use, unspecified with psychoactive substance-induced anxiety disorder</option>
                            <option value="F19.981">F19.981 - Other psychoactive substance use, unspecified with psychoactive substance-induced sexual dysfunction</option>
                            <option value="F19.982">F19.982 - Other psychoactive substance use, unspecified with psychoactive substance-induced sleep disorder</option>
                            <option value="F19.988">F19.988 - Other psychoactive substance use, unspecified with other psychoactive substance-induced disorder</option>
                            <option value="F19.99">F19.99 - Other psychoactive substance use, unspecified with unspecified psychoactive substance-induced disorder</option>
                            <option value="F20.0">F20.0 - Paranoid schizophrenia</option>
                            <option value="F20.1">F20.1 - Disorganized schizophrenia</option>
                            <option value="F20.2">F20.2 - Catatonic schizophrenia</option>
                            <option value="F20.3">F20.3 - Undifferentiated schizophrenia</option>
                            <option value="F20.4">F20.4 - Post-schizophrenic depression</option>
                            <option value="F20.5">F20.5 - Residual schizophrenia</option>
                            <option value="F20.6">F20.6 - Simple schizophrenia</option>
                            <option value="F20.8">F20.8 - Other schizophrenia</option>
                            <option value="F20.81">F20.81 - Schizophreniform disorder</option>
                            <option value="F20.89">F20.89 - Other schizophrenia</option>
                            <option value="F20.9">F20.9 - Schizophrenia, unspecified</option>
                            <option value="F22.0">F22.0 - Delusional disorder</option>
                            <option value="F22.8">F22.8 - Other persistent delusional disorders</option>
                            <option value="F22.9">F22.9 - Persistent delusional disorder, unspecified</option>
                            <option value="F23.0">F23.0 - Acute polymorphic psychotic disorder without symptoms of schizophrenia</option>
                            <option value="F23.1">F23.1 - Acute polymorphic psychotic disorder with symptoms of schizophrenia</option>
                            <option value="F23.2">F23.2 - Acute schizophrenia-like psychotic disorder</option>
                            <option value="F23.3">F23.3 - Other acute predominantly delusional psychotic disorders</option>
                            <option value="F23.8">F23.8 - Other acute and transient psychotic disorders</option>
                            <option value="F23.9">F23.9 - Acute and transient psychotic disorder, unspecified</option>
                            <option value="F25.0">F25.0 - Schizoaffective disorder, bipolar type</option>
                            <option value="F25.1">F25.1 - Schizoaffective disorder, depressive type</option>
                            <option value="F25.2">F25.2 - Schizoaffective disorder, mixed type</option>
                            <option value="F25.8">F25.8 - Other schizoaffective disorders</option>
                            <option value="F25.9">F25.9 - Schizoaffective disorder, unspecified</option>
                            <option value="F30.0">F30.0 - Hypomania</option>
                            <option value="F30.1">F30.1 - Manic episode without psychotic symptoms</option>
                            <option value="F30.10">F30.10 - Manic episode without psychotic symptoms, unspecified</option>
                            <option value="F30.11">F30.11 - Manic episode without psychotic symptoms, mild</option>
                            <option value="F30.12">F30.12 - Manic episode without psychotic symptoms, moderate</option>
                            <option value="F30.13">F30.13 - Manic episode, severe, without psychotic symptoms</option>
                            <option value="F30.2">F30.2 - Manic episode, severe with psychotic symptoms</option>
                            <option value="F30.3">F30.3 - Manic episode in partial remission</option>
                            <option value="F30.4">F30.4 - Manic episode in full remission</option>
                            <option value="F30.8">F30.8 - Other manic episodes</option>
                            <option value="F30.9">F30.9 - Manic episode, unspecified</option>
                            <option value="F31.0">F31.0 - Bipolar disorder, current episode hypomanic</option>
                            <option value="F31.1">F31.1 - Bipolar disorder, current episode manic without psychotic features</option>
                            <option value="F31.10">F31.10 - Bipolar disorder, current episode manic without psychotic features, unspecified</option>
                            <option value="F31.11">F31.11 - Bipolar disorder, current episode manic without psychotic features, mild</option>
                            <option value="F31.12">F31.12 - Bipolar disorder, current episode manic without psychotic features, moderate</option>
                            <option value="F31.13">F31.13 - Bipolar disorder, current episode manic without psychotic features, severe</option>
                            <option value="F31.2">F31.2 - Bipolar disorder, current episode manic severe with psychotic features</option>
                            <option value="F31.3">F31.3 - Bipolar disorder, current episode depressed, mild or moderate severity</option>
                            <option value="F31.30">F31.30 - Bipolar disorder, current episode depressed, mild or moderate severity, unspecified</option>
                            <option value="F31.31">F31.31 - Bipolar disorder, current episode depressed, mild</option>
                            <option value="F31.32">F31.32 - Bipolar disorder, current episode depressed, moderate</option>
                            <option value="F31.4">F31.4 - Bipolar disorder, current episode depressed, severe, without psychotic features</option>
                            <option value="F31.5">F31.5 - Bipolar disorder, current episode depressed, severe, with psychotic features</option>
                            <option value="F31.6">F31.6 - Bipolar disorder, current episode mixed</option>
                            <option value="F31.60">F31.60 - Bipolar disorder, current episode mixed, unspecified</option>
                            <option value="F31.61">F31.61 - Bipolar disorder, current episode mixed, mild</option>
                            <option value="F31.62">F31.62 - Bipolar disorder, current episode mixed, moderate</option>
                            <option value="F31.63">F31.63 - Bipolar disorder, current episode mixed, severe, without psychotic features</option>
                            <option value="F31.64">F31.64 - Bipolar disorder, current episode mixed, severe, with psychotic features</option>
                            <option value="F31.7">F31.7 - Bipolar disorder, currently in remission</option>
                            <option value="F31.70">F31.70 - Bipolar disorder, currently in remission, most recent episode unspecified</option>
                            <option value="F31.71">F31.71 - Bipolar disorder, most recent episode hypomanic in partial remission</option>
                            <option value="F31.72">F31.72 - Bipolar disorder, most recent episode hypomanic in full remission</option>
                            <option value="F31.73">F31.73 - Bipolar disorder, most recent episode manic in partial remission</option>
                            <option value="F31.74">F31.74 - Bipolar disorder, most recent episode manic in full remission</option>
                            <option value="F31.75">F31.75 - Bipolar disorder, most recent episode depressed in partial remission</option>
                            <option value="F31.76">F31.76 - Bipolar disorder, most recent episode depressed in full remission</option>
                            <option value="F31.77">F31.77 - Bipolar disorder, most recent episode mixed in partial remission</option>
                            <option value="F31.78">F31.78 - Bipolar disorder, most recent episode mixed in full remission</option>
                            <option value="F31.8">F31.8 - Other bipolar disorders</option>
                            <option value="F31.81">F31.81 - Bipolar II disorder</option>
                            <option value="F31.89">F31.89 - Other bipolar disorder</option>
                            <option value="F31.9">F31.9 - Bipolar disorder, unspecified</option>
                            <option value="F31.90">F31.90 - Bipolar disorder, unspecified</option>
                            <option value="F31.91">F31.91 - Bipolar disorder, current episode manic, unspecified</option>
                            <option value="F31.92">F31.92 - Bipolar disorder, current episode depressed, unspecified</option>
                            <option value="F32.0">F32.0 - Major depressive disorder, single episode, mild</option>
                            <option value="F32.1">F32.1 - Major depressive disorder, single episode, moderate</option>
                            <option value="F32.2">F32.2 - Major depressive disorder, single episode, severe without psychotic features</option>
                            <option value="F32.3">F32.3 - Major depressive disorder, single episode, severe with psychotic features</option>
                            <option value="F32.4">F32.4 - Major depressive disorder, single episode, in partial remission</option>
                            <option value="F32.5">F32.5 - Major depressive disorder, single episode, in full remission</option>
                            <option value="F32.8">F32.8 - Other depressive episodes</option>
                            <option value="F32.9">F32.9 - Major depressive disorder, single episode, unspecified</option>
                            <option value="F33.0">F33.0 - Major depressive disorder, recurrent, mild</option>
                            <option value="F33.1">F33.1 - Major depressive disorder, recurrent, moderate</option>
                            <option value="F33.2">F33.2 - Major depressive disorder, recurrent severe without psychotic features</option>
                            <option value="F33.3">F33.3 - Major depressive disorder, recurrent, severe with psychotic symptoms</option>
                            <option value="F33.4">F33.4 - Major depressive disorder, recurrent, in remission</option>
                            <option value="F33.40">F33.40 - Major depressive disorder, recurrent, in remission, unspecified</option>
                            <option value="F33.41">F33.41 - Major depressive disorder, recurrent, in partial remission</option>
                            <option value="F33.42">F33.42 - Major depressive disorder, recurrent, in full remission</option>
                            <option value="F33.8">F33.8 - Other recurrent depressive disorders</option>
                            <option value="F33.9">F33.9 - Major depressive disorder, recurrent, unspecified</option>
                            <option value="F34.0">F34.0 - Cyclothymic disorder</option>
                            <option value="F34.1">F34.1 - Dysthymic disorder</option>
                            <option value="F34.8">F34.8 - Other persistent mood [affective] disorders</option>
                            <option value="F34.9">F34.9 - Persistent mood [affective] disorder, unspecified</option>
                            <option value="F38.0">F38.0 - Other single mood [affective] disorders</option>
                            <option value="F38.1">F38.1 - Other recurrent mood [affective] disorders</option>
                            <option value="F38.8">F38.8 - Other specified mood [affective] disorders</option>
                            <option value="F40.0">F40.0 - Agoraphobia</option>
                            <option value="F40.00">F40.00 - Agoraphobia, unspecified</option>
                            <option value="F40.01">F40.01 - Agoraphobia with panic disorder</option>
                            <option value="F40.02">F40.02 - Agoraphobia without panic disorder</option>
                            <option value="F40.1">F40.1 - Social phobias</option>
                            <option value="F40.10">F40.10 - Social phobia, unspecified</option>
                            <option value="F40.11">F40.11 - Social phobia, generalized</option>
                            <option value="F40.2">F40.2 - Specific (isolated) phobias</option>
                            <option value="F40.21">F40.21 - Animal type</option>
                            <option value="F40.22">F40.22 - Natural environment type</option>
                            <option value="F40.23">F40.23 - Blood injection injury type</option>
                            <option value="F40.24">F40.24 - Situational type</option>
                            <option value="F40.29">F40.29 - Other specified phobia</option>
                            <option value="F40.8">F40.8 - Other phobic anxiety disorders</option>
                            <option value="F40.9">F40.9 - Phobic anxiety disorder, unspecified</option>
                            <option value="F41.0">F41.0 - Panic disorder [episodic paroxysmal anxiety] without agoraphobia</option>
                            <option value="F41.1">F41.1 - Generalized anxiety disorder</option>
                            <option value="F41.2">F41.2 - Mixed anxiety and depressive disorder</option>
                            <option value="F41.3">F41.3 - Other mixed anxiety disorders</option>
                            <option value="F41.8">F41.8 - Other specified anxiety disorders</option>
                            <option value="F41.9">F41.9 - Anxiety disorder, unspecified</option>
                            <option value="F42.0">F42.0 - Predominantly obsessional thoughts or ruminations</option>
                            <option value="F42.1">F42.1 - Predominantly compulsive acts [obsessional rituals]</option>
                            <option value="F42.2">F42.2 - Mixed obsessional thoughts and acts</option>
                            <option value="F42.8">F42.8 - Other obsessive-compulsive disorders</option>
                            <option value="F42.9">F42.9 - Obsessive-compulsive disorder, unspecified</option>
                            <option value="F43.0">F43.0 - Acute stress reaction</option>
                            <option value="F43.1">F43.1 - Post-traumatic stress disorder</option>
                            <option value="F43.10">F43.10 - Post-traumatic stress disorder, unspecified</option>
                            <option value="F43.11">F43.11 - Post-traumatic stress disorder, acute</option>
                            <option value="F43.12">F43.12 - Post-traumatic stress disorder, chronic</option>
                            <option value="F43.2">F43.2 - Adjustment disorders</option>
                            <option value="F43.20">F43.20 - Adjustment disorder, unspecified</option>
                            <option value="F43.21">F43.21 - Adjustment disorder with depressed mood</option>
                            <option value="F43.22">F43.22 - Adjustment disorder with anxiety</option>
                            <option value="F43.23">F43.23 - Adjustment disorder with mixed anxiety and depressed mood</option>
                            <option value="F43.24">F43.24 - Adjustment disorder with disturbance of conduct</option>
                            <option value="F43.25">F43.25 - Adjustment disorder with mixed disturbance of emotions and conduct</option>
                            <option value="F43.29">F43.29 - Adjustment disorder with other symptoms</option>
                            <option value="F43.8">F43.8 - Other reactions to severe stress</option>
                            <option value="F43.9">F43.9 - Reaction to severe stress, unspecified</option>
                            <option value="F44.0">F44.0 - Dissociative amnesia</option>
                            <option value="F44.1">F44.1 - Dissociative fugue</option>
                            <option value="F44.2">F44.2 - Dissociative stupor</option>
                            <option value="F44.3">F44.3 - Trance and possession disorders</option>
                            <option value="F44.4">F44.4 - Conversion disorder with motor symptom or deficit</option>
                            <option value="F44.5">F44.5 - Conversion disorder with seizures or convulsions</option>
                            <option value="F44.6">F44.6 - Conversion disorder with sensory symptom or deficit</option>
                            <option value="F44.7">F44.7 - Mixed dissociative [conversion] disorders</option>
                            <option value="F44.8">F44.8 - Other dissociative and conversion disorders</option>
                            <option value="F44.81">F44.81 - Dissociative identity disorder</option>
                            <option value="F44.89">F44.89 - Other dissociative and conversion disorders</option>
                            <option value="F44.9">F44.9 - Dissociative and conversion disorder, unspecified</option>
                            <option value="F45.0">F45.0 - Somatization disorder</option>
                            <option value="F45.1">F45.1 - Undifferentiated somatoform disorder</option>
                            <option value="F45.2">F45.2 - Hypochondriacal disorders</option>
                            <option value="F45.20">F45.20 - Hypochondriacal disorder, unspecified</option>
                            <option value="F45.21">F45.21 - Hypochondriasis</option>
                            <option value="F45.22">F45.22 - Body dysmorphic disorder</option>
                            <option value="F45.29">F45.29 - Other hypochondriacal disorders</option>
                            <option value="F45.3">F45.3 - Somatoform autonomic dysfunction</option>
                            <option value="F45.4">F45.4 - Pain disorder</option>
                            <option value="F45.8">F45.8 - Other somatoform disorders</option>
                            <option value="F45.9">F45.9 - Somatoform disorder, unspecified</option>
                            <option value="F48.0">F48.0 - Neurasthenia</option>
                            <option value="F48.1">F48.1 - Depersonalization-derealization syndrome</option>
                            <option value="F48.8">F48.8 - Other specified nonpsychotic mental disorders</option>
                            <option value="F48.9">F48.9 - Nonpsychotic mental disorder, unspecified</option>
                            <option value="F50.0">F50.0 - Anorexia nervosa</option>
                            <option value="F50.00">F50.00 - Anorexia nervosa, unspecified</option>
                            <option value="F50.01">F50.01 - Anorexia nervosa, restricting type</option>
                            <option value="F50.02">F50.02 - Anorexia nervosa, binge eating/purging type</option>
                            <option value="F50.1">F50.1 - Atypical anorexia nervosa</option>
                            <option value="F50.2">F50.2 - Bulimia nervosa</option>
                            <option value="F50.3">F50.3 - Atypical bulimia nervosa</option>
                            <option value="F50.4">F50.4 - Overeating associated with other psychological disturbances</option>
                            <option value="F50.5">F50.5 - Vomiting associated with other psychological disturbances</option>
                            <option value="F50.8">F50.8 - Other eating disorders</option>
                            <option value="F50.9">F50.9 - Eating disorder, unspecified</option>
                            <option value="F51.0">F51.0 - Insomnia not due to a substance or known physiological condition</option>
                            <option value="F51.1">F51.1 - Hypersomnia not due to a substance or known physiological condition</option>
                            <option value="F51.2">F51.2 - Circadian rhythm sleep disorder not due to a substance or known physiological condition</option>
                            <option value="F51.20">F51.20 - Circadian rhythm sleep disorder not due to a substance or known physiological condition, unspecified t</option>
                            <option value="F51.21">F51.21 - Circadian rhythm sleep disorder not due to a substance or known physiological condition, jet-lag type</option>
                            <option value="F51.22">F51.22 - Circadian rhythm sleep disorder not due to a substance or known physiological condition, shift-work ty</option>
                            <option value="F51.23">F51.23 - Circadian rhythm sleep disorder not due to a substance or known physiological condition, delayed sleep</option>
                            <option value="F51.29">F51.29 - Other sleep disorder of circadian rhythm not due to a substance or known physiological condition</option>
                            <option value="F51.3">F51.3 - Sleepwalking [somnambulism]</option>
                            <option value="F51.4">F51.4 - Sleep terrors [night terrors]</option>
                            <option value="F51.5">F51.5 - Nightmare disorder</option>
                            <option value="F51.8">F51.8 - Other sleep disorders not due to a substance or known physiological condition</option>
                            <option value="F51.9">F51.9 - Sleep disorder not due to a substance or known physiological condition, unspecified</option>
                            <option value="F52.0">F52.0 - Hypoactive sexual desire disorder</option>
                            <option value="F52.1">F52.1 - Sexual aversion disorder</option>
                            <option value="F52.2">F52.2 - Sexual arousal disorders</option>
                            <option value="F52.21">F52.21 - Male erectile disorder</option>
                            <option value="F52.22">F52.22 - Female sexual arousal disorder</option>
                            <option value="F52.3">F52.3 - Orgasmic disorder</option>
                            <option value="F52.31">F52.31 - Female orgasmic disorder</option>
                            <option value="F52.32">F52.32 - Male orgasmic disorder</option>
                            <option value="F52.4">F52.4 - Premature ejaculation</option>
                            <option value="F52.5">F52.5 - Vaginismus not due to a substance or known physiological condition</option>
                            <option value="F52.6">F52.6 - Dyspareunia not due to a substance or known physiological condition</option>
                            <option value="F52.7">F52.7 - Excessive sexual drive</option>
                            <option value="F52.8">F52.8 - Other sexual dysfunction not due to a substance or known physiological condition</option>
                            <option value="F52.9">F52.9 - Unspecified sexual dysfunction not due to a substance or known physiological condition</option>
                            <option value="F53.0">F53.0 - Mild mental and behavioural disorders associated with the puerperium, not elsewhere classified</option>
                            <option value="F53.1">F53.1 - Severe mental and behavioural disorders associated with the puerperium, not elsewhere classified</option>
                            <option value="F53.8">F53.8 - Other mental and behavioural disorders associated with the puerperium, not elsewhere classified</option>
                            <option value="F53.9">F53.9 - Puerperal mental disorder, unspecified</option>
                            <option value="F55.0">F55.0 - Abuse of antacids</option>
                            <option value="F55.1">F55.1 - Abuse of herbal or folk remedies</option>
                            <option value="F55.2">F55.2 - Abuse of laxatives</option>
                            <option value="F55.3">F55.3 - Abuse of steroids or hormones</option>
                            <option value="F55.4">F55.4 - Abuse of vitamins</option>
                            <option value="F55.8">F55.8 - Abuse of other non-psychoactive substances</option>
                            <option value="F60.0">F60.0 - Paranoid personality disorder</option>
                            <option value="F60.1">F60.1 - Schizoid personality disorder</option>
                            <option value="F60.2">F60.2 - Antisocial personality disorder</option>
                            <option value="F60.3">F60.3 - Borderline personality disorder</option>
                            <option value="F60.4">F60.4 - Histrionic personality disorder</option>
                            <option value="F60.5">F60.5 - Obsessive-compulsive personality disorder</option>
                            <option value="F60.6">F60.6 - Avoidant personality disorder</option>
                            <option value="F60.7">F60.7 - Dependent personality disorder</option>
                            <option value="F60.8">F60.8 - Other specific personality disorders</option>
                            <option value="F60.81">F60.81 - Narcissistic personality disorder</option>
                            <option value="F60.89">F60.89 - Other specific personality disorders</option>
                            <option value="F60.9">F60.9 - Personality disorder, unspecified</option>
                            <option value="F62.0">F62.0 - Enduring personality change after catastrophic experience</option>
                            <option value="F62.1">F62.1 - Enduring personality change after psychiatric illness</option>
                            <option value="F62.8">F62.8 - Other enduring personality changes</option>
                            <option value="F62.9">F62.9 - Enduring personality change, unspecified</option>
                            <option value="F63.0">F63.0 - Pathological gambling</option>
                            <option value="F63.1">F63.1 - Pyromania</option>
                            <option value="F63.2">F63.2 - Kleptomania</option>
                            <option value="F63.3">F63.3 - Trichotillomania</option>
                            <option value="F63.8">F63.8 - Other impulse disorders</option>
                            <option value="F63.81">F63.81 - Intermittent explosive disorder</option>
                            <option value="F63.89">F63.89 - Other impulse disorders</option>
                            <option value="F63.9">F63.9 - Impulse disorder, unspecified</option>
                            <option value="F64.0">F64.0 - Transsexualism</option>
                            <option value="F64.1">F64.1 - Gender identity disorder in adolescence and adulthood</option>
                            <option value="F64.2">F64.2 - Gender identity disorder of childhood</option>
                            <option value="F64.8">F64.8 - Other gender identity disorders</option>
                            <option value="F64.9">F64.9 - Gender identity disorder, unspecified</option>
                            <option value="F65.0">F65.0 - Fetishism</option>
                            <option value="F65.1">F65.1 - Transvestic fetishism</option>
                            <option value="F65.2">F65.2 - Exhibitionism</option>
                            <option value="F65.3">F65.3 - Voyeurism</option>
                            <option value="F65.4">F65.4 - Pedophilia</option>
                            <option value="F65.5">F65.5 - Sadomasochism</option>
                            <option value="F65.51">F65.51 - Sexual masochism</option>
                            <option value="F65.52">F65.52 - Sexual sadism</option>
                            <option value="F65.6">F65.6 - Multiple disorders of sexual preference</option>
                            <option value="F65.8">F65.8 - Other paraphilias</option>
                            <option value="F65.81">F65.81 - Frotteurism</option>
                            <option value="F65.89">F65.89 - Other paraphilias</option>
                            <option value="F65.9">F65.9 - Paraphilia, unspecified</option>
                            <option value="F66.0">F66.0 - Sexual maturation disorder</option>
                            <option value="F66.1">F66.1 - Egodystonic sexual orientation</option>
                            <option value="F66.2">F66.2 - Sexual relationship disorder</option>
                            <option value="F66.8">F66.8 - Other psychosexual development disorders</option>
                            <option value="F66.9">F66.9 - Psychosexual development disorder, unspecified</option>
                            <option value="F68.0">F68.0 - Elaboration of physical symptoms for psychological reasons</option>
                            <option value="F68.1">F68.1 - Factitious disorder</option>
                            <option value="F68.10">F68.10 - Factitious disorder, unspecified</option>
                            <option value="F68.11">F68.11 - Factitious disorder with predominantly psychological signs and symptoms</option>
                            <option value="F68.12">F68.12 - Factitious disorder with predominantly physical signs and symptoms</option>
                            <option value="F68.13">F68.13 - Factitious disorder with combined psychological and physical signs and symptoms</option>
                            <option value="F68.8">F68.8 - Other specified disorders of adult personality and behavior</option>
                            <option value="F78.1">F78.1 - Other mental retardation with significant impairment of behaviour requiring attention or treatment</option>
                            <option value="F79.8">F79.8 - Unspecified Mental Retardation with significant impairement requiring treatment and attention</option>
                            <option value="F80.0">F80.0 - Phonological disorder</option>
                            <option value="F80.1">F80.1 - Expressive language disorder</option>
                            <option value="F80.2">F80.2 - Mixed receptive-expressive language disorder</option>
                            <option value="F80.3">F80.3 - Acquired aphasia with epilepsy [Landau-Kleffner]</option>
                            <option value="F80.8">F80.8 - Other developmental disorders of speech or language</option>
                            <option value="F80.9">F80.9 - Developmental disorder of speech or language, unspecified</option>
                            <option value="F81.0">F81.0 - Specific reading disorder</option>
                            <option value="F81.1">F81.1 - Specific spelling disorder</option>
                            <option value="F81.2">F81.2 - Mathematics disorder</option>
                            <option value="F81.3">F81.3 - Mixed disorder of scholastic skills</option>
                            <option value="F81.8">F81.8 - Other developmental disorders of scholastic skills</option>
                            <option value="F81.81">F81.81 - Disorder of written expression</option>
                            <option value="F81.89">F81.89 - Other developmental disorders of scholastic skills</option>
                            <option value="F81.9">F81.9 - Developmental disorder of scholastic skills, unspecified</option>
                            <option value="F84.0">F84.0 - Autistic disorder</option>
                            <option value="F84.1">F84.1 - Atypical autism</option>
                            <option value="F84.2">F84.2 - Rett's syndrome</option>
                            <option value="F84.3">F84.3 - Other childhood disintegrative disorder</option>
                            <option value="F84.4">F84.4 - Overactive disorder associated with mental retardation and stereotyped movements</option>
                            <option value="F84.5">F84.5 - Asperger's syndrome</option>
                            <option value="F84.8">F84.8 - Other pervasive developmental disorders</option>
                            <option value="F84.9">F84.9 - Pervasive developmental disorder, unspecified</option>
                            <option value="F90.0">F90.0 - Attention-deficit hyperactivity disorder, predominantly inattentive type</option>
                            <option value="F90.1">F90.1 - Attention-deficit hyperactivity disorder, predominantly hyperactive type</option>
                            <option value="F90.2">F90.2 - Attention-deficit hyperactivity disorder, combined type</option>
                            <option value="F90.8">F90.8 - Attention-deficit hyperactivity disorder, other type</option>
                            <option value="F90.9">F90.9 - Attention-deficit hyperactivity disorder, unspecified type</option>
                            <option value="F91.0">F91.0 - Conduct disorder confined to the family context</option>
                            <option value="F91.1">F91.1 - Conduct disorder, childhood-onset type</option>
                            <option value="F91.2">F91.2 - Conduct disorder, adolescent-onset type</option>
                            <option value="F91.3">F91.3 - Oppositional defiant disorder</option>
                            <option value="F91.8">F91.8 - Other conduct disorders</option>
                            <option value="F91.9">F91.9 - Conduct disorder, unspecified</option>
                            <option value="F92.0">F92.0 - Depressive conduct disorder</option>
                            <option value="F92.8">F92.8 - Other mixed disorders of conduct and emotions</option>
                            <option value="F92.9">F92.9 - Mixed disorder of conduct and emotions, unspecified</option>
                            <option value="F93.0">F93.0 - Separation anxiety disorder of childhood</option>
                            <option value="F93.1">F93.1 - Phobic anxiety disorder of childhood</option>
                            <option value="F93.2">F93.2 - Social anxiety disorder of childhood</option>
                            <option value="F93.3">F93.3 - Sibling rivalry disorder</option>
                            <option value="F93.8">F93.8 - Other childhood emotional disorders</option>
                            <option value="F93.9">F93.9 - Childhood emotional disorder, unspecified</option>
                            <option value="F94.0">F94.0 - Selective mutism</option>
                            <option value="F94.1">F94.1 - Reactive attachment disorder of childhood</option>
                            <option value="F94.2">F94.2 - Disinhibited attachment disorder of childhood</option>
                            <option value="F94.8">F94.8 - Other childhood disorders of social functioning</option>
                            <option value="F94.9">F94.9 - Childhood disorder of social functioning, unspecified</option>
                            <option value="F95.0">F95.0 - Transient tic disorder</option>
                            <option value="F95.1">F95.1 - Chronic motor or vocal tic disorder</option>
                            <option value="F95.2">F95.2 - Tourette's disorder</option>
                            <option value="F95.8">F95.8 - Other tic disorders</option>
                            <option value="F95.9">F95.9 - Tic disorder, unspecified</option>
                            <option value="F98.0">F98.0 - Enuresis not due to a substance or known physiological condition</option>
                            <option value="F98.1">F98.1 - Encopresis not due to a substance or known physiological condition</option>
                            <option value="F98.2">F98.2 - Other feeding disorders of infancy and childhood</option>
                            <option value="F98.21">F98.21 - Rumination disorder of infancy</option>
                            <option value="F98.29">F98.29 - Other feeding disorders of infancy and early childhood</option>
                            <option value="F98.3">F98.3 - Pica of infancy and childhood</option>
                            <option value="F98.4">F98.4 - Stereotyped movement disorders</option>
                            <option value="F98.5">F98.5 - Stuttering [stammering]</option>
                            <option value="F98.6">F98.6 - Cluttering</option>
                            <option value="F98.8">F98.8 - Other specified behavioral and emotional disorders with onset usually occurring in childhood and adole</option>
                            <option value="F98.9">F98.9 - Unspecified behavioral and emotional disorders with onset usually occurring in childhood and adolescen</option>
                        </select>
                    </div>

                    <!-- To Consider -->
                    <div class="form-group mb-3">
                        <label for="diag_to_consider">To Consider</label>
                        <div class="input-group">
                            <input type="text" class="form-control" id="diag_to_consider" name="diag_to_consider" />
                        </div>
                    </div>

                    <!-- is primary -->
                    <div class="form-group mb-3">
                        <label for="diag_isPrimary">
                            Is primary?
                        </label>
                        <div class="checkbox">
                            <label><input type="radio" value="Y" name="diag_isPrimary"> Yes</label>
                            <label><input data-default type="radio" checked="checked" value="N" name="diag_isPrimary"> No</label>
                        </div>
                    </div>

                    <!-- Condition -->
                    <div class="form-group mb-3">
                        <label for="diag_condition">
                            <strong class="text-red">*</strong>Condition
                        </label>
                        <select name="diag_condition" id="diag_condition" class="form-control mb-2 mr-sm-2 select2bs4" required="required" style="width:80%;">
                            <option value=""></option>
                            <option value="Unimproved">Unimproved</option>
                            <option value="Improved">Improved</option>
                            <option value="Manageable">Manageable</option>
                            <option value="Unstable">Unstable</option>
                            <option value="Disturbed">Disturbed</option>
                        </select>
                    </div>

                    <!-- Notes -->
                    <div class="form-group mb-3">
                        <label for="diag_condition_notes">
                            <strong class="text-red">*</strong>Notes
                        </label>
                        <textarea name="diag_condition_notes" required class="form-control mb-2 mr-sm-2" id="diag_condition_notes"><?php echo isset($diagnosis) ? $diagnosis->condition_notes : '' ?></textarea>
                    </div>
                </div>
                <div class="modal-footer d-flex justify-content-between">
                    <button type="button" class="btn btn-danger" data-dismiss="modal">Cancel</button>
                    <button type="submit" class="btn btn-primary float-right">Save</button>
                </div>
            </div>
        </form>
    </div>
</div>

<div class="modal diagnosis-modal fade" id="discharge_mdiagnosis_modal" data-backdrop="static" tabindex="-1" role="dialog">
    <div class="modal-dialog" role="document">
        <form id="co_morbid_form">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title">Add Medical Diagnosis</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">

                    <!-- ICD10 Diagnosis -->
                    <div class="form-group mb-3">
                        <label for="diag_co-morbid">
                            <strong class="text-red">*</strong>Co-morbid Diagnosis (ICD 10)
                        </label>
                        <select class="form-control mb-2 mr-sm-2 select2bs4" id="diag_co-morbid" name="diag_co-morbid" placeholder="ICD Code">
                            <option value=""> </option>
                            <option value="F00.0">F00.0 - Dementia in Alzheimer's disease with early onset (G30.0+)</option>
                            <option value="F00.1">F00.1 - Dementia in Alzheimer's disease with late onset (G30.1+)</option>
                            <option value="F00.2">F00.2 - Dementia in Alzheimer's disease, atypical or mixed type (G30.8+)</option>
                            <option value="F00.9">F00.9 - Dementia in Alzheimer's disease, unspecified (G30.9+)</option>
                            <option value="F01.0">F01.0 - Vascular dementia of acute onset</option>
                            <option value="F01.1">F01.1 - Multi-infarct dementia</option>
                            <option value="F01.2">F01.2 - Subcortical vascular dementia</option>
                            <option value="F01.3">F01.3 - Mixed cortical and subcortical vascular dementia</option>
                            <option value="F01.4">F01.4 - Vascular dementia without behavioral disturbance</option>
                            <option value="F01.5">F01.5 - Vascular dementia with behavioral disturbance</option>
                            <option value="F01.8">F01.8 - Other vascular dementia</option>
                            <option value="F01.9">F01.9 - Vascular dementia, unspecified</option>
                            <option value="F02.0">F02.0 - Dementia in Pick's disease (G31.0+)</option>
                            <option value="F02.1">F02.1 - Dementia in Creutzfeldt-Jakob disease (A81.0+)</option>
                            <option value="F02.2">F02.2 - Dementia in Huntington's disease (G10+)</option>
                            <option value="F02.3">F02.3 - Dementia in Parkinson's disease (G20+)</option>
                            <option value="F02.4">F02.4 - Dementia in human immunodeficiency virus [HIV] disease (B22.0+)</option>
                            <option value="F02.5">F02.5 - Dementia in other diseases classified elsewhere, without behavioral disturbance</option>
                            <option value="F02.6">F02.6 - Dementia in other diseases classified elsewhere, with behavioral disturbance</option>
                            <option value="F02.8">F02.8 - Dementia in other specified diseases classified elsewhere</option>
                            <option value="F05.0">F05.0 - Delirium not superimposed on dementia, so described</option>
                            <option value="F05.1">F05.1 - Delirium superimposed on dementia</option>
                            <option value="F05.8">F05.8 - Other delirium</option>
                            <option value="F05.9">F05.9 - Delirium, unspecified</option>
                            <option value="F06.0">F06.0 - Psychotic disorder with hallucinations due to known physiological condition</option>
                            <option value="F06.1">F06.1 - Catatonic disorder due to known physiological condition</option>
                            <option value="F06.2">F06.2 - Psychotic disorder with delusions due to known physiological condition</option>
                            <option value="F06.3">F06.3 - Mood disorder due to known physiological condition</option>
                            <option value="F06.30">F06.30 - Mood disorder due to known physiological condition, unspecified</option>
                            <option value="F06.31">F06.31 - Mood disorder due to known physiological condition with depressive features</option>
                            <option value="F06.32">F06.32 - Mood disorder due to known physiological condition with major depressive-like episode</option>
                            <option value="F06.33">F06.33 - Mood disorder due to known physiological condition with manic features</option>
                            <option value="F06.34">F06.34 - Mood disorder due to known physiological condition with mixed features</option>
                            <option value="F06.4">F06.4 - Anxiety disorder due to known physiological condition</option>
                            <option value="F06.5">F06.5 - Organic dissociative disorder</option>
                            <option value="F06.6">F06.6 - Organic emotionally labile [asthenic] disorder</option>
                            <option value="F06.7">F06.7 - Mild cognitive disorder</option>
                            <option value="F06.8">F06.8 - Other specified mental disorders due to known physiological condition</option>
                            <option value="F06.9">F06.9 - Unspecified mental disorder due to known physiological condition</option>
                            <option value="F07.0">F07.0 - Personality change due to known physiological condition</option>
                            <option value="F07.1">F07.1 - Postencephalitic syndrome</option>
                            <option value="F07.2">F07.2 - Postconcussional syndrome</option>
                            <option value="F07.8">F07.8 - Other personality and behavioral disorders due to known physiological condition</option>
                            <option value="F07.9">F07.9 - Unspecified personality and behavioral disorder due to known physiological condition</option>
                            <option value="F10.0">F10.0 - Alcohol abuse</option>
                            <option value="F10.00">F10.00 - Alcohol abuse, uncomplicated</option>
                            <option value="F10.02">F10.02 - Alcohol abuse with intoxication</option>
                            <option value="F10.020">F10.020 - Alcohol abuse with intoxication, uncomplicated</option>
                            <option value="F10.021">F10.021 - Alcohol abuse with intoxication delirium</option>
                            <option value="F10.029">F10.029 - Alcohol abuse with intoxication, unspecified</option>
                            <option value="F10.04">F10.04 - Alcohol abuse with alcohol-induced mood disorder</option>
                            <option value="F10.05">F10.05 - Alcohol abuse with alcohol-induced psychotic disorder</option>
                            <option value="F10.050">F10.050 - Alcohol abuse with alcohol-induced psychotic disorder with delusions</option>
                            <option value="F10.051">F10.051 - Alcohol abuse with alcohol-induced psychotic disorder with hallucinations</option>
                            <option value="F10.059">F10.059 - Alcohol abuse with alcohol-induced psychotic disorder, unspecified</option>
                            <option value="F10.08">F10.08 - Alcohol abuse with other alcohol-induced disorders</option>
                            <option value="F10.080">F10.080 - Alcohol abuse with alcohol-induced anxiety disorder</option>
                            <option value="F10.081">F10.081 - Alcohol abuse with alcohol-induced sexual dysfunction</option>
                            <option value="F10.082">F10.082 - Alcohol abuse with alcohol-induced sleep disorder</option>
                            <option value="F10.088">F10.088 - Alcohol abuse with other alcohol-induced disorder</option>
                            <option value="F10.09">F10.09 - Alcohol abuse with unspecified alcohol-induced disorder</option>
                            <option value="F10.1">F10.1 - Alcohol dependence</option>
                            <option value="F10.10">F10.10 - Alcohol dependence, uncomplicated</option>
                            <option value="F10.11">F10.11 - Alcohol dependence, in remission</option>
                            <option value="F10.12">F10.12 - Alcohol dependence with intoxication</option>
                            <option value="F10.120">F10.120 - Alcohol dependence with intoxication, uncomplicated</option>
                            <option value="F10.121">F10.121 - Alcohol dependence with intoxication delirium</option>
                            <option value="F10.129">F10.129 - Alcohol dependence with intoxication, unspecified</option>
                            <option value="F10.13">F10.13 - Alcohol dependence with withdrawal</option>
                            <option value="F10.130">F10.130 - Alcohol dependence with withdrawal, uncomplicated</option>
                            <option value="F10.131">F10.131 - Alcohol dependence with withdrawal delirium</option>
                            <option value="F10.132">F10.132 - Alcohol dependence with withdrawal with perceptual disturbance</option>
                            <option value="F10.139">F10.139 - Alcohol dependence with withdrawal, unspecified</option>
                            <option value="F10.14">F10.14 - Alcohol dependence with alcohol-induced mood disorder</option>
                            <option value="F10.15">F10.15 - Alcohol dependence with alcohol-induced psychotic disorder</option>
                            <option value="F10.150">F10.150 - Alcohol dependence with alcohol-induced psychotic disorder with delusions</option>
                            <option value="F10.151">F10.151 - Alcohol dependence with alcohol-induced psychotic disorder with hallucinations</option>
                            <option value="F10.159">F10.159 - Alcohol dependence with alcohol-induced psychotic disorder, unspecified</option>
                            <option value="F10.16">F10.16 - Alcohol dependence with alcohol persisting amnestic disorder</option>
                            <option value="F10.17">F10.17 - Alcohol dependence with alcohol persisting dementia</option>
                            <option value="F10.18">F10.18 - Alcohol dependence with other alcohol-induced disorders</option>
                            <option value="F10.180">F10.180 - Alcohol dependence with alcohol-induced anxiety disorder</option>
                            <option value="F10.181">F10.181 - Alcohol dependence with alcohol-induced sexual dysfunction</option>
                            <option value="F10.182">F10.182 - Alcohol dependence with alcohol-induced sleep disorder</option>
                            <option value="F10.188">F10.188 - Alcohol dependence with other alcohol-induced disorder</option>
                            <option value="F10.19">F10.19 - Alcohol dependence with unspecified alcohol-induced disorder</option>
                            <option value="F10.2">F10.2 - Mental and behavioural disorders due to use of alcohol: Dependency syndrome</option>
                            <option value="F10.9">F10.9 - Alcohol use, unspecified, complicated</option>
                            <option value="F10.92">F10.92 - Alcohol use, unspecified with intoxication</option>
                            <option value="F10.920">F10.920 - Alcohol use, unspecified with intoxication, uncomplicated</option>
                            <option value="F10.921">F10.921 - Alcohol use, unspecified with intoxication delirium</option>
                            <option value="F10.929">F10.929 - Alcohol use, unspecified with intoxication, unspecified</option>
                            <option value="F10.94">F10.94 - Alcohol use, unspecified with alcohol-induced mood disorder</option>
                            <option value="F10.95">F10.95 - Alcohol use, unspecified with alcohol-induced psychotic disorder</option>
                            <option value="F10.950">F10.950 - Alcohol use, unspecified with alcohol-induced psychotic disorder with delusions</option>
                            <option value="F10.951">F10.951 - Alcohol use, unspecified with alcohol-induced psychotic disorder with hallucinations</option>
                            <option value="F10.959">F10.959 - Alcohol use, unspecified with alcohol-induced psychotic disorder, unspecified</option>
                            <option value="F10.96">F10.96 - Alcohol use, unspecified with alcohol persisting amnestic disorder</option>
                            <option value="F10.97">F10.97 - Alcohol use, unspecified with alcohol persisting dementia</option>
                            <option value="F10.98">F10.98 - Alcohol use, unspecified with other alcohol-induced disorders</option>
                            <option value="F10.980">F10.980 - Alcohol use, unspecified with alcohol-induced anxiety disorder</option>
                            <option value="F10.981">F10.981 - Alcohol use, unspecified with alcohol-induced sexual dysfunction</option>
                            <option value="F10.982">F10.982 - Alcohol use, unspecified with alcohol-induced sleep disorder</option>
                            <option value="F10.988">F10.988 - Alcohol use, unspecified with other alcohol-induced disorder</option>
                            <option value="F10.99">F10.99 - Alcohol use, unspecified with unspecified alcohol-induced disorder</option>
                            <option value="F11.0">F11.0 - Opioid abuse</option>
                            <option value="F11.00">F11.00 - Opioid abuse, uncomplicated</option>
                            <option value="F11.02">F11.02 - Opioid abuse with intoxication</option>
                            <option value="F11.020">F11.020 - Opioid abuse with intoxication, uncomplicated</option>
                            <option value="F11.021">F11.021 - Opioid abuse with intoxication delirium</option>
                            <option value="F11.022">F11.022 - Opioid abuse with intoxication with perceptual disturbance</option>
                            <option value="F11.029">F11.029 - Opioid abuse with intoxication, unspecified</option>
                            <option value="F11.04">F11.04 - Opioid abuse with opioid-induced mood disorder</option>
                            <option value="F11.05">F11.05 - Opioid abuse with opioid-induced psychotic disorder</option>
                            <option value="F11.050">F11.050 - Opioid abuse with opioid-induced psychotic disorder with delusions</option>
                            <option value="F11.051">F11.051 - Opioid abuse with opioid-induced psychotic disorder with hallucinations</option>
                            <option value="F11.059">F11.059 - Opioid abuse with opioid-induced psychotic disorder, unspecified</option>
                            <option value="F11.08">F11.08 - Opioid abuse with other opioid-induced disorder</option>
                            <option value="F11.081">F11.081 - Opioid abuse with opioid-induced sexual dysfunction</option>
                            <option value="F11.082">F11.082 - Opioid abuse with opioid-induced sleep disorder</option>
                            <option value="F11.088">F11.088 - Opioid abuse with other opioid-induced disorder</option>
                            <option value="F11.09">F11.09 - Opioid abuse with unspecified opioid-induced disorder</option>
                            <option value="F11.1">F11.1 - Opioid dependence</option>
                            <option value="F11.10">F11.10 - Opioid dependence, uncomplicated</option>
                            <option value="F11.11">F11.11 - Opioid dependence, in remission</option>
                            <option value="F11.12">F11.12 - Opioid dependence with intoxication</option>
                            <option value="F11.120">F11.120 - Opioid dependence with intoxication, uncomplicated</option>
                            <option value="F11.121">F11.121 - Opioid dependence with intoxication delirium</option>
                            <option value="F11.122">F11.122 - Opioid dependence with intoxication with perceptual disturbance</option>
                            <option value="F11.129">F11.129 - Opioid dependence with intoxication, unspecified</option>
                            <option value="F11.13">F11.13 - Opioid dependence with withdrawal</option>
                            <option value="F11.14">F11.14 - Opioid dependence with opioid-induced mood disorder</option>
                            <option value="F11.15">F11.15 - Opioid dependence with opioid-induced psychotic disorder</option>
                            <option value="F11.150">F11.150 - Opioid dependence with opioid-induced psychotic disorder with delusions</option>
                            <option value="F11.151">F11.151 - Opioid dependence with opioid-induced psychotic disorder with hallucinations</option>
                            <option value="F11.159">F11.159 - Opioid dependence with opioid-induced psychotic disorder, unspecified</option>
                            <option value="F11.18">F11.18 - Opioid dependence with other opioid-induced disorder</option>
                            <option value="F11.181">F11.181 - Opioid dependence with opioid-induced sexual dysfunction</option>
                            <option value="F11.182">F11.182 - Opioid dependence with opioid-induced sleep disorder</option>
                            <option value="F11.188">F11.188 - Opioid dependence with other opioid-induced disorder</option>
                            <option value="F11.19">F11.19 - Opioid dependence with unspecified opioid-induced disorder</option>
                            <option value="F11.9">F11.9 - Opioid use, unspecified, complicated</option>
                            <option value="F11.92">F11.92 - Opioid use, unspecified with intoxication</option>
                            <option value="F11.920">F11.920 - Opioid use, unspecified with intoxication, uncomplicated</option>
                            <option value="F11.921">F11.921 - Opioid use, unspecified with intoxication delirium</option>
                            <option value="F11.922">F11.922 - Opioid use, unspecified with intoxication with perceptual disturbance</option>
                            <option value="F11.929">F11.929 - Opioid use, unspecified with intoxication, unspecified</option>
                            <option value="F11.93">F11.93 - Opioid use, unspecified with withdrawal</option>
                            <option value="F11.94">F11.94 - Opioid use, unspecified with opioid-induced mood disorder</option>
                            <option value="F11.95">F11.95 - Opioid use, unspecified with opioid-induced psychotic disorder</option>
                            <option value="F11.950">F11.950 - Opioid use, unspecified with opioid-induced psychotic disorder with delusions</option>
                            <option value="F11.951">F11.951 - Opioid use, unspecified with opioid-induced psychotic disorder with hallucinations</option>
                            <option value="F11.959">F11.959 - Opioid use, unspecified with opioid-induced psychotic disorder, unspecified</option>
                            <option value="F11.98">F11.98 - Opioid use, unspecified with other specified opioid-induced disorder</option>
                            <option value="F11.981">F11.981 - Opioid use, unspecified with opioid-induced sexual dysfunction</option>
                            <option value="F11.982">F11.982 - Opioid use, unspecified with opioid-induced sleep disorder</option>
                            <option value="F11.988">F11.988 - Opioid use, unspecified with other opioid-induced disorder</option>
                            <option value="F11.99">F11.99 - Opioid use, unspecified with unspecified opioid-induced disorder</option>
                            <option value="F12.0">F12.0 - Cannabis abuse</option>
                            <option value="F12.00">F12.00 - Cannabis abuse, uncomplicated</option>
                            <option value="F12.02">F12.02 - Cannabis abuse with intoxication</option>
                            <option value="F12.020">F12.020 - Cannabis abuse with intoxication, uncomplicated</option>
                            <option value="F12.021">F12.021 - Cannabis abuse with intoxication delirium</option>
                            <option value="F12.022">F12.022 - Cannabis abuse with intoxication with perceptual disturbance</option>
                            <option value="F12.029">F12.029 - Cannabis abuse with intoxication, unspecified</option>
                            <option value="F12.05">F12.05 - Cannabis abuse with psychotic disorder</option>
                            <option value="F12.050">F12.050 - Cannabis abuse with psychotic disorder with delusions</option>
                            <option value="F12.051">F12.051 - Cannabis abuse with psychotic disorder with hallucinations</option>
                            <option value="F12.059">F12.059 - Cannabis abuse with psychotic disorder, unspecified</option>
                            <option value="F12.08">F12.08 - Cannabis abuse with other cannabis-induced disorder</option>
                            <option value="F12.080">F12.080 - Cannabis abuse with cannabis-induced anxiety disorder</option>
                            <option value="F12.088">F12.088 - Cannabis abuse with other cannabis-induced disorder</option>
                            <option value="F12.09">F12.09 - Cannabis abuse with unspecified cannibis-induced disorder</option>
                            <option value="F12.1">F12.1 - Cannabis dependence</option>
                            <option value="F12.10">F12.10 - Cannabis dependence, uncomplicated</option>
                            <option value="F12.11">F12.11 - Cannabis dependence, in remission</option>
                            <option value="F12.12">F12.12 - Cannabis dependence with intoxication</option>
                            <option value="F12.120">F12.120 - Cannabis dependence with intoxication, uncomplicated</option>
                            <option value="F12.121">F12.121 - Cannabis dependence with intoxication delirium</option>
                            <option value="F12.122">F12.122 - Cannabis dependence with intoxication with perceptual disturbance</option>
                            <option value="F12.129">F12.129 - Cannabis dependence with intoxication, unspecified</option>
                            <option value="F12.15">F12.15 - Cannabis dependence with psychotic disorder</option>
                            <option value="F12.150">F12.150 - Cannabis dependence with psychotic disorder with delusions</option>
                            <option value="F12.151">F12.151 - Cannabis dependence with psychotic disorder with hallucinations</option>
                            <option value="F12.159">F12.159 - Cannabis dependence with psychotic disorder, unspecified</option>
                            <option value="F12.18">F12.18 - Cannabis dependence with other cannabis-induced disorder</option>
                            <option value="F12.180">F12.180 - Cannabis dependence with cannabis-induced anxiety disorder</option>
                            <option value="F12.188">F12.188 - Cannabis dependence with other cannabis-induced disorder</option>
                            <option value="F12.19">F12.19 - Cannabis dependence with unspecified cannibis-induced disorder</option>
                            <option value="F12.9">F12.9 - Cannabis use, unspecified, complicated</option>
                            <option value="F12.92">F12.92 - Cannabis use, unspecified with intoxication</option>
                            <option value="F12.920">F12.920 - Cannabis use, unspecified with intoxication, uncomplicated</option>
                            <option value="F12.921">F12.921 - Cannabis use, unspecified with intoxication delirium</option>
                            <option value="F12.922">F12.922 - Cannabis use, unspecified with intoxication with perceptual disturbance</option>
                            <option value="F12.929">F12.929 - Cannabis use, unspecified with intoxication, unspecified</option>
                            <option value="F12.95">F12.95 - Cannabis use, unspecified with psychotic disorder</option>
                            <option value="F12.950">F12.950 - Cannabis use, unspecified with psychotic disorder with delusions</option>
                            <option value="F12.951">F12.951 - Cannabis use, unspecified with psychotic disorder with hallucinations</option>
                            <option value="F12.959">F12.959 - Cannabis use, unspecified with psychotic disorder, unspecified</option>
                            <option value="F12.98">F12.98 - Cannabis use, unspecified with other cannabis-induced disorder</option>
                            <option value="F12.980">F12.980 - Cannabis use, unspecified with anxiety disorder</option>
                            <option value="F12.988">F12.988 - Cannabis use, unspecified with other cannabis-induced disorder</option>
                            <option value="F12.99">F12.99 - Cannabis use, unspecified with unspecified cannibis-induced disorder</option>
                            <option value="F13.0">F13.0 - Sedative, hypnotic or anxiolytic-related abuse</option>
                            <option value="F13.00">F13.00 - Sedative, hypnotic or anxiolytic abuse, uncomplicated</option>
                            <option value="F13.02">F13.02 - Sedative, hypnotic or anxiolytic abuse with intoxication</option>
                            <option value="F13.020">F13.020 - Sedative, hypnotic or anxiolytic abuse with intoxication, uncomplicated</option>
                            <option value="F13.021">F13.021 - Sedative, hypnotic or anxiolytic abuse with intoxication delirium</option>
                            <option value="F13.029">F13.029 - Sedative, hypnotic or anxiolytic abuse with intoxication, unspecified</option>
                            <option value="F13.04">F13.04 - Sedative, hypnotic or anxiolytic abuse with sedative, hypnotic or anxiolytic-induced mood disorder</option>
                            <option value="F13.05">F13.05 - Sedative, hypnotic or anxiolytic abuse with sedative, hypnotic or anxiolytic-induced psychotic disorde</option>
                            <option value="F13.050">F13.050 - Sedative, hypnotic or anxiolytic abuse with sedative, hypnotic or anxiolytic-induced psychotic disorde</option>
                            <option value="F13.051">F13.051 - Sedative, hypnotic or anxiolytic abuse with sedative, hypnotic or anxiolytic-induced psychotic disorde</option>
                            <option value="F13.059">F13.059 - Sedative, hypnotic or anxiolytic abuse with sedative, hypnotic or anxiolytic-induced psychotic disorde</option>
                            <option value="F13.08">F13.08 - Sedative, hypnotic or anxiolytic abuse with other sedative, hypnotic or anxiolytic-induced disorders</option>
                            <option value="F13.080">F13.080 - Sedative, hypnotic or anxiolytic abuse with sedative, hypnotic or anxiolytic-induced anxiety disorder</option>
                            <option value="F13.081">F13.081 - Sedative, hypnotic or anxiolytic abuse with sedative, hypnotic or anxiolytic-induced sexual dysfunctio</option>
                            <option value="F13.082">F13.082 - Sedative, hypnotic or anxiolytic abuse with sedative, hypnotic or anxiolytic-induced sleep disorder</option>
                            <option value="F13.088">F13.088 - Sedative, hypnotic or anxiolytic abuse with other sedative, hypnotic or anxiolytic-induced disorder</option>
                            <option value="F13.09">F13.09 - Sedative, hypnotic or anxiolytic abuse with unspecified sedative, hypnotic or anxiolytic-induced disor</option>
                            <option value="F13.1">F13.1 - Sedative, hypnotic or anxiolytic-related dependence</option>
                            <option value="F13.10">F13.10 - Sedative, hypnotic or anxiolytic dependence, uncomplicated</option>
                            <option value="F13.11">F13.11 - Sedative, hypnotic or anxiolytic dependence, in remission</option>
                            <option value="F13.12">F13.12 - Sedative, hypnotic or anxiolytic dependence with intoxication</option>
                            <option value="F13.120">F13.120 - Sedative, hypnotic or anxiolytic dependence with intoxication, uncomplicated</option>
                            <option value="F13.121">F13.121 - Sedative, hypnotic or anxiolytic dependence with intoxication delirium</option>
                            <option value="F13.129">F13.129 - Sedative, hypnotic or anxiolytic dependence with intoxication, unspecified</option>
                            <option value="F13.13">F13.13 - Sedative, hypnotic or anxiolytic dependence with withdrawal</option>
                            <option value="F13.130">F13.130 - Sedative, hypnotic or anxiolytic dependence with withdrawal, uncomplicated</option>
                            <option value="F13.131">F13.131 - Sedative, hypnotic or anxiolytic dependence with withdrawal delirium</option>
                            <option value="F13.132">F13.132 - Sedative, hypnotic or anxiolytic dependence with withdrawal with perceptual disturbance</option>
                            <option value="F13.139">F13.139 - Sedative, hypnotic or anxiolytic dependence with withdrawal, unspecified</option>
                            <option value="F13.14">F13.14 - Sedative, hypnotic or anxiolytic dependence with sedative, hypnotic or anxiolytic-induced mood disorde</option>
                            <option value="F13.15">F13.15 - Sedative, hypnotic or anxiolytic dependence with sedative, hypnotic or anxiolytic-induced psychotic di</option>
                            <option value="F13.150">F13.150 - Sedative, hypnotic or anxiolytic dependence with sedative, hypnotic or anxiolytic-induced psychotic di</option>
                            <option value="F13.151">F13.151 - Sedative, hypnotic or anxiolytic dependence with sedative, hypnotic or anxiolytic-induced psychotic di</option>
                            <option value="F13.159">F13.159 - Sedative, hypnotic or anxiolytic dependence with sedative, hypnotic or anxiolytic-induced psychotic di</option>
                            <option value="F13.16">F13.16 - Sedative, hypnotic or anxiolytic dependence with sedative, hypnotic or anxiolytic persisting amnestic</option>
                            <option value="F13.17">F13.17 - Sedative, hypnotic or anxiolytic dependence with sedative, hypnotic or anxiolytic persisting dementia</option>
                            <option value="F13.18">F13.18 - Sedative, hypnotic or anxiolytic dependence with other sedative, hypnotic or anxiolytic-induced disord</option>
                            <option value="F13.180">F13.180 - Sedative, hypnotic or anxiolytic dependence with sedative, hypnotic or anxiolytic-induced anxiety diso</option>
                            <option value="F13.181">F13.181 - Sedative, hypnotic or anxiolytic dependence with sedative, hypnotic or anxiolytic-induced sexual dysfu</option>
                            <option value="F13.182">F13.182 - Sedative, hypnotic or anxiolytic dependence with sedative, hypnotic or anxiolytic-induced sleep disord</option>
                            <option value="F13.188">F13.188 - Sedative, hypnotic or anxiolytic dependence with other sedative, hypnotic or anxiolytic-induced disord</option>
                            <option value="F13.19">F13.19 - Sedative, hypnotic or anxiolytic dependence with unspecified sedative, hypnotic or anxiolytic-induced</option>
                            <option value="F13.9">F13.9 - Sedative, hypnotic or anxiolytic-related, unspecified, complicated</option>
                            <option value="F13.92">F13.92 - Sedative, hypnotic or anxiolytic use, unspecified with intoxication</option>
                            <option value="F13.920">F13.920 - Sedative, hypnotic or anxiolytic use, unspecified with intoxication, uncomplicated</option>
                            <option value="F13.921">F13.921 - Sedative, hypnotic or anxiolytic use, unspecified with intoxication delirium</option>
                            <option value="F13.929">F13.929 - Sedative, hypnotic or anxiolytic use, unspecified with intoxication, unspecified</option>
                            <option value="F13.93">F13.93 - Sedative, hypnotic or anxiolytic use, unspecified with withdrawal</option>
                            <option value="F13.94">F13.94 - Sedative, hypnotic or anxiolytic use, unspecified with sedative, hypnotic or anxiolytic-induced mood d</option>
                            <option value="F13.95">F13.95 - Sedative, hypnotic or anxiolytic use, unspecified with sedative, hypnotic or anxiolytic-induced psycho</option>
                            <option value="F13.950">F13.950 - Sedative, hypnotic or anxiolytic use, unspecified with sedative, hypnotic or anxiolytic-induced psycho</option>
                            <option value="F13.951">F13.951 - Sedative, hypnotic or anxiolytic use, unspecified with sedative, hypnotic or anxiolytic-induced psycho</option>
                            <option value="F13.959">F13.959 - Sedative, hypnotic or anxiolytic use, unspecified with sedative, hypnotic or anxiolytic-induced psycho</option>
                            <option value="F13.96">F13.96 - Sedative, hypnotic or anxiolytic use, unspecified with sedative, hypnotic or anxiolytic persisting amn</option>
                            <option value="F13.97">F13.97 - Sedative, hypnotic or anxiolytic use, unspecified with sedative, hypnotic or anxiolytic persisting dem</option>
                            <option value="F13.98">F13.98 - Sedative, hypnotic or anxiolytic use, unspecified with other sedative, hypnotic or anxiolytic-induced</option>
                            <option value="F13.980">F13.980 - Sedative, hypnotic or anxiolytic use, unspecified with sedative, hypnotic or anxiolytic-induced anxiet</option>
                            <option value="F13.981">F13.981 - Sedative, hypnotic or anxiolytic use, unspecified with sedative, hypnotic or anxiolytic-induced sexual</option>
                            <option value="F13.982">F13.982 - Sedative, hypnotic or anxiolytic use, unspecified with sedative, hypnotic or anxiolytic-induced sleep</option>
                            <option value="F13.988">F13.988 - Sedative, hypnotic or anxiolytic use, unspecified with other sedative, hypnotic or anxiolytic-induced</option>
                            <option value="F13.99">F13.99 - Sedative, hypnotic or anxiolytic use, unspecified with unspecified sedative, hypnotic or anxiolytic-in</option>
                            <option value="F14.0">F14.0 - Cocaine abuse</option>
                            <option value="F14.00">F14.00 - Cocaine abuse, uncomplicated</option>
                            <option value="F14.02">F14.02 - Cocaine abuse with intoxication</option>
                            <option value="F14.020">F14.020 - Cocaine abuse with intoxication, uncomplicated</option>
                            <option value="F14.021">F14.021 - Cocaine abuse with intoxication with delirium</option>
                            <option value="F14.022">F14.022 - Cocaine abuse with intoxication with perceptual disturbance</option>
                            <option value="F14.029">F14.029 - Cocaine abuse with intoxication, unspecified</option>
                            <option value="F14.04">F14.04 - Cocaine abuse with cocaine-induced mood disorder</option>
                            <option value="F14.05">F14.05 - Cocaine abuse with cocaine-induced psychotic disorder</option>
                            <option value="F14.050">F14.050 - Cocaine abuse with cocaine-induced psychotic disorder with delusions</option>
                            <option value="F14.051">F14.051 - Cocaine abuse with cocaine-induced psychotic disorder with hallucinations</option>
                            <option value="F14.059">F14.059 - Cocaine abuse with cocaine-induced psychotic disorder, unspecified</option>
                            <option value="F14.08">F14.08 - Cocaine abuse with other cocaine-induced disorder</option>
                            <option value="F14.080">F14.080 - Cocaine abuse with cocaine-induced anxiety disorder</option>
                            <option value="F14.081">F14.081 - Cocaine abuse with cocaine-induced sexual dysfunction</option>
                            <option value="F14.082">F14.082 - Cocaine abuse with cocaine-induced sleep disorder</option>
                            <option value="F14.088">F14.088 - Cocaine abuse with other cocaine-induced disorder</option>
                            <option value="F14.09">F14.09 - Cocaine abuse with unspecified cocaine-induced disorder</option>
                            <option value="F14.1">F14.1 - Cocaine dependence</option>
                            <option value="F14.10">F14.10 - Cocaine dependence, uncomplicated</option>
                            <option value="F14.11">F14.11 - Cocaine dependence, in remission</option>
                            <option value="F14.12">F14.12 - Cocaine dependence with intoxication</option>
                            <option value="F14.120">F14.120 - Cocaine dependence with intoxication, uncomplicated</option>
                            <option value="F14.121">F14.121 - Cocaine dependence with intoxication delirium</option>
                            <option value="F14.122">F14.122 - Cocaine dependence with intoxication with perceptual disturbance</option>
                            <option value="F14.129">F14.129 - Cocaine dependence with intoxication, unspecified</option>
                            <option value="F14.13">F14.13 - Cocaine dependence with withdrawal</option>
                            <option value="F14.14">F14.14 - Cocaine dependence with cocaine-induced mood disorder</option>
                            <option value="F14.15">F14.15 - Cocaine dependence with cocaine-induced psychotic disorder</option>
                            <option value="F14.150">F14.150 - Cocaine dependence with cocaine-induced psychotic disorder with delusions</option>
                            <option value="F14.151">F14.151 - Cocaine dependence with cocaine-induced psychotic disorder with hallucinations</option>
                            <option value="F14.159">F14.159 - Cocaine dependence with cocaine-induced psychotic disorder, unspecified</option>
                            <option value="F14.18">F14.18 - Cocaine dependence with other cocaine-induced disorder</option>
                            <option value="F14.180">F14.180 - Cocaine dependence with cocaine-induced anxiety diosrder</option>
                            <option value="F14.181">F14.181 - Cocaine dependence with cocaine-induced sexual dysfunction</option>
                            <option value="F14.182">F14.182 - Cocaine dependence with cocaine-induced sleep disorder</option>
                            <option value="F14.188">F14.188 - Cocaine dependence with other cocaine-induced disorder</option>
                            <option value="F14.19">F14.19 - Cocaine dependence with unspecified cocaine-induced disorder</option>
                            <option value="F14.9">F14.9 - Cocaine use, unspecified, complicated</option>
                            <option value="F14.92">F14.92 - Cocaine use, unspecified with intoxication</option>
                            <option value="F14.920">F14.920 - Cocaine use, unspecified with intoxication, uncomplicated</option>
                            <option value="F14.921">F14.921 - Cocaine use, unspecified with intoxication delirium</option>
                            <option value="F14.922">F14.922 - Cocaine use, unspecified with intoxication with perceptual disturbance</option>
                            <option value="F14.929">F14.929 - Cocaine use, unspecified with intoxication, unspecified</option>
                            <option value="F14.94">F14.94 - Cocaine use, unspecified with cocaine-induced mood disorder</option>
                            <option value="F14.95">F14.95 - Cocaine use, unspecified with cocaine-induced psychotic disorder</option>
                            <option value="F14.950">F14.950 - Cocaine use, unspecified with cocaine-induced psychotic disorder with delusions</option>
                            <option value="F14.951">F14.951 - Cocaine use, unspecified with cocaine-induced psychotic disorder with hallucinations</option>
                            <option value="F14.959">F14.959 - Cocaine use, unspecified with cocaine-induced psychotic disorder, unspecified</option>
                            <option value="F14.98">F14.98 - Cocaine use, unspecified with other specified cocaine-induced disorder</option>
                            <option value="F14.980">F14.980 - Cocaine use, unspecified with cocaine-induced anxiety disorder</option>
                            <option value="F14.981">F14.981 - Cocaine use, unspecified with cocaine-induced sexual dysfunction</option>
                            <option value="F14.982">F14.982 - Cocaine use, unspecified with cocaine-induced sleep disorder</option>
                            <option value="F14.988">F14.988 - Cocaine use, unspecified with other cocaine-induced disorder</option>
                            <option value="F14.99">F14.99 - Cocaine use, unspecified with unspecified cocaine-induced disorder</option>
                            <option value="F15.0">F15.0 - Other stimulant abuse</option>
                            <option value="F15.00">F15.00 - Other stimulant abuse, uncomplicated</option>
                            <option value="F15.02">F15.02 - Other stimulant abuse with intoxication</option>
                            <option value="F15.020">F15.020 - Other stimulant abuse with intoxication, uncomplicated</option>
                            <option value="F15.021">F15.021 - Other stimulant abuse with intoxication delirium</option>
                            <option value="F15.022">F15.022 - Other stimulant abuse with intoxication with perceptual disturbance</option>
                            <option value="F15.029">F15.029 - Other stimulant abuse with intoxication, unspecified</option>
                            <option value="F15.04">F15.04 - Other stimulant abuse with stimulant-induced mood disorder</option>
                            <option value="F15.05">F15.05 - Other stimulant abuse with stimulant-induced psychotic disorder</option>
                            <option value="F15.050">F15.050 - Other stimulant abuse with stimulant-induced psychotic disorder with delusions</option>
                            <option value="F15.051">F15.051 - Other stimulant abuse with stimulant-induced psychotic disorder with hallucinations</option>
                            <option value="F15.059">F15.059 - Other stimulant abuse with stimulant-induced psychotic disorder, unspecified</option>
                            <option value="F15.08">F15.08 - Other stimulant abuse with other stimulant-induced disorder</option>
                            <option value="F15.080">F15.080 - Other stimulant abuse with stimulant-induced anxiety disorder</option>
                            <option value="F15.081">F15.081 - Other stimulant abuse with stimulant-induced sexual dysfunction</option>
                            <option value="F15.082">F15.082 - Other stimulant abuse with stimulant-induced sleep disorder</option>
                            <option value="F15.088">F15.088 - Other stimulant abuse with other stimulant-induced disorder</option>
                            <option value="F15.09">F15.09 - Other stimulant abuse with unspecified stimulant-induced disorder</option>
                            <option value="F15.1">F15.1 - Other stimulant dependence</option>
                            <option value="F15.10">F15.10 - Other stimulant dependence, uncomplicated</option>
                            <option value="F15.11">F15.11 - Other stimulant dependence, in remission</option>
                            <option value="F15.12">F15.12 - Other stimulant dependence with intoxication</option>
                            <option value="F15.120">F15.120 - Other stimulant dependence with intoxication, uncomplicated</option>
                            <option value="F15.121">F15.121 - Other stimulant dependence with intoxication delirium</option>
                            <option value="F15.122">F15.122 - Other stimulant dependence with intoxication with perceptual disturbance</option>
                            <option value="F15.129">F15.129 - Other stimulant dependence with intoxication, unspecified</option>
                            <option value="F15.13">F15.13 - Other stimulant dependence with withdrawal</option>
                            <option value="F15.14">F15.14 - Other stimulant dependence with stimulant-induced mood disorder</option>
                            <option value="F15.15">F15.15 - Other stimulant dependence with stimulant-induced psychotic disorder</option>
                            <option value="F15.150">F15.150 - Other stimulant dependence with stimulant-induced psychotic disorder with delusions</option>
                            <option value="F15.151">F15.151 - Other stimulant dependence with stimulant-induced psychotic disorder with hallucinations</option>
                            <option value="F15.159">F15.159 - Other stimulant dependence with stimulant-induced psychotic disorder, unspecified</option>
                            <option value="F15.18">F15.18 - Other stimulant dependence with other stimulant-induced disorder</option>
                            <option value="F15.180">F15.180 - Other stimulant dependence with stimulant-induced anxiety disorder</option>
                            <option value="F15.181">F15.181 - Other stimulant dependence with stimulant-induced sexual dysfunction</option>
                            <option value="F15.182">F15.182 - Other stimulant dependence with stimulant-induced sleep disorder</option>
                            <option value="F15.188">F15.188 - Other stimulant dependence with other stimulant-induced disorder</option>
                            <option value="F15.19">F15.19 - Other stimulant dependence with unspecified stimulant-induced disorder</option>
                            <option value="F15.5">F15.5 - Other stimulants use, including caffeine with psychotic disorder </option>
                            <option value="F15.9">F15.9 - Other stimulant use, unspecified, complicated</option>
                            <option value="F15.92">F15.92 - Other stimulant use, unspecified with intoxication</option>
                            <option value="F15.920">F15.920 - Other stimulant use, unspecified with intoxication, uncomplicated</option>
                            <option value="F15.921">F15.921 - Other stimulant use, unspecified with intoxication delirium</option>
                            <option value="F15.922">F15.922 - Other stimulant use, unspecified with intoxication with perceptual disturbance</option>
                            <option value="F15.929">F15.929 - Other stimulant use, unspecified with intoxication, unspecified</option>
                            <option value="F15.93">F15.93 - Other stimulant use, unspecified with withdrawal</option>
                            <option value="F15.94">F15.94 - Other stimulant use, unspecified with stimulant-induced mood disorder</option>
                            <option value="F15.95">F15.95 - Other stimulant use, unspecified with stimulant-induced psychotic disorder</option>
                            <option value="F15.950">F15.950 - Other stimulant use, unspecified with stimulant-induced psychotic disorder with delusions</option>
                            <option value="F15.951">F15.951 - Other stimulant use, unspecified with stimulant-induced psychotic disorder with hallucinations</option>
                            <option value="F15.959">F15.959 - Other stimulant use, unspecified with stimulant-induced psychotic disorder, unspecified</option>
                            <option value="F15.98">F15.98 - Other stimulant use, unspecified with other stimulant-induced disorder</option>
                            <option value="F15.980">F15.980 - Other stimulant use, unspecified with stimulant-induced anxiety disorder</option>
                            <option value="F15.981">F15.981 - Other stimulant use, unspecified with stimulant-induced sexual dysfunction</option>
                            <option value="F15.982">F15.982 - Other stimulant use, unspecified with stimulant-induced sleep disorder</option>
                            <option value="F15.988">F15.988 - Other stimulant use, unspecified with other stimulant-induced disorder</option>
                            <option value="F15.99">F15.99 - Other stimulant use, unspecified with unspecified stimulant-induced disorder</option>
                            <option value="F16.0">F16.0 - Hallucinogen abuse</option>
                            <option value="F16.00">F16.00 - Hallucinogen abuse, uncomplicated</option>
                            <option value="F16.02">F16.02 - Hallucinogen abuse with intoxication</option>
                            <option value="F16.020">F16.020 - Hallucinogen abuse with intoxication, uncomplicated</option>
                            <option value="F16.021">F16.021 - Hallucinogen abuse with intoxication with delirium</option>
                            <option value="F16.029">F16.029 - Hallucinogen abuse with intoxication, unspecified</option>
                            <option value="F16.04">F16.04 - Hallucinogen abuse with hallucinogen-induced mood disorder</option>
                            <option value="F16.05">F16.05 - Hallucinogen abuse with hallucinogen-induced psychotic disorder</option>
                            <option value="F16.050">F16.050 - Hallucinogen abuse with hallucinogen-induced psychotic disorder with delusions</option>
                            <option value="F16.051">F16.051 - Hallucinogen abuse with hallucinogen-induced psychotic disorder with hallucinations</option>
                            <option value="F16.059">F16.059 - Hallucinogen abuse with hallucinogen-induced psychotic disorder, unspecified</option>
                            <option value="F16.08">F16.08 - Hallucinogen abuse with other hallucinogen-induced disorder</option>
                            <option value="F16.080">F16.080 - Hallucinogen abuse with hallucinogen-induced anxiety disorder</option>
                            <option value="F16.083">F16.083 - Hallucinogen abuse with hallucinogen persisting perception disorder (flashbacks)</option>
                            <option value="F16.088">F16.088 - Hallucinogen abuse with other hallucinogen-induced disorder</option>
                            <option value="F16.09">F16.09 - Hallucinogen abuse with unspecified hallucinogen-induced disorder</option>
                            <option value="F16.1">F16.1 - Hallucinogen dependence</option>
                            <option value="F16.10">F16.10 - Hallucinogen dependence, uncomplicated</option>
                            <option value="F16.11">F16.11 - Hallucinogen dependence, in remission</option>
                            <option value="F16.12">F16.12 - Hallucinogen dependence with intoxication</option>
                            <option value="F16.120">F16.120 - Hallucinogen dependence with intoxication, uncomplicated</option>
                            <option value="F16.121">F16.121 - Hallucinogen dependence with intoxication with delirium</option>
                            <option value="F16.129">F16.129 - Hallucinogen dependence with intoxication, unspecified</option>
                            <option value="F16.14">F16.14 - Hallucinogen dependence with hallucinogen-induced mood disorder</option>
                            <option value="F16.15">F16.15 - Hallucinogen dependence with hallucinogen-induced psychotic disorder</option>
                            <option value="F16.150">F16.150 - Hallucinogen dependence with hallucinogen-induced psychotic disorder with delusions</option>
                            <option value="F16.151">F16.151 - Hallucinogen dependence with hallucinogen-induced psychotic disorder with hallucinations</option>
                            <option value="F16.159">F16.159 - Hallucinogen dependence with hallucinogen-induced psychotic disorder, unspecified</option>
                            <option value="F16.18">F16.18 - Hallucinogen dependence with other hallucinogen-induced disorder</option>
                            <option value="F16.180">F16.180 - Hallucinogen dependence with hallucinogen-induced anxiety disorder</option>
                            <option value="F16.183">F16.183 - Hallucinogen dependence with hallucinogen persisting perception disorder (flashbacks)</option>
                            <option value="F16.188">F16.188 - Hallucinogen dependence with other hallucinogen-induced disorder</option>
                            <option value="F16.19">F16.19 - Hallucinogen dependence with unspecified hallucinogen-induced disorder</option>
                            <option value="F16.9">F16.9 - Hallucinogen use, unspecified, complicated</option>
                            <option value="F16.90">F16.90 - Hallucinogen use, unspecified, uncomplicated</option>
                            <option value="F16.92">F16.92 - Hallucinogen use, unspecified with intoxication</option>
                            <option value="F16.920">F16.920 - Hallucinogen use, unspecified with intoxication, uncomplicated</option>
                            <option value="F16.921">F16.921 - Hallucinogen use, unspecified with intoxication with delirium</option>
                            <option value="F16.929">F16.929 - Hallucinogen use, unspecified with intoxication, unspecified</option>
                            <option value="F16.94">F16.94 - Hallucinogen use, unspecified with hallucinogen-induced mood disorder</option>
                            <option value="F16.95">F16.95 - Hallucinogen use, unspecified with hallucinogen-induced psychotic disorder</option>
                            <option value="F16.950">F16.950 - Hallucinogen use, unspecified with hallucinogen-induced psychotic disorder with delusions</option>
                            <option value="F16.951">F16.951 - Hallucinogen use, unspecified with hallucinogen-induced psychotic disorder with hallucinations</option>
                            <option value="F16.959">F16.959 - Hallucinogen use, unspecified with hallucinogen-induced psychotic disorder, unspecified</option>
                            <option value="F16.98">F16.98 - Hallucinogen use, unspecified with other specified hallucinogen-induced disorder</option>
                            <option value="F16.980">F16.980 - Hallucinogen use, unspecified with hallucinogen-induced anxiety disorder</option>
                            <option value="F16.983">F16.983 - Hallucinogen use, unspecified with hallucinogen persisting perception disorder (flashbacks)</option>
                            <option value="F16.988">F16.988 - Hallucinogen use, unspecified with other hallucinogen-induced disorder</option>
                            <option value="F16.99">F16.99 - Hallucinogen use, unspecified with unspecified hallucinogen-induced disorder</option>
                            <option value="F17.1">F17.1 - Nicotine dependence</option>
                            <option value="F17.10">F17.10 - Nicotine dependence, uncomplicated</option>
                            <option value="F17.11">F17.11 - Nicotine dependence, in remission</option>
                            <option value="F17.13">F17.13 - Nicotine dependence with withdrawal</option>
                            <option value="F17.18">F17.18 - Nicotine dependence with other nicotine-induced disorders</option>
                            <option value="F17.19">F17.19 - Nicotine dependence with unspecified nicotine-induced disorders</option>
                            <option value="F18.0">F18.0 - Inhalant abuse</option>
                            <option value="F18.00">F18.00 - Inhalant abuse, uncomplicated</option>
                            <option value="F18.02">F18.02 - Inhalant abuse with intoxication</option>
                            <option value="F18.020">F18.020 - Inhalant abuse with intoxication, uncomplicated</option>
                            <option value="F18.021">F18.021 - Inhalant abuse with intoxication delirium</option>
                            <option value="F18.029">F18.029 - Inhalant abuse with intoxication, unspecified</option>
                            <option value="F18.04">F18.04 - Inhalant abuse with inhalant-induced mood disorder</option>
                            <option value="F18.05">F18.05 - Inhalant abuse with inhalant-induced psychotic disorder</option>
                            <option value="F18.050">F18.050 - Inhalant abuse with inhalant-induced psychotic disorder with delusions</option>
                            <option value="F18.051">F18.051 - Inhalant abuse with inhalant-induced psychotic disorder with hallucinations</option>
                            <option value="F18.059">F18.059 - Inhalant abuse with inhalant-induced psychotic disorder, unspecified</option>
                            <option value="F18.07">F18.07 - Inhalant abuse with inhalant-induced dementia</option>
                            <option value="F18.08">F18.08 - Inhalant abuse with other inhalant-induced disorders</option>
                            <option value="F18.080">F18.080 - Inhalant abuse with inhalant-induced anxiety disorder</option>
                            <option value="F18.088">F18.088 - Inhalant abuse with other inhalant-induced disorder</option>
                            <option value="F18.09">F18.09 - Inhalant abuse with unspecified inhalant-induced disorder</option>
                            <option value="F18.1">F18.1 - Inhalant dependence</option>
                            <option value="F18.10">F18.10 - Inhalant dependence, uncomplicated</option>
                            <option value="F18.11">F18.11 - Inhalant dependence, in remission</option>
                            <option value="F18.12">F18.12 - Inhalant dependence with intoxication</option>
                            <option value="F18.120">F18.120 - Inhalant dependence with intoxication, uncomplicated</option>
                            <option value="F18.121">F18.121 - Inhalant dependence with intoxication delirium</option>
                            <option value="F18.129">F18.129 - Inhalant dependence with intoxication, unspecified</option>
                            <option value="F18.14">F18.14 - Inhalant dependence with inhalant-induced mood disorder</option>
                            <option value="F18.15">F18.15 - Inhalant dependence with inhalant-induced psychotic disorder</option>
                            <option value="F18.150">F18.150 - Inhalant dependence with inhalant-induced psychotic disorder with delusions</option>
                            <option value="F18.151">F18.151 - Inhalant dependence with inhalant-induced psychotic disorder with hallucinations</option>
                            <option value="F18.159">F18.159 - Inhalant dependence with inhalant-induced psychotic disorder, unspecified</option>
                            <option value="F18.17">F18.17 - Inhalant dependence with inhalant-induced dementia</option>
                            <option value="F18.18">F18.18 - Inhalant dependence with other inhalant-induced disorders</option>
                            <option value="F18.180">F18.180 - Inhalant dependence with inhalant-induced anxiety disorder</option>
                            <option value="F18.188">F18.188 - Inhalant dependence with other inhalant-induced disorder</option>
                            <option value="F18.19">F18.19 - Inhalant dependence with unspecified inhalant-induced disorder</option>
                            <option value="F18.9">F18.9 - Inhalant use, unspecified, complicated</option>
                            <option value="F18.92">F18.92 - Inhalant use, unspecified with intoxication</option>
                            <option value="F18.920">F18.920 - Inhalant use, unspecified with intoxication, uncomplicated</option>
                            <option value="F18.921">F18.921 - Inhalant use, unspecified with intoxication with delirium</option>
                            <option value="F18.929">F18.929 - Inhalant use, unspecified with intoxication, unspecified</option>
                            <option value="F18.94">F18.94 - Inhalant use, unspecified with inhalant-induced mood disorder</option>
                            <option value="F18.95">F18.95 - Inhalant use, unspecified with inhalant-induced psychotic disorder</option>
                            <option value="F18.950">F18.950 - Inhalant use, unspecified with inhalant-induced psychotic disorder with delusions</option>
                            <option value="F18.951">F18.951 - Inhalant use, unspecified with inhalant-induced psychotic disorder with hallucinations</option>
                            <option value="F18.959">F18.959 - Inhalant use, unspecified with inhalant-induced psychotic disorder, unspecified</option>
                            <option value="F18.97">F18.97 - Inhalant use, unspecified with inhalant-induced dementia</option>
                            <option value="F18.98">F18.98 - Inhalant use, unspecified with other inhalant-induced disorders</option>
                            <option value="F18.980">F18.980 - Inhalant use, unspecified with inhalant-induced anxiety disorder</option>
                            <option value="F18.988">F18.988 - Inhalant use, unspecified with other inhalant-induced disorder</option>
                            <option value="F18.99">F18.99 - Inhalant use, unspecified with unspecified inhalant-induced disorder</option>
                            <option value="F19.0">F19.0 - Other psychoactive substance abuse</option>
                            <option value="F19.00">F19.00 - Other psychoactive substance abuse, uncomplicated</option>
                            <option value="F19.02">F19.02 - Other psychoactive substance abuse with intoxication</option>
                            <option value="F19.020">F19.020 - Other psychoactive substance abuse with intoxication, uncomplicated</option>
                            <option value="F19.021">F19.021 - Other psychoactive substance abuse with intoxication with delirium</option>
                            <option value="F19.022">F19.022 - Other psychoactive substance abuse with intoxication with perceptual disturbances</option>
                            <option value="F19.029">F19.029 - Other psychoactive substance abuse with intoxication, unspecified</option>
                            <option value="F19.04">F19.04 - Other psychoactive substance abuse with psychoactive substance-induced mood disorder</option>
                            <option value="F19.05">F19.05 - Other psychoactive substance abuse with psychoactive substance-induced psychotic disorder</option>
                            <option value="F19.050">F19.050 - Other psychoactive substance abuse with psychoactive substance-induced psychotic disorder with delusio</option>
                            <option value="F19.051">F19.051 - Other psychoactive substance abuse with psychoactive substance-induced psychotic disorder with halluci</option>
                            <option value="F19.059">F19.059 - Other psychoactive substance abuse with psychoactive substance-induced psychotic disorder, unspecified</option>
                            <option value="F19.06">F19.06 - Other psychoactive substance abuse with psychoactive substance-induced amnestic disorder</option>
                            <option value="F19.07">F19.07 - Other psychoactive substance abuse with psychoactive substance-induced dementia</option>
                            <option value="F19.08">F19.08 - Other psychoactive substance abuse with other psychoactive substance-induced disorders</option>
                            <option value="F19.080">F19.080 - Other psychoactive substance abuse with psychoactive substance-induced anxiety disorder</option>
                            <option value="F19.081">F19.081 - Other psychoactive substance abuse with psychoactive substance-induced sexual dysfunction</option>
                            <option value="F19.082">F19.082 - Other psychoactive substance abuse with psychoactive substance-induced sleep disorder</option>
                            <option value="F19.088">F19.088 - Other psychoactive substance abuse with other psychoactive substance-induced disorder</option>
                            <option value="F19.09">F19.09 - Other psychoactive substance abuse with unspecified psychoactive substance-induced disorder</option>
                            <option value="F19.1">F19.1 - Other psychoactive substance dependence</option>
                            <option value="F19.10">F19.10 - Other psychoactive substance dependence, uncomplicated</option>
                            <option value="F19.11">F19.11 - Other psychoactive substance dependence, in remission</option>
                            <option value="F19.12">F19.12 - Other psychoactive substance dependence with intoxication</option>
                            <option value="F19.120">F19.120 - Other psychoactive substance dependence with intoxication, uncomplicated</option>
                            <option value="F19.121">F19.121 - Other psychoactive substance dependence with intoxication delirium</option>
                            <option value="F19.122">F19.122 - Other psychoactive substance dependence with intoxication with perceptual disturbance</option>
                            <option value="F19.129">F19.129 - Other psychoactive substance dependence with intoxication, unspecified</option>
                            <option value="F19.13">F19.13 - Other psychoactive substance dependence with withdrawal</option>
                            <option value="F19.14">F19.14 - Other psychoactive substance dependence with psychoactive substance-induced mood disorder</option>
                            <option value="F19.15">F19.15 - Other psychoactive substance dependence with psychoactive substance-induced psychotic disorder</option>
                            <option value="F19.150">F19.150 - Other psychoactive substance dependence with psychoactive substance-induced psychotic disorder with de</option>
                            <option value="F19.151">F19.151 - Other psychoactive substance dependence with psychoactive substance-induced psychotic disorder with ha</option>
                            <option value="F19.159">F19.159 - Other psychoactive substance dependence with psychoactive substance-induced psychotic disorder, unspec</option>
                            <option value="F19.16">F19.16 - Other psychoactive substance dependence with psychoactive substance-induced amnestic disorder</option>
                            <option value="F19.17">F19.17 - Other psychoactive substance dependence with psychoactive substance-induced dementia</option>
                            <option value="F19.18">F19.18 - Other psychoactive substance dependence with other psychoactive substance-induced disorders</option>
                            <option value="F19.180">F19.180 - Other psychoactive substance dependence with psychoactive substance-induced anxiety disorder</option>
                            <option value="F19.181">F19.181 - Other psychoactive substance dependence with psychoactive substance-induced sexual dysfunction</option>
                            <option value="F19.182">F19.182 - Other psychoactive substance dependence with psychoactive substance-induced sleep disorder</option>
                            <option value="F19.188">F19.188 - Other psychoactive substance dependence with other psychoactive substance-induced disorder</option>
                            <option value="F19.19">F19.19 - Other psychoactive substance dependence with unspecified psychoactive substance-induced disorder</option>
                            <option value="F19.5">F19.5 - Other psychoactive substances; misuse of drugs NOS: harmful use</option>
                            <option value="F19.9">F19.9 - Other psychoactive substance use, unspecified, complicated</option>
                            <option value="F19.92">F19.92 - Other psychoactive substance use, unspecified with intoxication</option>
                            <option value="F19.920">F19.920 - Other psychoactive substance use, unspecified with intoxication, uncomplicated</option>
                            <option value="F19.921">F19.921 - Other psychoactive substance use, unspecified with intoxication with delirium</option>
                            <option value="F19.922">F19.922 - Other psychoactive substance use, unspecified with intoxication with perceptual disturbance</option>
                            <option value="F19.929">F19.929 - Other psychoactive substance use, unspecified with intoxication, unspecified</option>
                            <option value="F19.93">F19.93 - Other psychoactive substance use, unspecified with withdrawal</option>
                            <option value="F19.94">F19.94 - Other psychoactive substance use, unspecified with psychoactive substance-induced mood disorder</option>
                            <option value="F19.95">F19.95 - Other psychoactive substance use, unspecified with psychoactive substance-induced psychotic disorder</option>
                            <option value="F19.950">F19.950 - Other psychoactive substance use, unspecified with psychoactive substance-induced psychotic disorder w</option>
                            <option value="F19.951">F19.951 - Other psychoactive substance use, unspecified with psychoactive substance-induced psychotic disorder w</option>
                            <option value="F19.959">F19.959 - Other psychoactive substance use, unspecified with psychoactive substance-induced psychotic disorder,</option>
                            <option value="F19.96">F19.96 - Other psychoactive substance use, unspecified with psychoactive substance-induced amnestic disorder</option>
                            <option value="F19.97">F19.97 - Other psychoactive substance use, unspecified with psychoactive substance-induced dementia</option>
                            <option value="F19.98">F19.98 - Other psychoactive substance use, unspecified with other psychoactive substance-induced disorders</option>
                            <option value="F19.980">F19.980 - Other psychoactive substance use, unspecified with psychoactive substance-induced anxiety disorder</option>
                            <option value="F19.981">F19.981 - Other psychoactive substance use, unspecified with psychoactive substance-induced sexual dysfunction</option>
                            <option value="F19.982">F19.982 - Other psychoactive substance use, unspecified with psychoactive substance-induced sleep disorder</option>
                            <option value="F19.988">F19.988 - Other psychoactive substance use, unspecified with other psychoactive substance-induced disorder</option>
                            <option value="F19.99">F19.99 - Other psychoactive substance use, unspecified with unspecified psychoactive substance-induced disorder</option>
                            <option value="F20.0">F20.0 - Paranoid schizophrenia</option>
                            <option value="F20.1">F20.1 - Disorganized schizophrenia</option>
                            <option value="F20.2">F20.2 - Catatonic schizophrenia</option>
                            <option value="F20.3">F20.3 - Undifferentiated schizophrenia</option>
                            <option value="F20.4">F20.4 - Post-schizophrenic depression</option>
                            <option value="F20.5">F20.5 - Residual schizophrenia</option>
                            <option value="F20.6">F20.6 - Simple schizophrenia</option>
                            <option value="F20.8">F20.8 - Other schizophrenia</option>
                            <option value="F20.81">F20.81 - Schizophreniform disorder</option>
                            <option value="F20.89">F20.89 - Other schizophrenia</option>
                            <option value="F20.9">F20.9 - Schizophrenia, unspecified</option>
                            <option value="F22.0">F22.0 - Delusional disorder</option>
                            <option value="F22.8">F22.8 - Other persistent delusional disorders</option>
                            <option value="F22.9">F22.9 - Persistent delusional disorder, unspecified</option>
                            <option value="F23.0">F23.0 - Acute polymorphic psychotic disorder without symptoms of schizophrenia</option>
                            <option value="F23.1">F23.1 - Acute polymorphic psychotic disorder with symptoms of schizophrenia</option>
                            <option value="F23.2">F23.2 - Acute schizophrenia-like psychotic disorder</option>
                            <option value="F23.3">F23.3 - Other acute predominantly delusional psychotic disorders</option>
                            <option value="F23.8">F23.8 - Other acute and transient psychotic disorders</option>
                            <option value="F23.9">F23.9 - Acute and transient psychotic disorder, unspecified</option>
                            <option value="F25.0">F25.0 - Schizoaffective disorder, bipolar type</option>
                            <option value="F25.1">F25.1 - Schizoaffective disorder, depressive type</option>
                            <option value="F25.2">F25.2 - Schizoaffective disorder, mixed type</option>
                            <option value="F25.8">F25.8 - Other schizoaffective disorders</option>
                            <option value="F25.9">F25.9 - Schizoaffective disorder, unspecified</option>
                            <option value="F30.0">F30.0 - Hypomania</option>
                            <option value="F30.1">F30.1 - Manic episode without psychotic symptoms</option>
                            <option value="F30.10">F30.10 - Manic episode without psychotic symptoms, unspecified</option>
                            <option value="F30.11">F30.11 - Manic episode without psychotic symptoms, mild</option>
                            <option value="F30.12">F30.12 - Manic episode without psychotic symptoms, moderate</option>
                            <option value="F30.13">F30.13 - Manic episode, severe, without psychotic symptoms</option>
                            <option value="F30.2">F30.2 - Manic episode, severe with psychotic symptoms</option>
                            <option value="F30.3">F30.3 - Manic episode in partial remission</option>
                            <option value="F30.4">F30.4 - Manic episode in full remission</option>
                            <option value="F30.8">F30.8 - Other manic episodes</option>
                            <option value="F30.9">F30.9 - Manic episode, unspecified</option>
                            <option value="F31.0">F31.0 - Bipolar disorder, current episode hypomanic</option>
                            <option value="F31.1">F31.1 - Bipolar disorder, current episode manic without psychotic features</option>
                            <option value="F31.10">F31.10 - Bipolar disorder, current episode manic without psychotic features, unspecified</option>
                            <option value="F31.11">F31.11 - Bipolar disorder, current episode manic without psychotic features, mild</option>
                            <option value="F31.12">F31.12 - Bipolar disorder, current episode manic without psychotic features, moderate</option>
                            <option value="F31.13">F31.13 - Bipolar disorder, current episode manic without psychotic features, severe</option>
                            <option value="F31.2">F31.2 - Bipolar disorder, current episode manic severe with psychotic features</option>
                            <option value="F31.3">F31.3 - Bipolar disorder, current episode depressed, mild or moderate severity</option>
                            <option value="F31.30">F31.30 - Bipolar disorder, current episode depressed, mild or moderate severity, unspecified</option>
                            <option value="F31.31">F31.31 - Bipolar disorder, current episode depressed, mild</option>
                            <option value="F31.32">F31.32 - Bipolar disorder, current episode depressed, moderate</option>
                            <option value="F31.4">F31.4 - Bipolar disorder, current episode depressed, severe, without psychotic features</option>
                            <option value="F31.5">F31.5 - Bipolar disorder, current episode depressed, severe, with psychotic features</option>
                            <option value="F31.6">F31.6 - Bipolar disorder, current episode mixed</option>
                            <option value="F31.60">F31.60 - Bipolar disorder, current episode mixed, unspecified</option>
                            <option value="F31.61">F31.61 - Bipolar disorder, current episode mixed, mild</option>
                            <option value="F31.62">F31.62 - Bipolar disorder, current episode mixed, moderate</option>
                            <option value="F31.63">F31.63 - Bipolar disorder, current episode mixed, severe, without psychotic features</option>
                            <option value="F31.64">F31.64 - Bipolar disorder, current episode mixed, severe, with psychotic features</option>
                            <option value="F31.7">F31.7 - Bipolar disorder, currently in remission</option>
                            <option value="F31.70">F31.70 - Bipolar disorder, currently in remission, most recent episode unspecified</option>
                            <option value="F31.71">F31.71 - Bipolar disorder, most recent episode hypomanic in partial remission</option>
                            <option value="F31.72">F31.72 - Bipolar disorder, most recent episode hypomanic in full remission</option>
                            <option value="F31.73">F31.73 - Bipolar disorder, most recent episode manic in partial remission</option>
                            <option value="F31.74">F31.74 - Bipolar disorder, most recent episode manic in full remission</option>
                            <option value="F31.75">F31.75 - Bipolar disorder, most recent episode depressed in partial remission</option>
                            <option value="F31.76">F31.76 - Bipolar disorder, most recent episode depressed in full remission</option>
                            <option value="F31.77">F31.77 - Bipolar disorder, most recent episode mixed in partial remission</option>
                            <option value="F31.78">F31.78 - Bipolar disorder, most recent episode mixed in full remission</option>
                            <option value="F31.8">F31.8 - Other bipolar disorders</option>
                            <option value="F31.81">F31.81 - Bipolar II disorder</option>
                            <option value="F31.89">F31.89 - Other bipolar disorder</option>
                            <option value="F31.9">F31.9 - Bipolar disorder, unspecified</option>
                            <option value="F31.90">F31.90 - Bipolar disorder, unspecified</option>
                            <option value="F31.91">F31.91 - Bipolar disorder, current episode manic, unspecified</option>
                            <option value="F31.92">F31.92 - Bipolar disorder, current episode depressed, unspecified</option>
                            <option value="F32.0">F32.0 - Major depressive disorder, single episode, mild</option>
                            <option value="F32.1">F32.1 - Major depressive disorder, single episode, moderate</option>
                            <option value="F32.2">F32.2 - Major depressive disorder, single episode, severe without psychotic features</option>
                            <option value="F32.3">F32.3 - Major depressive disorder, single episode, severe with psychotic features</option>
                            <option value="F32.4">F32.4 - Major depressive disorder, single episode, in partial remission</option>
                            <option value="F32.5">F32.5 - Major depressive disorder, single episode, in full remission</option>
                            <option value="F32.8">F32.8 - Other depressive episodes</option>
                            <option value="F32.9">F32.9 - Major depressive disorder, single episode, unspecified</option>
                            <option value="F33.0">F33.0 - Major depressive disorder, recurrent, mild</option>
                            <option value="F33.1">F33.1 - Major depressive disorder, recurrent, moderate</option>
                            <option value="F33.2">F33.2 - Major depressive disorder, recurrent severe without psychotic features</option>
                            <option value="F33.3">F33.3 - Major depressive disorder, recurrent, severe with psychotic symptoms</option>
                            <option value="F33.4">F33.4 - Major depressive disorder, recurrent, in remission</option>
                            <option value="F33.40">F33.40 - Major depressive disorder, recurrent, in remission, unspecified</option>
                            <option value="F33.41">F33.41 - Major depressive disorder, recurrent, in partial remission</option>
                            <option value="F33.42">F33.42 - Major depressive disorder, recurrent, in full remission</option>
                            <option value="F33.8">F33.8 - Other recurrent depressive disorders</option>
                            <option value="F33.9">F33.9 - Major depressive disorder, recurrent, unspecified</option>
                            <option value="F34.0">F34.0 - Cyclothymic disorder</option>
                            <option value="F34.1">F34.1 - Dysthymic disorder</option>
                            <option value="F34.8">F34.8 - Other persistent mood [affective] disorders</option>
                            <option value="F34.9">F34.9 - Persistent mood [affective] disorder, unspecified</option>
                            <option value="F38.0">F38.0 - Other single mood [affective] disorders</option>
                            <option value="F38.1">F38.1 - Other recurrent mood [affective] disorders</option>
                            <option value="F38.8">F38.8 - Other specified mood [affective] disorders</option>
                            <option value="F40.0">F40.0 - Agoraphobia</option>
                            <option value="F40.00">F40.00 - Agoraphobia, unspecified</option>
                            <option value="F40.01">F40.01 - Agoraphobia with panic disorder</option>
                            <option value="F40.02">F40.02 - Agoraphobia without panic disorder</option>
                            <option value="F40.1">F40.1 - Social phobias</option>
                            <option value="F40.10">F40.10 - Social phobia, unspecified</option>
                            <option value="F40.11">F40.11 - Social phobia, generalized</option>
                            <option value="F40.2">F40.2 - Specific (isolated) phobias</option>
                            <option value="F40.21">F40.21 - Animal type</option>
                            <option value="F40.22">F40.22 - Natural environment type</option>
                            <option value="F40.23">F40.23 - Blood injection injury type</option>
                            <option value="F40.24">F40.24 - Situational type</option>
                            <option value="F40.29">F40.29 - Other specified phobia</option>
                            <option value="F40.8">F40.8 - Other phobic anxiety disorders</option>
                            <option value="F40.9">F40.9 - Phobic anxiety disorder, unspecified</option>
                            <option value="F41.0">F41.0 - Panic disorder [episodic paroxysmal anxiety] without agoraphobia</option>
                            <option value="F41.1">F41.1 - Generalized anxiety disorder</option>
                            <option value="F41.2">F41.2 - Mixed anxiety and depressive disorder</option>
                            <option value="F41.3">F41.3 - Other mixed anxiety disorders</option>
                            <option value="F41.8">F41.8 - Other specified anxiety disorders</option>
                            <option value="F41.9">F41.9 - Anxiety disorder, unspecified</option>
                            <option value="F42.0">F42.0 - Predominantly obsessional thoughts or ruminations</option>
                            <option value="F42.1">F42.1 - Predominantly compulsive acts [obsessional rituals]</option>
                            <option value="F42.2">F42.2 - Mixed obsessional thoughts and acts</option>
                            <option value="F42.8">F42.8 - Other obsessive-compulsive disorders</option>
                            <option value="F42.9">F42.9 - Obsessive-compulsive disorder, unspecified</option>
                            <option value="F43.0">F43.0 - Acute stress reaction</option>
                            <option value="F43.1">F43.1 - Post-traumatic stress disorder</option>
                            <option value="F43.10">F43.10 - Post-traumatic stress disorder, unspecified</option>
                            <option value="F43.11">F43.11 - Post-traumatic stress disorder, acute</option>
                            <option value="F43.12">F43.12 - Post-traumatic stress disorder, chronic</option>
                            <option value="F43.2">F43.2 - Adjustment disorders</option>
                            <option value="F43.20">F43.20 - Adjustment disorder, unspecified</option>
                            <option value="F43.21">F43.21 - Adjustment disorder with depressed mood</option>
                            <option value="F43.22">F43.22 - Adjustment disorder with anxiety</option>
                            <option value="F43.23">F43.23 - Adjustment disorder with mixed anxiety and depressed mood</option>
                            <option value="F43.24">F43.24 - Adjustment disorder with disturbance of conduct</option>
                            <option value="F43.25">F43.25 - Adjustment disorder with mixed disturbance of emotions and conduct</option>
                            <option value="F43.29">F43.29 - Adjustment disorder with other symptoms</option>
                            <option value="F43.8">F43.8 - Other reactions to severe stress</option>
                            <option value="F43.9">F43.9 - Reaction to severe stress, unspecified</option>
                            <option value="F44.0">F44.0 - Dissociative amnesia</option>
                            <option value="F44.1">F44.1 - Dissociative fugue</option>
                            <option value="F44.2">F44.2 - Dissociative stupor</option>
                            <option value="F44.3">F44.3 - Trance and possession disorders</option>
                            <option value="F44.4">F44.4 - Conversion disorder with motor symptom or deficit</option>
                            <option value="F44.5">F44.5 - Conversion disorder with seizures or convulsions</option>
                            <option value="F44.6">F44.6 - Conversion disorder with sensory symptom or deficit</option>
                            <option value="F44.7">F44.7 - Mixed dissociative [conversion] disorders</option>
                            <option value="F44.8">F44.8 - Other dissociative and conversion disorders</option>
                            <option value="F44.81">F44.81 - Dissociative identity disorder</option>
                            <option value="F44.89">F44.89 - Other dissociative and conversion disorders</option>
                            <option value="F44.9">F44.9 - Dissociative and conversion disorder, unspecified</option>
                            <option value="F45.0">F45.0 - Somatization disorder</option>
                            <option value="F45.1">F45.1 - Undifferentiated somatoform disorder</option>
                            <option value="F45.2">F45.2 - Hypochondriacal disorders</option>
                            <option value="F45.20">F45.20 - Hypochondriacal disorder, unspecified</option>
                            <option value="F45.21">F45.21 - Hypochondriasis</option>
                            <option value="F45.22">F45.22 - Body dysmorphic disorder</option>
                            <option value="F45.29">F45.29 - Other hypochondriacal disorders</option>
                            <option value="F45.3">F45.3 - Somatoform autonomic dysfunction</option>
                            <option value="F45.4">F45.4 - Pain disorder</option>
                            <option value="F45.8">F45.8 - Other somatoform disorders</option>
                            <option value="F45.9">F45.9 - Somatoform disorder, unspecified</option>
                            <option value="F48.0">F48.0 - Neurasthenia</option>
                            <option value="F48.1">F48.1 - Depersonalization-derealization syndrome</option>
                            <option value="F48.8">F48.8 - Other specified nonpsychotic mental disorders</option>
                            <option value="F48.9">F48.9 - Nonpsychotic mental disorder, unspecified</option>
                            <option value="F50.0">F50.0 - Anorexia nervosa</option>
                            <option value="F50.00">F50.00 - Anorexia nervosa, unspecified</option>
                            <option value="F50.01">F50.01 - Anorexia nervosa, restricting type</option>
                            <option value="F50.02">F50.02 - Anorexia nervosa, binge eating/purging type</option>
                            <option value="F50.1">F50.1 - Atypical anorexia nervosa</option>
                            <option value="F50.2">F50.2 - Bulimia nervosa</option>
                            <option value="F50.3">F50.3 - Atypical bulimia nervosa</option>
                            <option value="F50.4">F50.4 - Overeating associated with other psychological disturbances</option>
                            <option value="F50.5">F50.5 - Vomiting associated with other psychological disturbances</option>
                            <option value="F50.8">F50.8 - Other eating disorders</option>
                            <option value="F50.9">F50.9 - Eating disorder, unspecified</option>
                            <option value="F51.0">F51.0 - Insomnia not due to a substance or known physiological condition</option>
                            <option value="F51.1">F51.1 - Hypersomnia not due to a substance or known physiological condition</option>
                            <option value="F51.2">F51.2 - Circadian rhythm sleep disorder not due to a substance or known physiological condition</option>
                            <option value="F51.20">F51.20 - Circadian rhythm sleep disorder not due to a substance or known physiological condition, unspecified t</option>
                            <option value="F51.21">F51.21 - Circadian rhythm sleep disorder not due to a substance or known physiological condition, jet-lag type</option>
                            <option value="F51.22">F51.22 - Circadian rhythm sleep disorder not due to a substance or known physiological condition, shift-work ty</option>
                            <option value="F51.23">F51.23 - Circadian rhythm sleep disorder not due to a substance or known physiological condition, delayed sleep</option>
                            <option value="F51.29">F51.29 - Other sleep disorder of circadian rhythm not due to a substance or known physiological condition</option>
                            <option value="F51.3">F51.3 - Sleepwalking [somnambulism]</option>
                            <option value="F51.4">F51.4 - Sleep terrors [night terrors]</option>
                            <option value="F51.5">F51.5 - Nightmare disorder</option>
                            <option value="F51.8">F51.8 - Other sleep disorders not due to a substance or known physiological condition</option>
                            <option value="F51.9">F51.9 - Sleep disorder not due to a substance or known physiological condition, unspecified</option>
                            <option value="F52.0">F52.0 - Hypoactive sexual desire disorder</option>
                            <option value="F52.1">F52.1 - Sexual aversion disorder</option>
                            <option value="F52.2">F52.2 - Sexual arousal disorders</option>
                            <option value="F52.21">F52.21 - Male erectile disorder</option>
                            <option value="F52.22">F52.22 - Female sexual arousal disorder</option>
                            <option value="F52.3">F52.3 - Orgasmic disorder</option>
                            <option value="F52.31">F52.31 - Female orgasmic disorder</option>
                            <option value="F52.32">F52.32 - Male orgasmic disorder</option>
                            <option value="F52.4">F52.4 - Premature ejaculation</option>
                            <option value="F52.5">F52.5 - Vaginismus not due to a substance or known physiological condition</option>
                            <option value="F52.6">F52.6 - Dyspareunia not due to a substance or known physiological condition</option>
                            <option value="F52.7">F52.7 - Excessive sexual drive</option>
                            <option value="F52.8">F52.8 - Other sexual dysfunction not due to a substance or known physiological condition</option>
                            <option value="F52.9">F52.9 - Unspecified sexual dysfunction not due to a substance or known physiological condition</option>
                            <option value="F53.0">F53.0 - Mild mental and behavioural disorders associated with the puerperium, not elsewhere classified</option>
                            <option value="F53.1">F53.1 - Severe mental and behavioural disorders associated with the puerperium, not elsewhere classified</option>
                            <option value="F53.8">F53.8 - Other mental and behavioural disorders associated with the puerperium, not elsewhere classified</option>
                            <option value="F53.9">F53.9 - Puerperal mental disorder, unspecified</option>
                            <option value="F55.0">F55.0 - Abuse of antacids</option>
                            <option value="F55.1">F55.1 - Abuse of herbal or folk remedies</option>
                            <option value="F55.2">F55.2 - Abuse of laxatives</option>
                            <option value="F55.3">F55.3 - Abuse of steroids or hormones</option>
                            <option value="F55.4">F55.4 - Abuse of vitamins</option>
                            <option value="F55.8">F55.8 - Abuse of other non-psychoactive substances</option>
                            <option value="F60.0">F60.0 - Paranoid personality disorder</option>
                            <option value="F60.1">F60.1 - Schizoid personality disorder</option>
                            <option value="F60.2">F60.2 - Antisocial personality disorder</option>
                            <option value="F60.3">F60.3 - Borderline personality disorder</option>
                            <option value="F60.4">F60.4 - Histrionic personality disorder</option>
                            <option value="F60.5">F60.5 - Obsessive-compulsive personality disorder</option>
                            <option value="F60.6">F60.6 - Avoidant personality disorder</option>
                            <option value="F60.7">F60.7 - Dependent personality disorder</option>
                            <option value="F60.8">F60.8 - Other specific personality disorders</option>
                            <option value="F60.81">F60.81 - Narcissistic personality disorder</option>
                            <option value="F60.89">F60.89 - Other specific personality disorders</option>
                            <option value="F60.9">F60.9 - Personality disorder, unspecified</option>
                            <option value="F62.0">F62.0 - Enduring personality change after catastrophic experience</option>
                            <option value="F62.1">F62.1 - Enduring personality change after psychiatric illness</option>
                            <option value="F62.8">F62.8 - Other enduring personality changes</option>
                            <option value="F62.9">F62.9 - Enduring personality change, unspecified</option>
                            <option value="F63.0">F63.0 - Pathological gambling</option>
                            <option value="F63.1">F63.1 - Pyromania</option>
                            <option value="F63.2">F63.2 - Kleptomania</option>
                            <option value="F63.3">F63.3 - Trichotillomania</option>
                            <option value="F63.8">F63.8 - Other impulse disorders</option>
                            <option value="F63.81">F63.81 - Intermittent explosive disorder</option>
                            <option value="F63.89">F63.89 - Other impulse disorders</option>
                            <option value="F63.9">F63.9 - Impulse disorder, unspecified</option>
                            <option value="F64.0">F64.0 - Transsexualism</option>
                            <option value="F64.1">F64.1 - Gender identity disorder in adolescence and adulthood</option>
                            <option value="F64.2">F64.2 - Gender identity disorder of childhood</option>
                            <option value="F64.8">F64.8 - Other gender identity disorders</option>
                            <option value="F64.9">F64.9 - Gender identity disorder, unspecified</option>
                            <option value="F65.0">F65.0 - Fetishism</option>
                            <option value="F65.1">F65.1 - Transvestic fetishism</option>
                            <option value="F65.2">F65.2 - Exhibitionism</option>
                            <option value="F65.3">F65.3 - Voyeurism</option>
                            <option value="F65.4">F65.4 - Pedophilia</option>
                            <option value="F65.5">F65.5 - Sadomasochism</option>
                            <option value="F65.51">F65.51 - Sexual masochism</option>
                            <option value="F65.52">F65.52 - Sexual sadism</option>
                            <option value="F65.6">F65.6 - Multiple disorders of sexual preference</option>
                            <option value="F65.8">F65.8 - Other paraphilias</option>
                            <option value="F65.81">F65.81 - Frotteurism</option>
                            <option value="F65.89">F65.89 - Other paraphilias</option>
                            <option value="F65.9">F65.9 - Paraphilia, unspecified</option>
                            <option value="F66.0">F66.0 - Sexual maturation disorder</option>
                            <option value="F66.1">F66.1 - Egodystonic sexual orientation</option>
                            <option value="F66.2">F66.2 - Sexual relationship disorder</option>
                            <option value="F66.8">F66.8 - Other psychosexual development disorders</option>
                            <option value="F66.9">F66.9 - Psychosexual development disorder, unspecified</option>
                            <option value="F68.0">F68.0 - Elaboration of physical symptoms for psychological reasons</option>
                            <option value="F68.1">F68.1 - Factitious disorder</option>
                            <option value="F68.10">F68.10 - Factitious disorder, unspecified</option>
                            <option value="F68.11">F68.11 - Factitious disorder with predominantly psychological signs and symptoms</option>
                            <option value="F68.12">F68.12 - Factitious disorder with predominantly physical signs and symptoms</option>
                            <option value="F68.13">F68.13 - Factitious disorder with combined psychological and physical signs and symptoms</option>
                            <option value="F68.8">F68.8 - Other specified disorders of adult personality and behavior</option>
                            <option value="F78.1">F78.1 - Other mental retardation with significant impairment of behaviour requiring attention or treatment</option>
                            <option value="F79.8">F79.8 - Unspecified Mental Retardation with significant impairement requiring treatment and attention</option>
                            <option value="F80.0">F80.0 - Phonological disorder</option>
                            <option value="F80.1">F80.1 - Expressive language disorder</option>
                            <option value="F80.2">F80.2 - Mixed receptive-expressive language disorder</option>
                            <option value="F80.3">F80.3 - Acquired aphasia with epilepsy [Landau-Kleffner]</option>
                            <option value="F80.8">F80.8 - Other developmental disorders of speech or language</option>
                            <option value="F80.9">F80.9 - Developmental disorder of speech or language, unspecified</option>
                            <option value="F81.0">F81.0 - Specific reading disorder</option>
                            <option value="F81.1">F81.1 - Specific spelling disorder</option>
                            <option value="F81.2">F81.2 - Mathematics disorder</option>
                            <option value="F81.3">F81.3 - Mixed disorder of scholastic skills</option>
                            <option value="F81.8">F81.8 - Other developmental disorders of scholastic skills</option>
                            <option value="F81.81">F81.81 - Disorder of written expression</option>
                            <option value="F81.89">F81.89 - Other developmental disorders of scholastic skills</option>
                            <option value="F81.9">F81.9 - Developmental disorder of scholastic skills, unspecified</option>
                            <option value="F84.0">F84.0 - Autistic disorder</option>
                            <option value="F84.1">F84.1 - Atypical autism</option>
                            <option value="F84.2">F84.2 - Rett's syndrome</option>
                            <option value="F84.3">F84.3 - Other childhood disintegrative disorder</option>
                            <option value="F84.4">F84.4 - Overactive disorder associated with mental retardation and stereotyped movements</option>
                            <option value="F84.5">F84.5 - Asperger's syndrome</option>
                            <option value="F84.8">F84.8 - Other pervasive developmental disorders</option>
                            <option value="F84.9">F84.9 - Pervasive developmental disorder, unspecified</option>
                            <option value="F90.0">F90.0 - Attention-deficit hyperactivity disorder, predominantly inattentive type</option>
                            <option value="F90.1">F90.1 - Attention-deficit hyperactivity disorder, predominantly hyperactive type</option>
                            <option value="F90.2">F90.2 - Attention-deficit hyperactivity disorder, combined type</option>
                            <option value="F90.8">F90.8 - Attention-deficit hyperactivity disorder, other type</option>
                            <option value="F90.9">F90.9 - Attention-deficit hyperactivity disorder, unspecified type</option>
                            <option value="F91.0">F91.0 - Conduct disorder confined to the family context</option>
                            <option value="F91.1">F91.1 - Conduct disorder, childhood-onset type</option>
                            <option value="F91.2">F91.2 - Conduct disorder, adolescent-onset type</option>
                            <option value="F91.3">F91.3 - Oppositional defiant disorder</option>
                            <option value="F91.8">F91.8 - Other conduct disorders</option>
                            <option value="F91.9">F91.9 - Conduct disorder, unspecified</option>
                            <option value="F92.0">F92.0 - Depressive conduct disorder</option>
                            <option value="F92.8">F92.8 - Other mixed disorders of conduct and emotions</option>
                            <option value="F92.9">F92.9 - Mixed disorder of conduct and emotions, unspecified</option>
                            <option value="F93.0">F93.0 - Separation anxiety disorder of childhood</option>
                            <option value="F93.1">F93.1 - Phobic anxiety disorder of childhood</option>
                            <option value="F93.2">F93.2 - Social anxiety disorder of childhood</option>
                            <option value="F93.3">F93.3 - Sibling rivalry disorder</option>
                            <option value="F93.8">F93.8 - Other childhood emotional disorders</option>
                            <option value="F93.9">F93.9 - Childhood emotional disorder, unspecified</option>
                            <option value="F94.0">F94.0 - Selective mutism</option>
                            <option value="F94.1">F94.1 - Reactive attachment disorder of childhood</option>
                            <option value="F94.2">F94.2 - Disinhibited attachment disorder of childhood</option>
                            <option value="F94.8">F94.8 - Other childhood disorders of social functioning</option>
                            <option value="F94.9">F94.9 - Childhood disorder of social functioning, unspecified</option>
                            <option value="F95.0">F95.0 - Transient tic disorder</option>
                            <option value="F95.1">F95.1 - Chronic motor or vocal tic disorder</option>
                            <option value="F95.2">F95.2 - Tourette's disorder</option>
                            <option value="F95.8">F95.8 - Other tic disorders</option>
                            <option value="F95.9">F95.9 - Tic disorder, unspecified</option>
                            <option value="F98.0">F98.0 - Enuresis not due to a substance or known physiological condition</option>
                            <option value="F98.1">F98.1 - Encopresis not due to a substance or known physiological condition</option>
                            <option value="F98.2">F98.2 - Other feeding disorders of infancy and childhood</option>
                            <option value="F98.21">F98.21 - Rumination disorder of infancy</option>
                            <option value="F98.29">F98.29 - Other feeding disorders of infancy and early childhood</option>
                            <option value="F98.3">F98.3 - Pica of infancy and childhood</option>
                            <option value="F98.4">F98.4 - Stereotyped movement disorders</option>
                            <option value="F98.5">F98.5 - Stuttering [stammering]</option>
                            <option value="F98.6">F98.6 - Cluttering</option>
                            <option value="F98.8">F98.8 - Other specified behavioral and emotional disorders with onset usually occurring in childhood and adole</option>
                            <option value="F98.9">F98.9 - Unspecified behavioral and emotional disorders with onset usually occurring in childhood and adolescen</option>
                        </select>
                    </div>

                    <!-- To Consider -->
                    <div class="form-group mb-3">
                        <label for="co_morbid_to_consider">To Consider</label>
                        <div class="input-group">
                            <input type="text" class="form-control" id="co_morbid_to_consider" name="co_morbid_to_consider" />
                        </div>
                    </div>

                    <!-- Notes -->
                    <div class="form-group mb-3">
                        <label for="diag_co-morbid_notes">
                            <strong class="text-red">*</strong>Notes
                        </label>
                        <textarea required class="form-control mb-2 mr-sm-2" id="diag_co-morbid_notes" name="diag_co-morbid_notes"></textarea>
                    </div>

                </div>
                <div class="modal-footer d-flex justify-content-between">
                    <button type="button" class="btn btn-danger" data-dismiss="modal">Cancel</button>
                    <button type="submit" class="btn btn-primary float-right">Submit</button>
                </div>
            </div>
        </form>
    </div>
</div>

<div class="modal history-modal fade" id="discharge_meds_modal" data-backdrop="static" tabindex="-1" role="dialog">
    <div class="modal-dialog" role="document">
        <form id="pharmacological_form">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title">Add New Medication Prescription</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <input type="hidden" id="pharma_parent_id" name="pharma_parent_id">
                    <!-- Status -->
                    <div class="form-group mb-3 pharma-status d-none">
                        <label for="pharma_status">
                            Status
                        </label>
                        <select id="pharma_status" data-placeholder="Select status" name="pharma_status" class="form-control select2bs4-placeholder" style="width: 100%;" data-minimum-results-for-search="Infinity">
                            <option></option>
                            <option value="1">On-going same dosage</option>
                            <option value="2">On-going different dosage</option>
                            <option value="3">Stopped</option>
                        </select>
                    </div>

                    <!-- Medication -->
                    <div class="form-group mb-3">
                        <label for="pharma_medication">
                            <strong class="text-red">*</strong> Medication
                        </label>

                        <div class="input-group">
                            <input type="hidden" name="pharma_medication" id="pharma_medication">
                            <input type="hidden" name="pharma_drug_id" id="pharma_drug_id">
                            <input type="text" class="form-control" id="pharma_description" />
                            <!-- <div class="input-group-append">
                                <button class="btn btn-search-medication btn-info" type="button" data-toggle="modal" data-target="#drug_medication_modal"><i class='fas fa-search'></i></button>
                            </div> -->
                        </div>
                    </div>

                    <!-- Dosage -->
                    <div class="row">
                        <div class="col-md-6">
                            <div class="form-group mb-3">
                                <label for="pharma_quantity">
                                    <strong class="text-red">*</strong> Administer Quantity
                                </label>
                                <input type="number" class="form-control mb-2 mr-sm-2 calculate" id="pharma_quantity" name="pharma_quantity" placeholder="Quantity" min="1">
                            </div>
                        </div>

                        <div class="col-md-6">
                            <div class="form-group mb-3">
                                <label for="pharma_frequency">
                                    <strong class="text-red">*</strong>Frequency
                                </label>
                                <select id="pharma_frequency" data-placeholder="Select frequency" name="pharma_frequency" class="form-control select2bs4-placeholder calculate" style="width: 100%;" data-minimum-results-for-search="Infinity">
                                    <option data-multiplier="1" value="QDAY" data-select2-id="14">Daily</option>
                                    <option data-multiplier="2" value="BID" data-select2-id="15">Twice Daily</option>
                                    <option data-multiplier="3" value="TID" data-select2-id="16">Three times a day</option>
                                    <option data-multiplier="4" value="QID" data-select2-id="17">Four times a day</option>
                                    <option data-multiplier="12" value="Q2" data-select2-id="18">Every 2 hours</option>
                                    <option data-multiplier="8" value="Q3" data-select2-id="19">Every 3 hours</option>
                                    <option data-multiplier="6" value="Q4" data-select2-id="20">Every 4 hours</option>
                                    <option data-multiplier="4" value="Q6" data-select2-id="21">Every 6 hours</option>
                                    <option data-multiplier="3" value="Q8" data-select2-id="22">Every 8 hours</option>
                                    <option data-multiplier="2" value="Q12" data-select2-id="23">Every 12 hours</option>
                                    <option data-multiplier="1" value="AC BK" data-select2-id="24">Before breakfast</option>
                                    <option data-multiplier="3" value="AC" data-select2-id="25">Before meals</option>
                                    <option data-multiplier="3" value="C MEALS" data-select2-id="26">With meals</option>
                                    <option data-multiplier="3" value="PC" data-select2-id="27">After meals</option>
                                </select>
                            </div>
                        </div>
                    </div>

                    <!-- Dosage -->
                    <div class="row">
                        <div class="col-md-6">
                            <div class="form-group mb-3">
                                <label for="pharma_duration">
                                    <strong class="text-red">*</strong> Duration (in day/s)
                                </label>
                                <input type="number" class="form-control mb-2 mr-sm-2 calculate" id="pharma_duration" name="pharma_duration" placeholder="Duration" min="1">
                            </div>
                        </div>

                        <div class="col-md-6">
                            <div class="form-group mb-3">
                                <label for="dispense_quantity">
                                    Dispense Quantity
                                </label>
                                <input type="number" class="form-control mb-2 mr-sm-2" id="dispense_quantity" name="dispense_quantity" placeholder="Dispense Quantity" min="1">
                            </div>
                        </div>
                    </div>

                    <!-- Remarks  -->
                    <div class="form-group mb-3">
                        <label for="pharma_remarks">
                            Remarks
                        </label>
                        <textarea class="form-control mb-2 mr-sm-2" id="pharma_remarks" name="pharma_remarks"></textarea>
                    </div>

                    <!-- Drug Formulary  -->
                    <div class="form-group mb-3">
                        <div class="icheck-primary d-inline">
                            <input type="checkbox" value="1" id="pharma_drug_formulary" name="pharma_drug_formulary">
                            <label for="pharma_drug_formulary">From drug formulary</label>
                        </div>
                    </div>

                    <!-- Reason for stopping  -->
                    <div class="form-group mb-3 stop-reason" hidden>
                        <label for="pharma_stop_reason">
                            <strong class="text-red">*</strong> Reason for stopping
                        </label>
                        <textarea class="form-control mb-2 mr-sm-2" id="pharma_stop_reason" name="pharma_stop_reason"></textarea>
                    </div>
                </div>

                <div class="modal-footer d-flex justify-content-between">
                    <button type="button" class="btn btn-danger" data-dismiss="modal">Cancel</button>
                    <button type="submit" class="btn btn-primary float-right">Submit</button>
                </div>
            </div>
        </form>
    </div>
</div>

<div class="modal history-modal fade" id="discharge_proc_modal" data-backdrop="static">
    <div class="modal-dialog modal-xl" role="document">
        <form id="">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title">Add New Procedure Prescription</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">

                    <div class="form-group mb-2">
                        <div class="form-inline mb-2">
                            <div class="col-4 d-flex justify-content-left">
                                <label> Diagnostic Procedure Order Data Entry: </label>
                            </div>
                            <div class="col-5">
                                <hr>
                            </div>
                            <div class="col-3">
                                <button class="btn btn-sm btn-primary" data-dismiss="modal" data-toggle="modal" data-target="#discharge_proc_cat">
                                    <i class="fas fa-book-medical mr-2"></i>View Procedure Catalog
                                </button>
                            </div>
                        </div>
                        <input type="text" placeholder="Diagnostic Procedure Order Data Entry" class="form-control" name="diagproc-text" id="diagproc-text" />
                    </div>

                    <div class="row mb-2">
                        <div class="col-9">
                            <hr>
                        </div>
                        <div class="col-3">
                            <button id="add-diagproc-btn" class="btn btn-sm btn-success w-100">
                                <i class="fas fa-folder-plus mr-2"></i> Add Diagnostic Procedure Order
                            </button>
                        </div>
                    </div>

                </div>

                <div class="modal-footer d-flex justify-content-between">
                    <button type="button" class="btn btn-danger" data-dismiss="modal">Cancel</button>
                    <button type="submit" class="btn btn-primary float-right">Submit</button>
                </div>
            </div>
        </form>
    </div>
</div>

<div class="modal fade" id="discharge_proc_cat" data-backdrop="static">
    <div class="modal-dialog modal-xl">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title">Add New Diagnostic Procedure Order</h5>
                <button type="button" class="close" aria-label="Close" data-toggle="modal" data-target="#discharge_proc_modal" data-dismiss="modal">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>

            <div class="modal-body">
                <nav>
                    <div class="nav nav-tabs" id="nav-tab" role="tablist">
                        <a style="width: 49%;" href="#nav-lab-proc-dispo" class="nav-item nav-link text-center active" id="nav-lab-proc-dispo-tab" data-toggle="tab" role="tab" aria-controls="nav-lab-proc-dispo" aria-selected="true">
                            <i class="fas fa-vial mr-2"></i>Laboratory Procedures
                        </a>
                        <a style="width: 49%;" href="#nav-rad-proc-dispo" class="nav-item nav-link text-center" id="nav-rad-proc-dispo-tab" data-toggle="tab" role="tab" aria-controls="nav-rad-proc-dispo" aria-selected="true">
                            <i class="fas fa-radiation-alt mr-2"></i>Radiologic Procedures
                        </a>
                    </div>
                </nav>

                <div class="tab-content" id="nav-tabContent">
                    <div class="tab-pane fade show active m-3" id="nav-lab-proc-dispo" role="tabpanel" aria-labelledby="nav-lab-proc-dispo-tab">

                        <div class="form-group row">

                            <div class="col-sm-3">
                                <!-- HEMATOLOGY -->
                                <label>HEMATOLOGY</label>
                                <div class="">
                                    <input type="checkbox" value="NCMHLAB0001" id="NCMHLAB0001" name="lab_req">
                                    <label class="thin-label" for="NCMHLAB0001">
                                        CBC
                                    </label>
                                </div>
                                <div class="">
                                    <input type="checkbox" value="NCMHLAB0002" id="NCMHLAB0002" name="lab_req">
                                    <label class="thin-label" for="NCMHLAB0002">
                                        Platelet count
                                    </label>
                                </div>
                                <div class="">
                                    <input type="checkbox" value="NCMHLAB0003" id="NCMHLAB0003" name="lab_req">
                                    <label class="thin-label" for="NCMHLAB0003">
                                        Hemoglobin &amp; Hematocrit only
                                    </label>
                                </div>
                                <div class="">
                                    <input type="checkbox" value="NCMHLAB0004" id="NCMHLAB0004" name="lab_req">
                                    <label class="thin-label" for="NCMHLAB0004">
                                        RBC
                                    </label>
                                </div>
                                <div class="">
                                    <input type="checkbox" value="NCMHLAB0005" id="NCMHLAB0005" name="lab_req">
                                    <label class="thin-label" for="NCMHLAB0005">
                                        WBC w/ Differential Count
                                    </label>
                                </div>
                                <div class="">
                                    <input type="checkbox" value="NCMHLAB0006" id="NCMHLAB0006" name="lab_req">
                                    <label class="thin-label" for="NCMHLAB0006">
                                        Blood Indices
                                    </label>
                                </div>
                                <div class="">
                                    <input type="checkbox" value="NCMHLAB0007" id="NCMHLAB0007" name="lab_req">
                                    <label class="thin-label" for="NCMHLAB0007">
                                        ESR
                                    </label>
                                </div>
                                <div class="">
                                    <input type="checkbox" value="NCMHLAB0008" id="NCMHLAB0008" name="lab_req">
                                    <label class="thin-label" for="NCMHLAB0008">
                                        Clotting Time
                                    </label>
                                </div>
                                <div class="">
                                    <input type="checkbox" value="NCMHLAB0009" id="NCMHLAB0009" name="lab_req">
                                    <label class="thin-label" for="NCMHLAB0009">
                                        Bleeding Time
                                    </label>
                                </div>
                                <div class="">
                                    <input type="checkbox" value="NCMHLAB0010" id="NCMHLAB0010" name="lab_req">
                                    <label class="thin-label" for="NCMHLAB0010">
                                        Malarial Smear
                                    </label>
                                </div>
                                <div class="">
                                    <input type="checkbox" value="NCMHLAB0011" id="NCMHLAB0011" name="lab_req">
                                    <label class="thin-label" for="NCMHLAB0011">
                                        L.E. Preparation
                                    </label>
                                </div>
                                <div class="">
                                    <input type="checkbox" value="NCMHLAB0012" id="NCMHLAB0012" name="lab_req">
                                    <label class="thin-label" for="NCMHLAB0012">
                                        Peripheral Smear
                                    </label>
                                </div>
                                <br>

                                <!-- SEROLOGY -->
                                <label>SEROLOGY</label>
                                <div class="">
                                    <input type="checkbox" value="NCMHLAB0013" id="NCMHLAB0013" name="lab_req">
                                    <label class="thin-label" for="NCMHLAB0013">
                                        HBsAg/ Hepatitis B s antigen
                                    </label>
                                </div>
                                <div class="">
                                    <input type="checkbox" value="NCMHLAB0014" id="NCMHLAB0014" name="lab_req">
                                    <label class="thin-label" for="NCMHLAB0014">
                                        HIV
                                    </label>
                                </div>
                                <div class="">
                                    <input type="checkbox" value="NCMHLAB0015" id="NCMHLAB0015" name="lab_req">
                                    <label class="thin-label" for="NCMHLAB0015">
                                        Syphilis Test RPR / Anti Treponema Pallidum
                                    </label>
                                </div>
                                <div class="">
                                    <input type="checkbox" value="NCMHLAB0016" id="NCMHLAB0016" name="lab_req">
                                    <label class="thin-label" for="NCMHLAB0016">
                                        Anti HAV
                                    </label>
                                </div>
                                <div class="">
                                    <input type="checkbox" value="NCMHLAB0017" id="NCMHLAB0017" name="lab_req">
                                    <label class="thin-label" for="NCMHLAB0017">
                                        Anti HBS
                                    </label>
                                </div>
                                <div class="">
                                    <input type="checkbox" value="NCMHLAB0018" id="NCMHLAB0018" name="lab_req">
                                    <label class="thin-label" for="NCMHLAB0018">
                                        Anti HCV
                                    </label>
                                </div>
                                <div class="">
                                    <input type="checkbox" value="NCMHLAB0019" id="NCMHLAB0019" name="lab_req">
                                    <label class="thin-label" for="NCMHLAB0019">
                                        Salmonella IgM,IgG
                                    </label>
                                </div>
                                <div class="">
                                    <input type="checkbox" value="NCMHLAB0020" id="NCMHLAB0020" name="lab_req">
                                    <label class="thin-label" for="NCMHLAB0020">
                                        Dengue NS1
                                    </label>
                                </div>
                                <div class="">
                                    <input type="checkbox" value="NCMHLAB0021" id="NCMHLAB0021" name="lab_req">
                                    <label class="thin-label" for="NCMHLAB0021">
                                        Dengue IgM, IgG
                                    </label>
                                </div>
                            </div>

                            <div class="col-sm-3">
                                <!-- Blood Bank -->
                                <label>BLOOD BANK</label>
                                <div class="">
                                    <input type="checkbox" value="NCMHLAB0022" id="NCMHLAB0022" name="lab_req">
                                    <label class="thin-label" for="NCMHLAB0022">
                                        Blood Typing [ABO &amp; Rh]
                                    </label>
                                </div>
                                <div class="">
                                    <input type="checkbox" value="NCMHLAB0023" id="NCMHLAB0023" name="lab_req">
                                    <label class="thin-label" for="NCMHLAB0023">
                                        Crossmatching
                                    </label>
                                </div>
                                <div class="">
                                    <input type="checkbox" value="NCMHLAB0024" id="NCMHLAB0024" name="lab_req">
                                    <label class="thin-label" for="NCMHLAB0024">
                                        Coomb's Test Direct
                                    </label>
                                </div>
                                <div class="">
                                    <input type="checkbox" value="NCMHLAB0025" id="NCMHLAB0025" name="lab_req">
                                    <label class="thin-label" for="NCMHLAB0025">
                                        Coomb's Test Indirect
                                    </label>
                                </div>
                                <br>

                                <!-- CHEMISTRY -->
                                <label>CHEMISTRY</label>
                                <div class="">
                                    <input type="checkbox" value="NCMHLAB0026" id="NCMHLAB0026" name="lab_req">
                                    <label class="thin-label" for="NCMHLAB0026">
                                        FBS
                                    </label>
                                </div>
                                <div class="">
                                    <input type="checkbox" value="NCMHLAB0027" id="NCMHLAB0027" name="lab_req">
                                    <label class="thin-label" for="NCMHLAB0027">
                                        RBS
                                    </label>
                                </div>
                                <div class="">
                                    <input type="checkbox" value="NCMHLAB0028" id="NCMHLAB0028" name="lab_req">
                                    <label class="thin-label" for="NCMHLAB0028">
                                        BUN/ Blood Urea Nitrogen
                                    </label>
                                </div>
                                <div class="">
                                    <input type="checkbox" value="NCMHLAB0029" id="NCMHLAB0029" name="lab_req">
                                    <label class="thin-label" for="NCMHLAB0029">
                                        Creatinine
                                    </label>
                                </div>
                                <div class="">
                                    <input type="checkbox" value="NCMHLAB0030" id="NCMHLAB0030" name="lab_req">
                                    <label class="thin-label" for="NCMHLAB0030">
                                        Blood Uric Acid
                                    </label>
                                </div>
                                <div class="">
                                    <input type="checkbox" value="NCMHLAB0031" id="NCMHLAB0031" name="lab_req">
                                    <label class="thin-label" for="NCMHLAB0031">
                                        Total Cholesterol
                                    </label>
                                </div>
                                <div class="">
                                    <input type="checkbox" value="NCMHLAB0032" id="NCMHLAB0032" name="lab_req">
                                    <label class="thin-label" for="NCMHLAB0032">
                                        Triglycerides
                                    </label>
                                </div>
                                <div class="">
                                    <input type="checkbox" value="NCMHLAB0033" id="NCMHLAB0033" name="lab_req">
                                    <label class="thin-label" for="NCMHLAB0033">
                                        HDL
                                    </label>
                                </div>
                                <div class="">
                                    <input type="checkbox" value="NCMHLAB0034" id="NCMHLAB0034" name="lab_req">
                                    <label class="thin-label" for="NCMHLAB0034">
                                        LDL
                                    </label>
                                </div>
                                <div class="">
                                    <input type="checkbox" value="NCMHLAB0035" id="NCMHLAB0035" name="lab_req">
                                    <label class="thin-label" for="NCMHLAB0035">
                                        Alkaline Phosphatase
                                    </label>
                                </div>
                                <div class="">
                                    <input type="checkbox" value="NCMHLAB0036" id="NCMHLAB0036" name="lab_req">
                                    <label class="thin-label" for="NCMHLAB0036">
                                        SGPT/ ALT
                                    </label>
                                </div>
                                <div class="">
                                    <input type="checkbox" value="NCMHLAB0037" id="NCMHLAB0037" name="lab_req">
                                    <label class="thin-label" for="NCMHLAB0037">
                                        SGOT/ AST
                                    </label>
                                </div>
                                <div class="">
                                    <input type="checkbox" value="NCMHLAB0038" id="NCMHLAB0038" name="lab_req">
                                    <label class="thin-label" for="NCMHLAB0038">
                                        Total Bilirubin
                                    </label>
                                </div>
                                <div class="">
                                    <input type="checkbox" value="NCMHLAB0039" id="NCMHLAB0039" name="lab_req">
                                    <label class="thin-label" for="NCMHLAB0039">
                                        Indirect &amp; Direct Bilirubin
                                    </label>
                                </div>
                                <div class="">
                                    <input type="checkbox" value="NCMHLAB0040" id="NCMHLAB0040" name="lab_req">
                                    <label class="thin-label" for="NCMHLAB0040">
                                        Total Protein
                                    </label>
                                </div>
                                <div class="">
                                    <input type="checkbox" value="NCMHLAB0041" id="NCMHLAB0041" name="lab_req">
                                    <label class="thin-label" for="NCMHLAB0041">
                                        Albumin
                                    </label>
                                </div>
                                <div class="">
                                    <input type="checkbox" value="NCMHLAB0042" id="NCMHLAB0042" name="lab_req">
                                    <label class="thin-label" for="NCMHLAB0042">
                                        Globulin
                                    </label>
                                </div>
                                <div class="">
                                    <input type="checkbox" value="NCMHLAB0043" id="NCMHLAB0043" name="lab_req">
                                    <label class="thin-label" for="NCMHLAB0043">
                                        OGTT
                                    </label>
                                </div>
                                <div class="">
                                    <input type="checkbox" value="NCMHLAB0044" id="NCMHLAB0044" name="lab_req">
                                    <label class="thin-label" for="NCMHLAB0044">
                                        OGCT
                                    </label>
                                </div>
                                <div class="">
                                    <input type="checkbox" value="NCMHLAB0045" id="NCMHLAB0045" name="lab_req">
                                    <label class="thin-label" for="NCMHLAB0045">
                                        Hemoglobin A1c (Hba1c)
                                    </label>
                                </div>
                            </div>

                            <div class="col-sm-3">

                                <!-- ELETROLYTES -->
                                <label>ELETROLYTES</label>
                                <div class="">
                                    <input type="checkbox" value="NCMHLAB0046" id="NCMHLAB0046" name="lab_req">
                                    <label class="thin-label" for="NCMHLAB0046">
                                        Sodium/ Na
                                    </label>
                                </div>
                                <div class="">
                                    <input type="checkbox" value="NCMHLAB0047" id="NCMHLAB0047" name="lab_req">
                                    <label class="thin-label" for="NCMHLAB0047">
                                        Potassium/ K
                                    </label>
                                </div>
                                <div class="">
                                    <input type="checkbox" value="NCMHLAB0048" id="NCMHLAB0048" name="lab_req">
                                    <label class="thin-label" for="NCMHLAB0048">
                                        Lithium/ Li
                                    </label>
                                </div>
                                <div class="">
                                    <input type="checkbox" value="NCMHLAB0049" id="NCMHLAB0049" name="lab_req">
                                    <label class="thin-label" for="NCMHLAB0049">
                                        Chloride
                                    </label>
                                </div>
                                <div class="">
                                    <input type="checkbox" value="NCMHLAB0050" id="NCMHLAB0050" name="lab_req">
                                    <label class="thin-label" for="NCMHLAB0050">
                                        Total Calcium
                                    </label>
                                </div>
                                <div class="">
                                    <input type="checkbox" value="NCMHLAB0051" id="NCMHLAB0051" name="lab_req">
                                    <label class="thin-label" for="NCMHLAB0051">
                                        Phosphorous (Inorganic Phosphate)
                                    </label>
                                </div>
                                <br>
                                <!-- CARDIAC MARKERS -->
                                <label>CARDIAC MARKERS</label>
                                <div class="">
                                    <input type="checkbox" value="NCMHLAB0052" id="NCMHLAB0052" name="lab_req">
                                    <label class="thin-label" for="NCMHLAB0052">
                                        Troponin [Qualitative]
                                    </label>
                                </div>
                                <div class="">
                                    <input type="checkbox" value="NCMHLAB0053" id="NCMHLAB0053" name="lab_req">
                                    <label class="thin-label" for="NCMHLAB0053">
                                        CK-MB [Qualitative]
                                    </label>
                                </div>
                                <div class="">
                                    <input type="checkbox" value="NCMHLAB0054" id="NCMHLAB0054" name="lab_req">
                                    <label class="thin-label" for="NCMHLAB0054">
                                        CK-Total [Qualitative]
                                    </label>
                                </div>
                                <br>
                                <!-- MICROSCOPY -->
                                <label>MICROSCOPY</label>
                                <div class="">
                                    <input type="checkbox" value="NCMHLAB0055" id="NCMHLAB0055" name="lab_req">
                                    <label class="thin-label" for="NCMHLAB0055">
                                        Routine Urinalysis
                                    </label>
                                </div>
                                <div class="">
                                    <input type="checkbox" value="NCMHLAB0056" id="NCMHLAB0056" name="lab_req">
                                    <label class="thin-label" for="NCMHLAB0056">
                                        Routine Fecalysis/ Stool Exam
                                    </label>
                                </div>
                                <div class="">
                                    <input type="checkbox" value="NCMHLAB0057" id="NCMHLAB0057" name="lab_req">
                                    <label class="thin-label" for="NCMHLAB0057">
                                        Scotch tape Method
                                    </label>
                                </div>
                                <div class="">
                                    <input type="checkbox" value="NCMHLAB0058" id="NCMHLAB0058" name="lab_req">
                                    <label class="thin-label" for="NCMHLAB0058">
                                        Pregnancy Test
                                    </label>
                                </div>
                                <div class="">
                                    <input type="checkbox" value="NCMHLAB0059" id="NCMHLAB0059" name="lab_req">
                                    <label class="thin-label" for="NCMHLAB0059">
                                        Vaginal Smear for Spermatozoa
                                    </label>
                                </div>
                                <div class="">
                                    <input type="checkbox" value="NCMHLAB0060" id="NCMHLAB0060" name="lab_req">
                                    <label class="thin-label" for="NCMHLAB0060">
                                        Semen Analysis
                                    </label>
                                </div>
                                <div class="">
                                    <input type="checkbox" value="NCMHLAB0061" id="NCMHLAB0061" name="lab_req">
                                    <label class="thin-label" for="NCMHLAB0061">
                                        Fecal Occult Blood (FOBT)
                                    </label>
                                </div>
                            </div>

                            <div class="col-sm-3">

                                <!-- MICROBIOLOGY -->
                                <label>MICROBIOLOGY</label>
                                <div class="">
                                    <input type="checkbox" class="with_src" value="NCMHLAB0062" id="NCMHLAB0062" name="lab_req">
                                    <label class="thin-label" for="NCMHLAB0062">
                                        Gram Stain
                                    </label>
                                    <div class="pl-4 d-none" id="src_data-NCMHLAB0062"><input placeholder="Source" type="text" name="txt-NCMHLAB0062" class="form-control text-scr" data-id="NCMHLAB0062"></div>
                                </div>
                                <div class="">
                                    <input type="checkbox" class="with_src" value="NCMHLAB0063" id="NCMHLAB0063" name="lab_req">
                                    <label class="thin-label" for="NCMHLAB0063">
                                        AFB Stain
                                    </label>
                                    <div class="pl-4 d-none" id="src_data-NCMHLAB0063"><input placeholder="Source" type="text" name="txt-NCMHLAB0063" class="form-control text-scr" data-id="NCMHLAB0063"></div>
                                </div>
                                <div class="">
                                    <input type="checkbox" class="with_src" value="NCMHLAB0064" id="NCMHLAB0064" name="lab_req">
                                    <label class="thin-label" for="NCMHLAB0064">
                                        KOH
                                    </label>
                                    <div class="pl-4 d-none" id="src_data-NCMHLAB0064"><input placeholder="Source" type="text" name="txt-NCMHLAB0064" class="form-control text-scr" data-id="NCMHLAB0064"></div>
                                </div>
                                <div class="">
                                    <input type="checkbox" class="with_src" value="NCMHLAB0065" id="NCMHLAB0065" name="lab_req">
                                    <label class="thin-label" for="NCMHLAB0065">
                                        Culture &amp; Sensitivity
                                    </label>
                                    <div class="pl-4 d-none" id="src_data-NCMHLAB0065">
                                        <div class="form-check"><input class="form-check-input" name="chk-NCMHLAB0065[]" type="checkbox" value="Blood">&nbsp;<label class="thin-label">Blood</label></div>
                                        <div class="form-check"><input class="form-check-input" name="chk-NCMHLAB0065[]" type="checkbox" value="Urine">&nbsp;<label class="thin-label">Urine</label></div>
                                        <div class="form-check"><input class="form-check-input" name="chk-NCMHLAB0065[]" type="checkbox" value="Stool">&nbsp;<label class="thin-label">Stool</label></div>
                                        <div class="form-check"><input class="form-check-input" name="chk-NCMHLAB0065[]" type="checkbox" value="Wound">&nbsp;<label class="thin-label">Wound</label></div>
                                        <div class="form-check"><input class="form-check-input" name="chk-NCMHLAB0065[]" type="checkbox" value="Rectal" swab="">&nbsp;<label class="thin-label">Rectal Swab</label></div><input placeholder="Others - please specify" type="text" name="txt-NCMHLAB0065" class="form-control text-scr" data-id="NCMHLAB0065">
                                    </div>
                                </div>
                                <div class="">
                                    <input type="checkbox" class="with_src" value="NCMHLAB0066" id="NCMHLAB0066" name="lab_req">
                                    <label class="thin-label" for="NCMHLAB0066">
                                        PCR for M.Tuberculosis
                                    </label>
                                    <div class="pl-4 d-none" id="src_data-NCMHLAB0066"></div>
                                </div>
                                <div class="">
                                    <input type="checkbox" class="with_src" value="NCMHLAB0067" id="NCMHLAB0067" name="lab_req">
                                    <label class="thin-label" for="NCMHLAB0067">
                                        Environmental Swabbing
                                    </label>
                                    <div class="pl-4 d-none" id="src_data-NCMHLAB0067"></div>
                                </div> <br>
                                <!-- MISCELLANEOUS -->
                                <label>MISCELLANEOUS</label>

                                <!-- Body Fluid Analysis (Cell Count, Sugar, Protein) -->
                                <div>
                                    <label class="thin-label">Body Fluid Analysis<br>(Cell Count, Sugar, Protein)</label>
                                    <div class="pl-4">
                                        <input type="checkbox" value="NCMHLAB0068" id="&quot;NCMHLAB0068&quot;" name="lab_req">
                                        <label class="thin-label" for="NCMHLAB0068">CSF</label>
                                    </div>
                                    <div class="pl-4">
                                        <input type="checkbox" value="NCMHLAB0069" id="&quot;NCMHLAB0069&quot;" name="lab_req">
                                        <label class="thin-label" for="NCMHLAB0069">Plueral Fluid</label>
                                    </div>
                                </div>

                                <!-- 24-HR Urine Chemistry  -->
                                <div>
                                    <label class="thin-label">24-HR Urine Chemistry</label>
                                    <div class="pl-4">
                                        <input type="checkbox" value="NCMHLAB0070" id="&quot;NCMHLAB0070&quot;" name="lab_req">
                                        <label class="thin-label" for="NCMHLAB0070">Gloucose</label>
                                    </div>
                                    <div class="pl-4">
                                        <input type="checkbox" value="NCMHLAB0071" id="&quot;NCMHLAB0071&quot;" name="lab_req">
                                        <label class="thin-label" for="NCMHLAB0071">Protein</label>
                                    </div>
                                    <div class="pl-4">
                                        <input type="checkbox" value="NCMHLAB0072" id="&quot;NCMHLAB0072&quot;" name="lab_req">
                                        <label class="thin-label" for="NCMHLAB0072">ECC-Creatine Clearance</label>
                                    </div>
                                </div>

                                <!-- DRUG TESTING -->
                                <label>DRUG TESTING</label>
                                <div class="">
                                    <input type="checkbox" value="NCMHLAB0073" id="NCMHLAB0073" name="lab_req">
                                    <label class="thin-label" for="NCMHLAB0073">
                                        Metamphetamine/ Shabu
                                    </label>
                                </div>
                                <div class="">
                                    <input type="checkbox" value="NCMHLAB0074" id="NCMHLAB0074" name="lab_req">
                                    <label class="thin-label" for="NCMHLAB0074">
                                        THC/ Marijuana
                                    </label>
                                </div>

                            </div>

                        </div>

                        <div class="form-group row">

                            <div class="col-sm-12">
                                <!-- Package -->
                                <label>OPD PACKAGES</label>
                                <div class="">
                                    <input class="lab_req_pack" type="checkbox" data-group="NCMHLAB0029,NCMHLAB0028,NCMHLAB0030" value="NCMHLAB0075" id="NCMHLAB0075" name="lab_req">
                                    <label class="thin-label" for="NCMHLAB0075">
                                        OPD 1/ Kidney Profile [Creat, BUN,BUA]
                                    </label>
                                </div>
                                <div class="">
                                    <input class="lab_req_pack" type="checkbox" data-group="NCMHLAB0031,NCMHLAB0032,NCMHLAB0033,NCMHLAB0034" value="NCMHLAB0076" id="NCMHLAB0076" name="lab_req">
                                    <label class="thin-label" for="NCMHLAB0076">
                                        OPD 2/ Lipid Profile [Choles, Trigly, HDL, LDL]
                                    </label>
                                </div>
                                <div class="">
                                    <input class="lab_req_pack" type="checkbox" data-group="NCMHLAB0035,NCMHLAB0036,NCMHLAB0037,NCMHLAB0038,NCMHLAB0039,NCMHLAB0040,NCMHLAB0041,NCMHLAB0042" value="NCMHLAB0077" id="NCMHLAB0077" name="lab_req">
                                    <label class="thin-label" for="NCMHLAB0077">
                                        OPD 3/ Liver Profile [SGPT, SGOT, TP &amp; A/G, Total Bili,B1&amp;B2, Alk. Phos]
                                    </label>
                                </div>
                                <div class="">
                                    <input class="lab_req_pack" type="checkbox" data-group="NCMHLAB0029,NCMHLAB0028,NCMHLAB0030,NCMHLAB0026" value="NCMHLAB0078" id="NCMHLAB0078" name="lab_req">
                                    <label class="thin-label" for="NCMHLAB0078">
                                        OPD 4 [FBS + Kidney Profile]
                                    </label>
                                </div>
                                <div class="">
                                    <input class="lab_req_pack" type="checkbox" data-group="NCMHLAB0031,NCMHLAB0032,NCMHLAB0033,NCMHLAB0034,NCMHLAB0026" value="NCMHLAB0079" id="NCMHLAB0079" name="lab_req">
                                    <label class="thin-label" for="NCMHLAB0079">
                                        OPD 5 [FBS + Lipid Profile]
                                    </label>
                                </div>
                                <div class="">
                                    <input class="lab_req_pack" type="checkbox" data-group="NCMHLAB0029,NCMHLAB0028,NCMHLAB0030,NCMHLAB0031,NCMHLAB0032,NCMHLAB0033,NCMHLAB0034,NCMHLAB0035,NCMHLAB0036,NCMHLAB0037,NCMHLAB0038,NCMHLAB0039,NCMHLAB0040,NCMHLAB0041,NCMHLAB0042,NCMHLAB0026" value="NCMHLAB0080" id="NCMHLAB0080" name="lab_req">
                                    <label class="thin-label" for="NCMHLAB0080">
                                        OPD 5 [FBS + kidney, Lipid &amp; Liver Profile]
                                    </label>
                                </div>
                                <div class="">
                                    <input class="lab_req_pack" type="checkbox" data-group="NCMHLAB0001,NCMHLAB0055,NCMHLAB0056" value="NCMHLAB0081" id="NCMHLAB0081" name="lab_req">
                                    <label class="thin-label" for="NCMHLAB0081">
                                        OPD 7 [CBC + Urinalysis + Fecalysis]
                                    </label>
                                </div>
                                <div class="">
                                    <input class="lab_req_pack" type="checkbox" data-group="NCMHLAB0001,NCMHLAB0002,NCMHLAB0028,NCMHLAB0029,NCMHLAB0050,NCMHLAB0046,NCMHLAB0047,NCMHLAB0041,NCMHLAB0051,NCMHLAB0036,NCMHLAB0030,NCMHLAB0013,NCMHLAB0017,NCMHLAB0018,NCMHLAB0015,NCMHLAB0014,NCMHLAB0022" value="NCMHLAB0082" id="NCMHLAB0082" name="lab_req">
                                    <label class="thin-label" for="NCMHLAB0082">
                                        HD Package 1 (CBC with Platelet, BUN, Creatinine, Total Ca, Na, K, Albumin,Phosphorous (Inorganic Phosphate), SGPT/ALT, Uric Acid, HBsAg, Anti-HBS, Anti-HCV, RPR/TPPA(Syphilis), HIV (Screening) Blood Typing (gel Technique)
                                    </label>
                                </div>
                                <div class="">
                                    <input class="lab_req_pack" type="checkbox" data-group="NCMHLAB0001,NCMHLAB0029,NCMHLAB0046,NCMHLAB0047,NCMHLAB0028,NCMHLAB0041,NCMHLAB0050,NCMHLAB0051,NCMHLAB0036,NCMHLAB0055" value="NCMHLAB0083" id="NCMHLAB0083" name="lab_req">
                                    <label class="thin-label" for="NCMHLAB0083">
                                        HD Package 2 (CBC, Creatinine, Na, K, BUN (Pre-Dialysis), BUN (Post-Dialysis) Albumin, Total Ca, Phosphorous (Inorganic Phosphate), SGPT/ALT, Uric Acid)
                                    </label>
                                </div>
                                <div class="">
                                    <input class="lab_req_pack" type="checkbox" data-group="NCMHLAB0013,NCMHLAB0017,NCMHLAB0018" value="NCMHLAB0084" id="NCMHLAB0084" name="lab_req">
                                    <label class="thin-label" for="NCMHLAB0084">
                                        HD Package 3 (HBsAg, Anti-HBs, Anti-HCV)
                                    </label>
                                </div>
                            </div>

                        </div>

                    </div>

                    <div class="tab-pane fade m-3" id="nav-rad-proc-dispo" role="tabpanel" aria-labelledby="nav-rad-proc-dispo-tab">

                        <!-- Radiologic X-ray exam -->
                        <div>
                            <label>X-RAY EXAMINATIONS</label>
                            <div class="row">
                                <div class="col-md-3"><input type="checkbox" class="" value="NCMHLAB0085" id="NCMHLAB0085" name="rad_req"><label class="thin-label" for="NCMHLAB0085">Abdomen (Supine/Upright)</label></div>
                                <div class="col-md-3"><input type="checkbox" class="" value="NCMHLAB0086" id="NCMHLAB0086" name="rad_req"><label class="thin-label" for="NCMHLAB0086">Abdomen (Supine Cross-Table Lateral)</label></div>
                                <div class="col-md-3"><input type="checkbox" class="" value="NCMHLAB0087" id="NCMHLAB0087" name="rad_req"><label class="thin-label" for="NCMHLAB0087">Ankle AP/L</label></div>
                                <div class="col-md-3"><input type="checkbox" class="" value="NCMHLAB0088" id="NCMHLAB0088" name="rad_req"><label class="thin-label" for="NCMHLAB0088">Arm AP/L</label></div>
                            </div>
                            <div class="row">
                                <div class="col-md-3"><input type="checkbox" class="" value="NCMHLAB0089" id="NCMHLAB0089" name="rad_req"><label class="thin-label" for="NCMHLAB0089">Cervical AP/L</label></div>
                                <div class="col-md-3"><input type="checkbox" class="" value="NCMHLAB0090" id="NCMHLAB0090" name="rad_req"><label class="thin-label" for="NCMHLAB0090">Chest PA (Adult)</label></div>
                                <div class="col-md-3"><input type="checkbox" class="" value="NCMHLAB0091" id="NCMHLAB0091" name="rad_req"><label class="thin-label" for="NCMHLAB0091">Chest AP/L (Pedia)</label></div>
                                <div class="col-md-3"><input type="checkbox" class="" value="NCMHLAB0092" id="NCMHLAB0092" name="rad_req"><label class="thin-label" for="NCMHLAB0092">Chest (Supine)</label></div>
                            </div>
                            <div class="row">
                                <div class="col-md-3"><input type="checkbox" class="" value="NCMHLAB0093" id="NCMHLAB0093" name="rad_req"><label class="thin-label" for="NCMHLAB0093">Chest (Apicolordotic View)</label></div>
                                <div class="col-md-3"><input type="checkbox" class="" value="NCMHLAB0094" id="NCMHLAB0094" name="rad_req"><label class="thin-label" for="NCMHLAB0094">Clavicle AP</label></div>
                                <div class="col-md-3"><input type="checkbox" class="" value="NCMHLAB0095" id="NCMHLAB0095" name="rad_req"><label class="thin-label" for="NCMHLAB0095">Elbow AP/L</label></div>
                                <div class="col-md-3"><input type="checkbox" class="" value="NCMHLAB0096" id="NCMHLAB0096" name="rad_req"><label class="thin-label" for="NCMHLAB0096">Foot AP/L,O</label></div>
                            </div>
                            <div class="row">
                                <div class="col-md-3"><input type="checkbox" class="" value="NCMHLAB0097" id="NCMHLAB0097" name="rad_req"><label class="thin-label" for="NCMHLAB0097">Forearm AP/L</label></div>
                                <div class="col-md-3"><input type="checkbox" class="" value="NCMHLAB0098" id="NCMHLAB0098" name="rad_req"><label class="thin-label" for="NCMHLAB0098">Hand PA/L,O</label></div>
                                <div class="col-md-3"><input type="checkbox" class="" value="NCMHLAB0099" id="NCMHLAB0099" name="rad_req"><label class="thin-label" for="NCMHLAB0099">Hips AP</label></div>
                                <div class="col-md-3"><input type="checkbox" class="" value="NCMHLAB0100" id="NCMHLAB0100" name="rad_req"><label class="thin-label" for="NCMHLAB0100">Knee AP/L</label></div>
                            </div>
                            <div class="row">
                                <div class="col-md-3"><input type="checkbox" class="" value="NCMHLAB0101" id="NCMHLAB0101" name="rad_req"><label class="thin-label" for="NCMHLAB0101">Leg APL/L</label></div>
                                <div class="col-md-3"><input type="checkbox" class="" value="NCMHLAB0102" id="NCMHLAB0102" name="rad_req"><label class="thin-label" for="NCMHLAB0102">Lumbosacral AP/L</label></div>
                                <div class="col-md-3"><input type="checkbox" class="" value="NCMHLAB0103" id="NCMHLAB0103" name="rad_req"><label class="thin-label" for="NCMHLAB0103">Mandible AP/O</label></div>
                                <div class="col-md-3"><input type="checkbox" class="" value="NCMHLAB0104" id="NCMHLAB0104" name="rad_req"><label class="thin-label" for="NCMHLAB0104">Mastoid Series</label></div>
                            </div>
                            <div class="row">
                                <div class="col-md-3"><input type="checkbox" class="" value="NCMHLAB0105" id="NCMHLAB0105" name="rad_req"><label class="thin-label" for="NCMHLAB0105">Nasal Bone (STL)</label></div>
                                <div class="col-md-3"><input type="checkbox" class="" value="NCMHLAB0106" id="NCMHLAB0106" name="rad_req"><label class="thin-label" for="NCMHLAB0106">Paranasal Sinuses</label></div>
                                <div class="col-md-3"><input type="checkbox" class="" value="NCMHLAB0107" id="NCMHLAB0107" name="rad_req"><label class="thin-label" for="NCMHLAB0107">Plain KUB</label></div>
                                <div class="col-md-3"><input type="checkbox" class="" value="NCMHLAB0108" id="NCMHLAB0108" name="rad_req"><label class="thin-label" for="NCMHLAB0108">Pelvis AP</label></div>
                            </div>
                            <div class="row">
                                <div class="col-md-3"><input type="checkbox" class="" value="NCMHLAB0109" id="NCMHLAB0109" name="rad_req"><label class="thin-label" for="NCMHLAB0109">Scoilosis Series</label></div>
                                <div class="col-md-3"><input type="checkbox" class="" value="NCMHLAB0110" id="NCMHLAB0110" name="rad_req"><label class="thin-label" for="NCMHLAB0110">Shoulder AP</label></div>
                                <div class="col-md-3"><input type="checkbox" class="" value="NCMHLAB0111" id="NCMHLAB0111" name="rad_req"><label class="thin-label" for="NCMHLAB0111">Skeletal Survey</label></div>
                                <div class="col-md-3"><input type="checkbox" class="" value="NCMHLAB0112" id="NCMHLAB0112" name="rad_req"><label class="thin-label" for="NCMHLAB0112">Skull PA/L</label></div>
                            </div>
                            <div class="row">
                                <div class="col-md-3"><input type="checkbox" class="" value="NCMHLAB0113" id="NCMHLAB0113" name="rad_req"><label class="thin-label" for="NCMHLAB0113">Skull Series (PA, Laterals, Towne's)</label></div>
                                <div class="col-md-3"><input type="checkbox" class="" value="NCMHLAB0114" id="NCMHLAB0114" name="rad_req"><label class="thin-label" for="NCMHLAB0114">TMJ (open/Close Mouth View)</label></div>
                                <div class="col-md-3"><input type="checkbox" class="" value="NCMHLAB0115" id="NCMHLAB0115" name="rad_req"><label class="thin-label" for="NCMHLAB0115">Thigh AP/L</label></div>
                                <div class="col-md-3"><input type="checkbox" class="" value="NCMHLAB0116" id="NCMHLAB0116" name="rad_req"><label class="thin-label" for="NCMHLAB0116">Thoracic Cage PA</label></div>
                            </div>
                            <div class="row">
                                <div class="col-md-3"><input type="checkbox" class="" value="NCMHLAB0117" id="NCMHLAB0117" name="rad_req"><label class="thin-label" for="NCMHLAB0117">Thoracic Spine AP/L</label></div>
                                <div class="col-md-3"><input type="checkbox" class="" value="NCMHLAB0118" id="NCMHLAB0118" name="rad_req"><label class="thin-label" for="NCMHLAB0118">Thiracolumbar AP/L</label></div>
                                <div class="col-md-3"><input type="checkbox" class="" value="NCMHLAB0119" id="NCMHLAB0119" name="rad_req"><label class="thin-label" for="NCMHLAB0119">Wrist PA/L</label></div>
                                <div class="col-md-3"><input type="checkbox" class="" value="NCMHLAB0120" id="NCMHLAB0120" name="rad_req"><label class="thin-label" for="NCMHLAB0120">Zygoma Submentovertex (SMV)</label></div>
                            </div>
                            <div class="row">
                                <div class="col-md-5"><input type="checkbox" class="with_others" value="NCMHLAB0121" id="NCMHLAB0121" name="rad_req"><label class="thin-label" for="NCMHLAB0121">Others</label><input type="text" placeholder="Others - please specify" class="form-control d-none" id="others_NCMHLAB0121" name="others_NCMHLAB0121"></div>
                            </div>
                        </div>

                        <!-- Radiologic X-ray special procedure -->
                        <div class="mt-3">
                            <label>X-RAY SPECIAL PROCEDURE</label>
                            <div class="row">
                                <div class="col-md-3"><input type="checkbox" class="" value="NCMHLAB0122" id="NCMHLAB0122" name="rad_req"><label class="thin-label" for="NCMHLAB0122">Barium Enema</label></div>
                                <div class="col-md-3"><input type="checkbox" class="" value="NCMHLAB0123" id="NCMHLAB0123" name="rad_req"><label class="thin-label" for="NCMHLAB0123">Cystourethrogram</label></div>
                                <div class="col-md-3"><input type="checkbox" class="" value="NCMHLAB0124" id="NCMHLAB0124" name="rad_req"><label class="thin-label" for="NCMHLAB0124">Distal Colonogram</label></div>
                                <div class="col-md-3"><input type="checkbox" class="" value="NCMHLAB0125" id="NCMHLAB0125" name="rad_req"><label class="thin-label" for="NCMHLAB0125">Esophagogram</label></div>
                            </div>
                            <div class="row">
                                <div class="col-md-3"><input type="checkbox" class="" value="NCMHLAB0126" id="NCMHLAB0126" name="rad_req"><label class="thin-label" for="NCMHLAB0126">Intraop Choloangiogram</label></div>
                                <div class="col-md-3"><input type="checkbox" class="" value="NCMHLAB0127" id="NCMHLAB0127" name="rad_req"><label class="thin-label" for="NCMHLAB0127">Small Bowel Series</label></div>
                                <div class="col-md-3"><input type="checkbox" class="" value="NCMHLAB0128" id="NCMHLAB0128" name="rad_req"><label class="thin-label" for="NCMHLAB0128">T-Tube Cholangiogram</label></div>
                                <div class="col-md-3"><input type="checkbox" class="" value="NCMHLAB0129" id="NCMHLAB0129" name="rad_req"><label class="thin-label" for="NCMHLAB0129">Upper GI Series</label></div>
                            </div>
                            <div class="row">
                                <div class="col-md-3"><input type="checkbox" class="" value="NCMHLAB0130" id="NCMHLAB0130" name="rad_req"><label class="thin-label" for="NCMHLAB0130">Intravenous Pyelography (IVP)</label></div>
                                <div class="col-md-5"><input type="checkbox" class="with_others" value="NCMHLAB0131" id="NCMHLAB0131" name="rad_req"><label class="thin-label" for="NCMHLAB0131">Others</label><input type="text" placeholder="Others - please specify" class="form-control d-none" id="others_NCMHLAB0131" name="others_NCMHLAB0131"></div>
                            </div>
                        </div>

                        <!-- Radiologic Ultrasound Examinations -->
                        <div class="mt-3">
                            <label>ULTRASOUND EXAMINATIONS</label>
                            <div class="row">
                                <div class="col-md-3"><input type="checkbox" class="" value="NCMHLAB0132" id="NCMHLAB0132" name="rad_req"><label class="thin-label" for="NCMHLAB0132">Biophysical Scoring (BPS)</label></div>
                                <div class="col-md-3"><input type="checkbox" class="" value="NCMHLAB0133" id="NCMHLAB0133" name="rad_req"><label class="thin-label" for="NCMHLAB0133">Breast</label></div>
                                <div class="col-md-3"><input type="checkbox" class="" value="NCMHLAB0134" id="NCMHLAB0134" name="rad_req"><label class="thin-label" for="NCMHLAB0134">Chest</label></div>
                                <div class="col-md-3"><input type="checkbox" class="" value="NCMHLAB0135" id="NCMHLAB0135" name="rad_req"><label class="thin-label" for="NCMHLAB0135">Cranial</label></div>
                            </div>
                            <div class="row">
                                <div class="col-md-3"><input type="checkbox" class="" value="NCMHLAB0136" id="NCMHLAB0136" name="rad_req"><label class="thin-label" for="NCMHLAB0136">Upper Abdomen</label></div>
                                <div class="col-md-3"><input type="checkbox" class="" value="NCMHLAB0137" id="NCMHLAB0137" name="rad_req"><label class="thin-label" for="NCMHLAB0137">Hepatobliary Tree</label></div>
                                <div class="col-md-3"><input type="checkbox" class="" value="NCMHLAB0138" id="NCMHLAB0138" name="rad_req"><label class="thin-label" for="NCMHLAB0138">Inguino-Scrotal</label></div>
                                <div class="col-md-3"><input type="checkbox" class="" value="NCMHLAB0139" id="NCMHLAB0139" name="rad_req"><label class="thin-label" for="NCMHLAB0139">KUB</label></div>
                            </div>
                            <div class="row">
                                <div class="col-md-3"><input type="checkbox" class="" value="NCMHLAB0140" id="NCMHLAB0140" name="rad_req"><label class="thin-label" for="NCMHLAB0140">KUB with Prostate</label></div>
                                <div class="col-md-3"><input type="checkbox" class="" value="NCMHLAB0141" id="NCMHLAB0141" name="rad_req"><label class="thin-label" for="NCMHLAB0141">Pelvic (Transabdominal)</label></div>
                                <div class="col-md-3"><input type="checkbox" class="" value="NCMHLAB0142" id="NCMHLAB0142" name="rad_req"><label class="thin-label" for="NCMHLAB0142">Pelvic (Transvaginal)</label></div>
                                <div class="col-md-3"><input type="checkbox" class="with_others" value="NCMHLAB0143" id="NCMHLAB0143" name="rad_req"><label class="thin-label" for="NCMHLAB0143">Soft Tissue</label><input type="text" class="form-control d-none" id="specify_NCMHLAB0143" name="specify_NCMHLAB0143"></div>
                            </div>
                            <div class="row">
                                <div class="col-md-3"><input type="checkbox" class="" value="NCMHLAB0144" id="NCMHLAB0144" name="rad_req"><label class="thin-label" for="NCMHLAB0144">Thyroid</label></div>
                                <div class="col-md-3"><input type="checkbox" class="" value="NCMHLAB0145" id="NCMHLAB0145" name="rad_req"><label class="thin-label" for="NCMHLAB0145">Lower Abdomen</label></div>
                                <div class="col-md-3"><input type="checkbox" class="" value="NCMHLAB0146" id="NCMHLAB0146" name="rad_req"><label class="thin-label" for="NCMHLAB0146">Whole Abdomen</label></div>
                                <div class="col-md-3"><input type="checkbox" class="with_others" value="NCMHLAB0147" id="NCMHLAB0147" name="rad_req"><label class="thin-label" for="NCMHLAB0147">Single Organ Examination</label><input type="text" class="form-control d-none" id="specify_NCMHLAB0147" name="specify_NCMHLAB0147"></div>
                            </div>
                            <div class="row">
                                <div class="col-md-3"><input type="checkbox" class="" value="NCMHLAB0148" id="NCMHLAB0148" name="rad_req"><label class="thin-label" for="NCMHLAB0148">Focused Assessment Sonography Trauma</label></div>
                                <div class="col-md-5"><input type="checkbox" class="with_others" value="NCMHLAB0149" id="NCMHLAB0149" name="rad_req"><label class="thin-label" for="NCMHLAB0149">Others</label><input type="text" placeholder="Others - please specify" class="form-control d-none" id="others_NCMHLAB0149" name="others_NCMHLAB0149"></div>
                            </div>
                        </div>

                        <div class="mt-3">
                            <div class="row">
                                <div class="col-md-12">
                                    <label>OTHERS</label>
                                    <input type="text" name="" id="" class="form-control">
                                </div>
                            </div>
                        </div>
                    </div>

                </div>
            </div>

            <div class="modal-footer justify-content-between p-1">
                <button type="button" class="btn btn-sm btn-danger" data-dismiss="modal" data-toggle="modal" href="#discharge_proc_modal">Close</button>
                <button type="button" class="btn btn-sm btn-primary" id="submit-diagproc-btn" data-dismiss="modal" data-toggle="modal" href="#discharge_proc_modal">Submit</button>
            </div>

        </div>
        <!-- /.modal-content -->
    </div>
    <!-- /.modal-dialog -->
</div>
<!-- discharge_proc_cat -->