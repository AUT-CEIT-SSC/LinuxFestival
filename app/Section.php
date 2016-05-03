<?php

namespace App;

/**
 * @property mixed id
 * @property mixed type
 * @property mixed title
 * @property mixed presenter
 * @property mixed level
 * @property mixed time
 * @property mixed room
 * @property mixed desc
 */
class Section extends StaticModel
{
    protected $guarded = [];
    
    public static $data = [

        // Workshops

        [
            'id' => 'setup',
            'type' => 'workshop',
            'title' => 'Setup Workshop',
            'presenter' => 'pooya',
            'level' => 'شروع کار',
            'date' => '0',
            'time' => 'روز صفرم - ۱۳:۰۰ تا ۱۸:۰۰',
            'room' => 'سایت کامپیوتر',
            'desc' => '
نصب لینوکس و یک دورهمی با شرکت کنندگان!      '
        ],
        
        //--------------------------------------------------------------
        
        [
            'id' => 'intro',
            'type' => 'workshop',
            'title' => 'Linux Basic',
            'presenter' => 'gholizade',
            'level' => 'شروع کار',
            'date' => '1,2',
            'time' => 'هر دو روز - ۹ تا ۱۲:۳۰',
            'room' => 'سایت کامپیوتر',
            'desc' => '
     شرکت‌کنندگان در روز اول این کارگاه با محیط سیستم عامل لینوکس، محیط‌های گرافیکی و دیگر قابلیت‌های آن آشنا می‌شوند. در روز دوم شرکت‌کنندگان با محیط ترمینال، فایل سیستم لینوکس، پردازش فایل‌های متنی، نصب برنامه‌های مختلف، مدیریت processها، کار با vim و... آشنا می‌شوند. در پایان دو روز ارائه‌ای با عنوان How to Live Happily in Linux خواهیم داشت که به شرکت‌کنندگان می‌آموزد چگونه تمام کارهای روزمره‌ی خود را در لینوکس انجام دهند، بدون این که به سیستم عامل دیگری نیاز داشته باشند.
            '
        ],

        //--------------------------------------------------------------

        [
            'id' => 'openstack',
            'type' => 'workshop',
            'title' => 'OpenStack',
            'presenter' => 'pooyan',
            'level' => 'پیشرفته',
            'date' => '2',
            'time' => 'روز دوم - ۹ تا ۱۲:۳۰',
            'room' => 'سایت کامپیوتر',
            'desc' => 'این کارگاه توضیحات معماری یک اُپن‌استک و تنظیمات اولیه از پیاده‌سازی آن به شرکت کنندگان می‌دهد.
            توضیحات ّیشتر به زودی...'
        ],

        //--------------------------------------------------------------
        [
            'id' => 'network',
            'type' => 'workshop',
            'title' => 'Network & Security',
            'presenter' => 'rahimkhani',
            'level' => 'پیشرفته',
            'date' => '1,2',
            'time' => 'روز اول ۹:۰۰ تا ۱۲:۳۰ و روز دوم ۹:۰۰ تا ۱۰:۳۰',
            'room' => 'بعدا اعلام می‌شود',
            'desc' => '
            این کارگاه به منظور آشنایی هرچه بیشتر شرکت کنندگان با مباحث امنیت در لینوکس است.
            <br>
         موضوعات و مباحثی که در این کارگاه مورد بررسی قرار می‌گیرند عبارتند از:
            <br>
         <li>IP معرفی­ 1</li>
<li>2 ­پيکربندی کارت شبکه</li>
<li>3 ­معرفی ابزارهای نظير Ping و Traceroute</li>
<li>TCP معرفی­ 4</li>
<li>Netcat معرفی­ 5</li>
<li>6 ­کار با Netstat</li>
<li>7 ­برنامه نويسی Socket در پايتون</li>
<li>SCAPY معرفی­8</li>
<li>9 ­معرفی و بکار گيری IPTABLES</li>
         '
        ],

        //--------------------------------------------------------------

        [
            'id' => 'docker',
            'type' => 'workshop',
            'title' => 'Docker',
            'presenter' => 'pooya',
            'level' => 'پیشرفته',
            'date' => '1',
            'time' => 'روز اول - ۹ تا ۱۲:۳۰',
            'room' => 'بعدا اعلام می‌شود',
            'desc' => 'به زودی اعلام می‌شود'
        ],

        //--------------------------------------------------------------

        [
            'id' => 'scientific',
            'type' => 'workshop',
            'title' => 'MATLAB & Scientific Tools',
            'presenter' => 'navid',
            'level' => 'متوسط',
            'date' => '2',
            'time' => 'روز دوم - ۹ تا ۱۲:۳۰',
            'room' => 'بعدا اعلام می‌شود',
            'desc' => '
            متلب (MATLAB (يک محيط نرم افزاری برای انجام محاسبات عددی و يک زبان برنامه نويسی نسل چهارم می باشد. نسل چهارم بدين معنی است که٬ اين زبان های برنامه نويسی يا محيط های برنامه نويسی برای اهداف خاص طراحی شده اند و از طرفی اين زبان ها هزينه برنامه نويسی٬ زمان توسعه و هزينه توسعه نرم افزار را کاهش می دهند.
            <br>
هدف از کارگاه پيش رو بيان مطالب زير می باشد:
<br>
<strong>بخش اول:</strong>
<li>معرفی نرم افزار و آموزش نصب آن در لينوکس</li>
<li>بيان جزئيات محيط نرم افزار</li>
<li>حل معادلات و ترسيم داده ها</li>
<br>
<strong>بخش دوم:</strong>
<li>نحوه ی ايجاد واسط گرافيکی</li> 
<li>معرفی تولباکس های معروف در زمينه هوش مصنوعی</li>
<li>حل چند مسئله يادگيری ماشين</li>
<br>
لازم به ذکر است که مقدمه ی بيان شده بصورت عمومی خواهد بود و مثال های تخصصی در زمينه هوش مصنوعی بيان و حل خواهند شد.
'
        ],

        //--------------------------------------------------------------

        [
            'id' => 'dataware_workshop',
            'type' => 'workshop',
            'title' => 'Data Warehouse Workshop',
            'presenter' => 'afshin',
            'level' => 'متوسط',
            'date' => '2',
            'time' => 'روز دوم - ۹ تا ۱۲:۳۰',
            'room' => 'بعدا اعلام می‌شود',
            'desc' => 'توضیحات متعاقباً اعلام می‌شود...'
        ],

        //--------------------------------------------------------------

        [
            'id' => 'webserver',
            'type' => 'workshop',
            'title' => 'Webservers',
            'presenter' => 'pooya',
            'level' => 'متوسط',
            'date' => '2',
            'time' => 'روز دوم ۹ تا ۱۲:۳۰',
            'room' => 'بعدا اعلام می‌شود',
            'desc' => 'توضیحات متعاقباً اعلام می‌شود...'
        ],

        //--------------------------------------------------------------

        [
            'id' => 'system_on_a_board1',
            'type' => 'workshop',
            'title' => 'System On a Board',
            'presenter' => 'mehdisaj',
            'level' => 'متوسط',
            'date' => '1',
            'time' => 'روز اول - ۹ تا ۱۰:۳۰',
            'room' => 'بعدا اعلام می‌شود',
            'desc' => 'توضیحات متعاقباً اعلام می‌شود...'
        ],

        //--------------------------------------------------------------

        [
            'id' => 'system_on_a_board2',
            'type' => 'workshop',
            'title' => 'Embeded Systems: IoT Basics 2',
            'presenter' => 'abolfazl',
            'level' => 'متوسط',
            'date' => '1',
            'time' => 'روز اول - ۱۰:۴۵ تا ۱۲:۳۰',
            'room' => 'بعدا اعلام می‌شود',
            'desc' => '
            هدف از این کارگاه آشنایی کاربران با مبانی سیستم‌های درگیر در اینترنت اشیا است که سرفصل‌های ارائه شده در این کارگاه حاصل خروجی پروژه ملی اینترنت اشیای دانشگاه امیرکبیر است.
            <br>
            سرفصل‌های این کارگاه عبارتند از:
            <br>
<li>1) Introduction to Embedded systems, Arduino and Rasp Berry Pi mini computers</li>

<li>2) Arduino: Hello World (LED on/off – Blink)</li>

<li>3) Arduino: IR detection</li>

<li>4) R­Pi: What are GPIO pins?! (+ GPIO on Python)</li>

<li>5) R­Pi: IR detection</li>

در نهایت شرکت‌کنندگان مفاهیم ابتدایی سیستم‌های نهفته را دریافته و دیدی از دنیای الکترونیک سیستم‌های اینترنت اشیا خواهند داشت.
            '
        ],

        //--------------------------------------------------------------

        [
            'id' => 'embeded1',
            'type' => 'workshop',
            'title' => 'Embedded WebServer from Scratch',
            'presenter' => 'naser',
            'level' => 'متوسط',
            'date' => '2',
            'time' => 'روز دوم - ۹ تا ۱۰:۳۰',
            'room' => 'بعدا اعلام می‌شود',
            'desc' => '
            مباحث این کارگاه ادامه کارگاه System on a Board‌ می‌باشند.
          استفاده از ​یک​ سخت‌افزار بومی مبتنی بر پردازنده ARM Cortex-A8​ ​به نام ApexV210
<br>
مطالب قابل ارائه‌شامل موارد زیر هستند:
<br>
<li>آشنایی با سیستم‌های نهفته</li>
<li>آشنایی با مفهوم cross-compile</li>
<li>آشنایی با بوت لودر محبوب u-boot و پیکربندی اولیه و کراس کامپایل​ آن​</li>
<li>آشنایی با کرنل لینوکس، پیکربندی اولیه و کراس کامپایل آن</li>
<li>آشنایی باbusybox و استفاده از آن به عنوان یک root file system ساده</li>
<li>​آماده سازی یک web server کوچک بر روی این پلتفرم​</li>
<li>انتقال برنامه‌ها</li>
<li>بوت کردن سخت‌افزار​ و مشاهده نتیجه​</li>'
        ],

        //--------------------------------------------------------------

        [
            'id' => 'embeded2',
            'type' => 'workshop',
            'title' => 'Embeded-Systems: IoT Basics 1',
            'presenter' => 'amir',
            'level' => 'متوسط',
            'date' => '2',
            'time' => 'روز دوم - ۱۰:۴۵ تا ۱۲:۳۰',
            'room' => 'بعدا اعلام می‌شود',
            'desc' => '
            این کارگاه ادامه کارگاه‌های System on a Board و Embeded-Systems: From-Scratch می‌باشد.
            <br>
            سرفصل‌های این کارگاه عبارتند از:
            <br>
<li>1) Introduction to Serial protocol</li>

<li>2) Defining a basic data transmission between R­Pi and Arduino using Serial interface</li>

<li>3) R­Pi checks the IR signal</li>

<li>4) R­Pi decides what to do</li>

<li>5) R­Pi orders Arduino to light on/off</li>

<li>6) Special part: Introduction to RF (wireless) protocols + Testing one of them</li>

<br>

در نهایت شرکت‌کنندگان این کارگاه‌ها توانایی طراحی و پیاده‌سازی یک سیستم واقعی که در خانه‌های هوشمند استفاده می‌شوند را خواهند داشت.
            '
        ],

        //--------------------------------------------------------------

        [
            'id' => 'wireshark',
            'type' => 'workshop',
            'title' => 'Wireshark & TCP/IP Concepts',
            'presenter' => 'khademi',
            'level' => 'متوسط',
            'date' => '1',
            'time' => 'روز دوم - ۱۰:۴۵ تا ۱۲:۳۰',
            'room' => 'بعدا اعلام می‌شود',
            'desc' => '
            در این کارگاه مفاهيم ساختار لايه‌ای شبکه با تمرکز روی مفاهيم ip/tcp و کار با ابزارهايی مانند nmap,wireshark و... بررسی می‌شوند.
            <br>
            سرفصل‌هایی که در این کارگاه ارائه می‌شوند:
            <br>
<h3>1)TCP/IP</h3>
<li>TCP/IP layers</li>
<li>Ports</li>
<li>icmp Protocol</li>
<li>ARP Protocol</li>
<li>Data transfer process</li>
<li>TCP Header</li>
<li>TCP Flags</li>
<li>IP Header</li>
<li>ICMP Header</li>
<li>IP Sec</li>
<h3>2)Network Scanning</h3>
<li>Information Gathering</li>
<li>3 way hand shake</li>
<li>Scan types</li>
<li>Scanning with Nmap</li>
<h3>3)wireshark</h3>
<li>What is wireshark?</li>
<li>Network design</li>
<li>Protocol filter</li>
<li>Port filter</li>
<li>Tcp flags filter</li>
<li>Arp spoofing</li>
<li>Statistics</li>
<li>Hears the sound</li>
<li>Time filter</li>
<li>Show location on map</li>
<li>Country and city filter</li>
            '
        ],

        //--------------------------------------------------------------

        [
            'id' => 'golang',
            'type' => 'workshop',
            'title' => 'GoLang',
            'presenter' => 'parham',
            'level' => 'متوسط',
            'date' => '1',
            'time' => 'روز اول - ۹ تا ۱۲:۳۰',
            'room' => 'بعدا اعلام می‌شود',
            'desc' => '
            سرفصل‌های ارائه شده در این کارگاه عبارتند از:
<br>
<div style="direction: ltr">
<h2>Introduction to GoLang</h2>
<h3>The Go Programming Language</h3>
<h3>Program Elements</h3>
<li>Constants</li>
<li>Variables</li>
<li>Types</li>
<li>Types Declaration</li>
<li>Slices</li>
<li>Pointers</li>
<li>Maps</li>
<li>Statements</li>
<li>Functions</li>
<li>Method</li>
<li>Interface Types</li>
<li>Packages</li>
<h3>Concurrency</h3>
<li>GoRoutine</li>
<li>Channels</li>
<h3>Miscellaneous</h3>
<li>Go Tools</li>
<li>Beehive</li>
</div>
            '
        ],

        //--------------------------------------------------------------

        [
            'id' => 'python',
            'type' => 'workshop',
            'title' => 'Python',
            'presenter' => 'bahar',
            'level' => 'متوسط',
            'date' => '1',
            'time' => 'روز اول - ۹ تا ۱۲:۳۰',
            'room' => 'بعدا اعلام می‌شود',
            'desc' => '
            زبان Python يکی از قدرتمندترين و سريع ترين و در عين حال ساده ترين زبان های برنامه نويسی است که در چندسال اخير٬  

تعداد توسعه دهندگان آن رشد خيره کننده ای داشته است. در حال حاضر زبان پايتون٬ به عنوان مهمترين زبان آکادميک و آموزشی٬ 

در زمينه های گوناگون از کار با الگوريتم های مهم هوش مصنوعی و يادگيری ماشين گرفته٬  تا توسعه دهندگی وب٬  طراحی و 

پياده سازی خزشگرهای وب و پروژه های دانشگاهی به کار ميرود. در اين کارگاه٬  با مهمترين خصوصيات و مزيت های زبان 

٬python دستورات پايه٬ کار با کلاس ها٬  توابع و جنريتورها و برخی از مهمترين کتابخانه ها و چارچوب های مبتنی بر زبان 

پايتون آشنا می شويم و قدرت٬ زيبايی و سادگی اين زبان را تجربه خواهيم کرد.

مهمترين خصوصيات و مزيت های زبان ٬python دستورات پايه٬ کار با کلاس ها٬  توابع و جنريتورها و برخی از مهمترين 

کتابخانه ها و چارچوب های مبتنی بر زبان پايتون آشنا می شويم و قدرت٬ زيبايی و سادگی اين زبان را تجربه خواهيم کرد.
            '
        ],
        
        //--------------------------------------------------------------

        [
            'id' => 'fixit',
            'type' => 'Special',
            'title' => 'FixIT Programming Contest',
            'presenter' => 'pooya',
            'level' => 'پیشرفته',
            'date' => '2',
            'time' => 'روز دوم - ۱۴:۰۰ تا ۱۵:۳۰',
            'room' => 'بعدا اعلام می‌شود',
            'desc' => 'توضیحات متعاقباً اعلام می‌شود...'
        ],

        //--------------------------------------------------------------

        [
            'id' => 'pro',
            'type' => 'workshop',
            'title' => 'Linux Professional',
            'presenter' => 'pooya',
            'level' => 'پیشرفته',
            'date' => '2',
            'time' => 'روز دوم - ۹ تا ۱۲:۳۰',
            'room' => 'بعدا اعلام می‌شود',
            'desc' => 'توضیحات متعاقباً اعلام می‌شود...'
        ],

        // Presentations


        [
            'id' => 'laas',
            'type' => 'presentation',
            'title' => 'Cloud Computing I: IaaS, PaaS, and Iran',
            'presenter' => 'alijavadi',
            'level' => 'پیشرفته',
            'time' => 'روز اول - ۱۴:۰۰ تا ۱۴:۳۰',
            'date' => '1',
            'room' => 'سالن آمفی‌تئاتر',
            'desc' => '
همیشه در دسترس بودن همواره یکی از مهم‌ترین مسائل برای شرکت‌های سرویس‌دهنده در حوزهٔ فناوری اطلاعات بوده است. توسعهٔ نرم‌افزاری و ارتقای سرویس‌هایی که در هر لحظه از شبانه‌روز کاربر دارند چالشی جدی در این زمینه است. در چند سال اخیر با گسترش تکنولوژی‌های کانتینر تحولی گسترده در نحوهٔ نگرش به این مسئله رخ داده است.
<br>
در این بخش از ارائه‌های مربوط به رایانش ابری می‌خواهیم مروری کنیم بر این چالش‌ها و مجموعه روش‌هایی که برای حل این مسئله آمده و بعضاً رفته‌اند.
            '
        ],

        //--------------------------------------------------------------

        [
            'id' => 'kubernetes',
            'type' => 'presentation',
            'title' => 'Cloud Computing II: Kubernetes',
            'presenter' => 'alijavadi',
            'level' => 'پیشرفته',
            'date' => '1',
            'time' => 'روز اول - ۱۴:۳۰ تا ۱۵:۰۰',
            'room' => 'سالن آمفی تئاتر',
            'desc' => '
در میان راه‌حل‌هایی که برای حل موضوع همیشه در دسترس بودن بر اساس کانتینر ارائه شده است، Kubernetes به چند دلیل مورد توجه خیلی از شرکت‌ها قرار گرفته است. Kubernetes در استک تکنولوژی‌های ابری وظایف دو لایهٔ Scheduling و Orchestration را انجام می‌دهد.
<br>
در بخش دوم ارائه‌های مربوط به رایانش ابری می‌خواهیم در مورد نگاه متفاوتی که مهندسین گوگل در حل مسأله داشته‌اند و در پی آن Kubernetes را خلق کرده‌اند صحبت کنیم.
            '
        ],

        //--------------------------------------------------------------

        [
            'id' => 'docker',
            'type' => 'presentation',
            'title' => 'Docker',
            'presenter' => 'pooya',
            'level' => 'متوسط',
            'date' => '1',
            'time' => 'روز اول - ۱۵:۰۰ تا ۱۵:۳۰',
            'room' => 'سالن آمفی‌تئاتر',
            'desc' => 'توضیحات متعاقباً اعلام می‌شود...'
        ],

        //--------------------------------------------------------------

        [
            'id' => 'core_os',
            'type' => 'presentation',
            'title' => 'Cloud Computing III: CoreOS & C-Config',
            'presenter' => 'nasiri',
            'level' => 'متوسط',
            'date' => '1',
            'time' => 'روز اول - ۱۵:۳۰ تا ۱۶:۰۰',
            'room' => 'سالن آمفی‌تئاتر',
            'desc' => '
در بخش اول ارائه‌های مربوط به رایانش ابری برای لایه‌های سخت‌افزار، Virtualization و سیستم عامل چند راه‌کار متداول مطرح شد. یکی از این راه‌کارها استفاده از یک سیستم عامل مینیمال بود. CoreOS هدف خود را چنین قرار داده است.
<br>
در این بخش می‌خواهیم دربارهٔ چند نوآوری CoreOS صحبت کنیم و سپس به سراغ Cloud-Config برویم که هر چند ایده‌اش از CoreOS نبوده است، ولی CoreOS از آن به خوبی بهره برده است.
            '
        ],


        //--------------------------------------------------------------

        [
            'id' => 'good',
            'type' => 'presentation',
            'title' => 'The goodies Everyone Must Have',
            'presenter' => 'taher',
            'level' => 'متوسط',
            'date' => '1',
            'time' => 'روز اول - ۱۶:۰۰ تا ۱۶:۳۰',
            'room' => 'سالن آمفی‌تئاتر',
            'desc' => 'توضیحات متعاقباً اعلام می‌شود...'
        ],

        //--------------------------------------------------------------

        [
            'id' => 'ubuntu_portable',
            'type' => 'presentation',
            'title' => 'Ubuntu on Portable Devices',
            'presenter' => 'danial',
            'level' => 'متوسط',
            'date' => '1',
            'time' => 'روز اول - ۱۶:۳۰ تا ۱۷:۰۰',
            'room' => 'سالن آمفی‌تئاتر',
            'desc' => 'توضیحات متعاقباً اعلام می‌شود...'
        ],

        //--------------------------------------------------------------
        // Discussion Board

        [
            'id' => 'board',
            'type' => 'board',
            'title' => 'Copy Right and Open Source',
            'presenter' => 'danial',
            'level' => 'پیشرفته',
            'date' => '1',
            'time' => 'روز اول - ۱۷:۰۰ تا ۱۸:۰۰',
            'room' => 'سالن آمفی‌تئاتر',
            'desc' => '
            کپی رایت و نقض‌شدن و یا نشدن آن در دنیای متن‌باز همیشه یک مسئله بحث برانگیزی بوده و همچنان هم هست. موضوع کپی لفت در مقابل آزادی تام به تمام مردم جهان داده که در صورت تمایل بتوانند یک برنامه متن‌باز را توسعه دهند.
            <br>
            '
        ],

        //--------------------------------------------------------------

        [
            'id' => 'lowlevel',
            'type' => 'presentation',
            'title' => 'Low Level Networking Inside Docker',
            'presenter' => 'pooya',
            'level' => 'متوسط',
            'date' => '2',
            'time' => 'روز دوم - ۱۵:۳۰ تا ۱۶:۰۰',
            'room' => 'سالن آمفی‌تئاتر',
            'desc' => 'توضیحات متعاقباً اعلام می‌شود...'
        ],

        //--------------------------------------------------------------

        [
            'id' => 'iot',
            'type' => 'presentation',
            'title' => 'Internet of Things and IPv6',
            'presenter' => 'parham',
            'level' => 'پیشرفته',
            'date' => '2',
            'time' => 'روز دوم - ۱۶:۰۰ تا ۱۶:۳۰',
            'room' => 'سالن آمفی‌تئاتر',
            'desc' => 'توضیحات متعاقباً اعلام می‌شود...'
        ],

        //--------------------------------------------------------------

        [
            'id' => 'dataware',
            'type' => 'workshop',
            'title' => 'Data Warehouse',
            'presenter' => 'afshin',
            'level' => 'متوسط',
            'date' => '2',
            'time' => 'روز دوم - ۱۶:۳۰ تا ۱۷:۰۰',
            'room' => 'سالن آمفی‌تئاتر',
            'desc' => 'توضیحات متعاقباً اعلام می‌شود...'
        ],

    ];

}
