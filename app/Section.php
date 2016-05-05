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


        //--------------------------------------------------------------

        [
            'id' => 'intro',
            'type' => 'workshop',
            'title' => 'کارگاه لینوکس مقدماتی و شروع کار با لینوکس',
            'presenter' => null,
            'level' => 'شروع کار',
            'date' => '1,2',
            'time' => 'هر دو روز - ۹ تا ۱۲:۳۰',
            'room' => 'سایت کامپیوتر',
            'desc' => 'یک شروع عالی برای کار با سیستم عامل لینوکس. نیاز به کار با سیستم عامل لینوکس و نرم افزار های متن باز هر روز بیشتر از روز دیگر حس می شود، پس اگر شما هم می خواهید با کار با این سیستم عامل آشنا شوید، در این کارگاه ثبت نام کنید. 
شرکت‌کنندگان در روز اول این کارگاه با محیط سیستم عامل لینوکس، محیط‌های گرافیکی و دیگر قابلیت‌های آن آشنا می‌شوند. در روز دوم شرکت‌کنندگان با محیط ترمینال، فایل سیستم لینوکس، پردازش فایل‌های متنی، نصب برنامه‌های مختلف، مدیریت processها، کار با vim و... آشنا می‌شوند. در پایان دو روز ارائه‌ای با عنوان How to Live Happily in Linux خواهیم داشت که به شرکت‌کنندگان می‌آموزد چگونه تمام کارهای روزمره‌ی خود را در لینوکس انجام دهند، بدون این که به سیستم عامل دیگری نیاز داشته باشند.
جهت شرکت در این کارگاه از قسمت ثبت نام وارد شوید.
'
        ],

        //--------------------------------------------------------------


        [
            'id' => 'linux_pro',
            'type' => 'workshop',
            'title' => 'کارگاه لینوکس پیشفرفته',
            'presenter' => 'razmnoosh',
            'level' => 'پیشرفته',
            'date' => '2',
            'time' => 'روز دوم - ۹ تا ۱۲:۳۰',
            'room' => null,
            'desc' => 'کارگاه لینوکس پیشرفته'
        ],


        //--------------------------------------------------------------

        [
            'id' => 'openstack',
            'type' => 'workshop',
            'title' => 'کارگاه Openstack',
            'presenter' => 'pooyan',
            'level' => 'پیشرفته',
            'date' => '2',
            'time' => 'روز دوم - ۹ تا ۱۲:۳۰',
            'room' => 'سایت کامپیوتر',
            'desc' => 'این کارگاه توضیحات معماری یک اُپن‌استک و تنظیمات اولیه از پیاده‌سازی آن به شرکت کنندگان می‌دهد.
توضیحات بیشتر به زودی...
'
        ],


        //--------------------------------------------------------------

        [
            'id' => 'docker-workshop',
            'type' => 'workshop',
            'title' => 'کارگاه داکر و وب سرور',
            'presenter' => 'pooya',
            'level' => 'متوسط',
            'date' => '1',
            'time' => 'روز اول - ۹ تا ۱۲:۳۰',
            'room' => null,
            'desc' => '
                        <h2>کارگاه داکر و وب سرور</h2>
            <div class="col-md-12">
<p>
در سال های اخیر، نیاز به توسعه و به روز رسانی سریع آپدیت های نرم افزاری برای توسعه دهندگان امری ضروری شده.
داکر با معرفی مفهوم "Container" ها پیچیده ترین کانفیگ های سرور و شبکه را به سادگی یک خط دستور کرده است !
این به شما تضمین میکند که همیشه دقیقا همان نسخه از نرم افزاری را که می خواهید می توانید داشته باشید که می خواهید. 
دردسر ها و سردرد ها بابت عدم سازگاری نسخه های مختلف یک کتابخانه را فراموش کنید.
<br>
</p>
<p>
<strong>
در پایان این ارائه انتظار می رود شرکت کنندگان بتوانند یک وب سرور ابری بر پایه داکر را راه اندازی و نگهداری کنند.
</strong> 
</p>
<h2>سرفصل ها:</h2>
<p dir="ltr">

<ul>
<li>An overview of virtualization platforms</li>
<li>What is Cloud ?
<li>Introduction to containers
<li>LXC
<li>The technology: CGroups And Kernel]
<li>Docker
<li>Enterprise DevOps Strategy
<li>The Technology: Docker Engine
<li>Install docker
<li>Basic operation with docker containers
<li>Writing DockerFiles</li>
<li>Docker images</li>
<li>Introduction to layouts</li>
<li>Managing images</li>
<li>Docker Registry + Docker Hub</li>
<li>Container monitoring and metrics</li>
<li>Container migration</li>
<li>Docker Networking       </li>
<li>Containers Storage </li>
<li>Cluster Nodes using Docker swarm</li>
<li>Docker Compose</li>
<li>Building infrastructure upen docker-compose files</li>
<li>Writing simple docker-compose files</li>
<li>Core OS : Introduction & Setup</li>
<li>Google Kubernetes : Introduction</li>
<li>Webservers : Build you nginx stack using docker</li>
</ul>

</p>
 </div>
            '
        ],


        //--------------------------------------------------------------

        [
            'id' => 'golang',
            'type' => 'workshop',
            'title' => 'کارگاه Golang',
            'presenter' => 'parham',
            'level' => 'متوسط',
            'date' => '1',
            'time' => 'روز اول - ۹ تا ۱۲:۳۰',
            'room' => null,
            'desc' => '
            سرفصل‌های ارائه شده در این کارگاه عبارتند از:
<br>
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
            '
        ],

        //--------------------------------------------------------------

        [
            'id' => 'python',
            'type' => 'workshop',
            'title' => 'کارگاه پایتون',
            'presenter' => 'bahar',
            'level' => 'متوسط',
            'date' => '1',
            'time' => 'روز اول - ۹ تا ۱۲:۳۰',
            'room' => null,
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
            'id' => 'network',
            'type' => 'workshop',
            'title' => 'Network & Security',
            'presenter' => 'rahimkhani',
            'level' => 'پیشرفته',
            'date' => '1,2',
            'time' => 'روز اول ۹:۰۰ تا ۱۲:۳۰ و روز دوم ۹:۰۰ تا ۱۰:۳۰',
            'room' => null,
            'desc' => '
     آشنایی با مباحث شبکه و امنیت در سیستم عامل لینوکس هدف اصلی این کارگاه است. در پایان این کارگاه با مفاهیم مدیریت شبکه و اصول پایه‌ای امنیت آشنا خواهید شد.
            <br>
         موضوعات و مباحثی که در این کارگاه مورد بررسی قرار می‌گیرند عبارتند از:
            <br>
<li>Introduction to IP Protocol</li>
<li>IP configuration</li>
<li>Basic IP Troubleshooting tools</li>
<li>Routing</li> 
<li>Introduction to TCP Protocols</li>
<li>Basic TCP Troubleshooting tools: netstat, lsof, …</li>
<li>Netcat</li>
<li>NMAP</li>
<li>Basic socket Programming with Python</li>
<li>SCAPY: Scapy is a powerful interactive packet manipulation program</li>
<li>IPTABLES: Packet Filtering</li>
<li>TCPDUMP, WIRESHARK & TSHARK: Packet Capturing tools</li>
<li>SSH: Secure Shell</li>	
<li>wireshark</li>
<li>Network Scanning</li>
<li>Security Bassics</li>
</br>جهت شرکت در این کارگاه از قسمت ثبت نام وارد شوید.برای کسب اطلاعات بیشتر به آدرس register@linuxfest.ir پیام بفرستید.
         '
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
            'room' => null,
            'desc' => '
            متلب (MATLAB (يک محيط نرم افزاری برای انجام محاسبات عددی و يک زبان برنامه نويسی نسل چهارم می باشد. نسل چهارم بدين معنی است که٬ اين زبان های برنامه نويسی يا محيط های برنامه نويسی برای اهداف خاص طراحی شده اند و از طرفی اين زبان ها هزينه برنامه نويسی٬ زمان توسعه و هزينه توسعه نرم افزار را کاهش می دهند.
            <br>
هدف از کارگاه پيش رو بيان مطالب زير می باشد:
<br>
<strong>بخش اول:</strong>
<li>معرفی نرم افزار و آموزش نصب آن در لينوکس</li>
<li>بيان جزئيات محيط نرم افزار</li>
<li>حل معادلات و ترسيم داده ها</li>
<strong>بخش دوم:</strong>
<li>نحوه ی ايجاد واسط گرافيکی</li> 
<li>معرفی تولباکس های معروف در زمينه هوش مصنوعی</li>
<li>حل چند مسئله يادگيری ماشين</li>
<br>
لازم به ذکر است که مقدمه ی بيان شده بصورت عمومی خواهد بود و مثال های تخصصی در زمينه هوش مصنوعی بيان و حل خواهند شد.
</br>جهت شرکت در این کارگاه از قسمت ثبت نام وارد شوید.برای کسب اطلاعات بیشتر به آدرس register@linuxfest.ir پیام بفرستید.
'
        ],

        //--------------------------------------------------------------

        [
            'id' => 'system_on_a_board',
            'type' => 'workshop',
            'title' => 'Embedded Systems',
            'presenter' => 'abolfazl',
            'level' => 'متوسط',
            'date' => '1',
            'time' => 'روز اول - ۱۰:۴۵ تا ۱۲:۳۰',
            'room' => null,
            'desc' => 'بخش اول: Into to System on a board
کلاس اول این کارگاه به معرفی و آموزش راه اندازی و نصب سیستم یک برد آموزشی ( رسپبری پای) و نکات مهم برای کار در محیط سیستم عامل مخصوص آن میپردازد؛ تا کارآموزان بتوانند برد خود را برای آموزش های ادامه کارگاه آماده کنند.
</br>
مهدی سجادی - مبتدی
</br>
بخش دوم: Embedded Systems: IoT Basics 1
</br>
در ادامه کارگاه Embedded Systems کارآموزان درباره کاربرد های سخت افزاری برد رسپری به عنوان یک سیستم رو برد در تعامل با یک میکرو کنترلر آشنا میشوند.
هدف از این کارگاه آشنایی کاربران با مبانی سیستم‌های درگیر در اینترنت اشیا است که سرفصل‌های ارائه شده در این کارگاه حاصل خروجی پروژه ملی اینترنت اشیای دانشگاه امیرکبیر است. 
</br>
سرفصل‌های این کارگاه عبارتند از: 
<li>1) Introduction to Embedded systems, Arduino and Rasp Berry Pi mini computers</li>
<li>2) Arduino: Hello World (LED on/off – Blink)</li>
<li>3) Arduino: IR detection</li>
<li>4) R­Pi: What are GPIO pins?! (+ GPIO on Python)</li>
<li>5) R­Pi: IR detection</li>
در نهایت شرکت‌کنندگان مفاهیم ابتدایی سیستم‌های نهفته را دریافته و دیدی از دنیای الکترونیک سیستم‌های اینترنت اشیا خواهند داشت.
</br>
ابولفضل دانایی - متوسط
</br>
بخش سوم: Embeded WebServer from Scratch
</br>
مباحث این کارگاه ادامه کارگاه System on a Board‌ می‌باشند. استفاده از ​یک​ سخت‌افزار بومی مبتنی بر پردازنده ARM Cortex-A8​ ​به نام ApexV210 برای راه اندازی یک وب سرور از ابتدا.
</li>مطالب قابل ارائه‌شامل موارد زیر هستند: <li>
</li>آشنایی با سیستم‌های نهفته<li>
</li>آشنایی با مفهوم cross-compile<li>
</li>آشنایی با بوت لودر محبوب u-boot و پیکربندی اولیه و کراس کامپایل​ آن​<li>
</li>آشنایی با کرنل لینوکس، پیکربندی اولیه و کراس کامپایل آن<li>
</li>آشنایی باbusybox و استفاده از آن به عنوان یک root file system ساده<li>
</li>​آماده سازی یک web server کوچک بر روی این پلتفرم​<li>
</li>انتقال برنامه‌ها<li>
</li>بوت کردن سخت‌افزار​ و مشاهده نتیجه​<li>
</br>
مهندس افشین - پیشرفته
</br>

بخش چهارم: Embedded-Systems: IoT Basics 2
</br>
این کلاس ادامه کارگاه‌های System on a Board می‌باشد در این کارگاه کارآموزان با برد خود به همراه یک میکرو کنترلر یک کاربرد ساده از ایده های قابل پیاده سازی در مورد خانه های هوشمند توسط این برد ها را آموزش میبینند. 
</br>
سرفصل‌های این کارگاه عبارتند از: 
<li>1) Introduction to Serial protocol</li>
<li>2) Defining a basic data transmission between R­Pi and Arduino using Serial interface</li>
<li>3) R­Pi checks the IR signal</li>
<li>4) R­Pi decides what to do</li>
<li>5) R­Pi orders Arduino to light on/off</li>
<li>6) Special part: Introduction to RF (wireless) protocols + Testing one of them</li>
</br>
در نهایت شرکت‌کنندگان این کارگاه‌ها توانایی طراحی و پیاده‌سازی یک سیستم واقعی که در خانه‌های هوشمند استفاده می‌شوند را خواهند داشت.

امیر رضایی - متوسط




'
        ],

        [
            'id' => 'setup',
            'type' => 'workshop',
            'title' => 'Setup Workshop',
            'presenter' => null,
            'level' => 'شروع کار',
            'date' => '0',
            'time' => 'روز صفرم - ۱۳:۰۰ تا ۱۸:۰۰',
            'room' => 'سایت کامپیوتر',
            'desc' => 'روز چهارشنبه از ساعت 13 تا 18 کارگاهی برای نصب و راه اندازی سیستم عامل لینوکس خواهیم داشت.ر این کارگاه با روش نصب ubuntu، ساخت فایل سیستم های مورد نیاز و تنظیمات اولیه سیستم عامل  آشنا می شویم.
 حضور در این کارگاه رایگان است و همه می توانند در آن شرکت کنند. همچنین شرکت در این کارگاه به همه شرکت کنندگان کارگاه لینوکس مقدماتی توصیه می شود. جهت شرکت در این کارگاه از قسمت ثبت نام وارد شوید.
جهت کسب اطلاعات بیشتر به آدرس register@linuxfest.ir پیام بفرستید.
'
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
            'level' => 'متوسط',
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
            'title' => 'Cloud Computing III: Docker',
            'presenter' => 'pooya',
            'level' => 'متوسط',
            'date' => '1',
            'time' => 'روز اول - ۱۵:۰۰ تا ۱۵:۳۰',
            'room' => 'سالن آمفی‌تئاتر',
            'desc' => '
            <h2>داکر چیست ؟</h2>
            <div class="col-md-8">
<p>
در سال های اخیر، نیاز به توسعه و به روز رسانی سریع آپدیت های نرم افزاری برای توسعه دهندگان امری ضروری شده.
داکر با معرفی مفهوم "Container" ها پیچیده ترین کانفیگ های سرور و شبکه را به سادگی یک خط دستور کرده است !
این به شما تضمین میکند که همیشه دقیقا همان نسخه از نرم افزاری را که می خواهید می توانید داشته باشید که می خواهید. 
دردسر ها و سردرد ها بابت عدم سازگاری نسخه های مختلف یک کتابخانه را فراموش کنید.
<br>
</p>
<p>
در این ارائه علاوه بر معرفی این تکنولوژی، به این موضوع می پردازیم که 
</p>
<p>
برای اطلاعات بیشتر در مورد این پلتفورم می توانید به این آدرس مراجعه فرمایید:
<a target="_blank" href="https://www.docker.com/what-docker">https://www.docker.com/what-docker</a>
</p>
 </div>
      <div class="col-md-2">
<img src="https://www.docker.com/sites/default/files/what-is-vm-diagram.png" class="image-responsive" width="300px">
</div>
<br>
<div class="col-md-12">
<p>
در این ارائه بعد از معرفی این پلتفرم، به کاربرد های عملی آن و ابزارهایی که استفاده از داکر را برای شرکت ها و Devops ها عملی می کنند می پردازیم.
</p>
</div>
            '
        ],

        //--------------------------------------------------------------

        [
            'id' => 'core_os',
            'type' => 'presentation',
            'title' => 'Cloud Computing IV: CoreOS & C-Config',
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
            'desc' => '
            در این ارائه، قصد داریم کاربردی عملی از داکر در دنیای واقعی را همراه با ابزار های متن باز فوق العاده دیگر به شما معرفی کنیم.
            '
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
            'desc' => '
            در سال های اخیر لینوکس و اوبونتو پیشفرفت های زیادی داشته اند و اوبونتو بر روی دستگاه های قابل حمل از جمله تبلت ها نیز پشتیبانی می شود. در این ارائه جذاب از آقای بهزادی به این موضوع می پردازیم.
            '
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
            'id' => 'docker-netw',
            'type' => 'presentation',
            'title' => 'Low Level Networking Inside Docker',
            'presenter' => 'tim',
            'level' => 'متوسط',
            'date' => '2',
            'time' => 'روز دوم - ۱۵:۳۰ تا ۱۶:۰۰',
            'room' => 'سالن آمفی‌تئاتر',
            'desc' => ''
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
            'desc' => '
            '
        ],

        //--------------------------------------------------------------


    ];

}
