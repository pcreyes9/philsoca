<?php $page='venue'; ?>
@extends('home.master')

@section('title', 'Abstract')
@section('banner-name', 'Abstract')

@section('content')
@include('home.banner')

<section id="news" class="project-area">
    <div class="container" >
        {{-- style="background: rgba(255, 255, 255, 0.5); border-radius: 25px" --}}
        <div class="row">
            <div class="col-12 text-center">
                {{-- <h2 class="section-title">Metro Manila | Philippines</h2> --}}
                <h3 class="section-sub-title">INSTRUCTIONS FOR ABSTRACT SUBMISSION</h3>
                <div class="row text-center justify-content-center">

                <h3 class="para-head fd mt-2 mb-3" style="text-transform: none !important;"><span style="font-weight: 700 !important;">A. &nbsp;</span> All abstract submissions should be emailed to <span style="text-decoration: underline;  letter-spacing: -3px;"><i>abstracts@aca2025manila.org</i></span>  with the subject heading: “ACA Research Forum 2025 Abstract Submission” and specify if: </h3>
                <p class="hotel-p fd">
                    <ul class="list-p list-group list-group-numbered list-group-flush text-left ml-5" >
                        <li style="font-weight:bold"> <span style="font-weight: 500;">Fellow/Resident/Others</span></li>
                        <li class="mb-2"  style="font-weight:bold"> <span style="font-weight: 500;">Research/Case Report</span></li>
                        <li class="mb-2"  style="font-weight:bold"><span style="font-weight: 500;">Indicate in the email the name of the primary author, all the other authors, the institution/s of affiliation, and the title of the research abstract.</span></li>
                        <li class="mb-2"  style="font-weight:bold"> <span style="font-weight: 500;">The attachments should include: </span>
                            <ul type="i" class="list-p list-group list-group-numbered list-group-flush text-left ml-5" >
                                <li class="mb-2"  style="font-weight:bold"><span style="font-weight: 500;">the Portable Document Format (PDF) copy of an anonymized, computer-written research abstract using 11-point Arial font, double spaced, A4 sized, and with 1” margin on all borders;</span> </li>
                                <li class="mb-2"  style="font-weight:bold"><span style="font-weight: 500;">the IRB/ERC approval if the research involves human participants;</span> </li>
                                <li class="mb-2"  style="font-weight:bold"><span style="font-weight: 500;">Disclosure of Conflict of Interest, if applicable; </span> </li>  
                            </ul>
                        </li>
                    </ul>
                </p>     

                <h3 class="para-head fd mt-4 mb-3" style="text-transform: none !important;"><span style="font-weight: 700 !important;">B. &nbsp;</span>Format for Submission of Abstract</h3>
                <p class="hotel-p fd">
                    <ul class="list-p list-group list-group-numbered list-group-flush text-left ml-5" >
                        <li class="mb-2"  style="font-weight:bold"> <span style="font-weight: 500;">Abstracts should contain:</span>
                            <ul type="i" class="list-p list-group list-group-numbered list-group-flush text-left ml-5" >
                                <li class="mb-2"  ><strong>Title: </strong> <span style="font-weight: 500;"> The title must be brief and accurately reflect the content of the Abstract and must be typed in boldface type and in title case.</span> </li>
                                <li class="mb-2" ><strong>Introduction:</strong> <span style="font-weight: 500;">State the hypothesis or objective of the research in a simple manner; questions should be concrete and testable. Provide brief background and context of the work enough to establish the importance of or need for the research </span></li>
                                <li class="mb-2" ><strong>Methods:</strong> <span style="font-weight: 500;">Describe the study design and the stepwise approach to what was done. Identify the research participants, primary and secondary measurements and outcomes, and the existing instruments or procedures. State how internal and external validity was maximized and bias/error minimized. Comment with approval from the appropriate animal or human Ethical Review Board should be stated if applicable.</span></li>  
                                <ul type="i" class="list-p list-group list-group-numbered list-group-flush text-left ml-5">
                                    <li class="mb-2" > <span style="font-weight: 500;">For case reports, the Description of the Case replaces the Methods section. </span><br></li>
                                </ul>
                                <li><strong>Results:</strong> <span style="font-weight: 500;">Use design-appropriate raw data to characterize the primary and secondary outcomes and include design-appropriate inferential or descriptive statistical indices. Tabulated or graphical representation of the result is encouraged. However, only one table or figure can be included per abstract and must be incorporated in the PDF submitted. The image must have a resolution of at least 300x300 pixels per inch. Ensure that the data is legible. Submission of abstracts without data is not acceptable.</span>
                                    <ul type="i" class="list-p list-group list-group-numbered list-group-flush text-left ml-5">
                                        <li class="mb-2"  class="mb-2" > <span style="font-weight: 500;">For case reports, a short Discussion replaces the Results section.</span><br></li>
                                    </ul>
                                </li>  
                                <li class="mb-2" ><strong>Conclusion:</strong> <span style="font-weight: 500;">State a relevant and succinct summary that addresses the original research question or hypothesis. The results must support it; it should not extrapolate beyond the results of the study, not repeat the results, and not introduce findings not presented in the results section. Avoid interpretations, explanations, and speculations.</span></li>  
                                <li class="mb-2" ><strong>Reference(s):</strong> <span style="font-weight: 500;">Not more than 3-5 references are necessary. Use the Vancouver Citation Style.</span></li>  
                                <li class="mb-2" ><strong>Keywords:</strong> <span style="font-weight: 500;">Include two to three keywords that describe the research question.</span></li>  

                            </ul>
                        </li>
                        <li class="mb-2" style="font-weight:bold"> <span style="font-weight: 500;">The identity of the author/s, their institution, or any identifying data should NOT BE MENTIONED anywhere in the title or body of the abstract.</span></li>
                        <li class="mb-2" style="font-weight:bold"> <span style="font-weight: 500;">The main body of the abstract should not exceed 600 words and must be written in correct English (i.e., professional language and style free of grammatical or technical errors).</span></li>
                        <li class="mb-2" style="font-weight:bold"> <span style="font-weight: 500;">All drugs are to be identified consistently in the abstract by generic names. </span></li>
                        <li class="mb-2" style="font-weight:bold"> <span style="font-weight: 500;">IRB/ERC approval documentation must be attached to the abstract submission.</span></li>
                        <li class="mb-2" style="font-weight:bold"> <span style="font-weight: 500;">Upon successful submission, authors will receive an acknowledgment via email within one week. Lack of acknowledgment will indicate that the abstract was not received. Please get in touch with the PSA Secretariat for confirmation or any questions.</span>
                            <ul type="i" class="list-p list-group list-group-numbered list-group-flush text-left ml-5">
                                <li class="mb-2" > <span style="font-weight: 500;">Abstracts must be received by <strong>July 30, 2025</strong>.</span><br>
                                    <ul type="i" class="list-p list-group list-group-numbered list-group-flush text-left ml-5">
                                        <li class="mb-2"  class="mb-2" > <span style="font-weight: 500;">Abstracts received after this date will not be accepted.</span><br></li>
                                        <li class="mb-2"  class="mb-2" > <span style="font-weight: 500;">Upon notification of acceptance of the abstract, the presenting author must register for the ACA by <strong>September 30, 2025</strong>. </span><br></li>
                                    </ul>
                                </li>
                            </ul>
                        </li>
                        <li class="mb-2" style="font-weight:bold"> <span style="font-weight: 500;">Plagiarism will be checked and will not be tolerated. Submitted works found plagiarized can and will be removed from the list of presenters even after the notification has been sent.</span>
                        <li class="mb-2" style="font-weight:bold"> <span style="font-weight: 500;">Once an abstract has been submitted, no further changes can be made to the results section, including the table or figure, as previously mentioned.</span>
                    </ul>
                </p>
            </div>
        </div>
    </div>
</section>
@endsection