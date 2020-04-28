<!-- Begin page content -->
<main role="main" class="flex-shrink-0">
  <div class="container">
      <div class="pricing-header px-3 py-3 pb-md-4 mx-auto text-center">
        <h1 class="display-4">Satın Al</h1>
      </div>

      <?php if((!empty($status))): ?>
        <div class="alert alert-info" role="alert">
            <?php echo $status; ?>
        </div>
      <?php endif; ?>

      <div class="alert alert-primary" role="alert">
          Entegrasyonu test etmek için application/controllers/home.php'deki api ve secret key'i giriniz. Sandbox hesabınız yoksa 
          <a href="https://sandbox-merchant.iyzipay.com/auth" target="_blank">https://sandbox-merchant.iyzipay.com/auth</a> adresinden hesap oluşturabilirsiniz.
      </div>

      <div class="card-deck mb-3 text-center">
        <div class="card mb-4 shadow-sm">
          <div class="card-header">
            <h4 class="my-0 font-weight-normal">Starter</h4>
          </div>
          <div class="card-body">
            <h1 class="card-title pricing-card-title">₺5 <small class="text-muted">/ mo</small></h1>
            <ul class="list-unstyled mt-3 mb-4">
              <li>10 users included</li>
              <li>2 GB of storage</li>
              <li>Email support</li>
              <li>Help center access</li>
            </ul>
            <a href="<?php echo site_url('home/payment'); ?>" class="btn btn-lg btn-block btn-primary">Satın Al</a>
          </div>
        </div>
        <div class="card mb-4 shadow-sm">
          <div class="card-header">
            <h4 class="my-0 font-weight-normal">Pro</h4>
          </div>
          <div class="card-body">
            <h1 class="card-title pricing-card-title">₺15 <small class="text-muted">/ mo</small></h1>
            <ul class="list-unstyled mt-3 mb-4">
              <li>20 users included</li>
              <li>10 GB of storage</li>
              <li>Priority email support</li>
              <li>Help center access</li>
            </ul>
            <a href="<?php echo site_url('home/payment'); ?>" class="btn btn-lg btn-block btn-primary">Satın Al</a>
          </div>
        </div>
        <div class="card mb-4 shadow-sm">
          <div class="card-header">
            <h4 class="my-0 font-weight-normal">Enterprise</h4>
          </div>
          <div class="card-body">
            <h1 class="card-title pricing-card-title">₺29 <small class="text-muted">/ mo</small></h1>
            <ul class="list-unstyled mt-3 mb-4">
              <li>30 users included</li>
              <li>15 GB of storage</li>
              <li>Phone and email support</li>
              <li>Help center access</li>
            </ul>
            <a href="<?php echo site_url('home/payment'); ?>" class="btn btn-lg btn-block btn-primary">Satın Al</a>
          </div>
        </div>
      </div>

  </div>
</main>