<?php get_header(); ?>
<main>

  <div class="bg-line"></div>

  <div class="p-under p-thanks">

    <div class="wrap_p-under_mv">
      <h1 class="config con-l">Contact Us</h1>
      <div class="img-box under-kv_geometory"><img src="<?php echo get_template_directory_uri(); ?>/images/common/p-under_geomero.svg" alt=""></div>
    </div>

    <div class="inner">
      <?php if (strpos($_SERVER['REQUEST_URI'], '/en/') !== false) { ?>
        <h2>Thank you very much for your inquiry.</h2>
        <div class="thanks-wrap">
          <p class="text">
            We will check the information you have sent and will contact you shortly.<br>
            We will also send an auto-reply confirmation e-mail to the e-mail address you entered.
          </p>
          <p class="text">
            If you do not receive an e-mail after a while, it is possible that the e-mail address you entered is incorrect or that the e-mail has been sorted into your spam folder,<br>
            If you do not receive an e-mail after a short period of time, the e-mail address you entered may be incorrect or it may have been sorted into your spam folder.<br>
            Please check the above information and contact us again using the form.
          </p>
          <div class="btn-wrap">
            <a class="btn02 config con-re" href="<?php echo home_url('/'); ?>">
              TOP Page
              <svg width="21" height="21" viewBox="0 0 21 21" fill="none" xmlns="http://www.w3.org/2000/svg">
                <circle class="circle-s" cx="10.5" cy="10.5" r="10" stroke="black" />
                <path class="arrow-f" d="M14 10.5L8.75 13.5311L8.75 7.46891L14 10.5Z" fill="black" />
              </svg>
            </a>
          </div>
        </div>
      <?php } else { ?>
        <h2>お問い合わせいただき<br class="u-sp">ありがとうございます。</h2>
        <div class="thanks-wrap">
          <p class="text">
            この度はお問い合わせ頂き誠にありがとうございます。<br>
            お送り頂きました内容を確認の上、折り返しご連絡させて頂きます。<br>
            また、ご入力頂いたメールアドレスへ、自動返信の確認メールをお送りしております。
          </p>
          <p class="text">
            しばらく経ってもメールが届かない場合は、入力頂いたメールアドレスが間違っているか、<br>
            迷惑メールフォルダに振り分けられている可能性がございます。<br>
            以上の内容をご確認の上、お手数ですがもう一度フォームよりお問い合わせいただきますようお願い申し上げます。<br>
          </p>
          <div class="btn-wrap">
            <a class="btn02 config con-re" href="<?php echo home_url('/'); ?>">
              TOP Page
              <svg width="21" height="21" viewBox="0 0 21 21" fill="none" xmlns="http://www.w3.org/2000/svg">
                <circle class="circle-s" cx="10.5" cy="10.5" r="10" stroke="black" />
                <path class="arrow-f" d="M14 10.5L8.75 13.5311L8.75 7.46891L14 10.5Z" fill="black" />
              </svg>
            </a>
          </div>
        </div>
      <?php } ?>

    </div><!-- /.inner -->

  </div><!-- /.p-thanks -->

</main>
<?php get_footer(); ?>