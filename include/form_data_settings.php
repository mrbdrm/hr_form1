<?php
$tdataform_data = array();
$tdataform_data[".searchableFields"] = array();
$tdataform_data[".ShortName"] = "form_data";
$tdataform_data[".OwnerID"] = "";
$tdataform_data[".OriginalTable"] = "form_data";


$tdataform_data[".pagesByType"] = my_json_decode( "{\"add\":[\"add\"],\"edit\":[\"edit\"],\"export\":[\"export\"],\"list\":[\"list\"],\"search\":[\"search\"],\"view\":[\"view\"]}" );
$tdataform_data[".originalPagesByType"] = $tdataform_data[".pagesByType"];
$tdataform_data[".pages"] = types2pages( my_json_decode( "{\"add\":[\"add\"],\"edit\":[\"edit\"],\"export\":[\"export\"],\"list\":[\"list\"],\"search\":[\"search\"],\"view\":[\"view\"]}" ) );
$tdataform_data[".originalPages"] = $tdataform_data[".pages"];
$tdataform_data[".defaultPages"] = my_json_decode( "{\"add\":\"add\",\"edit\":\"edit\",\"export\":\"export\",\"list\":\"list\",\"search\":\"search\",\"view\":\"view\"}" );
$tdataform_data[".originalDefaultPages"] = $tdataform_data[".defaultPages"];

//	field labels
$fieldLabelsform_data = array();
$fieldToolTipsform_data = array();
$pageTitlesform_data = array();
$placeHoldersform_data = array();

if(mlang_getcurrentlang()=="Arabic")
{
	$fieldLabelsform_data["Arabic"] = array();
	$fieldToolTipsform_data["Arabic"] = array();
	$placeHoldersform_data["Arabic"] = array();
	$pageTitlesform_data["Arabic"] = array();
	$fieldLabelsform_data["Arabic"]["id"] = "م";
	$fieldToolTipsform_data["Arabic"]["id"] = "";
	$placeHoldersform_data["Arabic"]["id"] = "";
	$fieldLabelsform_data["Arabic"]["name"] = "الأسم الرباعي";
	$fieldToolTipsform_data["Arabic"]["name"] = "";
	$placeHoldersform_data["Arabic"]["name"] = "";
	$fieldLabelsform_data["Arabic"]["national_id"] = "رقم السجل المدني";
	$fieldToolTipsform_data["Arabic"]["national_id"] = "";
	$placeHoldersform_data["Arabic"]["national_id"] = "";
	$fieldLabelsform_data["Arabic"]["mobile_num"] = "رقم الجوال";
	$fieldToolTipsform_data["Arabic"]["mobile_num"] = "";
	$placeHoldersform_data["Arabic"]["mobile_num"] = "";
	$fieldLabelsform_data["Arabic"]["email_acc"] = "البريد الإلكتروني";
	$fieldToolTipsform_data["Arabic"]["email_acc"] = "";
	$placeHoldersform_data["Arabic"]["email_acc"] = "";
	$fieldLabelsform_data["Arabic"]["dep_school_name"] = "اسم القسم او المدرسة";
	$fieldToolTipsform_data["Arabic"]["dep_school_name"] = "";
	$placeHoldersform_data["Arabic"]["dep_school_name"] = "";
	$fieldLabelsform_data["Arabic"]["job_name"] = "مسمى الوظيفة";
	$fieldToolTipsform_data["Arabic"]["job_name"] = "";
	$placeHoldersform_data["Arabic"]["job_name"] = "";
	$fieldLabelsform_data["Arabic"]["job_grade"] = "المرتبة";
	$fieldToolTipsform_data["Arabic"]["job_grade"] = "";
	$placeHoldersform_data["Arabic"]["job_grade"] = "";
	$fieldLabelsform_data["Arabic"]["training_select"] = "البرامج التي ترغب التسجيل فيها";
	$fieldToolTipsform_data["Arabic"]["training_select"] = "";
	$placeHoldersform_data["Arabic"]["training_select"] = "";
	$pageTitlesform_data["Arabic"]["add"] = "نموذج التسجيل في البرامج التدريبية";
	$pageTitlesform_data["Arabic"]["edit"] = "تعديل نموذج";
	$pageTitlesform_data["Arabic"]["search"] = "بحث";
	$pageTitlesform_data["Arabic"]["view"] = "عرض نموذج";
	if (count($fieldToolTipsform_data["Arabic"]))
		$tdataform_data[".isUseToolTips"] = true;
}


	$tdataform_data[".NCSearch"] = true;



$tdataform_data[".shortTableName"] = "form_data";
$tdataform_data[".nSecOptions"] = 0;

$tdataform_data[".mainTableOwnerID"] = "";
$tdataform_data[".entityType"] = 0;
$tdataform_data[".connId"] = "shqraed1formhratshqraedunet";


$tdataform_data[".strOriginalTableName"] = "form_data";

	



$tdataform_data[".showAddInPopup"] = false;

$tdataform_data[".showEditInPopup"] = false;

$tdataform_data[".showViewInPopup"] = false;

$tdataform_data[".listAjax"] = false;
//	temporary
//$tdataform_data[".listAjax"] = false;

	$tdataform_data[".audit"] = false;

	$tdataform_data[".locking"] = false;


$pages = $tdataform_data[".defaultPages"];

if( $pages[PAGE_EDIT] ) {
	$tdataform_data[".edit"] = true;
	$tdataform_data[".afterEditAction"] = 1;
	$tdataform_data[".closePopupAfterEdit"] = 1;
	$tdataform_data[".afterEditActionDetTable"] = "";
}

if( $pages[PAGE_ADD] ) {
$tdataform_data[".add"] = true;
$tdataform_data[".afterAddAction"] = 1;
$tdataform_data[".closePopupAfterAdd"] = 1;
$tdataform_data[".afterAddActionDetTable"] = "";
}

if( $pages[PAGE_LIST] ) {
	$tdataform_data[".list"] = true;
}



$tdataform_data[".strSortControlSettingsJSON"] = "";




if( $pages[PAGE_VIEW] ) {
$tdataform_data[".view"] = true;
}

if( $pages[PAGE_IMPORT] ) {
$tdataform_data[".import"] = true;
}

if( $pages[PAGE_EXPORT] ) {
$tdataform_data[".exportTo"] = true;
}

if( $pages[PAGE_PRINT] ) {
$tdataform_data[".printFriendly"] = true;
}



$tdataform_data[".showSimpleSearchOptions"] = true; // temp fix #13449

// Allow Show/Hide Fields in GRID
$tdataform_data[".allowShowHideFields"] = true; // temp fix #13449
//

// Allow Fields Reordering in GRID
$tdataform_data[".allowFieldsReordering"] = true; // temp fix #13449
//

$tdataform_data[".isUseAjaxSuggest"] = true;






$tdataform_data[".ajaxCodeSnippetAdded"] = false;

$tdataform_data[".buttonsAdded"] = false;

$tdataform_data[".addPageEvents"] = false;

// use timepicker for search panel
$tdataform_data[".isUseTimeForSearch"] = false;


$tdataform_data[".badgeColor"] = "D2691E";


$tdataform_data[".allSearchFields"] = array();
$tdataform_data[".filterFields"] = array();
$tdataform_data[".requiredSearchFields"] = array();

$tdataform_data[".googleLikeFields"] = array();
$tdataform_data[".googleLikeFields"][] = "id";
$tdataform_data[".googleLikeFields"][] = "name";
$tdataform_data[".googleLikeFields"][] = "national_id";
$tdataform_data[".googleLikeFields"][] = "mobile_num";
$tdataform_data[".googleLikeFields"][] = "email_acc";
$tdataform_data[".googleLikeFields"][] = "dep_school_name";
$tdataform_data[".googleLikeFields"][] = "job_name";
$tdataform_data[".googleLikeFields"][] = "job_grade";
$tdataform_data[".googleLikeFields"][] = "training_select";



$tdataform_data[".tableType"] = "list";

$tdataform_data[".printerPageOrientation"] = 0;
$tdataform_data[".nPrinterPageScale"] = 100;

$tdataform_data[".nPrinterSplitRecords"] = 40;

$tdataform_data[".geocodingEnabled"] = false;




$tdataform_data[".isDisplayLoading"] = true;






$tdataform_data[".pageSize"] = 20;

$tdataform_data[".warnLeavingPages"] = true;



$tstrOrderBy = "";
$tdataform_data[".strOrderBy"] = $tstrOrderBy;

$tdataform_data[".orderindexes"] = array();


$tdataform_data[".sqlHead"] = "SELECT id,  	name,  	national_id,  	mobile_num,  	email_acc,  	dep_school_name,  	job_name,  	job_grade,  	training_select";
$tdataform_data[".sqlFrom"] = "FROM form_data";
$tdataform_data[".sqlWhereExpr"] = "";
$tdataform_data[".sqlTail"] = "";










//fill array of records per page for list and report without group fields
$arrRPP = array();
$arrRPP[] = 10;
$arrRPP[] = 20;
$arrRPP[] = 30;
$arrRPP[] = 50;
$arrRPP[] = 100;
$arrRPP[] = 500;
$arrRPP[] = -1;
$tdataform_data[".arrRecsPerPage"] = $arrRPP;

//fill array of groups per page for report with group fields
$arrGPP = array();
$arrGPP[] = 1;
$arrGPP[] = 3;
$arrGPP[] = 5;
$arrGPP[] = 10;
$arrGPP[] = 50;
$arrGPP[] = 100;
$arrGPP[] = -1;
$tdataform_data[".arrGroupsPerPage"] = $arrGPP;

$tdataform_data[".highlightSearchResults"] = true;

$tableKeysform_data = array();
$tableKeysform_data[] = "id";
$tdataform_data[".Keys"] = $tableKeysform_data;


$tdataform_data[".hideMobileList"] = array();




//	id
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 1;
	$fdata["strName"] = "id";
	$fdata["GoodName"] = "id";
	$fdata["ownerTable"] = "form_data";
	$fdata["Label"] = GetFieldLabel("form_data","id");
	$fdata["FieldType"] = 3;


		$fdata["AutoInc"] = true;

	
			

		$fdata["strField"] = "id";

		$fdata["sourceSingle"] = "id";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "id";

	
	
				$fdata["UploadFolder"] = "files";

//  Begin View Formats
	$fdata["ViewFormats"] = array();

	$vdata = array("ViewFormat" => "");

	
	
	
	
	
	
	
	
	
	
	
		
	
		$vdata["NeedEncode"] = true;

	
		$vdata["truncateText"] = true;
	$vdata["NumberOfChars"] = 80;

	$fdata["ViewFormats"]["view"] = $vdata;
//  End View Formats

//	Begin Edit Formats
	$fdata["EditFormats"] = array();

	$edata = array("EditFormat" => "Text field");

	
		$edata["weekdayMessage"] = array("message" => "", "messageType" => "Text");
	$edata["weekdays"] = "[]";


	
	



		$edata["IsRequired"] = true;

	
	
	
			$edata["acceptFileTypes"] = ".+$";
		$edata["acceptFileTypesHtml"] = "";

		$edata["maxNumberOfFiles"] = 1;

	
	
	
	
			$edata["HTML5InuptType"] = "text";

		$edata["EditParams"] = "";
		
		$edata["controlWidth"] = 200;

//	Begin validation
	$edata["validateAs"] = array();
	$edata["validateAs"]["basicValidate"] = array();
	$edata["validateAs"]["customMessages"] = array();
				$edata["validateAs"]["basicValidate"][] = getJsValidatorName("Number");
						$edata["validateAs"]["basicValidate"][] = "IsRequired";
		
	
	//	End validation

	
			
	
	
	
	$fdata["EditFormats"]["edit"] = $edata;
//	End Edit Formats


	$fdata["isSeparate"] = false;




// the field's search options settings
		$fdata["defaultSearchOption"] = "Contains";

			// the default search options list
				$fdata["searchOptionsList"] = array("Contains", "Equals", "Starts with", "More than", "Less than", "Between", "Empty", NOT_EMPTY);
// the end of search options settings


//Filters settings
	$fdata["filterTotals"] = 0;
		$fdata["filterMultiSelect"] = 0;
			$fdata["filterFormat"] = "Values list";
		$fdata["showCollapsed"] = false;

		$fdata["sortValueType"] = 0;
		$fdata["numberOfVisibleItems"] = 10;

		$fdata["filterBy"] = 0;

	

	
	
//end of Filters settings


	$tdataform_data["id"] = $fdata;
		$tdataform_data[".searchableFields"][] = "id";
//	name
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 2;
	$fdata["strName"] = "name";
	$fdata["GoodName"] = "name";
	$fdata["ownerTable"] = "form_data";
	$fdata["Label"] = GetFieldLabel("form_data","name");
	$fdata["FieldType"] = 200;


	
	
			

		$fdata["strField"] = "name";

		$fdata["sourceSingle"] = "name";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "name";

	
	
				$fdata["UploadFolder"] = "files";

//  Begin View Formats
	$fdata["ViewFormats"] = array();

	$vdata = array("ViewFormat" => "");

	
	
	
	
	
	
	
	
	
	
	
		
	
		$vdata["NeedEncode"] = true;

	
		$vdata["truncateText"] = true;
	$vdata["NumberOfChars"] = 80;

	$fdata["ViewFormats"]["view"] = $vdata;
//  End View Formats

//	Begin Edit Formats
	$fdata["EditFormats"] = array();

	$edata = array("EditFormat" => "Text field");

	
		$edata["weekdayMessage"] = array("message" => "", "messageType" => "Text");
	$edata["weekdays"] = "[]";


	
	



		$edata["IsRequired"] = true;

	
	
	
			$edata["acceptFileTypes"] = ".+$";
		$edata["acceptFileTypesHtml"] = "";

		$edata["maxNumberOfFiles"] = 1;

	
	
	
	
			$edata["HTML5InuptType"] = "text";

		$edata["EditParams"] = "";
			$edata["EditParams"].= " maxlength=200";

		$edata["controlWidth"] = 200;

//	Begin validation
	$edata["validateAs"] = array();
	$edata["validateAs"]["basicValidate"] = array();
	$edata["validateAs"]["customMessages"] = array();
						$edata["validateAs"]["basicValidate"][] = "IsRequired";
		
	
	//	End validation

	
			
	
	
	
	$fdata["EditFormats"]["edit"] = $edata;
//	End Edit Formats


	$fdata["isSeparate"] = false;




// the field's search options settings
		$fdata["defaultSearchOption"] = "Contains";

			// the default search options list
				$fdata["searchOptionsList"] = array("Contains", "Equals", "Starts with", "More than", "Less than", "Between", "Empty", NOT_EMPTY);
// the end of search options settings


//Filters settings
	$fdata["filterTotals"] = 0;
		$fdata["filterMultiSelect"] = 0;
			$fdata["filterFormat"] = "Values list";
		$fdata["showCollapsed"] = false;

		$fdata["sortValueType"] = 0;
		$fdata["numberOfVisibleItems"] = 10;

		$fdata["filterBy"] = 0;

	

	
	
//end of Filters settings


	$tdataform_data["name"] = $fdata;
		$tdataform_data[".searchableFields"][] = "name";
//	national_id
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 3;
	$fdata["strName"] = "national_id";
	$fdata["GoodName"] = "national_id";
	$fdata["ownerTable"] = "form_data";
	$fdata["Label"] = GetFieldLabel("form_data","national_id");
	$fdata["FieldType"] = 3;


	
	
			

		$fdata["strField"] = "national_id";

		$fdata["sourceSingle"] = "national_id";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "national_id";

	
	
				$fdata["UploadFolder"] = "files";

//  Begin View Formats
	$fdata["ViewFormats"] = array();

	$vdata = array("ViewFormat" => "");

	
	
	
	
	
	
	
	
	
	
	
		
	
		$vdata["NeedEncode"] = true;

	
		$vdata["truncateText"] = true;
	$vdata["NumberOfChars"] = 80;

	$fdata["ViewFormats"]["view"] = $vdata;
//  End View Formats

//	Begin Edit Formats
	$fdata["EditFormats"] = array();

	$edata = array("EditFormat" => "Text field");

	
		$edata["weekdayMessage"] = array("message" => "", "messageType" => "Text");
	$edata["weekdays"] = "[]";


	
	



		$edata["IsRequired"] = true;

	
	
	
			$edata["acceptFileTypes"] = ".+$";
		$edata["acceptFileTypesHtml"] = "";

		$edata["maxNumberOfFiles"] = 1;

	
	
	
	
			$edata["HTML5InuptType"] = "number";

		$edata["EditParams"] = "";
			$edata["EditParams"].= " maxlength=10";

		$edata["controlWidth"] = 200;

//	Begin validation
	$edata["validateAs"] = array();
	$edata["validateAs"]["basicValidate"] = array();
	$edata["validateAs"]["customMessages"] = array();
				$edata["validateAs"]["basicValidate"][] = getJsValidatorName("Number");
						$edata["validateAs"]["basicValidate"][] = "IsRequired";
		
	
	//	End validation

	
			
	
	
	
	$fdata["EditFormats"]["edit"] = $edata;
//	End Edit Formats


	$fdata["isSeparate"] = false;




// the field's search options settings
		$fdata["defaultSearchOption"] = "Contains";

			// the default search options list
				$fdata["searchOptionsList"] = array("Contains", "Equals", "Starts with", "More than", "Less than", "Between", "Empty", NOT_EMPTY);
// the end of search options settings


//Filters settings
	$fdata["filterTotals"] = 0;
		$fdata["filterMultiSelect"] = 0;
			$fdata["filterFormat"] = "Values list";
		$fdata["showCollapsed"] = false;

		$fdata["sortValueType"] = 0;
		$fdata["numberOfVisibleItems"] = 10;

		$fdata["filterBy"] = 0;

	

	
	
//end of Filters settings


	$tdataform_data["national_id"] = $fdata;
		$tdataform_data[".searchableFields"][] = "national_id";
//	mobile_num
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 4;
	$fdata["strName"] = "mobile_num";
	$fdata["GoodName"] = "mobile_num";
	$fdata["ownerTable"] = "form_data";
	$fdata["Label"] = GetFieldLabel("form_data","mobile_num");
	$fdata["FieldType"] = 200;


	
	
			

		$fdata["strField"] = "mobile_num";

		$fdata["sourceSingle"] = "mobile_num";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "mobile_num";

	
	
				$fdata["UploadFolder"] = "files";

//  Begin View Formats
	$fdata["ViewFormats"] = array();

	$vdata = array("ViewFormat" => "");

	
	
	
	
	
	
	
	
	
	
	
		
	
		$vdata["NeedEncode"] = true;

	
		$vdata["truncateText"] = true;
	$vdata["NumberOfChars"] = 80;

	$fdata["ViewFormats"]["view"] = $vdata;
//  End View Formats

//	Begin Edit Formats
	$fdata["EditFormats"] = array();

	$edata = array("EditFormat" => "Text field");

	
		$edata["weekdayMessage"] = array("message" => "", "messageType" => "Text");
	$edata["weekdays"] = "[]";


	
	



		$edata["IsRequired"] = true;

	
	
	
			$edata["acceptFileTypes"] = ".+$";
		$edata["acceptFileTypesHtml"] = "";

		$edata["maxNumberOfFiles"] = 1;

	
	
	
	
			$edata["HTML5InuptType"] = "text";

		$edata["EditParams"] = "";
			$edata["EditParams"].= " maxlength=10";

		$edata["controlWidth"] = 200;

//	Begin validation
	$edata["validateAs"] = array();
	$edata["validateAs"]["basicValidate"] = array();
	$edata["validateAs"]["customMessages"] = array();
				$edata["validateAs"]["basicValidate"][] = getJsValidatorName("Number");
						$edata["validateAs"]["basicValidate"][] = "IsRequired";
		
	
	//	End validation

	
			
	
	
	
	$fdata["EditFormats"]["edit"] = $edata;
//	End Edit Formats


	$fdata["isSeparate"] = false;




// the field's search options settings
		$fdata["defaultSearchOption"] = "Contains";

			// the default search options list
				$fdata["searchOptionsList"] = array("Contains", "Equals", "Starts with", "More than", "Less than", "Between", "Empty", NOT_EMPTY);
// the end of search options settings


//Filters settings
	$fdata["filterTotals"] = 0;
		$fdata["filterMultiSelect"] = 0;
			$fdata["filterFormat"] = "Values list";
		$fdata["showCollapsed"] = false;

		$fdata["sortValueType"] = 0;
		$fdata["numberOfVisibleItems"] = 10;

		$fdata["filterBy"] = 0;

	

	
	
//end of Filters settings


	$tdataform_data["mobile_num"] = $fdata;
		$tdataform_data[".searchableFields"][] = "mobile_num";
//	email_acc
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 5;
	$fdata["strName"] = "email_acc";
	$fdata["GoodName"] = "email_acc";
	$fdata["ownerTable"] = "form_data";
	$fdata["Label"] = GetFieldLabel("form_data","email_acc");
	$fdata["FieldType"] = 200;


	
	
			

		$fdata["strField"] = "email_acc";

		$fdata["sourceSingle"] = "email_acc";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "email_acc";

	
	
				$fdata["UploadFolder"] = "files";

//  Begin View Formats
	$fdata["ViewFormats"] = array();

	$vdata = array("ViewFormat" => "");

	
	
	
	
	
	
	
	
	
	
	
		
	
		$vdata["NeedEncode"] = true;

	
		$vdata["truncateText"] = true;
	$vdata["NumberOfChars"] = 80;

	$fdata["ViewFormats"]["view"] = $vdata;
//  End View Formats

//	Begin Edit Formats
	$fdata["EditFormats"] = array();

	$edata = array("EditFormat" => "Text field");

	
		$edata["weekdayMessage"] = array("message" => "", "messageType" => "Text");
	$edata["weekdays"] = "[]";


	
	



	
	
	
	
			$edata["acceptFileTypes"] = ".+$";
		$edata["acceptFileTypesHtml"] = "";

		$edata["maxNumberOfFiles"] = 1;

	
	
	
	
			$edata["HTML5InuptType"] = "text";

		$edata["EditParams"] = "";
			$edata["EditParams"].= " maxlength=200";

		$edata["controlWidth"] = 200;

//	Begin validation
	$edata["validateAs"] = array();
	$edata["validateAs"]["basicValidate"] = array();
	$edata["validateAs"]["customMessages"] = array();
				$edata["validateAs"]["basicValidate"][] = getJsValidatorName("Email");
							
	
	//	End validation

	
			
	
	
	
	$fdata["EditFormats"]["edit"] = $edata;
//	End Edit Formats


	$fdata["isSeparate"] = false;




// the field's search options settings
		$fdata["defaultSearchOption"] = "Contains";

			// the default search options list
				$fdata["searchOptionsList"] = array("Contains", "Equals", "Starts with", "More than", "Less than", "Between", "Empty", NOT_EMPTY);
// the end of search options settings


//Filters settings
	$fdata["filterTotals"] = 0;
		$fdata["filterMultiSelect"] = 0;
			$fdata["filterFormat"] = "Values list";
		$fdata["showCollapsed"] = false;

		$fdata["sortValueType"] = 0;
		$fdata["numberOfVisibleItems"] = 10;

		$fdata["filterBy"] = 0;

	

	
	
//end of Filters settings


	$tdataform_data["email_acc"] = $fdata;
		$tdataform_data[".searchableFields"][] = "email_acc";
//	dep_school_name
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 6;
	$fdata["strName"] = "dep_school_name";
	$fdata["GoodName"] = "dep_school_name";
	$fdata["ownerTable"] = "form_data";
	$fdata["Label"] = GetFieldLabel("form_data","dep_school_name");
	$fdata["FieldType"] = 200;


	
	
			

		$fdata["strField"] = "dep_school_name";

		$fdata["sourceSingle"] = "dep_school_name";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "dep_school_name";

	
	
				$fdata["UploadFolder"] = "files";

//  Begin View Formats
	$fdata["ViewFormats"] = array();

	$vdata = array("ViewFormat" => "");

	
	
	
	
	
	
	
	
	
	
	
		
	
		$vdata["NeedEncode"] = true;

	
		$vdata["truncateText"] = true;
	$vdata["NumberOfChars"] = 80;

	$fdata["ViewFormats"]["view"] = $vdata;
//  End View Formats

//	Begin Edit Formats
	$fdata["EditFormats"] = array();

	$edata = array("EditFormat" => "Text field");

	
		$edata["weekdayMessage"] = array("message" => "", "messageType" => "Text");
	$edata["weekdays"] = "[]";


	
	



		$edata["IsRequired"] = true;

	
	
	
			$edata["acceptFileTypes"] = ".+$";
		$edata["acceptFileTypesHtml"] = "";

		$edata["maxNumberOfFiles"] = 1;

	
	
	
	
			$edata["HTML5InuptType"] = "text";

		$edata["EditParams"] = "";
			$edata["EditParams"].= " maxlength=200";

		$edata["controlWidth"] = 200;

//	Begin validation
	$edata["validateAs"] = array();
	$edata["validateAs"]["basicValidate"] = array();
	$edata["validateAs"]["customMessages"] = array();
						$edata["validateAs"]["basicValidate"][] = "IsRequired";
		
	
	//	End validation

	
			
	
	
	
	$fdata["EditFormats"]["edit"] = $edata;
//	End Edit Formats


	$fdata["isSeparate"] = false;




// the field's search options settings
		$fdata["defaultSearchOption"] = "Contains";

			// the default search options list
				$fdata["searchOptionsList"] = array("Contains", "Equals", "Starts with", "More than", "Less than", "Between", "Empty", NOT_EMPTY);
// the end of search options settings


//Filters settings
	$fdata["filterTotals"] = 0;
		$fdata["filterMultiSelect"] = 0;
			$fdata["filterFormat"] = "Values list";
		$fdata["showCollapsed"] = false;

		$fdata["sortValueType"] = 0;
		$fdata["numberOfVisibleItems"] = 10;

		$fdata["filterBy"] = 0;

	

	
	
//end of Filters settings


	$tdataform_data["dep_school_name"] = $fdata;
		$tdataform_data[".searchableFields"][] = "dep_school_name";
//	job_name
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 7;
	$fdata["strName"] = "job_name";
	$fdata["GoodName"] = "job_name";
	$fdata["ownerTable"] = "form_data";
	$fdata["Label"] = GetFieldLabel("form_data","job_name");
	$fdata["FieldType"] = 200;


	
	
			

		$fdata["strField"] = "job_name";

		$fdata["sourceSingle"] = "job_name";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "job_name";

	
	
				$fdata["UploadFolder"] = "files";

//  Begin View Formats
	$fdata["ViewFormats"] = array();

	$vdata = array("ViewFormat" => "");

	
	
	
	
	
	
	
	
	
	
	
		
	
		$vdata["NeedEncode"] = true;

	
		$vdata["truncateText"] = true;
	$vdata["NumberOfChars"] = 80;

	$fdata["ViewFormats"]["view"] = $vdata;
//  End View Formats

//	Begin Edit Formats
	$fdata["EditFormats"] = array();

	$edata = array("EditFormat" => "Text field");

	
		$edata["weekdayMessage"] = array("message" => "", "messageType" => "Text");
	$edata["weekdays"] = "[]";


	
	



		$edata["IsRequired"] = true;

	
	
	
			$edata["acceptFileTypes"] = ".+$";
		$edata["acceptFileTypesHtml"] = "";

		$edata["maxNumberOfFiles"] = 1;

	
	
	
	
			$edata["HTML5InuptType"] = "text";

		$edata["EditParams"] = "";
			$edata["EditParams"].= " maxlength=200";

		$edata["controlWidth"] = 200;

//	Begin validation
	$edata["validateAs"] = array();
	$edata["validateAs"]["basicValidate"] = array();
	$edata["validateAs"]["customMessages"] = array();
						$edata["validateAs"]["basicValidate"][] = "IsRequired";
		
	
	//	End validation

	
			
	
	
	
	$fdata["EditFormats"]["edit"] = $edata;
//	End Edit Formats


	$fdata["isSeparate"] = false;




// the field's search options settings
		$fdata["defaultSearchOption"] = "Contains";

			// the default search options list
				$fdata["searchOptionsList"] = array("Contains", "Equals", "Starts with", "More than", "Less than", "Between", "Empty", NOT_EMPTY);
// the end of search options settings


//Filters settings
	$fdata["filterTotals"] = 0;
		$fdata["filterMultiSelect"] = 0;
			$fdata["filterFormat"] = "Values list";
		$fdata["showCollapsed"] = false;

		$fdata["sortValueType"] = 0;
		$fdata["numberOfVisibleItems"] = 10;

		$fdata["filterBy"] = 0;

	

	
	
//end of Filters settings


	$tdataform_data["job_name"] = $fdata;
		$tdataform_data[".searchableFields"][] = "job_name";
//	job_grade
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 8;
	$fdata["strName"] = "job_grade";
	$fdata["GoodName"] = "job_grade";
	$fdata["ownerTable"] = "form_data";
	$fdata["Label"] = GetFieldLabel("form_data","job_grade");
	$fdata["FieldType"] = 200;


	
	
			

		$fdata["strField"] = "job_grade";

		$fdata["sourceSingle"] = "job_grade";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "job_grade";

	
	
				$fdata["UploadFolder"] = "files";

//  Begin View Formats
	$fdata["ViewFormats"] = array();

	$vdata = array("ViewFormat" => "");

	
	
	
	
	
	
	
	
	
	
	
		
	
		$vdata["NeedEncode"] = true;

	
		$vdata["truncateText"] = true;
	$vdata["NumberOfChars"] = 80;

	$fdata["ViewFormats"]["view"] = $vdata;
//  End View Formats

//	Begin Edit Formats
	$fdata["EditFormats"] = array();

	$edata = array("EditFormat" => "Text field");

	
		$edata["weekdayMessage"] = array("message" => "", "messageType" => "Text");
	$edata["weekdays"] = "[]";


	
	



		$edata["IsRequired"] = true;

	
	
	
			$edata["acceptFileTypes"] = ".+$";
		$edata["acceptFileTypesHtml"] = "";

		$edata["maxNumberOfFiles"] = 1;

	
	
	
	
			$edata["HTML5InuptType"] = "text";

		$edata["EditParams"] = "";
			$edata["EditParams"].= " maxlength=100";

		$edata["controlWidth"] = 200;

//	Begin validation
	$edata["validateAs"] = array();
	$edata["validateAs"]["basicValidate"] = array();
	$edata["validateAs"]["customMessages"] = array();
						$edata["validateAs"]["basicValidate"][] = "IsRequired";
		
	
	//	End validation

	
			
	
	
	
	$fdata["EditFormats"]["edit"] = $edata;
//	End Edit Formats


	$fdata["isSeparate"] = false;




// the field's search options settings
		$fdata["defaultSearchOption"] = "Contains";

			// the default search options list
				$fdata["searchOptionsList"] = array("Contains", "Equals", "Starts with", "More than", "Less than", "Between", "Empty", NOT_EMPTY);
// the end of search options settings


//Filters settings
	$fdata["filterTotals"] = 0;
		$fdata["filterMultiSelect"] = 0;
			$fdata["filterFormat"] = "Values list";
		$fdata["showCollapsed"] = false;

		$fdata["sortValueType"] = 0;
		$fdata["numberOfVisibleItems"] = 10;

		$fdata["filterBy"] = 0;

	

	
	
//end of Filters settings


	$tdataform_data["job_grade"] = $fdata;
		$tdataform_data[".searchableFields"][] = "job_grade";
//	training_select
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 9;
	$fdata["strName"] = "training_select";
	$fdata["GoodName"] = "training_select";
	$fdata["ownerTable"] = "form_data";
	$fdata["Label"] = GetFieldLabel("form_data","training_select");
	$fdata["FieldType"] = 200;


	
	
			

		$fdata["strField"] = "training_select";

		$fdata["sourceSingle"] = "training_select";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "training_select";

	
	
				$fdata["UploadFolder"] = "files";

//  Begin View Formats
	$fdata["ViewFormats"] = array();

	$vdata = array("ViewFormat" => "");

	
	
	
	
	
	
	
	
	
	
	
		
	
		$vdata["NeedEncode"] = true;

	
		$vdata["truncateText"] = true;
	$vdata["NumberOfChars"] = 80;

	$fdata["ViewFormats"]["view"] = $vdata;
//  End View Formats

//	Begin Edit Formats
	$fdata["EditFormats"] = array();

	$edata = array("EditFormat" => "Lookup wizard");

	
		$edata["weekdayMessage"] = array("message" => "", "messageType" => "Text");
	$edata["weekdays"] = "[]";


	
	

// Begin Lookup settings
		$edata["LookupType"] = 0;
			$edata["autoCompleteFieldsOnEdit"] = 0;
	$edata["autoCompleteFields"] = array();
		$edata["LCType"] = 3;

	
	
		$edata["LookupValues"] = array();
	$edata["LookupValues"][] = "برنامج نور";
	$edata["LookupValues"][] = "التعامل مع الحساب الوزاري";
	$edata["LookupValues"][] = "التعامل مع نظام أعمالي ( خاص بموظفي وموظفات اقسام الادارة )";
	$edata["LookupValues"][] = "التعامل مع نظام فارس";
	$edata["LookupValues"][] = "مهارات التعامل مع برامج الاوفس ( الوورد - الاكسل - البريد الالكتروني )";
	$edata["LookupValues"][] = "السكرتارية وإدارة المكاتب";
	$edata["LookupValues"][] = "التنسيق الاداري";
	$edata["LookupValues"][] = "الاتصال الإداري";
	$edata["LookupValues"][] = "الابداع الاداري";
	$edata["LookupValues"][] = "التخطيط الإداري ( رؤساء الأقسام )";
	$edata["LookupValues"][] = "التعامل مع ضغوط العمل ";
	$edata["LookupValues"][] = "سلوكيات الوظيفة العامة";
	$edata["LookupValues"][] = "نحو قيادة واعدة ( إعداد وتأهيل الصف الثاني )";
	$edata["LookupValues"][] = "مهارات الاتصال";
	$edata["LookupValues"][] = "إدارة الفعاليات";
	$edata["LookupValues"][] = "القيادة الإدارية ";
	$edata["LookupValues"][] = "السلوك التنظيمي";

		$edata["Multiselect"] = true;

	
// End Lookup Settings


		$edata["IsRequired"] = true;

	
	
	
			$edata["acceptFileTypes"] = ".+$";
		$edata["acceptFileTypesHtml"] = "";

		$edata["maxNumberOfFiles"] = 1;

	
	
	
	
	
	
		$edata["controlWidth"] = 200;

//	Begin validation
	$edata["validateAs"] = array();
	$edata["validateAs"]["basicValidate"] = array();
	$edata["validateAs"]["customMessages"] = array();
						$edata["validateAs"]["basicValidate"][] = "IsRequired";
		
	
	//	End validation

	
			
	
	
	
	$fdata["EditFormats"]["edit"] = $edata;
//	End Edit Formats


	$fdata["isSeparate"] = false;




// the field's search options settings
		$fdata["defaultSearchOption"] = "Equals";

			// the default search options list
				$fdata["searchOptionsList"] = array("Contains", "Equals", "Starts with", "More than", "Less than", "Between", "Empty", NOT_EMPTY);
// the end of search options settings


//Filters settings
	$fdata["filterTotals"] = 0;
		$fdata["filterMultiSelect"] = 0;
			$fdata["filterFormat"] = "Values list";
		$fdata["showCollapsed"] = false;

		$fdata["sortValueType"] = 0;
		$fdata["numberOfVisibleItems"] = 10;

		$fdata["filterBy"] = 0;

	

	
	
//end of Filters settings


	$tdataform_data["training_select"] = $fdata;
		$tdataform_data[".searchableFields"][] = "training_select";


$tables_data["form_data"]=&$tdataform_data;
$field_labels["form_data"] = &$fieldLabelsform_data;
$fieldToolTips["form_data"] = &$fieldToolTipsform_data;
$placeHolders["form_data"] = &$placeHoldersform_data;
$page_titles["form_data"] = &$pageTitlesform_data;

// -----------------start  prepare master-details data arrays ------------------------------//
// tables which are detail tables for current table (master)

//if !@TABLE.bReportCrossTab

$detailsTablesData["form_data"] = array();
//endif

// tables which are master tables for current table (detail)
$masterTablesData["form_data"] = array();



// -----------------end  prepare master-details data arrays ------------------------------//



require_once(getabspath("classes/sql.php"));











function createSqlQuery_form_data()
{
$proto0=array();
$proto0["m_strHead"] = "SELECT";
$proto0["m_strFieldList"] = "id,  	name,  	national_id,  	mobile_num,  	email_acc,  	dep_school_name,  	job_name,  	job_grade,  	training_select";
$proto0["m_strFrom"] = "FROM form_data";
$proto0["m_strWhere"] = "";
$proto0["m_strOrderBy"] = "";
	
		;
			$proto0["cipherer"] = null;
$proto2=array();
$proto2["m_sql"] = "";
$proto2["m_uniontype"] = "SQLL_UNKNOWN";
	$obj = new SQLNonParsed(array(
	"m_sql" => ""
));

$proto2["m_column"]=$obj;
$proto2["m_contained"] = array();
$proto2["m_strCase"] = "";
$proto2["m_havingmode"] = false;
$proto2["m_inBrackets"] = false;
$proto2["m_useAlias"] = false;
$obj = new SQLLogicalExpr($proto2);

$proto0["m_where"] = $obj;
$proto4=array();
$proto4["m_sql"] = "";
$proto4["m_uniontype"] = "SQLL_UNKNOWN";
	$obj = new SQLNonParsed(array(
	"m_sql" => ""
));

$proto4["m_column"]=$obj;
$proto4["m_contained"] = array();
$proto4["m_strCase"] = "";
$proto4["m_havingmode"] = false;
$proto4["m_inBrackets"] = false;
$proto4["m_useAlias"] = false;
$obj = new SQLLogicalExpr($proto4);

$proto0["m_having"] = $obj;
$proto0["m_fieldlist"] = array();
						$proto6=array();
			$obj = new SQLField(array(
	"m_strName" => "id",
	"m_strTable" => "form_data",
	"m_srcTableName" => "form_data"
));

$proto6["m_sql"] = "id";
$proto6["m_srcTableName"] = "form_data";
$proto6["m_expr"]=$obj;
$proto6["m_alias"] = "";
$obj = new SQLFieldListItem($proto6);

$proto0["m_fieldlist"][]=$obj;
						$proto8=array();
			$obj = new SQLField(array(
	"m_strName" => "name",
	"m_strTable" => "form_data",
	"m_srcTableName" => "form_data"
));

$proto8["m_sql"] = "name";
$proto8["m_srcTableName"] = "form_data";
$proto8["m_expr"]=$obj;
$proto8["m_alias"] = "";
$obj = new SQLFieldListItem($proto8);

$proto0["m_fieldlist"][]=$obj;
						$proto10=array();
			$obj = new SQLField(array(
	"m_strName" => "national_id",
	"m_strTable" => "form_data",
	"m_srcTableName" => "form_data"
));

$proto10["m_sql"] = "national_id";
$proto10["m_srcTableName"] = "form_data";
$proto10["m_expr"]=$obj;
$proto10["m_alias"] = "";
$obj = new SQLFieldListItem($proto10);

$proto0["m_fieldlist"][]=$obj;
						$proto12=array();
			$obj = new SQLField(array(
	"m_strName" => "mobile_num",
	"m_strTable" => "form_data",
	"m_srcTableName" => "form_data"
));

$proto12["m_sql"] = "mobile_num";
$proto12["m_srcTableName"] = "form_data";
$proto12["m_expr"]=$obj;
$proto12["m_alias"] = "";
$obj = new SQLFieldListItem($proto12);

$proto0["m_fieldlist"][]=$obj;
						$proto14=array();
			$obj = new SQLField(array(
	"m_strName" => "email_acc",
	"m_strTable" => "form_data",
	"m_srcTableName" => "form_data"
));

$proto14["m_sql"] = "email_acc";
$proto14["m_srcTableName"] = "form_data";
$proto14["m_expr"]=$obj;
$proto14["m_alias"] = "";
$obj = new SQLFieldListItem($proto14);

$proto0["m_fieldlist"][]=$obj;
						$proto16=array();
			$obj = new SQLField(array(
	"m_strName" => "dep_school_name",
	"m_strTable" => "form_data",
	"m_srcTableName" => "form_data"
));

$proto16["m_sql"] = "dep_school_name";
$proto16["m_srcTableName"] = "form_data";
$proto16["m_expr"]=$obj;
$proto16["m_alias"] = "";
$obj = new SQLFieldListItem($proto16);

$proto0["m_fieldlist"][]=$obj;
						$proto18=array();
			$obj = new SQLField(array(
	"m_strName" => "job_name",
	"m_strTable" => "form_data",
	"m_srcTableName" => "form_data"
));

$proto18["m_sql"] = "job_name";
$proto18["m_srcTableName"] = "form_data";
$proto18["m_expr"]=$obj;
$proto18["m_alias"] = "";
$obj = new SQLFieldListItem($proto18);

$proto0["m_fieldlist"][]=$obj;
						$proto20=array();
			$obj = new SQLField(array(
	"m_strName" => "job_grade",
	"m_strTable" => "form_data",
	"m_srcTableName" => "form_data"
));

$proto20["m_sql"] = "job_grade";
$proto20["m_srcTableName"] = "form_data";
$proto20["m_expr"]=$obj;
$proto20["m_alias"] = "";
$obj = new SQLFieldListItem($proto20);

$proto0["m_fieldlist"][]=$obj;
						$proto22=array();
			$obj = new SQLField(array(
	"m_strName" => "training_select",
	"m_strTable" => "form_data",
	"m_srcTableName" => "form_data"
));

$proto22["m_sql"] = "training_select";
$proto22["m_srcTableName"] = "form_data";
$proto22["m_expr"]=$obj;
$proto22["m_alias"] = "";
$obj = new SQLFieldListItem($proto22);

$proto0["m_fieldlist"][]=$obj;
$proto0["m_fromlist"] = array();
												$proto24=array();
$proto24["m_link"] = "SQLL_MAIN";
			$proto25=array();
$proto25["m_strName"] = "form_data";
$proto25["m_srcTableName"] = "form_data";
$proto25["m_columns"] = array();
$proto25["m_columns"][] = "id";
$proto25["m_columns"][] = "name";
$proto25["m_columns"][] = "national_id";
$proto25["m_columns"][] = "mobile_num";
$proto25["m_columns"][] = "email_acc";
$proto25["m_columns"][] = "dep_school_name";
$proto25["m_columns"][] = "job_name";
$proto25["m_columns"][] = "job_grade";
$proto25["m_columns"][] = "training_select";
$obj = new SQLTable($proto25);

$proto24["m_table"] = $obj;
$proto24["m_sql"] = "form_data";
$proto24["m_alias"] = "";
$proto24["m_srcTableName"] = "form_data";
$proto26=array();
$proto26["m_sql"] = "";
$proto26["m_uniontype"] = "SQLL_UNKNOWN";
	$obj = new SQLNonParsed(array(
	"m_sql" => ""
));

$proto26["m_column"]=$obj;
$proto26["m_contained"] = array();
$proto26["m_strCase"] = "";
$proto26["m_havingmode"] = false;
$proto26["m_inBrackets"] = false;
$proto26["m_useAlias"] = false;
$obj = new SQLLogicalExpr($proto26);

$proto24["m_joinon"] = $obj;
$obj = new SQLFromListItem($proto24);

$proto0["m_fromlist"][]=$obj;
$proto0["m_groupby"] = array();
$proto0["m_orderby"] = array();
$proto0["m_srcTableName"]="form_data";		
$obj = new SQLQuery($proto0);

	return $obj;
}
$queryData_form_data = createSqlQuery_form_data();


	
		;

									

$tdataform_data[".sqlquery"] = $queryData_form_data;



include_once(getabspath("include/form_data_events.php"));
$tableEvents["form_data"] = new eventclass_form_data;
$tdataform_data[".hasEvents"] = true;

?>