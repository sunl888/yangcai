<div class="bottom_footer">
    <div class="mask"></div>
    <div class="footer_body">
        <div class="container">
            <div class="left">
                <h3>联系我们</h3>
                <!-- <p>{{setting('site_name')}}</p>
                
                <p>邮编：{{ setting('zip_code') }}</p> -->
                <img class="qr_code" src="{!!cdn('jiegao/images/code1.png')!!}" alt="">
                <img class="qr_code" src="{!!cdn('jiegao/images/code2.png')!!}" alt="">
            </div>
            @widget('link', ['type' => 'friendship_links'])
            <div style="clear: both;"></div>
            <div class="copy">
                <p>联系方式： {{ setting('phone') }}  地址：{{ setting('address') }}</p>
                <p>{!! setting('copy_right') !!}</p>
            </div>
        </div>
    </div>
</div>
