<?php

class clsLoad {
    public static function getArrayLangs() {
        return array(
            'sr_rs' => (object) array(
                'short'   => 'sr',
                'icon'    => '',
                'long'    => 'Srpski',
                'country' => 'SRB'
            ),
            'en'    => (object) array(
                'short'   => 'en',
                'icon'    => '',
                'long'    => 'English',
                'country' => 'EN'
            ),
            /* 'de'    => (object) array(
              'short'   => 'de',
              'icon'    => '',
              'long'    => Yii::t('default', 'German'),
              'country' => 'DE'
              ),
              'it'    => (object) array(
              'short'   => 'it',
              'icon'    => '',
              'long'    => Yii::t('default', 'Italian'),
              'country' => 'IT'
              ),
              'es'    => (object) array(
              'short'   => 'es',
              'icon'    => '',
              'long'    => Yii::t('default', 'Spanish'),
              'country' => 'ES'
              ),
              'ru'    => (object) array(
              'short'   => 'ru',
              'icon'    => '',
              'long'    => Yii::t('default', 'Russian'),
              'country' => 'RU'
              ),
              'sq'    => (object) array(
              'short'   => 'sq',
              'icon'    => '',
              'long'    => Yii::t('default', 'Albanian'),
              'country' => 'SQ'
              ),
              'hu'    => (object) array(
              'short'   => 'hu',
              'icon'    => '',
              'long'    => Yii::t('default', 'Hungarian'),
              'country' => 'HU'
              ),
              'bg'    => (object) array(
              'short'   => 'bg',
              'icon'    => '',
              'long'    => Yii::t('default', 'Bulgarian'),
              'country' => 'BG'
              ),
              'cn'    => (object) array(
              'short'   => 'zh-CN',
              'icon'    => '',
              'long'    => Yii::t('default', 'Chinese (Simplified)'),
              'country' => 'CN'
              ),
              'ar'    => (object) array(
              'short'   => 'ar',
              'icon'    => '',
              'long'    => Yii::t('default', 'Arabic'),
              'country' => 'AR'
              ), */
        );
    }

    public static function getSelectedLang() {
        return 'sr_rs';
    }
}