<?php
/**
 * Export English lexicon topic
 *
 * @language en
 * @package modx
 * @subpackage lexicon
 */
$_lang['export_site_cacheable'] = 'تضمين الملفات الغيرقابلة للتخزين:';
$_lang['export_site_exporting_document'] = 'تصدير الملف <strong>%s</strong> من <strong>%s</strong><br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<small><i>%s</i>, id %s</small><br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;';
$_lang['export_site_failed'] = '<span style="color:#990000">فشل!</span>';
$_lang['export_site_html'] = 'تصدير الموقع ل HTML';
$_lang['export_site_maxtime'] = 'وقت التصدير الأعظمي:';
$_lang['export_site_maxtime_message'] = 'هنا يمكنك تحديد عدد الثواني التي يحتاجها مودكس  لتصدير الموقع (تجاوز إعدادات PHP). أدخل 0 لوقت غير محدود. يرجى ملاحظة أن وضع 0 أو زمن عالي جداً يمكن أن يؤثر بشكل سلبي على السيرفر لذلك لا ينصح بها.';
$_lang['export_site_message'] = '<p>باستخدام هذه الوظيفة يصبح بإمكانك تصدير الموقع بأكمله لملفات HTML. يرجى الملاحظة،أنه ومع ذلك، سوف تفقد الكثير من وظائف MODX غذا قمت بذلك:</p> <ul><li>لن يتم تسجيل قراءات الصفحة في الملفات المصدرة.</li><li>كتل الكود التفاعلية لن تعمل في الملفات المصدرة</li><li>فقط الوثائق العادية سيتم تصديرها، ولن يتم تصدير روابط الوب.</li><li>قد تفشل عملية التصدير إذا كانت المستندات الخاصة بك تحتوي على كتل كود تقوم بإعادة توجيه الترويسات.</li><li>اعتماداً على كيفية كتابتك للمستندات الخاصة بك، أوراق الأنماط، والصور، تصميم موقع الويب الخاص بك قد يصبح معطوب. لحل هذه المشكلة، يمكنك يمكن حفظ/نقل الملفات المصدرة الخاصة بك إلى نفس الدليل حيث يقع ملف مودكس index.php الرئيسي.</li></ul><p>الرجاء ملء النموذج واضغط \'تصدير\' لبدء عملية التصدير. سيتم حفظ الملفات التي تم إنشاؤها في الموقع الذي تحدده، وكلما أمكن، سيتم استخدام الأسماء المستعارة للمستند كأسماء الملفات. عند تصدير موقع الويب الخاص بك، من الأفضل أن يكون عنصر التهئية بمودكس \'الأسماء المستعارة الودية\' مضبوط إلى \'نعم\'. اعتماداً على حجم الموقع الخاص بك، يستغرق التصدير الوقت.</p><p><em>سيتم الكتابة فوق أي من الملفات الموجودة بالملفات الجديدة إذا كانت أسمائهم متطابقة!</em></p>';
$_lang['export_site_numberdocs'] = '<p><strong>عثر على  %s مستند للتصدير...<strong></p>';
$_lang['export_site_prefix'] = 'بادئة الملف:';
$_lang['export_site_start'] = 'بدء التصدير';
$_lang['export_site_success'] = '<span style="color:#009900">تم بنجاح!</span>';
$_lang['export_site_suffix'] = 'لاحقة الملف:';
$_lang['export_site_target_unwritable'] = 'المجلد الهدف غير قابل للكتابة. الرجاء التأكد من أن الهدف قابل للكتابة، ثم حاول مرة أخرى.';
$_lang['export_site_time'] = 'تم الانتهاء من التصدير. استهلكت عملية التصدير %s ثانية للإكتمال.';