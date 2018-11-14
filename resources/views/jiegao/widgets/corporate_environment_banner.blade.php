@php
    // 当banner小于4个时前端轮播图会出现问题，因此在这里手动复制一个banner
    $count = $banners->count();
    if($count < 4){
        for ($i = 1; $i <= 4-$count; $i++) {
            $banners->push($banners[$i-1]);
        }
    }
@endphp
<div class="env_banner">
    <div class="content_box_bg">
        <h2>旭日动态</h2>
        <div class="notice_container">
            <ul class="content_list_bg" id="notice" style="top: 0px;">
                <li>
                  <a title="法学院2017-2018学年综合测评相关评优结果公示" href="/fxy/index.php?s=/home/content/index/id/1746">法学院2017-2018学年综合测评相关评优结果公示</a>
                  <p><span>2018-09-17</span></p>
                </li>
                <li>
                  <a title="法学院2017-2018学年综合测评相关评优结果公示" href="/fxy/index.php?s=/home/content/index/id/1746">法学院2017-2018学年综合测评相关评优结果公示</a>
                  <p><span>2018-09-17</span></p>
                </li>
                <li>
                  <a title="法学院2017-2018学年综合测评相关评优结果公示" href="/fxy/index.php?s=/home/content/index/id/1746">法学院2017-2018学年综合测评相关评优结果公示</a>
                  <p><span>2018-09-17</span></p>
                </li>
                <li>
                  <a title="法学院2017-2018学年综合测评相关评优结果公示" href="/fxy/index.php?s=/home/content/index/id/1746">法学院2017-2018学年综合测评相关评优结果公示</a>
                  <p><span>2018-09-17</span></p>
                </li>
                <li>
                  <a title="法学院2017-2018学年综合测评相关评优结果公示" href="/fxy/index.php?s=/home/content/index/id/1746">法学院2017-2018学年综合测评相关评优结果公示</a>
                  <p><span>2018-09-17</span></p>
                </li>
                <li>
                  <a title="法学院2017-2018学年综合测评相关评优结果公示" href="/fxy/index.php?s=/home/content/index/id/1746">法学院2017-2018学年综合测评相关评优结果公示</a>
                  <p><span>2018-09-17</span></p>
                </li>
            </ul>
        </div>
    </div>
</div>