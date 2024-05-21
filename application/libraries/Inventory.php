<?php

use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\SMTP;
use PHPMailer\PHPMailer\Exception;

class Inventory
{

    function __construct()
    {

    }

    function conn()
    {
        global $conn;
        $crossenv = require (__DIR__ . '/../../crossenv.php');

        if (!$conn) {
            $conn = new mysqli($crossenv['db']['hostname'], $crossenv['db']['username'], $crossenv['db']['password'], $crossenv['db']['database']);
        }
        return $conn;
    }

    function validate_post_data($post_data)
    {
        $conn = $this->conn();

        $sanitized_data = array();
        foreach ($post_data as $key => $value) {
            if (is_string($value)) {
                $sanitized_data[$key] = $conn->real_escape_string(trim(strval($value)));
            } else {
                $sanitized_data[$key] = $value;
            }
        }
        return $sanitized_data;
    }

    function isDataExists($table, $select, $condition)
    {
        $conn = $this->conn();
        $query = "SELECT " . $select . " FROM " . $table . " WHERE " . $condition;
        return ($conn->query($query)->num_rows > 0);
    }

    function getRows($condition, $tableName)
    {
        $conn = $this->conn();
        $sql = !empty($condition) ? "SELECT * FROM $tableName WHERE $condition" : "SELECT * FROM $tableName";
        $result = $conn->query($sql);
        $rows = [];
        if ($result && $result->num_rows > 0) {
            while ($row = $result->fetch_assoc()) {
                $rows[] = $row;
            }
        }
        return $rows;
    }


    function generateRandomNumber($length)
    {
        $randomNumber = '';
        for ($i = 0; $i < $length; $i++) {
            $randomNumber .= mt_rand(0, 9);
        }
        return $randomNumber;
    }

    function base_url($url = null)
    {
        $crossenv = require (__DIR__ . '/../crossenv.php');
        return rtrim($crossenv['base_url'], '/') . strval($url);
    }


    function send_mail($email, $bodytemplate, $subject = 'Login Verification: Your One-Time Password (OTP)', $isattached = null)
    {
        $success = false;
        try {
            $mail = new PHPMailer(true);
            $mail->isSMTP();
            $mail->Host = 'smtp.gmail.com';
            $mail->SMTPAuth = true;
            $mail->Username = 'caballeroaldrin02@gmail.com';
            $mail->Password = 'psfgjxovixwhnjtd';
            $mail->SMTPSecure = 'ssl';
            $mail->Port = 465;
            $mail->setFrom('caballeroaldrin02@gmail.com', 'Booking and Reservation', true);
            $mail->addAddress($email);


            if (isset($isattached) && is_string($isattached)) {
                $mail->addAttachment($isattached);
            }

            $mail->isHTML(true);
            $mail->Subject = $subject;

            // email body template
            $mail->Body = $bodytemplate;

            $mail->send();
            $success = true;
        } catch (Exception $e) {
            $success = false;
        }

        return $success;
    }

    function SendMail($email, $bodytemplate, $subject)
    {
        try {
            $mail = new PHPMailer(true);
            $mail->isSMTP();
            $mail->Host = 'smtp.gmail.com';
            $mail->SMTPAuth = true;
            $mail->Username = 'caballeroaldrin02@gmail.com';
            $mail->Password = 'psfgjxovixwhnjtd';
            $mail->SMTPSecure = 'ssl';
            $mail->Port = 465;
            $mail->setFrom('caballeroaldrin02@gmail.com', 'Booking and Reservation', true);
            $mail->addAddress($email);

            $mail->isHTML(true);
            $mail->Subject = $subject;

            // email body template
            $mail->Body = $bodytemplate;

            $mail->send();
        } catch (Exception $e) {
            return false;
        }
        return true;
    }
}