<?php
define("ACCESS_SCRIPT", true);

define("DB_HOST", "localhost");
define("DB_USER", "root");
define("DB_PASSWORD", "root");
define("DB_NAME", "statistics");

require_once("classes/Image.php");

$dataUser = [
    'ip' => $_SERVER['REMOTE_ADDR'],
    'user_agent' => $_SERVER['HTTP_USER_AGENT'],
    'uri' => parse_url($_SERVER['HTTP_REFERER'], PHP_URL_PATH),
];
$codeImageBase64 = "/9j/4AAQSkZJRgABAQEBLAEsAAD/2wBDAAQCAwMDAgQDAwMEBAQEBQkGBQUFBQsICAYJDQsNDQ0LDAwOEBQRDg8TDwwMEhgSExUWFxcXDhEZGxkWGhQWFxb/2wBDAQQEBAUFBQoGBgoWDwwPFhYWFhYWFhYWFhYWFhYWFhYWFhYWFhYWFhYWFhYWFhYWFhYWFhYWFhYWFhYWFhYWFhb/wgARCAAhADIDASIAAhEBAxEB/8QAGgAAAwEBAQEAAAAAAAAAAAAAAAIEBQMBB//EABgBAAMBAQAAAAAAAAAAAAAAAAECAwAE/9oADAMBAAIQAxAAAAH5Lqw6tH8o6810vB0bTjAK6mTpVnTTCrTti88Fs8QKptANL1CvPCgaigK//8QAIxAAAgIABgEFAAAAAAAAAAAAAQIAAwQQERIiMxMhIzE1Qv/aAAgBAQABBQLDrywi+542FzqTCdBbqxmH66tvj2HVhvZgVLfESfn0SVusr5V3VqFlBJdNNTYscbYl/K25Gyw8H2L9lfTDl//EAB4RAAIBAwUAAAAAAAAAAAAAAAABAgMREhAgNEHw/9oACAEDAQE/ASOIno54q5dEXFmRV40vdPZ//8QAHBEAAQQDAQAAAAAAAAAAAAAAAAECERIDECEz/9oACAECAQE/AWtOyVKjWyR0r3WL0QUXX//EAC0QAAEDAQYDBwUAAAAAAAAAAAEAAhEhAxASIjFBMlFxIEJygqGx0VJhgZHB/9oACAEBAAY/Ap5L7p23RZrOYHE1ENJwlSdbuqGIZZ1WUhwNRNZ/KmzfhJ1aaeqgiLwFiO3eaUHT5mfCcXAOadSBPoi1pETRvE35Cmtmdgaj93SNliFCNwP4idH8xoUHaHYtKl8z9TaFFrs3J2GLneEqy8vsj1Q8Z9ux/8QAJRAAAgEDAwQDAQEAAAAAAAAAAREAITFhQVFxEIGhsZHB8NHh/9oACAEBAAE/IX4EEhdzG8AIDXUIF8QJlRCacaephHB1hEnZXO8UBPugUEyawPsQMkAYBoIAxl1d2LPUYcQ0PSRiqx9RJYUK6HO3mA0sjoChzYYA5UBI7lWASDMmj4HU4jpBlao43YPSoDVSKFFzZHN45EJImc3n+cwgKJ/yfyApsn/ie8AIAbLB2jl0Xiw8/wC+nmkt6f/aAAwDAQACAAMAAAAQIKJ+7pKN/ddA/8QAHxEBAAEEAQUAAAAAAAAAAAAAAQAQESHwMUFRkbHh/9oACAEDAQE/EO6sStjJtpcxT4bc6QIAIJZbO+PVRDpDin//xAAeEQACAQMFAAAAAAAAAAAAAAAAAREQMYEhYZGhsf/aAAgBAgEBPxBQobFxmmQxYRrk7jjIg7K9Rdmr/8QAIxABAAICAgICAgMAAAAAAAAAAREhADFBUWHwEHGBsZGh4f/aAAgBAQABPxAmZJJjXgOzsdc7eMjMJQJi64RNdU5eJAHJxXYfU4SpZNFEf2F+MXvuO/J8423nln9XsZCnAQhm2Qs3x+ayDt4JQpAloSmSInWMZbtP7UZK/bxiygSEOKV3k3J/OASwAbeXpgZmQvFdBLkdge8UR4WKo1+iRxiVKUMVrBu4SZgwMfi8sWuyiZU8RkVBtVwlAsGoJOXFVWXItNsmSSxQ071zlAUlFS7uTwc4u0gVW7pNO4D98YzEU1UDbBZ4VFZJzkiFzWkWzYJYLzgNYkpber3CFcmN/wDc9d0Z7nrnte3wPx+vgNZ//9k=";

$image = new Image($codeImageBase64);
header('Content-type: image/jpeg');
echo $image->getImageСode($dataUser);
