<?php

/*
	** Get All Function v2.0
	** Function To Get All Records From Any Database Table
	*/

function getAllFrom($field, $table, $where = NULL, $and = NULL, $orderfield, $ordering = "DESC")
{

    global $con;

    $getAll = $con->prepare("SELECT $field FROM $table  $where $and ORDER BY $orderfield $ordering");

    $getAll->execute();

    $all = $getAll->fetchAll();

    return $all;
}

function getAllFromWithJoin($field, $table, $where = NULL, $and = NULL, $orderfield, $ordering = "DESC", $JoinTable, $JoinField, $TableJoinField)
{

    global $con;

    $getAll = $con->prepare("SELECT $field FROM $table INNER JOIN $JoinTable ON $TableJoinField = $JoinField $where $and ORDER BY $orderfield $ordering");

    $getAll->execute();

    $all = $getAll->fetchAll();

    return $all;
}
function getLatest($select, $table, $order, $limit = 3) {

		global $con;

		$getStmt = $con->prepare("SELECT $select FROM $table ORDER BY $order DESC LIMIT $limit");

		$getStmt->execute();

		$rows = $getStmt->fetchAll();

		return $rows;

	}