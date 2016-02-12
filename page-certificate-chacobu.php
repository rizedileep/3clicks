<?php
/**
 * Template Name: Page: Certificate CHACOBU
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
    add_filter('body_class', array(G1_Theme(), 'secondary_none_body_class') );
    get_header();
    get_template_part( 'template-parts/g1_primary_page' );
    $list = query_posts( array ( 'post_type' => 'certificate', 'type' => 'chacobu',  'posts_per_page' => -1 ));
        
?>
    <!-- <script>
    jQuery.noConflict();
    jQuery(function(){
      var $ = jQuery;

     
      $('#map-chamilo').vectorMap({
        map: 'world_mill',
        panOnDrag: true,
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
              "AF": <?php echo getCountCountry('Afganistan',$list)?>,
              "AL": <?php echo getCountCountry('Albania',$list)?>,
              "DZ": <?php echo getCountCountry('Algeria',$list)?>,
              "AO": <?php echo getCountCountry('Angola',$list)?>,
              "AR": <?php echo getCountCountry('Argentina',$list)?>,
              "AM": <?php echo getCountCountry('Armenia',$list)?>,
              "AU": <?php echo getCountCountry('Australia',$list)?>,
              "AT": <?php echo getCountCountry('Austria',$list)?>,
              "AZ": <?php echo getCountCountry('Azerbaijan',$list)?>,
              "BS": <?php echo getCountCountry('Bahamas',$list)?>,
              "BD": <?php echo getCountCountry('Bangladesh',$list)?>,
              "BY": <?php echo getCountCountry('Belarusia',$list)?>,
              "BE": <?php echo getCountCountry('Belgica',$list)?>,
              "BZ": <?php echo getCountCountry('Belice',$list)?>,
              "BJ": <?php echo getCountCountry('Benin',$list)?>,
              "BT": <?php echo getCountCountry('Butan',$list)?>,
              "BO": <?php echo getCountCountry('Bolivia',$list)?>,
              "BA": <?php echo getCountCountry('Bosnia',$list)?>,
              "BW": <?php echo getCountCountry('Botswana',$list)?>,
              "BR": <?php echo getCountCountry('Brasil',$list)?>,
              "BN": <?php echo getCountCountry('Brunei',$list)?>,
              "BG": <?php echo getCountCountry('Bulgaria',$list)?>,
              "BF": <?php echo getCountCountry('Burkina Faso',$list)?>,
              "BI": <?php echo getCountCountry('Burundi',$list)?>,
              "KH": <?php echo getCountCountry('Camboya',$list)?>,
              "CM": <?php echo getCountCountry('Camerun',$list)?>,
              "CA": <?php echo getCountCountry('Canada',$list)?>,
              "CF": <?php echo getCountCountry('Republica Centroafricana', $list)?>,
              "TD": <?php echo getCountCountry('Chad', $list)?>,
              "CL": <?php echo getCountCountry('Chile', $list)?>,
              "CN": <?php echo getCountCountry('China', $list)?>,
              "CO": <?php echo getCountCountry('Colombia', $list)?>,
              "CD": <?php echo getCountCountry('Republica Democratica del Congo', $list)?>,
              "CG": <?php echo getCountCountry('Congo', $list)?>,
              "CR": <?php echo getCountCountry('Costa Rica', $list)?>,
              "HR": <?php echo getCountCountry('Croasia', $list)?>,
              "CY": <?php echo getCountCountry('Cyprus', $list)?>,
              "CZ": <?php echo getCountCountry('Republica Checa', $list)?>,
              "DK": <?php echo getCountCountry('Dinamarca', $list)?>,
              "DJ": <?php echo getCountCountry('Djibouti', $list)?>,
              "DE": <?php echo getCountCountry('Alemania')?>,
              "DO": <?php echo getCountCountry('Republica Dominicana', $list)?>,
              "EC": <?php echo getCountCountry('Ecuador', $list)?>,
              "EG": <?php echo getCountCountry('Egipto', $list)?>,
              "SV": <?php echo getCountCountry('El Salvador', $list)?>,
              "GQ": <?php echo getCountCountry('Guinea Equatorial', $list)?>,
              "ER": <?php echo getCountCountry('Eritrea', $list)?>,
              "EE": <?php echo getCountCountry('Estonia', $list)?>,
              "ET": <?php echo getCountCountry('Etiopia', $list)?>,
              "FJ": <?php echo getCountCountry('Fiji', $list)?>,
              "FI": <?php echo getCountCountry('Finlandia', $list)?>,
              "FR": <?php echo getCountCountry('Francia', $list)?>,
              "GA": <?php echo getCountCountry('Gabon', $list)?>,
              "GM": <?php echo getCountCountry('Gambia', $list)?>,
              "GE": <?php echo getCountCountry('Georgia', $list)?>,
              "GH": <?php echo getCountCountry('Ghana', $list)?>,
              "GR": <?php echo getCountCountry('Grecia', $list)?>,
              "GT": <?php echo getCountCountry('Guatemala', $list)?>,
              "GN": <?php echo getCountCountry('Guinea', $list)?>,
              "GY": <?php echo getCountCountry('Guinea-Bissau', $list)?>,
              "HT": <?php echo getCountCountry('Haiti', $list)?>,
              "HN": <?php echo getCountCountry('Honduras', $list)?>,
              "HU": <?php echo getCountCountry('Lituania', $list)?>,
              "IS": <?php echo getCountCountry('Islandia', $list)?>,
              "IN": <?php echo getCountCountry('India', $list)?>,
              "ID": <?php echo getCountCountry('Indonesia', $list)?>,
              "IR": <?php echo getCountCountry('Iran', $list)?>,
              "IQ": <?php echo getCountCountry('Iraq', $list)?>,
              "IE": <?php echo getCountCountry('Irlanda', $list)?>,
              "IL": <?php echo getCountCountry('Israel', $list)?>,
              "IT": <?php echo getCountCountry('Italia', $list)?>,
              "JM": <?php echo getCountCountry('Jamaica', $list)?>,
              "JP": <?php echo getCountCountry('Japon', $list)?>,
              "JO": <?php echo getCountCountry('Jordan', $list)?>,
              "KZ": <?php echo getCountCountry('Kazajistan', $list)?>,
              "KE": <?php echo getCountCountry('Kenia', $list)?>,
              "KR": <?php echo getCountCountry('Corea', $list)?>,
              "KW": <?php echo getCountCountry('Kuwait', $list)?>,
              "KG": <?php echo getCountCountry('Kyrgyzstan', $list)?>,
              "LA": <?php echo getCountCountry('Laos', $list)?>,
              "LV": <?php echo getCountCountry('Letonia', $list)?>,
              "LB": <?php echo getCountCountry('Libano', $list)?>,
              "LS": <?php echo getCountCountry('Lesoto', $list)?>,
              "LR": <?php echo getCountCountry('Liberia', $list)?>,
              "LY": <?php echo getCountCountry('Libia', $list)?>,
              "LT": <?php echo getCountCountry('Lituania', $list)?>,
              "LU": <?php echo getCountCountry('Luxemburgo', $list)?>,
              "MK": <?php echo getCountCountry('Republica de Macedonia', $list)?>,
              "MG": <?php echo getCountCountry('Madagascar', $list)?>,
              "MW": <?php echo getCountCountry('Malaui', $list)?>,
              "MY": <?php echo getCountCountry('Malasia', $list)?>,
              "ML": <?php echo getCountCountry('Mali', $list)?>,
              "MR": <?php echo getCountCountry('Mauritania', $list)?>,
              "MX": <?php echo getCountCountry('Mexico', $list)?>,
              "MD": <?php echo getCountCountry('Moldova', $list)?>,
              "MN": <?php echo getCountCountry('Mongolia', $list)?>,
              "ME": <?php echo getCountCountry('Montenegro', $list)?>,
              "MA": <?php echo getCountCountry('Marruecos', $list)?>,
              "MZ": <?php echo getCountCountry('Mozambique', $list)?>,
              "MM": <?php echo getCountCountry('Birmania', $list)?>,
              "NA": <?php echo getCountCountry('Namibia', $list)?>,
              "NP": <?php echo getCountCountry('Nepal', $list)?>,
              "NL": <?php echo getCountCountry('Países Bajos', $list)?>,
              "NZ": <?php echo getCountCountry('Nueva Zelanda', $list)?>,
              "NI": <?php echo getCountCountry('Nicaragua', $list)?>,
              "NE": <?php echo getCountCountry('Niger', $list)?>,
              "NG": <?php echo getCountCountry('Nigeria', $list)?>,
              "NO": <?php echo getCountCountry('Noruega', $list)?>,
              "OM": <?php echo getCountCountry('Oman', $list)?>,
              "PK": <?php echo getCountCountry('Pakistan', $list)?>,
              "PA": <?php echo getCountCountry('Panama', $list)?>,
              "PG": <?php echo getCountCountry('Papua Nueva Guinea', $list)?>,
              "PY": <?php echo getCountCountry('Paraguay', $list)?>,
              "PE": <?php echo getCountCountry('Peru', $list)?>,
              "PH": <?php echo getCountCountry('Filipinas', $list)?>,
              "PL": <?php echo getCountCountry('Polonia', $list)?>,
              "QA": <?php echo getCountCountry('Catar', $list)?>,
              "RO": <?php echo getCountCountry('Rumania', $list)?>,
              "RU": <?php echo getCountCountry('Rusia', $list)?>,
              "RW": <?php echo getCountCountry('Ruanda', $list)?>,
              "SA": <?php echo getCountCountry('Arabia Saudita', $list)?>,
              "SN": <?php echo getCountCountry('Senegal', $list)?>,
              "RS": <?php echo getCountCountry('Serbia', $list)?>,
              "SL": <?php echo getCountCountry('Sierra Leona', $list)?>,
              "SK": <?php echo getCountCountry('Eslovaquia', $list)?>,
              "SI": <?php echo getCountCountry('Eslovenia', $list)?>,
              "SB": <?php echo getCountCountry('Islas Salomón', $list)?>,
              "ZA": <?php echo getCountCountry('Sudáfrica', $list)?>,
              "ES": <?php echo getCountCountry('España', $list)?>,
              "LK": <?php echo getCountCountry('Sri Lanka', $list)?>,
              "SD": <?php echo getCountCountry('Sudan', $list)?>,
              "SR": <?php echo getCountCountry('Surinam', $list)?>,
              "SZ": <?php echo getCountCountry('Suazilandia', $list)?>,
              "SE": <?php echo getCountCountry('Suecia', $list)?>,
              "CH": <?php echo getCountCountry('Suiza', $list)?>,
              "SY": <?php echo getCountCountry('Siria', $list)?>,
              "TW": <?php echo getCountCountry('Taiwan', $list)?>,
              "TJ": <?php echo getCountCountry('Tajikistan', $list)?>,
              "TZ": <?php echo getCountCountry('Tanzania', $list)?>,
              "TH": <?php echo getCountCountry('Tailandia', $list)?>,
              "TL": <?php echo getCountCountry('Timor Oriental', $list)?>,
              "TG": <?php echo getCountCountry('Togo', $list)?>,
              "TT": <?php echo getCountCountry('Trinidad y Tobago', $list)?>,
              "TN": <?php echo getCountCountry('Túnez', $list)?>,
              "TR": <?php echo getCountCountry('Turquía', $list)?>,
              "TM": <?php echo getCountCountry('Turkmenistán', $list)?>,
              "UG": <?php echo getCountCountry('Uganda', $list)?>,
              "UA": <?php echo getCountCountry('Ucrania', $list)?>,
              "AE": <?php echo getCountCountry('Emiratos Árabes Unidos', $list)?>,
              "GB": <?php echo getCountCountry('Reino Unido', $list)?>,
              "US": <?php echo getCountCountry('Estados Unidos', $list)?>,
              "UY": <?php echo getCountCountry('Uruguay', $list)?>,
              "UZ": <?php echo getCountCountry('Uzbekistán', $list)?>,
              "VU": <?php echo getCountCountry('Vanuatu', $list)?>,
              "VE": <?php echo getCountCountry('Venezuela', $list)?>,
              "VN": <?php echo getCountCountry('Vietnam', $list)?>,
              "YE": <?php echo getCountCountry('Yemen', $list)?>,
              "ZM": <?php echo getCountCountry('Zambia', $list)?>,
              "ZW": <?php echo getCountCountry('Zimbabue', $list)?>
            }
          }]
        }
      });
    })
  </script>    

  <div id="map-chamilo" style="width: 900px; height: 500px;"></div> -->
<?php 
    listCertificates('chacobu');     
    get_footer();
?>