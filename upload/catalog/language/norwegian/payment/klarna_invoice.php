<?php
// Text
$_['text_title']				= 'Klarna faktura - betale innen 14 dager';
$_['text_terms_fee']			= '<span id="klarna_invoice_toc"></span> (+%s)<script type="text/javascript">var terms = new Klarna.Terms.Invoice({el: \'klarna_invoice_toc\', eid: \'%s\', country: \'%s\', charge: %s});</script>';
$_['text_terms_no_fee']			= '<span id="klarna_invoice_toc"></span><script type="text/javascript">var terms = new Klarna.Terms.Invoice({el: \'klarna_invoice_toc\', eid: \'%s\', country: \'%s\'});</script>';
$_['text_additional']			= 'Klarna behøver noe ekstra informasjon før de kan behandle din bestilling.';
$_['text_male']					= 'Mann';
$_['text_female']				= 'Kvinne';
$_['text_year']					= 'År';
$_['text_month']				= 'Måned';
$_['text_day']					= 'Dag';
$_['text_comment']				= 'Klarna\'s Invoice ID: %s. ' . "\n" . '%s/%s: %.4f';

// Entry
$_['entry_gender']				= 'Kjønn';
$_['entry_pno']					= 'Personnummer';
$_['entry_dob']					= 'Fødselsdato';
$_['entry_phone_no']			= 'Telefon';
$_['entry_street']				= 'Adresse';
$_['entry_house_no']			= 'Husnummer';
$_['entry_house_ext']			= 'Husbokstav';
$_['entry_company']				= 'Org.nr.';

// Help
$_['help_pno']					= 'Fyll inn ditt personnummer her.';
$_['help_phone_no']				= 'Fyll inn ditt telefonnummeret.';
$_['help_street']				= 'Merk at levering kan bare skje til den registrerte adressen ved betaling med Klarna.';
$_['help_house_no']				= 'Fyll inn ditt husnummer.';
$_['help_house_ext']			= 'Fyll inn din husbokstav her. Eksempel A, B, C, osv.';
$_['help_company']				= 'Fyll inn firmaets organisasjonsnummer.';

// Error
$_['error_deu_terms']			= 'Du må bekrefte at du samtykker til Klarnas personvernerklæring';
$_['error_address_match']		= 'Betalings- og leveringsadresse må være lik dersom du ønsker å betale via Klarna.';
$_['error_network']				= 'En feil oppstod ved kommunikasjon mot Klarna. Forsøk gjerne igjen litt senere.';