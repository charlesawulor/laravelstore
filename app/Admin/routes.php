<?php

use Illuminate\Routing\Router;

Admin::routes();

Route::group([
    'prefix'        => config('admin.route.prefix'),
    'namespace'     => config('admin.route.namespace'),
    'middleware'    => config('admin.route.middleware'),
    'as'            => config('admin.route.prefix') . '.',
], function (Router $router) {

    $router->get('/', 'HomeController@index')->name('home');

    $router->resource('users', UserController::class);
     
    $router->resource('logoicris', logoicriController::class);
    $router->resource('admission', AdmissionController::class);

    $router->resource('research', ResearchController::class);

    $router->resource('publications', PublicationController::class);

    $router->resource('legacies', LegacyController::class);

    $router->resource('whyicris', whyicriController::class);

    $router->resource('campuses', CampusController::class);

    $router->resource('whyicricontents', WhyicricontentController::class);

    $router->resource('researchcontents', ResearchcontentController::class);

    $router->resource('applications', ApplicationController::class); 

    $router->resource('admissioncourses', AdmissioncourseController::class);

    $router->resource('researchpics', ResearchpicController::class);

    $router->resource('events', EventController::class);

    $router->resource('recruiters', RecruiterController::class); 

    $router->resource('topcourses', TopcourseController::class);

    $router->resource('addresses', AddressController::class);

    $router->resource('subscribers', SubscriberController::class);
    
    $router->resource('studenttestimonials', StudenttestimonialController::class);

    $router->resource('usefullinks', UsefullinksController::class);

    $router->resource('lifeaticris', LifeaticrisController::class);

    $router->resource('icrinetworks', IcrinetworkController::class);

    $router->resource('awards', AwardController::class);

    $router->resource('anantapurcampuses', AnantapurcampusesController::class);

    $router->resource('bhopalcampuses', BhopalcampusesController::class);

    $router->resource('dehraduncampuses', DehraduncampusesController::class);

    $router->resource('jaipurcampuses', JaipurcampusController::class);

    $router->resource('mumbaicampuses', MumbaicampusController::class);

    $router->resource('mangalurucampuses', MangalurucampusController::class);

    $router->resource('punecampuses', PunecampusController::class);

    $router->resource('delhicampuses', DelhicampusController::class);

    $router->resource('socialconnectfacebooks', SocialconnectfacebookController::class);

    $router->resource('socialconnectinstagrams', SocialconnectinstagramController::class);

    $router->resource('socialconnecttwitters', SocialconnecttwitterController::class);

    $router->resource('parenttestimonials', ParenttestimonialController::class);

    $router->resource('industryspeaktestimonials', IndustryspeaktestimonialController::class);

    $router->resource('hiringpartners', HiringpartnerController::class);

    $router->resource('clinicalresearches', clinicalresearchController::class);

    $router->resource('whyclinicalresearches', whyclinicalresearchController::class);

    $router->resource('deliverablesclinicalresearches', deliverablesclinicalresearchController::class);

    $router->resource('whyicriclinicalresearches', whyicriclinicalresearchController::class);

    $router->resource('msceligibilityclinicalresearches', msceligibilityclinicalresearchController::class);
  
    $router->resource('msccurriculumclinicalresearches', msccurriculumclinicalresearchController::class);
     
    $router->resource('msccareerprospectclinical', msccareerprospectclinicalresearchController::class);

    $router->resource('msccampusclinicalresearches', msccampusclinicalresearchController::class);

    $router->resource('bsceligibilityclinicalresearches', bsceligibilityclinicalresearchController::class);

    $router->resource('bsccurriculumclinicalresearches', bsccurriculumclinicalresearchController::class);

    $router->resource('bsccareerprospectclinical', bsccareerprospectclinicalresearchController::class);

    $router->resource('bsccampusclinicalresearches', bsccampusclinicalresearchController::class);

    $router->resource('pgdeligibilityclinicalresearches', pgdeligibilityclinicalresearchController::class);

    $router->resource('pgdcurriculumclinicalresearches', pgdcurriculumclinicalresearchController::class);

    $router->resource('pgdcareerprospectclinical', pgdcareerprospectclinicalresearchController::class);

    $router->resource('pgdcampusclinicalresearches', pgdcampusclinicalresearchController::class);

    $router->resource('phdeligibilityclinicalresearches', phdeligibilityclinicalresearchController::class);

    $router->resource('phdcurriculumclinicalresearches', phdcurriculumclinicalresearchController::class);

    $router->resource('phdcareerprospectclinical', phdcareerprospectclinicalresearchController::class);

    $router->resource('phdcampusclinicalresearches', phdcampusclinicalresearchController::class);

    $router->resource('placementclinicalresearches', placementclinicalresearchController::class);

    $router->resource('aviationmanagements', aviationmanagementController::class);

    $router->resource('whyaviationmanagements', whyaviationmanagementController::class);

    $router->resource('deliverablesaviationmanagements', deliverablesaviationmanagementController::class);

    $router->resource('whyicriaviationmanagements', whyicriaviationmanagementController::class);

    $router->resource('msceligibilityaviationmanagements', msceligibilityaviationmanagementController::class);

    $router->resource('msccurriculumaviationmanagements', msccurriculumaviationmanagementController::class);

    $router->resource('msccareerprospectaviation', msccareerprospectaviationmanagementaviationmanagementController::class); 

    $router->resource('msccampusaviationmanagements', msccampusaviationmanagementController::class);

    $router->resource('bsceligibilityaviationmanagements', bsceligibilityaviationmanagementController::class);

    $router->resource('bsccurriculumaviationmanagements', bsccurriculumaviationmanagementController::class);

    $router->resource('bsccareerprospectaviation', bsccareerprospectaviationmanagementController::class);
    $router->resource('bsccampusaviationmanagements', bsccampusaviationmanagementController::class);

    $router->resource('pgdeligibilityaviationmanagements', pgdeligibilityaviationmanagementController::class);

    $router->resource('pgdcurriculumaviationmanagements', pgdcurriculumaviationmanagementController::class);

    $router->resource('pgdcareerprospectaviation', phdcareerprospectaviationmanagementController::class);

    $router->resource('pgdcampusaviationmanagements', pgdcampusaviationmanagementController::class);

    $router->resource('phdeligibilityaviationmanagements', phdeligibilityaviationmanagementController::class);

    $router->resource('phdcurriculumaviationmanagements', phdcurriculumaviationmanagementController::class);

    $router->resource('phdcareerprospectaviation', phdcareerprospectaviationmanagementController::class);

    $router->resource('phdcampusaviationmanagements', phdcampusaviationmanagementController::class);

    $router->resource('placementaviationmanagements', placementaviationmanagementController::class);

    $router->resource('logisticsmanagements', logisticsmanagementController::class);

    $router->resource('whylogisticsmanagements', whylogisticsmanagementController::class);

    $router->resource('deliverableslogisticsmanagements', deliverableslogisticsmanagementController::class);

    $router->resource('whyicrilogisticsmanagements', whyicrilogisticsmanagementController::class);

    $router->resource('msceligibilitylogistics', msceligibilitylogisticsmanagementController::class);

    $router->resource('msccurriculumlogisticsmanagements', msccurriculumlogisticsmanagementController::class);

    $router->resource('msccareerprospectlogistics', msccareerprospectlogisticsmanagementController::class);

    $router->resource('msccampuslogisticsmanagements', msccampuslogisticsmanagementController::class);

    $router->resource('bsceligibilitylogistics', bsceligibilitylogisticsmanagementController::class);

    $router->resource('bsccurriculumlogisticsmanagements', bsccurriculumlogisticsmanagementController::class);

    $router->resource('bsccareerprospectlogistics', bsccareerprospectlogisticsmanagementController::class);

    $router->resource('bsccampuslogisticsmanagements', bsccampuslogisticsmanagementController::class);

    $router->resource('pgdeligibilitylogistics', pgdeligibilitylogisticsmanagementController::class);

    $router->resource('pgdcurriculumlogisticsmanagements', pgdcurriculumlogisticsmanagementController::class);

    $router->resource('pgdcareerprospectlogistics', pgdcareerprospectlogisticsmanagementController::class);

    $router->resource('pgdcampuslogisticsmanagements', pgdcampuslogisticsmanagementController::class);

    $router->resource('phdeligibilitylogistics', phdeligibilitylogisticsmanagementController::class);

    $router->resource('phdcurriculumlogisticsmanagements', phdcurriculumlogisticsmanagementController::class);

    $router->resource('phdcareerprospectlogistics', phdcareerprospectlogisticsmanagementController::class);

    $router->resource('phdcampuslogisticsmanagements', phdcampuslogisticsmanagementController::class);

    $router->resource('placementlogisticsmanagements', placementlogisticsmanagementController::class);





    $router->resource('healthcarehospitalmanagements', healthcarehospitalmanagementController::class);
    $router->resource('whyhealthcarehospitalmanagements', whyhealthcarehospitalmanagementController::class);

    $router->resource('deliverableshealthcare', deliverableshealthcarehospitalmanagementController::class);

    $router->resource('whyicrihealthcare', whyicrihealthcarehospitalmanagementController::class);

    $router->resource('msceligibilityhealthcare', msceligibilityhealthcarehospitalmanagementController::class);

    $router->resource('msccurriculumhealthcare', msccurriculumhealthcarehospitalmanagementController::class);

    $router->resource('msccareerprospecthealthcare', msccareerprospecthealthcarehospitalmanagementController::class);

    $router->resource('msccampushealthcare', msccampushealthcarehospitalmanagementController::class);

    $router->resource('bsceligibilityhealthcare', bsceligibilityhealthcarehospitalmanagementController::class); 

    $router->resource('bsccurriculumhealthcare', bsccurriculumhealthcarehospitalmanagementController::class);

    $router->resource('bsccareerprospecthealthcare', bsccareerprospecthealthcarehospitalmanagementController::class); 

    $router->resource('bsccampushealthcare', bsccampushealthcarehospitalmanagementController::class);

    $router->resource('pgdeligibilityhealthcare', pgdeligibilityhealthcarehospitalmanagementController::class); 

    $router->resource('pgdcurriculumhealthcare', pgdcurriculumhealthcarehospitalmanagementController::class);

    $router->resource('pgdcareerprospecthealthcare', pgdcareerprospecthealthcarehospitalmanagementController::class);

    $router->resource('pgdcampushealthcare', pgdcampushealthcarehospitalmanagementController::class);

    $router->resource('phdeligibilityhealthcare', phdeligibilityhealthcarehospitalmanagementController::class); 

    $router->resource('phdcurriculumhealthcare', phdcurriculumhealthcarehospitalmanagementController::class);

    $router->resource('phdcareerprospecthealthcare', phdcareerprospecthealthcarehospitalmanagementController::class);
    
    $router->resource('phdcampushealthcare', phdcampushealthcarehospitalmanagementController::class);

    $router->resource('placementhealthcare', placementhealthcarehospitalmanagementController::class);

    $router->resource('pharmamktmgts', pharmamktmgtController::class);
    $router->resource('whypharmamktmgts', whypharmamktmgtController::class);
    $router->resource('deliverablespharmamktmgts', deliverablespharmamktmgtController::class);
    $router->resource('whyicripharmamktmgts', whyicripharmamktmgtController::class);
    $router->resource('msceligibilitypharmamktmgts', msceligibilitypharmamktmgtController::class);
    $router->resource('msccurriculumpharmamktmgts', msccurriculumpharmamktmgtController::class);
    $router->resource('msccareerprospectpharmamktmgts', msccareerprospectpharmamktmgtController::class);
    $router->resource('msccampuspharmamktmgts', msccampuspharmamktmgtController::class);
    $router->resource('bsceligibilitypharmamktmgts', bsceligibilitypharmamktmgtController::class);
    $router->resource('bsccurriculumpharmamktmgts', bsccurriculumpharmamktmgtController::class);
    $router->resource('bsccareerprospectpharmamktmgts', bsccareerprospectpharmamktmgtController::class);
    $router->resource('bsccampuspharmamktmgts', bsccampuspharmamktmgtController::class);
    $router->resource('pgdeligibilitypharmamktmgts', pgdeligibilitypharmamktmgtController::class);
    $router->resource('pgdcurriculumpharmamktmgts', pgdcurriculumpharmamktmgtController::class);
    $router->resource('pgdcareerprospectpharmamktmgts', pgdcareerprospectpharmamktmgtController::class);
    $router->resource('pgdcampuspharmamktmgts', pgdcampuspharmamktmgtController::class);
    $router->resource('phdeligibilitypharmamktmgts', phdeligibilitypharmamktmgtController::class);
    $router->resource('phdcurriculumpharmamktmgts', phdcurriculumpharmamktmgtController::class);
    $router->resource('phdcareerprospectpharmamktmgts', phdcareerprospectpharmamktmgtController::class);
    $router->resource('phdcampuspharmamktmgts', phdcampuspharmamktmgtController::class);
    $router->resource('placementpharmamktmgts', placementpharmamktmgtController::class);
    



    $router->resource('mktautomgts', mktautomgtController::class);
    $router->resource('whymktautomgts', whymktautomgtController::class);
    $router->resource('deliverablesmktautomgts', deliverablesmktautomgtController::class);
    $router->resource('whyicrimktautomgts', whyicrimktautomgtController::class);
    $router->resource('msceligibilitymktautomgts', msceligibilitymktautomgtController::class);
    $router->resource('msccurriculummktautomgts', msccurriculummktautomgtController::class);
    $router->resource('msccareerprospectmktautomgts', msccareerprospectmktautomgtController::class);
    $router->resource('msccampusmktautomgts', msccampusmktautomgtController::class);
    $router->resource('bsceligibilitymktautomgts', bsceligibilitymktautomgtController::class);
    $router->resource('bsccurriculummktautomgts', bsccurriculummktautomgtController::class);
    $router->resource('bsccareerprospectmktautomgts', bsccareerprospectmktautomgtController::class);
    $router->resource('bsccampusmktautomgts', bsccampusmktautomgtController::class);
    $router->resource('pgdeligibilitymktautomgts', pgdeligibilitymktautomgtController::class);
    $router->resource('pgdcurriculummktautomgts', pgdcurriculummktautomgtController::class);
    $router->resource('pgdcareerprospectmktautomgts', pgdcareerprospectmktautomgtController::class);
    $router->resource('pgdcampusmktautomgts', pgdcampusmktautomgtController::class);
    $router->resource('phdeligibilitymktautomgts', phdeligibilitymktautomgtController::class);
    $router->resource('phdcurriculummktautomgts', phdcurriculummktautomgtController::class);
    $router->resource('phdcareerprospectmktautomgts', phdcareerprospectmktautomgtController::class);
    $router->resource('phdcampusmktautomgts', phdcampusmktautomgtController::class);
    $router->resource('placementmktautomgts', placementmktautomgtController::class);
    
    $router->resource('managementstudies', managementstudyController::class);
    $router->resource('whymanagementstudies', whymanagementstudyController::class);
    $router->resource('deliverablesmanagementstudies', deliverablesmanagementstudyController::class);
    $router->resource('whyicrimanagementstudies', whyicrimanagementstudyController::class);
    $router->resource('msceligibilitymanagementstudies', msceligibilitymanagementstudyController::class);
    $router->resource('msccurriculummanagementstudies', msccurriculummanagementstudyController::class);
    $router->resource('msccareerprospectmanagementstudies', msccareerprospectmanagementstudyController::class);
    $router->resource('msccampusmanagementstudies', msccampusmanagementstudyController::class);
    $router->resource('bsceligibilitymanagementstudies', bsceligibilitymanagementstudyController::class);
    $router->resource('bsccurriculummanagementstudies', bsccurriculummanagementstudyController::class);
    $router->resource('bsccareerprospectmanagementstudies', bsccareerprospectmanagementstudyController::class);
    $router->resource('bsccampusmanagementstudies', bsccampusmanagementstudyController::class);
    $router->resource('pgdeligibilitymanagementstudies', pgdeligibilitymanagementstudyController::class);
    $router->resource('pgdcurriculummanagementstudies', pgdcurriculummanagementstudyController::class);
    $router->resource('pgdcareerprospectmanagementstudies', pgdcareerprospectmanagementstudyController::class);
    $router->resource('pgdcampusmanagementstudies', pgdcampusmanagementstudyController::class);
    $router->resource('phdeligibilitymanagementstudies', phdeligibilitymanagementstudyController::class);
    $router->resource('phdcurriculummanagementstudies', phdcurriculummanagementstudyController::class);
    $router->resource('phdcareerprospectmanagementstudies', phdcareerprospectmanagementstudyController::class);
    $router->resource('phdcampusmanagementstudies', phdcampusmanagementstudyController::class);
    $router->resource('placementmanagementstudies', placementmanagementstudyController::class);

    $router->resource('bankwltmgts', bankwltmgtController::class);
    $router->resource('whybankwltmgts', whybankwltmgtController::class);
    $router->resource('deliverablesbankwltmgts', deliverablesbankwltmgtController::class);
    $router->resource('whyicribankwltmgts', whyicribankwltmgtController::class);
    $router->resource('msceligibilitybankwltmgts', msceligibilitybankwltmgtController::class);
    $router->resource('msccurriculumbankwltmgts', msccurriculumbankwltmgtController::class);
    $router->resource('msccareerprospectbankwltmgts', msccareerprospectbankwltmgtController::class);
    $router->resource('msccampusbankwltmgts', msccampusbankwltmgtController::class);
    $router->resource('bsceligibilitybankwltmgts', bsceligibilitybankwltmgtController::class);
    $router->resource('bsccurriculumbankwltmgts', bsccurriculumbankwltmgtController::class);
    $router->resource('bsccareerprospectbankwltmgts', bsccareerprospectbankwltmgtController::class);
    $router->resource('bsccampusbankwltmgts', bsccampusbankwltmgtController::class);
    $router->resource('pgdeligibilitybankwltmgts', pgdeligibilitybankwltmgtController::class);
    $router->resource('pgdcurriculumbankwltmgts', pgdcurriculumbankwltmgtController::class);
    $router->resource('pgdcareerprospectbankwltmgts', pgdcareerprospectbankwltmgtController::class);
    $router->resource('pgdcampusbankwltmgts', pgdcampusbankwltmgtController::class);
    $router->resource('phdeligibilitybankwltmgts', phdeligibilitybankwltmgtController::class);
    $router->resource('phdcurriculumbankwltmgts', phdcurriculumbankwltmgtController::class);
    $router->resource('phdcareerprospectbankwltmgts', phdcareerprospectbankwltmgtController::class);
    $router->resource('phdcampusbankwltmgts', phdcampusbankwltmgtController::class);
    $router->resource('placementbankwltmgts', placementbankwltmgtController::class);

    $router->resource('clinicalpsies', clinicalpsyController::class);
    $router->resource('whyclinicalpsies', whyclinicalpsyController::class);
    $router->resource('deliverablesclinicalpsies', deliverablesclinicalpsyController::class);
    $router->resource('whyicriclinicalpsies', whyicriclinicalpsyController::class);
    $router->resource('msceligibilityclinicalpsies', msceligibilityclinicalpsyController::class);
    $router->resource('msccurriculumclinicalpsies', msccurriculumclinicalpsyController::class);
    $router->resource('msccareerprospectclinicalpsies', msccareerprospectclinicalpsyController::class);
    $router->resource('msccampusclinicalpsies', msccampusclinicalpsyController::class);
    $router->resource('bsceligibilityclinicalpsies', bsceligibilityclinicalpsyController::class);
    $router->resource('bsccurriculumclinicalpsies', bsccurriculumclinicalpsyController::class);
    $router->resource('bsccareerprospectclinicalpsies', bsccareerprospectclinicalpsyController::class);
    $router->resource('bsccampusclinicalpsies', bsccampusclinicalpsyController::class);
    $router->resource('pgdeligibilityclinicalpsies', pgdeligibilityclinicalpsyController::class);
    $router->resource('pgdcurriculumclinicalpsies', pgdcurriculumclinicalpsyController::class);
    $router->resource('pgdcareerprospectclinicalpsies', pgdcareerprospectclinicalpsyController::class);
    $router->resource('pgdcampusclinicalpsies', pgdcampusclinicalpsyController::class);
    $router->resource('phdeligibilityclinicalpsies', phdeligibilityclinicalpsyController::class);
    $router->resource('phdcurriculumclinicalpsies', phdcurriculumclinicalpsyController::class);
    $router->resource('phdcareerprospectclinicalpsies', phdcareerprospectclinicalpsyController::class);
    $router->resource('phdcampusclinicalpsies', phdcampusclinicalpsyController::class);
    $router->resource('placementclinicalpsies', placementclinicalpsyController::class);



    $router->resource('publichlths', publichlthController::class);
    $router->resource('whypublichlths', whypublichlthController::class);
    $router->resource('deliverablespublichlths', deliverablespublichlthController::class);
    $router->resource('whyicripublichlths', whyicripublichlthController::class);
    $router->resource('msceligibilitypublichlths', msceligibilitypublichlthController::class);
    $router->resource('msccurriculumpublichlths', msccurriculumpublichlthController::class);
    $router->resource('msccareerprospectpublichlths', msccareerprospectpublichlthController::class);
    $router->resource('msccampuspublichlths', msccampuspublichlthController::class);
    $router->resource('bsceligibilitypublichlths', bsceligibilitypublichlthController::class);
    $router->resource('bsccurriculumpublichlths', bsccurriculumpublichlthController::class);
    $router->resource('bsccareerprospectpublichlths', bsccareerprospectpublichlthController::class);
    $router->resource('bsccampuspublichlths', bsccampuspublichlthController::class);
    $router->resource('pgdeligibilitypublichlths', pgdeligibilitypublichlthController::class);
    $router->resource('pgdcurriculumpublichlths', pgdcurriculumpublichlthController::class);
    $router->resource('pgdcareerprospectpublichlths', pgdcareerprospectpublichlthController::class);
    $router->resource('pgdcampuspublichlths', pgdcampuspublichlthController::class);
    $router->resource('phdeligibilitypublichlths', phdeligibilitypublichlthController::class);
    $router->resource('phdcurriculumpublichlths', phdcurriculumpublichlthController::class);
    $router->resource('phdcareerprospectpublichlths', phdcareerprospectpublichlthController::class);
    $router->resource('phdcampuspublichlths', phdcampuspublichlthController::class);
    $router->resource('placementpublichlths', placementpublichlthController::class);


    $router->resource('architectures', architectureController::class);
    $router->resource('whyarchitectures', whyarchitectureController::class);
    $router->resource('deliverablesarchitectures', deliverablesarchitectureController::class);
    $router->resource('whyicriarchitectures', whyicriarchitectureController::class);
    $router->resource('msceligibilityarchitectures', msceligibilityarchitectureController::class);
    $router->resource('msccurriculumarchitectures', msccurriculumarchitectureController::class);
    $router->resource('msccareerprospectarchitectures', msccareerprospectarchitectureController::class);
    $router->resource('msccampusarchitectures', msccampusarchitectureController::class);
    $router->resource('bsceligibilityarchitectures', bsceligibilityarchitectureController::class);
    $router->resource('bsccurriculumarchitectures', bsccurriculumarchitectureController::class);
    $router->resource('bsccareerprospectarchitectures', bsccareerprospectarchitectureController::class);
    $router->resource('bsccampusarchitectures', bsccampusarchitectureController::class);
    $router->resource('pgdeligibilityarchitectures', pgdeligibilityarchitectureController::class);
    $router->resource('pgdcurriculumarchitectures', pgdcurriculumarchitectureController::class);
    $router->resource('pgdcareerprospectarchitectures', pgdcareerprospectarchitectureController::class);
    $router->resource('pgdcampusarchitectures', pgdcampusarchitectureController::class);
    $router->resource('phdeligibilityarchitectures', phdeligibilityarchitectureController::class);
    $router->resource('phdcurriculumarchitectures', phdcurriculumarchitectureController::class);
    $router->resource('phdcareerprospectarchitectures', phdcareerprospectarchitectureController::class);
    $router->resource('phdcampusarchitectures', phdcampusarchitectureController::class);
    $router->resource('placementarchitectures', placementarchitectureController::class);
    $router->resource('aimachinelearns', aimachinelearnController::class);
    $router->resource('whyaimachinelearns', whyaimachinelearnController::class);
    $router->resource('deliverablesaimachinelearns', deliverablesaimachinelearnController::class);
    $router->resource('whyicriaimachinelearns', whyicriaimachinelearnController::class);
    $router->resource('msceligibilityaimachinelearns', msceligibilityaimachinelearnController::class);
    $router->resource('msccurriculumaimachinelearns', msccurriculumaimachinelearnController::class);
    $router->resource('msccareerprospectaimachinelearns', msccareerprospectaimachinelearnController::class);
    $router->resource('msccampusaimachinelearns', msccampusaimachinelearnController::class);
    $router->resource('bsceligibilityaimachinelearns', bsceligibilityaimachinelearnController::class);
    $router->resource('bsccurriculumaimachinelearns', bsccurriculumaimachinelearnController::class);
    $router->resource('bsccareerprospectaimachinelearns', bsccareerprospectaimachinelearnController::class);
    $router->resource('bsccampusaimachinelearns', bsccampusaimachinelearnController::class);
    $router->resource('pgdeligibilityaimachinelearns', pgdeligibilityaimachinelearnController::class);
    $router->resource('pgdcurriculumaimachinelearns', pgdcurriculumaimachinelearnController::class);
    
    















    
    




});
