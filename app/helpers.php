<?php
//Constant for Hard Code Yes 
define('HARD_CODE_ID_YES', '41');

// Constant for Hard Code No
define('HARD_CODE_ID_NO', '42');


/*DOCTOR CASE STATUS*/
define('ASSIGNED',1); /*IT COMES FROM tbl_application_alignerco_doctor_case_status*/
define('PENDING',2); /*IT COMES FROM tbl_application_alignerco_doctor_case_status*/
define('APPROVED',3); /*IT COMES FROM tbl_application_alignerco_doctor_case_status*/
define('MODIFIED',4); /*IT COMES FROM tbl_application_alignerco_doctor_case_status*/
define('UN_ASSIGN',5); /*IT COMES FROM tbl_application_alignerco_doctor_case_status*/


/* Pictures Fetching URL */
//Oral Pictures URL
define('CP_PICTURES_LOCAL_PATH', 'https://portal.clearpathortho.pk/'); 
//Attachment Pictures URL
define('MEDICAL_RX_FORM_DIRECTORY_PATH', 'https://portal.clearpathortho.pk/rx/'); 
define('MEDICAL_X_RAY_OPG_PATH_DIRECTORY_PATH', 'https://portal.clearpathortho.pk/x_rays/opg/'); 
define('MEDICAL_X_RAY_CEPH_PATH_DIRECTORY_PATH', 'https://portal.clearpathortho.pk/x_rays/ceph/'); 
define('MEDICAL_STL_PATH_DIRECTORY_PATH', 'https://portal.clearpathortho.pk/stl/'); 
// define('MEDICAL_X_RAY_OPG_PATH_DIRECTORY_PATH', 'https://portal.clearpathortho.pk/x_rays/opg/'); 

/* Folder Name Constant */
//Oral Pictures Folder Path
define('CASE_PICTURES_URL_PATH','pictures_cases/');
define('CASE_PICTURES_PATH_DIRECTORY_PATH', 'pictures_cases/');

//Attachment Pictures Folder Path 
define('CASE_RX_FORM_URL_PATH', 'rx/');
define('CASE_X_RAY_OPG_URL_PATH', 'x_rays/opg');
define('CASE_X_RAY_CEPH_URL_PATH', 'x_rays/ceph');
define('CASE_FILE_ASSESSMENT_URL_PATH', 'assessments');
// define('CASE_X_RAY_OPG_URL_PATH', 'x_rays/opg');

//Loyality Point Constants
define('LOYALTY_POINTS_NOTIFICATION_STATUS_PENDING',2);  
define('LOYALTY_POINTS_NOTIFICATION_STATUS_APPROVED',3); 
define('LOYALTY_POINTS_NOTIFICATION_STATUS_REJECTED',4);   