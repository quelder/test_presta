<?php

use Twig\Environment;
use Twig\Error\LoaderError;
use Twig\Error\RuntimeError;
use Twig\Markup;
use Twig\Sandbox\SecurityError;
use Twig\Sandbox\SecurityNotAllowedTagError;
use Twig\Sandbox\SecurityNotAllowedFilterError;
use Twig\Sandbox\SecurityNotAllowedFunctionError;
use Twig\Source;
use Twig\Template;

/* __string_template__d206d11abd8a1a587dc2e041855353ac9be8949a2b72d7b3f457b560d265e5a5 */
class __TwigTemplate_e0ab2bb2ddfd9673f648344b739a362c172de9170dffc06b9f9d4b7649bf58db extends \Twig\Template
{
    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = [
            'stylesheets' => [$this, 'block_stylesheets'],
            'extra_stylesheets' => [$this, 'block_extra_stylesheets'],
            'content_header' => [$this, 'block_content_header'],
            'content' => [$this, 'block_content'],
            'content_footer' => [$this, 'block_content_footer'],
            'sidebar_right' => [$this, 'block_sidebar_right'],
            'javascripts' => [$this, 'block_javascripts'],
            'extra_javascripts' => [$this, 'block_extra_javascripts'],
            'translate_javascripts' => [$this, 'block_translate_javascripts'],
        ];
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        // line 1
        echo "<!DOCTYPE html>
<html lang=\"uk\">
<head>
  <meta charset=\"utf-8\">
<meta name=\"viewport\" content=\"width=device-width, initial-scale=1\">
<meta name=\"apple-mobile-web-app-capable\" content=\"yes\">
<meta name=\"robots\" content=\"NOFOLLOW, NOINDEX\">

<link rel=\"icon\" type=\"image/x-icon\" href=\"/img/favicon.ico\" />
<link rel=\"apple-touch-icon\" href=\"/img/app_icon.png\" />

<title>Менеджер модулів • test_kalinichev</title>

  <script type=\"text/javascript\">
    var help_class_name = 'AdminModulesManage';
    var iso_user = 'uk';
    var lang_is_rtl = '0';
    var full_language_code = 'uk';
    var full_cldr_language_code = 'uk-UA';
    var country_iso_code = 'UA';
    var _PS_VERSION_ = '1.7.8.8';
    var roundMode = 2;
    var youEditFieldFor = '';
        var new_order_msg = 'У магазині нове замовленя';
    var order_number_msg = 'Номер замовлення: ';
    var total_msg = 'Всього ';
    var from_msg = 'Від: ';
    var see_order_msg = 'Переглянути цей замовлення';
    var new_customer_msg = 'Новий покупець зареєструвався в Вашому магазині.';
    var customer_name_msg = 'Ім\\'я клієнта: ';
    var new_msg = 'Нові повідомлення у вашому магазині.';
    var see_msg = 'Прочитати повідомлення';
    var token = '02f5c91df858f1868c7d001f61492bfc';
    var token_admin_orders = tokenAdminOrders = 'b2b0f83936e57a346ae86825e7285083';
    var token_admin_customers = '526fd35779e020bd9aacf9628801d805';
    var token_admin_customer_threads = tokenAdminCustomerThreads = '965c41d2c8544ea6fd9030c9030e727f';
    var currentIndex = 'index.php?controller=AdminModulesManage';
    var employee_token = '9b3bb6bc7725502c78207c7b99aa8252';
    var choose_language_translate = 'Виберіть мову:';
    var default_language = '1';
    var admin_modules_link = '/admin923iptioh/index.php/improve/modules/catalog/reco";
        // line 41
        echo "mmended?_token=aUD5FrdIHGea_F122v5QGs52kTU8aO9l_R9nrssGmUk';
    var admin_notification_get_link = '/admin923iptioh/index.php/common/notifications?_token=aUD5FrdIHGea_F122v5QGs52kTU8aO9l_R9nrssGmUk';
    var admin_notification_push_link = adminNotificationPushLink = '/admin923iptioh/index.php/common/notifications/ack?_token=aUD5FrdIHGea_F122v5QGs52kTU8aO9l_R9nrssGmUk';
    var tab_modules_list = '';
    var update_success_msg = 'Успішно оновлено';
    var errorLogin = 'ПрестаШоп не може увійти в Додатки. Будь ласка, перевірте свої дані та ваше інтернет-з\\'єднання.';
    var search_product_msg = 'Пошук товару';
  </script>

      <link href=\"/admin923iptioh/themes/new-theme/public/theme.css\" rel=\"stylesheet\" type=\"text/css\"/>
      <link href=\"/js/jquery/plugins/chosen/jquery.chosen.css\" rel=\"stylesheet\" type=\"text/css\"/>
      <link href=\"/js/jquery/plugins/fancybox/jquery.fancybox.css\" rel=\"stylesheet\" type=\"text/css\"/>
      <link href=\"/modules/blockwishlist/public/backoffice.css\" rel=\"stylesheet\" type=\"text/css\"/>
      <link href=\"/admin923iptioh/themes/default/css/vendor/nv.d3.css\" rel=\"stylesheet\" type=\"text/css\"/>
      <link href=\"/modules/gamification/views/css/gamification.css\" rel=\"stylesheet\" type=\"text/css\"/>
      <link href=\"/modules/ps_mbo/views/css/catalog.css?v=2.2.1\" rel=\"stylesheet\" type=\"text/css\"/>
      <link href=\"/modules/ps_facebook/views/css/admin/menu.css\" rel=\"stylesheet\" type=\"text/css\"/>
      <link href=\"/modules/psxmarketingwithgoogle/views/css/admin/menu.css\" rel=\"stylesheet\" type=\"text/css\"/>
  
  <script type=\"text/javascript\">
var baseAdminDir = \"\\/admin923iptioh\\/\";
var baseDir = \"\\/\";
var changeFormLanguageUrl = \"\\/admin923iptioh\\/index.php\\/configure\\/advanced\\/employees\\/change-form-language?_token=aUD5FrdIHGea_F122v5QGs52kTU8aO9l_R9nrssGmUk\";
var currency = {\"iso_code\":\"UAH\",\"sign\":\"\\u20b4\",\"name\":\"\\u0423\\u043a\\u0440\\u0430";
        // line 64
        echo "\\u0457\\u043d\\u0441\\u044c\\u043a\\u0430 \\u0433\\u0440\\u0438\\u0432\\u043d\\u044f\",\"format\":null};
var currency_specifications = {\"symbol\":[\",\",\"\\u00a0\",\";\",\"%\",\"-\",\"+\",\"\\u0415\",\"\\u00d7\",\"\\u2030\",\"\\u221e\",\"NaN\"],\"currencyCode\":\"UAH\",\"currencySymbol\":\"\\u20b4\",\"numberSymbols\":[\",\",\"\\u00a0\",\";\",\"%\",\"-\",\"+\",\"\\u0415\",\"\\u00d7\",\"\\u2030\",\"\\u221e\",\"NaN\"],\"positivePattern\":\"#,##0.00\\u00a0\\u00a4\",\"negativePattern\":\"-#,##0.00\\u00a0\\u00a4\",\"maxFractionDigits\":2,\"minFractionDigits\":2,\"groupingUsed\":true,\"primaryGroupSize\":3,\"secondaryGroupSize\":3};
var host_mode = false;
var number_specifications = {\"symbol\":[\",\",\"\\u00a0\",\";\",\"%\",\"-\",\"+\",\"\\u0415\",\"\\u00d7\",\"\\u2030\",\"\\u221e\",\"NaN\"],\"numberSymbols\":[\",\",\"\\u00a0\",\";\",\"%\",\"-\",\"+\",\"\\u0415\",\"\\u00d7\",\"\\u2030\",\"\\u221e\",\"NaN\"],\"positivePattern\":\"#,##0.###\",\"negativePattern\":\"-#,##0.###\",\"maxFractionDigits\":3,\"minFractionDigits\":0,\"groupingUsed\":true,\"primaryGroupSize\":3,\"secondaryGroupSize\":3};
var prestashop = {\"debug\":false};
var show_new_customers = \"1\";
var show_new_messages = \"1\";
var show_new_orders = \"1\";
</script>
<script type=\"text/javascript\" src=\"/admin923iptioh/themes/new-theme/public/main.bundle.js\"></script>
<script type=\"text/javascript\" src=\"/js/jquery/plugins/jquery.chosen.js\"></script>
<script type=\"text/javascript\" src=\"/js/jquery/plugins/fancybox/jquery.fancybox.js\"></script>
<script type=\"text/javascript\" src=\"/js/admin.js?v=1.7.8.8\"></script>
<script type=\"text/javascript\" src=\"/admin923iptioh/themes/new-theme/public/cldr.bundle.js\"></script>
<script type=\"text/javascript\" src=\"/js/tools.js?v=1.7.8.8\"></script>
<script type=\"text/javascript\" src=\"/modules/blockwishlist/public/vendors.js\"></script>
<script type=\"text/javascript\" src=\"/js/vendor/d3.v3.min.js\"></script>
<script type=\"text/javascript\" src=\"/admin923iptioh/themes/default/js/vendor/nv.d3.min.js\"></script>
<script type=\"text/javascript\" src=\"/modules/gamification/views/js/gamification_bt.js\"></script>
<script type=\"text/javascript\" src=\"/modules/ps_mbo/views/js/reco";
        // line 83
        echo "mmended-modules.js?v=2.2.1\"></script>
<script type=\"text/javascript\" src=\"/modules/ps_faviconnotificationbo/views/js/favico.js\"></script>
<script type=\"text/javascript\" src=\"/modules/ps_faviconnotificationbo/views/js/ps_faviconnotificationbo.js\"></script>

  <script>
  if (undefined !== ps_faviconnotificationbo) {
    ps_faviconnotificationbo.initialize({
      backgroundColor: '#DF0067',
      textColor: '#FFFFFF',
      notificationGetUrl: '/admin923iptioh/index.php/common/notifications?_token=aUD5FrdIHGea_F122v5QGs52kTU8aO9l_R9nrssGmUk',
      CHECKBOX_ORDER: 1,
      CHECKBOX_CUSTOMER: 1,
      CHECKBOX_MESSAGE: 1,
      timer: 120000, // Refresh every 2 minutes
    });
  }
</script>
<script>
            var admin_gamification_ajax_url = \"http:\\/\\/localhost\\/admin923iptioh\\/index.php?controller=AdminGamification&token=b2310b76ae06dbab93b84edd01c6f989\";
            var current_id_tab = 45;
        </script>

";
        // line 105
        $this->displayBlock('stylesheets', $context, $blocks);
        $this->displayBlock('extra_stylesheets', $context, $blocks);
        echo "</head>";
        echo "

<body
  class=\"lang-uk adminmodulesmanage\"
  data-base-url=\"/admin923iptioh/index.php\"  data-token=\"aUD5FrdIHGea_F122v5QGs52kTU8aO9l_R9nrssGmUk\">

  <header id=\"header\" class=\"d-print-none\">

    <nav id=\"header_infos\" class=\"main-header\">
      <button class=\"btn btn-primary-reverse onclick btn-lg unbind ajax-spinner\"></button>

            <i class=\"material-icons js-mobile-menu\">menu</i>
      <a id=\"header_logo\" class=\"logo float-left\" href=\"http://localhost/admin923iptioh/index.php?controller=AdminDashboard&amp;token=f7ef2e878254f43c6924436c4d1d3eee\"></a>
      <span id=\"shop_version\">1.7.8.8</span>

      <div class=\"component\" id=\"quick-access-container\">
        <div class=\"dropdown quick-accesses\">
  <button class=\"btn btn-link btn-sm dropdown-toggle\" type=\"button\" data-toggle=\"dropdown\" aria-haspopup=\"true\" aria-expanded=\"false\" id=\"quick_select\">
    Швидкий доступ
  </button>
  <div class=\"dropdown-menu\">
          <a class=\"dropdown-item quick-row-link active\"
         href=\"http://localhost/admin923iptioh/index.php/improve/modules/manage?token=f60e41203740db3015d8a7b257ed6a5c\"
                 data-item=\"Встановлені модулі\"
      >Встановлені модулі</a>
          <a class=\"dropdown-item quick-row-link\"
         href=\"http://localhost/admin923iptioh/index.php?controller=AdminOrders&amp;token=b2b0f83936e57a346ae86825e7285083\"
                 data-item=\"Замовлення\"
      >Замовлення</a>
          <a class=\"dropdown-item quick-row-link\"
         href=\"http://localhost/admin923iptioh/index.php/sell/catalog/categories/new?token=f60e41203740db3015d8a7b257ed6a5c\"
                 data-item=\"Нова категорія\"
      >Нова категорія</a>
          <a class=\"dropdown-item quick-row-link\"
         href=\"http://localhost/admin923iptioh/index.php?controller=AdminCartRules&amp;addcart_rule&amp;token=3347c6a6a469bde5d6ee900783454d0f\"
                 data-item=\"Новий ку�";
        // line 140
        echo "�он\"
      >Новий купон</a>
          <a class=\"dropdown-item quick-row-link\"
         href=\"http://localhost/admin923iptioh/index.php/sell/catalog/products/new?token=f60e41203740db3015d8a7b257ed6a5c\"
                 data-item=\"Новий товар\"
      >Новий товар</a>
          <a class=\"dropdown-item quick-row-link\"
         href=\"http://localhost/admin923iptioh/index.php?controller=AdminStats&amp;module=statscheckup&amp;token=88e8def19e3b0f6bea7ad9a4c590a522\"
                 data-item=\"Оцінка каталогу\"
      >Оцінка каталогу</a>
        <div class=\"dropdown-divider\"></div>
          <a id=\"quick-remove-link\"
        class=\"dropdown-item js-quick-link\"
        href=\"#\"
        data-method=\"remove\"
        data-quicklink-id=\"5\"
        data-rand=\"25\"
        data-icon=\"icon-AdminModulesSf\"
        data-url=\"index.php/improve/modules/manage\"
        data-post-link=\"http://localhost/admin923iptioh/index.php?controller=AdminQuickAccesses&token=cd73b4fddf09feba181a50cdac3ab8e1\"
        data-prompt-text=\"Назвіть цей ярлик:\"
        data-link=\"Модулі - Список\"
      >
        <i class=\"material-icons\">remove_circle_outline</i>
        Видалити з Швидкий Доступ
      </a>
        <a id=\"quick-manage-link\" class=\"dropdown-item\" href=\"http://localhost/admin923iptioh/index.php?controller=AdminQuickAccesses&token=cd73b4fddf09feba181a50cdac3ab8e1\">
      <i class=\"material-icons\">settings</i>
      Керувати швидким доступом
    </a>
  </div>
</div>
      </div>
      <div class=\"component\" id=\"header-search-container\">
        <form id=\"header_search\"
      class=\"bo_search_form dropdown-form js-dropdown-form collapsed\"
      method=\"post\"
      action=\"/admin923iptioh/index.php?controller=AdminSearch&amp;token=c4919b450f0e68a9dd36041bec5fd847\"
      role=\"search\">
  <input type=\"hidden\" name=\"bo_search_type\" id=\"bo_search_type\" class=\"js-search-type\"";
        // line 179
        echo " />
    <div class=\"input-group\">
    <input type=\"text\" class=\"form-control js-form-search\" id=\"bo_query\" name=\"bo_query\" value=\"\" placeholder=\"Пошук (наприклад, артикул товару, ім'я клієнта тощо)\" aria-label=\"Пошукова панель\">
    <div class=\"input-group-append\">
      <button type=\"button\" class=\"btn btn-outline-secondary dropdown-toggle js-dropdown-toggle\" data-toggle=\"dropdown\" aria-haspopup=\"true\" aria-expanded=\"false\">
        скрізь
      </button>
      <div class=\"dropdown-menu js-items-list\">
        <a class=\"dropdown-item\" data-item=\"скрізь\" href=\"#\" data-value=\"0\" data-placeholder=\"Що ви шукаєте?\" data-icon=\"icon-search\"><i class=\"material-icons\">search</i> скрізь</a>
        <div class=\"dropdown-divider\"></div>
        <a class=\"dropdown-item\" data-item=\"Каталог\" href=\"#\" data-value=\"1\" data-placeholder=\"Назва товару, артикул тощо.\" data-icon=\"icon-book\"><i class=\"material-icons\">store_mall_directory</i> Каталог</a>
        <a class=\"dropdown-item\" data-item=\"Клієнти за назвою\" href=\"#\" data-value=\"2\" data-placeholder=\"Назва\" data-icon=\"icon-group\"><i class=\"material-icons\">group</i> Клієнти за назвою</a>
        <a class=\"dropdown-item\" data-item=\"Клієнти за ір-адресою\" href=\"#\" data-value=\"6\" data-placeholder=\"123.45.67.89\" data-icon=\"icon-desktop\"><i class=\"material-icons\">desktop_mac</i> Клієнти за IP-адресою</a>
        <a class=\"dropdown-item\" data-item=\"Замовлення\" href=\"#\" data-value=\"3\" data-placeholder=\"№ замовлення\" data-icon=\"icon-credit-card\"><i class=\"material-icons\">shopping_basket</i> Замовлення</a>
        <a class=\"dropdown-item\" data-item=\"Рахунки\" href=\"#\" data-value=\"4\" data-placeholder=\"Номер рахунку\" data-icon=\"icon-book\"><i class=\"material-icons\">book</i> Рахунки</a>
        <a class=\"";
        // line 194
        echo "dropdown-item\" data-item=\"Кошики\" href=\"#\" data-value=\"5\" data-placeholder=\"ID кошика\" data-icon=\"icon-shopping-cart\"><i class=\"material-icons\">shopping_cart</i> Кошики</a>
        <a class=\"dropdown-item\" data-item=\"Модулі\" href=\"#\" data-value=\"7\" data-placeholder=\"Назва модулю\" data-icon=\"icon-puzzle-piece\"><i class=\"material-icons\">extension</i> Модулі</a>
      </div>
      <button class=\"btn btn-primary\" type=\"submit\"><span class=\"d-none\">ПОШУК</span><i class=\"material-icons\">search</i></button>
    </div>
  </div>
</form>

<script type=\"text/javascript\">
 \$(document).ready(function(){
    \$('#bo_query').one('click', function() {
    \$(this).closest('form').removeClass('collapsed');
  });
});
</script>
      </div>

      
      
              <div class=\"component\" id=\"header-shop-list-container\">
            <div class=\"shop-list\">
    <a class=\"link\" id=\"header_shopname\" href=\"http://localhost/\" target= \"_blank\">
      <i class=\"material-icons\">visibility</i>
      <span>Перейти до магазину</span>
    </a>
  </div>
        </div>
                    <div class=\"component header-right-component\" id=\"header-notifications-container\">
          <div id=\"notif\" class=\"notification-center dropdown dropdown-clickable\">
  <button class=\"btn notification js-notification dropdown-toggle\" data-toggle=\"dropdown\">
    <i class=\"material-icons\">notifications_none</i>
    <span id=\"notifications-total\" class=\"count hide\">0</span>
  </button>
  <div class=\"dropdown-menu dropdown-menu-right js-notifs_dropdown\">
    <div class=\"notifications\">
      <ul class=\"nav nav-tabs\" role=\"tablist\">
                          <li class=\"nav-item\">
            <a
              class=\"nav-link active\"
              id=\"orders-tab\"
              data-toggle=\"tab\"
              data-type=\"order\"
              href=\"#orders-notifications\"
              role=\"tab\"
            >
              Замовлення<span id=\"_nb_new_o";
        // line 239
        echo "rders_\"></span>
            </a>
          </li>
                                    <li class=\"nav-item\">
            <a
              class=\"nav-link \"
              id=\"customers-tab\"
              data-toggle=\"tab\"
              data-type=\"customer\"
              href=\"#customers-notifications\"
              role=\"tab\"
            >
              Клієнти<span id=\"_nb_new_customers_\"></span>
            </a>
          </li>
                                    <li class=\"nav-item\">
            <a
              class=\"nav-link \"
              id=\"messages-tab\"
              data-toggle=\"tab\"
              data-type=\"customer_message\"
              href=\"#messages-notifications\"
              role=\"tab\"
            >
              Повідомлення<span id=\"_nb_new_messages_\"></span>
            </a>
          </li>
                        </ul>

      <!-- Tab panes -->
      <div class=\"tab-content\">
                          <div class=\"tab-pane active empty\" id=\"orders-notifications\" role=\"tabpanel\">
            <p class=\"no-notification\">
              Немає нових замовлень :(<br>
              Ви перевірили <strong><a href=\"http://localhost/admin923iptioh/index.php?controller=AdminCarts&action=filterOnlyAbandonedCarts&token=1507c42ae110a4d3c79f8af884f5fb33\">покинуті кошики</a></strong>? <br>Там може ховатися ваше наступне замовлення!
            </p>
            <div class=\"notification-elements\"></div>
          </div>
                                    <div class=\"tab-pane  empty\" id=\"customers-notifications\" role=\"tabpanel\">
            <p class=\"no-notification\">
              Немає нових покупців :(<br>
              Ви користуєтесь соціальними мережами?
            </p>
            <div class=\"notification-elements\"></div>
          </div>
                                    <div class=\"tab-pane  empty\" id=\"m";
        // line 284
        echo "essages-notifications\" role=\"tabpanel\">
            <p class=\"no-notification\">
              Немає нових повідомлень.<br>
              Схоже, всі клієнти щасливі :)
            </p>
            <div class=\"notification-elements\"></div>
          </div>
                        </div>
    </div>
  </div>
</div>

  <script type=\"text/html\" id=\"order-notification-template\">
    <a class=\"notif\" href='order_url'>
      #_id_order_ -
      від <strong>_customer_name_</strong> (_iso_code_)_carrier_
      <strong class=\"float-sm-right\">_total_paid_</strong>
    </a>
  </script>

  <script type=\"text/html\" id=\"customer-notification-template\">
    <a class=\"notif\" href='customer_url'>
      #_id_customer_ - <strong>_customer_name_</strong>_company_ - зареєстрований <strong>_date_add_</strong>
    </a>
  </script>

  <script type=\"text/html\" id=\"message-notification-template\">
    <a class=\"notif\" href='message_url'>
    <span class=\"message-notification-status _status_\">
      <i class=\"material-icons\">fiber_manual_record</i> _status_
    </span>
      - <strong>_customer_name_</strong> (_company_) - <i class=\"material-icons\">access_time</i> _date_add_
    </a>
  </script>
        </div>
      
      <div class=\"component\" id=\"header-employee-container\">
        <div class=\"dropdown employee-dropdown\">
  <div class=\"rounded-circle person\" data-toggle=\"dropdown\">
    <i class=\"material-icons\">account_circle</i>
  </div>
  <div class=\"dropdown-menu dropdown-menu-right\">
    <div class=\"employee-wrapper-avatar\">

      <span class=\"employee-avatar\"><img class=\"avatar rounded-circle\" src=\"https://localhost/img/pr/default.jpg\" /></span>
      <span class=\"employee_profile\">Вітаємо з поверненням, Ivan</span>
      <a class=\"dropdown-item employee-link profile-link\" href=\"/admin923iptioh/index.php/configure/advanced/employees/1/edit?_token=aUD5FrdIHGea_F122v5QGs52kTU8aO9l_R9nrssGmUk\">
      <i class=\"ma";
        // line 331
        echo "terial-icons\">edit</i>
      <span>Ваш профіль</span>
    </a>
    </div>

    <p class=\"divider\"></p>
    <a class=\"dropdown-item\" href=\"https://www.prestashop.com/en/resources/documentations?utm_source=back-office&amp;utm_medium=profile&amp;utm_campaign=resources-en&amp;utm_content=download17\" target=\"_blank\" rel=\"noreferrer\"><i class=\"material-icons\">book</i> Ресурси</a>
    <a class=\"dropdown-item\" href=\"https://www.prestashop.com/en/training?utm_source=back-office&amp;utm_medium=profile&amp;utm_campaign=training-en&amp;utm_content=download17\" target=\"_blank\" rel=\"noreferrer\"><i class=\"material-icons\">school</i> Навчання</a>
    <a class=\"dropdown-item\" href=\"https://www.prestashop.com/en/experts?utm_source=back-office&amp;utm_medium=profile&amp;utm_campaign=expert-en&amp;utm_content=download17\" target=\"_blank\" rel=\"noreferrer\"><i class=\"material-icons\">person_pin_circle</i> Знайти експерта</a>
    <a class=\"dropdown-item\" href=\"https://addons.prestashop.com?utm_source=back-office&amp;utm_medium=profile&amp;utm_campaign=addons-en&amp;utm_content=download17\" target=\"_blank\" rel=\"noreferrer\"><i class=\"material-icons\">extension</i> Магазин PrestaShop</a>
    <a class=\"dropdown-item\" href=\"https://www.prestashop.com/en/contact?utm_source=back-office&amp;utm_medium=profile&amp;utm_campaign=help-center-en&amp;utm_content=download17\" target=\"_blank\" rel=\"noreferrer\"><i class=\"material-icons\">help</i> Довідковий центр</a>
    <p class=\"divider\"></p>
    <a class=\"dropdown-item employee-link text-center\" id=\"header_logout\" href=\"http://localhost/admin923iptioh/index.php?controller=AdminLogin&amp;logout=1&amp;token=0adc398189964a6f7de8b9848075fe01\">
      <i class=\"material-icons d-lg-none\">power_settings_new</i>
      <span>Вийти</span>
    </a>
  </div>
</div>
      </div>
          </nav>
  </header>

  <nav class=\"nav-bar d-none d-print-none d-md-block\">
  <span class=\"menu-collapse\" data-toggle-url=\"/a";
        // line 354
        echo "dmin923iptioh/index.php/configure/advanced/employees/toggle-navigation?_token=aUD5FrdIHGea_F122v5QGs52kTU8aO9l_R9nrssGmUk\">
    <i class=\"material-icons\">chevron_left</i>
    <i class=\"material-icons\">chevron_left</i>
  </span>

  <div class=\"nav-bar-overflow\">
      <ul class=\"main-menu\">
              
                    
                    
          
            <li class=\"link-levelone\" data-submenu=\"1\" id=\"tab-AdminDashboard\">
              <a href=\"http://localhost/admin923iptioh/index.php?controller=AdminDashboard&amp;token=f7ef2e878254f43c6924436c4d1d3eee\" class=\"link\" >
                <i class=\"material-icons\">trending_up</i> <span>Інформаційна панель</span>
              </a>
            </li>

          
                      
                                          
                    
          
            <li class=\"category-title\" data-submenu=\"2\" id=\"tab-SELL\">
                <span class=\"title\">Продажі</span>
            </li>

                              
                  
                                                      
                  
                  <li class=\"link-levelone has_submenu\" data-submenu=\"3\" id=\"subtab-AdminParentOrders\">
                    <a href=\"/admin923iptioh/index.php/sell/orders/?_token=aUD5FrdIHGea_F122v5QGs52kTU8aO9l_R9nrssGmUk\" class=\"link\">
                      <i class=\"material-icons mi-shopping_basket\">shopping_basket</i>
                      <span>
                      Замовлення
                      </span>
                                                    <i class=\"material-icons sub-tabs-arrow\">
                                                                    keyboard_arrow_down
                                                            </i>
                                            </a>
                                              <ul id=\"collapse-3\" class=\"submenu panel-collapse\">
                                                      
       ";
        // line 396
        echo "                       
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"4\" id=\"subtab-AdminOrders\">
                                <a href=\"/admin923iptioh/index.php/sell/orders/?_token=aUD5FrdIHGea_F122v5QGs52kTU8aO9l_R9nrssGmUk\" class=\"link\"> Замовлення
                                </a>
                              </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"5\" id=\"subtab-AdminInvoices\">
                                <a href=\"/admin923iptioh/index.php/sell/orders/invoices/?_token=aUD5FrdIHGea_F122v5QGs52kTU8aO9l_R9nrssGmUk\" class=\"link\"> Рахунки
                                </a>
                              </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"6\" id=\"subtab-AdminSlip\">
                                <a href=\"/admin923iptioh/index.php/sell/orders/credit-slips/?_token=aUD5FrdIHGea_F122v5QGs52kTU8aO9l_R9nrssGmUk\" class=\"link\"> Кредитні квитанції
                                </a>
                              </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"7\" id=\"subtab-AdminDeliverySlip\">
                                <a href=\"/admin923iptioh/index.php/sell/orders/delivery-slips/?_token=aUD5FrdIHGea_F122v5QGs52kTU8aO9l_R9nrssGmUk\" class=\"link\"> Транспортні накладні
                                </a>
";
        // line 425
        echo "                              </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"8\" id=\"subtab-AdminCarts\">
                                <a href=\"http://localhost/admin923iptioh/index.php?controller=AdminCarts&amp;token=1507c42ae110a4d3c79f8af884f5fb33\" class=\"link\"> Кошики покупців
                                </a>
                              </li>

                                                                              </ul>
                                        </li>
                                              
                  
                                                      
                  
                  <li class=\"link-levelone has_submenu\" data-submenu=\"9\" id=\"subtab-AdminCatalog\">
                    <a href=\"/admin923iptioh/index.php/sell/catalog/products?_token=aUD5FrdIHGea_F122v5QGs52kTU8aO9l_R9nrssGmUk\" class=\"link\">
                      <i class=\"material-icons mi-store\">store</i>
                      <span>
                      Каталог
                      </span>
                                                    <i class=\"material-icons sub-tabs-arrow\">
                                                                    keyboard_arrow_down
                                                            </i>
                                            </a>
                                              <ul id=\"collapse-9\" class=\"submenu panel-collapse\">
                                                      
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"10\" id=\"subtab-AdminProducts\">
                                <a href=\"/admin923iptioh/index.php/sell/catalog/products?_token=aUD5FrdIHGe";
        // line 456
        echo "a_F122v5QGs52kTU8aO9l_R9nrssGmUk\" class=\"link\"> Товари
                                </a>
                              </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"11\" id=\"subtab-AdminCategories\">
                                <a href=\"/admin923iptioh/index.php/sell/catalog/categories?_token=aUD5FrdIHGea_F122v5QGs52kTU8aO9l_R9nrssGmUk\" class=\"link\"> Категорії
                                </a>
                              </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"12\" id=\"subtab-AdminTracking\">
                                <a href=\"/admin923iptioh/index.php/sell/catalog/monitoring/?_token=aUD5FrdIHGea_F122v5QGs52kTU8aO9l_R9nrssGmUk\" class=\"link\"> Моніторинг
                                </a>
                              </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"13\" id=\"subtab-AdminParentAttributesGroups\">
                                <a href=\"http://localhost/admin923iptioh/index.php?controller=AdminAttributesGroups&amp;token=53829a705d6a74ef0021ad2cffe0d4c5\" class=\"link\"> Атрибути, Характеристики
                                </a>
                              </li>

                                                                                  
                              
                                                            
                              <li class=\"link-le";
        // line 487
        echo "veltwo\" data-submenu=\"16\" id=\"subtab-AdminParentManufacturers\">
                                <a href=\"/admin923iptioh/index.php/sell/catalog/brands/?_token=aUD5FrdIHGea_F122v5QGs52kTU8aO9l_R9nrssGmUk\" class=\"link\"> Бренди, Постачальники
                                </a>
                              </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"19\" id=\"subtab-AdminAttachments\">
                                <a href=\"/admin923iptioh/index.php/sell/attachments/?_token=aUD5FrdIHGea_F122v5QGs52kTU8aO9l_R9nrssGmUk\" class=\"link\"> Файли
                                </a>
                              </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"20\" id=\"subtab-AdminParentCartRules\">
                                <a href=\"http://localhost/admin923iptioh/index.php?controller=AdminCartRules&amp;token=3347c6a6a469bde5d6ee900783454d0f\" class=\"link\"> Знижки
                                </a>
                              </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"23\" id=\"subtab-AdminStockManagement\">
                                <a href=\"/admin923iptioh/index.php/sell/stocks/?_token=aUD5FrdIHGea_F122v5QGs52kTU8aO9l_R9nrssGmUk\" class=\"link\"> Керування складом
                                </a>
                              </li>

                                                                              ";
        // line 516
        echo "</ul>
                                        </li>
                                              
                  
                                                      
                  
                  <li class=\"link-levelone has_submenu\" data-submenu=\"24\" id=\"subtab-AdminParentCustomer\">
                    <a href=\"/admin923iptioh/index.php/sell/customers/?_token=aUD5FrdIHGea_F122v5QGs52kTU8aO9l_R9nrssGmUk\" class=\"link\">
                      <i class=\"material-icons mi-account_circle\">account_circle</i>
                      <span>
                      Клієнти
                      </span>
                                                    <i class=\"material-icons sub-tabs-arrow\">
                                                                    keyboard_arrow_down
                                                            </i>
                                            </a>
                                              <ul id=\"collapse-24\" class=\"submenu panel-collapse\">
                                                      
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"25\" id=\"subtab-AdminCustomers\">
                                <a href=\"/admin923iptioh/index.php/sell/customers/?_token=aUD5FrdIHGea_F122v5QGs52kTU8aO9l_R9nrssGmUk\" class=\"link\"> Клієнти
                                </a>
                              </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"26\" id=\"subtab-AdminAddresses\">
                                <a href=\"/admin923iptioh/index.php/sell/addresses/?_token=aUD5FrdIHGea_F122v5QGs52kTU8aO9l_R9nrssGmUk\" class=\"link\"> Адреси
                                </a>
                         ";
        // line 547
        echo "     </li>

                                                                                                                                    </ul>
                                        </li>
                                              
                  
                                                      
                  
                  <li class=\"link-levelone has_submenu\" data-submenu=\"28\" id=\"subtab-AdminParentCustomerThreads\">
                    <a href=\"http://localhost/admin923iptioh/index.php?controller=AdminCustomerThreads&amp;token=965c41d2c8544ea6fd9030c9030e727f\" class=\"link\">
                      <i class=\"material-icons mi-chat\">chat</i>
                      <span>
                      Служба підтримки
                      </span>
                                                    <i class=\"material-icons sub-tabs-arrow\">
                                                                    keyboard_arrow_down
                                                            </i>
                                            </a>
                                              <ul id=\"collapse-28\" class=\"submenu panel-collapse\">
                                                      
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"29\" id=\"subtab-AdminCustomerThreads\">
                                <a href=\"http://localhost/admin923iptioh/index.php?controller=AdminCustomerThreads&amp;token=965c41d2c8544ea6fd9030c9030e727f\" class=\"link\"> Служба підтримки
                                </a>
                              </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"30\" id=\"subtab-AdminOrderMessage\">
  ";
        // line 578
        echo "                              <a href=\"/admin923iptioh/index.php/sell/customer-service/order-messages/?_token=aUD5FrdIHGea_F122v5QGs52kTU8aO9l_R9nrssGmUk\" class=\"link\"> Шаблони повідомлень
                                </a>
                              </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"31\" id=\"subtab-AdminReturn\">
                                <a href=\"http://localhost/admin923iptioh/index.php?controller=AdminReturn&amp;token=a50b106c37a9f10502999ee1a73b936f\" class=\"link\"> Повернення товарів
                                </a>
                              </li>

                                                                              </ul>
                                        </li>
                                              
                  
                                                      
                  
                  <li class=\"link-levelone has_submenu\" data-submenu=\"32\" id=\"subtab-AdminStats\">
                    <a href=\"/admin923iptioh/index.php/modules/metrics/legacy/stats?_token=aUD5FrdIHGea_F122v5QGs52kTU8aO9l_R9nrssGmUk\" class=\"link\">
                      <i class=\"material-icons mi-assessment\">assessment</i>
                      <span>
                      Статистика
                      </span>
                                                    <i class=\"material-icons sub-tabs-arrow\">
                                                                    keyboard_arrow_down
                                                            </i>
                                            </a>
                                              <ul id=\"collapse-32\" class=\"submenu panel-collapse\">
                                                      
                        ";
        // line 608
        echo "      
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"142\" id=\"subtab-AdminMetricsLegacyStatsController\">
                                <a href=\"/admin923iptioh/index.php/modules/metrics/legacy/stats?_token=aUD5FrdIHGea_F122v5QGs52kTU8aO9l_R9nrssGmUk\" class=\"link\"> Статистика
                                </a>
                              </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"143\" id=\"subtab-AdminMetricsController\">
                                <a href=\"/admin923iptioh/index.php/modules/metrics?_token=aUD5FrdIHGea_F122v5QGs52kTU8aO9l_R9nrssGmUk\" class=\"link\"> PrestaShop Metrics
                                </a>
                              </li>

                                                                              </ul>
                                        </li>
                              
          
                      
                                          
                    
          
            <li class=\"category-title link-active\" data-submenu=\"42\" id=\"tab-IMPROVE\">
                <span class=\"title\">Параметри</span>
            </li>

                              
                  
                                                      
                                                          
                  <li class=\"link-levelone has_submenu link-active open ul-open\" data-submenu=\"43\" id=\"subtab-AdminParentModulesSf\">
                    <a href=\"/admin923iptioh/index.php/modules/addons/modules/catalog?_token=aUD5FrdIHGea_F122v5QGs52kTU8aO9l_R9nrssGmUk\" class=\"link\">
                      <i class=\"material-icons mi-extension\">extension</i>
                      <span>
                      Модулі";
        // line 643
        echo "
                      </span>
                                                    <i class=\"material-icons sub-tabs-arrow\">
                                                                    keyboard_arrow_up
                                                            </i>
                                            </a>
                                              <ul id=\"collapse-43\" class=\"submenu panel-collapse\">
                                                      
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"48\" id=\"subtab-AdminParentModulesCatalog\">
                                <a href=\"/admin923iptioh/index.php/modules/addons/modules/catalog?_token=aUD5FrdIHGea_F122v5QGs52kTU8aO9l_R9nrssGmUk\" class=\"link\"> Marketplace
                                </a>
                              </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo link-active\" data-submenu=\"44\" id=\"subtab-AdminModulesSf\">
                                <a href=\"/admin923iptioh/index.php/improve/modules/manage?_token=aUD5FrdIHGea_F122v5QGs52kTU8aO9l_R9nrssGmUk\" class=\"link\"> Менеджер модулів
                                </a>
                              </li>

                                                                                                                                                                                          </ul>
                                        </li>
                                              
                  
                                                      
                  
                  <li class=\"link-levelone has_submenu\" data-submenu=\"52\" id=\"subtab-AdminParentThemes\">
                    <a href=\"/ad";
        // line 673
        echo "min923iptioh/index.php/improve/design/themes/?_token=aUD5FrdIHGea_F122v5QGs52kTU8aO9l_R9nrssGmUk\" class=\"link\">
                      <i class=\"material-icons mi-desktop_mac\">desktop_mac</i>
                      <span>
                      Дизайн
                      </span>
                                                    <i class=\"material-icons sub-tabs-arrow\">
                                                                    keyboard_arrow_down
                                                            </i>
                                            </a>
                                              <ul id=\"collapse-52\" class=\"submenu panel-collapse\">
                                                      
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"130\" id=\"subtab-AdminThemesParent\">
                                <a href=\"/admin923iptioh/index.php/improve/design/themes/?_token=aUD5FrdIHGea_F122v5QGs52kTU8aO9l_R9nrssGmUk\" class=\"link\"> Тема та логотип
                                </a>
                              </li>

                                                                                                                                        
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"140\" id=\"subtab-AdminPsMboTheme\">
                                <a href=\"/admin923iptioh/index.php/modules/addons/themes/catalog?_token=aUD5FrdIHGea_F122v5QGs52kTU8aO9l_R9nrssGmUk\" class=\"link\"> Каталог тем
                                </a>
                              </li>

                                                                                  
                              
                                                            
                              <li class=\"";
        // line 702
        echo "link-leveltwo\" data-submenu=\"55\" id=\"subtab-AdminParentMailTheme\">
                                <a href=\"/admin923iptioh/index.php/improve/design/mail_theme/?_token=aUD5FrdIHGea_F122v5QGs52kTU8aO9l_R9nrssGmUk\" class=\"link\"> Тема електронних листів
                                </a>
                              </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"57\" id=\"subtab-AdminCmsContent\">
                                <a href=\"/admin923iptioh/index.php/improve/design/cms-pages/?_token=aUD5FrdIHGea_F122v5QGs52kTU8aO9l_R9nrssGmUk\" class=\"link\"> Сторінки
                                </a>
                              </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"58\" id=\"subtab-AdminModulesPositions\">
                                <a href=\"/admin923iptioh/index.php/improve/design/modules/positions/?_token=aUD5FrdIHGea_F122v5QGs52kTU8aO9l_R9nrssGmUk\" class=\"link\"> Позиції модулів
                                </a>
                              </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"59\" id=\"subtab-AdminImages\">
                                <a href=\"http://localhost/admin923iptioh/index.php?controller=AdminImages&amp;token=e3e18dec20b76dddc1edd070a2b00365\" class=\"link\"> Налаштування зображень
                                </a>
                              </li>

               ";
        // line 731
        echo "                                                                   
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"129\" id=\"subtab-AdminLinkWidget\">
                                <a href=\"/admin923iptioh/index.php/modules/link-widget/list?_token=aUD5FrdIHGea_F122v5QGs52kTU8aO9l_R9nrssGmUk\" class=\"link\"> Список посилань
                                </a>
                              </li>

                                                                              </ul>
                                        </li>
                                              
                  
                                                      
                  
                  <li class=\"link-levelone has_submenu\" data-submenu=\"60\" id=\"subtab-AdminParentShipping\">
                    <a href=\"http://localhost/admin923iptioh/index.php?controller=AdminCarriers&amp;token=d1e0f66725e9f6ea230c5265cf31ec7c\" class=\"link\">
                      <i class=\"material-icons mi-local_shipping\">local_shipping</i>
                      <span>
                      Доставка
                      </span>
                                                    <i class=\"material-icons sub-tabs-arrow\">
                                                                    keyboard_arrow_down
                                                            </i>
                                            </a>
                                              <ul id=\"collapse-60\" class=\"submenu panel-collapse\">
                                                      
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"61\" id=\"subtab-AdminCarriers\">
                                <a href=\"http://localhost/admin923iptioh/index.php?controller=AdminCarriers&amp;token";
        // line 760
        echo "=d1e0f66725e9f6ea230c5265cf31ec7c\" class=\"link\"> Перевізники
                                </a>
                              </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"62\" id=\"subtab-AdminShipping\">
                                <a href=\"/admin923iptioh/index.php/improve/shipping/preferences/?_token=aUD5FrdIHGea_F122v5QGs52kTU8aO9l_R9nrssGmUk\" class=\"link\"> Налаштування
                                </a>
                              </li>

                                                                              </ul>
                                        </li>
                                              
                  
                                                      
                  
                  <li class=\"link-levelone has_submenu\" data-submenu=\"63\" id=\"subtab-AdminParentPayment\">
                    <a href=\"/admin923iptioh/index.php/improve/payment/payment_methods?_token=aUD5FrdIHGea_F122v5QGs52kTU8aO9l_R9nrssGmUk\" class=\"link\">
                      <i class=\"material-icons mi-payment\">payment</i>
                      <span>
                      Оплата
                      </span>
                                                    <i class=\"material-icons sub-tabs-arrow\">
                                                                    keyboard_arrow_down
                                                            </i>
                                            </a>
                                              <ul id=\"collapse-63\" class=\"submenu panel-collapse\">
                                                      
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"64\" id=\"su";
        // line 792
        echo "btab-AdminPayment\">
                                <a href=\"/admin923iptioh/index.php/improve/payment/payment_methods?_token=aUD5FrdIHGea_F122v5QGs52kTU8aO9l_R9nrssGmUk\" class=\"link\"> Платіжні модулі
                                </a>
                              </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"65\" id=\"subtab-AdminPaymentPreferences\">
                                <a href=\"/admin923iptioh/index.php/improve/payment/preferences?_token=aUD5FrdIHGea_F122v5QGs52kTU8aO9l_R9nrssGmUk\" class=\"link\"> Налаштування
                                </a>
                              </li>

                                                                              </ul>
                                        </li>
                                              
                  
                                                      
                  
                  <li class=\"link-levelone has_submenu\" data-submenu=\"66\" id=\"subtab-AdminInternational\">
                    <a href=\"/admin923iptioh/index.php/improve/international/localization/?_token=aUD5FrdIHGea_F122v5QGs52kTU8aO9l_R9nrssGmUk\" class=\"link\">
                      <i class=\"material-icons mi-language\">language</i>
                      <span>
                      Локалізація
                      </span>
                                                    <i class=\"material-icons sub-tabs-arrow\">
                                                                    keyboard_arrow_down
                                                            </i>
                                            </a>
                                              <ul id=\"collapse-66\" class=\"submenu panel-collapse\">
                                                      
     ";
        // line 823
        echo "                         
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"67\" id=\"subtab-AdminParentLocalization\">
                                <a href=\"/admin923iptioh/index.php/improve/international/localization/?_token=aUD5FrdIHGea_F122v5QGs52kTU8aO9l_R9nrssGmUk\" class=\"link\"> Локалізація
                                </a>
                              </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"72\" id=\"subtab-AdminParentCountries\">
                                <a href=\"/admin923iptioh/index.php/improve/international/zones/?_token=aUD5FrdIHGea_F122v5QGs52kTU8aO9l_R9nrssGmUk\" class=\"link\"> Розташування
                                </a>
                              </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"76\" id=\"subtab-AdminParentTaxes\">
                                <a href=\"/admin923iptioh/index.php/improve/international/taxes/?_token=aUD5FrdIHGea_F122v5QGs52kTU8aO9l_R9nrssGmUk\" class=\"link\"> Податки
                                </a>
                              </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"79\" id=\"subtab-AdminTranslations\">
                                <a href=\"/admin923iptioh/index.php/improve/international/translations/settings?_token=aUD5FrdIHGea_F122v5QGs52kTU8aO9l_R9nrssGmUk\" class=\"link\"> Пе�";
        // line 850
        echo "�еклади
                                </a>
                              </li>

                                                                              </ul>
                                        </li>
                                              
                  
                                                      
                  
                  <li class=\"link-levelone has_submenu\" data-submenu=\"144\" id=\"subtab-Marketing\">
                    <a href=\"http://localhost/admin923iptioh/index.php?controller=AdminPsfacebookModule&amp;token=bf4295ae47710cb918d19f5ea95b1631\" class=\"link\">
                      <i class=\"material-icons mi-campaign\">campaign</i>
                      <span>
                      Маркетинг
                      </span>
                                                    <i class=\"material-icons sub-tabs-arrow\">
                                                                    keyboard_arrow_down
                                                            </i>
                                            </a>
                                              <ul id=\"collapse-144\" class=\"submenu panel-collapse\">
                                                      
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"145\" id=\"subtab-AdminPsfacebookModule\">
                                <a href=\"http://localhost/admin923iptioh/index.php?controller=AdminPsfacebookModule&amp;token=bf4295ae47710cb918d19f5ea95b1631\" class=\"link\"> Facebook &amp; Instagram
                                </a>
                              </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"147\" id=\"subtab-AdminPsxMktgWithGoogle";
        // line 882
        echo "Module\">
                                <a href=\"http://localhost/admin923iptioh/index.php?controller=AdminPsxMktgWithGoogleModule&amp;token=f4e9a5d4b44c0028f08d11b65cc7645c\" class=\"link\"> Google
                                </a>
                              </li>

                                                                              </ul>
                                        </li>
                              
          
                      
                                          
                    
          
            <li class=\"category-title\" data-submenu=\"80\" id=\"tab-CONFIGURE\">
                <span class=\"title\">Налаштування</span>
            </li>

                              
                  
                                                      
                  
                  <li class=\"link-levelone has_submenu\" data-submenu=\"81\" id=\"subtab-ShopParameters\">
                    <a href=\"/admin923iptioh/index.php/configure/shop/preferences/preferences?_token=aUD5FrdIHGea_F122v5QGs52kTU8aO9l_R9nrssGmUk\" class=\"link\">
                      <i class=\"material-icons mi-settings\">settings</i>
                      <span>
                      Параметри магазину
                      </span>
                                                    <i class=\"material-icons sub-tabs-arrow\">
                                                                    keyboard_arrow_down
                                                            </i>
                                            </a>
                                              <ul id=\"collapse-81\" class=\"submenu panel-collapse\">
                                                      
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"82\" id=\"subtab-AdminParentPreferences\">
                                <a href=\"/admin923iptioh/index.php/";
        // line 918
        echo "configure/shop/preferences/preferences?_token=aUD5FrdIHGea_F122v5QGs52kTU8aO9l_R9nrssGmUk\" class=\"link\"> Загальні
                                </a>
                              </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"85\" id=\"subtab-AdminParentOrderPreferences\">
                                <a href=\"/admin923iptioh/index.php/configure/shop/order-preferences/?_token=aUD5FrdIHGea_F122v5QGs52kTU8aO9l_R9nrssGmUk\" class=\"link\"> Налаштування замовлень
                                </a>
                              </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"88\" id=\"subtab-AdminPPreferences\">
                                <a href=\"/admin923iptioh/index.php/configure/shop/product-preferences/?_token=aUD5FrdIHGea_F122v5QGs52kTU8aO9l_R9nrssGmUk\" class=\"link\"> Налаштування товарів
                                </a>
                              </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"89\" id=\"subtab-AdminParentCustomerPreferences\">
                                <a href=\"/admin923iptioh/index.php/configure/shop/customer-preferences/?_token=aUD5FrdIHGea_F122v5QGs52kTU8aO9l_R9nrssGmUk\" class=\"link\"> Налаштування клієнта
                                </a>
                              </li>

                                                                                  
      ";
        // line 947
        echo "                        
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"93\" id=\"subtab-AdminParentStores\">
                                <a href=\"/admin923iptioh/index.php/configure/shop/contacts/?_token=aUD5FrdIHGea_F122v5QGs52kTU8aO9l_R9nrssGmUk\" class=\"link\"> Контакти
                                </a>
                              </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"96\" id=\"subtab-AdminParentMeta\">
                                <a href=\"/admin923iptioh/index.php/configure/shop/seo-urls/?_token=aUD5FrdIHGea_F122v5QGs52kTU8aO9l_R9nrssGmUk\" class=\"link\"> Трафік та SEO
                                </a>
                              </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"100\" id=\"subtab-AdminParentSearchConf\">
                                <a href=\"http://localhost/admin923iptioh/index.php?controller=AdminSearchConf&amp;token=61d92f694de994e53c4c60cce8da9f49\" class=\"link\"> Пошук
                                </a>
                              </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"134\" id=\"subtab-AdminGamification\">
                                <a href=\"http://localhost/admin923iptioh/index.php?controller=AdminGamification&amp;token=b2310b76ae06dbab93b84edd01c6f989\" class=\"link\"> Merchant Expertise
                    ";
        // line 975
        echo "            </a>
                              </li>

                                                                              </ul>
                                        </li>
                                              
                  
                                                      
                  
                  <li class=\"link-levelone has_submenu\" data-submenu=\"103\" id=\"subtab-AdminAdvancedParameters\">
                    <a href=\"/admin923iptioh/index.php/configure/advanced/system-information/?_token=aUD5FrdIHGea_F122v5QGs52kTU8aO9l_R9nrssGmUk\" class=\"link\">
                      <i class=\"material-icons mi-settings_applications\">settings_applications</i>
                      <span>
                      Розширені параметри
                      </span>
                                                    <i class=\"material-icons sub-tabs-arrow\">
                                                                    keyboard_arrow_down
                                                            </i>
                                            </a>
                                              <ul id=\"collapse-103\" class=\"submenu panel-collapse\">
                                                      
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"104\" id=\"subtab-AdminInformation\">
                                <a href=\"/admin923iptioh/index.php/configure/advanced/system-information/?_token=aUD5FrdIHGea_F122v5QGs52kTU8aO9l_R9nrssGmUk\" class=\"link\"> Інформація
                                </a>
                              </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"105\" id=\"subtab-AdminPerfo";
        // line 1006
        echo "rmance\">
                                <a href=\"/admin923iptioh/index.php/configure/advanced/performance/?_token=aUD5FrdIHGea_F122v5QGs52kTU8aO9l_R9nrssGmUk\" class=\"link\"> Продуктивність
                                </a>
                              </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"106\" id=\"subtab-AdminAdminPreferences\">
                                <a href=\"/admin923iptioh/index.php/configure/advanced/administration/?_token=aUD5FrdIHGea_F122v5QGs52kTU8aO9l_R9nrssGmUk\" class=\"link\"> Адміністрування
                                </a>
                              </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"107\" id=\"subtab-AdminEmails\">
                                <a href=\"/admin923iptioh/index.php/configure/advanced/emails/?_token=aUD5FrdIHGea_F122v5QGs52kTU8aO9l_R9nrssGmUk\" class=\"link\"> Email
                                </a>
                              </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"108\" id=\"subtab-AdminImport\">
                                <a href=\"/admin923iptioh/index.php/configure/advanced/import/?_token=aUD5FrdIHGea_F122v5QGs52kTU8aO9l_R9nrssGmUk\" class=\"link\"> Імпорт
                                </a>
                              </li>

                                                                                  
                              
              ";
        // line 1037
        echo "                                              
                              <li class=\"link-leveltwo\" data-submenu=\"109\" id=\"subtab-AdminParentEmployees\">
                                <a href=\"/admin923iptioh/index.php/configure/advanced/employees/?_token=aUD5FrdIHGea_F122v5QGs52kTU8aO9l_R9nrssGmUk\" class=\"link\"> Співробітники
                                </a>
                              </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"113\" id=\"subtab-AdminParentRequestSql\">
                                <a href=\"/admin923iptioh/index.php/configure/advanced/sql-requests/?_token=aUD5FrdIHGea_F122v5QGs52kTU8aO9l_R9nrssGmUk\" class=\"link\"> База даних
                                </a>
                              </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"116\" id=\"subtab-AdminLogs\">
                                <a href=\"/admin923iptioh/index.php/configure/advanced/logs/?_token=aUD5FrdIHGea_F122v5QGs52kTU8aO9l_R9nrssGmUk\" class=\"link\"> Журнал подій
                                </a>
                              </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"117\" id=\"subtab-AdminWebservice\">
                                <a href=\"/admin923iptioh/index.php/configure/advanced/webservice-keys/?_token=aUD5FrdIHGea_F122v5QGs52kTU8aO9l_R9nrssGmUk\" class=\"link\"> Вебсервіси
                                </a>
";
        // line 1065
        echo "                              </li>

                                                                                                                                                                                              
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"120\" id=\"subtab-AdminFeatureFlag\">
                                <a href=\"/admin923iptioh/index.php/configure/advanced/feature-flags/?_token=aUD5FrdIHGea_F122v5QGs52kTU8aO9l_R9nrssGmUk\" class=\"link\"> Експериментальні функції
                                </a>
                              </li>

                                                                              </ul>
                                        </li>
                              
          
                  </ul>
  </div>
  
</nav>


<div class=\"header-toolbar d-print-none\">
    
  <div class=\"container-fluid\">

    
      <nav aria-label=\"Breadcrumb\">
        <ol class=\"breadcrumb\">
                      <li class=\"breadcrumb-item\">Менеджер модулів</li>
          
                      <li class=\"breadcrumb-item active\">
              <a href=\"/admin923iptioh/index.php/improve/modules/manage?_token=aUD5FrdIHGea_F122v5QGs52kTU8aO9l_R9nrssGmUk\" aria-current=\"page\">Модулі</a>
            </li>
                  </ol>
      </nav>
    

    <div class=\"title-row\">
      
          <h1 class=\"title\">
            Менеджер модулів          </h1>
      

      
        <div class=\"toolbar-icons\">
          <div class=\"wrapper\">
            
                                                          <a
                  class=\"btn btn-primary pointer\"                  id=\"page-header-desc-configuration-add_module\"
                  href=\"#\"                  title=\"Завантажити модуль\"                  data-toggle=\"pstooltip\"
               ";
        // line 1114
        echo "   data-placement=\"bottom\"                >
                  <i class=\"material-icons\">cloud_upload</i>                  Завантажити модуль
                </a>
                                                                        <a
                  class=\"btn btn-primary pointer\"                  id=\"page-header-desc-configuration-addons_connect\"
                  href=\"#\"                  title=\"Підключитися до магазину Addons Marketplace\"                  data-toggle=\"pstooltip\"
                  data-placement=\"bottom\"                >
                  <i class=\"material-icons\">vpn_key</i>                  Підключитися до магазину Addons Marketplace
                </a>
                                      
            
                              <a class=\"btn btn-outline-secondary btn-help btn-sidebar\" href=\"#\"
                   title=\"Допомога\"
                   data-toggle=\"sidebar\"
                   data-target=\"#right-sidebar\"
                   data-url=\"/admin923iptioh/index.php/common/sidebar/https%253A%252F%252Fhelp.prestashop.com%252Fuk%252Fdoc%252FAdminModules%253Fversion%253D1.7.8.8%2526country%253Duk/%D0%94%D0%BE%D0%BF%D0%BE%D0%BC%D0%BE%D0%B3%D0%B0?_token=aUD5FrdIHGea_F122v5QGs52kTU8aO9l_R9nrssGmUk\"
                   id=\"product_form_open_help\"
                >
                  Допомога
                </a>
                                    </div>
        </div>

      
    </div>
  </div>

  
      <div class=\"page-head-tabs\" id=\"head_tabs\">
      <ul class=\"nav nav-pills\">
                                                                                                                                                                                                                                                                                                                                                                                                    ";
        // line 1144
        echo "                                                                                                                                                                                                                                                                                                          <li class=\"nav-item\">
                    <a href=\"/admin923iptioh/index.php/improve/modules/manage?_token=aUD5FrdIHGea_F122v5QGs52kTU8aO9l_R9nrssGmUk\" id=\"subtab-AdminModulesManage\" class=\"nav-link tab active current\" data-submenu=\"45\">
                      Модулі
                      <span class=\"notification-container\">
                        <span class=\"notification-counter\"></span>
                      </span>
                    </a>
                  </li>
                                                                <li class=\"nav-item\">
                    <a href=\"/admin923iptioh/index.php/improve/modules/alerts?_token=aUD5FrdIHGea_F122v5QGs52kTU8aO9l_R9nrssGmUk\" id=\"subtab-AdminModulesNotifications\" class=\"nav-link tab \" data-submenu=\"46\">
                      Попередження
                      <span class=\"notification-container\">
                        <span class=\"notification-counter\"></span>
                      </span>
                    </a>
                  </li>
                                                                <li class=\"nav-item\">
                    <a href=\"/admin923iptioh/index.php/improve/modules/updates?_token=aUD5FrdIHGea_F122v5QGs52kTU8aO9l_R9nrssGmUk\" id=\"subtab-AdminModulesUpdates\" class=\"nav-link tab \" data-submenu=\"47\">
                      Оновлення
                      <span class=\"notification-container\">
                        <span class=\"notification-counter\"></span>
                      </span>
                    </a>
                  </li>
                                                                                                                                          ";
        // line 1168
        echo "                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                          </ul>
    </div>
  
  <div class=\"btn-floating\">
    <button class=\"btn btn-primary collapsed\" data-toggle=\"collapse\" data-target=\".btn-floating-container\" aria-expanded=\"false\">
      <i class=\"material-icons\">add</i>
    </button>
    <div class=\"btn-floating-container collapse\">
      <div class=\"btn-floating-menu\">
        
                              <a
              class=\"btn btn-floating-item  pointer\"              id=\"page-header-desc-floating-configuration-add_module\"
              href=\"#\"              title=\"Завантажити модуль\"              data-toggle=\"pstooltip\"
              data-placement=\"bottom\"            >
              Завантажити модуль
              <i class=\"material-icons\">cloud_upload</i>            </a>
                                        <a
              class=\"btn btn-floating-item  pointer\"              id=\"page-header-desc-floating-configuration-addons_connect\"
              href=\"#\"              title=\"Підключитися до магазину Addons Mark";
        // line 1186
        echo "etplace\"              data-toggle=\"pstooltip\"
              data-placement=\"bottom\"            >
              Підключитися до магазину Addons Marketplace
              <i class=\"material-icons\">vpn_key</i>            </a>
                  
                              <a class=\"btn btn-floating-item btn-help btn-sidebar\" href=\"#\"
               title=\"Допомога\"
               data-toggle=\"sidebar\"
               data-target=\"#right-sidebar\"
               data-url=\"/admin923iptioh/index.php/common/sidebar/https%253A%252F%252Fhelp.prestashop.com%252Fuk%252Fdoc%252FAdminModules%253Fversion%253D1.7.8.8%2526country%253Duk/%D0%94%D0%BE%D0%BF%D0%BE%D0%BC%D0%BE%D0%B3%D0%B0?_token=aUD5FrdIHGea_F122v5QGs52kTU8aO9l_R9nrssGmUk\"
            >
              Допомога
            </a>
                        </div>
    </div>
  </div>
  <script>
  if (undefined !== mbo) {
    mbo.initialize({
      translations: {
        'Recommended Modules and Services': 'Recommended modules',
        'description': \"Here\\'s a selection of modules,<\\strong> compatible with your store<\\/strong>, to help you achieve your goals\",
        'Close': 'Закрити',
      },
      recommendedModulesUrl: '/admin923iptioh/index.php/modules/addons/modules/recommended?tabClassName=AdminModulesManage&_token=aUD5FrdIHGea_F122v5QGs52kTU8aO9l_R9nrssGmUk',
      shouldAttachRecommendedModulesAfterContent: 0,
      shouldAttachRecommendedModulesButton: 0,
      shouldUseLegacyTheme: 0,
    });
  }
</script>

</div>

<div id=\"main-div\">
          
      <div class=\"content-div  with-tabs\">

        

                                                        
        <div class=\"row \">
          <div class=\"col-sm-12\">
            <div id=\"ajax_confirmation\" class=\"alert alert-success\" style=\"display: none;\"></div>


  ";
        // line 1232
        $this->displayBlock('content_header', $context, $blocks);
        $this->displayBlock('content', $context, $blocks);
        $this->displayBlock('content_footer', $context, $blocks);
        $this->displayBlock('sidebar_right', $context, $blocks);
        echo "

            
          </div>
        </div>

      </div>
    </div>

  <div id=\"non-responsive\" class=\"js-non-responsive\">
  <h1>О ні!</h1>
  <p class=\"mt-3\">
    Мобільна версія сторінки поки що недоступна.
  </p>
  <p class=\"mt-2\">
    Будь ласка використовуйте персональний комп'ютер для перегляду цієї сторінки, поки що вона не адаптована для мобільних пристроїв.
  </p>
  <p class=\"mt-2\">
    Дякуємо.
  </p>
  <a href=\"http://localhost/admin923iptioh/index.php?controller=AdminDashboard&amp;token=f7ef2e878254f43c6924436c4d1d3eee\" class=\"btn btn-primary py-1 mt-3\">
    <i class=\"material-icons\">arrow_back</i>
    Назад
  </a>
</div>
  <div class=\"mobile-layer\"></div>

      <div id=\"footer\" class=\"bootstrap\">
    
</div>
  

      <div class=\"bootstrap\">
      <div class=\"modal fade\" id=\"modal_addons_connect\" tabindex=\"-1\">
\t<div class=\"modal-dialog modal-md\">
\t\t<div class=\"modal-content\">
\t\t\t\t\t\t<div class=\"modal-header\">
\t\t\t\t<button type=\"button\" class=\"close\" data-dismiss=\"modal\">&times;</button>
\t\t\t\t<h4 class=\"modal-title\"><i class=\"icon-puzzle-piece\"></i> <a target=\"_blank\" href=\"https://addons.prestashop.com/?utm_source=back-office&utm_medium=modules&utm_campaign=back-office-UK&utm_content=download\">PrestaShop Addons</a></h4>
\t\t\t</div>
\t\t\t
\t\t\t<div class=\"modal-body\">
\t\t\t\t\t\t<!--start addons login-->
\t\t\t<form id=\"addons_login_form\" method=\"post\" >
\t\t\t\t<div>
\t\t\t\t\t<a href=\"https://addons.prestashop.com/uk/login?email=test%40gmail.com&amp;firstname=Ivan&amp;lastname=Kalincihev&amp;website=http%3A%2F%2Flocalhost%2F&amp;utm_source=back-office&amp;utm_medium=connect-to-addons&amp;utm_campaign=back-office-UK&amp;utm_content=download#createnow\"><img class=\"img-responsive center-block\" src=\"/admin923iptioh/themes/default/img/prestashop-addons-logo.png\" alt=\"Logo PrestaShop Addons\"/></a>
\t\t\t\t\t<h3 class=\"text-";
        // line 1278
        echo "center\">Під'єднайте ваш магазин до PrestaShop Addons для автоматичного імпорту усіх придбаних вами додатків.</h3>
\t\t\t\t\t<hr />
\t\t\t\t</div>
\t\t\t\t<div class=\"row\">
\t\t\t\t\t<div class=\"col-md-6\">
\t\t\t\t\t\t<h4>Ще немає облікового запису?</h4>
\t\t\t\t\t\t<p class='text-justify'>Відкрийте для себе PrestaShop Addons! Перегляньте офіційний майданчик додатків PrestaShop та знайдіть більше 3500 іноваційних модулів і тем що оптимізують коефіцієнт конверсії, підвищують відвідуваність, лояльність покупців та вашу продуктивність</p>
\t\t\t\t\t</div>
\t\t\t\t\t<div class=\"col-md-6\">
\t\t\t\t\t\t<h4>Приєднатися до PrestaShop Addons</h4>
\t\t\t\t\t\t<div class=\"form-group\">
\t\t\t\t\t\t\t<div class=\"input-group\">
\t\t\t\t\t\t\t\t<div class=\"input-group-prepend\">
\t\t\t\t\t\t\t\t\t<span class=\"input-group-text\"><i class=\"icon-user\"></i></span>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t<input id=\"username_addons\" name=\"username_addons\" type=\"text\" value=\"\" autocomplete=\"off\" class=\"form-control ac_input\">
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>
\t\t\t\t\t\t<div class=\"form-group\">
\t\t\t\t\t\t\t<div class=\"input-group\">
\t\t\t\t\t\t\t\t<div class=\"input-group-prepend\">
\t\t\t\t\t\t\t\t\t<span class=\"input-group-text\"><i class=\"icon-key\"></i></span>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t<input id=\"password_addons\" name=\"password_addons\" type=\"password\" value=\"\" autocomplete=\"off\" class=\"form-control ac_input\">
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t<a class=\"btn btn-link float-right _blank\" href=\"//addons.prestashop.com/uk/forgot-your-password\">Я забув пароль</a>
\t\t\t\t\t\t\t<br>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t</div>

\t\t\t\t<div class=\"row row-padding-top\">
\t\t\t\t\t<div class=\"col-md-6\">
\t\t\t\t\t\t<div class=\"form-group\">
\t\t\t\t\t\t\t<a class=\"btn btn-default btn-block btn-lg _blank\" href=\"https://addons.prestashop.com/uk/login?email=test%40gmail.com&amp;firstn";
        // line 1312
        echo "ame=Ivan&amp;lastname=Kalincihev&amp;website=http%3A%2F%2Flocalhost%2F&amp;utm_source=back-office&amp;utm_medium=connect-to-addons&amp;utm_campaign=back-office-UK&amp;utm_content=download#createnow\">
\t\t\t\t\t\t\t\tСтворити обліковий запис
\t\t\t\t\t\t\t\t<i class=\"icon-external-link\"></i>
\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t\t<div class=\"col-md-6\">
\t\t\t\t\t\t<div class=\"form-group\">
\t\t\t\t\t\t\t<button id=\"addons_login_button\" class=\"btn btn-primary btn-block btn-lg\" type=\"submit\">
\t\t\t\t\t\t\t\t<i class=\"icon-unlock\"></i> Увійти
\t\t\t\t\t\t\t</button>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t</div>

\t\t\t\t<div id=\"addons_loading\" class=\"help-block\"></div>

\t\t\t</form>
\t\t\t<!--end addons login-->
\t\t\t</div>


\t\t\t\t\t</div>
\t</div>
</div>

    </div>
  
";
        // line 1340
        $this->displayBlock('javascripts', $context, $blocks);
        $this->displayBlock('extra_javascripts', $context, $blocks);
        $this->displayBlock('translate_javascripts', $context, $blocks);
        echo "</body>";
        echo "
</html>";
    }

    // line 105
    public function block_stylesheets($context, array $blocks = [])
    {
    }

    public function block_extra_stylesheets($context, array $blocks = [])
    {
    }

    // line 1232
    public function block_content_header($context, array $blocks = [])
    {
    }

    public function block_content($context, array $blocks = [])
    {
    }

    public function block_content_footer($context, array $blocks = [])
    {
    }

    public function block_sidebar_right($context, array $blocks = [])
    {
    }

    // line 1340
    public function block_javascripts($context, array $blocks = [])
    {
    }

    public function block_extra_javascripts($context, array $blocks = [])
    {
    }

    public function block_translate_javascripts($context, array $blocks = [])
    {
    }

    public function getTemplateName()
    {
        return "__string_template__d206d11abd8a1a587dc2e041855353ac9be8949a2b72d7b3f457b560d265e5a5";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  1504 => 1340,  1487 => 1232,  1478 => 105,  1469 => 1340,  1439 => 1312,  1403 => 1278,  1351 => 1232,  1303 => 1186,  1283 => 1168,  1257 => 1144,  1225 => 1114,  1174 => 1065,  1144 => 1037,  1111 => 1006,  1078 => 975,  1048 => 947,  1017 => 918,  979 => 882,  945 => 850,  916 => 823,  883 => 792,  849 => 760,  818 => 731,  787 => 702,  756 => 673,  724 => 643,  687 => 608,  655 => 578,  622 => 547,  589 => 516,  558 => 487,  525 => 456,  492 => 425,  461 => 396,  417 => 354,  392 => 331,  343 => 284,  296 => 239,  249 => 194,  232 => 179,  191 => 140,  151 => 105,  127 => 83,  106 => 64,  81 => 41,  39 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Source("", "__string_template__d206d11abd8a1a587dc2e041855353ac9be8949a2b72d7b3f457b560d265e5a5", "");
    }
}
