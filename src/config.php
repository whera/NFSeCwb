<?php

return [
    'production' => [
        'wsdl' => 'https://isscuritiba.curitiba.pr.gov.br/Iss.NfseWebService/nfsews.asmx?WSDL',
        'asmx' => 'https://isscuritiba.curitiba.pr.gov.br/Iss.NfseWebService/nfsews.asmx',
        'url' => 'https://isscuritiba.curitiba.pr.gov.br/portalNfse/Default.aspx?doc=%s&num=%s&cod=%s',
        'urlImage' => 'http://isscuritiba.curitiba.pr.gov.br/portalNfse/ImagemNfse.axd?doc=%s&num=%s&cod=%s'
    ],
    'sandbox' => [
        'wsdl' => 'https://pilotoisscuritiba.curitiba.pr.gov.br/nfse_ws/NfseWs.asmx?WSDL',
        'asmx' => 'https://pilotoisscuritiba.curitiba.pr.gov.br/nfse_ws/NfseWs.asmx',
        'url' => 'http://pilotoisscuritiba.curitiba.pr.gov.br/portal/Default.aspx?doc=%s&num=%s&cod=%s',
        'urlImage' => 'http://pilotoisscuritiba.curitiba.pr.gov.br/portal/ImagemNfse.axd?doc=%s&num=%s&cod=%s'
    ]
];