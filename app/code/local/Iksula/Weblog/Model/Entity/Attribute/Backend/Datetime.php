<?php

class Iksula_Weblog_Model_Entity_Attribute_Backend_Datetime extends Mage_Eav_Model_Entity_Attribute_Backend_Datetime
{
    const DATETIME_DATEPICKER_FORMAT = 'd/m/Y H:i';

    /**
     * Prepare date for save in DB
     *
     * @param   string | int $date
     * @return  string
     */
    public function formatDate($date)
    {
        if (empty($date)) {
            return null;
        }

        return DateTime::createFromFormat(
            self::DATETIME_DATEPICKER_FORMAT,
            $date,
            new DateTimeZone(Mage::app()->getStore()->getConfig(Mage_Core_Model_Locale::XML_PATH_DEFAULT_TIMEZONE))
        )->format(Varien_Date::DATETIME_PHP_FORMAT);
    }
