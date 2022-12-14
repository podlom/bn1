<?php
/**
 * Created by PhpStorm.
 * User: Тарас
 * Date: 20.12.2016
 * Time: 15:24
 */

namespace app;


class banner
{
    const REF_NAME = 'bn1';

    private $lang;
    private $validLang = ['ru', 'en', 'uk'];

    public function __construct($lang = 'ru')
    {
        if (in_array($lang, $this->validLang)) {
            $this->lang = $lang;
        } else {
            $this->lang = 'ru';
        }
    }

    public function getHeaders()
    {
        if (!headers_sent()) {
            header('Content-Type:text/html; charset=UTF-8');
        }
    }

    public function getBannerHtml()
    {
        $bannerHtml = '';

        switch ($this->lang) {
            case 'en':
                $banners = [
                    '<a href="https://www.shkodenko.com/?ref=' . self::REF_NAME . '">web development blog</a>',
                    '<a href="https://www.shkodenko.com/?ref=' . self::REF_NAME . '">blog about web development</a>',
                    '<a href="https://ip.shkodenko.com/en/your-ip-address/?ref=' . self::REF_NAME . '">get your IP address</a>',
                    '<a href="https://rndpwd.info/?ref=' . self::REF_NAME . '">generate secure random passwords</a>',
                    '<a href="http://www.weblancer.net/?affiliate=sh_taras">www.weblancer.net - amazing place for freelancers</a>',
                    '<a href="http://www.weblancer.net/users/sh_taras/?affiliate=sh_taras">please, look at my profile at www.weblancer.net</a>',
                    '<a href="http://www.weblancer.net/users/sh_taras/portfolio/?affiliate=sh_taras">please, check my portfolio at www.weblancer.net</a>',
                    '<a href="https://freelancehunt.com/r/ow4BA" target="_blank"><img alt="FreelanceHunt.com" src="https://freelancehunt.com/static/images/bonus/en/468/1.png" width="468" height="60"></a>',
                    '<a href="https://freelancehunt.com/r/ow4BA" target="_blank"><img alt="FreelanceHunt.com" src="https://freelancehunt.com/static/images/bonus/en/468/2.png" width="468" height="60"></a>',
                    '<a href="https://freelancehunt.com/r/ow4BA" target="_blank"><img alt="FreelanceHunt.com" src="https://freelancehunt.com/static/images/bonus/en/468/3.png" width="468" height="60"></a>',
                    '<a href="https://freelancehunt.com/r/ow4BA" target="_blank"><img alt="FreelanceHunt.com" src="https://freelancehunt.com/static/images/bonus/en/468/5.png" width="468" height="60"></a>',
                    '<a href="https://freelancehunt.com/r/ow4BA" target="_blank"><img alt="FreelanceHunt.com" src="https://freelancehunt.com/static/images/bonus/en/468/6.png" width="468" height="60"></a>',
                ];
                break;

            case 'uk':
                $banners = [
                    '<a href="https://linuxweb.in/?ref=' . self::REF_NAME . '">блог про ОС Linux</a>',
                    '<a href="https://www.shkodenko.com/?ref=' . self::REF_NAME . '">блог розробника Тараса Шкоденко</a>',
                    '<a href="https://shkodenko.com.ua/tech.html?ref=' . self::REF_NAME . '#cert">сертифікати розробника Тараса Шкоденко</a>',
                    '<a href="https://shkodenko.com.ua/tech.html?ref=' . self::REF_NAME . '#cert">сертифікована розробника сайтів від Тараса Шкоденко</a>',
                    '<a href="https://shkodenko.com.ua/tech.html?ref=' . self::REF_NAME . '#cert">програмування та розробника сайтів від Тараса Шкоденко</a>',
                    '<a href="https://shkodenko.com.ua/tech.html?ref=' . self::REF_NAME . '#cert">програмування та розробника сайтів від сертифікованого розробника</a>',
                    '<a href="https://shkodenko.com.ua/tech.html?ref=' . self::REF_NAME . '#cert">програмування та розробника сайтів від профі</a>',
                    '<a href="https://ip.shkodenko.com/?ref=' . self::REF_NAME . '">ваша IP адреса</a>',
                    '<a href="https://rndpwd.info/?ref=' . self::REF_NAME . '">безпечний генератор випадкових паролей</a>',
                    '<a href="http://www.weblancer.net/?affiliate=sh_taras">www.weblancer.net - чудовий ресурс для підроботки та фрилансу</a>',
                    '<a href="http://www.weblancer.net/users/sh_taras/?affiliate=sh_taras">дивіться мій профіль на сайті www.weblancer.net</a>',
                    '<a href="http://www.weblancer.net/users/sh_taras/portfolio/?affiliate=sh_taras">дивіться моє портфоліо на сайті www.weblancer.net</a>',
                    '<a href="https://freelancehunt.com/r/ow4BA" target="_blank"><img alt="FreelanceHunt.com" src="https://freelancehunt.com/static/images/bonus/ua/468/1.png" width="468" height="60"></a>',
                    '<a href="https://freelancehunt.com/r/ow4BA" target="_blank"><img alt="FreelanceHunt.com" src="https://freelancehunt.com/static/images/bonus/ua/468/2.png" width="468" height="60"></a>',
                    '<a href="https://freelancehunt.com/r/ow4BA" target="_blank"><img alt="FreelanceHunt.com" src="https://freelancehunt.com/static/images/bonus/ua/468/3.png" width="468" height="60"></a>',
                    '<a href="https://freelancehunt.com/r/ow4BA" target="_blank"><img alt="FreelanceHunt.com" src="https://freelancehunt.com/static/images/bonus/ua/468/5.png" width="468" height="60"></a>',
                    '<a href="https://freelancehunt.com/r/ow4BA" target="_blank"><img alt="FreelanceHunt.com" src="https://freelancehunt.com/static/images/bonus/ua/468/6.png" width="468" height="60"></a>',
                    '<a href="https://freelancehunt.com/r/ow4BA" target="_blank"><img alt="FreelanceHunt.com" src="https://freelancehunt.com/static/images/bonus/ua/468/7.png" width="468" height="60"></a>',
                    '<a href="https://www.shkodenko.com.ua/?ref=' . self::REF_NAME . '">програмування та розробка сайтів, Київ</a>',
                    '<a href="https://www.shkodenko.com.ua/?ref=' . self::REF_NAME . '">програмування та розробка сайтів, в Україні</a>',
                    '<a href="https://blog.shkodenko.com.ua/?ref=' . self::REF_NAME . '">блог розробника сайтів</a>',
                    '<a href="https://blog.shkodenko.com.ua/?ref=' . self::REF_NAME . '">цікаві статті про розробку сайтів</a>',
                    '<a href="https://blog.shkodenko.com.ua/category/devops-uk/?ref=' . self::REF_NAME . '">цікаві статті для DevOps</a>',
                    '<a href="https://blog.shkodenko.com.ua/category/devops-uk/?ref=' . self::REF_NAME . '">адміністрування веб серверів та ОС Linux</a>',
                ];
                break;

            case 'ru':
            default:
                $banners = [
                    '<a href="https://linuxweb.in/?ref=' . self::REF_NAME . '">блог про ОС Linux</a>',
                    '<a href="https://shkodenko.com.ua/tech.html?ref=' . self::REF_NAME . '#cert">программирование и разработка сайтов от Тараса Шкоденко</a>',
                    '<a href="https://shkodenko.com.ua/tech.html?ref=' . self::REF_NAME . '#cert">программирование и разработка сайтов от сертифицированного разработчика</a>',
                    '<a href="https://shkodenko.com.ua/tech.html?ref=' . self::REF_NAME . '#cert">программирование и разработка сайтов от профессионала</a>',
                    '<a href="https://www.shkodenko.com/?ref=' . self::REF_NAME . '">блог разработчика Тараса Шкоденко</a>',
                    '<a href="https://rndpwd.info/?ref=' . self::REF_NAME . '">сервис генерации безопасных паролей</a>',
                    '<a href="https://ip.shkodenko.com/ru/%d0%b2%d0%b0%d1%88-ip-%d0%b0%d0%b4%d1%80%d0%b5%d1%81-%d1%80%d1%83%d1%81%d1%81%d0%ba%d0%b8%d0%b9/?ref=' . self::REF_NAME . '">узнать ваш IP адрес</a>',
                    '<a href="https://www.shkodenko.com.ua/?ref=' . self::REF_NAME . '">программирование и разработка сайтов, Киев</a>',
                    '<a href="https://www.shkodenko.com.ua/?ref=' . self::REF_NAME . '">программирование и разработка сайтов, в Украине</a>',
                    '<a href="http://www.weblancer.net/?affiliate=sh_taras">www.weblancer.net - отличный ресурс для подработки и фрилансеров</a>',
                    '<a href="http://www.weblancer.net/users/sh_taras/?affiliate=sh_taras">смотрите мой профиль на сайте www.weblancer.net</a>',
                    '<a href="http://www.weblancer.net/users/sh_taras/portfolio/?affiliate=sh_taras">смотрите мое портфолио на сайте www.weblancer.net</a>',
                    '<a href="https://www.shkodenko.com.ua/?ref=' . self::REF_NAME . '">программирование и создание сайтов любой сложности, Киев</a>',
                    '<a href="https://freelancehunt.com/r/ow4BA" target="_blank"><img alt="FreelanceHunt.com" src="https://freelancehunt.com/static/images/bonus/ru/468/1.png" width="468" height="60"></a>',
                    '<a href="https://freelancehunt.com/r/ow4BA" target="_blank"><img alt="FreelanceHunt.com" src="https://freelancehunt.com/static/images/bonus/ru/468/2.png" width="468" height="60"></a>',
                    '<a href="https://freelancehunt.com/r/ow4BA" target="_blank"><img alt="FreelanceHunt.com" src="https://freelancehunt.com/static/images/bonus/ru/468/3.png" width="468" height="60"></a>',
                    '<a href="https://freelancehunt.com/r/ow4BA" target="_blank"><img alt="FreelanceHunt.com" src="https://freelancehunt.com/static/images/bonus/ru/468/4.png" width="468" height="60"></a>',
                    '<a href="https://freelancehunt.com/r/ow4BA" target="_blank"><img alt="FreelanceHunt.com" src="https://freelancehunt.com/static/images/bonus/ru/468/5.png" width="468" height="60"></a>',
                    '<a href="https://freelancehunt.com/r/ow4BA" target="_blank"><img alt="FreelanceHunt.com" src="https://freelancehunt.com/static/images/bonus/ru/468/6.png" width="468" height="60"></a>',
                    '<a href="https://freelancehunt.com/r/ow4BA" target="_blank"><img alt="FreelanceHunt.com" src="https://freelancehunt.com/static/images/bonus/ru/468/7.png" width="468" height="60"></a>',
                    '<a href="https://www.shkodenko.com.ua/?ref=' . self::REF_NAME . '">создание сайтов на основе Wordpress CMS любой сложности, Киев</a>',
                    '<a href="https://www.shkodenko.com.ua/?ref=' . self::REF_NAME . '">создание сайтов на основе Drupal 7+ любой сложности, Киев</a>',
                    '<a href="https://www.shkodenko.com.ua/?ref=' . self::REF_NAME . '">создание сайтов на основе CMS Joomla! любой сложности, Киев</a>',
                    '<a href="https://www.shkodenko.com.ua/?ref=' . self::REF_NAME . '">создание сайтов на основе Yii2 Framework любой сложности, Киев</a>',
                    '<a href="https://www.shkodenko.com.ua/?ref=' . self::REF_NAME . '">создание сайтов на основе Symfony 4+ Framework любой сложности, Киев</a>',
                    '<a href="https://www.shkodenko.com.ua/?ref=' . self::REF_NAME . '">создание сайтов на PHP любой сложности, Киев</a>',
                    '<a href="https://blog.shkodenko.com.ua/?ref=' . self::REF_NAME . '">блог для разработчика сайтов</a>',
                    '<a href="https://blog.shkodenko.com.ua/?ref=' . self::REF_NAME . '">всякие полезности для разработки сайтов</a>',
                    '<a href="https://blog.shkodenko.com.ua/ru/category/devops-ru/?ref=' . self::REF_NAME . '">всякие полезности для DevOps</a>',
                    '<a href="https://blog.shkodenko.com.ua/ru/category/devops-ru/?ref=' . self::REF_NAME . '">всякие полезности системному администратору</a>',
                    '<a href="https://blog.shkodenko.com.ua/ru/category/devops-ru/?ref=' . self::REF_NAME . '">настройка и администрирование ОС Linux</a>',
                ];
                break;
        }

        if (!empty($banners)) {
            shuffle($banners);
            $bannerHtml = $banners[0];
            return $bannerHtml;
        }

        return $bannerHtml;
    }
}
