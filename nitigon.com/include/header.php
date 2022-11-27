<!-- Header -->
<header>
    <div class="container">
        <div class="intro-text">
            <div class="intro-lead-in">

                <?php
                    $timezone = date_default_timezone_set('asia/bangkok');
                    $date_h = date('h', time());
                    $date_a = date('a', time());

                    if($date_a == "pm" && $date_h <= 3){echo "สวัสดีตอนบ่าย";}
                    else if($date_a == "pm" && $date_h <= 6){echo "สวัสดีตอนเย็น";}
                    else if($date_a == "pm" && $date_h <= 9){echo "สวัสดีตอนกลางคืน";}
                    else if($date_a == "pm" && $date_h <= 11){echo "สวัสดีตอนดึก";}
                    else if($date_a == "pm" && $date_h == 12){echo "สวัสดีตอนเที่ยงคืน";}
                    else if($date_a == "am" && $date_h <= 4){echo "สวัสดีตอนดึกมาก นอนเถอะ";}
                    else if($date_a == "am" && $date_h <= 7){echo "สวัสดีตอนเช้าตรู่";}
                    else if($date_a == "am" && $date_h <= 10){echo "สวัสดีตอนสาย";}
                    else if($date_a == "am" && $date_h == 11){echo "สวัสดีตอนเกือบเที่ยง";}
                    else if($date_a == "am" && $date_h <= 12){echo "สวัสดีตอนเที่ยง";}

                    echo ThDate();
                ?>

            </div>
            <div class="intro-heading">ผมชื่อ <br>นิธิกร ผดุงสัตย์</div>
            <a href="#skills" class="page-scroll btn btn-xl">เกี่ยวกับผม</a>
            <p id="contactMe"></p>
        </div>
    </div>
</header>

<?php

    function ThDate(){
        $myDATE = date('Y-m-d', time());
        $ThDay = array ( "อาทิตย์", "จันทร์", "อังคาร", "พุธ", "พฤหัส", "ศุกร์", "เสาร์" );
        $ThMonth = array ( "มกราคม", "กุมภาพันธ์", "มีนาคม", "เมษายน","พฤษภาคม", "มิถุนายน", "กรกฏาคม", "สิงหาคม","กันยายน", "ตุลาคม", "พฤศจิกายน", "ธันวาคม" );
        

        $week = date("w",strtotime($myDATE)); 
        $months = date("m",strtotime($myDATE))-1; 
        $day = date("d",strtotime($myDATE)); 
        $years = date("Y",strtotime($myDATE))+543; 
        
        return " วัน$ThDay[$week] 
                ที่ $day  
                เดือน $ThMonth[$months] 
                พ.ศ. $years 🙏" ;
                
    }

?>



<script>
        function contactMe() {
        document.getElementById("contactMe").innerHTML = `
        <h1>
        <a style="color: white;" href="tel:+66622232993">📞 062-223-2993</a><br>
        <a style="color: white;" href="mailto:nitigon.phad@gmail.com">✉️ nitigon.phad@gmail.com</a>
        </h1>
        `;
        }
</script>