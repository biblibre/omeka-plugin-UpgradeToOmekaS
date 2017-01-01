<?php

/**
 * Since ids are hard coded in the database of Omeka S, they are listed with the
 * label. Nevertheless, the prefix + name should be used when possible.
 * Other classes can be added as long as they exist in Omeka S.
 *
 * @internal The true name must be followed by the prefix.
 */
return array(
    'Dublin Core [dcterms]' => array(
        1 => array('Agent'                      => 'Agent'),
        2 => array('AgentClass'                 => 'Agent Class'),
        3 => array('BibliographicResource'      => 'Bibliographic Resource'),
        4 => array('FileFormat'                 => 'File Format'),
        5 => array('Frequency'                  => 'Frequency'),
        6 => array('Jurisdiction'               => 'Jurisdiction'),
        7 => array('LicenseDocument'            => 'License Document'),
        8 => array('LinguisticSystem'           => 'Linguistic System'),
        9 => array('Location'                   => 'Location'),
        10 => array('LocationPeriodOrJurisdiction' => 'Location, Period, or Jurisdiction'),
        11 => array('MediaType'                 => 'Media Type'),
        12 => array('MediaTypeOrExtent'         => 'Media Type or Extent'),
        13 => array('MethodOfInstruction'       => 'Method of Instruction'),
        14 => array('MethodOfAccrual'           => 'Method of Accrual'),
        15 => array('PeriodOfTime'              => 'Period of Time'),
        16 => array('PhysicalMedium'            => 'Physical Medium'),
        17 => array('PhysicalResource'          => 'Physical Resource'),
        18 => array('Policy'                    => 'Policy'),
        19 => array('ProvenanceStatement'       => 'Provenance Statement'),
        20 => array('RightsStatement'           => 'Rights Statement'),
        21 => array('SizeOrDuration'            => 'Size or Duration'),
        22 => array('Standard'                  => 'Standard'),
    ),
    'Dublin Core Type [dctype]' => array(
        23 => array('Collection'                => 'Collection'),
        24 => array('Dataset'                   => 'Dataset'),
        25 => array('Event'                     => 'Event'),
        26 => array('Image'                     => 'Image'),
        27 => array('InteractiveResource'       => 'Interactive Resource'),
        28 => array('Service'                   => 'Service'),
        29 => array('Software'                  => 'Software'),
        30 => array('Sound'                     => 'Sound'),
        31 => array('Text'                      => 'Text'),
        32 => array('PhysicalObject'            => 'Physical Object'),
        33 => array('StillImage'                => 'Still Image'),
        34 => array('MovingImage'               => 'Moving Image'),
    ),
    'Bibliographic Ontology [bibo]' => array(
        35 => array('AcademicArticle'           => 'Academic Article'),
        36 => array('Article'                   => 'Article'),
        37 => array('AudioDocument'             => 'audio document'),
        38 => array('AudioVisualDocument'       => 'audio-visual document'),
        39 => array('Bill'                      => 'Bill'),
        40 => array('Book'                      => 'Book'),
        41 => array('BookSection'               => 'Book Section'),
        42 => array('Brief'                     => 'Brief'),
        43 => array('Chapter'                   => 'Chapter'),
        44 => array('Code'                      => 'Code'),
        45 => array('CollectedDocument'         => 'Collected Document'),
        46 => array('Collection'                => 'Collection'),
        47 => array('Conference'                => 'Conference'),
        48 => array('CourtReporter'             => 'Court Reporter'),
        49 => array('Document'                  => 'Document'),
        50 => array('DocumentPart'              => 'document part'),
        51 => array('DocumentStatus'            => 'Document Status'),
        52 => array('EditedBook'                => 'Edited Book'),
        53 => array('Email'                     => 'EMail'),
        54 => array('Event'                     => 'Event'),
        55 => array('Excerpt'                   => 'Excerpt'),
        56 => array('Film'                      => 'Film'),
        57 => array('Hearing'                   => 'Hearing'),
        58 => array('Image'                     => 'Image'),
        59 => array('Interview'                 => 'Interview'),
        60 => array('Issue'                     => 'Issue'),
        61 => array('Journal'                   => 'Journal'),
        62 => array('LegalCaseDocument'         => 'Legal Case Document'),
        63 => array('LegalDecision'             => 'Decision'),
        64 => array('LegalDocument'             => 'Legal Document'),
        65 => array('Legislation'               => 'Legislation'),
        66 => array('Letter'                    => 'Letter'),
        67 => array('Magazine'                  => 'Magazine'),
        68 => array('Manual'                    => 'Manual'),
        69 => array('Manuscript'                => 'Manuscript'),
        70 => array('Map'                       => 'Map'),
        71 => array('MultiVolumeBook'           => 'Multivolume Book'),
        72 => array('Newspaper'                 => 'Newspaper'),
        73 => array('Note'                      => 'Note'),
        74 => array('Patent'                    => 'Patent'),
        75 => array('Performance'               => 'Performance'),
        76 => array('Periodical'                => 'Periodical'),
        77 => array('PersonalCommunication'     => 'Personal Communication'),
        78 => array('PersonalCommunicationDocument' => 'Personal Communication Document'),
        79 => array('Proceedings'               => 'Proceedings'),
        80 => array('Quote'                     => 'Quote'),
        81 => array('ReferenceSource'           => 'Reference Source'),
        82 => array('Report'                    => 'Report'),
        83 => array('Series'                    => 'Series'),
        84 => array('Slide'                     => 'Slide'),
        85 => array('Slideshow'                 => 'Slideshow'),
        86 => array('Standard'                  => 'Standard'),
        87 => array('Statute'                   => 'Statute'),
        88 => array('Thesis'                    => 'Thesis'),
        89 => array('ThesisDegree'              => 'Thesis degree'),
        90 => array('Webpage'                   => 'Webpage'),
        91 => array('Website'                   => 'Website'),
        92 => array('Workshop'                  => 'Workshop'),
    ),
    'Friend of a Friend [foaf]' => array(
        93 => array('LabelProperty'             => 'Label Property'),
        94 => array('Person'                    => 'Person'),
        95 => array('Agent'                     => 'Agent'),
        96 => array('Document'                  => 'Document'),
        97 => array('Organization'              => 'Organization'),
        98 => array('Group'                     => 'Group'),
        99 => array('Project'                   => 'Project'),
        100 => array('Image'                    => 'Image'),
        101 => array('PersonalProfileDocument'  => 'PersonalProfileDocument'),
        102 => array('OnlineAccount'            => 'Online Account'),
        103 => array('OnlineGamingAccount'      => 'Online Gaming Account'),
        104 => array('OnlineEcommerceAccount'   => 'Online E-commerce Account'),
        105 => array('OnlineChatAccount'        => 'Online Chat Account'),
    )
);
