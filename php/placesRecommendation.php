<?php
//Wiki para buscar lo que quieras!
function placesRecommendation($condition = '', $question = '') {
  $weather = array("Bogota" => "cold", "Montería" => "hot", "Medellin" => "mild");
  $ubication = array("Guajira" => "north", "Leticia" => "south", "Santander" => "east", "Antioquia" => "west");
  $tourism = array("Santa Marta" => "sea", "Villavicencio" => "plains", "Riohacha" => "desert", "Quindío" => "valley");

  switch($condition) {
    case "weather":
      $search = $weather;
    break;
    case "ubication":
      $search = $ubication;
    break;
    case "tourism":
      $search = $tourism;
    break;
    default:
      echo "Welcome to Colombia!";
  }
  echo "The perfect place for you is ".array_search($question, $search);
}
placesRecommendation("weather", "mild");