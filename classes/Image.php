<?php
if(!defined("ACCESS_SCRIPT")) {
    die("Forbidden");
}

class Image
{

    private $codeImageBase64;

    public function __construct($codeImageBase64)
    {
        $this->codeImageBase64 = $codeImageBase64;
    }

    private function getImage()
    {

        return base64_decode($this->codeImageBase64);
    }

    private function updateStatistics($dataUser)
    {
        try {
            $connect = mysqli_connect(DB_HOST, DB_USER, DB_PASSWORD, DB_NAME);

            $sql = "
                INSERT INTO statistics (ip_address, user_agent, page_url) 
                VALUES (INET_ATON('%s'), '%s', '%s')
                ON DUPLICATE KEY UPDATE
                    views_count = views_count + 1,
                    view_date = CURRENT_TIMESTAMP()
            ";

            $sql = sprintf(
                $sql,
                $dataUser['ip'],
                mysqli_real_escape_string($connect, $dataUser['user_agent']),
                mysqli_real_escape_string($connect, $dataUser['uri'])
            );

            mysqli_query($connect, $sql);
            mysqli_close($connect);
        } catch (Exception  $e) {
            /*
             * логирование ошибки
             */
        }

    }

    public function getImageСode($dataUser)
    {
        $this->updateStatistics($dataUser);

        return $this->getImage();
    }

}
