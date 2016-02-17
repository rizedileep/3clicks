<?php
/**
 * Template Name: Page: Certificate CCHAPA
 *
 * For the full license information, please view the Licensing folder
 * that was distributed with this source code.
 *
 * @package G1_Framework
 * @subpackage G1_Theme03
 * @since G1_Theme03 1.0.0
 */

// Prevent direct script access
if ( !defined('ABSPATH') )
    die ( 'No direct script access allowed' );
?>
<?php
    // Add proper body classes
    add_filter( 'body_class', array(G1_Theme(), 'secondary_none_body_class') );
?>
<?php
    get_header();
    get_template_part( 'template-parts/g1_primary_page' );    
   
?>
    <script>
    jQuery.noConflict();
    jQuery(function(){
      var $ = jQuery;

     
      $('#map-chamilo').vectorMap({
        map: 'world_mill',
        panOnDrag: false,
        hoverOpacity: 0.85,
	hoverColor: false,
        backgroundColor: '#ffffff',
        normalizeFunction: 'polynomial',
        focusOn: {
          x: 0.5,
          y: 0.5,
          scale: 1,
          animate: true
        },
        series: {
          regions: [{
            scale: ['#EDE0B1', '#F49404'],
            normalizeFunction: 'polynomial',
            values: {
              "AF": <?php echo getCountCountry('Afganistan')?>,
              "AL": <?php echo getCountCountry('Albania')?>,
              "DZ": <?php echo getCountCountry('Algeria')?>,
              "AO": <?php echo getCountCountry('Angola')?>,
              "AR": <?php echo getCountCountry('Argentina')?>,
              "AM": <?php echo getCountCountry('Armenia')?>,
              "AU": <?php echo getCountCountry('Australia')?>,
              "AT": <?php echo getCountCountry('Austria')?>,
              "AZ": <?php echo getCountCountry('Azerbaijan')?>,
              "BS": <?php echo getCountCountry('Bahamas')?>,
              "BD": <?php echo getCountCountry('Bangladesh')?>,
              "BY": <?php echo getCountCountry('Belarusia')?>,
              "BE": <?php echo getCountCountry('Belgica')?>,
              "BZ": <?php echo getCountCountry('Belice')?>,
              "BJ": <?php echo getCountCountry('Benin')?>,
              "BT": <?php echo getCountCountry('Butan')?>,
              "BO": <?php echo getCountCountry('Bolivia')?>,
              "BA": <?php echo getCountCountry('Bosnia')?>,
              "BW": <?php echo getCountCountry('Botswana'  )?>,
              "BR": <?php echo getCountCountry('Brasil'  )?>,
              "BN": <?php echo getCountCountry('Brunei'  )?>,
              "BG": <?php echo getCountCountry('Bulgaria'  )?>,
              "BF": <?php echo getCountCountry('Burkina Faso'  )?>,
              "BI": <?php echo getCountCountry('Burundi'  )?>,
              "KH": <?php echo getCountCountry('Camboya'  )?>,
              "CM": <?php echo getCountCountry('Camerun'  )?>,
              "CA": <?php echo getCountCountry('Canada'  )?>,
              "CF": <?php echo getCountCountry('Republica Centroafricana' )?>,
              "TD": <?php echo getCountCountry('Chad' )?>,
              "CL": <?php echo getCountCountry('Chile' )?>,
              "CN": <?php echo getCountCountry('China' )?>,
              "CO": <?php echo getCountCountry('Colombia' )?>,
              "CD": <?php echo getCountCountry('Republica Democratica del Congo' )?>,
              "CG": <?php echo getCountCountry('Congo' )?>,
              "CR": <?php echo getCountCountry('Costa Rica' )?>,
              "HR": <?php echo getCountCountry('Croasia' )?>,
              "CY": <?php echo getCountCountry('Cyprus' )?>,
              "CZ": <?php echo getCountCountry('Republica Checa' )?>,
              "DK": <?php echo getCountCountry('Dinamarca' )?>,
              "DJ": <?php echo getCountCountry('Djibouti' )?>,
              "DE": <?php echo getCountCountry('Alemania')?>,
              "DO": <?php echo getCountCountry('Republica Dominicana' )?>,
              "EC": <?php echo getCountCountry('Ecuador' )?>,
              "EG": <?php echo getCountCountry('Egipto' )?>,
              "SV": <?php echo getCountCountry('El Salvador' )?>,
              "GQ": <?php echo getCountCountry('Guinea Equatorial' )?>,
              "ER": <?php echo getCountCountry('Eritrea' )?>,
              "EE": <?php echo getCountCountry('Estonia' )?>,
              "ET": <?php echo getCountCountry('Etiopia' )?>,
              "FJ": <?php echo getCountCountry('Fiji' )?>,
              "FI": <?php echo getCountCountry('Finlandia' )?>,
              "FR": <?php echo getCountCountry('Francia' )?>,
              "GA": <?php echo getCountCountry('Gabon' )?>,
              "GM": <?php echo getCountCountry('Gambia' )?>,
              "GE": <?php echo getCountCountry('Georgia' )?>,
              "GH": <?php echo getCountCountry('Ghana' )?>,
              "GR": <?php echo getCountCountry('Grecia' )?>,
              "GT": <?php echo getCountCountry('Guatemala' )?>,
              "GN": <?php echo getCountCountry('Guinea' )?>,
              "GY": <?php echo getCountCountry('Guinea-Bissau' )?>,
              "HT": <?php echo getCountCountry('Haiti' )?>,
              "HN": <?php echo getCountCountry('Honduras' )?>,
              "HU": <?php echo getCountCountry('Lituania' )?>,
              "IS": <?php echo getCountCountry('Islandia' )?>,
              "IN": <?php echo getCountCountry('India' )?>,
              "ID": <?php echo getCountCountry('Indonesia' )?>,
              "IR": <?php echo getCountCountry('Iran' )?>,
              "IQ": <?php echo getCountCountry('Iraq' )?>,
              "IE": <?php echo getCountCountry('Irlanda' )?>,
              "IL": <?php echo getCountCountry('Israel' )?>,
              "IT": <?php echo getCountCountry('Italia' )?>,
              "JM": <?php echo getCountCountry('Jamaica' )?>,
              "JP": <?php echo getCountCountry('Japon' )?>,
              "JO": <?php echo getCountCountry('Jordan' )?>,
              "KZ": <?php echo getCountCountry('Kazajistan' )?>,
              "KE": <?php echo getCountCountry('Kenia' )?>,
              "KR": <?php echo getCountCountry('Corea' )?>,
              "KW": <?php echo getCountCountry('Kuwait' )?>,
              "KG": <?php echo getCountCountry('Kyrgyzstan' )?>,
              "LA": <?php echo getCountCountry('Laos' )?>,
              "LV": <?php echo getCountCountry('Letonia' )?>,
              "LB": <?php echo getCountCountry('Libano' )?>,
              "LS": <?php echo getCountCountry('Lesoto' )?>,
              "LR": <?php echo getCountCountry('Liberia' )?>,
              "LY": <?php echo getCountCountry('Libia' )?>,
              "LT": <?php echo getCountCountry('Lituania' )?>,
              "LU": <?php echo getCountCountry('Luxemburgo' )?>,
              "MK": <?php echo getCountCountry('Republica de Macedonia' )?>,
              "MG": <?php echo getCountCountry('Madagascar' )?>,
              "MW": <?php echo getCountCountry('Malaui' )?>,
              "MY": <?php echo getCountCountry('Malasia' )?>,
              "ML": <?php echo getCountCountry('Mali' )?>,
              "MR": <?php echo getCountCountry('Mauritania' )?>,
              "MX": <?php echo getCountCountry('Mexico')?>,
              "MD": <?php echo getCountCountry('Moldova')?>,
              "MN": <?php echo getCountCountry('Mongolia')?>,
              "ME": <?php echo getCountCountry('Montenegro' )?>,
              "MA": <?php echo getCountCountry('Marruecos' )?>,
              "MZ": <?php echo getCountCountry('Mozambique' )?>,
              "MM": <?php echo getCountCountry('Birmania' )?>,
              "NA": <?php echo getCountCountry('Namibia' )?>,
              "NP": <?php echo getCountCountry('Nepal' )?>,
              "NL": <?php echo getCountCountry('Países Bajos' )?>,
              "NZ": <?php echo getCountCountry('Nueva Zelanda' )?>,
              "NI": <?php echo getCountCountry('Nicaragua' )?>,
              "NE": <?php echo getCountCountry('Niger' )?>,
              "NG": <?php echo getCountCountry('Nigeria' )?>,
              "NO": <?php echo getCountCountry('Noruega' )?>,
              "OM": <?php echo getCountCountry('Oman' )?>,
              "PK": <?php echo getCountCountry('Pakistan' )?>,
              "PA": <?php echo getCountCountry('Panama' )?>,
              "PG": <?php echo getCountCountry('Papua Nueva Guinea' )?>,
              "PY": <?php echo getCountCountry('Paraguay' )?>,
              "PE": <?php echo getCountCountry('Peru' )?>,
              "PH": <?php echo getCountCountry('Filipinas' )?>,
              "PL": <?php echo getCountCountry('Polonia' )?>,
              "QA": <?php echo getCountCountry('Catar' )?>,
              "RO": <?php echo getCountCountry('Rumania' )?>,
              "RU": <?php echo getCountCountry('Rusia' )?>,
              "RW": <?php echo getCountCountry('Ruanda' )?>,
              "SA": <?php echo getCountCountry('Arabia Saudita' )?>,
              "SN": <?php echo getCountCountry('Senegal' )?>,
              "RS": <?php echo getCountCountry('Serbia' )?>,
              "SL": <?php echo getCountCountry('Sierra Leona' )?>,
              "SK": <?php echo getCountCountry('Eslovaquia' )?>,
              "SI": <?php echo getCountCountry('Eslovenia' )?>,
              "SB": <?php echo getCountCountry('Islas Salomón' )?>,
              "ZA": <?php echo getCountCountry('Sudáfrica' )?>,
              "ES": <?php echo getCountCountry('España' )?>,
              "LK": <?php echo getCountCountry('Sri Lanka' )?>,
              "SD": <?php echo getCountCountry('Sudan' )?>,
              "SR": <?php echo getCountCountry('Surinam' )?>,
              "SZ": <?php echo getCountCountry('Suazilandia' )?>,
              "SE": <?php echo getCountCountry('Suecia' )?>,
              "CH": <?php echo getCountCountry('Suiza' )?>,
              "SY": <?php echo getCountCountry('Siria' )?>,
              "TW": <?php echo getCountCountry('Taiwan' )?>,
              "TJ": <?php echo getCountCountry('Tajikistan' )?>,
              "TZ": <?php echo getCountCountry('Tanzania' )?>,
              "TH": <?php echo getCountCountry('Tailandia' )?>,
              "TL": <?php echo getCountCountry('Timor Oriental' )?>,
              "TG": <?php echo getCountCountry('Togo' )?>,
              "TT": <?php echo getCountCountry('Trinidad y Tobago' )?>,
              "TN": <?php echo getCountCountry('Túnez' )?>,
              "TR": <?php echo getCountCountry('Turquía' )?>,
              "TM": <?php echo getCountCountry('Turkmenistán' )?>,
              "UG": <?php echo getCountCountry('Uganda' )?>,
              "UA": <?php echo getCountCountry('Ucrania' )?>,
              "AE": <?php echo getCountCountry('Emiratos Árabes Unidos' )?>,
              "GB": <?php echo getCountCountry('Reino Unido' )?>,
              "US": <?php echo getCountCountry('Estados Unidos' )?>,
              "UY": <?php echo getCountCountry('Uruguay' )?>,
              "UZ": <?php echo getCountCountry('Uzbekistán' )?>,
              "VU": <?php echo getCountCountry('Vanuatu' )?>,
              "VE": <?php echo getCountCountry('Venezuela' )?>,
              "VN": <?php echo getCountCountry('Vietnam' )?>,
              "YE": <?php echo getCountCountry('Yemen' )?>,
              "ZM": <?php echo getCountCountry('Zambia' )?>,
              "ZW": <?php echo getCountCountry('Zimbabue' )?>
            }
          }]
        }
      });
    })
  </script>    

  <div id="map-chamilo" style="width: 900px; height: 500px;"></div> 
  <?php listCertificates('cchapa'); ?>
<?php get_footer(); ?>