<?php
//é
	//require_once('preheader.php');

	#the code for the class
	include ('ajaxCRUD.class.php');

    #this one line of code is how you implement the class
    ########################################################
    ##

    $tbl = new ajaxCRUD("table de test 1", "table_de_test1", "id");
	$tbl->active_utf8_encode_unicode_urldecode_onupdate();
	//$tbl->active_utf8_encode_unicode_urldecode_onadd();
	$tbl->changelanguage('fr');
	//$tbl->setCSSFile('cnc.css');
	//$tbl->setCSSFile('merchants.css');
	//$tbl->setCSSFile('smoothtaste.css');
	$tbl->setCSSFile('table.css');
	//$tbl->setCSSFile('visual4tab.css');
    ##
    ########################################################

    ## all that follows is setup configuration for your fields....
    ## full API reference material for all functions can be found here - http://ajaxcrud.com/api/
    ## note: many functions below are commented out (with //). note which ones are and which are not

    #i can define a relationship to another table
    #the 1st field is the fk in the table, the 2nd is the second table, the 3rd is the pk in the second table, the 4th is field i want to retrieve as the dropdown value
    #http://ajaxcrud.com/api/index.php?id=defineRelationship
    //$tbl->defineRelationship("site", "site", "id", "nom");
	//$tbl->defineRelationship("id_affilie", "affilie", "id", "societe");

    #i don't want to visually show the primary key in the table
    //$tbl->omitPrimaryKey();

    #the table fields have prefixes; i want to give the heading titles something more meaningful
   /* $tbl->displayAs("fldField1", "Field1");
    $tbl->displayAs("fldField2", "Field2");*/
    //$tbl->displayAs("adresse_residence1", "adresse ligne 1");
    //$tbl->displayAs("adresse_residence2", "adresse ligne 2");

	#set the textarea height of the longer field (for editing/adding)
    #http://ajaxcrud.com/api/index.php?id=setTextareaHeight
    //$tbl->setTextareaHeight('adresse_residence1', 50);
	//$tbl->setTextareaHeight('adresse_residence2', 50);

    #i could omit a field if I wanted
    #http://ajaxcrud.com/api/index.php?id=omitField
    //$tbl->omitField("password");

    #i could omit a field from being on the add form if I wanted
    $tbl->omitAddField("date_inscription");

    #i could disallow editing for certain, individual fields
    //$tbl->disallowEdit('date_inscription');

    #i could set a field to accept file uploads (the filename is stored) if wanted
    $tbl->setFileUpload("fichier", "../upload/", "../upload/");

    #i can have a field automatically populate with a certain value (eg the current timestamp)
    $tbl->addValueOnInsert("date_inscription", "NOW()");

    #i can use a where field to better-filter my table
    //$tbl->addWhereClause("WHERE id > 1000");

    #i can order my table by whatever i want
    $tbl->addOrderBy("ORDER BY date_inscription ASC");

    #i can set certain fields to only allow certain values
    #http://ajaxcrud.com/api/index.php?id=defineAllowableValues
    //$allowableValues = array("agence", "client", "salarie_ce");
    //$tbl->defineAllowableValues("categorie", $allowableValues);

    #i can disallow deleting of rows from the table
    #http://ajaxcrud.com/api/index.php?id=disallowDelete
    //$tbl->disallowDelete();
	
	#disable unlink files (erase file where deleting in CRUD)
	//$tbl->disallowUnlinkfile();
	
	#add timestamp at the beginning of the name of file for uniq filenames
	$tbl->allowAdd_timestamp_to_file();

    #i can disallow adding rows to the table
    #http://ajaxcrud.com/api/index.php?id=disallowAdd
    //$tbl->disallowAdd();

    #i can add a button that performs some action deleting of rows for the entire table
    #http://ajaxcrud.com/api/index.php?id=addButtonToRow
    //$tbl->addButtonToRow("Add", "add_item.php", "all");

    #set the number of rows to display (per page)
    $tbl->setLimit(5);

	#set a filter box at the top of the table
    $tbl->addAjaxFilterBox('nom');
	$tbl->addAjaxFilterBox('prenom');
	//$tbl->addAjaxFilterBox('mail');

    #if really desired, a filter box can be used for all fields
    //$tbl->addAjaxFilterBoxAllFields();

    #i can set the size of the filter box
    //$tbl->setAjaxFilterBoxSize('mail', 20);

	#i can format the data in cells however I want with formatFieldWithFunction
	#this is arguably one of the most important (visual) functions
	/*$tbl->formatFieldWithFunction('fldField1', 'makeBlue');
	$tbl->formatFieldWithFunction('fldField2', 'makeBold');*/

	#actually show the table
	$tbl->showTable();

	#my self-defined functions used for formatFieldWithFunction
	/*function makeBold($val){
		return "<b>$val</b>";
	}

	function makeBlue($val){
		return "$val";
	}*/

?>