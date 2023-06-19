<?php
class Flasher
{
    public static function setFlash($message, $type)
    {
        $_SESSION['flasher'] = ['message' => $message,  'type' => $type];
    }


    public static function flash()
    {
        if (isset($_SESSION['flasher'])) {
            echo '<div
            class="mb-4 rounded-lg bg-' . $_SESSION['flasher']['type'] . '-100 px-6 py-5 text-base text-' . $_SESSION['flasher']['type'] . '-700"
            role="alert">
            ' . $_SESSION['flasher']['message'] . '
          </div>';
        }
        unset($_SESSION['flasher']);
    }
}
