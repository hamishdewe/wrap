<?php

require_once('wrap.php'); 

// Test strings
$lorem = <<<EOF
Lo   rem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Sem nulla pharetra diam sit amet. Sagittis aliquam malesuada bibendum arcu vitae. Ultrices neque ornare aenean euismod. Nulla pellentesque dignissim enim sit amet venenatis urna cursus eget. Ipsum faucibus vitae aliquet nec ullamcorper sit amet risus. Ut aliquam purus sit amet luctus venenatis lectus. Tortor condimentum lacinia quis vel eros. Urna cursus eget nunc scelerisque. Sit amet tellus cras adipiscing. Accumsan lacus vel facilisis volutpat est velit egestas dui. Et sollicitudin ac orci phasellus egestas tellus rutrum. Et magnis dis parturient montes nascetur ridiculus mus mauris vitae. Mattis aliquam faucibus purus in massa tempor nec feugiat. Elementum curabitur vitae nunc sed velit. Neque volutpat ac tincidunt vitae semper quis lectus.

Curabitur gravida arcu ac tortor dignissim convallis aenean et. Enim tortor at auctor urna nunc id cursus metus. Felis bibendum ut tristique et egestas. Molestie a iaculis at erat pellentesque adipiscing commodo. Commodo nulla facilisi nullam vehicula ipsum a arcu. Tortor dignissim convallis aenean et tortor at risus. Tristique senectus et netus et malesuada. Id ornare arcu odio ut sem nulla pharetra diam sit. Sed risus ultricies tristique nulla aliquet enim tortor at. Augue lacus viverra vitae congue eu consequat ac. Vitae sapien pellentesque habitant morbi tristique. Volutpat est velit egestas dui id ornare arcu. Penatibus et magnis dis parturient montes nascetur ridiculus. Pellentesque elit ullamcorper dignissim cras. Nibh mauris cursus mattis molestie a iaculis at erat pellentesque. Sapien pellentesque habitant morbi tristique. Eget felis eget nunc lobortis mattis aliquam. Ultrices eros in cursus turpis massa tincidunt dui ut.

Massa tincidunt nunc pulvinar sapien et ligula ullamcorper malesuada proin. Id ornare arcu odio ut sem nulla pharetra. Consequat mauris nunc congue nisi. Facilisis mauris sit amet massa vitae tortor. Facilisis volutpat est velit egestas dui. Blandit cursus risus at ultrices mi tempus imperdiet. Vitae tortor condimentum lacinia quis vel eros donec. Odio eu feugiat pretium nibh. Nulla facilisi morbi tempus iaculis urna id volutpat lacus laoreet. Cras pulvinar mattis nunc sed blandit. Tellus in hac habitasse platea dictumst vestibulum. Ut tellus elementum sagittis vitae et leo duis ut. Quis enim lobortis scelerisque fermentum dui faucibus in ornare. Consectetur adipiscing elit pellentesque habitant morbi tristique senectus et. Euismod in pellentesque massa placerat duis ultricies. Id aliquet lectus proin nibh nisl condimentum id.

Morbi blandit cursus risus at ultrices mi tempus. Morbi non arcu risus quis varius quam. In egestas erat imperdiet sed euismod nisi porta. In cursus turpis massa tincidunt dui ut ornare. At augue eget arcu dictum varius duis at consectetur. Massa placerat duis ultricies lacus sed turpis tincidunt id. Quam pellentesque nec nam aliquam sem. Sit amet massa vitae tortor condimentum lacinia quis. Est ante in nibh mauris cursus mattis molestie a iaculis. Interdum consectetur libero id faucibus nisl tincidunt. Lacus luctus accumsan tortor posuere ac ut consequat semper viverra. Interdum velit laoreet id donec ultrices. Mi ipsum faucibus vitae aliquet nec ullamcorper sit amet risus. Sagittis orci a scelerisque purus semper eget duis. Fames ac turpis egestas sed tempus urna et pharetra. Vulputate dignissim suspendisse in est ante in. Duis at tellus at urna condimentum mattis pellentesque. Porta non pulvinar neque laoreet suspendisse interdum. Viverra accumsan in nisl nisi scelerisque eu ultrices vitae auctor.

Porttitor lacus luctus accumsan tortor posuere ac. Sit amet mattis vulputate enim. Consectetur a erat nam at lectus urna duis convallis. Sed odio morbi quis commodo. Vivamus at augue eget arcu dictum varius. Viverra nam libero justo laoreet. Tortor at auctor urna nunc. Facilisis sed odio morbi quis commodo. Consequat ac felis donec et odio pellentesque diam volutpat commodo. Vitae nunc sed velit dignissim sodales ut eu sem integer. Ultrices neque ornare aenean euismod elementum nisi quis. Nunc sed augue lacus viverra. Vel elit scelerisque mauris pellentesque pulvinar pellentesque. Sit amet consectetur adipiscing elit duis tristique. Diam volutpat commodo sed egestas egestas fringilla phasellus faucibus. Egestas erat imperdiet sed euismod nisi porta lorem. Enim lobortis scelerisque fermentum dui faucibus in ornare quam. Mauris rhoncus aenean vel elit scelerisque.
EOF;

$zhongwen = <<<EOF
值行古作人些報明驗史政出臺們一了方來消然，不我際所行邊為方而日養基能德先石代快了，日笑想鄉，人得成爸早，的無真本以，山有作學那為來好經，著特了，創錢的代心，分好情製裡期向像到轉無一華朋務方我來今她直的什好前活星準的人行體不不設。

此電不集團是己間女、處科聞火達投來康元路！能增為樣間，難看育。寫方會商意臉在時民利找爸小民力也美化子適同吸到登中；黃在可工的常農來生時自，好心也城，於山賽制模異會生當裡放下讀得北情；深所間興起家一題而建明頭的什識品背，觀笑主美散，這強形容然絕他子是色歌或度作房家之燈思得利？了部條想動給；當我史信國新英黃了他，於前乎任球美。在意體銷問它式半放向比道電我演的期布好也說種甚應醫做的，多母經他運標果這：麼以了我花賽美語為臺；行加臺國術兒腦我血開話為水氣性常到車多進的帶活樣色有三收母部心是假年藝星這草用以一細……改同以把中待美，位己夫原藥相答信輕如，長建題優產心案外課許現理師相裡友！
EOF;

$arabic = <<<EOF
لكن لا بد أن أوضح لك أن كل هذه الأفكار المغلوطة حول استنكار  النشوة وتمجيد الألم نشأت بالفعل، وسأعرض لك التفاصيل لتكتشف حقيقة وأساس تلك السعادة البشرية، فلا أحد يرفض أو يكره أو يتجنب الشعور بالسعادة، ولكن بفضل هؤلاء الأشخاص الذين لا يدركون بأن السعادة لا بد أن نستشعرها بصورة أكثر عقلانية ومنطقية فيعرضهم هذا لمواجهة الظروف الأليمة، وأكرر بأنه لا يوجد من يرغب في الحب ونيل المنال ويتلذذ بالآلام، الألم هو الألم ولكن نتيجة لظروف ما قد تكمن السعاده فيما نتحمله من كد وأسي.

و سأعرض مثال حي لهذا، من منا لم يتحمل جهد بدني شاق إلا من أجل الحصول على ميزة أو فائدة؟ ولكن من لديه الحق أن ينتقد شخص ما أراد أن يشعر بالسعادة التي لا تشوبها عواقب أليمة أو آخر أراد أن يتجنب الألم الذي ربما تنجم عنه بعض المتعة ؟ 
علي الجانب الآخر نشجب ونستنكر هؤلاء الرجال المفتونون بنشوة اللحظة الهائمون في رغباتهم فلا يدركون ما يعقبها من الألم والأسي المحتم، واللوم كذلك يشمل هؤلاء الذين أخفقوا في واجباتهم نتيجة لضعف إرادتهم فيتساوي مع هؤلاء الذين يتجنبون وينأون عن تحمل الكدح والألم.	       
EOF;

// Run and display test results
echo '<pre>';
echo "Latin:<br>";
echo str_replace('\n', '<br>', wrap($lorem, 100));
echo '<br><br>Lorem Ipsum:<br>';
echo str_replace('\n', '<br>', wrap($zhongwen, 70));
echo '</pre><pre dir="rtl">';
echo ':Arabic<br>';
echo str_replace('\n', '<br>', wrap($arabic, 40));
echo '</pre>';