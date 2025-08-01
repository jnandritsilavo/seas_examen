<?php if (!defined('BASEPATH')) exit('No direct script access allowed');
/**
 * Summary of numberComma
 * @param mixed $data
 * @param mixed $comma
 * @return float|string
 */
function numberComma($number, $decimalPlaces = 2)
{
    if (!empty($number)) {
        $formattedNumber = number_format(round($number, $decimalPlaces), $decimalPlaces, ".", " ");
        return $formattedNumber;
    } else {
        return '0.00';
    }
}


/**
 * Summary of privacy
 * @param mixed $uniqid
 * @return string
 */
function getPrivacySetting($uniqid)
{
    $privacySettings = [
        '1' => 'Moi uniquement',
        '2' => 'Public'
    ];

    return $privacySettings[$uniqid] ?? 'Paramètre de confidentialité inconnu';
}


/**
 * Summary of userLevel
 * @param mixed $value
 * @return string
 */
function getUserLevel($value)
{
    $userRoles = [
        'ADMIN' => 'Administrateur',
        'USER' => 'Utilisateur',
        'M1ASS' => 'Étudiant.e M1 - ASS',
        'M1EFA' => 'Étudiant.e M1 - EFA',
        'M2ASS' => 'Étudiant.e M2 - ASS',
        'M2EFA' => 'Étudiant.e M2 - EFA',
        'L3LALS' => 'Étudiant.e LALS',
        'L3LEFA' => 'Étudiant.e LEFA',
        'TEACHER' => 'Enseignant.e',
    ];
    return $userRoles[$value] ?? 'Rôle utilisateur inconnu';
}
function getUserResource($value)
{
    $userRoles = [
        'ADMIN' => 'ADMINISTRATEUR',
        'USER' => 'UTILISATEUR',
        'M1ASS' => 'M1 - ASS',
        'M1EFA' => 'M1 - EFA',
        'M2ASS' => 'M2 - ASS',
        'M2EFA' => 'M2 - EFA',
        'L3LALS' => 'L3LALS',
        'L3LEFA' => 'L3LEFA',
        'TEACHER' => 'ENSEIGNANT.E',
        'COMMON_L3' => 'TRONC COMMUN L3',
        'COMMON_M1' => 'TRONC COMMUN M1',
        'COMMON_M2' => 'TRONC COMMUN M2',
        'OUVRAGE' => 'OUVRAGES GÉNÉRAUX',
        'FORMATION' => 'FORMATION DES ADULTES',
        'ADMINISTRATION' => 'ADMINISTRATION ET FINANCES',
        'METHODO' => 'MÉTHODOLOGIE DE RECHERCHE'
    ];
    return $userRoles[$value] ?? 'NON CONNU';
}
function getResourceLevel($value)
{
    $userRoles = [
        'ADMIN' => 'ADMIN',
        'USER' => 'USER',
        'M1ASS' => 'COMMON_M1',
        'M1EFA' => 'COMMON_M1',
        'M2ASS' => 'COMMON_M2',
        'M2EFA' => 'COMMON_M2',
        'L3LALS' => 'COMMON_L3',
        'L3LEFA' => 'COMMON_L3',
        'TEACHER' => 'ADMIN',
        'OUVRAGE' => 'OUVRAGE',
        'FORMATION' => 'FORMATION',
        'ADMINISTRATION' => 'ADMINISTRATION',
        'METHODO' => 'METHODO'
    ];
    return $userRoles[$value] ?? 'NON CONNU';
}


// /**
//  * Summary of getArticle
//  * @param mixed $code
//  * @return bool|string
//  */
// function getArticle($code)
// {
//     $CI = &get_instance();
//     $CI->load->model('statics');
//     $data = $CI->statics->getByManyId(TABLE_ARTICLE_MANAGEMENT, array('article_code' => $code));
//     return json_encode($data);
// }


// /**
//  * Summary of getSumEntry
//  * @param mixed $code
//  * @return float|string
//  */
// function getSumEntry($code)
// {
//     $CI = &get_instance();
//     $CI->load->model('statics');
//     $sum = $CI->statics->getSumOfColumn(TABLE_ENTRY_LINE, 'amount', array('entry_code' => $code));
//     return numberComma($sum);
// }



// /**
//  * Get sum of out of stock
//  * @param mixed $code
//  * @return float|string
//  */
// function getSumOut($code)
// {
//     $CI = &get_instance();
//     $CI->load->model('statics');
//     $sum = $CI->statics->getSumOfColumn(TABLE_OUT_LINE, 'amount', array('out_code' => $code));
//     return numberComma($sum);
// }



// /**
//  * Get customer in the table Customer
//  * @param mixed $code
//  * @return mixed
//  */
// function getCustomer($code)
// {
//     $CI = &get_instance();
//     $CI->load->model('statics');
//     $data = $CI->statics->getByManyId(TABLE_CUSTOMER_MANAGEMENT, array('customer_code' => $code));
//     return $data;
// }


// /**
//  * Alert the user when the password is expired
//  * @return void
//  */
// function passwordExpire()
// {
//     $CI = &get_instance();
//     $CI->load->model('statics');
//     $colum = 'user_expire';
//     $where = array('id =' => __UNIQID__);
//     $user_expire = $CI->statics->getColumnValueByManyConditions(TABLE_SYSTEM_USER, $colum, $where);

//     if ($user_expire == -1) {
//         $where = array('pass_user' => __UNIQID__);
//         $data = $CI->statics->max(TABLE_SYSTEM_PASSWORD, 'id', $where);
//         if (empty($data)) {
//             $CI->session->set_userdata(array('user_expire'  => 'Votre mot de passe a expiré et doit être changé.'));
//             redirect('parameter/password');
//         } else {
//             foreach ($data as $k) {
//                 $date_min = date_create($k->pass_date);
//                 $date_max = date_create(date('Y-m-d'));
//                 $date_diff = date_diff($date_min, $date_max);
//                 if ($date_diff->m > 3) {
//                     $CI->session->set_userdata(array('user_expire'  => 'Votre mot de passe a expiré et doit être changé.'));
//                     redirect('parameter/password');
//                 }
//             }
//         }
//     }
// }

// function getStatus($status)
// {
//     $periods = [
//         '1' => 'Activé',
//         '-1' => 'En someil'
//     ];

//     return $periods[$status] ?? null;
// }

/**
 * Summary of cleanHour
 * @param mixed $hour
 * @return string
 */
function cleanHour($hour)
{
    if (!empty($hour)) {
        $time = explode(':', $hour);
        return $time[0] . ':' . $time[1];
    } else {
        return '00:00';
    }
}

// function logAction($table, $objet, $actionType)
// {
//     $CI = &get_instance();
//     $CI->load->model('statics');
//     $historicalData['historical_user'] = __UNIQID__;
//     $historicalData['historical_table'] = $table;
//     $historicalData['historical_objet'] = $objet;
//     $historicalData['id_action'] = $actionType;
//     $historicalData['historical_date'] = date('Y-m-d');
//     $historicalData['historical_time'] = date('H:i:s');
//     $CI->statics->addRecord(TABLE_HISTORICAL, $historicalData);
//     return TRUE;
// }


function isEmpty($data_value)
{
    if (empty($data_value)) {
        return "NO VALUE";
    } else {
        return $data_value;
    }
}

function getEmail($id)
{
    $CI = &get_instance();
    $CI->load->model('statics');
    if ($id != '') {
        return $CI->statics->getColumnValueByCondition(TABLE_SYSTEM_USER, 'email_address', 'id', $id);
    } else {
        return '';
    }
}

function getStudentName($code)
{
    if (empty($code)) {
        return '---';
    }

    $CI = &get_instance();
    $CI->load->model('statics');

    $isExist = $CI->statics->countRecords(TABLE_REGISTRATION, ['code_student' => $code]);

    if ($isExist > 0) {
        $names = $CI->statics->getColumnValueByCondition(TABLE_REGISTRATION, 'names', 'code_student', $code);
        $firstNames = $CI->statics->getColumnValueByCondition(TABLE_REGISTRATION, 'first_names', 'code_student', $code);

        return $names . ' ' . $firstNames;
    } else {
        // You may want to handle the case where the record does not exist differently,
        // for example, by returning a default value or throwing an exception.

        // Assuming you want to update a record in TABLE_PAYMENT with status -1
        $data['status'] = -1;
        $CI->statics->updateRecord(TABLE_PAYMENT, 'code_student', $code, $data);
        return '---'; // or return some default value based on your requirement
    }
}


/**
 * Convert english date to french format
 * @param mixed $dateEng
 * @return string
 */
function convertEngFr($dateEng)
{
    if ($dateEng != '') {
        $dateTime = new DateTime($dateEng);
        $dateFr = $dateTime->format('d/m/Y');
        return $dateFr;
    }
    return '';
}

function convertFrEng($dateFr)
{
    if ($dateFr != '') {
        $dateTime = DateTime::createFromFormat('d/m/Y', $dateFr);
        $dateEng = $dateTime->format('Y-m-d');
        return $dateEng;
    }
    return '';
}

/**
 * Convert datetime to letter month
 * @param mixed $datetime
 * @return string
 */
function letterMonthDatetime($datetime)
{
    if (is_null($datetime)) {
        return '-';
    }
    $datetime = new DateTime($datetime);
    $date_d = $datetime->format('d');
    $date_m = $datetime->format('n');
    $date_Y = $datetime->format('Y');
    $date_H = $datetime->format('H');
    $date_i = $datetime->format('i');
    $months = [
        'janv.',
        'févr.',
        'mars',
        'avr.',
        'mai',
        'juin',
        'juil.',
        'août',
        'sept.',
        'oct.',
        'nov.',
        'déc.'
    ];
    return $date_d . ' ' . $months[$date_m - 1] . ' ' . $date_Y . ' ' . $date_H . ':' . $date_i;
}
function cleanDate($date_time)
{
    if ($date_time === '') {
        return '---';
    }
    return (new DateTime($date_time))->format('Y-m-d H:i');
}



/**
 * Summary of print_d
 * @param mixed $data
 * @return never
 */
function print_d($data)
{
    echo '<pre>';
    print_r($data);
    echo '</pre>';
    die();
}


function getCourse($code)
{
    $CI = &get_instance();
    $CI->load->model('statics');
    if ($code != '') {
        return $CI->statics->getColumnValueByCondition(TABLE_COURSE, 'label', 'code_course', $code);
    } else {
        return '---';
    }
}


function getMarital($code)
{
    $CI = &get_instance();
    $CI->load->model('statics');
    if ($code != '') {
        return $CI->statics->getColumnValueByCondition(TABLE_MARITAL, 'label', 'code_marital', $code);
    } else {
        return '---';
    }
}
function getProvince($code)
{
    $CI = &get_instance();
    $CI->load->model('statics');
    if ($code != '') {
        return $CI->statics->getColumnValueByCondition(TABLE_PROVINCE, 'label', 'code_province', $code);
    } else {
        return '---';
    }
}

function getAdmissionLicence($code)
{
    $CI = &get_instance();
    $CI->load->model('statics');
    if ($code != '') {
        return $CI->statics->getColumnValueByCondition(TABLE_LICENSE, 'label', 'code_admission_license', $code);
    } else {
        return '---';
    }
}
function getAdmissionMaster($code)
{
    $CI = &get_instance();
    $CI->load->model('statics');
    if ($code != '') {
        return $CI->statics->getColumnValueByCondition(TABLE_MASTER, 'label', 'code_admission_master', $code);
    } else {
        return '---';
    }
}
function getUserFullname($uniqid)
{
    $CI = &get_instance();
    $CI->load->model('statics');
    if ($uniqid != '') {
        return $CI->statics->getColumnValueByCondition(TABLE_USER_LIST, 'full_name', 'uniqid', $uniqid);
    } else {
        return '---';
    }
}

function isValid($uniqid)
{
    $CI = &get_instance();
    $CI->load->model('statics');
    $count =  $CI->statics->countRecords(TABLE_REGISTRATION, ['uniqid' => $uniqid]);
    if ($count == 1) {
       return 'Il s\'agit d\'un dossier authentique, pouvant être vérifié à l\'aide de la référence <b class="text-uppercase badge bg-red text-white">'.$uniqid.'</b>. Pour effectuer la vérification, veuillez envoyer la référence <b class="text-uppercase">'.$uniqid.'</b> à l\'adresse e-mail suivante : <a class="badge mt-1 bg-red text-white" href="mailto:othentic@seas.mg">othentic@seas.mg</a>';
    }
}

function createJsonFile($data, $filename) {
    $jsonString = json_encode($data);
    if ($jsonString === false) {
        return false;
    }
    // Write the JSON string to the file
    if (file_put_contents(_URL_JSON_.$filename.'.json', $jsonString)) {
        return true; // File creation successful
    } else {
        return false; // File creation failed
    }
}

function isPayed($code)
{
    $CI = &get_instance();
    $CI->load->model('statics');
    $count =  $CI->statics->countRecords(TABLE_PAYMENT_FINAL, ['code_student' => $code]);
    if ($count != 0) {
        return 'YES';
    }
}