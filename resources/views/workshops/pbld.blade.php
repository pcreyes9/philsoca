@extends('home.master')

@section('title', 'PBLD Program')
@section('banner-name', 'AIRWAY Workshop Program')

@section('content')
{{-- @include('home.banner') --}}

<section id="main-container" class="pb-4 main-container text-center project-area ">
    <div class="container">
        @if (session('success'))
            <div class="alert alert-success">
                {{ session('success') }}
            </div>
        @endif

        <div class="row justify-content-center mb-5" data-animation-in="slideInLeft" data-duration-in="1.2">
            <div class="col-lg-12" >
                {{-- <h3 class="into-workshop-title" >PBLD Program</h3> --}}
            </div>
            <div class="col-lg-11 mb-3">
                <h3 class="into-workshop-title">October 24 & 25, 2025<br> GF Executive 5, Marriot Grand Ballroom</h3>
            </div>

            <div class="d-flex justify-content-center">
                <img style="width: 100%;" class="align-middle mt-3 " src="images/ACA PBLD POSTER_091825.png?v={{ time() }}" alt="Image is still in process.">
            </div>



            
            {{-- <div class="col-lg-12 mt-4 mt-lg-0">
                <p class="workshop-head fd">Opening Remarks:</p>
                <p class="hotel-p fd">Anna Margarita F. Hilvano-Corsiga, MD</p>
                <br>
                <p class="workshop-head fd">Groupings and Workshop Mechanics:</p>
                <p class="hotel-p fd">Roan J. Jocson, MD</p>
                <br>

                <div class="table-responsive mb-3">
                    <table class="table fd">
                        <thead class="bg-primary text-white">
                            <tr>
                                <th class="text-left align-middle" scope="col">Stations</th>
                                <th class="text-left align-middle" scope="col">Facilitators</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <th class="text-left" scope="row">Station # 1 Front of Neck Access</th>
                                <td class="text-left">Loreto Felizar, MD <br> Lauren Laforteza, MD </td>
                            </tr>
                            <tr>
                                <th class="text-left" scope="row">Station # 2 Front of Neck Access</th>
                                <td class="text-left">Christian King Soriño, MD <br> Sheena Abigail Ong, MD </td>
                            </tr>
                             <tr>
                                <th class="text-left" scope="row">Station # 3 Videolaryngoscope Macintosh Blade and Hyperangulated Blade </th>
                                <td class="text-left">Anna Margarita Hilvano Corsiga, MD <br> Ella Patricia Ravanera, MD </td>
                            </tr>
                            <tr>
                                <th class="text-left" scope="row">Station #4 Bougie Intubation with the Kiwi Grip/Pistol Grip</th>
                                <td class="text-left">Anna Margarita Hilvano Corsiga, MD <br> Ella Patricia Ravanera, MD </td>
                            </tr>
                            <tr>
                                <th class="text-left" scope="row">Station #5 Optical Stylet </th>
                                <td class="text-left">Ivan Gil Balmadrid, MD </td>
                            </tr>
                            <tr>
                                <th class="text-left" scope="row">Station #6 SALAD</th>
                                <td class="text-left">Roan Jocson, MD </td>
                            </tr>
                             <tr>
                                <th class="text-left" scope="row">Station #7 Dual Technique – <br> 
                                    &nbsp a)	VL + Flexible videoscope <br>
                                    &nbsp b)	VL + Optical stylet <br>
                                    &nbsp c)	Intubation thru SGA 
                                </th>
                                <td class="text-left">Jonart Villanueva, MD <br> Ralph Anislag, MD <br> Dennis Lopez, MD </td>
                            </tr>
                            <tr>
                                <th class="text-left" scope="row">Station # 8 Flexible Guided Intubation</th>
                                <td class="text-left">Eduardo Salvador, MD</td>
                            </tr>
                            <tr>
                                <th class="text-left" scope="row">Station # 9 How to Initiate High Flow Therapy</th>
                                <td class="text-left">Kaye Agcaoili, MD</td>
                            </tr>
                        </tbody>
                    </table>
                </div>
                --}}
                <br>

                <div class="mt-5">
                    <h3 class="mb-5 into-sub-title">Short Description and Objectives of each PBLD Topics </h3>
                    {{-- <p>Minim Austin 3 wolf moon scenester aesthetic, umami odio pariatur bitters. Pop-up occaecat taxidermy street art, tattooed beard literally.</p> --}}

                    <div class="accordion accordion-group" id="our-values-accordion">
                        <div class="card">
                            <div class="card-header p-0 bg-transparent" id="headingOne">
                                <h2 class="mb-0">
                                <button class="btn btn-block text-left" type="button" data-toggle="collapse" data-target="#collapseOne" aria-expanded="false" aria-controls="collapseOne">
                                    Pediatric Airway Management (Annery Garcia-Marcinkiewicz MD)
                                </button>
                                </h2>
                            </div>
                        
                            <div id="collapseOne" class="collapse text-left" aria-labelledby="headingOne" data-parent="#our-values-accordion">
                                <div class="card-body">
                                    Airway management in pediatric patients with Pierre Robin Sequence (PRS)
                                    requires a detailed understanding of pediatric airway anatomy, which differs
                                    significantly from adults—neonates have a larger tongue, smaller jaw
                                    (micrognathia), anterior larynx, and floppy epiglottis, all of which are
                                    exaggerated in PRS. These features increase the risk of airway obstruction
                                    and difficult intubation.

                                    <br>
                                    <br>
                                    <strong>Learning Objectives: </strong>
                                    <br>
                                    <ol class="list-group list-group-numbered">
                                        <li>Understand airway anatomical differences in neonates, infants, and children compared to adults.</li>
                                        <li>Describe developmental changes in respiratory physiology.</li>
                                        <li>Identify predictors of a difficult pediatric or neonatal airway, including syndromic features (e.g., Pierre Robin, Down syndrome, Goldenhar, CHARGE).</li>
                                        <li>Understand selection and sizing of airway equipment.</li>
                                        <li>Understand the ASA Difficult Airway Algorithm and adaptations for neonates and pediatric patients.</li>
                                    </ol>

                               </div>
                            </div>
                        </div>
                        <div class="card">
                            <div class="card-header p-0 bg-transparent" id="headingTwo">
                                <h2 class="mb-0">
                                <button class="btn btn-block text-left collapsed" type="button" data-toggle="collapse" data-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
                                    VATS (Wanda Popescu MD)
                                </button>
                                </h2>
                            </div>
                            <div id="collapseTwo" class="collapse text-left" aria-labelledby="headingTwo" data-parent="#our-values-accordion">
                                <div class="card-body">
                                    Video-Assisted Thoracoscopic Surgery (VATS) is a minimally invasive
                                    alternative to open thoracotomy, using small incisions and a thoracoscope to
                                    perform intrathoracic procedures such as wedge resections, lobectomies, and
                                    pleural biopsies. Compared to thoracotomy, VATS offers reduced
                                    postoperative pain, shorter recovery time, and fewer pulmonary
                                    complications.


                                    <br>
                                    <br>
                                    <strong>Learning Objectives: </strong>
                                    <br>
                                    <ol class="list-group list-group-numbered">
                                        <li>Define Video-Assisted Thoracoscopic Surgery (VATS) and differentiate it from open thoracotomy.</li>
                                        
                                        <li>
                                            Explain the anesthetic goals specific to VATS, including:
                                            <ul style="list-style-type: disc; margin-left: 1.5rem;">
                                            <li>Lung isolation and deflation</li>
                                            <li>Optimal gas exchange during one-lung ventilation (OLV)</li>
                                            <li>Hemodynamic stability</li>
                                            <li>Postoperative analgesia</li>
                                            </ul>
                                        </li>

                                        <li>Identify the types of procedures commonly performed with VATS (e.g., wedge resection, lobectomy, pleural biopsy).</li>

                                        <li>
                                            List common anesthetic challenges in VATS:
                                            <ul style="list-style-type: disc; margin-left: 1.5rem;">
                                            <li>Hypoxemia during OLV</li>
                                            <li>Hypercapnia</li>
                                            <li>Surgical interference with ventilation</li>
                                            </ul>
                                        </li>

                                        <li>Describe the advantages and limitations of VATS compared to thoracotomy from an anesthetic perspective.</li>
                                    </ol>
                                </div>
                            </div>
                        </div>
                        <div class="card">
                            <div class="card-header p-0 bg-transparent" id="headingThree">
                                <h2 class="mb-0">
                                <button class="btn btn-block text-left collapsed" type="button" data-toggle="collapse" data-target="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
                                    Neonatal TIVA (Vesna Jevtovic-Todorovic MD)
                                </button>
                                </h2>
                            </div>
                            <div id="collapseThree" class="collapse text-left" aria-labelledby="headingThree" data-parent="#our-values-accordion">
                                <div class="card-body">
                                    Total Intravenous Anesthesia (TIVA) in neonates, particularly for MRI, requires
                                    careful consideration of neonatal physiology—including immature hepatic and
                                    renal function, sensitive airway anatomy, and poor thermoregulatory control.
                                    These factors affect drug metabolism and increase the risk of adverse events
                                    such as apnea, bradycardia, and hypothermia.

                                    <br>
                                    <br>
                                    <strong>Learning Objectives: </strong>
                                    <br>
                                    <h5 class="mt-1"><strong>Pre-Sedation</strong></h5>
                                    <ol class="list-group list-group-numbered">
                                        <li>Identify the unique physiological and pharmacological considerations in neonates (e.g., immature hepatic/renal function, airway anatomy, thermoregulation).</li>
                                        <li>List indications and contraindications for sedation or anesthesia in neonatal MRI.</li>
                                        <li>Describe commonly used anesthetic and sedative agents in neonates (e.g., propofol, dexmedetomidine, chloral hydrate) and their safety profiles.</li>
                                        <li>Explain fasting guidelines appropriate for neonates prior to sedation.</li>
                                        <li>Discuss the importance of screening for underlying medical conditions (e.g., apnea of prematurity, congenital heart disease).</li>
                                        </ol>

                                        <h5 class="mt-2"><strong>Intra-Procedural</strong></h5>
                                        <ol class="list-group list-group-numbered">
                                        <li>Describe challenges of delivering anesthesia in the MRI environment (e.g., limited access, MRI-compatible equipment).</li>
                                        <li>Explain MRI safety principles for anesthetic equipment (e.g., non-ferromagnetic monitors, gas delivery systems).</li>
                                        <li>Discuss the goals of anesthesia during MRI: immobility, airway protection, hemodynamic stability, and maintenance of normothermia.</li>
                                        </ol>

                                        <h5 class="mt-2"><strong>Post-Sedation</strong></h5>
                                        <ol class="list-group list-group-numbered">
                                        <li>Recognize potential complications of neonatal sedation (e.g., hypoxia, apnea, bradycardia).</li>
                                        <li>Describe appropriate monitoring and discharge criteria for neonates post-MRI sedation.</li>
                                    </ol>                                
                                </div>
                            </div>
                        </div>
                        <div class="card">
                            <div class="card-header p-0 bg-transparent" id="headingThree">
                                <h2 class="mb-0">
                                <button class="btn btn-block text-left collapsed" type="button" data-toggle="collapse" data-target="#col4" aria-expanded="false" aria-controls="col4">
                                    Hip Surgery (Sanjib Adhikary MD)
                                </button>
                                </h2>
                            </div>
                            <div id="col4" class="collapse text-left" aria-labelledby="headingThree" data-parent="#our-values-accordion">
                                <div class="card-body">
                                    This module covers the principles and practices of anesthesia for hip surgery,
                                    including preoperative assessment, anesthetic techniques (general vs
                                    regional), intraoperative management, and postoperative care. Emphasis is
                                    placed on optimizing patient safety, managing comorbidities, and facilitating
                                    early recovery.


                                    <br>
                                    <br>
                                    <strong>Learning Objectives: </strong>
                                    <br>
                                    By the end of this module, learners will be able to:
                                    <br>
                                    <ol class="list-group list-group-numbered">
                                        <li><strong>Describe</strong> the common types of hip surgeries and their anesthetic implications.</li>
                                        <li><strong>Compare and contrast</strong> regional and general anesthesia techniques for hip procedures.</li>
                                        <li><strong>Identify</strong> key patient factors (e.g., age, comorbidities, anticoagulation) that influence anesthetic planning.</li>
                                        <li><strong>Formulate</strong> an anesthetic plan tailored to individual patient and surgical needs.</li>
                                        <li><strong>Demonstrate</strong> knowledge of intraoperative monitoring, fluid management, and pain control strategies.</li>
                                        <li><strong>Recognize</strong> and manage potential complications, including hypotension, blood loss, and postoperative delirium.</li>
                                        <li><strong>Outline</strong> strategies for enhanced recovery and postoperative analgesia following hip surgery.</li>
                                    </ol>
                             
                                </div>
                            </div>
                        </div>
                        <div class="card">
                            <div class="card-header p-0 bg-transparent" id="headingThree">
                                <h2 class="mb-0">
                                <button class="btn btn-block text-left collapsed" type="button" data-toggle="collapse" data-target="#col5" aria-expanded="false" aria-controls="col5">
                                    Neonatal Surgical Emergencies (Ina Ismiarti Shariffuddin MD)
                                </button>
                                </h2>
                            </div>
                            <div id="col5" class="collapse text-left" aria-labelledby="headingThree" data-parent="#our-values-accordion">
                                <div class="card-body">
                                    This session provides an overview of neonatal surgical emergencies, focusing
                                    on early recognition, differential diagnosis, initial stabilization, and the
                                    principles guiding surgical intervention. Emphasis is placed on the clinical
                                    approach to common presentations like bilious vomiting and abdominal
                                    distension, with a review of key diagnostic tools and urgent management
                                    steps. Learners will explore the most frequent surgical emergencies
                                    encountered in neonates and understand factors influencing the urgency and
                                    timing of surgical treatment.


                                    <br>
                                    <br>
                                    <strong>Learning Objectives: </strong>
                                    <br>
                                    <ol class="list-group list-group-numbered">
                                        <li><strong>List</strong> the differential diagnoses for bilious vomiting and abdominal distension in neonates.</li>
                                        <li><strong>Describe</strong> the immediate stabilization and investigation steps for a neonate presenting with suspected surgical emergency.</li>
                                        <li><strong>Interpret</strong> key radiographic findings suggestive of common neonatal surgical conditions.</li>
                                        <li><strong>Differentiate</strong> between surgical and non-surgical causes of neonatal abdominal symptoms.</li>
                                        <li><strong>Identify</strong> the most common neonatal surgical emergencies and discuss their pathophysiology, presentation, and management.</li>
                                        <li><strong>Evaluate</strong> the factors that influence the timing of surgery in critically ill neonates.</li>
                                    </ol>
                                </div>
                            </div>
                        </div>
                        <div class="card">
                            <div class="card-header p-0 bg-transparent" id="headingThree">
                                <h2 class="mb-0">
                                <button class="btn btn-block text-left collapsed" type="button" data-toggle="collapse" data-target="#col6" aria-expanded="false" aria-controls="col6">
                                    Hypertension in Pregnancy (Heather Nixon MD)
                                </button>
                                </h2>
                            </div>
                            <div id="col6" class="collapse text-left" aria-labelledby="headingThree" data-parent="#our-values-accordion">
                                <div class="card-body">
                                    This discussion focuses on <strong>hypertension in pregnancy</strong>, with an emphasis
                                    on <strong>severe preeclampsia</strong> and its anesthetic implications. Participants will
                                    explore the underlying pathophysiology, including endothelial dysfunction,
                                    intravascular volume changes, and coagulopathy. The session also covers
                                    maternal and fetal complications, anesthetic goals, choice of anesthesia
                                    technique, and the pharmacologic management of hypertensive disorders in
                                    pregnancy.


                                    <br>
                                    <br>
                                    <strong>Learning Objectives: </strong>
                                    <br>
                                    <ol class="list-group list-group-numbered">
                                        <li>
                                            Explain the pathophysiology of hypertension and preeclampsia and its implications for anesthetic care, including:
                                            <ul style="list-style-type: disc; margin-left: 1.5rem;">
                                            <li>Endothelial dysfunction</li>
                                            <li>Intravascular volume depletion</li>
                                            <li>Coagulopathy (e.g., HELLP syndrome)</li>
                                            </ul>
                                        </li>

                                        <li>List maternal and fetal complications associated with severe preeclampsia (e.g., eclampsia, placental abruption, fetal growth restriction).</li>

                                        <li>
                                            Describe the goals of anesthesia management in severe preeclampsia:
                                            <ul style="list-style-type: disc; margin-left: 1.5rem;">
                                            <li>Blood pressure control</li>
                                            <li>Maintenance of uteroplacental perfusion</li>
                                            <li>Avoidance of complications such as stroke or pulmonary edema</li>
                                            </ul>
                                        </li>

                                        <li>Compare the indications, risks, and benefits of regional vs general anesthesia in severe preeclampsia.</li>

                                        <li>Discuss the role of medications such as magnesium sulfate, antihypertensives (e.g., labetalol, hydralazine), and their anesthetic implications.</li>
                                    </ol>

                                </div>
                            </div>
                        </div>
                        <div class="card">
                            <div class="card-header p-0 bg-transparent" id="headingThree">
                                <h2 class="mb-0">
                                <button class="btn btn-block text-left collapsed" type="button" data-toggle="collapse" data-target="#col7" aria-expanded="false" aria-controls="col7">
                                    Coagulopathy (Klaus Goerlinger MD)
                                </button>
                                </h2>
                            </div>
                            <div id="col7" class="collapse text-left" aria-labelledby="headingThree" data-parent="#our-values-accordion">
                                <div class="card-body">
                                    This session explores the complex interplay between <strong>coagulopathy, trauma,
                                    and liver disease</strong>, with a focus on <strong>trauma patients with cirrhosis</strong>. Learners
                                    will examine the pathophysiological changes in coagulation balance in
                                    cirrhotic patients, how these are affected by trauma and hemorrhage, and the
                                    challenges in interpreting standard coagulation tests. The discussion also
                                    addresses anesthetic considerations, transfusion strategies, and the role of
                                    viscoelastic testing in guiding targeted management during resuscitation and
                                    surgery.

                                    <br>
                                    <br>
                                    <strong>Learning Objectives: </strong>
                                    <br>
                                    <ol class="list-group list-group-numbered">
                                        <li><strong>Explain</strong> the impact of trauma and hemorrhage on coagulation balance in cirrhotic patients.</li>
                                        <li><strong>Identify</strong> clinical and laboratory signs of coagulopathy in a trauma patient with cirrhosis (e.g., elevated INR, low platelets, prolonged PT/aPTT).</li>
                                        <li><strong>Evaluate</strong> the risks of bleeding versus thrombosis in cirrhotic patients with trauma.</li>
                                        <li><strong>Interpret</strong> coagulation studies in the context of cirrhosis, understanding limitations (e.g., INR may not reflect bleeding risk accurately).</li>
                                        <li><strong>Assess</strong> the need for viscoelastic testing (e.g., TEG/ROTEM) in guiding blood product administration.</li>
                                        <li><strong>Recognize</strong> anesthetic considerations in cirrhotic patients, including drug metabolism, fluid shifts, and hemodynamic instability.</li>
                                        <li><strong>Plan</strong> perioperative strategies to manage coagulopathy, including use of FFP, cryoprecipitate, platelets, and possibly antifibrinolytics (e.g., TXA).</li>
                                        <li><strong>Demonstrate</strong> appropriate airway and hemodynamic management in trauma patients with liver dysfunction.</li>
                                        <li><strong>Discuss</strong> the role of damage control resuscitation and massive transfusion protocols in cirrhotic trauma patients.</li>
                                    </ol>
                                </div>
                            </div>
                        </div>
                        <div class="card">
                            <div class="card-header p-0 bg-transparent" id="headingThree">
                                <h2 class="mb-0">
                                <button class="btn btn-block text-left collapsed" type="button" data-toggle="collapse" data-target="#col7" aria-expanded="false" aria-controls="col7">
                                    Coagulopathy (Klaus Goerlinger MD)
                                </button>
                                </h2>
                            </div>
                            <div id="col7" class="collapse text-left" aria-labelledby="headingThree" data-parent="#our-values-accordion">
                                <div class="card-body">
                                    This session explores the complex interplay between <strong>coagulopathy, trauma,
                                    and liver disease</strong>, with a focus on <strong>trauma patients with cirrhosis</strong>. Learners
                                    will examine the pathophysiological changes in coagulation balance in
                                    cirrhotic patients, how these are affected by trauma and hemorrhage, and the
                                    challenges in interpreting standard coagulation tests. The discussion also
                                    addresses anesthetic considerations, transfusion strategies, and the role of
                                    viscoelastic testing in guiding targeted management during resuscitation and
                                    surgery.

                                    <br>
                                    <br>
                                    <strong>Learning Objectives: </strong>
                                    <br>
                                    <ol class="list-group list-group-numbered">
                                        <li><strong>Explain</strong> the impact of trauma and hemorrhage on coagulation balance in cirrhotic patients.</li>
                                        <li><strong>Identify</strong> clinical and laboratory signs of coagulopathy in a trauma patient with cirrhosis (e.g., elevated INR, low platelets, prolonged PT/aPTT).</li>
                                        <li><strong>Evaluate</strong> the risks of bleeding versus thrombosis in cirrhotic patients with trauma.</li>
                                        <li><strong>Interpret</strong> coagulation studies in the context of cirrhosis, understanding limitations (e.g., INR may not reflect bleeding risk accurately).</li>
                                        <li><strong>Assess</strong> the need for viscoelastic testing (e.g., TEG/ROTEM) in guiding blood product administration.</li>
                                        <li><strong>Recognize</strong> anesthetic considerations in cirrhotic patients, including drug metabolism, fluid shifts, and hemodynamic instability.</li>
                                        <li><strong>Plan</strong> perioperative strategies to manage coagulopathy, including use of FFP, cryoprecipitate, platelets, and possibly antifibrinolytics (e.g., TXA).</li>
                                        <li><strong>Demonstrate</strong> appropriate airway and hemodynamic management in trauma patients with liver dysfunction.</li>
                                        <li><strong>Discuss</strong> the role of damage control resuscitation and massive transfusion protocols in cirrhotic trauma patients.</li>
                                    </ol>
                                </div>
                            </div>
                        </div>
                        <div class="card">
                            <div class="card-header p-0 bg-transparent" id="headingThree">
                                <h2 class="mb-0">
                                <button class="btn btn-block text-left collapsed" type="button" data-toggle="collapse" data-target="#col8" aria-expanded="false" aria-controls="col8">
                                    Anesthesia for Spine Surgery (Jeffrey Pasternak MD)
                                </button>
                                </h2>
                            </div>
                            <div id="col8" class="collapse text-left" aria-labelledby="headingThree" data-parent="#our-values-accordion">
                                <div class="card-body">
                                    This discussion focuses on the anesthetic considerations for spine surgery,
                                    highlighting the complexity of managing patients in the prone position and the
                                    need for careful coordination with surgical and neuromonitoring teams. Key
                                    topics include preoperative evaluation, positioning risks, intraoperative
                                    management strategies, blood conservation, and planning for postoperative
                                    analgesia and complication prevention.

                                    <br>
                                    <br>
                                    <strong>Learning Objectives: </strong>
                                    <br>
                                    <ol class="list-group list-group-numbered">
                                        <li><strong>Conduct</strong> a comprehensive preoperative evaluation including airway, neurologic status, and comorbidities (e.g., obesity, obstructive sleep apnea, cardiac disease).</li>
                                        <li><strong>Recognize</strong> and mitigate complications related to prone positioning (e.g., pressure injury, vision loss, venous air embolism).</li>
                                        <li><strong>Manage</strong> anesthetic depth, neuromonitoring compatibility (e.g., SSEPs, MEPs), and blood pressure targets.</li>
                                        <li><strong>Implement</strong> blood conservation strategies (e.g., antifibrinolytics, cell salvage, permissive hypotension). Monitor for and treat massive blood loss and transfusion needs.</li>
                                        <li><strong>Develop</strong> multimodal analgesia plans including opioids, NSAIDs, acetaminophen, and regional techniques.</li>
                                        <li><strong>Identify</strong> risks of postoperative complications such as respiratory depression, delayed emergence, and neurologic deficits.</li>
                                    </ol>

                                </div>
                            </div>
                        </div>
                        <div class="card">
                            <div class="card-header p-0 bg-transparent" id="headingThree">
                                <h2 class="mb-0">
                                <button class="btn btn-block text-left collapsed" type="button" data-toggle="collapse" data-target="#col9" aria-expanded="false" aria-controls="col9">
                                    Obstetric Hemorrhage (Christopher Bowden MD)
                                </button>
                                </h2>
                            </div>
                            <div id="col9" class="collapse text-left" aria-labelledby="headingThree" data-parent="#our-values-accordion">
                                <div class="card-body">
                                    This discussion addresses the recognition and anesthetic management of
                                    obstetric hemorrhage, a leading cause of maternal morbidity and mortality.
                                    The session covers the classification of hemorrhage, underlying causes using
                                    the "4 Ts" framework, pathophysiological changes during massive bleeding,
                                    and critical anesthetic considerations including fluid resuscitation, transfusion
                                    strategies, and medication use. Special attention is given to decision-making
                                    around anesthetic techniques in hemodynamically unstable obstetric patients.


                                    <br>
                                    <br>
                                    <strong>Learning Objectives: </strong>
                                    <br>
                                    <ol class="list-group list-group-numbered">
                                        <li>
                                            <strong>Define</strong> obstetric hemorrhage, including major categories:
                                            <ul style="list-style-type: disc; margin-left: 1.5rem;">
                                            <li>Antepartum hemorrhage (e.g., placenta previa, abruption)</li>
                                            <li>Postpartum hemorrhage (PPH: &gt;500 mL vaginal, &gt;1000 mL cesarean)</li>
                                            </ul>
                                        </li>

                                        <li>
                                            <strong>List</strong> common causes of obstetric hemorrhage using the “4Ts mnemonic”:
                                            <ul style="list-style-type: disc; margin-left: 1.5rem;">
                                            <li>Tone (uterine atony)</li>
                                            <li>Trauma (lacerations, uterine rupture)</li>
                                            <li>Tissue (retained placenta)</li>
                                            <li>Thrombin (coagulopathy)</li>
                                            </ul>
                                        </li>

                                        <li><strong>Explain</strong> the pathophysiology and hemodynamic changes during massive obstetric hemorrhage.</li>

                                        <li>
                                            <strong>Describe</strong> the anesthetic implications of hemorrhage, including:
                                            <ul style="list-style-type: disc; margin-left: 1.5rem;">
                                            <li>Fluid resuscitation and transfusion management</li>
                                            <li>Hemodynamic monitoring</li>
                                            <li>Effects on anesthetic drug pharmacokinetics</li>
                                            </ul>
                                        </li>

                                        <li>
                                            <strong>Discuss</strong> anesthetic options in unstable obstetric patients:
                                            <ul style="list-style-type: disc; margin-left: 1.5rem;">
                                            <li>When general anesthesia is preferred over neuraxial</li>
                                            <li>Risks of neuraxial anesthesia in hypovolemia or coagulopathy</li>
                                            </ul>
                                        </li>

                                        <li>
                                            <strong>Summarize</strong> the use and implications of:
                                            <ul style="list-style-type: disc; margin-left: 1.5rem;">
                                            <li>Uterotonics (e.g., oxytocin)</li>
                                            <li>Tranexamic acid (TXA)</li>
                                            <li>Massive transfusion protocols (MTPs)</li>
                                            </ul>
                                        </li>
                                    </ol>
                                </div>
                            </div>
                        </div>
                        <div class="card">
                            <div class="card-header p-0 bg-transparent" id="headingThree">
                                <h2 class="mb-0">
                                <button class="btn btn-block text-left collapsed" type="button" data-toggle="collapse" data-target="#col10" aria-expanded="false" aria-controls="col10">
                                    Anesthesia for Spine Surgery (Jeffrey Pasternak MD)
                                </button>
                                </h2>
                            </div>
                            <div id="col10" class="collapse text-left" aria-labelledby="headingThree" data-parent="#our-values-accordion">
                                <div class="card-body">
                                    This discussion explores the recognition, causes, and management of <strong>perioperative
                                    hypotension</strong>, a common and potentially harmful complication in surgical patients.
                                    The session reviews the physiological basis of blood pressure regulation during
                                    anesthesia, effects of common anesthetic agents, and phase-specific causes of
                                    hypotension. Learners will also assess patient risk factors and understand the shortand long-term consequences of inadequate perfusion during the perioperative period.


                                    <br>
                                    <br>
                                    <strong>Learning Objectives: </strong>
                                    <br>
                                    <ol class="list-group list-group-numbered">
                                        <li><strong>Define</strong> perioperative hypotension and its common thresholds (e.g., MAP &lt;65 mmHg).</li>

                                        <li><strong>Describe</strong> the physiological mechanisms underlying blood pressure regulation during anesthesia.</li>

                                        <li>
                                            <strong>List</strong> common causes of hypotension in each perioperative phase:
                                            <ul style="list-style-type: disc; margin-left: 1.5rem;">
                                            <li>Preoperative (e.g., dehydration, medications)</li>
                                            <li>Intraoperative (e.g., anesthetic agents, blood loss, positioning)</li>
                                            <li>Postoperative (e.g., residual anesthetics, bleeding, sepsis)</li>
                                            </ul>
                                        </li>

                                        <li><strong>Explain</strong> the effects of various anesthetic agents (e.g., propofol, volatile anesthetics, opioids) on hemodynamics.</li>

                                        <li><strong>Identify</strong> high-risk patient populations for perioperative hypotension (e.g., elderly, cardiac disease, autonomic dysfunction).</li>

                                        <li><strong>Discuss</strong> the short- and long-term consequences of intraoperative hypotension (e.g., myocardial injury, AKI, stroke).</li>
                                    </ol>
                                </div>
                            </div>
                        </div>
                    </div>
                <!--/ Accordion end -->

                </div><!-- Col end -->
                         
                <div class="d-grid gap-2 mt-4">
                    <a href="{{ route('pbldReg') }}" target="_blank" class="btn btn-dark mb-1" style="font-size: 20px">PBLD Registration</a>
                </div>
            </div> 
        </div>
    </div>
</section><!-- Main container end -->
@endsection