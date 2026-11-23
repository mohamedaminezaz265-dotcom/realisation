COUNTRY(
  id_country PK,
  nom_country
)

DESTINATION(
  id_destination PK,
  nom,
  image,
  description,
  id_country FK
)

INTEREST(
  id_interest PK,
  nom_interest
)

DESTINATION_INTEREST(
  id_destination PK, FK,
  id_interest PK, FK
)