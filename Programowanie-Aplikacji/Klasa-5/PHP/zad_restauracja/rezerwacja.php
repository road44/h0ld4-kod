<?php
    $url = mysqli_connect("localhost", "root");
    $db = mysqli_select_db($url, "baza");

    $data = $_POST["data"];
    $ilosc = $_POST["ilosc"];
    $telefon = $_POST["telefon"];

    $sql = "INSERT INTO rezerwacje (data_rez, liczba_osob, telefon) VALUES ($data, $ilosc, $telefon)";

    $result = mysqli_query($url, $sql);

    echo("Dodano rezerwację do bazy");

    mysqli_close($url);
?>